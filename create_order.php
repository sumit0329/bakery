<?php
include "db.php";
$customers=$conn->query("SELECT * FROM customers");
$products=$conn->query("SELECT * FROM products");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $customer_id=$_POST["customer_id"];
    $product_ids=$_POST["product_id"];
    $quantities=$_POST["quantity"];
    $total=0;
    foreach($product_ids as $i=>$pid){
        $qty=$quantities[$i];
        $price_row=$conn->query("SELECT price FROM products WHERE id='$pid'")->fetch_assoc();
        $total+=$price_row["price"]*$qty;
    }
    $conn->query("INSERT INTO orders(customer_id,total) VALUES('$customer_id','$total')");
    $order_id=$conn->insert_id;
    foreach($product_ids as $i=>$pid){
        $qty=$quantities[$i];
        $price=$conn->query("SELECT price FROM products WHERE id='$pid'")->fetch_assoc()["price"];
        $conn->query("INSERT INTO order_items(order_id,product_id,quantity,price) VALUES('$order_id','$pid','$qty','$price')");
    }
    echo "Order created. <a href='view_orders.php'>View Orders</a>";
}
?>

<form method="POST">
<h2>Create Order</h2>
<select name="customer_id" required>
<option value="">Select Customer</option>
<?php while($c=$customers->fetch_assoc()): ?>
<option value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option>
<?php endwhile; ?>
</select><br><br>

<?php while($p=$products->fetch_assoc()): ?>
<input type="checkbox" name="product_id[]" value="<?php echo $p['id'];?>"><?php echo $p['name'];?> ($<?php echo $p['price'];?>)
<input type="number" name="quantity[]" min="1" value="1"><br>
<?php endwhile; ?>

<button type="submit">Place Order</button>
</form>
-