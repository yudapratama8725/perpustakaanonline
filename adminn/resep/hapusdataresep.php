<?php
include "../koneksi.php";
$a = $_GET['id'];
 $data=mysqli_query($koneksi, "DELETE FROM tb_resep WHERE id='$a'");
 if($data){
 	echo"
 	<script>	
    alert('Data Berhasil di hapus'); 
    location.href='../viewbukuresep.php';
 	</script>
 	";
 }
 else{
 	die("Query gagal dijalankan: ".mysqli_errno($koneksi).
 		" - ".mysqli_error($koneksi));
 	echo"
    <script>	
    alert('Data Gagal di hapus'); 
    location.href='../viewbukuresep.php';
 	</script>
 	";	
 }
?>