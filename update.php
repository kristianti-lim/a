<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];
 
mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama', alamat='$alamat', nim='$nim' WHERE id='$id'");
 
header("location:index.php?");
 
?>
</body>
</html>