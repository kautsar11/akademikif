<?php
require_once 'config/config.php';
include_once 'functions.php';
require_once 'fpdf/fpdf.php';

$nisn = $_GET['nisn'];
$dataSiswa = getRowDataSiswa($nisn);

$pdf = new FPDF(orientation: 'P', unit: 'mm', size: 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80);
$pdf->Cell(20, 10, 'LAPORAN HASIL BELAJAR PESERTA DIDIK', 0, 1, 'C');
$pdf->Cell(80);
$pdf->Cell(20, 5, 'SEKOLAH......', 0, 1, 'C');
$pdf->Line(20, 30, 210 - 20, 30);

$pdf->SetFont('Arial', '', 12);
$pdf->Ln(15);
$pdf->Cell(10, 0, "Nama  : " . $dataSiswa['nama_siswa'], 0, 1);
$pdf->Ln(8);
$pdf->Cell(10, 0, "Kelas : " .  $dataSiswa['nama_kelas'], 0, 1);
$pdf->Ln(8);
$pdf->Cell(10, 0, "Wali Kelas : " . getRowDataGuru(getRowDataKelas($dataSiswa['nama_kelas'])['nip_wakel'])['nama_guru'], 0, 1);
$pdf->Ln(8);
$pdf->Cell(10, 0, "Tahun Ajar : " . getRowTahunAjar(getRowNilaiSiswa($nisn, 'ipa')['id_tahun_ajar'])['tahun_ajar'], 0, 1);
$pdf->Ln(10);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetLineWidth(.3);

// Title row
$pdf->SetFont('', '');
$pdf->Cell(100, 8, "MATA PELAJARAN", 1, 0, 'C', true);
$pdf->SetFont('', '');
$pdf->Cell(20, 8, "KKM", 1, 0, 'C', true);
$pdf->Cell(20, 8, "NILAI", 1, 0, 'C', true);
$pdf->Cell(40, 8, "KETERANGAN", 1, 0, 'C', true);
$pdf->Ln();

// Data rows
foreach (getRowsMapel() as $mapel) {
    $pdf->SetFont('', '');
    $pdf->Cell(100, 8, $mapel['nama_mapel'], "LTRB", 0, 'L');
    $pdf->Cell(20, 8, $mapel['kkm_mapel'], "LTRB", align: "C");
    $pdf->Cell(20, 8, getRowNilaiSiswa($nisn, $mapel['nama_mapel'])['nilai_mapel'], "LTRB", align: "C");
    $pdf->Cell(40, 8, (getRowNilaiSiswa($nisn, $mapel['nama_mapel'])['nilai_mapel'] >= $mapel['kkm_mapel']) ? "LULUS" : "TIDAK LULUS", "LTRB", align: "C");
    $pdf->Ln();
}

// $pdf->SetFont('', '');
// $pdf->Cell(100, 8, "The ability to interpret information and", "LR", 0, 'L');
// $pdf->SetFont('', '');
// $pdf->Cell(20, 8, "6", "LR", align: "C");
// $pdf->Cell(20, 8, "Effective", "LR", align: "C");
// $pdf->Cell(40, 8, "Effective", "LR", align: "C");
// $pdf->Ln();

// $pdf->SetFont('', '');
// $pdf->Cell(100, 8, "drawing accurate conclusions", "LBR", 0, 'L');
// $pdf->Cell(20, 8, "", "LBR", align: "C");
// $pdf->Cell(20, 8, "", "LBR", align: "C");
// $pdf->Cell(40, 8, "", "LBR", align: "C");
// $pdf->Ln();

$pdf->Output();
