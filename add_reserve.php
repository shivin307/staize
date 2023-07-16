<!DOCTYPE html>
<html lang="en">

<head>
	<title>Staize</title>
	<meta charset="utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Staize</a>
			<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
							<a class="nav-link me-2 fw-bold" href="reservation.php">MAKE A RESERVATION</a>
					</li>
				</ul>
			</div>
	</nav>
	<br>
	<br>
	<br>
	<div style="margin-left:0;" class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<br>
				<?php
				require_once 'admin/connect.php';
				$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_connect_error());
				$fetch = $query->fetch_array();
				?>
				<div style="height:300px; width:800px;">
					<div style="float:left;">
						<img src="photo/<?php echo $fetch['photo'] ?>" height="300px" width="400px">
					</div>
					<div style="float:left; margin-left:10px;">
						<h3><?php echo $fetch['room_type'] ?></h3>
						<h3 style="color:#00ff00;"><?php echo "₹ " . $fetch['price'] . ".00"; ?></h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<br style="clear:both;" />
				<div class="well col-md-12">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Firstname</label>
							<input type="text" class="form-control" name="firstname" required="required" />
						</div>
						<div class="form-group">
							<label>Middlename</label>
							<input type="text" class="form-control" name="middlename" />
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" class="form-control" name="lastname" required="required" />
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="address" required="required" />
						</div>
						<div class="form-group">
							<label>Contact No</label>
							<input type="text" class="form-control" name="contactno" required="required" />
						</div>
						<div class="form-group">
							<label>Check in</label>
							<input type="date" class="form-control" name="date" required="required" />
						</div>
						<br />
						<div class="form-group">
							<button class="btn btn-info form-control" name="add_guest"><i class="glyphicon glyphicon-save"></i> Reservation</button>
						</div>
						<div>
							<center><a href="reservation.php"> Back to Reservation</a></center>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
				<?php require_once 'add_query_reserve.php' ?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style="text-align:right; margin-right:10px;" class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Staize 2023 </label>
	</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>