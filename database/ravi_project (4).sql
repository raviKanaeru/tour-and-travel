-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 07:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravi_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$.lRwXzSyc6cXfG0McK0IxeJewjpDfqkQJ3ajpYi/40fHRZTeDuUtS');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary_tour`
--

CREATE TABLE `itinerary_tour` (
  `id_itinerary` int(11) NOT NULL,
  `nama_tour` varchar(255) NOT NULL,
  `day1` text NOT NULL,
  `day2` text NOT NULL,
  `day3` text NOT NULL,
  `day4` text NOT NULL,
  `day5` text NOT NULL,
  `day6` text NOT NULL,
  `day7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary_tour`
--

INSERT INTO `itinerary_tour` (`id_itinerary`, `nama_tour`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(1, '7D6N Tour Mesir', 'Berangkat dari bandara sultan sayarif kasim ll, penerbangan ke bandara Soekarno-Hatta, lalu Berangkat menuju Kairo', 'Sesampainya di Kairo, mesir menuju hotel untuk beristirahat. setelah kita akan berangkat menuju Museum Kairo. setelah itu makan siang dan melanjutkan mengelilingi museum kairo dan melalakukan photoshot. setelah itu kembali ke hotel untuk beristirahat', 'Setelah sarapan kita akan berwisata ke Babylon Fortress, dan berkeliling Babylon Fortress. setelah itu akan melakukan city tour kairo', 'etelah sarapan, kita berangkat berwisata menuju Piramida Giza yang berada di Giza,Egypt', 'Setelah sarapan kita berangkat berwisata menuju Lembah Para Raja yang berada di Luxor, Luxor Governorate', 'Setelah sarapan kita berangkat berwisata menuju The Temple of Seti I yang berada di Luxor, Luxor Governorate', 'Setelah sarapan kita akan berkeliling kota kairo dan berbelanja, setelah itu kita akan berangkat menuju bandara internasional mesir. setelah itu kita berangkat ke indonesia'),
(2, '7D6N Tour India', 'Berangkat dari bandara sultan sayarif kasim ll, penerbangan ke bandara Soekarno-Hatta, lalu Berangkat menuju india', 'Sesampainya di new delhi,india menuju hotel untuk beristirahat. setelah kita akan berangkat menuju Amber-Palace. setelah itu makan siang dan melanjutkan mengelilingi Amber-Palace dan melalakukan photoshot. setelah itu kembali ke hotel untuk beristirahat', 'Setelah sarapan kita akan berwisata ke Hawa Mahal, dan berkeliling Hawa-Mahal. setelah itu akan melakukan city tour new delhi', 'etelah sarapan, kita berangkat berwisata menuju Agra-Fort yang berada di kota agra', 'Setelah sarapan kita berangkat berwisata menuju Taj-Mahal yang berada di kota agra', 'Setelah sarapan kita berangkat berwisata menuju Mysore-Palace yang berada di Sayyaji Rao Rd, Agrahara', 'Setelah sarapan kita akan berkeliling kota new delhi dan berbelanja, setelah itu kita akan berangkat menuju bandara internasional india. setelah itu kita berangkat ke indonesia'),
(3, '7D6N Tour Peru', 'Berangkat dari bandara sultan sayarif kasim ll, penerbangan ke bandara Soekarno-Hatta, lalu Berangkat menuju Peru', 'Sesampainya di kota peru,Lima menuju hotel untuk beristirahat. setelah kita akan berangkat menuju sacred-valley dengan menggunakan mobil wisata. setelah itu makan siang dan melanjutkan mengelilingi sacred-valley dan melalakukan photoshot. setelah itu kembali ke hotel untuk beristirahat', 'Setelah sarapan kita akan berwisata ke larco-museum, dan berkeliling larco-museum. setelah itu akan melakukan city tour ke kota lima', 'Setelah sarapan, kita berangkat berwisata menuju peru-cusco-cathedral yang berada di Cusco Cathedral', 'Setelah sarapan kita berangkat berwisata menuju Lembah Lembah Suci Inca yang berada di cusco', 'Setelah sarapan kita berangkat berwisata menuju machu piccu yang berada di dekat lembah suci inca', 'Setelah sarapan kita akan berkeliling kota lima dan berbelanja, setelah itu kita akan berangkat menuju bandara internasional peru. setelah itu kita berangkat ke indonesia'),
(4, 'joojo', 'kn', 'd', 'd', 'd', 'd', 'd', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_tour`
--

CREATE TABLE `pesanan_tour` (
  `nomor_pemesanan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_tour` varchar(100) NOT NULL,
  `jumlah_tiket` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `tanggal_berangkatan` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` enum('Pending','Success','Cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_tour`
--

INSERT INTO `pesanan_tour` (`nomor_pemesanan`, `nama_lengkap`, `nama_tour`, `jumlah_tiket`, `harga`, `total`, `tanggal_berangkatan`, `username`, `status`) VALUES
(23, 'wayan juliarta', '7D6N Tour India', 2, 23000000, 46000000, '2021-01-04', 'wayan', 'Success'),
(26, 'kadek mr', '7D6N Tour India', 2, 23000000, 46000000, '2021-01-04', 'kadek', 'Pending'),
(27, 'asw', '7D6N Tour Mesir', 3, 24000000, 72000000, '2021-01-06', 'wayan', 'Pending'),
(28, 'hahhha', '7D6N Tour India', 2, 23000000, 46000000, '2021-01-29', 'ravi', 'Success'),
(30, 'yukino', '7D6N Tour Peru', 3, 20000000, 60000000, '2020-12-23', 'ravi', 'Pending'),
(31, 'rav', '7D6N Tour India', 3, 23000000, 69000000, '2021-01-04', 'ravi', 'Pending'),
(32, 'ravi', '7D6N Tour India', 2, 23000000, 46000000, '2021-01-29', 'ravi', 'Pending'),
(33, 'testing', '7D6N Tour Peru', 3, 20000000, 60000000, '2020-12-23', 'ravi', 'Success'),
(34, 'ravi', '7D6N Tour Peru', 2, 20000000, 40000000, '2020-12-23', 'ravi', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_travel`
--

CREATE TABLE `pesanan_travel` (
  `nomor_pemesanan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_travel` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah_tiket` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `status` enum('Pending','Success','Cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_travel`
--

INSERT INTO `pesanan_travel` (`nomor_pemesanan`, `username`, `nama_lengkap`, `nama_travel`, `harga`, `jumlah_tiket`, `total`, `tanggal_berangkat`, `status`) VALUES
(6, 'wayan', 'ravi', '10D 9N Korea Selatan', 21000000, 1, 21000000, '2020-12-31', 'Success'),
(7, 'wayan', 'ravi', '10D 9N Korea Selatan', 21000000, 2, 42000000, '2020-12-30', 'Pending'),
(8, '1', 'mizan bankai', '10D 9N Korea Selatan', 21000000, 3, 63000000, '0000-00-00', 'Pending'),
(9, 'mizan', 'mizannn', '10D 9N Amerika Serikat', 27000000, 3, 81000000, '0000-00-00', 'Pending'),
(10, 'mizan', 'hjj', '10D 9N Canada', 25000000, 2, 50000000, '0000-00-00', 'Pending'),
(11, 'mizan', 'mijan', '10D 9N Amerika Serikat', 27000000, 1, 27000000, '2020-12-28', 'Pending'),
(12, 'kadek', 'kadek mr011', '10D 9N Jepang', 27000000, 4, 108000000, '2020-12-30', 'Pending'),
(15, 'ravi', 'itsuki', '10D 9N Korea Selatan', 21000000, 1, 21000000, '2021-01-31', 'Pending'),
(16, 'ravi', 'gg', '10D 9N Korea Selatan', 21000000, 2, 42000000, '2021-01-28', 'Pending'),
(17, 'ravi', 'ravii', '10D 9N Canada', 25000000, 2, 50000000, '2021-01-31', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `nama_tour` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `tanggal_berangkat2` date DEFAULT NULL,
  `tanggal_berangkat3` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `nama_tour`, `gambar`, `harga`, `lokasi`, `durasi`, `tanggal_berangkat`, `tanggal_berangkat2`, `tanggal_berangkat3`) VALUES
(1, '7D6N Tour Peru', 'machu-piccu.jpg', '20000000', 'Peru', '7 Day', '2020-12-09', '2020-12-16', '2020-12-23'),
(2, '7D6N Tour Mesir', 'piramida.jpg', '24000000', 'Mesir', '7 Day', '2020-12-23', '2020-12-30', '2021-01-06'),
(3, '7D6N Tour India', 'Taj-Mahal.jpg', '23000000', 'India', '7 Day', '2020-12-28', '2021-01-04', '2021-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id_travel` int(11) NOT NULL,
  `nama_travel` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `durasi` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id_travel`, `nama_travel`, `foto`, `harga`, `durasi`, `lokasi`) VALUES
(2, '10D 9N Amerika Serikat', 'amrik.jpg', 27000000, '10 Day', 'Amerika Serikat'),
(3, '10D 9N Canada', 'canada.jpg', 25000000, '10 Day', 'Canada'),
(4, '10D 9N Korea Selatan', 'koreaselatan.jpg', 21000000, '10 Day', 'Korea Selatan'),
(5, '10D 9N Turki', 'turki.jpg', 24000000, '10 Day', 'Turki'),
(6, '10D 9N Malaysia', 'malaysia.jpg', 120000000, '10 Day', 'Malaysia'),
(7, '10D 9N Jepang', 'jepang.jpg', 27000000, '10 Day', 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `no_hp`) VALUES
(1, 'ravi', '$2y$10$LHestdiYZBkaNvjT3OVO7.zFULWzvcVklqOdUQRSwdPHPSMrholem', '081365701957'),
(2, 'kadek', '$2y$10$DuMtkCUJz0/L8x1J7dnJiecehMgsYvEE0CcKCGt.CPFan5yVDoR9C', '08787826662'),
(3, 'wayan', '$2y$10$7HhYETIeQ61WkloKHYD5Mu7nJwf1rUFsr9jtTR7A5W3koxxFjaVnS', '08136722772'),
(4, 'mizan', '$2y$10$jaXASW7hrLWfM3KRExHLT.k3HHLf4i1wHVvtdlfJfVUPzLKTUNEyu', '08263726288282'),
(5, 'naufal', '$2y$10$F44xV3JUnohcYAymhbgiL.3xbIqCoFaR4Vk4VBtEjnndYNUAjzDP6', '0829287199299'),
(6, 'dafryan', '$2y$10$xOqqSA9t.wnId1Vj5BF0V.LGS66BeCtSBhJXz7GknUxKfbzWg2n5C', '08227272882'),
(7, 'adit', '$2y$10$cp8F3g92JCsOd2jncuEEI.1DFnD2cWpjoKD/gLMl.G5AWk8eBgeOq', '082998392878'),
(8, 'dapit', '$2y$10$tHSkav1.3NOJWrVBzY0ZA.WY781OwTt/QrFriKsUWRZKc6Mw7Zu3a', '082638278389'),
(9, 'reyhand', '$2y$10$dGMXIX5BHAYHTFxDd7v1x.7G..LOT.nzQABrhU9SbNaDnbGp8mwRq', '0872872889'),
(10, 'pengunjung', '$2y$10$RiCA1G7SL5KZSRPrsJMEsuWZ3cwLchGb6ZrbviL.bruMOCHpweyoe', '828888888888888888'),
(11, 'zenzen', '$2y$10$4YMc4Cc7WvYbB/sKTBcg8urTZM0K/4xywcSVDSJNWmMspQm1u5wou', '08838339999'),
(12, 'yukinon', '$2y$10$IP.3bpVA.x2B6QtD.RGhM.SvqlSIFoBoA6WKpyMFcn56kBL8AjZ1y', '1288838383'),
(13, 'y', '$2y$10$IgIYopm/66HnqfDAgztco.K5Z781ZA6o8nn9kMVOez0oHIjNjTu8y', '6'),
(14, 'davidhand', '$2y$10$MygkRC/zpVd7tbXtFNp13OuPZ9QE6ebS79G8.BTx683BztVz1e9we', '082927');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary_tour`
--
ALTER TABLE `itinerary_tour`
  ADD PRIMARY KEY (`id_itinerary`);

--
-- Indexes for table `pesanan_tour`
--
ALTER TABLE `pesanan_tour`
  ADD PRIMARY KEY (`nomor_pemesanan`);

--
-- Indexes for table `pesanan_travel`
--
ALTER TABLE `pesanan_travel`
  ADD PRIMARY KEY (`nomor_pemesanan`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itinerary_tour`
--
ALTER TABLE `itinerary_tour`
  MODIFY `id_itinerary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan_tour`
--
ALTER TABLE `pesanan_tour`
  MODIFY `nomor_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pesanan_travel`
--
ALTER TABLE `pesanan_travel`
  MODIFY `nomor_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id_travel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
