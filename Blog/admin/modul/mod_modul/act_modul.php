<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "Untuk Mengakses Modul Ini Harap Login Terlebih Dahulu";
}else{
	include "../../../config/config.php";
	$module = $_GET[module];
	$act = $_GET[act];

	if ($module=='modul' AND $act=='hapus') {
		mysql_query("DELETE from modul where idmodul = '$_GET[idmodul]'");
		header("location:../../media.php?module=". $module);

	}elseif($module=='modul' AND $act=='input') {
		 $sql = mysql_query("SELECT urutan FROM modul order by urutan DESC");
		 $hasil = mysql_fetch_array($sql);
		 $urut = $hasil[urutan]+1;

		if (isset($_POST['submit'])) {
			$id = $_POST['idmodul'];
			$nama = $_POST['namamodul'];
			$link = $_POST['link'];
			$pub = $_POST['publish'];
			$aktif = $_POST['aktif'];
			$status = $_POST['status'];

			mysql_query("INSERT INTO modul(idmodul,namamodul,link,publish,status,aktif,urutan) VALUES('$id','$nama','$link','$pub','$status','$aktif',$urut)") or mysql_error();
			header("location:../../media.php?module=". $module);	
		}		
	}elseif ($module=='modul' AND $act='edit') {
		if (isset($_POST['submit'])) {
			$nama = $_POST['namamodul'];
			$link = $_POST['link'];
			$pub = $_POST['publish'];
			$aktif = $_POST['aktif'];
			$status = $_POST['status'];

			mysql_query("UPDATE modul SET namamodul='$nama', link='$link',publish='$pub',aktif='$aktif',status='$status' where idmodul = '$_POST[idmodul]' ");
			header("location:../../media.php?module=".$module);
		}
	}
}
?>