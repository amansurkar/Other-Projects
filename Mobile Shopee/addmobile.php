<!DOCTYPE html>
<html>
<head>
	<title>Add Mobile</title>

	<link rel="stylesheet" type="text/css" href="css/addmobile_style.css">

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
								<form action="addmobile_form.php" method="POST">
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="model">Mobile Name :</label>
											<input class="form-control" type="text" name="model" id="model" placeholder="Name of Mobile" required>
										</div>
										<div class="form-group col-md-4">
											<label for="price">Price of Mobile :</label>
											<input class="form-control" type="text" name="price" id="price" placeholder="Price of Mobile" required>
										</div>
										<div class="form-group col-md-4">
											<label for="stock">Quantity/Stock :</label>
											<input class="form-control" type="text" name="stock" id="stock" placeholder="Stock of Mobile" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-sm-2">
											<input type="submit" name="addmobile" id="addmobile" class="btn btn-primary" value="Add Mobile">
										</div>
										<div class="form-group col-sm-2">
											<input type="submit" name="deletemobile" id="deletemobile" class="btn btn-primary" value="Delete Mobile">
										</div>	
									</div> 						
								</form>
								<div class="form-group">
									<div class="form-group">
										<button style="margin-left: 42%;" class="btn btn-primary" id="proceedhome" onclick="proceedhome()">Go Back To Home</button>	
													
									</div>	
									
									<script type="text/javascript">
										function proceedhome()
										{
											window.location='http://localhost/mobile/home.php';
										};
									</script>
								
								
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>