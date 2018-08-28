
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
 	<title>Laporan Pembayaran</title>
 	<link rel="shortcut icon" type="image/x-icon" href="../img/img_default/browser.ico" />
 	<style>
		.kolom{
			border: 1px solid black;
		}
	</style>
 </head>
 <body>
 	<?php 
	include_once("koneksi.php");
	$tg_awal=$_POST['tg_awal'];
	$tg_awal=date("Y-m-d",strtotime($tg_awal));
	$tg_akhir=$_POST['tg_akhir'];
	$tg_akhir=date("Y-m-d",strtotime($tg_akhir));
	// $query=mysql_query("SELECT pembelian.*,pembelian_detail.*,user.usr_nm_lengkap,(select count(pembelian_detail.bl_id) from pembelian_detail where pembelian_detail.bl_id=pembelian.bl_id)as baris from pembelian INNER JOIN pembelian_detail ON pembelian.bl_id=pembelian_detail.bl_id INNER JOIN user ON user.usr_id=pembelian.usr_id WHERE pembelian.bl_tanggal BETWEEN '$tg_awal' AND '$tg_akhir'")or die(mysql_error());
	$query=mysql_query("SELECT * FROM pembayaran INNER JOIN pembelian ON pembayaran.bl_id=pembelian.bl_id WHERE pembayaran.byr_tanggal BETWEEN '$tg_awal' AND '$tg_akhir'")or die(mysql_error());

	 ?>
	<div style="margin-left:230px;width:65%" class="kolom">
		<table width="100%">
			<tr>
				<td colspan="7"><p style="font-size:25px;font-weight:bold;text-align: center">LAPORAN PEMBAYARAN</p ></td>

			</tr>
			<tr>
				<td colspan="7"><hr></td>
			</tr>
			<tr>
				<td><img src="../img/img_default/logo_polyframe.png"></td>
				<td colspan="7"> <p style="font-size:25px;font-weight:bold;">PT.DAWOO INTERNATIONAL</p > <br>
					Kp. Karang Mulya Rt. 014 Rw. 005 Desa CikopoKecamatan Bungursari 
					<br> Kabupaten Purwakarta Jawa Barat 41181
				</td>
				
			</tr>
			<tr>
				<td colspan="7"><hr></td>
			</tr>
			<tr>
				 <td colspan="7" style="text-align: right;"> <b>Periode: <?php echo $tg_awal=date("d-M-Y",strtotime($tg_awal));  ?> Sampai <?php  echo  $tg_akhir=date("d-M-Y",strtotime($tg_akhir));?></b></td> 
			</tr>
			<tr style="text-align: center;" class="kolom">
				<td class="kolom">No</td>
				<td class="kolom">Id Pembelian</td>
				<td class="kolom">Tanggal Pembayaran</td>
				<td class="kolom">Total Pembelian</td>
				<td class="kolom">Total Pembayaran</td>
				<td class="kolom">Status Pembayaran</td>
			</tr>
			<?php 
				$no=1;
				while($array=mysql_fetch_array($query)){
					@$tot=$tot+$array['bl_total'];
			?>
			<tr style="text-align: center;" >
				<td class="kolom"><?php echo $no; ?></td>
				<td class="kolom"><?php echo $array['bl_id'] ?></td>
				<td class="kolom"><?php echo date("d-m-Y",strtotime($array['byr_tanggal']));?></td>
				<td class="kolom" align="left">Rp. <?php echo number_format($array['bl_total'],0,",",".");?></td>
				<td class="kolom" align="left">Rp. <?php echo number_format($array['byr_jumlah'],0,",",".");?></td>
				<td class="kolom"><?php echo $array['byr_status'];?></td>
			</tr>
			<?php	
				$no++;
				}
			 ?>
			 <tr>
			 	<td align="center" colspan="5"><b>Total</b></td>
			 	<td ><b>Rp. <?php echo number_format($tot,0,",","."); ?></b></td>
			 </tr>

	 	</table>
	 </div>
 </body>
 </html>

