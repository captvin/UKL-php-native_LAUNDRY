<?php
if ($_POST) {
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='outlet.php';</script>";
    }

    elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='outlet.php';</script>";
    }

    

    else {
        include "../koneksi.php";
        $update=mysqli_query ($conn,"update outlet set nama='".$nama."',alamat='".$alamat."' where id='$id'") or die (mysqli_error($conn));
    
        if($update){
            echo "<script>alert('Sukses update outlet');location.href='outlet.php';</script>";
        }

        else {
            echo "<script>alert('Gagal update outlet');location.href='outlet.php';</script>";
        }
    }
}
?>