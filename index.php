<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this templates -->
    <link href="css/small-business.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/small-business.js"></script>
    <script src="vendor/bootstrap/js/jquery.isotope.min.js"></script>
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <a class="navbar-brand" href="index.php">Deallo Craft House Ltd.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <span class="">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                        <li><a class="dropdown-item" href="#">Categories</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                </ul>
                </span>
            </div>

            <!-- Search bar -->
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Search">
            </form>
            <button class="btn btn-outline-success pull-right" type="submit">Search</button>

        </div>



        <?php if (isset($_SESSION['success'])): ?>
            <!-- Popover for success log in -->
            <data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" title="Welcome" data-content='<p id="signup"><a href="index.php?logout="1"""><em>Log out</em></a></p>'>
        <!-- what to do next when user success log in edit using datacontent -->
            <?php
             unset($_SESSION['success']);
            ?>
            </data-container>

        <?php else: ?>
            <!-- Popover for havent login-->
            <data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" title="Login" data-content='<form>
                                <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" maxlength="40" id="emailborder" size="25" style="margin-bottom: 10px;"/>
                                <input type="password" class="form-control" placeholder="Password" maxlength="12" id="passborder" size="25" style="margin-bottom: 10px;"/>
                                <button type="button" class="btn btn-success btn-xs" id="loginpopbtn"><a href="login.php">Log In</a></button>
                                <p id="signup"><a href="register.php" target="_blank"><em>Sign Up</em></a></p></form>'>
                </data-container>
        <?php endif; ?>

    <img src="images/login_user.png" alt="user_login" id="login" width="30px" />
 </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-lg-8">
                <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <h1>Deallo Craft House</h1>
                <p>Local boutique shop selling the best homemade crafts in Kuching. We provide homemade products in different categories such as clothing, jewellery, handmade items, craft supplies, vintage goods, room decor ans also soft toys.</p>
                <a class="btn btn-primary btn-lg" href="#">Call to Action!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class="card text-white bg-secondary my-4 text-center">
            <div class="card-body">
                <p class="text-white m-0 lead">Have a short glimpse on our 100% handmade crafts from all over the globe</p>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">LATEST</h2>
                        <p class="card-text">Latest products posted by our entrepreneurs from all over the world.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">HOT PICKS</h2>
                        <p class="card-text">Trendy items that are on the best selling rank.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Three</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="row social">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://twitter.com/gsmarena_com" target="_blank"><img src="images/social/twitter.png" alt="twitter" class="img-responsive" id="twitter" /></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://www.facebook.com/gsmarena/" target="_blank"><img src="images/social/facebook.png" alt="facebook" class="img-responsive" id="facebook" /></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="mailto:technelogos@yahoo.com"><img src="images/social/email.png" alt="email" class="img-responsive" id="email"></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://www.instagram.com/phonearena/?hl=en" target="_blank"><img src="images/social/instagram.png" alt="instagram" class="img-responsive" id="instagram" /></a>
            </div>
        </div>
        <br/>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Deallo Craft House Ltd. 2017</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>