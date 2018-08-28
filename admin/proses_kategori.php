<?php 
	include_once("koneksi.php");
	$nm_kategori=$_POST['nm_kategori'];
	mysql_query("INSERT INTO kategori VALUES (NULL, '$nm_kategori')");

 ?>