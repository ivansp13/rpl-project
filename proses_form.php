
<?
///membuat koneksi ke database
$server="localhost"; ///nama server
$username="ivan"; ///nama username mysql
$password="ivan"; ///password, kosongkan jika tidak ada
$database="ta_rl"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST[nama];
$lahir=$_POST[lahir];
$kelamin=$_POST[kelamin];
$alamat=$_POST[alamat];
$kontak=$_POST[kontak];
$kajian=$_POST[kajian];

///input ke tabel pengunjung
$input=mysql_query("INSERT INTO pengunjung (nama_pengunjung, tanggal_lahir, jenis_kelamin, alamat, kontak, pilihan_kajian) VALUES ('$nama', '$lahir', '$kelamin', '$alamat', '$kontak', '$kajian')");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo "Buku tamu berhasil disimpan";
}
else ///jika gagal
{
echo "Buku tamu gagal disimpan";
}
?>

