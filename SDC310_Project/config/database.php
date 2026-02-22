<?php

$host = "localhost";
$db = "sdc310_haynes";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Connection failed");
}
?>
