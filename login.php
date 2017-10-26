<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">
<!--        <title>SB Admin - Start Bootstrap Template</title>-->

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this templates -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="css/error.css" rel="stylesheet">

        <!-- Custom styles for this templates -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    </head>

    <body class="bg-dark">

        <div class="row">
            <div class="container col-lg-6 col-md-6 col-md-8 col-xs-12">

                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="login.php">
                            <!-- display validation errors here -->
                   <?php include('errors.php'); ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input required="required" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php if(isset($_COOKIE["saveemail"])) { echo $_COOKIE["saveemail"]; } ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input required="required" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["savepassword"])) { echo $_COOKIE["savepassword"]; } ?>">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remember" <?php if(isset($_COOKIE["saveemail"])) {?> checked <?php } ?> >
                                        Remember Password
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="register.php">Register an Account</a>
                            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
