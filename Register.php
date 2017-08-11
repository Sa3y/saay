<?php

session_start();

$db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");

if (isset($_POST['signup-btn'])) {

	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	$password2 = ($_POST['password2']);


	$sql = "select * from user where email='$email' ";
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);

	if ($count > 0) {
		?>
		<script type="text/javascript">
		alert("You are a Registered user! redirecting to log-in page");
		location="sign.html";
		</script>
		
		<?php 
		
	}
	
	
	
	elseif(strlen($password)< 6 || strlen($password2)< 6 )
	
	{
	
		?>
						<script type="text/javascript">
						alert("Password at least 6 character");
						location="signup.html";
						</script>
						<?php
	
			
		}
	
	
	
	

	else if ($password == $password2) {
		$password = md5($password);
		$sql = "INSERT INTO user(fname,lname,email,password,Numbers) VALUES('$fname', '$lname', '$email', '$password',NULL)";
		mysqli_query($db, $sql);
		?>
		<script type="text/javascript">
		alert("Thank you! You have Registered Successfully");
		location="subConfirm.html";
		</script>
			<?php
			
			} 
			
			else {
				?>
			<script>alert('The two password do not match, please try again!');
			location="signup.html";
			</script>
		<?php
	}

}

?>
