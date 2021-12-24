<?php
	include('config.php');

	if ( !isset($_GET['id']) ) {
		header('Location: list-siswa.php');
	}

	//ambil data dari url
	$id = $_GET['id'];
	$sql = 'DELETE FROM siswa WHERE id='.$id;
	$query = mysqli_query($db_connection, $sql);

	if ($query) {
		header('Location: list-siswa.php?status=sukses-hapus');
	}else {
		header('Location: list-siswa.php?status=gagal-hapus');
	}
?>