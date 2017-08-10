<?php 
  session_start();
  $db = mysqli_connect("localhost", "id2509065_sa3ymail", "sa3ymail", "id2509065_sa3y");

  if(isset($_POST['submit'])) {
  $to=$_POST['email'];
  $subject="Unsubscribed!";
  $body ="You've unsubscribed from Sa3y successfully! we hope to see again :)";
  mail($to,$subject,$body);
  $sql = "DELETE FROM mail WHERE email='$to'";
  mysqli_query($db, $sql);
?>
  <script type="text/javascript">
   alert(" تمت إزالتك من القائمة البريدية بنجاح!");
   location="unsubConfirm.html";
   </script>
   <?php	
  include("unsubConfirm.html");
  }
?>