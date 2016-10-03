mysql_connect()
mysql_select_db()
mysql_close()

<?php
 
$user_name = "root";
$password = "";
$database = "ta_rpl";
$host_name = "localhost"; 
 
mysql_connect($host_name, $user_name, $password);
 
echo "Koneksi Terbuka";
 
?>