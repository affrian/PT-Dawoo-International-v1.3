<?php 
	session_start();
	$usr_id=$_SESSION['usr_id'];
 ?>
<div id="daftar_user" class="col-md-offset-2">
<h1 class="text-center text-primary">Upload Bukti Pembayaran</h1><br/>	
		<div class="form-horizontal">
			<form action="proses_pembayaran.php" method="POST" enctype="multipart/form-data" id="form">
				<input type="text" name="usr_id" value="<?php echo $usr_id; ?>" hidden>
			    <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">No Transaksi</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="bl_id" class="bersih form-control" required="required" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Nama</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="byr_nama" class="bersih form-control" required="required" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Jumlah Pembayaran</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="number" name="byr_jumlah" class="bersih form-control" required="required" >
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Catatan</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<textarea class="form-control" name="byr_catatan" id="" cols="30" rows="10" required></textarea>
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Bukti Transafer</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="file" accept="image/*" name="byr_gambar">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="margin-left: 290px;">
							<input type="submit" name="simpan" class="btn btn-block btn-primary" value="UPLOAD" id="simpan">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- javascript -->
 <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>-->  <!-- link jquery -->  