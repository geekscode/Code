 <div class="container">
		<?php if (validation_errors()) {?>
			<div class="alert alert-error">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>Warning!</strong><?php echo validation_errors(); ?>
			</div>
		<?php } ?>

		<?php if ($this->session->flashdata('result_login')) {?>
			<div class="alert">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>Warning! </strong><?php echo $this->session->flashdata('result_login'); ?>
			</div>
		<?php } ?>

	<?php echo form_open('admin','class=login-form'); ?>
		<div class="header">
			<h1>Login Form</h1>
			<span>Untuk Masuk kedalam Halaman Admin, Masukan Username and Password Anda !</span>
		</div>
		<div class="content">
			<input name="username" type="text" class="input username" placeholder="Username" value="<?php echo set_value('username'); ?>">
				<div class="user-icon"></div>
			<input name="password" type="password" class="input password" placeholder="Password">
				<div class="pass-icon"></div>
		</div>
		<div class="footer">
			<a href="reset-password.html" name="submit" class="register">Forgot your password?</a><input type="submit" name="submit" value="Submit" class="button" />							
		</div>
	<?php echo form_close(); ?>
</div>