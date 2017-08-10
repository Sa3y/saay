<?php 
  session_start();
  $db = mysqli_connect("localhost", "id2509065_sa3ymail", "sa3ymail", "id2509065_sa3y");
  if(isset($_POST['submit'])) {
  $to=$_POST['email'];
  $subject="Welcome!";
  $body ="You've succesfully subscribed, thank you for your subscription, Please look forward for us to launch Sa3y!";
  mail($to,$subject,$body);
  $sql = "INSERT INTO mail(email) VALUES('$to')";
  mysqli_query($db, $sql);
  ?>
  <script type="text/javascript">
   alert("شكرا لك! لقد أصبحت ضمن أعضاء القائمة البريدية");
   location="subConfirm.html";
   </script>
<?php
  include("subConfirm.html");
  }
?>