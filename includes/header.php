<?php include 'login-modal.php'; ?>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index_page.php" class="navbar-brand" style="padding-left:50px;color:gray;">E-Store</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cn">
			<span class="navbar-toggler-icon">
		</button>
		<div class="collapse navbar-collapse" id="cn">
			<ul class="nav navbar-nav ml-auto">
				<?php if(isset($_SESSION['user_id'])){ ?>
					<li class="nav-item" style="padding-right:20px;"><a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
					<li class="nav-item" style="padding-right:20px;"><a class="nav-link" href="setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
					<li class="nav-item" style="padding-right:50px;"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
				<?php }
					else{ ?>
					<li class="nav-item" style="padding-right:20px;"><a class="nav-link" href="signup.php"><i class="fa fa-user-o" aria-hidden="true"></i> Sign Up</a></li>
					<li class="nav-item" style="padding-right:20px;"><a class="nav-link" data-toggle="modal" data-target="#login_modal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
					<li class="nav-item" style="padding-right:20px;"><a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a></li>
					<li class="nav-item" style="padding-right:50px;"><a class="nav-link" href="contact.php"><i class="fa fa-mobile" aria-hidden="true"></i> Contact Us</a></li>
				<?php
				} ?>
			</ul>
		</div>
	</div>	
</nav>