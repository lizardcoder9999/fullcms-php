<?php  include_once "db.php";?>

<?php

$query = "SELECT * FROM categories";
$category_count_query = mysqli_query($connection,$query);
$count = mysqli_num_rows($category_count_query);
echo $count;


?>
