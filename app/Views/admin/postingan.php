<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Data Postingan</h1>
    </div>
    <div class="body mt-4">
        <div class="card px-4 py-4">
            <div class="table-responsive">
                <table id="data-tabel" class="table table-hover">
                    <thead>
                        <tr>
                            <th width=80>No</th>
                            <th width=520>Judul</th>
                            <th width=200>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($postingan as $p) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $p['judul'] ?></td>
                                <td><?= $p['created_at'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-detail-postingan" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $p['id_post']; ?>">Detail</button>
                                    <a href="Admin/Postingan/delete/<?= $p['id_post']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</a>
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


<!-- Modal form -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Postingan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <label for="id_postingan" class="form-label">ID Postingan</label>
                    <input type="text" class="form-control" id="id_postingan" name="id_postingan">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
                    <label for="id_kategori" class="form-label">ID Kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori">
                    <label for="id_pengguna" class="form-label">ID Pengguna</label>
                    <input type="text" class="form-control" id="id_pengguna" name="id_pengguna">
                    <label for="created_at" class="form-label">Tanggal Unggah</label>
                    <input type="text" class="form-control" id="created_at" name="created_at">
                    <label for="updated_at" class="form-label">Tanggal Ubah</label>
                    <input type="text" class="form-control" id="updated_at" name="updated_at">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal form -->

<?= $this->endSection(); ?>