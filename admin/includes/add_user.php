<?php include_once("db.php");?>

<?php
if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO users(user_name,username,user_password,user_email)";
$query .= "VALUES(?,?,?,?)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

die("QUERY FAILED".mysqli_error($connection));

}else{

mysqli_stmt_bind_param($stmt,"ssss",$fullname,$username,$password,$email);
$result = mysqli_stmt_execute($stmt);

}







}















?>
