<?php 
  $from = "nwnlhrb@gmail.com";
  $to=$_POST['email'];
$subject="Welcome!";
$body ="You've succesfully subscribed, thank you for your subscribtion, Please look forward for us to launch Sa3y!";
    mail($to,$subject,$body); 
	echo"شكرا لانضمامك إلى ساعٍ";
	
  include("index.html");
  
?>