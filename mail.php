<?php 
  session_start();
  $db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");
  if(isset($_POST['submit'])) {
  $to=$_POST['email'];
  $subject="Welcome!";
  $body ="You've succesfully subscribed, thank you for your subscription, Please look forward for us to launch Sa3y!";
  
  $sql1 = "select * from mail where email='$to' ";
  $result = mysqli_query($db, $sql1);
  $count = mysqli_num_rows($result);
	
  if ($count > 0) {
		?>
		
        <script type="text/javascript">
		alert("أنت بالفعل مسجل لدى قائمتنا البريدية");
		location="index.html";
		</script>
		
		<?php      
        } else {
        $sql = "INSERT INTO mail(email) VALUES('$to')";
        mysqli_query($db, $sql);
        mail($to,$subject,$body);
        ?>

        <script type="text/javascript">
        alert("شكرا لك! لقد أصبحت ضمن أعضاء القائمة البريدية");
        location="subConfirm.html";
        </script>
        
        <?php
        include("subConfirm.html");
        }}
?>
