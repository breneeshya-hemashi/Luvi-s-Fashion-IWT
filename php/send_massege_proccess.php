<?php
require "connection.php";

$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$massege = $_POST["massege"];

if(empty($name)){
    echo "Enter your name";
}elseif(empty($address)){
    echo "Enter your address";
}elseif(empty($email)){
    echo "Enter your email";
}elseif(empty($contact)){
    echo "Enter your contact number";
}elseif(empty($massege)){
    echo "Enter your massege";
}else{
    Database::iud("INSERT INTO `massege` (`name`,`address`,`email`,`contact`,`message`) VALUES ('".$name."','".$address."','".$email."','".$contact."','".$massege."')");
    echo "Massege sent successfully";
}

?>