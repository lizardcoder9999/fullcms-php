<?php include "db.php";?>

<?php

$query = "SELECT * FROM users";
$grab_users_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($grab_users_query)) {

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
echo  "<td><a class='btn btn-danger' href='users.php?delete=$user_id'>Delete</a></td>";
echo "</tr>";

}


?>
