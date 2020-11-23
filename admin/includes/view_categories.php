<?php  include_once("db.php");?>

<?php
$query = "SELECT * FROM categories";
$view_categorys_query = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($view_categorys_query)) {


  $category_id = $row['category_id'];
  $category_name = $row['category_name'];
  $category_link = $row['category_href_link'];



  echo  "<tr>";
  echo  "<td>$category_id</td>";
  echo  "<td>$category_name</td>";
  echo  "<td>$category_link</td>";
  echo  "<td><a class='btn btn-danger' href='categories.php?delete=$category_id'>Delete</a></td>";
  echo  "</tr>";
}






?>
