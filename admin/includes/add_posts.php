<?php include_once("db.php");?>
<?php
if(isset($_POST['submit'])){
$post_title = $_POST['post_title'];
$post_author = $_POST['post_author'];
$post_content = $_POST['editor1'];
$post_tags = $_POST['post_tags'];

$query = "INSERT INTO posts(post_name,post_content,post_author,post_tags) ";
$query .= "VALUES(?,?,?,?)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
  die("Query Failed" .mysqli_error($connection));
}

mysqli_stmt_bind_param($stmt,'ssss',$post_title,$post_content,$post_author,$post_tags);
$result = mysqli_stmt_execute($stmt);



}


?>
