<?php

$databaseHost = 'tcp:rosydbserver.database.windows.net,1433';
$databaseName = 'rosydicodingsubmission';
$databaseUsername = 'rosy';
$databasePassword = '@rhosytux18';

try {
	// http://php.net/manual/en/pdo.connections.php
	$dbConn = new PDO("sqlsrv:server={$databaseHost};Database={$databaseName}", $databaseUsername, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>
