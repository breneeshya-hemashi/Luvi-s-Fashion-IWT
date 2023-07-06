<?php
require "connection.php";
session_start();

if(isset($_SESSION["u"])){
    $id = $_SESSION["u"]["id"];
}

$address = $_GET["address"];

if(empty($address)){
    echo "Enter the address";
}else{
    
    Database::iud("UPDATE `user` SET `address` = '".$address."' WHERE `id` = '".$id."'");
    echo "User address inserted successfully";
}

?>