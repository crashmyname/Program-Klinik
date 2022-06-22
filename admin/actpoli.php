<?php
include('../inc/koneksi.php');

  $nama = $_POST['poli'];
  
 $sql = "INSERT INTO tb_poli (`kd_poli`, `nm_poli`, `kd_dokter`) VALUES ('','$nama','')";
 $data = $db->prepare($sql);
 $data->execute();
 header('location:../admin/data-poli.php');
?>