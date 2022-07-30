<?php

$conn = connect_to_database();

// mendapatkan data guru tertentu
function getRowDataGuru($nip)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM guru WHERE nip = ?");
    $stmt->bind_param("s", $nip);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

// mendapatkan data siswa tertentu
function getRowDataSiswa($nisn)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM siswa WHERE nisn = ?");
    $stmt->bind_param("s", $nisn);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

// mendapatkan data kelas tertentu
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

// mendapatkan semua data kelas
function getRowsKelas()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM kelas ORDER BY kelas ASC");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

// mendapatkan semua data guru
function getRowsGuru()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM guru");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

// mendapatkan semua data siswa
function getRowsSiswa()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM siswa");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

// mendapatkan semua data tahun ajar
function getRowsTahunAjar()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tahun_ajar");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

// mendapatkan semua data mata pelajaran
function getRowsMapel()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM mata_pelajaran");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $result;
}

// mendapatkan data mapel tertentu
function getRowDataMapel($nama_mapel)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM mata_pelajaran WHERE nama_mapel = ?");
    $stmt->bind_param("s", $nama_mapel);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

// mendapatkan data nilai mapel dari siswa tertentu
function getRowNilaiSiswa($nisn, $nama_mapel)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM view_nilai_akhir WHERE nisn = ? AND nama_mapel = ? order by nama_siswa asc");
    $stmt->bind_param("ss", $nisn, $nama_mapel);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}

// mendapatkan data tahun ajar tertentu
function getRowTahunAjar($id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tahun_ajar WHERE id_tahun_ajar = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
}
