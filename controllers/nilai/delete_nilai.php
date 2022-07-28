<?php
include_once '../../config/config.php';

if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("DELETE FROM nilai_akhir WHERE nisn = ?");
    $stmt->bind_param("s", $nisn);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../nilai_akhir.php");
    } else {
        throw new Exception("Hapus Data Guru Gagal");
    }
}
