<?php
include('./inc/koneksi.php');
include('./layout/header.php');
$s = $_SESSION['user'];
$sql = "SELECT * from tb_pasien where nik='$s'";
$data = $db->prepare($sql);
$data->execute();
$hasil = $data->fetch();
$sql1 = "SELECT * from tb_poli";
$data1 = $db->prepare($sql1);
$data1->execute();
$hasil1 = $data1->fetch();
?>
<div class="container-fluid">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pendaftaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./inc/actbook.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Rekam Medis</label>
                    <input type="text" class="form-control" disabled value="<?= $hasil['no_rkm_medis']?>">
                    <input type="hidden" name="norekam" value="<?= $hasil['no_rkm_medis']?>">
                  </div>
                  <input type="hidden" name="nik" value="<?= $hasil['nik']?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" disabled value="<?= $hasil['nama_pasien']?>">
                    <input type="hidden" name="nama" value="<?= $hasil['nama_pasien']?>">
                  </div>
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Nama Poli</label>
                        <select class="form-control" name="poli">
                          <option value="Poli Anak">Poli Anak</option>
                          <option value="Poli Obgyn">Poli Obgyn</option>
                        </select>
                      </div>
</div>
 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Booking</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="tgl">
                  </div>
                  
                      <!-- select -->
<input type="hidden" name="time" value="<?php 
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
echo date('l, d-m-Y  H:i:s a'); // menampilkan jam sekarang">?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>

                    <?php

include('./layout/footer.php');

?>