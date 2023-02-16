<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "eric.m.mersch@gmail.com";
$subject = "Message";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: eric.m.mersch@gmail.com" . "\r\n" .
            "CC: rickspat@gmail.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:last.html");
?>
