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
						<a class="nav-link me-2" href="index.php">
							<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
							<lord-icon src="https://cdn.lordicon.com/kxoxiwrf.json" trigger="hover" style="width:50px;height:50px">
							</lord-icon>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="reservation.php">
							<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
							<lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" style="width:50px;height:50px">
							</lord-icon>
						</a>
					</li>
					<li>
						<a class="nav-link me-2" href="contactus.php">
							<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
							<lord-icon src="https://cdn.lordicon.com/elzslyvl.json" trigger="hover" style="width:50px;height:50px">
							</lord-icon>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2" href="aboutus.php">
							<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
							<lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" style="width:	50px;height:50px">
							</lord-icon>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><br>
	<div class="container">
		<div class="panel">
			<div class="panel-body">
				<br><br><br>
				<strong>
					<center>
						<h3>ROOM RESERVATION</h3>
					</center>
				</strong>
				<br>
				<?php
				require_once 'admin/connect.php';
				$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysqli_connect_error());
				while ($fetch = $query->fetch_array()) {
				?>
					<div class="well" style="height:300px; width:100%;">
						<div style="float:left;">
							<img src="photo/<?php echo $fetch['photo'] ?>" height="250" width="350" />
						</div>
						<a style="margin-left:580px;" href="add_reserve.php?room_id=<?php echo $fetch['room_id'] ?>" class="btn btn-info"><i class="glyphicon glyphicon-list"> Book</i></a>
						<div style="float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type'] ?></h3>
							<h4><?php echo "Price: ₹ " . $fetch['price'] . ".00" ?></h4>
							<!-- <h4> • Features</h4>
							<h5> - 2 Rooms | 1 Bathroom | 1 Balcony | 3 Sofa</h5>
							<h4> • Facilities</h4>
							<h5> - Wifi, Television, AC, Room Heater</h5> -->
							<br /><br /><br /><br /><br /><br>
						</div>
					</div>
				<?php
				}
				?>
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