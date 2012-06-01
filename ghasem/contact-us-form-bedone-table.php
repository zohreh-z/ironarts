<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>contact-us-form</title>
<link rel="stylesheet" type="text/css" href="reset.css" >
<link rel="stylesheet" type="text/css" href="1styles.css">
<script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/contact-us-form.js"></script>
<link rel="stylesheet" type="text/css" href="style-bedone-table.css" >
<?php 

	if( isset($_POST['name']) && isset($_POST['user-email']) && isset($_POST['subject']) && isset($_POST['phone']) && isset($_POST['Message'])){

		$name = $_POST['name'];
		$email = $_POST['user-email'];
		$Subject = $_POST['Subject'];
		$phone = $_POST['phone'];
		$Message = $_POST['Message'];
		
		if( @mail("admin@yaranemahdi-313.ir",$Subject ,$name+"<br  />"+$phone+"<br  />"+$Message,"From:info@ironarts.ir\nReply-To:$email") ){
			echo 
			"<style type='text/css'>
				div.send-alert-correct{
					display: block;
				}
			</style>";
		}
		else{
			echo 
				"<style type='text/css'>
					div.send-alert-error{
						display: block;
					}
				</style>";
		}
	}
			
?>
</head>

<body>
<div class="container">
	<div class="contact-us-form w14">
		<div class='send-alert-error'> <img src='images/not-correct-us.png' height='30px' width='30px' alt='not-correct'> Error in sending mail. </div>
		<div class='send-alert-correct'> <img src='images/correct-us.png' height='30px' width='30px' alt='correct'> Thank's for sending mail. </div>
		<h1>SEND MESSAGE</h1>
		<form method="post" action="">
			
				
					<span>Full name *</span>
					<input type="text" class="name" name="name" >
					<br>
					<span>Email *</span>
					<input type="text" class="user-email" name="user-email" >
					<br>
					<span>Subject *</span>
					<input type="text" class="subject" name="subject">
					<br>
					<span>Phone-number *</span>
					<input type="text" class="phone" name="phone">
					<br>
					<span>Message *</span>
					<textarea class="textarea" name="Message" ></textarea>
				
			
			<input type="submit" class="ok" name="submit" value="SEND EMAIL">
			<input type='reset' class='ok' name='reset'  onClick='hide_send_alert()' value='RESET'>
		</form>
	</div>
</div>
<div class="backimage"></div>
</body>
</html>