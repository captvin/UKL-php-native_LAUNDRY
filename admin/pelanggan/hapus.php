<?php
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where
        id='".$_GET['id']."'");
        if($qry_hapus){
        echo "<script>alert('Sukses hapus pelanggan');location.href='pelanggan.php';</script>";
        } else {
        echo "<script>alert('Gagal hapus pelanggan');location.href='pelanggan.php';</script>";
        }
    }
?>