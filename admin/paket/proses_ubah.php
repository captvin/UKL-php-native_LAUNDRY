<?php
if ($_POST) {
    $id=$_POST['id'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='paket.php';</script>";
    }

    elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='paket.php';</script>";
    }

    

    else {
        include "../koneksi.php";
        $update=mysqli_query ($conn,"update paket set jenis='".$jenis."',harga='".$harga."' where id='$id'") or die (mysqli_error($conn));
    
        if($update){
            echo "<script>alert('Sukses update paket');location.href='paket.php';</script>";
        }

        else {
            echo "<script>alert('Gagal update paket');location.href='paket.php';</script>";
        }
    }
}
?>