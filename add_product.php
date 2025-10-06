<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $description=$_POST["description"];
    $price=$_POST["price"];
    $stock=$_POST["stock"];
    $sql="INSERT INTO products(name,description,price,stock) VALUES('$name','$description','$price','$stock')";
    if($conn->query($sql)) echo "Product added. <a href='view_products.php'>View Products</a>";
    else echo "Error: ".$conn->error;
}
?>
<form method="POST">
<h2>Add Product</h2>
<input type="text" name="name" placeholder="Product Name" required><br>
<textarea name="description" placeholder="Description"></textarea><br>
<input type="number" step="0.01" name="price" placeholder="Price" required><br>
<input type="number" name="stock" placeholder="Stock Quantity" required><br>
<button type="submit">Add Product</button>
</form>


<!DOCTYPE html>
<html>
<head>
  <title>Bakery Products</title>
</head>
<body>
  <h2>Chocolate Cake</h2>
  <p>Price: $15</p>
  <form action="view_order.php" method="POST">
    <input type="hidden" name="product_id" value="1">
    <input type="hidden" name="quantity" value="1">
    <button type="submit">Buy</button>
  </form>
</body>
</html>
