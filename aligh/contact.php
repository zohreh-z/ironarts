<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:..IRON ARTS..:</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="1styles.css" />
<link rel="stylesheet" type="text/css" href="mystyle.css" />

<link href='http://fonts.googleapis.com/css?family=Julee|Fredericka+the+Great|Oleo+Script|Berkshire+Swash' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/lightbox.js"></script>
<script type="text/javascript" src="scripts/slideshow.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
	<div class="container">
		<div class="nav left">
			<div class="logo mla mra">
				<h1>iron arts</h1>
			</div>
			<ul class="mla mra">
				<li class="home-li"><a href="index.php">HOME</a></li>
				<li class="about-li"><a href="about.php">ABOUT</a></li>
				<li class="port-li"><a href="portfolio.php">PORTFOLIO</a></li>
				<li class="contanct-li"><a href="contact.php" style="background-color:black">CONTACTS</a></li>
			</ul>		
		</div>
			<div class="container-content ml8 cover">
				<div class="contact-us-form w14">
					<div class='send-alert-error'>Error in sending mail. </div>
					<div class='send-alert-correct'>Thank's for sending mail. </div>
					<h1>SEND MESSAGE</h1>
					<form method="post" action="">
						<table>
							<tr>
								<td><p>Full name <span>*</span></p></td>
								<td><input type="text" class="name" name="name" ></td>
							</tr>
							<tr>
								<td><p>Email <span>*</span></p></td>
								<td><input type="text" class="user-email" name="user-email" ></td>
							</tr>
							<tr>
								<td><p>Subject <span>*</span></p></td>
								<td><input type="text" class="subject" name="subject"></td>
							</tr>
							<tr>
								<td><p>Phone-number <span>*</span></p></td>
								<td><input type="text" class="phone" name="phone"></td>
							</tr>
							<tr>
								<td><p>Message <span>*</span></p></td>
								<td><textarea class="textarea" name="Message" ></textarea></td>
							</tr>
						</table>
						<input type="submit" class="ok" name="submit" value="SEND EMAIL">
						<input type='reset' class='ok' name='reset'  onClick='hide_send_alert()' value='RESET'>
					</form>
				</div>
			<div class="clear"></div>
			</div>
	</div>

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

<!------------footer------------>
	<div class="bottom-background">
		<div class="bottom-container">
			<div class="bottom-content mla mra">
				<div class="topic mla mra">
				<div class="clear"></div>
					<div class="art">
						<h2>Articles</h2>
						<ul>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
						</ul>
					</div>
					<div class="cat">
						<h2>Categories</h2>
						<ul>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
						</ul>
					</div>
					<div class="arc">
						<h2>archive</h2>
						<ul>
							<li><a href="#">test testtest testtest test testtest </a></li>
							<li><a href="#">test testtest test test test testtest </a></li>
							<li><a href="#">test testtest testtest test  testtest </a></li>
							<li><a href="#">test testtest testtest  testtest </a></li>
							<li><a href="#">test testtest test testtest  test </a></li>
						</ul>
					</div>
					<div class="fli cover">
						<h2>flickr</h2>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="footer-container">
			<div class="footer-content mla mra">
				<h4>Copyright © 2012. All rights reserved. check this project at <a href="https://github.com/1schools-projects/ironarts">Github</a></h4>
			</div>
		</div>
	</div>
<!------------backImage------------>
	<div class="backimg">
		<div class="img2" style="opacity:.7"></div>
		<div style="background-color:black;opacity:.7;"></div>
	</div>
</body>
</html>
