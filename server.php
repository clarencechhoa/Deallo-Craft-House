
<?php

session_start();

$f_name = "";
$l_name = "";
$errors = array();

//connect to databases

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'registration';
    $queryToCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
    $queryCustomerTB = array();
    $queryCustomerTB[] = "CREATE TABLE IF NOT EXISTS users (
        userID INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        f_name VARCHAR(255) NOT NULL,
        l_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL
    )";
    $queryCustomerTB[] = "CREATE TABLE IF NOT EXISTS products(
        productID INT(11) NOT NULL AUTO_INCREMENT,
        p_categories VARCHAR(255) NOT NULL,
        p_name VARCHAR(255) NOT NULL,
        p_price INT(255) NOT NULL,
        p_desc VARCHAR(255) NOT NULL,
        image BLOB NOT NULL,

        PRIMARY KEY (productID)
    )";

 $queryCustomerTB[] = "CREATE TABLE IF NOT EXISTS commentsection(
        cid INT(11) NOT NULL AUTO_INCREMENT,
        date DATETIME NOT NULL,
        message TEXT NOT NULL,
        PRIMARY KEY (cid)

    )";

$queryCustomerTB[] = "CREATE TABLE IF NOT EXISTS carts(
        cartID INT(11) NOT NULL AUTO_INCREMENT,
        p_categories VARCHAR(255) NOT NULL,
        p_name VARCHAR(255) NOT NULL,
        p_price INT(255) NOT NULL,
        p_desc VARCHAR(255) NOT NULL,
        image BLOB NOT NULL,

        PRIMARY KEY (cartID)
    )";

    //connection to mysql
    $db = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$db ){
     die("Could not connect to mysql. " );
    }
    //query to create database if not exist
    mysqli_query($db, $queryToCreateDB);
    //select database to connect
    $connect_db = mysqli_select_db($db,$dbname);
    if(!$connect_db ){
     die("Could not connect to database. ");
    }

    //query create table inside that array if does not exist
    foreach ($queryCustomerTB as $sql){
        mysqli_query($db,$sql);
    }

//if user upload button product is clicked
if(isset($_POST['upload'])){
    $p_categories = mysqli_real_escape_string($db,$_POST['productcategories']);
    $p_name = mysqli_real_escape_string($db,$_POST['productname']);
    $p_price = mysqli_real_escape_string($db,$_POST['productprice']);
    $p_desc = mysqli_real_escape_string($db,$_POST['productdesc']);
    $file = $_FILES['image']['tmp_name'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);


     $sql ="INSERT INTO products( p_categories, p_name, p_price, p_desc, image) VALUES ('$p_categories', '$p_name', '$p_price', '$p_desc', '$image')";
     mysqli_query($db, $sql);

}

//display seller uploaded product
if(isset($_POST['action'])){
    if($_POST['action'] == "fetch"){
        $query = "SELECT * FROM products ORDER BY productID ASC";
        $result = mysqli_query($db,$query);
        $output = '
        <table>
            <tr>
                <th width="20%">Product Categories</th>
                <th width="20%">Product Image</th>
                <th width="20%">Product Name</th>
                <th width="20%">Product Price</th>
                <th width="20%">Product Description</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
                $output .= '
                    <tr>
                        <td>'.$row['p_categories'].'</td>
                        <td><img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" height="100" width="100" style="margin-top:50px;"/></td>
                        <td>'.$row['p_name'].'</td>
                        <td>'.$row['p_price'].'</td>
                        <td>'.$row['p_desc'].'</td>
                        <td>
                    <button class="edit" type="button" name="edit" id="'.$row["productID"].'">Edit</button>
                        </td>
                        <td>
                        <button class="delete" type="button" name="delete" id="'.$row["productID"].'">Delete</button>

                        </td>
                    </tr>
                ';
        }
        $output .= '</table>';
        echo $output;
    }
    if($_POST['action'] == "edit"){
        $p_categories = mysqli_real_escape_string($db,$_POST['productcategories']);
        $p_name = mysqli_real_escape_string($db,$_POST['productname']);
        $p_price = mysqli_real_escape_string($db,$_POST['productprice']);
        $p_desc = mysqli_real_escape_string($db,$_POST['productdesc']);
        $file = $_FILES['image']['tmp_name'];
        $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);

        $query="UPDATE products SET
        p_categories = '$p_categories',
        p_name = '$p_name',
        p_price = '$p_price',
        p_desc = '$p_desc',
        image = '$image' WHERE productID ='".$_POST['image_id']."' ";

        mysqli_query($db,$query);
    }
    if($_POST['action'] == "delete"){
        $query= "DELETE FROM products WHERE productID ='".$_POST['image_id']."' ";
        mysqli_query($db,$query);
    }


    if($_POST['action'] == "fetchDisplay"){
        $query = "SELECT * FROM products ORDER BY productID ASC";
        $result = mysqli_query($db,$query);
        while($row = mysqli_fetch_array($result)){

            $output2 = '

            <div class="col-md-3 img-thumbnail">
             <img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" width="100"/>
            </div>
                <div class="col-md-9" >
                    <h3>Name</h3>
                    <p>'.$row['p_name'].'</p>

                    <h3>Price</h3>
                    <p>'.$row['p_price'].'</p>

                    <h3>Description</h3>
                    <p>'.$row['p_desc'].'</p>

                    <button type="button" class="addtocart" id="'.$row["productID"].'">Add To Cart</button>
                </div>

            ';
          echo $output2;
        }
    }

    if($_POST['action'] == "addtocart"){
         $sql ="INSERT INTO carts(p_categories, p_name, p_price, p_desc, image) SELECT p_categories, p_name, p_price, p_desc,image FROM products WHERE productID ='".$_POST['image_id']."'";
                 mysqli_query($db, $sql);
    }
    if($_POST['action'] == "displayCart"){
         $query = "SELECT * FROM carts ORDER BY cartID ASC";
        $result = mysqli_query($db,$query);
        while($row = mysqli_fetch_array($result)){
        $result = mysqli_query($db,$query);
                $output = '
                <table>
                    <tr>
                        <th width="20%">Product Categories</th>
                        <th width="20%">Product Image</th>
                        <th width="20%">Product Name</th>
                        <th width="20%">Product Price</th>
                        <th width="20%">Product Description</th>
                    </tr>
                ';
                while($row = mysqli_fetch_array($result)){
                        $output .= '
                            <tr>
                                <td>'.$row['p_categories'].'</td>
                                <td><img src="data:image/jpeg;base64, '.base64_encode($row['image']).'" height="100" width="100" style="margin-top:50px;"/></td>
                                <td>'.$row['p_name'].'</td>
                                <td>'.$row['p_price'].'</td>
                                <td>'.$row['p_desc'].'</td>

                                <td>
                                <button class="delete1" type="button" name="delete1" id="'.$row["cartID"].'">Delete</button>

                                </td>
                            </tr>
                        ';
                }
                $output .= '</table>';
                echo $output;
        }
    }
    if($_POST['action'] == "delete1"){
        $query= "DELETE FROM carts WHERE cartID ='".$_POST['image_id']."' ";
        mysqli_query($db,$query);
    }
}




