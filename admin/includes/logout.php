<?php ob_start(); ?>
<?php session_start(); 	?>

<?php

$_SESSION['admin_email'] = NULL;
header("Location: ../login.php");

?>
