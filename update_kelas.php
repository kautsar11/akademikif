<?php
include_once 'views/nav.php';
require_once 'config/config.php';
include_once 'functions.php';

$kelas = $_GET['kelas'];
$dataKelas = getRowDataKelas($kelas);
$listGuru = getRowsGuru();
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
            Ubah Data Kelas
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <form action="<?= htmlspecialchars("controllers/kelas/update_kelas.php?kelas=$kelas") ?>" name="formUbahKelas" method="POST">
              <div class="mb-3">
                <label for="inputNip" class="form-label">Kelas</label>
                <input type="number" class="form-control" name="kelas" value="<?= $dataKelas['kelas'] ?>" readonly />
              </div>
              <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Wali Kelas</label>
                <select name="kelasNamaWakel" id="kelasNamaWakel" class="form-select">
                  <?php foreach ($listGuru as $guru) : ?>
                    <option value="<?= $guru['nip'] ?>" <?= ($dataKelas['nip_wakel'] == $guru['nip']) ? "selected" : "" ?>><?= $guru['nip'] . " - " . $guru['nama_guru'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="modal-footer">
                <a class="btn btn-secondary" href="kelas.php">Kembali</a>
                <input class="btn btn-success" name="submitFormUbahKelas" type="submit" value="Ubah" />
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