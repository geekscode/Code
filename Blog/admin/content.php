<?php
	include "../config/config.php";
	include "../config/library.php";
	include "../config/fungsi_tglindo.php";

	if ($_GET[module]=='home'){
		if ($_SESSION[level]=='Admin') {
?>
	<div class="row-fluid">
		<div class="span12">
			<div class="btn-group pull-right">
				<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
			</div>
		</div>
	</div>
<!-- </div> -->
<!-- <div class="container"> -->
		<div class="row-fluid">
			<div class="span10 offset2">
				<h1>
					<?php $nama = $_SESSION['nama']; echo $nama;?>
				</h1>
			</div>
				<hr>
			<div class="row-fluid">
				<div class="span3 offset2">
					<?php 
						$sql = mysql_query("SELECT * from users where username = '$_SESSION[username]'") or die(mysql_error());
						while ($hasil = mysql_fetch_array($sql)) {
							$username = $hasil['username'];
							$nama = $hasil['namalengkap'];
							$email = $hasil['email'];
							$telp = $hasil['telp'];
							$level = $hasil['level'];
							$blokir = $hasil['blokir'];
					?>
					<p>
						<small>
							<i class="icon-envelope"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $email; ?></span><br>
							<i class="icon-bell"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $telp; ?></span><br>
							<i class="icon-home"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $alamat; ?></span>							
						</small>
					<?php } ?>
					</p>
				</div>
				<div class="span5">
					<p>
						<small>
							<strong>Selamat Datang Dihalaman <?php echo $_SESSION[level]; ?>. Silahkan Klik Menu Pilihan yang Berada Dibagian Header Untuk Mengelola Content Website Anda. Pelajari Lebih lengkap Tentang Website Anda !</strong>
						</small>
					</p>							
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8 offset2">
					<hr>
					<?php
						$jam=date("H:i:s");
						$tgl=tglindo(date("Y m d"));
						$sapa .= "<p class=text-info align=right><b>$hari_ni, $tgl</b></p></h5>";
						echo "$sapa";
					?>
				</div>
			</div>								
		</div>		
		<?php			
				
					}elseif ($_SESSION[level]=='User') {
					?>
					<div class="row-fluid">
		<div class="span12">
			<div class="btn-group pull-right">
				<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
			</div>
		</div>
	</div>
<!-- </div> -->
<!-- <div class="container"> -->
		<div class="row-fluid">
			<div class="span10 offset2">
				<h1>
					<?php $nama = $_SESSION['nama']; echo $nama;?>
				</h1>
			</div>
				<hr>
			<div class="row-fluid">
				<div class="span3 offset2">
					<?php 
						$sql = mysql_query("SELECT * from users where username = '$_SESSION[username]'") or die(mysql_error());
						while ($hasil = mysql_fetch_array($sql)) {
							$username = $hasil['username'];
							$nama = $hasil['namalengkap'];
							$email = $hasil['email'];
							$telp = $hasil['telp'];
							$level = $hasil['level'];
							$blokir = $hasil['blokir'];
					?>
					<p>
						<small>
							<i class="icon-envelope"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $email; ?></span><br>
							<i class="icon-bell"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $telp; ?></span><br>
							<i class="icon-home"></i>
							<span class="text-info" style="color:rgb(245, 13 ,13);">&nbsp;&nbsp;<?php echo $alamat; ?></span>							
						</small>
					<?php } ?>
					</p>
				</div>
				<div class="span5">
					<p>
						<small>
							<strong>Selamat Datang Dihalaman <?php echo $_SESSION[level]; ?>. Silahkan Klik Menu Pilihan yang Berada Dibagian Header Untuk Mengelola Content Website Anda. Pelajari Lebih lengkap Tentang Website Anda !</strong>
						</small>
					</p>							
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8 offset2">
					<hr>
					<?php
						$jam=date("H:i:s");
						$tgl=tglindo(date("Y m d"));
						$sapa .= "<p class=text-info align=right><b>$hari_ni, $tgl</b></p></h5>";
						echo "$sapa";
					?>
				</div>
			</div>
		</div>
					<?php
					}
				}elseif ($_GET[module]=='users') {
					if ($_SESSION[level]=='Admin' OR $_SESSION[level]=='User') {
						include "modul/mod_users/users.php";
					}		
				}elseif ($_GET[module]=='menuutama') {
					if ($_SESSION[level]=='Admin') {
						include "modul/mod_menuutama/menuutama.php";
					}
				}elseif ($_GET[module]=='submenu') {
					if ($_SESSION[level]=='Admin') {
						include "modul/mod_submenu/submenu.php";
					}
				}elseif ($_GET[module]=='modul') {
					if ($_SESSION[level]=='Admin') {
						include "modul/mod_modul/modul.php";
					}
				}
		?>
