<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
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
			<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">Staize</a>
			<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active me-2" aria-current="page" href="home.php">Home</a>
					</li>
					<li>
						<a class="nav-link me-2" href="reserve.php">Reservation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="room.php">Room</a>
					</li>

				</ul>
			</div>
		</div>
		<ul class="nav navbar-nav pull-right ">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $name; ?></a>
				<ul class="dropdown-menu">
					<li><a href="index.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
		</div>
	</nav>
	<br><br><br>
	<br />
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<center>
					<div class="alert alert-info">Fill up form</div>
				</center>
				<?php
				$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_connect_error());
				$fetch = $query->fetch_array();
				?>
				<br />
				<form method="POST" enctype="multipart/form-data" action="save_form.php?transaction_id=<?php echo $fetch['transaction_id'] ?>">
					<div class="form-inline" style="float:left;">
						<label>Firstname</label>
						<br />
						<input type="text" value="<?php echo $fetch['firstname'] ?>" class="form-control" size="40" disabled="disabled" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Middlename</label>
						<br />
						<input type="text" value="<?php echo $fetch['middlename'] ?>" class="form-control" size="40" disabled="disabled" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Lastname</label>
						<br />
						<input type="text" value="<?php echo $fetch['lastname'] ?>" class="form-control" size="40" disabled="disabled" />
					</div>
					<br style="clear:both;" />
					<br />
					<div class="form-inline" style="float:left;">
						<label>Room Type</label>
						<br />
						<input type="text" value="<?php echo $fetch['room_type'] ?>" class="form-control" size="20" disabled="disabled" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Room No</label>
						<br />
						<input type="number" min="0" max="999" name="room_no" class="form-control" required="required" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Days</label>
						<br />
						<input type="number" min="1" max="999" name="days" class="form-control" required="required" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label>Extra Bed</label>
						<br />
						<input type="number" min="0" max="999" name="extra_bed" class="form-control" />
					</div>
					<div class="form-inline" style="float:left; margin-left:20px;">
						<label style="color:#ff0000;">*Extra Bed cost 800</label>
					</div>
					<br style="clear:both;" />
					<br />
					<button name="add_form" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style="text-align:right; margin-right:10px;" class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Staize 2023 </label>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</html>