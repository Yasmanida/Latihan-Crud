<?php
include_once("koneksi.php");
$id_dokter= $_POST['id'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$taun_masuk= $_POST['tahun_masuk'];
$spesialis= $_POST['spesialis'];
$query="UPDATE tb_dokter SET
nama='$nama',alamat='$alamat',tahun_masuk='$taun_masuk',
spesialis='$spesialis' WHERE id_dokter=$id_dokter";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "Update data gagal";
}
?>