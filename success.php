<?php
	require 'includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('Location:index_page.php');
	}
	else
	{
		$ids = $_GET['itemsid'];
		$ids_arr = explode(',',$ids);
		foreach($ids_arr as $i)
		{
			$a = (int)$i;
			$update_query = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = $a";
			$update_query_result = mysqli_query($con,$update_query) or die(mysqli_error($con));
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Success Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="container sc">
		<center>
			<h1 class="ty">Your order is confirmed.</h1>
			<h3>Thank you for shopping with us. The order shall be delivered to you shortly.</h3>
			<h3><a href="home.php" class="text-primary">Click here</a> to order some more smartphones.</h3>
		</center>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>