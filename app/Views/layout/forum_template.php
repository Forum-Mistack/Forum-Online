<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/bootstrap/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/navbar.css">
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/styleDetail.css">
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/footer.css">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Mistack</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="<?= base_url('Assets'); ?>/img/logo-blue.png"><span class="title-brand title-blue">Mistack</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php if (isset($_SESSION['nama'])) : ?>
                        <div class="dropdown">
                            <button class="btn btn-custom-secondary rounded-pill px-4 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, <?= $_SESSION['nama']; ?>
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="<?= base_url('/Profile'); ?>/<?= $SESSION['id_pengguna']; ?>" target="_blank">Profile</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('/Logout'); ?>">Logout</a></li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <a href="<?= base_url('/Login'); ?>" target="_blank" class="btn btn-custom-secondary rounded-pill px-4" href="#">Join</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand logo" href="#"><img src="<?= base_url('Assets'); ?>/img/logo.png"><span class="title-brand">Mistack</span></a>
                    <p class="paragraph-left mt-3">Adalah sebuah platform berbasis website
                        yang menyediakan forum diskusi khusus untuk
                        bidang programming</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5 class="footer-heading">Kategori</h5>
                    <div class="row mt-4">
                        <div class="col">
                            <p class="paragraph-left">Javascript</p>
                            <p class="paragraph-left">Phyton</p>
                            <p class="paragraph-left">Ruby</p>
                            <p class="paragraph-left">CSS</p>
                        </div>
                        <div class="col">
                            <p class="paragraph-left">PHP</p>
                            <p class="paragraph-left">HTML</p>
                            <p class="paragraph-left">React</p>
                            <p class="paragraph-left">Laravel</p>
                        </div>
                        <div class="col">
                            <p class="paragraph-left">Codeigniter</p>
                            <p class="paragraph-left">Bootstrap</p>
                            <p class="paragraph-left">Materialize</p>
                            <p class="paragraph-left">Tailwind</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5 class="footer-heading">Ikuti Kami</h5>
                    <div class="row mt-4">
                        <div class="col ms-4">
                            <a href="#" class="nav-link custom-link"><i class="fab fa-instagram-square fa-2x"></i>Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center copyright">© 2020 - <?= date('Y'); ?> Mistack • All rights reserved • Love from coder</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- My JS -->
    <script src="<?= base_url('Assets'); ?>/js/main.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="<?= base_url('vendor'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>