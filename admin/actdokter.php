<?php

include('../inc/koneksi.php');

  $nama = $_POST['nama'];
  $hk = $_POST['hk'];
  $jm = $_POST['jm'];
  $js = $_POST['js'];
  $poli = $_POST['poli'];
  $no = $_POST['no_hp'];

  $sql = "INSERT INTO tb_dokter (`kd_dokter`, `nm_dokter`, `hari_kerja`, `jam_mulai`, `jam_selesai`, `poli`, `no_hp`) VALUES ('','$nama','$hk','$jm','$js','$poli','$no')";
 $data = $db->prepare($sql);
 $data->execute();

  // var_dump($data);
  echo "<script>alert('Data Berhasil Ditambah')</script>";
echo "<script>document.location='../admin/data-dokter.php';</script>";
?>