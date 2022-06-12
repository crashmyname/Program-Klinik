<?php
include('./layout/header.php');

$s = date('Y-m-d');
$query = "SELECT * from booking_registrasi where tgl_booking='$s'";
$data = $db->prepare($query);
$data->execute();
$count=$data->rowCount();

if($count['nama_poli']=='Poli Anak'){
  echo rowCount('Poli Anak');
}else if($count['nama_poli']=='Poli Obgyn'){
  echo rowCount('Poli Obgyn');
}
?>
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $count?></h3>

                <p>Antrian Poli Anak</p>
              </div>
              <div class="icon">
              <i class="ion ion-plus-round"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $count?></h3>

                <p>Antrian Poli Obgyn</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $count?></h3>

                <p>Antrian Imunisasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-happy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $count?></h3>

                <p>Total Antrian</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people-outline"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->
        </div>
</section>
</div>
<?php

include('./layout/footer.php');

?>