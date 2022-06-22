<?php

include('../inc/koneksi.php');

  $nama = $_POST['nama'];

  $query = "UPDATE `tb_poli` SET `nm_poli`='$nama' WHERE `kd_poli`='$_POST[id]'";
  $data = $db->prepare($query);
  $data->execute();

//   var_dump($data);
  echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<script>document.location='../admin/data-poli.php';</script>";
?>