<?php 
session_start();
include_once("admin/koneksi.php");
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];     
	$query=mysql_query("SELECT * FROM user WHERE usr_email='$email'") or die(mysql_error());
	$array=mysql_fetch_array($query);
	
	if(mysql_num_rows($query)>0){
		if(password_verify($password,$array['usr_password'])){
			$_SESSION['usr_id']=$array['usr_id'];
			$_SESSION['usr_nm_lengkap']=$array['usr_nm_lengkap'];
			$_SESSION['usr_email']=$email;
			header('location:halaman_utama.php');
		}else{
		echo"
			<script>alert('data tidak ada');window.location='index.php';</script>
		";
		}
	}else{
		echo"
			<script>alert('data tidak ada');window.location='index.php';</script>
		";
	}
}


 ?>