
<?php include "dbconnect.php"?>

<?php
$db = mysqli_connect("localhost", "id2515699_khalid", "q1q1q123", "id2515699_sa3i");
 
?>

<?php
    $query = $_GET['query']; 

     
    $min_length = 30;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
       
         
        $query = mysql_real_escape_string($query);

         
        $raw_results = mysql_query("SELECT * FROM user
            WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());

         
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
 
             
                echo "you are member in this site";
           
            }
             
        }
        else{ 
            echo "you are not member on this site";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
