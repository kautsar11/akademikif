<?php
require_once 'config/config.php';
include_once 'views/nav.php';
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
                    Backup Database
                </div>
                <div class="card-body">
                    <form action="controllers/backup/database_backup.php" method="post">
                        <div class="form-group">
                            <label class="control-label mb-10">Host</label>
                            <input type="password" class="form-control" name="server" id="server" required="" autocomplete="on" value="<?= HOST ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10">Database Username</label>
                            <input type="password" class="form-control" name="username" id="username" required="" autocomplete="on" value="<?= USERNAME ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="pull-left control-label mb-10">Database Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="<?= PASS ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="pull-left control-label mb-10">Database Name</label>
                            <input type="password" class="form-control" name="dbname" id="dbname" required="" autocomplete="on" value="<?= DBNAME ?>" readonly>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="backupnow" class="btn btn-info btn-rounded">Backup Database</button>
                        </div>
                    </form>
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