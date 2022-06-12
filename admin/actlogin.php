<?php
session_start();
include '../inc/koneksi.php';


if(isset($_POST['login']))
{
    $username=$_POST['user'];
    $password=$_POST['password'];
    $password=md5($password);

    $query="select * from admn_user where username='$username' AND password='$password'";
    $cek=$db->prepare($query);
    $cek->execute();
    $baris = $cek->rowCount(); //jika benar maka baris akan lebih dari 0
  
    if($baris > 0){
    //  echo "ada";
    $_SESSION['auth'] = 1;
    $_SESSION['username'] = $username;
    header('location:../admin/dashboard.php');
    echo "<script>alert('Selamat Anda berhasil login');</script>";
    
  
    }else{
      echo "<script>alert('Username atau Password Anda Salah');</script>";
    echo "<script>document.location='../admin/index.php';</script>";
      session_destroy();
    }
  
  }

?>