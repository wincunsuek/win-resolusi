<?php
include("koneksi.php");
$nama = $_POST['txtNama'];
$kelamin = $_POST['kelamin'];
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$level = $_POST['level'];
$simpan= mysqli_query($koneksi, "insert into admin(nama_admin,jenkel_admin,username,password,level)
values ('$nama','$kelamin','$username','$password','$level')") or die(mysqli_error());
if ($simpan) {
    header("Location:index.php?x=admin");
}