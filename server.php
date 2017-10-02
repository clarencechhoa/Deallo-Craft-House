<?php

session_start();

$f_name = "";
$l_name = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','registration');

//if the register button is clicked
if(isset($_POST['register'])){
    $f_name = mysqli_real_escape_string($db,$_POST['f_name']);
    $l_name = mysqli_real_escape_string($db,$_POST['l_name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    $role = mysqli_real_escape_string($db,$_POST['role']);

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
        $password = md5($password_1); //encrypt password before storing in database

        $sql = "INSERT INTO users (f_name, l_name, email, password, role) VALUES ('$f_name', '$l_name', '$email', '$password', '$role')";
        mysqli_query($db, $sql);
        $_SESSION['success'] = "Welcome" . $f_name . $l_name;
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
        $password = md5($password); // encrypt password before comparing with database
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1){
            //user log in
            $_SESSION['success'] = "Welcome" . $f_name . $l_name;
            header('location: index.php'); // redirect to homepage
        }else{
            array_push($errors, "The email or password is incorrect");
        }
    }
}

//if user logout
if (isset($_GET['logout'])){
    session_destroy();
    header('location: index.php');
}


?>
