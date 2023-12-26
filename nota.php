<!DOCTYPE html>
<html>
<head>
	<title>Cetak Nota</title>
</head>
<body>
	<center>
		<h1>PERPUSTAKAAN ONLINE</h1>
		<h4>
			Jalan Gn Mas GG Graha Partha Lestari, No. 08 <br/>
			Denpasar - Bali <br/>
			Telp : 088097795954 <br/>
			__________________________________________
		</h4>
		<h2>Nota Transaksi</h2>
	</center>

	<?php 
		include 'koneksi.php';
		$id = $_GET['id'];
		if (isset($_GET['id'])) {
			
			$query = "SELECT tb_login_awal.*, tb_pembelajaran.* FROM tb_pembelajaran 
			INNER JOIN tb_login_awal ON tb_login_awal.kodelogin = tb_pembelajaran.kodelogin 
			WHERE tb_pembelajaran.id = '$id'";
			$row = mysqli_fetch_assoc(mysqli_query($koneksi, $query));
		}
	?>

	<table class="table-detail" align="left">
		<tr>
			<td width="200px">Kode Login</td>
			<td>: <b><?= $row['kodelogin'] ?></b></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>: <b><?= $row['nama_lengkap'] ?></b></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <b><?= $row['email'] ?></b></td>
		</tr>
	</table>
	<table border="1" style="width: 100%">
		<tr>
			<th>Judul Buku</th>
			<th>Jumlah Pinjam Buku </th>
			<th>Tgl Bln Thn Peminjaman</th>
			<th>No Hp</th>
			<th>Alamat</th>
		</tr>


		<?php 
			$sql = mysqli_query($koneksi,"SELECT * FROM tb_pembelajaran WHERE id = '$id'");
			while($row = mysqli_fetch_array($sql)){
			?>
				<tr>
				  <td align="center"><?php echo $row['judul_buku']; ?></td>
		          <td align="center"><?php echo $row['jumlah_pinjam_buku']; ?></td>
		          <td align="center"><?php echo $row['tgl_bln_thn_peminjaman']; ?></td>
		          <td align="center"><?php echo $row['no_hp']; ?></td>
		          <td align="center"><?php echo $row['alamat']; ?></td>
				</tr>
		<?php 
		 }
		?>
	</table>
	<br/>
	<script> 
		window.print(); 
	</script>
</body>
</html>