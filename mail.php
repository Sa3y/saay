<html>
    <head>
        <meta charest="UTF-8"> </head>
    <body> 
     
    </body>
</html>

    <?php 
  $from = "nwnlhrb@gmail.com";
  $to=$_POST['email'];
$subject="welcome massege";
$body ="thanks for join Saai  ";
    mail($to,$subject,$body); 
	echo"شكراً لانضمامك إلى ساع ";?>  