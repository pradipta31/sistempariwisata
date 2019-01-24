-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2018 at 01:49 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `jumlah_kunjungan` varchar(299) NOT NULL,
  `waktu` date NOT NULL,
  `asal` varchar(299) NOT NULL,
  `status` enum('nothing','report') DEFAULT 'nothing'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_user`, `id_wisata`, `jumlah_kunjungan`, `waktu`, `asal`, `status`) VALUES
(1, 5, 1, '178', '2018-12-19', 'Lokal', 'report'),
(2, 5, 1, '180', '2018-12-19', 'Internasional', 'report'),
(3, 5, 1, '200', '2018-11-19', 'Lokal', 'report'),
(4, 5, 1, '230', '2018-11-19', 'Internasional', 'report'),
(5, 5, 2, '190', '2018-12-19', 'Lokal', 'report'),
(6, 5, 3, '450', '2018-12-19', 'Lokal', 'report'),
(7, 5, 4, '12', '2017-10-31', 'Lokal', 'report'),
(8, 5, 5, '286', '2016-09-11', 'Lokal', 'report'),
(9, 5, 4, '208', '2018-11-19', 'Lokal', 'report');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `judul` varchar(299) NOT NULL,
  `jumlah_kunjungan` varchar(20) NOT NULL,
  `waktu` date NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `asal` varchar(299) NOT NULL,
  `deskripsi` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_user`, `id_wisata`, `judul`, `jumlah_kunjungan`, `waktu`, `tahun`, `bulan`, `asal`, `deskripsi`) VALUES
(1, 5, 1, 'Laporan Monumen Puputan Klungkung', '178', '2018-12-19', '2018', '01', 'Lokal', 'ini laporan per tanggal 19 desember 2018'),
(2, 5, 1, 'Laporan Monumen Puputan Klungkung', '180', '2019-12-19', '2019', '12', 'Internasional', 'Ini laporannya boss!'),
(3, 5, 1, 'Laporan Monumen Puputan Klungkung', '200', '2018-11-19', '2018', '11', 'Lokal', 'Ini laporannya boss!'),
(4, 5, 1, 'Laporan Monumen Puputan Klungkung', '230', '2018-11-19', '2018', '11', 'Internasional', 'Laporann siap komandan!'),
(5, 5, 2, 'Laporan Wisata Kerta Gosa', '190', '2018-12-19', '2018', '12', 'Lokal', 'Ini laporannya komandan!'),
(6, 5, 3, 'Laporan Wisata Goa Lawah', '450', '2018-12-19', '2018', '12', 'Lokal', 'Ini laporannya om!'),
(7, 5, 4, 'Laporan Wisata Nusa Lembongan', '12', '2017-10-31', '2017', '10', 'Lokal', 'Ini boss laporannya!'),
(8, 5, 5, 'Laporan Atuh Beach', '286', '2016-09-11', '2016', '09', 'Lokal', 'ini bro\r\n'),
(9, 5, 4, 'Laporan Nusa Lembongan', '208', '2018-11-19', '2018', '11', 'Lokal', 'bro');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(299) NOT NULL,
  `email` varchar(299) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `alamat` varchar(299) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `pax` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('nothing','approved','not_approved') DEFAULT 'nothing'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(299) NOT NULL,
  `email` varchar(299) NOT NULL,
  `password` varchar(299) NOT NULL,
  `username` varchar(50) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `alamat` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `jenis_tiket` varchar(299) NOT NULL,
  `harga` varchar(299) NOT NULL,
  `jumlah` varchar(299) NOT NULL,
  `tgl_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_user`, `id_wisata`, `jenis_tiket`, `harga`, `jumlah`, `tgl_terbit`) VALUES
