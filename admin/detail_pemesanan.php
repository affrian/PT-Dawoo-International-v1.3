<link rel="stylesheet" href="../assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div style="margin-right: 10px;">
	<p class="text-center text-success" style="font-size:40px;font-weight: bold;">DETAIL PEMESANAN</p>
		<table id="list_pesan" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Jumlah Beli</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					error_reporting(E_ALL^(E_NOTICE|E_WARNING|E_DEPRECATED));
					include_once("koneksi.php");
					$bl_id=$_GET['id'];
					$no=1;
					$query=mysql_query("SELECT * FROM pembelian_detail INNER JOIN barang ON pembelian_detail.brg_id=barang.id_barang WHERE pembelian_detail.bl_id='$bl_id'");
					while($array=mysql_fetch_array($query)){
						extract($array);
						$subtotal=$harga*$jumlah;
						@$total=$subtotal+$total;
				 ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="../img/img_upload/<?php echo $gambar;  ?>" alt="" width="100" heiht="50"></td>
					<td><?php echo $nama; ?></td>
					<td>Rp. <?php echo number_format($harga,1,".",","); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subtotal,1,".",","); ?></td>			
				</tr>
				<?php
					$no++; 
					}
				 ?>
			</tbody>
		</table>
		<h3><p>TOTAL Rp. <?php echo number_format($total,1,".",","); ?></p></h3>
		<!-- divisi update -->
		<form action="proses_status.php" method="POST" enctype="multipart/form-data">
			<div class="row">
					<input type="text" name="bl_id" value="<?php echo $bl_id; ?>" hidden>
					<div class="col col-md-4">
						<div class="form-group">
							<select name="status" id="" class="form-control">
								<option value=""> ===Pilih Status===</option>
								<option value="Pembayaran Diterima"> Pembayaran Diterima</option>
								<option value="Barang Sedang dikirim">Barang Sedang dikirim</option>
								<option value="Barang Diterima">Barang Diterima</option>
								<option value="Barang Diterima">Transaksi Dibata</option>
							</select>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="form-group">
							<input type="submit" name="submit" value="UPDATE" class="btn btn-success">
						</div>
					</div>
			</div>
		</form>
		<!-- end divisi update -->
</div>
<script src="../assets/vendor/jquery/jq.js"></script>
<script src="../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		$("#list_pesan").DataTable();
	})
</script>