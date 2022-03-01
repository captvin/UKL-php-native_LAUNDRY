<?php
    $date = date('Y-m-d');

   include "../koneksi.php";
   $qry_proses=mysqli_query($conn,"update transaksi set tgl_bayar = ('$date'), dibayar = 'dibayar' where id ='".$_GET['id']."'") or die (mysqli_error($conn));
   if($qry_proses){
       echo "<script>alert('Sukses update status pembayaran');location.href='transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal update status pembayaran');location.href='transaksi.php';</script>";
        }
   
 ?>