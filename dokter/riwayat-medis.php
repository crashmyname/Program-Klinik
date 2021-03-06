<?php
include('../inc/koneksi.php');
// include('./layout/header.php');
 
session_start();
  
if (empty($_SESSION['user'])) {
    die ("<script>alert('Anda Belum Login')</script><script>document.location='../admin/index.php';</script>");
}
if($_SESSION['role']!="dokter"){
    Die("anda bukan dokter");//jika bukan admin maka jangan lanjut..
    }
// echo $_SESSION["user"];
// exit;
$sql = "SELECT * from tb_pasien";
$data = $db->prepare($sql);
$data->execute();
$hasil = $data->fetch();
?>
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
 
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
 
     <title>Halaman Dokter</title>
 
     <!-- Custom fonts for this template-->
     <link href="../assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
         
     <!-- Custom styles for this template-->
     <link href="../assets/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
     <link rel="icon" href="../assets/img/logs1.png">
 
 </head>
 
 <body id="page-top">
 
     <!-- Page Wrapper -->
     <div id="wrapper">
 
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
             <!-- Sidebar - Brand -->
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index-dokter.php">
                <div class="sidebar-brand-icon">
                <i class="bi bi-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dokter</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index-dokter.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Dashboard</span></a>
             </li>
 
             <!-- Divider -->
             <hr class="sidebar-divider">
 
             <!-- Heading -->
             <div class="sidebar-heading">
                 Tampilan Dokter
             </div>
 
             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                     aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-fw fa-cog"></i>
                     <span>Input Riwayat Medis</span>
                 </a>
                 <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">-</h6>
                         <a class="collapse-item" href="riwayat-medis.php">Riwayat Medis</a>
                         <!-- <a class="collapse-item" href="../dokter/i-tgl-periksa.php">Input Tanggal Periksa</a> -->
                     </div>
                 </div>
             </li>
 
             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">
 
             <!-- Sidebar Toggler (Sidebar) -->
             <div class="text-center d-none d-md-inline">
                 <button class="rounded-circle border-0" id="sidebarToggle"></button>
             </div>
 
         </ul>
         <!-- End of Sidebar -->
 
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
 
             <!-- Main Content -->
             <div id="content">
 
                 <!-- Topbar -->
                 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 
                     <!-- Sidebar Toggle (Topbar) -->
                     <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                         <i class="fa fa-bars"></i>
                     </button>
 
                     <!-- Topbar Navbar -->
                     <ul class="navbar-nav ml-auto">
 
                         <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                         <li class="nav-item dropdown no-arrow d-sm-none">
                             <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-search fa-fw"></i>
                             </a>
                             <!-- Dropdown - Messages -->
                             <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                 <form class="form-inline mr-auto w-100 navbar-search">
                                     <div class="input-group">
                                         <input type="text" class="form-control bg-light border-0 small"
                                             placeholder="Search for..." aria-label="Search"
                                             aria-describedby="basic-addon2">
                                         <div class="input-group-append">
                                             <button class="btn btn-primary" type="button">
                                                 <i class="fas fa-search fa-sm"></i>
                                             </button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </li>
 
                         <div class="topbar-divider d-none d-sm-block"></div>
 
                         <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="mr-2 d-none d-lg-inline text-gray-600 small"><div style="text-transform:uppercase"><?php echo $_SESSION['user']; ?></div></span>
                                 <img class="img-profile rounded-circle"
                                     src="../assets/sbadmin/img/undraw_profile.svg">
                             </a>
                             <!-- Dropdown - User Information -->
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                 <!-- <a class="dropdown-item" href="../admin/update_profil.php">
                                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Profile
                                 </a> -->
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="../admin/logout.php" data-toggle="modal" data-target="#logoutModal">
                                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Logout
                                 </a>
                             </div>
                         </li>
 
                     </ul>
 
                 </nav>
<div class="container-fluid">
<div class="card-body">
    <?php
    $cari = $_POST['cari'];
    $query="select * from tb_pasien where no_rkm_medis like '%$cari%' OR nama_pasien like '%$cari%' ORDER BY `tb_pasien`.`nama_pasien` ASC LIMIT 0,7";
    $hasil=$db->prepare($query);
    $hasil->execute();
    ?>
<form action="riwayat-medis.php" method="post">
    <div class="row">
        <hr>
                <table id="data-tables" class="table table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>No Rekam Medis</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Penanggung Jawab</th>
                        <th>No KTP</th>
                        <th>No Hp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <?php
                    $sql = "select * from tb_pasien";
                    $data = $db->prepare($sql);
                    $data->execute();
                    $no=1;
                    while($baris = $data->fetch()){
                    ?>
                    <tr align="center">
                        <th><?= $no?></th>
                        <th><?= $baris['no_rkm_medis']?></th>
                        <th><?= $baris['nama_pasien']?></th>
                        <th><?= $baris['jk']?></th>
                        <th><?= $baris['alamat']?></th>
                        <th><?= $baris['tgl_lahir']?></th>
                        <th><?= $baris['nm_penjab']?></th>
                        <th><?= $baris['nik']?></th>
                        <th><?= $baris['no_hp']?></th>
                        <th width="10%"><a href="v-riwayat-medis.php?id=<?= $baris['no_rkm_medis'] ?>" class="btn btn-warning btn-circle">
                        <i class="bi bi-eye d-flex justify-content-between"></i>
                                    </a></h6> | <a href="i-riwayat-medis.php?id=<?= $baris['no_rkm_medis'] ?>" class="btn btn-warning btn-circle">
                        <i class="bi bi-pencil-square d-flex justify-content-between"></i>
                                    </a></h6>
                        </th>
                    </tr>
                    <?php $no++ ;}?>
            </table>
</div>    </div>
</div>
            </div>
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SMK Insan Pembangunan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../admin/logout.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="../assets/sbadmin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="../assets/sbadmin/js/demo/chart-pie-demo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript"> 
    $(document).ready(function () {
        $('#data-tables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
    </script>

</body>

</html>