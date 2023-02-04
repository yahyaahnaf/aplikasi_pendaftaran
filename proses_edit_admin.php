<?php

include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$informasi = $_POST['informasi'];

mysqli_query($mysqli, "update admin set nama='$nama', tgl='$tgl', informasi='$informasi' where id='$id'");

header("location:tampil_admin.php");

?>