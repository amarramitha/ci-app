<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
  <div class="card-header">
    Form Edit Data Mahasiswa
  </div>
  <div class="card-body">
    <?php if(validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
    <?= validation_errors(); ?>
    </div>
    <?php endif; ?>
  <form action="" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'];?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'];?>">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $mahasiswa['tanggal_lahir'];?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat'];?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
            </form>
  </div>
</div>
            
        </div>
    </div>
</div>