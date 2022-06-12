<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

?>
<div class="container">
<form action="../admin/actpasien.php" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Pasien</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" required/>
  </div>
  <label class="form-label" for="form5Example1">Jenis Kelamin</label>
  <select class="form-select" aria-label="Default select example" name="jk" required>
  <option selected required>-</option>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Alamat</label>
    <input type="text" id="form5Example1" class="form-control" name="alamat" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Tanggal Lahir</label>
    <input type="date" id="form5Example1" class="form-control" name="tgl_lahir" required/>
    </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Penanggung Jawab</label>
    <input type="text" id="form5Example1" class="form-control" name="penjab" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO KTP</label>
    <input type="text" id="form5Example1" class="form-control" name="nik" required/>
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
      <a href="../admin/data-pasien.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="bi bi-arrow-left-square"></i>
          </span>
          <span class="text">Kembali</span>
      </a>
