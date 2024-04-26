<div class="container">
    <?php if($this->session->flashdata('flash')): ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Matakuliah <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('matakuliah/tambah');?>" class="btn btn-primary">Tambah Data Matakuliah</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Daftar Matakuliah</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Matakuliah</th>
                        <th>Nama Matakuliah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($matakuliah as $matkul) : ?>
                    <tr>
                        <td><?= $matkul['id_matakuliah']; ?></td>
                        <td><?= $matkul['nama_matakuliah']; ?></td>
                        <td>
                            <a href="<?= base_url('matakuliah/hapus/' . $matkul['id_matakuliah']); ?>" class="badge badge-danger" onclick="return confirm('Data akan dihapus?');">Hapus</a>
                            <a href="<?= base_url('matakuliah/edit/' . $matkul['id_matakuliah']); ?>" class="badge badge-primary">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
