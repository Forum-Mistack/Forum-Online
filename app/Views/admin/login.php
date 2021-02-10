<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/bootstrap/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/loginadmin.css">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>

<body>
    <header class="container">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-4">
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('message') ?></div>
                <?php endif; ?>
                <h3>Sign In</h3>
                <p class="text-secondary">Masuk untuk melanjutkan</p>
                <form action="<?= base_url('Admin'); ?>/Auth/Login" method="post">
                    <div class="input-icon">
                        <input type="text" name="username" id="username" class="form-input" placeholder="Username" required>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="input-icon">
                        <input type="password" name="password" id="password" class="form-input" placeholder="Password" required>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-purple mx-auto rounded-pill">Masuk Akun Saya</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('vendor'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>