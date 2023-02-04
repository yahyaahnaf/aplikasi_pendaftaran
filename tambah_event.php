<!DOCTYPE html>
<html>
<head>
	<title>Tambah Event</title>
</head>
<body>
	<h2>|Selamat Datang di Halaman Admin</h2>
	<hr>
	<fieldset>
		<legend>Tambah Event</legend>
		<form action="proses_tambah_event.php" method="POST">
			<table>
				<tr>
					<td>Nama Event:</td>
					<td><input type="text" name="nama" placeholder="Masukkan nama..." required></td>
				</tr>
				<tr>
					<td>Tanggal :</td>
					<td><input type="date" name="tgl" title="Masukkan tanggal..." required></td>
				</tr>
				<tr>
					<td>Informasi :</td>
					<td><textarea name="informasi" style="width: 645px; height: 275px;" placeholder="Masukkan info..." required></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
			</table>
	</fieldset>
    <br>
    <hr>
    <p>Copyright &copy SMK Luqman Al-Hakim Kudus</p>
</body>
</form>
</html>