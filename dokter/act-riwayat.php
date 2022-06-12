<?php
include('./inc/koneksi.php');

$no = $_POST['norekam'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$keluhan = $_POST['keluhan'];
$resep = $_POST['resep'];

$sql = "INSERT into tb_rekam_medis values('','$no','$nama','$umur','$keluhan','$resep')";
$data = $db->prepare($sql);
$data->execute();

header('location:i-riwayat-medis.php');

?>