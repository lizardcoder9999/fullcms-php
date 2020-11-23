<?php include "db.php";?>

<?php

if(isset($_GET['delete'])){

$cat_id = $_GET['delete'];
$query = "DELETE FROM categories WHERE category_id = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
  die("QUERY FAILED".mysqli_error($connection));
}else{
mysqli_stmt_bind_param($stmt,"s",$cat_id);
$result = mysqli_stmt_execute($stmt);
header("Location: categories.php");



}












}

?>
