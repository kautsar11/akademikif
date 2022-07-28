<?php
include_once 'views/nav.php';
require_once 'config/config.php';
include_once 'functions.php';

$nisn = $_GET['nisn'];
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto"></ul>
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">
            Ubah Data Nilai Siswa
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <form action="<?= htmlspecialchars("controllers/nilai/update_nilai.php?nisn=$nisn") ?>" name="formUbahNilai" method="POST">
              <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" value="<?= $nisn . " - " . getRowDataSiswa($nisn)['nama_siswa'] ?>" readonly />
              </div>

              <div class="mb-3">
                <label for="tahunAjar" class="form-label">Tahun Ajar</label>
                <select name="tahunAjar" id="tahunAjar" class="form-select">
                  <?php foreach (getRowsTahunAjar() as $row) : ?>
                    <option value="<?= $row['id_tahun_ajar'] ?>" <?= ($row['id_tahun_ajar']) == getRowNilaiSiswa($nisn, 'ipa')['id_tahun_ajar'] ? "selected" : "" ?>><?= $row['tahun_ajar'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="row">
                <div class="col">
                  <label for="bIndo" class="form-label">B.INDO</label>
                  <input type="number" class="form-control" name="bIndo" value="<?php $nilai = getRowNilaiSiswa($nisn, 'b.indo');
                                                                                echo $nilai['nilai_mapel']; ?>" />

                  <label for="bInggris" class="form-label">B.INGGRIS</label>
                  <input type="number" class="form-control" name="bInggris" value="<?php $nilai = getRowNilaiSiswa($nisn, 'b.inggris');
                                                                                    echo $nilai['nilai_mapel']; ?>" />

                  <label for="bSunda" class="form-label">B.SUNDA</label>
                  <input type="number" class="form-control" name="bSunda" value="<?php $nilai = getRowNilaiSiswa($nisn, 'b.sunda');
                                                                                  echo $nilai['nilai_mapel']; ?>" />

                  <label for="ipa" class="form-label">IPA</label>
                  <input type="number" class="form-control" name="ipa" value="<?php $nilai = getRowNilaiSiswa($nisn, 'ipa');
                                                                              echo $nilai['nilai_mapel']; ?>" />
                </div>
                <div class="col">
                  <label for="ips" class="form-label">IPS</label>
                  <input type="number" class="form-control" name="ips" value="<?php $nilai = getRowNilaiSiswa($nisn, 'ips');
                                                                              echo $nilai['nilai_mapel']; ?>" />

                  <label for="matematika" class="form-label">MATEMATIKA</label>
                  <input type="number" class="form-control" name="matematika" value="<?php $nilai = getRowNilaiSiswa($nisn, 'matematika');
                                                                                      echo $nilai['nilai_mapel']; ?>" />

                  <label for="pai" class="form-label">PAI</label>
                  <input type="number" class="form-control" name="pai" value="<?php $nilai = getRowNilaiSiswa($nisn, 'pai');
                                                                              echo $nilai['nilai_mapel']; ?>" />

                  <label for="pjok" class="form-label">PJOK</label>
                  <input type="number" class="form-control" name="pjok" value="<?php $nilai = getRowNilaiSiswa($nisn, 'pjok');
                                                                                echo $nilai['nilai_mapel']; ?>" />
                </div>
                <div class="col">
                  <label for="pkn" class="form-label">PKN</label>
                  <input type="number" class="form-control" name="pkn" value="<?php $nilai = getRowNilaiSiswa($nisn, 'pkn');
                                                                              echo $nilai['nilai_mapel']; ?>" />

                  <label for="prakarya" class="form-label">PRAKARYA</label>
                  <input type="number" class="form-control" name="prakarya" value="<?php $nilai = getRowNilaiSiswa($nisn, 'prakarya');
                                                                                    echo $nilai['nilai_mapel']; ?>" />

                  <label for="sbk" class="form-label">SBK</label>
                  <input type="number" class="form-control" name="sbk" value="<?php $nilai = getRowNilaiSiswa($nisn, 'sbk');
                                                                              echo $nilai['nilai_mapel']; ?>" />
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-secondary" href="nilai_akhir.php">Kembali</a>
            <input class="btn btn-success" name="submitFormUbahNilai" type="submit" value="Ubah" />
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<?php include_once 'views/footer.php'; ?>