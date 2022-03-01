<?php
    include "header.php"
    ?>

    <div class="container">
			<?php
				include "koneksi.php";
				$qry_user=mysqli_query ($conn,'select * from user');
				$no=0;
				while ($data_user=mysqli_fetch_array($qry_user)){
					$no++;?>

              <div class="card" style="width: 18rem; float: left; margin: 40px;">
                  <div class="card-body">
                      <h5 class="card-title"><?=$data_user ['username']?></h5><br>
                      <h6>Nama :</h6>
                      <p class="card-text"><?=$data_user['nama_user']?></p><br>
                      <h6>Jabatan: </h6>
					  <p class="card-text"><?=$data_user['role']?></p>
                      <a href="hapus.php?id=<?=$data_user ['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                      <a href="edit.php?id=<?=$data_user ['id'];?>" class="btn btn-success">Edit</a>
                  </div>
                </div>
                </div>
            <?php
            }
            ?>
            <a href="tambah.php" class="btn btn-success">Tambah Petugas</a>
          </div>
 
<?php
    include "../footer.php"
    ?>