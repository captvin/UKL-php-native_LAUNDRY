<?php
if ($_POST) {
    $id=$_POST['id'];
    $nama_user=$_POST['nama_user'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_user)){
        echo "<script>alert('nama tidak boleh kosong');location.href='petugas.php';</script>";
    }

    elseif(empty($role)){
        echo "<script>alert('level tidak boleh kosong');location.href='petugas.php';</script>";
    }

    elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='petugas.php';</script>";
    }

    elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='petugas.php';</script>";
    }
    

    else {
        include "koneksi.php";
        $update=mysqli_query ($conn,"update user set nama_user='".$nama_user."',role='".$role."',username='".$username."',password='".md5($password)."' where id='$id'") or die (mysqli_error($conn));
    
        if($update){
            echo "<script>alert('Sukses update petugas');location.href='petugas.php';</script>";
        }

        else {
            echo "<script>alert('Gagal update petugas');location.href='petugas.php';</script>";
        }
    }
}
?>