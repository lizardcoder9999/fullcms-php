<?php 

include_once("db.php");

$query = "SELECT * FROM comments";
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result)){

$comment_author = $row['comment_author'];
$comment_content = $row['comment_content'];
$comment_timestamp = $row['comment_timestamp'];

echo "<div class='media-body'>";
echo "<h4 class='media-heading'>$comment_author";
echo  "<small> $comment_timestamp</small>";
echo "</h4>";
echo "$comment_content";
echo "</div>";
echo "</div>";

}










?>