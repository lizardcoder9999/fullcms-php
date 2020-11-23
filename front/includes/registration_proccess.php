<?php        
session_start();
include_once("db.php");
if(isset($_POST['register_user'])){

$user_full_name = $_POST['user_full_name'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$username = $_POST['username'];

$user_password = password_hash($user_password,PASSWORD_BCRYPT, ["cost" => 12]);

$query = "INSERT INTO users(user_name,username,user_password,user_email)";
$query .= "VALUES(?,?,?,?)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
    die("QUERY FAILED".mysqli_error($connection));
}else{

mysqli_stmt_bind_param($stmt,'ssss',$user_full_name,$username,$user_password,$user_email);
$result = mysqli_stmt_execute($stmt);
header("Location: ../index.php");



}






}







?>