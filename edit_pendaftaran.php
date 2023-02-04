<?php

include "koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "select *from pendaftaran where id= '$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<h2>Edit dari Database</h2>
<form action="proses_edit_pendaftaran.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
			    <input type="text" name="nama" value="<?php echo $hasil['nama']?>">
			</td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email" value="<?php echo $hasil['tgl']?>"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tg_lahir" value="<?php echo $hasil['informasi']?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" value="<?php echo $hasil['alamat']?>"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="kirim"></td>
		</tr>
	</table>
</form>