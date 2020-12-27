<!DOCTYPE html>
<html>
<head>
	<title>View Bills</title>

	<link rel="stylesheet" type="text/css" href="css/viewbill_style.css">


	<!-------W3SCHOOL BOOTSTRAP----->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


</head>
<body>


	<!-------NAVBAR---------->
	<div id="navbar">		 
			<nav class="navbar-inverse">
			  	<div class="container-fluid">
			    	<div class="navbar-header">
			    		<a class="navbar-brand" href="home.php">Mobile Shop</a>
			    	</div>
			    	<ul class="nav navbar-nav">
			    		<li class="active"><a href="home.php">Home</a></li>
			    		<li><a href="addmobile.php">Add New Mobile</a></li>
			    		<li><a href="stock.php">Check Stock</a></li>
			       		<li><a href="viewbill.php">Bill Book</a></li>
			    	</ul>
			    	<ul class="nav navbar-nav navbar-right">
			    		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			    	</ul>
			    </div>
			</nav>	
	</div>

	<br>
	<br>
	<br>
	<br>
	
	<div id="page" class="section">
		<div class="section-center">
					<div class="container">
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-md-11">
								<div id="outter">
									<div id="inner">
											<form action="" method="POST">
												<div class="form-row">
													<div class="form-group col-md-4">
														<label>Enter Name to Be Searched:</label><br>
														<input class="form-control" type="text" name="name" placeholder=" Name">
														<br>	
														<input class="btn btn-primary" type="submit" name="search" value="Confirm">			
													</div>
														
												</div>	
											</form>
											<div id="table">
												<table class="table">								
														<tr>
															<th>Name</th>
															<th>Mobile No.</th>
															<th>Mobile</th>
															<th>Quantity</th>
															<th>Total Amount</th>
															<th>Payment Mode</th>
														</tr> 
														<br>
													<tbody>
														<?php
															
															$conn = mysqli_connect("localhost", "root", "", "mobile");
															if (isset($_POST['search'])) 
															{
																$name = $_POST['name'];
																$query = "SELECT * FROM `customer_detail` WHERE name='$name'";

																$query_run = mysqli_query($conn, $query);
																while ($row = mysqli_fetch_assoc($query_run)) 
																{
														?>
																		<tr>
																			<td><?php echo $row['name']; ?></td>
																			<td><?php echo $row['mbno']; ?></td>
																			<td><?php echo $row['mobile']; ?></td>
																			<td><?php echo $row['quantity']; ?></td>
																			<td><?php echo $row['bill']; ?></td>
																			<td><?php echo $row['payment']; ?></td>
																		</tr>
														<?php 											
																}
															}
														?>		
													</tbody>
												</table>
											</div>	
									</div>	
								</div>								
							</div>
						</div>				
					</div>						
		</div>
	</div>



</body>
</html>