<!DOCTYPE html>
<?php require_once "connect.php" ?>
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
			<center><a class="navbar-brand me-5 fw-bold h-font" href="index.php">Staize</a></center>
		</div>
	</nav><br><br><br>
	<div class="container">
		<br />
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<center>
						<h4>Administrator</h4>
					</center>
				</div>
				<div class="panel-body">
					<form method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="required" />
						</div>
						<br />
						<div class="form-group">
							<button name="login" class="form-control btn btn-primary"><i class="glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once 'login.php' ?>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<br />
	<br />
	<div class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Staize 2023 </label>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</html>