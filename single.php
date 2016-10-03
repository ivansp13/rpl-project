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
						<li><a href="#contact">Profil Masjid</a></li>
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
					 <h2>Profil Masjid</h2>
					 <table>
					 		
					 </table>
					 <p>Berikut adalah profil masjid yang ada di Bandung Timur</p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">

					<?php 
					///mengambil data dari tabel pengunjung

					$pilih=mysql_query("SELECT * FROM masjid_bt"); ?>

					<?php ///tampilkan data dengan 'while'
					 while($pilih2=mysql_fetch_array($pilih)) ///mengambil data ke variabel $pilih2 dari $pilih
					{ ?>

					<h3><?php echo "$pilih2[nama_masjid]<br>"; //menampilkan data ?></h3>?>
					<img style = "widht = 100%; height = 100%;" src = "img/masjid/1.jpg" alt = "">
					<h4>Profil</h4>
					<p><?php echo "$pilih2[Profil_Masjid]<br>" ?></p>
					<h4>Alamat</h4>
					<p><?php echo "$pilih2[alamat]<br>" ?></p>
					<h4>Majelis</h4>
					<p><?php echo "$pilih2[majelis]<br>" ?>
					<h4>Jadwal</h4>
					<p><?php echo "$pilih2[jadwal]<br>" ?>

					<?php } ?>

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

