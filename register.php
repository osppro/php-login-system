<?php include 'config/config.php'; ?>
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
					<h2 class="well text-center">Login Form</h2>
				</div>
				<div class="col-md-4">
					<h4></h4>
				</div>
			</div>

			 <div class="row">
			 	<div class="container">
			 		<div class="col-md-4">
			 			<h4></h4>
			 		</div>
			 		<!-- `id`, `firstname`, `lastname`, `email`, `password` -->
			 		<div class="col-md-4 well">
			 			<form method="POST" action="">
			 				<div class="form-group">
			 					<label>Firstname</label>
			 					<input type="text" class="form-control" required name="firstname" placeholder="Enter Firstname">
			 				</div>

			 				<div class="form-group">
			 					<label>Lastname</label>
			 					<input type="text" class="form-control" required name="lastname" placeholder="Enter Lastname">
			 				</div>

			 				<div class="form-group">
			 					<label>Email</label>
			 					<input type="email" class="form-control" required name="email" placeholder="Enter Email">
			 				</div>

			 				<div class="form-group">
			 					<label>Password</label>
			 					<input type="password" class="form-control" required name="password" placeholder="Enter Password">
			 				</div>
			 				<div class="form-group">
			 					<button class="btn btn-primary" type="submit" name="register_btn">Register</button>
			 				</div>
			 				<p>Already a member ? <a href="./">Login</a></p>
			 			</form>
			 		</div>
			 		<div class="col-md-4">
			 			<h4></h4>
			 		</div>
			 	</div>
			 </div>
		</div>
</body>
</html>