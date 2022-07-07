<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pasien</h1>
<p class="mb-4">Halaman yang menampilkan seluruh data pasien.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex justify-content-end" >
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="../admin/idata-pasien.php" class="btn btn-success btn-circle">
        <i class="bi bi-plus-square d-flex justify-content-end"></i>
                                    </a></h6>&nbsp &nbsp
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <div class="row">
            <table class="table table-bordered" id="data-tables" width="100%" cellspacing="0">
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
                        <th width="10%"><a href="e-datapasien.php?id=<?= $baris['no_rkm_medis'] ?>" class="btn btn-warning btn-circle">
        <i class="bi bi-pencil-square d-flex justify-content-between"></i>
                                    </a></h6>
                        <a href="delete-pasien.php?id=<?= $baris['no_rkm_medis'] ?>" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Yakin data ingin dihapus?')">
                        <i class="bi bi-trash d-flex justify-content-between"></i>
                                    </a></h6></th>
                    </tr>
                    <?php $no++ ;}?>
                </tfoot>
            </table>
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