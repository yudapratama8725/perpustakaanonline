<?php 
	include "koneksi.php";

	$user_input=$_POST['us'];
	$password_input=$_POST['pas'];

	$query=mysqli_query($koneksi, "SELECT * FROM tb_login_awal WHERE username='$user_input' AND password='$password_input'");
	$rows = mysqli_fetch_assoc($query);
	$hasil=mysqli_num_rows($query);


	if($hasil==1)
	{
		session_start();
		$_SESSION['us']=$user_input;
		echo "
		<script>alert('Berhasil Login');
		location.href='peminjamanbuku.php';
		</script>

		";
	}

	else
	{
		echo "
		<script>alert('Gagal Login');
		location.href='loginawal.php';
		</script>

		";	
	}
 ?>