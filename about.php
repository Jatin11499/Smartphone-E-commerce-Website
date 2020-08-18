<?php
	require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About Page</title>
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
			<div class="row" style="margin:20px -10px;">
				<div class="col-md-4">
					<h4>WHO WE ARE</h4><br>
					<img src="images/group.jpg" alt="company" class="img-fluid">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin risus lacus, molestie id lectus a, semper vestibulum sapien. Sed placerat condimentum mauris eget finibus. Etiam metus elit, ornare quis rhoncus et, finibus et massa. Sed porttitor varius eros, quis tristique sapien pellentesque at. Vivamus accumsan, augue vitae pharetra eleifend, purus nisi dictum lacus, ac fermentum nibh dolor at quam. Phasellus sit amet orci dui. Fusce a velit vel nibh luctus feugiat quis in tellus. Nunc malesuada, orci quis ullamcorper tincidunt, nunc tellus pharetra nunc, a rhoncus mauris mauris vitae elit.</p>
				</div>
				<div class="col-md-4">
					<h4>OUR HISTORY</h4><br>
					<p>Quisque risus est, suscipit eu eros eu, blandit facilisis nunc. Pellentesque lacinia eget massa a aliquet. Pellentesque pretium quis velit at consequat. Ut finibus ipsum sit amet enim porttitor, ut pretium enim ultrices. Etiam justo enim, gravida sed nunc varius, viverra hendrerit metus. Phasellus tempor vestibulum nulla, vel cursus risus tincidunt id. Fusce erat lacus, vulputate quis volutpat et, sodales eu felis. Nunc fermentum, urna non pretium vestibulum, risus massa dignissim ante, a convallis turpis mauris vitae ante. Vivamus sapien tellus, tempor id sem vitae, varius imperdiet nisl. Praesent id sem mollis, dictum neque in, maximus quam. Nunc maximus varius justo pellentesque commodo. Vestibulum laoreet arcu a turpis facilisis, vel mollis felis bibendum. Aliquam erat volutpat.
					</p><p>
					Morbi feugiat lacus et lacus facilisis, nec dictum ligula porta. Quisque fringilla ultrices risus vitae molestie. Proin dui lacus, iaculis eu libero ut, lacinia rhoncus ex. Nam vel sodales mi. Nulla accumsan iaculis consequat. Aenean porttitor, mi lobortis finibus porta, nisl lorem porttitor nibh, et dignissim tellus diam id elit. Nullam vitae finibus ipsum, quis venenatis tortor. Nulla ullamcorper quis tortor vel lobortis. Sed tincidunt ullamcorper urna, quis scelerisque justo finibus ac.</p>
				</div>
				<div class="col-md-4">
					<h4>OPPORTUNITIES</h4><br>
					<b>Available Roles</b>
					<ol>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Sed accumsan nibh ut molestie mattis.</li>
						<li>Nullam semper ante eget pretium sollicitudin.</li>
						<li>Quisque malesuada sapien vel velit faucibus, sit amet pellentesque turpis mattis.</li>
					</ol>
				</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>