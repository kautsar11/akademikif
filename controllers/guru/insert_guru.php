<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormTambahGuru'])) {
    $nip = $_POST['guruNip'];
    $nama = strtoupper($_POST['guruNama']);

    $conn = connect_to_database();

    $stmt =    $conn->prepare("INSERT INTO guru VALUES(?,?)");
    $stmt->bind_param("ss", $nip, $nama);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../index.php");
    } else {
        throw new Exception("Tambah Data Guru Gagal");
    }
}
