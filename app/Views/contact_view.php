<?php 
$this->extend('layout/template'); 
$this->section('content'); 
?>

<div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Contact Me</h1>

    <div class="row">
        
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border rounded p-4" style="background-color: #f8f9fa;">
                <i class="bi bi-telephone-fill" style="font-size: 3rem; color: #1351aa;"></i>
                <h3 class="fw-bold mt-3">Phone</h3>
                <p class="fs-4"><?= esc($biodata['nomor_hp']) ?></p>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border rounded p-4" style="background-color: #f8f9fa;">
                <i class="bi bi-envelope-fill" style="font-size: 3rem; color: #1351aa;"></i>
                <h3 class="fw-bold mt-3">Email</h3>
                <p class="fs-4"><?= esc($biodata['email']) ?></p>
            </div>
        </div>
        
    </div> <div class="row"> <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border rounded p-4" style="background-color: #f8f9fa;">
                <i class="bi bi-github" style="font-size: 3rem; color: #1351aa;"></i>
                <h3 class="fw-bold mt-3">GitHub</h3>
                <a href="<?= esc($biodata['link_github']) ?>" class="fs-4" target="_blank">Zafnat21</a>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border rounded p-4" style="background-color: #f8f9fa;">
                <i class="bi bi-instagram" style="font-size: 3rem; color: #1351aa;"></i>
                <h3 class="fw-bold mt-3">Instagram</h3>
                <a href="<?= esc($biodata['link_instagram']) ?>" class="fs-4" target="_blank">@zafnatzpm</a>
            </div>
        </div>
        
    </div> </div>

<?php $this->endSection(); ?>