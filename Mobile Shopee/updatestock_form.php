<?php
	
	$conn = mysqli_connect("localhost", "root", "", "mobile");

	if(isset($_POST['update']))
	{
		$mobile = $_POST['mobile'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];

		/*$update_query = "UPDATE mobile_detail SET `stock`= CASE WHEN `stock` IS NOT NULL THEN '$stock' ELSE 'stock' END, `price` = CASE WHEN `price` IS NOT NULL THEN '$price' ELSE 'price' END WHERE mobile = '$mobile'";
		
		$update_query_run = mysqli_query($conn, $update_query);
		if ($update_query_run) 
		{
			echo "Successfull";
		}
		else
			echo "Unsucessfull";*/

		if ($stock==NULL) 
		{
			$query = "SELECT `stock` FROM `mobile_detail` WHERE mobile = '$mobile' ";
			$query_run = mysqli_query($conn, $query);
			$result = mysqli_fetch_array($query_run);
			$same_stock = $result['stock'];
			
			$update_query = "UPDATE `mobile_detail` SET `stock`= '$same_stock' WHERE mobile = '$mobile' ";
			$update_query_run = mysqli_query($conn, $update_query);
			if($update_query_run)
			{
				echo '<script>alert("Enter fields to Update")</script>';
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";
			}

		}
		else
		{

			$update_query = "UPDATE `mobile_detail` SET `stock`= '$stock' WHERE mobile = '$mobile' ";
			$update_query_run = mysqli_query($conn, $update_query);
			if ($update_query_run) 
			{
				echo '<script>alert("Updated Successfully")</script>';
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";
			}
			else
				echo '<script>alert("Failed to Update")</script>';
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";		
		}

		if ($price==NULL) 
		{
			$query = "SELECT `price` FROM `mobile_detail` WHERE mobile = '$mobile' ";
			$query_run = mysqli_query($conn, $query);
			$result = mysqli_fetch_array($query_run);
			$same_price = $result['price'];
			
			$update_query = "UPDATE `mobile_detail` SET `price`= '$same_price' WHERE mobile = '$mobile' ";
			$update_query_run = mysqli_query($conn, $update_query);
			if($update_query_run)
			{
				echo '<script>alert("Enter fields to Update")</script>';
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";
			}
		
		}
		else
		{

			$update_query = "UPDATE `mobile_detail` SET `price`= '$price' WHERE mobile = '$mobile' ";
			$update_query_run = mysqli_query($conn, $update_query);
			if ($update_query_run) 
			{
				echo '<script>alert("Updated Successfully")</script>';
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";
			}
			else
				echo '<script>alert("Failed to Update")</script>';	
				echo "<script>window.location='http://localhost/mobile/updatestock.php';</script>";	
		}

	}

	if(isset($_POST['addmobile']))
	{
		header('location: addmobile.php');
	}

	

?>