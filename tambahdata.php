<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['nohp'];
$pesan = $_POST['pesan'];

$data = mysqli_query($koneksi, "INSERT INTO tb_kontak VALUES ('$nama','$email','$no_hp','$pesan')");

	if($data){
		echo "
		<script>
			alert('Data Berhasil Di Simpan');
			location.href = 'kontak.php';
		</script>
		";
	}
	
	else
	{
	echo "
	<script>
		alert('Data Gagal Di simpan');
		location.href = 'tambahdata.php';
	</script>
	";
	}

?>