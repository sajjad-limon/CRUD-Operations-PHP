<?php 
    include_once "functions.php";
    get_header();
    get_sidebar();

    // delete user query
    $id = $_GET['del_id'];
    $delete_user = "DELETE FROM students WHERE std_id = '$id'";
    $delete_user_query = mysqli_query($connect, $delete_user);

    if($delete_user_query) {
        echo "<h4 class='message_area'> User deleted successfully! </h4>";
        // header("Location: all-user.php");
    }
    else {
        echo "<h4 class='message_area'> User deleted failed! </h4>";
    }
?>


<div class="panel-footer text-center">
    <a href="all-user.php" class="btn btn-sm btn-primary">View All Users</a>
</div>