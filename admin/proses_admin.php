<?php 
include_once("koneksi.php");
	$kategori_adm=$_POST['kategori_adm'];
	$nm_admin=$_POST['nm_admin'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$konfir_password=password_hash($_POST['konfir_password'],PASSWORD_DEFAULT);
	$foto=$_FILES['foto']['name'];
	$query=mysql_query("INSERT INTO admin VALUES (NULL, '$kategori_adm','$nm_admin','$tempat_lahir','$tgl_lahir','$alamat','$email','$konfir_password','$foto')") or die(mysql_error());
	if($query){
		move_uploaded_file($_FILES['foto']['tmp_name'],"../img/img_admin/".$_FILES['foto']['name']);
		echo "<script>alert('data berhasil di tambahkan');window.location='halaman_utama.php?hal=add_admin';</script>";
	}else{
		echo "<script>alert('data gagal di tambahkan');window.location='halaman_utama.php?hal=add_admin';</script>";
	}
	
	

 ?>