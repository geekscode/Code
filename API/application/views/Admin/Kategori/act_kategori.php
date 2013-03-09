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
					<h3>Kategori Management</h3>
					<blockquote>
						<p><?php echo $judul; ?></p>
					</blockquote>
				</legend>
			</form>
		</div>
	</div>
	<div class='row'>
		<body Onload='document.addKategori.namakategori.focus();'>
		<?php 	
			$attrib = array('class' => 'form-horizontal','id' => 'addKategori','name' => 'addKategori');
			echo form_open('admin/manageKategori', $attrib);
		?>
		<div class='span7 offset3'>
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			  	<h4>Perhatian!</h4>  Isilah Form Dibawah Ini Dengan Benar ...
			</div>
			<table class="">
				<input type="text" name="status" id="status" value="<?php echo $status; ?>">
				<input type="text" name="idkategori" id="idkategori" value="<?php echo $idkategori; ?>">
				<tr>
					<td>
						<div class="control-group">
							
							<label for="namakategori" class="control-label">Nama Kategori</label>
							<div class="controls">
								<input type="text" placeholder="Masukan Nama Kategori .." id="namakategori" name="namakategori" tabindex="1" value="<?php echo $namakategori;?>">								
							</div>
						</div>
					</td>			
				</tr>
				<tr>
					<td>										
						<div class="control-group">
							<label for="keterangan" class="control-label">Keterangan</label>
							<div class="controls">
								<textarea rows="10" style="margin: 0px;width: 430px;height: 173px;" name="keterangan" id="keterangan" tabindex="2"><?php echo $keterangan; ?></textarea>
							</div>
						</div>
					</td>					
				</tr>
				<tr>
					<td>
						<div class="control-group">												
							<div class="controls">
								<button type="submit" class="btn btn-primary" name="submit" tabindex="3"><i class="icon-plus-sign icon-white"></i> Save</button> <button type="reset" class="btn btn-primary" onclick="self.history.back()" tabindex="10"><i class="icon-remove icon-white"></i> Batal</button>
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
