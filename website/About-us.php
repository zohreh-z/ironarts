<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>contact us form</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="1styles.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style-with-opacity.css" />
<link href='http://fonts.googleapis.com/css?family=Julee|Fredericka+the+Great|Oleo+Script|Berkshire+Swash' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/script.js"></script>
<script type="text/javascript" src="javascripts/contact-us-form.js"></script>
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
	<div class="nav left w6">

		<div class="logo mla mra">
			<h1>FOLIO</h1>
		</div>
		<ul class="mla mra">
			<li><a href="#">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="#">FOLIO</a></li>
			<li><a href="#">CONTACTS</a></li>
		</ul>
	</div>
	<div class="container-content ml6 ">
		<div class="about-content">
			<h1>MY BIO</h1>
			<div class="person-pic left w6"><img src="images/page3_img1.jpg" width="100%"></div>
			<div class="desc ml6 last">
				<h1>consectetuer</h1>
				<p>Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique.</p>
			</div>
			<div class="clear"></div>
			<div class="content-news">
				<h1>NEWS</h1>
				<p>Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hendrerit sit amet, tincidunt ac, viverra sed, nulla. <br />
					<br />
					<br />
					<br />
				</p>
				<div class="news-1 left w5">
					<h2>26 december 2011</h2>
					<p>Ereet am leot tellu apibus eget elementum vel cursus eleife elitenean auctowisi et urnat volutpas ac tur. </p>
				</div>
				<div class="news-2 left w5">
					<h2>23 december 2011</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
				</div>
				<div class="news-3 ml10 last">
					<h2>20 december 2011</h2>
					<p>Aenean nec eros. Vestibulum ante ipsu primis in faucibus orci luctus et ultrices posuere cubilia Curae. </p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
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
<div class="backimg">
	<div class="img1"></div>
	<div class="img2"></div>
	<div class="img3"></div>
	<div class="img4"></div>
</div>
</body>
</html>
