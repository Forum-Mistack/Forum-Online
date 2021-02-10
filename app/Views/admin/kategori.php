<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Kategori</h1>
    </div>
    <div class="body mt-4">
        <div class="card px-4 py-4">
            <button type="button" class="btn btn-custom mb-3 btn-tambah-kategori" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $IdKategori ?>">Tambah Data Baru</button>
            <div class="table-responsive">
                <table id="data-tabel" class="table table-hover">
                    <thead>
                        <tr>
                            <th width=80>No</th>
                            <th width=150>ID Kategori</th>
                            <th width=580>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $k) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $k['id_kategori'] ?></td>
                                <td><?= $k['nama_kategori'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-edit-kategori" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $k['id_kategori']; ?>">Edit</button>
                                    <a href="Admin/Kategori/delete/<?= $k['id_kategori']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</a>

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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="">
                <div class="modal-body">
                    <label for="id_kategori" class="form-label">ID Kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori" readonly>
                    <label for="kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Tambah Data -->





<?= $this->endSection(); ?>