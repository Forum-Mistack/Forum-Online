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
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/lp.css">
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/footer.css">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Mistack</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../Assets/img/logo.png"><span class="title-brand">Mistack</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link page-scroll" href="#home">Home</a>
                    <a class="nav-link page-scroll" href="#about">About</a>
                    <a class="nav-link page-scroll" href="#contact">Contact</a>

                    <?php if (isset($_SESSION['nama'])) : ?>
                        <div class="dropdown">
                            <button class="btn btn-custom-secondary rounded-pill px-4 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, <?= $_SESSION['nama']; ?>
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="<?= base_url('/Profile'); ?>/<?= $_SESSION['id_pengguna']; ?>" target="__blank">Profile</a></li>
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

    <!-- Jumbotron -->
    <div class="jumbotron" id="home">
        <div class="container">
            <div class="row justify-content-between align-items-center mt-5">
                <div class="col-md-5">
                    <h1>Cari Masalah Program Mu Disini</h1>
                    <p class="paragraph-left mt-4">Kami membangun produk untuk menemukan solusi yang memungkinkan produktivitas.</p>
                    <a href="<?= base_url('/Pertanyaan'); ?>" class="btn rounded-pill custom-search-button px-4">Cari Masalahmu Sekarang</a>
                </div>
                <div class="col-md-6">
                    <img class="vector" src="<?= base_url('Assets'); ?>/img/discus programmer.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron End -->

    <!-- Section About -->
    <section class="about" id="about">
        <div class="container">
            <h1 class="text-center title-custom">Dari Kami, Untuk Anda</h1>
            <p class="text-center paragraph-center mt-4">Mi Stack adalah komunitas yang terbuka untuk anda
                yang kesulitan dalam mengatasi masalah error kode
                Kami membantu Anda untuk mengatasinya,
                berbagi pengetahuan adalah jalan terbaik</p>
            <div class="row wrapper-card">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row-6 d-flex justify-content-center">
                                <img class="vector-about" src="<?= base_url('Assets'); ?>/img/question.png">
                            </div>
                            <div class="row-6 my-4">
                                <h1 class="card-title text-center title-about">Tanyakan Masalahmu</h1>
                                <p class="card-text text-center">Tanyakan kesulitan dalam mengatasi programmu disini.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row-6 d-flex justify-content-center">
                                <img class="vector-about" src="<?= base_url('Assets'); ?>/img/amswer.png">
                            </div>
                            <div class="row-6 my-4">
                                <h1 class="card-title text-center title-about">Dapatkan Jawabannya</h1>
                                <p class="card-text text-center">Temukan jawaban masalah codingmu dan berbagi pengetahuanmu disini.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row-6 d-flex justify-content-center">
                                <img class="vector-about" src="<?= base_url('Assets'); ?>/img/money.png" style="width: 300px;">
                            </div>
                            <div class="row-6 my-4">
                                <h1 class="card-title text-center title-about">Akses Gratis</h1>
                                <p class="card-text text-center">Tanpa batasan dan dapatkan akses sepenuhnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About End -->

    <!-- Section Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="vector" src="<?= base_url('Assets'); ?>/img/contact-us.png">
                </div>
                <div class="col-md-6">
                    <h1 class="title-custom title-center">Hubungi Kami</h1>
                    <form class="form" action="">
                        <div class="mb-3 input-icon">
                            <input type="text" class="form-control rounded-pill form-custom">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="mb-3 input-icon">
                            <input type="email" class="form-control rounded-pill form-custom">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <textarea class="form-control rounded-3 mb-3 form-custom" rows="4"></textarea>
                        <button class="btn btn-custom w-100 rounded-pill" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Contact End -->

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
                            <p class="paragraph-left">HTML</p>
                            <p class="paragraph-left">Javascript</p>
                        </div>
                        <div class="col">
                            <p class="paragraph-left">CSS</p>
                            <p class="paragraph-left">Bootstrap</p>
                        </div>
                        <div class="col">
                            <p class="paragraph-left">PHP</p>
                            <p class="paragraph-left">Tailwind</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5 class="footer-heading">Ikuti Kami</h5>
                    <div class="row mt-4">
                        <div class="col ms-1">
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
    <script src="<?= base_url('Assets'); ?>/js/smoothScroll.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="<?= base_url('vendor'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>