//if the register button is clicked
if(isset($_POST['register'])){
    $f_name = mysqli_real_escape_string($db,$_POST['f_name']);
    $l_name = mysqli_real_escape_string($db,$_POST['l_name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    $role = mysqli_real_escape_string($db,$_POST['role']);
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);

    //validation for form
    if (empty($f_name)){
        array_push($errors, "Firstname is required");
    }

    if (empty($l_name)){
        array_push($errors, "Lastname is required");
    }

    if (empty($email)){
        array_push($errors, "Email is required");
    }
    else if (mysqli_num_rows($result) == 1){
        array_push($errors, "This email has used");
    }

    if (empty($password_1)){
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }

    if (empty($role)){
        array_push($errors, "Role is required");
    }

    //if there are no errors, save data to database
    if (count($errors) == 0){
        $password = base64_encode($password_1); //encrypt password before storing in database

        $sql = "INSERT INTO users (f_name, l_name, email, password, role) VALUES ('$f_name', '$l_name', '$email', '$password', '$role')";
        mysqli_query($db, $sql);
        $_SESSION['success'] = $f_name ." ". $l_name;
        $_SESSION['roledisplay'] = $role;
        header('location: index.php'); // redirect to homepage
    }

}

//ensure user email and password are correct before login
if (isset($_POST['login'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if (empty($email)){
        array_push($errors, "Email is required");
    }

    if (empty($password)){
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0){
        //validate user login with correct email and password
        $password = base64_encode($password); // encrypt password before comparing with database
        $password2 = base64_decode($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1){
            //user success login
            $query = "SELECT f_name, l_name, role FROM users WHERE email='$email'";
            $result = mysqli_query($db,$query);

            while ($rows = mysqli_fetch_assoc($result)){
                $username = $rows['f_name'] . " " . $rows["l_name"];
                $role = $rows['role'];
            }

            $_SESSION['success'] = $username;
            $_SESSION['roledisplay'] = $role;
            $seller = "seller";

            //check buyer or seller
            if (strcmp($_SESSION['roledisplay'], $seller)){
                $_SESSION['buyer'] = "a";
            }
            else
            {
                $_SESSION['seller'] = "b";
            }

               //user checked to remember email and password
            if(!empty($_POST["remember"]))
            {
                setcookie("saveemail",$email,time()+ (10*365*24*60*60));
                setcookie("savepassword",$password2,time()+ (10*365*24*60*60));
            }
            //user unchecked to unremember email and password
            else{
                if(isset($_COOKIE["saveemail"])){
                    setcookie ("saveemail","");
                }
                if(isset($_COOKIE["savepassword"])){
                    setcookie ("savepassword", "");
                }
            }
            header('location: index.php'); // redirect to homepage
        }else{
            //user fail to login
            array_push($errors, "The email or password is incorrect");
        }
    }
}

//if user logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['success']);
    unset($_SESSION['roledisplay']);
    header('location: index.php');
}


//upload comment data
if(isset($_POST['commentSubmit'])){
    $message=mysqli_real_escape_string($db,$_POST['message']);
    $sql ="INSERT INTO commentsection(date,message) VALUES (NOW(),'$message')";
      mysqli_query($db, $sql);
}

//display comment data
if(isset($_POST['action2'])){
    if($_POST['action2'] == "display"){

        $sql ="SELECT * FROM commentsection";
         $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result)){

          echo  '<p>';
                echo $row['date']. ": ";
                echo $row['message'];
        echo     '</p>';
        }
    }
}




?>



