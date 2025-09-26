<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $sql="INSERT INTO customers(name,email,phone) VALUES('$name','$email','$phone')";
    if($conn->query($sql)) echo "Customer added. <a href='view_customers.php'>View Customers</a>";
    else echo "Error: ".$conn->error;
}
?>
<form method="POST">
<h2>Add Customer</h2>
<input type="text" name="name" placeholder="Customer Name" required><br>
<input type="email" name="email" placeholder="Email" required><br>
<input type="text" name="phone" placeholder="Phone"><br>
<button type="submit">Add Customer</button>
</form>
