<?php 
session_start();
include_once('admin/koneksi.php');
$id=$_GET['id'];
$query=mysql_query("DELETE FROM keranjang where keranjang_brg_id='$id'")or die(mysql_error());
if($query){
	echo "<script>alert('data sudah dihapus');window.location='halaman_utama.php?hal=keranjang';</script>";
}else{
	echo "<script>alert('data gagal di hapus!!');</script>";
}

 ?>