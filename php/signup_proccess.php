<?php

use LDAP\Result;

require "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

// echo $fname;
// echo $lname;
// echo $email;
// echo $contact;
// echo $password;
// echo $confirm_password;

if(empty($fname)){
    echo "Enter the first name";
}else if(empty($lname)){
    echo "Enter the last name";
}else if(empty($email)){
    echo "Enter the email";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email Address";
}else if(empty($contact)){
    echo "Enter the contact number";
}else if(empty($password)){
    echo "Enter the password";
}else if(empty($confirm_password)){
    echo "Enter the confirm password";
}elseif($password != $confirm_password){
    echo "Enter the correct confirm password";
}else{
    
    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."'");
    $nr = $rs->num_rows;

    if($nr == 1){
        echo "Email has already exists";
    }else{

        Database::iud("INSERT INTO `user` (`first_name`,`last_name`,`email`,`contact`,`password`) VALUES ('".$fname."','".$lname."','".$email."','".$contact."','".$password."')");
        echo "User has registered successfully";

    }

}

?>