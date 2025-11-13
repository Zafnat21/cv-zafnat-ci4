<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table            = 'biodata';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama_lengkap', 'gelar_singkat', 'deskripsi', 'email', 'nomor_hp', 'alamat', 'link_github', 'foto'];
}