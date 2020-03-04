<?php

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$category = $_POST['category'];
	$password = sha1($_POST['password']);
	
	$str = $name.$email.$password;
	$str = sha1($str);
	
	$dbConn->query("INSERT INTO register VALUES ('".$str."','".$name."','".$email."','".$category."','".$password."' )");
	
	$to = $email;
	$subject = 'Website E-mail';
	
	$headers = "From: " . strip_tags($to) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($to) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message ="Message recieved from ". $name . " Reply-To ".$email . " </br ></br >". " Message: <br /> ". $message . " <br /> Regards ". $name;
}


?>