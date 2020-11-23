<?php  include "db.php"; ?>

<?php

$query = "SELECT * FROM users";
$user_count_query = mysqli_query($connection,$query);
$user_count = mysqli_num_rows($user_count_query);
echo $user_count;


?>
