<?php
	$pid = $_GET['id'];
	include 'includes/common.php';
	$uid = $_SESSION['user_id'];
	$insert_query = "insert into users_items(user_id,item_id,status) values($uid,$pid,'Added to cart')";
	echo $insert_query;
	$insert_query_submit = mysqli_query($con,$insert_query) or die(mysqli_error($con));
	header('Location:home.php');
?>