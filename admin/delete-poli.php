<?php
include('../inc/koneksi.php');

$sql = "DELETE from tb_poli where kd_poli='$_GET[id]'";
$data = $db->prepare($sql);
                    $data->execute();
                    echo "<script>alert('Data Berhasil Dihapus')</script>";
                    echo "<script>document.location='../admin/data-poli.php';</script>";

                    ?>