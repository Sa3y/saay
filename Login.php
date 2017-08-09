<?php

session_start();

$db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");



$error = false;

if(isset($_POST['login-btn'])){
	$email = trim($_POST['email']);
	$email = htmlspecialchars(strip_tags($email));

	$password = trim($_POST['password']);
	$password = htmlspecialchars(strip_tags($password));

	if(empty($email))
	{
			?>
		<script type="text/javascript">
		alert("please enter an email");
		location="sign.html";
		</script>
		<?php
	}
	
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		?>
		<script type="text/javascript">
		alert("please enter a valid email");
		location="sign.html";
		</script>
		<?php
	}

	if(empty($password))
	
	{
		$error = true;
		$errorPassword = 'Please enter password';
	}
	
	elseif(strlen($password)< 6) 
	{
		$error = true;
		$errorPassword = 'Password at least 6 character';
	}

	if(!$error)
	
	{
		$password = md5($password);
		$sql = "select * from users where email='$email' ";
		$result = mysqli_query($db, $sql);
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		
		if($count==1 && $row['password'] == $password)
		{
			$_SESSION['fname'] = $row['fname'];
			?>
			<script type="text/javascript">
			alert("Welcome! you have logged successfully");
			location="profile.html";
			</script>
			<?php
		}
		
		else
		
		{
			?>
			<script type="text/javascript">
			alert("You Are not Rigistered user! redirecting to Rigestration page");
			location="signup.html";
			</script>
			<?php
		}
	}
}


	
?>
