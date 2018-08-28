<link rel="stylesheet" href="../assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div style="margin-right: 10px;">
	<p class="text-center text-success" style="font-size:40px;font-weight: bold;">DATA PEMBAYARAN</p>
	<table id="list_pembayaran" class="display" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>No Transaksi</th>
				<th>Nama Pembayar</th>
				<th>Total Transaksi</th>
				<th>Jumlah Bayar</th>
				<th>Catatan</th>
				<th>Status</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include_once("koneksi.php");
				$no=1;
				$query=mysql_query("SELECT * FROM pembayaran INNER JOIN pembelian ON pembelian.bl_id=pembayaran.bl_id ORDER BY pembayaran.byr_id DESC");
				while($array=mysql_fetch_array($query)){
					extract($array);
			 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $bl_id; ?></td>
				<td><?php echo $byr_nama; ?></td>
				<td>Rp. <?php echo number_format($bl_total,1,".",","); ?></td>
				<td>Rp. <?php echo number_format($byr_jumlah,1,".",","); ?></td>
				<td><?php echo $byr_catatan; ?></td>
				<td><b><p class="text-danger"><?php echo $byr_status; ?></p></b></td>
				<td> <img src="../img/img_pembayaran/<?php echo $byr_gambar; ?>" width="150px" height="100px"> </td>
				<td>
					<a href="proses_update_status_bayar.php?id=<?php echo $bl_id; ?>&status=LUNAS"><button class="btn btn-success">LUNAS</button></a><br>
				</td>
				
			</tr>
			<?php
				$no++; 
				}
			 ?>

		</tbody>
	</table>
</div>
<script src="../assets/vendor/jquery/jq.js"></script>
<script src="../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		$("#list_pembayaran").DataTable();
	})
</script>