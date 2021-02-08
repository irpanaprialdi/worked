<?php
require_once "koneksi.php";

$username = $_POST["username"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$password = $_POST["password"];


if (isset($_POST['register'])) {
    try {
        $qUser = $conn->prepare("INSERT INTO user VALUES (NULL, ?, ?, SHA1(?));
    INSERT INTO `biodata` (`id_biodata`, `id_user`, `alamat`) VALUES (NULL, LAST_INSERT_ID(), ?);");
        $qUser->execute([$username, $email,  $password, $alamat]);
        echo "<script>
            alert('Sukses');
            window.location.replace('../login.php');
        </script>";
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
