<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Daftar Terlebih Dahulu</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="assets/css/roboto.css" rel="stylesheet">

    <!-- Material Icon Css -->
    <link href="assets/css/material-icon.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/theme-green.css" rel="stylesheet" />
    <link rel="icon" href="assets/img/logs1.png">
</head>

<body class="login-page">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Memproses data ke server.....</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <div class="login-box" style="margin: 20px;">
        <div class="logo">
            <p  class="align-center"><img src="assets/img/logs1.png" width="150px"></p>
        </div>

        <div class="card rounded">

            <div class="body">
            <form action="./inc/daftarpasien.php" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Nama Pasien</label>
    <input type="text" id="form5Example1" class="form-control" name="nama" required/>
  </div>
  <label class="form-label" for="form5Example1">Jenis Kelamin</label>
  <select class="form-select" aria-label="Default select example" name="jk" required>
  <option selected required>-</option>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  </select>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Alamat</label>
    <input type="text" id="form5Example1" class="form-control" name="alamat" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Tanggal Lahir</label>
    <input type="date" id="form5Example1" class="form-control" name="tgl_lahir" required/>
    </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">Penanggung Jawab</label>
    <input type="text" id="form5Example1" class="form-control" name="penjab" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO KTP</label>
    <input type="text" id="form5Example1" class="form-control" name="nik" required/>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form5Example1">NO HP</label>
    <input type="text" id="form5Example1" class="form-control" name="no_hp" required/>
  </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <input class="btn btn-block bg-pink waves-effect" type="submit" name="signup" value="DAFTAR">
                        </div>
                    </div>

                    
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="login.php">Sudah terdaftar Silahkan Login?</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
</body>