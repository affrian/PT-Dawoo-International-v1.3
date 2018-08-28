<?php 
session_start();
if(!isset($_SESSION['usr_email'])){
	header('location:index.php');
}
 ?>
<div class="jarak">
<?php 
session_start();
include_once("admin/koneksi.php");
$session_id_usr=$_SESSION['usr_id'];
$id_session=session_id();
$no=1;
$query=mysql_query("SELECT * FROM keranjang INNER JOIN barang ON keranjang.keranjang_brg_id=barang.id_barang WHERE keranjang.usr_id='$session_id_usr'") or die(mysql_error());
$baris_ketemu=mysql_num_rows($query);
 ?>
 <h1><p class="text-center text-success">DAFTAR KERANJANG BELANJA</p></h1>
 	<table id="table2" width="100%">
 		<thead>
 			<tr>
 				<th>NO</th>
 				<th>Nama Produk</th>
 				<th>Jumlah</th>
 				<th>Harga</th>
 				<th>Subtotal</th>
 				<th>Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php 
 			error_reporting(E_ALL^(E_NOTICE));
 				if($baris_ketemu>0){
 					while($array=mysql_fetch_array($query)){
 					extract($array);
 					$subtotal=$harga*$keranjang_jumbel;
 					@$total1=$subtotal+$total1;
 			 ?>
 			<tr>
 				<td><?php echo $no; ?></td>
 				<td><?php echo $nama; ?></td>
 				<td><?php echo $keranjang_jumbel; ?></td>
 				<td>Rp. <?php echo  number_format($harga,1,".",",") ; ?></td>
 				<td>Rp. <?php echo number_format($subtotal,1,".",","); ?></td>
 				<td><a href="proses_hapus_keranjang.php?id=<?php echo $id_barang; ?>" onclick=" return confirm('anda yakin menghapus data ini??')"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Remove </button></a></td>
 			</tr>

 			<?php
 			$no++; 
 				}
 			}else{
 					echo"<p class='text-danger'>DATA TIDAK ADA</p>";
 				}
 			 ?>
 			 <tr>
 			 	<td></td>
 			 	<td></td>
 			 	<td></td>
 			 	<td><h3>Total</h3></td>
 			 	<td><h3>Rp. <?php echo number_format($total1,1,'.',','); ?></h3></td>
 			 	<td><a href="selesai.php?total=<?php echo $total; ?>"><button class="btn btn-primary " name="selesai"> <span class="glyphicon glyphicon-check"></span> Selesai</button></a><br><a href="?hal=all_product"><button class="btn btn-primary "><span class="fa fa-chevron-left"></span> Kembali </button></a></td>
 			 </tr>
 		</tbody>


 	</table>
 </div>