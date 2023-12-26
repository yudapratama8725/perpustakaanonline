<?php
include "../koneksi.php";
$id              = $_GET['id'];
$data=mysqli_query($koneksi, "SELECT * FROM tb_pembelajaran WHERE id='$id'");
$hasil=mysqli_fetch_array($data);
$judulbuku          = $hasil['1'];
$jumlahpinjambuku   = $hasil['2'];
$namalengkap        = $hasil['3']; 
$tglblnthnpeminjaman = $hasil['4'];
$nohp               = $hasil['5'];
$alamat             = $hasil['6'];
$email              = $hasil['7'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Update Data</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Halaman Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="viewawal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Proses Update Data </span>
        </a>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><h4>Form Update Data Pembelajaran</h4></li>
        </ol>
    </div>
    <section>
            <div class="container-fluid">
            <table border="1" align="center">
                <class form-control>
                <table border="0" table class="table table-hover table table-bordered table table table-striped">
            <form method="post" action="updatedatapembelajaran.php">
                <tr>
                   <td align="center" colspan="12"></td>
                </tr>
                <tr>
                     <td>Id</td>
                    <td>:</td>
                    <td><input type="number" name="id" class="form-control" value="<?php echo"$id";?>" readonly/></td>
                </tr>
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td><select name="judulbuku" class="form-control" value="<?php echo"$judulbuku";?>">
                        <option value=""></option>
                        <option value="Java Script">Buku Java Script</option>
                        <option value="HTML">Buku HTML</option>
                        <option value="CSS">Buku CSS</option>
                        <option value="PHP">Buku PHP</option>
                        <option value="Java">Buku JAVA</option>
                        <option value="C++">Buku C++</option>
                        <option value="Geografi Indonesia">Buku Geografi</option>
                        <option value="Atlas">Buku Atlas</option>
                        <option value="UUD 1945">Buku UUD 1945</option>
                        <option value="RPUL">Buku RPUL</option>
                        <option value="Pendidikan Pancasila">Buku Pendidikan Pancasila</option>
                        <option value="Sejarah Indonesia">Buku Sejarah Indonesia</option>
                        <option value="Matematika SMP">Buku Matematika SMP</option>
                        <option value="Matematika SD">Buku Matematika SD</option>
                        <option value="Matematika SMA">Buku Matematika SMA</option>
                        <option value="Trigonometri">Buku Trigonometri</option>
                        <option value="Aljabar & Trigonometri">Buku Aljabar & Trigonometri</option>
                        <option value="Matematika Terapan">Buku Matematika Terapan</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Jumlah Pinjam Buku</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" class="form-control" value="<?php echo"$jumlahpinjambuku";?>"/></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" class="form-control" value="<?php echo"$namalengkap";?>"/></td>
                </tr>
                <tr>
                    <td>Tgl Bln Thn Peminjaman</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" class="form-control" value="<?php echo"$tglblnthnpeminjaman";?>"/></td>
                </tr>
                 <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="number" name="nohp" class="form-control" value="<?php echo"$nohp";?>"/></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" class="form-control" value="<?php echo"$alamat";?>"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="Email" name="email" class="form-control" value="<?php echo"$email";?>" readonly/></td>
                </tr>
                   <tr>
                   <td align="center" colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="20" align="center">
                        <input type="submit" class="btn btn-outline-secondary" value="Simpan"/>
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
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
