<?php 
$con = mysqli_connect("localhost", "root", "", "test");

// user registration...
//`id`, `firstname`, `lastname`, `email`, `password`
if (isset($_POST['register_btn'])) {
	trim(extract($_POST));
	$check = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' ");
	if (mysqli_num_rows($check) > 0) {
		echo "This user already exist";
	}else{
		//insert user..
		$password = md5($password);
		$insert  = mysqli_query($con, "INSERT INTO users VALUES(NULL, '$firstname', '$lastname', '$email', '$password') ");
		if ($insert) {
			echo "User registered successfully";
		}else{
			echo "Error";
		}
	}
}elseif (isset($_POST['login_btn'])) {
	trim(extract($_POST));
	$password = md5($password);
	$sql = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
	if ($sql) {
		$rows = mysqli_fetch_assoc($sql);
		//`id`, `firstname`, `lastname`, `email`, `password`
		$_SESSION['id'] = $rows['id'];
		$_SESSION['firstname'] = $rows['firstname'];
		$_SESSION['lastname'] = $rows['lastname'];
		$_SESSION['email'] = $rows['email'];
		header("Location: home.php");
	}
}


?>
