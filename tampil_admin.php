<?php

include "koneksi.php";

?>
<h2>DATA ADMIN</h2>
<hr>
<a href="pendaftaran.php">Logout</a>
<br>
<hr>
<a href="admin.php">+ TAMBAH ADMIN</a>|
<a href="pendaftaran.php">+ TAMBAH PENDAFTARAN</a>
<br>
<h2><p align="center">DATA EVENT</p></h2>
<br>
<table border="1" align="center">
	<tr>
		<td>No.</td>
		<td>Nama</td>
		<td>Tgl</td>
		<td>Informasi</td>
		<td>Opsi</td>
	</tr>
	<?php

	    $tampil = mysqli_query($mysqli,"select * from admin");
	    $no = 1;
	    while ($hasil = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['tgl']; ?></td>
		<td><?php echo $hasil['informasi']; ?></td>
		<td>
			<a href="edit_admin.php?id=<?php echo $hasil['id'];?>">edit</a>|
			<a href="hapus_admin.php?hapus&id=<?php echo $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
}
?>	
</table>