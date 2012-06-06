<?php include('header.php') ?>
<div class="container">

	<div class="nav nav-contact left">
		<?php include('main-menu.php') ?>
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
<?php include('footer.php') ?>
<!------------backImage------------>
<div class="backimg">
	<div class="img2" style="opacity:0.7"></div>
	<div style="background-color:black;opacity:0.7;"></div>
</div>
</body>
</html>
