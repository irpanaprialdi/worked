<?php
include 'session.php';
require_once 'config/koneksi.php';
$id = $_SESSION['id'];
try {
  $sql = "SELECT user.username, user.id_user, biodata.alamat,user.password FROM user JOIN biodata ON user.id_user = biodata.id_user WHERE user.id_user = ?";
  $q = $conn->prepare($sql);
  $q->execute([$id]);
} catch (PDOException $e) {
  die($e->getMessage());
}
foreach ($q as $user) {
  $id_user = $user['id_user'];
  $username = $user['username'];
  $alamat = $user['alamat'];
  $password = $user['password'];
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
  <title>Biodata</title>
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
        <h2 class="text-center">Edit Biodata</h2>
        <form action="config/biodata.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" required value="<?php echo $username ?>">
            </div>
            <div class="form-group col-md-12">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Perusahaan" required value="<?php echo $alamat ?>">
            </div>
            <div class="form-group col-md-12">
              <label for="password_lama">Password Lama</label>
              <input type="password" class="form-control" name="password_lama" id="password_lama" placeholder="*****">
            </div>
            <div class="form-group col-md-12">
              <label for="password_baru">Password Baru</label>
              <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="*****">
            </div>
            <input type="hidden" name="id" value="<?php echo $id_user ?>">
            <input type="hidden" name="password" value="<?php echo $password ?>">
            <button type="submit" class="btn btn-outline-warning">Edit Biodata</button>
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
</body>

</html>