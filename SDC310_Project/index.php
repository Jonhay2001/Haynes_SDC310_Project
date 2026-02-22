<?php 
require_once "controllers/StoreController.php";

$controller = new StoreController();

$action = $_GET['action'] ?? 'catalog';

switch($action){

    case "add":
        $controller->add($_GET['id']);
    break;

    case "remove":
        $controller->remove($_GET['id']);
    break;

    case "cart":
        $controller->cart();
    break;

    default:
        $controller->catalog();
}
?>
