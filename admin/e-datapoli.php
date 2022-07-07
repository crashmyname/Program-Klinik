<?php 
include('../admin/layout/header.php');
// include('../admin/layout/sch.php');
include('../inc/koneksi.php');

$query="select * from tb_poli where kd_poli='$_GET[id]'";
$data=$db->prepare($query);
$data->execute();
$baris=$data->fetch();

?>
<div class="container">
<form action="../admin/acte_poli.php" method="POST">
  <!-- Name input -->
  <input type="hidden" name="id" value="<?= $baris['kd_poli']?>">
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Poli</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" value="<?= $baris['nm_poli'] ?>" required/>
  </div>
  <button class="btn btn-info btn-icon-split position-relative">
    <span class="icon text-white-50">
      <i class="bi bi-plus-square"></i>
    </span>
      <span class="text">Ubah Data
    </span>
  </button>
      <a href="../admin/data-poli.php" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="bi bi-arrow-left-square"></i>
          </span>
          <span class="text">Kembali</span>
      </a>
