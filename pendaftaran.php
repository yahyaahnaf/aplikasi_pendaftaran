<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
</head>
<body>
	<p>Selamat Datang di Halaman Pendaftaran</p>
	<hr>
	<br>
	<a href="pendaftaran.php">Pendaftaran</a> | <a href="admin.php">Admin</a> | 
	<a href="login.php">Logout</a>
	<br>
	<form action="proses_pendaftaran.php" method="POST">
		<br>
	<fieldset>
		<legend>Pendaftaran</legend>
		<table>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" placeholder="Masukkan nama..."></td>
			</tr>
			<tr>
				<td>email :</td>
				<td><input type="email" name="email" placeholder="Masukkan email..."></td>
			</tr>
			<tr>
				<td>Tanggal Lahir :</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea name="alamat" placeholder="Masukkan alamat..."></textarea>
			</tr>
		    <td><input type="submit" value="Daftar"></td>
		</table>
		<br>
		<hr>
		<div>copyright &copy 2023 |SMK Luqman Al-Hakim kds</div>

	</fieldset>
    </form>
</body>
</html>