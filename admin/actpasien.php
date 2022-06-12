<?php
include('../inc/koneksi.php');

  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $almt = $_POST['alamat'];
  $tgl = $_POST['tgl_lahir'];
  $penjab = $_POST['penjab'];
  $nik = $_POST['nik'];
  $no = $_POST['no_hp'];
  
 $sql = "INSERT INTO tb_pasien (`no_rkm_medis`, `nama_pasien`, `jk`, `alamat`, `tgl_lahir`, `nm_penjab`, `nik`, `no_hp`) VALUES ('','$nama','$jk','$almt','$tgl','$penjab','$nik','$no')";
 $data = $db->prepare($sql);
 $data->execute();
 header('location:../admin/data-pasien.php');
?>