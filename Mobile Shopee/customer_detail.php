<!DOCTYPE html>
<html>
<head>
	<title>Select Mobile</title>

	<link rel="stylesheet" type="text/css" href="css/customer_detail_style.css">

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

	
	

	<div id="page" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<br>
						<div id="outter">
							<div id="inner">
								<form action="customer_detail_form.php" method="POST">
									<div class="form-row">
								    	<div class="form-group col-md-6">
								    		<label>Name</label>
								        	<input type="text" class="form-control" id="name" placeholder="Name" name="name"/>
								   		</div>
								   		<div class="form-group col-md-6">
								        	<label>Email</label>
								        	<input type="text" class="form-control" id="email" placeholder="Email" name="email" />
							    		</div>
							  		</div>
							  		<div class="form-group">
							  			<label>Mobile Number</label>
							  			<input type="text" class="form-control" id="mbno" placeholder="Mobile Number" name="mbno"  />
							  		</div>
							  		<div class="form-group">
							    		<label>Address</label>
							    		<input type="text" class="form-control" id="address" placeholder="Address" name="address" />
							  		</div>
							  		<div class="form-row">
							    		<div class="form-group col-md-6">
							      			<label>City</label>
							      			<input type="text" class="form-control" id="city" name="city" />
							    		</div>
							    		<div class="form-group col-md-6">
							      			<label>State</label>
							      			<input type="text" class="form-control" id="city" name="state" />
							    		</div>
							  		</div>									
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Quantity</label>
											<input type="text" class="form-control" name="quantity" id="quantity">
										</div>
										<div class="form-group col-md-6">
						  					<label for="payment">Payment Mode :</label>
						  						<select class="form-control" id="payment" name="payment" >
						  							<option disabled selected value>Choose Payment Option..</option>
						    						<option>Cash</option>
						    						<option>Card Payment</option>
						    						<option>UPI</option>
						  						</select>
										</div>	
									</div>
									<div class="form-group">
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
						  			<br>		
						  			<button type="submit" name="submit" id="submit" class="btn btn-primary">Confirm</button>		
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>					
			</div>				
		</div>			
	</div>		

</body>
</html>