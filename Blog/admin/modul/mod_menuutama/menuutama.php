<?php
	session_start();
	$login = "../../index.php";
	if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
		echo "<center>Untuk Mengakses Modul Anda Harus Login</center><br>";
		echo "<a href=$login>Login</a>";
	}else{
		$aksi = "modul/mod_menuutama/act_menuutama.php";
		$link = "?module=menuutama&act=tambahmenu";
		switch ($_GET[act]) {

			/**
			 * 
			 * 
			 * Tampil Menu Utama
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
							<h3>Menu Utama Management</h3>
						</legend>
					</form>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<form action="###" class="form well">
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
					<form class="form-stacked well">
						<input type="text" placeholder="Input ID or Nama Menu">&nbsp;&nbsp;&nbsp;<a href="<?php echo '?module=menuutama&act=tambahmenu'; ?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add Menu Utama</a>
					</form>
					<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
					</div>
					<table class="table table-bordered table-striped table-condensed table-hover">
						<thead>
							<tr>
								<th><center>No</center></th>
								<th><center>Nama Menu</center></th>
								<th><center>Link</center></th>
								<th><center>Aktif</center></th>
								<th><center>Admin Menu</center></th>
								<th><center>Aksi</center></th>
							</tr>
						</thead>
						<?php
							$sql1 = mysql_query("SELECT * from menuutama order by idutama");
							while ($hasil = mysql_fetch_array($sql1)) {
								$no = $hasil['idutama'];
								$nama = $hasil['namamenu'];
								$link = $hasil['link'];
								$aktif = $hasil['aktif'];
								$admin = $hasil['adminmenu'];
						?>
						<tbody>
							<tr>
								<td><center><?= $no; ?></center></td>
								<td><?= $nama; ?></td>
								<td><?= $link; ?></td>
								<td><center><?= $aktif; ?></center></td>
								<td><center><?= $admin; ?></center></td>
								<td><center><a href="<?php echo "?module=menuutama&act=editmenu&idutama=$no"; ?>"><i class="icon-edit"></i> Edit</a> </center></td>
							</tr>	
							</tbody>
						<?php
						}
						?>													
					</table>
				</div>
			</div>
			
			<?php
			break;
			/**
			 * 
			 * 
			 * 	Tambah Menu
			 * 	
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
							<h3>Menu Utama Management</h3>
							<blockquote>
								<p>Add Menu Utama</p>
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
					<body Onload="document.add.idutama.focus();">
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>
						<form action="<?php echo "$aksi?module=menuutama&act=input"; ?>" class='form-horizontal span8 offset2 well' name="add" method="POST" id="MenuUtama">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Menu Utama</label>
											<div class="controls">
												<input type="text" name="idutama" id = "idutama"placeholder="Masukan ID Menu Utama .."  >
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama Menu</label>
											<div class="controls">
												<input type="text" name="namamenu" id="namamenu" placeholder="Masukan Nama Menu ..">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Link</label>
											<div class="controls">
												<input type="text" name="link" id="link" placeholder="Masukan Link">
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
				 *  Edit Menu
				 *
				 * 
				 */
				
				case 'editmenu':
				$sql5 = mysql_query("SELECT * FROM menuutama where idutama ='$_GET[idutama]' ");
				$data = mysql_fetch_array($sql5);
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
							<h3>Menu Management</h3>
							<blockquote>
								<p>Edit Menu Utama</p>
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
					<body Onload="document.edit.namamenu.focus();">
						<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Perhatian!</strong> <br>Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br> Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator. 
						</div>
						<form action="<?php echo "$aksi?module=menuutama&act=update"; ?>" class='form-horizontal span8 offset2 well' name="edit" method="POST" id="MenuUtama">
							<input type="hidden" name="idutama" value="<?= $data[idutama] ?>">
							<table class="span12">
								<tr>
									<td>
										<div class="control-group">
											<label for="id" class="control-label">ID Menu Utama</label>
											<div class="controls">
												<input type="text" name="idutama" id="idutama" value="<?=$data[idutama]?>" disabled>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="namamenu" class="control-label">Nama Menu</label>
											<div class="controls">
												<input type="text" name="namamenu" id="namamenu" value="<?= $data[namamenu] ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="control-group">
											<label for="link" class="control-label">Link</label>
											<div class="controls">
												<input type="text" name="link" id="link" value="<?= $data[link] ?>">
											</div>
										</div>
									</td>
								</tr>
								<?php
									if ($data[aktif]=='Y') {
								
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
								<?php
									}else{
								?>
								<tr>
									<td>
										<div class="control-group">
											<label for="aktif" class="control-label">Aktif</label>										
											<div class="controls">
												<?php echo "<input type='radio' name='aktif' value='Y'> Y <input type='radio' name='aktif' value='N' checked> N"; ?>
											</div>
										</div>
									</td>
								</tr>
								<?php
									}

									if ($data[adminmenu]=='Y') {
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