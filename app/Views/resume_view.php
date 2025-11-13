<?php 
$this->extend('layout/template'); 
$this->section('content'); 
?>

<div class="container">
    <h1 class="display-4 fw-bold mb-5">Resume</h1>

    <div class="row mb-5">
        <div class="col-md-3">
            <h3 class="fw-bold">Work Experience</h3>
        </div>
        <div class="col-md-9">
            <?php foreach ($pengalaman as $peng) : ?>
                <div class="mb-4">
                    <h5 class="fw-bold"><?= esc($peng['jabatan']) ?> | <?= esc($peng['nama_tempat']) ?></h5>
                    <p class="text-muted"><?= esc($peng['tahun']) ?></p>
                    <p><?= esc($peng['deskripsi']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <hr classd="my-5">

    <div class="row mb-5">
        <div class="col-md-3">
            <h3 class="fw-bold">Education</h3>
        </div>
        <div class="col-md-9">
            <?php foreach ($pendidikan as $pend) : ?>
                <div class="mb-4">
                    <h5 class="fw-bold"><?= esc($pend['institusi']) ?> | <?= esc($pend['jurusan']) ? esc($pend['jurusan']) : '' ?></h5>
                    <p class="text-muted"><?= esc($pend['tahun_masuk']) ?> - <?= esc($pend['tahun_lulus']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <hr class="my-5">

    <div class="row mb-5">
        <div class="col-md-3">
            <h3 class="fw-bold">Skills & Expertise</h3>
        </div>
        <div class="col-md-9">
            <ul>
                <?php foreach ($keahlian as $skill) : ?>
                    <li>
                        <h5 class="fw-bold"><?= esc($skill['nama_skill']) ?></h5>
                        <p class="text-muted"><?= esc($skill['level']) ?> (Kategori: <?= esc($skill['kategori']) ?>)</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<?php $this->endSection(); ?>