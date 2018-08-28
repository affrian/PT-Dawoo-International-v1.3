<?php 
	session_start();
	include_once("koneksi.php");
	$id_admin=$_POST['id_admin'];
	$pass=$_POST['pass'];
	$konfir_pass=$_POST['konfir_pass'];
	

	if($pass !== $konfir_pass){
		echo"<script>alert('Password tidak sama!!'); window.location='halaman_utama.php?hal=edit_password';</script>";
	}else{
		$pass_ok=password_hash($konfir_pass,PASSWORD_DEFAULT);
		$query=mysql_query("UPDATE admin SET password='$pass_ok' WHERE id_admin='$id_admin'") or die(mysql_error());
		if($query){
			echo"<script>alert('Password telah di update!!'); window.location='halaman_utama.php?hal=edit_password';</script>";
		}

	}



 ?>