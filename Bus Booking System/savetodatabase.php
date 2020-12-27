<?php
	
	
		$str = intval($_POST['q']);
		

		$conn = mysqli_connect("localhost", "root", "", "bus_booking");
		$query = "INSERT INTO `seatno`(`seatno`) VALUES ('$str');";
		$query_run = mysqli_query($conn, $query);



?>