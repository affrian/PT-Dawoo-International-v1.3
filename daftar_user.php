<div id="daftar_user" class="col-md-offset-2">
<h1 class="text-center text-primary">Daftar User Baru</h1><br/>	
		<div class="form-horizontal">
			<form action="simpan_user.php" method="POST" enctype="multipart/form-data" id="form">

			    <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Nama Lengkap</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="nm_lengkap" class="bersih form-control" required="required" placeholder="Masukan Nama Lengkap">
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Tempat Lahir</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="tempat_lahir" class="bersih form-control" required="required" placeholder="Masukan Tempat Lahir">
						</div>
					</div>
				</div>
				 <div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Tanggal Lahir</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="text" name="tgl_lahir" class="bersih form-control" required="required" placeholder="1996-01-20">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Email</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="email" name="email" class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Alamat</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Masukan Alamat Lengkap"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Password</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="password" name="password" class="form-control" required="required">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label"><p class="text-left">Konfirmasi Password</p></label>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<input type="password" name="konfir_pass" class="form-control" required="required" >
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" style="margin-left: 190px;">
							<input type="submit" name="simpan" class="btn btn-block btn-primary" value="Simpan" id="simpan">
						</div>
					</div>
				</div>

			</form>
		</div>
	</div>
<!-- javascript -->
 <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>-->  <!-- link jquery -->  