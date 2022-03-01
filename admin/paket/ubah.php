<?php
    include "header.php"
    ?>
        <?php
            include "../koneksi.php";
            $qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
            $data_paket=mysqli_fetch_array($qry_get_paket);
        ?>

        <h3>UBAH PAKET</h3>
        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value= "<?=$data_paket['id']?>">
            Jenis :
            <select class="form-select" aria-label="Default select example" name="jenis" value="">
                    <option selected></option>
                    <option value="kiloan">kiloan</option>
                    <option value="selimut">selimut</option>
                    <option value="bed_cover">bed cover</option>
                    <option value="kaos">kaos</option>
                </select></br>
            Harga :
            <input type="text" name="harga" value="<?=$data_paket['harga']?>" class="form-control">
    
            <input type="submit" name="sim" name="foto_prpan" value="Ubah Paket"class="btn btn-primary">

        </form>

    
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
   <?php
    include "../footer.php"
    ?>
    