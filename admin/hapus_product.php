<?php 
include_once("koneksi.php");
$id=$_POST['id'];
$query1=mysql_query("SELECT * FROM barang WHERE id_barang='$id'");
$array=mysql_fetch_array($query1);
unlink("../img/img_upload/".$array['gambar']);
mysql_query("DELETE FROM barang WHERE id_barang='$id'");
 ?>