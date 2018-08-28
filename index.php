<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <link rel="shortcut icon" type="image/x-icon" href="img/img_default/browser.ico" />
  <title>PT.Dawoo Internationl</title>
  <link rel="stylesheet" href="assets/vendor/bootstrap-3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login_user.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animate.css">  <!-- Animate -->
  <link rel="stylesheet" href="assets/css/icomoon.css"> <!-- Icomoon -->
  <link rel="stylesheet" href="assets/css/style_new.css">    <!-- css buatan--> 
  <style type="text/css">
    .item{
      height: 600px;
      width: 100%;
    }

  </style>
  <!-- Modernizr JS -->
  <script src="assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!-- header -->
    <div>
      <?php include_once("header.php");?>
    </div>
    
    <!--divisi  corousel -->
    <div id="slide">
      <?php include_once("corousel.php");?>
    </div>
    <br>

    <!-- divisi content -->
    <div id="content">
      <hr class="garis" id="garis">
      <?php include_once("halaman.php"); ?>
       <hr class="garis">
     </div>
     

    <!-- div marquee -->
    <div id="marquee">
      <?php include_once("marquee.php"); ?>
    </div>

    <!-- divisi footer -->
    <div>
        <!-- <?php include_once("footer.php"); ?> -->
    </div>



    <!-- javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap-3/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script><!-- jquery waypoints -->
    <script src="assets/js/main.js"></script><!-- jquery manual -->
    <script>
    $(document).ready(function(){
      var gethal="<?php echo $hal; ?>";
      if(gethal=="daftar"){
        $("#slide").hide();
        $("#garis").hide();
      }else if(gethal=="detail_product"){
        $("#slide").hide();
        $("#garis").hide();
      }else if(gethal=="contact"){
        $("#slide").hide();
        $("#garis").hide();
      }
    }); //end tag jquery
    </script>


</body>
</html>