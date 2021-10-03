<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>To the Limit Fitness Form Handler/Email Response</title>
		<!--
			Author: Brian Stowell
			Date: 10/1/2021
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
	<h2>Contact Form Response Email</h2>
	
	<p><?php echo $_POST["contact_date"]; ?></p>
	
	<h3>Dear <?php echo $_POST["first_name"] . ' ' . $_POST["last_name"]; ?>,</h3>
	
	<p>Thank for you for contacting To the Limit Fitness!
	We have listed your reason for contacting us as <?php echo $_POST["contact_reasons"]; ?>. 
	Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["customer_email"]; ?>.<br><br>

	You have shared the following comments which we will review with our team:<br><br>
	"<?php echo $_POST["comment"]; ?>"
	<br><br>
	Thank you again for your interest in To the Limit Fitness! We look forward to future communication with you regarding any questions or concerns.
	
	<h3>Sincerely,
	<br><br>
	To the Limit Fitness Communications Team and Management</h3>
		
	
	
</body>
</html>