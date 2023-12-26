<?php 
include "koneksi.php";

$email 			= $_POST['email'];
$username 		= $_POST['email'];
$password		= buatpwd();
$encpt_password = ($password);
$namalengkap	= $_POST['namalengkap'];
$alamat 		= $_POST['alamat'];
$notelp 		= $_POST['telp'];

function buatpwd()
{
	$kata = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
	$password = substr(str_shuffle($kata), 0, 6);
	return $password;
}

$data = mysqli_query($koneksi, "INSERT INTO tb_user VALUES ('', '$email','$namalengkap','$alamat','$notelp')");
$data = mysqli_query($koneksi, "INSERT INTO tb_login_awal (kodelogin,username,password) VALUES ('','$username','$encpt_password')");

	if($data){
		echo "
		<script>
			alert('Pendaftaran Berhasil Username : $email & Password : $encpt_password');
			location.href = 'loginawaluser.php';
		</script>
		";
	}
	
	else
	{
		die("Query gagal dijalankan: ".mysqli_errno($koneksi).
			" - ".mysqli_error($koneksi));
	echo "
	<script>
		alert('Data Pendaftaran Gagal Di simpan');
		location.href = 'daftaruser.php';
	</script>
	";
	}

 ?>
 <?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "testing@domainanda.com";    
    $to = "alamatpenerima@domain.com";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>