<?php 
include_once("admin/koneksi.php");
if(isset($_POST['simpan'])){
	$usr_id=$_POST['usr_id'];
	$nm_lengkap=$_POST['nm_lengkap'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];

	$query=mysql_query("UPDATE user SET usr_nm_lengkap='$nm_lengkap',usr_tempat_lahir='$tempat_lahir',usr_tgl_lahir='$tgl_lahir',usr_alamat='$alamat',usr_email='$email' WHERE usr_id='$usr_id'") or die(mysql_error());
	if($query){
		echo "<script>alert('data tersimpan');window.location='halaman_utama.php?hal=user_akun&subject=informasi';</script>";
	}else{
		echo "<script>alert('data gagal tersimpan');</script>";
	}
}
 ?>