<?php
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>
<h2>Welcome <?php echo $_SESSION["user"]; ?></h2>
<a href="add_product.php">Add Product</a> |
<a href="view_products.php">View Products</a> |
<a href="add_customer.php">Add Customer</a> |
<a href="view_customers.php">View Customers</a> |
<a href="create_order.php">Create Order</a> |
<a href="view_orders.php">View Orders</a> |
<a href="logout.php">Logout</a>
