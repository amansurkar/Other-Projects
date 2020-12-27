<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/home_style.css">

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

	<div class="section" id="page">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-md-9">
						<div id="outter">
							<div id="inner">
								<div id="table">
									<table class="table table-hover">
										<thead>
											<tr>
												
												<th scope="col">Mobiles</th>
											    <th scope="col">Price</th>
											    <th scope="col">Stock</th>
										    </tr>
										</thead>
										<tbody>

											<?php 

												$conn = mysqli_connect("localhost", "root", "", "mobile");

												$query = "SELECT * FROM `mobile_detail`";

												$query_run = mysqli_query($conn, $query);

										    	while ($row = mysqli_fetch_assoc($query_run))
											    	{
											    		echo "<tr>
												    		
												    			<td>" .$row['mobile']. "</td>
												    			<td>" .$row['price']. "</td>
												    			<td>" .$row['stock']. "</td>
											    			</tr>";	
											    	}

											?>
										
										</tbody>
									</table>										
								</div>
								<button class="btn btn-primary" id="proceed" onclick="proceed()">Proceed To Buy</button>
									<script type="text/javascript">
										function proceed()
										{
											window.location='http://localhost/mobile/customer_detail.php';
										};
									</script>		
							</div>								
						</div>
					</div>
					</div>
					<div class="col-sm-2"></div>
				</div>	
			</div>			
		</div>		
	</div>




</body>
</html>