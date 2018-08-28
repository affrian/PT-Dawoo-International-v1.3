<?php 
session_start();
 ?>
<link rel="stylesheet" href="assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div style="margin-right: 10px;">
	<p class="text-center text-success" style="font-size:40px;font-weight: bold;">DATA PEMBELIAN</p>
	<!-- <form action="proses_status.php" method="post" enctype="multipart/form-data"> -->
		<table id="list_riwayat" class="display" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>No Transaksi</th>
					<th>Nama Pemesan</th>
					<th>Tanggal Pembelian</th>
					<th>Total Pembelian</th>
					<th>Alamat</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once("admin/koneksi.php");
					$usr_id=$_SESSION['usr_id'];
					$no=1;
					$query=mysql_query("SELECT * FROM pembelian INNER JOIN user ON pembelian.usr_id=user.usr_id WHERE user.usr_id='$usr_id' ORDER BY pembelian.bl_id DESC");
					while($array=mysql_fetch_array($query)){
						extract($array);
				 ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $bl_id; ?></td>
					<td><?php echo $usr_nm_lengkap; ?></td>
					<td><?php echo $bl_tanggal; ?> </td>
					<td>Rp. <?php echo number_format($bl_total,1,".",","); ?></td>
					<td><?php echo $usr_alamat; ?></td>
					<td><?php echo $status; ?></td>
					<td>
						<!-- <br> -->
						<!-- <input type="submit" class="btn btn-primary btn-block" value="KONFIRMASI"/> -->
						<a href="?hal=detail_pemesanan&id=<?php echo $bl_id; ?>"><button class="btn btn-primary btn-block"><span class="glyphicon glyphicon-eye-open"></span> DETAIL</button></a>
					</td>
					
				</tr>
				<?php
					$no++; 
					}
				 ?>

			</tbody>
		</table>
	<!-- </form> -->
</div>
<script src="assets/vendor/jquery/jq.js"></script>
<script src="assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		$("#list_riwayat").DataTable();
	})
</script>