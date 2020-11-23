<?php

function routeProtection(){

  if(!isset($_SESSION['admin_email'])){
    header("Location: ./includes/403.php");
  }
}



?>
