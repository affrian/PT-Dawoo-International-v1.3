<?php 
	include_once("koneksi.php");
	$id_barang=$_POST['id_barang'];
	$kategori=$_POST['kategori'];
	$nm_barang=$_POST['nm_barang'];
	$panjang=$_POST['panjang'];
	$harga=$_POST['harga'];
	$berat=$_POST['berat'];
	$isi=$_POST['isi'];
	$warna=$_POST['warna'];
	$status=$_POST['status'];
	// $stok=$_POST['stok'];
	$gambar=$_FILES['gambar']['name'];
	$keterangan=$_POST['keterangan'];

	if(empty($gambar)){
		$query=mysql_query("UPDATE barang SET id_kategori='$kategori',nama='$nm_barang',panjang='$panjang',harga='$harga',berat='$berat',isi='$isi',warna='$warna',keterangan='$keterangan',status_barang='$status' WHERE id_barang='$id_barang'");
		if($query){
			echo "
					<script>alert('data sukses di update');window.location='halaman_utama.php?hal=all_product';</script>
				
			";
		}else{
			echo "
					<script>alert('data gagal di update');window.location='halaman_utama.php?hal=all_product';</script>
				
			";
		}
	}else{
		$query1=mysql_query("SELECT gambar FROM barang WHERE id_barang='$id_barang'");
		$array1=mysql_fetch_array($query1);
		unlink("../img/img_upload/".$array1['gambar']);

		$query2=mysql_query("UPDATE barang SET id_kategori='$kategori',nama='$nm_barang',panjang='$panjang',harga='$harga',berat='$berat',isi='$isi',warna='$warna',keterangan='$keterangan',status_barang='$status',gambar='$gambar' WHERE id_barang='$id_barang'");
		if($query2){
			move_uploaded_file($_FILES['gambar']['tmp_name'],"../img/img_upload/".$_FILES['gambar']['name']);
			echo "
					<script>alert('data sukses di update');window.location='halaman_utama.php?hal=all_product';</script>
				
			";
			
		}else{
			echo "
					<script>alert('data gagal di update');window.location='halaman_utama.php?hal=all_product';</script>
				
			";
		}

	}

 ?>