<?php
$koneksi=mysqli_connect("localhost","root","mysql","project_akhir");
//cek koneksi
if(mysqli_connect_error()){
    echo"Koneksi database gagal".mysqli_connect_error();
}
?>