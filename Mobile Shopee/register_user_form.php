<?php
	
	if (isset($_POST['submit'])) 
	{

		$username = $_POST['user'];
		$password = $_POST['pass'];

		$conn = mysqli_connect("localhost", "root", "", "mobile") or die($link);

		$check = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password'";
		$rs = mysqli_query($conn, $check);
		$data = mysqli_fetch_assoc($rs);
		if(mysqli_num_rows($rs) >0)
		{
			echo "<script> alert('User already Exists !!')</script>";
			echo "<script>window.location='http://localhost/mobile/register_user.php';</script>";

		}
		else
		{	
			$query = "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password');";

			$result = mysqli_query($conn, $query);

			if ($result) {
				echo "<script> alert('User Registered Successfully!!')</script>";
				echo "<script>window.location='http://localhost/mobile/login.php';</script>";
			}
		}	
	}

?>