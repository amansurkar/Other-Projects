<?php 

	$conn = mysqli_connect("localhost", "root", "", "mobile");

/*	function update_stock()
	{
		$query2 = "SELECT `stock` FROM `mobile_detail` WHERE mobile = '$mobile' ";
		$query2_run = mysqli_query($conn, $query2);
		$result1 = mysqli_fetch_array($query2_run);
		$stock = $result1['stock'];

		if ($stock > 0) 
		{
			$updated_stock = $stock - $quantity;
			$update_query = "UPDATE `mobile_detail` SET `stock`= '$updated_stock' WHERE mobile = '$mobile_detail' ";
			$update_query_run = mysqli_query($conn, $update_query);
		}
		else
			echo '<script>alert("Out of Stock! Please Update Stock")</script>';
	}
*/

	
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mbno = $_POST['mbno'];
		$city = $_POST['city'];
		$quantity = $_POST['quantity'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$payment = $_POST['payment'];

		$query1 = "SELECT `price` FROM `mobile_detail` WHERE mobile = '$mobile' ";
		$query1_run = mysqli_query($conn, $query1);
		$result = mysqli_fetch_array($query1_run);
		$price =  $result['price'];
		$tot_price = $price*$quantity;

		$query2 = "SELECT `stock` FROM `mobile_detail` WHERE mobile = '$mobile' ";
		$query2_run = mysqli_query($conn, $query2);
		$result1 = mysqli_fetch_array($query2_run);
		$stock = $result1['stock'];
		echo $stock;

		if ($stock > 0) 
		{
			$updated_stock = $stock - $quantity;
			$update_query = "UPDATE `mobile_detail` SET `stock`= '$updated_stock' WHERE mobile = '$mobile' ";
			$update_query_run = mysqli_query($conn, $update_query);
		}
		else
			echo '<script>alert("Out of Stock! Please Update Stock")</script>';


	
		$query = "INSERT INTO `customer_detail`(`name`, `email`, `mbno`, `address`, `city`, `state`, `quantity`, `payment`, `mobile`, `bill`) VALUES ('$name', '$email', '$mbno', '$address', '$city', '$state', '$quantity', '$payment', '$mobile', '$tot_price')";

		$query_run = mysqli_query($conn, $query);

		if($query_run)
			header('location: bill.php');
		else
			echo "Failed to Register customer detail";


		
	}
	


?>