<?php 
// 1. Pakai template utama
$this->extend('layout/template'); 

// 2. Mulai bagian 'content'
$this->section('content'); 
?>

<style>
    .horizontal-gallery {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        overflow-x: auto; /* Kunci scroll horizontal */
        padding-bottom: 1rem; 
        gap: 1rem; /* Jarak antar kartu */
    }
    .project-card {
        min-width: 240px; /* Lebar kartu (untuk rasio 4:5) */
        flex-shrink: 0;
    }
    .project-card .ratio-4x5 img { /* Ini untuk rasio 4:5 */
        /* Pastikan gambar mengisi rasio dengan pas */
        object-fit: cover;
    }
    .modal-body img {
        /* Gambar di dalam pop-up */
        width: 100%;
        height: auto;
    }
</style>
<div class="container">
    <h1 class="display-4 fw-bold mb-5">My Projects</h1>

    <?php if (empty($grouped_portofolio)): ?>
        <p class="lead text-muted">Belum ada proyek yang ditambahkan.</p>
    <?php else: ?>
        
        <?php foreach ($grouped_portofolio as $jenis => $portos): ?>
            
            <?php if ($jenis == 'Video'): ?>
                
                <h3 class="fw-bold mt-5">Konten YouTube</h3>
                <div class="d-flex align-items-center gap-3 p-3 border rounded shadow-sm">
                    <img src="<?= base_url('assets/img/portofolio/z01.jpg') ?>" 
                         class="rounded-circle" 
                         style="width: 100px; height: 100px; object-fit: cover;"
                         alt="YouTube Profile">
                    <div>
                        <h5 class="fw-bold"><?= esc($portos[0]['nama_proyek']) ?></h5>
                        <a href="<?= esc($portos[0]['link_demo']) ?>" class="btn btn-danger btn-lg" target="_blank">
                            Lihat Channel
                        </a>
                    </div>
                </div>

            <?php else: ?>
            
                <h3 class="fw-bold mt-5"><?= esc($jenis) ?></h3>
                
                <div class="horizontal-gallery">
                    
                    <?php foreach ($portos as $porto): ?>
                        
                        <div class="card project-card shadow-sm">
                            
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#portoModal-<?= esc($porto['id_porto']) ?>" title="Lihat detail: <?= esc($porto['nama_proyek']) ?>">
                                
                                <div class="ratio ratio-4x5" style="--bs-aspect-ratio: 125%;">
                                    <img src="<?= base_url('assets/img/portofolio/' . esc($porto['gambar_cover'])) ?>" 
                                         alt="<?= esc($porto['nama_proyek']) ?>">
                                </div>
                            </a>
                            
                            <div class="card-body p-2">
                                <h6 class="card-title text-truncate mb-0"><?= esc($porto['nama_proyek']) ?></h6>
                            </div>
                        </div>

                        <div class="modal fade" id="portoModal-<?= esc($porto['id_porto']) ?>" tabindex="-1" aria-labelledby="portoModalLabel-<?= esc($porto['id_porto']) ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="portoModalLabel-<?= esc($porto['id_porto']) ?>"><?= esc($porto['nama_proyek']) ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?= base_url('assets/img/portofolio/' . esc($porto['gambar_cover'])) ?>" 
                                             class="img-fluid w-100 mb-3" 
                                             alt="<?= esc($porto['nama_proyek']) ?>">
                                        
                                        <p><?= esc($porto['deskripsi']) ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        
                                        <?php if (!empty($porto['link_demo'])) : ?>
                                            <a href="<?= esc($porto['link_demo']) ?>" class="btn btn-primary" target="_blank">Lihat Karya Asli</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach; // Akhir loop proyek ?>
                </div>
                
            <?php endif; // Akhir if (bukan Video) ?>
            
        <?php endforeach; // Akhir loop kategori ?>
        
    <?php endif; // Akhir if (empty portofolio) ?>

</div>

<?php 
// 3. Tutup bagian 'content'
$this->endSection(); 
?>