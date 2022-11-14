-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jun 2019 pada 04.45
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
('berita1', 'Antisipasi Bencana Kekeringan, Pemkab Bantul Siap Droping Air Bersih', '2019-02-20', 'Pemerintah Kabupaten Bantul melalui Dinas Sosial Pemberdayaan Perempuan dan Perlindungan Anak (Dinsos P3A) siap untuk menyalurkan bantuan air bersih guna mengantisipasi bencana kekeringan saat musim kemarau.', 'bantul1.jpg'),
('berita2', 'Krisis Air Bersih Terus Meluas, Solusi dari Pemerintah Ditunggu', '2019-02-20', 'BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. ', 'bantul2.jpg'),
('berita3', 'Sumur Mengering, Warga Ngrancah Bantul Kesulitan Air Bersih', '2019-02-21', 'Bantul - Sejumlah tempat di wilayah Kecamatan Imogiri, Bantul mengalami kekeringan di musim kemarau tahun ini. Salah satunya di Dusun Ngrancah Desa Sriharjo. Untuk keperluan sehari-hari, warga bergantung pada bantuan air bersih dan memanfaatkan air sungai. Sumur-sumur warga mulai mengering sejak 3 bulan lalu. Panut (38), warga RT 1 Ngrancah, Sriharjo, Imogiri, Bantul mengatakan sumur warga telah kering sejak beberapa bulan yang lalu di wilayah RT 1 dan 2. Sedangkan beberapa RT lain debit air sumur juga menyusut."Sudah sejak Idul Adha itu sumurnya kering, jadi sudah hampir 3 bulanan ini. Selain itu, baru tahun ini juga sumurnya pada kering," kata Panut saat ditemui di kediamannya, Senin (22/10/2018). "Ya mungkin karena pengaruh musim ini (kemarau) dan banyak sungai-sungai kering," imbuhnya', 'bantul3.jpeg');

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
(52, 2, 9, 0.433),
(53, 3, 6, 2.297),
(54, 3, 15, 2.052),
(55, 3, 26, 1.937),
(56, 3, 14, 1.807),
(57, 3, 32, 1.787),
(58, 3, 27, 1.645),
(59, 3, 28, 1.637),
(60, 3, 18, 1.507),
(61, 3, 25, 1.468),
(62, 3, 17, 1.357),
(63, 3, 30, 1.345),
(64, 3, 29, 1.345),
(65, 3, 23, 1.335),
(66, 3, 8, 1.318),
(67, 3, 21, 1.223),
(68, 3, 22, 1.223),
(69, 3, 19, 1.177),
(70, 3, 20, 1.168),
(71, 3, 24, 1.155),
(72, 3, 7, 1.073),
(73, 3, 16, 0.885),
(74, 3, 11, 0.678),
(75, 3, 10, 0.678),
(76, 3, 13, 0.678),
(77, 3, 12, 0.433),
(78, 3, 9, 0.433),
(79, 4, 6, 2.297),
(80, 4, 15, 2.052),
(81, 4, 26, 1.937),
(82, 4, 14, 1.807),
(83, 4, 32, 1.787),
(84, 4, 27, 1.645),
(85, 4, 28, 1.637),
(86, 4, 18, 1.507),
(87, 4, 25, 1.468),
(88, 4, 17, 1.357),
(89, 4, 30, 1.345),
(90, 4, 29, 1.345),
(91, 4, 23, 1.335),
(92, 4, 8, 1.318),
(93, 4, 21, 1.223),
(94, 4, 22, 1.223),
(95, 4, 19, 1.177),
(96, 4, 20, 1.168),
(97, 4, 24, 1.155),
(98, 4, 7, 1.073),
(99, 4, 16, 0.885),
(100, 4, 11, 0.678),
(101, 4, 10, 0.678),
(102, 4, 13, 0.678),
(103, 4, 12, 0.433),
(104, 4, 9, 0.433);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot_kriteria` float NOT NULL,
  `tipe_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `tipe_kriteria`) VALUES
