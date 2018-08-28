<div id="add_product">
<h1 class="text-center text-primary">INPUT BARANG</h1><br/>	
		<div class="form-horizontal">
			<form action="insert_product.php" method="POST" enctype="multipart/form-data" id="form">
		     <div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Kategori Barang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<select name="kategori" id="" class="form-control" required="required">
							<option value="">-->Pilih Kategori<---</option>

							<?php 
								include_once('koneksi.php');
								$query=mysql_query("select * from kategori");
								while($array=mysql_fetch_array($query)){
									extract($array);

							 ?>
							<option value="<?php echo $id_kategori ?>"><?php echo $nm_kategori ?></option>

							<?php } ?>
						</select>
					</div>
				</div>
			</div>

		    <div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Nama barang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="nm_barang" class="bersih form-control" required="required" >
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Panjang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<select name="panjang" id="panjang" class="form-control" required="required">
							<option value="">--->Pilih Panjang<---</option>
							<option value="3">3 Meter</option>
							<option value="4">4 Meter</option>
							<option value="3&4"> 3 dan 4 Meter</option>

						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Harga</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="number" name="harga" class="bersih form-control" required="required">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Berat/pcs</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="berat" class="bersih form-control" required="required">
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Isi/box</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="isi" class="bersih form-control" required="required" >
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Kode Warna</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="warna" class="bersih form-control" required="required">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Status Barang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<select name="status" id="" class="form-control">
							<option value="">--->Pilih Status<---</option>
							<option value="New">New</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Deskripsi Barang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<textarea name="ket" id="" cols="30" rows="5" class="bersih form-control"></textarea>
					</div>
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Stok Barang</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input name="stok" id="" class="bersih form-control">
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Gambar</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="file" name="gambar" class="bersih" required>
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
 <script src="../assets/vendor/jquery/jquery.min.js"></script>  <!-- link jquery --> 
<!-- <script>
	$(document).ready(function(){
		$("#form").on("submit",(function(e){
			e.preventDefault(); 
			var data= new FormData(this);
			$.ajax({
				url: 'insert_product.php',
				type: 'post',
				data: data,
				contentType: false, 
				cache: false, 
				processData:false,
				success: function(){
					$(".bersih").val("");
					alert("berhasil");
				} 
			});
		})); 

	});


</script> -->