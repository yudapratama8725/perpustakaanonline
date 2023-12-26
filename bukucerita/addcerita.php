<?php 
include "../koneksi.php";
session_start();
$judulbuku = $_POST['judulbuku'];
$jumlahpinjambuku = $_POST['jumlah'];
$namalengkap = $_POST['nama'];
$tglblnthnpeminjaman = $_POST['tgl'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$username = $_SESSION['us'];

$rows = mysqli_query($koneksi, "SELECT * FROM tb_login_awal WHERE username = '$username'");
$kodelogin = mysqli_fetch_assoc($rows)['kodelogin'];

$data = mysqli_query($koneksi, "INSERT INTO tb_cerita VALUES ('', '$judulbuku','$jumlahpinjambuku','$namalengkap','$tglblnthnpeminjaman','$nohp','$alamat','$email', '$kodelogin')");

	if($data){
		$rows = mysqli_query($koneksi, "SELECT max(id) FROM tb_cerita WHERE kodelogin = '$kodelogin'");
		$id = mysqli_fetch_assoc($rows)['max(id)'];
		echo "
		<script>
			alert('Data Berhasil Di Simpan');
			location.href = 'formbukucerita.php?id=$id';
		</script>
		";
	}
	
	else
	{
	echo "
	<script>
		alert('Data Gagal Di simpan');
		location.href = 'formbukucerita.php';
	</script>
	";
	}

?>