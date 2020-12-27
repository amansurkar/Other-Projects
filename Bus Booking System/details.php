<!DOCTYPE html>
<html>
<head>
	<title>Details</title>

	<link rel="stylesheet" type="text/css" href="css/details.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home_style.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	

</head>
<body>

	<div id="navbar">		
		<nav class="navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="home.php">Bus Booking</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="home.php">Home</a></li>
		     
		      <li><a href="viewtickets.php">View Tickets</a></li>
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
						<div class="col-md-1"></div>
						<div class="col-md-9">
							<br>
						<div id="outter">
							<div id="inner">	
								<form action="passenger.php" method="POST">
								<div class="form-row">
								    <div class="form-group col-md-6">
								    	<label>Name</label>
								        <input type="text" class="form-control" id="name" placeholder="Name" name="name" />
								    </div>
								    <div class="form-group col-md-6">
								        <label>Email</label>
								        <input type="text" class="form-control" id="email" placeholder="Email" name="email" />
							    	</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Mobile Number</label>
							  		<input type="text" class="form-control" id="mbno" placeholder="Mobile Number" name="mbno" />
							  	</div>
							  	<div class="form-group">
							    	<label>Address</label>
							    	<input type="text" class="form-control" id="address" placeholder="Address" name="address" />
							  	</div>
							  	<div class="form-row">
							    	<div class="form-group col-md-4">
							      		<label>City</label>
							      		<input type="text" class="form-control" id="city" name="city" />
							    	</div>
							    	<div class="form-group col-md-4">
							      		<label>State</label>
							      		<input type="text" class="form-control" id="city" name="state" />
							    	</div>
							    	<div class="form-group col-md-2">
							     		<label>Zip</label>
							      		<input type="text" class="form-control" id="zip" name="zip" />
							    	</div>
							    	<div class="form-group col-md-2">
							     		<label>Gender</label>
							     		<select id="gender" class="form-control" name="gender" />
			      							<option selected>Male</option>
			        						<option>Female</option>
			  							</select>
			  					
							      	</div>
							  	</div>
								<div class="form-group">
						  			<label for="route">Routes :</label>
						  			<select class="form-control" id="route" name="route" >
						  				<option disabled selected value>Choose Route..</option>
						    			<option>Aurangabad - Nagpur</option>
						    			<option>Nagpur - Akola</option>
						    			<option>Akola - Aurangabad</option>
						  			</select>
								</div>
							  		<input type="submit" name="submit" value="Confirm">
									<!-- <button type="submit" name="confirm" class="btn btn-primary">Confirm</button> -->
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