<?php

include "koneksi.php";

?>
<h2>DATA PENDAFTARAN</h2>
<hr>
<a href="tampil_pendaftaran.php">Pendaftaran</a>|<a href="tampil_admin.php">Admin</a>|<a href="index.php">Logout</a>
<br>
<hr>
<br>
<h2><p align="center">DATA PENDAFTARAN</p></h2>
<br>
<table border="2" align="center">
	<tr>
		<td>No.</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Tgl Lahir</td>
		<td>Alamat</td>
	</tr>
	<?php

	    $tampil = mysqli_query($mysqli,"select * from pendaftaran");
	    $no = 1;
	    while ($hasil = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['tgl_lahir']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
	</tr>
	<?php
}
?>	
</table>