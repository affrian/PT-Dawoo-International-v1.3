<div id="add_product">
<h1 class="text-center text-primary">TAMBAH KATEGORI</h1><br/>	
		<div class="form-horizontal">
			<form action="" method="post" enctype="multipart/form-data" id="form">
			<div class="form-group">
				<div class="row">
					<label for="" class="col-sm-2 col-md-2 col-xs-2 col-lg-2 control-label">Nama Kategori</label>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
						<input type="text" name="nm_kategori" class="form-control" required="required" id="kosong">
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
<script>
	$(document).ready(function(){
		$("#form").on("submit",(function(e){
			e.preventDefault(); 
			var data= new FormData(this);
			$.ajax({
				url: 'proses_kategori.php',
				type: 'post',
				data: data,
				contentType: false, 
				cache: false, 
				processData:false,
				success: function(){
					alert("kategori berhasil di tambahkan");
					$("#kosong").val("");

				} 
			});
		})); 

	});


</script>