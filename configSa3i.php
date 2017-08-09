<?php
$Host="localhost";
$username="id2515699_khalid";
$password="q1q1q123";
$DB="id2515699_sa3i";
$conn = mysqli_connect($Host,$username,$password,$DB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start ();
?>
