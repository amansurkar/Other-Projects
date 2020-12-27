<!DOCTYPE html>
<html>
<head>
	<title>Buses</title>

	<link rel="stylesheet" type="text/css" href="css/busavail.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home_style.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">



	



	
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

	<br>
	<br>
	<br>
	<br>
	<br>

				<div id="page" class="section">
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
														    <th scope="col">Srno.</th>
														    <th scope="col">Bus</th>
														    <th scope="col">AC/Non AC</th>
														    <th scope="col">Fare</th>
													    </tr>
													</thead>    
												  	<tbody>
												    
												    <?php 

												    include 'home_form.php';

												    $conn = mysqli_connect("localhost", "root", "", "bus_booking");
												    
												    if (($boarding =='Aurangabad' AND $destination =='Nagpur') || ($boarding =='Nagpur' AND $destination =='Aurangabad'))
												    {
												    	$query = "SELECT * FROM `aurtonag`";
												    	$query_run = mysqli_query($conn, $query);

												    	while ($row = mysqli_fetch_assoc($query_run))
												    	{
												    
												    		echo "<tr>
													    			<td>" .$row['Srno']. "</td>
													    			<td>" .$row['Bus']. "</td>
													    			<td>" .$row['AC']. "</td>
													    			<td>" .$row['Fare']. "</td>
												    			</tr>";	
												    	}

												    }
												    elseif(($boarding =='Aurangabad' AND $destination =='Akola') ||($boarding =='Akola' AND $destination =='Aurangabad'))
												    {
												    	$query = "SELECT * FROM `aurtoakl`";
												    	$query_run = mysqli_query($conn, $query);

												    	while ($row = mysqli_fetch_assoc($query_run))
												    	{
												    		echo "<tr>
													    			<td>" .$row['Srno']. "</td>
													    			<td>" .$row['Bus']. "</td>
													    			<td>" .$row['AC']. "</td>
													    			<td>" .$row['Fare']. "</td>
												    			</tr>";		
												    	}	
												    }
												    else
												    {
												    	$query = "SELECT * FROM `aurtonag`;";
												    	$query_run = mysqli_query($conn, $query);

												    	while ($row = mysqli_fetch_assoc($query_run))
												    	{
												    		echo "<tr>
													    			<td>" .$row['Srno']. "</td>
													    			<td>" .$row['Bus']. "</td>
													    			<td>" .$row['AC']. "</td>
													    			<td>"  .$row['Fare']. "</td>
												    			</tr>";	
												    	}	
												    }

												    ?>

												    </tbody>
												</table>
											</div>
											<button id="proceed" onclick="proceed()">Proceed</button>

											<script type="text/javascript">
												function proceed()
												{
													window.location='http://localhost/login/seatbooking.php';
												};
											</script>

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

		