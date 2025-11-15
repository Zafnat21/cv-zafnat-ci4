-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 08:17 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cv_zafnat`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gelar_singkat` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `link_github` varchar(150) DEFAULT NULL,
  `link_instagram` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `gelar_singkat`, `deskripsi`, `email`, `nomor_hp`, `alamat`, `link_github`, `link_instagram`, `foto`) VALUES
(1, 'Zafnat Paaneah Matusal', 'Mahasiswa Teknik Informatika', 'Mahasiswa S1 Teknik Informatika Semester 5 di Universitas Muhammadiyah Sukabumi yang memiliki minat kuat di bidang Digital Content Creation dan Creative Design. Berpengalaman dalam organisasi sebagai Ketua OSIS dan terampil menggunakan tools desain grafis, editing video, dan fotografi. Sedang aktif mempelajari web framework CodeIgniter 4 sebagai bekal dalam pengembangan aplikasi.', 'Zafnatpaaneah02@ummi.ac.id', '085863285739', 'Perum Bumi Pasir Rahayu Pasir Bahagia 1 No. 85', 'https://github.com/Zafnat21', 'https://www.instagram.com/zafnatpm', 'zafnat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `nama_skill`, `level`, `kategori`) VALUES
(1, 'Desain Grafis (Canva)', 'Menengah', 'Creative'),
(2, 'Video Editing (DaVinci/CapCut)', 'Menengah', 'Creative'),
(3, 'Gambar Sketsa (Manual)', 'Mahir', 'Creative'),
(4, 'Edit Foto (Lightroom)', 'Menengah', 'Creative');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_masuk` year NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `institusi`, `jurusan`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', 'Sekarang'),
(2, 'PKBM Pemuda Pelopor', NULL, '2020', '2023'),
(3, 'SMP Negeri 1 Sukabumi', NULL, '2017', '2020'),
(4, 'SD Negeri Surya Kencana CBM', NULL, '2011', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `jenis`, `jabatan`, `nama_tempat`, `tahun`, `deskripsi`) VALUES
(1, 'Organisasi', 'Ketua OSIS', 'PKBM Pemuda Pelopor', '2022 - 2023', 'Bertanggung jawab dalam mengkoordinasi seluruh kegiatan siswa, memimpin rapat, dan menjembatani komunikasi antara siswa dan pihak sekolah.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_porto` int NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `jenis` enum('Fotografi','Desain Grafis','Sketsa','Video') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text NOT NULL,
  `link_demo` varchar(255) DEFAULT NULL,
  `gambar_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_porto`, `nama_proyek`, `jenis`, `deskripsi`, `link_demo`, `gambar_cover`) VALUES
(1, 'RX-93 V Gundam', 'Fotografi', '', NULL, 'nu.jpg'),
(2, 'Lex Luthor', 'Desain Grafis', 'Lex Luthor Envy', NULL, 'envy.png'),
(3, 'Springtrap', 'Sketsa', 'FNAF - Springtrap', NULL, 'fnaf.jpg'),
(4, 'Konten YouTube', 'Video', 'Kumpulan video konten game dan review yang di-edit menggunakan DaVinci Resolve/CapCut.', NULL, NULL),
(5, 'Batman', 'Desain Grafis', 'The Batman 2022 Poster', NULL, 'Batman.png'),
(6, 'Rorschach', 'Desain Grafis', 'Rorschach Truth', NULL, 'truth.png'),
(7, 'Toyota GR86', 'Desain Grafis', 'MF Ghost', NULL, '86.png'),
(8, 'Hathaway Noa', 'Desain Grafis', 'Hathaway Noa - Radiohead', NULL, 'Noa.png'),
(9, 'Lego Batman', 'Desain Grafis', 'Lego Batman - MJ', NULL, 'Lego.png'),
(10, 'Sakuragi Hanamichi', 'Sketsa', 'Slam Dunk - Sakuragi Hanamichi', NULL, 'sakuragi.jpg'),
(11, 'Havik', 'Sketsa', 'Mortal Kombat - Havik', NULL, 'havik.jpg'),
(12, 'Goku & Vegeta', 'Sketsa', 'Tribute to Akira Toriyama', NULL, 'dbz.jpg'),
(13, 'Shin Kamen Rider', 'Sketsa', 'Shin Kamen Rider Movie', NULL, 'shin.jpg'),
(14, 'RX-93 V Gundam 2', 'Fotografi', '', NULL, 'nu2.jpg'),
(15, 'Psycho Zaku', 'Fotografi', '', NULL, 'zaku.jpg'),
(16, 'Banshee', 'Fotografi', '', NULL, 'banshee.jpg'),
(17, 'RX-9 Narrative Gundam', 'Fotografi', '', NULL, 'rx9.jpg'),
(18, 'RX-78', 'Fotografi', '', NULL, '78.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_porto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_porto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
