<?php 
	$name=$_POST['fullname'];
	$visitors_email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$email_body="User Name: $name \n".
				"User Email: $visitors_email \n".
				"Subject: $subject \n".
				"Message: $message \n";
	$to="contact@bagmatiunescoclub.org";
	$email_subject="New Form Submission";
	mail($to, $email_subject, $email_body,"From: $name<$visitors_email>");
	header("Location:contacto-en.html")
?>