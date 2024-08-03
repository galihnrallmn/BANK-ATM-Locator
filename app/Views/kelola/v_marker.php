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
            <h2>Kelola Marker</h2>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Type</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($marker as $value) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= esc($value['name']); ?></td>
                                <td>
                                    <div class="text-truncate" style="max-width: 200px;">
                                        <?= htmlspecialchars($value['address']); ?>
                                    </div>
                                </td>
                                <td><?= esc($value['latitude']); ?></td>
                                <td><?= esc($value['longitude']); ?></td>
                                <td><?= esc($value['type']); ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $value['idmarker']; ?>">Edit</button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $value['idmarker']; ?>">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Type</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modals -->
<?php foreach ($marker as $value) : ?>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal<?= $value['idmarker']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $value['idmarker']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('marker/updatedata/' . $value['idmarker']) ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel<?= $value['idmarker']; ?>">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= esc($value['name']) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" name="address" id="address" required><?= esc($value['address']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" class="form-control" name="latitude" id="latitude" value="<?= esc($value['latitude']) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" class="form-control" name="longitude" id="longitude" value="<?= esc($value['longitude']) ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" class="form-control" id="type" required>
                                <option value="ATM" <?= $value['type'] == 'ATM' ? 'selected' : '' ?>>ATM</option>
                                <option value="Bank" <?= $value['type'] == 'Bank' ? 'selected' : '' ?>>Bank</option>
                            </select>
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
    <div class="modal fade" id="deleteModal<?= $value['idmarker']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $value['idmarker']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('marker/delete/' . $value['idmarker']) ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel<?= $value['idmarker']; ?>">Hapus Data</h5>
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
            <form action="<?= base_url('marker/insertdata') ?>" method="post">
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
                        <label for="address">Address:</label>
                        <textarea class="form-control" name="address" id="address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude:</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude:</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select name="type" class="form-control" id="type" required>
                            <option value="ATM">ATM</option>
                            <option value="Bank">Bank</option>
                        </select>
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