<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "Anda Tidak berhak Mengakses Halaman Ini";
}else{
	include "../../../config/config.php";
	$module = $_GET['module'];
	$act = $_GET['act'];

	// if($_POST[menu_utama]==0){
	// 	$submenu = mysql_fetch_array(mysql_query("SELECT * FROM submenu WHERE idsub=$_POST[sub_menu]"));
	// 	$menu_utama = $submenu[idutama];
	// } else {
	// 	$menu_utama = $_POST[menu_utama];
	// }

	if ($module=='submenu' AND $act=='input') {
		if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$nama = $_POST['namasub'];
			$link = $_POST['link'];
			$idutama = $_POST['idmain'];
			$aktif = $_POST['aktif'];
			$tampil = $_POST['admin'];
			$idsubmain = $_POST['idsubmain'];
			mysql_query("INSERT INTO submenu(idsub,namasub,linksub,idutama,idsubmain,aktif,adminsubmenu) VALUES('$id','$nama','$link','$idutama','$idsubmain','$aktif','$tampil' )")or die(mysql_error());
			header("location:../../media.php?module=". $module);
		}
	}elseif ($module=='submenu' AND $act=='update') {
		if (isset($_POST['submit'])) {
			$namasub = $_POST['namasub'];
			$linksub = $_POST['linksub'];
			$idmain = $_POST['idmain'];
			$aktif = $_POST['aktif'];
			$admin = $_POST['admin'];
			$idsubmain = $_POST['idsubmain'];

			mysql_query("UPDATE submenu SET namasub='$namasub',linksub='$linksub',idutama='$idmain',idsubmain='$idsubmain',aktif='$aktif',adminsubmenu='$admin' where idsub = '$_POST[id]' ");
			header("location:../../media.php?module=". $module);
		}
	}
}
?>