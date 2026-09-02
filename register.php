<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel : Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>

        <div class="container">

            <div id="signupbox" style=" margin-top:100px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; bottom: 20px;"><a id="signinlink" href="login.php" >Sign In</a></div>
                    </div>

                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" role="form" action="register_user.php" method="POST">

                            <?php if(isset($_SESSION['success_message'])) { ?>
                                <div class="message_area" style="display: block; margin-bottom: 10px;">
                                    <h4 class="text-center text-success"> <?= $_SESSION['success_message'] ?> </h4>
                                  </div>
                            <?php }; unset($_SESSION['success_message']); ?>

                            <div class="form-group">
                                <label for="fullname" class="col-md-3 control-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" style="border-color: <?= isset($_SESSION['name_error']) ? 'red' : ''; ?>" class="form-control" name="fullname" placeholder="Full Name">
                                    <?php
                                        if(isset($_SESSION['name_error'])){ ?>
                                                <span class="text-danger"><?= $_SESSION['name_error']; ?></span>
                                            <?php } unset($_SESSION['name_error']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fullname" class="col-md-3 control-label">UserName</label>
                                <div class="col-md-9">
                                    <input type="text" style="border-color: <?= isset($_SESSION['username_error']) ? 'red' : ''; ?>" class="form-control" name="username" placeholder="Username">
                                    <?php
                                        if(isset($_SESSION['username_error'])){ ?>
                                                <span class="text-danger"><?= $_SESSION['username_error']; ?></span>
                                            <?php } unset($_SESSION['username_error']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" style="border-color: <?= isset($_SESSION['email_error']) ? 'red' : ''; ?>" class="form-control" name="email" placeholder="Email Address">
                                    <?php
                                        if(isset($_SESSION['email_error'])){ ?>
                                                <span class="text-danger"><?= $_SESSION['email_error']; ?></span>
                                            <?php } unset($_SESSION['email_error']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="number" class="col-md-3 control-label">Number</label>
                                <div class="col-md-9">
                                    <input type="text" style="border-color: <?= isset($_SESSION['number_error']) ? 'red' : ''; ?>" class="form-control" name="number" placeholder="Phone Number">
                                    <?php
                                        if(isset($_SESSION['number_error'])){ ?>
                                                <span class="text-danger"><?= $_SESSION['number_error']; ?></span>
                                            <?php } unset($_SESSION['number_error']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input name="password" id="pass_field" style="border-color: <?= isset($_SESSION['pass_error']) ? 'red' : '' ?>" type="password" class="form-control" placeholder="Enter your password"/>
                                    <?php if(isset($_SESSION['pass_error'])){ ?>
                                        <span class="text-danger"> <?= $_SESSION['pass_error'] ?> </span>
                                        <?php } unset($_SESSION['pass_error']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" class="btn btn-info" value="Register">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>