<?php
	require 'includes/common.php';
	if(!isset($_SESSION['email']))
	{
		header('Location:index_page.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your Cart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<link href="css/index.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div class="container tbc">
		<div class="table-responsive col-md-6 mx-auto">
			<table class="table">
					
		<?php
			$user_id = $_SESSION['user_id'];
			$select_query = "select i.pid,i.name,i.price from items as i, users as u, users_items as ui where ui.user_id = u.id and u.id=$user_id and ui.item_id=i.pid and status='Added to cart'";
			$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
			if(mysqli_num_rows($select_query_result)==0)
			{
				echo "<br><br><center><h2>Add items to the cart first!</h2></center><br><br>";
			}
			else 
			{?>
			<tbody>
				<tr>
					<th>Item Number</th>
					<th>Item Name</th>
					<th>Price</th>
					<th></th>
				</tr>
		<?php
			$sum=0;
			$id="";
			while($row=mysqli_fetch_array($select_query_result))
			{
				$sum = $sum + $row[2];
                $id .= $row[0] . ",";
				echo "<tr>
						<td>" . "#" . $row[0] . "</td>
						<td>" . $row[1] . "</td>
						<td>Rs " . $row[2] . "</td>
						<td><a href='cart-remove.php?id={$row[0]}' type='button' class='remove_item_link btn btn-danger'> X </a></td>
                      </tr>";
			}
			$id = rtrim($id, ",");
            echo "<tr>
				<td></td>
				<td>Total</td>
				<td>Rs " . $sum . "</td>
				<td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
            </tr>";
			}
		?>
			</tbody>
		</table>
		</div>
		</div>
		<?php 
			include 'includes/footer.php';
		?>
	</body>
</html>