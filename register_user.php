<?php
session_start();
require 'database.php';


// getting form field values
$name = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone_number = $_POST['number'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);

$red_flag = false;

// validate name
if(!$name){
    $red_flag = true;
    $_SESSION['name_error'] = 'Name cannot be empty!';
}

// validate username
if(!$username){
    $red_flag = true;
    $_SESSION['username_error'] = 'Username cannot be empty!';
}
else {
    $username_format = preg_match('@[a-z]@', $username);

    if(!$username_format) {
        $red_flag = true;
        $_SESSION['username_error'] = "Username must be in all small letters!";
    }
}

// validate email
if(!$email){
    $red_flag = true;
    $_SESSION['email_error'] = 'Email cannot be empty!';
}
else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $red_flag = true;
        $_SESSION['email_error'] = 'Email must be in validate format!';
    }
}

// validate number field
if(!$phone_number){
    $red_flag = true;
    $_SESSION['number_error'] = 'Number cannot be empty!';
}

// validate password
if(!$password) {
    $red_flag = true;
    $_SESSION['pass_error'] = 'Password cannot be empty!';
}
else{

    // set condition for strong password
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $speci_chr = preg_match('@[#,$,%,^,&,*]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if(!$upper) {
        $red_flag = true;
        $_SESSION['pass_error'] = 'At least one character should be uppercase!';
    }
    if(!$lower) {
        $red_flag = true;
        $_SESSION['pass_error'] = 'At least one character should be lowercase!';
    }
    if(!$number) {
        $red_flag = true;
        $_SESSION['pass_error'] = 'At least one character should be number!';
    }
    if(!$speci_chr) {
        $red_flag = true;
        $_SESSION['pass_error'] = 'Password should have atleast one special character!';
    }
    if(strlen($password) < 8 ) {
        $red_flag = true;
        $_SESSION['pass_error'] = 'Password should be atleast 8 characters!';
    }
}


// warning when not validate
if($red_flag){
    header('location: register.php');
}

// when value in valid
else {

    $insert_query = "INSERT INTO students(std_name, std_email, std_number, std_username, std_password)
      VALUES('$name','$email','$phone_number','$username','$after_hash')";
    mysqli_query($connect, $insert_query);


    header('location: register.php');
    $_SESSION['success_message'] = 'Registration Successful!';
}
