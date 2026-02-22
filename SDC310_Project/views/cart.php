<?php include "views/header.php"; ?>

<h2>Shopping Cart</h2>

<?php
if(empty($_SESSION['cart'])){
    echo "Cart is empty.";
}
else{
    foreach($_SESSION['cart'] as $id=>$qty){
        echo "Product #: $id | Quantity: $qty <br>";
    }
}
?>

<?php include "views/footer.php"; ?>

