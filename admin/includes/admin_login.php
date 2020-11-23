<?php include "db.php"; ?>
<?php session_start();?>

<?php

if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

if(empty($_POST['email']) || empty($_POST['password'])){

  header("Location: ../login.php?error=all_fields_required");

}else{

$query = "SELECT * FROM admins WHERE admin_email = ? AND admin_password = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

  die("QUERY FAILED".mysqli_error($connection));

}else{

mysqli_stmt_bind_param($stmt,"ss",$email,$password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_fetch_assoc($result))


  $_SESSION['admin_email'] = $email;
  header("Location: ../index.php");

}


}


}
















?>
