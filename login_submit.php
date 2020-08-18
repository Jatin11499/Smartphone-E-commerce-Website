<?php
	require 'includes/common.php';
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
	$select_query = "select id, email from users where email='$email' and password='$pass'";
	$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
	$info = mysqli_num_rows($select_query_result);
	if($info==0)
	{
		header('Location:index_page.php?error=Enter correct email and password.');
	}
	else
	{
		$row = mysqli_fetch_array($select_query_result);
		$_SESSION['email']=$row[1];
		$_SESSION['user_id']=$row[0];
		header('Location:home.php');
	}
?>