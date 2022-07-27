<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormTambahTahunAjar'])) {
    $tahun_ajar = $_POST['tahunAjar'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("INSERT INTO tahun_ajar VALUES (NULL, ?)");
    $stmt->bind_param("s", $tahun_ajar);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../tahun_ajaran.php");
    } else {
        throw new Exception("Tambah Data Tahun Ajaran Gagal");
    }
}
