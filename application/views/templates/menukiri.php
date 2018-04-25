<div class="col-sm-3">
	<h3>Kategori</h3>
	<?php
		$jurusan = $this->mbiodata->jurusan();
		foreach($jurusan as $row){
			echo "<p><a href='".base_url()."biodata/tampil/".$row->id_jurusan."'>".$row->nama_jurusan."</a></p>";
		} 
	?>
</div>