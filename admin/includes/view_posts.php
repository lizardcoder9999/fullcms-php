<?php   include_once("db.php");?>

<?php
$query = "SELECT * FROM posts";
$view_posts_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($view_posts_query)){

$post_title = $row['post_name'];
$post_author = $row['post_author'];
$post_tags = $row['post_tags'];
$post_id = $row['post_id'];


echo "<tr>";
echo   "<td>'{$post_title}'</td>";
echo "<td>'{$post_author}'</td>";
echo  "<td>'{$post_tags}'</td>";
echo  "<td><a class='btn btn-default' href='edit.html'>Edit</a> <a class='btn btn-danger' href='posts.php?delete_post=$post_id'>Delete</a></td>";
echo "</tr>";









}












?>
