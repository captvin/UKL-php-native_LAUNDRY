<?php
    include "header.php"
    ?>

    <div class="container">
			<?php
				include "../koneksi.php";
				$qry_transaksi=mysqli_query ($conn,"select * from transaksi join member on member.id=transaksi.id_member");
				$no=0;
				while ($data_member=mysqli_fetch_array($qry_transaksi)){
					$no++;?>

              <div class="card" style="width: 18rem; float: left; margin: 40px;">
                  <div class="card-body">
                      <h5 class="card-title"><?=$data_member ['nama']?></h5>
                       <h6>Tanggal :</h6> 
                      <p class="card-text"><?=$data_member['tgl']?></p><br>
                        
                     
                      <a href="detail.php?id=<?=$data_member ['id'];?>" class="btn btn-success">Lihat</a>
                  </div>
                </div>
            <?php
            }
            ?>
            <a href="tambah.php" class="btn btn-success">Tambah Transaksi</a>
          </div>
 
<?php
    include "../footer.php"
    ?>