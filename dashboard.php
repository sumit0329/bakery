<?php
// dashboard.php
// No declare(strict_types=1); here to avoid "must be first" issues
// Make sure there is absolutely NOTHING before this opening tag.

require_once 'db.php'; // this file should create $mysqli (or not)

/*
  If db.php sets $mysqli properly it should be an instance of mysqli.
  If it's not present or failed, we avoid fatal errors and show a graceful message.
*/
$db_available = (isset($mysqli) && ($mysqli instanceof mysqli));

/**
 * Safe helper to get a count from a table.
 * If DB isn't available or table missing, returns 0.
 */
function safe_count($m, string $table): int {
    if (!($m instanceof mysqli)) {
        return 0;
    }

    // NOTE: table name is inserted directly; ensure $table is trusted (we control it).
    $sql = "SELECT COUNT(*) FROM `$table`";
    if ($stmt = $m->prepare($sql)) {
        $stmt->execute();
        $stmt->bind_result($cnt);
        $stmt->fetch();
        $stmt->close();
        return (int)$cnt;
    }
    return 0;
}

// Use safe_count even if DB is not available
$products_count  = safe_count($db_available ? $mysqli : null, 'products');
$customers_count = safe_count($db_available ? $mysqli : null, 'customers');
$orders_count    = safe_count($db_available ? $mysqli : null, 'orders');

// Prepare recent orders and low-stock lists only if DB is available
$recent_orders = [];
$low_stock = [];

