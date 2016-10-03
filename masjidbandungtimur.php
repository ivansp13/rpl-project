<?php

include "php_koneksi.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Pencari Majelis Ta'lim Kota Bandung</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
      </head>
  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger">Open Menu</button>
					<ul class="dl-menu">
						<li>
							<a href="#intro">Selamat Datang</a>
						</li>
						<li><a href="#contact">Data Masjid</a></li>
					</ul>
			</div><!-- /dl-menuwrapper -->
	</div>	

	  <!-- intro area -->	  
	  <div id="intro">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-12">
			
						<div class="brand">
							<h1><a href="index.html">Aplikasi Pencari <br/> Majelis Ta'lim <br/> Di Kota Bandung</a></h1>
							<div class="line-spacer"></div>
							<p><span>UIN Sunan Gunung Djati Bandung</span></p>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>
	  

	  
	  
	  <!-- Biodata -->
	    <section id="contact" class="home-section bg-white">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Nama Masjid</h2>
					 <p>Silahkan Masukan Nama Masjid di bawah !</p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
				<form method="post" action="tombol_selesai_mbt.php" class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Nama Masjid<input type="text" name="nama_masjid" class="form-control" id="inputName" placeholder="Nama Masjid"></p>
					</div>
				  </div>
				  
				  
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Profil<textarea style="width: 100%;height: 500px;" name="alamat" class="form-control" rows="3" placeholder="Tulis Profil singkat Masjid"></textarea></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Alamat<textarea name="alamat" class="form-control" placeholder="Alamat lengkap"></textarea></p>
					</div>
				  </div>
				   <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Majelis<textarea name="majelis" class="form-control" placeholder="Nama Majelis"></textarea></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Jadwal Kegiatan<textarea name="jadwal" class="form-control" placeholder="Isi Kegiatan"></textarea></p>
					</div>
				  </div>
			 <div class="form-group">
				  <div class="col-md-offset-2 col-md-8">
				      <p>Kode Wilayah<textarea name="kode_wilayah" class="form-control" placeholder="BT01"></textarea></p>
				  </div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <input type="submit" value="selesai" class="btn btn-theme btn-lg btn-block"></input>
					</div>
				  </div>
				</form>
	
	  			</div>
			
				
	  		</div>
			
	  	</div>
	  </section>  
	  
		

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2016 APMT. All rights reserved. By Ivan Septamihardja Prawira ( 1147050088 )</p>
				</div>
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>