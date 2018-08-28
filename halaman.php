<?php 
error_reporting(E_ALL^(E_NOTICE));
	$hal=$_GET['hal'];
	switch ($hal) {

		case 'all_product':
		include_once('all_product.php');
		break;

		case 'small':
		include_once("small_product.php");
		break;

		case 'medium':
		include_once("medium_product.php");
		break;

		case 'large':
		include_once("large_product.php");
		break;

		case 'detail':
		include_once("detail_product.php");
		break;

		case'keranjang':
		include_once("daftar_keranjang.php");
		break;

		case'daftar':
		include_once("daftar_user.php");
		break;

		case'logout':
		include_once("proses_logout.php");
		break;

		case'detail_product':
		include_once("detail_product.php");
		break;

		case'cari':
		include_once("proses_search.php");
		break;

		case'user_akun':
		include_once("user_akun.php");
		break;

		case'detail_pemesanan':
		include_once("detail_pemesanan.php");
		break;

		case'contact':
		include_once("contact.php");
		break;

		default:
		include_once('all_product.php');
		break;

	}

 ?>