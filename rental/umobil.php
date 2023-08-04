<?php
include("koneksi.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtYear'];
$harga = $_POST['txtHarga'];
$kode = $_POST['kode'];
$simpan = mysqli_query($koneksi, "update mobil set no_polisi='$nopolisi', merk='$merk', tahun='$tahun', harga='$harga'
where id_mobil='$kode'"); 
if ($simpan) {
    header("Location:index.php?x=mobil");
}

 

