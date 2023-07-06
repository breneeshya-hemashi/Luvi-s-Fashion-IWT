<?php
require "connection.php";
session_start();

$fb = $_GET["fb"];

if(empty($fb)){
    echo "Type your feedback";
}else{
    
    Database::iud("UPDATE `user` SET `feedback` = '".$fb."' WHERE `id` = '".$_SESSION["u"]["id"]."'");
    echo "Successfully submited your feedback";

}

?>