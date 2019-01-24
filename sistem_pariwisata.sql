-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 06:21 AM
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
  `asal` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_user`, `id_wisata`, `jumlah_kunjungan`, `waktu`, `asal`) VALUES
(5, 3, 4, '150', '2018-12-08', 'Internasional');

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
  `tanggal` date NOT NULL,
  `bulan` varchar(299) NOT NULL,
  `tahun` varchar(299) NOT NULL,
  `asal` varchar(299) NOT NULL,
  `deskripsi` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_user`, `id_wisata`, `judul`, `jumlah_kunjungan`, `tanggal`, `bulan`, `tahun`, `asal`, `deskripsi`) VALUES
(1, 1, 2, 'Laporan Wisata air terjun kuning', '150', '2018-12-08', '12', '2018', 'Lokal', 'Ini laporan kunjungan wisata air terjun kuning per tanggal 8 desember 2018'),
(2, 3, 3, 'Laporan Wisata Tampak Siring Journey', '245', '2018-12-08', '12', '2019', 'Lokal', 'ini laporan jumlah kunjungan tampak siring journey per tanggal 8 desember 2018'),
(6, 3, 4, 'Laporan Wisata Klungkung', '500', '2018-12-09', '12', '2018', 'Internasional', 'ini laporannya boss!');

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
  `status` enum('approved','not_approved') DEFAULT 'not_approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_wisata`, `nama`, `email`, `handphone`, `alamat`, `tgl_pesanan`, `pax`, `tanggal`, `status`) VALUES
