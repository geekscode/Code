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
					<h3>Users Management</h3>
					<blockquote>
						<p><?php echo $judul; ?></p>
					</blockquote>
				</legend>
			</form>
		</div>
	</div>
	<div class='row'>
		<body Onload='document.add.username.focus();'>
		<?php 	
			$attrib = array('class' => 'form-horizontal','id' => 'addUsers','name' => 'add');
			echo form_open('admin/manageUsers', $attrib);
		?>
		<div class='span7 offset3'>
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			  	<h4>Perhatian!</h4>  Isilah Form Dibawah Ini Dengan Benar ...
			</div>
			<table class="">
				<input type="hidden" name="status" id="status" value="<?php echo $status; ?>">
				<input type="hidden" name="iduser" id="iduser" value="<?php echo $iduser; ?>">
				<tr>
					<td>
						<div class="control-group">
							
							<label for="username" class="control-label">Username</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Username Anda .." id="username" name="username" tabindex="1" value="<?php echo $username;?>">								
							</div>
						</div>
					</td>			
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="password" class="control-label">Password</label>
							<div class="controls">
								<input type="password" placeholder="Masukan Password Anda .." id="password" name="password" data-original-title="password" tabindex="2" >
							</div>
						</div>
					</td>
				</tr>
 				<tr>
					<td>										
						<div class="control-group">
							<label for="passver" class="control-label">Re-enter Password</label>
							<div class="controls">
								<input type="password" placeholder="Ulangi Password Anda .." id="passwordConf" name="passwordConf" data-original-title="password" tabindex="3">
							</div>
						</div>
					</td>				
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="namalengkap" class="control-label">Nama Lengkap</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Nama Lengkap Anda .." id="namalengkap" name="namalengkap" tabindex="4" value="<?php echo $namalengkap; ?>" >
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="email" class="control-label">Email Address</label>
							<div class="controls">
								<input type="email" placeholder ="Masukan Email Anda .."id="email" name="email" tabindex="5" value="<?php echo $email; ?>">
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>										
						<div class="control-group">
							<label for="emailver" class="control-label">Re-enter Email Address</label>
							<div class="controls">
								<input type="text" placeholder="Ulangi Email Anda .." id="emailConf" name="emailConf" tabindex="6" value="<?php echo $email; ?>">
							</div>
						</div>
					</td>					
				</tr>				
				<tr>
					<td>										
						<div class="control-group">
							<label for="telp" class="control-label">Telepon</label>
							<div class="controls">
								<input type="text" placeholder="Masukan No Telp Anda .." id="telp" name="telp" tabindex="7" value="<?php echo $telp; ?>">
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>										
						<div class="control-group">
							<label for="alamat" class="control-label">Alamat</label>
							<div class="controls">
								<textarea rows="10" style="margin: 0px;width: 430px;height: 173px;" name="alamat" id="alamat" tabindex="8"><?php echo $alamat; ?></textarea>
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>
						<div class="control-group">												
							<div class="controls">
								<button type="submit" class="btn btn-primary" name="submit" tabindex="9"><i class="icon-plus-sign icon-white"></i> Save</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()" tabindex="10"><i class="icon-remove icon-white"></i> Batal</button>
							</div>
						</div>
					</td>
				</tr>
				
			</table>
			<p class="pull-right"><small>{elapsed_time}</small> Detik</p>
		</div>
		<?php echo form_close(); ?>
		</body>
</div>
