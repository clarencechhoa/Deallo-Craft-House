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

    <!-- Custom styles for this template -->
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

    <!--Title-->
        <div class="card text-white bg-secondary my-4 text-center">
            <div class="card-body">
                <p class="text-white m-0 lead">Upload Your Product</p>
            </div>
        </div>

<form method="post" action="list.php" id="eform" enctype="multipart/form-data">
  <div class="form-group">
 <p>Product's Categories</p>

     <input type="radio" name="productcategories" class="radio-inline" value="Clothes&Accessories">Clothes & Accessories &nbsp
       <input type="radio" name="productcategories" class="radio-inline" value="Jewellery">Jewellery &nbsp
      <input type="radio" name="productcategories" class="radio-inline" value="CraftSupplies">Craft Supplies &nbsp
      <input type="radio" name="productcategories" class="radio-inline" value="Bedding&RoomDecoration">Bedding & Room Decoration &nbsp
      <input type="radio" name="productcategories" class="radio-inline" value="SoftToy">Soft Toy &nbsp
    <input type="radio" name="productcategories" class="radio-inline" value="VintageArt">Vintage Art &nbsp
       <input type="radio" name="productcategories" class="radio-inline" value="WeddingAccessories">Wedding Accessories
  </div>
  <div class="form-group">
    <label for="productprice">Product Price</label>
    <input type="text" class="form-control" id="productprice" name="productprice" placeholder="Enter your product price">

  </div>

  <div class="form-group">
    <label for="productdesc">Product Description</label>
    <input type="text" class="form-control" id="productdesc" name="productdesc" placeholder="Enter your product description">

  </div>
       <div class="form-group">
    <label for="productimage">Product image</label>
    <input type="file" class="form-control-file" id="productimage" name="productimage">

  </div>
<!--
  <div class="form-group">
    <label for="productimage">Image</label>
    <input type="file" class="form-control-file" aria-describedby="fileHelp" id="productimage">

  </div>
-->
    <input type="submit" value="Submit" class="btn btn-primary" id="uploadproduct"/>
    </form>


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