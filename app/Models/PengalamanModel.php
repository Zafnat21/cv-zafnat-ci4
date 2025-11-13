<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table            = 'pengalaman';
    protected $primaryKey       = 'id_pengalaman';
    protected $allowedFields    = ['jenis', 'jabatan', 'nama_tempat', 'tahun', 'deskripsi'];
}