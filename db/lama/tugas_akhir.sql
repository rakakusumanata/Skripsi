-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 04:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` varchar(50) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `isi`, `gambar`) VALUES
('berita1', 'Antisipasi Bencana Kekeringan, Pemkab Bantul Siap Droping Air Bersih', '2019-02-20', 'Pemerintah Kabupaten Bantul melalui Dinas Sosial Pemberdayaan Perempuan dan Perlindungan Anak (Dinsos P3A) siap untuk menyalurkan bantuan air bersih guna mengantisipasi bencana kekeringan saat musim kemarau.', 'bantul1.jpg'),
('berita2', 'Krisis Air Bersih Terus Meluas, Solusi dari Pemerintah Ditunggu', '2019-02-20', 'BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. BANTUL, KRJOGJA.com - Kekeringan yang melanda di Kabupaten Bantul makin meluas. Warga di dataran tinggi bahkan mulai kelabakan mencari air bersih untuk memenuhi kebutuhan sehari-hari. Jikapun persedian disumber air ada, namun debitnya sangat terbatas sekali. Kini warga sangat berharap Pemerintah Bantul melakukan droping air ke daerah kering. ', 'bantul2.jpg'),
('berita3', 'Sumur Mengering, Warga Ngrancah Bantul Kesulitan Air Bersih', '2019-02-21', 'Bantul - Sejumlah tempat di wilayah Kecamatan Imogiri, Bantul mengalami kekeringan di musim kemarau tahun ini. Salah satunya di Dusun Ngrancah Desa Sriharjo. Untuk keperluan sehari-hari, warga bergantung pada bantuan air bersih dan memanfaatkan air sungai. Sumur-sumur warga mulai mengering sejak 3 bulan lalu. Panut (38), warga RT 1 Ngrancah, Sriharjo, Imogiri, Bantul mengatakan sumur warga telah kering sejak beberapa bulan yang lalu di wilayah RT 1 dan 2. Sedangkan beberapa RT lain debit air sumur juga menyusut.\"Sudah sejak Idul Adha itu sumurnya kering, jadi sudah hampir 3 bulanan ini. Selain itu, baru tahun ini juga sumurnya pada kering,\" kata Panut saat ditemui di kediamannya, Senin (22/10/2018). \"Ya mungkin karena pengaruh musim ini (kemarau) dan banyak sungai-sungai kering,\" imbuhnya', 'bantul3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(50) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
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
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(50) NOT NULL,
  `id_perhitungan` int(50) NOT NULL,
  `id_desa` int(50) NOT NULL,
  `nilai_hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot_kriteria` float NOT NULL,
  `tipe_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `tipe_kriteria`) VALUES
