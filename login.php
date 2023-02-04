<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<p>Selamat Datang di Halaman Login</p>
	<hr>
	<br>
	<form action="proses_login.php" method="POST">
	<fieldset>
		<legend>login</legend>
		<table>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" placeholder="Masukkan user..."></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" placeholder="Masukkan password..."></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
		<br>
		<a href="tampil_admin.php">Belum Punya Akun...</a>
	</fieldset>
	<br>
	<hr>
	<div>copyright &copy; 2023 |SMK Luqman AL-Hakim kds</div>
</form>

</body>
</html>