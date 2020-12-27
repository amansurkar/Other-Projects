<?php
	
	try{
		$conn = mysqli_connect("localhost", "root", "", "bus_booking");	
		echo "Connection Successfull";
	}catch(mysqli_sql_exception $ex){
		echo "Error in Connection";
	}


	  $name = '';
	  $email = '';
	  $mbno = '';
	  $address = '';
	  $city ='';
	  $state = '';
	  $zip = '';
	  $gender = '';
	  $route = '';
	  $rs = '';

	/*if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['mbno']) || isset($_POST['address']) || isset($_POST['city']) || isset($_POST['state']) || isset($_POST['zip']) || isset($_POST['gender'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mbno = $_POST['mbno'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$gender = $_POST['gender'];
	}
	
	*/

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$mbno = $_POST['mbno'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$gender = $_POST['gender'];
		$route = $_POST['route'];
		/*$query = "insert into 'passenger'(name, email, mbno, address, city, state, zip, gender) values ('$name', '$email','$mbno', '$address', '$city', '$state', '$zip', '$gender');";*/
		
		
		$query = "INSERT INTO `passenger`(`name`, `email`, `mbno`, `address`, `city`, `state`, `zip`, `gender`, `route`) VALUES ('$name','$email','$mbno','$address','$city','$state','$zip','$gender','$route');";

		try{
			$result = mysqli_query($conn, $query);
			if ($result) {
				if (mysqli_affected_rows($conn)>0) {
					echo "<script> alert('Ticket Booked !!')</script>";;
					echo "<script>window.location='http://localhost/login/Home.php';</script>";
				}else{
					echo nl2br("\nUnsuccessfull!");
				}
				
			}
		}catch(exception $ex) {
			echo ("error" .$ex->getmessage());
		}	
	}
	