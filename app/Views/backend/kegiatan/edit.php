<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12">


      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('/kegiatan/edit/go'); ?> ">
              <input type="hidden" name="id" id="id" value="<?php echo $kegiatan['id']; ?>">
                <div class="card-body">
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['judul']; ?>" name="judul" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['kapasitas']; ?>" name="kapasitas" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Tiket</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['harga_tiket']; ?>" name="harga_tiket" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" value="<?php echo $kegiatan['tanggal']; ?>" name="tanggal" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Narasumber</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['narasumber']; ?>" name="narasumber" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['tempat']; ?>" name="tempat" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PIC</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['pic']; ?>" name="pic" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto Flayer</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['foto_flyer']; ?>" name="foto_flyer" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <input type="text" class="form-control" value="<?php echo $kegiatan['jenis_id']; ?>" name="jenis_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
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
