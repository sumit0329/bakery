<?php
include 'db.php'; // your database connection

// Handle order placement
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $product_name = trim($_POST['product_name']);
    $price = floatval($_POST['price']); // total price

    $stmt = $conn->prepare("INSERT INTO order_items (product_id, product_name, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isid", $product_id, $product_name, $quantity, $price);

    if($stmt->execute()){
        $message = "✅ Order placed successfully!";
    } else {
        $message = "❌ Error: ".$stmt->error;
    }
    $stmt->close();
}

// Product list
$products = [
    ["id"=>1, "name"=>"High Fibre White Loaf Bread", "image"=>"pro1.jpg", "price"=>5.95],
    ["id"=>2, "name"=>"White Block Loaf Bread", "image"=>"pro2.jpg", "price"=>3.95],
    ["id"=>3, "name"=>"Round White Roll", "image"=>"pro3.jpg", "price"=>1.95],
    ["id"=>4, "name"=>"White Vienna", "image"=>"pro4.jpg", "price"=>4.95],
    ["id"=>5, "name"=>"Traditional Hot Cross Bun 6 Pack", "image"=>"pro5.jpg", "price"=>6.95],
    ["id"=>6, "name"=>"Chocolate Cake", "image"=>"pro6.jpg", "price"=>15.00],
    ["id"=>7, "name"=>"Red Velvet Cake", "image"=>"pro7.jpg", "price"=>18.00],
    ["id"=>8, "name"=>"Lemon Drizzle Cake", "image"=>"pro8.jpg", "price"=>12.00],
    ["id"=>9, "name"=>"Carrot Cake", "image"=>"pro9.jpg", "price"=>14.00],
    ["id"=>10, "name"=>"Vanilla Cupcakes (6 Pack)", "image"=>"pro10.jpg", "price"=>9.00],
    ["id"=>11, "name"=>"Chocolate Cupcakes (6 Pack)", "image"=>"pro11.jpg", "price"=>10.00],
    ["id"=>12, "name"=>"Assorted Mini Pastries (12 Pack)", "image"=>"pro12.jpg", "price"=>20.00],
    ["id"=>13, "name"=>"Croissant", "image"=>"pro13.jpg", "price"=>3.00],
    ["id"=>14, "name"=>"Almond Croissant", "image"=>"pro14.jpg", "price"=>3.50],
    ["id"=>15, "name"=>"Pain au Chocolat", "image"=>"pro15.jpg", "price"=>3.25],
];

// Fetch order items
$orders_result = $conn->query("SELECT * FROM order_items ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders | Twenty 8 Bakery</title>
    <style>
        body { font-family: Arial; background:#f7f7f7; text-align:center; }
        .header { padding:20px; background:#007BFF; color:#fff; }
        .nav { background:#007BFF; padding:10px; }
        .nav a { color: #fff; margin:0 10px; text-decoration:none; font-weight:bold; }
        .nav a.active { background:#0056b3; padding:5px 10px; border-radius:5px; }
        .product-container { display:grid; grid-template-columns:repeat(auto-fill,minmax(250px,1fr)); gap:20px; width:90%; margin:20px auto; }
        .gallery { background:#fff; padding:10px; border-radius:10px; box-shadow:0 0 8px rgba(0,0,0,0.1); }
        .gallery img { width:100%; height:200px; object-fit:cover; border-radius:5px; }
        .gallery button { margin-top:10px; padding:8px 15px; background:#007BFF; color:#fff; border:none; border-radius:5px; cursor:pointer; }
        .gallery button:hover { background:#0056b3; }
        table { width:90%; margin:20px auto; border-collapse:collapse; background:#fff; }
        th, td { border:1px solid #ddd; padding:10px; text-align:center; }
        th { background:#007BFF; color:#fff; }
        .message { color:green; font-weight:bold; margin:10px 0; }
    </style>
</head>
<body>

<div class="header"><h1>Manage Orders</h1></div>
<div class="nav">
   <a href="admin_dashboard.php">← Back to Dashboard</a>

    
</div>

<?php if(!empty($message)) echo "<div class='message'>$message</div>"; ?>

<h2>Products</h2>
<div class="product-container">
    <?php foreach($products as $p): ?>
    <div class="gallery">
        <img src="images/<?= htmlspecialchars($p['image'] ?? '') ?>" alt="<?= htmlspecialchars($p['name'] ?? '') ?>">
        <div><b><?= htmlspecialchars($p['name'] ?? '') ?></b></div>
        <div><b>$<?= number_format($p['price'],2) ?></b></div>
        <button onclick="orderProduct(<?= $p['id'] ?>, '<?= htmlspecialchars(addslashes($p['name'] ?? '')) ?>', <?= $p['price'] ?>)">Order</button>
    </div>
    <?php endforeach; ?>
</div>

<h2>Order Items</h2>
<?php
if($orders_result && $orders_result->num_rows > 0){
    echo "<table>
            <tr><th>ID</th><th>Product Name</th><th>Quantity</th><th>Total Price</th></tr>";
    while($row = $orders_result->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>".htmlspecialchars($row['product_name'] ?? '')."</td>
                <td>{$row['quantity']}</td>
                <td>\$".number_format($row['price'],2)."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No order items yet.</p>";
}
?>

<form id="orderForm" method="POST" style="display:none;">
    <input type="hidden" name="product_id" id="product_id">
    <input type="hidden" name="product_name" id="product_name">
    <input type="hidden" name="quantity" id="quantity">
    <input type="hidden" name="price" id="price">
</form>

<script>
function orderProduct(id, name, price){
    let qty = prompt("Enter quantity for " + name + ":");
    qty = parseInt(qty);
    if(!isNaN(qty) && qty > 0){
        document.getElementById('product_id').value = id;
        document.getElementById('product_name').value = name;
        document.getElementById('quantity').value = qty;
        document.getElementById('price').value = (price * qty).toFixed(2);
        document.getElementById('orderForm').submit();
    } else {
        alert("Please enter a valid quantity.");
    }
}
</script>

</body>
</html>
