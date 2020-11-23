<?php 



if(isset($_POST['submit'])){
    include_once("db.php");

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

$admin_password = password_hash($admin_password,PASSWORD_BCRYPT, ["cost" => 12]);

$query = "INSERT INTO admins(admin_name,admin_email,admin_password)";
$query .= "VALUES(?,?,?)";

$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
    die("QUERY FAILED" .mysqli_error($connection));
}else{


mysqli_stmt_bind_param($stmt,'sss',$admin_name,$admin_email,$admin_password);
$result = mysqli_stmt_execute($stmt);
header("Location: ../admins.php");



}

}














?>