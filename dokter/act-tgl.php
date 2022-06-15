<?php
include('../inc/koneksi.php');

$tgl = $_POST['tgl-periksa'];

$sql="UPDATE booking_registrasi SET 'tgl_periksa'='$tgl'";
$data = $db->prepare($sql);
$data->execute();
header('location:i-tgl-periksa.php');

?>