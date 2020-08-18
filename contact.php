<?php
	require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us Page</title>
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
			<div class="row" style="margin:20px -70px;">
				<div class="col-md-10">
					<h2>LIVE SUPPORT</h2>
					<p style="font-size:20px;">24 hours | 7 days a week | 365 days a year Live Technical Support</p>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum suscipit egestas rhoncus. Donec nisl arcu, sagittis eu sodales quis, ornare dignissim tortor. Nullam id tincidunt tortor. Vivamus posuere lorem id pretium dapibus. Morbi a ultrices turpis. Nullam eget ligula eu ex commodo tincidunt. Curabitur dictum porta sem. Donec semper, diam nec tempus tempor, nunc elit blandit enim, eu blandit odio massa a nisi.</p>
				</div>
				<div class="col-md-2">
					<img src="images/call-support.png" alt="call-support" class="img-fluid">
				</div>
			</div>
			<div class="row" style="margin:20px -70px;">
				<div class="col-md-8">
					<h2>CONTACT US</h2>
					<form>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="msg">Message:</label>
						<textarea class="form-control" rows="5" id="msg"></textarea>
					</div>
					<button class="btn btn-primary" type="submit">Submit</button>
				</form>
				</div>
				<div class="col-md-4">
					<h2>Company Information :</h2>
					<p>Quisque fermentum sem mauris, dignissim tincidunt lectus tempor sed.</p>
					<p>Aliquam pretium interdum varius.</p>
					<p>Pellentesque ultrices velit eget placerat auctor.</p>
					<p>Donec ac lectus tempus, euismod augue sit amet, tincidunt erat.</p> 
					<p>Ut nec justo vitae diam pharetra ullamcorper non in leo.</p>
					<p>Duis porta placerat odio eu ullamcorper.</p>
				</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>