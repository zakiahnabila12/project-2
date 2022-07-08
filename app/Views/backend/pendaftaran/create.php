<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12">
      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('/pendaftaran/add/go'); ?> ">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Daftar</label>
                    <input type="date" class="form-control" name="tanggal_daftar" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alasan</label>
                    <input type="text" class="form-control" name="alasan" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Id</label>
                    <input type="text" class="form-control" name="users_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan Id</label>
                    <input type="text" class="form-control" name="kegiatan_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Peserta Id</label>
                    <input type="text" class="form-control" name="kategori_peserta_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Sertifikat</label>
                    <input type="text" class="form-control" name="nosertifikat" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
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
