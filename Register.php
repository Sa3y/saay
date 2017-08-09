<?php include "dbconnect.php"?>

<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "sa3i");

if (isset($_POST['signup-btn'])) {

	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);




	if ($password == $password2) {
		$password = md5($password);
		$sql = "INSERT INTO users(fname,lname,email,password) VALUES('$fname', '$lname', '$email', '$password')";
		mysqli_query($db, $sql);
		?>
		<script> alert('Thank you! You have signed Successfully'); </script>
		<?php
		header("location: subConfirm.html");
	} else {
		?>
		<script>alert('The two password do not match, please try again!');</script>
		<?php
	}

}

?>