<link rel="stylesheet" href="assets/vendor/bootstrap-3/css/bootstrap.min.css" />	<!-- css bootstrap -->
<?php 
session_start();
include_once("admin/koneksi.php");
	date_default_timezone_set("ASIA/JAKARTA");
	$total=$_GET['total'];
	$id_session=session_id();
	$usr_id=$_SESSION['usr_id'];
	$tanggal=date("Ymd");
	$isi_keranjang=array();
	// tampilkan data keranjang
	$query=mysql_query("SELECT * FROM keranjang WHERE usr_id='$usr_id'") or die(mysql_error());
	while($array=mysql_fetch_array($query)){
		$isi_keranjang[]=$array;
	}

	// buat faktur
	 $today=date("Ymd");
	$query_faktur=mysql_query("SELECT MAX(bl_id) AS faktur FROM pembelian")or die(mysql_error());
	$array_faktur=mysql_fetch_array($query_faktur)or die(mysql_error());
	$nofak=$array_faktur['faktur'];
	$urut=substr($nofak, 8,7);
	$tambah=(int)$urut+1;


	if(strlen($tambah)==1){
		$format=$today."000000".$tambah;
	}elseif (strlen($tambah)==2) {
		$format=$today."00000".$tambah;
	}elseif (strlen($tambah)==3) {
		$format=$today."0000".$tambah;
	}elseif (strlen($tambah)==4) {
		$format=$today."000".$tambah;
	}elseif (strlen($tambah)==5) {
		$format=$today."00".$tambah;
	}elseif (strlen($tambah)==6) {
		$format=$today."0".$tambah;
	}else{
		$format=$today.$tambah;
	}
		
	// insert tanggal pembelian
	$status="Proses";
	mysql_query("INSERT INTO pembelian VALUES ('$format','$usr_id','$tanggal','$total','$status')")or die(mysql_error());
	// tampil pembelian
	$id_order=mysql_insert_id();
	// $isi_keranjang=isi_keranjang();
	$jml_keranjang=count($isi_keranjang);
	// insert into pembelian
	for($i=0;$i<$jml_keranjang;$i++){
		$insert_detail=mysql_query("INSERT INTO pembelian_detail VALUES ('$format',{$isi_keranjang[$i]['keranjang_brg_id']},{$isi_keranjang[$i]['keranjang_jumbel']})")or die(mysql_error());
	}

	// reset keranjang
	for($i=0;$i<$jml_keranjang;$i++){
		mysql_query("DELETE FROM keranjang WHERE keranjang_id={$isi_keranjang[$i]['keranjang_id']}")or die(mysql_error());
	}

	// tampilkan data pembayaran
	if($insert_detail){
?>
	<div style="margin-left: 280px;">
		<table width="55%" border="1">
			<tr>
				<td colspan="3"><h1 class="text-center text-primary">Bukti Transaksi</h1></td>
			</tr>
			<tr>
				<td>No Transaksi</td>
				<td>:</td>
				<td><?php echo $format; ?></td>
			</tr>
			<tr>
				<td>Nama Pembeli</td>
				<td>:</td>
				<td><?php echo $_SESSION['usr_nm_lengkap']; ?></td>
			</tr>
			<tr>
				<td>Total Pembayaran</td>
				<td>:</td>
				<td>Rp. <?php echo number_format($total,0,",","."); ?></td>
			</tr>
			<tr>
				<td>Catatan</td>
				<td>:</td>
				<td>Lakukan Pembayaran ke No. Rekening 021111 a/n Wari</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td ><a href="halaman_utama.php?hal=user_akun"><button class="btn btn-success btn-md">OK</button></a></td>
			</tr>
		</table>
	</div>
<?php
	}
 ?>