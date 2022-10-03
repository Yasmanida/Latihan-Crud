<?php
include_once("koneksi.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tahun_masuk = $_POST['tahun_masuk'];
$spesialis= $_POST['spesialis'];
$query="INSERT INTO tb_dokter (nama,alamat,tahun_masuk,spesialis) VALUE ('$nama','$alamat','$tahun_masuk','$spesialis')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>