<?php
	date_default_timezone_set('Asia/Jakarta');
	$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$hari = date('w');
	$hari_ni = $seminggu[$hari];

	$tgl_sekarang = date("Ymd");
	$tgl = date("d");
	$bulan_sekarang = date("m");
	$thn_sekarang = date("Y");
	$jam_sekarang = date("H:i:s");

	$bln = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

?>