<?php
include('koneksi.php');

    $no = $_POST['norekam'];
    $nik = $_POST['nik'];
  $nm = $_POST['nama'];
  $pl = $_POST['poli'];
  $tgl = $_POST['tgl'];
  $time = $_POST['time'];

  $sql = "INSERT INTO booking_registrasi (`kd_booking`, `no_rkm_medis`, `nik`, `nama_pasien`, `nama_poli`, `tgl_booking`, `waktu_booking`, `tgl_periksa`) VALUES ('','$no','$nik','$nm','$pl','$tgl','$time','')";
  $data = $db->prepare($sql);
 $data->execute();
//  var_dump($data);
//  header('location:../index.php');
echo "<script>alert('Berhasil Daftar');</script>";
    echo "<script>document.location='../index.php';</script>";

?>