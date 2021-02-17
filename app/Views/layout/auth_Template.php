<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/bootstrap/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('Assets'); ?>/css/ls.css">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- My Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Mistack</title>
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('vendor'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>