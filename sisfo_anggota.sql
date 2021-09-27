-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2021 pada 09.59
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_anggota`
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
(0, 'Hidden User'),
(1, 'Admin Komunitas'),
(2, 'Admin Koperasi Tijarah'),
(3, 'Admin Koperasi Tabarru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendakk_bq`
--

CREATE TABLE `agendakk_bq` (
  `id_agendakk` int(11) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agendakk_bq`
--

INSERT INTO `agendakk_bq` (`id_agendakk`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '092021', '2021-09-13', '09:00:00', 'Rapat Umum', 'Kantor', 'Rapat tahunan membahas pemasukan keuangan koperasi'),
(2, '092021', '2021-09-14', '08:00:00', 'Kunjungan ke Pesantren Hidayahtulah', 'Arfai', 'Pemberian sumbangan kepada pesantren hidayahtullah'),
(3, '092021', '2021-09-15', '10:20:13', 'Rapat dewan direksi', 'Kantor', 'Rapat untuk membahas iuran koperasi'),
(4, '092021', '2021-09-16', '13:24:26', 'Bakto sosial', 'kampung merbabu', 'Santunan memberikan bantuang dana pembangunan untuk beberapa sekolah'),
(5, '092021', '2021-09-17', '10:24:26', 'Rapat mingguan', 'Kantor', 'Rapat membahas turun naiknya harga emas'),
(6, '092021', '2021-09-14', '10:53:00', 'Gerakan indonesia sehat', 'Gedung wanita', 'Pengadaan vaksinasi kepada masyakat dalam rangka hari sehat sedunia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendaks`
--

CREATE TABLE `agendaks` (
  `id_agendaKS` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendaks`
--

INSERT INTO `agendaks` (`id_agendaKS`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '042020', '2020-04-30', '08:00:00', 'Jalan Dinas', 'Raja Ampat', 'Pembukaan Kantor Cabang'),
(2, '052021', '2021-05-26', '08:22:00', 'Rapat ', 'Manokwari', 'Rapat Anggota Koperasi Tabarru'),
(3, '062021', '2021-06-14', '10:20:00', 'Turlap', 'Borasi', 'Bersih-bersih'),
(4, '072021', '2021-07-08', '07:50:00', 'Memberi dana bantuan', 'Manokwari', 'Membantu biaya berobat anggota tabarru'),
(5, '082021', '2021-08-01', '22:47:00', 'Memberi dana bantuan', 'Sekolah SMA NX Manokwari', 'Memberikan beasiswa kepada siswa/siswi yang membutuhkan');

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
(3, '042021', '2021-04-14', '10:20:00', 'Turlap', 'Borasi', 'Bersih-bersih'),
(0, '092021', '2021-09-14', '10:57:00', 'Gerakan indonesia sehat', 'Gedung wanita', 'Pengadaan vaksinasi kepada masyakat dalam rangka hari sehat sedunia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendaumum`
--

CREATE TABLE `agendaumum` (
  `id_agendau` int(11) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` text NOT NULL,
  `lokasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendaumum`
--

INSERT INTO `agendaumum` (`id_agendau`, `bulan`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`) VALUES
(1, '012021', '2021-01-01', '16:54:36', 'Donasi', 'Manokwari', 'Berbagi bersama'),
(2, '082021', '2021-08-31', '00:00:00', 'Rapat', 'Manokwari', 'w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendaumum_k`
--

CREATE TABLE `agendaumum_k` (
  `id_agendau` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `agenda` varchar(122) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `pembuat_agenda` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendaumum_k`
--

INSERT INTO `agendaumum_k` (`id_agendau`, `tanggal`, `jam`, `agenda`, `lokasi`, `keterangan`, `pembuat_agenda`) VALUES
(1, '2021-08-28', '19:43:00', 'Ketemuan', 'Dapur', 'Wajib Datang', 'Anggota Dewan Ulama'),
(38, '2021-06-11', '21:31:00', 'Diskusi bersama Staf Bidang Keanggotaan', 'Masjid Ar-Rahman', 'Wajib Hadir', 'Bendahara Dewan Cendekiawan'),
(39, '2021-06-17', '21:32:00', 'Pengajian', 'Masjid Ar-Rahman', 'Wajib Hadir', 'Bendahara Dewan Cendekiawan'),
(40, '2021-06-09', '20:28:00', 'Pengajian', 'Masjid Ar-Rahman', 'Wajib Hadir', 'Anggota Dewan Cendekiawan'),
(41, '2021-08-18', '13:12:00', 'Ngegame', 'Discord', 'Gaskan! ayo', 'Staf Bidang Keanggotaan'),
(42, '2021-08-26', '15:26:00', 'Ngegame', 'Discord', 'Hajar!', 'Ketua Dewan Pimpinan'),
(43, '2021-08-20', '20:47:00', 'acara', 'manokwari', 'Wajib', 'Sekretaris Dewan Pimpinan'),
(44, '2021-08-26', '21:06:00', 'acara', 'Mako Brimob', 'Wajib hadir', 'Bendahara Dewan Pimpinan'),
(45, '2021-08-19', '22:19:00', 'acara', 'mkw', 'GAS SAS', 'Staf Bidang Pendidikan'),
(46, '2021-08-24', '18:42:00', 'acara', 'Rumah', 'Mantap', 'Staf Bidang Pelatihan'),
(47, '2021-08-25', '20:28:00', 'Ngumpul', 'Pos Kamling', 'Makan-makan', 'Staf Bidang Riset & Pengembangan');

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
-- Struktur dari tabel `agenda_kuttab`
--

CREATE TABLE `agenda_kuttab` (
  `id_agendaK` int(11) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `waktu_agenda` time NOT NULL DEFAULT current_timestamp(),
  `agenda` varchar(255) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda_kuttab`
--

INSERT INTO `agenda_kuttab` (`id_agendaK`, `tgl_agenda`, `waktu_agenda`, `agenda`, `lokasi`, `keterangan`) VALUES
(2, '2021-05-12', '13:00:00', 'Tarawih Bareng', 'Masjid Al-Kauttsar', 'Terlakasana dengan baik dan lancar.'),
(3, '2021-05-13', '16:29:00', 'Pengajian', 'Masjid Ar-Rahman', 'Wajib Hadir dan Cepat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_pelatihan`
--

CREATE TABLE `agenda_pelatihan` (
  `id_agendaP` int(11) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `waktu_agenda` time NOT NULL DEFAULT current_timestamp(),
  `agenda` varchar(255) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda_pelatihan`
--

INSERT INTO `agenda_pelatihan` (`id_agendaP`, `tgl_agenda`, `waktu_agenda`, `agenda`, `lokasi`, `keterangan`) VALUES
(2, '2021-05-12', '13:00:00', 'Latihan Step by Step', 'Ruangan Pelatihan', 'Wajib Hadir'),
(5, '2021-05-15', '08:34:00', 'Pelatihan Pelafalan', 'Ruangan Pelatihan', 'Wajib Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses_superadmin`
--

CREATE TABLE `akses_superadmin` (
  `id_sakses` char(11) NOT NULL,
  `hak_akses` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akses_superadmin`
--

INSERT INTO `akses_superadmin` (`id_sakses`, `hak_akses`) VALUES
('1S', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunbm`
--

CREATE TABLE `akunbm` (
  `id_akun` int(11) NOT NULL,
  `no_reff` int(11) NOT NULL,
  `akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akunbm`
--

INSERT INTO `akunbm` (`id_akun`, `no_reff`, `akun`) VALUES
(1, 11000, 'Aset Lancar'),
(2, 11100, 'Kas dan Setara Kas'),
(3, 11200, 'Investasi'),
(4, 11300, ' Piutang Emas'),
(5, 11400, 'Perlengkapan'),
(6, 11500, 'Uang Muka Program'),
(7, 11600, 'Uang Jaminan'),
(8, 12000, 'Aset Tidak Lancar'),
(9, 12100, 'Penyertaan dan Investasi'),
(10, 12200, 'Aset Tetap'),
(11, 12300, 'Akumulasi Penyusutan'),
(12, 12400, 'Aset Tetap Tidak Terwujud'),
(13, 12500, 'Aset Kelolaan'),
(14, 12600, 'Aset Lainnya'),
(15, 21000, 'Liabilitas Jangka Pendek'),
(16, 21100, 'Titipan Penyaluran'),
(17, 21200, 'Utang Pajak'),
(18, 21300, 'Utang Lainnya'),
(19, 21400, 'Dana Tabungan Idul Fitri'),
(20, 22000, 'Liabilitas Jangka Panjang'),
(21, 22100, 'Utang Pihak Ketiga'),
(22, 22200, 'Liabilitas Imbalan Kerja'),
(23, 22300, 'Utang Lainnya'),
(24, 31000, 'Penerimaan Dana Zakat'),
(25, 31100, 'Zakat Fitrah'),
(26, 31200, 'Zakat Maal'),
(27, 31210, 'Zakat Logam Mulia'),
(28, 31220, 'Zakat Uang Dan Surat Berharga'),
(29, 31230, 'Zakat Perniagaan'),
(30, 31240, 'Zakat Hasil Pertanian'),
(31, 31250, 'Zakat Peternakan'),
(32, 31260, 'Zakat Pertambangan'),
(33, 31270, 'Zakat Perindustrian'),
(34, 31280, 'Zakat Profesi'),
(35, 31290, 'Zakat Rikaz'),
(36, 31300, 'Fidyah'),
(37, 31400, 'Bagian Amil Atas Penerimaan Dana Zakat'),
(38, 32000, 'Penyaluran Dana Zakat'),
(39, 32100, 'Fakir - Miskin'),
(40, 32200, 'Riqab'),
(41, 32300, 'Gharim'),
(42, 32400, 'Muallaf'),
(43, 32500, 'Sabilillah'),
(44, 32600, 'Ibnu Sabil'),
(45, 32700, 'Penyaluran Zakat Fitrah dan Fidyah'),
(46, 33000, 'Penerimaan Dana Infak/Sedekah'),
(47, 33100, 'Infak/Sedekah Muqayyadah '),
(48, 33200, 'Infak/Sedekah Mutlaqah'),
(49, 33300, 'Bagian Amil atas Penerimaan Dana Infak'),
(50, 34000, 'Penyaluran Dana Infak/Sedekah'),
(51, 34100, 'Penyaluran Infak/Sedekah Muqayyadah '),
(52, 34200, 'Penyaluaran infak/Sedekah Mutlaqah'),
(53, 35000, 'Penerimaan Dana Wakaf'),
(54, 35100, 'Penerimaan Wakaf Kesehatan'),
(55, 35200, 'Penerimaan Wakaf Pendidikan'),
(56, 35300, 'Penerimaan Wakaf Duafa'),
(57, 36000, 'Penyaluran Dana Wakaf'),
(58, 36100, 'Penyaluran Wakaf Kesehatan'),
(59, 36200, 'Penyaluran Wakaf Pendidikan'),
(60, 36300, 'Penyaluran Wakaf Duafa'),
(61, 37000, 'Penerimaan Dana Amil'),
(62, 37100, 'Penerimaan Hibah'),
(63, 37200, 'Penerimaan Bagi Hasil Bank'),
(64, 37300, 'Penerimaan Amil Lainnya'),
(65, 38000, 'Penyaluran Dana Amil'),
(66, 38100, 'Gaji dan Honor'),
(67, 38200, 'Sekertariat Dan Rumah Tangga'),
(68, 38300, 'Pemasaran'),
(70, 38400, 'Pemberian Hibah'),
(71, 38500, 'Operasional Lainnya'),
(72, 39000, 'Penerimaan Dana NonHalal'),
(73, 39100, 'Penerimaan Bunga Bank'),
(74, 39200, 'Penerimaan Jasa Giro'),
(75, 39300, 'Penerimaan NonHalal Lainnya'),
(76, 41000, 'Penyaluran Dana NonHalal '),
(77, 41100, 'Administrasi Bank'),
(78, 0, 'coba');

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
(34, 313, 'Simpanan Sukarela'),
(35, 314, 'Sisa Hasil Usaha (SHU)'),
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
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `name`, `message`, `waktu`) VALUES
(29, 'Eky', 'wkwkwkw', '2021-07-26 19:28:14'),
(97, 'Maulana Komunitas', 'blabla', '2021-07-26 19:28:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akses`
--

CREATE TABLE `data_akses` (
  `id_akses` int(11) NOT NULL,
  `nama_akses` varchar(128) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_akses`
--

INSERT INTO `data_akses` (`id_akses`, `nama_akses`, `status`) VALUES
(0, 'Anggota Tanpa Jabatan', 'Aktif'),
(1, 'Ketua Dewan Pimpinan', 'Aktif'),
(2, 'Sekretaris Dewan Pimpinan', 'Aktif'),
(3, 'Bendahara Dewan Pimpinan', 'Aktif'),
(4, 'Staf Bidang Pendidikan', 'Aktif'),
(5, 'Staf Bidang Pelatihan', 'Aktif'),
(6, 'Staf Bidang Keanggotaan', 'Aktif'),
(7, 'Staf Bidang Riset & Pengembangan', 'Aktif'),
(8, 'Ketua Dewan Ulama', 'Aktif'),
(9, 'Sekretaris Dewan Ulama', 'Aktif'),
(10, 'Bendahara Dewan Ulama', 'Aktif'),
(11, 'Anggota Dewan Ulama', 'Aktif'),
(12, 'Ketua Dewan Cendekiawan', 'Aktif'),
(13, 'Sekretaris Dewan Cendekiawan', 'Aktif'),
(14, 'Bendahara Dewan Cendekiawan', 'Aktif'),
(15, 'Anggota Dewan Cendekiawan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_aksesbm`
--

CREATE TABLE `data_aksesbm` (
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
-- Dumping data untuk tabel `data_aksesbm`
--

INSERT INTO `data_aksesbm` (`id_akses`, `id_jabatan`, `id_anggota`, `nama_anggota`, `jabatan`, `hak_akses`, `tgl_update`, `id_admin`, `nama_admin`) VALUES
(1, 1, 1, 'Madinah', 'Ketua', 1, '2021-05-09', 1, 'Madinah'),
(2, 2, 2, 'Emi Asia', 'Sekretaris', 2, '2021-05-09', 1, 'Madinah'),
(3, 3, 3, 'Dinni F Ramadani', 'Bendahara', 3, '2021-05-09', 1, 'Madinah'),
(4, 4, 4, 'Citra Y L Arru', 'Kepala Divisi Teller', 4, '2021-05-09', 1, 'Madinah'),
(5, 5, 5, 'Sopri Togatorop', 'Anggota Divisi Teller', 5, '2021-05-09', 1, 'Madinah'),
(6, 6, 6, 'Eva Anjuni', 'Kepala Divisi Pelayanan Pinjaman', 6, '2021-05-09', 1, 'Madinah'),
(7, 7, 7, 'Aprianto T Kamma', 'Anggota Divisi Pelayanan Pinjaman', 7, '2021-05-09', 1, 'Madinah'),
(8, 8, 8, 'Yolanda Liptiay', 'Kepala Divisi Pelayanan Jaminan', 8, '2021-05-09', 1, 'Madinah'),
(9, 9, 9, 'Marcelin Febryani', 'Anggota Divisi Pelayanan Jaminan', 9, '2021-05-09', 1, 'Madinah'),
(10, 10, 10, 'Muhammad Irsan', 'Anggota KopTab', 10, '2021-05-09', 1, 'Madinah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_aksesbq`
--

CREATE TABLE `data_aksesbq` (
  `id_akses` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_aksesbq`
--

INSERT INTO `data_aksesbq` (`id_akses`, `id_jabatan`, `id_anggota`, `nama_admin`, `nama_anggota`, `jabatan`, `hak_akses`, `tgl_update`) VALUES
(1, 1, 1, 'Emi Asia', 'Maou Sadao', 'Ketua', '1', '2021-09-13'),
(2, 2, 2, 'Emi Asia', 'Yusa Emilia', 'Sekretaris', '2', '2021-09-13'),
(3, 3, 3, 'Emi Asia', 'Kana Nishino', 'Bendahara', '3', '2021-09-13'),
(4, 4, 4, 'Emi Asia', 'Itachi Uchiha', 'Kepala Divisi Teller', '4', '2021-09-13'),
(5, 5, 5, 'Emi Asia', 'Heiji Hattori', 'Anggota Divisi Teller', '5', '2021-09-13'),
(6, 6, 6, 'Emi Asia', 'Kaito Kuroba', 'Kepala Divisi Pembiayaan', '6', '2021-09-13'),
(7, 7, 7, 'Emi Asia', 'Nishinoya', 'Anggota Divisi Pembiayaan', '7', '2021-09-13'),
(8, 8, 8, 'Emi Asia', 'Shinichi Kudo', 'Kepala Divisi Pemasaran', '8', '2021-09-13'),
(9, 9, 9, 'Emi Asia', 'Usui Takumi', 'Anggota Divisi Pemasaran', '9', '2021-09-13'),
(10, 10, 10, 'Emi Asia', 'Kento Yamazaki', 'Anggota', '10', '2021-09-13'),
(11, 10, 11, 'Emi Asia', 'Nova Anike Putri', 'Anggota', '10', '2021-09-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggotabm`
--

CREATE TABLE `data_anggotabm` (
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
-- Dumping data untuk tabel `data_anggotabm`
--

INSERT INTO `data_anggotabm` (`id_anggota`, `id_jabatan`, `nik`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kawin`, `alamat`, `no_hp`, `status`, `email`, `sandi`, `id_admin`, `nama_admin`, `tgl_daftar`, `saldo_uang`, `saldo_emas`, `jabatan`, `hak_akses`, `foto`) VALUES
(1, 1, '9202136606990001', 'Madinah', 'Manokwari', '1999-06-26', 'Perempuan', 'Belum Kawin', 'Jln. Pasirido Pasir Putih', '082238383908', 1, 'madhina26@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Ketua', '1', 'perempuan4.jpg'),
(2, 2, '9202136606990002', 'Emi Asia', 'Manokwari', '1998-04-04', 'Perempuan', 'Belum Kawin', 'Jln. Toba Sanggeng', '082198931489', 1, 'emiasia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Sekretaris', '2', 'perempuan4.jpg'),
(3, 3, '9202136606990003', 'Dinni F Ramadani', 'Manokwari', '1999-12-09', 'Perempuan', 'Belum Kawin', 'Amban', '085243156334', 1, 'Dinni@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Bendahara', '3', 'perempuan4.jpg'),
(4, 4, '9202136606990004', 'Citra Y L Arru', 'Manokwari', '1999-03-04', 'Perempuan', 'Belum Kawin', 'Wosi', '082312746193', 1, 'Citra@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Kepala Divisi Teller', '4', 'perempuan.png'),
(5, 5, '9202136606990005', 'Sopri Togatorop', 'Medan', '1998-06-01', 'Laki-Laki', 'Belum Kawin', 'Marina', '085210301611', 1, 'Sopri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Anggota Divisi Teller', '5', 'laki.png'),
(6, 6, '9202136606990006', 'Eva Anjuni', 'Manokwari', '1999-06-10', 'Perempuan', 'Belum Kawin', 'Jln. Menado', '082199228744', 1, 'Eva@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Kepala Divisi Pelayanan Pinjaman', '6', 'perempuan41.jpg'),
(7, 7, '9202136606990007', 'Aprianto T Kamma', 'Toraja', '1998-04-06', 'Laki-Laki', 'Belum Kawin', 'Jln. Manado', '082297731715', 1, 'Apri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Anggota Divisi Pelayanan Pinjaman', '7', 'laki1.png'),
(8, 8, '9202136606990008', 'Yolanda Liptiay', 'Ambon', '1995-08-11', 'Perempuan', 'Belum Kawin', 'Marina', '082399646876', 1, 'Yolan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Kepala Divisi Pelayanan Jaminan', '8', 'perempuan1.png'),
(9, 9, '9202136606990009', 'Marcelin Febryani', 'Timika', '1999-03-19', 'Perempuan', 'Belum Kawin', 'Marina', '0812477253600', 1, 'Marcelin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Anggota Divisi Pelayanan Jaminan', '9', 'perempuan2.png'),
(10, 10, '92021366069900010', 'Muhammad Irsan', 'Manokwari', '1999-08-09', 'Laki-Laki', 'Belum Kawin', 'Jln. Pasirido Pasir Putih', '082283389308', 1, 'Muhammad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-05-01', '1000000', '10 gr', 'Anggota KopTab', '10', 'laki2.png'),
(11, 10, '123', 'Eunwo', 'Soul', '1997-06-26', 'Laki-Laki', 'Belum Kawin', 'Jl. Kehidupan ', '12345678910', 1, 'Eunwo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Madinah', '2021-08-25', '1.000.000', '10gr', 'Anggota KopTab', '10', 'laki3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggotabq`
--

CREATE TABLE `data_anggotabq` (
  `id_anggota` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL,
  `saldo_uang` varchar(100) NOT NULL,
  `saldo_emas` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_anggotabq`
--

INSERT INTO `data_anggotabq` (`id_anggota`, `id_jabatan`, `nama_admin`, `nik`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kawin`, `alamat`, `no_hp`, `status`, `email`, `sandi`, `tgl_daftar`, `jabatan`, `hak_akses`, `saldo_uang`, `saldo_emas`, `foto`) VALUES
(1, 1, 'Emi Asia', '9202127108780001', 'Maou Sadao', 'Tokyo, Jepang', '1998-12-29', 'Laki-laki', 'Belum Kawin', 'Jl. Selalu Setia', '821989314', '1', 'maousadao7@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Ketua', '1', '1.000.000', '10gr', 'maou.jpg'),
(2, 2, 'Emi Asia', '9202127108780002', 'Yusa Emilia', 'Chiba, Jepang', '1999-09-01', 'Perempuan', 'Belum Kawin', 'Jl. Simfoni Rindu', '082198931489', '1', 'emiliayusa12@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Sekretaris', '2', '1.000.000', '10gr', 'yusa.png'),
(3, 3, 'Emi Asia', '9202127108780003', 'Kana Nishino', 'Shibuya, Jepang', '1997-09-09', 'Perempuan', 'Belum Kawin', 'Jl. Kenangan', '0812349812', '1', 'kananishino@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Bendahara', '3', '1.000.000', '10gr', 'kana.jpg'),
(4, 4, 'Emi Asia', '9202127108780004', 'Itachi Uchiha', 'Konoha, Jepang', '1997-09-13', 'Laki-laki', 'Belum Kawin', 'Jl. Rindu Berat', '0813457621', '1', 'itachiuchiha1@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Kepala Divisi Teller', '4', '1.000.000', '10gr', 'itachi.jpg'),
(5, 5, 'Emi Asia', '9202127108780005', 'Heiji Hattori', 'Nagoya, Jepang', '1998-07-25', 'Laki-laki', 'Belum Kawin', 'Jl. Terus Jangan Belok', '0812340987', '1', 'heijihattori8@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Anggota Divisi Teller', '5', '1.000.000', '10gr', 'heiji.png'),
(6, 6, 'Emi Asia', '9202127108780006', 'Kaitou Kuroba', 'Okazaki, Jepang', '1998-03-04', 'Laki-laki', 'Belum Kawin', 'Jl. Kapan Lulus', '081234092', '1', 'kid77@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Kepala Divisi Pembiayaan', '6', '1.000.000', '10gr', 'id.png'),
(7, 7, 'Emi Asia', '9202127108780007', 'Nishinoya', 'Toyohashi', '1999-02-26', 'Laki-laki', 'Belum Kawin', 'Jl. Sangat Melelahkan', '0812374642', '1', 'nishi8976@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Anggota Divisi Pembiayaan', '7', '1.000.000', '10gr', 'noya.jpg'),
(8, 8, 'Emi Asia', '9202127108780008', 'Shinichi Kudo', 'Tokyo, Jepang', '1998-06-06', 'Laki-laki', 'Belum Kawin', 'Jl. Jodohku Kapan Datang', '0812387654', '1', 'nichikudo65@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Kepala Divisi Pemasaran', '8', '1.000.000', '10gr', 'nici.jpg'),
(9, 9, 'Emi Asia', '9202127108780009', 'Usui Takumi', 'Tokyo, Jepang', '1998-09-21', 'Laki-laki', 'Belum Kawin', 'Jl. Pengen Punya Banyak Duit', '0812347654', '1', 'usui987takumi@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Anggota Divisi Pemasaran', '9', '1.000.000', '10gr', 'takumi.png'),
(10, 10, 'Emi Asia', '9202127108780010', 'Kento Yamazaki', 'Chiba, Jepang', '1993-09-01', 'Laki-laki', 'Belum Kawin', 'Jl. Suka Dia', '0812346512', '1', 'yamaken79@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Anggota', '10', '1.000.000', '10gr', 'yamakaen.jpg'),
(11, 10, 'Emi Asia', '9202127108780011', 'Nova Anike Putri', 'Manokwari', '1999-11-15', 'Perempuan', 'Belum Kawin', 'Sogun Permai 1', '09876542211', '1', 'nova5@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-14', 'Anggota', '10', '1.000.000', '10gr', 'photo_2021-09-08_17-30-32-removebg-preview.png'),
(12, 10, 'Emi Asia', '9202127108780012', 'Razor', 'Monstard, Teyvat', '2000-09-15', 'Laki-Laki', 'Belum Kawin', 'Wolvendom', '08765432134', '1', 'razor70@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-09-15', 'Anggota', '10', '1000000', '10gr', 'InShot_20191231_085210285.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bendahara`
--

CREATE TABLE `data_bendahara` (
  `id_anggota` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `saldo_uang` varchar(100) NOT NULL,
  `saldo_emas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bendahara`
--

INSERT INTO `data_bendahara` (`id_anggota`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `status_kawin`, `alamat`, `no_hp`, `email`, `jabatan`, `hak_akses`, `saldo_uang`, `saldo_emas`) VALUES
(1, '9202127108780010', 'Kento Yamazaki', 'Chiba, Jepang', '1999-09-01', 'Perempuan', 'Belum Kawin', 'Jl. Suka Dia', '0812346512', 'yamaken79@gmail.com', 'Anggota', 10, '1000000', '10gr'),
(2, '100101022220001', 'Anggota 1', 'Manokwari', '2021-06-12', 'Laki-Laki', 'Belum Kawin', 'Reremi', '084514151333', 'default@gmail.com', 'Anggota', 0, '1000000', '10gr'),
(3, '100101022220002', 'Anggota 2', 'Manokwari', '2021-06-10', 'Perempuan', 'Belum Kawin', 'Andai', '081454157774', 'default@gmail.com', 'Anggota', 0, '1000000', '10gr'),
(4, '92021366069900010', 'Muhammad Irsan', 'Manokwari', '1999-08-09', 'Laki-Laki', 'Belum Kawin', 'Jln. Pasirido Pasir Putih', '082283389308', 'Muhammad@gmail.com', 'Anggota', 10, '1000000', '10gr'),
(5, '9202127108780011', 'Nova Anike Putri', 'Manokwari', '1999-11-15', 'Perempuan', 'Belum Kawin', 'Sogun Permai 1', '09876542211', 'nova5@gmail.com', 'Anggota', 10, '1000000', '10gr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` char(11) NOT NULL,
  `jabatan` varchar(120) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kode_list` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jabatan`, `status`, `kode_list`) VALUES
('1', 'Super Admin', 'Aktif', 1),
('10', 'Staf Bidang Keanggotaan', 'Aktif', 3),
('11', 'Staf Bidang Riset & Pengembangan', 'Aktif', 3),
('12', 'Ketua Dewan Ulama', 'Aktif', 4),
('13', 'Sekretaris Dewan Ulama', 'Aktif', 4),
('14', 'Bendahara Dewan Ulama', 'Aktif', 4),
('15', 'Anggota Dewan Ulama', 'Aktif', 4),
('16', 'Ketua Dewan Cendekiawan', 'Aktif', 5),
('17', 'Sekretaris Dewan Cendekiawan', 'Aktif', 5),
('18', 'Bendahara Dewan Cendekiawan', 'Aktif', 5),
('19', 'Anggota Dewan Cendekiawan', 'Aktif', 5),
('2', 'Admin Komunitas', 'Aktif', 2),
('21', 'Hidden User', 'Aktif', 2),
('25', 'Anggota', 'Aktif', 0),
('3', 'Admin Koperasi Tijarah', 'Aktif', 2),
('4', 'Admin Koperasi Tabarru', 'Aktif', 2),
('5', 'Ketua Dewan Pimpinan', 'Aktif', 3),
('6', 'Sekretaris Dewan Pimpinan', 'Aktif', 3),
('7', 'Bendahara Dewan Pimpinan', 'Aktif', 3),
('8', 'Staf Bidang Pendidikan', 'Aktif', 3),
('9', 'Staf Bidang Pelatihan', 'Aktif', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatanbm`
--

CREATE TABLE `data_jabatanbm` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jabatanbm`
--

INSERT INTO `data_jabatanbm` (`id_jabatan`, `jabatan`, `status`, `hak_akses`) VALUES
(1, 'Ketua', '1', '1'),
(2, 'Sekretaris', '1', '2'),
(3, 'Bendahara', '1', '3'),
(4, 'Kepala Divisi Teller', '1', '4'),
(5, 'Anggota Divisi Teller', '1', '5'),
(6, 'Kepala Divisi Pelayanan Pinjaman', '1', '6'),
(7, 'Anggota Divisi Pelayanan Pinjaman', '1', '7'),
(8, 'Kepala Divisi Pelayanan Jaminan', '1', '8'),
(9, 'Anggota Divisi Pelayanan Jaminan', '1', '9'),
(10, 'Anggota KopTab', '1', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatanbq`
--

CREATE TABLE `data_jabatanbq` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `hak_akses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'Kapala Divisi Pemasaran', '1', '8'),
(9, 'Anggota Divisi Pemasaran', '1', '9'),
(10, 'Anggota', '1', '10'),
(11, 'Security', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pinjamanbm`
--

CREATE TABLE `data_pinjamanbm` (
  `id_piutang` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `no_reff` varchar(12) NOT NULL,
  `akun` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `debet` varchar(100) NOT NULL,
  `kredit` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nik` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pinjamanbm`
--

INSERT INTO `data_pinjamanbm` (`id_piutang`, `id_anggota`, `tgl_pinjam`, `no_reff`, `akun`, `nama`, `debet`, `kredit`, `keterangan`, `nik`, `hak_akses`) VALUES
(1, 4, '2021-09-16', '11300', ' Piutang Emas', 'Muhammad Irsan', '1', '0', 'Irsan meminjam emas dikoperasi untuk keperluan investasi', '92021366069900010', 10),
(2, 1, '2021-09-16', '11300', ' Piutang Emas', 'Kento Yamazaki', '12.6', '0', 'Meminjam emas untuk keperluan dagang', '9202127108780010', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_piutangbq`
--

CREATE TABLE `data_piutangbq` (
  `id_piutang` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `no_reff` varchar(100) NOT NULL,
  `akun` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `debet` varchar(100) NOT NULL,
  `kredit` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `nik` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_piutangbq`
--

INSERT INTO `data_piutangbq` (`id_piutang`, `id_anggota`, `tgl_pinjam`, `no_reff`, `akun`, `nama`, `debet`, `kredit`, `keterangan`, `nik`, `hak_akses`) VALUES
(1, 1, '2021-09-15', '113', 'Piutang', 'Kento Yamazaki', '12000000', '0', 'Pinjaman Kento untuk keperluan membeli pisang goreng', '9202127108780010', 10),
(2, 1, '2021-10-15', '113', 'Piutang', 'Kento Yamazaki', '0', '500000', 'Pinjaman Kento untuk keperluan membeli pisang goreng', '9202127108780010', 10),
(3, 1, '2021-09-13', '113', 'Piutang', 'Kento Yamazaki', '100000', '0', 'Pemberian pinjaman kepada Kento untuk modal usaha pulsa', '9202127108780010', 10),
(4, 1, '2021-09-13', '113', 'Piutang', 'Kento Yamazaki', '500000', '0', 'Pemberian pinjaman kepada Kento untuk modal usaha pulsa', '9202127108780010', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_dokumen`
--

CREATE TABLE `file_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nm_dokumen` varchar(225) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `waktu_unggah` timestamp NOT NULL DEFAULT current_timestamp(),
  `pengunggah` varchar(128) NOT NULL,
  `keterangan` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file_dokumen`
--

INSERT INTO `file_dokumen` (`id_dokumen`, `nm_dokumen`, `dokumen`, `waktu_unggah`, `pengunggah`, `keterangan`) VALUES
(1, 'Laporan Penggunaan Anggaran Dalam Kegiatan Bersedekah Kepada Masyarakat Kurang Mampu (KBKMKM).', 'laporan1.pdf', '2021-04-29 05:23:21', 'Bendahara', 'Data belum fix'),
(2, 'Surat Pengantar (Contoh)', 'fil1.pdf', '2021-05-03 09:28:43', 'Sekretaris', 'Telah fix'),
(3, 'Pengajuan RAB (Contoh)', 'rab1.pdf', '2021-05-03 09:28:43', 'Bendahara', 'ngambang'),
(4, 'Dokumen 1 (Contoh)', 'doc1.pdf', '2021-05-03 09:47:07', 'Ketua', 'nyelem'),
(13, 'Presentasi 1', 'ppt1.pdf', '2021-05-05 03:58:00', 'Sekretaris', 'air'),
(14, 'Presentasi 2', 'ppt2.pdf', '2021-05-05 03:58:00', 'Sekretaris', 'bumi'),
(16, 'blo blo', 'blo1.pdf', '2021-05-05 03:58:47', 'Ketua', 'angin'),
(18, 'adaw dfawdawda', 'New_Doc_4.pdf', '2021-05-05 12:04:32', 'Ketua', 'Electro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'Anggota Tanpa Jabatan', 1),
(2, 'Non-Aktif', 0),
(4, 'Admin Anggota', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_kuttab`
--

CREATE TABLE `informasi_kuttab` (
  `id_infoK` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lokasi` varchar(20) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi_kuttab`
--

INSERT INTO `informasi_kuttab` (`id_infoK`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(4, '2021-06-12 04:34:27', 'Manokwari', 'Senin, 16 Mei 2021.Pukul 08.00 WITAkan diadakan upacara, sesuai dengan yang disampaikan oleh Pak RT/RW.', 'Wajib Hadir, khususnya PNS.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_pelatihan`
--

CREATE TABLE `informasi_pelatihan` (
  `id_infoP` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lokasi` varchar(20) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi_pelatihan`
--

INSERT INTO `informasi_pelatihan` (`id_infoP`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(4, '2021-05-09 08:34:54', 'Manokwari', 'Senin, 16 Mei 2021.Pukul 08.00 WITAkan diadakan latihan usaha bersama, sesuai dengan yang disampaikan oleh Ketua Dewan Pimpinan.', 'Wajib Hadir'),
(5, '2021-05-13 23:54:24', 'Manokwari', 'Hari selasa, 12 Agustus 2021.\r\nAkan diadakan Pelatihan serentak dengan anggota dari Dewan Ulama.', 'Wajib Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_kom`
--

CREATE TABLE `info_kom` (
  `id_info_kom` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `desc_kom` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_kom`
--

INSERT INTO `info_kom` (`id_info_kom`, `judul`, `desc_kom`, `photo`, `created`) VALUES
(1, 'Ju', 'keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......', 'wisuda.jpg', '2021-05-24 00:00:00'),
(8, 'koperasi', 'ad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......', 'wisuda.jpg', '2021-06-21 17:53:42'),
(9, 'koperasi', 'wkwkwkw', '1844f5fea02b94e86d75526108caae73_XL2.jpg', '2021-06-21 22:02:00'),
(10, 'koperasiefe', 'un ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tija', '1844f5fea02b94e86d75526108caae73_XL1.jpg', '2021-06-21 22:02:20'),
(11, 'test', 'test123', 'unipa.png', '2021-06-22 14:36:08'),
(12, 'koperasiefe', 'fawefwseeaf', '25066091.jpg', '2021-06-22 14:36:18'),
(15, 'test1234', 'test1233', '132-1325750_white-stars-icon-png-transparent-png4.png', '2021-08-18 10:03:52'),
(16, 'Sekolah Dimulai Lagi', 'Maju tak gentar, membela yang benar!', '1099191.jpg', '2021-08-29 18:45:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pkomunitas`
--

CREATE TABLE `info_pkomunitas` (
  `id_infoPK` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(128) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_pkomunitas`
--

INSERT INTO `info_pkomunitas` (`id_infoPK`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(1, '2021-05-17 11:52:39', 'saefds', 'seffffffffffdfase sange', 'seafffffffddsefs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pktabarru`
--

CREATE TABLE `info_pktabarru` (
  `id_infoPKTabarru` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(128) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_pktabarru`
--

INSERT INTO `info_pktabarru` (`id_infoPKTabarru`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(2, '2021-05-17 13:16:17', 'Manokwari', 'barbaruttttttt new', 'aosiadwadababbab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pktijarah`
--

CREATE TABLE `info_pktijarah` (
  `id_infoPKTijarah` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(128) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_pktijarah`
--

INSERT INTO `info_pktijarah` (`id_infoPKTijarah`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(2, '2021-05-17 13:09:20', 'Manokwari', 'bububu oaoao', 'bububub');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_riset`
--

CREATE TABLE `info_riset` (
  `id_infoPRiset` int(11) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(128) NOT NULL,
  `informasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_riset`
--

INSERT INTO `info_riset` (`id_infoPRiset`, `waktu_post`, `lokasi`, `informasi`, `keterangan`) VALUES
(2, '2021-05-17 12:51:07', 'Manokwari', 'baru asasasas', 'barubarubaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_tab`
--

CREATE TABLE `info_tab` (
  `id_info_tab` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `desc_tab` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_tab`
--

INSERT INTO `info_tab` (`id_info_tab`, `judul`, `desc_tab`, `photo`, `created`) VALUES
(2, 'awdwd', 'dwdwa', 'wisuda.jpg', '2021-05-24 13:49:18'),
(3, 'Siapa', 'keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......	', 'wisuda.jpg', '2021-05-24 13:49:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_tij`
--

CREATE TABLE `info_tij` (
  `id_info_tij` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `desc_tij` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_tij`
--

INSERT INTO `info_tij` (`id_info_tij`, `judul`, `desc_tij`, `photo`, `created`) VALUES
(2, 'sffseffdawd', 'daw', 'wisuda.jpg', '2021-05-24 13:50:42'),
(3, 'effees', 'keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......keuangan syariah mengenal dua akad Tijarah dan Tabarru. Dalam polemik BPJS Syariah, akad yang digunakan mirip dengan asuransi syariah, yaiut Tabarru. Namun ada juga skema Tijarah yang dapat dipakainya. Apa beda antara Tijarah dan Tabarru. Dll......	', 'wisuda.jpg', '2021-05-24 13:50:42'),
(4, 'Judul Informasi tijarah', 'dadwa', 'wisuda.jpg', '2021-05-24 13:56:27'),
(5, 'Harga Emas Melompat Menuju Kenaikan Terbesar dalam 10 Bulan', 'Harga emas di pasar spot telah naik hampir 7,7 persen di bulan ini. Sebagian besar pasar akan tutup di Amerika Serikat dan Inggris pada Senin karena libur umum.\r\n\r\n\"Dolar tetap melemah, itu cukup mendukung. Bull emas sekarang mengincar posisi USD 2.000, dan sebagian besar berpikir itu akan naik jauh lebih tinggi,\" kata Stephen Innes, Managing Partner di SPI Asset Management.\r\n\r\nIndeks dolar menuju penurunan bulanan kedua berturut-turut dari mata uang lainnya. Sementara imbal hasil Treasury 10-tahun AS turun menjadi 1,593 persen pada hari Jumat, mengurangi biaya peluang memegang emas tanpa bunga.', 'wisuda.jpg', '2021-06-01 15:10:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnalbm`
--

CREATE TABLE `jurnalbm` (
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
-- Dumping data untuk tabel `jurnalbm`
--

INSERT INTO `jurnalbm` (`id_jurnal`, `id_akun`, `tgl`, `no_reff`, `akun`, `keterangan`, `debet`, `kredit`) VALUES
(1, 25, '2021-08-01', 31100, 'Zakat Fitrah', '-', '1000000', '0'),
(2, 2, '2021-08-01', 11100, 'Kas dan Setara Kas', '-', '0', '1000000'),
(3, 2, '2021-09-02', 11100, 'Kas dan Setara Kas', '-', '1000000', '0'),
(4, 39, '2021-09-02', 32100, 'Fakir - Miskin', '-', '0', '1000000'),
(5, 2, '2021-08-03', 11100, 'Kas dan Setara Kas', '-', '500000', '0'),
(6, 4, '2021-08-03', 11300, 'Piutang', '-', '0', '500000'),
(7, 47, '2021-08-05', 33100, 'Infak/Sedekah Terkait', '-', '1000000', '0'),
(8, 2, '2021-08-05', 11100, 'Kas dan Setara Kas', '-', '0', '1000000'),
(9, 2, '2021-08-06', 11100, 'Kas dan Setara Kas', '-', '500000', '0'),
(10, 51, '2021-08-06', 34100, 'Penyaluran Infak/Sedekah Terkait ', '-', '0', '500000'),
(11, 54, '2021-08-07', 35100, 'Penerimaan Wakaf Kesehatan', '-', '2000000', '0'),
(12, 2, '2021-08-07', 11100, 'Kas dan Setara Kas', '-', '0', '2000000'),
(13, 2, '2021-08-08', 11100, 'Kas dan Setara Kas', 'Membantu Nunu yang sedang sakit', '1000000', '0'),
(14, 58, '2021-08-08', 36100, 'Penyaluran Wakaf Kesehatan', 'Membantu Nunu yang sedang sakit', '0', '1000000'),
(15, 2, '2021-08-10', 11100, 'Kas dan Setara Kas', '-', '2500000', '0'),
(16, 59, '2021-08-10', 36200, 'Penyaluran Wakaf Pendidikan', '-', '0', '2500000'),
(17, 55, '2021-08-11', 35200, 'Penerimaan Wakaf Pendidikan', 'Bantuan beasiswa di sekolah xxx', '3000000', '0'),
(18, 2, '2021-08-11', 11100, 'Kas dan Setara Kas', 'Bantuan beasiswa di sekolah xxx', '0', '3000000'),
(19, 2, '2021-08-10', 11100, 'Kas dan Setara Kas', 'Kendaraan', '1000000', '0'),
(20, 11, '2021-08-10', 12300, 'Akumulasi Penyusutan', 'Kendaraan', '0', '1000000'),
(21, 2, '2021-08-13', 11100, 'Kas dan Setara Kas', 'Pajak Bangunan', '1000000', '0'),
(22, 17, '2021-08-13', 21200, 'Utang Pajak', 'Pajak Bangunan', '0', '1000000'),
(23, 2, '2021-08-15', 11100, 'Kas dan Setara Kas', '-', '2000000', '0'),
(24, 22, '2021-08-15', 22200, 'Liabilitas Imbalan Kerja', '-', '0', '2000000'),
(25, 64, '2021-08-14', 37300, 'Penerimaan Amil Lainnya', '-', '2000000', '0'),
(26, 2, '2021-08-14', 11100, 'Kas dan Setara Kas', '-', '0', '2000000'),
(27, 4, '2021-09-16', 11300, ' Piutang Emas', 'Irsan meminjam emas dikoperasi untuk keperluan investasi', '500000', '0'),
(28, 2, '2021-09-16', 11100, 'Kas dan Setara Kas', 'Irsan meminjam emas dikoperasi untuk keperluan investasi', '0', '500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnalbq`
--

CREATE TABLE `jurnalbq` (
  `id_jurnal` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_reff` int(11) NOT NULL,
  `akun` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `debet` varchar(100) NOT NULL,
  `kredit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnalbq`
--

INSERT INTO `jurnalbq` (`id_jurnal`, `id_akun`, `tgl`, `no_reff`, `akun`, `keterangan`, `debet`, `kredit`) VALUES
(1, 4, '2021-09-13 15:33:05', 113, 'Piutang', 'Pemberian pinjaman kepada Kento untuk modal usaha pulsa', '100000', '0'),
(2, 2, '2021-09-13 15:33:19', 111, 'Kas', 'Pemberian pinjaman kepada Kento untuk modal usaha pulsa', '0', '100000'),
(3, 4, '2021-09-13 15:33:39', 113, 'Piutang', 'Pemberian pinjaman kepada Kento untuk modal usaha masker', '500000', '0'),
(4, 2, '2021-09-13 15:33:53', 111, 'Kas', 'Pemberian pinjaman kepada Kento untuk modal usaha masker', '0', '500000'),
(5, 4, '2021-09-13 15:34:07', 113, 'Piutang', 'Pemberian pinjaman kepada Kento untuk modal usaha jastip', '2000000', '0'),
(6, 2, '2021-09-13 15:34:20', 111, 'Kas', 'Pemberian pinjaman kepada Kento untuk modal usaha jastip', '0', '2000000'),
(7, 3, '2021-09-14 04:09:16', 112, 'Bank', 'Simpanan pokok yang dibayarkan oleh Kento Yamazaki', '1000000', '0'),
(8, 32, '2021-09-14 04:09:29', 311, 'Simpanan Pokok', 'Simpanan pokok yang dibayarkan oleh Kento Yamazaki', '0', '1000000'),
(9, 3, '2021-09-01 17:00:00', 112, 'Bank', 'Simpanan wajib yang dibayarkan oleh Kento Yamazaki', '200000', '0'),
(10, 33, '2021-09-01 17:00:00', 312, 'Simpanan Wajib', 'Simpanan wajib yang dibayarkan oleh Kento Yamazaki', '0', '200000'),
(11, 3, '2021-08-31 17:00:00', 112, 'Bank', 'Simpanan wajib yang dibayarkan oleh Kento Yamazaki', '2000000', '0'),
(12, 33, '2021-08-31 17:00:00', 312, 'Simpanan Wajib', 'Simpanan wajib yang dibayarkan oleh Kento Yamazaki', '0', '2000000'),
(13, 3, '2021-06-30 17:00:00', 112, 'Bank', 'Simpanan pokok yang dibayarkan oleh Kento Yamazaki', '2000000', '0'),
(14, 33, '2021-06-30 17:00:00', 312, 'Simpanan Wajib', 'Simpanan pokok yang dibayarkan oleh Kento Yamazaki', '0', '2000000'),
(15, 2, '2021-08-31 17:00:00', 111, 'Kas', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '7000000', '0'),
(16, 34, '2021-08-31 17:00:00', 313, 'Simpanan Sukarela', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '0', '7000000'),
(17, 2, '2021-09-01 17:00:00', 111, 'Kas', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '12000000', '0'),
(18, 34, '2021-09-01 17:00:00', 313, 'Simpanan Sukarela', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '0', '12000000'),
(19, 34, '2021-09-03 17:00:00', 313, 'Simpanan Sukarela', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '4000000', '0'),
(20, 2, '2021-09-03 17:00:00', 111, 'Kas', 'Simpanan sukarela yang dibayarkan oleh Kento Yamazaki', '0', '4000000'),
(21, 2, '2021-08-31 17:00:00', 111, 'Kas', 'Pembelian tanah untuk pembangunan', '300000000', '0'),
(22, 12, '2021-08-31 17:00:00', 121, 'Tanah', 'Pembelian tanah untuk pembangunan', '0', '300000000'),
(23, 2, '2021-09-01 17:00:00', 111, 'Kas', 'Pembangunan pesantren', '59000000', '0'),
(24, 13, '2021-09-01 17:00:00', 122, 'Bangunan', 'Pembangunan pesantren', '0', '59000000'),
(25, 21, '2021-09-02 17:00:00', 211, 'Dana Sosial', 'Memberikan bantuan sosial kepada masyarakat terdampak covid', '9000000', '0'),
(26, 3, '2021-09-02 17:00:00', 112, 'Bank', 'Memberikan bantuan sosial kepada masyarakat terdampak covid', '0', '9000000'),
(27, 54, '2021-08-31 17:00:00', 512, 'Biaya Telepon', 'Pembayaran biaya telepon anggota koperasi', '500000', '0'),
(28, 2, '2021-08-31 17:00:00', 111, 'Kas', 'Pembayaran biaya telepon anggota koperasi', '0', '500000'),
(29, 59, '2021-09-03 17:00:00', 517, 'Biaya Makan dan Minum', 'Biaya makan dan minum', '25000', '0'),
(30, 2, '2021-09-03 17:00:00', 111, 'Kas', 'Biaya makan dan minum', '0', '25000'),
(31, 2, '2021-09-05 17:00:00', 111, 'Kas', 'Komisi anggota', '12000', '0'),
(32, 40, '2021-09-05 17:00:00', 412, 'Pendapatan Komisi', 'Komisi anggota', '0', '12000'),
(33, 2, '2021-09-09 17:00:00', 111, 'Kas', 'Penjualan barang dagang', '765000', '0'),
(34, 41, '2021-09-09 17:00:00', 413, 'Penjualan Barang', 'Penjualan barang dagang', '0', '765000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_pembiayaan`
--

CREATE TABLE `konten_pembiayaan` (
  `id_pembiayaan` int(11) NOT NULL,
  `desc_pembiayaan` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten_pembiayaan`
--

INSERT INTO `konten_pembiayaan` (`id_pembiayaan`, `desc_pembiayaan`, `photo`) VALUES
(1, 'Mudharobah adalah akad kerjasama usaha antara pemilik dana sebagai pihak yang menyediakan modal dengan pihak pengelola modal (koperasi), untuk diusahakan dengan bagi hasil (nisbah) sesuai dengan kesepakatan dimuka dari kedua belah pihak. Dalam hal ini Koperasi akan memberikan 200% permodalan kepada pengusaha yang telah memiliki tenaga kerja dan keterampilan tetapi belum memiliki modal sama sekali. ', 'syariah1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_pinjamanemas`
--

CREATE TABLE `konten_pinjamanemas` (
  `id_pinjamanemas` int(11) NOT NULL,
  `desc_pinjamanemas` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten_pinjamanemas`
--

INSERT INTO `konten_pinjamanemas` (`id_pinjamanemas`, `desc_pinjamanemas`, `photo`) VALUES
(1, 'Kredit emas adalah kredit untuk membeli emas dengan mencicil. Cocok buat yang ingin punya emas, tapi dananya belum cukup. Sebelum mengambil, sebaiknya pahami dahulu seluk beluk produk kredit emas ini sehingga tahu karakteristik dan risikonya.\r\nEmas selalu menjadi instrumen investasi yang dicari orang. Nilainya yang stabil serta likuid membuat investasi di instrumen ini tidak pernah lekang oleh waktu.', 'toko.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembiayaanbq`
--

CREATE TABLE `pembiayaanbq` (
  `id_biaya` int(11) NOT NULL,
  `no_akad` varchar(10) NOT NULL,
  `jenis_akad` varchar(50) NOT NULL,
  `tgl_akad` date NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `jenis_pembiayaan` varchar(50) NOT NULL,
  `nilai_pembiayaan` varchar(50) NOT NULL,
  `uang_muka` varchar(50) NOT NULL,
  `sisa_angsuran` varchar(25) NOT NULL,
  `angsuran_perbulan` varchar(50) NOT NULL,
  `lama_waktu` varchar(100) NOT NULL,
  `tempo_angsuran` date NOT NULL,
  `lama_angsuran` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembiayaanbq`
--

INSERT INTO `pembiayaanbq` (`id_biaya`, `no_akad`, `jenis_akad`, `tgl_akad`, `jatuh_tempo`, `jenis_pembiayaan`, `nilai_pembiayaan`, `uang_muka`, `sisa_angsuran`, `angsuran_perbulan`, `lama_waktu`, `tempo_angsuran`, `lama_angsuran`, `foto`, `staff`, `nik`, `hak_akses`) VALUES
(1, '01/X/2021', 'Murabahah', '2020-09-14', '2021-09-14', 'Kebutuhan Barang', '118000000', '10000000', '108000000', '4500000', '24 bulan', '2021-09-14', '12 bulan', 'nnn.pdf', 'Emi Asia', '9202127108780010', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_anggaran`
--

CREATE TABLE `riwayat_anggaran` (
  `id_ra` int(11) NOT NULL,
  `tahun_anggaran` year(4) NOT NULL,
  `file_rab` varchar(225) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_anggaran`
--

INSERT INTO `riwayat_anggaran` (`id_ra`, `tahun_anggaran`, `file_rab`, `keterangan`) VALUES
(1, 2020, 'laporan14.pdf', 'Anggaran 123'),
(2, 2021, 'RAB2.pdf', 'Anggaran 2'),
(3, 2020, 'RAB1.pdf', 'Anggaran 1'),
(6, 2021, 'RAB2.pdf', 'Anggaran 2'),
(7, 2020, 'RAB1.pdf', 'Anggaran 1'),
(8, 2021, 'RAB2.pdf', 'Anggaran 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpananbq`
--

CREATE TABLE `simpananbq` (
  `id_simpanan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tgl_simpan` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `simpanan_pokok` varchar(100) NOT NULL,
  `simpanan_wajib` varchar(100) NOT NULL,
  `simpanan_sukarela` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpananbq`
--

INSERT INTO `simpananbq` (`id_simpanan`, `id_anggota`, `nik`, `tgl_simpan`, `nama`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `hak_akses`) VALUES
(1, 10, '9202127108780010', '2021-09-14', 'Kento Yamazaki', '1000000', '0', '0', 10),
(2, 10, '9202127108780010', '2021-09-02', 'Kento Yamazaki', '0', '2000000', '0', 10),
(3, 10, '9202127108780010', '2021-09-01', 'Kento Yamazaki', '0', '0', '7000000', 10),
(4, 10, '9202127108780010', '2021-09-02', 'Kento Yamazaki', '0', '2000000', '0', 10),
(5, 10, '9202127108780010', '2021-07-01', 'Kento Yamazaki', '0', '2000000', '0', 10),
(6, 10, '9202127108780010', '2021-09-02', 'Kento Yamazaki', '0', '0', '12000000', 10),
(7, 10, '9202127108780010', '2021-09-04', 'Kento Yamazaki', '0', '0', '4000000', 10),
(8, 11, '9202127108780011', '2021-09-15', 'Nova Anike Putri', '2000', '2000', '2000', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` char(18) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `status_kawin` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pendaftar` varchar(225) NOT NULL,
  `tgl_terdaftar` datetime NOT NULL DEFAULT current_timestamp(),
  `saldo_uang` varchar(225) NOT NULL,
  `saldo_emas` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `rt` char(11) NOT NULL,
  `rw` char(11) NOT NULL,
  `kel_desa` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `kewarganegaraan` varchar(128) NOT NULL,
  `kode_list` int(11) NOT NULL,
  `filter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `tempat_lahir`, `password`, `tgl_lahir`, `jk`, `status_kawin`, `alamat`, `no_hp`, `foto`, `email`, `pendaftar`, `tgl_terdaftar`, `saldo_uang`, `saldo_emas`, `hak_akses`, `jabatan`, `status`, `rt`, `rw`, `kel_desa`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `kode_list`, `filter`) VALUES
(5, '1968651115', 'Fernando Manuhutu', 'Manokwari', '$2y$10$L1vvlN/L/i/.lSMf.SSUXuchOm1AfbFM/8oIreKwou3Lq043ID51S', '2021-03-03', 'Laki-Laki', 'Belum Kawin', 'Amban Pantai', '12684165', '06a2178e6bf56a7d18788579316fa0f1.jpg', 'nando@gmail.com', 'Admin Komunitas', '2021-04-14 00:00:00', '15.000.000', '15 gr', 1, 'Ketua Dewan Pimpinan', 1, '004', '004', 'Amban Pantai', 'Amban Pantai', 'Kristen Protestan', 'Mahasiswa', 'WNI', 3, 2),
(6, '68146513513', 'Emjanseen Rajaguguk', 'Manokwari', '$2y$10$sIoZGIuo7CG0L2QURUtj9egZ6MWLgDcaGqCYHqPKMxCb3aGyr446u', '2021-04-06', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '47854', '00aa338d1ae165728b3d42948976e70b.jpg', 'emjanseen@gmail.com', 'Admin Komunitas', '2021-04-14 00:00:00', '15.000.000', '15 gr', 2, 'Sekretaris Dewan Pimpinan', 1, '002', '002', 'Amban', 'Amban', 'Kristen Protestan', 'Mahasiswa', 'WNI', 3, 2),
(7, '298965811651', 'Muhammad Zamachsyari', 'Manokwari', '$2y$10$PpKC8cwi.E7Wdmvc2PybtOcxazR5rN2bQPfSqbxfArlaWmYkX9arm', '2021-04-13', 'Laki-Laki', 'Kawin', 'Mako Brimob', '6874685165174', 'ultra_teh-kotak-jasmine-minuman-teh--300-ml--box--24-pcs-_full04.jpg', 'zamach@gmail.com', 'Admin Komunitas', '2021-04-16 00:00:00', '15.000.000', '15 gr', 3, 'Bendahara Dewan Pimpinan', 1, '0', '0', '', '', '', '', '', 3, 2),
(8, '111111666666', 'Isaiah C. K. W. Yom', 'Timika', '$2y$10$1SOOWc6yOLIMUO.rCvKvq.zYsAtWFxbiExInaGAuH6ZHMyOXemIU6', '2021-04-14', 'Laki-Laki', 'Belum Kawin', 'Timika King', '68465861561', 'default.jpg', 'isaia@gmail.com', 'Admin Komunitas', '2021-04-08 00:00:00', '15.000.000', '15 gr', 4, 'Staf Bidang Pendidikan', 1, '0', '0', '', '', '', '', '', 3, 2),
(9, '888888444444', 'Alfi Syahriza', 'Manokwari', '$2y$10$VlEVV3DDk4S6cQbCgkJ5jOTifL85t8iaROoFJYKpdA9ugn2uUWC0W', '2021-04-13', 'Laki-Laki', 'Belum Kawin', 'Warmare Kinh', '681446581651', 'default.jpg', 'alfi@gmail.com', 'Admin Komunitas', '2021-04-07 00:00:00', '15.000.000', '15 gr', 5, 'Staf Bidang Pelatihan', 1, '0', '0', '', '', '', '', '', 3, 2),
(25, '16874686158641', 'Kiana Stund', 'Manokwari', '$2y$10$ASbztjO1m5iC5OiskSKKSe6hyLoPAFWXp48Uc99XFbFWCEF5e3l0a', '2021-04-15', 'Laki-Laki', 'Belum Kawin', 'Timika', '78765758785', 'aGdWOgZ_460s.jpg', 'kiana.stund@gmail.com', 'Admin Komunitas', '2021-03-31 00:00:00', '15.000.000', '15 gr', 11, 'Anggota Dewan Ulama', 1, '0', '0', '', '', '', '', '', 4, 2),
(26, '17457442222', 'Willy Markus Wakdomi', 'Manokwari', '$2y$10$oodBSie6A2JBppqVIPmioeu5XUvSdAJyOKHTgi6p.ykSrVRsqHL.m', '2021-04-26', 'Laki-Laki', 'Belum Kawin', 'Biak King', '1567816', 'default.jpg', 'willy@gmail.com', 'Admin Komunitas', '2021-05-14 00:00:00', '14.000.000', '4 gr', 6, 'Staf Bidang Keanggotaan', 1, '0', '0', '', '', '', '', '', 3, 2),
(30, '15671154124144444', 'Faisal Maulana', 'Biak', '$2y$10$JznWQ1sKbgP5Al39hlJ4E.60nSPcM44HnluiI/VzT2VggCVW.Vrxi', '2021-06-08', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '', 'e695d3bae9b52130ff9407c6308b4145.jpg', 'faisal@gmail.com', 'Admin Komunitas', '0000-00-00 00:00:00', '14.000.000', '4 gr', 7, 'Staf Bidang Riset & Pengembangan', 1, '0', '0', '', '', '', '', '', 3, 2),
(33, '104141114101010', 'Paskah Kawab', 'Manokwari', '$2y$10$So0AB1bj.d70nBNkyQ26de6PXhVpnorUUx8P.IpBr8A.WbTJuMX2C', '2021-05-14', 'Laki-Laki', 'Belum Kawin', '', '', 'Idea_Lamp-512.png', 'number1@gmail.com', 'Admin Komunitas', '2021-05-19 19:55:11', '14.000.000', '4 gr', 8, 'Ketua Dewan Ulama', 1, '0', '0', '', '', '', '', '', 4, 2),
(34, '888888888848448444', 'Dianjar', 'Manokwari', '$2y$10$PjZTScEw1sQiLcUg.UEz1eOveK0n.7WLSmW3WpDOr20YVNSEXtkFi', '0000-00-00', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '', 'contoh1.jpg', 'number2@gmail.com', 'Admin Komunitas', '2021-05-20 19:26:53', '14.000.000', '4 gr', 9, 'Sekretaris Dewan Ulama', 1, '0', '0', '', '', '', '', '', 4, 2),
(35, '1544141414141', 'Dimas', 'Manokwari', '$2y$10$/qMg1VRRCRpW.fc/ITX3Uu9UlCRlgmSUToe/HptmK2mztlzgmr16.', '0000-00-00', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '0815414151', 'default.jpg', 'number3@gmail.com', 'Admin Komunitas', '2021-05-20 19:31:47', '14.000.000', '4 gr', 10, 'Bendahara Dewan Ulama', 1, '0', '0', '', '', '', '', '', 4, 2),
(49, '100000002525', 'Anggota 1', 'empty', '$2y$10$QcnMSSnzWZm3hOu23k3y2e7udpRMFh5lNJevQgsBw2SBBgF.aqcrC', '2021-06-12', 'Laki-laki', 'Belum Kawin', '', '084514151', 'default.jpg', 'default@gmail.com', 'Admin Komunitas', '2021-06-12 16:04:49', '00000000', '0000', 0, 'Anggota', 1, '0', '0', '', '', '', '', '', 0, 0),
(50, '40000015151', 'Anggota 2', 'Manokwari', '$2y$10$QcnMSSnzWZm3hOu23k3y2e7udpRMFh5lNJevQgsBw2SBBgF.aqcrC', '2021-06-10', 'Perempuan', 'Belum Kawin', '', '', 'default.jpg', 'default@gmail.com', 'Admin Komunitas', '2021-06-12 16:17:02', '13.000.000', '4 gr', 11, 'Anggota', 1, '0', '0', '', '', '', '', '', 0, 0),
(51, '55511112211212', 'Bima', 'Ambon Maluku', '$2y$10$noyVbl.tbqu2TvGrkZzPo.B37SuqaVzEgW2bY.6FbJRbVmRh8/p1W', '2021-06-10', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '0811215141151', 'default.jpg', 'bima@gmail.com', 'Admin Komunitas', '2021-06-16 11:08:25', '14.000.000', '4 gr', 12, 'Ketua Dewan Cendekiawan', 1, '0', '0', '', '', '', '', '', 5, 2),
(52, '66363331111', 'Amalia F', 'Manokwari', '$2y$10$MG0zwDtaEThGRbiHwiSTU.j0W2V.iOoWUriv9wlgvdajdOfiNKiue', '2021-06-03', 'Laki-Laki', 'Belum Kawin', '', '05171518144', 'default.jpg', 'amalia@gmail.com', 'Admin Komunitas', '2021-06-16 11:15:01', '14.000.000', '4 gr', 13, 'Sekretaris Dewan Cendekiawan', 1, '0', '0', '', '', '', '', '', 5, 2),
(53, '85858441114411', 'Panji', 'Manokwari', '$2y$10$wQd7S2TT3FD8SijV3x7NTOd4G23eoAy8SEaXGdRnz32QyalYdujqO', '2021-06-08', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '0812454741415', 'default.jpg', 'panji@gmail.com', 'Admin Komunitas', '2021-06-16 11:15:38', '13.000.000', '12 gr', 14, 'Bendahara Dewan Cendekiawan', 1, '0', '0', '', '', '', '', '', 5, 2),
(54, '9855222222', 'Maruk Uang', 'Manokwari', '$2y$10$gtVvM8xFxH1jvjcF7AexveeFju5w8BV5tbPHC1Ri8sF9OGfogDe/u', '2021-06-07', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '08414151514', 'default.jpg', 'maruuk@gmail.com', 'Admin Komunitas', '2021-06-16 11:18:07', '14.000.000', '4 gr', 15, 'Anggota Dewan Cendekiawan', 1, '0', '0', '', '', '', '', '', 5, 2),
(55, '999963121', 'Anggota 3', 'Manokwari', '$2y$10$QcnMSSnzWZm3hOu23k3y2e7udpRMFh5lNJevQgsBw2SBBgF.aqcrC', '2021-08-12', 'Laki-Laki', 'Belum Kawin', 'Manokwari', '08147141', 'default.jpg', 'default@gmail.com', 'Admin Komunitas', '2021-08-17 19:10:14', '', '', 0, 'Anggota', 1, '0', '0', '', '', '', '', '', 0, 2),
(56, '0041', 'Anggota 4', 'Manokwari', '$2y$10$QcnMSSnzWZm3hOu23k3y2e7udpRMFh5lNJevQgsBw2SBBgF.aqcrC', '2021-08-10', 'Laki-Laki', 'Belum Kawin', '', '0814', 'default.jpg', 'default@gmail.com', 'Admin Komunitas Koperasi', '2021-08-25 14:25:56', '', '', 1, 'Ketua Dewan Pimpinan', 1, '0', '0', '', '', '', '', '', 3, 2),
(57, '04', 'Anggota 5', 'Manokwari', '$2y$10$QcnMSSnzWZm3hOu23k3y2e7udpRMFh5lNJevQgsBw2SBBgF.aqcrC', '2021-08-17', 'Laki-Laki', 'Belum Kawin', '', '021', 'default.jpg', 'default@gmail.com', 'Admin Komunitas Koperasi', '2021-08-26 13:15:47', '1000000', '5', 2, 'Sekretaris Dewan Pimpinan', 1, '0', '0', '', '', '', '', '', 3, 2);

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
  `tgl_terdaftar` date NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(100) NOT NULL,
  `saldo_uang` varchar(250) NOT NULL,
  `saldo_emas` varchar(250) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_anggota`, `id_sa`, `nama_sa`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `status_kawin`, `no_hp`, `alamat`, `pangkat`, `email`, `sandi`, `status_aktif`, `tgl_terdaftar`, `foto`, `saldo_uang`, `saldo_emas`, `hak_akses`) VALUES
(1, 1, 'Super Admin', '2020121258580003', 'Madinah', 'Manokwari', '1999-06-26', 'Perempuan', 'Belum Kawin', '082238383908', 'Jl. pasirido', 'Admin Koperasi Tabarru', 'madinah@gmail.com', '202cb962ac59075b964b07152d234b70', 'Aktif', '2021-04-14', 'perempuan3.jpg', '14.000.000', '4 gr', 3),
(2, 1, 'Super Admin', '2020121258580002', 'Emi Asia', 'Manokwari', '1998-04-04', 'Perempuan', 'Belum Kawin', '082198931489', 'Jl. Toba', 'Admin Koperasi Tijarah', 'asiaemi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Aktif', '2021-06-23', 'emi.jpg', '', '', 2),
(17, 1, 'Super Admin', '2020121258580001', 'Maulana', 'Manokwari', '1998-12-28', 'Laki-Laki', 'Belum Kawin', '081414', 'Sogun City', 'Admin Komunitas', 'maulana@gmail.com', '05a5cf06982ba7892ed2a6d38fe832d6', 'Aktif', '2021-07-30', 'Screenshot_2020_0902_054608_(1)3.jpg', '14.000.000', '4 gr', 1),
(18, 1, 'Super Admin', '2020121258580007', 'Lagi', 'Manokwari', '2021-07-07', 'Laki-Laki', 'Belum Kawin', '0812454748', 'Manokwari', 'Hidden User', 'default@ex.com', '05a5cf06982ba7892ed2a6d38fe832d6', 'Non-Aktif', '2021-07-30', 'default.jpg', '14.000.000', '12 gr', 0),
(22, 1, 'Super Admin', '2020121258580008', 'Mangga', 'Manokwari', '2021-08-22', 'Laki-Laki', 'Belum Kawin', '08414', 'Manokwari', 'Admin Koperasi Tabarru', 'default@ex.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Aktif', '2021-08-17', 'default.jpg', '', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `agendakk_bq`
--
ALTER TABLE `agendakk_bq`
  ADD PRIMARY KEY (`id_agendakk`);

--
-- Indeks untuk tabel `agendaks`
--
ALTER TABLE `agendaks`
  ADD PRIMARY KEY (`id_agendaKS`);

--
-- Indeks untuk tabel `agendaumum`
--
ALTER TABLE `agendaumum`
  ADD PRIMARY KEY (`id_agendau`);

--
-- Indeks untuk tabel `akunbm`
--
ALTER TABLE `akunbm`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `akunbq`
--
ALTER TABLE `akunbq`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `data_aksesbm`
--
ALTER TABLE `data_aksesbm`
  ADD PRIMARY KEY (`id_akses`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `data_aksesbq`
--
ALTER TABLE `data_aksesbq`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `data_anggotabm`
--
ALTER TABLE `data_anggotabm`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `data_anggotabq`
--
ALTER TABLE `data_anggotabq`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `data_bendahara`
--
ALTER TABLE `data_bendahara`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `data_jabatanbm`
--
ALTER TABLE `data_jabatanbm`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `data_jabatanbq`
--
ALTER TABLE `data_jabatanbq`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `data_pinjamanbm`
--
ALTER TABLE `data_pinjamanbm`
  ADD PRIMARY KEY (`id_piutang`);

--
-- Indeks untuk tabel `data_piutangbq`
--
ALTER TABLE `data_piutangbq`
  ADD PRIMARY KEY (`id_piutang`);

--
-- Indeks untuk tabel `jurnalbm`
--
ALTER TABLE `jurnalbm`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `jurnalbq`
--
ALTER TABLE `jurnalbq`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indeks untuk tabel `pembiayaanbq`
--
ALTER TABLE `pembiayaanbq`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indeks untuk tabel `simpananbq`
--
ALTER TABLE `simpananbq`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_sa` (`id_sa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `agendakk_bq`
--
ALTER TABLE `agendakk_bq`
  MODIFY `id_agendakk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `agendaks`
--
ALTER TABLE `agendaks`
  MODIFY `id_agendaKS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `agendaumum`
--
ALTER TABLE `agendaumum`
  MODIFY `id_agendau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akunbm`
--
ALTER TABLE `akunbm`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1702;

--
-- AUTO_INCREMENT untuk tabel `akunbq`
--
ALTER TABLE `akunbq`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `data_aksesbm`
--
ALTER TABLE `data_aksesbm`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_aksesbq`
--
ALTER TABLE `data_aksesbq`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_anggotabm`
--
ALTER TABLE `data_anggotabm`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_anggotabq`
--
ALTER TABLE `data_anggotabq`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_bendahara`
--
ALTER TABLE `data_bendahara`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_jabatanbm`
--
ALTER TABLE `data_jabatanbm`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_jabatanbq`
--
ALTER TABLE `data_jabatanbq`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_pinjamanbm`
--
ALTER TABLE `data_pinjamanbm`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_piutangbq`
--
ALTER TABLE `data_piutangbq`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurnalbm`
--
ALTER TABLE `jurnalbm`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `jurnalbq`
--
ALTER TABLE `jurnalbq`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pembiayaanbq`
--
ALTER TABLE `pembiayaanbq`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `simpananbq`
--
ALTER TABLE `simpananbq`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_aksesbm`
--
ALTER TABLE `data_aksesbm`
  ADD CONSTRAINT `data_aksesbm_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatanbm` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_aksesbm_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggotabm` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_anggotabm`
--
ALTER TABLE `data_anggotabm`
  ADD CONSTRAINT `data_anggotabm_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatanbm` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
