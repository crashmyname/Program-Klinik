<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

?>
<div class="container">
<form action="../admin/actdokter.php" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Dokter</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" required/>
  </div>
  <label class="form-label" for="form5Example1">Hari Kerja</label>
  <select class="form-select" aria-label="Default select example" name="hk" required>
  <option selected required></option>
  <option value="Senin">Senin</option>
  <option value="Selasa">Selasa</option>
  <option value="Rabu">Rabu</option>
  <option value="Kamis">Kamis</option>
  <option value="Jumat">Jumat</option>
  <option value="Sabtu">Sabtu</option>
  <option value="Minggu">Minggu</option>
  <option value="Setiap Hari">Setiap hari</option>
  </select>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Jam Mulai</label>
    <input type="time" id="form5Example1" class="form-control" name="jm" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Jam Selesai</label>
    <input type="time" id="form5Example1" class="form-control" name="js" required/>
    </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Poli</label>
    <select class="form-select" aria-label="Default select example" name="poli" value="" required>
    <?php
    $sql = "select * from tb_poli";
    $data = $db->prepare($sql);
    $data->execute();
    while($baris = $data->fetch()){
    ?>
    <option value="<?= $baris['nm_poli']?>"><?= $baris['nm_poli']?></option>
    <?php ;} ?>
    </select>

  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO HP</label>
    <input type="text" id="form5Example1" class="form-control" name="no_hp" required/>
  </div>
  <button class="btn btn-info btn-icon-split position-relative">
    <span class="icon text-white-50">
      <i class="bi bi-plus-square"></i>
    </span>
      <span class="text">Tambah Data
    </span>
  </button>
      <a href="../admin/data-dokter.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="bi bi-arrow-left-square"></i>
          </span>
          <span class="text">Kembali</span>
      </a>
