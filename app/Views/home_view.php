<?php 
// Beritahu CI4 kita pakai template dari /layout/template.php
$this->extend('layout/template'); 

// Ini adalah 'content' yang akan disuntikkan ke template
$this->section('content'); 
?>

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="<?= base_url('assets/img/zafnat.jpg') ?>" alt="Foto Zafnat" class="img-fluid rounded-circle shadow" style="max-width: 250px; border: 5px solid white;">
        </div>

        <div class="col-md-8">
            <h1 class="display-3 fw-bold">Hello</h1>
            <h4 class="mb-3 text-secondary"><?= esc($biodata['gelar_singkat']) ?></h4>
            <p class="lead"><?= esc($biodata['deskripsi']) ?></p>
            
            <div class="d-flex flex-wrap gap-3 mt-4">
                <a href="<?= base_url('resume') ?>" class="btn-circle btn-resume">Resume</a>
                <a href="<?= base_url('projects') ?>" class="btn-circle btn-projects">Projects</a>
                <a href="<?= base_url('contact') ?>" class="btn-circle btn-contact">Contact</a>
            </div>
        </div>
    </div>
</div>

<?php 
// Tutup section
$this->endSection(); 
?>