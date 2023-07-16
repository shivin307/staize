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
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body"><center>
				<div class = "alert alert-info">Change Room</div>
			</center>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_connect_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>
								<option value = "Superior" <?php if($fetch['room_type'] == "Superior"){echo "selected";}?>>Superior</option>
								<option value = "Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value = "Jr. Suite" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>Jr. Suite</option>
								<option value = "Executive Suite" <?php if($fetch['room_type'] == "Executive Suite"){echo "selected";}?>>Executive Suite</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Staize 2023 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>