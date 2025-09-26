<?php
include "db.php";
$result=$conn->query("SELECT * FROM products");
?>
<h2>Products List</h2>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Stock</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["stock"]; ?></td>
</tr>
<?php endwhile; ?>
</table>
.