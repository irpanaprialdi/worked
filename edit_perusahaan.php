<?php
include 'session.php';
$idPer = $_POST['idPer'];
$namaPer = $_POST['namaPer'];
$alamatPer = $_POST['alamat'];
$gaji = $_POST['gaji'];
$tentangPer = $_POST['tentang'];
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
  <title>Edit Perusahaan</title>
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
        <h2 class="text-center">Edit Perusahaan</h2>

        <form action="config/edit_perusahaan.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="namaPer">Nama Perusahaan</label>
              <input type="text" class="form-control" name="namaPer" id="namaPer" placeholder="Nama Perusahaan" required value="<?php echo $namaPer ?>">
            </div>
            <div class="form-group col-md-12">
              <label for="alamat">Alamat Perusahaan</label>
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Perusahaan" required value="<?php echo $alamatPer ?>">
            </div>
            <div class="form-group col-md-12">
              <label for="gaji">Gaji Perusahaan</label>
              <input type="number" class="form-control" name="gaji" id="gaji" placeholder="Gaji Perusahaan" required value="<?php echo $gaji ?>">
            </div>
            <div class="form-group col-md-12">
              <label for="tentang">Tentang Perusahaan</label>
              <input type="text" class="form-control" name="tentang" id="tentang" placeholder="Tentang Perusahaan" required value="<?php echo $tentangPer ?>">
            </div>
            <input type="hidden" name="idPer" value="<?php echo $idPer ?>">
            <button type="submit" class="btn btn-outline-warning">Edit</button>
          </div>
        </form>
      </div>
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