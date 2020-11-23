<?php 
session_start();
include_once("db.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);

$query = "SELECT FROM users where user_email = $email";
    $find_user_query = mysqli_query($connection,$query);
    
    while($row = mysqli_fetch_array($find_user_query)){

            $db_user_id = $row['user_id'];
            $db_user_email = $row['user_email'];
            $db_user_fullname = $row['user_name'];
            $db_user_password = $row['user_password'];
            $db_username = $row['username'];


            if(password_verify($password,$db_user_password)){


                    $_SESSION['user_id'] = $db_user_id; 
                    $_SESSION['user_email'] = $db_user_email; 
                    $_SESSION['user_full_name'] = $db_user_id; 
                    $_SESSION['username'] = $db_username;
                    header("Location: ../index.php");

            }



    }





}


























?>