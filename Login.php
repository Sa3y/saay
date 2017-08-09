<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "sa3i");



$error = false;

if(isset($_POST['login-btn'])){
	$email = trim($_POST['email']);
	$email = htmlspecialchars(strip_tags($email));

	$password = trim($_POST['password']);
	$password = htmlspecialchars(strip_tags($password));

	if(empty($email)){
		$error = true;
		$errorEmail = 'Please input email';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error = true;
		$errorEmail = 'Please enter a valid email address';
	}

	if(empty($password)){
		$error = true;
		$errorPassword = 'Please enter password';
	}elseif(strlen($password)< 6){
		$error = true;
		$errorPassword = 'Password at least 6 character';
	}

	if(!$error){
		$password = md5($password);
		$sql = "select * from users where email='$email' ";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if($count==1 && $row['password'] == $password){
			$_SESSION['username'] = $row['username'];
			header('location: profile.html');
		}else{
			$errorMsg = 'Invalid Username or Password';
		}
	}
}


	
?>