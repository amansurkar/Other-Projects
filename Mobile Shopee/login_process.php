<?php
	
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$conn = mysqli_connect("localhost", "root", "", "mobile") or die($link);

	$result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password = '$password'") 
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
		echo "<script>window.location='http://localhost/mobile/login.php';</script>";
	}
	
?>	

