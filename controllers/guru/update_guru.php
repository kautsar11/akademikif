<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahGuru'])) {
    $nipGuruSebelumDibuah = $_GET['nip'];
    $nip = $_POST['guruNip'];
    $nama = $_POST['guruNama'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("UPDATE guru SET nip = ?, nama_guru = ? WHERE nip = ?");
    $stmt->bind_param("sss", $nip, $nama, $nipGuruSebelumDibuah);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../index.php");
    } else {
        throw new Exception("Tambah Data Guru Gagal");
    }
}
