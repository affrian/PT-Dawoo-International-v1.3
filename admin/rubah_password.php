<?php 
	session_start();
	$id_admin=$_SESSION['id_admin'];
 ?>
<div id="daftar_user" class="col-md-offset-2">
<h1 class="text-center text-primary">Rubah Password Admin</h1><br/>	
		<div class="form-horizontal">
			<form action="proses_update_pass_admin.php" method="POST" enctype="multipart/form-data" id="form">
				<input type="text" name="id_admin" value="<?php echo $id_admin; ?>" hidden>
			    <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Password</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="password" name="pass" class="bersih form-control" required="required" >
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-3 col-md-3 col-xs-3 col-lg-3 control-label"><p class="text-left">Konfirmasi Password</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="password" name="konfir_pass" class="bersih form-control" required="required">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="margin-left: 290px;">
							<input type="submit" name="simpan" class="btn btn-block btn-primary" value="UPDATE" id="simpan">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- javascript -->
 <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>-->  <!-- link jquery -->  