<?php 
session_start();
 ?>
<link rel="stylesheet" href="assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div class="jarak">
		<section>
			<ul class="nav nav-tabs">
			  <li  class="active"><a href="?hal=user_akun&subject=riwayat">Riwayat Pembelian</a></li>
			  <li role="presentation"><a href="?hal=user_akun&subject=informasi">Informasi Saya</a></li>
			   <li role="presentation"><a href="?hal=user_akun&subject=rubah_pass">Rubah Password</a></li>
			</ul>
		</section>
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
					include_once("admin/koneksi.php");
					$usr_id=$_SESSION['usr_id'];
					$bl_id=mysql_real_escape_string(htmlentities($_GET['id']));
					$no=1;
					$query=mysql_query("SELECT * FROM user,pembelian_detail INNER JOIN barang ON pembelian_detail.brg_id=barang.id_barang WHERE pembelian_detail.bl_id='$bl_id' AND user.usr_id='$usr_id' ");
					while($array=mysql_fetch_array($query)){
						extract($array);
						$subtotal=$harga*$jumlah;
						@$total2=$subtotal+$total2;
				 ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="img/img_upload/<?php echo $gambar;  ?>" alt="" width="100" heiht="50"></td>
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
		<h3><p>TOTAL Rp. <?php echo number_format($total2,1,".",","); ?></p></h3>
</div>
</div>
<script src="assets/vendor/jquery/jq.js"></script>
<script src="assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		$("#list_pesan").DataTable();
	})
</script>