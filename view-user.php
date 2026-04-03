<?php 
    include_once "functions.php";
    get_header();
    get_sidebar();

    // view single user query
    $id = $_GET['v_id'];
    if(isset($id) ){

    $view_user = "SELECT * FROM students WHERE std_id='$id'";
    $view_user_query = mysqli_query($connect, $view_user);

    $row = mysqli_fetch_assoc($view_user_query);
    $name = $row['std_name'];
    $email = $row['std_email'];
    $number = $row['std_number'];
    $username = $row['std_username'];
    } else {
        echo "<h4 class='message_area'> Please select a user first! </h4>";
        get_footer();
        die();
    }
 ?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Personal Information
                </div>
                <div class="col-md-3 text-right">
                <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All User</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-1">
            </div>
            <div class="col-md-9">
            <table class="table table-hover table-striped table-responsive view_table_cus">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><?php echo $name; ?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td><?php echo $number; ?></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td>:</td>
                    <td><?php echo $username; ?></td>
                </tr>
            </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="panel-footer">
        <div class="col-md-4">
            <a href="#" class="btn btn-sm btn-primary">PDF</a>
            <a href="#" class="btn btn-sm btn-success">PRINT</a>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-right">
            
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div><!--col-md-12 end-->


<?php 
    get_footer();
 ?>