<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style type="text/css">
  *{
      font-family: "arial";
  }
  h1{
    text-transform: uppercase;
    color: #3498db;
  }
  content-table{
    border-collapse: collapse;
    margin : 10px 0 ;
    font-size: 0.9em;
    min-width: 100px;
  }
  .content-table thead tr{
    background-color: black;
    color: #fff;
    text-align: center;
    font-weight: bold; 
  }
  .content-table th,
  .content-table td {
    padding: 10px 2px;
  }
  .tbody tr, td{
    text-align: left;
    border: 1px solid #ebebeb;
  }
  button{
    text-decoration : none;
    border: 1px solid white;
    background: #3498db;
    padding: 5px 11px;
    font-size: 15px;
    cursor: pointer;
    margin: 1px;
    position: relative;
    overflow: hidden;
  }
  button{
    color: #fff;
  }
  button:hover{
    color: white;
  }
  button::before{
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: #fff;
    z-index: -1;
    transition: 0.8s;
  }
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="viewawal.php">Halaman Admin</a>

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
      <li class="nav-item ">
        <a class="nav-link" href="viewawal.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Halaman Utama</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="view.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Buku Pembelajaran</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewbukuresep.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Buku Resep</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="viewbukunovel.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Buku Novel</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="viewbukucerita.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Buku Cerita</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="viewbukumotivasi.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Buku Motivasi</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="viewkontak.php">
          <i class="fas fa-fw fa-table"></i>
          <span>View Data Kontak</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewuser.php">
          <i class="fas fa-fw fa-table"></i>
          <span>View Data User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><h4>Data Peminjam Buku Cerita</h4></li>
        </ol>
       </div>
        <br>
  <section>
  <table align="center" class="content-table" border="1">
    <thead>
      <tr>
        <td>Id</td>
        <td>Judul Buku</td>
        <td>Jumlah Pinjam Buku</td>
        <td>Nama Lengkap</td>
        <td>Tgl Bln Thn Pinjam</td>
        <td>No Hp</td>
        <td>Alamat</td>
        <td>Email</td>
        <td>Action</td>
      </tr>
    </thead>
    <?php
      include "koneksi.php";
      $data= mysqli_query($koneksi, "SELECT * FROM tb_cerita");
      while ($hasil=mysqli_fetch_array($data)) {
        echo"
        <tbody>
          <tr>
            <td>$hasil[0]</td>
            <td>$hasil[1]</td>
            <td>$hasil[2]</td>
            <td>$hasil[3]</td>
            <td>$hasil[4]</td>
            <td>$hasil[5]</td>
            <td>$hasil[6]</td>
            <td>$hasil[7]</td>
            <td>
              <a href='cerita/hapusdatacerita.php?id=$hasil[0]'><button>Hapus</button></a>||<a href='cerita/formupdatecerita.php?id=$hasil[0]'><button>Ubah</button></a>
            </td>
          </tr>
        </tbody>
        ";
      }
    ?>
    </table>
  </section>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Perpustakaan Online 2021</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
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
