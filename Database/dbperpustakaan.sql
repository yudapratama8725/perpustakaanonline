-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 02:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cerita`
--

CREATE TABLE `tb_cerita` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_pinjam_buku` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_bln_thn_peminjaman` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kodelogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cerita`
--

INSERT INTO `tb_cerita` (`id`, `judul_buku`, `jumlah_pinjam_buku`, `nama_lengkap`, `tgl_bln_thn_peminjaman`, `no_hp`, `alamat`, `email`, `kodelogin`) VALUES
(3, 'Cerita Dongeng', 1, 'Yudha', '2021-03-31', 876543, 'Jln Tunjung', 'yuda@gmail.com', 1),
(4, 'Malin Kundang', 2, 'Angger', '2021-03-31', 876544, 'Jl. Jendral S', 'angger@gmail.com', 1),
(5, 'Timun Mas', 2, 'Faisal', '2021-04-01', 865443, 'Jln Bunga', 'faisal@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`nama`, `email`, `no_hp`, `pesan`) VALUES
('Faisal', 'faisal@gmail.com', 8754433, 'Salah Input Buku'),
('I Putu Mas Yuda Pratama', 'iptmasyudapratama8725@gmail.com', 9876543, 'Salah Input Nama');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login_admin`
--

CREATE TABLE `tb_login_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login_admin`
--

INSERT INTO `tb_login_admin` (`username`, `password`) VALUES
('yuda', 'pratama');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login_awal`
--

CREATE TABLE `tb_login_awal` (
  `kodelogin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login_awal`
--

INSERT INTO `tb_login_awal` (`kodelogin`, `username`, `password`) VALUES
(1, 'yuda', 'pratama'),
(6, 'iptmasyudapratama8725@gmail.com', 'UMHX8R'),
(8, 'bunga@gmail.com', 'QGIPFA'),
(11, 'iptmasyudapratama8725@gmail.com', 'IGF9CV');

-- --------------------------------------------------------

--
-- Table structure for table `tb_motivasi`
--

CREATE TABLE `tb_motivasi` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_pinjam_buku` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_bln_thn_peminjaman` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kodelogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_motivasi`
--

INSERT INTO `tb_motivasi` (`id`, `judul_buku`, `jumlah_pinjam_buku`, `nama_lengkap`, `tgl_bln_thn_peminjaman`, `no_hp`, `alamat`, `email`, `kodelogin`) VALUES
(3, 'Tembus Langit', 2, 'Yudha', '2021-03-31', 987654, 'Jl. Jendral S', 'yuda@gmail.com', 1),
(4, 'Mantappu Jiwa', 2, 'Angger', '2021-04-11', 8755444, 'Jln Kajuruan', 'angger@gmail.com', 1),
(5, 'Brave', 1, 'Yommy', '2021-03-31', 8653323, 'Jln Udayana', 'tommy@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_novel`
--

CREATE TABLE `tb_novel` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_pinjam_buku` int(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_bln_thn_peminjaman` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kodelogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_novel`
--

INSERT INTO `tb_novel` (`id`, `judul_buku`, `jumlah_pinjam_buku`, `nama_lengkap`, `tgl_bln_thn_peminjaman`, `no_hp`, `alamat`, `email`, `kodelogin`) VALUES
(3, 'Kita Pernah Salah', 2, 'Yudha', '2021-03-31', 87655, 'Jl. Jendral S', 'yuda@gmail.com', 1),
(4, 'Sabtu bersama Bapak', 1, 'Faisal', '2021-03-30', 876543, 'street', 'faisal@gmail.com', 1),
(5, 'Laskar Pelangi', 1, 'Indra', '2021-03-30', 85322, 'Jln Mawar', 'indra@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelajaran`
--

CREATE TABLE `tb_pembelajaran` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_pinjam_buku` int(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_bln_thn_peminjaman` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kodelogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembelajaran`
--

INSERT INTO `tb_pembelajaran` (`id`, `judul_buku`, `jumlah_pinjam_buku`, `nama_lengkap`, `tgl_bln_thn_peminjaman`, `no_hp`, `alamat`, `email`, `kodelogin`) VALUES
(15, 'UUD 1945', 2, 'I Putu Mas Yuda Pratama', '2021-04-01', 8754444, 'Jln Mawar', 'yuda@gmail.com', 1),
(16, 'UUD 1945', 1, 'Faisal', '2021-03-29', 87655, 'Street', 'faisal@gmail.com', 1),
(17, 'RPUL', 2, 'Wira', '2021-04-01', 87544, 'Jl. Jendral S', 'wira@gmail.com', 1),
(18, 'Matematika SD', 2, 'Dendi', '2021-04-08', 864333, 'Jl. Jendral S', 'dendi@gmail.com', 1),
(19, 'Java', 1, 'Jay', '2021-03-30', 8643, 'Jl. Mawar', 'jay@gmail.com', 1),
(20, 'Java Script', 2, 'Kevin', '2021-04-07', 824564, 'Jln Soka', 'kevin@gmail.com', 1),
(23, 'HTML', 2, 'Yudha', '2021-04-01', 7643, 'Jl. Jendral S', 'yuda@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `jumlah_pinjam_buku` int(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_bln_thn_peminjaman` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kodelogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`id`, `judul_buku`, `jumlah_pinjam_buku`, `nama_lengkap`, `tgl_bln_thn_peminjaman`, `no_hp`, `alamat`, `email`, `kodelogin`) VALUES
(4, '350 Resep', 1, 'Yudha', '2021-03-31', 876555, 'Jl. Jendral S', 'yuda@gmail.com', 1),
(5, 'Makanan Siap Saji', 2, 'Angger', '2021-04-01', 854443, 'Jl. Jendral S', 'angger@gmail.com', 1),
(6, 'Pintar Resep', 1, 'Indra', '2021-03-29', 854322, 'Jln Mawar', 'indra@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `nama_lengkap`, `alamat`, `telp`) VALUES
(1, 'iptmasyudapratama8725@gmail.co', 'I Putu Mas Yuda Pratama', 'Jl. Jendral S', '0865433456'),
(2, 'faisal@gmail.com', 'Faisal Tampan', 'Jln Tukad Sejati', '0875456754');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cerita`
--
ALTER TABLE `tb_cerita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodelogin` (`kodelogin`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_login_awal`
--
ALTER TABLE `tb_login_awal`
  ADD PRIMARY KEY (`kodelogin`);

--
-- Indexes for table `tb_motivasi`
--
ALTER TABLE `tb_motivasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodelogin` (`kodelogin`);

--
-- Indexes for table `tb_novel`
--
ALTER TABLE `tb_novel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodelogin` (`kodelogin`);

--
-- Indexes for table `tb_pembelajaran`
--
ALTER TABLE `tb_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodelogin` (`kodelogin`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodelogin` (`kodelogin`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cerita`
--
ALTER TABLE `tb_cerita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_login_awal`
--
ALTER TABLE `tb_login_awal`
  MODIFY `kodelogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_motivasi`
--
ALTER TABLE `tb_motivasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_novel`
--
ALTER TABLE `tb_novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pembelajaran`
--
ALTER TABLE `tb_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
