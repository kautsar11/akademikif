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
          <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="row">
              <!-- tombol trigger modal -->
              <div class="com-sm-12 col-md-6"></div>

              <!-- tombol cari -->
              <div class="com-sm-12 col-md-6 mb-2">
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
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Nama Wali Kelas</th>
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
                    "SELECT kelas.kelas, guru.nama_guru 
                    FROM kelas,guru
                    WHERE guru.nip = kelas.nip_wakel AND guru.nama_guru LIKE concat('%',?,'%') ORDER BY kelas.kelas ASC"
                  );
                  $stmt->bind_param("s", $cari);
                  $stmt->execute();
                  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                  $stmt->close();
                } else {
                  $stmt = $conn->prepare(
                    "SELECT kelas.kelas, guru.nama_guru 
                    FROM kelas,guru
                    WHERE guru.nip = kelas.nip_wakel ORDER BY kelas.kelas ASC"
                  );
                  $stmt->execute();
                  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                  $stmt->close();
                }
                $conn->close();
                foreach ($result as $row) :
                ?>
                  <tr>
                    <td class="text-center"><?= $row['kelas'] ?></td>
                    <td><?= $row['nama_guru'] ?></td>
                    <td class="text-center" style="width: 20%">
                      <a class="btn btn-success" href="update_kelas.php?kelas=<?= $row['kelas'] ?>">Ubah</a>
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

<?php include_once 'views/footer.php'; ?>