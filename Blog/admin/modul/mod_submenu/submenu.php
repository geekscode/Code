<?php
session_start();
$login = "../../index.php";
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "$login";
}else{
	$aksi = "modul/mod_submenu/act_submenu.php";
	switch ($_GET[act]) {
		/**
			 *
			 * 
			 * Tampil Submenu
			 * 
			 */
			
		default:
			
		
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
<div class="row-fluid">
	<div class="span3">

	</div>
	<div class="span9">
		<form action="###" class="form">
			<legend>
				<h3>Sub Menu Management</h3>
			</legend>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		<form class="form well">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
			<hr>
		</form>
	</div>
	<div class="span9">
		<form action="" class="form form-stacked well">
			<input type="text" placeholder="Input ID or Nama Sub Menu">&nbsp;&nbsp;&nbsp;<a href="<?php echo '?module=submenu&act=tambahmenu'; ?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add Sub Menu</a>
		</form>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. 
		</div>
		<table class="table table-bordered table-condensed table-hover table-striped">
			<thead>
				<th><center>No</center></th>
				<th><center>Nama Sub Menu</center></th>
				<th><center>Menu Utama</center></th>
				<th><center>Link Sub Menu</center></th>
				<th><center>Aktif</center></th>
				<th><center>Admin Menu</center></th>
				<th><center>Aksi</center></th>			
			</thead>
			<tbody>
				<?php
				$sql = mysql_query("SELECT * FROM submenu,menuutama where submenu.idutama = menuutama.idutama ORDER BY idsub ASC");
				// $no = 1;
				while ($data = mysql_fetch_array($sql)) {
					 if ($data[idsubmain] != 0) {
					 	$sub = mysql_fetch_array(mysql_query("SELECT * FROM submenu where idsub =$data[idsub] ORDER BY idsub"));
					 	$mainmenu = $data[namamenu]. "&gt;". $sub[namasub];
					 }else{
					 	$mainmenu = $data[namamenu];
					 }

					$no = $data['idsub'];					
					$nama = $data['namasub'];
					$link = $data['linksub'];
					$aktif = $data[aktif];
					$admin = $data['adminsubmenu'];
				?>
				<tr>
					<td><center><?= $no ?></center></td>
					<td><?= $nama ?></td>
					<td><?= $mainmenu ?></td>
					<td><?= $link ?></td>
					<td><center><?= $aktif ?></center></td>
					<td><center><?= $admin ?></center></td>
					<td><center><a href="<?php echo "?module=submenu&act=editmenu&id=$data[idsub]";?>"><i class="icon-edit"></i> Edit</a></center></td>
				</tr>
				<?php
				// $no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php

			break;

			/**
			 * 
			 * 
			 *  Tambah Sub Menu
			 *  
			 */
			
			case 'tambahmenu':
?>
<div class="row-fluid">
	<div class="span12">
		<div class="span12">
			<div class="btn-group pull-right">
				<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		
	</div>
	<div class='span9'>
		<form>
			<legend>
				<h3>Sub Menu Management</h3>
				<blockquote>
					<p>Add Sub Menu</p>
				</blockquote>
			</legend>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		<form action="##" class="form well">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
			<hr>
		</form>
	</div>
	<div class="span8">
		<body Onload="document.add.id.focus();">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. 
			</div>
			<form action="<?php echo "$aksi?module=submenu&act=input"; ?>" class='form-horizontal span8 offset2 well' name="add" method="POST" id="SubMenu">
				<table class="span12">
					<tr>
						<td>
							<div class="control-group">
								<label for="id" class="control-label">ID Sub Menu </label>
								<div class="controls">
									<input type="text" name="id" placeholder="Masukan ID Sub Menu .."  >
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namasub" class="control-label">Nama Sub Menu</label>
							<div class="controls">
								<input type="text" name="namasub" id="namasub" placeholder="Masukan Nama Sub Menu ..">
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namamenu" class="control-label">Nama Menu</label>
								<div class="controls">
									<select name="menu_utama">
										<option value="0" selected>-- Pilih Data --</option>
										<?php
											$tamp = mysql_query("SELECT * from menuutama where aktif ='Y' order by namamenu ");
											while ($main = mysql_fetch_array($tamp)) {
												?>
												<option value="<?= $main[idutama]?>"><?= $main[namamenu] ?></option>
												<?php
											}
										?>
									</select>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="link" class="control-label">Link</label>
								<div class="controls">
									<input type="text" name="link" id="link" placeholder="Masukan Link ..">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="idmain" class="control-label">Sub Admin</label>										
								<div class="controls">
									<input type="text" name="idmain" placeholder="Masukan ID Main ..">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>										
								<div class="controls">
									<input type="radio" name="aktif" value="Y" checked> Y <input type="radio" name="aktif" value="N"> N
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="admin" class="control-label">Tampil Diadmin Menu</label>
								<div class="controls">
									<input type="radio" name="admin" value="Y" checked> Y <input type="radio" name="admin" value="N"> N
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">												
								<div class="controls">
									<button type="submit" class="btn btn-primary" name="submit"><i class="icon-plus-sign icon-white"></i> Save</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()"><i class="icon-remove icon-white"></i> Batal</button>														
								</div>
							</div>
						</td>
					</tr>								
				</table>							
			</form>
		</body>
	</div>
</div>
<?php
				break;

				/**
				 * 
				 * 
				 *	Edit Sub Menu
				 *	
				 * 
				 */
				
				case 'editmenu':
					$editsql = mysql_query("SELECT * FROM submenu WHERE idsub ='$_GET[id]' ");
					$hasilkan = mysql_fetch_array($editsql);
?>
<div class="row-fluid">
	<div class="span12">
		<div class="span12">
			<div class="btn-group pull-right">
				<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		
	</div>
	<div class='span9'>
		<form>
			<legend>
				<h3>Sub Menu Management</h3>
				<blockquote>
					<p>Edit Sub Menu</p>
				</blockquote>
			</legend>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span3">
		<form action="##" class="form well">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
		<hr>
		</form>
	</div>
	<div class="span8">
		<body Onload="document.edit.namasub.focus();">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. 
			</div>
			<form action="<?php echo "$aksi?module=submenu&act=update"; ?>" class='form-horizontal span8 offset2 well' name="edit" method="POST" id="SubMenu">

				<table class="span12">
					<input type="hidden" name="id" value="<?=$hasilkan[idsub]?>">
					<tr>
						<td>
							<div class="control-group">
								<label for="id" class="control-label">ID Sub Menu </label>
								<div class="controls">
									<input type="text" name="id" value="<?=$hasilkan[idsub]?>" disabled >
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namasub" class="control-label">Nama Sub Menu</label>
							<div class="controls">
								<input type="text" name="namasub" id="namasub" value="<?= $hasilkan[namasub]?>">
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namamenu" class="control-label">Nama Menu</label>
								<div class="controls">
									<select name="menu_utama">
										<option value="0" selected>-- Pilih Data --</option>
										<?php
											$tamp = mysql_query("SELECT * from menuutama where aktif ='Y' order by namamenu ");
											while ($main = mysql_fetch_array($tamp)) {
												?>
												<option value="<?= $main[idutama]?>"><?= $main[namamenu] ?></option>
												<?php
											}
										?>
									</select>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="link" class="control-label">Link</label>
								<div class="controls">
									<input type="text" name="linksub" id="link" value="<?= $hasilkan[linksub]?>">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="idmain" class="control-label">Sub Admin</label>										
								<div class="controls">
									<input type="text" name="idmain" value="<?= $hasilkan[idutama]?>">
								</div>
							</div>
						</td>
					</tr>
					<?php
						if ($hasilkan[aktif]=='Y') {
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>										
								<div class="controls">
									<?php echo "<input type='radio' name='aktif' value='Y' checked> Y <input type='radio' name='aktif' value='N'> N"; ?>
								</div>
							</div>
						</td>
					</tr>
					<?
						}else{					
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>										
								<div class="controls">
								<?php echo "<input type='radio' name='aktif' value='Y'> Y <input type='radio' name='aktif' value='N' checked> N";?>
								</div>
							</div>
						</td>
					</tr>
					<?php
						}

						if ($hasilkan[adminsubmenu]=='Y') {
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="admin" class="control-label">Tampil Diadmin Menu</label>
								<div class="controls">
									<?php echo "<input type='radio' name='admin' value='Y' checked> Y <input type='radio' name='admin' value='N'> N"; ?>
								</div>
							</div>
						</td>
					</tr>
					<?php
						}else{
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="admin" class="control-label">Tampil Diadmin Menu</label>
								<div class="controls">
									<?php echo "<input type='radio' name='admin' value='Y'> Y <input type='radio' name='admin' value='N' checked> N"; ?>
								</div>
							</div>
						</td>
					</tr>
					<?php
						}
					?>
					<tr>
						<td>
							<div class="control-group">												
								<div class="controls">
									<button type="submit" class="btn btn-primary" name="submit"><i class="icon-plus-sign icon-white"></i> Update</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()"><i class="icon-remove icon-white"></i> Batal</button>														
								</div>
							</div>
						</td>
					</tr>								
				</table>							
			</form>
		</body>
	</div>
</div>
<?php
					break;
	}
}
?>