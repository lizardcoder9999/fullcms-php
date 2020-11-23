<?php 

include_once("db.php");
$query = "SELECT * FROM admins";
$view_all_admins_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($view_all_admins_query)){

    $admin_id = $row['admin_id'];
    $admin_name = $row['admin_name'];
    $admin_email = $row['admin_email'];


echo    "<tr>";
echo    "<td>$admin_id</td>";
echo    "<td>$admin_name</td>";
echo    "<td>$admin_email</td>";
echo  "<td><a class='btn btn-danger' href='admins.php?delete_admin=$admin_id'>Delete</a></td>";
echo    "</tr>";

}







?>