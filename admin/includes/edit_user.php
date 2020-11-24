<?php 
if(isset($_GET['edit_user'])){
include_once("db.php");
$user_id = $_GET['edit_user'];
$query = "SELECT * FROM users WHERE user_id = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

die("QUERY FAILED". mysqli_error($connection));

}else{


mysqli_stmt_bind_param($stmt,'s',$user_id);
$result = mysqli_stmt_execute($stmt);
while($row = mysqli_fetch_assoc($result)){

$db_user_fullname = $row['user_name'];
$db_username = $row['username'];
$db_password = $row['user_password'];
$db_user_email = $row['user_email'];


}

}
}

if(isset($_POST['edit_user'])){

include_once("db.php");


$user_fullname = $_POST['user_fullname'];
$user_email = $_POST['user_email'];
$username = $_POST['username'];
$user_password = $_POST['user_password'];
$hashed_password = password_hash($user_password,PASSWORD_BCRYPT,['cost'=>12]);


$query ="UPDATE users SET";
$query .="user_name = ?";
$query .="user_email = ?";
$query .="username = ?";
$query .="user_email = ?";

$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

die("QUERY FAILED". mysqli_error($connection));

}else{

    mysqli_stmt_bind_param($stmt,'ssss',$user_fullname,$user_email,$username,$hashed_password);
    $result = mysqli_stmt_execute($stmt);
    header("Location: users.php");




}







}


















?>