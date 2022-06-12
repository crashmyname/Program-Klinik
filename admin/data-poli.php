<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');

include('../inc/koneksi.php');

?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Poli</h1>
<p class="mb-4">Halaman yang menampilkan seluruh data poli.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-end" >
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="../admin/idata-poli.php" class="btn btn-success btn-circle">
        <i class="bi bi-plus-square d-flex justify-content-end"></i>
                                    </a></h6>&nbsp &nbsp
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Name Poli</th>
                        <th>Jenis Pemeriksaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "select * from tb_poli";
                        $data=$db->prepare($query);
                        $data->execute();
                        $no = 1;
                        while($hasil=$data->fetch()){
                        ?>
                    <tr align="center">
                        <td><?= $no;?></td>
                        <td><?php echo $hasil['nm_poli']?></td>
                        <td><?php echo $hasil['jns-pemeriksaan']?></td>
                        <td><a href="#" class="btn btn-warning btn-circle">
        <i class="bi bi-pencil-square d-flex justify-content-end"></i>
                                    </a></h6>
                        <a href="#" class="btn btn-danger btn-circle">
                        <i class="bi bi-trash d-flex justify-content-end"></i>
                                    </a></h6></td>
                    </tr>
                    </tbody>
                    <?php $no++;} ?>
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