<?php 
	// session_start();
		include_once("admin/koneksi.php");
		$id=mysql_real_escape_string($_GET['id']);
		$query=mysql_query("SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori=kategori.id_kategori WHERE barang.id_barang='$id'");
		$array=mysql_fetch_array($query);
		extract($array);
	 ?>
	 
		<div class="container" id="container">
			<div id="detail">
				<div id="panel">
					<img src="img/img_upload/<?php echo $gambar; ?>" alt="" width="300px" height="400px" >
				</div>
				<div id="product">
					<h1 class="text-center"><?php echo $nama; ?></h1>
					<hr />
					<h1>Rp. <?php echo number_format($harga,1,".",",")  ?> </h1><br />
					<form action="aksi_keranjang.php" method="POST" enctype="multipart/form-data">
						<input hidden="" type="text" name="id_barang" value=" <?php echo $id_barang ?> " />
						<p>Masukan Jumlah Box yang di beli</p><input type="number" name="jumlah" /> <br />
						<button type="submit" name="beli" class="btn btn-primary btn-md" style="width: 200px">Beli  Barang<span class="glyphicon glyphicon-shopping-cart"></span></button><br>
					</form>
					
				</div>
			</div >
				<section>
					<ul class="nav nav-tabs">
						 <li  class="active"><a href="#">Informasi Barang</a></li>
					</ul>
				</section><br>
			<div style="background-color: #E9DADA" >
				<table width="40%" style="margin-left: 10px">
					<tr>
						<td>Nama Kategori</td>
						<td>:</td>
						<td><?php echo $nm_kategori; ?></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td>:</td>
						<td><?php echo $nama; ?></td>
					</tr>
					<tr>
						<td>Status Barang</td>
						<td>:</td>
						<td style="color: red"><?php echo $status_barang; ?></td>
					</tr>
					<tr>
						<td>Panjang Barang</td>
						<td>:</td>
						<td><?php echo $panjang; ?> Meter</td>
					</tr>
					<tr>
						<td>Berat Barang</td>
						<td>:</td>
						<td><?php echo $berat; ?></td>
					</tr>
					<tr>
						<td>Isi /Box</td>
						<td>:</td>
						<td><?php echo $isi; ?></td>
					</tr>
					<tr>
						<td>Warna</td>
						<td>:</td>
						<td><?php echo $warna; ?></td>
					</tr>
					
					<tr>
						<td>Keterangan</td>
						<td>:</td>
						<td><?php echo $keterangan; ?></td>
					</tr>
				</table>
			</div>