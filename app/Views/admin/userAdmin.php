<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<!-- Content -->
<div class="content mx-5 mt-2">
    <div class="heading card shadow-sm">
        <h1 class="ms-4">Data Admin</h1>
    </div>
    <div class="body mt-4">
        <div class="card px-4 py-4">
            <button type="button" class="btn btn-custom mb-3 btn-tambah-user-admin" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $IdAdmin ?>">Tambah Data Baru</button>
            <div class="table-responsive">
                <table id="data-tabel" class="table table-hover">
                    <thead>
                        <tr>
                            <th width=80>No</th>
                            <th width=120>Nama</th>
                            <th width=120>Username</th>
                            <th width=100>Password</th>
                            <th width=300>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($admin as $a) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $a['nama'] ?></td>
                                <td><?= $a['username'] ?></td>
                                <td><?= $a['password'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-detail" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $a['id_admin']; ?>">Detail</button>
                                    <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modal" data-id="<?= $a['id_admin']; ?>">Edit</button>
                                    <a href="Admin/UserAdmin/delete/<?= $a['id_admin']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</a>
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
                <h5 class="modal-title">Tambah Data Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="">
                <div class="modal-body">
                    <label for="id_admin" class="form-label">ID Admin</label>
                    <input type="text" class="form-control" id="id_admin" name="id_admin" readonly>
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal form -->

<?= $this->endSection(); ?>