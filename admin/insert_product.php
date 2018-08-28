<?php 
	include_once('koneksi.php');
	date_default_timezone_set("asia/jakarta");

	$id_kategori=$_POST['kategori'];
	$nama=$_POST['nm_barang'];
	$panjang=$_POST['panjang'];
	$harga=$_POST['harga'];
	$berat=$_POST['berat'];
	$isi=$_POST['isi'];
	$warna=$_POST['warna'];
	$ket=$_POST['ket'];
	// $stok=$_POST['stok'];
	$waktu=date("Y-m-d G:m:s");
	$status_barang=$_POST['status'];
	$gambar=$_FILES['gambar']['name'];
	$gambar_tmp=$_FILES['gambar']['tmp_name'];
	$query=mysql_query("INSERT INTO barang VALUES (NULL,'$id_kategori','$nama','$panjang','$harga','$berat','$isi','$warna','$ket','$waktu','$status_barang','$gambar')")or die(mysql_error());
	if($query){
		 move_uploaded_file($_FILES['gambar']['tmp_name'],"../img/img_upload/".$_FILES['gambar']['name']);
		echo"
				<script>alert('data berhasil di simpan');window.location='halaman_utama.php?hal=add_product';</script>

			";
	}else{
		echo"
				<script>alert('data gagal di simpan');</script>
			";
	}

 ?>


 <!--  -->