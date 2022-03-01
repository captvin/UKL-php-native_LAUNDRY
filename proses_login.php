<?php
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];

        include "koneksi.php";
        $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."' ");
        
        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();

            if($dt_login["role"]=="admin"){
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama_user']=$dt_login['nama_user'];
                $_SESSION['role']=$dt_login['role'];
                $_SESSION['status_login']=true;
                header("location: admin/home.php");

            }

            elseif($dt_login["role"]=="kasir"){
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama_user']=$dt_login['nama_user'];
                $_SESSION['role']=$dt_login['role'];
                $_SESSION['status_login']=true;
                header("location: kasir/home.php");
            }

            else{
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['nama_user']=$dt_login['nama_user'];
                $_SESSION['role']=$dt_login['role'];
                $_SESSION['status_login']=true;
                header("location: owner/home.php");
            }
        }

        else{
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
?>