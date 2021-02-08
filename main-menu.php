<?php
include 'session.php';
$id = $_SESSION['id'];
include 'config/koneksi.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <style>
    .underline {
      text-decoration: underline;
    }

    .item {
      color: white !important;
    }
  </style>
  <title>Main Menu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a3737">
    <a class="navbar-brand font-weight-bold mx-5" href="main-menu.php">Worked.</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link item underline" href="main-menu.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link item" href="#">Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link item" href="#">Solutions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link item" href="#">Guide</a>
      </li>
      <li class="nav-item">
        <a class="nav-link item" href="#">Blog</a>
      </li>
    </ul>
    <a href="biodata.php" class="mx-5 btn btn-light">Profile</a>
    <a href="config/logout.php" class="btn btn-outline-light mr-4">Logout</a>
  </nav>

  <div class="container my-5">
    <div class="row d-flex justify-content-center ">
      <div class="card col-lg-10 p-4 bg-dark text-white">
        <h2 class="text-center">Tambah Perusahaan</h2>

        <form action="config/add_perusahaan.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="namaperusahaan">Nama Perusahaan</label>
              <input type="text" class="form-control" name="namaperusahaan" id="namaperusahaan" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group col-md-12">
              <label for="alamatperusahaan">Alamat Perusahaan</label>
              <input type="text" class="form-control" name="alamatperusahaan" id="alamatperusahaan" placeholder="Alamat Perusahaan" required>
            </div>
            <div class="form-group col-md-12">
              <label for="gajiperusahaan">Gaji Perusahaan</label>
              <input type="number" class="form-control" name="gajiperusahaan" id="gajiperusahaan" placeholder="Gaji Perusahaan" required>
            </div>
            <div class="form-group col-md-12">
              <label for="tentangperusahaan">Tentang Perusahaan</label>
              <input type="text" class="form-control" name="tentangperusahaan" id="tentangperusahaan" placeholder="Tentang Perusahaan" required>
            </div>
            <div class="form-group col-md-12">
              <label for="logoperusahaan">Logo Perusahaan</label>
              <input type="file" class="form-control" name="logoperusahaan" id="logoperusahaan" required>
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-outline-light">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <?php
  try {
    $getData = "SELECT * FROM `daftar_perusahaan`";
    $qData = $conn->prepare($getData);
    $qData->execute();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  ?>


  <div class="row d-flex justify-content-center align-items-center text-white my-2" style="background-color: #3a3737; height: 100%">
    <div class="container">
      <div class="row mt-2">
        <h2>Lowongan pekerjaan yang mungkin cocok untuk anda.</h1>
      </div>


      <?php foreach ($qData as $listPerusahaan) : ?>
        <?php

        $namaPer = $listPerusahaan['nama_perusahaan'];
        $alamat = $listPerusahaan['alamat_perusahaan'];
        $gaji = $listPerusahaan['gaji_perusahaan'];
        $tentang = $listPerusahaan['tentang_perusahaan'];
        $logo = $listPerusahaan['logo'];
        $idPer = $listPerusahaan['id_perusahaan'];
        ?>




        <div class="row d-flex flex-row mt-5 py-3">
          <div class="col-md-6 d-flex justify-content-center">
            <img src="<?php echo $logo ?>" width="200" height="200" alt="">
          </div>
          <div class="col-md-6 d-flex flex-column">
            <h1><?php echo $namaPer ?></h1>
            <p><?php echo $alamat ?></p>
            <p style="color: rgb(0, 255, 0);">Gajih Rp <?php echo $gaji ?></p>
            <p><?php echo $tentang ?>
            </p>

            <div class="d-flex justify-content-around">
              <form action="edit_perusahaan.php" method="POST">
                <input type="hidden" name="idPer" value="<?php echo $idPer ?>">
                <input type="hidden" name="namaPer" value="<?php echo $namaPer ?>">
                <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
                <input type="hidden" name="gaji" value="<?php echo $gaji ?>">
                <input type="hidden" name="tentang" value="<?php echo $tentang ?>">
                <button type="submit" class="btn btn-warning">Edit</button>
              </form>
              <form action="config/delete.php" method="POST">
                <input type="hidden" name="idPer" id="idPer" value="<?php echo $idPer ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 bg-dark text-white">
      <p class="text-center my-3">
        @Copyright by 18111068_Irpan Aprialdi_TIFRP18CIDB_UASWEB1
      </p>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>