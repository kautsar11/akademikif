<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahSiswa'])) {
    $nisnSiswaSebelumDibuah = $_GET['nisn'];
    $nisn = $_POST['siswaNisn'];
    $nama = $_POST['siswaNama'];
    $kelas = $_POST['siswaKelas'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("UPDATE siswa SET nisn = ?, nama_siswa = ?,nama_kelas = ? WHERE nisn = ?");
    $stmt->bind_param("ssss", $nisn, $nama, $kelas, $nisnSiswaSebelumDibuah);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../siswa.php");
    } else {
        throw new Exception("Ubah Data Siswa Gagal");
    }
}
