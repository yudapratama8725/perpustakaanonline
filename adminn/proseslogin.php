<?php 
	include "../koneksi.php";

	$user_input=$_POST['us'];
	$password_input=$_POST['pas'];

	$query=mysqli_query($koneksi, "SELECT * FROM tb_login_admin WHERE Username='$user_input' AND Password='$password_input'");
	$hasil=mysqli_num_rows($query);

	if($hasil==1)
	{
		session_start();
		$_SESSION['us']=$user_input;
		echo "
		<script>alert('Selamat Datang Di Halaman Admin');
		location.href='viewawal.php';
		</script>

		";
	}

	else
	{
		echo "
		<script>alert('Gagal Login');
		location.href='../login.php';
		</script>

		";	
	}
 ?>