<?php
$Host="127.0.0.1";
$username="root";
$password="";
$DB="sa3i";
$conn = mysqli_connect($Host,$username,$password,$DB);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start ();
?>