<?php

include "koneksi.php";

?>
<h2>DATA LOGIN</h2>
<hr>
<a href="tampil_admin.php">admin</a>|<a href="Login.php">Login</a>
<br>
<hr>
<a href="login.php">+TAMBAH LOGIN</a>
<br>
<table border="1">
	<tr>
		<td>Nomer</td>
		<td>Username</td>
		<td>Password</td>
		<td>Opsi</td>
	</tr>
	<?php

	    $tampil = mysqli_query($mysqli,"select * from login");
	    $no = 1;
	    while ($hasil = mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['username']; ?></td>
		<td><?php echo $hasil['password']; ?></td>
		<td>
			<a href="edit_pendaftaran.php?id=<?php echo $hasil['id'];?>">edit</a>|
			<a href="ahpus_pendaftaran.php?hapus&id=<? = $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
}
?>	
</table>