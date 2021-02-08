<?php
session_start();
require_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $sql = "SELECT * FROM `user` WHERE `email` = ? AND `password` = SHA1(?)";
        $q = $conn->prepare($sql);
        $q->execute([$email, $password]);
        foreach ($q as $data) {
            $id = $data['id_user'];
        }
        $count = $q->rowCount();
        if ($count == 1) {
            $_SESSION['id'] = $id;
            echo "<script>
            alert('Sukses');
            window.location.replace('../main-menu.php');
            </script>";
            return;
        } else {
            echo "<script>
       alert('Username atau Password salah!');
       window.location.replace('../login.php');
       </script>";
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
