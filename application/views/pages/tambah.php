<div class="col-md-6">
	<h2>Tambah buku</h2>
	<form action="<?php echo base_url('biodata/simpan') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>no.buku:</label>
			<input type="text" name="npm" class="form-control" placeholder="Masukan no.buku" required>
		</div>
		<div class="form-group">
			<label>Nama buku :</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
		</div>
		<div class="form-group">
			<label>Kode Rak :</label>
			<input type="text" name="kelas" class="form-control" placeholder="Masukan Kode Rak " required>
		</div>
		<div class="form-group">
			<label>Kategori:</label>
			<select name="id_jurusan" class="form-control" required>
				<option value="">--Masukan Kategori--</option>
				<?php
					foreach($jurusan as $row){
						echo "<option value='".$row->id_jurusan."'>".$row->nama_jurusan."</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Foto :</label>
			<input type="file" name="gambar" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>