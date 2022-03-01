<?php
    include "header.php"
    ?>

<h3>Tambah Paket </h3>
        <form action="proses_tambah.php" method="post">
            Jenis :
            <select class="form-select" aria-label="Default select example" name="jenis" value="">
                    <option selected></option>
                    <option value="kiloan">kiloan</option>
                    <option value="selimut">selimut</option>
                    <option value="bed_cover">bed cover</option>
                    <option value="kaos">kaos</option>
                </select></br>
            Harga :
            <input type="text" name="harga" value="" class="form-control"><br>

                <input type="submit" name="simpan" value="Tambah Paket"class="btn btn-primary">

               
            
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<?php
    include "../footer.php"
    ?>