<?php

include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

mysqli_query($mysqli, "update pendaftaran set nama='$nama', email='$email', tgl_lahir='$tgl_lahir', alamat='$alamat' where id='$id'");

header("location:tampil_pendaftaran.php");

?>