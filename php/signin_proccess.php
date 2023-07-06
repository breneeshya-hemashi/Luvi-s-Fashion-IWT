<?php
require "connection.php";
session_start();

$username = $_POST["user_id"];
$password = $_POST["password"];

if(empty($username)){
    echo "Enter the username";
}elseif(empty($password)){
    echo "Enter the password";
}else{
    
    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$username."' AND `password` = '".$password."'");
    $nr = $rs->num_rows;

    if($nr == 1){
        $d = $rs->fetch_assoc();
        $_SESSION["u"] = $d;
        echo "success";
    }else{
        echo "Invalid username or password";
    }

}

?>