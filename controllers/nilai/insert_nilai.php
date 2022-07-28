<?php
include_once '../../config/config.php';

if (isset($_POST['submitFormTambahNilaiAkhir'])) {
    $conn = connect_to_database();

    $stmt = $conn->prepare(
        "INSERT INTO nilai_akhir(
            nisn, 
            nama_mapel, 
            nilai_mapel, 
            id_tahun_ajar) 
        VALUES(?,?,?,?)"
    );
    $stmt->bind_param("sssi", $nisn, $namaMapel, $nilaiMapel, $tahunAjar);

    // set nilai untuk parameter
    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bIndo'];
    $namaMapel = "B.INDO";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bInggris'];
    $namaMapel = "B.INGGRIS";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['bSunda'];
    $namaMapel = "B.SUNDA";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['ipa'];
    $namaMapel = "IPA";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['ips'];
    $namaMapel = "IPS";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['matematika'];
    $namaMapel = "MATEMATIKA";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pai'];
    $namaMapel = "PAI";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pjok'];
    $namaMapel = "PJOK";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['pkn'];
    $namaMapel = "PKN";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['prakarya'];
    $namaMapel = "PRAKARYA";
    $stmt->execute();

    $nisn = $_POST['nisn'];
    $tahunAjar = $_POST['tahunAjar'];
    $nilaiMapel = $_POST['sbk'];
    $namaMapel = "SBK";
    $stmt->execute();

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../../nilai_akhir.php");
    } else {
        throw new Exception("Tambah Nilai Siswa Gagal");
    }
}
