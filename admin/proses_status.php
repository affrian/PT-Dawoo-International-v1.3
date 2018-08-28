<?php 
	include_once("koneksi.php");
	$bl_id=$_POST['bl_id'];
	$status=$_POST['status'];
	$query=mysql_query("UPDATE pembelian SET status='$status' WHERE bl_id='$bl_id'")or die(mysql_error());
	if($query){
		echo "
				<script>alert('data sukses di update');window.location='halaman_utama.php?hal=pesan';</script>
				
			";
	}else{
		echo "
				<script>alert('data gagal di update');</script>
				
			";
	}
echo $bl_id;
 ?>
 <!-- window.location='halaman_utama.php?hal=pesan'; -->