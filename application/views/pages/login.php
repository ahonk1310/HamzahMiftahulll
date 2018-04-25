<div class="col-md-6">
	<h2>Login</h2>
	<form action="<?php echo base_url('biodata/validasi') ?>" method="post">
		<div class="form-group">
			<label>Username :</label>
			<input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
		</div>
		<div class="form-group">
			<label>Password :</label>
			<input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?php echo base_url('biodata/register'); ?>" class="btn btn-success">Register</a>
	</form>
</div>