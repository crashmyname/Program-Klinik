<?php

include('../inc/koneksi.php');

  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $almt = $_POST['alamat'];
  $tgl = $_POST['tgl_lahir'];
  $penjab = $_POST['penjab'];
  $nik = $_POST['nik'];
  $no = $_POST['no_hp'];

  $query = "UPDATE `tb_pasien` SET `nama_pasien`='$nama',`jk`='$jk',`alamat`='$almt',`tgl_lahir`='$tgl',`nm_penjab`='$penjab',`nik`='$nik',`no_hp`='$no' WHERE `no_rkm_medis`='$_POST[id]'";
  $data = $db->prepare($query);
  $data->execute();

  // var_dump($data);
  echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<script>document.location='../admin/data-pasien.php';</script>";
?>