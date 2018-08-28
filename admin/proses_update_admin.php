<?php 
session_start();
include_once("koneksi.php");
	$id_admin=$_POST['id_admin'];
	$kategori_adm=$_POST['kategori_adm'];
	$nm_admin=$_POST['nm_admin'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$foto=$_FILES['foto']['name'];

	if(empty($foto)){
		$query=mysql_query("UPDATE admin SET id_status='$kategori_adm',nm_lengkap='$nm_admin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',email='$email' WHERE id_admin='$id_admin'")or die(mysql_error());
		if($query){
			echo"<script>alert('data berhasil di update!!');window.location='halaman_utama.php?hal=edit_admin';</script>";
		}	

	}else{
		$query_unlink=mysql_query("SELECT foto FROM admin WHERE id_admin='$id_admin'")or die(mysql_error());
		$array_unlink=mysql_fetch_array($query_unlink) or die(mysql_error());
		unlink("../img/img_admin/".$array_unlink['foto']);

		$query2=mysql_query("UPDATE admin SET id_status='$kategori_adm',nm_lengkap='$nm_admin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',email='$email',foto='$foto' WHERE id_admin='$id_admin'")or die(mysql_error());
		if($query2){
			move_uploaded_file($_FILES['foto']['tmp_name'],"../img/img_admin/".$_FILES['foto']['name']);
			echo"<script>alert('data berhasil di update!!');window.location='halaman_utama.php?hal=edit_admin';</script>";
		}	

	}

	


 ?>