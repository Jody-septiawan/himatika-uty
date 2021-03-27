-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 27, 2021 at 06:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'himatika', '$2y$10$TeS1pbAxaFUmBcBJSJZq2ebsrgycFP5Wlp8Unij.sh2GDmjgyoKVm');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `judul`, `deskripsi`, `link`) VALUES
(1, '09 April 2019', 'Peluncuran Website resmi HIMATIKA UTY', '', ''),
(2, 'Setiap hari sabtu 2020', 'KURO', 'Study Club Kuro merupakan sebuah kegiatan yang diadakan pada tahun ini untuk menambah maupun memberi ilmu pengetahuan dibidang C++, Python, dan MySQL yang ditujukan kepada mahasiswa Teknik Informatika UTY.', ''),
(3, '08 Februari 2020', 'Open House 13', 'Open house adalah acara rutin tahunan yang diselenggarakan oleh HIMATIKA UTY yang tujuannya mengenalkan lebih dekat tentang informatika kepada kalian mahasiswa angkata baru dan juga mengenalkan HIMATIKA UTY sebagai wadah atau jembatan untuk mahasiswa informatika, serta menumbuhkan rasa kekeluargaan dan kebersamaan antar mahasiswa informatika.', ''),
(5, '16 - 20 Februari 2020', 'Kunjungan Industri HIMATIKA x HMSI', 'Kunjungan Industri merupakan sebuah kegiatan program kerja tahunan yang ditujukan kepada mahasiswa Teknik Informatika guna dapat mengetahui kegiatan kegiatan di dalam perusahaan.', ''),
(6, '24-29 Februari 2020', 'Open Recruitment', 'Oprec (Open Recruitment) merupakan program yang dimana proses mencari dan menarik minat para mahasiswa untuk memenuhi kebutuhan organisasi atau untuk melanjutkan organisasi agar tetap utuh.', ''),
(7, '5 Maret 2020', 'Kunjungan Universitas ke Universitas Muhammadiyah Yogyakarta', 'Kunjungan Universitas merupakan ajang motivasi kepada mahasiswa untuk menambah wawasan dan saling bertukar ide sehingga dapat meningkatkan mutu. ', ''),
(8, '24 Mei 2020', 'Pengumuman Final Open Recruitment pengurus HIMATIKA 2020/2021', '', 'oprec');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nim_ketua` varchar(128) NOT NULL,
  `nim_wakil` varchar(128) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nim_ketua`, `nim_wakil`, `visi`, `misi`) VALUES
