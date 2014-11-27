<?php 
session_start();
include 'dbconnection.php';

    $from = "karsanrichard@gmail.com";// senders mail
     $to = $_POST['mail'];
  
    $subject = "Response to your enquiry";

    $message = $_POST['message'];

    $headers = "From:" . $from;
    ob_start();
    // $headers2 = "From:" . $to;
    echo $to;

    $sent = mail($to,$subject,$message,$headers);
   if($sent){
   echo "Mail Sent. Thank you, we will contact you shortly.";
   echo $sent;
   	
   }
   else{
   	echo "Problem sending";
   }
    
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
 ?>