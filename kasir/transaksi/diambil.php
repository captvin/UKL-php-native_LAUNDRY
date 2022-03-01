<?php
   include "../koneksi.php";
   $qry_proses=mysqli_query($conn,"update transaksi set status='diambil' where id ='".$_GET['id']."'") or die (mysqli_error($conn));
   if($qry_proses){
       echo "<script>alert('Sukses update status');location.href='transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal update status');location.href='transaksi.php';</script>";
        }
   
 ?>