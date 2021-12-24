<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'easpweba';

$db_connection = mysqli_connect($server, $user, $password, $database);

if ( !$db_connection ) {
	die('Gagal terhubung dengan database: ' . mysqli_connect_error () );
}
?>