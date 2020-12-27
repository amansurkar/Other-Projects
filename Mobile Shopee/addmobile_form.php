<?php

	$conn = mysqli_connect("localhost", "root", "", "mobile");

	if(isset($_POST['addmobile']))
	{
		$model = $_POST['model'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];

		$query = "INSERT INTO `mobile_detail`(`mobile`, `price`, `stock`) VALUES ('$model', '$price', '$stock')";
		$query_run = mysqli_query($conn, $query);
		if($query_run)
		{	
			echo '<script>alert("Mobile Added to DataBase")</script>';
			echo "<script>window.location='http://localhost/mobile/addmobile.php';</script>";
		}	
		else
		{	
			echo '<script>alert("Failed to Add Mobile to Database")</script>';
			echo "<script>window.location='http://localhost/mobile/addmobile.php';</script>";
		}	
	}

	if(isset($_POST['deletemobile']))
	{
		$model = $_POST['model'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];

		$query1 = "DELETE FROM `mobile_detail` WHERE mobile='$model' ";
		$query1_run = mysqli_query($conn, $query1);
		if ($query1_run) 
		{
			echo '<script>alert("Mobile Deleted to DataBase")</script>';
			echo "<script>window.location='http://localhost/mobile/addmobile.php';</script>";
		}
		else
		{	
			echo '<script>alert("Failed to Delete From DataBase")</script>';
			echo "<script>window.location='http://localhost/mobile/addmobile.php';</script>";
		}	
	}	

?>