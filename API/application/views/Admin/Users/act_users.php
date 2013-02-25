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
					<h3>Users Management</h3>
					<blockquote>
						<p>Add User</p>
					</blockquote>
				</legend>
			</form>
		</div>
	</div>
	<div class='row'>
		<?php echo form_open('admin_home/addUsers','class=form-horizontal'); ?>
		<div class='span12'>
			<table class=" span10 offset2">				
				<tr>
					<td>
						<div class="control-group">
							<label for="username" class="control-label">Username</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Username Anda .." id="username" name="username" tabindex="1" value="<?php echo set_value('username'); ?>">								
							</div>
						</div>
					</td>
					<td>
						<?php 
							if (validation_errors()):?>
								<div class='alert alert-error'>
  									<button type='button' class='close' data-dismiss='alert'></button>
  									<?php echo form_error('username');?>
								</div>			
						<?php endif; ?>
					</td>				
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="password" class="control-label">Password</label>
							<div class="controls">
								<input type="password" placeholder="Masukan Password Anda .." id="password" name="password" data-original-title="password" tabindex="2" value="<?php echo set_value('password'); ?>">
							</div>
						</div>
					</td>
					<td>
						<?php echo form_error('password');?>
					</td>
				</tr>
 				<tr>
					<td>										
						<div class="control-group">
							<label for="passver" class="control-label">Re-enter Password</label>
							<div class="controls">
								<input type="password" placeholder="Ulangi Password Anda .." id="passwordConf" name="passver" data-original-title="password" tabindex="3">
							</div>
						</div>
					</td>
					
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="namalengkap" class="control-label">Nama Lengkap</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Nama Lengkap Anda .." id="namalengkap" name="namalengkap" tabindex="4" >
							</div>
						</div>
					</td>
					
				</tr>
				<tr>
					<td>
						<div class="control-group">
							<label for="email" class="control-label">Email Address</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Email Anda .." id="email" name="email" tabindex="5">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>										
						<div class="control-group">
							<label for="emailver" class="control-label">Re-enter Email Address</label>
							<div class="controls">
								<input type="text" placeholder="Ulangi Email Anda .." id="emailver" name="emailver" tabindex="6">
							</div>
						</div>
					</td>
				</tr>				
				<tr>
					<td>
						<div class="control-group">												
							<div class="controls">
								<button type="submit" class="btn btn-primary" name="submit" tabindex="7"><i class="icon-plus-sign icon-white"></i> Save</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()" tabindex="8"><i class="icon-remove icon-white"></i> Batal</button>
							</div>
						</div>
					</td>
				</tr>
				
			</table>			

		</div>
		<?php echo form_close(); ?>
	</div>
</div>