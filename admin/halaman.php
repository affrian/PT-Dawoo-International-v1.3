<?php 
	$hal=$_GET['hal'];
	switch ($hal) {
		case '':
		include_once('all_product.php');
		break;

		case 'add_product':
		include_once('add_product.php');
		break;

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

		case 'add_kategori':
		include_once("add_kategori.php");
		break;

		case 'add_admin':
		include_once("add_admin.php");
		break;

		case 'edit_admin':
		include_once("edit_admin.php");
		break;

		case 'data_kry':
		include_once("data_karyawan.php");
		break;

		case 'pesan':
		include_once("daftar_pesanan.php");
		break;

		case 'detail_pemesanan':
		include_once("detail_pemesanan.php");
		break;

		case 'data_user':
		include_once("data_user.php");
		break;

		case 'riwayat_pembelian':
		include_once("riwayat_pembelian.php");
		break;

		case 'edit_password':
		include_once("rubah_password.php");
		break;

		case 'data_bayar':
		include_once("data_pembayaran.php");
		break;

		case 'lpj':
		include_once("laporan_penjualan.php");
		break;

		case 'lpb':
		include_once("laporan_pembayaran.php");
		break;

		case 'search':
		include_once("proses_search.php");
		break;		

		


	}

 ?>