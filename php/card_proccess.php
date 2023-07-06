<?php
require "connection.php";
session_start();

$card_name = $_POST["card_name"];
$card_number = $_POST["card_number"];
$expire_month = $_POST["card_name"];
$expire_year = $_POST["expire_year"];
$cvv = $_POST["cvv"];

if(empty($card_name)){
    echo "Enter the card name";
}elseif(empty($card_number)){
    echo "Enter the card number";
}elseif(empty($expire_month)){
    echo "Enter the expire month";
}elseif(empty($expire_year)){
    echo "Enter the expire year";
}elseif(empty($cvv)){
    echo "Enter the cvv number";
}else{
    
    Database::iud("INSERT INTO `payment` (`card_name`,`card_number`,`expire_month`,`expire_year`,`cvv`) VALUES ('".$card_name."','".$card_number."','".$expire_month."','".$expire_year."','".$cvv."')");
    Database::iud("UPDATE `user` SET `payment_id` = LAST_INSERT_ID() WHERE `id` = '".$_SESSION["u"]["id"]."'");
    $rs = Database::search("SELECT * FROM `payment` WHERE `card_number` = '".$card_number."'");
    $d = $rs->fetch_assoc();
    $_SESSION["c"] = $d;
    echo "Payment details updated successfully";

}

?>