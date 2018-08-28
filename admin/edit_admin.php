<?php 
session_start();
include_once("koneksi.php");
$email_admin=$_SESSION['email'];
$query_admin=mysql_query("SELECT * FROM admin INNER JOIN status_admin ON admin.id_status=status_admin.id_status WHERE email='$email_admin'");
$array_admin=mysql_fetch_array($query_admin);
extract($array_admin);
 ?>
<div id="add_product">
<h1 class="text-center text-primary">EDIT DATA DIRI</h1><br/>	
		<div class="form-horizontal">
			<form action="proses_update_admin.php" method="post" enctype="multipart/form-data" id="form">
				<input type="text" name="id_admin" value="<?php echo $_SESSION['id_admin']; ?>" hidden>
		     <div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Kategori Admin</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<select name="kategori_adm" id="" class="form-control" required="required">
							<option value=" <?php echo $id_status; ?> "><?php echo $nm_status; ?></option>
							<?php 
								include_once('koneksi.php');
								$query=mysql_query("select * from status_admin");
								while($array=mysql_fetch_array($query)){
									extract($array);
							 ?>
							<option value="<?php echo $id_status ?>"><?php echo $nm_status ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>

		    <div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Nama Admin</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="nm_admin" class="bersih form-control" required="required" value=" <?php echo $nm_lengkap; ?> ">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Tempat Lahir</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="tempat_lahir" class="bersih form-control" required="required" value=" <?php echo $tempat_lahir; ?> " >
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Tanggal Lahir</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="tgl_lahir" class="bersih form-control" required="required" value=" <?php echo $tgl_lahir; ?> " >
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Alamat</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<textarea type="text" cols="30" rows="5" name="alamat" class="bersih form-control" required="required">
						<?php echo $alamat ?>
						</textarea> 
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Email</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="email" name="email" class="bersih form-control" required="required" value="<?php echo $email; ?>">
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Foto</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="file" name="foto" class="bersih"><div id="view_gambar" required="required"></div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 col-lg-offset-5" style="margin-left: 155px;">
						<input type="submit" name="simpan" class="btn btn-block btn-primary" value="Simpan" id="simpan">
					</div>
				</div>
			</div>

			</form>
		</div>
	</div>
