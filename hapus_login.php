<?php
// Tombol Hapus ditekan
include "koneksi.php";
if(isset($_GET['hapus'])){
	$id = $_GET['id'];
	$hapus = mysqli_query($mysqli, "DELETE FROM login WHERE id = '$id'")
	if($hapus){
		header("location:tampil_login.php");
	}else{
		echo "<script>alert('maaf, Data tersebut masih terhubung dengan data yang lain');</script>";
	}
}
?>