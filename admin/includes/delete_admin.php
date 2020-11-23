<?php 

include_once("db.php");

if(isset($_GET['delete_admin'])){

$admin_id = $_GET['delete_admin'];
$query = "DELETE FROM admins where admin_id = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
  
    die("QUERY FAILED" .mysqli_error($connection));

}else{

mysqli_stmt_bind_param($stmt,'s',$admin_id);
$result = mysqli_stmt_execute($stmt);
header("Location: admins.php");

}


}

?>