(1, '5180411021', '5190411078', '-', '-'),
(2, '5180411113', '5190411597', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `nama`, `status`) VALUES
(1, 'oprec', 1),
(2, 'evoting', 0),
(3, 'hitung', 0);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `divisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`) VALUES
(1, 'BPH'),
(2, 'HUMAS'),
(3, 'SDM'),
(4, 'KEILMUAN'),
(5, 'MEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Ketua Umum'),
(2, 'Wakil Ketua'),
(3, 'Sekretaris 1'),
(4, 'Sekretaris 2'),
(5, 'Bendahara 1'),
(6, 'Bendahara 2'),
(7, 'Koordinator'),
(8, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `log_voting`
--

CREATE TABLE `log_voting` (
  `id` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `ip_address` varchar(128) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `sistem_operasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_voting`
--

INSERT INTO `log_voting` (`id`, `id_pemilih`, `ip_address`, `browser`, `sistem_operasi`, `status`, `time`) VALUES
(111, 26, '::1', 'Chrome 84.0.4147.89', 'Mac OS X', 'login', '1595909395'),
(112, 26, '::1', 'Chrome 84.0.4147.89', 'Mac OS X', 'logout', '1595909977');

-- --------------------------------------------------------

--
-- Table structure for table `oprec`
--

CREATE TABLE `oprec` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `divisi` varchar(128) NOT NULL,
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oprec`
--

INSERT INTO `oprec` (`id`, `nim`, `nama`, `angkatan`, `divisi`, `status_id`, `status`, `file`) VALUES
(1, '5190411078', 'Windi Saputra ', '2019', 'BPH', 1, 'LULUS', ''),
(2, '5190411591', 'Rizaldi Fathan Qorib ', '2019', 'BPH', 1, 'LULUS', ''),
(3, '5190411226', 'Tri Agustina ', '2019', 'BPH', 1, 'LULUS', ''),
(4, '5180411074', 'Taufik Ismail ', '2018', 'HUMAS', 1, 'LULUS', ''),
(5, '5180411234', 'Putri Akhsadini ', '2018', 'HUMAS', 1, 'LULUS', ''),
(6, '5190411130', 'Siti Latipah ', '2019', 'HUMAS', 1, 'LULUS', ''),
(7, '5190411052', 'Theo Fahrizal Syam ', '2019', 'HUMAS', 1, 'LULUS', ''),
(8, '5190411056', 'Dede Yudha Ardiantoro ', '2019', 'HUMAS', 1, 'LULUS', ''),
(9, '5190411515', 'Bimo Adi Nugroho ', '2019', 'HUMAS', 1, 'LULUS', ''),
(10, '5190411598', 'April Yanto T ', '2019', 'HUMAS', 1, 'LULUS', ''),
(11, '5190411034', 'Bagas Oktariansyah P ', '2019', 'SDM', 1, 'LULUS', ''),
(12, '5190411186', 'Farhan Anwar Nugraha ', '2019', 'SDM', 1, 'LULUS', ''),
(13, '5190411199', 'Novia Natasya ', '2019', 'SDM', 1, 'LULUS', ''),
(14, '5190411216', 'Hilda Dwi Novianti ', '2019', 'SDM', 1, 'LULUS', ''),
(15, '5190411310', 'Avrizal Ibrahim ', '2019', 'SDM', 1, 'LULUS', ''),
(16, '5190411528', 'Anggi Lestari ', '2019', 'SDM', 1, 'LULUS', ''),
(17, '5190411004', 'Kevin Alvian Aditya P ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(18, '5190411037', 'Agung Maulana ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(19, '5190411089', 'Sekar Eka Yuliana ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(20, '5190411568', 'Wadhifatur Rosyidah ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(21, '5190411521', 'Handini Tri Octaviani ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(22, '5190411597', 'Muhamad Rendi ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(23, '5190411617', 'Widik Zulvan Zakaria ', '2019', 'KEILMUAN', 1, 'LULUS', ''),
(24, '5180411120', 'Muhammad Fauzan P ', '2018', 'MEDIA', 1, 'LULUS', ''),
(25, '5190411024', 'Wahyu Zahir Ma\'ruf ', '2019', 'MEDIA', 1, 'LULUS', ''),
(26, '5190411104', 'Muhamad Guntur S ', '2019', 'MEDIA', 1, 'LULUS', ''),
(27, '5190411119', 'Immaculata Viandra AP ', '2019', 'MEDIA', 1, 'LULUS', ''),
(28, '5190411121', 'Naufal Puji Mahdy ', '2019', 'MEDIA', 1, 'LULUS', ''),
(29, '5190411154', 'Roby Pangestu ', '2019', 'MEDIA', 1, 'LULUS', ''),
(30, '5190411285', 'Tabrani ', '2019', 'MEDIA', 1, 'LULUS', ''),
(31, '5190411478', 'Rio Zulfa Pambudi ', '2019', 'MEDIA', 1, 'LULUS', ''),
(32, '5190411581', 'Mhd.akhdaan hefriyanto ', '2019', 'MEDIA', 1, 'LULUS', ''),
(33, '5190411599', 'Nindy Elisa Nababan ', '2019', 'MEDIA', 1, 'LULUS', ''),
(34, '5190411025', 'Muhammad Irgi Hafidz ', '2019', 'MEDIA', 2, 'TIDAK LULUS', ''),
(35, '5190411584', 'Kamaludin ', '2019', 'MEDIA', 2, 'TIDAK LULUS', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `set_pw` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `nim`, `nama`, `password`, `set_pw`, `id_calon`, `status`) VALUES
(1, '5170411002', 'Alwy Muhammad Syafii', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(2, '5180411002', 'Ahmad Gozali', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(3, '5170411180', 'Alya Wilmi Akbar', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(4, '5180411239', 'Happy Nessa Maharani', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(5, '5170411316', 'Aisa Amelia Titania', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(6, '5180411315', 'Fadli Anjas A', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(7, '5170411305', 'M Dwi Saputra', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(8, '5170411312', 'Saprillah', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(9, '5170411102', 'Decky Yanto Alfred', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(10, '5170411062', 'Baiq Aida Musliha', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(11, '5170411238', 'Saitin', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(12, '5170411055', 'Dedi Suryadi', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(13, '5180411006', 'Risma Nur Oktaviani', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(14, '5180411014', 'Riesmi Mardela', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(15, '5180411021', 'Dimas Ridho Amali', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(16, '5170411298', 'M Imam Zunaidi', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(17, '5170411146', 'Nur Wahid', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(18, '5170411249', 'Herlina Tri Hapsari', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(19, '5170411211', 'Anisa M Fitriyanti', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(20, '5180411317', 'M Apriandi Kusuma', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(21, '5180411194', 'Tarto Rizaldi', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(22, '5180411382', 'Alfian Hidayatulloh', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(23, '5170411336', 'Ilham Fathullah', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(24, '5170411045', 'Baiq Nurul', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(25, '5170411117', 'Shinta Bella', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(26, '5170411373', 'Jody Septiawan', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(27, '5170411283', 'Martinus', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(28, '5180411123', 'Yogi Dwi Adrian', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(29, '5180411165', 'Ricky Fakhruddin', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(30, '5180411190', 'Fajrul Ali Taqiyudin', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(31, '5180411302', 'Arief Rahman Wijaya', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(32, '5170411267', 'Rifandi Septiawan', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(33, '5170411150', 'Lisnawati', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(34, '5170411279', 'Taufik Amaryansyah', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(35, '5170411144', 'Chandra Julian N H', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(36, '5180411029', 'Erika Afrilia', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(37, '5180411113', 'Nathaniela Aptanta Parama', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(38, '5180411122', 'Muhammad Rosyid', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(39, '5180411133', 'Rahmat Nurul I', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(40, '5190411078', 'Windi Saputra ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(41, '5190411591', 'Rizaldi Fathan Qorib ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(42, '5190411226', 'Tri Agustina ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(43, '5180411074', 'Taufik Ismail ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(44, '5180411234', 'Putri Akhsadini ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(45, '5190411130', 'Siti Latipah ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(46, '5190411052', 'Theo Fahrizal Syam ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(47, '5190411056', 'Dede Yudha Ardiantoro ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(48, '5190411515', 'Bimo Adi Nugroho ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(49, '5190411598', 'April Yanto T ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(50, '5190411034', 'Bagas Oktariansyah P ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(51, '5190411186', 'Farhan Anwar Nugraha ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(52, '5190411199', 'Novia Natasya ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(53, '5190411216', 'Hilda Dwi Novianti ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(54, '5190411310', 'Avrizal Ibrahim ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(55, '5190411528', 'Anggi Lestari ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(56, '5190411004', 'Kevin Alvian Aditya P ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(57, '5190411037', 'Agung Maulana ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(58, '5190411089', 'Sekar Eka Yuliana ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(59, '5190411568', 'Wadhifatur Rosyidah ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(60, '5190411521', 'Handini Tri Octaviani ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(61, '5190411597', 'Muhamad Rendi ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(62, '5190411617', 'Widik Zulvan Zakaria ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(63, '5180411120', 'Muhammad Fauzan P ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(64, '5190411024', 'Wahyu Zahir Ma\'ruf ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(65, '5190411104', 'Muhamad Guntur S ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(66, '5190411119', 'Immaculata Viandra AP ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(67, '5190411121', 'Naufal Puji Mahdy ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(68, '5190411154', 'Roby Pangestu ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(69, '5190411285', 'Tabrani ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(70, '5190411478', 'Rio Zulfa Pambudi ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(71, '5190411581', 'Mhd.akhdaan hefriyanto ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(72, '5190411599', 'Nindy Elisa Nababan ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(73, '5190411025', 'Muhammad Irgi Hafidz ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0),
(74, '5190411584', 'Kamaludin ', '$2y$10$foSkp0IhzpTXLH2Cr5mptO1WMNcSYqizOvvAkSEJUEofjacUWtEAC', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nim`, `nama`, `id_divisi`, `id_jabatan`) VALUES
(1, '5170411002', 'Alwy Muhammad Syafii', 1, '1'),
(2, '5180411002', 'Ahmad Gozali', 1, '2'),
(3, '5170411180', 'Alya Wilmi Akbar', 1, '3'),
(4, '5180411239', 'Happy Nessa Maharani', 1, '4'),
(5, '5170411316', 'Aisa Amelia Titania', 1, '5'),
(6, '5180411315', 'Fadli Anjas A', 1, '6'),
(7, '5170411305', 'M Dwi Saputra', 2, '7'),
(8, '5170411312', 'Saprillah', 2, '8'),
(9, '5170411102', 'Decky Yanto Alfred', 2, '8'),
(10, '5170411062', 'Baiq Aida Musliha', 2, '8'),
(11, '5170411238', 'Saitin', 2, '8'),
(12, '5170411055', 'Dedi Suryadi', 2, '8'),
(13, '5180411006', 'Risma Nur Oktaviani', 2, '8'),
(14, '5180411014', 'Riesmi Mardela', 2, '8'),
(15, '5180411021', 'Dimas Ridho Amali', 2, '8'),
(16, '5170411298', 'M Imam Zunaidi', 3, '7'),
(17, '5170411146', 'Nur Wahid', 3, '8'),
(18, '5170411249', 'Herlina Tri Hapsari', 3, '8'),
(19, '5170411211', 'Anisa M Fitriyanti', 3, '8'),
(20, '5180411317', 'M Apriandi Kusuma', 3, '8'),
(21, '5180411194', 'Tarto Rizaldi', 3, '8'),
(22, '5180411382', 'Alfian Hidayatulloh', 3, '8'),
(23, '5170411336', 'Ilham Fathullah', 4, '7'),
(24, '5170411045', 'Baiq Nurul', 4, '8'),
(25, '5170411117', 'Shinta Bella', 4, '8'),
(26, '5170411373', 'Jody Septiawan', 4, '8'),
(27, '5170411283', 'Martinus', 4, '8'),
(28, '5180411123', 'Yogi Dwi Adrian', 4, '8'),
(29, '5180411165', 'Ricky Fakhruddin', 4, '8'),
(30, '5180411190', 'Fajrul Ali Taqiyudin', 4, '8'),
(31, '5180411302', 'Arief Rahman Wijaya', 4, '8'),
(32, '5170411267', 'Rifandi Septiawan', 5, '7'),
(33, '5170411150', 'Lisnawati', 5, '8'),
(34, '5170411279', 'Taufik Amaryansyah', 5, '8'),
(35, '5170411144', 'Chandra Julian N H', 5, '8'),
(36, '5180411029', 'Erika Afrilia', 5, '8'),
(37, '5180411113', 'Nathaniela Aptanta Parama', 5, '8'),
(38, '5180411122', 'Muhammad Rosyid', 5, '8'),
(39, '5180411133', 'Rahmat Nurul I', 5, '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `log_voting`
--
ALTER TABLE `log_voting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oprec`
--
ALTER TABLE `oprec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_voting`
--
ALTER TABLE `log_voting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `oprec`
--
ALTER TABLE `oprec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
