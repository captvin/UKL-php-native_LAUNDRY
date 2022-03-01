<?php
if ($_POST) {
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($jenis_kelamin)){
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($tlp)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah.php';</script>";
    }

    else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or die(mysqli_error($conn));
    
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='pelanggan.php';</script>";
        }

        else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah.php';</script>";
        }
    }
}
?>