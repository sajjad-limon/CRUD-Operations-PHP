<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "user_dashboard";

    $connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if (!$connect) {
    	echo " Database Connection Failed";
    }


 ?>