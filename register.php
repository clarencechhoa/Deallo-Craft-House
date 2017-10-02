<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
<!--    <title>SB Admin - Start Bootstrap Template</title>-->

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/error.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    

</head>

<body class="bg-dark">

    <div class="row">
        <div class="container col-lg-6 col-md-6 col-md-8 col-xs-12">

            <div class="card card-register mx-auto mt-5">
                <div class="card-header">
                    Register an Account
                </div>
                <div class="card-body">
                    <form method = "post" action="register.php">
                        <!-- display validation errors here -->
                        <?php include('errors.php'); ?>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputName">First name</label>
                                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter first name" name="f_name">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputLastName">Last name</label>
                                    <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="nameHelp" placeholder="Enter last name" name="l_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_1">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleConfirmPassword">Confirm password</label>
                                    <input type="password" class="form-control" id="exampleConfirmPassword" placeholder="Confirm password" name="password_2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select">Role</label>
                            <select class="form-control" id="selectrole" name="role">
                                <option value="buyer">Buyer</option>
                                <option value="seller">Seller</option>
                            </select>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="login.php">Login your Account</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
