<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/bootstrap/css/bootstrap.min.css ">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/admin.css">
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/style.css">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

    <title>Dashboard Admin</title>
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <nav class="sidebar nav flex-column vh-100">
            <div class="brand">
                <h3 class="text-white text-center mt-5">Mistack</h3>
                <a href="#" id="sidebar-toggle" class="ms-3">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="user-info">
                <div class="foto-profile d-flex justify-content-center">
                    <div class="card rounded-circle d-flex align-items-center justify-content-center mt-4">
                        <i class="fas fa-user fa-4x"></i>
                    </div>
                </div>
                <h5 class="text-white text-center mt-3">Hallo Admin</h5>
                <p class="text-center">Online</p>
            </div>
            <p class="limit ms-3 mt-4">Main</p>
            <a class="nav-link text-white" href="<?= base_url('/Dashboard'); ?>"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a class="nav-link text-white" href="<?= base_url('/Kategori'); ?>"><i class="fas fa-th-list me-2"></i>Kategori</a>
            <a class="nav-link text-white" href="<?= base_url('/UserAdmin'); ?>"><i class="fas fa-user me-2"></i>Admin</a>
            <a class="nav-link text-white" href="<?= base_url('/Pengguna'); ?>"><i class="fas fa-user me-2"></i>Pengguna</a>
            <p class="limit ms-3 mt-5">Forum</p>
            <a class="nav-link text-white" href="<?= base_url('/Postingan'); ?>"><i class="fas fa-paper-plane me-2"></i>Postingan</a>
            <a class="nav-link text-white" href="<?= base_url('/Komentar'); ?>"><i class="fas fa-comment-dots me-2"></i>Komentar</a>
        </nav>
        <!-- Sidebar End -->

        <div class="wrapper-content">
            <div class="row">
                <div class="col-12">

                    <!-- Navbar -->
                    <nav class="navbar navbar-light bg-white">
                        <div class="navigation ms-auto" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="btn btn-custom me-4" href="<?= base_url('Admin'); ?>/Auth/Logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar End -->

                    <?= $this->renderSection('content'); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- My JS -->
    <script src="<?= base_url('Assets'); ?>/js/main.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="<?= base_url('vendor'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>