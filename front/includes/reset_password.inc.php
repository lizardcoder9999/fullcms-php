<?php 


if(isset($_POST['reset_password_submit'])){

$selector = $_POST['selector'];
$validator = $_POST['validator'];
$password = $_POST['pwd'];
$password_repeat = $_POST['pwd_repeat'];

if(empty($password)|| empty($password_repeat)){
    header("Location: ../registration.php");
    exit();
}else if ($password != $password_repeat){
    header("Location: ../registration.php");
    exit();
}


$currentDate = date("U");

require "db.php";

$query = "SELECT * FROM pwdReset WHERE pwdResetSelector = ? AND pwdResetExpires >= ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
    die("QUERY FAILED" .mysqli_error($connection));
    exit();
}else{

    mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)){

        echo "You need to re-submit your reset request";
        exit();

    }else{

        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);

        if($tokenCheck === false){

            echo "You need to re-submit your reset request.";
            exit();
        }elseif ($tokenCheck === true){
            
            $tokenEmail = $row["pwdResetEmail"];

            $query = "SELECT * FROM users WHERE user_email = ?";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt,$query)){
            die("QUERY FAILED" .mysqli_error($connection));
            exit();

        }else{
            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                echo "There was an error";
                exit();
            } else {
                $query = "UPDATE users SET user_password = ? WHERE user_email=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt,$query)){
                    die("QUERY FAILED" .mysqli_error($connection));
                }else{

                    $newPwdHash = password_hash($password,PASSWORD_BCRYPT, ["cost" => 12]);
                    mysqli_stmt_bind_param($stmt,"ss",$newPwdHash,$tokenEmail);
                    mysqli_stmt_execute($stmt);
                    
                    $query = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                    $stmt = mysqli_stmt_init($connection);
                    if(!mysqli_stmt_prepare($stmt,$query)){
                        echo "There was an error";
                        exit();
                    }else{

                        mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                        mysqli_stmt_execute($stmt);
                        header("Location : ../login.php?success=passwordupdated");


                    }


                }
            }
            }
        }
    }

}



}else{
    header("Location: ../index.php");
}























?>