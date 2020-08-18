<?php
	include "includes/common.php";
	$iid = $_GET['id'];
	$uid = $_SESSION['user_id'];
	$delete_query = "delete from users_items where user_id=$uid and item_id=$iid";
	$delete_query_result = mysqli_query($con,$delete_query) or die(mysqli_error($con));
	header('Location:cart.php');
?>