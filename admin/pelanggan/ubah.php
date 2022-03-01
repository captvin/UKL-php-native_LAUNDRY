<?php
    include "header.php"
    ?>
        <?php
            include "../koneksi.php";
            $qry_get_member=mysqli_query($conn,"select * from member where id = '".$_GET['id']."'");
            $data_member=mysqli_fetch_array($qry_get_member);
        ?>

        <h3>UBAH PELANGGAN</h3>
        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value= "<?=$data_member['id']?>">
            Nama :
            <input type="text" name="nama" value="<?=$data_member['nama']?>" class="form-control">
            Alamat :
            <textarea name="alamat" class="form-control"rows="4" value="<?=$data_member['alamat']?>"></textarea>
            Jenis kelamin :</br>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" value="<?=$data_member['jenis_kelamin']?>">
                    <option selected></option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select></br>
            Telepon :
            <input type="text" name="tlp" value="<?=$data_member['tlp']?>" class="form-control"><br>

    
            <input type="submit" name="sim" name="foto_prpan" value="Ubah Pelanggan"class="btn btn-primary">

        </form>

    
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
   <?php
    include "../footer.php"
    ?>