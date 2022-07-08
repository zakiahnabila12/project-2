<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12">
      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('/kegiatan/add/go'); ?> ">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas</label>
                    <input type="text" class="form-control" name="kapasitas" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Tiket</label>
                    <input type="text" class="form-control" name="harga_tiket" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Narasumber</label>
                    <input type="text" class="form-control" name="narasumber" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" class="form-control" name="tempat" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PIC</label>
                    <input type="text" class="form-control" name="pic" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto Flayer</label>
                    <input type="text" class="form-control" name="foto_flyer" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <input type="text" class="form-control" name="jenis_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
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
