<?php
include_once '../../config/config.php';

if (isset($_GET['id_tahun_ajar'])) {
    $id_tahun_ajar= $_GET['id_tahun_ajar'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("DELETE FROM tahun_ajar WHERE id_tahun_ajar = ?");
    $stmt->bind_param("s", $id_tahun_ajar);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../tahun_ajaran.php");
    } else {
        throw new Exception("Hapus Data Tahun Ajaran Gagal");
    }
}