<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$nama_alat=$_POST['nama_alat'];
$kode_alat=$_POST['kode_alat'];
$tanggal_dibuat=$_POST['tanggal_dibuat'];
$jumlah_alat=$_POST['jumlah_alat'];
$secbaru=$_POST['secbaru'];
$asal_alat=$_POST['asal_alat'];

//menginput data ke database
mysqli_query($koneksi, "insert into crud_fitness (nama_alat, kode_alat, tanggal_dibuat, jumlah_alat, secbaru, asal_alat) values('$nama_alat','$kode_alat','$tanggal_dibuat','$jumlah_alat','$secbaru','$asal_alat')");
// mengalihkan halaman kembali ke index.php
header("location:tampildata.php");
?>