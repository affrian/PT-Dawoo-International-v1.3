<?php 
  session_start();
  if(!isset($_SESSION['usr_email'])){
  	header('location:index.php');
  }
  // query cek keranjang
  error_reporting(E_ALL^(E_NOTICE));
  $usr_id=$_SESSION['usr_id'];
  include_once("admin/koneksi.php");
  $query_keranjang=mysql_query("SELECT * FROM keranjang INNER JOIN barang ON keranjang.keranjang_brg_id=barang.id_barang WHERE usr_id='$usr_id'");
    $hitung=mysql_num_rows($query_keranjang);
    error_reporting(E_ALL^(E_NOTICE));
        if($hitung>0){
            while ($array=mysql_fetch_array($query_keranjang)) {
               extract($array);
                $subtotal=$keranjang_jumbel*$harga;
                @$total=$subtotal+$total;
            }
         $barang="Total Rp.".number_format($total,1,".",",");
          // $barang="Barang Ada ".$hitung;
        }else{
          $barang="Total Rp.".number_format($total,1,".",",");
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="img/img_default/browser.ico" />
	<title>PT.Dawoo International</title>
	<link rel="stylesheet" href="assets/vendor/bootstrap-3/css/bootstrap.css" />	<!-- css bootstrap -->
	<link rel="stylesheet" href="assets/css/animate.css">	<!-- Animate -->
	<link rel="stylesheet" href="assets/css/icomoon.css">	<!-- Icomoon -->
 	<link rel="stylesheet" href="assets/css/style_new.css">    <!-- css buatan--> 
 	<link rel="stylesheet" href="assets/css/style.css">    <!-- css buatan--> 
  <link rel="stylesheet" href="assets/vendor/datatables/media/css/jquery.dataTables.min.css" /><!-- css datatable -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css" /><!-- css font awesome -->
 	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
  
</head>
<body>
	<!-- header -->
	<div id="header">
		<!-- divisi navigasi -->
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand" href="?hal=all_product"  style="color: white;"><img src="img/img_default/logo_polyframe.png" alt="" width="200px" height="48px" /></a>   
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a  style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">Product <span class="caret"></span></a>
                <ul  style="color: white;" class="dropdown-menu" role="menu">
                  <li><a href="?hal=all_product">All Product</a></li>
                  <li><a href="?hal=small">Small Product</a></li>
                  <li><a href="?hal=medium">Medium Product</a></li>
                  <li><a href="?hal=large">Large Pproduct</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="?hal=cari" enctype="multipart/form-data" method="POST" >
              <div class="form-group">
                <input type="text" name="cari" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
               <li><p class="navbar-text"><a href="?hal=contact" style="color: white;">Contact</a></p></li>
              <li><p class="navbar-text"><a href="?hal=keranjang"  style="color: white;" title="Daftar Keranjang Belanja"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $barang; ?> </a></p><p class="navbar-text"  style="color: white;"></p></li>
              <li><p class="navbar-text"><a href="?hal=user_akun"  style="color: white;"><?php echo $_SESSION['usr_nm_lengkap']; ?></a></p> </li>
               <li><p class="navbar-text"><a href="?hal=logout" onclick="return confirm('anda yakin akan keluar??')"  style="color: white;">Log out <span class="glyphicon glyphicon-log-out"></span> </a></p> </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
	</div>
	
	<!-- content -->
	<div id="content">
		<?php include_once('halaman.php'); ?>
	</div>
	
	<!-- footer -->
	<div id="footer">
		<!-- <?php include_once('footer.php'); ?> -->
	</div>



	<!-- javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>	<!-- jquery -->
  
	<script src="assets/vendor/bootstrap-3/js/bootstrap.min.js"></script><!-- javascript bootstrap -->
	<!-- <script src="assets/vendor/jquery-easing/jquery-easing.min.js"></script>--><!-- jquery easing --> 
	<script src="assets/js/jquery.waypoints.min.js"></script><!-- jquery waypoints -->
	<script src="assets/js/main.js"></script><!-- jquery manual -->
  <script src="assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script><!-- jquery datatable  -->
  <script>
    $(document).ready(function(){
        // $('.gallery a').lightBox();
        $("#table2").DataTable({
          searching:false,
          ordering:false,
          paging:false,
          
        });

    });
  </script>
</body>
</html>