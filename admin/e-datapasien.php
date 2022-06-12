<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

$query="select * from tb_pasien where no_rkm_medis='$_GET[id]'";
$data=$db->prepare($query);
$data->execute();
$baris=$data->fetch();

?>
<div class="container">
<form action="../admin/acte_pasien.php" method="POST">
  <!-- Name input -->
  <input type="hidden" name="id" value="<?= $baris['no_rkm_medis']?>">
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Pasien</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" value="<?= $baris['nama_pasien'] ?>" required/>
  </div>
  <label class="form-label" for="form5Example1">Jenis Kelamin</label>
  <select class="form-select" aria-label="Default select example" name="jk" value="<?= $baris['jk'] ?>" required>
  <option selected required><?= $baris['jk'] ?></option>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Alamat</label>
    <input type="text" id="form5Example1" class="form-control" name="alamat" value="<?= $baris['alamat'] ?>" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Tanggal Lahir</label>
    <input type="date" id="form5Example1" class="form-control" name="tgl_lahir" value="<?= $baris['tgl_lahir'] ?>" required/>
    </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Penanggung Jawab</label>
    <input type="text" id="form5Example1" class="form-control" name="penjab" value="<?= $baris['nm_penjab'] ?>" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO KTP</label>
    <input type="text" id="form5Example1" class="form-control" name="nik" value="<?= $baris['nik'] ?>" required/>
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
