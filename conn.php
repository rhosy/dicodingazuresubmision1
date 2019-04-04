<?php
 
//MySQLi Procedural
$conn = mysqli_connect("sqlsrv:server = tcp:rosydbserver.database.windows.net,1433","rosy","@rhosytux18","rosydicodingsubmission");
if (!$conn) {
	die("Koneksi Gagal: " . mysqli_connect_error());
}
 
?>
