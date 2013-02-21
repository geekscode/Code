<?php
include "../config/config.php";
	function injeksi($data){
		$saring = mysql_real_escape_string(stripcslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
		return $saring;
	}

	$username = injeksi($_POST['username']);
	$password = injeksi($_POST['password']);

	if (!ctype_alnum($username) OR !ctype_alnum($password)) {

		echo "Tidak Bisa Diinjeksi Loh !";

	}else{

		$login = mysql_query("SELECT * from users where username='$username' and password='$password' and blokir='N'");
		$ketemu = mysql_num_rows($login);
		$r = mysql_fetch_array($login);

		// Apabila username dan password ditemukan
		if ($ketemu > 0) {
			session_start();
			include "timeout.php";

			$_SESSION[username]		=$r[username];
			$_SESSION[password]		=$r[password];
			$_SESSION[nama]			=$r[namalengkap];
			$_SESSION[level]		=$r[level];

			$_SESSION[login]		= 1;
			timer();

			$idlama = session_id();
			session_regenerate_id();
			$idbaru = session_id();

			mysql_query("UPDATE users set idsession='$idbaru' where username='$username' ");
			header('location:media.php?module=home');
		}else{
			include "error-login.php";
		}
	}
	
?>