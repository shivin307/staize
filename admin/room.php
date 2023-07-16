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
						<a class="nav-link me-2" aria-current="page" href="home.php">Home</a>
					</li>
					<li>
						<a class="nav-link me-2" href="reserve.php">Reservation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active me-2" href="room.php">Room</a>
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
					<div class="alert alert-info">Room</div>
				</center>
				<a class="btn btn-success" href="add_room.php"><i class="glyphicon glyphicon-plus"></i> Add Room</a>
				<br />
				<br />
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `room`") or die(mysqli_connect_error());
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['room_type'] ?></td>
								<td><?php echo $fetch['price'] ?></td>
								<td>
									<center><img src="../photo/<?php echo $fetch['photo'] ?>" height="50" width="50" /></center>
								</td>
								<td>
									<center><a class="btn btn-warning" href="edit_room.php?room_id=<?php echo $fetch['room_id'] ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a class="btn btn-danger" onclick="confirmationDelete(this); return false;" href="delete_room.php?room_id=<?php echo $fetch['room_id'] ?>"><i class="glyphicon glyphicon-remove"></i> Delete</a></center>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Staize 2023 </label>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	function confirmationDelete(anchor) {
		var conf = confirm("Are you sure you want to delete this record?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#table").DataTable();
	});
</script>

</html>