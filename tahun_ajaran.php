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
            Data Tahun Ajaran
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
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                  <input type="search" name="cari" class="form-control form-control-sm" placeholder="Cari..." />
                </form>
                </div>
              </div>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">ID Tahun</th>
                  <th class="text-center">Tahun Ajaran</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
              <?php
                require_once 'config/config.php';

                $conn = connect_to_database();

                if (isset($_GET['cari']) && $_GET['cari'] !== "") {
                  $cari = $_GET["cari"];

                  $stmt = $conn->prepare(
                    "SELECT * FROM tahun_ajar 
                    WHERE (id_tahun_ajar LIKE concat('%',?,'%')) OR (tahun_ajar LIKE concat('%',?,'%'))"
                  );
                  $stmt->bind_param("ss", $cari, $cari);
                  $stmt->execute();
                  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                  $stmt->close();
                } else {
                  $stmt = $conn->prepare(
                    "SELECT * FROM tahun_ajar"
                  );
                  $stmt->execute();
                  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                  $stmt->close();
                }
                $conn->close();
                foreach ($result as $row) :
                ?>
                <tr>
                  <td class="text-center"><?=$row['id_tahun_ajar']?></td>
                  <td class="text-center"><?=$row['tahun_ajar']?></td>
                  <td class="text-center" style="width: 30%">
                    <a class="btn btn-danger" href="controllers/tahun/delete_tahun_ajar.php?id_tahun_ajar=<?= $row['id_tahun_ajar'] ?>">Hapus</a>
                  </td>
                </tr>
                <?php endforeach; ?>
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
          Tambah Data Tahun Ajaran
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= htmlspecialchars("controllers/tahun/insert_tahun_ajaran.php") ?>" name="formTambahTahunAjar" method="POST">
          <div class="mb-3">
            <label for="inputTahunAjar" class="form-label">Tahun Ajaran</label>
            <input type="text" class="form-control" name="tahunAjar" />
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              Batal
            </button>
            <input class="btn btn-primary" name="submitFormTambahTahunAjar" type="submit" value="Tambah" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once 'views/footer.php'; ?>