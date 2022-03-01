<?php
    include "header.php"
    ?>

    <div class="container">
			<?php
				include "../koneksi.php";
				$qry_outlet=mysqli_query ($conn,"select * from outlet");
				$no=0;
				while ($data_outlet=mysqli_fetch_array($qry_outlet)){
					$no++;?>

              <div class="card" style="width: 18rem; float: left; margin: 40px;">
                  <div class="card-body">
                      <h5 class="card-title"><?=$data_outlet ['nama']?></h5>
                      <p class="card-text"><?=$data_outlet['alamat']?></p>
                      <a href="hapus.php?id=<?=$data_outlet ['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                      <a href="ubah.php?id=<?=$data_outlet ['id'];?>" class="btn btn-success">Edit</a>
                  </div>
                </div>
            <?php
            }
            ?>
            <a href="tambah.php" class="btn btn-success">Tambah outlet</a>
          </div>
 
<?php
    include "../footer.php"
    ?>