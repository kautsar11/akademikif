<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahMapel'])) {
    $namaMapel = $_GET['nama_mapel'];
    $kkm = $_POST['kkm'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("UPDATE mata_pelajaran SET kkm_mapel = ? WHERE nama_mapel = ?");
    $stmt->bind_param("ss", $kkm, $namaMapel);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../mata_pelajaran.php");
    } else {
        throw new Exception("Ubah Data Mata pelajaran Gagal");
    }
}
