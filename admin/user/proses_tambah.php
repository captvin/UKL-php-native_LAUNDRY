<?php
if ($_POST) {
    $nama_user=$_POST['nama_user'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_user)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($role)){
        echo "<script>alert('level tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah.php';</script>";
    }

    elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah.php';</script>";
    }

    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama_user, role, username, password) value ('".$nama_user."','".$role."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
    
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='petugas.php';</script>";
        }

        else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah.php';</script>";
        }
    }
}
?>