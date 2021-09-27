-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jun 2021 pada 03.39
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muamalat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_role`
--

CREATE TABLE `admin_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_role`
--

INSERT INTO `admin_role` (`role_id`, `role`) VALUES
(1, 'Admin Komunitas'),
(2, 'Admin Koperasi Tijarah'),
(3, 'Admin Koperasi Tabarru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendakk`
--

CREATE TABLE `agendakk` (
  `id_agendaKK` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendakk`
--

INSERT INTO `agendakk` (`id_agendaKK`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '102020', '2020-10-24', '10:00:00', 'Jalan Dinas', 'Sorong', 'Rapat'),
(2, '042021', '2021-04-14', '08:22:00', 'Rapat ', 'Kantor', 'Rapat Harian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendaks_bq`
--

CREATE TABLE `agendaks_bq` (
  `id_agendaKS` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendaks_bq`
--

INSERT INTO `agendaks_bq` (`id_agendaKS`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '012020', '2020-01-24', '08:00:00', 'Jalan Dinas', 'Raja Ampat', 'Pembukaan Kantor Cabang'),
(2, '042021', '2021-04-14', '08:22:00', 'Rapat ', '', ''),
(3, '042021', '2021-04-14', '10:20:00', 'Turlap', 'Borasi', 'Bersih-bersih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendau_bq`
--

CREATE TABLE `agendau_bq` (
  `id_agendau` int(11) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendau_bq`
--

INSERT INTO `agendau_bq` (`id_agendau`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '042020', '2020-01-24', '08:11:12', 'Rapat', 'Kantor', ''),
(2, '082020', '2020-01-24', '11:00:00', 'Rapat', 'Kantor', 'RPS'),
(3, '012021', '2021-01-25', '09:00:00', 'Rapat', 'Kantor', 'RUPS'),
(4, '012021', '2021-01-26', '09:00:00', 'Bakti Sosial', 'Kampung B', 'Donasi bantuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunbq`
--

CREATE TABLE `akunbq` (
  `id_akun` int(11) NOT NULL,
  `no_reff` int(11) NOT NULL,
  `akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akunbq`
--

INSERT INTO `akunbq` (`id_akun`, `no_reff`, `akun`) VALUES
(1, 110, 'Aktiva Lancar'),
(2, 111, 'Kas'),
(3, 112, 'Bank'),
(4, 113, 'Piutang'),
(5, 114, 'Penyisihan Piutang Tak tertagih'),
(6, 115, 'Pendapatan Jasa Yang Akan Ditagih'),
(7, 116, 'Persediaan Barang Dagang'),
(8, 117, 'Persediaan Bahan Baku'),
(9, 118, 'Perlengkapan'),
(10, 119, 'Sewa Dibayar Muka'),
(11, 120, 'Aktiva Tetap'),
(12, 121, 'Tanah'),
(13, 122, 'Bangunan'),
(14, 123, 'Peralatan'),
(15, 124, 'Kendaraan'),
(16, 125, 'Akumulasi Penyusutan'),
(17, 126, 'Akumulasi Penyusutan Bangunan'),
(18, 127, 'Akumulasi Penyusustan Peralatan'),
(19, 128, 'Akumulasi Penyusustan Kendaraan'),
(20, 210, 'Kewajiban Lancar'),
(21, 211, 'Dana Sosial'),
(22, 212, 'Dana Pembangunan Kerja Daerah'),
(23, 213, 'Dana Pendidikan'),
(24, 214, 'Dana Kesejahteraan Pegawai'),
(25, 215, 'Dana Tabungan Idul Fitri'),
(26, 220, 'Hutang Jangka Pendek'),
(27, 221, 'Hutang Usaha'),
(28, 222, 'Hutang Jangka Panjang'),
(29, 223, 'Hutang Bank'),
(30, 300, 'Modal'),
(31, 310, 'Modal Pemilik'),
(32, 311, 'Simpanan Pokok'),
(33, 312, 'Simpanan Wajib'),
(34, 313, 'Sisa Hasil Usaha (SHU)'),
(35, 314, 'Cadangan'),
(36, 315, 'Prive'),
(37, 400, 'Pendapatan'),
(38, 410, 'Pendapatan'),
(39, 411, 'Pendapatan Operasional'),
(40, 412, 'Pendapatan Komisi'),
(41, 413, 'Penjualan Barang'),
(42, 414, 'Potongan Penjualan'),
(43, 415, 'Retur Penjualan'),
(44, 416, 'Ikhtiar Laba/Rugi'),
(45, 417, 'Harga Pokok Penjualan'),
(46, 418, 'Harga Pokok Penjualan'),
(47, 419, 'Potongan Pembelian'),
(48, 420, 'Retur Pembelian'),
(49, 421, 'Biaya Penjualan'),
(50, 422, 'Biaya Pengiriman'),
(51, 423, 'Biaya Penjualan Lain-lain'),
(52, 510, 'Biaya Admin dan Umum'),
(53, 511, 'Biaya Gaji Karyawan'),
(54, 512, 'Biaya Telepon'),
(55, 513, 'Biaya Listrik'),
(56, 514, 'Biaya Air'),
(57, 515, 'Biaya Depresiasi Peralatan'),
(58, 516, 'Biaya Perlengkapan'),
(59, 517, 'Biaya Makan dan Minum'),
(60, 518, 'Biaya Sewa Tempat Usaha'),
(61, 519, 'Biaya Transportasi'),
(62, 520, 'Biaya Rapat'),
(63, 521, 'Biaya Penghapus Piutang'),
(64, 522, 'Beban Penyusutan Gedung Kantor'),
(65, 523, 'Beban Penyusutan Peralatan kantor'),
(66, 524, 'Tunjangan Hari Raya'),
(67, 525, 'Beban Pembinaan'),
(68, 526, 'Beban Bunga Bank'),
(69, 527, 'Beban RAT Tahun Buku'),
(70, 528, 'Pajak Penghasilan (Pph)'),
(71, 529, 'Biaya Umum Lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_aksesbq`
--

CREATE TABLE `data_aksesbq` (
  `id_akses` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `tgl_update` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_aksesbq`
--

INSERT INTO `data_aksesbq` (`id_akses`, `id_jabatan`, `id_anggota`, `nama_anggota`, `jabatan`, `hak_akses`, `tgl_update`, `id_admin`, `nama_admin`) VALUES
(1, 1, 1, 'Madinah', 'Ketua', 1, '2021-04-14', 1, 'Emi Asia'),
(2, 2, 2, 'Dinni Fitriati Ramadani', 'Sekretaris', 2, '2021-04-14', 1, 'Emi Asia'),
(3, 3, 3, 'Marcelin Febriyani', 'Bendahara', 3, '2021-04-14', 1, 'Emi Asia'),
(4, 4, 4, 'Eva Anjuni', 'Kepala Divisi Teller', 4, '2021-04-14', 1, 'Emi Asia'),
(5, 5, 5, 'Olland Liptiay', 'Anggota Divisi Teller', 5, '2021-04-14', 1, 'Emi Asia'),
(6, 6, 6, 'Nova Anike Putri', 'Kepala Divisi Pembiayaan', 6, '2021-04-14', 1, 'Emi Asia'),
(7, 7, 7, 'Citra Arru', 'Anggota Divisi Pembiayaan', 7, '2021-04-14', 1, 'Emi Asia'),
(8, 8, 8, 'Muhammad Arief R. Barahima', 'Kepala Divisi Pemasaran', 8, '2021-04-14', 1, 'Emi Asia'),
(9, 9, 9, 'Sopri Togatorop', 'Anggota Divisi Pemasaran', 9, '2021-04-14', 1, 'Emi Asia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggotabq`
--

CREATE TABLE `data_anggotabq` (
  `id_anggota` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `saldo_uang` varchar(100) NOT NULL,
  `saldo_emas` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_anggotabq`
--

INSERT INTO `data_anggotabq` (`id_anggota`, `id_jabatan`, `nik`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kawin`, `alamat`, `no_hp`, `status`, `email`, `sandi`, `id_admin`, `nama_admin`, `tgl_daftar`, `saldo_uang`, `saldo_emas`, `jabatan`, `hak_akses`, `foto`) VALUES
(1, 1, '9202127108780001', 'Madinah', 'Manokwari', '1999-06-26', 'Perempuan', 'Belum Kawin', 'Pasirido', '0987655432', 1, 'madinah@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Ketua', '1', '8d22586e44bff658c1ee9de447d35d93_GL5cc69c2e53b14-removebg-preview2.png'),
(2, 2, '9202127108780002', 'Dinni Fitriati Ramadani', 'Manokwari', '1999-12-11', 'Perempuan', 'Belum Kawin', 'SP8', '08765432', 1, 'dini@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Sekretaris', '2', 'a.png'),
(3, 3, '9202127108780003', 'Marcelin Febriyani', 'Timika', '1999-03-19', 'Perempuan', 'Belum Kawin', 'Marina', '09876543322', 1, 'celin3@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Bendahara', '3', '101-1012549_vektor-bunga-png-hd-transparent-png1.png'),
(4, 4, '9202127108780004', 'Eva Anjuni', 'Manokwari', '1999-06-14', 'Perempuan', 'Belum Kawin', 'Jl. Bandung', '09876554', 1, 'eva@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Kepala Divisi Teller', '4', 'aa.PNG'),
(5, 5, '9202127108780005', 'Olland Liptiay', 'Bintuni', '1996-07-07', 'Perempuan', 'Belum Kawin', 'Swapen', '99793389634', 1, 'olland76@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Anggota Divisi Teller', '5', 'koin.png'),
(6, 6, '9202127108780006', 'Nova Anike Putri', 'Manokwari', '1999-11-15', 'Perempuan', 'Belum Kawin', 'Sogun', '672378202', 1, 'nova5@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Kepala Divisi Pembiayaan', '6', '1306.png'),
(7, 7, '9202127108780007', 'Citra Arru', 'Manokwari', '1999-03-04', 'Perempuan', 'Belum Kawin', 'Wosi', '764678976755', 0, 'citra2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Anggota Divisi Pembiayaan', '7', 'unnamed.gif'),
(8, 8, '9202127108780008', 'Muhammad Arief R. Barahima', 'Manokwari', '1999-08-24', 'Laki-Laki', 'Belum Kawin', 'Amban Pantai', '7832832190723', 1, 'eky@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Kepala Divisi Pemasaran', '8', 's.png'),
(9, 9, '9202127108780009', 'Sopri Togatorop', 'Sumatera', '1999-06-01', 'Laki-Laki', 'Belum Kawin', 'Reremi', '871378132', 1, 'sopri9@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'Emi Asia', '2021-04-14', '1.000.000', '10gr', 'Anggota Divisi Pemasaran', '9', 'sa.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatanbq`
--

CREATE TABLE `data_jabatanbq` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jabatanbq`
--

INSERT INTO `data_jabatanbq` (`id_jabatan`, `jabatan`, `status`, `hak_akses`) VALUES
(1, 'Ketua', '1', '1'),
(2, 'Sekretaris', '1', '2'),
(3, 'Bendahara', '1', '3'),
(4, 'Kepala Divisi Teller', '1', '4'),
(5, 'Anggota Divisi Teller', '1', '5'),
(6, 'Kepala Divisi Pembiayaan', '1', '6'),
(7, 'Anggota Divisi Pembiayaan', '1', '7'),
(8, 'Kepala Divisi Pemasaran', '1', '8'),
(9, 'Anggota Divisi Pemasaran', '1', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_piutang`
--

CREATE TABLE `data_piutang` (
  `id_piutang` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_piutang`
--

INSERT INTO `data_piutang` (`id_piutang`, `id_akun`, `tgl_pinjam`, `nama`, `alamat`, `no_hp`, `saldo`) VALUES
(1, 4, '2021-04-17', 'Muli', 'Amban', '087615221', '1000000'),
(2, 4, '2021-04-17', 'Suro', 'Jl. Toba', '086578899', '1200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnalbq`
--

CREATE TABLE `jurnalbq` (
  `id_jurnal` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_reff` int(11) NOT NULL,
  `akun` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `debet` varchar(100) NOT NULL,
  `kredit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnalbq`
--

INSERT INTO `jurnalbq` (`id_jurnal`, `id_akun`, `tgl`, `no_reff`, `akun`, `keterangan`, `debet`, `kredit`) VALUES
(1, 2, '2021-02-01', 111, 'Kas', 'Modal Pulsa', '500000', '0'),
(2, 31, '2021-04-01', 310, 'Modal Pemilik', 'Modal Pulsa', '0', '500000'),
(3, 2, '2021-02-02', 111, 'Kas', 'Modal Masker', '335000', '0'),
(4, 31, '2021-04-02', 310, 'Modal Pemilik', 'Modal Masker', '0', '335000'),
(5, 2, '2021-02-25', 111, 'Kas', 'Modal Jastip', '136000', '0'),
(6, 31, '2021-04-25', 310, 'Modal Pemilik', 'Modal Jastip', '0', '136000'),
(7, 3, '2021-03-16', 112, 'Bank', 'Hasil Pulsa', '84000', '0'),
(8, 38, '2021-03-16', 410, 'Pendapatan', 'Hasil Pulsa', '0', '84000'),
(9, 2, '2021-04-16', 111, 'Kas', 'Uang Masker', '420000', '0'),
(10, 38, '2021-04-16', 410, 'Pendapatan', 'Uang Masker', '0', '420000'),
(11, 3, '2021-04-17', 112, 'Bank', 'Uang Jastip', '200000', '0'),
(12, 38, '2021-04-17', 410, 'Pendapatan', 'Uang Jastip', '0', '200000'),
(13, 4, '2021-04-17', 113, 'Piutang', 'Beri pinjaman', '1000000', '0'),
(14, 3, '2021-04-17', 112, 'Bank', 'Beri pinjaman', '0', '1000000'),
(15, 4, '2021-04-17', 113, 'Piutang', 'Beri Pinjaman', '1200000', '0'),
(16, 3, '2021-04-17', 112, 'Bank', 'Beri Pinjaman', '0', '1200000'),
(18, 3, '2021-04-17', 112, 'Bank', 'Pembelian Aktiva Tetap', '1000000', '0'),
(19, 12, '2021-04-17', 121, 'Tanah', 'Pembelian Aktiva Tetap', '0', '1000000'),
(20, 40, '2021-04-17', 412, 'Pendapatan Komisi', 'Pendapatan Operasional', '2000000', '0'),
(21, 41, '2021-04-17', 413, 'Penjualan Barang', 'Pendapatan Operasional', '0', '2000000'),
(22, 42, '2021-04-17', 414, 'Potongan Penjualan', 'Jual', '3000000', '0'),
(23, 44, '2021-04-17', 416, 'Ikhtiar Laba/Rugi', 'Jual', '0', '3000000'),
(24, 45, '2021-04-18', 417, 'Harga Pokok Penjualan', 'Hpp', '500000', '0'),
(25, 47, '2021-04-18', 419, 'Potongan Pembelian', 'Hpp', '0', '500000'),
(26, 50, '2021-04-18', 422, 'Biaya Pengiriman', 'Biaya Penjualan', '150000', '0'),
(27, 3, '2021-04-18', 112, 'Bank', 'Biaya Penjualan', '0', '150000'),
(28, 3, '2021-04-18', 112, 'Bank', 'Gaji', '100000', '0'),
(29, 53, '2021-04-18', 511, 'Biaya Gaji Karyawan', 'Gaji', '0', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id_anggota` int(11) NOT NULL,
  `id_sa` int(11) NOT NULL,
  `nama_sa` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(100) NOT NULL,
  `status_aktif` varchar(100) NOT NULL,
  `tgl_terdaftar` date NOT NULL,
  `role_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_anggota`, `id_sa`, `nama_sa`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `status_kawin`, `no_hp`, `alamat`, `pangkat`, `email`, `sandi`, `status_aktif`, `tgl_terdaftar`, `role_id`, `foto`) VALUES
(1, 1, 'Super Admin', '123456789098765', 'Emi Asia', 'Manokwari', '1998-04-04', 'Perempuan', 'Belum Kawin', '082198931489', 'Jl. Toba', 'Admin Koperasi Tijarah', 'asiaemi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Aktif', '2021-04-14', 2, 'emi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `agendakk`
--
ALTER TABLE `agendakk`
  ADD PRIMARY KEY (`id_agendaKK`);

--
-- Indexes for table `agendaks_bq`
--
ALTER TABLE `agendaks_bq`
  ADD PRIMARY KEY (`id_agendaKS`);

--
-- Indexes for table `agendau_bq`
--
ALTER TABLE `agendau_bq`
  ADD PRIMARY KEY (`id_agendau`);

--
-- Indexes for table `akunbq`
--
ALTER TABLE `akunbq`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `data_aksesbq`
--
ALTER TABLE `data_aksesbq`
  ADD PRIMARY KEY (`id_akses`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `data_anggotabq`
--
ALTER TABLE `data_anggotabq`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `data_jabatanbq`
--
ALTER TABLE `data_jabatanbq`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_piutang`
--
ALTER TABLE `data_piutang`
  ADD PRIMARY KEY (`id_piutang`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `jurnalbq`
--
ALTER TABLE `jurnalbq`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_sa` (`id_sa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agendakk`
--
ALTER TABLE `agendakk`
  MODIFY `id_agendaKK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agendaks_bq`
--
ALTER TABLE `agendaks_bq`
  MODIFY `id_agendaKS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agendau_bq`
--
ALTER TABLE `agendau_bq`
  MODIFY `id_agendau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `akunbq`
--
ALTER TABLE `akunbq`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `data_aksesbq`
--
ALTER TABLE `data_aksesbq`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_anggotabq`
--
ALTER TABLE `data_anggotabq`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_jabatanbq`
--
ALTER TABLE `data_jabatanbq`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_piutang`
--
ALTER TABLE `data_piutang`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnalbq`
--
ALTER TABLE `jurnalbq`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_aksesbq`
--
ALTER TABLE `data_aksesbq`
  ADD CONSTRAINT `data_aksesbq_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatanbq` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_aksesbq_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggotabq` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_anggotabq`
--
ALTER TABLE `data_anggotabq`
  ADD CONSTRAINT `data_anggotabq_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatanbq` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_piutang`
--
ALTER TABLE `data_piutang`
  ADD CONSTRAINT `data_piutang_ibfk_1` FOREIGN KEY (`id_piutang`) REFERENCES `akunbq` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jurnalbq`
--
ALTER TABLE `jurnalbq`
  ADD CONSTRAINT `jurnalbq_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akunbq` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
