<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
            <div class="card col-lg-12">
            <div class="card-header">
                <a href="/katpes/add" class="btn btn-primary btn-sm">Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">nama</th>
                      <th scope="col">Aksi</th>
     
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($kategoripes as $news) : ?>
                    <tr>
                      <td><?= $news['id'] ?></td>
                      <td><?= $news['nama'] ?></td>

                    <th>
                    <a href="<?php echo base_url('katpes/edit/'.$news['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('katpes/delete/'.$news['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              
                      </th>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
<?= $this->endSection() ?>

          

    

    