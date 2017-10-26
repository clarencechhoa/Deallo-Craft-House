<?php


include("server.php");

?>
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


    <?php
        if(isset($_POST['testing'])){
            $a = $_POST['test'];

            $query = "SELECT * FROM products WHERE productID = $a ";
            $result = mysqli_query($db,$query);

            while($row = mysqli_fetch_array($result)){


                $output2 = '

<div class="container">
   <div class="row jumbotron" style="width:100%;">
     <div class="row col-md-12" >
        <div class="container" style="margin-bottom:15px;">

                <div id="zoom" style="float:left;  margin-left:7%; margin-top:5%;" >
                 <img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" width="100"/>
                </div>

                <div class="col-md-9" style="float:left; margin-left:5%; ">
                    <h3>Name</h3>
                    <p>'.$row['p_name'].'</p>

                    <h3>Price</h3>
                    <p>'.$row['p_price'].'</p>

                    <h3>Description</h3>
                    <p>'.$row['p_desc'].'</p>


                </div>
            </div>
        </div>

   <div class="col-md-12" style="height:230px; overflow-y: scroll; ">

                            <div class="card" style="margin-top:15px;">
                                <div class="card-block container">
                                    <blockquote class="card-blockquote">
                                        <div id="'.$row["productID"].'" class="commentdata">



                                        </div>

                                    </blockquote>
                                </div>
                            </div>
                        </div>

                <div align="center">
                    <button type="button" class="addtocart" id="'.$row["productID"].'">Add to Cart</button>


                    <form method="POST" action="comment.php">
                    <input type="hidden" id="'.$row["productID"].'" class="lr" name="leave" value="'.$row["productID"].'">
                    <button type="submit" class="addtocart" id="'.$row["productID"].'" name="leavereview">Leave a review</button>
                    </form>
                </div>
  </div>
</div>
                ';

              echo $output2;

            }

        }

    if(isset($_POST['commentSubmit'])){
            $b = $_POST['back1'];

            $query = "SELECT * FROM products WHERE productID = $b ";
            $result = mysqli_query($db,$query);

            while($row = mysqli_fetch_array($result)){


                $output3 = '

<div class="container">
   <div class="row jumbotron" style="width:100%;">
     <div class="row col-md-12" >
        <div class="container" style="margin-bottom:15px;">

                <div id="zoom" style="float:left;  margin-left:7%; margin-top:5%;" >
                 <img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" width="100"/>
                </div>

                <div class="col-md-9" style="float:left; margin-left:5%; ">
                    <h3>Name</h3>
                    <p>'.$row['p_name'].'</p>

                    <h3>Price</h3>
                    <p>'.$row['p_price'].'</p>

                    <h3>Description</h3>
                    <p>'.$row['p_desc'].'</p>


                </div>
            </div>
        </div>

   <div class="col-md-12" style="height:230px; overflow-y: scroll; ">

                            <div class="card" style="margin-top:15px;">
                                <div class="card-block container">
                                    <blockquote class="card-blockquote">
                                        <div id="'.$row["productID"].'" class="commentdata">



                                        </div>

                                    </blockquote>
                                </div>
                            </div>
                        </div>

                <div align="center">
                    <button type="button" class="addtocart" id="'.$row["productID"].'">Add to Cart</button>


                    <form method="POST" action="comment.php">
                    <input type="hidden" id="'.$row["productID"].'" class="lr" name="leave" value="'.$row["productID"].'">
                    <button type="submit" class="addtocart" id="'.$row["productID"].'" name="leavereview">Leave a review</button>
                    </form>
                </div>
  </div>
</div>
                ';

              echo $output3;

            }

        }
    ?>
    <script>
                    $(document).ready(function(){

                                 $(document).on('click','.addtocart', function(){
                                   var image_id = $(this).attr("id");
                                    var action = "addtocart";

                                    $.ajax({
                                        url: "server.php",
                                        method: "POST",
                                        data:{
                                            image_id: image_id,
                                             action:action
                                             },

                                    })
                                });





                        fetch_data2();
                                    function fetch_data2(){
                                        var action="displaycomment1";
                                        var cid = $('.lr').attr("id");

                                        $.ajax({
                                            url:"server.php",
                                            method:"POST",
                                            data:{
                                                cid:cid,
                                                action:action},
                                            success:function(data)
                                            {
                                                $('.commentdata').html(data)
                                            }
                                        })
                                }


                          });
    </script>

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

