<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "<link href='style.css' rel='stylesheet' type='text/css'>
 		<center>Untuk mengakses modul, Anda harus login <br>";
  	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	$act = "modul/mod_users/act_users.php";
	switch ($_GET[act]) {
		/**
		 *
		 *
		 * Default Users
		 * 
		 */
		
		default:
		if ($_SESSION[level]=='Admin') {
			$tampil = mysql_query("SELECT * from users order by 'username'");
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
				<div class='row-fluid'>
					<div class="span3">				
					</div>
				<div class='span9'>
					<form>
						<legend>
							<h3>
								User Management
							</h3>
						</legend>
					</form>
				</div>
				</div>
			<?php
		}else{
			$tampil = mysql_query("SELECT * from users WHERE username = '$_SESSION[username]'");
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
				<div class='row-fluid'>
					<div class='span3'>

					</div>
					<div class="span9">						
						<form>
							<legend>
								<h3>User Management</h3>
							</legend>
						</form>
					</div>
				</div>			
		<?php 
		}
		?>
				<div class='row-fluid'>
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
					<div class='span9'>

						<?php if ($_SESSION[level]=='Admin') {
						?>
							<form class='form-stacked well'>
							<input type='text' placeholder='Input Username'>&nbsp;&nbsp;&nbsp;<a href='' class='btn'><i class='icon-search'></i> Search</a>&nbsp;&nbsp;&nbsp; 
						<?php

							
							echo "<a href='?module=users&act=tambahuser' class='btn btn-primary'><i class='icon-user icon-white'></i> Add New User</a>";	
							}?>
						</form>	
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h4>Perhatian!</h4>  Untuk Username Tidak Bisa Diubah <br>
						</div>					
						<table class="table table-bordered table-condensed table-striped table-hover">
							<thead>
								<tr>
									<th><center>No</center></th>
									<th><center>Username</center></th>
									<th><center>Nama Lengkap</center></th>
									<th><center>Email</center></th>
									<th><center>Telephone</center></th>
									<th><center>Level</center></th>
									<th><center>Blokir</center></th>
									<th><center>Action</center></th>
								</tr>
							</thead>
							<?php
							$no=1;
							while ($data = mysql_fetch_array($tampil)) {
								$username = $data['username'];
								$nama = $data['namalengkap'];
								$email = $data['email'];
								$telp = $data['telp'];
								$level = $data['level'];
								$blokir = $data['blokir'];
							?>
							<tbody>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $username; ?></td>
									<td><?php echo $nama; ?></td>
									<td><?php echo $email; ?></td>
									<td><?php echo $telp; ?></td>
									<td><?php echo $level; ?></td>
									<td><center><?php echo $blokir; ?></center></td>
									<td><?php echo "<a href='?module=users&act=edituser&username=$data[username]'><i class='icon-edit'></i> Edit</a>"; ?></td>
								</tr>
								<?php 
									 $no++;
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
							 * Add users
							 * 
							 */
							
								case 'tambahuser':
								if ($_SESSION[level]== 'Admin') {
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
									<h3>User Management</h3>
									<blockquote>
										<p>Add User</p>
									</blockquote>
								</legend>
							</form>
						</div>
					</div>
						<div class="row-fluid">
								<div class="span3">
									<form action="" class="form well">
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
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
									  	<h4>Perhatian!</h4>  Masukan Username dengan benar dan mudah diingat .
									</div>
									<?php echo "<body Onload='document.add.username.focus();'><form action='$act?module=users&act=input' class='form-horizontal span8 offset2 well' method='POST' id='User' name='add'>"; ?>
								<!-- <div class="span9"> -->
									<table class="span12">
									<tr>
										<td>
											<div class="control-group">
												<label for="username" class="control-label">Username</label>
												<div class="controls">
													<input type="text" placeholder="Masukan Username Anda .." id="username" name="username">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label for="password" class="control-label">Password</label>
												<div class="controls">
													<input type="password" placeholder="Masukan Password Anda .." id="password" name="password" data-original-title="password">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>										
											<div class="control-group">
												<label for="passver" class="control-label">Re-enter Password</label>
												<div class="controls">
													<input type="password" placeholder="Ulangi Password Anda .." id="passver" name="passver" data-original-title="password">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label for="namalengkap" class="control-label">Nama Lengkap</label>
												<div class="controls">
													<input type="text" placeholder="Masukan Nama Lengkap Anda .." id="namalengkap" name="namalengkap">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label for="email" class="control-label">Email Address</label>
												<div class="controls">
													<input type="text" placeholder="Masukan Email Anda .." id="email" name="email">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>										
											<div class="control-group">
												<label for="emailver" class="control-label">Re-enter Email Address</label>
												<div class="controls">
													<input type="text" placeholder="Ulangi Email Anda .." id="emailver" name="emailver">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label for="telp" class="control-label">Telephone</label>
												<div class="controls">
													<input type="text" placeholder="Masukan Nomor Telephone Anda .." id="telp" name="telp">
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
						</div>
						</body>
						</div>							
							<?php

								}else
								{
									$login = "Untuk Mengakses Halaman Ini Harap Login";
								?>
								<html>
									<head>
										<title>Login Administrator</title>
										<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
										<link rel="stylesheet" type="text/css" href="style/login.css">
									</head>
									<body>
										<form action="" class="error-login-form">
											<div class="footer">
												<?php echo "<h3><img src=\"img/imglogin/img_login_lock.png \">&nbsp;&nbsp;$error</h3><br>
												<center><a href=\"index.php\" class=\"register\"><b>Ulangi Lagi</b></a></center>"; ?>
											</div>
										</form>
									</body>
								</html>
								<?php

								}
								break;
								/**
								 *
								 *
								 * Edit Users								 
								 * 
								 */
								
								case 'edituser':
									$editsql = mysql_query("SELECT * from users where username = '$_GET[username]'");
									$hasiledit = mysql_fetch_array($editsql);
									if ($_SESSION[level]=='Admin'){
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
										<h3>User Management</h3>
										<blockquote>
											<p>Edit User</p>
										</blockquote>
									</legend>
								</form>
							</div>
						</div>
						<div class="row-fluid">
								<div class="span3">
									<form action="" class="form well">
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
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
									  	<h4>Perhatian!</h4>  Untuk Username Tidak Bisa Diubah <br>									  	
									</div>
									<?php echo "<body Onload='document.edit.namalengkap.focus();'><form action='$act?module=users&act=edit' class='form-horizontal span8 offset2 well' method='POST' id='User' name='edit'>"; ?>							
									<table class="span12">
										<input type="hidden" name="username" value="<?=$hasiledit[username]?>">
										<tr>
											<td>
												<div class="control-group">
													<label for="username" class="control-label">Username</label>
													<div class="controls">
														<input type="text" id="username" name="username" value="<?= $hasiledit[username]?>" disabled>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="password" class="control-label">Password</label>
													<div class="controls">
														<input type="password" id="password" name="password" data-original-title="password" value="<?= $hasiledit[password] ?>">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="namalengkap" class="control-label">Nama Lengkap</label>
													<div class="controls">
														<input type="text" id="namalengkap" name="namalengkap" value="<?= $hasiledit[namalengkap]?>">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="email" class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="Masukan Email Anda .." id="email" name="email" value="<?= $hasiledit[email]?>">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="telp" class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="Masukan Nomor Telephone Anda .." id="telp" name="telp" value="<?= $hasiledit[telp]?>">
													</div>
												</div>
											</td>
										</tr>
										<?php
											if ($hasiledit[blokir]=='N') {
										?>
										<tr>
											<td>
												<div class="control-group">
													<label for="blokir" class="control-label">Blokir</label>
													<div class="controls">
														<?php echo "<input type='radio' name='blokir' value='Y'> Y <input type='radio' name='blokir' value='N' checked> N"; ?>
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
													<label for="blokir" class="control-label">Blokir</label>
													<div class="controls">
														<?php echo "<input type='radio' name='blokir' value='Y' checked> Y <input type='radio' name='blokir' value='N'> N"; ?>
													</div>
												</div>
											</td>
										</tr>
										<?php
											}								
											if ($hasiledit[level]=='User') {
										?>
										<tr>
											<td>
												<div class="control-group">
													<label for="level" class="control-label">Level</label>
													<div class="controls">
														<input type="radio" name="level" value="User" checked> User <input type="radio" name="level" value="Admin"> Admin
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
													<label for="level" class="control-label">Level</label>
													<div class="controls">
														<input type="radio" name="level" value="User"> User <input type="radio" name="level" value="Admin" checked> Admin
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
							</div>
						</body>
						</div>				
						<?php								
						}else{
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
										<h3>User Management</h3>
										<blockquote>
											<p>Edit User</p>
										</blockquote>
									</legend>
								</form>
							</div>
						</div>
						<div class="row-fluid">
								<div class="span3">
									<form action="" class="form well">
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
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
									  	<h4>Perhatian!</h4> Untuk Username Tidak Bisa Diubah 
									</div>
									<?php echo "<body Onload='document.edit.namalengkap.focus();'><form action='$act?module=users&act=edit' class='form-horizontal span8 offset2 well' method='POST' id='registerHere' name='edit'>"; ?>							
									<table class="span12">
										<input type="text" name="id" value="<?= $hasiledit[idsession] ?>">
										<input type="text" name="blokir" value="<?= $hasiledit[blokir] ?>">
										<input type="text" name="level" value="<?= $hasiledit[level] ?>">
										<tr>
											<td>
												<div class="control-group">
													<label for="username" class="control-label">Username</label>
													<div class="controls">
														<input type="text" id="username" name="username" value="<?= $hasiledit[username]?>" disabled>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="password" class="control-label">Password</label>
													<div class="controls">
														<input type="password" id="password" name="password" data-original-title="password" value=<?= $hasiledit[password] ?>>
													</div>
												</div>
											</td>
										</tr>						
										<tr>
											<td>
												<div class="control-group">
													<label for="namalengkap" class="control-label">Nama Lengkap</label>
													<div class="controls">
														<input type="text" id="namalengkap" name="namalengkap" value="<?= $hasiledit[namalengkap]?>">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
													<label for="email" class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="Masukan Email Anda .." id="email" name="email" value="<?= $hasiledit[email]?>">
													</div>
												</div>
											</td>
										</tr>								
										<tr>
											<td>
												<div class="control-group">
													<label for="telp" class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="Masukan Nomor Telephone Anda .." id="telp" name="telp" value="<?= $hasiledit[telp]?>">
													</div>
												</div>
											</td>
										</tr>										
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
							</div>
						</body>
						</div>
						<?
						}
							break;							
				}
			}
		?>