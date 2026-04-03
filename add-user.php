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
      $password = md5($_POST['pass']);
      $re_password = md5($_POST['re_pass']);

      $insert_query = "INSERT INTO students(std_name,std_email,std_number,std_username,std_password)
      VALUES('$name','$email','$number','$username','$password')";

      if( !empty($name) && !empty($email) && !empty($number) && !empty($password)) {

        if ($password == $re_password) {
          if (mysqli_query($connect, $insert_query)) {
             echo "<h4 class='message_area'> Registration Successfull! </h4>";
          }
    
          }else{
            echo "<h4 class='message_area'> Password Does not Match! </h4>";
          }

      } else {
        echo "<h4 class='message_area'> Please Fiil out all fields! </h4>"; 
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
              <input type="text" name="name" class="form-control" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" name="email" class="form-control" placeholder="">
            </div>
          </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label">Number</label>
            <div class="col-sm-8">
              <input type="number" name="number" class="form-control" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">UserName</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" placeholder="">
            </div>
          </div>

          
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="pass" class="form-control" placeholder="">
            </div>
          </div>

            <div class="form-group">
            <label for="" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" name="re_pass" class="form-control" placeholder="">
            </div>
          </div>
          
          
      </div>
      <div class="panel-footer text-center">
        <button id="register" class="btn btn-sm btn-primary">REGISTRATION</button>
      </div>
    </div>
    </form>
</div><!--col-md-12 end-->
<?php 
    get_footer();
 ?>