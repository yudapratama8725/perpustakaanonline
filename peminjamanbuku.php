<!DOCTYPE html>
<html>
<head>
	<title>Pinjam Buku</title>
	 <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
	<section>
		<header class="header_area">
	        <div class="main-menu">
	            <nav class="navbar navbar-expand-lg navbar-light">
	                <a class="navbar-brand" href="homee.html"><b><img src="./img/buku2.png" alt="" width="60px" height="60px">
                        <font color="#5228ad">PERPUSTAKAAN ONLINE</font></b></a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
	           a-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarNav">
	                    <div class="mr-auto"></div>
	                    <ul class="navbar-nav">
	                        <li class="nav-item">
	                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="about.php">about</a>
	                        </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="peminjamanbuku.php">Pinjam Buku</a>
                            </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="login.php">Login Admin</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="kontak.php">kontak</a>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	        </div>
	    </header>
	</section>
	<main class="site-main">
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">The</h3>
                        <h1 class="title-text text-uppercase">LIBRARY</h1>
                        <h4 class="title-text text-uppercase">Peminjaman Buku Online</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="logout.php">Logout</a></button>
                                <button type="button" class="btn button secondary-button text-uppercase"><a href="login.php">Login Admin</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/pinjam.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    <hr size="30" color="5228ad">
    <br>
    <br>
    <section class="project-area">
           <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Jenis Buku Pelajaran Yang</h1>
                    <h1 class="text-uppercase title-h1">Tersedia</h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/bukujavascript.jpg">
                                    <img src="./img/bukujavascript.jpg" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku JavaScript</h4>
                                <span class="text-secondary">Java Script</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/bukuhtml.jpg">
                                    <img src="./img/bukuhtml.jpg" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku HTML</h4>
                                <span class="text-secondary">HTML</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/bukucss.jpg">
                                    <img src="./img/bukucss.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku CSS</h4>
                                <span class="text-secondary">CSS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/php.jpg">
                                    <img src="./img/php.jpg" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku PHP</h4>
                                <span class="text-secondary">PHP</span>
                            </div>
                             <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukupembelajaran/formbukupembelajaran.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/java.jpg">
                                    <img src="./img/java.jpg" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku JAVA</h4>
                                <span class="text-secondary">JAVA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/c++.jpg">
                                    <img src="./img/c++.jpg" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">BUKU C++</h4>
                                <span class="text-secondary">C++</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
              <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1"></h1>
                    <h1 class="text-uppercase title-h1"></h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/1.png">
                                    <img src="./img/pkn/1.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Geografi</h4>
                                <span class="text-secondary">Geografi Indonesia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/2.png">
                                    <img src="./img/pkn/2.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Atlas</h4>
                                <span class="text-secondary">Atlas Indonesia Dan Dunia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/3.png">
                                    <img src="./img/pkn/3.png" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku UUD 1945</h4>
                                <span class="text-secondary">UUD 1945</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/4.png">
                                    <img src="./img/pkn/4.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku RPUL</h4>
                                <span class="text-secondary">Rangkuman Pengetahuan Umum Lengkap</span>
                            </div>
                             <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukupembelajaran/formbukupembelajaran.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/5.png">
                                    <img src="./img/pkn/5.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Pendidikan Pancasila</h4>
                                <span class="text-secondary">Pendidikan Pancasila</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/pkn/6.png">
                                    <img src="./img/pkn/6.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">BUKU Sejarah</h4>
                                <span class="text-secondary">Sejarah Indonesia Lengkap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1"></h1>
                    <h1 class="text-uppercase title-h1"></h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/1.png">
                                    <img src="./img/matematika/1.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Matematika SMP</h4>
                                <span class="text-secondary">Matematika SMP</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/2.png">
                                    <img src="./img/matematika/2.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Matematika SD</h4>
                                <span class="text-secondary">Buku Matematika SD</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/3.png">
                                    <img src="./img/matematika/3.png" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Matematika SMA</h4>
                                <span class="text-secondary">Matematika SMA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/4.png">
                                    <img src="./img/matematika/4.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Trigonometri</h4>
                                <span class="text-secondary">Trigonometri</span>
                            </div>
                              <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukupembelajaran/formbukupembelajaran.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/5.png">
                                    <img src="./img/matematika/5.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Aljabar & Trigonometri</h4>
                                <span class="text-secondary">Buku Aljabar Dan Trigonometri</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/matematika/6.png">
                                    <img src="./img/matematika/6.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Matematika Terapan</h4>
                                <span class="text-secondary">Buku Panduan Matematika Terapan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Jenis Buku Novel Yang</h1>
                    <h1 class="text-uppercase title-h1">Tersedia</h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/1.png">
                                    <img src="./img/novel/1.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Novel Religi</h4>
                                <span class="text-secondary">Kau Pertemukan Aku dengan Tuhanku</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/2.png">
                                    <img src="./img/novel/2.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Sang Pemimpin</h4>
                                <span class="text-secondary">Buku Novel Sang Pemimpi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/3.png">
                                    <img src="./img/novel/3.png" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Laskar Pelangi</h4>
                                <span class="text-secondary">Buku Novel Laskar Pelangi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/4.png">
                                    <img src="./img/novel/4.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Kita Pernah Salah</h4>
                                <span class="text-secondary">Novel Kita Pernah Salah</span>
                            </div>
                             <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukunovel/formbukunovel.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/5.png">
                                    <img src="./img/novel/5.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Surat Dahlan</h4>
                                <span class="text-secondary">Buku Novel Surat Dahlan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/novel/6.png">
                                    <img src="./img/novel/6.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Sabtu Bersama Bapak</h4>
                                <span class="text-secondary">Buku Sabtu Bersama Bapak</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
             <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Jenis Buku Motivasi Yang</h1>
                    <h1 class="text-uppercase title-h1">Tersedia</h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/1.png">
                                    <img src="./img/motivasi/1.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Mark Manson</h4>
                                <span class="text-secondary">Sebuah Seni Untuk bersikap Bodo Amat</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/2.png">
                                    <img src="./img/motivasi/2.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Hidup Yang Berarti</h4>
                                <span class="text-secondary">Motivasi Hidup Yang Lebih Berarti</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/3.png">
                                    <img src="./img/motivasi/3.png" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Bumi & Langit</h4>
                                <span class="text-secondary">Menapak Bumi Menggapai Langit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/4.png">
                                    <img src="./img/motivasi/4.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Brave</h4>
                                <span class="text-secondary">50 Keberanian Sehari - hari</span>
                            </div>
                            <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukumotivasi/formbukumotivasi.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/5.png">
                                    <img src="./img/motivasi/5.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Tembus Langit</h4>
                                <span class="text-secondary">Motivasi Tembus Langit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/motivasi/matappujiwa.png">
                                    <img src="./img/motivasi/mantappujiwa.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Mantappu Jiwa</h4>
                                <span class="text-secondary">Mantappu Jiwa Jermome Pilin Sijabat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
           <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Jenis Buku Cerita Yang</h1>
                    <h1 class="text-uppercase title-h1">Tersedia</h1>
                    <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/kancil.jpg">
                                    <img src="./img/kancil.jpg" alt="portfolio-7" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Kancil</h4>
                                <span class="text-secondary">Kancil</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/malinkundang.jpg">
                                    <img src="./img/malinkundang.jpg" alt="portfolio-8" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku MalinKundang</h4>
                                <span class="text-secondary">MalalinKundang</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/timunmas.jpg">
                                    <img src="./img/timunmas.jpg" alt="portfolio-9" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Timun Mas</h4>
                                <span class="text-secondary">Timun Mas</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/ceritarakyat.png">
                                    <img src="./img/ceritarakyat.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Cerita Rakyat</h4>
                                <span class="text-secondary">Cerita Rakyat Nusantara</span>
                            </div>
                             <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukucerita/formbukucerita.php">
                                   Pinjam Buku..
                               </a></button>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/dongengceritanusantara.png">
                                    <img src="./img/dongengceritanusantara.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Cerita Dongeng</h4>
                                <span class="text-secondary">Dongeng Cerita Nusantara</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/dongengminumannusantara.png">
                                    <img src="./img/dongengminumannusantara.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">BUKU Cerita Dongeng</h4>
                                <span class="text-secondary">Cerita DOngeng Minuman Nusantara</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr size="30" color="5228ad">
            <br>
           <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Jenis Buku Resep Makanan Yang Masih</h1>
                    <h1 class="text-uppercase title-h1">Tersedia</h1>
                  
                <div class="button-group"></div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep1.png">
                                    <img src="./img/resep1.png" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Resep Masakan Padang</h4>
                                <span class="text-secondary">Masakan Padang</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep2.png">
                                    <img src="./img/resep2.png" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Buku Pintar Resep</h4>
                                <span class="text-secondary">Pintar Resep</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep3.png">
                                    <img src="./img/resep3.png" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Resep Masakan Indo</h4>
                                <span class="text-secondary">Masakan Indonesia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep4.png">
                                    <img src="./img/resep4.png" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Resep Siap Saji</h4>
                                <span class="text-secondary">Makanan Siap Saji</span>
                            </div>
                             <div class="title py-4">
                                 <button type="button" class="btn button secondary-button mr-4 text-uppercase"><a href="bukuresep/formbukuresep.php">
                                   Pinjam Buku..
                               </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep5.png">
                                    <img src="./img/resep5.png" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Resep Kue & Roti</h4>
                                <span class="text-secondary">Kue & Roti</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/resep6.png">
                                    <img src="./img/resep6.png" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">BUKU 350 Resep</h4>
                                <span class="text-secondary">350 Resep Makanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <br>
        <br>
         <section>
            <div class="bg-footer-top">
            </div>
                <footer class="footer-distributed">
                    <div class="footer-left">
                        <img src="./img/logo.png" alt="" width="70px" height="25px">
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
    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>
</body>
</html>