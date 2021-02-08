<?php
require_once 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];
$password = $_POST['password'];

try {

    if ($password_lama != '' || $password_baru != null) {
        if (sha1($password_lama) == $password) {
            $q = $conn->prepare("UPDATE `user` SET `username`= ?, `password`=SHA1(?) WHERE `id_user` = ?;
            UPDATE `biodata` SET `alamat`=? WHERE `id_user` = ?");
            $q->execute([$username, $password_baru, $id, $alamat, $id]);
            echo "<script>
                 alert('Sukses, biodata & password berubah');
                 window.location.replace('../main-menu.php');
                 </script>";
        } else {
            echo "<script>
         alert('Gagal, password salah');
         window.location.replace('../biodata.php');
         </script>";
        }
    } else {
        $q = $conn->prepare("UPDATE `user` SET `username`= ? WHERE `id_user` = ?;
    UPDATE `biodata` SET `alamat`=? WHERE `id_user` = ?");
        $q->execute([$username, $id, $alamat, $id]);
        echo "<script>
         alert('Sukses, biodata berubah');
         window.location.replace('../main-menu.php');
         </script>";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
