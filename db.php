<?php
date_default_timezone_set('America/Araguaina');
	if ( ! session_id() ) @ session_start();
	$serverName = "tcp:serverres.dyndns.org,5000"; //serverName\instanceName
$connectionInfo = array( "Database"=>"pruebaryr", "UID"=>"ryr", "PWD"=>"ryr10.*-");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    // echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
	/*$requete = "SELECT * from sucursales where activa=1";
 global $dbh;
  // connection to the database
  try {
  $dbh = new PDO('mysql:host=localhost;dbname=pruebaryr', 'root', '');
  //$dbh = new PDO('mysql:host=localhost;dbname=recticar', 'root', '');
  } catch(Exception $e) {
   exit("Error conectando al Servidor");
 }*/
  // Execute the query
	$idSucursal="";
	$nombreSucursal="";
  /*$resultat = $dbh->prepare($requete);
	$resultat->execute();
		$result = $resultat->fetchAll();
foreach($result as $row){
	$idSucursal= $row['IdSucursal'];
$nombreSucursal=$row['Nombre'];
}*/
$sql = "SELECT * from sucursales where activa=1";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      $idSucursal= $row['IdSucursal'];
	  $nombreSucursal=$row['Nombre'];
}

sqlsrv_free_stmt( $stmt);
$pathImagenes="C:\\Users\\Administrador.RYR\\Google Drive\\IMAGENES\\";


?>
