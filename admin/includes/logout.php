<?php ob_start(); ?>
<?php session_start(); 	?>

<?php
 $_SESSION['admin_id'] = NULL;
 $_SESSION['admin_email'] = NULL;
 $_SESSION['admin_name'] = NULL;
header("Location: ../login.php");

?>
