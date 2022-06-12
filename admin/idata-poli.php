<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

?>
<div class="container">
<form>
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Poli</label>
    <input type="text" id="form5Example1" class="form-control"/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Jenis Pemeriksaan</label>
    <input type="text" id="form5Example1" class="form-control"/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Dokter</label>
    <input type="text" id="form5Example1" class="form-control"/>
  </div>
  <button class="btn btn-info btn-icon-split position-relative"><span class="icon text-white-50">
                                            <i class="bi bi-plus-square"></i>
                                        </span>
                                        <span class="text">Tambah Data</span></button>
                                        <a href="../admin/data-poli.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="bi bi-arrow-left-square"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
