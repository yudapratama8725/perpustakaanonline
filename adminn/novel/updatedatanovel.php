<?php
include'../koneksi.php';
$id = $_POST['id'];
$judulbuku = $_POST['judulbuku'];
$jumlahpinjambuku = $_POST['jumlah'];
$namalengkap = $_POST['nama'];
$tglblnthnpeminjaman = $_POST['tgl'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];


$ubah=mysqli_query($koneksi, "UPDATE tb_novel SET judul_buku = '$judulbuku', jumlah_pinjam_buku='$jumlahpinjambuku', nama_lengkap='$namalengkap', tgl_bln_thn_peminjaman='$tglblnthnpeminjaman', no_hp='$nohp', alamat='$alamat' , email = '$email' WHERE id = '$id'");

if($ubah){
	echo"
	<script>
		alert('Data Berhasil Di Ubah');
		location.href = '../viewbukunovel.php';
	</script>
	";
}
else if($ubah)
{
	echo "
	<script>
		alert('Data Gagal Di Ubah');
		location.href = 'formupdatenovel.php';
	</script>
	";
}
?>