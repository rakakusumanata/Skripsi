-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Agu 2019 pada 08.58
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_krisis_air`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` varchar(50) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `isi`, `gambar`) VALUES
('B1', 'Antisipasi Bencana Kekeringan, Pemkab Bantul Siap Droping Air Bersih', '2019-02-20', 'Pemerintah Kabupaten Bantul melalui Dinas Sosial Pemberdayaan Perempuan dan Perlindungan Anak (Dinsos P3A) siap untuk menyalurkan bantuan air bersih guna mengantisipasi bencana kekeringan saat musim kemarau.', 'B1.jpg'),
('B2', 'Krisis Air Bersih Terus Meluas, Solusi dari Pemerintah Ditunggu', '2019-02-20', 'BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. ', 'B2.jpg'),
('B3', 'Sumur Mengering, Warga Ngrancah Bantul Kesulitan Air Bersih', '2019-02-21', 'Bantul - Sejumlah tempat di wilayah Kecamatan Imogiri, Bantul mengalami kekeringan di musim kemarau tahun ini. Salah satunya di Dusun Ngrancah Desa Sriharjo. Untuk keperluan sehari-hari, warga bergantung pada bantuan air bersih dan memanfaatkan air sungai. Sumur-sumur warga mulai mengering sejak 3 bulan lalu. Panut (38), warga RT 1 Ngrancah, Sriharjo, Imogiri, Bantul mengatakan sumur warga telah kering sejak beberapa bulan yang lalu di wilayah RT 1 dan 2. Sedangkan beberapa RT lain debit air sumur juga menyusut."Sudah sejak Idul Adha itu sumurnya kering, jadi sudah hampir 3 bulanan ini. Selain itu, baru tahun ini juga sumurnya pada kering," kata Panut saat ditemui di kediamannya, Senin (22/10/2018). "Ya mungkin karena pengaruh musim ini (kemarau) dan banyak sungai-sungai kering," imbuhnya', 'B3.jpg'),
('B4', 'Pelatihan Peningkatan dan Kualitas Balakar Desa Panggungharjo', '2019-07-16', '<p>bpbdkabbantul.go.id &ndash; Pelatihan peningkatan dan kualitas penanggulangan bencana menjadi salah &nbsp;satu program tahunan BPBD Kab. Bantul. Pelatihan ini meliputi teori dengan menghadirkan beberapa narasumber mengenai kebencanaan yang dilanjutkan dengan praktik sederhana dalam menghadapi bencana yang sering hadir di sekitar kita. Minggu ini, Selasa (14/05/2019) BPBD Kab. Bantul bekerjasama dengan Desa Panggungharjo dalam mengadakan kegiatan tersebut di Balai Desa Panggungharjo.</p>\\r\\n\\r\\n<p>Antusiasme dari masyarakat dalam pelatihan ini sangat besar, dibuktikan dengan jumlah masyarakat yang hadir mengikuti pelatihan dan dalam proses diskusi serta praktiknya. Bahkan banyak pula bapak serta ibu peserta yang heboh dalam pelaksanaan balakar kali ini. Selain mendapatkan informasi mengenai bencana di sekitar kita, mereka juga belajar cara untuk menanggulanginya.</p>\\r\\n\\r\\n<p>Dalam setiap pelatihan, BPBD juga senantiasa berupaya mengingatkan masyarakat untuk selalu waspada dengan bahaya yang dapat mengancam dan segera menghubungi BPBD atau pihak terkait untuk pertolongan lebih lanjut. (sekar/foto wiwin)</p>\\r\\n', 'B4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_nilai`
--

CREATE TABLE IF NOT EXISTS `bobot_nilai` (
`id_bobot` int(11) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `nilai_awal` int(11) DEFAULT NULL,
  `nilai_akhir` int(11) DEFAULT NULL,
  `bobot_nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `bobot_nilai`
--

INSERT INTO `bobot_nilai` (`id_bobot`, `id_kriteria`, `nilai_awal`, `nilai_akhir`, `bobot_nilai`) VALUES
(1, 1, 1, 1000, 1),
(2, 1, 1001, 4000, 2),
(3, 1, 4001, 8000, 3),
(4, 1, 8001, 14000, 4),
(5, 1, 14001, 50000, 5),
(6, 2, 1, 1000, 1),
(7, 2, 1001, 5000, 2),
(8, 2, 5001, 8000, 3),
(9, 2, 8001, 10000, 4),
(11, 2, 10001, 50000, 5),
(12, 3, 1, 5, 1),
(13, 3, 6, 70, 2),
(14, 3, 71, 130, 3),
(15, 3, 131, 200, 4),
(16, 3, 201, 500, 5),
(17, 4, 1, 1000, 6),
(18, 4, 1001, 1200, 5),
(19, 4, 1201, 1600, 4),
(20, 4, 1601, 2000, 3),
(21, 4, 2001, 5000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
`id_desa` int(50) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `kecamatan`, `lat`, `lng`) VALUES
(6, 'Selopamioro', 'imogiri', '-7.996224818583573', '110.40962664311303'),
(7, 'Sriharjo', 'imogiri', '-7.93867927721681', '110.37200275175269'),
(8, 'Wukirsari', 'imogiri', '-7.909740827266464', '110.40674000504987'),
(9, 'Kebon Agung', 'imogiri', '-7.926285399060438', '110.3719194457417'),
(10, 'Karang Tengah ', 'imogiri', '-7.936859352273923', '110.38884587150755'),
(11, 'Girirejo', 'imogiri', '-7.92779393389714', '110.40163501366737'),
(12, 'Karangtalun ', 'imogiri', '-7.921710296797082', '110.37710752617818'),
(13, 'Imogiri ', 'imogiri', '-7.917984682032468', '110.38465091628472'),
(14, 'Mangunan', 'Dlingo', '-7.934225979997805', '110.43408333957688'),
(15, 'Muntuk', 'Dlingo', '-7.913343538478865', '110.45817687572662'),
(16, 'Dlingo', 'Dlingo', '-7.93787438645189', '110.47006833343369'),
(17, 'Temuwuh', 'Dlingo', '-7.918449215339038', '110.46630440602837'),
(18, 'Terong', 'Dlingo', '-7.8736469305734404', '110.45632000294426'),
(19, 'Jatimulyo ', 'Dlingo', '-7.905071520386091', '110.48829428394708'),
(20, 'Wonokromo', 'Pleret', '-7.868039099301142', '110.38774380389759'),
(21, 'Pleret', 'Pleret', '-7.866542080812116', '110.3996284486368'),
(22, 'Segoroyoso ', 'Pleret', '-7.883326371338502', '110.40658401037376'),
(23, 'Bawuran ', 'Pleret', '-7.878448953867688', '110.42498630675015'),
(24, 'Wonolelo ', 'Pleret', '-7.882232353223118', '110.44326819022308'),
(25, 'Sitimulyo', 'Piyungan', '-7.844407213528566', '110.45632004151002'),
(26, 'Srimulyo', 'Piyungan', '-7.841418639048412', '110.4692854934259'),
(27, 'Srimartani', 'Piyungan', '-7.832634701054572', '110.49808268216714'),
(28, 'Bangunjiwo ', 'Kasihan', '-7.8433663755992065', '110.31087913956526'),
(29, 'Tirtonirmolo', 'Kasihan', '-7.826998048913899', '110.34376527170309'),
(30, 'Tamantirto', 'Kasihan', '-7.818466094688357', '110.32186833499895'),
(32, 'Ngestiharjo', 'Kasihan', '-7.799824595809557', '110.33688788834843');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id_hasil` int(50) NOT NULL,
  `id_perhitungan` int(50) NOT NULL,
  `id_desa` int(50) NOT NULL,
  `nilai_hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_perhitungan`, `id_desa`, `nilai_hasil`) VALUES
(1, 1, 6, 2.297),
(2, 1, 15, 2.052),
(3, 1, 26, 1.937),
(4, 1, 14, 1.807),
(5, 1, 32, 1.787),
(6, 1, 27, 1.645),
(7, 1, 28, 1.637),
(8, 1, 18, 1.507),
(9, 1, 25, 1.468),
(10, 1, 17, 1.357),
(11, 1, 30, 1.345),
(12, 1, 29, 1.345),
(13, 1, 23, 1.335),
(14, 1, 8, 1.318),
(15, 1, 21, 1.223),
(16, 1, 22, 1.223),
(17, 1, 19, 1.177),
(18, 1, 20, 1.168),
(19, 1, 24, 1.155),
(20, 1, 7, 1.073),
(21, 1, 16, 0.885),
(22, 1, 11, 0.678),
(23, 1, 10, 0.678),
(24, 1, 13, 0.678),
(25, 1, 12, 0.433),
(26, 1, 9, 0.433),
(27, 2, 6, 2.297),
(28, 2, 15, 2.052),
(29, 2, 26, 1.937),
(30, 2, 14, 1.807),
(31, 2, 32, 1.787),
(32, 2, 27, 1.645),
(33, 2, 28, 1.637),
(34, 2, 18, 1.507),
(35, 2, 25, 1.468),
(36, 2, 17, 1.357),
(37, 2, 30, 1.345),
(38, 2, 29, 1.345),
(39, 2, 23, 1.335),
(40, 2, 8, 1.318),
(41, 2, 21, 1.223),
(42, 2, 22, 1.223),
(43, 2, 19, 1.177),
(44, 2, 20, 1.168),
(45, 2, 24, 1.155),
(46, 2, 7, 1.073),
(47, 2, 16, 0.885),
(48, 2, 11, 0.678),
(49, 2, 10, 0.678),
(50, 2, 13, 0.678),
(51, 2, 12, 0.433),
(52, 2, 9, 0.433);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot_kriteria` float NOT NULL,
  `tipe_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `tipe_kriteria`) VALUES
