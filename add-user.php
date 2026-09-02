<?php
    include_once "functions.php";
    get_header();
    get_sidebar();

// add or create sql query

    if (!empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $username = $_POST['username'];
      $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

      $insert_query = "INSERT INTO students(std_name,std_email,std_number,std_username,std_password)
      VALUES('$name','$email','$number','$username','$password')";

      if( !empty($name) && !empty($email) && !empty($number) && !empty($username) && !empty($password)) {

          if (mysqli_query($connect, $insert_query)) {
             echo "<h4 class='message_area'> Registration Successfull! </h4>";
          }

      } else {
        echo "<h4 class='message_area text-danger'> Please Fiil out all fields! </h4>";
      }
    }
 ?>
<div class="col-md-12">
  <form class="form-horizontal" action="" method="post">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Add Information
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
              <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
          </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label">Number</label>
            <div class="col-sm-8">
              <input type="text" name="number" class="form-control" placeholder="Phone Number">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">UserName</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
          </div>

      </div>
      <div class="panel-footer text-center">
        <button id="register" class="btn btn-sm btn-primary">Register User</button>
      </div>
    </div>
    </form>
</div><!--col-md-12 end-->
<?php
    get_footer();
 ?>