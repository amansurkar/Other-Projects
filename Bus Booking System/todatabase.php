<?php
	
	
		$str = $_POST['finalstr'];
		$totfare =$_POST['finalfare'];
		$busname = $_POST['moviestr'];
		

		$conn = mysqli_connect("localhost", "root", "", "bus_booking");
		$query = "INSERT INTO `seatno`(`seatno`, `totfare`, `busname`) VALUES ('$str', '$totfare', '$busname');";
		$query_run = mysqli_query($conn, $query);
		
		


?>