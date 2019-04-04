<?php
 
//MySQLi Procedural
$conn = mysqli_connect("sqlsrv:server = tcp:rosydbserver.database.windows.net,1433; Database = rosydicodingsubmission","rosy","@rhosytux18");
if (!$conn) {
	die("Koneksi Gagal: " . mysqli_connect_error());
}
 
?>
