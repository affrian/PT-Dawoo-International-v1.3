<?php 
session_start();
include_once("admin/koneksi.php");
	date_default_timezone_set("ASIA/JAKARTA");
	$byr_tanggal=date("Y-m-d");
	$bl_id=$_POST['bl_id'];
	$byr_nama=$_POST['byr_nama'];
	$byr_jumlah=$_POST['byr_jumlah'];
	$byr_catatan=$_POST['byr_catatan'];
	$byr_gambar=$_FILES['byr_gambar']['name'];
	$status="";

	$query_cek_data=mysql_query("SELECT bl_id,byr_jumlah FROM pembayaran WHERE bl_id='$bl_id'")or die(mysql_error());
	$ketemu_data=mysql_num_rows($query_cek_data);
		if($ketemu_data==1){
			$array_cek_data=mysql_fetch_array($query_cek_data) or die(mysql_error());
			$jumlah_bayar=$array_cek_data['byr_jumlah']+$byr_jumlah;
			if(empty($byr_gambar)){
				$query_update=mysql_query("UPDATE pembayaran SET byr_nama='$byr_nama',byr_jumlah='$jumlah_bayar',byr_catatan='$byr_catatan',byr_status='$status',byr_tanggal='$byr_tanggal' WHERE bl_id='$bl_id' ")or die(mysql_error());
				if($query_update){
					echo"<script>alert('Pembayran berhasil di upload');window.location='halaman_utama.php?hal=user_akun&subject=pembayaran';</script>";
				}
			}else{
				// unlink gambar dari folder img_pembayaran
				$query_cek_gambar=mysql_query("SELECT byr_gambar FROM pembayaran WHERE bl_id='$bl_id'")or die(mysql_error());
				$array_cek_gambar=mysql_fetch_array($query_cek_gambar)or die(mysql_error());
				unlink("img/img_pembayaran/".$array_cek_gambar['byr_gambar']);
				//update data jika gambar ada dan data ada
				$query_update2=mysql_query("UPDATE pembayaran SET byr_nama='$byr_nama',byr_jumlah='$jumlah_bayar',byr_catatan='$byr_catatan',byr_gambar='$byr_gambar',byr_status='$status',byr_tanggal='$byr_tanggal' WHERE bl_id='$bl_id' ")or die(mysql_error());
				move_uploaded_file($_FILES['byr_gambar']['tmp_name'],"img/img_pembayaran/".$_FILES['byr_gambar']['name']);
				if($query_update2){
					echo"<script>alert('Pembayran berhasil di upload');window.location='halaman_utama.php?hal=user_akun&subject=pembayaran';</script>";
				}
			}
		}else{
			if(empty($byr_gambar)){
				$query_insert1=mysql_query("INSERT INTO pembayaran(byr_id,bl_id,byr_tanggal,byr_nama,byr_jumlah,byr_catatan,byr_status) VALUES(NULL,'$bl_id','$byr_tanggal','$byr_nama','$byr_jumlah','$byr_catatan','$status')")or die(mysql_error());
				if($query_insert1){
					echo"<script>alert('Pembayran berhasil di upload');window.location='halaman_utama.php?hal=user_akun&subject=pembayaran';</script>";
				}
			}else{
				$query_insert2=mysql_query("INSERT INTO pembayaran VALUES(NULL,'$bl_id','$byr_tanggal','$byr_nama','$byr_jumlah','$byr_catatan','$byr_gambar','$status')")or die(mysql_error());
				move_uploaded_file($_FILES['byr_gambar']['tmp_name'],"img/img_pembayaran/".$_FILES['byr_gambar']['name']);
				if($query_insert2){
					echo"<script>alert('Pembayran berhasil di upload');window.location='halaman_utama.php?hal=user_akun&subject=pembayaran';</script>";
				}
			}

		}
 ?>