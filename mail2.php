<?php 
  $from = "nwnlhrb@gmail.com";
  $to=$_POST['email'];
$subject="massege";
$body ="we r sorry becuse u leave us";
    mail($to,$subject,$body); 
	
	include("unsubConfirm.html");
	
  
?>