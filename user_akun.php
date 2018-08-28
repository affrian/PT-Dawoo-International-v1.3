
<div class="jarak">
	<div id="user">
		<!-- section navigasi -->
		<section>
			<ul class="nav nav-tabs">
			  <li  class="active"><a href="?hal=user_akun&subject=riwayat">Riwayat Pembelian</a></li>
			  <li role="presentation"><a href="?hal=user_akun&subject=informasi">Informasi Saya</a></li>
			  <li role="presentation"><a href="?hal=user_akun&subject=rubah_pass">Rubah Password</a></li>
			  <li role="presentation"><a href="?hal=user_akun&subject=pembayaran">Pembayaran</a></li>
			</ul>
		</section>
		<hr>
		<!-- section content -->
		<section>

			<?php
				$subject=$_GET['subject'];
				$detail_pemesanan=$_GET['detail_pemesanan'];
				switch ($subject) {
					case 'riwayat':
					include_once("riwayat_pembelian.php");
					break;

					case'informasi':
					include_once("informasi_user.php");
					break;
					
					case'rubah_pass':
					include_once("rubah_password.php");
					break;

					case'pembayaran':
					include_once("pembayaran.php");
					break;


					default:
					include_once("riwayat_pembelian.php");
					break;
				}
				switch ($detail_pemesanan) {
					case 'detail_barang':
						include_once("detail_pemesanan.php");
						break;
				}
			// include_once("riwayat_pembelian.php"); 
			?>
		</section>
	</div>

</div>
<script src="assets/vendor/jquery/jq.js"></script>