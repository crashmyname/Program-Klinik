<?php
session_start();
include '../inc/koneksi.php';


if(isset($_POST['login']))
{
    $username=$_POST['user'];
    $password=$_POST['password'];

    $query="select * from tb_pasien where nik='$username' AND no_hp='$password'";
    $cek=$db->prepare($query);
    $cek->execute();
    $baris = $cek->rowCount(); //jika benar maka baris akan lebih dari 0
  
    if($baris > 0){
    //  echo "ada";
    $_SESSION['auth'] = 1;
    $_SESSION['user'] = $username;
  
    echo "<script>alert('Selamat Anda berhasil login');</script>";
    echo "<script>document.location='../index.php';</script>";
  
    }else{
      echo "<script>alert('Username atau Password Anda Salah');</script>";
    echo "<script>document.location='../login.php';</script>";
      session_destroy();
    }
  
  }

?>