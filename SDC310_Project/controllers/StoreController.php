<?php 
require_once "models/ProductModel.php";

session_start();

class StoreController {

    public function catalog(){
        $model = new ProductModel();
        $products = $model->getProducts();

        include "views/catalog.php";
    }

    public function add($id){
        if(!isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id] = 0;
        }

    
        $_SESSION['cart'][$id]++;

        header("Location:index.php");
    }

    public function remove($id){

        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]--;

            if($_SESSION['cart'][$id] <= 0){
                unset($_SESSION['cart'][$id]);
            }
        }

        header("Location:index.php");
    }

    public function cart(){
        include "views/cart.php";
    }
}
?>
