<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id=$_POST['id'];
$nama_alat=$_POST['nama_alat'];
$kode_alat=$_POST['kode_alat'];
$tanggal_dibuat=$_POST['tanggal_dibuat'];
$jumlah_alat=$_POST['jumlah_alat'];
$secbaru=$_POST['secbaru'];
$asal_alat=$_POST['asal_alat'];

// update data ke database
mysqli_query($koneksi, "update crud_fitness set nama_alat='$nama_alat', kode_alat='$kode_alat', tanggal_dibuat='$tanggal_dibuat', jumlah_alat='$jumlah_alat', secbaru='$secbaru', asal_alat='$asal_alat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampildata.php");
?>