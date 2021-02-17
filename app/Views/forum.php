<?= $this->extend('layout/forum_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!-- Section Heading -->
    <section class="heading">
        <div class="row">
            <div class="col-md-9">
                <form action="" method="get">
                    <input type="text" name="keyword" class="form-control" placeholder="Temukan Sekarang">
                    <button class="btn rounded-pill custom-search-button" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom w-100 rounded-3 btn-post" data-bs-toggle="modal" data-bs-target="#modal-posting">Posting Diskusi Baru</button>
            </div>
        </div>
    </section>
    <!-- Section Heading End -->

    <div class="row">
        <div class="col-md-9">

            <!-- Section Post -->
            <section class="post">
                <div class="row">
                    <div class="col-md-12 header-card">
                        <div class="card shadow-sm w-100">
                            <div class="row me-1">
                                <div class="col-md-8">
                                    <br>
                                    <p class="ms-3">Judul Diskusi</p>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <p>Kategori</p>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <p class="ms-3">Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 content-card">
                        <!-- 1 -->
                        <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                        <?php if (!empty($post)) : ?>
                            <?php foreach ($post as $p) : ?>
                                <div class="card shadow-sm w-100 ">
                                    <div class="row me-1">
                                        <div class="col-md-8 mt-3">
                                            <div class="card-body text-dark">
                                                <a href="<?= base_url('Pertanyaan'); ?>/<?= $p['id_post']; ?>" class="card-title"><?= $p['judul'] ?></a>
                                                <p class="card-text text-time"><?= $p['created_at'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-5">
                                            <button type="button" class="btn btn-outline-primary w-100 custom-outline-btn align-center"><?= $p['nama_kategori'] ?></button>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="rounded-pill bg-secondary custom-rounded ms-4">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                            <p class="username"><?= $p['nama'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php elseif (filter_var($url, FILTER_VALIDATE_URL) === "http://localhost:8080/Pertanyaan") : ?>
                            <div class=" card shadow-sm w-100 ">
                                <div class=" col-md-12">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">
                                            <center>Postingan Diskusi Masih Kosong<center>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="card shadow-sm w-100 ">
                                <div class="col-md-12">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">
                                            <center>Postingan Yang Anda cari Tidak ditemukan<center>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!-- Section Post End -->
        </div>

        <!-- Section Sidebar -->
        <div class="col-md-3">
            <h4>Kategori</h4>
            <button type="button" class="btn btn-outline-primary w-100 custom-outline-btn">Coming Soon</button>
        </div>
        <!-- End Section Sidebar -->

    </div>
</div>

<?php if (isset($_SESSION['nama'])) : ?>

    <!-- Modal Posting Diskusi -->
    <div class="modal fade" id="modal-posting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Postingan Diskusi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('Forum'); ?>/SavePostingan" method="post">
                    <div class="modal-body">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori">
                            <option selected>Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="6"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Posting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Posting Diskusi -->

<?php else :  ?>

    <!-- Modal pesan petingatan -->
    <div class="modal fade" id="modal-posting">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title">Pesan Kesalahan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center>
                        <p class="alert alert-danger">Anda harus masuk terlebih dahulu untuk melanjutkan!</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pesan Peringatan -->

<?php endif; ?>

<?= $this->endSection(); ?>