<?php 
include_once("db.php");
session_start();
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user_email = ?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$query)){
        die("QUERY FAILED".mysqli_error($connection));
    }else{

        mysqli_stmt_bind_param($stmt,'s',$password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while($row = mysqli_fetch_array($result)){


            $db_full_name = $row['user_name'];
            $db_user_email = $row['user_email'];
            $db_username = $row['username'];
            $db_user_password = $row['user_password'];
            
        }


        if(password_verify($password,$db_user_password)){

                $_SESSION['user_name']= $db_full_name;
                $_SESSION['user_email']= $db_user_email;
                $_SESSION['username']= $db_username;
                header("Location : ../index.php");



        }





    }
    





}




























?>