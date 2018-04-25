<html>
<head>
  <title>Perpustakaan</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <style>
	body{

		display: flex;
		min-height:100vh;
		flex-direction: column;
	}
	.container{
		flex:1 0 auto;
	}
	.footer{
		height:60px;
		color:white;
		line-height:60px;
	}
  
  </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-secondary">
  <ul class="navbar-nav">
    <a class="navbar-brand" href="<?php echo base_url() ?>">Perpustakaan</a>
	
	<li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('biodata/tambah') ?>">Tambah</a>
    </li>

  </ul>

  <ul class="navbar-nav my-2 my-lg 0">
  <?php
  	if($this->session->login == true){
  	?>
  	<li class="nav-item">
  		<span class="nav-link" href >Selamat Datang <?php echo $this->session->name; ?></span>
  	</li>
  	<li class="nav-item">
  		<a class="nav-link" href="<?php echo base_url('biodata/logout') ?>">Logout</a>
  	</li>
  	<?php 	
  		}else{
  	?>
  	<li class="nav-item">
  		<a class="nav-link" href="<?php echo base_url('biodata/login') ?>">Login</a>
  	</li>
  	<?php } ?>
  </ul>
  
</nav>
<div class="jumbotron text-center">
<ul class="navbar-nav">
    <a class="navbar-brand" href="<?php echo base_url() ?>"><h1>Perpustakaan</h1></a>
	<p>"Buku adalah Gudang ilmu"</p>
</div>

<div class="container">
	<div class="row">
