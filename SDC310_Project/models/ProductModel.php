<?php
require_once "config/database.php";

class ProductModel {

    public function getProducts(){
        global $conn;

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        return $result;
    }
}
?>
