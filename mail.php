<?php 
  $from = "nwnlhrb@gmail.com";
  $to=$_POST['email'];
$subject="welcome massege";
$body ="thank u for join with us";
    mail($to,$subject,$body); 
	echo"your messege sent succssfuly";
	
  
?>