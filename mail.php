<?php 
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       $formcontent="From: $name \n message: $message";
       $mailto="naughtymian420@gmail.com";
       $subject="Whatsapp group links submission";
       $mailheader="From $email \r\n";
       mail ($mailto, $subject, $formcontent, $mailheader) or die ("Error!");
       echo "Thank you"
?>