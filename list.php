<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="home page">
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
</head>

<body>

    <?php

    $productcate1 =$_POST["productcategories"];
    $productname1 = $_POST["productname"];
    $productprice1 =$_POST["productprice"];
    $productdesc1 =$_POST["productdesc"];
    $image_name = $_FILES["productimage"]['name'];

    ?>

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
                        <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
                </ul>
                </span>
            </div>

            <!-- Search bar -->
            <form class="form-inline search">
                <input class="form-control" type="text" placeholder="Search">
            </form>
            <button class="btn btn-outline-success pull-right searchbtn" type="submit">Search</button>

        </div>

        <!-- Popover -->
        <a href="#" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" title="Login" data-content='<form>
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" maxlength="40" id="emailborder" size="25" style="margin-bottom: 10px;"/>
                            <input type="password" class="form-control" placeholder="Password" maxlength="12" id="passborder" size="25" style="margin-bottom: 10px;"/>
                            <button type="button" class="btn btn-success btn-xs" id="loginpopbtn"><a href="">Log In</a></button>
                            <p id="signup"><a href="register.php" target="_blank"><em>Sign Up</em></a></p></form>'>
        <img src="images/login_user.png" alt="user_login" id="login" width="30px" />
        </a>
    </nav>


    <div class="container">
        <div class="container" style="text-align: center">
            <h2 style="color: black; font-weight: bold; margin-top: 20px; margin-bottom: 20px">Product Uploaded</h2>
        </div>
        <div class="jumbotron">
            <div class="col-md-12">
                <div class="img-thumbnail col-md-3" style="margin: auto; width: 50%; border: 1px solid grey; padding: 10px;">
                    <img src="images/skirt.jpg" alt="imguploaded" class="img-responsive" style="margin: auto; display: block">
                </div>
            </div>

            <h4 style="margin-top:15px; text-align:center;">Product Categories</h4>
            <?php
            if(isset($productcate1))
                {
                    if( $productcate1 =='Clothes&Accessories')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='Jewellery')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='CraftSupplies')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='Bedding&RoomDecoration')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='VintageArt')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='WeddingAccessories')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                    else if( $productcate1 =='SoftToy')
                    {
                        echo "<p style=\"text-align:center;\">".($productcate1)."</p>";
                    }
                }
            ?>

            <h4 style="margin-top:15px; text-align:center;">Product Name</h4>
            <?php
                echo "<p style=\"text-align:center;\">".($productname1)."</p>";
            ?>

            <h4 style="margin-top:15px; text-align:center;">Product Price</h4>
            <?php
                echo"<p style=\"text-align:center;\">".($productprice1)."</p>";
            ?>

            <h4 style="margin-top:15px; text-align:center;">Product Description</h4>
            <?php
                echo"<p style=\"text-align:center;\">".($productdesc1)."</p>";
            ?>

            <div class="okbutton" style="text-align:center">
                <a href="index.php"><input type="submit" value="OK" class="btn btn-primary" id="uploadproduct"/></a>
            </div>

        </div>
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

</body>

</html>
