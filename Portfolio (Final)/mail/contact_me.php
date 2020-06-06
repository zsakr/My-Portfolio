<?php
// Check for empty fields
if(empty($_POST['name'])      ||
  empty($_POST['last_name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$fname = strip_tags(htmlspecialchars($_POST['name']));
$lname = strip_tags(htmlspecialchars($_POST['last_name']));
$femail = strip_tags(htmlspecialchars($_POST['email']));
$midschool = strip_tags(htmlspecialchars($_POST['MiddleSchool']));
$high = strip_tags(htmlspecialchars($_POST['HighSchool']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'ziad.sakr40@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
