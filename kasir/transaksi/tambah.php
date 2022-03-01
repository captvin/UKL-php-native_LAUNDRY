<?php
    include "header.php"
    ?>

<h3>Tambah Transaksi </h3>
        <form action="proses_tambah.php" method="post">
            Nama Pelanggan :
            <select name="id_member" class="form-control">
                <option></option>
                <?php
                include "../koneksi.php";
                $qry_member=mysqli_query($conn,"select * from member");
                while($data_member=mysqli_fetch_array($qry_member)){
                    echo '<option value="'.$data_member['id'].'">'.$data_member['nama'].'</option>';
                }
                ?>
                </select>
                <input type="hidden" name="tgl" value="<?php echo date("Y-m-d"); ?>">
            Batas_waktu :</br>
                <input type="date" name="batas_waktu" id=""><br>
            Jenis Paket :
                <select name="id_paket" class="form-control">
                    <option></option>
                    <?php
                    include "../koneksi.php";
                    $qry_paket=mysqli_query($conn,"select * from paket");
                    while($data_paket=mysqli_fetch_array($qry_paket)){
                        echo '<option value="'.$data_paket['id'].'">'.$data_paket['jenis'].'</option>';
                    }
                    ?>
                    </select>
            Qty : <br>
                <input type="text" name="qty"><br>
            Petugas :
            <select name="id_user" class="form-control">
                    <option></option>
                    <?php
                    include "../koneksi.php";
                    $qry_user=mysqli_query($conn,"select * from user WHERE role = 'kasir'");
                    while($data_user=mysqli_fetch_array($qry_user)){
                        echo '<option value="'.$data_user['id'].'">'.$data_user['nama'].'</option>';
                    }
                    ?>
                    </select>

                <input type="submit" name="simpan" value="Tambah Transaksi"class="btn btn-primary">

               
            
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<?php
    include "../footer.php"
    ?>