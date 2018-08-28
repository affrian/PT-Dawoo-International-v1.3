<marquee behavior="" direction="">
     <?php 
        include_once("admin/koneksi.php");
        $query=mysql_query("SELECT gambar FROM barang WHERE id_kategori=1 ORDER BY id_barang ASC LIMIT 0,12") or die(mysql_error());
        while($array=mysql_fetch_array($query)){
          extract($array);
      ?>
        <img class="img-thumbnail" src="img/img_upload/<?php echo $gambar; ?>" alt="" width="200px" height="150px">
      <?php
        }
      ?>
      </marquee>