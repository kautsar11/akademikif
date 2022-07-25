<?php include_once 'views/nav.php'; ?>

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
            Ubah Data Siswa
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <form action="" name="formUbahSiswa">
              <div class="mb-3">
                <label for="inputNip" class="form-label">NIS</label>
                <input type="number" class="form-control" name="siswaNis" />
              </div>
              <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="siswaNama" />
              </div>
              <div class="modal-footer">
                <a class="btn btn-secondary" href="">Kembali</a>
                <input class="btn btn-success" name="submitFormUbahSiswa" type="submit" value="Ubah" />
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

<?php include_once 'views/footer.php.php'; ?>