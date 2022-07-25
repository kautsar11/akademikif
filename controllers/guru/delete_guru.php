<?php
include_once '../../config/config.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("DELETE FROM guru WHERE nip = ?");
    $stmt->bind_param("s", $nip);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../index.php");
    } else {
        throw new Exception("Hapus Data Guru Gagal");
    }
}
