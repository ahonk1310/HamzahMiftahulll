<div class="col-md-6">
	<h2>Edit Buku</h2>
	<form action="<?php echo base_url('biodata/update') ?>" method="post">
		<div class="form-group">
			<label>no.buku baru :</label>
			<input type="text" name="NPM" class="form-control" placeholder="Masukan no.buku baru" value="<?php echo $biodata->NPM ?>" required>
			<label>no.buku lama : </label>
			<input type="text" name="NPM_awal" class="form-control" placeholder="Masukan no.buku lama" value="<?php echo $biodata->NPM ?>" required>

		</div>
		<div class="form-group">
			<label>Nama buku :</label>
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo $biodata->Nama ?>" required>
		</div>
		<div class="form-group">
			<label>kode rak :</label>
			<input type="text" name="kelas" class="form-control" placeholder="Masukan no.rak" value="<?php echo $biodata->Kelas ?>" required>
		</div>
		<div class="form-group">
			<label>kategori :</label>
			<select name="id_jurusan" class="form-control" required>
				<option value="">--Masukan kategori--</option>
				<?php
					foreach($jurusan as $row){
						if($row->id_jurusan == $biodata->id_jurusan){$s="selected";}else{$s="";}
						echo "<option value='".$row->id_jurusan."' $s>".$row->nama_jurusan."</option>";
					}
				?>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>