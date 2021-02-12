<?= $this->extend('layout/forum_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- Section Profile User -->
    <div class="card shadow-sm w-100 mb-3">
        <div class="card-body text-dark">
            <div class="row ">
                <div class="col-1">
                    <div class="rounded-pill bg-secondary custom-rounded">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="col-10 align-self-center mt-3">
                    <h3><?= $_SESSION['nama']; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Profile User -->

    <!-- Section Post User -->
    <section class="post">
        <div class="row">

            <div class="col-md-12">
                <div class="card shadow-sm w-100">
                    <div class="row mx-2">
                        <div class="col-md-10">
                            <br>
                            <p>Judul Diskusi</p>
                        </div>
                        <div class="col-md-2">
                            <br>
                            <p>Kategori</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <?php if (!empty($post)) : ?>
                    <?php foreach ($post as $p) : ?>
                        <div class="card shadow-sm w-100">
                            <div class="row mx-2">
                                <div class="col-md-10">
                                    <div class="card-body text-dark">
                                        <a href="<?= base_url('Pertanyaan'); ?>/<?= $p['id_post']; ?>" class="card-title"><?= $p['judul'] ?></a>
                                        <p class="card-text"><?= $p['created_at'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="button" class="btn btn-outline-primary w-100 custom-outline-btn align-center"><?= $p['nama_kategori'] ?></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="card shadow-sm w-100 ">
                        <div class="col-md-12">
                            <div class="card-body text-dark">
                                <h5 class="card-title">
                                    <center>Anda belum memposting apapun<center>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <!-- End Section Post User -->
</div>
<?= $this->endSection(); ?>