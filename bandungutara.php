<?php

    include "php_koneksi.php";
?>

<?php 
///mengambil data dari tabel pengunjung

$pilih=mysql_query("SELECT * FROM masjid_bu"); ?>

<?php ///tampilkan data dengan 'while'
 while($pilih2=mysql_fetch_array($pilih)) ///mengambil data ke variabel $pilih2 dari $pilih
{ ?>

<a href='single3.php?id=<?= $pilih2["id"]; ?>' target="_blank"><?php echo "$pilih2[nama_masjid]<br>"; //menampilkan data ?></a>

<?php } ?>
