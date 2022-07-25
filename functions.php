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
