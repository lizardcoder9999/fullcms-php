<?php  include_once("db.php");?>

<?php

$query = "SELECT * FROM posts";
$post_count_query = mysqli_query($connection,$query);
$post_count = mysqli_num_rows($post_count_query);
echo $post_count;











?>
