<?php
    include "header.php"
    ?>

<h3>Tambah Petugas </h3>
        <form action="proses_tambah.php" method="post">
            Nama Petugas :
                <input type="text" name="nama_user" value="" class="form-control">
            Level :</br>
                <select class="form-select" aria-label="Default select example" name="role" value="">
                    <option selected></option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="Owner">Owner</option>
                </select></br>
            Username :
                <input type="text" name="username" value="" class="form-control">
            Password :
                <input type="password" name="password" value="" class="form-control">

                <input type="submit" name="simpan" value="Tambah Petugas"class="btn btn-primary">

               
            
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<?php
    include "../footer.php"
    ?>