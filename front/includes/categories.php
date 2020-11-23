<?php  include_once("db.php");?>

<?php
$query = "SELECT * FROM categories";
$select_all_categories_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_categories_query)){

  $category_name = $row['category_name'];
  $category_href = $row['category_href_link'];

echo  "<li>";
    echo  "<a href='{$category_href}'>$category_name</a>";
  echo "</li>";

}

?>
