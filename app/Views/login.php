<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>

<header>
    <div class="row h-100 align-items-center">
        <div class="col-md-6 vector d-flex justify-content-center">
            <img src="../Assets/img/laptop.png" alt="">
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Masuk Untuk Melanjutkan</h2>
            <p class="text-center">Dapatkan kebebasan berdiskusi untuk menemukan solusi yang terbaik.<br>Tunggu apa lagi ayo gabung !</p>

            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-danger mx-4 mx-md-5"><?= session()->getFlashdata('message') ?></div>
            <?php elseif (session()->getFlashdata('message_success')) : ?>
                <div class="alert alert-success mx-4 mx-md-5"><?= session()->getFlashdata('message_success') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('Forum'); ?>/Auth" method="post">
                <div class="input-icon">
                    <input type="email" name="email" id="email" class="form-input" placeholder="Email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="input-icon">
                    <input type="password" name="password" id="password" class="form-input" placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="text-center">
                    <button class="btn btn-purple mx-auto rounded-pill">Login</button>
                </div>
                <div class="text-center d-flex justify-content-center mt-5 ">
                    <span class="p-2">Belum punya akun?</span><a class="p-2" href="<?= base_url('/SignUp'); ?>" style="text-decoration: none; color : hsl(350, 90%, 65%) ;">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</header>

<?= $this->endSection(); ?>