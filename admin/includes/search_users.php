<?php  include "db.php"; ?>

<?php

if(isset($_POST['submit_search'])){

$search = mysqli_real_escape_string($connection,$_POST['searchbar']);
$query = "SELECT * FROM users WHERE username LIKE '%$search%' OR user_name LIKE '%$search%' OR $user_id LIKE '%$search%' OR user_email LIKE '%$search%' or user_date_joined LIKE '%$search%'";
$search_users_query = mysqli_query($connection,$query);


while($row = mysqli_fetch_assoc($search_users_query)){

  $user_id = $row['user_id'];
  $user_name = $row['user_name'];
  $username = $row['username'];
  $user_password = $row['user_password'];
  $user_email = $row['user_email'];
  $user_date_joined = $row['user_date_joined'];


  echo "<tr>";
  echo "<td>$user_id</td>";
  echo  "<td>$user_name</td>";
  echo  "<td>$user_email</td>";
  echo  "<td>$username</td>";
  echo  "<td>$user_date_joined</td>";
  echo  "<td><a class='btn btn-default' href='edit.html'>Edit</a> <a class='btn btn-danger' href='users.php?delete=$user_id'>Delete</a></td>";
  echo "</tr>";



  }
}













?>