(1, 1, 'I Gede Pradipta Adi Nugraha', 'pradiptadipta31@gmail.com', '087861863842', 'Jl. Pratu Md. Rambug, Gg. Bija v', '2018-12-22', '5', '2018-12-07', 'approved'),
(2, 1, 'Pradipta', 'pradipta@gmail.com', '087861863842', 'Jl. Pratu Md. Rambug, Gg. Bija v', '2018-12-08', '5', '2018-12-07', 'approved'),
(3, 4, 'ROmi', 'romi@gmail.com', '099898989898', 'klungkung', '2018-12-10', '10', '2018-12-09', 'not_approved');

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

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `email`, `password`, `username`, `handphone`, `alamat`) VALUES
(1, 'Elvoust Sakakibara', 'elvoust@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'elvoust11', '087861863842', 'Jl. Pratu Md. Rambug, Gg. Bija v'),
(2, 'romi', 'romi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'romi123', '0898989898', 'klungkung');

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
(3, 'Sakura Kouji', 'sakura', 'sakura@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'agent', 'sakura kouji.png', 'Sakura Kouji');

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
(1, 1, 'Pantai Virgin Karangasem', 'Pantai-Virgin-Karangasem-2.jpg', 'Indahnya pemandangan di Pantai Virgin tentu sangat sayang jika tidak diabadikan dalam kamera. So, pastikan kamera Anda untuk membidik momen terbaik di pantai indah ini, ya.\r\n\r\nWaktu terbaik untuk datang ke Pantai Virgin adalah pada pagi hari atau sore hari. Namun jika ingin menikmati semilir angin sambil berjemur santai di tepian pantai, Anda bisa datang menjelang siang.\r\n\r\nFasilitas di Pantai Virgin masih sangat terbatas, namun demikian tidak menjadi halangan para wisatawan untuk datang berkunjung. Fasilitas tersebut diantaranya kafe-kafe kecil, payung-payung peneduh, dan toilet.\r\n\r\nUntuk sarana akomodasi seperti penginapan belum tersedia. Namun jika Anda berniat untuk bermalam di daerah ini, Anda bisa menginap di kawasan objek wisata Candidasa.\r\n\r\nTiket masuk Pantai Virgin Karangasem terbilang cukup murah yaitu sebesar Rp 10.000 per orang. Untuk biaya parkir kendaraan dikenakan sebesar Rp 5.000 per mobil dan Rp 2.000 per motor. Murah meriah, tapi menyuguhkan pemandangan alam yang fantastis, kan?', '2018-11-22'),
(2, 2, 'Air Terjun Kuning', 'air-terjun-kuning.jpg', 'Saat ini Air Terjun Kuning sedang dikembangkan secara intens sebagai daya tarik wisata.\r\n\r\nPengembangan ini dilakukan oleh sebuah perusahaan swasta bernama PT Tri Tunggal Djaya yang berkoordinasi dengan pihak desa. Adanya pengelolaan ini diharapkan dapat membangun perekonomian warga, serta mengangkat nama Dusun Kuning.\r\n\r\nNgakan Putu Purwita, President Director PT Tri Tunggal Djaya menyebutkan, pembangunan yang dimaksud bukan hanya perbaikan akses jalan.\r\n\r\nIa juga berencana mendirikan restoran dan menjadikan kawasan Air Terjun Kuning sebagai adventure park.\r\n\r\nEditor: Ida Ayu Made Sadnyari ', '2018-11-22'),
(3, 2, 'Tampak Siring Journey', 'tampak-siring.jpeg', 'Tampaksiring Journey bisa dibilang cukup baru, karena tempat ini baru buka di tahun 2016, sehingga sekarang ini tempat wisata alam ini tergolong cukup hits, instagramable dan trend di kalangan kawula muda, para remaja dan bahkan juga orang dewasa. Anda yang jenuh dengan hiruk pikuk kota, bising dengan keramaian, ada baiknya anda bersantai sejenak, merasakan suasana alam yang berbeda, damai, tenang, nyaman dan asri dimana anda bisa merasakan refresh yang lebih maksimal. Termasuk juga juga bersantai dengan anak-anak anda mengajarkan mereka lebih dekat dan mencintai alam\r\n\r\nLokasi dari objek wisata Tampaksiring Journey berada di jalan Melati, desa Manukaya, Kecamatan Tampaksiring, Kabupaten Gianyar Bali. Jarak dari pura Tirta Empul Tampak Siring sekitar 3.7 km, dari Ubud 17 km sedangkan jarak dari bandara 57 km, kalau anda mengagendakan acara tour di seharian penuh maka paket wisata searah menuju Tampaksiring Journey adalah Batubulan, Ubud, Tirta Empul dan juga Kintamani. Lokasinya strategis dan mudah diakses, sehingga sayang jika anda lewatkan begitu saja.', '2018-11-22'),
(4, 1, 'Tirta Empul', 'Tampak-Siring2.jpg', 'Mayadenawa diceritakan seorang raja sakti, tapi memiliki sifat jahat dan beraggapan dirinya adalah seorang dewa. Karena bersifat jahat, maka Dewa Indra mengirim pasukan beliau, untuk menghancurkan Mayadenawa. Mayadenawa kalah perang melawan Dewa Indra dan Mayadenawa lari kehutan. Untuk menghilangkan jejak, Mayadenawa berjalan dengan memiringkan kakinya ke tengah hutan.\r\n\r\nWalaupun Mayadenawa berusaha menghilangkan jejak, tapi usahanya melarikan diri gagal. Sebelum berhasil ditangkap oleh pasukan dewa Indra, Mayadenawa menciptakan mata air beracun. Dengan mata air beracun, Mayadenawa berhasil membunuh sebagian dari pasukan dewa Indra, yang mengejar Mayadenawa.\r\n\r\nUntuk mengatasi mata air beracun dari Mayadenawa, Dewa Indra menciptakan mata air penawar racun. Mata air ini yang bernama Tirta Empul (air suci), oleh karena itu Pura yang memiliki mata air ini disebut dengan nama pura Tirta Empul. Hutan yang digunakan untuk Mayadenawa melarikan diri, dengan posisi kakinya dimiringkan inilah yang sekarang menjadi kawasan wisata Tampak Siring.', '2018-11-23');

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
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
