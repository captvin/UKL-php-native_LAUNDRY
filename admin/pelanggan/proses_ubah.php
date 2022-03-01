<?php
if ($_POST) {
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='pelanggan.php';</script>";
    }

    elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='pelanggan.php';</script>";
    }

    elseif(empty($jenis_kelamin)){
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='pelanggan.php';</script>";
    }

    elseif(empty($tlp)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='pelanggan.php';</script>";
    }

    else {
        include "../koneksi.php";
        $update=mysqli_query ($conn,"update member set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."',tlp='".$tlp."' where id='$id'") or die (mysqli_error($conn));
    
        if($update){
            echo "<script>alert('Sukses update pelanggan');location.href='pelanggan.php';</script>";
        }

        else {
            echo "<script>alert('Gagal update pelanggan');location.href='pelanggan.php';</script>";
        }
    }
}
?>