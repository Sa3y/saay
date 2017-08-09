<?php
if (! mysql_connect ( "localhost", "id2515699_khalid", "q1q1q123" )) {
	die ( 'oops connection problem ! --> ' . mysql_error () );
}
if (! mysql_select_db ( "id2515699_sa3i" )) {
	die ( 'oops database selection problem ! --> ' . mysql_error () );
}

session_start ();

error_reporting ( "E-ALL ~E-NOTICE" );
?>
