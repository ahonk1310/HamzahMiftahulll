<div class="col-md-6">
	<h2>Register</h2>
	<form action="<?php echo base_url('biodata/daftar') ?>" method="post">
		<div class="form-group">
			<label>Username :</label>
			<input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
		</div>
		<div class="form-group">
			<label>Password :</label>
			<input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
		</div>
		<div class="form-group">
			<label>Email :</label>
			<input type="email" name="email" class="form-control" placeholder="Masukan Email" required>
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
</div>