<?php
  $name=$_POST['name'];
  $visitor_email=$_POST['email'];
  $message= $_POST['message'];
  
  $email_subject="website querry";
  $email_body="From: $name.\n".
               "Person Email: $visitor_email.\n".
			   "Message: $message.\n";
  
  $to="junaid.fred@gmail.com";
  $headers="Reply-To: $visitor_email\r\n";
  mail($to,$email_subject,$email_body,$headers);
  
?>