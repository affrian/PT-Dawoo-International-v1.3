<?php 
session_start();
include_once("admin/koneksi.php");

	if(!isset($_SESSION['usr_email'])){
		echo"<script>alert('anda belum login');window.location='index.php';</script>";
	}else{	
		$id_barang=$_POST['id_barang'];
		$session_id_usr=$_SESSION['usr_id'];
		$jumlah_beli=$_POST['jumlah'];
		$id_session=session_id();
		// cek keranjang apakah data yang di beli sudah ada di tabel atau belum
		$query=mysql_query("SELECT keranjang_brg_id FROM keranjang WHERE keranjang_brg_id='$id_barang' AND keranjang_session_id='$id_session'")or die(mysql_error());

			$ketemu=mysql_num_rows($query);
			if($ketemu==0){
					mysql_query("INSERT INTO keranjang VALUES(NULL,'$session_id_usr','$id_barang','$jumlah_beli','$id_session')")or die(mysql_error());

			}else{

				mysql_query("UPDATE keranjang SET keranjang_jumbel=keranjang_jumbel+'$jumlah_beli' WHERE keranjang_brg_id='$id_barang' AND keranjang_session_id='$id_session' AND usr_id='$session_id_usr'")or die(mysql_error());

			}
		header("location:halaman_utama.php?all_product");
	}


 ?>