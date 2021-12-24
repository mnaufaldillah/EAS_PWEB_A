<?php
	include('config.php');

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status = $_POST['status'];
	$sekolah_asal = $_POST['sekolah_asal'];

	$sql = "UPDATE siswa SET 
	nama = '".$nama."', 
	alamat = '".$alamat."', 
	jenis_kelamin = '".$jenis_kelamin."', 
	status = '".$status."', 
	sekolah_asal = '".$sekolah_asal."' 
	WHERE id = ".$id;

	$query = mysqli_query($db_connection, $sql);

	if ($query) {
		header('Location: list-siswa.php?status=sukses');
	}else {
		header('Location: list-siswa.php?status=gagal');
	}
?>