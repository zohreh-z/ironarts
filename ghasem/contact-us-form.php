
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>contact-us-form</title>
<link rel="stylesheet" type="text/css" href="reset.css" >
<link rel="stylesheet" type="text/css" href="1styles.css">
<script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/contact-us-form.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" >

</head>

<body>
	<div class="container">
		<div class="contact-us-form w14">
			<h1>SEND MESSAGE</h1>
			<form method="post" action="">
				<table border="1">

					<tr>
						
						<td><p>Full name:</p></td>
						<td><input type="text" class="name" name="name" ></td>

					</tr>
					<tr>
						
						<td><p>Email:</p></td>
						<td><input type="text" class="user-email" name="user-email" ></td>

					</tr>
					<tr>
						
						<td><p>Subject:</p></td>
						<td><input type="text" class="subject" name="subject"></td>

					</tr>

					<tr>
						
						<td><p>Phone-number:</p></td>
						<td><input type="text" class="phone" name="phone"></td>

					</tr>
					<tr>
						
						<td><p>Message:</p></td>
						<td><textarea class="textarea" name="Message" ></textarea></td>

					</tr>

				</table>
				<input type="submit" class="ok" name="submit" value="SEND EMAIL">
			</form>
			

			<?php 

			echo $_POST["name"];
			
 			?>
		</div>
		
	</div>
	<div class="backimage"></div>
</body>
</html>