if ($db_available) {
    // Recent orders (adjust fields/table names to match your schema)
    $recent_sql = "
        SELECT o.id, o.created_at, COALESCE(o.total_amount, 0) AS total_amount, COALESCE(c.name, 'Walk-in') AS customer_name
        FROM orders o
        LEFT JOIN customers c ON o.customer_id = c.id
        ORDER BY o.created_at DESC
        LIMIT 6
    ";
    if ($stmt = $mysqli->prepare($recent_sql)) {
        $stmt->execute();
        $stmt->bind_result($oid, $o_created, $o_total, $c_name);
        while ($stmt->fetch()) {
            $recent_orders[] = [
                'id' => $oid,
                'created_at' => $o_created,
                'total_amount' => $o_total,
                'customer_name' => $c_name
            ];
        }
        $stmt->close();
    }

    // Low-stock products (requires products.stock column)
    $stock_sql = "SELECT id, name, stock FROM products WHERE stock IS NOT NULL AND stock <= 5 ORDER BY stock ASC LIMIT 6";
    if ($stmt = $mysqli->prepare($stock_sql)) {
        $stmt->execute();
        $stmt->bind_result($pid, $pname, $pstock);
        while ($stmt->fetch()) {
            $low_stock[] = ['id' => $pid, 'name' => $pname, 'stock' => $pstock];
        }
        $stmt->close();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard — Bakery</title>

<style>


body { font-family: BrushScriptMT, sans-serif; background:#f7f7f7; padding:30px; }
.container { max-width:420px; margin:0 auto; background:white; padding:20px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
input[type="email"], input[type="password"]{ width:100%; padding:10px; margin:6px 0 12px; box-sizing:border-box;}
button{ width:100%; padding:10px; }
.error{ color:#b00020; margin-bottom:12px; }
.small { font-size:0.9rem; color:#555; margin-top:10px;}
.header {
  padding: 20px;
  text-align: center;
   background-image: url('images/back4.jpg');
     background-size: 40% 100%;
  color: black;
  font-size: 20px;
}
body {
  background-image: url('images/back2.jpg');
}
.nav {
  background-color: salmon;
  overflow: hidden;
}

/* For styling the links inside the navigation bar */
.nav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* For Changing the color of links on hover */
.nav a:hover {
  background-color: #ddd;
  color: black;
}

/* For adding a color to the active/current link */
.nav a.active {
  background-color: #04AA6D;
  color: white;
}

body  {
  background-image: url("images/back2.jpg");
h3 {
            background-color: #d4af37;
            font-size: 30px;
            color: white;
            padding: 15px;
        }

}

/* small inline fallback for DB-warning banner */
.db-warning { background: #fff3cd; border: 1px solid #ffeeba; color: #856404; padding:10px; margin:12px auto; max-width:1100px; border-radius:6px; }
</style>
</head>
<body>
   <div class="header">
  <h1 align=center>
        <img src="images/lastlogo.jpg" alt="Sorry its coming..." height="200" width="400">
    </h1>
  
</div>
<div class ="nav"> 
 <h2> 
        <nav align=center>
            <div>
            <a href="dashboard.php">Home</a>|
            <a href="view_product.php">product</a> |
            <a href="contactus.php">Contact Us</a> |
            <a href="aboutus.php">About Us</a> |
            <a href="login.php">Login</a>
        </nav>
    </h2>
</div>
<header class="topbar">
  <div class="brand">
    <div class="brand-mark" aria-hidden="true">🍞</div>
    <div class="brand-text">
      <h1>Bakery</h1>
      <small class="muted">Welcome — fresh bakes, friendly UI</small>
    </div>
  </div>

  <nav class="nav-right">
    <a class="btn outline" href="login.php">Sign in</a>
    <a class="btn" href="register.php">Register</a>
  </nav>
</header>

<?php if (!$db_available): ?>
  <div class="db-warning">
    <strong>Notice:</strong> Database connection not available. Counts, recent orders and low-stock lists are disabled.
    <br>
    Check your <code>db.php</code> (it should set <code>$mysqli = new mysqli(...)</code>) and ensure credentials are correct.
  </div>
<?php endif; ?>

<main class="container">
  <section class="cards">
    <div class="card">
      <div class="card-title">Products</div>
      <div class="card-value"><?= htmlspecialchars((string)$products_count) ?></div>
      <div class="card-sub">Browse bakery items</div>
    </div>

    <div class="card">
      <div class="card-title">Customers</div>
      <div class="card-value"><?= htmlspecialchars((string)$customers_count) ?></div>
      <div class="card-sub">Dough Getters & walk-ins</div>
    </div>

    <div class="card">
      <div class="card-title">Orders</div>
      <div class="card-value"><?= htmlspecialchars((string)$orders_count) ?></div>
      <div class="card-sub">Recent sales</div>
    </div>

    <a class="card action" href="menu.php">
      <div class="card-title">Our Menu</div>
      <div class="card-value">See</div>
      <div class="card-sub">Public menu / items</div>
    </a>
  </section>

  <section class="grid">
    <div class="panel">
      <h2>Recent orders</h2>
      <?php if (!$db_available): ?>
        <p class="muted">Database unavailable — cannot show recent orders.</p>
      <?php elseif (count($recent_orders) === 0): ?>
        <p class="muted">No recent orders visible publicly.</p>
      <?php else: ?>
        <table class="table">
          <thead><tr><th>#</th><th>Customer</th><th>Created</th><th>Total</th></tr></thead>
          <tbody>
          <?php foreach ($recent_orders as $row): ?>
            <tr>
              <td><?= htmlspecialchars((string)$row['id']) ?></td>
              <td><?= htmlspecialchars($row['customer_name']) ?></td>
              <td><?= htmlspecialchars($row['created_at']) ?></td>
              <td>$<?= number_format((float)$row['total_amount'], 2) ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>

    <div class="panel">
      <h2>Low stock (public)</h2>
      <?php if (!$db_available): ?>
        <p class="muted">Database unavailable — cannot show stock information.</p>
      <?php elseif (count($low_stock) === 0): ?>
        <p class="muted">No low-stock items to show.</p>
      <?php else: ?>
        <ul class="list">
          <?php foreach ($low_stock as $p): ?>
            <li>
              <?= htmlspecialchars($p['name']) ?> <span class="muted">— <?= htmlspecialchars((string)$p['stock']) ?> left</span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <hr>
      <p class="muted small">Register or sign in to manage stock and orders.</p>
    </div>
  </section>
</main>

<footer class="sitefooter">
  <small>© <?= date('Y') ?> Bakery — public homepage.</small>
</footer>
</body>
</html>

