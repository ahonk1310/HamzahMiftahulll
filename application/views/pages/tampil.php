<div class="col-md-9">
	<div class="row">	
		<?php 
			foreach($biodata as $row){
		?>
		<div class="col-md-3">
			<img style="width:236;height:200;" src="<?php echo base_url('assets/uploads/'.$row->foto) ?>" class="img-thumbnail"> 
			<h2><?php echo $row->Nama; ?></h2>
			<p><?php echo $row->NPM; ?><br>
			<?php echo $row->Kelas; ?><br>
			<?php echo $row->nama_jurusan ?></p>   
			<p>
				<a href="<?php echo base_url('biodata/edit/'.$row->NPM) ?>" class="btn btn-success">Edit</a> 
				<a onClick="return confirm('Apakah anda yakin ?')" href="<?php echo base_url('biodata/delete/'.$row->NPM) ?>" class="btn btn-danger">Delete</a>
			</p>
		</div>
		<?php } ?>
	</div>
</div> 