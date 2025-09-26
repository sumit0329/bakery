<?php
include "db.php";
$orders=$conn->query("SELECT o.id,o.order_date,o.total,c.name as customer FROM orders o JOIN customers c ON o.customer_id=c.id");
?>
<h2>Orders List</h2>
<table border="1">
<tr><th>ID</th><th>Customer</th><th>Date</th><th>Total</th></tr>
<?php while($row=$orders->fetch_assoc()): ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["customer"]; ?></td>
<td><?php echo $row["order_date"]; ?></td>
<td><?php echo $row["total"]; ?></td>
</tr>
<?php endwhile; ?>
</table>
