<?php 
include_once("admin/koneksi.php");
if(isset($_POST['simpan'])){
	$usr_id=mysql_real_escape_string($_POST['usr_id']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$konfir_pass=mysql_real_escape_string($_POST['konfir_pass']);

	if($pass!==$konfir_pass){
		echo "<script>
				alert('password tidak sama!!');window.location='halaman_utama.php?hal=user_akun&subject=rubah_pass';
			</script>";
	}else{
		$pass_ok=password_hash($konfir_pass,PASSWORD_DEFAULT);
		$query=mysql_query("UPDATE user SET usr_password='$pass_ok' WHERE usr_id='$usr_id'") or die(mysql_error());
		if($query){
			echo "<script>alert('data telah di update');window.location='halaman_utama.php?hal=user_akun&subject=rubah_pass';</script>";
		}else{
			echo "<script>alert('data gagal di update');</script>";
		}

	}


	
}
 ?>