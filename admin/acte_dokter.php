<?php

include('../inc/koneksi.php');

  $nama = $_POST['nama'];
  $hk = $_POST['hk'];
  $jm = $_POST['jm'];
  $js = $_POST['js'];
  $poli = $_POST['poli'];
  $no = $_POST['no_hp'];

  $query = "UPDATE `tb_dokter` SET `nm_dokter`='$nama',`hari_kerja`='$hk',`jam_mulai`='$jm',`jam_selesai`='$js',`poli`='$poli',`no_hp`='$no' WHERE `kd_dokter`='$_POST[id]'";
  $data = $db->prepare($query);
  $data->execute();

  // var_dump($data);
  echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<script>document.location='../admin/data-dokter.php';</script>";
?>