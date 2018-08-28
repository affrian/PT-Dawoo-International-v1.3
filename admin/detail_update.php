<?php 
include_once('koneksi.php');
if($_POST['id']){

	$id=$_POST['id'];
	$query=mysql_query("SELECT * FROM barang INNER JOIN kategori on barang.id_kategori=kategori.id_kategori WHERE barang.id_barang='$id'")or die (mysql_error());
	while($array=mysql_fetch_array($query)){
			extract($array);
		?>
		<form action="proses_update.php" method="post" enctype="multipart/form-data" role="dialog">
		<div class="form-horizontal">
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label hidden="" for="id" class="control-label" >ID Barang</label>
					</div>
					<div class="col col-lg-9">
						<input hidden="" type="text" name="id_barang" class="form-control" value="<?php echo $id_barang?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="kategori" class="control-label">Kategori</label>
					</div>
					<div class="col col-lg-9">
						<select name="kategori" id="kategori" class="form-control">
							<option value="<?php echo $id_kategori; ?>" ><?php echo $nm_kategori; ?></option>
							<?php 
								$querykategori=mysql_query("SELECT * FROM kategori");
								while($arraykategori=mysql_fetch_array($querykategori)){
									extract($arraykategori);

							 ?>
								<option value="<?php echo $id_kategori; ?>" ><?php echo $nm_kategori; ?></option>
							 <?php 
							 	}
							  ?>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="nm_barang" class="control-label">Nama Barang</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="nm_barang" class="form-control" value="<?php echo $nama?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="panjang" class="control-label">Panjang</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="panjang" class="form-control" value="<?php echo $panjang?> Meter">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="harga" class="control-label">Harga</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="harga" class="form-control" value="<?php echo $harga?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="berat" class="control-label">Berat</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="berat" class="form-control" value="<?php echo $berat?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="isi" class="control-label">Isi</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="isi" class="form-control" value="<?php echo $isi; ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="warna" class="control-label">Warna</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="warna" class="form-control" value="<?php echo $warna; ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="status" class="control-label">Status</label>
					</div>
					<div class="col col-lg-9">
						<select name="status" id="status" class="form-control">
							<option value="<?php echo $status_barang; ?>" ><?php echo $status_barang; ?></option>
							<option value="">New</option>
							<option value="">Bukan Barang Baru</option>
						</select>
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="stok" class="control-label">Stok</label>
					</div>
					<div class="col col-lg-9">
						<input type="text" name="stok" class="form-control" value="<?php echo $stok; ?>">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="gambar" class="control-label">Gambar</label>
					</div>
					<div class="col col-lg-9">
						<img src="../img/img_upload/<?php echo $gambar; ?>" alt="" width="80px" height="100px" class="img-thumbnail">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="keterangan" class="control-label">Ganti Gambar</label>
					</div>
					<div class="col col-lg-9">
						<input type="file" name="gambar">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-lg-2 col-lg-offset-1" >
						<label for="keterangan" class="control-label">Keterangan</label>
					</div>
					<div class="col col-lg-9">
						<textarea name="keterangan" id="" cols="30" rows="7" class="form-control"><?php echo $keterangan; ?></textarea>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col col-lg-9">
					<button type="submit" class="btn btn-primary" ><span class="fa fa-fw fa-save"></span>UPDATE DATA</button>
					</div>
				</div>
			</div>
		</div>
		</form>
		<?php
		}
	
}

 ?>
