<?= $this->extend('layout/forum_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!-- Section Heading End -->
    <section class="heading">
        <div class="row">
            <div class="col-md-9">
                <form action="/Pertanyaan" method="get">
                    <input type="text" name="keyword" class="form-control" placeholder="Temukan Sekarang">
                    <button class="btn rounded-pill custom-search-button" type="submit" id="button-addon2">
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
                    <div class="col-md-12">
                        <div class="card shadow-sm w-100 header">
                            <div class="card-header">Pertanyaan > Kategori: <?= $post[0]['nama_kategori']; ?> > <?= $post[0]['judul']; ?></div>
                            <div class="row mx-2 g-2">
                                <div class="col-md-1 d-flex justify-content-center">
                                    <div class="rounded-pill bg-secondary custom-rounded">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title text-align"><?= $post[0]['nama']; ?>, <span class="text-color">bertanya pada pukul <?= DateFormat($post[0]['created_at']) ?></span></h5>
                                        <p class="card-text text-align"><?= $post[0]['pertanyaan']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-custom w-100 rounded-3 btn-komentar" data-bs-toggle="modal" data-bs-target="#modal-komentar">Beri Komentar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Post End -->

            <!-- Section Comment -->
            <section class="comment">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-sm w-100 alig">
                            <div class="card-header"><?= $countKomentar['komentar']; ?> Jawaban</div>
                            <?php if (!empty($komentar)) : ?>
                                <?php foreach ($komentar as $k) : ?>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row mx-2 g-2">
                                                <div class="col-md-1 d-flex justify-content-center">
                                                    <div class="rounded-pill bg-secondary custom-rounded">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="card-body text-dark">
                                                        <h5 class="card-title text-align"><?= $k['nama']; ?>, <span class="text-color">menjawab pada pukul <?= DateFormat($k['created_at']) ?></span></h5>
                                                        <p class="card-text text-align"><?= $k['komentar']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="col-md-12">
                                    <div class="card-body text-dark">
                                        <h5 class="card-title">
                                            <center>Jawaban dari diskusi ini belum tersedia<center>
                                        </h5>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Comment End -->
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

    <!-- Modal Komentar -->
    <div class="modal fade" id="modal-komentar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Postingan Komentar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('Forum'); ?>/SaveKomentar/<?= $post[0]['id_post']; ?>" method="post">
                    <div class="modal-body">
                        <label for="komentar" class="form-label">Komentar</label>
                        <textarea class="form-control" id="komentar" name="komentar" rows="6"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Posting</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Komentar -->


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

    <div class="modal fade" id="modal-komentar">
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