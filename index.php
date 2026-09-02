<?php
    session_start();
    include_once "functions.php";
    get_header();
    get_sidebar();

    if(!isset($_SESSION['success_login'])){
        header("location: login.php");
    }
 ?>
    <div class="col-md-12">
        <h2 class="home-title">
            Hello User, Welcome to Your Dasboard!
        </h2>
        <h4 class="home-sub-text">
            Navigate to Sidebar for your tasks.
        </h4>

    </div><!--col-md-12 end-->

<?php
    get_footer();
 ?>