(5, 'Jumlah Penduduk', 5, 'Benefit'),
(6, 'Jarak Distribusi ', 3, 'Benefit'),
(7, 'Ketinggian Daerah ', 3, 'Benefit'),
(8, 'Curah Hujan', 4, 'Cost');

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
(25, 6, 5, 14629, 5),
(26, 6, 6, 10900, 5),
(27, 6, 7, 208, 5),
(28, 6, 8, 2073, 2),
(29, 7, 5, 9439, 4),
(30, 7, 6, 8900, 4),
(31, 7, 7, 33, 2),
(32, 7, 8, 1927, 3),
(33, 8, 5, 17627, 5),
(34, 8, 6, 8200, 4),
(35, 8, 7, 49, 2),
(36, 8, 8, 1951, 3),
(37, 9, 5, 3868, 2),
(38, 9, 6, 6700, 3),
(39, 9, 7, 30, 2),
(40, 9, 8, 1930, 3),
(41, 10, 5, 5339, 3),
(42, 10, 6, 7700, 3),
(43, 10, 7, 68, 2),
(44, 10, 8, 2000, 3),
(45, 11, 5, 4802, 3),
(46, 11, 6, 7300, 3),
(47, 11, 7, 57, 2),
(48, 11, 8, 1950, 3),
(49, 12, 5, 3023, 2),
(50, 12, 6, 5500, 3),
(51, 12, 7, 34, 2),
(52, 12, 8, 1935, 3),
(53, 13, 5, 4259, 3),
(54, 13, 6, 5400, 3),
(55, 13, 7, 39, 2),
(56, 13, 8, 1937, 3),
(57, 14, 5, 4705, 3),
(58, 14, 6, 12200, 5),
(59, 14, 7, 223, 5),
(60, 14, 8, 2294, 2),
(61, 15, 5, 8376, 4),
(62, 15, 6, 11400, 5),
(63, 15, 7, 374, 5),
(64, 15, 8, 2375, 2),
(65, 16, 5, 5828, 3),
(66, 16, 6, 4800, 2),
(67, 16, 7, 151, 4),
(68, 16, 8, 1982, 3),
(69, 17, 5, 7350, 3),
(70, 17, 6, 2700, 2),
(71, 17, 7, 230, 5),
(72, 17, 8, 2056, 2),
(73, 18, 5, 5592, 3),
(74, 18, 6, 5400, 3),
(75, 18, 7, 369, 5),
(76, 18, 8, 2372, 2),
(77, 19, 5, 6965, 3),
(78, 19, 6, 3700, 2),
(79, 19, 7, 167, 4),
(80, 19, 8, 3119, 2),
(81, 20, 5, 14069, 5),
(82, 20, 6, 7700, 3),
(83, 20, 7, 63, 2),
(84, 20, 8, 1967, 3),
(85, 21, 5, 13322, 4),
(86, 21, 6, 10900, 5),
(87, 21, 7, 62, 2),
(88, 21, 8, 1965, 3),
(89, 22, 5, 8833, 4),
(90, 22, 6, 10800, 5),
(91, 22, 7, 60, 2),
(92, 22, 8, 1953, 3),
(93, 23, 5, 6347, 3),
(94, 23, 6, 12000, 5),
(95, 23, 7, 135, 4),
(96, 23, 8, 1953, 3),
(97, 24, 5, 4780, 3),
(98, 24, 6, 13400, 5),
(99, 24, 7, 84, 3),
(100, 24, 8, 1957, 3),
(101, 25, 5, 17428, 5),
(102, 25, 6, 10900, 5),
(103, 25, 7, 69, 2),
(104, 25, 8, 1974, 3),
(105, 26, 5, 17423, 5),
(106, 26, 6, 16600, 5),
(107, 26, 7, 106, 3),
(108, 26, 8, 2103, 2),
(109, 27, 5, 16684, 5),
(110, 27, 6, 18900, 5),
(111, 27, 7, 87, 3),
(112, 27, 8, 1965, 3),
(113, 28, 5, 26177, 5),
(114, 28, 6, 8000, 3),
(115, 28, 7, 81, 3),
(116, 28, 8, 2015, 2),
(117, 29, 5, 23240, 5),
(118, 29, 6, 5100, 3),
(119, 29, 7, 83, 3),
(120, 29, 8, 1721, 3),
(121, 30, 5, 22526, 5),
(122, 30, 6, 7200, 3),
(123, 30, 7, 89, 3),
(124, 30, 8, 1721, 3),
(125, 32, 5, 29803, 5),
(126, 32, 6, 8100, 4),
(127, 32, 7, 97, 3),
(128, 32, 8, 2067, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(4, 'Satrio', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'Budi ', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator'),
(11, 'Anak Agung Ngurah Raka Kusumanata', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'pimpinan');

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
(1, '2019-06-11', 11),
(2, '2019-06-14', 11),
(3, '2019-06-14', 11),
(4, '2019-06-14', 11);

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
(1, 'Sejarah Terbentuknya BPBD Kabupaten Bantul', 'Sejarah Terbentuknya Badan Penanggulangan Bencana Daerah Kabupaten Bantul – Kegiatan respon penanggulangan bencana baik yang bersifat lokal maupun lintas wilayahpernah dilaksanakan oleh Kabupaten Bantul. SAR merupakan satuan tugas yang dibentuk olehBPBD Bantul yang pernah turut serta dalam respon bencana gempa bumi tsunami aceh, tanah longsordi Jawa tengah sampai dengan respon Erupsi Gunung Merapi. Gempa bumi dengan kekuatan 5,9 SR padatanggal 27 Mei 2006 memiliki nilai historis tersendiri bagi pemerintah dan masyarakat Bantul,karena bencana ini terjadi di Bantul dan mengakibatkan ribuan masyarakat bantul menjadi korbandan kerugian harta benda mencapai ratusan juta. Dengan bekal semangat dan budaya ke-gotongroyong-an masyarakat bantul, membuktikan bahwa Bantul dapat bangkit dengan cepat, dan hanyamembutuhkan waktu 2 (dua) tahun mayarakat bantul telah pulih dan beraktivitas seperti sebelumterjadinya bencana gempa. \r\n\r\n\r\n\r\nBanyaknya korban jiwa dan kerugian yang ditimbulkan oleh gempa 27 Mei disadari betul,bahwa waktu itu baik masyarakat maupun pemerintah Bantul belum siap dan Tangguh dalamMenghadapi bencana, budaya sadar bencana belum dimiliki dan diwariskan. Empat tahunsetelah gempa, sesuai amanat Undang-undang no. 24 Tahun 2007, Pemerintah KabupatenBantul bersama DPRD Kabupaten Bantul telah membuat Perda No. 05 Tahun 2010 TentangPenanggulangan Bencana dan Perda No. 06 Tahun 2010 Tentang Pembentukan OrganisasiBadan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bantul. Sehingga dalam tahap ini,pemerintah Kabupaten Bantul telah memiliki lembaga yang bertugas khusus dalam penanggulanganBencana di masa-masa mendatang. \r\n', '2019-02-24', 'bpbd1.jpg'),
(2, 'TUGAS DAN FUNGSI', 'Tugas  BPBD Kabupaten Bantul Menetapkan pedoman dan pengarahan terhadap usaha Penanggulangan Bencana yang mencakup pencegahan bencana, penanganan darurat, rehabilitasi, serta rekonstruksi secara adil dan setara.', '2019-02-26', 'tugasdanfungsi.JPG'),
(3, 'Visi dan Misi ', 'Visi â€œTerwujudnya Ketangguhan dan Kesiapsiagaan Masyarakat Kabupaten Bantul. Misi Melindungi masyarakat Kabupaten Bantul dari Ancaman Bencana melalui Pengurangan Resiko Bencana. 2. Membangun Sistem Penanggulangan Bencana yang handal. 3. Menyelenggarakan Penanggulangan Bencana secara terencana, terpadu dan menyeluruh', '2019-02-26', 'visimisi.jpg'),
(4, 'Struktur Organisasi ', '.', '2019-02-26', 'susunan.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

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
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
MODIFY `id_desa` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
MODIFY `id_kriteria_desa` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profil_bpbd`
--
ALTER TABLE `profil_bpbd`
MODIFY `id_profil_bpbd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

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
