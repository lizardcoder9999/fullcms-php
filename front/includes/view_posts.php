<?php 
include_once("db.php");
$query = "SELECT * FROM posts";
$view_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($view_posts_query)){

    $post_author = $row['post_author'];
    $post_title = $row['post_name'];
    $post_content = $row['post_content'];
    $post_image_link = $row['post_image_link'];
    $post_tags = $row['post_tags'];
    $posted_on = $row['posted_on'];






     echo  "<h2>";
     echo  "<a href='#'>$post_title</a>";
     echo "</h2>";
     echo "<p class='lead'>";
     echo " by <a href='index.php'>$post_author</a>";
     echo "</p>";
     echo "<p><span class='glyphicon glyphicon-time'></span> Posted on $posted_on</p>";
     echo "<hr>";
     echo "<img class='img-responsive' src='$post_image_link' alt='' width = '500px'>";
     echo "<hr>";
     echo "$post_content";
     echo "<a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>";
     echo "<hr>";




}














?>