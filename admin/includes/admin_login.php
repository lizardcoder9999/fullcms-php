<?php 
session_start();
include_once("db.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admins where admin_email = ?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        die("Query Failed". mysqli_error($connection));
    } else {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);




        while ($row = mysqli_fetch_array($result)) {
            $db_admin_id = $row['admin_id'];
            $db_admin_email = $row['admin_email'];
            $db_admin_name = $row['admin_name'];
            $db_admin_password = $row['admin_password'];
            
                
            
            if (password_verify($password, $db_admin_password)) {
                $_SESSION['admin_id'] = $db_admin_id;
                $_SESSION['admin_email'] = $db_admin_email;
                $_SESSION['admin_name'] = $db_admin_name;
                header("Location: ../index.php");
            }else{
              header("Location: ../login.php?error=wrong_email_or_pass");
            }
        }
    }
}

?>