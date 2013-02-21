<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "Untuk Mengakses Modul Ini Harap Login Terlebih Dahulu";
}else{
	include "../../../config/config.php";
	$module = $_GET[module];
	$act = $_GET[act];

	if ($module=='menuutama' AND $act=='input') {
		if (isset($_POST['submit'])) {
			$id = $_POST['idutama'];
			$nama = $_POST['namamenu'];
			$link = $_POST['link'];
			$aktif = $_POST['aktif'];
			$tampil = $_POST['admin'];
			mysql_query("INSERT INTO menuutama(idutama,namamenu,link,aktif,adminmenu) VALUES('$id','$nama','$link','$aktif','$tampil')")or die(mysql_error());
			header("location:../../media.php?module=". $module);
		}
	}elseif ($module=='menuutama' AND $act=='update') {
		if (isset($_POST['submit'])) {
			$id = $_POST['idutama'];			
			$nama = $_POST['namamenu'];
			$link = $_POST['link'];
			$aktif = $_POST['aktif'];
			$tampil = $_POST['admin'];
			mysql_query("UPDATE menuutama SET namamenu='$nama', link='$link', aktif='$aktif', adminmenu='$tampil' where idutama='$id' ")or die(mysql_error());
			header("location:../../media.php?module=". $module);
		}
	}
}
?>