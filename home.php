<?php 
include 'config/config.php';
if (empty($_SESSION['id'])) {
	header("Location: ./");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4></h4>
				</div>
				<div class="col-md-4">
					<h2 class="well text-center">Hi, <?=ucwords($_SESSION['firstname'].' '.$_SESSION['lastname']); ?></h2>
					<p>Email: <?=$_SESSION['email']; ?></p>
					<a href="logout.php">Logout</a>
				</div>
				<div class="col-md-4">
					<h4></h4>
				</div>
			</div>
		</div>
</body>
</html>