<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
            <div class="card col-lg-12">
              <div class="card-header">
                <a href="/lovyou/add" class="btn btn-primary btn-sm">Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                    ?>
                  <?php foreach ($jen_kegiatan as $news) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $news['nama'] ?></td>
                      <th>
                      <a href="<?php echo base_url('lovyou/edit/'.$news['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('lovyou/delete/'.$news['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              
                      </th>
                    </tr>
                    <?php
                      $no++
                    ?>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
<?= $this->endSection() ?>

          

    