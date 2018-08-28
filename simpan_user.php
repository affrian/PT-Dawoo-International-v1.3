<?php 
include_once("admin/koneksi.php");
if(isset($_POST['simpan'])){
	$nm_lengkap=mysql_real_escape_string($_POST['nm_lengkap']);
	$tempat_lahir=mysql_real_escape_string($_POST['tempat_lahir']);
	$tgl_lahir=mysql_real_escape_string($_POST['tgl_lahir']);
	$email=mysql_real_escape_string($_POST['email']);
	$alamat=mysql_real_escape_string($_POST['alamat']);
	$password=mysql_real_escape_string($_POST['password']);
	$konfir_pass=mysql_real_escape_string($_POST['konfir_pass']);
	$password_ok=password_hash($konfir_pass,PASSWORD_DEFAULT);

	if($password !== $konfir_pass){
		echo "<script>alert('password tidak sama!!');window.location='index.php?hal=daftar';</script>";
	}

	$query=mysql_query("INSERT INTO user VALUES(NULL,'$nm_lengkap', '$tempat_lahir','$tgl_lahir','$alamat','$email','$password_ok')") or die(mysql_error());
	if($query){
		echo "<script>alert('anda telah terdaftar!!');window.location='index.php';</script>";
	}else{
		echo "<script>alert('data gagal tersimpan');</script>";
	}
}
 ?>