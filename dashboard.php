<?php
declare(strict_types=1);
session_start();

// Protect the page: redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'db.php'; // your DB connection ($mysqli)

// Sanitize/prepare a display name
$user_name = htmlspecialchars($_SESSION['user_name'] ?? 'User', ENT_QUOTES, 'UTF-8');

// Helper to safely fetch a single count
function safe_count(mysqli $m, string $table): int {
    // Note: using backticks for table name - ensure $table is trusted 
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

// Get basic stats 
$products_count  = safe_count($mysqli, 'products');
$customers_count = safe_count($mysqli, 'customers');
$orders_count    = safe_count($mysqli, 'orders');

// Recent orders (assumes orders table has id, created_at, total_amount, customer_id)
$recent_orders = [];
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

// Low-stock products (assumes products.stock exists)
$low_stock = [];
$stock_sql = "SELECT id, name, stock FROM products WHERE stock IS NOT NULL AND stock <= 5 ORDER BY stock ASC LIMIT 6";
if ($stmt = $mysqli->prepare($stock_sql)) {
    $stmt->execute();
    $stmt->bind_result($pid, $pname, $pstock);
    while ($stmt->fetch()) {
        $low_stock[] = ['id' => $pid, 'name' => $pname, 'stock' => $pstock];
    }
    $stmt->close();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard — Twenty Eight Bakery Admin</title>

<style>
    :root{
  --brand: #c62828;    /* warm red accent (bread-friendly) */
  --bg: #f7f3f0;
  --card: #ffffff;
  --muted: #666;
  --radius: 10px;
  --shadow: 0 4px 18px rgba(15,15,15,0.06);
  --accent: #fbeee6;
  --maxw: 1100px;
  --gap: 18px;
  --mono: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}
*{box-sizing:border-box}
body{
  font-family: var(--mono);
  background: linear-gradient(180deg,var(--bg),#fff);
  margin:0;
  color:#222;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}
.topbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:14px 20px;
  background: #fff;
  border-bottom:1px solid #eee;
  box-shadow: var(--shadow);
}
.brand{display:flex;align-items:center;gap:12px}
.brand-mark{font-size:28px}
.brand-text h1{margin:0;font-size:1.1rem;color:var(--brand)}
.brand-text .muted{font-size:0.8rem;color:var(--muted)}

.nav-right{display:flex;align-items:center;gap:10px}
.welcome{margin-right:8px;color:#333;font-size:0.95rem}
.btn{display:inline-block;padding:8px 12px;border-radius:8px;background:var(--brand);color:#fff;text-decoration:none;font-weight:600}
.btn.outline{background:transparent;color:var(--brand);border:1px solid var(--brand);padding:7px 10px}
.btn.tiny{padding:4px 8px;font-size:0.85rem}

/* layout */
.container{max-width:var(--maxw);margin:22px auto;padding:18px}
.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:var(--gap);margin-bottom:20px}
.card{background:var(--card);padding:16px;border-radius:var(--radius);box-shadow:var(--shadow);text-decoration:none;color:inherit;display:flex;flex-direction:column;justify-content:space-between}
.card.action{border:2px dashed var(--accent);text-align:center}
.card-title{font-weight:700;color:#333}
.card-value{font-size:1.6rem;margin-top:8px;color:var(--brand)}
.card-sub{font-size:0.85rem;color:var(--muted);margin-top:6px}

/* two-column grid */
.grid{display:grid;grid-template-columns:2fr 1fr;gap:var(--gap)}
.panel{background:var(--card);padding:16px;border-radius:var(--radius);box-shadow:var(--shadow)}
.table{width:100%;border-collapse:collapse}
.table th,.table td{padding:8px;text-align:left;border-bottom:1px solid #f0f0f0}
.list{list-style:none;padding:0;margin:0}
.list li{padding:8px 0;border-bottom:1px solid #f6f6f6;display:flex;justify-content:space-between;align-items:center}
.tiny{font-size:0.8rem;color:var(--brand);text-decoration:none;margin-left:8px}

/* footer */
.sitefooter{text-align:center;padding:18px;color:var(--muted);font-size:0.9rem;margin-top:30px}

/* responsive */
@media (max-width:900px){
  .grid{grid-template-columns:1fr}
  .nav-right{flex-wrap:wrap}
}

</style>
</head>
<body>
<header class="topbar">
  <div class="brand">
    <div class="brand-mark" aria-hidden="true">🍞</div>
    <div class="brand-text">
      <h1>Bakery Dashboard</h1>
      <small class="muted">Powered by Bakers-style UI</small>
    </div>
  </div>

  <nav class="nav-right">
    <span class="welcome">Hi, <?= $user_name ?></span>
    <a class="btn outline" href="products.php">Products</a>
    <a class="btn outline" href="orders.php">Orders</a>
    <a class="btn outline" href="customers.php">Customers</a>
    <a class="btn" href="logout.php">Log out</a>
  </nav>
</header>

<main class="container">
  <section class="cards">
    <a class="card" href="products.php">
      <div class="card-title">Products</div>
      <div class="card-value"><?= htmlspecialchars((string)$products_count) ?></div>
      <div class="card-sub">Manage bakery items</div>
    </a>

    <a class="card" href="customers.php">
      <div class="card-title">Customers</div>
      <div class="card-value"><?= htmlspecialchars((string)$customers_count) ?></div>
      <div class="card-sub">Dough Getters & more</div>
    </a>

    <a class="card" href="orders.php">
      <div class="card-title">Orders</div>
      <div class="card-value"><?= htmlspecialchars((string)$orders_count) ?></div>
      <div class="card-sub">Recent sales</div>
    </a>

    <a class="card action" href="create_order.php">
      <div class="card-title">Create Order</div>
      <div class="card-value">+</div>
      <div class="card-sub">Quick new sale</div>
    </a>
  </section>

  <section class="grid">
    <div class="panel">
      <h2>Recent orders</h2>
      <?php if (count($recent_orders) === 0): ?>
        <p class="muted">No recent orders found.</p>
      <?php else: ?>
        <table class="table">
          <thead><tr><th>#</th><th>Customer</th><th>Created</th><th>Total</th></tr></thead>
          <tbody>
          <?php foreach ($recent_orders as $row): ?>
            <tr>
              <td><a href="order_view.php?id=<?= urlencode($row['id']) ?>"><?= htmlspecialchars((string)$row['id']) ?></a></td>
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
      <h2>Low stock</h2>
      <?php if (count($low_stock) === 0): ?>
        <p class="muted">No low-stock items.</p>
      <?php else: ?>
        <ul class="list">
          <?php foreach ($low_stock as $p): ?>
            <li>
              <?= htmlspecialchars($p['name']) ?> <span class="muted">— <?= htmlspecialchars((string)$p['stock']) ?> left</span>
              <a class="tiny" href="product_edit.php?id=<?= urlencode($p['id']) ?>">edit</a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <hr>
      <p class="muted small">Tip: click a product to quickly update stock levels.</p>
    </div>
  </section>
</main>

<footer class="sitefooter">
  <small>© <?= date('Y') ?> Bakery — admin dashboard (style inspired by Bakers Delight).</small>
</footer>
</body>
</html>
