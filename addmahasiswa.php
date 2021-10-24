<!DOCTYPE html>
<html>
<head>
	<title>Formulir pendaftaran mahasiswa baru</title>
</head>
<body>
<header>
	<h3>formulir pendaftaran mahasiswa baru</h3>
</header>
<form action="Iaddmahasiswa.php"method="POST">
<table border="0">
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><input type="text" name="npm"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Tanggal lahir</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
			<input type="radio" name="jenis_kelamin"values="laki-laki">laki-laki
			<input type="radio" name="jenis_kelamin"values="perempuan">perempuan
		</td>
	</tr>
</table>
<p>
	<input type="submit" value="Daftar" name="daftar"/>
	echo '<script>alert("Welcome to Geeks for Geeks")</script>';
</p>
</form>

</body>
</html>