<?php
    include "header.php"
    ?>

    <div class="container">
			<?php
				include "../koneksi.php";
				$qry_member=mysqli_query ($conn,"select * from member");
				$no=0;
				while ($data_member=mysqli_fetch_array($qry_member)){
					$no++;?>

              <div class="card" style="width: 18rem; float: left; margin: 40px;">
                  <div class="card-body">
                      <h5 class="card-title"><?=$data_member ['nama']?></h5>
                       <h6>Alamat :</h6> 
                      <p class="card-text"><?=$data_member['alamat']?></p><br>
                        <h6>Jenis Kelamin :</h6> 
                      <p class="card-text"><?=$data_member['jenis_kelamin']?></p><br>
                      <h6>Telepon :</h6>
                      <p class="card-text"><?=$data_member['tlp']?></p>
                      <a href="hapus.php?id=<?=$data_member ['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                      <a href="ubah.php?id=<?=$data_member ['id'];?>" class="btn btn-success">Edit</a>
                  </div>
                </div>
            <?php
            }
            ?>
            <a href="tambah.php" class="btn btn-success">Tambah pelanggan</a>
          </div>
 
<?php
    include "../footer.php"
    ?>