<?php
    include "header.php"
    ?>
        <?php
            include "../koneksi.php";
            $qry_get_outlet=mysqli_query($conn,"select * from outlet where id = '".$_GET['id']."'");
            $data_outlet=mysqli_fetch_array($qry_get_outlet);
        ?>

        <h3>UBAH Outlet</h3>
        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value= "<?=$data_outlet['id']?>">
            Nama :
            <input type="text" name="nama" value="<?=$data_outlet['nama']?>" class="form-control">
            Alamat :
            <input type="text" name="alamat" value="<?=$data_outlet['alamat']?>" class="form-control">
    
            <input type="submit" name="sim" name="foto_prpan" value="Ubah Pelanggan"class="btn btn-primary">

        </form>

    
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
   <?php
    include "../footer.php"
    ?>