<?php 

if(isset($_GET['post_id'])){

require_once("db.php");

$post_id = $_GET['post_id'];
$query = "SELECT * FROM posts WHERE id = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

    die("QUERY FAILED". mysqli_error($connection));

}else{

mysqli_stmt_bind_param($stmt,'s',$post_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_assoc($result)){

    $post_author = $row['post_author'];
    $post_name = $row['post_name'];
    $post_content = $row['post_content'];
    $post_image_link = $row['post_image_link'];
    $post_tags = $row['post_tags'];
    $posted_on = $row['posted_on'];

}


}


}

?>