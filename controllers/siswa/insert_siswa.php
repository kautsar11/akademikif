<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormTambahSiswa'])) {
    $nisn = $_POST['siswaNisn'];
    $nama = strtoupper($_POST['siswaNama']);
    $kelas = $_POST['siswaKelas'];

    $conn = connect_to_database();

    $stmt = $conn->prepare("INSERT INTO siswa VALUES(?,?,?)");
    $stmt->bind_param("sss", $nisn, $nama, $kelas);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../siswa.php");
    } else {
        throw new Exception("Tambah Data Siswa Gagal");
    }
}
