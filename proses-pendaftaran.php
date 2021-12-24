<?php
	include('config.php');

	//ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status = $_POST['status'];
	$sekolah_asal = $_POST['sekolah_asal'];

	//buat query
	$sql = "INSERT INTO siswa(nama, alamat, jenis_kelamin, status, sekolah_asal) VALUES('$nama', '$alamat', '$jenis_kelamin', '$status', '$sekolah_asal')";
	$query = mysqli_query($db_connection, $sql);

	if ($query) {
		header('Location: index.php?status=sukses');
	}else {
		header('Location: index.php?status=gagal');
	}
?>