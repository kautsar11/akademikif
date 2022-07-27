<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahMapel'])) {
    $namaMapelSebelumDiubah = $_GET['nama_mapel'];
    $kkm = $_POST['kkm_mapel'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("UPDATE mata_pelajaran SET kkm_mapel = ? WHERE nama_mapel = ?");
    $stmt->bind_param("ss", $kkm, $$namaMapelSebelumDiubah);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../mata_pelajaran.php");
    } else {
        throw new Exception("Ubah Data Mata pelajaran Gagal");
    }
}
