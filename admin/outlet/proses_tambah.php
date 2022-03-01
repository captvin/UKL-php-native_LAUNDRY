<?php
if ($_POST) {
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah.php';</script>";
    }

    else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama, alamat) value ('".$nama."','".$alamat."')") or die(mysqli_error($conn));
    
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='outlet.php';</script>";
        }

        else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah.php';</script>";
        }
    }
}
?>