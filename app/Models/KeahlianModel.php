<?php

namespace App\Models;

use CodeIgniter\Model;

class KeahlianModel extends Model
{
    protected $table            = 'keahlian';
    protected $primaryKey       = 'id_keahlian';
    protected $allowedFields    = ['nama_skill', 'level', 'kategori'];
}