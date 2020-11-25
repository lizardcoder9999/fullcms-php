<?php 
ob_start();
session_start();

$_SESSION['user_id'] = NULL;
$_SESSION['user_email'] = NULL;
$_SESSION['user_full_name'] = NULL;
$_SESSION['username'] = NULL;


header("Location: index.php");











?>