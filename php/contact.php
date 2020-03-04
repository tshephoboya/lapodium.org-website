<?php

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];
	
	$to = 'info@lapodium.org';
	$subject = 'Website E-mail';
	
	$headers = "From: " . strip_tags($_POST['email'];) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email'];) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message ="Message recieved from ". $name . " Reply-To ".$email . " </br ></br >". " Message: <br /> ". $message . " <br /> Regards ". $name;
	
	
	
	mail($to, $subject, $message, $headers);
	
	$respond = array();
	$respond['status'] = 1;
}




?>