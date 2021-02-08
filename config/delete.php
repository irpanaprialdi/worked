<?php
require_once 'koneksi.php';

$id = $_POST['idPer'];


try {
    $getLogo = $conn->prepare("SELECT `logo` FROM `daftar_perusahaan` WHERE `id_perusahaan` = ?");
    $getLogo->execute([$id]);

    foreach ($getLogo as $query) {
        $logo = $query['logo'];
    }
    unlink('../' . $logo);
    $q = $conn->prepare("DELETE FROM `daftar_perusahaan` WHERE `id_perusahaan` = ?");
    $q->execute([$id]);
    header("Location: ../index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
