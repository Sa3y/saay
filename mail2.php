<?php 
  $from = "nwnlhrb@gmail.com";
  $to=$_POST['email'];
$subject="Unsubscribed!";
$body ="You've unsubscribed from Sa3y successfully! we hope to see again :)";
    mail($to,$subject,$body); 
	
	include("unsubConfirm.html");
	
  
?>