<?php
	require 'includes/common.php';
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
	$phone = mysqli_real_escape_string($con,$_POST['con']);
	$city = mysqli_real_escape_string($con,$_POST['city']);
	$add = mysqli_real_escape_string($con,$_POST['add']);
	$select_query = "select * from users where email='$email'";
	$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
	$info = mysqli_num_rows($select_query_result);
	if($info>0)
	{
		header('Location:index_page.php?error=Email id already exists.');
	}
	else
	{
		$insert_query = "insert into users(email,name,phone,password,city,address) values('$email','$name','$phone','$pass','$city','$add')";
		$insert_query_submit = mysqli_query($con,$insert_query);
		$newid = mysqli_insert_id($con);
		$_SESSION['email']=$email;
		$_SESSION['user_id']=$newid;
		header('Location:home.php');
	}
?>