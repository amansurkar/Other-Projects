<!DOCTYPE html>
<html>
<head>
	<title>View Tickets</title>

	<link rel="stylesheet" type="text/css" href="css/viewtickets.css">
	
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
							<div class="col-md-11">
								<div id="outter">
									<div id="inner">
											<form action="" method="POST">
												<input type="text" name="name" placeholder="Enter Name to be Searched">
												<input type="submit" name="search" value="Confirm">	
											</form>
											<div id="table">
												<table class="table">								
														<tr>
															<th>Name</th>
															<th>Email</th>
															<th>Phone No.</th>
															<th>Gender</th>
															<th>Busname</th>
															<th>Seat No.</th>
															<th>Total Fare</th>
														</tr> <br>
													<tbody>
														<?php
															
															$conn = mysqli_connect("localhost", "root", "", "bus_booking");
															if (isset($_POST['search'])) 
															{
																$name = $_POST['name'];
																$query = "SELECT * FROM `passenger` WHERE name='$name'";

																$query_f = "SELECT 'name', 'email', 'mbno', 'gender', 'seatno', 'totfare' FROM passenger, seatno WHERE name = '$name' AND (passenger.id = seatno.id)";

																$query_1 = "SELECT name, email, mbno, gender, seatno, totfare, busname\n"

   																			. "FROM passenger, seatno\n"

    																		. "WHERE name='$name' AND passenger.id = seatno.id";

																$query_run = mysqli_query($conn, $query_1);
																while ($row = mysqli_fetch_assoc($query_run)) 
																{
														?>
																		<tr>
																			<td><?php echo $row['name']; ?></td>
																			<td><?php echo $row['email']; ?></td>
																			<td><?php echo $row['mbno']; ?></td>
																			<td><?php echo $row['gender']; ?></td>
																			<td><?php echo $row['busname']; ?></td>
																			<td><?php echo $row['seatno']; ?></td>
																			<td><?php echo $row['totfare']; ?></td>
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