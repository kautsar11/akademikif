<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormUbahNilai'])) {
    $conn = connect_to_database();

    $stmt = $conn->prepare(
        "UPDATE nilai_akhir 
        SET nilai_mapel = ?, 
        id_tahun_ajar = ? 
        WHERE nama_mapel = ? AND nisn = ?"
    );
    $stmt->bind_param("siss", $nilaiMapel, $tahunAjar, $namaMapel, $nisn);

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bIndo'];
    $namaMapel = "B.INDO";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bInggris'];
    $namaMapel = "B.INGGRIS";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bSunda'];
    $namaMapel = "B.SUNDA";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['ipa'];
    $namaMapel = "IPA";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['ips'];
    $namaMapel = "IPS";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['matematika'];
    $namaMapel = "MATEMATIKA";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pai'];
    $namaMapel = "PAI";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pjok'];
    $namaMapel = "PJOK";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pkn'];
    $namaMapel = "PKN";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['prakarya'];
    $namaMapel = "PRAKARYA";
    $stmt->execute();

    $nisn = $_GET['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['sbk'];
    $namaMapel = "SBK";
    $stmt->execute();

    header("Location:../../nilai_akhir.php");
}
