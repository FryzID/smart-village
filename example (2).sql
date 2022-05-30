-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 10.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Budha'),
(5, 'Hindu'),
(6, 'Konghuchu'),
(8, 'lalala'),
(9, 'lalala'),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id` int(11) NOT NULL,
  `nama_dusun` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`id`, `nama_dusun`) VALUES
(1, 'Mangunrejo'),
(2, 'Krajan'),
(3, 'Mambil'),
(4, 'Sembung'),
(5, 'amamamama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_pembangunan`
--

CREATE TABLE `kategori_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_pembangunan`
--

INSERT INTO `kategori_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Jalan', '2017-11-26 13:36:16', '0000-00-00 00:00:00'),
(2, 'Jembatan', '2017-11-26 13:36:16', '0000-00-00 00:00:00'),
(3, 'Lampu Jalan', '2017-11-28 02:50:42', '0000-00-00 00:00:00'),
(4, 'Selokan', '2017-12-02 21:04:23', '0000-00-00 00:00:00'),
(5, 'Masjid', '2022-04-18 07:58:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_aduan`
--

CREATE TABLE `lapor_aduan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `pembangunan_id` int(11) NOT NULL,
  `status` enum('diverifikasi','ditolak','laporanbaru','dipending') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor_aduan`
--

INSERT INTO `lapor_aduan` (`id`, `foto`, `deskripsi`, `users_id`, `pembangunan_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'akjhfpidahfnsa', 7, 1, 'diverifikasi', '2022-04-06 06:09:53', '2022-04-08 01:26:55'),
(2, '', 'khdpaofhfoihefowf', 7, 1, 'ditolak', '2022-04-06 06:27:18', '2022-04-08 01:29:29'),
(3, '', 'jasdfiuasb', 7, 1, 'laporanbaru', '2022-04-06 07:46:42', '0000-00-00 00:00:00'),
(4, '2AFmOSVN7X0r.png', 'tukang nya bermasalah', 7, 1, 'laporanbaru', '2022-05-28 04:35:37', '2022-05-28 04:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `alamat`, `no_telp`, `email`, `users_id`) VALUES
(1, 'PT. CIPTA KARSA UTAMA', 'Ponorogo', '089644332212', 'cipta@cipta.com', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Pedagang'),
(2, 'PNS'),
(3, 'Polisi'),
(4, 'TNI'),
(5, 'Buruh'),
(6, 'Wiraswasta'),
(7, 'cuma cuma'),
(8, 'cuma cuma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembangunan`
--

CREATE TABLE `pembangunan` (
  `id` int(11) NOT NULL,
  `nama_pembangunan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `anggaran` float NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `presentase` float NOT NULL,
  `sumber_dana_pembangunan_id` int(11) NOT NULL,
  `kategori_pembangunan_id` int(11) NOT NULL,
  `status_pembangunan_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembangunan`
--

INSERT INTO `pembangunan` (`id`, `nama_pembangunan`, `foto`, `anggaran`, `tgl_mulai`, `tgl_selesai`, `longitude`, `latitude`, `keterangan`, `presentase`, `sumber_dana_pembangunan_id`, `kategori_pembangunan_id`, `status_pembangunan_id`, `users_id`, `mitra_id`, `created_at`, `updated_at`) VALUES
(1, 'Jembatan Sembung', 'ff975e9f1cf0cb57dfdbc9efa987a7e0.png', 300000000, '2018-08-13', '2018-08-13', '2', '3', 'Kerusakan akibat tanah longsor', 0, 2, 2, 1, 3, 1, '2017-12-18 04:42:19', '2017-12-26 14:00:41'),
(3, 'mencoba', 'F8Qq2yJbHMio.png', 10000000000, '2022-06-02', '2022-06-04', '1 KM', '4 M', 'Jalan antara Dusun Krajan  dengan bulu', 20, 1, 4, 1, 8, 1, '2022-05-27 03:53:20', '2022-05-27 03:53:20'),
(4, 'mencoba', 'cwzeQBXtvErx.png', 10000000000, '2022-06-02', '2022-06-04', '1 KM', '4 M', 'Jalan antara Dusun Krajan  dengan bulu', 20, 1, 4, 1, 8, 1, '2022-05-27 03:53:41', '2022-05-27 03:53:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`) VALUES
(1, 'SD/MI'),
(2, 'SLTP/SMP'),
(3, 'SLTA/SMA/SMK'),
(4, 'S1'),
(5, 'S2'),
(6, 'semua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama_id` int(11) NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Sudah Menikah') NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `rt_rw_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama_id`, `status_perkawinan`, `pekerjaan_id`, `pendidikan_id`, `rt_rw_id`, `created_at`, `updated_at`) VALUES
(1, '351510001400902620', 'Muhammad', 'Sidoarjo', '1997-08-22', 'L', 1, 'Belum Menikah', 6, 5, 2, '2017-12-05 05:56:34', '0000-00-00 00:00:00'),
(2, '351510001400902630', 'Widodo', 'Sidoarjo', '1978-12-05', '', 2, '', 1, 1, 4, '2017-12-05 06:00:22', '0000-00-00 00:00:00'),
(3, '351510001001202050', 'Syamsul Arif', 'Sidoarjo', '1992-12-02', '', 1, '', 1, 1, 9, '2017-12-05 06:16:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `perihal`, `isi`, `tgl_pengumuman`) VALUES
(1, 'Pembangunan Jalan', 'Diharapkan Untuk Pemuda memblokade jalan agar jalan bisa di perbaiki', '2022-05-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request_pembangunan`
--

CREATE TABLE `request_pembangunan` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `kategori_pembangunan_id` int(11) NOT NULL,
  `statu` enum('terverifikasi','requestbaru','ditindaklanjuti') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request_pembangunan`
--

INSERT INTO `request_pembangunan` (`id`, `judul`, `deskripsi`, `users_id`, `kategori_pembangunan_id`, `statu`, `created_at`, `updated_at`) VALUES
(1, 'ng[ahaeiufhq', 'fakjwenbfihqbwkbi', 7, 1, 'terverifikasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'fahiufaifduae', 'dfaifhiuagdigfuaieu Alamat : 104', 7, 2, 'terverifikasi', '2022-04-11 06:23:01', '2022-04-16 08:07:09'),
(3, 'Membuat slametan ', 'agar pembangunan jalan berjalan lancar dan tanpa halangan Alamat :  RT : 3 RW : 03', 7, 1, 'requestbaru', '2022-04-11 06:25:24', '0000-00-00 00:00:00'),
(4, 'Contoh acara nya ', 'akniafhbisaifubasiudfi, Alamat : Dusun : ,Mangunrejo RT : 5 RW : 03', 7, 2, 'requestbaru', '2022-04-11 07:01:19', '0000-00-00 00:00:00'),
(5, 'vadnsbeoaishosi', 'avabviuabaiuvg, Alamat : Dusun : Krajan, RT : 1 RW : 03', 7, 2, 'requestbaru', '2022-04-11 07:02:15', '0000-00-00 00:00:00'),
(6, 'fahiufaifduae', 'fdaiwuehf9iawhiuawf, Alamat : Dusun : Krajan, RT : 5 RW : 03', 7, 3, 'requestbaru', '2022-04-11 07:04:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `icon`, `sort`) VALUES
(1, 'admin', 'users', ''),
(2, 'kades', '', ''),
(6, 'penduduk', '', ''),
(7, 'operator', '', ''),
(8, 'mitra', '', ''),
(9, 'camat', '', ''),
(11, 'kasipel', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt_rw`
--

CREATE TABLE `rt_rw` (
  `id` int(11) NOT NULL,
  `rw_parent` varchar(5) NOT NULL,
  `rt_child` int(5) NOT NULL,
  `dusun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt_rw`
--

INSERT INTO `rt_rw` (`id`, `rw_parent`, `rt_child`, `dusun_id`) VALUES
(1, '01', 0, 1),
(2, '01', 1, 1),
(3, '02', 1, 1),
(4, '02', 3, 1),
(5, '03', 0, 1),
(7, '03', 3, 1),
(8, '04', 3, 1),
(9, '01', 5, 2),
(10, '02', 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pembangunan`
--

CREATE TABLE `status_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pembangunan`
--

INSERT INTO `status_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Progress', '2017-11-28 02:53:32', '2022-05-23 06:24:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_surat`
--

CREATE TABLE `status_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_surat`
--

INSERT INTO `status_surat` (`id`, `nama`, `roles_id`) VALUES
(1, 'Telah Diterima', 0),
(2, 'Berkas Komplit', 0),
(3, 'Disetujui Sekretaris Desa', 0),
(4, 'Disetujui Kepala Desa', 0),
(5, 'Diambil Pemohon', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_surat_keterangan`
--

CREATE TABLE `status_surat_keterangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_surat_keterangan`
--

INSERT INTO `status_surat_keterangan` (`id`, `nama`, `roles_id`) VALUES
(1, 'Telah Diterima', 1),
(2, 'Berkas Komplit', 1),
(3, 'Disetujui Sekertaris Desa', 1),
(4, 'Disetujui Kepala Desa', 1),
(5, 'Verifikasi Operator Kecamatan', 1),
(6, 'Disetujui Kasi Pelayanan', 1),
(7, 'Disetujui Sekertaris Kecamatan', 1),
(8, 'Disetujui Kepala Kecamatan', 1),
(9, 'Stampel Kecamatan', 1),
(10, 'Diambil Pemohon', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_dana_pembangunan`
--

CREATE TABLE `sumber_dana_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumber_dana_pembangunan`
--

INSERT INTO `sumber_dana_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'APBD', '2017-12-06 04:25:07', '0000-00-00 00:00:00'),
(2, 'Anggaran Dana Desa', '2017-12-06 04:25:21', '0000-00-00 00:00:00'),
(3, 'APBN', '2017-12-06 04:25:30', '0000-00-00 00:00:00'),
(4, 'Anggaran Mandiri', '2022-04-18 08:08:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_domisili_perorangan`
--

CREATE TABLE `surat_domisili_perorangan` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `nik` int(50) NOT NULL,
  `nik_alamat_lengkap` varchar(255) NOT NULL,
  `nik_no_telp` varchar(20) NOT NULL,
  `desa_domisili` varchar(50) NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `rt_domisili` int(11) NOT NULL,
  `rw_domisili` int(11) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `lampiran_ktp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `approval_date_kades` datetime DEFAULT NULL,
  `kades_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `flag` int(1) NOT NULL,
  `desa_pengantar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_domisili_perorangan`
--

INSERT INTO `surat_domisili_perorangan` (`id`, `no_surat`, `nik`, `nik_alamat_lengkap`, `nik_no_telp`, `desa_domisili`, `alamat_domisili`, `rt_domisili`, `rw_domisili`, `keperluan`, `lampiran_ktp`, `created_at`, `created_by`, `updated_at`, `updated_by`, `approval_date_kades`, `kades_id`, `status`, `flag`, `desa_pengantar`) VALUES
(2, 2147483647, 1, 'adfdsaesdfafw', '341351451', 'adfafafafa', 'adsfasfasfassd', 2, 4, 'dafafafa', 'pOIgm62YfE3Q.png', '2022-05-28 05:45:58', 8, '2022-05-28 05:45:58', 8, NULL, 6, 4, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_domisili_usaha`
--

CREATE TABLE `surat_domisili_usaha` (
  `id` int(11) NOT NULL,
  `no_surat` int(50) NOT NULL,
  `badan_usaha` varchar(100) NOT NULL,
  `bidang_usaha` varchar(100) NOT NULL,
  `alamat_badan_usaha` varchar(255) NOT NULL,
  `nik_pemilik` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `maksud` varchar(255) NOT NULL,
  `lampiran_ktp` varchar(100) NOT NULL,
  `lampiran_dokumen_pendukung` varchar(100) NOT NULL,
  `lampiran_foto_usaha` varchar(100) NOT NULL,
  `lampiran_keterangan_rt_rw` varchar(100) NOT NULL,
  `lampiran_surat_peryataan` varchar(100) NOT NULL,
  `desa_pengantar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `flag` int(1) NOT NULL,
  `approval_date_kades` datetime DEFAULT NULL,
  `kades_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_domisili_usaha`
--

INSERT INTO `surat_domisili_usaha` (`id`, `no_surat`, `badan_usaha`, `bidang_usaha`, `alamat_badan_usaha`, `nik_pemilik`, `no_telp`, `maksud`, `lampiran_ktp`, `lampiran_dokumen_pendukung`, `lampiran_foto_usaha`, `lampiran_keterangan_rt_rw`, `lampiran_surat_peryataan`, `desa_pengantar`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`, `flag`, `approval_date_kades`, `kades_id`) VALUES
(2, 2147483647, 'asfdafasfdasfdasfa', 'adsfafdsfafafasas', 'asfafdadfdsfasdfasa', '1', '43524525523', 'asdfadasfafaafd', '', '', '', '', '', '', '2022-05-30 03:21:17', 8, '2022-05-30 03:21:17', 8, 1, 0, NULL, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `berat` decimal(5,2) NOT NULL,
  `tinggi` decimal(5,2) NOT NULL,
  `tipe_kelahiran` varchar(100) NOT NULL,
  `kembar_ke` int(1) DEFAULT NULL,
  `tempat_kelahiran` varchar(100) NOT NULL,
  `tempat_kelahiran_desa` varchar(100) NOT NULL,
  `penolong_kelahiran` varchar(100) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `alamat_lengkap_ayah` varchar(255) NOT NULL,
  `kewarganegaraan_ayah` int(1) NOT NULL,
  `no_telp_ayah` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `alamat_lengkap_ibu` varchar(255) NOT NULL,
  `kewarganegaraan_ibu` int(1) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `hubungan_pelapor` varchar(100) NOT NULL,
  `desa_pengantar` char(10) NOT NULL,
  `lampiran_kk` varchar(255) DEFAULT NULL,
  `lampiran_surat_nikah` varchar(255) DEFAULT NULL,
  `lampiran_surat_kelahiran` varchar(255) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `approval_date_kades` datetime DEFAULT NULL,
  `kades_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id`, `no_surat`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `berat`, `tinggi`, `tipe_kelahiran`, `kembar_ke`, `tempat_kelahiran`, `tempat_kelahiran_desa`, `penolong_kelahiran`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `alamat_lengkap_ayah`, `kewarganegaraan_ayah`, `no_telp_ayah`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `alamat_lengkap_ibu`, `kewarganegaraan_ibu`, `nama_pelapor`, `hubungan_pelapor`, `desa_pengantar`, `lampiran_kk`, `lampiran_surat_nikah`, `lampiran_surat_kelahiran`, `flag`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `approval_date_kades`, `kades_id`) VALUES
(1, '2314315431', 'nggak tau', 'l', '2022-05-11 00:00:00', '11.00', '245.00', 'aefafaeaa', 2, 'fsfvdsfsv', 'fdsaafdada', 'ascacdaca', '1', '', '0000-00-00', 'Jln. Sari', 1, '2131243', '2', '', '0000-00-00', 'Jln. Sari', 1, 'dada', 'daadaa', '', 'cHCHcG5qDvrB.png', NULL, NULL, 1, 1, '2022-05-27 05:23:30', '2022-05-30 03:54:30', 8, 0, '2022-05-04 00:00:00', 9),
(2, '131241313412', 'dsavavad', 'l', '2022-06-01 00:00:00', '11.00', '245.00', '32dfsafsd', 3, 'fsfvdsfsv', 'adsfafffffffffa', 'sfdvfsvdfvs', '1', '', '0000-00-00', 'Jln. Sari', 0, '1123124123', '2', '', '0000-00-00', 'Jln. Sari', 0, 'dsaDEWFW', 'AFAWAWAF', '', 'vGYzreFaj2m4.png', NULL, NULL, 1, 1, '2022-05-27 06:28:29', '2022-05-27 06:28:29', 8, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status_pernikahan` int(1) NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `kewarganegaraan` int(1) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `umur_meninggal` int(1) NOT NULL,
  `tempat_meninggal` varchar(100) NOT NULL,
  `sebab_meninggal` varchar(250) NOT NULL,
  `penentu_meninggal` int(1) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `hubungan_pelapor` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `lampiran_kk` varchar(255) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `desa_pengantar` char(10) NOT NULL,
  `approval_date_kades` datetime DEFAULT NULL,
  `kades_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_kematian`
--

INSERT INTO `surat_kematian` (`id`, `no_surat`, `nik`, `nama`, `alamat_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `status_pernikahan`, `pekerjaan_id`, `agama_id`, `kewarganegaraan`, `tanggal_meninggal`, `umur_meninggal`, `tempat_meninggal`, `sebab_meninggal`, `penentu_meninggal`, `nama_pelapor`, `hubungan_pelapor`, `no_telp`, `lampiran_kk`, `flag`, `status`, `created_at`, `upated_at`, `created_by`, `updated_by`, `desa_pengantar`, `approval_date_kades`, `kades_id`) VALUES
(2, '124132413', '1', '', 'Karepmu', '0000-00-00', '', 0, 0, 0, 0, '2022-05-27', 12, 'Ponorogo', 'Kecelakaan', 0, 'jajaja', 'Paman', '3213412341', '-3yMqohpeF7Q.png', 1, 1, '2022-05-27 05:59:15', '2022-05-27 05:59:15', 8, 0, '', '0000-00-00 00:00:00', 0),
(3, '432123134132', '2', '', 'dsaffadfsaa', '0000-00-00', '', 0, 0, 0, 1, '2022-05-26', 12, 'Ponorogo', 'Kecelakaan', 0, 'jajaja', 'Paman', '3213412341', 'Kv0wxYPD-HXs.png', 1, 1, '2022-05-27 06:09:58', '2022-05-27 06:09:58', 8, 0, '', '0000-00-00 00:00:00', 0),
(4, '12354154523', '2', '', 'afsfdsaffsffa', '0000-00-00', '', 0, 0, 0, 1, '2022-05-27', 45, 'Ponorogo', 'Kecelakaan', 0, 'afafdafdada', 'dfadsdfassdfsafasf', '1234135154', '', 1, 1, '2022-05-30 03:53:59', '2022-05-30 04:07:00', 8, 0, '', '2022-05-26 00:00:00', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_desa`
--

CREATE TABLE `surat_keterangan_desa` (
  `id` int(11) NOT NULL,
  `judul_surat` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `kades_id` int(11) NOT NULL,
  `nik_id` int(11) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `keterangan` text NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `lampiran_ktp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `flag` int(11) NOT NULL DEFAULT 1,
  `desa_pengantar` char(10) NOT NULL,
  `approval_date_kades` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keterangan_desa`
--

INSERT INTO `surat_keterangan_desa` (`id`, `judul_surat`, `no_surat`, `kades_id`, `nik_id`, `no_telp`, `keterangan`, `keperluan`, `lampiran_ktp`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`, `flag`, `desa_pengantar`, `approval_date_kades`) VALUES
(1, 'Izin Berpergian', '41241341543513413', 9, 1, 2147483647, 'aalfa[jnocvoai', 'Bekerja di Perkebunan Kelapa Sawit', 'QHaFnQPt7DYM.png', '2022-04-26 08:31:22', '2022-05-30 04:25:48', 7, 0, 3, 1, 'dfasjkdigi', '2022-05-04 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan_miskin`
--

CREATE TABLE `surat_keterangan_miskin` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nik_id` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `surat_pernyataan_miskin` varchar(200) NOT NULL,
  `desa_pengantar` char(10) NOT NULL,
  `lampiran_ktp` varchar(100) NOT NULL,
  `lampiran_kk` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `flag` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `approval_date_kades` datetime NOT NULL,
  `kades_id` int(11) NOT NULL,
  `approval_date_camat` datetime NOT NULL,
  `camat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keterangan_miskin`
--

INSERT INTO `surat_keterangan_miskin` (`id`, `no_surat`, `nik_id`, `no_telp`, `keterangan`, `surat_pernyataan_miskin`, `desa_pengantar`, `lampiran_ktp`, `lampiran_kk`, `status`, `flag`, `created_at`, `updated_at`, `created_by`, `updated_by`, `approval_date_kades`, `kades_id`, `approval_date_camat`, `camat_id`) VALUES
(4, '234151541343432', 1, '1135413145', 'dfqwfwqergvreqgaezgafdgzdfgzsge', 'fgwrgfoisdbjfd.jpg', 'dfasjkdigi', 'iofdiahsfpias.jpg', 'adkhfopiashnbdkjf.jpg', 1, 1, '2022-04-25 08:47:27', '2022-05-30 04:24:50', 7, 0, '0000-00-00 00:00:00', 6, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pengantar_skck`
--

CREATE TABLE `surat_pengantar_skck` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `agama` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tujuan_pembuatan` text NOT NULL,
  `lampiran_ktp` varchar(255) NOT NULL,
  `lampiran_kk` varchar(255) NOT NULL,
  `lampiran_akte_kelahiran` varchar(255) NOT NULL,
  `lampiran_pasfoto` varchar(255) NOT NULL,
  `desa_pengantar` char(10) NOT NULL,
  `status` int(11) DEFAULT 1,
  `flag` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) NOT NULL,
  `approval_date_kades` datetime DEFAULT NULL,
  `kades_id` int(11) DEFAULT NULL,
  `approval_date_camat` datetime DEFAULT NULL,
  `camat_id` int(11) DEFAULT NULL,
  `approval_date_kasipel` datetime DEFAULT NULL,
  `kasipel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_pengantar_skck`
--

INSERT INTO `surat_pengantar_skck` (`id`, `no_surat`, `nik`, `nama`, `alamat_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `no_telp`, `tujuan_pembuatan`, `lampiran_ktp`, `lampiran_kk`, `lampiran_akte_kelahiran`, `lampiran_pasfoto`, `desa_pengantar`, `status`, `flag`, `created_at`, `created_by`, `updated_at`, `updated_by`, `approval_date_kades`, `kades_id`, `approval_date_camat`, `camat_id`, `approval_date_kasipel`, `kasipel_id`) VALUES
(2, '1341532453243', '2', '', '', '', '', '', '', 0, '14131252342', 'cvzaerfwfdafdedsafd', 'bEGBWWjQLjrU.png', '', '', '', '', 1, 0, '2022-05-28 06:59:39', 8, '2022-05-28 06:59:39', 8, NULL, 6, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penduduk_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `roles_id`, `name`, `username`, `password`, `auth_key`, `password_reset_token`, `access_token`, `email`, `photo`, `last_login`, `penduduk_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administrator', 'admin', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 'Y1j-gM3JtyEmJagdH2sogdv4FFKvy7Fc', '', 'YWRtaW46NDMzYTliN2IwZTlhOGJmZjhiNjhhODEyYmU0ZmM3ZTRkNzBhM2Q0NA==', 'admin@gmail.com', 'f0315bbaa88081dfc8071971d5cc315d.jpg', '2017-12-26 14:42:23', 1, '2017-10-23 14:26:39', '2017-12-26 14:42:23'),
(3, 7, 'operator', 'operator', '4aed7fb4eed446796c59ab3fd911e359f063ec83', 'FZH9E-lxRkTZXXv0V4M-TRi1oIHMFzy_', NULL, '', 'operator@operator.com', '', '2017-12-26 15:17:31', 2, '2017-11-28 03:16:17', '2017-12-26 15:17:31'),
(4, 6, '', 'syamsul', '104e8dcd37fedbd62989b71cd2c9ec41945966a5', '', NULL, 'c3lhbXN1bDoxMTQ3ZTIyY2FhOWFiZTA4NmY5ZGY3MDcwNTE0ZGIyYmIwZjY5ZDY4', '', '', '2017-12-26 08:12:04', 3, '2017-12-05 06:24:27', '2017-12-26 14:12:04'),
(5, 8, 'Karsa Cipta', 'ciptakarsa', '9f92745f69e81c3ba6f26fa37b0f453ee55c076b', 'FgKR2lYmCwAPtsHwF_6VzmRRlStRgjFA', NULL, '', 'cipta@cipta.com', '', '2017-12-26 14:43:28', NULL, '2017-12-18 02:21:02', '2017-12-26 14:43:28'),
(6, 2, 'Muhammad', 'faridzy', '32b79e13c297e0249a3b356291c1fe66666efa41', 'tcGcNCwtNXWM8nDdxIT__7SfUwRU0NoN', NULL, '', 'faridzy@gmail.com', '', '2017-12-20 07:16:34', NULL, '2017-12-20 07:16:12', '2017-12-20 07:16:34'),
(7, 1, 'someone', 'admin2', '$2y$13$Qn6JtVZMvOzgUAPu9w32vuNqQrVDEDFKAYkxM5TXEDz/Ju5.jO1ZG', '0JJUFqJqZ5TpR4waeag954qE3vniJ3MA', NULL, 'xejtJQFvWbuXILyqFyqMSC6bBraLUYAB_1649222710', 'admin@app.com', '', '2022-04-07 03:59:45', NULL, '0000-00-00 00:00:00', '2022-04-07 03:59:45'),
(8, 7, 'gelud', 'operator2', '$2y$13$0QbQee6Im6G6sgGHo/HXcufv4JJGZ.UuWjkGbX9Fx9kI23juVxsBG', '8_MGLYf1HGuIGxNn24XVAXm3F4rY0az-', NULL, 'Y-jNGlUCHjn_0pUYKQI8owX34UabYuu9_1649304283', 'user@app.com', '', '2022-04-12 06:19:36', NULL, '2022-04-07 04:04:43', '2022-04-12 06:19:36'),
(9, 2, 'emboh', 'emboh', '$2y$13$Se1PUw2ruReS0A8fgjXpK..SwM0lZU0epjKMNdt6aJ/q7HyhrWKwm', '_Q1iOmGt7oD25dULpMWXoUM58bFdmTg0', NULL, '9tUA_-noIlo1YNmFqVtzWbHyEZKnjiPW_1653277742', 'emboh@gmail.com', '', '2022-05-27 03:37:01', NULL, '2022-05-23 03:49:02', '2022-05-27 03:37:01'),
(10, 0, 'aku', 'aku', '$2y$13$aS8CZzHZsnMxbNSL.Z.a1uwm/8jxDi0FX6y8SL4jXzMLL28IMiU/2', 'pcv7A9Ay2R15E9JeGpqLY_aZy4dLKfAu', NULL, 'C6yH_FCYiGHwbE6PM0TzX7A2tJVpZjf8_1653277901', 'aku@gmail.com', 'Sx7vW2kmuMon.png', '2022-05-27 05:32:01', NULL, '2022-05-23 03:51:41', '2022-05-27 05:32:01'),
(11, 0, 'kamu', 'kamu', '$2y$13$hr5jsKWxuoVuf5WD3yrmuOuDwfEiWMlujqXtZ4C4/SlMYTmoAay6O', '_FzP23nmvqukiaZwP6AYz9bsNCdkq0r4', NULL, 'uv7wob7yUr6jzwF3raW3zSbXv7mntNMt_1653278502', 'kamu@gmail.com', '', '2022-05-23 04:01:42', NULL, '2022-05-23 04:01:42', '2022-05-23 04:01:42'),
(12, 0, 'baba', 'baba', '$2y$13$UhQZxQJGjuI6NLJv752lqOV4BWZHq5DUidBEvG/OP.hyHL75le8l6', 'BnTXEY0wcbqzBmTL2aqLroby1ez5qU3r', NULL, '', 'baba@gmail.com', '', '2022-05-23 04:27:08', NULL, '2022-05-23 04:27:08', '2022-05-23 04:27:08'),
(13, 1, 'cbhadb', 'bcyaauydbu', '$2y$13$zwR4hnwe3atigChGGV8.IuXJmBVEuvnZeDISmIPHMo1nkv3vNHDgm', 'jdVNPb6xY-FPjnM0JlA2E-LzChwnUy2C', NULL, '', 'jbcaaicbiubad', '', '2022-05-23 05:46:45', 1, '2022-05-23 05:46:45', '2022-05-23 05:46:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_pembangunan`
--
ALTER TABLE `kategori_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `pembangunan_id` (`pembangunan_id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_mitrausers` (`users_id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `kategori_pembangunan_id` (`kategori_pembangunan_id`),
  ADD KEY `sumber_dana_pembangunan_id` (`sumber_dana_pembangunan_id`),
  ADD KEY `status_pembangunan_id` (`status_pembangunan_id`),
  ADD KEY `fk_mitra_fk` (`mitra_id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agama_id` (`agama_id`),
  ADD KEY `rt_rw_id` (`rt_rw_id`),
  ADD KEY `pendidikan_id` (`pendidikan_id`),
  ADD KEY `pekerjaan_id` (`pekerjaan_id`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `kategori_pembangunan_id` (`kategori_pembangunan_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dusun_id` (`dusun_id`);

--
-- Indeks untuk tabel `status_pembangunan`
--
ALTER TABLE `status_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_surat`
--
ALTER TABLE `status_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_surat_keterangan`
--
ALTER TABLE `status_surat_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumber_dana_pembangunan`
--
ALTER TABLE `sumber_dana_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_domisili_perorangan`
--
ALTER TABLE `surat_domisili_perorangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_domisili_usaha`
--
ALTER TABLE `surat_domisili_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_kelahiran_ibfk_2` (`status`),
  ADD KEY `surat_kelahiran_ibfk_1` (`kades_id`);

--
-- Indeks untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_kematian_ibfk_1` (`agama_id`),
  ADD KEY `surat_kematian_ibfk_3` (`pekerjaan_id`),
  ADD KEY `surat_kematian_ibfk_4` (`status`),
  ADD KEY `surat_kematian_ibfk_2` (`kades_id`);

--
-- Indeks untuk tabel `surat_keterangan_desa`
--
ALTER TABLE `surat_keterangan_desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_keterangan_desa_ibfk_2` (`status`),
  ADD KEY `surat_keterangan_desa_ibfk_1` (`kades_id`);

--
-- Indeks untuk tabel `surat_keterangan_miskin`
--
ALTER TABLE `surat_keterangan_miskin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_keterangan_miskin_ibfk_1` (`kades_id`),
  ADD KEY `surat_keterangan_miskin_ibfk_2` (`status`);

--
-- Indeks untuk tabel `surat_pengantar_skck`
--
ALTER TABLE `surat_pengantar_skck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_pengantar_skck_ibfk_1` (`kades_id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `kasipel_id` (`kasipel_id`),
  ADD KEY `camat_id` (`camat_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `users_fk11` (`penduduk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_pembangunan`
--
ALTER TABLE `kategori_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rt_rw`
--
ALTER TABLE `rt_rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status_pembangunan`
--
ALTER TABLE `status_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `status_surat`
--
ALTER TABLE `status_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status_surat_keterangan`
--
ALTER TABLE `status_surat_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sumber_dana_pembangunan`
--
ALTER TABLE `sumber_dana_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_domisili_perorangan`
--
ALTER TABLE `surat_domisili_perorangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_domisili_usaha`
--
ALTER TABLE `surat_domisili_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_desa`
--
ALTER TABLE `surat_keterangan_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan_miskin`
--
ALTER TABLE `surat_keterangan_miskin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat_pengantar_skck`
--
ALTER TABLE `surat_pengantar_skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  ADD CONSTRAINT `lapor_aduan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_aduan_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_aduan_ibfk_3` FOREIGN KEY (`pembangunan_id`) REFERENCES `pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `fk_mitrausers` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD CONSTRAINT `fk_mitra_fk` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_10` FOREIGN KEY (`status_pembangunan_id`) REFERENCES `status_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_2` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_4` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_5` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_6` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_8` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_9` FOREIGN KEY (`sumber_dana_pembangunan_id`) REFERENCES `sumber_dana_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_3` FOREIGN KEY (`rt_rw_id`) REFERENCES `rt_rw` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_4` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_5` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_6` FOREIGN KEY (`rt_rw_id`) REFERENCES `rt_rw` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_7` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_8` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  ADD CONSTRAINT `request_pembangunan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_pembangunan_ibfk_2` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD CONSTRAINT `rt_rw_ibfk_1` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD CONSTRAINT `surat_kelahiran_ibfk_1` FOREIGN KEY (`kades_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `surat_kelahiran_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_surat` (`id`);

--
-- Ketidakleluasaan untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD CONSTRAINT `surat_kematian_ibfk_2` FOREIGN KEY (`kades_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `surat_kematian_ibfk_4` FOREIGN KEY (`status`) REFERENCES `status_surat` (`id`);

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_desa`
--
ALTER TABLE `surat_keterangan_desa`
  ADD CONSTRAINT `surat_keterangan_desa_ibfk_1` FOREIGN KEY (`kades_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `surat_keterangan_desa_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_surat` (`id`);

--
-- Ketidakleluasaan untuk tabel `surat_keterangan_miskin`
--
ALTER TABLE `surat_keterangan_miskin`
  ADD CONSTRAINT `surat_keterangan_miskin_ibfk_1` FOREIGN KEY (`kades_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `surat_keterangan_miskin_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status_surat_keterangan` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `users_fk11` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
