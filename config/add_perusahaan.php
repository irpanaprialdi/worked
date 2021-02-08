<?php
require_once 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['namaperusahaan'];
$alamat = $_POST['alamatperusahaan'];
$gaji = $_POST['gajiperusahaan'];
$tentang = $_POST['tentangperusahaan'];
$namaLogo = $_FILES['logoperusahaan']['name'];
$tmpName = $_FILES['logoperusahaan']['tmp_name'];


try {
    $q = $conn->prepare(
        "INSERT INTO `daftar_perusahaan` (`id_user`, `nama_perusahaan`, `alamat_perusahaan`, `gaji_perusahaan`, `tentang_perusahaan`, `logo`) VALUES (?, ?, ?,?,?, ?)"
    );
    $q->execute([$id, $nama, $alamat, $gaji, $tentang, 'images/' . $namaLogo]);
    move_uploaded_file($tmpName, '../images/' . $namaLogo);
    header("Location: ../index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
