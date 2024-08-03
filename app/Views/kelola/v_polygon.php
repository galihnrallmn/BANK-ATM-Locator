<?php echo view('layout/v_header'); ?>
<div class="container mt-5">
    <?php if (session()->getFlashdata('insert')) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('insert'); ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('update')) : ?>
        <div class="alert alert-primary"><?= session()->getFlashdata('update'); ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('delete')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('delete'); ?></div>
    <?php endif; ?>

    <div class="card mt-3">
        <div class="card-header">
            <h2>Kelola Polygon</h2>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Polygon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($polygon as $value) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= esc($value['name']); ?></td>
                                <td>
                                    <div class="text-truncate" style="max-width: 200px;">
                                        <?= htmlspecialchars($value['polygon']); ?>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $value['idpolygon']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $value['idpolygon']; ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Polygon</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Edit Modals -->
<?php foreach ($polygon as $value) : ?>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal<?= $value['idpolygon']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $value['idpolygon']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('polygon/updatedata/' . $value['idpolygon']) ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel<?= $value['idpolygon']; ?>">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= esc($value['name']) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="polygon">Polygon:</label>
                            <textarea class="form-control" name="polygon" id="polygon" rows="6" required><?= esc($value['polygon']); ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal<?= $value['idpolygon']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $value['idpolygon']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('polygon/delete/' . $value['idpolygon']) ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel<?= $value['idpolygon']; ?>">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('polygon/insertdata') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="polygon">Polygon:</label>
                        <textarea class="form-control" name="polygon" rows="6" id="polygon" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo view('layout/v_footer'); ?>