(1, 'Jumlah Penduduk', 5, 'Benefit'),
(2, 'Jarak Distribusi ', 3, 'Benefit'),
(3, 'Ketinggian Daerah ', 3, 'Benefit'),
(4, 'Curah Hujan', 4, 'Cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_desa`
--

CREATE TABLE IF NOT EXISTS `kriteria_desa` (
`id_kriteria_desa` int(50) NOT NULL,
  `id_desa` int(50) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `nilai` double NOT NULL,
  `nilai_konversi` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data untuk tabel `kriteria_desa`
--

INSERT INTO `kriteria_desa` (`id_kriteria_desa`, `id_desa`, `id_kriteria`, `nilai`, `nilai_konversi`) VALUES
(25, 6, 1, 14629, 5),
(26, 6, 2, 10900, 5),
(27, 6, 3, 208, 5),
(28, 6, 4, 2073, 2),
(29, 7, 1, 9439, 4),
(30, 7, 2, 8900, 4),
(31, 7, 3, 33, 2),
(32, 7, 4, 1927, 3),
(33, 8, 1, 17627, 5),
(34, 8, 2, 8200, 4),
(35, 8, 3, 49, 2),
(36, 8, 4, 1951, 3),
(37, 9, 1, 3868, 2),
(38, 9, 2, 6700, 3),
(39, 9, 3, 30, 2),
(40, 9, 4, 1930, 3),
(41, 10, 1, 5339, 3),
(42, 10, 2, 7700, 3),
(43, 10, 3, 68, 2),
(44, 10, 4, 2000, 3),
(45, 11, 1, 4802, 3),
(46, 11, 2, 7300, 3),
(47, 11, 3, 57, 2),
(48, 11, 4, 1950, 3),
(49, 12, 1, 3023, 2),
(50, 12, 2, 5500, 3),
(51, 12, 3, 34, 2),
(52, 12, 4, 1935, 3),
(53, 13, 1, 4259, 3),
(54, 13, 2, 5400, 3),
(55, 13, 3, 39, 2),
(56, 13, 4, 1937, 3),
(57, 14, 1, 4705, 3),
(58, 14, 2, 12200, 5),
(59, 14, 3, 223, 5),
(60, 14, 4, 2294, 2),
(61, 15, 1, 8376, 4),
(62, 15, 2, 11400, 5),
(63, 15, 3, 374, 5),
(64, 15, 4, 2375, 2),
(65, 16, 1, 5828, 3),
(66, 16, 2, 4800, 2),
(67, 16, 3, 151, 4),
(68, 16, 4, 1982, 3),
(69, 17, 1, 7350, 3),
(70, 17, 2, 2700, 2),
(71, 17, 3, 230, 5),
(72, 17, 4, 2056, 2),
(73, 18, 1, 5592, 3),
(74, 18, 2, 5400, 3),
(75, 18, 3, 369, 5),
(76, 18, 4, 2372, 2),
(77, 19, 1, 6965, 3),
(78, 19, 2, 3700, 2),
(79, 19, 3, 167, 4),
(80, 19, 4, 3119, 2),
(81, 20, 1, 14069, 5),
(82, 20, 2, 7700, 3),
(83, 20, 3, 63, 2),
(84, 20, 4, 1967, 3),
(85, 21, 1, 13322, 4),
(86, 21, 2, 10900, 5),
(87, 21, 3, 62, 2),
(88, 21, 4, 1965, 3),
(89, 22, 1, 8833, 4),
(90, 22, 2, 10800, 5),
(91, 22, 3, 60, 2),
(92, 22, 4, 1953, 3),
(93, 23, 1, 6347, 3),
(94, 23, 2, 12000, 5),
(95, 23, 3, 135, 4),
(96, 23, 4, 1953, 3),
(97, 24, 1, 4780, 3),
(98, 24, 2, 13400, 5),
(99, 24, 3, 84, 3),
(100, 24, 4, 1957, 3),
(101, 25, 1, 17428, 5),
(102, 25, 2, 10900, 5),
(103, 25, 3, 69, 2),
(104, 25, 4, 1974, 3),
(105, 26, 1, 17423, 5),
(106, 26, 2, 16600, 5),
(107, 26, 3, 106, 3),
(108, 26, 4, 2103, 2),
(109, 27, 1, 16684, 5),
(110, 27, 2, 18900, 5),
(111, 27, 3, 87, 3),
(112, 27, 4, 1965, 3),
(113, 28, 1, 26177, 5),
(114, 28, 2, 8000, 3),
(115, 28, 3, 81, 3),
(116, 28, 4, 2015, 2),
(117, 29, 1, 23240, 5),
(118, 29, 2, 5100, 3),
(119, 29, 3, 83, 3),
(120, 29, 4, 1721, 3),
(121, 30, 1, 22526, 5),
(122, 30, 2, 7200, 3),
(123, 30, 3, 89, 3),
(124, 30, 4, 1721, 3),
(125, 32, 1, 29803, 5),
(126, 32, 2, 8100, 4),
(127, 32, 3, 97, 3),
(128, 32, 4, 2067, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `alamat`, `email`, `password`, `level`) VALUES
(1, 'Putra Atmaja', 'operator', 'Mundu Jl Apel Yogyakarta', 'Putra_Atmaja11@yahoo.com', '4b583376b2767b923c3e1da60d10de59', 'operator'),
(2, 'Syaka Firman Syah', 'pimpinan', 'Bantul', 'SyakaFirmansyah@gmail.com', '90973652b88fe07d05a4304f0a945de8', 'pimpinan'),
(3, 'Raka Kusumanata', 'admin', 'Sleman, Yogyakarta', 'bagaskuncoro@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE IF NOT EXISTS `perhitungan` (
  `id_perhitungan` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `tanggal`, `id`) VALUES
(1, '2019-07-23', 2),
(2, '2019-08-23', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_bpbd`
--

CREATE TABLE IF NOT EXISTS `profil_bpbd` (
`id_profil_bpbd` int(11) NOT NULL,
  `judul_profil` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `profil_bpbd`
--

INSERT INTO `profil_bpbd` (`id_profil_bpbd`, `judul_profil`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'Sejarah Terbentuknya BPBD Kabupaten Bantul', 'Sejarah Terbentuknya Badan Penanggulangan Bencana Daerah Kabupaten Bantul – Kegiatan respon penanggulangan bencana baik yang bersifat lokal maupun lintas wilayahpernah dilaksanakan oleh Kabupaten Bantul. SAR merupakan satuan tugas yang dibentuk olehBPBD Bantul yang pernah turut serta dalam respon bencana gempa bumi tsunami aceh, tanah longsordi Jawa tengah sampai dengan respon Erupsi Gunung Merapi. Gempa bumi dengan kekuatan 5,9 SR padatanggal 27 Mei 2006 memiliki nilai historis tersendiri bagi pemerintah dan masyarakat Bantul,karena bencana ini terjadi di Bantul dan mengakibatkan ribuan masyarakat bantul menjadi korbandan kerugian harta benda mencapai ratusan juta. Dengan bekal semangat dan budaya ke-gotongroyong-an masyarakat bantul, membuktikan bahwa Bantul dapat bangkit dengan cepat, dan hanyamembutuhkan waktu 2 (dua) tahun mayarakat bantul telah pulih dan beraktivitas seperti sebelumterjadinya bencana gempa. \r\n\r\n\r\n\r\nBanyaknya korban jiwa dan kerugian yang ditimbulkan oleh gempa 27 Mei disadari betul,bahwa waktu itu baik masyarakat maupun pemerintah Bantul belum siap dan Tangguh dalamMenghadapi bencana, budaya sadar bencana belum dimiliki dan diwariskan. Empat tahunsetelah gempa, sesuai amanat Undang-undang no. 24 Tahun 2007, Pemerintah KabupatenBantul bersama DPRD Kabupaten Bantul telah membuat Perda No. 05 Tahun 2010 TentangPenanggulangan Bencana dan Perda No. 06 Tahun 2010 Tentang Pembentukan OrganisasiBadan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bantul. Sehingga dalam tahap ini,pemerintah Kabupaten Bantul telah memiliki lembaga yang bertugas khusus dalam penanggulanganBencana di masa-masa mendatang. \r\n', '2019-02-24', '1.jpg'),
(2, 'TUGAS DAN FUNGSI', 'Tugas  BPBD Kabupaten Bantul Menetapkan pedoman dan pengarahan terhadap usaha Penanggulangan Bencana yang mencakup pencegahan bencana, penanganan darurat, rehabilitasi, serta rekonstruksi secara adil dan setara.', '2019-02-26', '2.JPG'),
(3, 'Visi dan Misi ', 'Visi â€œTerwujudnya Ketangguhan dan Kesiapsiagaan Masyarakat Kabupaten Bantul. Misi Melindungi masyarakat Kabupaten Bantul dari Ancaman Bencana melalui Pengurangan Resiko Bencana. 2. Membangun Sistem Penanggulangan Bencana yang handal. 3. Menyelenggarakan Penanggulangan Bencana secara terencana, terpadu dan menyeluruh', '2019-02-26', '3.jpg'),
(4, 'Struktur Organisasi ', '.', '2019-02-26', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
 ADD PRIMARY KEY (`id_bobot`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
 ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id_hasil`), ADD KEY `id_perhitungan` (`id_perhitungan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
 ADD PRIMARY KEY (`id_kriteria_desa`), ADD KEY `id_desa` (`id_desa`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
 ADD PRIMARY KEY (`id_perhitungan`), ADD KEY `id` (`id`);

--
-- Indexes for table `profil_bpbd`
--
ALTER TABLE `profil_bpbd`
 ADD PRIMARY KEY (`id_profil_bpbd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
MODIFY `id_desa` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
MODIFY `id_kriteria_desa` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil_bpbd`
--
ALTER TABLE `profil_bpbd`
MODIFY `id_profil_bpbd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bobot_nilai`
--
ALTER TABLE `bobot_nilai`
ADD CONSTRAINT `bobot_nilai_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_perhitungan`) REFERENCES `perhitungan` (`id_perhitungan`);

--
-- Ketidakleluasaan untuk tabel `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
ADD CONSTRAINT `kriteria_desa_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`),
ADD CONSTRAINT `kriteria_desa_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `perhitungan`
--
ALTER TABLE `perhitungan`
ADD CONSTRAINT `perhitungan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
