-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 01:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_khadijah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(1, '<p>hjhjsansmssss</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'ok', '123', 'Taufiq Hidayat');

-- --------------------------------------------------------

--
-- Table structure for table `alur_pelayanan`
--

CREATE TABLE `alur_pelayanan` (
  `id_alur` int(11) NOT NULL,
  `nama_alur` varchar(250) NOT NULL,
  `gambar` text NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alur_pelayanan`
--

INSERT INTO `alur_pelayanan` (`id_alur`, `nama_alur`, `gambar`, `penjelasan`) VALUES
(4, 'hhgomm nbn', '230329074615', 'hghg'),
(5, 'hhg', '2303290744131 (16).jpg', 'hghg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `jenis_spesialis` varchar(255) NOT NULL,
  `isiberita` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tag` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_gambar` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_admin`, `judul_artikel`, `jenis_spesialis`, `isiberita`, `tanggal`, `tag`, `gambar`, `ket_gambar`, `status`) VALUES
(21, 1, 'jhghg', 'PENYAKIT DALAM', '<p>hghgh</p>\r\n', '2023-03-24 00:06:53', 'shghjj', '2303240106531 (2).jpg', 'kdsks', 'Y'),
(25, 1, 'mantap gak tuh ?', 'KANDUNGAN', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it ok?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '2023-03-23 23:19:42', 'sipp', '2303240019421 (17).jpg', 'mantap gaess', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `jabatan`, `gambar`) VALUES
(1, 'dr. Taufiq Hidayat', '', '230325004040profile.png'),
(4, 'nh', 'Dokter Umum', '230325004800Screenshot 2023-03-17 141424.png'),
(5, 'andalang e', 'Dokter Umum', '230328001619Screenshot 2023-03-15 144754.png'),
(6, 'ok', 'Dokter Paruh Waktu', '230328010130Screenshot 2023-03-15 144754.png');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `jenisfasilitas` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `ketgambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `unit`, `jenisfasilitas`, `gambar`, `ketgambar`) VALUES
(1, 'IGD', 'okey', '2303242338451 (1).jpg', 'okey'),
(2, 'Rawat Inap', 'jjbsnd', '2303250016081 (1).jpg', 'hsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs bvbvbvbvhsghgs xx bvbvbvbv');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket_gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `nama_gambar`, `gambar`, `ket_gambar`) VALUES
(1, 'hjg', '201005185931a.png', 'jh'),
(2, 'ghs', '200922092329eh23.png', 'khjha');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` int(10) NOT NULL,
  `id_dokter` int(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `id_dokter`, `hari`, `waktu`, `lokasi`, `keterangan`) VALUES
(1, 5, 'Kamis', '07.00 - 09.00', '1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `komentar`, `lampiran`, `hp`) VALUES
(1, 'uyhj', 'jhjhj', '200930032704', '67676'),
(2, 'ghghg', 'nghgsa', '200930033321', '67676876'),
(3, 'hjajshj', 'hghh', '200930033905', '6777'),
(4, 'hjhjh', 'jhjjh', '200930033949', '78768768'),
(5, 'hjhjh', 'jhjjh', '200930034037', '78768768'),
(6, 'hjhgjh', 'hjh', '2009300340491.PNG', 'y6uhj'),
(7, 'hjhgjh', 'hjh', '2009300446201.PNG', 'y6uhj'),
(8, 'hjhgjh', 'hjh', '2009300446351.PNG', 'y6uhj'),
(9, 'hjhgjh', 'hjh', '2009300446541.PNG', 'y6uhj'),
(10, 'hjhgjh', 'hjh', '2009300447311.PNG', 'y6uhj');

-- --------------------------------------------------------

--
-- Table structure for table `komitmen`
--

CREATE TABLE `komitmen` (
  `id_komitmen` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komitmen`
--

INSERT INTO `komitmen` (`id_komitmen`, `isi`) VALUES
(1, '<p>jsdhjds dbdhghf sdg</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `hp`, `alamat`, `email`, `web`) VALUES
(1, '0852257412712', 'disini  disana', 'htaufiq0072@gmail.com', 'www.ok2.com');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(250) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id_lab`, `jenis_pemeriksaan`, `harga`) VALUES
(1, 'mantap', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcu`
--

CREATE TABLE `mcu` (
  `id_mcu` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(250) NOT NULL,
  `jenis_paket` varchar(250) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcu`
--

INSERT INTO `mcu` (`id_mcu`, `jenis_pemeriksaan`, `jenis_paket`, `harga`) VALUES
(1, 'Pemeriksaan GDS', 'okey', 50000),
(2, 'Pemeriksaan Urin', 'okey  hg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga` int(50) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `komposisi` text DEFAULT NULL,
  `kemasan` varchar(250) DEFAULT NULL,
  `manfaat` varchar(250) DEFAULT NULL,
  `dosis` varchar(250) DEFAULT NULL,
  `penyajian` text DEFAULT NULL,
  `mims` varchar(20) DEFAULT NULL,
  `izin_edar` varchar(250) DEFAULT NULL,
  `golongan_obat` varchar(250) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `kategori`, `deskripsi`, `komposisi`, `kemasan`, `manfaat`, `dosis`, `penyajian`, `mims`, `izin_edar`, `golongan_obat`, `ket`) VALUES
(2, 'obat kuat 2', 25000, 'Obat', 'dsjgsdhsd', '2', '1', 'hgg', 'hghgh', 'bvbv', 'hgh', '6564', '2', 'vfvgf'),
(4, 'okey', 15000, 'Obat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `sejarah`) VALUES
(1, '<p>dshgdfhgdf fdjhdfhdfjdf dfdfhjfdjh&nbsp;dshgdfhgdf fdjhdfhdfjdf dfdfhjfdjhdshgdfhgdf fdjhdfhdfjdf dfdfhjfdjhdshgdfhgdf fdjhdfhdfjdf dfdfhjfdjhdshgdfhgdf fdjhdfhdfjdf dfdfhjfdjh</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `id_jab` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `struktur2`
--

CREATE TABLE `struktur2` (
  `id` int(11) NOT NULL,
  `struktur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur2`
--

INSERT INTO `struktur2` (`id`, `struktur`) VALUES
(1, '201005213928STRUKTUR ORGANISASI.png');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `nama_video` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` int(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `visi`) VALUES
(1, '<p><strong>VISI:</strong></p>\r\n\r\n<p>TERWUJUDNYA PELAYANAN PRIMA KEPADA MASYARAKAT DALAM RANGKA MENDUKUNG KOTA BANDAR MADANI DENGAN MASYARAKAT YANG MANDIRI DAN RELIGIUS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>MISI:</strong></p>\r\n\r\n<ol>\r\n	<li>MENINGKATKAN SUMBER DAYA MANUSIA, APARAT KELURAHAN YANG MANDIRI, CERDAS, SEHAT DAN BERDAYA SAING</li>\r\n	<li>MEWUJUDKAN MASYARAKAT RELIGIUS, RUKUN, AMAN DAN MANUSIAWI</li>\r\n	<li>MENCIPTAKAN KEPEDULIAN MASYARAKAT DENGAN BERKOMITMEN HEMAT DAN EFESIEN</li>\r\n	<li>MENINGKATKAN PENATAAN RUANG YANG BERWAWASAN LINGKUNGAN</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `isi`) VALUES
(1, '<p>bhghsd pokoekkok jsdgh</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alur_pelayanan`
--
ALTER TABLE `alur_pelayanan`
  ADD PRIMARY KEY (`id_alur`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komitmen`
--
ALTER TABLE `komitmen`
  ADD PRIMARY KEY (`id_komitmen`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mcu`
--
ALTER TABLE `mcu`
  ADD PRIMARY KEY (`id_mcu`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `struktur2`
--
ALTER TABLE `struktur2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alur_pelayanan`
--
ALTER TABLE `alur_pelayanan`
  MODIFY `id_alur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komitmen`
--
ALTER TABLE `komitmen`
  MODIFY `id_komitmen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mcu`
--
ALTER TABLE `mcu`
  MODIFY `id_mcu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur2`
--
ALTER TABLE `struktur2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
