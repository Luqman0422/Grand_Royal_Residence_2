-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jan 2018 pada 05.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grand_royal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(30) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `NamaDepan` varchar(100) NOT NULL,
  `NamaBelakang` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id_admin`, `NIP`, `NamaDepan`, `NamaBelakang`, `Username`, `Password`) VALUES
(5, '1603076', 'Luqman', 'Hakim', 'Luckman', 'Hackim'),
(6, '222', 'Fikih', 'Sudarmono', 'Fick', 'kih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(30) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `id_booking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `User`, `Email`, `Password`, `id_booking`) VALUES
(18, 'luqman', 'luqman@gmail', 'luqman', 10),
(19, 'www', 'WWW', 'WWW', 11),
(20, 'SSS', 'SSS', 'SSS', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `DP` double NOT NULL,
  `Block_No` varchar(20) NOT NULL,
  `Gaji_per_bulan` double NOT NULL,
  `verifikasi_order` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `Nama_Lengkap`, `nik`, `no_telp`, `alamat`, `pekerjaan`, `type`, `DP`, `Block_No`, `Gaji_per_bulan`, `verifikasi_order`) VALUES
(10, 'Luqmanul Hakim', '3212083910981', '083824397272', 'rancajawat-tukdana-indramayu', 'programmer', 'Valentino', 10000000, 'F-22', 3000000, 1),
(11, 'WWW', '111', '111', 'WWW', 'WWW', 'WWW', 111, 'W11', 111, 1),
(12, 'SSS', '999', '999', 'SSS', 'SSS', 'SSS', 999, 'S9S', 999, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_persyaratan`
--

CREATE TABLE `data_persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `Batas_waktu` date NOT NULL,
  `daftar_persyaratan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_persyaratan`
--

INSERT INTO `data_persyaratan` (`id_persyaratan`, `id_akun`, `Batas_waktu`, `daftar_persyaratan`) VALUES
(4, 19, '0000-00-00', ''),
(5, 20, '0000-00-00', ''),
(7, 18, '2018-01-15', '<p>mjakdjknf</p>\r\n<p>kmnflknknfwkjnfkjnwsafjk</p>\r\n<p>kjak;ifwjf</p>\r\n<p>jknwfnwanfm</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rumah`
--

CREATE TABLE `data_rumah` (
  `id_rumah` int(100) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Cluster` varchar(10) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Denah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_rumah`
--

INSERT INTO `data_rumah` (`id_rumah`, `Type`, `Harga`, `Cluster`, `Deskripsi`, `Foto`, `Denah`) VALUES
(14, 'CASSANOVA-A', 123000000, 'Classic', '<pre>Luas Tanah : 72\r\nLuas Bangunan : 36\r\nPondasi : Batu Kali, Sloof Beton Bertulang\r\nDinding : Bata Merah diplester, Aci &amp; Cat\r\nKusen P/J : Kayu Kruing\r\nDaun P/J : Double teakwood\r\nLantai : Kramik ukuran 30x30\r\nAtap : Rangka Baja Ringan Genteng Plentong dicat\r\nPlafond : GRC dengan rangka Hollow\r\nKamar Mandi : Keramik 20x25 Kloset Duduk Siram &amp; Pintu Fiber\r\nDapur : Meja Beton lapis Keramik 20x25\r\nListrik : PLN 1300 W\r\nAir Bersih : PDAM</pre>', '06122017050603CASSANOVA - A.jpg', '31122017045324Tipe Cassanova - A.jpg'),
(15, 'BELLUCI', 335000000, 'Classic', '<pre>Luas Tanah : 84\r\nLuas Bangunan : 40\r\nPondasi : Batu Kali, Beton Bertulang\r\nDinding : Bata Merah diplester, Aci &amp; Cat (ex. property)\r\nKusen P/J : Kruing Mecanic (Duco)\r\nDaun P/J : Kruing, Double teakwood (Duco)\r\nLantai : Granit ukuran 60x60 polos\r\nAtap : Rangka Baja Ringan Genteng Glasur\r\nPlafond : Gypsump + Rangka Hollow\r\nKamar Mandi : Keramik 25x40. Monoblock Pintu Fiber\r\nDapur : Meja Beton + Keramik 25x40\r\nListrik : PLN 1300 W\r\nAir Bersih : PDAM (Pipa Wavin)\r\nCarport : Kermik 40x40</pre>', '06122017174003BELLUCI.jpg', '31122017045415type Belluci.jpg'),
(17, 'CASSANOVA-B', 123000000, 'Minimalis', '<pre>Luas Tanah : 72\r\nLuas Bangunan : 36\r\nPondasi : Batu Kali, Sloof Beton Bertulang\r\nDinding : Bata Merah diplester, Aci &amp; Cat\r\nKusen P/J : Kayu Kruing\r\nDaun P/J : Double teakwood\r\nLantai : Kramik ukuran 30x30\r\nAtap : Rangka Baja Ringan Genteng Plentong dicat\r\nPlafond : GRC dengan rangka Hollow\r\nKamar Mandi : Keramik 20x25 Kloset Duduk Siram &amp; Pintu Fiber\r\nDapur : Meja Beton lapis Keramik 20x25\r\nListrik : PLN 1300 W\r\nAir Bersih : PDAM</pre>', '06122017175205CASSNOVA - B.jpg', '31122017045633Type Cassanova-B.jpg'),
(18, 'BOLIVIA', 315000000, 'Minimalis', '<pre>Luas Tanah : 78\r\nLuas Bangunan : 40\r\nPondasi : Batu Kali, Beton Bertulang\r\nDinding : Bata Merah diplester, Aci & Cat (ex. Vinilex)\r\nKusen P/J : Kruing Mecanic (Duco)\r\nDaun P/J : Meranti Batu(Duco)\r\nLantai : Granit ukuran 60x60 polos\r\nAtap : Rangka Baja Ringan Genteng Beton\r\nPlafond : Gypsump + Rangka Hollow\r\nKamar Mandi : Keramik 25x40 Monoblock & Pintu Fiber\r\nDapur : Meja Beton +Granit 60x60\r\nListrik : PLN 1300 W\r\nAir Bersih : PDAM (Pipa Wavin)\r\nCarport : Keramik 40x40</pre>', '06122017175223BOLIVIA.jpg', ''),
(19, 'VALENTINO', 240000000, 'Classic', '<pre><p>APOSDJK</p>\r\n<p>SFDJKSANFJ</p>\r\n<p>WADFWEKFDOSIKAJF</p>\r\n<p>]W</p>\r\n<p>WFWSANFJ</p></pre>', '28122017143700VALENTINO.jpg', ''),
(21, 'VENESIA', 724000000, 'Classic', '<p>LASASD</p>\r\n<p>ASDAD</p>\r\n<p>ASDA</p>\r\n<p>ASDASD</p>\r\n<p>ASDASDSA</p>', '29122017134108VENESIA.jpg', '29122017134108type venesia.jpg'),
(22, 'VALENTINO', 200000000, 'Classic', '<p>ZXJCKLJjkljKJK</p>\r\n<p>KLAJNSKLJFDKFJ</p>\r\n<p>ajsfkkakslf</p>\r\n<p>jkFLKJLKJLK</p>', '29122017134520VALENTINO.jpg', '29122017134520type valentino.j'),
(23, 'CASSANOVA-B', 123000000, 'Minimalis', '<pre>Luas Tanah : 72\r\nLuas Bangunan : 36\r\nPondasi : Batu Kali, Sloof Beton Bertulang\r\nDinding : Bata Merah diplester, Aci &amp; Cat\r\nKusen P/J : Kayu Kruing\r\nDaun P/J : Double teakwood\r\nLantai : Kramik ukuran 30x30\r\nAtap : Rangka Baja Ringan Genteng Plentong dicat\r\nPlafond : GRC dengan rangka Hollow\r\nKamar Mandi : Keramik 20x25 Kloset Duduk Siram &amp; Pintu Fiber\r\nDapur : Meja Beton lapis Keramik 20x25\r\nListrik : PLN 1300 W\r\nAir Bersih : PDAM</pre>', '30122017151739CASSNOVA - B.jpg', '31122017045633Type Cassanova-B.jpg'),
(24, 'SDFSQ', 21341234, 'Minimalis', '<p>AS.FDMKAMKF</p>\r\n<p>SAMFKAMN</p>\r\n<p>AFKLMASKMFD</p>', '30122017153645KIOS.jpg', '30122017153645VENESIA.jpg'),
(25, 'VENESIA', 745000000, 'Minimalis', '<p>INI ADALAH RUMAH MINIMALIS</p>\r\n<p>INI ADALAH TIPE VENESIA</p>', '30122017162336VENESIA.jpg', '30122017162336type venesia.jpg'),
(26, 'COBA TRUS', 2131323123, 'Classic', '<p>SFLKMKSALMFKM</p>', '30122017162642VALENTINO.jpg', '30122017162642CASSNOVA - B.jpg'),
(27, 'DAVINCI', 234000000, 'Minimalis', '<p>GFIGFGHKHG</p>\r\n<p>HHJKJKVIYUGYGHBGJHUUH</p>\r\n<p>UJHULHUHUPIH</p>\r\n<p>JHLIUHJOIJHIUUHUIHIU</p>', '30122017164515DAVINCI.jpg', '30122017164515type Davinci.jpg'),
(28, 'sadad', 12321, 'Classic', '<p>asfaasffasf</p>', '01012018000309club sepeda.png', '01012018000309basket.png'),
(29, 'asdasd', 234234, 'Classic', '<p>sadkjkashdk</p>', '01012018024807Chrysanthemum.jpg', '01012018024807Hydrangeas.jpg'),
(30, 'coba', 1111, 'Classic', '<p>asbdhjbajhsbd</p>\r\n<p>jhasgdjhhasloijd</p>\r\n<p>bhisbdfhj</p>', '01012018031654Penguins.jpg', '01012018031654Hydrangeas.jpg'),
(31, 'AAA', 123123, 'Classic', '<p>ASDSADSAD</p>\r\n<p>SAFAFAF</p>\r\n<p>AFA</p>', '01012018033307Facility-Icon.jpg', '01012018033307Icon - Facilities.png'),
(32, 'DAVINCI', 200000000, 'Classic', '<p>BAHAN</p>\r\n<p>LUAS</p>\r\n<p>TINGGI</p>\r\n<p>LEBAR</p>', '01012018033811DAVINCI.jpg', '01012018033811type Davinci.jpg'),
(33, 'DAVINCI', 200000000, 'Classic', '<p>BAHAN</p>\r\n<p>LUAS</p>\r\n<p>TINGGI</p>\r\n<p>LEBAR</p>', '01012018033937DAVINCI.jpg', '01012018033937type Davinci.jpg'),
(34, 'COBA', 10020001, 'Minimalis', '<p>KLASJDKLJSA</p>\r\n<p>KASHDJKHASJD</p>\r\n<p>KIASHDKJSHA</p>\r\n<p>JKAHSDJK</p>', '01012018034215VENESIA.jpg', '01012018034215type venesia.jpg'),
(35, 'val', 1223131232, 'Classic', '<p>smdfjksjafiqjadfwk</p>\r\n<p>isjdfijawisjf</p>\r\n<p>]lkijisafjdiowas</p>', '01012018034418VALENTINO.jpg', '01012018034418type Valentino.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_siteplan`
--

CREATE TABLE `detail_siteplan` (
  `id_detail` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Block` varchar(10) NOT NULL,
  `No_awal_rumah` int(11) NOT NULL,
  `No_akhir_rumah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_siteplan`
--

INSERT INTO `detail_siteplan` (`id_detail`, `Type`, `Block`, `No_awal_rumah`, `No_akhir_rumah`) VALUES
(6, 'val', 'A', 1, 5),
(7, 'val', 'b', 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `ID_Fasilitas` int(10) NOT NULL,
  `Nama_Fasilitas` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL,
  `Foto_Fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`ID_Fasilitas`, `Nama_Fasilitas`, `Keterangan`, `Foto_Fasilitas`) VALUES
(3, 'CCTV', 'Kami melengkapi lingkungan perumahan ini dengan CCTV', '26112017071055cctv.png'),
(4, 'Lapangan Basket', 'Kami menyediakan lapangan basket bagi customer yang mempunyai hobi bermain basket', '26112017071226basket.png'),
(5, 'Lapangan Badminton', 'Kami menyediakan lapangan badminton untuk para customer yang memang hobi ataupun ingin berolahraga', '26112017071402badminton.png'),
(6, 'Club Memancing', 'Terdapat klub memancing bagi para customer yang hobi memancing atau pun sekedar untuk hiburan', '26112017072207club mancing.png'),
(7, 'Klub Sepeda', 'Kami mempunyai klub sepeda untuk mereka yang ingin bersepeda bersama', '26112017072315club sepeda.png'),
(8, 'Jogging Track', 'Kami juga menyediakan jogging track untuk para customer yang ingin jogging untuk lebih menyehatkan tubuh juga', '26112017072457jogging.png'),
(9, 'Masjid', 'Di lingkungan perumahan juga terdapat Masjid untuk sarana Ibadah bagi umat muslim', '26112017072907masjid.png'),
(10, 'PDAM', 'Kami memberikan fasilitas penyedia air berupa PDAM untuk para customer', '26112017073002pdam.png'),
(12, 'Security', 'Di depan gerbang perumahan juga kami menempatakan security untuk menjaga keamanan komplek perumahan', '26112017073152Security.png'),
(13, 'Taman', 'Didalam komplek juga terdapat taman', '26112017073325taman.png'),
(14, 'Taman Bermain', 'Kami menyediakan Taman Bermain untuk para customer sebagai sarana bermain anak-anak', '26112017073501TamanBermain.png'),
(15, 'Lapangan Volley', 'Kami juga menyediakan lapangan volley untuk para customer yang hobi berolahraga volley', '26112017073712volley.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persyaratan`
--

INSERT INTO `persyaratan` (`id_persyaratan`, `id_akun`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(1, 11, '2017-12-31', 'always-in-my-heart.zip', 31720, 'zip'),
(2, 1, '2017-12-31', 'CRUD_AndroidMySQL-master.zip', 115354, 'zip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indexes for table `data_rumah`
--
ALTER TABLE `data_rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indexes for table `detail_siteplan`
--
ALTER TABLE `detail_siteplan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`ID_Fasilitas`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_rumah`
--
ALTER TABLE `data_rumah`
  MODIFY `id_rumah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `detail_siteplan`
--
ALTER TABLE `detail_siteplan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `ID_Fasilitas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
