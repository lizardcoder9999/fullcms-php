<?php 

if(isset($_POST['contact_us'])){
    $contact_name = $_POST['contact_name'];
    $to = ""; #Your Email Address
    $msg = $_POST['contact_body'];
    $subject = wordwrap($_POST['contact_subject'],70);
    $headers = "From"." ". $contact_name . " ". $_POST['contact_email'];

    mail($to,$subject,$msg,$headers);

    header("Location: ../index.php");













}


?>