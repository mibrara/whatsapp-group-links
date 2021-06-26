<?php 
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       $formcontent="Form: $name \n message: $message";
       $mailto="naughtymian420@gmail.com";
       $subject="Whatsapp group links submission";
       $mailheader="Form $email \r\n";
       mail ($mailto, $subject, $formcontent, $mailheader) or die ("Error!");
       echo "Thank you"
?>