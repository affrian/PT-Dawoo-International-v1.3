<?php
session_start();
if(!isset($_SESSION['email'])){
  header('location:index.php');
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
    <title>PT.Dawoo International</title>
     <link rel="shortcut icon" type="image/x-icon" href="../img/img_default/browser.ico" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <!-- css build -->
     <link href="../assets/css/style.css" rel="stylesheet">
     <!-- css datatable -->
    <link rel="stylesheet" href="../assets/vendor/datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/vendor/jquery-ui/jquery-ui.min.css">
  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#"><img src="../img/img_default/logo_polyframe.png" alt="" width="200px" height="48px" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="user">
            <a class="nav-link" href="#">
                <img src="../img/img_admin/<?php echo $_SESSION['foto'] ?>" style="width: 180px;height:150px; border-radius:100% "/> <br>
              <p style="text-align: center"><?php echo $_SESSION['user']; ?></p>
              <!-- <i class="fa fa-fw fa-dashboard"></i> -->
              <!-- <span class="nav-link-text"></span>              -->
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title=" Booking List">
            <a class="nav-link" href="?hal=pesan">
              <i class="fa fa-fw fa-book"></i>
              <span class="nav-link-text">
              Booking List</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                Products</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li><a href="?hal=all_product">All Products</a></li>
              <li><a href="?hal=small">Small Product</a></li>
              <li><a href="?hal=medium">Medium Product</a></li>
              <li><a href="?hal=large">Large Product</a></li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pengaturan Product">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Pengaturan Product</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li><a href="?hal=add_product"><i class="fa fa-fw fa-plus"></i> Add Product</a></li>
              <li><a href="?hal=add_kategori"><i class="fa fa-fw fa-plus"></i>Add Kategori</a></li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Costumer">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion"><i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">Costumer</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li><a href="?hal=data_user">Data Costumer</a></li>
               <li><a href="?hal=data_bayar">Data Pembayaran</a></li>

            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#adminparent">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">
                Admin</span>
            </a>
            <ul class="sidenav-second-level collapse" id="adminparent">
              <li id="add_admin"><a href="?hal=add_admin"><i class=" fa fa-fw fa-plus"></i>add Admin</a></li>
              <li id="data_kry"><a href="?hal=data_kry"><i class=" fa fa-fw fa-user"></i>Data Karyawan</a></li>
              <li><a href="?hal=edit_admin"><i class=" fa fa-fw fa-wrench"></i>Edit Admin</a></li>
              <li><a href="?hal=edit_password"><i class=" fa fa-fw fa-wrench"></i>Edit Password</a></li>
            </ul>
          </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#laporan">
              <i class="fa fa-fw fa-book"></i>
              <span class="nav-link-text">
                Laporan</span>
            </a>
            <ul class="sidenav-second-level collapse" id="laporan">
              <li id="add_admin"><a href="?hal=lpj"><i class=" fa fa-fw fa-book"></i>Laporan Penjualan</a></li>
              <li id="data_kry"><a href="?hal=lpb"><i class=" fa fa-fw fa-book"></i>Laporan Pembayaran</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item" >
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left">ll</i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form action="?hal=search" class="form-inline my-2 my-lg-0 mr-lg-2" method="post" enctype="multipart/form-data">
              <div class="input-group">
                <input name="cari" type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proses_logout.php">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">
      <div class="container-fluid">
            <?php 
              error_reporting(E_ALL^(E_NOTICE));
              include_once('halaman.php');

             ?>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->
   
    <!-- page footer -->
     <?php 
        include_once('footer.php');
      ?>
    <!-- end footer -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  
    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jq.js"></script>
    <script src="../assets/vendor/popper/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="../assets/js/sb-admin.min.js"></script> -->
    <!-- jquery datatable -->
    <script src="../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/jquery-ui/jquery-ui.min.js" ></script>
    <script>
      $(document).ready(function(){
        
          // $("#list_kry").DataTable();
          if(<?php echo $_SESSION['id_status']==2 ?>){
            $("#add_admin").hide();
            $("#data_kry").hide();
          }
      });
    </script>
  </body>
</html>
