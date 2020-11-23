<?php include "db.php";?>

<?php
if(isset($_GET['delete'])){

$the_user_id = $_GET['delete'];

$query = "DELETE FROM users WHERE user_id = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
  die("Query Failed".mysqli_error($connection));
}else{

mysqli_stmt_bind_param($stmt,'s',$the_user_id);
$result = mysqli_stmt_execute($stmt);
header("Location: users.php");
exit();
  }
}

?>
