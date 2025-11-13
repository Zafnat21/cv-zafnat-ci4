<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table            = 'portofolio';
    protected $primaryKey       = 'id_porto';
    protected $allowedFields    = ['nama_proyek', 'jenis', 'deskripsi', 'link_demo', 'gambar_cover'];
}