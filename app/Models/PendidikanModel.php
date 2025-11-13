<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'id_pendidikan';
    protected $allowedFields    = ['institusi', 'jurusan', 'tahun_masuk', 'tahun_lulus'];
}