<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
  <div class="card-header">
    Form Edit Data Matakuliah
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
                    <input type="text" class="form-control" id="id_matakuliah" name="id_matakuliah" value="<?= $matakuliah['id'];?>">
                </div> -->
                <div class="form-group">
                    <label for="nama_matakuliah">Nama Matakuliah</label>
                    <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="<?= $matakuliah['nama_matakuliah'];?>">
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
            </form>
  </div>
</div>
            
        </div>
    </div>
</div>