(2, 1, 1, 'domestik', '500000', '150', '2018-12-06'),
(3, 1, 1, 'internasional', '5000', '250', '2018-12-06'),
(4, 1, 2, 'domestik', '10000', '1000', '2018-12-06'),
(5, 1, 2, 'internasional', '25000', 'Tidak Terbatas', '2018-12-06'),
(6, 1, 3, 'domestik', '10000', 'Tidak Terbatas', '2018-12-06'),
(7, 1, 4, 'domestik', '200000', 'Tidak Terbatas', '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(299) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(199) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `foto` varchar(299) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `email`, `password`, `role`, `foto`, `deskripsi`) VALUES
(1, 'I Gede Pradipta Adi Nugraha', 'pradipta31', 'pradipta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'kaka.jpg', 'Nothing last forever, We can change the future! It\'s show time!'),
(2, 'Elvoust Sakakibara', 'elvoust', 'elvoust@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'E.Hazard.jpg', 'Nothing last forever, We can change the future! It\'s show time!'),
(3, 'Sakura Kouji', 'sakura', 'sakura@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'agent', 'sakura kouji.png', 'Sakura Kouji'),
(4, 'Jane Doe', 'janedoe', 'janedoe@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'agent', NULL, 'Jane DOe'),
(5, 'John Doe', 'johndoe', 'johndoe@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'agent', NULL, 'John Doe!');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(299) NOT NULL,
  `file` varchar(299) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_user`, `nama`, `file`, `deskripsi`, `tgl_publish`) VALUES
(1, 1, 'Monumen Puputan Klungkung', 'monumen-puputan-klungkung.jpeg', 'Monumen Puputan Klungkung adalah sebuah taman kota yang dilengkapi dengan monumen tugu prasasti dan terletak di jantung Kota Semarapura - Kabupaten Klungkung. Monumen ini adalah symbol dari perjuangan rakyat kerajaan Klungkung dalam melawan bangsa penjajah yang mencoba menguasai wilayah mereka. Monumen Puputan Klungkung berada di tengah kota Semarapura atau tepatnya di jalan Untung Surapati - Klungkung. Lokasi ini merupakan posisi yang sangat strategis karena terletak tepat di tengah keramaian kota, pusat pertokoan di Kabupaten Klungkung, pasar tradisional, kantor pemerintahan Klungkung dan terletak berdampingan dengan objek wisata yang berupa bangunan dengan arsitektur kuno peninggalan sejarah, Kertha Gosa. Mengingat wilayahnya yang tidak begitu luas, kita hanya perlu berkendara sekitar kurang dari 10 menit untuk mencapai pusat kota Semarapura (ibukota Klungkung).\r\nMonumen Puputan Klungkung dibangun untuk mengenang jasa para pahlawan dan ksatria kerajaan Klungkung melawan serangan kolonialisme Belanda di zaman penjajahan. Monumen Puputan Klungkung merupakan tugu peringatan hari bersejarah Puputan Klungkung yang dulu terjadi pada hari Selasa Umanis 28 April 1908. Di sekitar areal monumen inilah dahulu terjadi perlawanan habis-habisan hingga tetes darah terakhir (puput) sehingga disebut sebagai perang puputan melawan penjajah Belanda.\r\n\r\nMonumen Puputan Klungkung nampak menjulang tinggi di tengah-tengah keramaian pusat kota Semarapura. Monumen ini memiliki tinggi sekitar 28 meter dan berdiri di areal tanah dengan luas sekitar 128 m2. Bentuk dari monumen ini umumnya sama seperti monumen-monumen peringatan di Bali dan mencirikan karya seni arsitektur Bali, yaitu terdiri dari lingga dan yoni. Pada bagian bawah lingga terdapat sebuah ruangan berpetak yang dilengkapi dengan pintu masuk bergapura sebanyak 4 buah yang saling berhubungan satu dengan yang lainnya. Pintu tersebut terletak di sebelah utara, timur, selatan dan barat dari bangunan lingga di bagian bawah. Di tengah-tengah antara ruangan berpetak dengan lingga terdapat bangunan kubah bersegi delapan yang alasnya dihiasi dengan kembang teratai sebanyak 19 buah. Dan secara keseluruhan angka-angka pada monumen ini akan mencerminkan pada tanggal bersejarah bagi masyarakat Klungkung 28-4-1908. Di sekitar monumen dilengkapi dengan bale bengong di setiap sudut halamannya dan biasanya bale bengong ini dimanfaatkan sebagai tempat belajar kelompok oleh para pelajar SD, SMP maupun SMA di Klungkung. \r\n\r\nSemarapura (Bali Post) - Monumen Puputan Klungkung berdiri tegak di jantung Kota Semarapura. Mendengar namanya, tentu monumen ini erat kaitannya dengan perang habis-habisan (puputan) yang terjadi di Kerajaan Klungkung pada zamannya. Selain didirikan untuk mengenang perjuangan Kerajaan Klungkung, monumen ini sebenarnya juga difungsikan sebagai objek wisata. Sayangnya, dengan status itu, tak satu pun wisatawan yang pernah masuk ke dalam monumen tersebut.\r\n\r\nJika dibandingkan dengan objek wisata Kertha Gosa, nilai sejarah yang terkandung di dalamnya sebenarnya menjadi satu kesatuan dalam sejarah keberadaan Kerajaan Klungkung. Sayangnya, perkembangan Kertha Gosa sebagai objek wisata tak berimbas pada objek wisata Monumen Puputan Klungkung yang sebenarnya hanya dipisahkan oleh Patung Catur Muka.\r\n\r\nPantauan di lokasi Jumat kemarin, di dalam monumen ini, terdapat ragam cerita kehidupan zaman Kerajaan Klungkung, mulai dari kehidupan sosial ekonomi rakyatnya, perkembangan seni budaya, hingga kerajaan ini memilih berperang dan akhirnya harus menyerah kepada penjajahan Belanda. Cerita-cerita itu tertata rapi di dinding dalam monumen, lengkap dengan ilustrasi patung-patung kecil bagaimana peristiwa itu terjadi.\r\n\r\nData Dinas Kebudayaan dan Pariwisata (Disbudpar) Klungkung menunjukkan, jumlah kunjungan ke objek wisata Kertha Gosa mencapai 60.262 wisatawan selama tahun 2012. Sementara, kunjungan wisatawan ke objek wisata Monumen Puputan Klungkung, sama sekali tidak ada. Disbudpar diduga hanya serius mengelola empat objek wisata sebagai pendongkrak PAD Klungkung dalam bidang pariwisata yakni Kertha Gosa, Goa Lawah, Levi Rafting, dan Kawasan Nusa Penida. Dari empat objek wisata itu, pendapatan asli daerah (PAD) tahun 2012 sebesar Rp 1.411.547.958.\r\n\r\nMantan Bupati Klungkung, Tjokorda Gde Ngurah, yang terlibat langsung dalam pendirian monumen ini, mengatakan monumen dibangun sebagai bukti fisik semangat perjuangan masyarakat Klungkung pada masa lalu. Tidak hanya itu, monumen ini juga sebagai salah satu ilustrasi peristiwa penting dalam perjalanan sejarah perjuangan rakyat Bali dalam menegakkan harga diri manusia Bali dan kedaulatan tanah Bali. Pada peristiwa perang antara Kerajaan Klungkung dan Belanda, saat itu ditutup dengan klimaks nan tragis yakni kematian raja, kerabat, dan sebagian rakyatnya yang lebih dikenal dengan sebutan Puputan Klungkung.\r\n\r\nPeristiwa ini kemudian selalu diperingati setiap 28 April sebagai hari Puputan Klungkung. Menurut pemerhati agama, adat dan budaya Bali, Dewa Soma, kehadiran Monumen Puputan Klungkung sudah menjadi sebuah ciri kepribadian Kota Semarapura, sebagai poros keindahan kota. Wujud monumen ini dikatakan mengacu pada konsep Lingga-Yoni dengan tinggi 28 meter, 4 pintu dan delapan anak tangga. \"Bilangan ini memiliki makna 28-4-1908, sebagai peristiwa Puputan Klungkung, yang di dalamnya terdapat patung Raja Klungkung Ida I Dewa Agung Jambe bersama pengikutnnya yang setia dan kisah perjuangan rakyat Klungkung dalam perang puputan melawan Belanda,\" katanya.\r\n\r\nMenurutnya, Monumen Puputan Klungkung berdiri megah, bukan sekadar peringatan pada masa lampau, namun bagaimana penerusnya mampu meneladani dan mempelajarinya sebagai sesuluh hidup. \"Sebab dari monumen itu, bisa dipelajari jiwa, semangat, pemikiran dan konsep serta ide para pendahulu tentang sastra, agama, budaya dan kepemimpinan membangun Klungkung,\" ucapnya. (kmb31)', '2018-12-19'),
(2, 1, 'Wisata Kerta Gosa', 'kerta-gosa-klungkung-bali.jpg', 'Objek wisata taman Kerta Gosa terkadang ditulis Kertha Gosa dulunya adalah bagian dari komplek bangunan kerajaan Klungkung. Komplek kerajaan Klungkung dibangun pada tahun 1686 oleh pemegang kekuasaan pertama yaitu Ida I Dewa Agung Jambe. Namun pada tahun 1908, hampir semua bangunan kerajaan Klungkung hancur karena invasi kolonial Belanda.\r\n\r\nAda tiga bangunan dari komplek kerajaan Klungkung yang masih tersisa dan tidak sampai hancur saat invasi kolonial Belanda. Ketiga bangunan tersebut antara lain:\r\n\r\n    1. Bangunan Medal Agung (pintu gerbang utama kerajaan Klungkung).\r\n    2. Bale Kambang (bangunan yang dikelilingi kolam yang disebut Taman Gili).\r\n    3. Bangunan / Bale Kertha Gosa.\r\n\r\nBale Kertha Gosa tidak langsung dibangun pada tahun 1686 bersamaan dengan pembangunan kerajaan Klungkung. Namun Bale Kertha Gosa dibangun pada akhir abad ke 18, dan lokasinya berada di ujung timur laut kawasan kerajaan Klungkung.\r\n\r\nPada jaman dahulu fungsi dari Bale Kertha Gosa adalah tempat diskusi mengenai situasi keamanan, keadilan dan kemakmuran wilayah kerajaan Bali, serta pada jaman dulu juga difungsikan sebagai tempat pengadilan di Bali.', '2018-12-19'),
(3, 1, 'Pura Goa Lawah', 'Sejarah-Pura-Goa-Lawah.jpg', 'Pura Goa Lawah di Klungkung merupakan pura dimana terdapat sebuah Goa yang didalamnya dihuni oleh sekumpulan kelelawar. Kata Goa berarti Goa/Gua (lubang) dan Lawah di Bali memiliki arti kelelawar, jadi Goa Lawah berarti Goa yang dihuni oleh Kelelawar. Dari ribuan jumlah pura di Bali, beberapa di antaranya berstatus Pura Khayangan Jagat. Salah satunya Pura Goa Lawah. Pura ini berdiri di wilayah pertemuan antara pantai dan perbukitan dengan sebuah goa yang dihuni beribu-ribu kelelawar. Lontar Padma Bhuwana menyebutkan Pura Goa Lawah merupakan salah satu kayangan jagat/sad kahyangan sebagai sthana Dewa Maheswara dan Sanghyang Basukih, dengan fungsi sebagai pusat nyegara-gunung.\r\nPemandangan di sekeliling Pura Goa Lawah\r\n\r\nDalam beberapa lontar, sekilas ada yang menyimpulkan secara garis besarnya bahwa pura-pura besar yang berstatus Kahyangan jagat dan Sad Kahyangan di Bali dibangun oleh pendeta terkenal, Mpu Kuturan pada tahun 929 Saka atau 1007 Masehi.[4] Hal itu terbukti dengan disebutnya Pura Goa Lawah dalam lontar Mpu Kuturan. Sebagaimana dihimpun Dinas Kebudayaan dan Pariwisata Kabupaten Klungkung yang saat ini tengah mempersiapkan penerbitan buku tentang Pura Goa Lawah, diceritakan, Mpu Kuturan datang ke Bali abad X yakni saat pemerintahan dipimpin Anak Wungsu, adik Raja Airlangga. Airlangga sendiri memerintah di Jawa Timur (1019-1042). Ketika tiba, Mpu Kuturan menemui banyak sekte di Bali. Melihat kenyataan itu, Mpu Kuturan kemudian mengembangkan konsep Tri Murti dengan tujuan mempersatukan semua sekte tersebut. Kedatangan Mpu Kuturan membawa perubahan yang sangat besar di wilayah ini, terutama mengajarkan masyarakat Bali tentang cara membuat pemujaan terhadap Sang Hyang Widhi yang dikenal dengan sebutan kahyangan atau parahyangan.[5]\r\nPersembahyangan di Pura Goa Lawah\r\n\r\nDi samping nama Mpu Kuturan, patut juga dicatat perjalanan Danghyang Dwijendra atau Danghyang Nirartha yang dikenal juga dengan gelar Pedanda Sakti Wawu Rawuh. Maha pandita ini berada di Bali saat Bali dipimpin Raja Dalem Waturenggong (1460-1550 Masehi), seorang raja yang sangat jaya pada masanya dan membawa kejayaan Nusa Bali.[6] Danghyang Nirartha merupakan seorang pendeta yang melakukan tirthayatra ke seluruh pelosok Pulau Bali, termasuk juga ke Pulau Lombok dan Sumbawa.[7]\r\nPersembahyangan di Pura Goa Lawah\r\n\r\nKaitannya dengan Pura Goa Lawah. Lontar Dwijendra Tatwa menyebutkan perjalanan Danghyang Nirartha diawali dari Gelgel menuju Kusamba.[8] Tetapi, di Kusamba Danghyang Nirartha tidak berhenti. Perjalanannya berlanjut hingga ke Goa Lawah. Saat itulah, Danghyang Nirartha bisa melihat gunung yang indah. Perjalanan dihentikan. Sang pendeta masuk ke tengah Goa, melihat-lihat goa kelelawar yang jumlahnya ribuan. Di puncak gunung goa itu bunga-bunga bersinar, jatuh berserakan tertiup angin semilir, bagaikan ikut menambah keindahan perasaan sang pendeta yang baru tiba. Dari sana beliau memandang Pulau Nusa yang terlihat indah. Lalu membangun padmasana yang notebene merupakan tempat bersthana para Dewa. Pura Goa Lawah awalnya dipelihara dan dijaga Gusti Batan Waringin atas petunjuk Ida Panataran yang notebene putra dari Ida Tulus Dewa yang menjadi pemangku di Pura Besakih. Penunjukkan itu mengingat Goa Lawah memiliki hubungan benang merah dengan Pura Besakih. Pura Goa Lawah merupakan jalan keluar Ida Bhatara Hyang Basukih dari Gunung Agung tepatnya di Goa Raja, terutama ketika berkehendak masucian di pantai.\r\nUkiran swastika di Pura Goa Lawah\r\n\r\nJika menengok ke belakang yakni pada zaman Megalitikum, di mana pada zaman itu selain menghormati kekuatan gunung sebagai kekuatan alam yang telah menyatu dengan arwah nenek moyang yang mempunyai kekuatan gaib, juga menghormati kekuatan laut di samping kekuatan-kekuatan alam lainya, seperti batu besar, goa, campuhan, kelebutan dan lainnya. Dalam kehidupan masyarakat Bali yang kental dengan pengaruh dan sentuhan agama Hindu, pemujaan terhadap kekuatan segara-gunung memang merupakan dresta tua. Tetapi sampai saat ini masih bertahan dan terus berlanjut. Karena pada intinya, pemujaan terhadap Dewa Gunung atau Dewa Laut, sesungguhnya telah mencakup pemujaan kepada kekuatan alam yang notabene penghormatan yang amat lengkap. Atas dasar itulah, Pura yang awalnya sangat sederhana itu, kini lebih dikenal sebagai kekuatan alam yang bersatu dengan kekuatan magis arwah nenek moyang. Laut yang berada di depan pura, sekarang telah menyatu dengan segala kekuatan yang dihormati dan dipuja masyarakat guna mendapat ketentraman dan kesejahteraan hidup.[9]\r\n\r\nDari kilasan di atas, jelas bahwa Pura Goa Lawah memiliki sejarah yang cukup panjang. Berawal dari pemujaan alam goa kelelawar, gunung dan laut di zaman Megalitikum, lalu dikembangkan/ditata dan kemudian dibangun pelinggih-pelinggih sthana para Dewa dan Bhatara oleh Mpu Kuturan abad X kemudian disempurnakan lagi dengan membangun Padmasana oleh Danghyang Dwijendra pada abad XIV-XV. Lengkaplah keberadaan Pura Goa Lawah, seperti sekarang. Namun yang perlu dicatat, Nyegara-Gunung yang digelar di Pura Goa Lawah, mengandung makna terima kasih ke hadapan Sang Hyang Widhi dalam manifestasi Girinatha (pelindung gunung) dan Baruna sebagai penguasa laut, atas pemberian amerta baik kepada sang Dewa Pitaraâ€”jiwa leluhur yang telah suciâ€”maupun kepada sang Yajamana, Sang Tapini dan Sang Adrue Karya. Atas dasar konsep inilah Umat Hindu memuliakan gunung dan laut sebagai sumber penghidupan. Memuliakan gunung dan laut bukan berarti umat Hindu menyembah gunung dan laut, tetapi yang dipuja adalah Hyang Widhi dalam fungsinya sebagai pelindung gunung dan penguasa laut.[10] ', '2018-12-19'),
(4, 1, 'Nusa Lembongan', 'Nusa-Penida-island-tour.jpg', 'Nusa Lembongan sekitar 8 kilometer persegi di daerah dengan populasi permanen diperkirakan 5.000. [3] Dua belas kilometer dari Selat Badung memisahkan Nusa Lembongan dari Pulau Bali. Pulau ini dikelilingi oleh terumbu karang dengan pantai pasir putih dan tebing batu kapur rendah. Nusa Lembongan dipisahkan dari Nusa Ceningan oleh saluran muara dangkal yang sulit untuk menavigasi pada saat air surut. Tidak ada saluran air permanen di Nusa Lembongan. Ada jembatan gantung yang menghubungkan Nusa Lembongan dan Nusa Ceningan yang hanya berjalan kaki dan sepeda motor.\r\n\r\nAda tiga desa utama di pulau itu. Jungut Batu dan Mushroom Bay adalah pusat industri dan kegiatan wisata berbasis di pulau [4] sementara banyak penduduk lokal permanen tinggal di Desa Lembongan.\r\n\r\nDi sebelah timur, Selat Lombok memisahkan tiga pulau dari Lombok, dan menandai pembagian biogeografis antara fauna dari ecozone Indomalaya dan fauna Australasia yang berbeda. Transisi ini dikenal sebagai Garis Wallace, dinamai Alfred Russel Wallace, yang pertama kali mengusulkan zona transisi antara dua bioma utama ini.\r\n\r\nSisi timur laut pulau ini diapit oleh area mangrove yang relatif besar dengan luas sekitar 212 hektar. [5]\r\n\r\nNusa Lembongan dilayani oleh layanan perahu cepat langsung, sebagian besar dari kota resor Bali di pantai timur Sanur. Waktu penyeberangan adalah sekitar 30 menit dan layanan berjalan secara berkala selama siang hari. Kapal kargo yang lebih besar juga beroperasi setiap hari dari kota pelabuhan Bali, Padang Bai.\r\n\r\nPulau ini dihuni oleh sangat sedikit mobil. Untuk sumber utama transportasi adalah dengan skuter dan kaki, karena ukuran pulau yang kecil.\r\nEkonomi lokal\r\nBudidaya rumput laut di Nusa Lembongan\r\n\r\nEkonomi sebagian besar didasarkan pada pariwisata dan Nusa Lembongan adalah satu-satunya dari tiga pulau tetangga yang memiliki infrastruktur berbasis pariwisata yang signifikan. Ada juga pertanian subsisten dan perikanan [6] di pulau dan digunakan untuk menjadi industri mikro pertanian rumput laut, sampai baru-baru ini 2015, ketika karena pariwisata dan polusi itu menjadi tidak layak. [7]\r\n\r\nPulau ini juga berisi sejumlah guesthouses dan bahkan gym kecil [8].\r\nOceanic sunfish di perairan lepas Nusa Lembongan.\r\nMasalah konservasi\r\n\r\nKonservasi laut dianggap sangat penting untuk mempertahankan tingkat masa depan pariwisata di pulau itu dan pada bulan Februari 2009, sebuah LSM lokal dari Nusa Lembongan, difasilitasi oleh The Nature Conservancy Coral Triangle Center, membuka pusat komunitas di Nusa Lembongan. Perairan di sekitar Nusa Lembongan dan Nusa Penida memiliki setidaknya 247 spesies karang dan 562 spesies ikan karang. [9]\r\n\r\nInisiatif konservasi lainnya termasuk program pelepasan Olive Ridley Turtles yang terancam punah dari Sunset Beach di pantai barat selatan. [10] [11]', '2018-12-19'),
(5, 1, 'Atuh Beach', 'atuh-beach.jpg', 'Perbukitan dan kapur karang merupakan kondisi tanah di pulau ini, salah satunya gunung bukit tertinggi bernama Gunung Mundi yang terletak di Kecamatan Nusa Penida. Sumber air adalah â€œmata airâ€ dan sungai hanya terdapat di wilayah daratan Kabupaten Klungkung yang mengalir sepanjang tahun.\r\n\r\nDesa â€“ desa pesisir nusa penida di sepanjang pantai bagian utara berupa lahan datar dengan kemiringan 0 â€“ 3 % dari ketinggian lahan 0 â€“ 268 m dpl.\r\n\r\nSedangkan di Kecamatan Nusa Penida sama sekali tidak ada sungai. Sumber air di Kecamatan Nusa Penida adalah â€œmata airâ€ dan â€œair hujanâ€ yang ditampung dalam cubang oleh penduduk setempat. Kabupaten Klungkung termasuk beriklim tropis. Bulan-bulan basah dan bulan-bulan kering antara Kecamatan Nusa Penida dan Kabupaten Klungkung daratan sangat berbeda.\r\n\r\nInfrastruktur wisata dan pengembangan akses ke lokasi destinasi wisata sudah mulai tumbuh di bali 3 nusa ini. Keramahan local akan anda temui di setiap sudut bali 3 nusa ini, memiliki populasi 46,749 Jiwa (8.543 KK) pada sensus 2010, meliputi 202,8 km2 sudah mulai banyak perubahan sejak 10 tahun belakangan ini.\r\n\r\nSecara administratif, kecamatan di kabupaten klungkung ini terdiri dari 4 kecamatan besar (Kecamatan Klungkung, Kecamatan Banjarangkan, Kecamatan Dawan dan Kecamatan Nusa Penida). Kecamatan Nusa Penida terdiri dari tiga kepulauan yaitu pulau Nusa Penida, Pulau Lembongan dan Pulau Ceningan, terdiri dari 16 Desa Dinas, Pulau Nusa Penida bisa ditempuh dari empat lokasi dermaga ', '2018-12-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_wisata` (`id_wisata`) USING BTREE;

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `fk_id_wisata` (`id_wisata`),
  ADD KEY `fk_id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_id_wisata` (`id_wisata`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `fk_id_user` (`id_user`) USING BTREE,
  ADD KEY `fk_id_wisata` (`id_wisata`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
