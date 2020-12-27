<?php
	
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$conn = mysqli_connect("localhost", "root", "", "bus_booking") or die($link);

	$result = mysqli_query($conn, "select * from login where username = '$username' and password = '$password'") 
				or die("Failed to query database" .mysql_error());
	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row["password"] == $password)
	{
		echo "Login Successfull!! Welcome" .$row['username'];
		header('location:home.php');
	} 
	else
	{
		echo '<script>alert("Login Failed")</script>';
		echo "<script>window.location='http://localhost/login/login.php';</script>";
	}
	
?>	

