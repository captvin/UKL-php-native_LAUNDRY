<?php
    include "header.php"
    ?>

    <div class="container">
			<?php
				include "../koneksi.php";
				$qry_paket=mysqli_query ($conn,"select * from paket");
				$no=0;
				while ($data_paket=mysqli_fetch_array($qry_paket)){
					$no++;?>

              <div class="card" style="width: 18rem; float: left; margin: 40px;">
                  <div class="card-body">
                      <h5 class="card-title"><?=$data_paket ['jenis']?></h5><br>
                       <h6>Harga :</h6> 
                      <p class="card-text">Rp.<?=$data_paket['harga']?></p><br>
                      <a href="hapus.php?id=<?=$data_paket ['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                      <a href="ubah.php?id=<?=$data_paket ['id'];?>" class="btn btn-success">Edit</a>
                  </div>
                </div>
            <?php
            }
            ?>
            <a href="tambah.php" class="btn btn-success">Tambah paket</a>
          </div>
 
<?php
    include "../footer.php"
    ?>