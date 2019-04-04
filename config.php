<?php
try {
	// http://php.net/manual/en/pdo.connections.php
	$dbConn = new PDO("sqlsrv:server = tcp:rosydbserver.database.windows.net,1433; Database = rosydicodingsubmission", "rosy", "@rhosytux18");
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
	print("Error connecting to SQL Server.");
    die(print_r($e));
}
 
?>