(5, 'Jumlah Penduduk', 5, 'Benefit'),
(6, 'Jarak Distribusi ', 3, 'Benefit'),
(7, 'Ketinggian Daerah ', 3, 'Benefit'),
(8, 'Curah Hujan', 4, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_desa`
--

CREATE TABLE `kriteria_desa` (
  `id_kriteria_desa` int(50) NOT NULL,
  `id_desa` int(50) NOT NULL,
  `id_kriteria` int(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_desa`
--

INSERT INTO `kriteria_desa` (`id_kriteria_desa`, `id_desa`, `id_kriteria`, `nilai`) VALUES
(25, 6, 5, 14629),
(26, 6, 6, 10900),
(27, 6, 7, 208),
(28, 6, 8, 2073),
(29, 7, 5, 9439),
(30, 7, 6, 8900),
(31, 7, 7, 33),
(32, 7, 8, 1927),
(33, 8, 5, 17627),
(34, 8, 6, 8200),
(35, 8, 7, 49),
(36, 8, 8, 1951),
(37, 9, 5, 3868),
(38, 9, 6, 6700),
(39, 9, 7, 30),
(40, 9, 8, 1930),
(41, 10, 5, 5339),
(42, 10, 6, 7700),
(43, 10, 7, 68),
(44, 10, 8, 2000),
(45, 11, 5, 4802),
(46, 11, 6, 7300),
(47, 11, 7, 57),
(48, 11, 8, 1950),
(49, 12, 5, 3023),
(50, 12, 6, 5500),
(51, 12, 7, 34),
(52, 12, 8, 1935),
(53, 13, 5, 4259),
(54, 13, 6, 5400),
(55, 13, 7, 39),
(56, 13, 8, 1937),
(57, 14, 5, 4705),
(58, 14, 6, 12200),
(59, 14, 7, 223),
(60, 14, 8, 2294),
(61, 15, 5, 8376),
(62, 15, 6, 11400),
(63, 15, 7, 374),
(64, 15, 8, 2375),
(65, 16, 5, 5828),
(66, 16, 6, 4800),
(67, 16, 7, 151),
(68, 16, 8, 1982),
(69, 17, 5, 7350),
(70, 17, 6, 2700),
(71, 17, 7, 230),
(72, 17, 8, 2056),
(73, 18, 5, 5592),
(74, 18, 6, 5400),
(75, 18, 7, 369),
(76, 18, 8, 2372),
(77, 19, 5, 6965),
(78, 19, 6, 3700),
(79, 19, 7, 167),
(80, 19, 8, 3119),
(81, 20, 5, 14069),
(82, 20, 6, 7700),
(83, 20, 7, 63),
(84, 20, 8, 1967),
(85, 21, 5, 13322),
(86, 21, 6, 10900),
(87, 21, 7, 62),
(88, 21, 8, 1965),
(89, 22, 5, 8833),
(90, 22, 6, 10800),
(91, 22, 7, 60),
(92, 22, 8, 1953),
(93, 23, 5, 6347),
(94, 23, 6, 12000),
(95, 23, 7, 135),
(96, 23, 8, 1953),
(97, 24, 5, 4780),
(98, 24, 6, 13400),
(99, 24, 7, 84),
(100, 24, 8, 1957),
(101, 25, 5, 17428),
(102, 25, 6, 10900),
(103, 25, 7, 69),
(104, 25, 8, 1974),
(105, 26, 5, 17423),
(106, 26, 6, 16600),
(107, 26, 7, 106),
(108, 26, 8, 2103),
(109, 27, 5, 16684),
(110, 27, 6, 18900),
(111, 27, 7, 87),
(112, 27, 8, 1965),
(113, 28, 5, 26177),
(114, 28, 6, 8000),
(115, 28, 7, 81),
(116, 28, 8, 2015),
(117, 29, 5, 23240),
(118, 29, 6, 5100),
(119, 29, 7, 83),
(120, 29, 8, 1721),
(121, 30, 5, 22526),
(122, 30, 6, 7200),
(123, 30, 7, 89),
(124, 30, 8, 1721),
(125, 32, 5, 29803),
(126, 32, 6, 8100),
(127, 32, 7, 97),
(128, 32, 8, 2067);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(4, 'Satrio', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'Budi ', 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator'),
(11, 'Anak Agung Ngurah Raka Kusumanata', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_bpbd`
--

CREATE TABLE `profil_bpbd` (
  `id_profil_bpbd` int(11) NOT NULL,
  `judul_profil` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_bpbd`
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
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_perhitungan` (`id_perhitungan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
  ADD PRIMARY KEY (`id_kriteria_desa`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`),
  ADD KEY `id` (`id`);

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
  MODIFY `id_desa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
  MODIFY `id_kriteria_desa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profil_bpbd`
--
ALTER TABLE `profil_bpbd`
  MODIFY `id_profil_bpbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_perhitungan`) REFERENCES `perhitungan` (`id_perhitungan`);

--
-- Constraints for table `kriteria_desa`
--
ALTER TABLE `kriteria_desa`
  ADD CONSTRAINT `kriteria_desa_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`),
  ADD CONSTRAINT `kriteria_desa_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `perhitungan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
