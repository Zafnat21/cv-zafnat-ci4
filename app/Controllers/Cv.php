<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// Panggil semua Model yang kita butuhkan
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;
use App\Models\PortofolioModel;

class Cv extends BaseController
{
    // Siapkan Model-model tadi di constructor
    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->pengalamanModel = new PengalamanModel();
        $this->keahlianModel = new KeahlianModel();
        $this->portofolioModel = new PortofolioModel();
    }

    // Fungsi untuk Halaman UTAMA (Home)
    public function index()
    {
        $data = [
            'biodata' => $this->biodataModel->find(1) // Ambil data biodata ID=1
        ];
        // Kirim data ke view (file ini akan kita buat di Langkah 4)
        return view('home_view', $data);
    }

    // Fungsi untuk Halaman RESUME
    public function resume()
    {
        $data = [
            'biodata' => $this->biodataModel->find(1), // Tetap perlu untuk nama/judul
            'pendidikan' => $this->pendidikanModel->findAll(), // Ambil SEMUA data pendidikan
            'pengalaman' => $this->pengalamanModel->findAll(), // Ambil SEMUA data pengalaman
            'keahlian' => $this->keahlianModel->findAll() // Ambil SEMUA data keahlian
        ];
        return view('resume_view', $data); // (File ini akan kita buat)
    }

    // Fungsi untuk Halaman PROJECTS
   public function projects()
{
    // 1. Ambil semua data portofolio
    $all_portofolio = $this->portofolioModel->findAll();

    // 2. Kita buat array kosong untuk mengelompokkan
    $grouped_portofolio = [];

    // 3. Looping semua data, lalu kelompokkan berdasarkan 'jenis'
    foreach ($all_portofolio as $porto) {
        $jenis = $porto['jenis'];

        // Jika 'jenis' ini belum ada di array, buatkan 'sub-array'
        if (!isset($grouped_portofolio[$jenis])) {
            $grouped_portofolio[$jenis] = [];
        }

        // Masukkan proyek ini ke grup 'jenis' yang sesuai
        $grouped_portofolio[$jenis][] = $porto;
    }

    // 4. Siapkan data untuk dikirim ke View
    $data = [
        'biodata' => $this->biodataModel->find(1),
        'grouped_portofolio' => $grouped_portofolio // Kirim data yang sudah DIKELOMPOKKAN
    ];

    return view('projects_view', $data);
}

    // Fungsi untuk Halaman CONTACT
    public function contact()
    {
        $data = [
            'biodata' => $this->biodataModel->find(1) // Hanya perlu data email & HP
        ];
        return view('contact_view', $data); // (File ini akan kita buat)
    }
}