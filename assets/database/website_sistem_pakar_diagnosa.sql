-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 01:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_sistem_pakar_diagnosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `kode_aturan` varchar(11) NOT NULL,
  `jika` varchar(15) NOT NULL,
  `maka` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`kode_aturan`, `jika`, `maka`) VALUES
('A01', 'G01ANDG02ANDG03', 'P01'),
('A02', 'G01ANDG03ANDG02', 'P01'),
('A03', 'G02ANDG01ANDG03', 'P01'),
('A04', 'G02ANDG03ANDG01', 'P01'),
('A05', 'G03ANDG01ANDG02', 'P01'),
('A06', 'G03ANDG02ANDG01', 'P01'),
('A07', 'G06ANDG04ANDG05', 'P02'),
('A08', 'G06ANDG05ANDG04', 'P02'),
('A09', 'G04ANDG06ANDG05', 'P02'),
('A10', 'G04ANDG05ANDG06', 'P02'),
('A11', 'G05ANDG06ANDG04', 'P02'),
('A12', 'G05ANDG04ANDG06', 'P02'),
('A13', 'G01AnDG08ANDG07', 'P03'),
('A14', 'G01ANDG07ANDG08', 'P03'),
('A15', 'G08ANDG01ANDG07', 'P03'),
('A16', 'G08ANDG07ANDG01', 'P03'),
('A17', 'G07ANDG01ANDG08', 'P03'),
('A18', 'G07ANDG08ANDG01', 'P03'),
('A19', 'G11ANDG09ANDG1', 'P04'),
('A20', 'G11ANDG10ANDG09', 'P04'),
('A21', 'G09ANDG11ANDG10', 'P04'),
('A22', 'G09ANDG10ANDG11', 'P04'),
('A23', 'G10ANDG11ANDG09', 'P04'),
('A24', 'G10ANDG09ANDG11', 'P04');

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` varchar(11) NOT NULL,
  `penyakit` varchar(500) NOT NULL,
  `gejala` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `penyakit`, `gejala`) VALUES
('B01', '[p01] Insomnia', '[g01] Sulit Tidur Atau Tidur Yang Tidak Nyenyak, [g02] Kurang Konsentrasi, [g03] Daya Ingat Turun'),
('B02', '[p02] Obsessive Compulsive Disorder (OCD)', '[g04] Kecemasan, [g05] Perilaku Yang Dilakukan Berulang Kali Guna Menghilangkan Kecemasan, [g06] Bersifat Sangat Perfeksionis Dalam Segala Hal'),
('B03', '[p03] Gangguan Bipolar', '[g01] Sulit Tidur Atau Tidur Yang Tidak Nyenyak, [g07] Perubahan Suasana Hati Yang Drastis, [g08] Perasaan Bersalah Secara Berlebihan'),
('B04', '[p04] PTSD Post-Traumatic Stress Disorder', '[g09] Ingatan Pada Peristiwa Traumatis, [g10] Kecenderungan Untuk Mengelak, [g11] Perubahan Perilaku Dan Emosi');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(11) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `pertanyaan`) VALUES
('G01', 'Sulit Tidur Atau Tidur Yang Tidak Nyenyak', 'Apakah anda sulit tidur ataupun tidur tidak nyenyak di malam hari ?'),
('G02', 'Kurang Konsentrasi', 'Apakah anda seringkali kurang konsentrasi ?'),
('G03', 'Daya Ingat Turun', 'Apakah daya ingat anda menurun ?'),
('G04', 'Bersifat Sangat Perfeksionis Dalam Segala Hal', 'Apakah anda bersifat sangat perfeksionis dalam segala hal ?'),
('G05', 'Kecemasan', 'Apakah anda seringkali merasa cemas ?'),
('G06', 'Perilaku Yang Dilakukan Berulang Kali Guna Menghilangkan Kecemasan', 'Apakah anda seringkali melakukan suatu hal berulang kali ?'),
('G07', 'Perubahan Suasana Hati Yang Drastis', 'Apakah anda sering mengalami perubahan suasana hati yang drastis ?'),
('G08', 'Perasaan Bersalah Secara Berlebihan', 'Apakah anda sering merasa bersalah secara berlebihan ?'),
('G09', 'Ingatan Pada Peristiwa Traumatis', 'Apakah sering kali teringat pada peristiwa yang membuat trauma ?'),
('G10', 'Kecenderungan Untuk Mengelak', 'Apakah anda enggan memikirkan atau membicarakan peristiwa yang membuat trauma ?'),
('G11', 'Perubahan Perilaku Dan Emosi', 'Apakah anda merasakan mudah marah atau takut ?');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kode_kontak` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(65) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `deskripsi_penyakit` varchar(2000) NOT NULL,
  `solusi` varchar(2000) NOT NULL,
  `sumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `deskripsi_penyakit`, `solusi`, `sumber`) VALUES
('P01', 'Insomnia', 'Insomnia adalah gangguan yang menyebabkan penderitanya sulit tidur atau tidak cukup tidur, meski terdapat cukup waktu untuk melakukannya. Gangguan ini bisa berdampak pada aktivitas penderita keesokan harinya.', 'Pengobatan insomnia tergantung pada penyebab yang mendasarinya dan kondisi pasien. Metode yang dapat diberikan oleh dokter adalah psikoterapi atau konseling, obat-obatan, atau kombinasi keduanya.\r\nInsomnia dapat dicegah dengan melakukan beberapa cara sederhana, yaitu Menghindari banyak makan dan minum sebelum tidur, Membatasi konsumsi minuman beralkohol dan berkafein, dan Berusaha aktif di siang hari agar terhindar dari tidur siang.', 'https://www.alodokter.com/insomnia'),
('P02', 'Obsessive Compulsive Disorder (OCD)', 'Obsessive compulsive disorder (OCD) adalah gangguan mental yang mendorong penderitanya untuk melakukan tindakan tertentu secara berulang-ulang. Tindakan tersebut ia lakukan untuk mengurangi kecemasan dalam pikirannya.', 'Pengobatan OCD bertujuan untuk mengendalikan gejala yang muncul, agar kualitas hidup penderitanya bisa membaik. Metode pengobatannya dapat berupa terapi perilaku kognitif dan pemberian obat antidepresan.\r\nBelum ada cara pasti yang dapat dilakukan untuk mencegah OCD. Namun, pemeriksaan dan penanganan lebih awal dapat mencegah gejala OCD makin memburuk.', 'https://www.alodokter.com/ocd'),
('P03', 'Gangguan Bipolar', 'Gangguan bipolar adalah gangguan mental yang ditandai dengan perubahan yang drastis pada suasana hati. Penderita gangguan ini bisa merasa sangat bahagia kemudian berubah menjadi sangat sedih.', 'Metode pengobatan yang dapat dilakukan berupa pemberian obat-obatan dan psikoterapi. Pengobatan gangguan bipolar ini bertujuan untuk mengurangi frekuensi munculnya gejala, membantu penderita kembali beraktivitas seperti biasanya, dan menurunkan risiko mengalami gangguan kesehatan lainnya.\r\nHingga saat ini, belum ada metode yang dapat mencegah gangguan bipolar. Namun, untuk mengurangi kambuhnya gejala, penderita dianjurkan untuk rutin mengonsumsi obat-obatan sesuai resep dokter atau menjalani psikoterapi.', 'https://www.alodokter.com/gangguan-bipolar'),
('P04', 'PTSD Post-Traumatic Stress Disorder', 'PTSD (post-traumatic stress disorder) atau gangguan stres pascatrauma adalah gangguan mental yang muncul setelah seseorang mengalami atau menyaksikan peristiwa yang bersifat traumatis atau sangat tidak menyenangkan.', 'Pengobatan PTSD bertujuan untuk meredakan respons emosi pasien dan mengajarkan pasien cara mengendalikan diri dengan baik ketika teringat pada kejadian traumatis. Metode pengobatan yang dapat dilakukan meliputi Psikoterapi dan Obat-obatan.', 'https://www.alodokter.com/ptsd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `role` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telepon`, `role`, `username`, `password`) VALUES
('SPK001', 'User', 'Bandung', '082112311341', 'user', 'user', 'user123'),
('SPK002', 'Admin', 'Rancaekek', '085726800821', 'admin', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`kode_aturan`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kode_kontak`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
