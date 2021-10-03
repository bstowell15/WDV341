<?php

	$to = "briansstowell@hotmail.com";
	$subject = "Notification of contact from customer";
	$message = "You have received information from the contact page on your website.";
	$headers = "From: support@brianstowell.name" . "\r\n";

	if ( mail($to,$subject,$message,$headers) ){
		
		echo "accepted email";
		
	}
	else {
		echo "email failed";
		
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>To the Limit Fitness Email Notification of Contact from Customer</title>
		<!--
			Author: Brian Stowell
			Date: 10/2/2021
		-->

		<style>
		
			body { 
				background-image:url("grey_wash_wall.png"); 
				font-family: Trebuchet MS, Helvetica, sans-serif;
				}
				
			h1 { 
				color: white;
				background-color: orangered;
				padding:20px;
				margin:20px;
				text-align:center;
				border-style:groove;
				text-transform:uppercase;
				}
				
			h2	{
				border-style:groove;
				color: darkgray;
				background-color: black;
				padding:20px;
				margin:20px;
				text-align:center;
				}
				
			h3	{
				
				color: white;
				background-color:orangered;
				float:center;
				margin:20px;
				padding:10px;
				font-weight:bold;
				border-style:groove;
				}
				
			h4	{
				color: white;
				
				float:center;
				margin:20px;
				padding:10px;
				font-weight:bold;
				
				}
			
			p	{
				background-color:gray;
				color:black;
				margin:20px;
				padding:20px;
				font-weight:bold;
				border-style:groove;
			}
			
		</style>
</head>

<body>
	
	<h1>To The Limit Fitness</h1>
	<h2>Email Notification of Contact from Customer</h2>
	
	<p><?php echo date("d/m/Y"); ?></p>
	
	<p><?php echo $to; ?></p>
	
	<p><?php echo $subject; ?></p>
	
	<p><?php echo $message; ?></p>
	
	<p><?php echo $headers; ?></p>
</body>
</html>