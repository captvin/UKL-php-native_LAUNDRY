<?php
    include "header.php"
    ?>

<?php
            include "../koneksi.php";
            $qry_get_detail=mysqli_query($conn,"select *, qty * harga as total from detail_transaksi join transaksi on transaksi.id=detail_transaksi.id_transaksi join paket on paket.id=detail_transaksi.id_paket join member on member.id=transaksi.id_member join user on user.id=transaksi.id_user where id_transaksi = '".$_GET['id']."' ");
            $data_detail=mysqli_fetch_array($qry_get_detail);
        ?>



<div>
    <center><h1 class="">Detail Pesanan</h1></center>
    <p> Atas Nama : <?=$data_detail ['nama']?></p>
    <p> Jenis : <?=$data_detail ['jenis']?></p>
    <p> Qty : <?=$data_detail ['qty']?></p>
    <p> Harga : <?=$data_detail ['harga']?></p>
    <p> Total : <?=$data_detail ['total']?></p>
    <p> Tanggal : <?=$data_detail ['tgl']?></p>
    <p> Batas Waktu : <?=$data_detail ['batas_waktu']?></p>
    <p> Status : <?=$data_detail ['status']?></p>
    <p> Stts Bayar : <?=$data_detail ['dibayar']?></p>
    <p> Tanggal Bayar : <?=$data_detail ['tgl_bayar']?></p>
    <h4>Ubah Status :</h4>
    <a href="proses.php?id=<?=$data_detail ['id_transaksi'];?>" class="btn btn-primary">Proses</a>
    <a href="selesai.php?id=<?=$data_detail ['id_transaksi'];?>" class="btn btn-success">Selesai</a>
    <a href="diambil.php?id=<?=$data_detail ['id_transaksi'];?>" class="btn btn-danger">Diambil</a><br>
    <h4>Ubah Stts Transaksi :</h4>
    <a href="Dibayar.php?id=<?=$data_detail ['id_transaksi'];?>" class="btn btn-success">Dibayar</a><br><br>
    <a target="_blank" class="btn btn-primary" href="cetak.php?id_transaksi=<?php echo $data_detail['id_transaksi']; ?>">Print</a>
</div>
    
<?php
    include "../footer.php"
    ?>