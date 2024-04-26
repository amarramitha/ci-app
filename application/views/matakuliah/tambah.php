<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
  <div class="card-header">
    Form Tambah Data Matakuliah
  </div>
  <div class="card-body">
    <?php if(validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
    <?= validation_errors(); ?>
    </div>
    <?php endif; ?>
  <form action="" method="post">
                <!-- <div class="form-group">
                    <label for="id">ID Matakuliah</label>
                    <input type="text" class="form-control" id="id_matakuliah" name="id_matakuliah" placeholder="ID Matakuliah">
                </div> -->
                <div class="form-group">
                    <label for="nama">Nama Matakuliah</label>
                    <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" placeholder="Nama Matakuliah">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
            </form>
  </div>
</div>
            
        </div>
    </div>
</div>