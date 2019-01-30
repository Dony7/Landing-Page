<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = 'info@cda-sites.com';
    $headers = 'CDA Sites Mail From: '.$email;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location: index.php?mailsend");
}
