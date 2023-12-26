<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$nama_db = "dbperpustakaan";
	$koneksi = mysqli_connect($host,$user,$pass,$nama_db);

	if(!$koneksi){
		die("Koneksi database gagal : ".mysql_connect_error());
	}
?>