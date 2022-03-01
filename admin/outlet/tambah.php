<?php
    include "header.php"
    ?>

<h3>Tambah Outlet </h3>
        <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
            Nama Outlet :
                <input type="text" name="nama" value="" class="form-control">
            alamat :
                <textarea name="alamat" class="form-control"rows="4"></textarea>
            </br>
                <input type="submit" name="sim" name="foto_prpan" value="Tambah Produk"class="btn btn-primary">

               
            
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
 
          <?php
            include "../footer.php"
            ?>