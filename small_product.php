<div class="jarak">
	<div class="row">
			<?php
				include_once("admin/koneksi.php");
				$query=mysql_query("SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori=kategori.id_kategori WHERE kategori.id_kategori=1 ORDER BY barang.id_barang DESC");  
				while($array=mysql_fetch_array($query)){
					extract($array);


			?>
		 	<div class="fh5co-post-entry">
					<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
						<figure>
							<a href="#" title="<?php echo $nama; ?>" ><img src="img/img_upload/<?php echo $gambar ?>" alt="Image" class="img-responsive img-thumbnail"  style="height: 250px; width: 250px"></a>
						</figure>
						<h2 class="fh5co-article-title"><a href="#"><?php echo $nama ?></a></h2>
						<h4 class="fh5co-article-title"><p>Rp. <?php echo number_format($harga,1,".",","); ?></p></h4>
						<a href="?hal=detail_product&id=<?php echo $id_barang; ?>"><button name="detail" type="button" class="tampil btn btn-primary btn-block"  id="btn_detail">Detail <span class="glyphicon glyphicon-eye-open"></span></button></a>
					</article>
				</div>

			<?php 
				}
			 ?>
	</div>
</div>

	