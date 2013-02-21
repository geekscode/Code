<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "blogging";

	$koneksi = mysql_connect($host,$user,$pass);
	if ($koneksi) {
		$buka = mysql_select_db($db);
		if (!$buka) {
			echo "Database Tidak Ada <br> ". mysql_error();
		}
	}else {
		echo "Server Tidak Terhubung <br> ". mysql_error();
	}


?>