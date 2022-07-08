<?= $this->extend('layout/app1') ?>

<?= $this->section('content') ?>
<div class="row mb-2">
    <?php foreach ($kegiatan as $news) : ?>

    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <img class="card-img-right flex-auto d-none d-md-block pt-2 pl-2 pb-2" src="<?= base_url('');?>"
                alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0">
                    <a class="text-dark" href="#"><?= $news['judul'] ?></a>
                </h3>
                <div class="mb-1 text-muted"><?= $news['tanggal'] ?></div>
                <p class="card-text mb-auto"><?= $news['jenis_id'] ?></p>
                <p class="card-text mb-auto"><?= $news['narasumber'] ?></p>
                <p class="card-text mb-auto"><?= $news['tempat'] ?></p>
                <a href="<?php echo base_url('detail/'.$news['id']);?>" class="btn btn-warning btn-sm mt-2">Detail</a>
            </div>

        </div>
    </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>