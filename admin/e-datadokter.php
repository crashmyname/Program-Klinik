<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

$query="select * from tb_dokter where kd_dokter='$_GET[id]'";
$data=$db->prepare($query);
$data->execute();
$baris=$data->fetch();

?>
<div class="container">
<form action="../admin/acte_dokter.php" method="POST">
  <!-- Name input -->
  <input type="hidden" name="id" value="<?= $baris['kd_dokter']?>">
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Dokter</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" value="<?= $baris['nm_dokter'] ?>" required/>
  </div>
  <label class="form-label" for="form5Example1">Hari Kerja</label>
  <select class="form-select" aria-label="Default select example" name="hk" value="<?= $baris['hari_kerja'] ?>" required>
  <option selected required><?= $baris['hari_kerja'] ?></option>
  <option value="Senin">Senin</option>
  <option value="Selasa">Selasa</option>
  <option value="Rabu">Rabu</option>
  <option value="Kamis">Kamis</option>
  <option value="Jumat">Jumat</option>
  <option value="Sabtu">Sabtu</option>
  <option value="Minggu">Minggu</option>
  </select>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Jam Mulai</label>
    <input type="time" id="form5Example1" class="form-control" name="jm" value="<?= $baris['jam_mulai'] ?>" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Jam Selesai</label>
    <input type="time" id="form5Example1" class="form-control" name="js" value="<?= $baris['jam_selesai'] ?>" required/>
    </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Poli</label>
    <input type="text" id="form5Example1" class="form-control" name="poli" value="<?= $baris['poli'] ?>" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO HP</label>
    <input type="text" id="form5Example1" class="form-control" name="no_hp" value="<?= $baris['no_hp'] ?>" required/>
  </div>
  <button class="btn btn-info btn-icon-split position-relative">
    <span class="icon text-white-50">
      <i class="bi bi-plus-square"></i>
    </span>
      <span class="text">Ubah Data
    </span>
  </button>
      <a href="../admin/data-pasien.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="bi bi-arrow-left-square"></i>
          </span>
          <span class="text">Kembali</span>
      </a>
