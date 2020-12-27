<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Home</title>

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

	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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




	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-7">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Book Your bus tickets quickly and enjoy the ride.
							</p>
						</div>
					</div>
					<div class="col-md-5 col-md-pull-4">
						<div class="booking-form">
							<form action="home_form.php" method="POST">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
										<span class="form-label">From:</span>
											<select class="form-control" onchange="assignvalue()" id="boarding" name="boarding">
											<option selected="default" disabled selected value>Choose..</option>
											<option>Aurangabad</option>
				    						<option>Nagpur</option>
				    						<option>Akola</option>
											</select>
										<span class="select-arrow"></span>	
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Destination:</span>
												<select class="form-control" onchange="assignvalue()" id="destination" name="destination">
												<option disabled selected value>Choose..</option>	
												<option>Aurangabad</option>
				    							<option>Nagpur</option>
				    							<option>Akola</option>
												</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date:</span>
											<input class="form-control" name="date" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Passengers</span>
											<select class="form-control" name="passenger">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>			
									</div>
								</div>								
								<div class="form-btn">
									<button class="submit-btn" name="submit">Confirm</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">

		function resetvalue()
		{
			var dropdown1 = document.getElementById("boarding");
			var dropdown2 = document.getElementById("destination");
			dropdown1.selectedIndex = 0;
			dropdown2.selectedIndex = 0;
		}

		
		function assignvalue()
		{
			var from = document.getElementById("boarding").value;
			var destination = document.getElementById("destination").value;

			if (from==destination) 
			{
				alert("Boarding and Destination cannot be the Same!");
				resetvalue(boarding);
				resetvalue(destination);

			}
		}


	</script>



</body>


</html>