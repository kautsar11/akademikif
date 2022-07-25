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
            Data Nilai Akhir
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="row">
              <!-- tombol trigger modal -->
              <div class="com-sm-12 col-md-6">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahData">
                  Tambah Data
                </button>
              </div>

              <!-- tombol cari -->
              <div class="com-sm-12 col-md-6">
                <div id="dataTables_filter" class="dataTables_filter">
                  <input type="search" name="cari" class="form-control form-control-sm" placeholder="Cari..." />
                </div>
              </div>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">NIS</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">B.INDO</th>
                  <th class="text-center">B.INGGRIS</th>
                  <th class="text-center">B.SUNDA</th>
                  <th class="text-center">IPA</th>
                  <th class="text-center">IPS</th>
                  <th class="text-center">MATEMATIKA</th>
                  <th class="text-center">PAI</th>
                  <th class="text-center">PJOK</th>
                  <th class="text-center">PKN</th>
                  <th class="text-center">PRAKARYA</th>
                  <th class="text-center">SBK</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center">70</td>
                  <td class="text-center" style="width: 30%">
                    <a class="btn btn-success" href="">Ubah</a>
                    <a class="btn btn-danger" href="">Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
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

<!-- modal tambah data -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Tambah Data Nilai Akhir
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" name="formTambahNilaiAkhir">
          <div class="mb-3">
            <label for="inputNip" class="form-label">NIP</label>
            <input type="number" class="form-control" name="guruNip" />
          </div>
          <div class="mb-3">
            <label for="inputNama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="guruNama" />
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              Batal
            </button>
            <input class="btn btn-primary" name="submitFormTambahNilaiAkhir" type="submit" value="Tambah" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once 'views/footer.php'; ?>