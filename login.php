<!DOCTYPE html>
<html>
<head>
	<title>Transparan login form</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
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
    <link rel="stylesheet" type="text/css" href="./css/login.css">
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
                            <li class="nav-item">
                                <a class="nav-link" href="peminjamanbuku.php">Pinjam Buku</a>
                            </li>
	                        <li class="nav-item active">
	                            <a class="nav-link" href="login.php">Login Admin</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="kontak.php">Kontak</a>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	        </div>
	    </header>
	</section>
  <section>
    <main class="site-main">
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                      <font color="black">
                        <h3 class="title-text">Untuk</h3>
                        <h1 class="title-text text-uppercase">LOGIN Admin</h1>
                        <h4 class="title-text text-uppercase">Hanya Admin Yang Dapat Login</h4>
                      </font>
                        <div class="site-buttons">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/banner/login4.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>
  </section>
	<section>
  <br>
 <section>
      <br>
      <div class="bawah">
        <h2 align="center"><font color="black">FORM LOGIN ADMIN</h2>
      <br><br><br>
    <div class="loginBox">
      <img src="img/usericon.png" class="user">
      <h5>Form Login</h5>
        <form method="POST" action="adminn/proseslogin.php">
          <p>Username</p>
            <input type="text" name="us" placeholder="Input Username">
          <p>Password</p>
            <input type="Password" name="pas" placeholder="Input Password">
          <input type="submit" name="login" value="Login">
          <input type="reset" name="batal" value="Batal">
          <a href="index.php">Kembali</a>
        </form>
      </div>
    </div>
  </section>
	</section>
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