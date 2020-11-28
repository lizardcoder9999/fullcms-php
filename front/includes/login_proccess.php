<?php 
session_start();
include_once("db.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users where user_email = ?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        die("Query Failed". mysqli_error($connection));
    } else {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);




        while ($row = mysqli_fetch_array($result)) {
            $db_user_id = $row['user_id'];
            $db_user_email = $row['user_email'];
            $db_user_fullname = $row['user_name'];
            $db_user_password = $row['user_password'];
            $db_username = $row['username'];
                
            
            if (password_verify($password, $db_user_password)) {
                $_SESSION['user_id'] = $db_user_id;
                $_SESSION['user_email'] = $db_user_email;
                $_SESSION['user_full_name'] = $db_user_id;
                $_SESSION['username'] = $db_username;
                header("Location: ../index.php");
            }else{
                header("Location: ../login.php?error=invalid_email_or_pass");
                exit();
            }
        }
    }
}

?>