<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "test");
// user registration...
//`id`, `firstname`, `lastname`, `email`, `password`
if (isset($_POST['register_btn'])) {
	trim(extract($_POST));
	$check = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' ");
	if (mysqli_num_rows($check) > 0) {
		$_SESSION['status'] = "<div class='alert alert-danger'> This user already exist</div>";
	}else{
		//insert user..
		$password = md5($password);
		$insert  = mysqli_query($con, "INSERT INTO users VALUES(NULL, '$firstname', '$lastname', '$email', '$password') ");
		if ($insert) {
			$_SESSION['status'] = "<div class='alert alert-success'> User registered successfully</div>";
		}else{
			$_SESSION['status'] = "<div class='alert alert-danger'> Error</div>";
		}
	}
}elseif (isset($_POST['login_btn'])) {
	trim(extract($_POST));
	$password = md5($password);
	$sql = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
	if (mysqli_num_rows($sql) == 1) {
		$rows = mysqli_fetch_assoc($sql);
		//`id`, `firstname`, `lastname`, `email`, `password`
		$_SESSION['id'] = $rows['id'];
		$_SESSION['firstname'] = $rows['firstname'];
		$_SESSION['lastname'] = $rows['lastname'];
		$_SESSION['email'] = $rows['email'];
		header("Location: home.php");
	}else{
		$_SESSION['status'] = "<div class='alert alert-danger'> Wrong Login details</div>";
	}
}


?>
