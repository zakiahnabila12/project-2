<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12">
      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kategori Peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('/katpes/edit/go'); ?> ">
              <input type="hidden" name="id" id="id" value="<?php echo $kategoripes['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jenis Kegiatan</label>
                    <input type="text" class="form-control" value="<?php echo $kategoripes['nama']; ?>" name="nama" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->
            <?= $this->endSection() ?>
