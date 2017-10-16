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
    $queryCustomerTB = "CREATE TABLE IF NOT EXISTS users (
        userID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        f_name VARCHAR(255) NOT NULL,
        l_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL
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
    //query to create table if customer table not exist
    mysqli_query($db, $queryCustomerTB);



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


?>
