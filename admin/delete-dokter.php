<?php
include('../inc/koneksi.php');

$sql = "DELETE from tb_dokter where kd_dokter='$_GET[id]'";
$data = $db->prepare($sql);
                    $data->execute();
                    echo "<script>alert('Data Berhasil Dihapus')</script>";
                    echo "<script>document.location='../admin/data-dokkter.php';</script>";

                    ?>