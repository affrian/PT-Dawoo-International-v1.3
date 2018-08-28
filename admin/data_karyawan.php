<link rel="stylesheet" href="../assets/vendor/datatables/media/css/jquery.dataTables.min.css">
<div style="margin-right: 10px;">
	<p class="text-center text-success" style="font-size:40px;font-weight: bold;">DATA KARYAWAN</p>
	<table id="list_kry" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Status Karyawan</th>
				<th>Nama Lengkap</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include_once("koneksi.php");
				$no=1;
				$query=mysql_query("SELECT * FROM admin INNER JOIN status_admin ON admin.id_status=status_admin.id_status WHERE admin.id_status=2");
				while($array=mysql_fetch_array($query)){
					extract($array);
			 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $nm_status; ?></td>
				<td><?php echo $nm_lengkap; ?></td>
				<td><?php echo $tempat_lahir; ?></td>
				<td><?php echo $tgl_lahir; ?></td>
				<td><?php echo $alamat; ?></td>
				<td><?php echo $email; ?></td>
				<td><img src="../img/img_admin/<?php echo $foto; ?>" alt="" width="80px" height="50px" ></td>
				<td>
					<button class="btn btn-danger btn-block">HAPUS</button><br>
					<button class="btn btn-primary btn-block">EDIT</button>
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
		$("#list_kry").DataTable();
	})
</script>