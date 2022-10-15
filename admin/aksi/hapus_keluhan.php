<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_keluhan = $_GET['id_keluhan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from keluhan where id_keluhan='$id_keluhan'");

mysqli_query($koneksi,"delete from rekap where id_keluhan='$id_keluhan'");
 
// mengalihkan halaman kembali ke index.php
echo "<script> alert('Data berhasil dihapus,');</script>";
echo "<script> window.location='../keluhan.php';</script>"; 
?>