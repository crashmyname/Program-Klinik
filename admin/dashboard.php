<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

$query = "select * from tb_pasien";
$data = $db->prepare($query);
$data->execute();
$count=$data->rowCount();
$query1 = "select * from tb_dokter";
$data1 = $db->prepare($query1);
$data1->execute();
$count1=$data1->rowCount();
$query3 = "select * from tb_poli";
$data3 = $db->prepare($query3);
$data3->execute();
$count3=$data3->rowCount();
?>
                 <!-- Begin Page Content -->
                 <div class="container-fluid">
                 <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Data Pasien</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-person-heart fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Dokter</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count1?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="bi bi-person-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Poli Yang ada</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count3?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="bi bi-hospital-fill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

                </div>
                <!-- End of Main Content -->
<?php 
include('../admin/layout/footer.php');
// include('../admin/layout/scf.php');

?>
            