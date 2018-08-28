<?php 
	session_start();
	include_once("koneksi.php");
	$usr_id=mysql_real_escape_string($_GET['id']);
	$query=mysql_query("DELETE FROM user WHERE usr_id='$usr_id'")or die(mysql_error());
	if($query){
		echo"<script>alert('data berhasil di hapus');window.location='halaman_utama.php?hal=data_user';</script>";
	}


 ?>