<?php

		include "php_koneksi.php";
?>

<?php

		$nama = $_POST['nama'];
		$ttl = $_POST['lahir'];
		$jenis_kelamin = $_POST['kelamin'];
		$alamat = $_POST['alamat'];
		$kontak = $_POST['kontak'];
		$pilihan_kajian = $_POST['kajian'];

if(empty($nama)){

		echo "Anda Belum Mengisi Nama />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($ttl)){

		echo "Anda Belum Mengisi Tempat & Tanggal Lahir />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($jenis_kelamin)){

		echo "Anda Belum Memilih Jenis Kelamin />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($alamat)){

		echo "Anda Belum Memasukan Alamat />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($kontak)){

		echo "Anda Belum Mengisi Kontak />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else if(empty($pilihan_kajian)){

		echo "Anda Belum Memilih Kajian />
		<a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
	}
	else{

		mysql_query("insert into biodata(Nama, TTL, Jenis_Kelamin, Alamat, Kontak, Pilihan_Kajian) values ('$nama','$ttl','$jenis_kelamin','$alamat','$kontak','$pilihan_kajian')") or die (mysql_error());
		echo "TERIMAKASIH SUDAH MENGISI BIODATA !!! />
		<a href=javascript:history.go(-1)><b>Silahkan Lanjutkan</b>";
		
	}
?>