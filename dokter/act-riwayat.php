<?php
include('../inc/koneksi.php');

$no = $_POST['norekam'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$keluhan = $_POST['keluhan'];
$resep = $_POST['resep'];

$sql = "INSERT into tb_rekam_medis values('','$no','$nik','$nama','$umur','$keluhan','$resep')";
$data = $db->prepare($sql);
$data->execute();

header('location:riwayat-medis.php');

?>