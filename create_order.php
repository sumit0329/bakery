<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        h2 {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            border-radius: 8px;
        }
        form {
            width: 50%;
            margin: 20px auto;
            text-align: left;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<h2>Orders Management</h2>
<a href="admin_dashboard.php">← Back to Dashboard</a>

<form method="POST" action="">
    <label>Product ID:</label>
    <input type="number" name="product_id" required>

    <label>Quantity:</label>
    <input type="number" name="quantity" required>

    <label>Price per item:</label>
    <input type="number" step="0.01" name="price" required>

    <button type="submit" name="place_order">Place Order</button>
</form>

<?php
if (isset($_POST['place_order'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO order_items (product_id, quantity, price)
            VALUES ('$product_id', '$quantity', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Order placed successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

// Show orders
$result = $conn->query("SELECT * FROM order_items");
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Product ID</th><th>Quantity</th><th>Price</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['product_id']}</td><td>{$row['quantity']}</td><td>{$row['price']}</td></tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
