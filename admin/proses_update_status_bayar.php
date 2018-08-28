<?php 
	session_start();
	include_once("koneksi.php");

	$id=$_GET['id'];
	$status=$_GET['status'];
	$query=mysql_query("UPDATE pembayaran SET byr_status='$status' WHERE bl_id='$id'")or die(mysql_error());
	if($query){
		echo"<script>alert('data berhasil di update');window.location='halaman_utama.php?hal=data_bayar';</script>";
	}
 ?>