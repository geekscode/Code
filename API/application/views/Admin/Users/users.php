<div class="container">
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
		<div class='span12'>
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
		<div class="span6">
			<form action="" class="form-stacked well">
				<input type='text' placeholder='Input Username'>&nbsp;&nbsp;&nbsp;<a href="" class='btn'><i class='icon-search'></i> Search</a>&nbsp;&nbsp;&nbsp; <a href="<?php base_url();?>addUsers" class='btn btn-primary'><i class='icon-user'></i> Add New users</a>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table class="table table-bordered table-condensed table-striped">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>Username</center></th>
						<th><center>Password</center></th>
						<th><center>Nama Lengkap</center></th>
						<th><center>Email</center></th>
						<th><center>Level</center></th>
					</tr>
				</thead>
				<?php foreach ($record as $row) : ?>
					<tbody>
						<tr>
							<td><?php echo $row->iduser; ?></td>
							<td><?php echo $row->username; ?></td>
							<td><?php echo $row->password; ?></td>
							<td><?php echo $row->namalengkap; ?></td>
							<td><?php echo $row->Email; ?></td>
							<td><?php echo $row->level; ?></td>
						</tr>
					</tbody>
				<?php endforeach;?>
			</table>
		</div>
	</div>
</div>