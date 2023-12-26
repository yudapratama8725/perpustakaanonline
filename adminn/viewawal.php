<?php 
    session_start();
    if(empty($_SESSION['us']))
    {
        echo "<script>
        alert(' Maaf Anda Harus Login Admin Terlebih Dahulu');
        location.href='../login.php';
        </script>

        ";
    }
?>

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
      <li class="nav-item active">
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
       <li class="nav-item">
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
          <li class="breadcrumb-item active"><h2>SELAMAT DATANG DI HALAMAN ADMIN</h2></li>
        </ol>

     <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Data Buku Pembelajaran</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="view.php">
                <span class="float-left">Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Buku Resep</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewbukuresep.php">
                <span class="float-left">Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Data Buku Novel</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewbukunovel.php">
                <span class="float-left">Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Buku Cerita</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewbukucerita.php">
                <span class="float-left">Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Data Buku Motivasi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewbukumotivasi.php">
                <span class="float-left">Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Logout</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="logout.php">
                <span class="float-left">Go</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>


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
