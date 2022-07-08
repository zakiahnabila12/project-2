<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12">
      
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kategori Peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url('/user/edit/go'); ?> ">
              <input type="hidden" name="id" id="id" value="<?php echo $user['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?php echo $user['username']; ?>" name="username" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" value="<?php echo $user['password']; ?>" name="password" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" value="<?php echo $user['email']; ?>" name="email" id="exampleInputEmail1" placeholder="Masukan Nama Jenis">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <br>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="status" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">InAktif</label>
                        </div>
                       
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="role" id="inlineRadio1" value="administrator">
                        <label class="form-check-label" for="inlineRadio1">Administrator</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="role" id="inlineRadio2" value="public">
                        <label class="form-check-label" for="inlineRadio2">Public</label>
                        </div>
                       
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
