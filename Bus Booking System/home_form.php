<?php
	
	global $boarding;
	global $destination;
	global $passenger;
	global $date;



	if(isset($_POST['submit']))
	{
		$boarding = $_POST['boarding'];
		$destination = $_POST['destination'];
		$passenger = $_POST['passenger'];
		$date = $_POST['date'];

		$conn = mysqli_connect("localhost", "root", "", "bus_booking");

		$query = "INSERT INTO `route`(`boarding`, `destination`, `passenger`, `date`) VALUES ('$boarding', '$destination', '$passenger', '$date');";

		$result = mysqli_query($conn, $query);
		if ($result) 
		{
			header('location: busesavail.php');
		}
	}






?>