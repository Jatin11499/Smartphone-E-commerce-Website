<?php include 'login-modal.php'; ?>
<footer>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4" style="padding:5px 50px;">
			<h3>Information</h3>
			<a href="about.php">About Us</a><br>
			<a href="contact.php">Contact Us</a>
		</div>
		<div class="col-sm-4" style="padding:5px 50px;">
			<h3>My Account</h3>
			<?php
				if(!isset($_SESSION['email']))
				{
			?>
			<a href="#" data-toggle="modal" data-target="#login_modal">Login</a><br>
			<?php }
			else {?>
			<a href="#">Login</a><br>
			<?php } ?>
			<a href="signup.php">Sign Up</a>
		</div>
		<div class="col-sm-4" style="padding:5px 50px;">
			<h3>Contact Us</h3>
			<p style="color:white;">+91-123-000000</p>
		</div>
	</div>
</div>
</footer>
