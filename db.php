<?php
date_default_timezone_set('America/Araguaina');
	if ( ! session_id() ) @ session_start();


 global $dbh;
  // connection to the database
  try {
  $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', '');
  } catch(Exception $e) {
   exit("Error conectando al Servidor");
 }


?>
