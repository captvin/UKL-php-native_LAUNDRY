<?php
    include "header.php"
    ?>
        <?php
            include "koneksi.php";
            $qry_get_user=mysqli_query($conn,"select * from user where id = '".$_GET['id']."'");
            $data_user=mysqli_fetch_array($qry_get_user);
        ?>

        <h3>UBAH PETUGAS</h3>
        <form action="proses_edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value= "<?=$data_user['id']?>">
            Nama :
            <input type="text" name="nama_user" value="<?=$data_user['nama_user']?>" class="form-control">
            Level :</br>
                <select class="form-select" aria-label="Default select example" name="role" value="<?=$data_user['role']?>">
                    <option selected></option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option>
                </select></br>
            Username :
            <input type="text" name="username" value="<?=$data_user['username']?>" class="form-control">
            Password :
            <input type="password" name="password" value="" class="form-control">
           
            <input type="submit" name="sim" name="foto_prpan" value="Ubah Petugas"class="btn btn-primary">

        </form>

    
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
   <?php
    include "../footer.php"
        ?>