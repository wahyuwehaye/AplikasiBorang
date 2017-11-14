-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Nov 2017 pada 16.31
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_borang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `borang`
--

CREATE TABLE `borang` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fakpro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `buku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `borang`
--

INSERT INTO `borang` (`id`, `jenis`, `fakpro`, `tahun`, `buku`, `created_at`, `updated_at`) VALUES
(1, 'Prodi', 'S1 Hubungan Masyarakat', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:08:53'),
(2, 'Prodi', 'D3 Komputerisasi Akuntansi', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-14 21:09:42'),
(3, 'Prodi', 'S1 Administrasi Bisnis', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 05:04:08'),
(4, 'Prodi', 'Magister of Manajemen', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(5, 'Prodi', 'S1 Ilmu Komunikasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(6, 'Prodi', 'S1 Akuntansi', 2017, 'Borang', '2017-04-19 17:48:03', '2017-04-20 01:18:21'),
(7, 'Prodi', 'S1 Desain Komunikasi Visual', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(8, 'Prodi', 'S1 Sistem Komputer', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(9, 'Prodi', 'S1 Teknik Elektro', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(10, 'Prodi', 'S1 Teknik Fisika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(11, 'Prodi', 'S1 Teknik Telekomunikasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(12, 'Prodi', 'S1 Sistem Informasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(13, 'Prodi', 'S1 Teknik Industri', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(14, 'Prodi', 'S1 Teknik Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(15, 'Prodi', 'S1 Ilmu Komputasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(16, 'Prodi', 'S1 Manajemen Teknologi Bisnis dan Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(17, 'Prodi', 'S1 Desain Interior', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(18, 'Prodi', 'S1 Desain Produk', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(19, 'Prodi', 'S1 Kriya Tekstil dan Mode', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(20, 'Prodi', 'S1 Seni Rupa Murni', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(21, 'Prodi', 'D3 Manajemen Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(22, 'Prodi', 'D3 Manajemen Pemasaran', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(23, 'Prodi', 'D3 Perhotelan', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(24, 'Prodi', 'D3 Teknik Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(25, 'Prodi', 'D3 Teknik Komputer', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(26, 'Prodi', 'D3 Teknik Telekomunikasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(27, 'Prodi', 'D4 Sistem Multimedia', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:09:52'),
(28, 'Prodi', 'Magister Elektro Telekomunikasi', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(29, 'Prodi', 'Magister Teknik Industri', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(30, 'Prodi', 'Magister Teknik Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(31, 'Fakultas', 'D3 Fakultas Ilmu Terapan', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:10:19'),
(38, 'Fakultas', 'D4 Fakultas Ilmu Terapan', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(40, 'Fakultas', 'S1 Fakultas Teknik Elektro', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 05:01:49'),
(44, 'Fakultas', 'S1 Fakultas Rekayasa Industri', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(45, 'Fakultas', 'S1 Fakultas Teknik Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:40:07'),
(48, 'Fakultas', 'S1 Fakultas Ekonomi Bisnis', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 03:49:54'),
(49, 'Fakultas', 'S1 Fakultas Komunikasi Dan Bisnis', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:34:10'),
(51, 'Fakultas', 'S1 Fakultas Industri Kreatif', 2017, 'Borang', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(56, 'Fakultas', 'S2 Fakultas Teknik Elektro', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 05:03:38'),
(57, 'Fakultas', 'S2 Fakultas Rekayasa Industri', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 05:03:32'),
(58, 'Fakultas', 'S2 Fakultas Teknik Informatika', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-29 21:11:03'),
(59, 'Fakultas', 'S2 Fakultas Ekonomi Bisnis', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-29 21:10:06'),
(61, 'Prodi', 'S1 Teknologi Informasi', 2017, 'Borang', '2017-04-19 17:48:03', '2017-05-12 04:40:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `butir`
--

CREATE TABLE `butir` (
  `id` int(10) UNSIGNED NOT NULL,
  `butir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bakumutu` text COLLATE utf8_unicode_ci NOT NULL,
  `penjelasan` text COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_borang` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `butir`
--

