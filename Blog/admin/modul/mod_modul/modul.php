<?php
session_start();
$login = "../../index.php";
if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
	echo "$login";
}else{
	$aksi = "modul/mod_modul/act_modul.php";
	switch ($_GET[act]) {

	/**
	 *
	 *
	 * Default Modul
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
				<h3>Module Management</h3>
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
		<form action="" class="form form-stacked well">
			<input type="text" placeholder="Input Nama Modul .. ">&nbsp;&nbsp;&nbsp;<a href="<?php echo "?module=modul&act=tambahmodul"; ?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add Module</a>
		</form>
		<table class="table table-bordered table-condensed table-hover table-striped">
			<thead>
				<th><center>No</center></th>
				<th><center>Nama Modul</center></th>
				<th><center>Link</center></th>
				<th><center>Publish</center></th>
				<th><center>Status</center></th>
				<th><center>Aktif</center></th>
				<th><center>Aksi</center></th>
			</thead>
			<?php
			 $sql = mysql_query("SELECT * FROM modul order by idmodul");
			 while ($data = mysql_fetch_array($sql)) {
			 	$no = $data['idmodul'];
			 	$nama = $data['namamodul'];
			 	$link = $data['link'];
			 	// $cont = $data['statik_content'];
			 	// $gambar = $data['gambar'];
			 	$publish = $data['publish'];
			 	$status = $data['status'];
			 	$aktif = $data['aktif'];
			 	//$urutan = $data['urutan'];
			 	//$seo = $data['link_seo'];
?>
			<tbody>
				<tr>
					<td><center><?= $no?></center></td>
					<td><?= $nama; ?></td>
					<td><?= $link; ?></td>					
					<td><center><?= $publish ?></center></td>
					<td><center><?= $status; ?></center></td>
					<td><center><?= $aktif; ?></center></td>
					<td><center><a href="<?php echo "?module=modul&act=editmodul&idmodul=$data[idmodul]";?>"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;<a href="<?php echo "$aksi?module=modul&act=hapus&idmodul=$no"; ?>"><i class=icon-edit></i> Hapus</a></center></td>
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
			 * Tambah Modul
			 * 
			 */
			case 'tambahmodul':
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
	<div class='span9'>
		<form>
			<legend>
				<h3>Module Management</h3>
				<blockquote>
					<p>Add Module</p>
				</blockquote>
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
	<div class="span8">
		<body Onload="document.add.idmodul.focus();">
			 <form action="<?php echo "$aksi?module=modul&act=input"; ?>" method='POST' id="add" name="add" class='span8 offset2 well form-horizontal'>
				<table class="span12">					
					<tr>
						<td>
							<div class="control-group">
								<label for="idmodul" class="control-label">ID Modul</label>
								<div class="controls">
									<input type="text" placeholder="" id="idmodul" name="idmodul" class="span2">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namamodul" class="control-label">Nama Modul</label>
								<div class="controls">
									<input type="text" placeholder="Masukan Nama Modul " id="namamodul" name="namamodul">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="link" class="control-label">Link</label>
								<div class="controls">
									<input type="text" placeholder="Masukan Link .." id="link" name="link">
								</div>
							</div>
						</td>
					</tr>						
					<tr>
						<td>
							<div class="control-group">
								<label for="publish" class="control-label">Publish</label>
								<div class="controls">
									<input type="radio" id="publish" name="publish" Value= 'Y' checked>Y &nbsp;<input type="radio" id="publish" name="publish" Value= 'N' >N
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="status" class="control-label">Status</label>
								<div class="controls">
									<input type="radio" id="status" name="status" Value= 'User' checked>User &nbsp;<input type="radio" id="status" name="status" Value= 'Admin' >Admin
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>
								<div class="controls">
									<input type="radio" id="aktif" name="aktif" Value= 'Y' checked>Y &nbsp;<input type="radio" id="aktif" name="aktif" Value= 'N' >N
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
				 * EDIT MODULE
				 * 
				 */
				case 'editmodul':
				$sql = mysql_query("SELECT * FROM modul where idmodul= '$_GET[idmodul]'");
				$hasil = mysql_fetch_array($sql);
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
	<div class='span9'>
		<form>
			<legend>
				<h3>Module Management</h3>
				<blockquote>
					<p>Edit Module</p>
				</blockquote>
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
	<div class="span8">
		<body Onload="document.edit.namamodul.focus();">
			 <form action="<?php echo "$aksi?module=modul&act=edit"; ?>" method='POST' id='edit' name="edit" class='span8 offset2 well form-horizontal'>
				<table class="span12">
					<input type="hidden" name="idmodul" value="<?=$hasil[idmodul] ?>">
					<tr>
						<td>
							<div class="control-group">
								<label for="idmodul" class="control-label">ID Modul</label>
								<div class="controls">
									<input type="text" placeholder="" id="idmodul" name="idmodul" class="span2" value="<?=$hasil[idmodul] ?>" disabled>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="namamodul" class="control-label">Nama Modul</label>
								<div class="controls">
									<input type="text" placeholder="Masukan Nama Modul " id="namamodul" name="namamodul" value="<?=$hasil[namamodul] ?>">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<label for="link" class="control-label">Link</label>
								<div class="controls">
									<input type="text" placeholder="Masukan Link .." id="link" name="link" value="<?=$hasil[link] ?>">
								</div>
							</div>
						</td>
					</tr>
					<?php
						if ($hasil[publish]=='Y') {
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="publish" class="control-label">Publish</label>
								<div class="controls">
									<input type="radio" id="publish" name="publish" Value= 'Y' checked>Y &nbsp;<input type="radio" id="publish" name="publish" Value= 'N' >N
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
								<label for="publish" class="control-label">Publish</label>
								<div class="controls">
									<input type="radio" id="publish" name="publish" value= 'Y' >Y &nbsp;<input type="radio" id="publish" name="publish" value= 'N' checked>N
								</div>
							</div>
						</td>
					</tr>
					<?php
						}
						if ($hasil[status]=='User') {
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="status" class="control-label">Status</label>
								<div class="controls">
									<input type="radio" id="status" name="status" value='User' checked>User &nbsp;<input type="radio" id="status" name="status" value="Admin" >Admin
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
								<label for="status" class="control-label">Status</label>
								<div class="controls">
									<input type="radio" id="status" name="status" value="User">User &nbsp;<input type="radio" id="status" name="status" value="Admin" checked>Admin
								</div>
							</div>
						</td>
					</tr>
					<?php
						}
						if ($hasil[aktif]=='Y') {
					?>
					<tr>
						<td>
							<div class="control-group">
								<label for="aktif" class="control-label">Aktif</label>
								<div class="controls">
									<input type="radio" id="aktif" name="aktif" Value= 'Y' checked>Y &nbsp;<input type="radio" id="aktif" name="aktif" Value= 'N' >N
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
									<input type="radio" id="aktif" name="aktif" Value= 'Y' >Y &nbsp;<input type="radio" id="aktif" name="aktif" Value= 'N' checked>N
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