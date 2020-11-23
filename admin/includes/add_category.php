<?php  include_once "db.php";?>

<?php
if(isset($_POST['submit'])){

$category_name = mysqli_real_escape_string($connection,$_POST['category_name']);
$category_href_link = mysqli_real_escape_string($connection,$_POST['href_link']);
$query = "INSERT INTO categories(category_name,category_href_link)";
$query .= "VALUES(?,?)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
  die("Query Failed". mysqli_error($connection));
}else{

mysqli_stmt_bind_param($stmt,'ss',$category_name,$category_href_link);

$result = mysqli_stmt_execute($stmt);

header("Location: categories.php");

}


}


?>
