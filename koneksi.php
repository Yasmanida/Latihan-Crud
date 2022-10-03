<?php
$host="localhost";
$user="root";
$password="";
$database="db_dokter";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

//cek koneksi
if($koneksi) {
"Koneksi Berhasil";
}else{
echo "Koneksi Gagal";
}
?>

