<?php

$conn = connect_to_database();

function getRowDataGuru($nip)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM guru WHERE nip = ?");
    $stmt->bind_param("s", $nip);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

function getRowDataSiswa($nisn)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM siswa WHERE nisn = ?");
    $stmt->bind_param("s", $nisn);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

function getRowDataKelas($kelas)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT kelas.kelas, kelas.nip_wakel, guru.nama_guru 
        FROM kelas,guru
        WHERE guru.nip = kelas.nip_wakel AND kelas.kelas = ?"
    );
    $stmt->bind_param("s", $kelas);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

function getRowsKelas()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM kelas");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

function getRowsGuru()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM guru");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}
