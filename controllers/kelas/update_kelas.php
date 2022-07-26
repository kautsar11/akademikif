<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahKelas'])) {
    $kelasSebelumDibuah = $_GET['kelas'];
    $nipWakel = $_POST['kelasNamaWakel'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("UPDATE kelas SET nip_wakel = ? WHERE kelas = ?");
    $stmt->bind_param("ss", $nipWakel, $kelasSebelumDibuah);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../kelas.php");
    } else {
        throw new Exception("Ubah Data Kelas Gagal");
    }
}
