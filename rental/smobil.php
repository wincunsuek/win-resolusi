<?php
include("koneksi.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtYear'];
$harga = $_POST['txtHarga'];
$simpan = mysqli_query($koneksi, "insert into mobil(no_Polisi,merk,tahun,harga,s_mobil) values 
('$nopolisi','$merk', '$tahun','$harga','AKTIF')"); 
if ($simpan) {
    header("Location:index.php?x=mobil");
}

 

