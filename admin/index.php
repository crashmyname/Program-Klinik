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
    $baris1 = $cek->fetch();
  
    if($baris > 0){
    //  echo "ada";
    $_SESSION['auth'] = 1;
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $baris1['role'];
    if($baris1['role'] =="admin" ){
    echo "<script>document.location='../admin/dashboard.php';</script>";
    // header('location:../admin/dashboard.php');
    // echo "<script>alert('Selamat Anda berhasil login');</script>";
    }else if($baris1['role']=="dokter"){
        echo "<script>document.location='../dokter/index-dokter.php';</script>";}
        else if($baris1['role']=="owner"){
        echo "<script>document.location='../ceo/index-owner.php';</script>";
        }
        else{
      echo "<script>alert('Username atau Password Anda Salah');</script>";
      echo "<script>document.location='../admin/index.php';</script>";
      session_destroy();
    }
}
  
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="../js/my.js">
    <link href="../assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block center"><img src="../assets/img/logs1.png" width="120%" alt="" srcset=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                    </div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="user"
                                                placeholder="Masukan username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Masukan password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block third" name="login" value="LOGIN">
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/sbadmin/js/sb-admin-2.min.js"></script>

</body>

</html>