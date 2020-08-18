<?php
	require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';
			include 'includes/check-if-added.php';	
		?>
		<div class="container">
			<div class="row">
				<div class="carousel slide" data-ride="carousel" id="preview" style="margin-bottom:20px;">
					<ul class="carousel-indicators">
						<li data-target="#preview" data-slide-to="0" class="active"></li>
						<li data-target="#preview" data-slide-to="1" ></li>
						<li data-target="#preview" data-slide-to="2" ></li>
					</ul>
					
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/banner-poco.jpg" alt="poco_f2_pro" class="img-fluid">
						</div>
						<div class="carousel-item">
							<img src="images/banner-oneplus.jpg" alt="oneplus_8_pro" class="img-fluid">
						</div>
						<div class="carousel-item">
							<img src="images/banner-samsung.jpg" alt="samsung_s20_ultra" class="img-fluid">
						</div>
					</div>
					
					<a class="carousel-control-prev" href="#preview" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#preview" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail">
					<img src="images/POCO-F2-Pro.jpg" alt="camera" class="img-fluid">
					<center class="contentt">
						<h4><b>POCO F2 Pro</b></h4>
						<p>Android v10 (Q), 6.67 inches (16.94 cm) bezel-less display, Qualcomm Snapdragon 865 Octa core Processor, 6 GB RAM, 128 GB internal storage, 64 + 13 + 5 + 2 MP Quad Rear Cameras, 20 MP Front Camera, 4700 mAh battery</p>
						<p><b>Price: Rs.40,790.00</b></p>
						<?php if(check_if_added_to_cart(1)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=1" name="add" value="add">Add to cart</a>
						<?php }?>
					</center>
					</div>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/huawei-mate-30-pro.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>HUAWEI Mate 30 Pro</b></h4>
						<p>Android v10 (Q), 6.53 inches (16.59 cm) bezel-less display, Kirin 990 Octa core Processor, 8 GB RAM, 256 GB internal storage, 40 + 40 + 8 MP Triple Rear Cameras, 32 MP Front Camera, 4500 mAh battery with Super Charging</p>
						<p><b>Price: Rs.86,590.00</b></p>
						<?php if(check_if_added_to_cart(2)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=2" name="add" value="add">Add to cart</a>
						<?php }?>
					</center></div>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/oneplus-8-pro.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>OnePlus 8 Pro</b></h4>
						<p>Android v10 (Q), 6.78 inches (17.22 cm) bezel-less display, Qualcomm Snapdragon 865 Octa core Processor, 8 GB RAM, 128 GB internal storage, 48 + 48 + 8 + 5 MP Quad Rear Cameras, 16 MP Front Camera, 4510 mAh battery</p>
						<p><b>Price: Rs.54,999.00</b></p>
						<?php if(check_if_added_to_cart(3)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=3" name="add" value="add">Add to cart</a>
						<?php }?>
					</center></div>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/realme-x2-pro.png" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Realme X2 Pro</b></h4>
						<p>Android v9.0 (Pie), 6.5 inches (16.51 cm) bezel-less display, Qualcomm Snapdragon 855+ Octa core Processor, 12 GB RAM, 256 GB internal storage, 64 + 13 + 8 + 2 MP Quad Rear Cameras, 16 MP Front Camera, 4000 mAh battery</p>
						<p><b>Price: Rs.35,999.00</b></p>
						<?php if(check_if_added_to_cart(4)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=4" name="add" value="add">Add to cart</a>
						<?php }?>
					</center></div>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/Samsung-galaxy-s20-ultra.jpg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Samsung Galaxy S20 Ultra</b></h4>
						<p>Android v10 (Q), 6.9 inches (17.53 cm) bezel-less display, Samsung Exynos 990 Octa core Processor, 12 GB RAM, 128 GB internal storage, 108 + 48 + 12 MP Triple Rear Cameras, 40 MP Front Camera, 5000 mAh battery with Fast Charging</p>
						<p><b>Price: Rs.97,999.00</b></p>
						<?php if(check_if_added_to_cart(5)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=5" name="add" value="add">Add to cart</a>
						<?php }?>
					</center></div>
				</div>
				<div class="col-md-4 buffer">
					<div class="col-md-12 img-thumbnail"><img src="images/xiaomi-mi-mix-alpha.jpeg" alt="camera" class="img-fluid"><center class="contentt">
						<h4><b>Xiaomi Mi Mix Alpha</b></h4>
						<p>Android v9.0 (Pie), 7.9 inches (20.07 cm) bezel-less display, Qualcomm Snapdragon 855 Plus Octa core Processor, 12 GB RAM, 512 GB internal storage, 108 + 20 + 12 MP Triple Rear Cameras, 4050 mAh battery with Fast Charging</p>
						<p><b>Price: Rs.1,99,990.00</b></p>
						<?php if(check_if_added_to_cart(6)){
						?>
						<a type="button" class="btn btn-primary btn-block" disabled>Added to cart</a>
						<?php }
						else {
						?>
						<a type="button" class="btn btn-primary btn-block"href="cart-add.php?id=6" name="add" value="add">Add to cart</a>
						<?php }?>
					</center></div>
				</div>
			</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>