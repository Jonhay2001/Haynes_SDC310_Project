<?php include "views/header.php"; ?>

<h2>Product Catalog</h2>

<table> 
<tr> 
<th>ID</th> 
<th>Name</th>
<th>Description</th>
<th>In Cart</th>
<th>Actions</th>
</tr> 

<?php while($row=$products->fetch_assoc()):

$id = $row['ProductNo'];
$qty = $_SESSION['cart'][$id] ?? 0;
?>

<tr>
<td><?=$row['ProductId']?></td>
<td><?=$row['ProductName']?></td>
<td><?=$row['ProductDescription']?></td>
<td><?=$qty?></td>

<td> 
<a href="index.php?action=add&id=<?=$id?>">Add</a>
<a href="index.php?action=remove&id=<?=$id?>">Remove</a>
</td>
</tr>

<?php endwhile; ?>
</table>

</php include "views/footer.php"; ?>


