<?php

include "koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "select *from admin where id= '$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<h2>Edit dari Database</h2>
<form action="proses_edit_admin.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
			    <input type="text" name="nama" value="<?php echo $hasil['nama']?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal Event</td>
			<td><input type="date" name="tgl" value="<?php echo $hasil['tgl']?>"></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td><input type="text" name="informasi" value="<?php echo $hasil['informasi']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="edit" name="kirim"></td>
		</tr>
	</table>
</form>