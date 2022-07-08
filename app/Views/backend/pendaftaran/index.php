<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
            <div class="card col-lg-12">
            <div class="card-header">
                <a href="/pendaftaran/add" class="btn btn-primary btn-sm">Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Tanggal Daftar</th>
                      <th scope="col">Alasan</th>
                      <th scope="col">User Id</th>
                      <th scope="col">Kegiatan Id</th>
                      <th scope="col">Kategori Peserta</th>
                      <th scope="col">Nosertifikat</th>
                      <th scope="col">Aksi</th>
     
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($pendaftaran as $news) : ?>
                    <tr>
                      <td><?= $news['id'] ?></td>
                      <td><?= $news['tanggal_daftar'] ?></td>
                      <td><?= $news['alasan'] ?></td>
                      <td><?= $news['users_id'] ?></td>
                      <td><?= $news['kegiatan_id'] ?></td>
                      <td><?= $news['kategori_peserta_id'] ?></td>
                      <td><?= $news['nosertifikat'] ?></td>
                    <th>
                    <a href="<?php echo base_url('pendaftaran/edit/'.$news['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('pendaftaran/delete/'.$news['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              
                      </th>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
<?= $this->endSection() ?>

          

    

    