<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="card col-lg-12">
    <div class="card-header">
        <a href="/user/add" class="btn btn-primary btn-sm">Add Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nama</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">status</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $news) : ?>
                <tr>
                    <td><?= $news['id'] ?></td>
                    <td><?= $news['username'] ?></td>
                    <td><?= $news['email'] ?></td>
                    <td><?= $news['role'] ?></td>
                    <td><?= $news['status'] ?></td>
                    <th>
                        <a title="Edit" href="<?php echo base_url('user/edit/'.$news['id']);?>"
                            class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a title="Delete" href="<?php echo base_url('user/delete/'.$news['id']);?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i
                                class="fa fa-trash"></i> </a>


                    </th>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>