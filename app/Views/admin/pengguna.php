<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Data Pengguna</h1>
    </div>
    <div class="body mt-4">
        <div class="card px-4 py-4">
            <div class="table-responsive">
                <table id="data-tabel" class="table table-hover">
                    <thead>
                        <tr>
                            <th width=80>No</th>
                            <th width=250>Nama</th>
                            <th width=250>Email</th>
                            <th width=220>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pengguna as $p) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['password'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-detail-pengguna" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $p['id_pengguna']; ?>">Detail</button>
                                    <a href="Admin/Pengguna/delete/<?= $p['id_pengguna']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</a>
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



<!-- Modal Detail Data -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="id_pengguna" class="form-label">ID Pengguna</label>
                <input type="text" class="form-control" id="id_pengguna" name="id_pengguna">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
        </div>
    </div>
</div>
<!-- Modal Detail Data -->

<?= $this->endSection(); ?>