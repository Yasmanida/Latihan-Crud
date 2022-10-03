<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_dokter where id_dokter=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}
?>