<link rel="stylesheet" href="../assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div style="margin-right: 10px;">
	<p class="text-center text-success" style="font-size:40px;font-weight: bold;">DATA COSTUMER</p>
	<table id="list_usr" class="display" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include_once("koneksi.php");
				$no=1;
				$query=mysql_query("SELECT * FROM user");
				while($array=mysql_fetch_array($query)){
					extract($array);
			 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $usr_nm_lengkap; ?></td>
				<td><?php echo $usr_tempat_lahir; ?></td>
				<td><?php echo $usr_tgl_lahir; ?></td>
				<td><?php echo $usr_alamat; ?></td>
				<td><?php echo $usr_email; ?></td>
				<td>
					<a href="proses_hapus_user.php?id=<?php echo $usr_id; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini??');"><button class="btn btn-danger btn-block">HAPUS</button></a>
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
		$("#list_usr").DataTable();
	})
</script>