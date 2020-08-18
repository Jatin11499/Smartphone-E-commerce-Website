<?php
	require 'includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('Location:index_page.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Settings Page</title>
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
				<form action="settings_script.php" method="post">
					<h5>Change Password</h5>
					<div class="form-group"><input type="password" class="form-control" placeholder="Old Password" name="oldp" pattern=".{8,}" id="oldp"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="New Password" name="newp" pattern=".{8,}" id="newp"></div>
					<div class="form-group"><input type="text" class="form-control" placeholder="Re-type New Password" name="renew"  pattern=".{8,}" id="renew"></div>
					<button class="btn btn-primary" type="submit">Change</button>
				</form>
			</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>