<?php 
include_once("db.php");
$query = "SELECT * FROM users ORDER BY user_id DESC LIMIT 5 ";
$latest_users_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($latest_users_query)){


    $user_full_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_joined = $row['user_date_joined'];

  echo  "<tr>";
  echo  "<td>$user_full_name</td>";
  echo  "<td>$user_email</td>";
  echo  "<td>$user_joined</td>";
  echo  "</tr>";


}




?>