<?php 
    session_start();
    if(empty($_SESSION['us']))
    {
        echo "<script>
        alert('Anda Harus Login Terlebih Dahulu Untuk Mengisi Form Peminjaman Buku ');
        location.href='../loginawal.php';
        </script>

        ";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Buku Pembelajaran</title>
	<!--  Bootstrap css file  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="../css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="../vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
	 <section>
        <header class="header_area">
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><b><img src="../img/buku2.png" alt="" width="60px" height="60px">
                        <font color="#5228ad">FORM PEMINJAMAN BUKU</font></b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
               a-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mr-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Form Buku Novel<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                  <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="../peminjamanbuku.php">
                                   Kembali
                               </a></button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </section>
	<section>
            <br>
            <h3 align="center">FORM PEMINJAMAN BUKU <font color="#5228ad">NOVEL</font></h3>
            <br>
            <div class="container-fluid">
            <table border="1" align="center">
                <class form-control>
                <table border="0" table class="table table-hover table table-bordered table table table-striped">
            <form method="post" action="addnovel.php">
                <tr>
                   <td align="center" colspan="12"></td>
                </tr>
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td><select name="judulbuku" class="form-control">
     					<option value=""></option>
        				<option value="Novel Religi">Buku Novel Religi</option>
        				<option value="Sang Pemimpi">Buku Novel Sang Pemimpi</option>
        				<option value="Laskar Pelangi">Buku Novel Laskar Pelangi</option>
        				<option value="Kita Pernah Salah">Buku Novel Kita Pernah Salah</option>
        				<option value="Surat Dahlan">Buku Novel Surat Dahlan</option>
        				<option value="Sabtu bersama Bapak">Buku Novel Sabtu Bersama Bapak</option>
        			</select></td>
                </tr>
                <tr>
                    <td>Jumlah Pinjam Buku</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" placeholder="Input Jumlah Buku Yang Dipinjam" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Input Nama Anda" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Tgl Bln Thn Peminjaman</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" class="form-control"/></td>
                </tr>
                 <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="number" name="nohp" placeholder="Input No Hp Anda" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="Input Alamat" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="Email" name="email" placeholder="Input Email" class="form-control"/></td>
                </tr>
                   <tr>
                   <td align="center" colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="20" align="center">
                        <input type="submit" class="btn btn-outline-secondary" value="Simpan"/>
                        <?php if (isset($_GET['id'])) {?>
                            <a href="notanovel.php?id=<?= $_GET['id'] ?>" target="_blank" class="btn btn-outline-secondary">Cetak Nota Laporan</a>
                        <?php } ?>
                    </td>
                </tr>
                   <tr>
                   <td align="center" colspan="12"></td>
                </tr>
                </form>
            </table>
            </class>
        </table>
        </div>
    </section>
        <br>
         <section>
            <div class="bg-footer-top">
            </div>
                <footer class="footer-distributed">
                    <div class="footer-left">
                        <img src="../img/logo.png" alt="" width="70px" height="25px">
                        <h3>PERPUS<span>TAKAAN</span> Online</h3>
                        <p class="footer-links">
                            <a>Perpustakaan adalah sebuah koleksi buku dan majalah. Walaupun dapat diartikan sebagai koleksi pribadi<br> perseorangan, namun perpustakaan lebih umum dikenal<br> sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi.
                        </p>
                    <p class="footer-company-name">SMK TI Bali Global Denpasar &copy; 2020</p>
                    <div class="icons">
                            <a href="#"><i class="fab fa-facebook" style="font-size: 28px"></li></i></a>
                            <a href="#"><i class="fab fa-twitter" style="font-size: 28px"></i></a>
                            <a href="#"><i class="fab fa-linkedin" style="font-size: 28px"></i></a>
                            <a href="#"><i class="fab fa-github" style="font-size: 28px"></i></a>
                    </div>
                </div>
                <div class="footer-center">
                    <h2>Kontak Perpustakaan</h2>
                    <p style="color: #5228ad;">________________________</p>
                    <br>
                    <br>
                    <a href="#">+62-812-3836-3440</a>
                    <br>
                    <a href="#">+62-821-4442-0385</a>
                    <br>
                    <a href="#">+62-811-3898-004</a>
                    <br>
                    <a href="#">Setiap Hari: 09.00 am - 06.00 pm</a>
                    <br>
                    <a href="#">Jln Gunung Mas-Padang Sambian-Bali-Indonesia</a>
                    <br>
                    <a href="#">Perpustakaan@gmail.com</a>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                   <h2>Tautan Cepat</h2>
                   <p style="color:#5228ad">_________________</p>
                   <br>
                   <a href="#">Home</a>
                   <br>
                   <a href="#">About</a>
                   <br>
                   <a href="#">Pinjam Buku</a>
                   <br>
                   <a href="#">Login</a>
                   <br>
                   <a href="#">Kontak</a>
                </p>
                </div>
            </footer>
	</section>
    </section>
    <div class="footer-bawah">
        <p align="center" style="color: white">
            Copyright &copy; 2020 Perpustakaan / Design by <strong>Yudha Pratama</strong>
        </p>
    </div>
</body>
</html>