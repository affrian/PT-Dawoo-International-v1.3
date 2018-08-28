<div id="add_product" >
<h1 class="text-center text-primary">LAPORAN PENJUALAN</h1><br/>	
	<div style="margin-left: 24%;">
		<form action="proses_lpj.php" class="form-inline" method="post" enctype="multipart/form-data" id="form" target="_blank">
			  <div class="form-group">
			    <input type="text" name="tg_awal" class="kosong laporan form-control" id="" placeholder="Tanggal Awal">
			  </div>
			  <div class="form-group">
			    <input type="text" name="tg_akhir" class="kosong laporan form-control" id="" placeholder="Tanggal Akhir">
			  </div>
		  	<button type="submit" class="btn btn-primary">Cetak</button>
		</form>
	</div>
</div>
<script src="../assets/vendor/jquery/jquery.min.js"></script>  <!-- link jquery -->
<script>
	$(document).ready(function(){
		$(".laporan").datepicker();
	});


</script>