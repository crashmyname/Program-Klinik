<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');
?>

<div class="container-fluid">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Riwayat Pendaftaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    
                  <tr>
                    <th>No</th>
                    <th>No Rekam Medis</th>
                    <th>Nama Pasien</th>
                    <th>Nama Poli</th>
                    <th>Tanggal Booking</th>
                    <th>Tanggal Periksa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $s = $_SESSION['user'];
                    $sql = "SELECT * FROM booking_registrasi";
                    $data = $db->prepare($sql);
                    $data->execute();
                    $no = 1;
                    while($hasil = $data->fetch()){
                    ?>
                  <tr>
                    <td><?= $no?></td>
                    <td><?= $hasil['no_rkm_medis']?></td>
                    <td><?= $hasil['nama_pasien']?></td>
                    <td><?= $hasil['nama_poli']?></td>
                    <td><?= $hasil['tgl_booking']?></td>
                    <td><?= $hasil['tgl_periksa']?></td>
                  </tr>
                    </tbody>
                  <?php $no++ ;} ?></table>

</div>
<?php 
include('../admin/layout/footer.php');
// include('../admin/layout/scf.php');

?>