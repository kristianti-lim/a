<?php
incude ("config.php");
//cek apakah tombol daftar sudah di klik atau belum?
if (isset($_POST['daftar'])){

// ambil data dari formulir
	$npm =$_POST['npm'];
	$nama =$_POST['nama'];
	$tanggal_lahir =$_POST['tanggal_lahir'];
	$alamat=$_POST=$_POST['alamat'];
	$jenis_kelamin=$_POST['jenis_kelamin'];

	#echo
	$npm."#".$nama."#".$tanggal_lahir."#".$alamat."#".$jenis_kelamin;

	//buat query
	$sql ="insert into mahasiswa (npm, nama_mhs, tgl_lahir,alamat, jenis_kelamin) values ('$npm','$nama','$tanggal_lahir','$alamat
	','$jenis_kelamin')";
	//echo $sql;
	$query = mysqli_query($db, $sql);
	//apakah query simpan berhasil?
	//kalau berhasil alihkkan ke halaman index.php dengan status = sukses
	header('location:mahasiswa.php?status=data berhasil ditambah');

}else{
	//kalau gagal alihkan ke halaman index.php dengan status=sukses
	header('location:mahasiswa.php?status=data berhasil ditambah');
}else{

}else{
	//kalau gagal alihkan ke halaman index.php dengan status +gagal
	header('location:mahasiswa.php?status=data gagal ditambah');


}
}else{
	die("akses dilarang...");

}
?>