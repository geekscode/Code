
	<div class="row">
		<div class="span12">
			<div class="btn-group pull-right">
				<a class="btn btn-large top-buttons" href="###" data-original-title="Print"><i class="icon-print"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Download"><i class="icon-download-alt"></i></a>
				<a class="btn btn-large top-buttons" href="###" data-original-title="Change-Color"><i class="icon-cog"></i></a>
			</div>
		</div>
	</div>
	<div class='row'>
		<div class='span11 offset1'>
			<form>
				<legend>
					<h3>
						Users Management
					</h3>
				</legend>
			</form>
		</div>
	</div>
	<div class="row">
		<body Onload='document.add.search.focus();'>
		<div class="span6 offset1">
			<form action="" class="form-stacked well" name="add">
				<input type='text' placeholder='Input Username ..' name="search">&nbsp;&nbsp;&nbsp;<a href="" class='btn'><i class='icon-search'></i> Search</a>&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url();?>index.php/admin/tambahUser" class='btn btn-primary' name=-"add"><i class='icon-user'></i> Add New users</a>
			</form>
		</div>
		</body>
	</div>
	<div class="row">
		<div class="span10 offset1">
			<table class="table table-bordered table-condensed table-striped table-hover">
				<thead class="info">
					<tr class="info">
						<!-- <th><center>No</center></th> -->
						<th><center>Username</center></th>						
						<th><center>Nama Lengkap</center></th>
						<th><center>Email</center></th>
						<th><center>Telepon</center></th>
						<th><center>Alamat</center></th>
						<th><center>Level</center></th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<?php if ($data_users->num_rows() > 0) {
					foreach ($data_users->result() as $row) :?>
					<tbody>
						<tr>
							<!-- <td><?php echo $row->iduser; ?></td> -->
							<td><?php echo $row->username; ?></td>							
							<td><?php echo $row->namalengkap; ?></td>
							<td><?php echo $row->Email; ?></td>
							<td><?php echo $row->Telepon; ?></td>
							<td><?php echo $row->Alamat; ?></td>
							<td><center><?php echo $row->level; ?></center></td>
							<td><center><a href="<?php echo base_url();?>index.php/admin/editUser/<?php echo $row->iduser; ?>" ><i class="icon-edit"></i> Edit </a><i class="divider-vertical">|</i><a href="<?php echo base_url();?>index.php/admin/hapus/<?php echo $row->iduser; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?');" > <i class="icon-trash"></i> Hapus</center></td>
						</tr>
					</tbody>
				<?php endforeach; }?>
			</table>
			<?php echo $paginator;?>
			<p class="pull-right"><small>{elapsed_time}</small> Detik</p>
		</div>		
	</div>
