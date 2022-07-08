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
              <input type="hidden" name="id" id="id" value="<?php echo $pendaftaran['id']; ?>">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Daftar</label>
                    <input type="text" class="form-control" value="<?php echo $pendaftaran['tanggal_daftar']; ?>" name="tanggal_daftar" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alasan</label>
                    <input type="text" class="form-control" value="<?php echo $pendaftaran['alasan']; ?>" name="alasan" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Id</label>
                    <input type="text" class="form-control" value="<?php echo $pendaftaran['users_id']; ?>" name="users_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan Id</label>
                    <input type="date" class="form-control" value="<?php echo $pendaftaran['kegiatan_id']; ?>" name="kegiatan_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Peserta Id</label>
                    <input type="text" class="form-control" value="<?php echo $pendaftaran['kategori_peserta_id']; ?>" name="kategori_peserta_id" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Sertifikat</label>
                    <input type="text" class="form-control" value="<?php echo $pendaftaran['nosertifikat']; ?>" name="nosertifikat" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
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
