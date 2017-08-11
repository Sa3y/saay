<?php 


	session_start();
	$db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");
	if(isset($_POST['save']))
	{

		$w = ($_POST['whatsApp2']);
		$t = ($_POST['telegram2']);
		$s = ($_POST['sms2']);
		$e = ($_POST['email2']);
		$sql="INSERT INTO numbers(whatsApp,telegram,sms,email) VALUES('$w','$t','$s','$e')";
		$result = mysqli_query($db , $sql) or trigger_error($db->error."[ $sql]");
		
		?>
				<script type="text/javascript">
				alert("Numbers saved");
				location="profile.php";
				</script>
				
				<?php
	}

	else {
	
	error_reporting ( "E-ALL ~E-NOTICE" );
	
	}


?>