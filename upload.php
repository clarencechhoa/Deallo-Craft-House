<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Celina Phang">

    <title>Deallo Craft House</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this templates -->
    <link href="css/small-business.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/small-business.js"></script>
    <script src="vendor/bootstrap/js/jquery.isotope.min.js"></script>
    <script src="strict.js"></script>
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
                        <li><a class="dropdown-item" href="clothes.php">Clothes & Accessories</a></li>
                        <li><a class="dropdown-item" href="#">Jewelleries</a></li>
                        <li><a class="dropdown-item" href="#">Craft Supplies</a></li>
                        <li><a class="dropdown-item" href="#">Bedding & Room Decorations</a></li>
                        <li><a class="dropdown-item" href="#">Soft Toys</a></li>
                        <li><a class="dropdown-item" href="#">Vintage Arts</a></li>
                        <li><a class="dropdown-item" href="#">Wedding Accessories</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            <?php if(isset($_SESSION['seller'])): ?>

                <!--check if it is seller provide this link php *Stephen-->
                <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
            <?php else: ?>

            <?php endif; ?>

                </ul>
                </span>
            </div>

            <!-- Search bar and button -->
            <form class="form-inline search">
                <input class="form-control" type="text" placeholder="Search">
            </form>
            <button class="btn btn-outline-success pull-right searchbtn" type="submit">Search</button>

        </div>

       <!-- using php changing interface before log in and after -->
        <?php if (isset($_SESSION['success'])): ?>
        <!-- Popover for success log in -->
        <data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" title="Welcome <?php echo $_SESSION['success'];?>" data-content='<p id="signup"><a href="index.php?logout="1"""><em>Log out</em></a></p>'>
            </data-container>


            <?php else: ?>

            <!-- Popover for havent login-->
            <data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" title="Login" data-content='<form method="post" action="login.php">
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter email" maxlength="40" id="emailborder" size="25" style="margin-bottom: 10px;" value="<?php if(isset($_COOKIE["saveemail"])) { echo $_COOKIE["saveemail"]; } ?>"/>
                                <input type="password" name="password" class="form-control" placeholder="Password" maxlength="12" id="passborder" size="25" style="margin-bottom: 10px;" value="<?php if(isset($_COOKIE["savepassword"])) { echo $_COOKIE["savepassword"]; } ?>"/>
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember" <?php if(isset($_COOKIE["saveemail"])) {?> checked <?php } ?> >Remember Password</label>
                                <br><br><button type="submit" class="btn btn-success btn-xs" id="loginpopbtn" name="login">Log In</button>
                                <p id="signup"><a href="register.php" target="_blank"><em>Sign Up</em></a></p></form>'>
                </data-container>
                <?php endif; ?>

                <img src="images/login_user.png" alt="user_login" id="login" width="30px" />
    </nav>

    <h2 style="color: black; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 20px">Upload Product</h2>


    <div class="container jumbotron">

        <form method="post" action="list.php" id="eform" enctype="multipart/form-data">
            <?php include('errors.php'); ?>
            <div class="form-group">
                <h4>Product's Categories</h4>
                <div class="row">
                    <div class="col-md-4">
                        <select class="radio-inline" name="productcategories" id="selectedcate">
                            <option value="select">Please Select Product's Category</option>
                            <option value="Clothes & Accessories">Clothes & Accessories</option>
                            <option value="Jewellery">Jewellery</option>
                            <option value="CraftSupplies">Craft Supplies</option>
                            <option value="Bedding & RoomDecoration">Bedding & Room Decoration</option>
                            <option value="SoftToy">Soft Toys</option>
                            <option value="VintageArt">Vintage Art</option>
                            <option value="WeddingAccessories">Wedding Accessories</option>
                        </select>

                    </div>

                </div>
            </div>

            <div class="form-group">
                <h4 for="productname">Product Name</h4>
                <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter your product name">
            </div>

            <div class="form-group">
                <h4 for="productprice">Product Price</h4>
                <input type="text" class="form-control" id="productprice" name="productprice" placeholder="Enter your product price">
            </div>

            <div class="form-group">
                <h4 for="productdesc">Product Description</h4>
                <input type="text" class="form-control" id="productdesc" name="productdesc" placeholder="Enter your product description">
            </div>

            <div class="form-group">
                <h4 for="productimage">Product image</h4>
                <input type="file" id="image" name="image" >

            </div>

            <button type="submit" name="upload" class="btn btn-primary" id="uploadproduct">Upload</button>

            <button type="reset" name="reset" class="btn btn-danger" id="resetproduct">Reset  </button>
        </form>
    </div>


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
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>
