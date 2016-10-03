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
						<li><a href="#contact">Biodata</a></li>
						<li><a href="#services">Beranda</a></li>
						<li><a href="#works">Wilayah</a></li>
						<li><a href="#galeri">Galeri</a></li>
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
					 <h2>Biodata</h2>
					 <p>Silahkan isi biodata Anda untuk melanjutkan ke aplikasi :</p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
				<form method="post" action="tombol_selesai.php" class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Nama <input type="text" name="nama" class="form-control" id="inputName" placeholder="Ivan Septamihardja Prawira"></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>TTL <input type="datetime" name="lahir" class="form-control" id="inputEmail" placeholder="Bandung, 7 September 1998"></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Jenis Kelamin<input type="text" name="kelamin" class="form-control" id="inputSubject" placeholder="Laki - Laki / Perempuan"></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Alamat<textarea name="alamat" class="form-control" rows="3" placeholder="Jln.Galaxy Selatan VI Komp.Margahayu Raya Barat blok U-II No.175 RT01 / RW07 Kel.Sekejati Kec.Buahbatu Kota Bandung"></textarea></p>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <p>Kontak<textarea name="kontak" class="form-control" placeholder="085721590427 / 08122059911"></textarea></p>
					</div>
				  </div>
				  <div class="form-group">
				  <div class="col-md-offset-2 col-md-8">
				      <p>Pilihan Kajian</p>
				  	  <select id="" name="kajian" class="form-control">
				  	 	 <option value="Tauhid">Tauhid</option>
				  	 	 <option value="Fiqih">Fiqih</option>
				  	 	 <option value="Tasawuf">Tasawuf</option>
				  	 	 <option value="Dzikir">Dzikir</option>
				  	 	 <option value="Shalawat">Shalawat</option>
				  	 	 <option value="Tafsir">Tafsir</option>
				  	  </select>
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
	  
		<!-- spacer -->	  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						</div>
					</div>				
				</div>
            </div>
		</section>	  
	  
	  <!-- Services -->
	 <section id="services" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Beranda</h2>
					 <p></p>
					</div>
				  </div>
			  </div>

			 <div>
			 <ul class="wilayah">
			 <li>
			 	 <div  class="row ">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					<h6>Bandung Timur</h6>
					 <iframe style="border:medium solid black" src="bandungtimur.php" width="250" height="200"></iframe>
					</div>
				  </div>
			      </div>
			 </li>
			  <li>
			  	  <div class="row ">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					<h6>Bandung Selatan</h6>
					 <iframe style="border:medium solid black" src="bandungselatan.php" width="250" height="200"></iframe>
					</div>
				  </div>
			      </div>
			  </li>
			  <li>
			  	 <div class="row ">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					<h6>Bandung Utara</h6>
					 <iframe style="border:medium solid black" src="bandungutara.php" width="250" height="200"></iframe>
					</div>
				  </div>
			     </div>
			  </li>
			  <li>
			      <div class="row ">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					<h6>Bandung Barat</h6>
					 <iframe style="border:medium solid black" src="bandungbarat.php" width="250" height="200"></iframe>
					</div>
				  </div>
			  </div>  	
			  </li>
			  </ul>
			  </div>
			  

			  
			  
		</div>
	</section>
	
	 <!-- Works -->
	<section id="works" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Wilayah</h2>
					 <p></p>
					</div>
				  </div>
			  </div>
				<div class="row">
					<div class="col-md-offset-2 col-md-12">
					
					<ul class="lb-album">
						<li>
							<a href="#peta-1">
								<img style="width:100%;height:100%;" src="img/map/1.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="peta-1">
								<a href="#page" class="lb-close">X</a>
								<img width="300" height="300" src="img/map/bdg_barat.png" alt="" />
									<h4>
										Peta Bandung Barat
									</h4>
							</div>
						</li>
						<li>
							<a href="#peta-2">
								<img style="width:100%;height:100%;" src="img/map/3.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="peta-2">
								<a href="#page" class="lb-close">x Close</a>
								<img width="300" height="300" src="img/map/bdg_timur.png" alt="" />
									<h4>
										Peta Bandung Timur
									</h4>
							</div>
						</li>
						<li>
							<a href="#peta-3">
								<img style="width:100%;height:100%;" src="img/map/2.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="peta-3">
								<a href="#page" class="lb-close">x Close</a>
								<img width="300" height="300" src="img/map/bdg_selatan.png" alt="" />
									<h4>
										Peta Bandung Selatan
									</h4>
							</div>
						</li>
						<li>
							<a href="#peta-4">
								<img style="width:100%;height:100%;" src="img/map/4.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="peta-4">
								<a href="#page" class="lb-close">x Close</a>
								<img width="300" height="300" src="img/map/bdg_utara.png" alt="" />
									<h4>
										Peta Bandung Utara
									</h4>
							</div>
						</li>
					</ul>
					
					</div>
				</div>
			</div>
		</section>	  
	
		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">	
						</div>
					</div>				
				</div>
            </div>
		</section>


		<!-- Works -->
	<section id="galeri" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Galeri</h2>
					 <p></p>
					</div>
				  </div>
			  </div>
				<div class="row">
					<div class=" col-md-12">
					
					<ul class="lb-album">
						<li>
							<a href="#image-1">
								<img src="img/masjid/thum/1.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-1">
								<a href="#page" class="lb-close">X Close</a>
								<img src="img/masjid/1.jpg" alt="" />
								<h4>
									Masjid White Lotus
								</h4>
								<p>Masjid ini memiliki dominan warna putih yang indah</p>
							</div>
						</li>
						<li>
							<a href="#image-2">
								<img src="img/masjid/thum/2.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-2">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/2.jpg" alt="" />
								<h4>
									Masjid Xun Quan Liang
								</h4>
								<p>Masjid ini memiliki motif khas negeri Cina</p>
							</div>
						</li>
						<li>
							<a href="#image-3">
								<img src="img/masjid/thum/3.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-3">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/3.jpg" alt="" />
								<h4>
									Masjid Istiqlal
								</h4>
								<p>Masjid ini memiliki artistik minimalis yang sederhana</p>
							</div>
						</li>
						<li>
							<a href="#image-4">
								<img src="img/masjid/thum/4.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-4">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/4.jpg" alt="" />
								<h4>
									Masjid Kubah Emas
								</h4>
								<p>Masjid ini memiliki kubah emas seperti keong emas</p>
							</div>
						</li>
						<li>
							<a href="#image-5">
								<img src="img/masjid/thum/5.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-5">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/5.jpg" alt="" />
								<h4>
									Masjid Agung Demak
								</h4>
								<p>Masjid ini karya walisongo di kota Demak</p>
							</div>
						</li>
						<li>
							<a href="#image-6">
								<img src="img/masjid/thum/6.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-6">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/6.jpg" alt="" />
								<h4>
									Masjid Azhar bin Yazid
								</h4>
								<p>Masjid ini memiliki dominan warna cerah nan indah</p>
							</div>
						</li>
						<li>
							<a href="#image-7">
								<img src="img/masjid/thum/7.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-7">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/7.jpg" alt="" />
								<h4>
									Masjid Zulqarnain
								</h4>
								<p>Masjid ini memiliki tipe bangunan layaknya istana kerajaan</p>
							</div>
						</li>
						<li>
							<a href="#image-8">
								<img src="img/masjid/thum/8.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-8">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/8.jpg" alt="" />
								<h4>
									Masjid Al Mi'raj
								</h4>
								<p>Masjid ini memiliki motif cerah yang dibuat oleh kaisar pada zamannya</p>
							</div>
						</li>
						<li>
							<a href="#image-9">
								<img src="img/masjid/thum/9.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-9">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/9.jpg" alt="" />
								<h4>
									Masjid An-Nabawi
								</h4>
								<p>Masjid ini memiliki kubah seperti masjid Nabawi</p>
							</div>
						</li>
						<li>
							<a href="#image-10">
								<img src="img/masjid/thum/10.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-10">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/10.jpg" alt="" />
								<h4>
									Masjid Taj Mahal
								</h4>
								<p>Masjid ini memiliki bentuk bangunan seperti Taj Mahal</p>
							</div>
						</li>
						<li>
							<a href="#image-11">
								<img src="img/masjid/thum/11.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-11">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/11.jpg" alt="" />
								<h4>
									Masjid Green Canyon
								</h4>
								<p>Masjid ini memiliki dominan warna hijau cerah yang menyejukkan</p>
							</div>
						</li>
						<li>
							<a href="#image-12">
								<img src="img/masjid/thum/12.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-12">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/masjid/.jpg" alt="" />
								<h4>
									Masjid Qiblatain
								</h4>
								<p>Masjid ini merupakan masjid terbesar di daerah tertentu</p>
							</div>
						</li>
					</ul>
					
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