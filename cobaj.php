<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Document</title>
	<link rel="stylesheet" href="assets/vendor/bootstrap-3/css/bootstrap.min.css" />	<!-- css bootstrap -->
</head>
<body>
	<table border="1" width="90%">
		<tr>
			<th>No</th>
			<th>no transaksi</th>
			<th>subtotal</th>
			<th>id barang</th>
			<th>jumlah beli</th>
			
		</tr>

		<?php 
			$no=1;
			$jum=1;
			include_once("admin/koneksi.php");
			$query=mysql_query("select pembelian.*,pembelian_detail.*,(select count(pembelian_detail.bl_id) from pembelian_detail where pembelian_detail.bl_id=pembelian.bl_id)as baris from pembelian inner join pembelian_detail on pembelian.bl_id=pembelian_detail.bl_id")or die(mysql_error());
			while($array=mysql_fetch_array($query)){
				 echo '<tr>';
				    if($jum <= 1) {
				        echo '<td rowspan="'.$array['baris'].'">'.$no.'</td>';
				        echo '<td rowspan="'.$array['baris'].'">'.$array['bl_id'].'</td>';  
				        echo '<td rowspan="'.$array['baris'].'">'.$array['bl_total'].'</td>';  
				        $jum = $array['baris'];   
				        $total=$total+$array['bl_total'];    
				    	 $no++;                         
				    } else {
				        $jum = $jum - 1;
				    }
				echo '<td>'.$array['bl_tanggal'].'</td>';
			    echo '<td>'.$array['brg_id'].'</td>'; 
			    echo '</tr>';            
				}
		 ?>
		 <tr>
		 	<td colspan="2">total</td>
		 	<td>Rp.<?php echo number_format($total,0,",","."); ?></td>
		 </tr>
		
	</table>

</body>
</html>