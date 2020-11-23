<?php 
include_once("db.php");

if(isset($_POST['search'])){


$search = $_POST['search_bar'];
$query = "SELECT * FROM posts WHERE post_name LIKE ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){
    die("QUERY FAILED". mysqli_error($connection));
}else{

mysqli_stmt_bind_param($stmt,'s',$search);
$result = mysqli_stmt_execute($stmt);

while($row = mysqli_fetch_assoc($result)){

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


}

}







?>