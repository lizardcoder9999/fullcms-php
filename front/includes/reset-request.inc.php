<?php 

if(isset($_POST['reset_request_submit'])){


$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

$url = "localhost/create_new_password.php?selector=".$selector."&validator=".bin2hex($token);
#In your site change the localhost to your domain

$expires = date("U") + 1800; #expires in 1 hour


require "db.php";

$user_email = $_POST["email"];

$query = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

    die("QUERY FAILED" .mysqli_error($connection));
    exit();
}else{

mysqli_stmt_bind_param($stmt,"s",$user_email);
mysqli_stmt_execute($stmt);

}

$query = "INSERT INTO pwdReset(pwdResetEmail,pwdResetSelector,pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt,$query)){

    die("QUERY FAILED" .mysqli_error($connection));
    exit();
}else{
$hashed_token = password_hash($token,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"ssss",$user_email,$selector,$token,$expires);
mysqli_stmt_execute($stmt);

}

mysqli_stmt_close($stmt);
mysqli_close($connection);

$to = $user_email;

$subject = 'Reset your password for your site ';

$message = '<p>We recieved a password reset request. The link to reset your password is down below. If you did not make this request, you can ignore this email</p>';
$message .= '<p> Here is your password reset link : </br>';
$message .= '<a href = "' . $url . '">' . $url . '</a></p>';

$headers = "From mysite <mysite@gmail.com>\r\n";
$headers .= "Reply-To: no-reply@mysite.com\r\n";
$headers .= "Content-type: text/html\r\n";

mail($to,$subject,$message,$headers);

header("Location: ../reset_password.php?reset=success");

}else{
header("Location : ../index.php");

}































?>