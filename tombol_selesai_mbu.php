<?php

		include "php_koneksi.php";
?>

<?php

		$nama_masjid = $_POST['nama_masjid'];
		$alamat_masjid = $_POST['alamat'];
		$nama_majelis = $_POST['majelis'];
		$jadwal = $_POST['jadwal'];

if(empty($nama_masjid)){

		echo "Anda Belum Mengisi Nama />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	
	else if(empty($alamat_masjid)){

		echo "Anda Belum Memasukan Alamat />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($nama_majelis)){

		echo "Anda Belum Memilih Kajian />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($jadwal)){

		echo "Anda Belum Memilih Kajian />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("insert into masjid_bu(nama_masjid, alamat, majelis, jadwal) values ('$nama_masjid','$alamat_masjid','$nama_majelis','jadwal')") or die (mysql_error());
		echo "TERIMAKASIH SUDAH MENGISI BIODATA !!! />
		<a href=javascript:history.go(-1)><b>Silahkan Lanjutkan</b>";
		
	}
?>