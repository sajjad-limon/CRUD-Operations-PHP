<?php
session_start();
require 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


$select_user = "SELECT COUNT(*) as found FROM students WHERE std_username ='$username'";
$select_query = mysqli_query($connect, $select_user);
$after_assoc = mysqli_fetch_assoc($select_query);

if($after_assoc['found'] == 1){

    $user = "SELECT * FROM students WHERE std_username ='$username'";
    $user_query = mysqli_query($connect, $user);
    $after_assoc_user = mysqli_fetch_assoc($user_query);

    if(password_verify($password, $after_assoc_user['std_password'])){

        $_SESSION['success_login'] = "Login Successfull!";
        header("location: index.php");
    }
    else {
        $_SESSION['wrong_pass'] = "Wrong Password!";
        header("location: login.php");
    }
}
else {
    $_SESSION['invalid_user'] = "Invalid Username!";
    header("location: login.php");
}