INSERT INTO `butir` (`id`, `butir`, `bakumutu`, `penjelasan`, `keterangan`, `created_at`, `updated_at`, `id_borang`) VALUES
(1, '1.1.a', 'Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran Program Studi', '', 'Nilai 4 - Memiliki visi, misi, tujuan, dan sasaran yang sangat jelas dan sangat realistik', '2017-11-02 07:38:38', '2017-11-02 02:16:14', 3),
(2, '1.1.b', 'Strategi Pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen', '', 'Nilai 4 - \r\nStrategi pencapaian sasaran :\r\n(1) dengan tahapan waktu yang jelas dan sangat realistik\r\n(2) didukung dokumen yang sangat lengkap', '2017-01-09 18:32:57', '2017-01-09 20:44:47', 3),
(3, '1.2', 'Sosialisasi yang efektif tercermin dari tingkat pemahaman pihak terkait', '', 'Nilai 4 - Dipahami dengan baik oleh seluruh sivitas akademika dan tenaga kependidikan', '2017-01-09 18:33:16', '2017-01-09 20:46:16', 3),
(4, '2.1', 'Tata Pamong menjamin terwujudnya visi, terlaksanakannya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil', '', 'Nilai 4 - Program studi memiliki tata pamong yang memungkinkan terlaksananya secara konsisten prinsip tata pamong, dan menjamin penyelenggaraan program studi yang memenuhi 5 aspek berikut : (1) kredibel, (2) transparan, (3) akuntabel, (4) bertanggung jawab dan (5) adil', '2017-01-09 18:33:45', '2017-01-09 20:50:30', 3),
(5, '2.2', 'Karekteristik kepemimpinan yang efektiif', '', 'Nilai 4 - Kepemimpinan program studi memiliki karakteristik yang kuat dalam : (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik', '2017-01-09 18:34:09', '2017-01-09 20:52:47', 3),
(6, '2.3', 'Sistem Pengelolaan fungsional dan opeerasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan', '', 'Nilai 4 - Sistem pengelolaan fungsional dan operasional program studi berjalan sesuai dengan SOP, yang didukung dokumen yang lengkap', '2017-01-09 18:34:29', '2017-01-09 20:54:29', 3),
(7, '2.4', 'Pelaksanaan penjaminan mutu di program studi\r\n\r\nPelaksanaannya antara lain dengan adanya: kelompok dosen bidang ilmu yang menilai mutu soal ujian, silabus, dan tugas akhir, serta penguji luar (external examiner) ', '', 'Nilai 4 - Sistem penjaminan mutu berjalan sesuai dengan standar penjaminan mutu, ada  umpan balik dan tindak lanjutnya, yang didukung dokumen yang lengkap', '2017-01-09 18:35:22', '2017-01-10 00:17:06', 3),
(8, '2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.\r\nSumber umpan balik antara lain dari: (1) dosen, (2) mahasiswa, (3) alumni, (4) pengguna lulusan.\r\n\r\nUmpan balik digunakan untuk perbaikan kurikulum, pelaksanaan proses pembelajaran, dan peningkatan kegiatan program studi', '', 'Nilai 4 - Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara berkelanjutan', '2017-01-09 18:35:41', '2017-01-10 00:17:32', 3),
(9, '2.6', 'Upaya-upaya yang telah dilakukan penyelenggara program studi untuk menjamin keberlanjutan (sustainability) program studi ini antara lain mencakup:\r\na. Upaya untuk peningkatan animo calon mahasiswa\r\nb. Upaya peningkatan mutu manajemen\r\nc. Upaya untuk peningkatan mutu lulusan\r\nd. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\r\ne. Upaya dan prestasi dalam memperoleh dana hibah kompetitif', '', 'Nilai 4 - Ada bukti semua usaha dilakukan berikut hasilnya.\r\n', '2017-01-09 18:36:12', '2017-01-09 20:57:41', 3),
(10, '3.1.1.a', 'Rasio calon mahasiswa yang ikut seleksi : daya tampung', '', 'Nilai 4 - Jika rasio ≥ 5, \r\nmaka skor = 4.', '2017-01-09 18:37:16', '2017-01-09 21:02:15', 3),
(11, '3.1.1.b', 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi', '', 'Nilai 4 - Jika rasio ≥ 95%, maka skor = 4', '2017-01-09 21:04:54', '0000-00-00 00:00:00', 3),
(12, '3.1.1.c', 'Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer', '', 'Nilai 4 - Jika RM ≤ 0.25, maka skor = 4', '2017-01-09 21:06:43', '2017-01-09 21:07:35', 3),
(13, '3.1.1.d', 'Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir', '', 'Nilai 4 - Jika IPK ≥ 3, maka skor = 4', '2017-01-09 21:07:21', '0000-00-00 00:00:00', 3),
(14, '3.1.2', 'Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal  (sekitar 12 sks)', '', 'Nilai 4 - Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks ', '2017-01-09 18:37:32', '2017-01-09 21:08:38', 3),
(15, '3.1.3', 'Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat', '', 'Nilai 4 - Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat nasional atau internasional', '2017-01-09 18:37:45', '2017-01-09 21:09:23', 3),
(16, '3.1.4', 'Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir ', '', '', '2017-01-09 18:38:01', '0000-00-00 00:00:00', 3),
(17, '3.2', 'Mahasiswa memiliki akses untuk mendapatkan pelayanan mahasiswa yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan. \r\n\r\nJenis pelayanan kepada mahasiswa antara lain:\r\n1. Bimbingan dan konseling\r\n2. Minat dan bakat (ekstra kurikuler)\r\n3. Pembinaan soft skill\r\n4. Layanan beasiswa\r\n5. Layanan kesehatan', '', 'Nilai 4 - Ada semua (5 jenis) pelayanan mahasiswa yang dapat diakses. ', '2017-01-09 18:38:47', '2017-01-10 00:16:35', 3),
(19, '3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan', '', 'Nilai 4 - Ada upaya yang intensif untuk melacak  lulusan dan datanya terekam secara komprehensif', '2017-01-09 18:39:48', '2017-01-10 00:16:08', 3),
(20, '3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: \r\n(1) proses pembelajaran, \r\n(2) penggalangan dana, \r\n(3) informasi pekerjaan, \r\n(4) membangun jejaring.', '', 'Nilai 4 - Hasil pelacakan untuk perbaikan  4 item.', '2017-01-10 00:18:32', '0000-00-00 00:00:00', 3),
(21, '3.3.1.c', 'Pendapat pengguna (employer) lulusan terhadap kualitas alumni.\r\nAda 7 jenis kompetensi.\r\nSkor akhir = [4 x (a) + 3 x (b) + 2 x (c) + (d)] / 7', '', 'Nilai 4 - Skor = Skor akhir', '2017-01-10 00:19:47', '2017-01-11 19:18:24', 3),
(22, '3.3.2', 'Profil masa tunggu kerja pertama\r\n\r\nRMT = rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama', '', 'Nilai 4 - Jika RMT ≤ 3 bulan, maka skor = 4.', '2017-01-09 18:40:08', '2017-01-10 00:21:02', 3),
(23, '3.3.3', ' Profil kesesuaian bidang kerja dengan bidang studi\r\n\r\nPBS = persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan', '', 'Nilai 4 - Jika PBS ≥ 80%, maka skor = 4', '2017-01-09 18:40:20', '2017-01-10 00:21:58', 3),
(24, '3.4.1', 'Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: \r\n(1) Sumbangan dana\r\n(2) Sumbangan fasilitas\r\n(3) Keterlibatan dalam kegiatan akademik\r\n(4) Pengembangan jejaring\r\n(5) Penyediaan fasilitas untuk kegiatan akademik', '', 'Nilai 4 - Semua bentuk partisipasi dilakukan oleh alumni.', '2017-01-09 18:40:44', '2017-01-10 00:23:02', 3),
(25, '3.4.2', 'Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: \r\n(1) Sumbangan dana\r\n(2) Sumbangan fasilitas\r\n(3) Keterlibatan dalam kegiatan non akademik\r\n(4) Pengembangan jejaring \r\n(5) Penyediaan fasilitas untuk kegiatan non akademik', '', 'Nilai 4 - Semua bentuk partisipasi dilakukan oleh alumni', '2017-01-10 00:23:42', '2017-01-11 19:18:42', 3),
(26, '4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan', '', 'Nilai 4 - Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten', '2017-01-09 18:41:10', '2017-01-10 00:24:58', 3),
(27, '4.2.1', 'Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan', '', 'Nilai 4 - Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten', '2017-01-09 18:41:31', '2017-01-10 00:25:35', 3),
(28, '4.2.2', 'Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang  pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat', '', 'Nilai 4 - Ada bukti tentang kinerja dosen di bidang  \r\n(1) pendidikan\r\n(2) penelitian \r\n(3) pelayanan/ pengabdian kepada masyarakat yang terdokumentasi dengan baik.  \r\n', '2017-01-10 00:26:20', '0000-00-00 00:00:00', 3),
(29, '4.3.1.a', 'Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS \r\nKD1 = Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai - Jika KD1 ≥ 90%, maka skor = 4\r\n', '2017-01-09 18:42:02', '2017-01-10 00:34:28', 3),
(30, '4.3.1.b', 'Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS\r\nKD2 = Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai 4 - Jika KD2 ≥ 40%, maka skor = 4', '2017-01-09 18:42:37', '2017-01-10 00:34:08', 3),
(31, '4.3.1.c', 'Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS\r\nKD3 = Persentase Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai 4 - Jika KD3 ≥ 40%, maka skor = 4.', '2017-01-10 00:35:20', '0000-00-00 00:00:00', 3),
(32, '4.3.1.d', 'Dosen yang memiliki Sertifikat Pendidik Profesional\r\nKD4 = Persentase dosen yang memiliki Sertifikat Pendidik Profesional', '', 'Nilai - Jika KD4 ≥ 40%, maka skor = 4', '2017-01-10 00:35:55', '0000-00-00 00:00:00', 3),
(33, '4.3.2', 'Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang PS (RMD)\r\n\r\nCatatan: \r\n- Jumlah mahasiswa reguler diambil dari tabel 3.1.1., yaitu jumlah dari kolom (7) dan kolom (8) pada baris TS.\r\n- Jumlah mahasiswa non-reguler diambil dari tabel 3.1.2, yaitu jumlah dari kolom (7) dan kolom (8) pada baris TS\r\n- Jumlah dosen tetap diambil dari tabel 4.3.1.', '', 'Nilai 4 - Jika 27 ≤ RMD ≤ 33, maka skor = 4.\r\nNilai 4 - Jika 17 ≤ RMD ≤ 23, maka skor = 4.', '2017-01-09 18:43:08', '2017-01-10 00:38:17', 3),
(34, '4.3.3', 'Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent)  \r\n\r\nRFTE = rata-rata FTE', '', 'Nilai 4 - Jika 11 ≤ RFTE ≤  13 sks, maka skor = 4.\r\n', '2017-01-09 18:43:49', '2017-01-10 00:39:01', 3),
(35, '4.3.4 & 4.3.5', 'Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya', '', 'Nilai 4 - Semua mata kuliah diajar oleh dosen yang sesuai keahliannya', '2017-01-09 18:44:18', '2017-01-10 00:40:10', 3),
(36, '4.3.4 & 4.3.5', 'Tingkat kehadiran dosen tetap dalam mengajar\r\nPKDT = Persentase kehadiran dosen tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)', '', 'Nilai 4 - Jika PKDT ≥ 95%, maka skor = 4', '2017-01-09 18:44:34', '2017-01-10 00:41:14', 3),
(37, '4.4.1', 'Persentase jumlah dosen tidak tetap, terhadap jumlah seluruh dosen (= PDTT)', '', 'Nilai 4 - Jika PDTT ≤ 10%, maka skor = 4', '2017-01-09 18:44:47', '2017-01-10 00:42:04', 3),
(38, '4.4.2.a', 'Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu', '', 'Nilai 4 - Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya', '2017-01-09 18:45:09', '2017-01-10 00:42:49', 3),
(39, '4.4.2.b', 'Pelaksanaan tugas/ tingkat kehadiran dosen tidak tetap dalam mengajar\r\n\r\nPKDTT = Persentase kehadiran dosen tidak tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)', '', 'Nilai 4 - Jika PKDTT ≥ 95%, maka skor = 4.\r\n', '2017-01-09 18:45:25', '2017-01-10 00:43:28', 3),
(40, '4.5.1', 'Kegiatan tenaga ahli/pakar (sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap).\r\nJTAP = Jumlah tenaga ahli/pakar.\r\nCatatan: Tenaga ahli dari luar perguruan tinggi dengan tujuan untuk pengayaan pengetahuan dan bukan untuk mengisi kekurangan tenaga pengajar, tidak bekerja secara rutin', '', 'Nilai 4 - Jika JTAP  12 orang, maka skor = 4.', '2017-01-09 18:45:42', '2017-01-10 00:44:42', 3),
(41, '4.5.2', 'Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS.\r\n\r\nPerhitungan skor sebagai berikut:\r\nApabila dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS > 90%\r\natau dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS > 40%, maka skor pada butir ini = 4.\r\n\r\nJika tidak, gunakan aturan di bawah:\r\nN2 = Jumlah dosen yang mengikuti tugas belajar jenjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir.\r\nN3 = Jumlah dosen yang mengikuti tugas belajar jenjang S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir\r\n\r\nSD  = (0.75 N2 + 1.25 N3)', '', 'Nilai 4 - Jika SD ≥ 4, maka skor = 4.', '2017-01-09 18:45:58', '2017-01-10 00:46:20', 3),
(42, '4.5.3', 'Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri.', '', 'Nilai 4 - Jika SP ≥ 3, maka skor = 4.', '2017-01-09 18:46:15', '2017-01-10 00:47:23', 3),
(43, '4.5.4', 'Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proporsi dana penelitian dari sumber institusi sendiri dan luar institusi. \r\nCatatan: selama tiga tahun terakhir', '', 'Nilai 4 - Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti)', '2017-01-09 18:46:29', '2017-01-10 00:47:58', 3),
(44, '4.5.5', 'Reputasi dan keluasan jejaring dosen dalam bidang akademik dan profesi', '', 'Nilai 4 - Lebih dari 30%  dosen tetap menjadi anggota masyarakat bidang ilmu tingkat internasional', '2017-01-09 18:46:50', '2017-01-10 00:48:51', 3),
(45, '4.6.1.a', 'Pustakawan dan kualifikasinya\r\n\r\nCatatan: nilai dihitung dengan rumus berikut:\r\n\r\nA = (4 X1 + 3 X2 + 2 X3)/4\r\n\r\nX1 = jumlah pustakawan yang berpendidikan S2 atau S3.\r\nX2 = jumlah pustakawan yang berpendidikan D4 atau S1.\r\nX3 = jumlah pustakawan yang berpendidikan D1, D2, atau D3.', '', 'Nilai 4 - Jika A ≥ 4, maka skor = 4', '2017-01-09 18:47:02', '2017-01-10 00:50:01', 3),
(46, '4.6.1.b', 'Laboran, teknisi, operator, programer\r\n\r\nCatatan:\r\nAgar dibandingkan dengan kegiatan yang seharusnya dilakukan dalam PS yang bersangkutan.', '', 'Nilai 4 - Jumlah cukup dan sangat baik kegiatannya', '2017-01-09 18:47:14', '2017-01-10 00:50:49', 3),
(47, '4.6.1.c', 'Tenaga administrasi\r\n\r\nCatatan: nilai dihitung dengan rumus berikut:\r\nD = (4 X1 + 3 X2 + 2 X3 + X4)/4\r\n\r\nMisalkan:\r\nX1 = jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas.\r\nX2 = jumlah tenaga administrasi yang berpendidikan D3.\r\nX3 = jumlah tenaga administrasi  yang berpendidikan D1 atau D2\r\nX4 = jumlah tenaga administrasi yang berpendidikan SMU/SMK', '', 'Nilai 4 - Jika  D ≥ 4, maka skor = 4.', '2017-01-09 18:47:30', '2017-01-10 00:51:36', 3),
(48, '4.6.2', 'Upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan. \r\n\r\nUpaya peningkatan kualifikasi dan kompetensi dikaitkan dengan:\r\n1.Pemberian kesempatan belajar/pelatihan\r\n2.Pemberian fasilitas, termasuk dana\r\n3.Jenjang karir ', '', 'Nilai 4 - Upaya pengembangan telah dilakukan dengan sangat baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan', '2017-01-09 18:47:49', '2017-01-10 00:52:17', 3),
(49, '5.1.1.a', 'Kompetisi lulusan\r\nKelengkapan dan perumusan kompetensi', '', 'NIlai 4 - Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas.', '2017-01-09 18:48:30', '2017-01-10 00:59:39', 3),
(50, '5.1.1.b', 'Orientasi dan kesesuaian dengan visi dan misi', '', 'Nilai 4 - Sesuai dengan visi-misi, sudah berorientasi  ke masa depan', '2017-01-09 18:48:47', '2017-01-10 01:00:16', 3),
(51, '5.1.2.a', 'Struktur Kurikulum\r\nKesesuaian matakuliah dan urutannya dengan standar kompetensi \r\n\r\nCatatan:\r\nUntuk menilai kesesuaian mata kuliah dan urutannya, bila perlu asesor memperhatikan silabus/materi  mata kuliah', '', 'Nilai 4 - Sesuai dengan standar kompetensi, sudah berorientasi  ke masa depan', '2017-01-09 18:49:01', '2017-01-10 01:01:36', 3),
(52, '5.1.2.b', 'Persentase mata kuliah  yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (prektikum/praktek, PR atau makalah) ≥ 20%  PTGS\r\n\r\nCara penghitungan:\r\nJumlah mata kuliah  yang diberi tanda √ pada kolom (7) dibagi dengan jumlah total mata kuliah wajib dan pilihan', '', 'Nilai 4 -Jika PTGS ≥ 50%, maka skor = 4', '2017-01-09 18:49:13', '2017-01-10 01:02:32', 3),
(53, '5.1.2.c', 'Mata kuliah dilengkapi dengan deskripsi mata kuliah, silabus dan SAP\r\nPDMK = Persentase mata kuliah yang memiliki deskripsi, silabus dan SAP.', '', 'Nilai - Jika PDMK ≥ 95%, maka skor = 4', '2017-01-09 18:49:29', '2017-01-10 01:03:21', 3),
(54, '5.1.3', 'Fleksibilitas mata kuliah pilihan\r\n\r\nBMKP = Bobot mata kuliah pilihan dalam sks\r\nRMKP = Rasio sks mata kuliah pilihan yang disediakan/dilaksanakan terhadap sks mata kuliah pilihan yang harus diambil \r\n\r\nCatatan:\r\nBagi PS yang memiliki jalur pilihan/peminatan/konsentrasi,  matakuliah yang khas jalur pilihan/peminatan/ konsentrasi dianggap sebagai mata kuliah pilihan.', '', 'Nilai 4 - Jika BMKP ≥ 9 sks dan yang disediakan/ dilaksanakan ≥ 2 kali sks mata kuliah pilihan yang harus diambil, maka skor = 4', '2017-01-09 18:50:28', '2017-01-10 01:04:40', 3),
(55, '5.1.4', 'Substansi praktikum dan pelaksanaan praktikum.\r\n\r\nCatatan:\r\nPeer group diharapkan menentukan modul-modul praktikum yang harus dilakukan, syarat minimal maupun yang lebih baik.', '', 'Pelaksanaan modul praktikum lebih dari cukup  (ditambah dengan demonstrasi di laboratorium ) di PT sendiri', '2017-01-09 18:51:11', '2017-01-10 01:05:25', 3),
(56, '5.2.a', 'Pelaksanaan peninjauan kurikulum selama 5 tahun terakhir', '', 'Nilai 4 - Pengembangan dilakukan secara mandiri dengan melibatkan pemangku kepentingan internal dan eksternal dan memperhatikan visi, misi, dan umpan balik program studi', '2017-01-09 18:51:28', '2017-01-10 01:06:09', 3),
(57, '5.2.b', 'Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan', '', 'Nilai 4 - Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya dan kebutuhan pemangku kepentingan', '2017-01-09 18:52:29', '2017-01-10 01:06:52', 3),
(58, '5.3.1.a', 'Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki setiap semester tentang:\r\n(a) kehadiran mahasiswa\r\n(b) kehadiran dosen\r\n(c) materi kuliah', '', 'Nilai 4 - Skor = NA.', '2017-01-09 18:52:46', '2017-01-10 01:08:53', 3),
(59, '5.3.1.b', 'Mekanisme penyusunan materi perkuliahan', '', 'Nilai 4 - Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain atau dari pengguna lulusan ', '2017-01-09 18:53:05', '2017-01-10 01:09:50', 3),
(60, '5.3.2', 'Mutu soal ujian', '', 'Nilai 4 - Mutu soal ujian untuk lima mata kuliah yang diberikan semuanya bermutu baik, dan sesuai dengan GBPP/SAP', '2017-01-09 18:53:30', '2017-01-10 01:10:29', 3),
(61, '5.4.1.a', 'Rata-rata banyaknya mahasiswa per dosen Pembimbing Akademik (PA) per semester (=RMPA)', '', 'Nilai 4 - Jika RMPA ≤ 20, maka skor = 4.', '2017-01-09 18:53:49', '2017-01-10 01:11:25', 3),
(62, '5.4.1.b', 'Pelaksanaan kegiatan pembimbingan akademik', '', 'Nilai 4 - Dilakukan oleh seluruh dosen PA dengan baik sesuai panduan tertulis', '2017-01-09 18:54:02', '2017-01-10 01:12:11', 3),
(63, '5.4.1.c', 'Jumlah rata-rata pertemuan pembimbingan per mahasiswa per semester (= PP)', '', 'Nilai 4 - Jika PP ≥ 3.0 maka skor = 4', '2017-01-09 18:54:19', '2017-01-10 01:12:52', 3),
(64, '5.4.2', 'Efektivitas kegiatan perwalian', '', 'Nilai 4 - Sistem bimbingan akademik sangat efektif', '2017-01-09 18:54:47', '2017-01-11 18:40:17', 3),
(65, '5.5.1.a', 'Ketersediaan panduan, sosialisasi,  dan penggunaan', '', 'Nilai 4 - Ada panduan tertulis yang disosialisasikan dan dilaksanakan dengan konsisten', '2017-01-09 18:55:39', '2017-01-11 18:41:21', 3),
(66, '5.5.1.b', 'Rata-rata mahasiswa per dosen pembimbing tugas akhir (=RMTA)', '', 'Nilai 4 - Jika 0 < RMTA ≤ 4, maka skor = 4.', '2017-01-09 18:55:51', '2017-01-11 18:41:59', 3),
(67, '5.5.1.c', 'Rata-rata jumlah pertemuan/pembimbingan selama penyelesaian TA (=RBTA)', '', 'Nilai 4 - Jika RBTA ≥ 8, maka skor = 4', '2017-01-09 18:56:07', '2017-01-11 18:43:09', 3),
(68, '5.5.1.d', 'Kualifikasi akademik dosen pembimbing tugas akhir', '', 'Nilai 4 - Seluruh dosen pembimbing berpendidikan minimal S2 dan sesuai dengan bidang keahliannya', '2017-01-09 18:56:46', '2017-01-11 18:44:26', 3),
(69, '5.5.2', 'Rata-rata waktu penyelesaian penulisan tugas akhir (=RPTA)', '', 'Nilai 4 - Struktur kurikulum tugas akhir dijadwalkan selesai dalam satu semester: Jika RPTA ≤ 6 bulan, maka skor = 4. Struktur kurikulum tugas akhir dijadwalkan selesai dalam dua semester: Jika RPTA ≤ 12 bulan, maka skor = 4.', '2017-01-09 18:56:58', '2017-01-11 18:46:11', 3),
(70, '5.6', 'Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir berkaitan dengan: \r\na. Materi\r\nb. Metode pembelajaran\r\nc. Penggunaan teknologi pembelajaran\r\nd. Cara-cara evaluasi', '', 'Nilai 4 - Upaya perbaikan dilakukan untuk  semua dari yang seharusnya diperbaiki/ ditingkatkan', '2017-01-09 18:57:38', '2017-01-11 18:47:16', 3),
(71, '5.7.1', 'Kebijakan tertulis tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, kemitraan dosen-mahasiswa)', '', 'Nilai 4 - Kebijakan lengkap mencakup informasi tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa, serta dilaksanakan secara konsisten', '2017-01-09 18:58:21', '2017-01-11 18:48:01', 3),
(72, '5.7.2', 'Ketersediaan dan kelengkapan jenis prasarana, sarana serta dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika', '', 'Nilai 4 - Tersedia, milik sendiri,  sangat lengkap dan dana yang sangat memadai', '2017-01-09 18:58:36', '2017-01-11 18:49:22', 3),
(73, '5.7.3', 'Interaksi akademik berupa program dan kegiatan akademik, selain perkuliahan dan tugas-tugas khusus, untuk menciptakan suasana akademik (seminar, simposium, lokakarya, bedah buku dll)', '', 'Nilai 4 - Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan', '2017-01-09 18:58:54', '2017-01-11 18:49:56', 3),
(74, '5.7.4', 'Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen', '', 'Nilai 4 - Upaya baik dan hasilnya suasana kondusif untuk meningkatkan suasana akademik yang baik', '2017-01-09 18:59:10', '2017-01-11 18:51:29', 3),
(75, '5.7.5', 'Pengembangan perilaku kecendekiawanan\r\n\r\nBentuk kegiatan antara lain dapat berupa:\r\n1. Kegiatan penanggulangan kemiskinan.\r\n2. Pelestarian lingkungan.\r\n3. Peningkatan kesejahteraan masyarakat.\r\n4. Kegiatan penanggulangan masalah  ekonomi, politik, sosial, budaya, dan lingkungan lainnya.', '', 'Nilai 4 - Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawanan', '2017-01-09 18:59:26', '2017-01-11 18:52:10', 3),
(76, '6.1', 'Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/ kerja dan perencanaan alokasi dan pengelolaan dana.', '', 'Nilai 4 - Program studi secara otonom melaksanakan perencanaan alokasi  dan pengelolaan dana', '2017-01-09 18:59:49', '2017-01-11 18:53:14', 3),
(77, '6.2.1', 'Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).\r\n\r\nJumlah dana operasional/mahasiswa/tahun (=DOM)', '', 'Nilai 4 - Jika DOM ≥ 18 juta, maka skor = 4', '2017-01-09 19:00:10', '2017-01-11 18:57:25', 3),
(78, '6.2.2', 'Dana penelitian dalam tiga tahun terakhir.\r\n\r\nRata-rata dana penelitian/dosen tetap/tahun (=RPD)', '', 'Nilai 4 - Jika RPD ≥ 3 juta, maka skor = 4.', '2017-01-09 19:00:26', '2017-01-11 18:58:01', 3),
(79, '6.2.3', 'Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir \r\n(= RPKM).', '', 'Nilai 4 - Jika RPKM ≥ 1.5 juta, maka skor = 4.', '2017-01-09 19:00:42', '2017-05-18 21:31:03', 3),
(80, '6.3.1', 'Luas ruang kerja dosen.\r\n\r\nCatatan: Data diambil dari kolom 3, tabel 6.3.1.\r\nJika luas ruang rata-rata untuk dosen tetap (= jumlah luas ruang dosen tetap dibagi dengan jumlah dosen tetap) kurang dari 4 m2, maka skor pada subbutir ini = nol.  ', '', 'Nilai 4 - Nilai pada butir ini tidak hanya didasarkan pada perhitungan skor luas ruang dosen tetap saja, tetapi juga didasarkan pada kenyamanan,  sehingga dosen dapat melaksanakan kegiatan Tridharma PT dengan baik.  Untuk itu asesor diberikan kemungkinan untuk memberikan tambahan/pengurangan nilai maksimum sebesar 1.5.', '2017-01-09 19:01:03', '2017-01-11 19:00:02', 3),
(81, '6.3.2', 'Prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses pembelajaran.', '', 'Nilai 4 - Prasarana lengkap dan mutunya sangat baik untuk proses pembelajaran. ', '2017-01-09 19:01:16', '2017-01-11 19:00:50', 3),
(82, '6.3.3', 'Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik)', '', 'Nilai 4 - Prasarana penunjang lengkap dan mutunya sangat baik untuk memenuhi kebutuhan mahasiswa', '2017-01-09 19:01:29', '2017-01-11 19:01:35', 3),
(83, '6.4.1.a', ' Bahan pustaka berupa buku teks', '', 'Nilai 4 - Skor = (Jumlah judul) / 100.', '2017-01-09 19:01:45', '2017-01-11 19:03:18', 3),
(84, '6.4.1.b', 'Bahan pustaka berupa disertasi/tesis/ skripsi/ tugas akhir', '', 'Nilai 4 - Skor = (Jumlah judul) / 50', '2017-01-09 19:02:01', '2017-01-11 19:04:10', 3),
(85, '6.4.1.c', 'Bahan pustaka berupa jurnal ilmiah terakreditasi Dikti', '', 'Nilai 4 -  ≥ 3 judul jurnal, nomornya lengkap', '2017-01-09 19:02:13', '2017-01-11 19:04:49', 3),
(86, '6.4.1.d', 'Bahan pustaka  berupa jurnal ilmiah internasional ', '', 'Nilai 4 -  ≥ 2 judul jurnal, nomornya lengkap', '2017-01-09 19:02:43', '2017-01-11 19:05:37', 3),
(87, '6.4.1.e', 'Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir', '', 'Nilai 4 - Jika jumlah prosiding seminar ≥ 9, maka skor = 4', '2017-01-09 19:03:05', '2017-01-11 19:06:36', 3),
(88, '6.4.2', 'Akses ke perpustakaan di luar PT atau sumber pustaka lainnya', '', 'Nilai 4 - Ada beberapa perpustakaan di luar PT yang dapat diakses dan sangat baik fasilitasnya \r\nAtau jika nilai rata-rata dari butir 6.4.1  3.\r\n', '2017-01-09 19:03:24', '2017-01-11 19:07:48', 3),
(89, '6.4.3', 'Ketersediaan, akses dan pendayagunaan sarana utama di lab (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya)', '', 'Nilai 4 - Sangat memadai, terawat dengan sangat baik, dan PS memiliki akses yang sangat baik (memiliki fleksibilitas dalam menggunakannya di luar kegiatan praktikum terjadwal).', '2017-01-09 19:03:48', '2017-01-11 19:08:42', 3),
(90, '6.5.1', 'Sistem informasi dan fasilitas yang digunakan PS dalam proses pembelajaran (hardware, software, e-learning, perpustakaan, dll.)', '', 'Nilai 4 - Dengan komputer yang terhubung dengan jaringan luas/internet, software yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas e-learning yang digunakan secara baik, dan akses on-line ke koleksi perpustakaan.', '2017-01-09 19:04:01', '2017-01-11 19:09:15', 3),
(91, '6.5.2', 'Aksesibilitas data dalam sistem informasi\r\n\r\nNilai butir ini didasarkan pada hasil penilaian 11 jenis data (lihat kolom 1 pada tabel butir 6.5.2) dengan cara berikut:\r\n\r\nSkor akhir = \r\n(jumlah total skor pada ke-11 jenis data) : 11\r\n\r\nSedang  untuk setiap jenis data, penilaian didasarkan atas aturan berikut:\r\n1: Data ditangani secara manual \r\n2: Data ditangani dengan komputer tanpa jaringan\r\n3: Data ditangani dengan komputer, serta dapat diakses melalui  jaringan lokal (LAN)\r\n4: Data ditangani dengan komputer, serta dapat diakses melalui jaringan luas (WAN)', '', 'Nilai 4 - Skor = Skor akhir', '2017-01-09 19:04:36', '2017-01-11 19:10:13', 3),
(92, '7.1.1', 'Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun', '', 'Nilai 4 - Jika NK ≥ 2, maka skor = 4.', '2017-01-09 19:04:57', '2017-01-11 19:11:16', 3),
(93, '7.1.2', 'Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen\r\n\r\nCara penilaian dilakukan dengan menghitung sebagai berikut:\r\nPD =  Persentase mahasiswa yang melakukan tugas akhir dalam penelitian dosen', '', 'Nilai 4 - Jika PD ≥ 25%, maka skor = 4.', '2017-01-09 19:05:12', '2017-01-11 19:12:02', 3),
(94, '7.1.3', 'Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun', '', 'Nilai 4 - Jika NK ≥ 6, maka skor = 4.', '2017-01-09 19:05:35', '2017-01-11 19:12:57', 3),
(95, '7.1.4', 'Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir', '', 'Nilai 4 - Dua atau lebih karya yang memperoleh HaKI', '2017-01-09 19:06:03', '2017-01-11 19:13:31', 3),
(96, '7.2.1', 'Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.', '', 'Nilai 4 - Jika NK ≥ 1, maka skor = 4.', '2017-01-09 19:06:31', '2017-01-11 19:14:16', 3),
(97, '7.2.2', ' Keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat', '', 'Nilai 4 - Mahasiswa terlibat penuh dan diberi tanggung jawab.', '2017-01-09 19:06:44', '2017-01-11 19:15:09', 3),
(98, '7.3.1', 'Kegiatan kerjasama dengan instansi di dalam negeri dalam tiga tahun terakhir\r\n\r\nCatatan;\r\nTingkat kecukupan bergantung pada jumlah dosen tetap PS.', '', 'Nilai 4 - Ada kerjasama dengan institusi di dalam negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.', '2017-01-09 19:06:57', '2017-01-11 19:16:15', 3),
(99, '7.3.2', 'Kegiatan kerjasama dengan instansi di luar negeri dalam tiga tahun terakhir.\r\n\r\nCatatan;\r\nTingkat kecukupan bergantung pada jumlah dosen tetap PS', '', 'Nilai 4 - Ada kerjasama dengan institusi di luar negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.', '2017-01-09 19:07:42', '2017-01-11 19:17:15', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `document_version`
--

CREATE TABLE `document_version` (
  `id` int(10) NOT NULL,
  `id_dokumen` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pemilik` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `document_version`
--

INSERT INTO `document_version` (`id`, `id_dokumen`, `nama`, `version_no`, `filename`, `pemilik`, `created_at`, `created_by`) VALUES
(2, 1, 'zcxc', 1, 'Pertemuan01.pdf', 'cxzczx', '2017-11-02 17:25:33', 'Wahyu Saepuloh'),
(3, 1, 'cfdmcn dxm', 1, 'Pertemuan01.pdf', 'mn bvmsdnbv', '2017-11-02 17:33:23', 'Wahyu Saepuloh'),
(4, 2, 'sdmfbdsk', 1, 'Pertemuan01.pdf', 'mnbmdsbf', '2017-11-02 17:45:57', 'Wahyu Saepuloh'),
(5, 4, 'cxzc', 1, 'Pertemuan011.pdf', 'ksajfhdsk', '2017-11-02 17:57:26', 'Wahyu Saepuloh'),
(6, 11, '', 1, 'Kuis_6.pdf', '', '2017-11-05 19:31:50', 'Wahyu Saepuloh'),
(7, 1, 'czxc', 1, 'Kuis_61.pdf', 'zxcxz', '2017-11-05 19:33:10', 'Wahyu Saepuloh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_butir` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ket` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pemilik` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_butir`, `nama`, `filename`, `ket`, `status`, `pemilik`, `version_no`, `created_at`, `updated_at`) VALUES
(1, 2, 'sdmfbdsk', 'Pertemuan01.pdf', 'sdmfjbsdf', '', 'mnbmdsbf', 1, '2017-11-02 17:45:57', '2017-11-02 17:45:57'),
(2, 4, 'cxzc', 'Pertemuan011.pdf', 'sdfjhsdkfj', '', 'ksajfhdsk', 1, '2017-11-02 17:57:26', '2017-11-02 17:57:26'),
(3, 11, '', 'Kuis_6.pdf', '', '', '', 1, '2017-11-05 19:31:50', '2017-11-05 19:31:50'),
(4, 1, 'czxc', 'Kuis_61.pdf', 'vdx', '', 'zxcxz', 1, '2017-11-05 19:33:09', '2017-11-05 19:33:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `f1`
--

CREATE TABLE `f1` (
  `id` int(10) NOT NULL,
  `butir` varchar(20) NOT NULL,
  `aspek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `f1`
--

INSERT INTO `f1` (`id`, `butir`, `aspek`) VALUES
(1, '1.1.a', 'Kejelasan, kerealistikan, dan keterkaitan antara visi, misi, tujuan, sasaran program studi, dan pemangku kepentingan yang terlibat.'),
(2, '1.1.b', 'Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.'),
(3, '1.2', 'Efektivitas sosialisasi visi, misi PS: tingkat pemahaman sivitas akademika'),
(4, '2.1', 'Keberadaan tata pamong yang menjamin penyelenggaraan program studi yang memenuhi aspek-aspek: (1) kredibel, (2) transparan, (3) akuntabel, (4) bertanggung jawab, dan (5) adil.'),
(5, '2.2', 'Karakteristik kepemimpinan yang efektif'),
(6, '2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.'),
(7, '2.4', 'Pelaksanaan penjaminan mutu di PS.'),
(8, '2.5', 'Penjaringan umpan balik dan tindak lanjutnya. Sumber umpan balik antara lain dari: (1) dosen, (2) mahasiswa, (3) alumni, (4) pengguna lulusan.'),
(9, '2.6', 'Upaya untuk menjamin keberlanjutan PS, mencakup: (a) Upaya untuk peningkatan animo calon mahasiswa, (b) Upaya peningkatan mutu manajemen, (c) Upaya untuk peningkatan mutu lulusan, (d) Upaya untuk pelaksanaan dan hasil kerjasama kemitraan, (e) Upaya dan prestasi dalam memperoleh dana hibah kompetitif.'),
(10, '3.1.1.a', 'Rasio calon mahasiswa yang ikut seleksi terhadap daya tampung'),
(11, '3.1.1.b', 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi'),
(12, '3.1.1.c', 'Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer'),
(13, '3.1.1.d', 'Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir'),
(14, '3.1.2', 'Penerimaan mahasiswa non reguler.\r\nCatatan: Bila tidak ada mhs non reguler di isi nilai 4.0'),
(15, '3.1.3', 'Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat.'),
(16, '3.1.4.a', 'Persentase kelulusan tepat waktu (KTW)'),
(17, '3.1.4.b', 'Persentase mahasiswa yang DO atau mengundurkan diri (MDO).  Catatan: Gunakan data mahasiswa yang diterima tahun lebih baru, jika PS belum memiliki data pada TS-6.'),
(18, '3.2.1', 'Layanan kepada mahasiswa.  Jenis pelayanan kepada mahasiswa antara lain: (1) Bimbingan dan konseling, (2) Minat dan bakat (ekstra kurikuler), (3) Pembinaan soft skill, (4) Layanan beasiswa, dan (5) Layanan kesehatan.'),
(19, '3.2.2', 'Kualitas layanan kepada mahasiswa. Untuk setiap jenis pelayanan pada butir 3.2.1, pemberian skor sebagai berikut: 4 : sangat baik, 3 : baik, 2: cukup, 1: kurang, 0: sangat kurang.'),
(20, '3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan.'),
(21, '3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: \r\n(1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, dan (4) membangun jejaring.'),
(22, '3.3.1.c', 'Pendapat pengguna (employer) lulusan terhadap kualitas alumni. Jika tidak ada tracer study, maka setiap sel warna kuning diisi angka 0.'),
(23, '3.3.2', 'RMT (Rata-rata masa tunggu lulusan untuk bekerja).  Jika PS kedinasan atau umum yang lulusannya semua sudah bekerja saat kuliah, diisi angka nol.'),
(24, '3.3.3', 'Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan.  Kisaran nilai 0-100%.'),
(25, '3.4.1', 'Bentuk partisipasi lulusan dan alumni untuk kegiatan akademik: \r\n1. Sumbangan dana, 2. Sumbangan fasilitas, 3. Keterlibatan dalam kegiatan akademik, 4. Pengembangan jejaring, 5. Penyediaan fasilitas untuk kegiatan akademik.'),
(26, '3.4.2', 'Bentuk partisipasi lulusan dan alumni untuk kegiatan non akademik: 1. Sumbangan dana, 2. Sumbangan fasilitas, 3. Keterlibatan dalam kegiatan non akademik, 4. Pengembangan jejaring, 5. Penyediaan fasilitas untuk kegiatan non akademik.'),
(27, '4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan'),
(28, '4.2.1', 'Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan.'),
(29, '4.2.2', 'Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang  tridarma.'),
(30, '4.3.1.a', 'Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS.'),
(31, '4.3.1.b', 'Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS'),
(32, '4.3.1.c', 'Dosen tetap yang memiliki jabatan Lektor Kepala dan Guru Besar yang bidang keahliannya sesuai dengan kompetensi PS'),
(33, '4.3.1.d', 'Dosen tetap yang bidang keahliannya sesuai dengan kompetensi PS, yang memiliki Sertifikat Pendidik Profesional'),
(34, '4.3.2', 'Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang Program Studi'),
(35, '4.3.3', 'Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent)'),
(36, '4.3.4 & 4.3.5', 'Kesesuaian keahlian (pend. terakhir) dosen dengan MK yang diajarkannya.'),
(37, '4.3.4 & 4.3.5', 'Tingkat kehadiran dosen tetap dalam mengajar'),
(38, '4.4.1', 'Persentase jumlah dosen tidak tetap, terhadap jumlah seluruh dosen (baik yang bidangnya sesuai dan yang bidangnya tidak sesuai PS)'),
(39, '4.4.2.a', 'Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu. Skor butir ini = 4 bila tidak punya dosen tidak tetap.'),
(40, '4.4.2.b', 'Persentase kehadiran dosen tidak tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan). Skor butir ini = 4 bila tidak punya dosen tidak tetap.'),
(41, '4.5.1', 'Jumlah Tenaga Ahli/Pakar (sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap).'),
(42, '4.5.2', 'Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS.'),
(43, '4.5.3', 'Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri.'),
(44, '4.5.4', 'Prestasi dalam mendapatkan penghargaan hibah dalam tiga tahun terakhir.'),
(45, '4.5.5', 'Reputasi dan keluasan jejaring dosen dalam bidang akademik dan profesi.'),
(46, '4.6.1.a', 'Pustakawan dan kualifikasinya'),
(47, '4.6.1.b', 'Kualitas laboran, teknisi, operator, programer.'),
(48, '4.6.1.c', 'Tenaga administrasi, jumlah dan kualifikasinya.'),
(49, '4.6.2', 'Upaya yang telah dilakukan PS untuk meningkatkan kualifikasi dan kompetensi tenaga kependidikan'),
(50, '5.1.1.a', 'Kelengkapan dan perumusan kompetensi dalam kurikulum.'),
(51, '5.1.1.b', 'Orientasi dan kesesuaian kurikulum dengan visi dan misi PS.'),
(52, '5.1.2.a', 'Kesesuaian matakuliah dan urutannya dengan standar kompetensi PS.'),
(53, '5.1.2.b', 'Persentase mata kuliah  yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) ? 20%'),
(54, '5.1.2.c', 'Mata kuliah dilengkapi dengan deskripsi mata kuliah, silabus dan SAP.'),
(55, '5.1.3', 'Fleksibilitas mata kuliah pilihan'),
(56, '5.1.4', 'Substansi praktikum dan pelaksanaan praktikum.'),
(57, '5.2.a', 'Pelaksanaan peninjauan kurikulum dalam kurun waktu 5 tahun terakhir.'),
(58, '5.2.b', 'Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan.'),
(59, '5.3.1.a', 'Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki setiap semester tentang:(a) kehadiran mahasiswa, (b) kehadiran dosen, (c) materi kuliah.'),
(60, '5.3.1.b', 'Mekanisme penyusunan materi perkuliahan.'),
(61, '5.3.2', 'Mutu soal ujian.'),
(62, '5.4.1.a', 'Rata-rata banyaknya mahasiswa per dosen Pembimbing Akademik (PA) per semester.'),
(63, '5.4.1.b', 'Pelaksanaan kegiatan pembimbingan akademik.'),
(64, '5.4.1.c', 'Jumlah rata-rata pertemuan pembimbingan per mahasiswa per semester'),
(65, '5.4.2', 'Efektivitas kegiatan perwalian/pembimbingan akademik.'),
(66, '5.5.1.a', 'Ketersediaan panduan tugas akhir, sosialisasi,  dan penggunaan.'),
(67, '5.5.1.b', 'Rata-rata mahasiswa per dosen pembimbing tugas akhir'),
(68, '5.5.1.c', 'Rata-rata jumlah pertemuan/pembimbingan TA'),
(69, '5.5.1.d', 'Kualifikasi akademik dosen pembimbing tugas akhir.'),
(70, '5.5.2', 'Rata-rata waktu penyelesaian penulisan tugas akhir'),
(71, '5.6', 'Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir berkaitan dengan:  (a) Materi, (b) Metode pembelajaran, (c) Penggunaan teknologi pembelajaran, dan (d) Cara-cara evaluasi.'),
(72, '5.7.1', 'Kebijakan tertulis tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, kemitraan dosen-mahasiswa).'),
(73, '5.7.2', 'Ketersediaan dan kelengkapan jenis prasarana, sarana serta dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.'),
(74, '5.7.3', 'Interaksi akademik berupa program dan kegiatan akademik, selain perkuliahan dan tugas-tugas khusus, untuk menciptakan suasana akademik (seminar, simposium, lokakarya, bedah buku dll).'),
(75, '5.7.4', 'Interaksi akademik antara dosen-mahasiswa.'),
(76, '5.7.5', 'Pengembangan perilaku kecendekiawanan.Bentuk kegiatan antara lain dapat berupa: (a) Kegiatan penanggulangan kemiskinan, (b) Pelestarian lingkungan, (c) Peningkatan kesejahteraan masyarakat, (d) Kegiatan penanggulangan masalah  ekonomi, politik, sosial, budaya, dan lingkungan lainnya.'),
(77, '6.1', 'Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/ kerja dan perencanaan alokasi dan pengelolaan dana.'),
(78, '6.2.1', 'Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).'),
(79, '6.2.2', 'Dana penelitian dalam tiga tahun terakhir.'),
(80, '6.2.3', 'Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir.'),
(81, '6.3.1', 'Luas ruang kerja dosen.'),
(82, '6.3.2', 'Prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses pembelajaran.'),
(83, '6.3.3', 'Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik)'),
(84, '6.4.1.a', 'Bahan pustaka berupa buku teks'),
(85, '6.4.1.b', 'Bahan pustaka: disertasi/tesis/skripsi/TA'),
(86, '6.4.1.c', 'Bahan pustaka berupa jurnal ilmiah terakreditasi DIKTI.'),
(87, '6.4.1.d', 'Bahan pustaka  berupa jurnal ilmiah internasional.'),
(88, '6.4.1.e', 'Jumlah prosiding seminar'),
(89, '6.4.2', 'Akses ke perpustakaan di luar PT atau sumber pustaka lainnya.'),
(90, '6.4.3', 'Ketersediaan, akses dan pendayagunaan sarana utama di laboratorium.'),
(91, '6.5.1', 'Sistem informasi dan fasilitas yang digunakan PS dalam PBM.'),
(92, '6.5.2', 'Aksesibilitas data dalam sistem informasi.'),
(93, '7.1.1', 'Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun.'),
(94, '7.1.2', 'Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen'),
(95, '7.1.3', 'Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun.'),
(96, '7.1.4', 'Karya PS/institusi memperoleh perlindungan HaKI dalam 3 tahun terakhir'),
(97, '7.2.1', 'Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.'),
(98, '7.2.2', 'Keterlibatan mahasiswa dalam kegiatan PkM.'),
(99, '7.3.1', 'Kegiatan kerjasama dengan instansi di DN dalam tiga tahun terakhir.'),
(100, '7.3.2', 'Kegiatan kerjasama dengan instansi di LN dalam tiga tahun terakhir.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitungf1`
--

CREATE TABLE `hitungf1` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buku` int(10) UNSIGNED NOT NULL,
  `id_f1` int(10) NOT NULL,
  `butir` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama_asesor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai1` decimal(11,2) NOT NULL,
  `nilai2` decimal(11,2) NOT NULL,
  `nilai3` decimal(11,2) NOT NULL,
  `nilai4` decimal(11,2) NOT NULL,
  `nilai5` decimal(11,2) NOT NULL,
  `nilai6` decimal(11,2) NOT NULL,
  `nilai7` decimal(11,2) NOT NULL,
  `nilai8` decimal(11,2) NOT NULL,
  `nilai9` decimal(11,2) NOT NULL,
  `nilai10` decimal(11,2) NOT NULL,
  `skorakhir` decimal(11,2) NOT NULL,
  `masukan` text COLLATE utf8_unicode_ci NOT NULL,
  `komentar` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `review_ke` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isian_16kolom`
--

CREATE TABLE `isian_16kolom` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_butir` int(10) UNSIGNED DEFAULT NULL,
  `kolom1` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom2` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom3` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom4` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom5` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom6` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom7` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom8` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom9` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom10` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom11` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom12` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom13` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom14` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom15` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom16` text COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `isian_16kolom`
--

INSERT INTO `isian_16kolom` (`id`, `id_butir`, `kolom1`, `kolom2`, `kolom3`, `kolom4`, `kolom5`, `kolom6`, `kolom7`, `kolom8`, `kolom9`, `kolom10`, `kolom11`, `kolom12`, `kolom13`, `kolom14`, `kolom15`, `kolom16`, `version_no`, `created_at`, `updated_at`) VALUES
(2, 2, '<p>ini sasaran dan pencapaiannya deh</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 17:47:05', '2017-11-02 17:48:51'),
(3, 3, '<p>sosialisasinya</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 17:53:31', '2017-11-02 17:53:31'),
(4, 4, '<p>standar 2 nya seperti ini untuk sistem atata pa,omnh</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:02:28', '2017-11-02 18:02:28'),
(5, 5, '<p>sfsdfsdfsdfsdfsdfsdfsdfsdfdsfsdf</p>\r\n<p><img src="/Screenshot-2017-10-10_Dashboard(3).png" width="503" height="367" /></p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 18:06:39', '2017-11-02 18:08:18'),
(6, 6, '<p>sdfsdkfjndsfnlsdkfnslk sldfnsdlf lsdf dslk</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:10:01', '2017-11-02 18:10:01'),
(7, 7, '<p>,cdnxzc,d sldkfnsldfk sldkfnlsd lsdk flsdkf&nbsp; sldfk&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:14:16', '2017-11-02 18:14:16'),
(8, 8, 'Dosen', '<p>dsfsdmfbdk</p>', '<p>ksjdbfksd</p>', 'Mahasiswa', '<p>kjbdfks</p>', '<p>ksjdbgskj</p>', 'Alumni', '<p>ksjbvs,</p>', '<p>,msbnvgsdjk</p>', 'Pengguna Lulusan', '<p>kjsdbgf</p>', '<p>sjfbgskfdj</p>', '', '', '', '', 1, '2017-11-02 18:25:56', '2017-11-02 18:25:56'),
(9, 9, '<p>zxckxzjbckz,xjbc zkcjbKZJXBCVZKXJVB</p>', '<p>kjvbsdkjf</p>', '<p>kjsbvksdjfb</p>', '<p>kjbvdjkfb</p>', '<p>kjbvdfkjb</p>', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:29:27', '2017-11-02 18:29:27'),
(11, 14, '<table style="margin-left: auto; margin-right: auto; height: 355px; border-color: #b3b3b3;" border="1" width="972" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">\r\n<p><strong>Tahun Akademik</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">\r\n<p><strong>Daya Tampung</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Calon Mahasiswa&nbsp; </strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Mahasiswa Baru </strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Total Mahasiswa</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Ikut Seleksi</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Lulus Seleksi</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p><strong>(1)</strong></p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p><strong>(2)</strong></p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p><strong>(3)</strong></p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p><strong>(4)</strong></p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p><strong>(5)</strong></p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p><strong>(6)</strong></p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p><strong>(7)</strong></p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p><strong>(8)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-4</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">&nbsp;</td>\r\n<td style="width: 128.4px; text-align: center;">&nbsp;</td>\r\n<td style="width: 150px; text-align: center;">&nbsp;</td>\r\n<td style="width: 107.6px; text-align: center;">&nbsp;</td>\r\n<td style="width: 125.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 109.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 130.8px; text-align: center;">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">&nbsp;</td>\r\n<td style="width: 128.4px; text-align: center;">&nbsp;</td>\r\n<td style="width: 150px; text-align: center;">&nbsp;</td>\r\n<td style="width: 107.6px; text-align: center;">&nbsp;</td>\r\n<td style="width: 125.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 109.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 130.8px; text-align: center;">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-2</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-1</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 22:11:44', '2017-11-05 20:33:43'),
(14, 1, '<p>fdsf</p>', '<p>kjbh</p>', '<p>kj</p>', '<p>kjh</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 23:35:13', '2017-11-02 23:35:13'),
(15, 10, '100', '100', '100', '1001', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '<p>&nbsp;</p>\r\n<!-- <table style="height: 42px;" border="1" width="935" cellspacing="0" cellpadding="0">\r\n                                    <tbody>\r\n                                    <tr style="height: 26px;">\r\n                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>\r\n                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>\r\n                                    </tr>\r\n                                    <tr style="height: 26px;">\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">< 2,75</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">> 3,50</th>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(1)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(9)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(10)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(11)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(12)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(13)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(14)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(15)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(16)</strong></td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-4</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-3</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-2</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-1</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">Jumlah</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    </tr>\r\n                                    </tbody>\r\n                                    </table> -->\r\n<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 01:42:11', '2017-11-08 01:42:11'),
(16, 10, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '1', '100', '100', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 01:42:50', '2017-11-08 01:42:50'),
(17, 10, '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:14:28', '2017-11-08 03:14:28'),
(18, 10, '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:23:54', '2017-11-08 03:23:54'),
(19, 10, '45', '54', '54', '54', '45', '45', '54', '65', '65', '65', '654', '654', '654', '64', '654', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:24:44', '2017-11-08 03:24:44'),
(20, 10, '89', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:31:34', '2017-11-08 03:31:34'),
(21, 10, '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-12 21:34:40', '2017-11-12 21:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isian_16kolom_version`
--

CREATE TABLE `isian_16kolom_version` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kolom` int(10) UNSIGNED DEFAULT NULL,
  `kolom1` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom2` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom3` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom4` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom5` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom6` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom7` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom8` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom9` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom10` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom11` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom12` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom13` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom14` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom15` text COLLATE utf8_unicode_ci NOT NULL,
  `kolom16` text COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `isian_16kolom_version`
--

INSERT INTO `isian_16kolom_version` (`id`, `id_kolom`, `kolom1`, `kolom2`, `kolom3`, `kolom4`, `kolom5`, `kolom6`, `kolom7`, `kolom8`, `kolom9`, `kolom10`, `kolom11`, `kolom12`, `kolom13`, `kolom14`, `kolom15`, `kolom16`, `version_no`, `created_at`, `updated_at`) VALUES
(59, 15, '<p>sdfbk</p>', '<p>ksdfbksdbf</p>', '<p>jbskjfbd</p>', '<p>zlkvnvljdsb</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-03 23:18:42', '2017-07-03 23:18:42'),
(60, 15, '<p>fbkdb</p>', '<p>kjbfgkjdfb</p>', '<p>jbfdkjbd</p>', '<p>ljbfdjbd</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-03 23:18:57', '2017-07-03 23:18:57'),
(61, 15, '<p>cerdas cermat</p>', '<p>sekarang</p>', '<p>nasional</p>', '<p>juara</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-03 23:20:06', '2017-07-03 23:20:06'),
(62, 15, '<p>balap karung</p>', '<p>kemarin</p>', '<p>lokal</p>', '<p>juara 1</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-03 23:34:53', '2017-07-03 23:34:53'),
(63, 15, '<p>smdnf sdmfn&nbsp;</p>', '<p>s &nbsp;dfmn df dfkjgbdfkj</p>', '<p>jfbgkdjfbg djfgbdkf fjgbdfj</p>', '<p>ljbgldfjg ldfjg dflj ljf gdlfj gldfgbldjf&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 04:25:48', '2017-07-04 04:25:48'),
(64, 15, 'effre', 'dfgdfgdfg', 'internasional', 'dfgfdgdfgdf', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 20:45:41', '2017-07-04 20:45:41'),
(65, 15, 'zzzzzzzzzzz', 'sssssssssssssssssss', 'international', 'ttttttttttt', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 20:50:18', '2017-07-04 20:50:18'),
(66, 15, 'daadddddddddddd', 'dsddddddddddddddddd', 'internasional', 'vvvvvvvvvvvv', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 20:52:33', '2017-07-04 20:52:33'),
(67, 15, 'dddddddddddd', 'fffffffffffffffff', 'nasional', 'cccccccccccccc', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 20:52:46', '2017-07-04 20:52:46'),
(68, 15, 'dddddddddddddd', 'ccccccccccccc', 'lokal', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-07-04 20:52:58', '2017-07-04 20:52:58'),
(70, 2, '<p>mdsfbdsfhbksd</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 17:47:05', '2017-11-02 17:47:05'),
(71, 2, '<p>ini sasaran dan pencapaiannya deh</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 17:47:05', '2017-11-02 17:48:51'),
(72, 3, '<p>sosialisasinya</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 17:53:31', '2017-11-02 17:53:31'),
(73, 4, '<p>standar 2 nya seperti ini untuk sistem atata pa,omnh</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:02:28', '2017-11-02 18:02:28'),
(74, 5, '<p>sfsdfsdfsdfsdfsdfsdfsdfsdfdsfsdf</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:06:39', '2017-11-02 18:06:39'),
(75, 5, '<p>sfsdfsdfsdfsdfsdfsdfsdfsdfdsfsdf</p>\r\n<p><img src="/Screenshot-2017-10-10_Dashboard(3).png" width="503" height="367" /></p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 18:06:39', '2017-11-02 18:08:18'),
(76, 6, '<p>sdfsdkfjndsfnlsdkfnslk sldfnsdlf lsdf dslk</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:10:01', '2017-11-02 18:10:01'),
(77, 7, '<p>,cdnxzc,d sldkfnsldfk sldkfnlsd lsdk flsdkf&nbsp; sldfk&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:14:16', '2017-11-02 18:14:16'),
(78, 8, 'Dosen', '<p>dsfsdmfbdk</p>', '<p>ksjdbfksd</p>', 'Mahasiswa', '<p>kjbdfks</p>', '<p>ksjdbgskj</p>', 'Alumni', '<p>ksjbvs,</p>', '<p>,msbnvgsdjk</p>', 'Pengguna Lulusan', '<p>kjsdbgf</p>', '<p>sjfbgskfdj</p>', '', '', '', '', 1, '2017-11-02 18:25:56', '2017-11-02 18:25:56'),
(79, 9, '<p>zxckxzjbckz,xjbc zkcjbKZJXBCVZKXJVB</p>', '<p>kjvbsdkjf</p>', '<p>kjsbvksdjfb</p>', '<p>kjbvdjkfb</p>', '<p>kjbvdfkjb</p>', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 18:29:28', '2017-11-02 18:29:28'),
(82, 14, '<table style="margin-left: auto; margin-right: auto; height: 335px; border-color: #b3b3b3;" border="1" width="620" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td style="width: 54px; text-align: center;" rowspan="2">\r\n<p><strong>Tahun Akade-mik</strong></p>\r\n</td>\r\n<td style="width: 75.6px; text-align: center;" rowspan="2">\r\n<p><strong>Daya Tampung</strong></p>\r\n</td>\r\n<td style="width: 179.6px; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Calon Mahasiswa&nbsp; </strong></p>\r\n</td>\r\n<td style="width: 149.2px; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Mahasiswa Baru </strong></p>\r\n</td>\r\n<td style="width: 150px; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Total Mahasiswa</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 82px; text-align: center;">\r\n<p><strong>Ikut Seleksi</strong></p>\r\n</td>\r\n<td style="width: 95.6px; text-align: center;">\r\n<p><strong>Lulus Seleksi</strong></p>\r\n</td>\r\n<td style="width: 68.4px; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 78.8px; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n<td style="width: 68.4px; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 79.6px; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p><strong>(1)</strong></p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p><strong>(2)</strong></p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p><strong>(3)</strong></p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p><strong>(4)</strong></p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p><strong>(5)</strong></p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p><strong>(6)</strong></p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p><strong>(7)</strong></p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p><strong>(8)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p>TS-4</p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p>&nbsp;65</p>\r\n<p>4</p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p>54</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p>54</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>54</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p>654</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>65465</p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p>4</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p>TS-2</p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p>TS-1</p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 54px;">\r\n<p>TS</p>\r\n</td>\r\n<td style="width: 75.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 82px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 95.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 78.8px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 68.4px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 79.6px;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 22:11:44', '2017-11-02 22:11:44'),
(83, 21, '<p>ASDSDSKJN DFKSDJBFKSD KKJSB DFKkjsd bKJ SS sdkj bssj df</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 23:26:48', '2017-11-02 23:26:48'),
(84, 19, '<p>dgdfg dghdf&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 23:27:43', '2017-11-02 23:27:43'),
(85, 1, '<p>fdsf</p>', '<p>kjbh</p>', '<p>kj</p>', '<p>kjh</p>', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-02 23:35:13', '2017-11-02 23:35:13'),
(86, 14, '<table style="margin-left: auto; margin-right: auto; height: 355px; border-color: #b3b3b3;" border="1" width="972" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">\r\n<p><strong>Tahun Akademik</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">\r\n<p><strong>Daya Tampung</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Calon Mahasiswa&nbsp; </strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Mahasiswa Baru </strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">\r\n<p><strong>Jumlah Total Mahasiswa</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Ikut Seleksi</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Lulus Seleksi</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Non-Reguler</strong></p>\r\n</td>\r\n<td style="width: 84.4px; background-color: #ababab; text-align: center;">\r\n<p><strong>Transfer<sup>(3)</sup></strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p><strong>(1)</strong></p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p><strong>(2)</strong></p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p><strong>(3)</strong></p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p><strong>(4)</strong></p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p><strong>(5)</strong></p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p><strong>(6)</strong></p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p><strong>(7)</strong></p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p><strong>(8)</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-4</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">&nbsp;</td>\r\n<td style="width: 128.4px; text-align: center;">&nbsp;</td>\r\n<td style="width: 150px; text-align: center;">&nbsp;</td>\r\n<td style="width: 107.6px; text-align: center;">&nbsp;</td>\r\n<td style="width: 125.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 109.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 130.8px; text-align: center;">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>654</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">&nbsp;</td>\r\n<td style="width: 128.4px; text-align: center;">&nbsp;</td>\r\n<td style="width: 150px; text-align: center;">&nbsp;</td>\r\n<td style="width: 107.6px; text-align: center;">&nbsp;</td>\r\n<td style="width: 125.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 109.2px; text-align: center;">&nbsp;</td>\r\n<td style="width: 130.8px; text-align: center;">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-2</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS-1</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="width: 84.4px; text-align: center;">\r\n<p>TS</p>\r\n</td>\r\n<td style="width: 118.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 128.4px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 150px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 107.6px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 125.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 109.2px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n<td style="width: 130.8px; text-align: center;">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2017-11-02 22:11:44', '2017-11-05 20:33:43'),
(87, 10, '100', '100', '100', '1001', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '<p>&nbsp;</p>\r\n<!-- <table style="height: 42px;" border="1" width="935" cellspacing="0" cellpadding="0">\r\n                                    <tbody>\r\n                                    <tr style="height: 26px;">\r\n                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>\r\n                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>\r\n                                    </tr>\r\n                                    <tr style="height: 26px;">\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">< 2,75</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>\r\n                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">> 3,50</th>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(1)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(9)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(10)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(11)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(12)</strong></td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(13)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(14)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(15)</strong></td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(16)</strong></td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-4</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-3</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-2</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS-1</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">TS</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 53px; text-align: center; height: 13px;"> </td>\r\n                                    </tr>\r\n                                    <tr style="height: 13px;">\r\n                                    <td style="width: 52px; text-align: center; height: 13px;">Jumlah</td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; text-align: center; height: 13px;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"> </td>\r\n                                    </tr>\r\n                                    </tbody>\r\n                                    </table> -->\r\n<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 01:42:11', '2017-11-08 01:42:11'),
(88, 10, '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '1', '100', '100', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 01:42:50', '2017-11-08 01:42:50'),
(89, 10, '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '30', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:14:28', '2017-11-08 03:14:28'),
(90, 10, '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:23:54', '2017-11-08 03:23:54'),
(91, 10, '45', '54', '54', '54', '45', '45', '54', '65', '65', '65', '654', '654', '654', '64', '654', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:24:44', '2017-11-08 03:24:44'),
(92, 10, '89', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '98', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-08 03:31:35', '2017-11-08 03:31:35'),
(93, 10, '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '<p>Catatan:</p>\r\n<p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>\r\n<p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>\r\n<p>Catatan:</p>\r\n<p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>\r\n<p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>\r\n<p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>', 1, '2017-11-12 21:34:40', '2017-11-12 21:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `user`, `action`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Saepuloh', 'Berhasil menambah User Baru', '2017-04-17 23:09:47', '0000-00-00 00:00:00'),
(2, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Teknologi Informasi buku : Prodi', '2017-04-18 01:22:22', '0000-00-00 00:00:00'),
(3, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Hubungan Masyarakat buku : Prodi', '2017-04-18 01:23:24', '0000-00-00 00:00:00'),
(4, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Administrasi Bisnis buku : Prodi', '2017-04-18 01:25:12', '0000-00-00 00:00:00'),
(5, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Teknologi Informasi buku : Prodi', '2017-04-18 02:11:00', '0000-00-00 00:00:00'),
(6, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Hubungan Masyarakat buku : Prodi', '2017-04-18 02:24:53', '0000-00-00 00:00:00'),
(7, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2016 fakultas/prodi : S1 Administrasi Bisnis buku : Prodi', '2017-04-18 02:25:35', '0000-00-00 00:00:00'),
(8, 'Wahyu Saepuloh', 'Menghapus buku dengan id:5', '2017-04-18 02:45:22', '0000-00-00 00:00:00'),
(9, 'Wahyu Saepuloh', 'Menambah buku dengan jenisProdi tahun - 2017 fakultas/prodi : S1 Teknik Informatika buku : Borang', '2017-04-18 23:40:00', '0000-00-00 00:00:00'),
(10, 'Wahyu Saepuloh', 'Menghapus buku dengan id:6', '2017-04-18 23:40:13', '0000-00-00 00:00:00'),
(11, 'Wahyu Saepuloh', 'Menambah buku dengan jenis tahun -  fakultas/prodi :  buku : ', '2017-04-18 23:49:10', '0000-00-00 00:00:00'),
(12, 'Wahyu Saepuloh', 'Menghapus buku dengan id:8', '2017-04-18 23:49:17', '0000-00-00 00:00:00'),
(13, 'Wahyu Saepuloh', 'Menambah buku dengan jenis tahun -  fakultas/prodi :  buku : ', '2017-04-19 01:25:49', '0000-00-00 00:00:00'),
(14, 'Wahyu Saepuloh', 'Menghapus buku dengan id:10', '2017-04-19 01:25:55', '0000-00-00 00:00:00'),
(15, 'Wahyu Saepuloh', 'Menghapus buku dengan id:9', '2017-04-19 01:26:13', '0000-00-00 00:00:00'),
(16, 'Wahyu Saepuloh', 'Menambah buku dengan jenisFakultas tahun - 2017 fakultas/prodi : Fakultas Informatika buku : Borang', '2017-04-19 01:32:43', '0000-00-00 00:00:00'),
(17, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 02:36:08', '0000-00-00 00:00:00'),
(18, 'Wahyu Saepuloh', 'Menghapus buku dengan id:12', '2017-04-19 02:36:22', '0000-00-00 00:00:00'),
(19, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 02:37:05', '0000-00-00 00:00:00'),
(20, 'Wahyu Saepuloh', 'Menghapus buku dengan id:13', '2017-04-19 02:37:08', '0000-00-00 00:00:00'),
(21, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:08:35', '0000-00-00 00:00:00'),
(22, 'Wahyu Saepuloh', 'Menghapus buku dengan id:14', '2017-04-19 03:08:39', '0000-00-00 00:00:00'),
(23, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:08:58', '0000-00-00 00:00:00'),
(24, 'Wahyu Saepuloh', 'Menghapus buku dengan id:15', '2017-04-19 03:09:02', '0000-00-00 00:00:00'),
(25, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:09:32', '0000-00-00 00:00:00'),
(26, 'Wahyu Saepuloh', 'Menghapus buku dengan id:16', '2017-04-19 03:09:36', '0000-00-00 00:00:00'),
(27, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:09:43', '0000-00-00 00:00:00'),
(28, 'Wahyu Saepuloh', 'Menghapus buku dengan id:17', '2017-04-19 03:09:45', '0000-00-00 00:00:00'),
(29, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:09:56', '0000-00-00 00:00:00'),
(30, 'Wahyu Saepuloh', 'Menghapus buku dengan id:18', '2017-04-19 03:09:59', '0000-00-00 00:00:00'),
(31, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:10:20', '0000-00-00 00:00:00'),
(32, 'Wahyu Saepuloh', 'Menghapus buku dengan id:19', '2017-04-19 03:10:23', '0000-00-00 00:00:00'),
(33, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:48:59', '0000-00-00 00:00:00'),
(34, 'Wahyu Saepuloh', 'Menghapus buku dengan id:20', '2017-04-19 03:49:05', '0000-00-00 00:00:00'),
(35, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:50:18', '0000-00-00 00:00:00'),
(36, 'Wahyu Saepuloh', 'Menghapus buku dengan id:21', '2017-04-19 03:50:22', '0000-00-00 00:00:00'),
(37, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:50:59', '0000-00-00 00:00:00'),
(38, 'Wahyu Saepuloh', 'Menghapus buku dengan id:22', '2017-04-19 03:51:03', '0000-00-00 00:00:00'),
(39, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 03:51:23', '0000-00-00 00:00:00'),
(40, 'Wahyu Saepuloh', 'Menghapus buku dengan id:23', '2017-04-19 03:51:26', '0000-00-00 00:00:00'),
(41, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:00:06', '0000-00-00 00:00:00'),
(42, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:12:47', '0000-00-00 00:00:00'),
(43, 'Wahyu Saepuloh', 'Menghapus buku dengan id:25', '2017-04-19 04:14:10', '0000-00-00 00:00:00'),
(44, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:14:49', '0000-00-00 00:00:00'),
(45, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:15:51', '0000-00-00 00:00:00'),
(46, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:17:11', '0000-00-00 00:00:00'),
(47, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:23:41', '0000-00-00 00:00:00'),
(48, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:24:18', '0000-00-00 00:00:00'),
(49, 'Wahyu Saepuloh', 'Menghapus buku dengan id:30', '2017-04-19 04:24:45', '0000-00-00 00:00:00'),
(50, 'Wahyu Saepuloh', 'Menghapus buku dengan id:29', '2017-04-19 04:25:10', '0000-00-00 00:00:00'),
(51, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:25:22', '0000-00-00 00:00:00'),
(52, 'Wahyu Saepuloh', 'Menghapus buku dengan id:31', '2017-04-19 04:26:00', '0000-00-00 00:00:00'),
(53, 'Wahyu Saepuloh', 'Menghapus buku dengan id:28', '2017-04-19 04:26:16', '0000-00-00 00:00:00'),
(54, 'Wahyu Saepuloh', 'Menghapus buku dengan id:27', '2017-04-19 04:28:56', '0000-00-00 00:00:00'),
(55, 'Wahyu Saepuloh', 'Menghapus buku dengan id:26', '2017-04-19 04:29:15', '0000-00-00 00:00:00'),
(56, 'Wahyu Saepuloh', 'Menghapus buku dengan id:24', '2017-04-19 04:29:20', '0000-00-00 00:00:00'),
(57, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:29:23', '0000-00-00 00:00:00'),
(58, 'Wahyu Saepuloh', 'Menghapus buku dengan id:32', '2017-04-19 04:29:45', '0000-00-00 00:00:00'),
(59, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:30:10', '0000-00-00 00:00:00'),
(60, 'Wahyu Saepuloh', 'Menghapus buku dengan id:33', '2017-04-19 04:30:13', '0000-00-00 00:00:00'),
(61, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:33:28', '0000-00-00 00:00:00'),
(62, 'Wahyu Saepuloh', 'Menghapus buku dengan id:34', '2017-04-19 04:33:32', '0000-00-00 00:00:00'),
(63, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 04:34:31', '0000-00-00 00:00:00'),
(64, 'Wahyu Saepuloh', 'Menghapus buku dengan id:35', '2017-04-19 04:34:35', '0000-00-00 00:00:00'),
(65, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 16:35:38', '0000-00-00 00:00:00'),
(66, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-04-19 16:53:05', '0000-00-00 00:00:00'),
(67, 'Wahyu Saepuloh', 'Menghapus buku dengan id:12', '2017-04-19 17:04:14', '0000-00-00 00:00:00'),
(68, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:06:15', '0000-00-00 00:00:00'),
(69, 'Wahyu Saepuloh', 'Menghapus buku dengan id:13', '2017-04-19 17:06:19', '0000-00-00 00:00:00'),
(70, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:06:32', '0000-00-00 00:00:00'),
(71, 'Wahyu Saepuloh', 'Menghapus buku dengan id:14', '2017-04-19 17:06:50', '0000-00-00 00:00:00'),
(72, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:07:28', '0000-00-00 00:00:00'),
(73, 'Wahyu Saepuloh', 'Menghapus buku dengan id:15', '2017-04-19 17:07:31', '0000-00-00 00:00:00'),
(74, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:08:52', '0000-00-00 00:00:00'),
(75, 'Wahyu Saepuloh', 'Menghapus buku dengan id:16', '2017-04-19 17:08:55', '0000-00-00 00:00:00'),
(76, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:09:29', '0000-00-00 00:00:00'),
(77, 'Wahyu Saepuloh', 'Menghapus buku dengan id:17', '2017-04-19 17:09:32', '0000-00-00 00:00:00'),
(78, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:12:02', '0000-00-00 00:00:00'),
(79, 'Wahyu Saepuloh', 'Menghapus buku dengan id:18', '2017-04-19 17:12:24', '0000-00-00 00:00:00'),
(80, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:12:55', '0000-00-00 00:00:00'),
(81, 'Wahyu Saepuloh', 'Menghapus buku dengan id:19', '2017-04-19 17:12:58', '0000-00-00 00:00:00'),
(82, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:13:44', '0000-00-00 00:00:00'),
(83, 'Wahyu Saepuloh', 'Menghapus buku dengan id:20', '2017-04-19 17:13:47', '0000-00-00 00:00:00'),
(84, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:15:14', '0000-00-00 00:00:00'),
(85, 'Wahyu Saepuloh', 'Menghapus buku dengan id:21', '2017-04-19 17:15:25', '0000-00-00 00:00:00'),
(86, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:19:56', '0000-00-00 00:00:00'),
(87, 'Wahyu Saepuloh', 'Menghapus buku dengan id:22', '2017-04-19 17:21:25', '0000-00-00 00:00:00'),
(88, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 17:47:58', '0000-00-00 00:00:00'),
(89, 'Wahyu Saepuloh', 'Menghapus buku dengan id:23', '2017-04-19 17:48:03', '0000-00-00 00:00:00'),
(90, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 2016 fakultas/prodi : S1 Teknologi Informasi buku : Borang', '2017-04-19 18:28:12', '0000-00-00 00:00:00'),
(91, 'Wahyu Saepuloh', 'Menghapus buku dengan id:11', '2017-04-19 18:30:34', '0000-00-00 00:00:00'),
(92, 'Wahyu Saepuloh', 'Menghapus buku dengan id:24', '2017-04-19 18:30:36', '0000-00-00 00:00:00'),
(93, 'Wahyu Saepuloh', 'Menghapus buku dengan id:7', '2017-04-19 18:30:39', '0000-00-00 00:00:00'),
(94, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-04-19 18:52:40', '0000-00-00 00:00:00'),
(95, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-04-19 19:12:50', '0000-00-00 00:00:00'),
(96, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 201722 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-04-19 19:13:25', '0000-00-00 00:00:00'),
(97, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-04-19 19:13:34', '0000-00-00 00:00:00'),
(98, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 19:21:59', '0000-00-00 00:00:00'),
(99, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 19:22:24', '0000-00-00 00:00:00'),
(100, 'Wahyu Saepuloh', 'Menghapus buku dengan id:63', '2017-04-19 19:22:33', '0000-00-00 00:00:00'),
(101, 'Wahyu Saepuloh', 'Menghapus buku dengan id:62', '2017-04-19 19:22:36', '0000-00-00 00:00:00'),
(102, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 19:22:57', '0000-00-00 00:00:00'),
(103, 'Wahyu Saepuloh', 'Menghapus buku dengan id:64', '2017-04-19 19:23:01', '0000-00-00 00:00:00'),
(104, 'Wahyu Saepuloh', 'Menambah buku dengan jenis :  tahun -  fakultas/prodi :  buku : ', '2017-04-19 20:41:03', '0000-00-00 00:00:00'),
(105, 'Wahyu Saepuloh', 'Menghapus buku dengan id:62', '2017-04-19 20:44:09', '0000-00-00 00:00:00'),
(106, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-04-19 20:46:32', '0000-00-00 00:00:00'),
(107, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 6 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Akuntansi buku : Borang', '2017-04-19 23:05:33', '0000-00-00 00:00:00'),
(108, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 6 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : S1 Akuntansi buku : Borang', '2017-04-20 01:18:21', '0000-00-00 00:00:00'),
(109, 'Wahyu Saepuloh', 'Menambahkan Butir  444', '2017-04-20 03:48:25', '0000-00-00 00:00:00'),
(110, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 03:52:10', '0000-00-00 00:00:00'),
(111, 'Wahyu Saepuloh', 'menghapus Butir dengan ID ', '2017-04-20 03:52:16', '0000-00-00 00:00:00'),
(112, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 101', '2017-04-20 04:07:46', '0000-00-00 00:00:00'),
(113, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:08:16', '0000-00-00 00:00:00'),
(114, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:08:44', '0000-00-00 00:00:00'),
(115, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:09:27', '0000-00-00 00:00:00'),
(116, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 104', '2017-04-20 04:09:32', '0000-00-00 00:00:00'),
(117, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 103', '2017-04-20 04:09:57', '0000-00-00 00:00:00'),
(118, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:11:29', '0000-00-00 00:00:00'),
(119, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 105', '2017-04-20 04:11:33', '0000-00-00 00:00:00'),
(120, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 102', '2017-04-20 04:11:59', '0000-00-00 00:00:00'),
(121, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:13:44', '0000-00-00 00:00:00'),
(122, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 106', '2017-04-20 04:13:49', '0000-00-00 00:00:00'),
(123, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:14:58', '0000-00-00 00:00:00'),
(124, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 107', '2017-04-20 04:19:00', '0000-00-00 00:00:00'),
(125, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:20:53', '0000-00-00 00:00:00'),
(126, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 108', '2017-04-20 04:20:57', '0000-00-00 00:00:00'),
(127, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:23:28', '0000-00-00 00:00:00'),
(128, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 109', '2017-04-20 04:23:31', '0000-00-00 00:00:00'),
(129, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:24:01', '0000-00-00 00:00:00'),
(130, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 110', '2017-04-20 04:24:05', '0000-00-00 00:00:00'),
(131, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:25:36', '0000-00-00 00:00:00'),
(132, 'Wahyu Saepuloh', 'menghapus Butir dengan ID ', '2017-04-20 04:25:40', '0000-00-00 00:00:00'),
(133, 'Wahyu Saepuloh', 'menghapus Butir dengan ID ', '2017-04-20 04:32:16', '0000-00-00 00:00:00'),
(134, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 111', '2017-04-20 04:32:34', '0000-00-00 00:00:00'),
(135, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:33:00', '0000-00-00 00:00:00'),
(136, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 112', '2017-04-20 04:33:04', '0000-00-00 00:00:00'),
(137, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:35:27', '0000-00-00 00:00:00'),
(138, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 113', '2017-04-20 04:36:02', '0000-00-00 00:00:00'),
(139, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:37:31', '0000-00-00 00:00:00'),
(140, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:37:41', '0000-00-00 00:00:00'),
(141, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 115', '2017-04-20 04:37:46', '0000-00-00 00:00:00'),
(142, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 114', '2017-04-20 04:45:10', '0000-00-00 00:00:00'),
(143, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 04:50:03', '0000-00-00 00:00:00'),
(144, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 116', '2017-04-20 04:50:06', '0000-00-00 00:00:00'),
(145, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-04-20 05:06:40', '0000-00-00 00:00:00'),
(146, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 117', '2017-04-20 10:58:53', '0000-00-00 00:00:00'),
(147, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun -  fakultas/prodi : qqq buku : ', '2017-04-24 05:25:32', '0000-00-00 00:00:00'),
(148, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 12 fakultas/prodi : qqed buku : ', '2017-04-24 05:25:44', '0000-00-00 00:00:00'),
(149, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 63 menjadi : Jenis : Prodi tahun - 12 fakultas/prodi : Qqed buku : dfg', '2017-04-24 05:26:54', '0000-00-00 00:00:00'),
(150, 'Wahyu Saepuloh', 'Menghapus buku dengan id:62', '2017-04-25 03:03:35', '0000-00-00 00:00:00'),
(151, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 63 menjadi : Jenis : Prodi tahun - 12 fakultas/prodi : Qqedrtrf buku : dfg', '2017-04-25 03:04:38', '0000-00-00 00:00:00'),
(152, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 63 menjadi : Jenis : Prodi tahun - 12RU fakultas/prodi : Qqedrtrf buku : dfg', '2017-05-11 22:06:27', '0000-00-00 00:00:00'),
(153, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 63 menjadi : Jenis : Prodi tahun - 12 fakultas/prodi : Qqedrtrf buku : dfg', '2017-05-11 22:08:22', '0000-00-00 00:00:00'),
(154, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 63 menjadi : Jenis : Fakultas tahun - 12 fakultas/prodi : Qqedrtrf buku : dfg', '2017-05-11 22:08:31', '0000-00-00 00:00:00'),
(155, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-05-11 22:28:40', '0000-00-00 00:00:00'),
(156, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-05-11 22:28:40', '0000-00-00 00:00:00'),
(157, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-05-11 22:28:40', '0000-00-00 00:00:00'),
(158, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-05-11 22:29:51', '0000-00-00 00:00:00'),
(159, 'Wahyu Saepuloh', 'Menghapus buku dengan id:', '2017-05-11 22:29:51', '0000-00-00 00:00:00'),
(160, 'Wahyu Saepuloh', 'Menghapus buku dengan id:63', '2017-05-11 23:08:14', '0000-00-00 00:00:00'),
(161, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - 232 fakultas/prodi : asdsd buku : dsa', '2017-05-11 23:08:54', '0000-00-00 00:00:00'),
(162, 'Wahyu Saepuloh', 'Menghapus buku dengan id:64', '2017-05-11 23:09:50', '0000-00-00 00:00:00'),
(163, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - 2424 fakultas/prodi : adafdscv buku : ewdv', '2017-05-11 23:11:34', '0000-00-00 00:00:00'),
(164, 'Wahyu Saepuloh', 'Menghapus buku dengan id:65', '2017-05-11 23:11:45', '0000-00-00 00:00:00'),
(165, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - 3254 fakultas/prodi : afsfv buku : dsgsfg', '2017-05-11 23:12:08', '0000-00-00 00:00:00'),
(166, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 66 menjadi : Jenis : Fakultas tahun - 3254 fakultas/prodi : Afsfv fdfsdfsf buku : dsgsfg', '2017-05-12 02:28:32', '0000-00-00 00:00:00'),
(167, 'Wahyu Saepuloh', 'Menghapus buku dengan id:66', '2017-05-12 02:49:48', '0000-00-00 00:00:00'),
(168, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - fgdfg fakultas/prodi : dsfgfdg buku : fgdf', '2017-05-12 03:01:16', '0000-00-00 00:00:00'),
(169, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 67 menjadi : Jenis :  tahun - 0 fakultas/prodi : Dsfgfdg buku : fgdfhlk', '2017-05-12 03:01:27', '0000-00-00 00:00:00'),
(170, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 67 menjadi : Jenis :  tahun - 0 fakultas/prodi : Dsfgfdg hjk buku : fgdfhlk', '2017-05-12 03:01:39', '0000-00-00 00:00:00'),
(171, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 67 menjadi : Jenis :  tahun - 131 fakultas/prodi : Dsfgfdg Hjk buku : fgdfhlk', '2017-05-12 03:01:57', '0000-00-00 00:00:00'),
(172, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 67 menjadi : Jenis :  tahun - 131 fakultas/prodi : Dsfgfdg Hjk buku : fgdfhlk', '2017-05-12 03:02:02', '0000-00-00 00:00:00'),
(173, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 67 menjadi : Jenis :  tahun - 131 fakultas/prodi : Dsfgfdg Hjk buku : fgdfhlk', '2017-05-12 03:02:07', '0000-00-00 00:00:00'),
(174, 'Wahyu Saepuloh', 'Menghapus buku dengan id:67', '2017-05-12 03:02:10', '0000-00-00 00:00:00'),
(175, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 4234 fakultas/prodi : adsad buku : 23fsdfs', '2017-05-12 03:02:27', '0000-00-00 00:00:00'),
(176, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 68 menjadi : Jenis :  tahun - 4234 fakultas/prodi : Adsad buku : 23fsdfs', '2017-05-12 03:02:37', '0000-00-00 00:00:00'),
(177, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 68 menjadi : Jenis : Prodi tahun - 4234 fakultas/prodi : Adsad buku : 23fsdfs', '2017-05-12 03:03:19', '0000-00-00 00:00:00'),
(178, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 68 menjadi : Jenis : Prodi tahun - 4234 fakultas/prodi : Adsad buku : 23fsdfs', '2017-05-12 03:03:42', '0000-00-00 00:00:00'),
(179, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 68 menjadi : Jenis : Fakultas tahun - 4234 fakultas/prodi : Adsad buku : 23fsdfs', '2017-05-12 03:05:09', '0000-00-00 00:00:00'),
(180, 'Wahyu Saepuloh', 'Menghapus buku dengan id:68', '2017-05-12 03:05:12', '0000-00-00 00:00:00'),
(181, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 243 fakultas/prodi : ssdddasd buku : ghfj', '2017-05-12 03:05:41', '0000-00-00 00:00:00'),
(182, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 69 menjadi : Jenis : Prodi tahun - 243 fakultas/prodi : Ssdddasd buku : ghfj', '2017-05-12 03:06:44', '0000-00-00 00:00:00'),
(183, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 69 menjadi : Jenis : Fakultas tahun - 243 fakultas/prodi : Ssdddasd buku : ghfj', '2017-05-12 03:06:54', '0000-00-00 00:00:00'),
(184, 'Wahyu Saepuloh', 'Menghapus buku dengan id:69', '2017-05-12 03:42:44', '0000-00-00 00:00:00'),
(185, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 3634 fakultas/prodi : jfgytu buku : dfhfgh', '2017-05-12 03:43:00', '0000-00-00 00:00:00'),
(186, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 48 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 03:49:44', '0000-00-00 00:00:00'),
(187, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 48 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S1 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 03:49:54', '0000-00-00 00:00:00'),
(188, 'Wahyu Saepuloh', 'Menghapus buku dengan id:70', '2017-05-12 03:50:58', '0000-00-00 00:00:00'),
(189, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - 324 fakultas/prodi : asdsd buku : sdfgdfg', '2017-05-12 04:02:31', '0000-00-00 00:00:00'),
(190, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 71 menjadi : Jenis : Fakultas tahun - 324 fakultas/prodi : Asdsd buku : sdfgdfg', '2017-05-12 04:02:35', '0000-00-00 00:00:00'),
(191, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 71 menjadi : Jenis : Prodi tahun - 324 fakultas/prodi : Asdsd buku : sdfgdfg', '2017-05-12 04:02:41', '0000-00-00 00:00:00'),
(192, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 71 menjadi : Jenis : Prodi tahun - 324 fakultas/prodi : zzzz buku : sdfgdfg', '2017-05-12 04:02:55', '0000-00-00 00:00:00'),
(193, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 71 menjadi : Jenis : Prodi tahun - 11 fakultas/prodi : Zzzz buku : sdfgdfg', '2017-05-12 04:03:10', '0000-00-00 00:00:00'),
(194, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 71 menjadi : Jenis : Prodi tahun - 11 fakultas/prodi : Zzzz buku : aaa', '2017-05-12 04:03:25', '0000-00-00 00:00:00'),
(195, 'Wahyu Saepuloh', 'Menghapus buku dengan id:71', '2017-05-12 04:03:42', '0000-00-00 00:00:00'),
(196, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 1 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Hubungan Masyarakat buku : Borang', '2017-05-12 04:08:40', '0000-00-00 00:00:00'),
(197, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 1 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : S1 Hubungan Masyarakat buku : Borang', '2017-05-12 04:08:53', '0000-00-00 00:00:00'),
(198, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 27 menjadi : Jenis :  tahun - 2017 fakultas/prodi : D4 Sistem Multimedia buku : Borang', '2017-05-12 04:09:45', '0000-00-00 00:00:00'),
(199, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 27 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : D4 Sistem Multimedia buku : Borang', '2017-05-12 04:09:52', '0000-00-00 00:00:00'),
(200, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 31 menjadi : Jenis :  tahun - 2017 fakultas/prodi : D3 Fakultas Ilmu Terapan buku : Borang', '2017-05-12 04:10:12', '0000-00-00 00:00:00'),
(201, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 31 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : D3 Fakultas Ilmu Terapan buku : Borang', '2017-05-12 04:10:20', '0000-00-00 00:00:00'),
(202, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Fakultas tahun - 47 fakultas/prodi : yjghj buku : thfg', '2017-05-12 04:10:33', '0000-00-00 00:00:00'),
(203, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 72 menjadi : Jenis : Fakultas tahun - 47 fakultas/prodi : Yjghj buku : thfg', '2017-05-12 04:10:37', '0000-00-00 00:00:00'),
(204, 'Wahyu Saepuloh', 'Menghapus buku dengan id:72', '2017-05-12 04:10:51', '0000-00-00 00:00:00'),
(205, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 04:11:02', '0000-00-00 00:00:00'),
(206, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 58 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Informatika buku : Borang', '2017-05-12 04:11:08', '0000-00-00 00:00:00'),
(207, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 58 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Informatika buku : Borang', '2017-05-12 04:11:15', '0000-00-00 00:00:00'),
(208, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 04:31:12', '0000-00-00 00:00:00'),
(209, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 57 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S2 Fakultas Rekayasa Industri buku : Borang', '2017-05-12 04:31:20', '0000-00-00 00:00:00'),
(210, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 57 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Rekayasa Industri buku : Borang', '2017-05-12 04:31:26', '0000-00-00 00:00:00'),
(211, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 49 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Fakultas Komunikasi Dan Bisnis buku : Borang', '2017-05-12 04:34:04', '0000-00-00 00:00:00'),
(212, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 49 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S1 Fakultas Komunikasi Dan Bisnis buku : Borang', '2017-05-12 04:34:10', '0000-00-00 00:00:00'),
(213, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 58 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Informatika buku : Borang', '2017-05-12 04:39:27', '0000-00-00 00:00:00'),
(214, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 40 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Fakultas Teknik Elektro buku : Borang', '2017-05-12 04:39:38', '0000-00-00 00:00:00'),
(215, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 40 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S1 Fakultas Teknik Elektro buku : Borang', '2017-05-12 04:39:47', '0000-00-00 00:00:00'),
(216, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 57 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Rekayasa Industri buku : Borang', '2017-05-12 04:39:54', '0000-00-00 00:00:00'),
(217, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 45 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Fakultas Teknik Informatika buku : Borang', '2017-05-12 04:40:01', '0000-00-00 00:00:00'),
(218, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 45 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S1 Fakultas Teknik Informatika buku : Borang', '2017-05-12 04:40:07', '0000-00-00 00:00:00'),
(219, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 61 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S1 Teknologi Informasi buku : Borang', '2017-05-12 04:40:25', '0000-00-00 00:00:00'),
(220, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 61 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : S1 Teknologi Informasi buku : Borang', '2017-05-12 04:40:31', '0000-00-00 00:00:00'),
(221, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 61 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : S1 Teknologi Informasi buku : Borang', '2017-05-12 04:40:42', '0000-00-00 00:00:00'),
(222, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 04:41:03', '0000-00-00 00:00:00'),
(223, 'Wahyu Saepuloh', 'Menambah buku dengan jenis : Prodi tahun - 35345 fakultas/prodi : sadsd buku : fgfd', '2017-05-12 04:55:14', '0000-00-00 00:00:00'),
(224, 'Wahyu Saepuloh', 'Menghapus buku dengan id:73', '2017-05-12 04:55:23', '0000-00-00 00:00:00'),
(225, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 40 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S1 Fakultas Teknik Elektro buku : Borang', '2017-05-12 05:01:49', '0000-00-00 00:00:00'),
(226, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 56 menjadi : Jenis :  tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Elektro buku : Borang', '2017-05-12 05:02:00', '0000-00-00 00:00:00'),
(227, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 56 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Elektro buku : Borang', '2017-05-12 05:02:09', '0000-00-00 00:00:00'),
(228, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-12 05:03:18', '0000-00-00 00:00:00'),
(229, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 58 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Informatika buku : Borang', '2017-05-12 05:03:25', '0000-00-00 00:00:00'),
(230, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 57 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Rekayasa Industri buku : Borang', '2017-05-12 05:03:33', '0000-00-00 00:00:00'),
(231, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 56 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Elektro buku : Borang', '2017-05-12 05:03:38', '0000-00-00 00:00:00'),
(232, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 2 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : D3 Komputerisasi Akuntansi buku : Borang', '2017-05-12 05:04:00', '0000-00-00 00:00:00'),
(233, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 3 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : S1 Administrasi Bisnis buku : Borang', '2017-05-12 05:04:08', '0000-00-00 00:00:00'),
(234, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 2 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : D3 Komputerisasi Akuntansi buku : Borang', '2017-05-12 05:08:07', '0000-00-00 00:00:00'),
(235, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 2 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : D3 Komputerisasi Akuntansi a buku : Borang', '2017-05-14 21:09:32', '0000-00-00 00:00:00'),
(236, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 2 menjadi : Jenis : Prodi tahun - 2017 fakultas/prodi : D3 Komputerisasi Akuntansi buku : Borang', '2017-05-14 21:09:42', '0000-00-00 00:00:00'),
(237, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-05-14 23:06:50', '0000-00-00 00:00:00'),
(238, 'Wahyu Saepuloh', 'Mengubah Butir  12', '2017-05-14 23:06:57', '0000-00-00 00:00:00'),
(239, 'Wahyu Saepuloh', 'Mengubah Butir  12', '2017-05-14 23:09:47', '0000-00-00 00:00:00'),
(240, 'Wahyu Saepuloh', 'Mengubah Butir  1w', '2017-05-14 23:10:30', '0000-00-00 00:00:00'),
(241, 'Wahyu Saepuloh', 'Mengubah Butir  1', '2017-05-14 23:11:38', '0000-00-00 00:00:00'),
(242, 'Wahyu Saepuloh', 'Mengubah Butir  1', '2017-05-14 23:11:47', '0000-00-00 00:00:00'),
(243, 'Wahyu Saepuloh', 'Mengubah Butir  1', '2017-05-14 23:12:28', '0000-00-00 00:00:00'),
(244, 'Wahyu Saepuloh', 'Mengubah Butir  132', '2017-05-14 23:18:40', '0000-00-00 00:00:00'),
(245, 'Wahyu Saepuloh', 'Mengubah Butir  132', '2017-05-14 23:18:58', '0000-00-00 00:00:00'),
(246, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 101', '2017-05-14 23:27:06', '0000-00-00 00:00:00'),
(247, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-05-14 23:29:34', '0000-00-00 00:00:00'),
(248, 'Wahyu Saepuloh', 'Mengubah Butir : 1 dengan ID : 102', '2017-05-14 23:30:39', '0000-00-00 00:00:00'),
(249, 'Wahyu Saepuloh', 'Mengubah Butir : 133 dengan ID : 102', '2017-05-14 23:30:56', '0000-00-00 00:00:00'),
(250, 'Wahyu Saepuloh', 'Mengubah Butir : 2 dengan ID : 102', '2017-05-14 23:31:06', '0000-00-00 00:00:00'),
(251, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 102', '2017-05-14 23:31:18', '0000-00-00 00:00:00'),
(252, 'Wahyu Saepuloh', 'Menambahkan Butir  1', '2017-05-14 23:50:02', '0000-00-00 00:00:00'),
(253, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 103', '2017-05-14 23:50:07', '0000-00-00 00:00:00'),
(254, 'Wahyu Saepuloh', 'Menambahkan Butir  2', '2017-05-15 01:19:28', '0000-00-00 00:00:00'),
(255, 'Wahyu Saepuloh', 'Mengubah Butir : 2 dengan ID : 104', '2017-05-15 01:19:36', '0000-00-00 00:00:00'),
(256, 'Wahyu Saepuloh', 'Mengubah Butir : 2 dengan ID : 104', '2017-05-15 01:19:43', '0000-00-00 00:00:00'),
(257, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 104', '2017-05-15 01:19:51', '0000-00-00 00:00:00'),
(258, 'Wahyu Saepuloh', 'Mengubah Butir : 6.2.3 dengan ID : 79', '2017-05-18 21:30:07', '0000-00-00 00:00:00'),
(259, 'Wahyu Saepuloh', 'Mengubah Butir : 6.2.3 dengan ID : 79', '2017-05-18 21:30:33', '0000-00-00 00:00:00'),
(260, 'Wahyu Saepuloh', 'Mengubah Butir : 6.2.3 dengan ID : 79', '2017-05-18 21:31:03', '0000-00-00 00:00:00'),
(261, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-18 23:12:13', '0000-00-00 00:00:00'),
(262, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 12:01:10', '0000-00-00 00:00:00'),
(263, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 12:07:59', '0000-00-00 00:00:00'),
(264, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 12:08:21', '0000-00-00 00:00:00'),
(265, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 13:08:02', '0000-00-00 00:00:00'),
(266, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID2', '2017-05-23 18:50:24', '0000-00-00 00:00:00'),
(267, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID2', '2017-05-23 18:50:40', '0000-00-00 00:00:00'),
(268, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID2', '2017-05-23 18:55:05', '0000-00-00 00:00:00'),
(269, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID2', '2017-05-23 18:57:37', '0000-00-00 00:00:00'),
(270, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-05-23 18:58:54', '0000-00-00 00:00:00'),
(271, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 19:00:51', '0000-00-00 00:00:00'),
(272, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-23 19:00:57', '0000-00-00 00:00:00'),
(273, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 19:01:05', '0000-00-00 00:00:00'),
(274, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 19:05:11', '0000-00-00 00:00:00'),
(275, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 19:05:40', '0000-00-00 00:00:00'),
(276, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-23 19:07:55', '0000-00-00 00:00:00'),
(277, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 19:08:09', '0000-00-00 00:00:00'),
(278, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 22:41:44', '0000-00-00 00:00:00'),
(279, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:10:44', '0000-00-00 00:00:00'),
(280, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:02', '0000-00-00 00:00:00'),
(281, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:23', '0000-00-00 00:00:00'),
(282, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:30', '0000-00-00 00:00:00'),
(283, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:39', '0000-00-00 00:00:00'),
(284, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:47', '0000-00-00 00:00:00'),
(285, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:15:55', '0000-00-00 00:00:00'),
(286, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:16:05', '0000-00-00 00:00:00'),
(287, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-23 23:16:13', '0000-00-00 00:00:00'),
(288, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-23 23:17:11', '0000-00-00 00:00:00'),
(289, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-23 23:22:27', '0000-00-00 00:00:00'),
(290, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-24 03:41:48', '0000-00-00 00:00:00'),
(291, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-24 03:46:44', '0000-00-00 00:00:00'),
(292, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-24 03:47:00', '0000-00-00 00:00:00'),
(293, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-24 03:48:50', '0000-00-00 00:00:00'),
(294, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-24 04:31:01', '0000-00-00 00:00:00'),
(295, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-24 04:31:37', '0000-00-00 00:00:00'),
(296, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-24 04:32:40', '0000-00-00 00:00:00'),
(297, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-24 04:34:15', '0000-00-00 00:00:00'),
(298, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 02:31:34', '0000-00-00 00:00:00'),
(299, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 02:47:38', '0000-00-00 00:00:00'),
(300, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 02:48:11', '0000-00-00 00:00:00'),
(301, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 02:49:10', '0000-00-00 00:00:00'),
(302, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 02:49:50', '0000-00-00 00:00:00'),
(303, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 02:51:06', '0000-00-00 00:00:00'),
(304, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 02:51:34', '0000-00-00 00:00:00'),
(305, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 02:51:58', '0000-00-00 00:00:00'),
(306, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 02:57:25', '0000-00-00 00:00:00'),
(307, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 02:58:34', '0000-00-00 00:00:00'),
(308, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 02:59:52', '0000-00-00 00:00:00'),
(309, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 03:00:12', '0000-00-00 00:00:00'),
(310, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 03:05:11', '0000-00-00 00:00:00'),
(311, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 03:07:38', '0000-00-00 00:00:00'),
(312, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 03:08:37', '0000-00-00 00:00:00'),
(313, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 03:11:08', '0000-00-00 00:00:00'),
(314, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 59 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Ekonomi Bisnis buku : Borang', '2017-05-29 21:10:06', '0000-00-00 00:00:00'),
(315, 'Wahyu Saepuloh', 'Mengubah buku dengan id : 58 menjadi : Jenis : Fakultas tahun - 2017 fakultas/prodi : S2 Fakultas Teknik Informatika buku : Borang', '2017-05-29 21:11:03', '0000-00-00 00:00:00'),
(316, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 21:29:39', '0000-00-00 00:00:00'),
(317, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 21:49:20', '0000-00-00 00:00:00'),
(318, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 22:17:49', '0000-00-00 00:00:00'),
(319, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 22:18:35', '0000-00-00 00:00:00'),
(320, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 22:19:10', '0000-00-00 00:00:00'),
(321, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-29 22:19:44', '0000-00-00 00:00:00'),
(322, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 22:55:17', '0000-00-00 00:00:00'),
(323, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-05-29 22:55:25', '0000-00-00 00:00:00'),
(324, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-29 22:59:43', '0000-00-00 00:00:00'),
(325, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-30 01:04:20', '0000-00-00 00:00:00'),
(326, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 01:10:28', '0000-00-00 00:00:00'),
(327, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 01:11:45', '0000-00-00 00:00:00'),
(328, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 01:42:01', '0000-00-00 00:00:00'),
(329, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 03:07:14', '0000-00-00 00:00:00'),
(330, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 03:09:42', '0000-00-00 00:00:00'),
(331, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 03:10:48', '0000-00-00 00:00:00'),
(332, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 03:59:22', '0000-00-00 00:00:00'),
(333, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 04:00:12', '0000-00-00 00:00:00'),
(334, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-30 04:01:20', '0000-00-00 00:00:00'),
(335, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 04:01:50', '0000-00-00 00:00:00'),
(336, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 04:07:06', '0000-00-00 00:00:00'),
(337, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 23:25:59', '0000-00-00 00:00:00'),
(338, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-05-30 23:31:08', '0000-00-00 00:00:00'),
(339, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-30 23:31:37', '0000-00-00 00:00:00'),
(340, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-30 23:32:00', '0000-00-00 00:00:00'),
(341, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-05-31 01:50:39', '0000-00-00 00:00:00'),
(342, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-05-31 02:52:28', '0000-00-00 00:00:00'),
(343, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-05-31 02:52:32', '0000-00-00 00:00:00'),
(344, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-05-31 03:40:28', '0000-00-00 00:00:00'),
(345, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-02 02:41:30', '0000-00-00 00:00:00'),
(346, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-02 02:48:31', '0000-00-00 00:00:00'),
(347, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-02 02:48:36', '0000-00-00 00:00:00'),
(348, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-02 02:48:40', '0000-00-00 00:00:00'),
(349, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-02 03:03:37', '0000-00-00 00:00:00'),
(350, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-02 03:05:32', '0000-00-00 00:00:00'),
(351, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:43:34', '0000-00-00 00:00:00'),
(352, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 17:44:57', '0000-00-00 00:00:00'),
(353, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:50:19', '0000-00-00 00:00:00'),
(354, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 17:50:40', '0000-00-00 00:00:00'),
(355, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 17:50:58', '0000-00-00 00:00:00'),
(356, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 17:51:10', '0000-00-00 00:00:00'),
(357, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:51:21', '0000-00-00 00:00:00'),
(358, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:51:38', '0000-00-00 00:00:00'),
(359, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 17:51:59', '0000-00-00 00:00:00'),
(360, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 17:52:15', '0000-00-00 00:00:00'),
(361, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:52:24', '0000-00-00 00:00:00'),
(362, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 17:52:34', '0000-00-00 00:00:00'),
(363, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 17:53:06', '0000-00-00 00:00:00'),
(364, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 17:54:00', '0000-00-00 00:00:00'),
(365, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 17:54:16', '0000-00-00 00:00:00'),
(366, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 18:03:28', '0000-00-00 00:00:00'),
(367, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:06:21', '0000-00-00 00:00:00'),
(368, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:06:32', '0000-00-00 00:00:00'),
(369, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 18:06:42', '0000-00-00 00:00:00'),
(370, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 18:07:26', '0000-00-00 00:00:00'),
(371, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 18:07:34', '0000-00-00 00:00:00'),
(372, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-06-04 18:08:05', '0000-00-00 00:00:00'),
(373, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:08:12', '0000-00-00 00:00:00'),
(374, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:08:21', '0000-00-00 00:00:00'),
(375, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 18:08:28', '0000-00-00 00:00:00'),
(376, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:08:38', '0000-00-00 00:00:00'),
(377, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 18:09:04', '0000-00-00 00:00:00'),
(378, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 18:09:16', '0000-00-00 00:00:00'),
(379, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:40:50', '0000-00-00 00:00:00'),
(380, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 18:41:13', '0000-00-00 00:00:00'),
(381, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 18:43:17', '0000-00-00 00:00:00'),
(382, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 18:49:14', '0000-00-00 00:00:00'),
(383, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 18:49:22', '0000-00-00 00:00:00'),
(384, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 18:49:34', '0000-00-00 00:00:00'),
(385, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 18:49:51', '0000-00-00 00:00:00'),
(386, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 18:50:35', '0000-00-00 00:00:00'),
(387, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 18:50:41', '0000-00-00 00:00:00'),
(388, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 18:51:20', '0000-00-00 00:00:00'),
(389, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 18:58:13', '0000-00-00 00:00:00'),
(390, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 19:06:03', '0000-00-00 00:00:00'),
(391, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 19:06:08', '0000-00-00 00:00:00'),
(392, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 19:06:22', '0000-00-00 00:00:00'),
(393, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 19:06:28', '0000-00-00 00:00:00'),
(394, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 19:07:20', '0000-00-00 00:00:00'),
(395, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 19:07:29', '0000-00-00 00:00:00'),
(396, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 19:07:33', '0000-00-00 00:00:00'),
(397, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 19:07:39', '0000-00-00 00:00:00'),
(398, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 19:07:44', '0000-00-00 00:00:00'),
(399, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 19:07:51', '0000-00-00 00:00:00'),
(400, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 19:08:01', '0000-00-00 00:00:00'),
(401, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 19:08:16', '0000-00-00 00:00:00'),
(402, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 19:08:27', '0000-00-00 00:00:00'),
(403, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 19:08:33', '0000-00-00 00:00:00');
INSERT INTO `log` (`id`, `user`, `action`, `created_at`, `updated_at`) VALUES
(404, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 19:27:58', '0000-00-00 00:00:00'),
(405, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 19:28:08', '0000-00-00 00:00:00'),
(406, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-04 19:32:32', '0000-00-00 00:00:00'),
(407, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 19:40:25', '0000-00-00 00:00:00'),
(408, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-04 19:40:30', '0000-00-00 00:00:00'),
(409, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 19:43:17', '0000-00-00 00:00:00'),
(410, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-04 20:54:07', '0000-00-00 00:00:00'),
(411, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 21:15:35', '0000-00-00 00:00:00'),
(412, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 21:15:39', '0000-00-00 00:00:00'),
(413, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 21:15:42', '0000-00-00 00:00:00'),
(414, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 21:16:47', '0000-00-00 00:00:00'),
(415, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 21:17:21', '0000-00-00 00:00:00'),
(416, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-04 21:17:47', '0000-00-00 00:00:00'),
(417, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 21:55:32', '0000-00-00 00:00:00'),
(418, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 22:13:27', '0000-00-00 00:00:00'),
(419, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:25:29', '0000-00-00 00:00:00'),
(420, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:26:15', '0000-00-00 00:00:00'),
(421, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:30:17', '0000-00-00 00:00:00'),
(422, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-04 22:30:45', '0000-00-00 00:00:00'),
(423, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:32:49', '0000-00-00 00:00:00'),
(424, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:38:09', '0000-00-00 00:00:00'),
(425, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:44:24', '0000-00-00 00:00:00'),
(426, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 22:46:49', '0000-00-00 00:00:00'),
(427, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:18:22', '0000-00-00 00:00:00'),
(428, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:19:47', '0000-00-00 00:00:00'),
(429, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:24:11', '0000-00-00 00:00:00'),
(430, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:27:33', '0000-00-00 00:00:00'),
(431, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-04 23:29:19', '0000-00-00 00:00:00'),
(432, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-04 23:29:25', '0000-00-00 00:00:00'),
(433, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-04 23:29:32', '0000-00-00 00:00:00'),
(434, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-04 23:30:03', '0000-00-00 00:00:00'),
(435, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:30:29', '0000-00-00 00:00:00'),
(436, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-04 23:37:12', '0000-00-00 00:00:00'),
(437, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-04 23:42:26', '0000-00-00 00:00:00'),
(438, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-05 01:04:20', '0000-00-00 00:00:00'),
(439, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-05 01:04:41', '0000-00-00 00:00:00'),
(440, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-05 01:10:34', '0000-00-00 00:00:00'),
(441, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-05 03:01:30', '0000-00-00 00:00:00'),
(442, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-05 03:01:43', '0000-00-00 00:00:00'),
(443, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-05 03:02:15', '0000-00-00 00:00:00'),
(444, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-05 03:02:21', '0000-00-00 00:00:00'),
(445, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-05 03:02:42', '0000-00-00 00:00:00'),
(446, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-05 07:52:58', '0000-00-00 00:00:00'),
(447, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-05 22:19:06', '0000-00-00 00:00:00'),
(448, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-05 23:09:40', '0000-00-00 00:00:00'),
(449, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-05 23:11:48', '0000-00-00 00:00:00'),
(450, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-05 23:13:37', '0000-00-00 00:00:00'),
(451, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-05 23:15:05', '0000-00-00 00:00:00'),
(452, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-05 23:15:47', '0000-00-00 00:00:00'),
(453, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-05 23:43:52', '0000-00-00 00:00:00'),
(454, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-06 01:26:49', '0000-00-00 00:00:00'),
(455, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-06 01:31:34', '0000-00-00 00:00:00'),
(456, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:34:11', '0000-00-00 00:00:00'),
(457, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-06 01:34:36', '0000-00-00 00:00:00'),
(458, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:34:47', '0000-00-00 00:00:00'),
(459, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:56:00', '0000-00-00 00:00:00'),
(460, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:56:11', '0000-00-00 00:00:00'),
(461, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:58:49', '0000-00-00 00:00:00'),
(462, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 01:59:21', '0000-00-00 00:00:00'),
(463, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-06 02:39:46', '0000-00-00 00:00:00'),
(464, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-06 02:40:29', '0000-00-00 00:00:00'),
(465, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-06 02:42:43', '0000-00-00 00:00:00'),
(466, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 02:42:47', '0000-00-00 00:00:00'),
(467, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-06 02:45:14', '0000-00-00 00:00:00'),
(468, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-06 02:46:08', '0000-00-00 00:00:00'),
(469, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-06 02:46:37', '0000-00-00 00:00:00'),
(470, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 02:50:17', '0000-00-00 00:00:00'),
(471, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-06 02:50:21', '0000-00-00 00:00:00'),
(472, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 02:50:59', '0000-00-00 00:00:00'),
(473, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 03:04:21', '0000-00-00 00:00:00'),
(474, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-06 03:05:09', '0000-00-00 00:00:00'),
(475, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-06 03:05:19', '0000-00-00 00:00:00'),
(476, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-06 03:05:27', '0000-00-00 00:00:00'),
(477, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-06 03:05:57', '0000-00-00 00:00:00'),
(478, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-06 03:06:12', '0000-00-00 00:00:00'),
(479, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 20:37:28', '0000-00-00 00:00:00'),
(480, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 20:39:00', '0000-00-00 00:00:00'),
(481, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 20:39:44', '0000-00-00 00:00:00'),
(482, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-07 20:40:08', '0000-00-00 00:00:00'),
(483, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 20:40:44', '0000-00-00 00:00:00'),
(484, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 20:59:05', '0000-00-00 00:00:00'),
(485, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:02:01', '0000-00-00 00:00:00'),
(486, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:07:34', '0000-00-00 00:00:00'),
(487, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:15:47', '0000-00-00 00:00:00'),
(488, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:19:19', '0000-00-00 00:00:00'),
(489, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:19:35', '0000-00-00 00:00:00'),
(490, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:19:51', '0000-00-00 00:00:00'),
(491, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 21:22:22', '0000-00-00 00:00:00'),
(492, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 21:22:50', '0000-00-00 00:00:00'),
(493, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:23:22', '0000-00-00 00:00:00'),
(494, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:23:36', '0000-00-00 00:00:00'),
(495, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:23:56', '0000-00-00 00:00:00'),
(496, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:24:35', '0000-00-00 00:00:00'),
(497, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:28:20', '0000-00-00 00:00:00'),
(498, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 21:28:34', '0000-00-00 00:00:00'),
(499, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 21:29:20', '0000-00-00 00:00:00'),
(500, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 21:29:59', '0000-00-00 00:00:00'),
(501, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:30:08', '0000-00-00 00:00:00'),
(502, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:30:19', '0000-00-00 00:00:00'),
(503, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:30:29', '0000-00-00 00:00:00'),
(504, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 21:31:01', '0000-00-00 00:00:00'),
(505, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:31:10', '0000-00-00 00:00:00'),
(506, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:31:18', '0000-00-00 00:00:00'),
(507, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:31:26', '0000-00-00 00:00:00'),
(508, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 21:32:49', '0000-00-00 00:00:00'),
(509, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:33:06', '0000-00-00 00:00:00'),
(510, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:33:16', '0000-00-00 00:00:00'),
(511, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-07 21:36:38', '0000-00-00 00:00:00'),
(512, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:38:16', '0000-00-00 00:00:00'),
(513, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 21:38:31', '0000-00-00 00:00:00'),
(514, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:38:45', '0000-00-00 00:00:00'),
(515, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 21:46:42', '0000-00-00 00:00:00'),
(516, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 21:46:57', '0000-00-00 00:00:00'),
(517, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:47:41', '0000-00-00 00:00:00'),
(518, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-06-07 21:48:54', '0000-00-00 00:00:00'),
(519, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-07 21:49:00', '0000-00-00 00:00:00'),
(520, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 21:50:09', '0000-00-00 00:00:00'),
(521, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:50:25', '0000-00-00 00:00:00'),
(522, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 21:50:52', '0000-00-00 00:00:00'),
(523, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 21:51:07', '0000-00-00 00:00:00'),
(524, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 21:51:30', '0000-00-00 00:00:00'),
(525, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 21:52:53', '0000-00-00 00:00:00'),
(526, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 21:53:06', '0000-00-00 00:00:00'),
(527, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:01:08', '0000-00-00 00:00:00'),
(528, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:01:32', '0000-00-00 00:00:00'),
(529, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:01:46', '0000-00-00 00:00:00'),
(530, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 22:01:55', '0000-00-00 00:00:00'),
(531, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:02:09', '0000-00-00 00:00:00'),
(532, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:02:22', '0000-00-00 00:00:00'),
(533, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:02:58', '0000-00-00 00:00:00'),
(534, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:03:02', '0000-00-00 00:00:00'),
(535, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:03:19', '0000-00-00 00:00:00'),
(536, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:09:50', '0000-00-00 00:00:00'),
(537, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:10:12', '0000-00-00 00:00:00'),
(538, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:10:26', '0000-00-00 00:00:00'),
(539, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:11:01', '0000-00-00 00:00:00'),
(540, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:11:08', '0000-00-00 00:00:00'),
(541, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-07 22:11:29', '0000-00-00 00:00:00'),
(542, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:11:34', '0000-00-00 00:00:00'),
(543, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:15:40', '0000-00-00 00:00:00'),
(544, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:15:47', '0000-00-00 00:00:00'),
(545, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:15:53', '0000-00-00 00:00:00'),
(546, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:16:01', '0000-00-00 00:00:00'),
(547, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:16:14', '0000-00-00 00:00:00'),
(548, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-07 22:16:27', '0000-00-00 00:00:00'),
(549, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:17:20', '0000-00-00 00:00:00'),
(550, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:17:32', '0000-00-00 00:00:00'),
(551, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:17:43', '0000-00-00 00:00:00'),
(552, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:17:56', '0000-00-00 00:00:00'),
(553, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:18:02', '0000-00-00 00:00:00'),
(554, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:18:07', '0000-00-00 00:00:00'),
(555, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:18:13', '0000-00-00 00:00:00'),
(556, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:19:38', '0000-00-00 00:00:00'),
(557, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-07 22:26:52', '0000-00-00 00:00:00'),
(558, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:26:57', '0000-00-00 00:00:00'),
(559, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:27:25', '0000-00-00 00:00:00'),
(560, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:27:39', '0000-00-00 00:00:00'),
(561, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 22:27:57', '0000-00-00 00:00:00'),
(562, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 22:28:04', '0000-00-00 00:00:00'),
(563, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : ', '2017-06-07 22:54:48', '0000-00-00 00:00:00'),
(564, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : ', '2017-06-07 22:55:01', '0000-00-00 00:00:00'),
(565, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 22:55:32', '0000-00-00 00:00:00'),
(566, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-07 23:50:59', '0000-00-00 00:00:00'),
(567, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-07 23:51:03', '0000-00-00 00:00:00'),
(568, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-07 23:51:12', '0000-00-00 00:00:00'),
(569, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-07 23:51:31', '0000-00-00 00:00:00'),
(570, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-07 23:52:30', '0000-00-00 00:00:00'),
(571, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 3', '2017-06-08 01:11:09', '0000-00-00 00:00:00'),
(572, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-08 01:11:29', '0000-00-00 00:00:00'),
(573, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-08 01:12:00', '0000-00-00 00:00:00'),
(574, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-08 01:12:15', '0000-00-00 00:00:00'),
(575, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 3', '2017-06-08 01:12:25', '0000-00-00 00:00:00'),
(576, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 3', '2017-06-08 01:12:41', '0000-00-00 00:00:00'),
(577, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-08 01:13:00', '0000-00-00 00:00:00'),
(578, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-08 01:13:16', '0000-00-00 00:00:00'),
(579, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-08 01:13:55', '0000-00-00 00:00:00'),
(580, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-08 01:14:12', '0000-00-00 00:00:00'),
(581, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-08 01:14:19', '0000-00-00 00:00:00'),
(582, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-06-08 01:15:42', '0000-00-00 00:00:00'),
(583, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-08 01:16:23', '0000-00-00 00:00:00'),
(584, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-08 01:17:25', '0000-00-00 00:00:00'),
(585, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-08 01:17:35', '0000-00-00 00:00:00'),
(586, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 3', '2017-06-08 01:18:17', '0000-00-00 00:00:00'),
(587, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 3', '2017-06-14 01:56:38', '0000-00-00 00:00:00'),
(588, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 5', '2017-06-14 21:32:11', '0000-00-00 00:00:00'),
(589, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 5', '2017-06-14 21:32:31', '0000-00-00 00:00:00'),
(590, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-06-14 21:37:16', '0000-00-00 00:00:00'),
(591, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-06-14 21:40:31', '0000-00-00 00:00:00'),
(592, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 6', '2017-06-14 21:42:12', '0000-00-00 00:00:00'),
(593, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-06-14 21:42:43', '0000-00-00 00:00:00'),
(594, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 4', '2017-06-14 21:42:49', '0000-00-00 00:00:00'),
(595, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 7', '2017-06-14 21:45:58', '0000-00-00 00:00:00'),
(596, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 6', '2017-06-14 21:53:59', '0000-00-00 00:00:00'),
(597, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-14 21:54:06', '0000-00-00 00:00:00'),
(598, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 5', '2017-06-14 21:54:40', '0000-00-00 00:00:00'),
(599, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-06-14 21:54:45', '0000-00-00 00:00:00'),
(600, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-06-14 22:05:41', '0000-00-00 00:00:00'),
(601, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-06-14 22:05:47', '0000-00-00 00:00:00'),
(602, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 7', '2017-06-14 22:05:57', '0000-00-00 00:00:00'),
(603, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 5', '2017-06-14 22:06:02', '0000-00-00 00:00:00'),
(604, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 6', '2017-06-14 22:06:16', '0000-00-00 00:00:00'),
(605, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-06-14 22:06:21', '0000-00-00 00:00:00'),
(606, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-06-14 22:06:26', '0000-00-00 00:00:00'),
(607, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-06-14 22:06:37', '0000-00-00 00:00:00'),
(608, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-06-14 22:06:41', '0000-00-00 00:00:00'),
(609, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 8', '2017-06-15 03:07:49', '0000-00-00 00:00:00'),
(610, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 8', '2017-06-15 03:08:07', '0000-00-00 00:00:00'),
(611, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 17', '2017-06-15 03:08:13', '0000-00-00 00:00:00'),
(612, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-06-15 03:08:25', '0000-00-00 00:00:00'),
(613, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-06-15 03:08:53', '0000-00-00 00:00:00'),
(614, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 18', '2017-06-15 03:09:05', '0000-00-00 00:00:00'),
(615, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-06-15 03:09:13', '0000-00-00 00:00:00'),
(616, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 9', '2017-06-15 03:09:24', '0000-00-00 00:00:00'),
(617, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-15 03:10:11', '0000-00-00 00:00:00'),
(618, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 11', '2017-06-15 03:10:19', '0000-00-00 00:00:00'),
(619, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-15 03:10:26', '0000-00-00 00:00:00'),
(620, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 9', '2017-06-15 03:11:07', '0000-00-00 00:00:00'),
(621, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 19', '2017-06-15 20:56:16', '0000-00-00 00:00:00'),
(622, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-15 20:56:25', '0000-00-00 00:00:00'),
(623, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-15 20:56:46', '0000-00-00 00:00:00'),
(624, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-15 20:57:01', '0000-00-00 00:00:00'),
(625, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-15 21:21:15', '0000-00-00 00:00:00'),
(626, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-06-15 21:21:23', '0000-00-00 00:00:00'),
(627, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-15 21:21:27', '0000-00-00 00:00:00'),
(628, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-15 21:40:02', '0000-00-00 00:00:00'),
(629, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-15 21:40:53', '0000-00-00 00:00:00'),
(630, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-15 21:40:58', '0000-00-00 00:00:00'),
(631, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-15 21:41:11', '0000-00-00 00:00:00'),
(632, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-06-15 21:41:24', '0000-00-00 00:00:00'),
(633, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-06-15 21:42:38', '0000-00-00 00:00:00'),
(634, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-06-15 21:42:44', '0000-00-00 00:00:00'),
(635, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 19', '2017-06-15 21:50:27', '0000-00-00 00:00:00'),
(636, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-06-15 21:50:43', '0000-00-00 00:00:00'),
(637, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-06-15 21:50:51', '0000-00-00 00:00:00'),
(638, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-06-15 21:51:01', '0000-00-00 00:00:00'),
(639, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-06-19 22:11:23', '0000-00-00 00:00:00'),
(640, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-06-19 22:11:41', '0000-00-00 00:00:00'),
(641, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 9', '2017-06-19 22:12:13', '0000-00-00 00:00:00'),
(642, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 26', '2017-06-20 02:19:25', '0000-00-00 00:00:00'),
(643, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 26', '2017-06-20 02:19:38', '0000-00-00 00:00:00'),
(644, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 27', '2017-06-20 02:19:49', '0000-00-00 00:00:00'),
(645, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 28', '2017-06-20 02:20:05', '0000-00-00 00:00:00'),
(646, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 7', '2017-06-20 02:20:52', '0000-00-00 00:00:00'),
(647, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 26', '2017-06-20 02:22:18', '0000-00-00 00:00:00'),
(648, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 26', '2017-06-20 02:22:25', '0000-00-00 00:00:00'),
(649, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-07-03 21:15:59', '0000-00-00 00:00:00'),
(650, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-07-03 21:16:05', '0000-00-00 00:00:00'),
(651, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-07-03 21:16:54', '0000-00-00 00:00:00'),
(652, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-07-03 21:16:59', '0000-00-00 00:00:00'),
(653, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 6', '2017-07-03 21:17:37', '0000-00-00 00:00:00'),
(654, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-07-03 21:17:43', '0000-00-00 00:00:00'),
(655, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-07-03 21:18:27', '0000-00-00 00:00:00'),
(656, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-07-03 21:19:09', '0000-00-00 00:00:00'),
(657, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-07-03 21:20:14', '0000-00-00 00:00:00'),
(658, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-03 23:18:42', '0000-00-00 00:00:00'),
(659, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-03 23:18:57', '0000-00-00 00:00:00'),
(660, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-03 23:20:06', '0000-00-00 00:00:00'),
(661, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 33', '2017-07-03 23:20:15', '0000-00-00 00:00:00'),
(662, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 32', '2017-07-03 23:25:51', '0000-00-00 00:00:00'),
(663, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 32', '2017-07-03 23:26:03', '0000-00-00 00:00:00'),
(664, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 32', '2017-07-03 23:33:43', '0000-00-00 00:00:00'),
(665, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 33', '2017-07-03 23:34:15', '0000-00-00 00:00:00'),
(666, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-03 23:34:53', '0000-00-00 00:00:00'),
(667, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 04:25:48', '0000-00-00 00:00:00'),
(668, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 20:45:41', '0000-00-00 00:00:00'),
(669, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 20:50:18', '0000-00-00 00:00:00'),
(670, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 20:52:33', '0000-00-00 00:00:00'),
(671, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 20:52:46', '0000-00-00 00:00:00'),
(672, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 15', '2017-07-04 20:52:58', '0000-00-00 00:00:00'),
(673, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 24', '2017-07-06 03:03:10', '0000-00-00 00:00:00'),
(674, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 24', '2017-07-06 03:03:17', '0000-00-00 00:00:00'),
(675, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 24', '2017-07-06 03:03:29', '0000-00-00 00:00:00'),
(676, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 24', '2017-07-06 03:03:39', '0000-00-00 00:00:00'),
(677, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 24', '2017-07-06 03:03:47', '0000-00-00 00:00:00'),
(678, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 25', '2017-07-06 03:04:10', '0000-00-00 00:00:00'),
(679, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 25', '2017-07-06 03:04:21', '0000-00-00 00:00:00'),
(680, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 25', '2017-07-06 03:04:44', '0000-00-00 00:00:00'),
(681, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 25', '2017-07-06 03:05:07', '0000-00-00 00:00:00'),
(682, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 25', '2017-07-06 03:05:15', '0000-00-00 00:00:00'),
(683, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 25', '2017-07-06 03:05:25', '0000-00-00 00:00:00'),
(684, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 100', '2017-07-10 21:57:54', '0000-00-00 00:00:00'),
(685, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 04:25:57', '0000-00-00 00:00:00'),
(686, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 04:26:59', '0000-00-00 00:00:00'),
(687, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 04:32:59', '0000-00-00 00:00:00'),
(688, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 07:23:31', '0000-00-00 00:00:00'),
(689, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 07:24:39', '0000-00-00 00:00:00'),
(690, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 07:24:53', '0000-00-00 00:00:00'),
(691, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 07:25:49', '0000-00-00 00:00:00'),
(692, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 07:26:03', '0000-00-00 00:00:00'),
(693, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 07:35:55', '0000-00-00 00:00:00'),
(694, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 07:51:00', '0000-00-00 00:00:00'),
(695, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 07:52:16', '0000-00-00 00:00:00'),
(696, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 09:21:57', '0000-00-00 00:00:00'),
(697, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 09:22:09', '0000-00-00 00:00:00'),
(698, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 09:22:42', '0000-00-00 00:00:00'),
(699, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 09:35:11', '0000-00-00 00:00:00'),
(700, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 09:35:24', '0000-00-00 00:00:00'),
(701, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-17 09:35:41', '0000-00-00 00:00:00'),
(702, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-17 09:35:52', '0000-00-00 00:00:00'),
(703, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 07:30:41', '0000-00-00 00:00:00'),
(704, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 07:34:37', '0000-00-00 00:00:00'),
(705, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 07:58:22', '0000-00-00 00:00:00'),
(706, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 07:58:43', '0000-00-00 00:00:00'),
(707, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 08:09:08', '0000-00-00 00:00:00'),
(708, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 08:09:15', '0000-00-00 00:00:00'),
(709, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 08:09:32', '0000-00-00 00:00:00'),
(710, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 08:09:38', '0000-00-00 00:00:00'),
(711, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 08:16:31', '0000-00-00 00:00:00'),
(712, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 08:16:38', '0000-00-00 00:00:00'),
(713, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 21:29:18', '0000-00-00 00:00:00'),
(714, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 21:29:51', '0000-00-00 00:00:00'),
(715, 'Wahyu Saepuloh', 'Mengubah detail dokumen apa aja deh', '2017-07-18 22:46:57', '0000-00-00 00:00:00'),
(716, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 22:47:24', '0000-00-00 00:00:00'),
(717, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 22:47:29', '0000-00-00 00:00:00'),
(718, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 22:47:37', '0000-00-00 00:00:00'),
(719, 'Wahyu Saepuloh', 'Mengubah detail dokumen ini cobain', '2017-07-18 22:48:09', '0000-00-00 00:00:00'),
(720, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID4', '2017-07-18 23:04:01', '0000-00-00 00:00:00'),
(721, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID2', '2017-07-18 23:04:14', '0000-00-00 00:00:00'),
(722, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 23:17:47', '0000-00-00 00:00:00'),
(723, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-18 23:17:47', '0000-00-00 00:00:00'),
(724, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 23:21:18', '0000-00-00 00:00:00'),
(725, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:21:26', '0000-00-00 00:00:00'),
(726, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:21:32', '0000-00-00 00:00:00'),
(727, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:21:43', '0000-00-00 00:00:00'),
(728, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 3', '2017-07-18 23:23:46', '0000-00-00 00:00:00'),
(729, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 23:23:57', '0000-00-00 00:00:00'),
(730, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-18 23:23:58', '0000-00-00 00:00:00'),
(731, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 23:25:21', '0000-00-00 00:00:00'),
(732, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:25:30', '0000-00-00 00:00:00'),
(733, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 23:27:20', '0000-00-00 00:00:00'),
(734, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-18 23:27:20', '0000-00-00 00:00:00'),
(735, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 23:27:27', '0000-00-00 00:00:00'),
(736, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:27:36', '0000-00-00 00:00:00'),
(737, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 23:28:19', '0000-00-00 00:00:00'),
(738, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-18 23:28:20', '0000-00-00 00:00:00'),
(739, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-18 23:47:43', '0000-00-00 00:00:00'),
(740, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-18 23:47:50', '0000-00-00 00:00:00'),
(741, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-18 23:48:13', '0000-00-00 00:00:00'),
(742, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-18 23:48:13', '0000-00-00 00:00:00'),
(743, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-19 00:25:07', '0000-00-00 00:00:00'),
(744, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-19 00:25:14', '0000-00-00 00:00:00'),
(745, 'Wahyu Saepuloh', 'Mengubah detail dokumen vjhjg', '2017-07-19 00:25:37', '0000-00-00 00:00:00'),
(746, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-19 00:26:47', '0000-00-00 00:00:00'),
(747, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-19 00:26:47', '0000-00-00 00:00:00'),
(748, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-19 02:00:55', '0000-00-00 00:00:00'),
(749, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-19 02:01:06', '0000-00-00 00:00:00'),
(750, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-19 02:01:19', '0000-00-00 00:00:00'),
(751, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-07-19 02:01:27', '0000-00-00 00:00:00'),
(752, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-07-19 02:01:44', '0000-00-00 00:00:00'),
(753, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 3', '2017-07-19 02:01:51', '0000-00-00 00:00:00'),
(754, 'Wahyu Saepuloh', 'Mengubah detail dokumen 3', '2017-07-19 02:02:04', '0000-00-00 00:00:00'),
(755, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 3', '2017-07-19 02:02:15', '0000-00-00 00:00:00'),
(756, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 4', '2017-07-19 02:02:26', '0000-00-00 00:00:00'),
(757, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-19 02:02:53', '0000-00-00 00:00:00'),
(758, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-19 02:02:53', '0000-00-00 00:00:00'),
(759, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-07-19 02:03:03', '0000-00-00 00:00:00'),
(760, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 2', '2017-07-19 02:03:03', '0000-00-00 00:00:00'),
(761, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-07-19 02:03:19', '0000-00-00 00:00:00'),
(762, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 3', '2017-07-19 02:03:19', '0000-00-00 00:00:00'),
(763, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-07-19 02:16:55', '0000-00-00 00:00:00'),
(764, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-07-19 02:17:52', '0000-00-00 00:00:00'),
(765, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 9', '2017-07-19 02:17:52', '0000-00-00 00:00:00'),
(766, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-19 02:42:54', '0000-00-00 00:00:00'),
(767, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-19 02:43:36', '0000-00-00 00:00:00'),
(768, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-19 02:43:36', '0000-00-00 00:00:00'),
(769, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 18', '2017-07-19 02:48:37', '0000-00-00 00:00:00'),
(770, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-20 04:00:51', '0000-00-00 00:00:00'),
(771, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-20 04:01:03', '0000-00-00 00:00:00'),
(772, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-07-20 04:02:56', '0000-00-00 00:00:00'),
(773, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-07-20 04:04:27', '0000-00-00 00:00:00'),
(774, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-20 04:08:33', '0000-00-00 00:00:00'),
(775, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-20 04:08:40', '0000-00-00 00:00:00'),
(776, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 5', '2017-07-20 04:32:21', '0000-00-00 00:00:00'),
(777, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 5', '2017-07-20 04:32:28', '0000-00-00 00:00:00'),
(778, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-07-20 04:33:01', '0000-00-00 00:00:00'),
(779, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-07-20 04:33:32', '0000-00-00 00:00:00'),
(780, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-20 04:34:11', '0000-00-00 00:00:00'),
(781, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-20 04:40:28', '0000-00-00 00:00:00'),
(782, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-20 04:40:29', '0000-00-00 00:00:00'),
(783, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-20 04:41:09', '0000-00-00 00:00:00'),
(784, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-20 04:43:06', '0000-00-00 00:00:00'),
(785, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-20 04:47:14', '0000-00-00 00:00:00'),
(786, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-20 04:48:35', '0000-00-00 00:00:00'),
(787, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-20 07:42:21', '0000-00-00 00:00:00'),
(788, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-20 07:44:07', '0000-00-00 00:00:00'),
(789, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-20 07:45:41', '0000-00-00 00:00:00'),
(790, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-20 07:45:41', '0000-00-00 00:00:00'),
(791, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 99', '2017-07-20 07:45:48', '0000-00-00 00:00:00'),
(792, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 02:39:00', '0000-00-00 00:00:00'),
(793, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 03:56:05', '0000-00-00 00:00:00'),
(794, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-24 03:56:33', '0000-00-00 00:00:00'),
(795, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-24 03:59:49', '0000-00-00 00:00:00'),
(796, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-24 03:59:49', '0000-00-00 00:00:00'),
(797, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 04:12:22', '0000-00-00 00:00:00'),
(798, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 04:16:53', '0000-00-00 00:00:00'),
(799, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 04:18:40', '0000-00-00 00:00:00'),
(800, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-24 04:18:45', '0000-00-00 00:00:00'),
(801, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-24 07:08:55', '0000-00-00 00:00:00'),
(802, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-24 07:26:30', '0000-00-00 00:00:00'),
(803, 'Wahyu Saepuloh', 'Mengubah detail dokumen w', '2017-07-24 07:44:48', '0000-00-00 00:00:00'),
(804, 'Wahyu Saepuloh', 'Mengubah detail dokumen w', '2017-07-24 07:45:15', '0000-00-00 00:00:00'),
(805, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-24 07:45:51', '0000-00-00 00:00:00'),
(806, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-24 07:45:51', '0000-00-00 00:00:00'),
(807, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 19', '2017-07-24 07:46:06', '0000-00-00 00:00:00'),
(808, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 19', '2017-07-24 07:46:12', '0000-00-00 00:00:00'),
(809, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 38', '2017-07-24 07:50:29', '0000-00-00 00:00:00'),
(810, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 00:01:49', '0000-00-00 00:00:00'),
(811, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 00:05:14', '0000-00-00 00:00:00'),
(812, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 00:05:56', '0000-00-00 00:00:00'),
(813, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 00:06:02', '0000-00-00 00:00:00'),
(814, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 00:39:51', '0000-00-00 00:00:00'),
(815, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 00:39:57', '0000-00-00 00:00:00'),
(816, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 00:40:24', '0000-00-00 00:00:00'),
(817, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-25 00:41:01', '0000-00-00 00:00:00'),
(818, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-07-25 00:41:08', '0000-00-00 00:00:00'),
(819, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 3', '2017-07-25 00:41:40', '0000-00-00 00:00:00'),
(820, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-07-25 00:41:52', '0000-00-00 00:00:00'),
(821, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-25 00:44:32', '0000-00-00 00:00:00'),
(822, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-25 00:45:21', '0000-00-00 00:00:00'),
(823, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-25 00:45:21', '0000-00-00 00:00:00'),
(824, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-25 00:45:28', '0000-00-00 00:00:00'),
(825, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-25 00:45:28', '0000-00-00 00:00:00'),
(826, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-07-25 00:45:32', '0000-00-00 00:00:00'),
(827, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 2', '2017-07-25 00:45:32', '0000-00-00 00:00:00'),
(828, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-25 00:45:42', '0000-00-00 00:00:00'),
(829, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-25 00:46:39', '0000-00-00 00:00:00'),
(830, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-25 00:46:39', '0000-00-00 00:00:00'),
(831, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-25 04:06:19', '0000-00-00 00:00:00'),
(832, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-07-25 04:07:12', '0000-00-00 00:00:00'),
(833, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 04:07:54', '0000-00-00 00:00:00'),
(834, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 04:08:01', '0000-00-00 00:00:00'),
(835, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-25 04:08:17', '0000-00-00 00:00:00'),
(836, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-07-25 04:08:28', '0000-00-00 00:00:00'),
(837, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-07-25 04:08:51', '0000-00-00 00:00:00'),
(838, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 3', '2017-07-25 04:09:00', '0000-00-00 00:00:00'),
(839, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-07-25 07:44:18', '0000-00-00 00:00:00'),
(840, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 9', '2017-07-25 07:44:18', '0000-00-00 00:00:00'),
(841, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-07-25 07:44:26', '0000-00-00 00:00:00'),
(842, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-07-25 08:02:52', '0000-00-00 00:00:00'),
(843, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 08:03:01', '0000-00-00 00:00:00'),
(844, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-07-25 08:03:05', '0000-00-00 00:00:00'),
(845, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-07-25 08:03:23', '0000-00-00 00:00:00'),
(846, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-07-25 08:03:31', '0000-00-00 00:00:00'),
(847, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-07-25 08:03:55', '0000-00-00 00:00:00'),
(848, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 3', '2017-07-25 08:04:02', '0000-00-00 00:00:00'),
(849, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 3', '2017-07-25 08:04:19', '0000-00-00 00:00:00'),
(850, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-07-25 08:04:35', '0000-00-00 00:00:00'),
(851, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-07-25 08:07:11', '0000-00-00 00:00:00'),
(852, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-07-25 08:07:35', '0000-00-00 00:00:00'),
(853, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 4', '2017-07-25 08:07:41', '0000-00-00 00:00:00'),
(854, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 5', '2017-07-25 08:08:20', '0000-00-00 00:00:00'),
(855, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 5', '2017-07-25 08:08:27', '0000-00-00 00:00:00'),
(856, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-07-25 08:08:40', '0000-00-00 00:00:00'),
(857, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 6', '2017-07-25 08:08:46', '0000-00-00 00:00:00'),
(858, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-07-25 08:08:56', '0000-00-00 00:00:00'),
(859, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 7', '2017-07-25 08:09:03', '0000-00-00 00:00:00'),
(860, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-07-25 08:09:11', '0000-00-00 00:00:00'),
(861, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 8', '2017-07-25 08:09:19', '0000-00-00 00:00:00'),
(862, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 9', '2017-07-25 08:09:36', '0000-00-00 00:00:00'),
(863, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 8', '2017-07-25 08:09:57', '0000-00-00 00:00:00'),
(864, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 15', '2017-07-25 08:10:05', '0000-00-00 00:00:00'),
(865, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 9', '2017-07-25 08:10:18', '0000-00-00 00:00:00'),
(866, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 10', '2017-07-25 08:11:06', '0000-00-00 00:00:00'),
(867, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 7', '2017-07-25 08:11:26', '0000-00-00 00:00:00'),
(868, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 7', '2017-07-25 08:11:27', '0000-00-00 00:00:00'),
(869, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 9', '2017-07-25 08:11:45', '0000-00-00 00:00:00'),
(870, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 98', '2017-07-25 08:15:27', '0000-00-00 00:00:00'),
(871, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 11', '2017-07-25 08:16:09', '0000-00-00 00:00:00'),
(872, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 11', '2017-07-25 08:16:17', '0000-00-00 00:00:00'),
(873, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 99', '2017-07-25 09:33:24', '0000-00-00 00:00:00'),
(874, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 99', '2017-07-25 09:33:53', '0000-00-00 00:00:00'),
(875, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 99', '2017-07-25 09:33:53', '0000-00-00 00:00:00'),
(876, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 12', '2017-07-25 09:34:20', '0000-00-00 00:00:00'),
(877, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 12', '2017-07-25 09:34:28', '0000-00-00 00:00:00');
INSERT INTO `log` (`id`, `user`, `action`, `created_at`, `updated_at`) VALUES
(878, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 14', '2017-07-25 09:34:45', '0000-00-00 00:00:00'),
(879, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 14', '2017-07-25 09:34:56', '0000-00-00 00:00:00'),
(880, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 20', '2017-07-25 09:35:14', '0000-00-00 00:00:00'),
(881, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 20', '2017-07-25 09:35:25', '0000-00-00 00:00:00'),
(882, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 51', '2017-07-25 09:35:41', '0000-00-00 00:00:00'),
(883, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 51', '2017-07-25 09:36:00', '0000-00-00 00:00:00'),
(884, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 51', '2017-07-25 09:36:00', '0000-00-00 00:00:00'),
(885, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 12', '2017-07-25 09:36:12', '0000-00-00 00:00:00'),
(886, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 12', '2017-07-25 09:36:12', '0000-00-00 00:00:00'),
(887, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 14', '2017-07-25 09:36:19', '0000-00-00 00:00:00'),
(888, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 14', '2017-07-25 09:36:19', '0000-00-00 00:00:00'),
(889, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 20', '2017-07-25 09:36:25', '0000-00-00 00:00:00'),
(890, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 20', '2017-07-25 09:36:25', '0000-00-00 00:00:00'),
(891, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 98', '2017-07-25 09:36:38', '0000-00-00 00:00:00'),
(892, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 98', '2017-07-25 09:36:38', '0000-00-00 00:00:00'),
(893, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 11', '2017-07-25 09:36:48', '0000-00-00 00:00:00'),
(894, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 11', '2017-07-25 09:36:48', '0000-00-00 00:00:00'),
(895, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-07-25 09:36:54', '0000-00-00 00:00:00'),
(896, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 4', '2017-07-25 09:36:55', '0000-00-00 00:00:00'),
(897, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 5', '2017-07-25 09:37:06', '0000-00-00 00:00:00'),
(898, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 5', '2017-07-25 09:37:06', '0000-00-00 00:00:00'),
(899, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 6', '2017-07-25 09:37:20', '0000-00-00 00:00:00'),
(900, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 6', '2017-07-25 09:37:20', '0000-00-00 00:00:00'),
(901, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-07-25 09:37:44', '0000-00-00 00:00:00'),
(902, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 8', '2017-07-25 09:37:44', '0000-00-00 00:00:00'),
(903, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-07-25 09:37:58', '0000-00-00 00:00:00'),
(904, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 9', '2017-07-25 09:37:58', '0000-00-00 00:00:00'),
(905, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-07-25 09:38:28', '0000-00-00 00:00:00'),
(906, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-07-25 09:38:29', '0000-00-00 00:00:00'),
(907, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-07-25 09:38:42', '0000-00-00 00:00:00'),
(908, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-07-25 09:38:42', '0000-00-00 00:00:00'),
(909, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-07-25 09:38:53', '0000-00-00 00:00:00'),
(910, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 2', '2017-07-25 09:38:54', '0000-00-00 00:00:00'),
(911, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-07-25 09:39:08', '0000-00-00 00:00:00'),
(912, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 3', '2017-07-25 09:39:08', '0000-00-00 00:00:00'),
(913, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-03 02:26:49', '0000-00-00 00:00:00'),
(914, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-03 02:26:57', '0000-00-00 00:00:00'),
(915, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-08-03 02:27:21', '0000-00-00 00:00:00'),
(916, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-03 09:25:14', '0000-00-00 00:00:00'),
(917, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-03 09:25:14', '0000-00-00 00:00:00'),
(918, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-08-03 09:25:20', '0000-00-00 00:00:00'),
(919, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 8', '2017-08-03 09:25:20', '0000-00-00 00:00:00'),
(920, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-03 09:25:45', '0000-00-00 00:00:00'),
(921, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-03 09:25:52', '0000-00-00 00:00:00'),
(922, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-08-03 09:26:08', '0000-00-00 00:00:00'),
(923, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 8', '2017-08-03 09:26:16', '0000-00-00 00:00:00'),
(924, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 2', '2017-08-03 09:26:27', '0000-00-00 00:00:00'),
(925, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 8', '2017-08-03 09:26:36', '0000-00-00 00:00:00'),
(926, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-08-03 09:26:55', '0000-00-00 00:00:00'),
(927, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 10', '2017-08-03 09:27:04', '0000-00-00 00:00:00'),
(928, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-08-03 09:27:25', '0000-00-00 00:00:00'),
(929, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 10', '2017-08-03 09:27:25', '0000-00-00 00:00:00'),
(930, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-03 09:27:35', '0000-00-00 00:00:00'),
(931, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-03 09:27:35', '0000-00-00 00:00:00'),
(932, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-08-03 09:27:45', '0000-00-00 00:00:00'),
(933, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 8', '2017-08-03 09:27:45', '0000-00-00 00:00:00'),
(934, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-04 00:05:05', '0000-00-00 00:00:00'),
(935, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-04 00:05:12', '0000-00-00 00:00:00'),
(936, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-08-04 00:40:53', '0000-00-00 00:00:00'),
(937, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 8', '2017-08-04 00:41:03', '0000-00-00 00:00:00'),
(938, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-08-04 00:41:26', '0000-00-00 00:00:00'),
(939, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 8', '2017-08-04 00:41:26', '0000-00-00 00:00:00'),
(940, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-04 00:41:32', '0000-00-00 00:00:00'),
(941, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-04 00:41:32', '0000-00-00 00:00:00'),
(942, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-10 04:27:48', '0000-00-00 00:00:00'),
(943, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-10 04:27:56', '0000-00-00 00:00:00'),
(944, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-10 04:29:25', '0000-00-00 00:00:00'),
(945, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-10 04:29:25', '0000-00-00 00:00:00'),
(946, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-14 01:49:42', '0000-00-00 00:00:00'),
(947, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-14 01:49:52', '0000-00-00 00:00:00'),
(948, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 1', '2017-08-14 01:50:12', '0000-00-00 00:00:00'),
(949, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-14 01:50:23', '0000-00-00 00:00:00'),
(950, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-14 01:50:23', '0000-00-00 00:00:00'),
(951, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-14 01:52:03', '0000-00-00 00:00:00'),
(952, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-14 01:52:11', '0000-00-00 00:00:00'),
(953, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 1', '2017-08-14 01:59:15', '0000-00-00 00:00:00'),
(954, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-14 01:59:27', '0000-00-00 00:00:00'),
(955, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-14 01:59:27', '0000-00-00 00:00:00'),
(956, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-08-16 04:45:52', '0000-00-00 00:00:00'),
(957, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-08-16 04:46:17', '0000-00-00 00:00:00'),
(958, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-08-16 04:47:07', '0000-00-00 00:00:00'),
(959, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-08-16 04:47:15', '0000-00-00 00:00:00'),
(960, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-16 04:49:18', '0000-00-00 00:00:00'),
(961, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-08-16 04:49:18', '0000-00-00 00:00:00'),
(962, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-08-16 09:35:06', '0000-00-00 00:00:00'),
(963, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 2', '2017-08-16 09:35:07', '0000-00-00 00:00:00'),
(964, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-08-24 21:41:04', '0000-00-00 00:00:00'),
(965, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-09-07 03:03:50', '0000-00-00 00:00:00'),
(966, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-09-07 03:03:50', '0000-00-00 00:00:00'),
(967, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-09-25 21:55:41', '0000-00-00 00:00:00'),
(968, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-09-25 21:55:41', '0000-00-00 00:00:00'),
(969, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-10-01 22:32:34', '0000-00-00 00:00:00'),
(970, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-10-01 22:46:00', '0000-00-00 00:00:00'),
(971, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-10-01 22:47:29', '0000-00-00 00:00:00'),
(972, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 1', '2017-10-01 23:27:29', '0000-00-00 00:00:00'),
(973, 'Wahyu Saepuloh', 'Menghapus uploadisian dengan ID Butir 1', '2017-10-02 23:02:24', '0000-00-00 00:00:00'),
(974, 'Wahyu Saepuloh', 'Menghapus uploadisian dengan ID Butir 1', '2017-10-03 01:38:08', '0000-00-00 00:00:00'),
(975, 'Wahyu Saepuloh', 'Menghapus uploadisian dengan ID Butir 1', '2017-10-03 03:36:21', '0000-00-00 00:00:00'),
(976, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-10-12 03:55:21', '0000-00-00 00:00:00'),
(977, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID Butir 1', '2017-10-12 03:55:21', '0000-00-00 00:00:00'),
(978, 'Wahyu Saepuloh', 'Menghapus uploadisian dengan ID Butir 1', '2017-10-12 03:58:21', '0000-00-00 00:00:00'),
(979, 'Dr. Rila Mandala', 'Berhasil menambah User Baru', '2017-10-22 23:02:13', '0000-00-00 00:00:00'),
(980, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-11-01 20:45:18', '0000-00-00 00:00:00'),
(981, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 2', '2017-11-01 20:46:16', '0000-00-00 00:00:00'),
(982, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 3', '2017-11-01 20:46:22', '0000-00-00 00:00:00'),
(983, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 4', '2017-11-01 20:46:30', '0000-00-00 00:00:00'),
(984, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 5', '2017-11-01 20:46:37', '0000-00-00 00:00:00'),
(985, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 6', '2017-11-01 20:46:44', '0000-00-00 00:00:00'),
(986, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 7', '2017-11-01 20:46:51', '0000-00-00 00:00:00'),
(987, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 8', '2017-11-01 20:46:58', '0000-00-00 00:00:00'),
(988, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 9', '2017-11-01 20:47:14', '0000-00-00 00:00:00'),
(989, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 34', '2017-11-01 20:49:01', '0000-00-00 00:00:00'),
(990, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 35', '2017-11-01 20:49:06', '0000-00-00 00:00:00'),
(991, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 36', '2017-11-01 20:49:09', '0000-00-00 00:00:00'),
(992, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 37', '2017-11-01 20:49:12', '0000-00-00 00:00:00'),
(993, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 38', '2017-11-01 20:49:15', '0000-00-00 00:00:00'),
(994, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 39', '2017-11-01 20:49:18', '0000-00-00 00:00:00'),
(995, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 40', '2017-11-01 20:49:21', '0000-00-00 00:00:00'),
(996, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 41', '2017-11-01 20:49:24', '0000-00-00 00:00:00'),
(997, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 24', '2017-11-01 20:50:27', '0000-00-00 00:00:00'),
(998, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 25', '2017-11-01 20:50:34', '0000-00-00 00:00:00'),
(999, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 26', '2017-11-01 20:50:45', '0000-00-00 00:00:00'),
(1000, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 27', '2017-11-01 20:50:52', '0000-00-00 00:00:00'),
(1001, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 28', '2017-11-01 20:51:05', '0000-00-00 00:00:00'),
(1002, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-11-01 21:07:25', '0000-00-00 00:00:00'),
(1003, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-11-01 21:20:30', '0000-00-00 00:00:00'),
(1004, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-02 03:35:24', '0000-00-00 00:00:00'),
(1005, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 1', '2017-11-02 03:49:03', '0000-00-00 00:00:00'),
(1006, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-02 06:01:28', '0000-00-00 00:00:00'),
(1007, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-02 06:38:51', '0000-00-00 00:00:00'),
(1008, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 2', '2017-11-02 06:39:18', '0000-00-00 00:00:00'),
(1009, 'Wahyu Saepuloh', 'menghapus Butir dengan ID 1', '2017-11-02 06:39:21', '0000-00-00 00:00:00'),
(1010, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-11-02 06:40:27', '0000-00-00 00:00:00'),
(1011, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 2', '2017-11-02 06:40:48', '0000-00-00 00:00:00'),
(1012, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-02 17:25:33', '0000-00-00 00:00:00'),
(1013, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 1', '2017-11-02 17:28:23', '0000-00-00 00:00:00'),
(1014, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-02 17:33:23', '0000-00-00 00:00:00'),
(1015, 'Wahyu Saepuloh', 'Menghapus dokumen dengan ID 1', '2017-11-02 17:33:43', '0000-00-00 00:00:00'),
(1016, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-11-02 17:35:35', '0000-00-00 00:00:00'),
(1017, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 2', '2017-11-02 17:45:57', '0000-00-00 00:00:00'),
(1018, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 2', '2017-11-02 17:47:05', '0000-00-00 00:00:00'),
(1019, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 2', '2017-11-02 17:48:51', '0000-00-00 00:00:00'),
(1020, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 3', '2017-11-02 17:53:31', '0000-00-00 00:00:00'),
(1021, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 4', '2017-11-02 17:57:26', '0000-00-00 00:00:00'),
(1022, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 4', '2017-11-02 18:02:28', '0000-00-00 00:00:00'),
(1023, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 5', '2017-11-02 18:06:39', '0000-00-00 00:00:00'),
(1024, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 5', '2017-11-02 18:08:18', '0000-00-00 00:00:00'),
(1025, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 6', '2017-11-02 18:10:01', '0000-00-00 00:00:00'),
(1026, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 7', '2017-11-02 18:14:16', '0000-00-00 00:00:00'),
(1027, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 8', '2017-11-02 18:25:57', '0000-00-00 00:00:00'),
(1028, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 9', '2017-11-02 18:29:28', '0000-00-00 00:00:00'),
(1029, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-02 21:18:48', '0000-00-00 00:00:00'),
(1030, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 10', '2017-11-02 21:43:36', '0000-00-00 00:00:00'),
(1031, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 14', '2017-11-02 22:11:44', '0000-00-00 00:00:00'),
(1032, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 21', '2017-11-02 23:26:48', '0000-00-00 00:00:00'),
(1033, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 19', '2017-11-02 23:27:43', '0000-00-00 00:00:00'),
(1034, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 1', '2017-11-02 23:35:02', '0000-00-00 00:00:00'),
(1035, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 1', '2017-11-02 23:35:13', '0000-00-00 00:00:00'),
(1036, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 11', '2017-11-05 19:31:50', '0000-00-00 00:00:00'),
(1037, 'Wahyu Saepuloh', 'Menambahkan Dokumen pada butir ke : 1', '2017-11-05 19:33:10', '0000-00-00 00:00:00'),
(1038, 'Wahyu Saepuloh', 'Mengubah Isian dari butir : 14', '2017-11-05 20:33:43', '0000-00-00 00:00:00'),
(1039, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-11-07 21:35:47', '0000-00-00 00:00:00'),
(1040, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-07 22:01:11', '0000-00-00 00:00:00'),
(1041, 'Wahyu Saepuloh', 'menghapus Isian dengan id : 10', '2017-11-07 22:01:20', '0000-00-00 00:00:00'),
(1042, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 01:42:11', '0000-00-00 00:00:00'),
(1043, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 01:42:50', '0000-00-00 00:00:00'),
(1044, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 03:14:28', '0000-00-00 00:00:00'),
(1045, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 03:23:54', '0000-00-00 00:00:00'),
(1046, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 03:24:44', '0000-00-00 00:00:00'),
(1047, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-08 03:31:35', '0000-00-00 00:00:00'),
(1048, 'Wahyu Saepuloh', 'Menambahkan Isian pada butir ke : 10', '2017-11-12 21:34:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaif1`
--

CREATE TABLE `nilaif1` (
  `id` int(10) NOT NULL,
  `namapt` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `sebelum_akreditasi` varchar(100) NOT NULL,
  `nilai_akhir` int(10) NOT NULL,
  `setelah_akreditasi` varchar(100) NOT NULL,
  `nama_asesor` varchar(100) NOT NULL,
  `hasil_asesmen_kecukupan` varchar(100) NOT NULL,
  `id_hitungf1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploadisian`
--

CREATE TABLE `uploadisian` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_butir` int(10) UNSIGNED DEFAULT NULL,
  `isian` text COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploadisian_version`
--

CREATE TABLE `uploadisian_version` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kolom` int(10) UNSIGNED DEFAULT NULL,
  `isian` text COLLATE utf8_unicode_ci NOT NULL,
  `version_no` int(22) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Saepuloh', 'wahyu', '8cbbdc3fff847eee79abadc7b693b60e', 'wehaye94@gmail.com', 'Admin', NULL, '2017-04-17 16:17:04', '0000-00-00 00:00:00'),
(2, 'Wahyu Saepuloh', 'wehaye', '94404bab81894fb8fa6b1f10c8b2f84a', 'wsaepuloh94@gmail.com', 'Kaprodi', NULL, '2017-04-17 23:09:47', '0000-00-00 00:00:00'),
(3, 'Dr. Rila Mandala', 'rila', 'd2b839137dad99b2235b2bfe1dc9d90a', 'drrila@gmail.com', 'Assessor', NULL, '2017-10-22 23:02:13', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borang`
--
ALTER TABLE `borang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `butir`
--
ALTER TABLE `butir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_borang` (`id_borang`);

--
-- Indexes for table `document_version`
--
ALTER TABLE `document_version`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokumen` (`id_dokumen`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_id_butir_foreign` (`id_butir`);

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hitungf1`
--
ALTER TABLE `hitungf1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_id_butir_foreign` (`id_buku`);

--
-- Indexes for table `isian_16kolom`
--
ALTER TABLE `isian_16kolom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isian_16kolom_id_butir_foreign` (`id_butir`);

--
-- Indexes for table `isian_16kolom_version`
--
ALTER TABLE `isian_16kolom_version`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isian_16kolom_id_kolom_foreign` (`id_kolom`),
  ADD KEY `id_kolom` (`id_kolom`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kolom_2` (`id_kolom`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaif1`
--
ALTER TABLE `nilaif1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `uploadisian`
--
ALTER TABLE `uploadisian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploadisian_id_butir_foreign` (`id_butir`);

--
-- Indexes for table `uploadisian_version`
--
ALTER TABLE `uploadisian_version`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploadisian_id_kolom_foreign` (`id_kolom`),
  ADD KEY `id_kolom` (`id_kolom`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kolom_2` (`id_kolom`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borang`
--
ALTER TABLE `borang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `butir`
--
ALTER TABLE `butir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `document_version`
--
ALTER TABLE `document_version`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `hitungf1`
--
ALTER TABLE `hitungf1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `isian_16kolom`
--
ALTER TABLE `isian_16kolom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `isian_16kolom_version`
--
ALTER TABLE `isian_16kolom_version`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1049;
--
-- AUTO_INCREMENT for table `nilaif1`
--
ALTER TABLE `nilaif1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploadisian`
--
ALTER TABLE `uploadisian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploadisian_version`
--
ALTER TABLE `uploadisian_version`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `butir`
--
ALTER TABLE `butir`
  ADD CONSTRAINT `fk_id_borang` FOREIGN KEY (`id_borang`) REFERENCES `borang` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_id_butir_foreign` FOREIGN KEY (`id_butir`) REFERENCES `butir` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `isian_16kolom`
--
ALTER TABLE `isian_16kolom`
  ADD CONSTRAINT `fk_id_isian16kolom` FOREIGN KEY (`id_butir`) REFERENCES `butir` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uploadisian`
--
ALTER TABLE `uploadisian`
  ADD CONSTRAINT `fk_id_uploadisian` FOREIGN KEY (`id_butir`) REFERENCES `butir` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
