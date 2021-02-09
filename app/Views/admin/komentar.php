<?= $this->extend('layout/admin_template'); ?>
<?= $this->section('content'); ?>



<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Data Komentar</h1>
    </div>
    <div class="body mt-4">
        <div class="card px-4 py-4">
            <div class="table-responsive">
                <table id="data-tabel" class="table table-hover">
                    <thead>
                        <tr>
                            <th width=80>No</th>
                            <th width=500>Komentar</th>
                            <th width=220>Tanggal Unggah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($komentar as $k) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $k['komentar'] ?></td>
                                <td><?= $k['created_at'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-detail-komentar" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $k['id_komentar']; ?>">Detail</button>
                                    <a href="Admin/Komentar/delete/<?= $k['id_komentar']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<!-- Modal Form -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Komentar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <label for="id_komentar" class="form-label">ID Komentar</label>
                    <input type="text" class="form-control" id="id_komentar" name="id_komentar">
                    <label for="komenter" class="form-label">Komentar</label>
                    <input type="text" class="form-control" id="komentar" name="komentar">
                    <label for="id_pengguna" class="form-label">ID Pengguna</label>
                    <input type="text" class="form-control" id="id_pengguna" name="id_pengguna">
                    <label for="id_post" class="form-label">ID Post</label>
                    <input type="text" class="form-control" id="id_post" name="id_post">
                    <label for="created_at" class="form-label">Tanggal Unggah</label>
                    <input type="text" class="form-control" id="created_at" name="created_at">
                    <label for="updated_at" class="form-label">Tanggal Ubah</label>
                    <input type="text" class="form-control" id="updated_at" name="updated_at">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Form -->

<?= $this->endSection(); ?>