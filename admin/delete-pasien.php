<?php
include('../inc/koneksi.php');

$sql = "DELETE from tb_pasien where no_rkm_medis='$_GET[id]'";
$data = $db->prepare($sql);
                    $data->execute();
                    echo "<script>alert('Data Berhasil Dihapus')</script>";
                    echo "<script>document.location='../admin/data-pasien.php';</script>";

                    ?>