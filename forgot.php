<?php
	require 'includes/common.php';
	if(isset($_SESSION['email']))
	{
		header('Location:home.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Forgot Password Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="container">
			<div class="row">
			<div class="col-md-5 mx-auto set">
				<form method="post" action="forgot_script.php">
					<h5>Change Password</h5>
					<div class="form-group"><input type="text" class="form-control" placeholder="Email ID" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="New Password" name="newp"  pattern=".{8,}" id="newp"></div>
					<button class="btn btn-primary" type="submit">Send Email</button>
				</form>
			</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>