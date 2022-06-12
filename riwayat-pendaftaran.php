<?php
include('./inc/koneksi.php');
include('./layout/header.php');

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
                    $sql = "SELECT tb_pasien.nik , booking_registrasi.no_rkm_medis, booking_registrasi.nama_pasien, booking_registrasi.nama_poli, booking_registrasi.tgl_booking, booking_registrasi.tgl_periksa FROM tb_pasien , booking_registrasi where tb_pasien.nik='$s' AND booking_registrasi.nik='$s'";
                    $data = $db->prepare($sql);
                    $data->execute();
                    $no = 1;
                    while($hasil = $data->fetch()){
                    ?>
                  <tr>
                    <td><?= $no?></td>
                    <td><?= $hasil['no_rkm_medis']?>
                    </td>
                    <td><?= $hasil['nama_pasien']?></td>
                    <td><?= $hasil['nama_poli']?></td>
                    <td><?= $hasil['tgl_booking']?></td>
                    <td><?= $hasil['tgl_periksa']?></td>
                  </tr>
                  <?php ;} ?></table>

</div>

                    <?php

include('./layout/footer.php');

?>