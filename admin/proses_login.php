<?php 
session_start();
include_once("koneksi.php");
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];     
	$query=mysql_query("SELECT * FROM admin WHERE email='$email'") or die(mysql_error());
	$array=mysql_fetch_array($query);
	
	if(mysql_num_rows($query)>0){
		if(password_verify($password,$array['password'])){
			$_SESSION['id_admin']=$array['id_admin'];
			$_SESSION['id_status']=$array['id_status'];
			$_SESSION['user']=$array['nm_lengkap'];
			$_SESSION['foto']= $array['foto'];
			$_SESSION['email']=$email;
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