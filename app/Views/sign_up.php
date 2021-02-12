<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>

<header>
    <div class="row h-100 align-items-center">
        <div class="col-md">
            <img src="../Assets/img/laptop.png" alt="">
        </div>
        <div class="col-md">
            <h2 class="text-center">Buat Akun Sekarang Juga</h2>
            <p class="text-center">Dapatkan kebebasan berdiskusi untuk menemukan solusi yang terbaik.<br>Tunggu apa lagi ayo gabung !</p>
            <form action="<?= base_url('Forum'); ?>/Register">
                <div class="input-icon">
                    <input type="text" name="nama" id="nama" class="form-input" placeholder="Nama Lengkap">
                    <i class="fa fa-user"></i>
                </div>
                <div class="input-icon">
                    <input type="email" name="email" id="email" class="form-input" placeholder="Email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="input-icon">
                    <input type="password" name="password" id="password" class="form-input" placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="text-center">
                    <button class="btn btn-purple mx-auto rounded-pill">Sign Up</button>
                </div>
                <div class="text-center d-flex justify-content-center mt-5 ">
                    <span class="p-2">Sudah punya akun?</span><a class="p-2" href="<?= base_url('/Login'); ?>" style="text-decoration: none; color : hsl(350, 90%, 65%) ;">Login</a>
                </div>
            </form>
        </div>
    </div>
</header>

<?= $this->endSection(); ?>