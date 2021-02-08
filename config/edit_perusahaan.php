<?php
require_once 'koneksi.php';

$idPer = $_POST['idPer'];
$namaPer = $_POST['namaPer'];
$alamat = $_POST['alamat'];
$gaji = $_POST['gaji'];
$tentang = $_POST['tentang'];


try {
    $q = $conn->prepare(
        "UPDATE `daftar_perusahaan` SET `nama_perusahaan`=?,`alamat_perusahaan`=?,`gaji_perusahaan`=?,`tentang_perusahaan`=? WHERE `id_perusahaan` = ?"
    );
    $q->execute([$namaPer, $alamat, $gaji, $tentang, $idPer]);
    echo "<script>
alert('Sukses Edit');
window.location.replace('../main-menu.php');
</script>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
