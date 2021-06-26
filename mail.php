<?php 
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       $formcontent="From: $name \n message: $message";
       $mailto="naughtymian420@gmail.com";
       $subject="Whatsapp group links submission";
       mail ($mailto, $subject, $formcontent) or die ("Error!");
       echo "Thank you!";
?>
