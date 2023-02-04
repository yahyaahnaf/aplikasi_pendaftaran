<!DOCTYPE html>  
<html>
<head>
	<title>admin</title>
</head>
<body>
	<p>Selamat Datang di Halaman Admin</p>
	<hr>
	<br>
	<a href="pendaftaran.php">Pendaftaran</a>|<a href="admin.php">Admin</a>|<a href="login.php">Logout</a>
	<form action="proses_admin.php" method="POST">
		<fieldset>
			<legend>Admin</legend>
			<table>
				<tr>
					<td>Nama :</td>
					<td><input type="text" name="nama" placeholder="Masukkan nama..."></td>
				</tr>
				<tr>
					<td>Tanggal :</td>
					<td><input type="date" name="tgl"></td>
				</tr>
				<tr>
					<td>Informasi :</td>
					<td><textarea name="informasi" placeholder="Masukkan info..."></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="Daftar"></td>
				</tr>
			</table>
			<br>
			<hr>
			<div>copyright &copy 2023|SMK Luqman Al-Hakim kds</div>
		</fieldset>
	</form>

</body>
</html>