<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
            <div class="card col-lg-12">
            <div class="card-header">
                <a href="/kegiatan/add" class="btn btn-primary btn-sm">Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Judul</th>
                      <th scope="col">Kapasitas</th>
                      <th scope="col">Harga Tiket</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Narasumber</th>
                      <th scope="col">Tempat</th>
                      <th scope="col">Pic</th>
                      <th scope="col">Foto Flyer</th>
                      <th scope="col">Jenis Id</th>
                      <th scope="col">Aksi</th>     
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($kegiatan as $news) : ?>
                    <tr>
                      <td><?= $news['judul'] ?></td>
                      <td><?= $news['kapasitas'] ?></td>
                      <td><?= $news['harga_tiket'] ?></td>
                      <td><?= $news['tanggal'] ?></td>
                      <td><?= $news['narasumber'] ?></td>
                      <td><?= $news['tempat'] ?></td>
                      <td><?= $news['pic'] ?></td>
                      <td><?= $news['foto_flyer'] ?></td>
                      <td><?= $news['jenis_id'] ?></td>
                    <th>
                    <a href="<?php echo base_url('kegiatan/edit/'.$news['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('kegiatan/delete/'.$news['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              
                      </th>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
<?= $this->endSection() ?>

          

    

    