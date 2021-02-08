<?php
session_start();
if (isset($_SESSION['id'])) {
  header('Location: main-menu.php');
}

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
  <title>Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2d3e73">
    <a class="navbar-brand font-weight-bold mx-5" href="index.php">Worked.</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link item underline" href="index.php">Home</a>
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
    <a href="login.php" class="btn btn-light mr-4">Log In</a>
    <a href="signup.php" class="btn btn-outline-light mr-4">Sign Up</a>
  </nav>
  <img src="images/city.png" style="position: absolute; z-index: 0; width: 100%;" height="1200px" />
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6 text-center">
        <h1 class="font-weight-bold">
          Modern City <br />
          In The World
        </h1>
      </div>
      <div class="col-md-6 text-center">
        <div class="col-md-6 d-flex flex-column justify-content-start">
          <p style="text-align: left">
            Teknologi sekarang sudah semakin maju bahkan sekarang smart city
            sudah mulai diterapkan entah itu di benua eropa ataupun benua
            asia
          </p>
          <a href="more-information.php" class="btn btn-primary border-0" style="background-color: #2d3e73; color: white; width: 70%">More Information!</a>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top: 40rem">
      <div class="col-md-4">
        <h3>Beberapa Perusahaan Teknologi Terkenal.</h3>
        <p>
          Perusahaan perusahaan ini sudah memiliki banyak produk produk
          terkenalnya mulai dari mesin pencarian pintar alat elektronik
          canggih dan bahkan sampai smart asistant.
        </p>
        <a href="more-information.php" class="btn btn-outline-primary">More Information</a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6" style="margin-top: 5rem">
            <div>
              <img src="images/icons8-google-240.png " style="width: 40px" />
              <h4>Google</h4>
              <p>
                adalah sebuah perusahaan multinasional Amerika Serikat yang
                berkekhususan pada jasa dan produk Internet. Produk-produk
                tersebut meliputi teknologi pencarian, komputasi web,
                perangkat lunak, dan periklanan daring.[10] Sebagian besar
                labanya berasal dari AdWords.
              </p>
              <a href="more-information.php" class="underline">More Information</a>
            </div>

            <div style="margin-top: 4rem">
              <img src="images/Intel.png" style="width: 40px" />
              <h4>Intel</h4>
              <p>
                adalah sebuah perusahaan multinasional yang berpusat di
                Amerika Serikat dan terkenal dengan rancangan dan produksi
                mikroprosesor dan mengkhususkan dalam sirkuit terpadu. Intel
                juga membuat kartu jaringan, chipset papan induk, komponen,
                dan alat lainnya. Intel memiliki projek riset yang maju
                dalam seluruh aspek produksi semikonduktor, termasuk MEMS.
              </p>
              <a href="more-information.php" class="underline">More Information</a>
            </div>
          </div>
          <div class="col-md-6" style="margin-top: 9rem">
            <div>
              <img src="images/nvidiareal.png" style="width: 40px" />
              <h4>Nvidia</h4>
              <p>
                adalah perusahaan teknologi multinasional Amerika yang
                didirikan di Delaware dan berbasis di Santa Clara,
                California.Ini merancang unit pemroses grafis (GPU) untuk
                pasar permainan dan profesional, serta unit system on a chip
                (SoC) untuk komputasi seluler dan pasar otomotif. Lini
                produk GPU utamanya, berlabel "GeForce", bersaing langsung
                dengan produk "Radeon" Advanced Micro Devices (AMD). Nvidia
                memperluas kehadirannya di industri permainan dengan
                perangkat genggam Shield Portable, Shield Tablet, dan Shield
                Android TV serta layanan cloud permainan GeForce Now.
              </p>
              <a href="more-information.php" class="underline">More Information</a>
            </div>

            <div style="margin-top: 4rem">
              <img src="images/Microsoft.png" style="width: 40px" />
              <h4>Microsoft</h4>
              <p>
                adalah sebuah perusahaan multinasional Amerika Serikat yang
                berkantor pusat di Redmond, Washington, Amerika Serikat yang
                mengembangkan, membuat, memberi lisensi, dan mendukung
                berbagai produk dan jasa terkait dengan komputer. Perusahaan
                ini didirikan oleh Bill Gates dan Paul Allen pada tanggal 4
                April 1975. Microsoft merupakan pembuat perangkat lunak
                terbesar di dunia menurut pendapatannya.Microsoft juga
                merupakan salah satu perusahaan paling bernilai di dunia.
              </p>
              <a href="more-information.php" class="underline">More Information</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
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