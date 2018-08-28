<div class="jarak">
	<div class="row">
			<?php
				include_once("koneksi.php");
				$query=mysql_query("SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori=kategori.id_kategori WHERE kategori.id_kategori=1 ORDER BY barang.id_barang DESC");  
				while($array=mysql_fetch_array($query)){
					extract($array);


			?>
		 	<div class="col-lg-2 col-md-3 col-xl-3 col-sm-6 mb-3">
		 		<div class="panel panel-success">
		 			<div class="panel-heading">
		 				<div class="panel-title"><h3><p class="text-center"><?php echo $nama ?></p></h3></div>
		 			</div>
		 			<div class="panel-body text-center"><img src="../img/img_upload/<?php echo $gambar ?>" alt="" class="img-responsive img-thumbnail" style="height: 250px; width: 250px"></div>
		 			<div class="panel-footer">
		 				<button type="button" class="tampil btn btn-primary btn-block" data-toggle="modal" id="<?php echo $id_barang; ?>" data-target="#modalupdate">UPDATE</button>
		 			<button type="button" name="delete" class="delete btn btn-danger btn-block" id="<?php echo $id_barang; ?>">DELETE</button>
		 			</div>
		 		</div>
			</div>

			<?php 
				}
			 ?>
	</div>

	<!-- modal delete -->
		<div class="form-horizontal">
			<div class="modal fade" role="dialog" id="modalupdate">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<!-- start modal header -->
						<div class="modal-header">
							<h1 style="margin-left: 100px;" class="modal-title text-center text-primary">FORM UPDATE DATA</h1> <br>
							<button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close" style="margin-right: 0px;"><span aria-hidden="true">&times;</span></button>
							
						</div>
						<!-- end modal header -->
						<!-- start modal body -->
						<div class="modal-body" id="data_barang">		
						</div>
						<!-- end modal body -->
						<!-- start modal footer -->
						<div class="modal-footer">
							 <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><span class="fa fa-fw fa-close"></span>CLOSE</button> 
						</div>
						<!-- end modal footer -->
					</div>
				</div>
			</div>
		</div>
	<!-- end modal delete -->
</div>
	




<!-- function dari javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>  <!-- link jquery -->
	<!-- <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> -->
	<!-- jquery pengambilan value dan di tampilkan ke modal bootstrap -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.tampil').click(function(){
				var id=$(this).attr("id");
				$.ajax({
					url: 'detail_update.php',
					method: 'post',
					data: {id:id},
					success: function (data){
						// alert(data);
						$('#data_barang').html(data);
						$('#modalupdate').modal("show");
					}
				});

			});

			$('.delete').click(function(){
				var id=$(this).attr("id");
				c=confirm("anda yakin menghapus data ini??");
					if(c==true){
						$.ajax({
						url: 'hapus_product.php',
						method: 'post',
						data: {id:id},
						success: function (data){
							alert("data telah di hapus");
							$(".jarak").load("all_product.php");
							}
						});
					}
			});
		});

	</script>

