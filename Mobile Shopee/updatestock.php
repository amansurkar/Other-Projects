<!DOCTYPE html>
<html>
<head>
	<title>Update Stock</title>

	<link rel="stylesheet" type="text/css" href="css/updatestock_style.css">
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
								<form action="updatestock_form.php" method="POST">
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="mobile">Select Mobile Phone :</label>
							  					<select class="form-control" id="mobile" name="mobile"> 
		   											 <option disabled selected value>Please Select</option>
		        										<?php
		        											$conn1 = mysqli_connect("localhost", "root", "", "mobile");
		        											$query1 = "SELECT `mobile` FROM `mobile_detail`";
		        											
		        											$query_run1 = mysqli_query($conn1, $query1);
		            										while($row = mysqli_fetch_array($query_run1))
												            {
												      
												             echo "<option>" .$row['mobile']. " </option>";
												      
												            }               
												        ?>
												</select>											
										</div>
										<div class="form-group col-md-4">
											<label>Price :</label>
											<input class="form-control" type="number" name="price" id="price">
										</div>
										<div class="form-group col-md-4">
											<label>Stock :</label>
											<input class="form-control" type="number" name="stock" id="stock" >
										</div>	
									</div>
							 		<div class="form-group">
										<input style="margin-left: 15px;" type="submit" name="update" id="update" value="Update Stock" class="btn btn-primary">
										<input type="submit" id='addmobile' name="addmobile" class="btn btn-primary" value="Add a New Mobile">
										<button style="margin-left: 27%;" class="btn btn-primary" id="homebtn" onclick="proceed()">Go back to Home Page</button>
										<script type="text/javascript">
										function proceed()
										{
											window.location='http://localhost/mobile/home.php';
										};
										</script>	
									</div>
								</form>									
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