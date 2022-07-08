<?= $this->extend('layout/app1') ?>

<?= $this->section('content') ?>
<div class="row mb-2">
    <div class="col-md-8">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <img class="card-img-right flex-auto d-none d-md-block pt-2 pl-2 pb-2"
                src="<?= base_url('dist/img/user5-128x128.jpg');?>" alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                    <a class="text-dark" href="#"><?= $kegiatan['judul']; ?></a>
                </h3>
                <div class="mb-1 text-muted"><?= $kegiatan['tanggal'] ?></div>
                <p class="card-text mb-auto"><?= $kegiatan['jenis_id'] ?></p>
                <p class="card-text mb-auto"><?= $kegiatan['narasumber'] ?></p>
                <p class="card-text mb-auto"><?= $kegiatan['tempat'] ?></p>
                <a href="<?php echo base_url('/');?>" class="btn btn-warning btn-sm mt-2">Kembali</a>
            </div>

        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>