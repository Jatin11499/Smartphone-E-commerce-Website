<?php
	require("includes/common.php");

	if (!isset($_SESSION['email'])) {
		header('Location:index_page.php');
	}
	
	$old_pass = MD5(mysqli_real_escape_string($con,$_POST['oldp']));
	$new_pass = MD5(mysqli_real_escape_string($con,$_POST['newp']));
	$rep_pass = MD5(mysqli_real_escape_string($con,$_POST['renew']));
	$query = "select password from users where email ='".$_SESSION['email']."'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$orig_pass = $row['password'];

	if ($new_pass != $rep_pass)
	{
		header('Location: setting.php?error=The two passwords don\'t match.');
	} 
	else
	{
		if ($old_pass == $orig_pass)
		{
			$query = "UPDATE users SET password = '".$new_pass."' WHERE email = '".$_SESSION['email']."'";
			mysqli_query($con, $query) or die($mysqli_error($con));
			header('Location: setting.php?error=Password Updated Successfully');
		} 
		else
		{
			header('Location: setting.php?error=Wrong Old Password.');
		}
	}
?>