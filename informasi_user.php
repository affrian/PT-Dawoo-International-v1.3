<?php 
	session_start();
 ?>
<div id="daftar_user" class="col-md-offset-2">
<h1 class="text-center text-primary">Data Account User</h1><br/>	
	<?php 
		include_once("admin/koneksi.php");
		$usr_id=$_SESSION['usr_id'];
		$query=mysql_query("SELECT * FROM user WHERE usr_id='$usr_id'") or die(mysql_error());
		$array=mysql_fetch_array($query);
		extract($array);
	 ?>
		<div class="form-horizontal">
			<form action="proses_update_informasi.php" method="POST" enctype="multipart/form-data" id="form">
				<input type="text" name="usr_id" value="<?php echo $usr_id; ?>" hidden>

			    <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Nama Lengkap</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="nm_lengkap" class="bersih form-control" required="required" value="<?php echo $usr_nm_lengkap; ?>">
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Tempat Lahir</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="tempat_lahir" class="bersih form-control" required="required" value="<?php echo $usr_tempat_lahir; ?>">
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Tanggal Lahir</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="tgl_lahir" class="bersih form-control" required="required" value="<?php echo $usr_tgl_lahir; ?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Email</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="email" name="email" class="form-control" value=" <?php echo $usr_email; ?> ">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Alamat</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<textarea name="alamat" id="" cols="30" rows="10" class="form-control" required><?php echo $usr_alamat; ?></textarea>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="margin-left: 190px;">
							<input type="submit" name="simpan" class="btn btn-block btn-primary" value="UPDATE" id="simpan">
						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
<!-- javascript -->
 <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>-->  <!-- link jquery -->  