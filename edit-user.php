<?php 
    include_once "functions.php";
    get_header();
    get_sidebar();

    // edit user query
    $id = $_GET['e_id'];
    $edit_user = "SELECT * FROM students WHERE std_id='$id'";
    $edit_user_query = mysqli_query($connect, $edit_user);

    $row = mysqli_fetch_assoc($edit_user_query);
    $name = $row['std_name'];
    $username = $row['std_username'];
    $email = $row['std_email'];
    $number = $row['std_number'];


    // update user query
    if(!empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
  
      $update_user = "UPDATE students SET std_name='$name', std_email='$email', std_number='$number' WHERE std_id='$id' ";
      $update_user_query = mysqli_query($connect, $update_user);
  
      if($update_user_query) {
          echo "<h4 class='message_area'> Update user successful! </h4>";
          // header("Location: all-user.php");
      } else {
          echo "<h4 class='message_area'> Update user failed! </h4>";
      }
    }
 ?>

<div class="col-md-12">
  <form class="form-horizontal" action="" method="post">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Update Information
              </div>
              <div class="col-md-3 text-right">
              <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
            </div>
            <div class="clearfix"></div>
        </div>
      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-8">
              <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">UserName</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" value="<?php echo $username;?>" disabled>
            </div>
          </div>                       
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-8">
              <input type="text" name="number" class="form-control" value="<?php echo $number; ?>">
            </div>
          </div>
      </div>
      <div class="panel-footer text-center">
        <button class="btn btn-sm btn-primary">UPDATE</button>
      </div>
    </div>
    </form>
</div><!--col-md-12 end-->

<?php 
    get_footer();
 ?>