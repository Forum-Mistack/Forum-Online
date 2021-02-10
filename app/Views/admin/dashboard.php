<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Dashboard</h1>
    </div>
    <div class="body mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm custom-card p-3">
                    <div class="row h-100 align-items-center">
                        <div class="col d-flex align-content-center">
                            <div class="p-4 bg-light rounded-circle">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                        </div>
                        <div class="col">
                            <h3><?= $countPengguna['nama']; ?></h3>
                            <p>Total Pengguna</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm custom-card p-3">
                    <div class="row h-100 align-items-center">
                        <div class="col d-flex align-content-center">
                            <div class="p-4 bg-light rounded-circle">
                                <i class="fab fa-telegram-plane fa-3x px-2"></i>
                            </div>
                        </div>
                        <div class="col">
                            <h3><?= $countPost['pertanyaan']; ?></h3>
                            <p>Total Postingan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm custom-card p-3">
                    <div class="row h-100 align-items-center">
                        <div class="col d-flex align-content-center">
                            <div class="p-4 bg-light rounded-circle">
                                <i class="fas fa-comment-dots fa-3x"></i>
                            </div>
                        </div>
                        <div class="col">
                            <h3><?= $countComment['komentar']; ?></h3>
                            <p>Total Komentar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<?= $this->endSection(); ?>