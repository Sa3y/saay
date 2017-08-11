<?php 
  session_start();
  $db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");
  if(isset($_POST['submit'])) {
  $to=$_POST['email'];
  $subject="Unsubscribed!";
  $body ="You've unsubscribed from Sa3y successfully! we hope to see again :)";
  
  $sql1 = "select * from mail where email='$to' ";
  $result = mysqli_query($db, $sql1);
  $count = mysqli_num_rows($result);
 
	
  if ($count == 0) {
		?>
		
        <script type="text/javascript">
		alert("لم تسجل في القائمة البريدية بعد!");
		location="index.html";
		</script>
        
        <?php
  } else { 
      mail($to,$subject,$body);
      $sql = "DELETE FROM mail WHERE email='$to'";
     mysqli_query($db, $sql);
         ?>
  
  <script type="text/javascript">
   alert("تم إلغاء اشتراكك بالقائمة البريدية بنجاح!");
   location="unsubConfirm.html";
   </script>
   <?php	
  include("unsubConfirm.html");
  }}
?>
