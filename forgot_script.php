<?php
	include 'includes/common.php';
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = md5(mysqli_real_escape_string($con,$_POST['newp']));
	$select_query = "select * from users where email = '$email'";
	$result = mysqli_query($con,$select_query) or die(mysqli_error($con));
	$num = mysqli_num_rows($result);
	if($num==0)
	{
		header('Location:index_page.php?error=Email id not registered');
	}
	else
	{
		$update_query = "update users set password = '$pass' where email = '$email'";
		$result_update = mysqli_query($con,$update_query) or die(mysqli_error($con));
		$to = $email;
        $subject = "Reset Password";
        $txt = "Your password is : $pass";
        $headers = "From: example@gmail.com";
		mail($to,$subject,$txt,$headers);
	}
?>