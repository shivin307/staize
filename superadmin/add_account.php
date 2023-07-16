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
						<a class="nav-link me-2" href="account.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active me-2" href="account.php">Accounts</a>
					</li>
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
				<div class = "alert alert-info">Create Account</div>	
			</center>
				<br />
				<div class = "col-md-4">	
					<form method = "POST">
						<div class = "form-group">
							<label>Name </label>
							<input type = "text" class = "form-control" name = "name" required="required"/>
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" name = "username" required="required"/>
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" name = "password" required="required"/>
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_account.php'?>
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
</html>