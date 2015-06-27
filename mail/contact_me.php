<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   //empty($_POST['phone'])     ||
   empty($_POST['message'])  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
  echo "No arguments Provided!";
  return false;
   }
  
$name = $_POST['name'];
$email_address = $_POST['email'];
//$phone = $_POST['phone'];
$message = $_POST['message'];
$host =  $_SERVER['SERVER_NAME'];
  
// Create the email and send the message
$to = 'karkimadan80@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact form message recieved :  $host";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@madankarki.com.np\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";  
return mail($to,$email_subject,$email_body,$headers);
?>