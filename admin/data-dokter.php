<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');
?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dokter</h1>
<p class="mb-4">Halaman yang menampilkan seluruh data pasien.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex justify-content-end" >
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="../admin/idata-dokter.php" class="btn btn-success btn-circle">
        <i class="bi bi-plus-square d-flex justify-content-end"></i>
                                    </a></h6>&nbsp &nbsp
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Hari Kerja</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Poli</th>
                        <th>No Hp Dokter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <?php
                    $sql = "select * from tb_dokter";
                    $data = $db->prepare($sql);
                    $data->execute();
                    $no=1;
                    while($baris = $data->fetch()){
                    ?>
                    <tr>
                        <th><?= $no?></th>
                        <th><?= $baris['nm_dokter']?></th>
                        <th><?= $baris['hari_kerja']?></th>
                        <th><?= $baris['jam_mulai']?></th>
                        <th><?= $baris['jam_selesai']?></th>
                        <th><?= $baris['poli']?></th>
                        <th><?= $baris['no_hp']?></th>
                        <th><a href="e-datadokter.php?id=<?= $baris['kd_dokter'] ?>" class="btn btn-warning btn-circle">
        <i class="bi bi-pencil-square d-flex justify-content-end"></i>
                                    </a></h6>
                        <a href="delete-dokter.php?id=<?= $baris['kd_dokter'] ?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Yakin data ingin dihapus?')">
                        <i class="bi bi-trash d-flex justify-content-end"></i>
                                    </a></h6></th>
                    </tr>
                    <?php $no++ ;}?>
                </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php 
include('../admin/layout/footer.php');
// include('../admin/layout/scf.php');

?>