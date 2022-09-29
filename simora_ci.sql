-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2022 pada 02.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simora_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cellplan`
--

CREATE TABLE `cellplan` (
  `id` int(255) NOT NULL,
  `id_site` varchar(255) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `kecamatan_id` varchar(255) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `radius` int(11) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cellplan`
--

INSERT INTO `cellplan` (`id`, `id_site`, `provider_id`, `kecamatan_id`, `desa_id`, `lokasi`, `latitude`, `longitude`, `radius`, `warna`, `gambar`) VALUES
(30, 'SINGOSARI', 36, '3', 314, 'JL.Suropati RT 01 RW 03', '-7.888401', '112.676529', 50, '#ff0000', '14.jpg'),
(31, 'AMPELDENTO', 36, '22', 238, 'Dusun Dami RT 02 RW 03', '-7.96608', '112.69247', 50, '#ff0000', '22.jpg'),
(32, 'TELASIH', 36, '26', 293, 'Jl Kasin RT 27 RW 09', '-7.91669', '112.60934', 50, '#ff0000', 'index1.jpg'),
(33, 'TIRTOYUDO 2', 36, '32', 371, 'Dusun Sanggrahan RT 06 RW 01', '-8.1957714', '112.83513343', 50, '#ff0000', '15.jpg'),
(34, 'ARJO WILANGUN(ARJO WILANGUN)', 36, '16', 149, 'Dusun Barisan RT 04 RW 01', '-8.1836', '112.42331', 50, '#ff0000', 'm22.PNG'),
(35, 'BANTUR BALEKAMBANG', 36, '8', 26, 'Jl raya Bantur rt 38 rw 08', '-8.31256', '112.58012', 50, '#ff0000', 'm2.PNG'),
(36, 'PURWOREJO NGANTANG EX BENDOSARI', 36, '29', 342, 'Jl. Raya Banturejo RT 04 RW 02', '-7.8829249', '112.3635695', 50, '#ff0000', 'm4.PNG'),
(37, 'BEDALI', 36, '27', 318, 'Bedali RT 04 RW 08', '-7.84821', '112.68631', 50, '#ff0000', 'm5.PNG'),
(38, 'DADAP KULON ', 36, '28', 327, 'Dusun Dadapan Kulon RT 03 RW 04', '-7.8750495', '112.4205958', 50, '#ff0000', 'm221.PNG'),
(39, 'BULULAWANG EX SELOREJO', 36, '18', 184, 'Jl Dipenegoro RT 11 RW 06', '-8.0806', '112.64069', 50, '#ff0000', 'm33.PNG'),
(40, 'DAMPIT RELOK', 36, '10', 0, 'Dampit, Relok Pasar Baru', '-8.2136 ', ' 112.75468', 100, '', 'm1.PNG'),
(41, 'DONOMULYO MALANG\n', 36, '6', 11, 'Dusun Mulyosari RT 01 RW 01', '-8.28697 ', '112.42706', 100, '#ff0000', 'm21.PNG'),
(42, 'GEDANGAN', 36, '31', 359, 'Dusun Sumber Gesing RT 19 RW 05', '-8.295924', ' 112.65511', 100, '#ff0000', 'm222.PNG'),
(43, 'GEDONG WETAN', 36, '14', 115, 'Jl Gedog Rayab RT 05 RW 11', '-8.20685 ', ' 112.69399', 50, '#ff0000', 'm25.PNG'),
(44, 'JABUNG', 36, '21', 228, 'Desa Jabung RT 01 RW 03', '-7.56077 ', ' 112.4529', 50, '#ff0000', 'm51.PNG'),
(45, 'KALIPARE', 36, '16', 143, 'Krajan RT 12 RW 04 Jl Diponegoro', '-8.20579', '112.46656', 50, '#ff0000', 'm211.PNG'),
(46, 'JOMBOK', 36, '29', 349, ' / 112,46656', '-7.82074 ', '112.37108', 100, '#ff0000', 'm41.PNG'),
(47, 'SUMBER WARAS', 36, '27', 325, 'Jl Sumber Sekar No 01 RT 07 RW 007', '-7.84461 ', '112.70105', 50, '#ff0000', 'm34.PNG'),
(48, 'KANIGORO MALANG ', 36, '35', 396, 'Jl. Cut Nyak Din RT 31 RW 07', '-8.18307 ', '112.57196', 100, '#ff0000', 'm52.PNG'),
(49, 'WADUK SUTAMI', 36, '17', 157, 'Bend Sutami Rt 02 RW 01', '-8.15456', '112.44566', 100, '#ff0000', 'm341.PNG'),
(50, 'PGKEBUN AGUNG', 36, '23', 257, 'Dusun Sonosari Jl Leces RT 38 RW 07', '-8.030312 ', '112.61304', 100, '#ff0000', 'm342.PNG'),
(51, 'TUREN', 36, '14', 122, 'Jl Jagalan III RT 09 RW 01', '-8.14758', '112.69292', 100, '#ff0000', 'm223.PNG'),
(52, 'BURING', 36, '22', 231, 'Dusun Kedungboto RT 02 RW 03', '-79.876 ', ' 112.70092', 100, '#ff0000', 'm343.PNG'),
(53, 'KIDALEX WONOKOYO', 36, '20', 202, 'Dusun Krajan Jln Simp Panggung RT 031 RW 03', '-8.01931', '112.71023', 100, '#ff0000', 'm212.PNG'),
(54, 'SRIMULYO', 36, '9', 41, 'Dusun Klepu RT 11 RW 02', '-8.25997', '112.71958', 100, '#ff0000', 'm213.PNG'),
(55, 'PUTUK REJO', 36, '18', 178, 'Dusun Bulupayung RT 04 RW 07', '-8.12162', '112.63818', 100, '#ff0000', 'm344.PNG'),
(56, 'KROMENGAN', 36, '33', 379, 'Jl Nailun Selatan', '-8.130667', '112.4899224', 100, '#ff0000', 'm214.PNG'),
(57, 'KLANDUNGAN', 36, '2', 285, 'JL.Tirto Taruno Gg VIII RT 02 RW 07', '-7.5557', '112.3529', 50, '#ff0000', 'm215.PNG'),
(58, 'PASAR LAWANG', 36, '27', 326, 'JL.Monginsidi No. 3 RT 07 RW 01', '-7.49563 ', '112.41328', 50, '#ff0000', 'm345.PNG'),
(59, 'MULYO AGUNG DAU MALANG   ', 36, '2', 286, 'JL.Raya Sengkaling 161 RT 04 RW 07', '-7.54577', '112.351', 50, '#ff0000', 'm216.PNG'),
(60, 'NGADIRESO', 36, '12', 81, 'Desa Ngadireso RT 02 RW 01', '-8.04129', '112.4623', 100, '#ff0000', 'm346.PNG'),
(61, 'GUNUNG KAWI 2', 36, '24', 258, 'Ngajum RT 07 RW 03', '-8.0946 ', '11.,53969', 50, '#ff0000', 'm217.PNG'),
(62, 'KARANG PLOSO', 36, '26', 292, 'ngijo, Dusun Kendalsari RT 04 RW 08', '-7.89665', ' 112.60172', 100, '#ff0000', 'm347.PNG'),
(63, 'PUJON', 36, '28', 332, 'Dusun Ngroto RT 09 RW 04', '-7.83917 ', '112.46281', 100, '#ff0000', 'm23.PNG'),
(64, 'PAGAK', 36, '7', 20, 'dusun krajan RT 02 RW 01 ', '-8.2300333', '112.5232921', 50, '#ff0000', 'm218.PNG'),
(65, 'PAGER SARI', 36, '29', 337, 'Jl Raya Pagersari RT 13 RW 04', '-7.9434 ', '112.38676', 100, '#ff0000', 'm219.PNG'),
(66, 'PAKIS MALANG', 36, '22', 245, 'Dusun Krajan Jl Raya Bunut Wetan', '-7.954964', '112.710955', 50, '#ff0000', 'm348.PNG'),
(67, 'DAMPIT', 36, '10', 59, 'Jl Ahmat Yani RT 01 RW 01', '-8.1979 ', '112.73029', 100, '#ff0000', 'm2110.PNG'),
(68, 'PANDAN LANDUNG', 36, '25', 278, 'JL.Raya Pandanlandung RT 05 RW 01', '-7.58316', '112.3522', 50, '#ff0000', 'm2111.PNG'),
(69, 'PUJON REPEATER', 36, '28', 330, 'Dusun Sebaluh RT 18 RW 04', '-7.8608354', '112.4856087', 100, '#ff0000', 'm349.PNG'),
(70, 'WAGIR', 36, '25', 270, 'Parangargo RT 09 RW 02', '-8.01312', '112.5945', 100, '#ff0000', 'm3410.PNG'),
(71, 'PONCOKUSUMO', 36, '12', 92, 'Dusun Krajan RT 02 RW 01', '-8.05048', '112.80729', 100, '#ff0000', 'm3411.PNG'),
(72, 'PRINGU', 36, '18', 188, 'Dusun Krajan RT 08 RW 06', '-8.05343', '112.4103', 100, '#ff0000', 'm2112.PNG'),
(73, 'GONDANG LEGI', 36, '15', 127, 'Dusun Pancir RT 17 RW 05', '-8.16496', '112.64046', 100, '#ff0000', 'm2113.PNG'),
(74, 'REJOSARI', 36, '8', 25, 'JL.Raya Rejosari Dusun Krajan RT 13 RW 14', '-8.16303 ', '112.3551', 100, '#ff0000', 'm3412.PNG'),
(75, 'SANANREJO', 36, '14', 121, 'Jln Sukarno - Hatta RT 35 RW 07', '-8.14802 ', '112.72091', 100, '#ff0000', 'm3413.PNG'),
(76, 'TUREN 2 EX TIRTOYUDO', 36, '14', 126, 'Jalan Koptu Jatemoi RT 12 RW 03', '-8.18085', '112.68752', 100, '#ff0000', 'm2114.PNG'),
(77, 'JENGGOLO EX WLINGI 2', 36, '1', 159, 'Jl. Gondowono RT 15 RW 02', '-8.1728', '112.54993', 100, '#ff0000', 'm2115.PNG'),
(78, 'SIDORENGGO', 36, '11', 71, 'dusun krajan No.23 RT03 RW 01', '-8.2264152 ', '112.913964', 100, '#ff0000', 'm3414.PNG'),
(79, 'LEMAH DUWUR', 36, '25', 269, 'JL.Perum Permatasari Asri RT 07 RW 05', '-8.0126', '112.3602', 50, '#ff0000', 'm331.PNG'),
(80, 'SITITARJO EX TRETES 2', 36, '9', 44, 'Sitiarjo RT 56 RW 15', '8.27407 ', '112.67954', 100, '#ff0000', 'm2116.PNG'),
(81, 'SLOROK', 36, '33', 377, 'RT 09 RW 03', '-8.1444934 ', '112.5253602', 100, '#ff0000', 'm3415.PNG'),
(82, 'DS SUDIMORO EX KEBON THE EX BULULAWANG', 36, '18', 175, 'Sudimoro RT 02 RW 01', '-8.11974', ' 112.67072', 100, '#ff0000', 'm3416.PNG'),
(83, 'NGANTANG EX SELOREJO', 36, '29', 345, 'Sumberagung', '-7.84863', '112.37098', 100, '#ff0000', 'm3417.PNG'),
(84, 'SUMBER MANJING KULON', 36, '7', 16, 'RT 05 RW 02', '-8.3016', '112.49798', 100, '#ff0000', 'm3418.PNG'),
(85, 'SUMBERMANJING WETAN', 36, '9', 48, 'RT 14 RW 04', '-8.25922', '112.68654', 100, '#ff0000', 'm3419.PNG'),
(86, 'SUMBERPUCUNG', 36, '17', 156, 'Jl Sersan Sawali RT 03 RW 01', '-8.15464', '112.47871', 100, '#ff0000', 'm3420.PNG'),
(87, 'TAJINAN', 36, '19', 195, 'Jl. Mangga RT 10 RW 05', '-8.05147', '112.687', 100, '#ff0000', 'm3421.PNG'),
(88, 'PERUM KEPANJEN', 36, '1', 165, 'Jl Raya Gunung Kawi', '-8.1262', '112.55531', 50, '#ff0000', 'm3422.PNG'),
(89, 'PANTAI SENDANG BIRU', 36, '9', 51, 'Dusun Sendangbiru RT 10 RW 03', '-8.42974', '112.67815', 100, '#ff0000', 'm3423.PNG'),
(90, 'TAMBAK ASRI', 36, '9', 38, 'Dusun Sumber Kembang RT 40 RW 06', '-8.33761', ' 112.75941', 100, '#ff0000', 'm3424.PNG'),
(91, 'KARANG PLOSO', 36, '26', 289, 'Tegalgondo RT 09 RW 03', '-7.9132', '112.59856', 50, '#ff0000', 'm3425.PNG'),
(92, 'AMPELGADING', 36, '11', 69, 'Pekarangan Masjid RT 09 RW 03', '-8.2361082', '112.876248', 100, '#ff0000', 'm3426.PNG'),
(93, 'PEMANDIAN MENDIT', 36, '22', 241, 'Jalan Nur Rois Gentong RT 03 RW 04', '-7.940893', '112.676741', 50, '#ff0000', 'm332.PNG'),
(94, 'TUMPANG', 36, '20', 211, 'Jl Anusupati RT 15 RW 0', '-8.00331', '112.76584', 100, '#ff0000', 'm333.PNG'),
(95, 'KARANG LO EX GEDANG RELOK', 36, '3', 303, 'Jl raya tanjungtirto RT 02 RW 07', '-7.910767', '112.6322175', 100, '#ff0000', 'm334.PNG'),
(96, 'LAWANG BUKIT MALANG', 36, '27', 322, 'Dusun Simpang RT 07 RW 06', '-7.8214', '112.69949', 100, '#ff0000', 'm11.PNG'),
(97, 'WAJAK', 36, '13', 108, 'Jl HOS Tjokroaminoto RT 01 RW 04', '-8.22538', '112.59882', 100, '#ff0000', 'm42.PNG'),
(98, 'WONOKERJO BUMI AJI', 36, '8', 24, 'RT 01 RW 01 ( RT 03/ RW 01)', '-8.22538', '112.59882', 100, '#ff0000', 'm12.PNG'),
(99, 'WONOMULYO EX GREN BROMO HOTEL', 36, '12', 89, 'Desa Wonomulyo RT 20 RW 07', '-8.02246', '112.4608', 100, '#ff0000', 'm251.PNG'),
(100, 'TIRTOYUDO', 36, '32', 370, 'Dusun Sukosari RT 07 RW 02', '-8.226674', '112.835717', 100, '#ff0000', 'm335.PNG'),
(101, 'PAKISAJI', 36, '23', 252, 'Jl.Raya Pakisaji gang koramil rt.10 rw 02', '-8.064358', '112.600609', 100, '#ff0000', 'm2117.PNG'),
(102, 'SIDOREJO', 36, '35', 401, 'Jl.Pal Sidorejo', '-8.1976285', '112.5300188', 100, '#ff0000', 'm2118.PNG'),
(103, 'NGADILANGKUNG ', 36, '1', 170, 'Jl.Pang Sudirman RT 04 RW01', '-8.1041782', '112.5797967', 100, '#ff0000', 'm3427.PNG'),
(104, 'SENGKALING ', 36, '2', 286, 'Jl Raya Mulyoagung rt 10 rw 07', '-7.9101416', '112.5831307', 100, '#ff0000', 'm3428.PNG'),
(105, 'SONGSONG ATAS', 36, '3', 309, ' Jl. Raya Agung no.249 rt 05 rw 04', '-7.88159', '112.676834', 50, '#ff0000', 'm3429.PNG'),
(106, 'WONOSARI MALANG ', 36, '27', 324, 'Dusun Gubuk Utara RT 05 RW 15', '-7.8113727', '112.6575068', 50, '#ff0000', 'm3430.PNG'),
(107, 'REAPETER SENDANG BIRU-SITIARJO', 36, '9', 47, 'Dusun Mulyosari RT 32 RW 09', '-8.312432 ', '112.688601', 100, '#ff0000', 'm3431.PNG'),
(108, 'GONDANG LEGI 2', 36, '15', 128, 'Dusun Penjalinan RT 44 RW 04', '-8.1673206', '112.6138424', 100, '#ff0000', 'm3432.PNG'),
(109, 'BUMIREJO', 36, '10', 57, 'Dusun Tugusari RT 03 RW 02', '-8.13392', '112.4724', 100, '#ff0000', 'm3433.PNG'),
(110, 'ROOFTOP', 36, '26', 292, 'Jl. Raya Karangploso RT.01 RW.06 Dsn. Ngepeh', '-7.901707', '112.605978', 50, '#ff0000', 'm3434.PNG'),
(111, 'MLG831/PURWOREJO GANTANG 2', 36, '29', 340, 'Dusun Jeruk RT 19 RW 03', '-7.88217', '112.38866', 50, '#ff0000', 'm3435.PNG'),
(112, 'KEMIRI JABUNG ', 36, '21', 230, 'Dusun Krajan RT 03 RW 02', '-7.910453', '112.76879', 50, '#ff0000', 'm3436.PNG'),
(113, 'SUMBER PORONG 2 MCME MLG 535', 36, '27', 319, 'Dorowati Barat', '-7.830923', '112.703138', 50, '#ff0000', 'm3437.PNG'),
(114, 'LAWANG ', 24, '27', 324, 'Gebuk Utara RT 09 RW 17', '-7.81066 ', '112.6542', 50, '#ff0000', 'm3438.PNG'),
(115, 'DENGKOL', 24, '3', 310, 'Jl Kebonagung No.7  RT 08 RW 02', '-7.89772', '112.6738', 50, '#ff0000', 'm3439.PNG'),
(116, 'SEMPOL', 24, '3', 312, 'Tejosari RT 01 RW 09', '-7.875291', '112.6653367', 100, '#ff0000', 'm3440.PNG'),
(117, 'LEBAN', 24, '26', 296, 'Dusun Karangan RT 04 RW 01', '-7.87564', '112.57894', 50, '#ffff00', 'm3441.PNG'),
(118, 'PONCOKUSUMO', 24, '12', 92, 'Drigu Jl Rangkit RT 02 RW 09', '-8.04839', '112.80746', 100, '#ffff00', 'm3442.PNG'),
(119, 'SAWOJAJAR 2', 24, '22', 239, 'Jl Wisnuwardhana 50 RT 24 RW 01', '-7.96989', '112.6712', 50, '#ffff00', 'm3443.PNG'),
(120, 'KEDUNGREJO', 24, '22', 231, 'Dusun Kedungboto RT 02 RW 03', '-7.98714', '112.701', 100, '#ffff00', 'm336.PNG'),
(121, 'JABUNG', 24, '21', 228, 'Jl Raya Kelud', '-7.93566', '112.7582', 50, '#ffff00', 'm337.PNG'),
(122, 'SELOREJO NGANTANG ', 24, '29', 345, 'Jl Raya RT 06 RW 02', '-7.85453', '112.37054', 100, '#ffff00', 'm338.PNG'),
(123, 'TELANGAGUNG', 24, '1', 165, 'Jl Molek RT 12 RW 03', '-8.12934', '112.55129', 100, '#ffff00', 'm339.PNG'),
(124, 'NGADILANGKUNG', 24, '1', 170, 'Jl Raya Mojosari RT 04 RW 01', '-8.10084', '112.58101', 50, '#ffff00', 'm3310.PNG'),
(125, 'SENGON', 24, '25', 277, 'Dusun Sengon RT 07 RW 02', '-7.97179', '112.54379', 100, '#ffff00', 'm3311.PNG'),
(126, 'KROMENGAN BARAT', 24, '33', 380, 'Dusun Krajan RT 02 RW 03', '-8.1288396', '112.4885008', 100, '#ffff00', 'm3312.PNG'),
(127, 'KEBONSARI_IM3', 24, '23', 257, 'Jln Magersari Utara RT 02 RW 01', '-8.02374', '112.61667', 50, '#ffff00', 'm3313.PNG'),
(128, 'PEDARINGAN', 24, '15', 129, 'Jl Panglima Sudirman RT 07 RW 03', '-8.15837', '112.59779', 50, '#ffff00', 'm3314.PNG'),
(129, 'PAGELARAN', 24, '35', 399, 'Jl Diponegoro RT 22 RW 07', '-8.19228', '112.61458', 50, '#ffff00', 'm3315.PNG'),
(130, 'TUREN', 24, '14', 126, 'Jl. Panjaitan RT 03 RW 01', '-8.17859', ' 112.68253', 100, '#ffff00', 'm3316.PNG'),
(131, 'DAMPIT', 24, '10', 64, 'Jl Gunungjati RT 03 RW 07 Dusun Gunungkelop', '-8.21431', '112.75907', 100, '#ffff00', 'm3317.PNG'),
(132, 'SENGGURUH', 24, '7', 22, 'Krajan Rt 02 RW 01', '-8.18575', '112.54577', 100, '#ffff00', 'm3318.PNG'),
(133, 'ARJOWILANGUN', 24, '16', 149, 'Jl Kartini, Dusun Barisan Kidul RT 02 RW 01RT 02 RW 01', '-8.19076 ', '112.42065', 100, '#ffff00', 'm3319.PNG'),
(134, 'REJOSARI_MLG', 24, '8', 25, 'Dusun Jeding RT 03 RW 01', '-8.27624', '112.59944', 50, '#ffff00', 'm3320.PNG'),
(135, 'BANTUR 2', 24, '8', 30, '-8,30945 / 112,53057', '-8.30945', '112.53057', 50, '#ffff00', 'm3321.PNG'),
(136, 'DONOMULYO', 24, '6', 11, 'Dusun Bandung RT 01 RW 01', '-8.2869377', '112.4271358', 100, '#ffff00', 'm3322.PNG'),
(137, 'KEDUNG_SALAM', 24, '6', 8, 'Dusun Krajan RT 06 RW 02', '-8.32483', '112.45423', 100, '#ffff00', 'm3323.PNG'),
(138, 'KESAMBON', 24, '29', 349, 'Dusun Krajan RT 06 RW 02', '-7.82092', '112.37117', 100, '#ffff00', 'm3324.PNG'),
(139, 'SENDANG BIRU', 24, '9', 51, 'Sendangbiru RT 09 RW 02', '-8.42242', '1122.68206', 100, '#ffff00', 'm3325.PNG'),
(140, 'BULULAWANG', 24, '18', 182, 'JL.Sidomulyo IV RT 32 RW 09', '-8.04485', '112.3813', 100, '#ffff00', 'm3326.PNG'),
(141, 'KEPANJEN', 24, '1', 173, 'Jl Raya Sumedang, Cempokomulyo RT 05 RW 04', '-8.08085', '112,3358', 50, '#ffff00', 'm3327.PNG'),
(142, 'LAWANG IM3', 24, '27', 322, '112,3358', '-7.49191', '112,4205', 100, '#ffff00', 'm3328.PNG'),
(143, 'PAGAK', 24, '7', 20, 'Dusun Krajan RT 20 RW 05', '-8,13542', '112.3128', 100, '#ffff00', 'm3329.PNG'),
(144, 'COBAN RONDO', 24, '28', 330, 'JL.Coban Rondo RT 18 RW 04', '-7.860148', '112.486283', 50, '#ffff00', 'm3330.PNG'),
(145, 'PUJON', 24, '28', 332, 'Desa Ngroto RT 11 Rw 05', '-7.8431102', '112.466138', 100, '#ffff00', 'm3331.PNG'),
(146, 'SUMBER PUCUNG', 24, '17', 156, 'JL.Sersan Sawali RT 03 RW 01', '-8.09098', '112.284', 100, '#ffff00', 'm3332.PNG'),
(147, 'SINGOSARI-IM3', 24, '3', 309, 'Jl sultan agung RT 02 RW 03', '-7.52539', '112.4036', 100, '#ffff00', 'm3333.PNG'),
(148, 'V_PUJIHARJO', 24, '32', 364, 'Dusun Driyel RT 14 RW 03', '-8.366828', '112.881369', 100, '#ffff00', 'm3334.PNG'),
(149, 'WAJAK', 24, '13', 108, 'JL.Panglima Sudirman RT 04 RW 06', '-8.102148', '112.72503', 100, '#ffff00', 'm3335.PNG'),
(150, 'GN_KAWI', 24, '34', 402, 'Desa Wonosari RT 06 RW 02 ', '-8.030637', '112.492029', 100, '#ffff00', 'm3336.PNG'),
(151, 'TAMBAKSARI_MLG', 24, '9', 38, 'Dusun Sidomulyo RT 20 RW 03', '-8.22169', '112.4442', 100, '#ffff00', 'm3337.PNG'),
(152, 'GONDANG LEGI', 24, '15', 128, 'Jl Trunojoyo Gank Kramat RT 24 RW 03', '-8.1729013', '112.6315241', 100, '#ffff00', 'm3338.PNG'),
(153, 'TUMPANG', 24, '20', 211, 'Jl Kramat Raya RT 08 RW 10', '-8.003209', '112.7658761', 100, '#ffff00', 'm3339.PNG'),
(154, 'SUDIMORO', 24, '18', 175, 'Jl Sudimoro RT 05 RW 02', '-8.123044', '112.671747', 100, '#ffff00', 'm3340.PNG'),
(155, 'SUKORAME', 24, '20', 211, 'Dusun Pandan RT 03 RW 01', '-8.0193952', '112.7303994', 100, '#ffff00', 'm3341.PNG'),
(156, 'NGANTANG', 24, '29', 342, 'Desa Selorejo', '-7.8829249', '112.3635695', 100, '#ffff00', 'm3342.PNG'),
(157, 'SENGKALING', 24, '2', 286, 'Desa Mulyo Agung', '-7.9101416', '112.5831307', 50, '#ffff00', 'm3343.PNG'),
(158, 'KEBONAGUNG', 24, '23', 255, 'Jl Raya Genengan RT 01 RW 01', '-8.043334', '112.607002', 50, '#ffff00', 'm3344.PNG'),
(159, 'PURWANTORO_MLG', 24, '22', 240, 'Jl Saptoraya Graha Garden', '-7.9523492', '112.6796025', 50, '#ffff00', 'm3345.PNG'),
(160, 'SUMBERMANJING WETAN', 24, '9', 48, 'Dusun Sumbermanjing Wetan', '-8.261826', '112.691868', 100, '#ffff00', 'm3346.PNG'),
(161, 'PRINGO', 24, '18', 188, 'Jl Raya Pringu RT 06 RW 02', '-8.09165', '112.683703', 100, '#ffff00', 'm3347.PNG'),
(162, 'ANIS_LAWANG', 24, '27', 325, 'Jl Sumberwaras No 04 RT 04 RW 01', '-78432599', '112,697337', 50, '#ffff00', 'm3348.PNG'),
(163, 'NODAL SENDANG BIRU', 24, '9', 48, 'Jl Sumbermanjing Wetan', '-8.313422', '112.689001', 50, '#ffff00', 'm3349.PNG'),
(164, '-', 22, '14', 126, 'Jl Gatot Subroto 14 Sedayu ( Koramil Turen )', '-8.1790299', ' 112.6894456', 50, '#ff8000', 'm3350.PNG'),
(165, '-', 22, '27', 323, 'Jl. Walisongo RT 03 RW 02', '-7.8335079', ' 112.6872812', 50, '#ff8000', 'm3351.PNG'),
(166, '-', 22, '15', 130, 'Dusun Kendayaan RT 21 RW 07', '-8.1833193', '112.641537', 50, '#ff8000', 'm3352.PNG'),
(167, '-', 22, '26', 289, 'Jl Notojoyo No 107 RT 14 RW 04', '0 ', '0 ', 50, '#ff8000', 'm3353.PNG'),
(168, '3G-PAKISMALANG', 30, '22', 245, 'Pesantren RT 01 RW 01', '-7.9552106', '112.7110248', 50, '#00ffff', 'm3354.PNG'),
(169, 'KETAWANG MALANG', 30, '15', 138, 'Jl Banyulegi RT 29 RW 04', '-8.14155', '112.64429', 50, '#00ffff', 'm3355.PNG'),
(170, 'GEDANGAN - JABUNG', 30, '21', 226, 'Dusun Gedangan RT 20 RW 03', '-7.95196', '112.7488', 50, '#00ffff', 'm3356.PNG'),
(171, 'COBAN RONDO - PUJON', 30, '28', 330, 'Jl. Coban Rondo / Sebaluh RT 18 RW 04', '-7.8604387', ' 112.4856188', 50, '#00ffff', 'm3357.PNG'),
(172, 'EAST-90', 30, '16', 143, 'Krajan RT 09 RW 04', '-8.20476', '112.46583', 50, '#00ffff', 'm3358.PNG'),
(173, '-', 30, '22', 240, 'Jl. Anila Sawojajar III RT 03 RW 10', '-7.96448', '112.66998', 50, '#00ffff', 'm3359.PNG'),
(174, '72', 30, '25', 272, 'Dusun Jemunan RT 07 RW 02', '-7.89678', '112,60197', 100, '#00ffff', 'm3360.PNG'),
(175, '3G-AMPELDENTO', 30, '26', 292, 'Dusun Kendalsari RT 04 RW 08', '-7.89678', '112.60197', 50, '#00ffff', 'm3361.PNG'),
(176, '69', 30, '28', 334, 'Dusun Manting RT 22 RW 03', '-7.8200131', '112.440793', 100, '#00ffff', 'm252.PNG'),
(177, '3a', 30, '6', 11, 'JL.Raya Donomulyo RT 07 RW 02', '-8.2844821', '112.3885648', 100, '#00ffff', 'm253.PNG'),
(178, 'PAKIS', 30, '22', 235, 'Jln.Raya Sumberpasir RT 01 RW 02', '-7.97186', '112.73351', 50, '#00ffff', 'm254.PNG'),
(179, 'SINGOSAR', 30, '3', 309, 'JL.Yonkav Randu Gembolo RT 02 RW 04 Ardimulyo', '-7.87186', '112.68214', 50, '#00ffff', 'm255.PNG'),
(180, 'WAJAK', 30, '13', 108, 'Desa Wajak RT 24 RW 03 ', '-8.10213', '112.72793', 100, '#00ffff', 'm256.PNG'),
(181, '3', 30, '15', 128, 'Desa Gondanglegi Kulon Rt 11 RW 05', '-8.17323', '112.63233', 100, '#00ffff', 'm257.PNG'),
(182, 'NODAL PURWODADI', 30, '32', 365, 'Dusun Gampingan RT 19 RW 06 ', '-8.31239', '112.84271', 100, '#00ffff', 'm258.PNG'),
(183, 'MULYOAGUNG', 30, '2', 287, 'Dusun Sempu  RT 01 RW 01 ', '-7.92767', '112.5695', 100, '#00ffff', 'm259.PNG'),
(184, 'PURWODADI', 30, '32', 376, 'Purwodadi RT.015 RW. 005', '-8.3561833', '112.8423778', 100, '#00ffff', 'm2510.PNG'),
(185, 'SUMBEREJO MALANG', 30, '8', 25, 'Dusun Jeding RT 08 RW 03', '-8.27237 / ', '112.6146', 100, '#00ffff', 'm2511.PNG'),
(186, 'SEKAR BANYU', 30, '9', 41, 'Desa Sumbergetong RT 19 RW 03  ', '-8.2619', ' 112.74186', 100, '#00ffff', 'm2512.PNG'),
(187, 'BASUKI RAHMAT-SUMBER PUCUNG', 30, '17', 157, 'JL.Jendral Basuki Rahmat RT 14 RW 02', '-8.15776 ', '112.452257', 100, '#00ffff', 'm2513.PNG'),
(190, 'Dawuhan', 30, '12', 84, 'JL.Raya Karanganyar Desa Karanganyar RT 29 RW 12 ', '-8.07429', '112.75696', 200, '#00ffff', 'm3445.PNG'),
(191, 'patuk picis', 30, '12', 79, 'Dusun Aran-aran RT 41 RW 10 ', '-8.11203', '112.78546', 100, '#00ffff', 'm53.PNG'),
(192, 'raya jatikerto-kromengan', 30, '33', 378, 'Jl.Raya Jatikerto RT 33 RW 04 ', '-8.1299067', '112.5465432', 100, '#00ffff', 'm2514.PNG'),
(193, 'puntodewo ngantang', 30, '29', 349, 'Jl.Puntodewo RT03 RW 01', '-7.8255147', '112.3691055', 100, '#00ffff', 'm2119.PNG'),
(194, '71', 30, '6', 8, 'Dusun Ngliyep RT.82 RW.17 ', '-8.36055', '112.4299', 100, '#00ffff', 'm43.PNG'),
(195, 'Garuda-pakis aji', 30, '23', 247, 'Jl.Garuda RT 14 RW 02 ', '-8.07178', '112.59092', 100, '#00ffff', 'm2120.PNG'),
(196, 'raya ngijo-Karangploso', 30, '26', 292, 'Dusun Kedawung RT 04 RW 02', '-7.90611', '112.61408', 100, '#00ffff', 'm224.PNG'),
(197, 'Indrokiloselatan-Lawang', 30, '27', 326, 'Desa Bedali RT 04 RW 08 ', '-7.84828', '112.68606', 100, '#00ffff', 'm3.PNG'),
(198, 'Sengkaling', 30, '2', 286, 'Jl.Raya Mulyoagung No.178 RT 04 RW 02 ', '-7.9159', '112.58823', 50, '#00ffff', 'm3362.PNG'),
(199, 'Randoagung-Singosari', 30, '3', 311, 'Dsn. Gondang Desa Randuagung RT 06 RW 06 ', '-7.86033', '112.68304', 50, '#00ffff', 'm54.PNG'),
(200, 'Magirasari-Pakissaji', 30, '23', 257, 'Jl.Margersari RT 02 RW 01 ', '-8.02361', '112.61652', 50, '#00ffff', 'm3446.PNG'),
(201, 'Abdul Mukti-Turen', 30, '14', 110, 'Jl.Thamrin RT 03 RW 01 ', '-8.22592', '112.68597', 50, '#00ffff', 'm3447.PNG'),
(202, 'Sididadi - Kepanjen', 30, '1', 170, 'Jl.Sidodadi RT 06 RW 03 ', '-8.10364', '112.57372', 50, '#00ffff', 'm3448.PNG'),
(203, 'Talok', 30, '14', 116, 'Jl.Tempean Gg 1 RT 04 RW 06 ', '-8.18765', '112.70651', 50, '#00ffff', 'm3449.PNG'),
(204, 'Jambangan', 30, '10', 59, 'Jl.Barito Dusun Umbulrejo RT 02 RW 12', '-8.1860366', '112.7628054', 50, '#00ffff', 'm3363.PNG'),
(205, 'Jatisari', 30, '19', 199, 'Dusun Sumbersuko RT 33 RW 07', '-8.05772', '112.66058', 50, '#00ffff', 'm3450.PNG'),
(206, 'Pujon_2', 30, '28', 328, 'Dusun Bakir RT 05 RW 01 ', '-7.86612', '112.43781', 50, '#00ffff', 'm3451.PNG'),
(207, 'Srimulyo', 30, '10', 56, 'Dusun Kampung Selang RT 29 Rw 07 ', '-8.26988', '112.78545', 50, '#00ffff', 'm3452.PNG'),
(208, 'Sepanjang turen', 30, '15', 141, 'Jl.Letjen S Parman RT 14 RW 02 ', '-8.16969', '112.66322', 50, '#00ffff', 'm3453.PNG'),
(209, 'Harjokuncaran', 30, '9', 47, 'Dukuh Majapurno RT 35 RW 10 ', '-8.2971', '112.69292', 50, '#00ffff', 'm3454.PNG'),
(210, 'Codo malang', 30, '13', 104, 'Jl.Teuku Umar No 8 RT 01 RW 01 ', '-8.12297', '112.72681', 50, '#00ffff', 'm3455.PNG'),
(211, 'East-48', 30, '21', 219, 'Dusun Dumpul RT 01 RW 01', '-7.975957', '112.746615', 50, '#00ffff', 'm3456.PNG'),
(212, '11', 30, '10', 64, 'JL.Simpang Ngruwan RT 06 RW 06', '-8.21228', '112.75315', 50, '#00ffff', 'm3457.PNG'),
(213, 'Mulyo Agung Dau Malang', 30, '2', 286, 'Jl.Margo Basuki RT 02 RW 02', '-7.92068', '112.58718', 50, '#00ffff', 'm3458.PNG'),
(214, 'Pandanlandung - wagir', 30, '25', 278, 'Desa Pandanlandung RT 05 RW 01 ', '-7.97615', '112.5908', 50, '#00ffff', 'm3459.PNG'),
(215, 'sykosari - Gondanglegi', 30, '15', 129, 'Dusun Sukosari RT01 RW 01', '-8.16535', '112.61262', 50, '#00ffff', 'm3460.PNG'),
(216, 'Harjuno - wajak', 30, '13', 108, 'Jl.Harjuno RT 01 RW 07', '-8.10313', '112.72703', 50, '#00ffff', 'm3461.PNG'),
(217, '24', 30, '18', 184, 'Jl Diponegoro RT 11 RW 06 ', '-8.08139', '112.64028', 50, '#00ffff', 'm3462.PNG'),
(218, 'Bridjen abdul manan - pakis', 30, '28', 331, 'Jl. Raya Brigjen Abdul Manan RT 07 Rw 04 ', '-7.84282', '112.46708', 50, '#00ffff', 'm2515.PNG'),
(219, 'Gondanglegi wetab - gondanglegi', 29, '28', 331, 'jl. Hayam Wuruk RT 02 RW 01', '-8.17312', '112.64132', 50, '#8080ff', 'm3463.PNG'),
(220, '34', 30, '3', 302, 'Jl. Kademangan No. 61 RT 04 Rw 02 ', '-7.91151', '112.65839', 50, '#00ffff', 'm3464.PNG'),
(221, 'Madukoro - lawang', 30, '27', 326, 'Jl. Madukoro No. 5 RT 01 RW 04', '-7.83239', '112.69821', 50, '#00ffff', 'm3465.PNG'),
(222, 'Sumber Sekar Gf- ', 30, '2', 288, 'Dsn. Banjar Tengah RT 01 RW 04 ', '-7.91427', '112.56976', 50, '#00ffff', 'm3466.PNG'),
(223, 'Kendal Payal_GF', 30, '23', 256, 'Dsn Segeran Gg.Dukut 190 RT 04 RW 09 ', '-8.03443 ', '112.62752', 50, '#00ffff', 'm3467.PNG'),
(224, '3G_KARANGDUREN', 30, '19', 200, 'Dusun Tambakasri RT 07 Rw 01 ', '-8.04998', '112.63104', 50, '#00ffff', 'm3468.PNG'),
(225, 'Pagedangan_gf', 30, '14', 119, 'Jl.RS Lama Bokor RT 23 RW 11 ', '-8.17005 ', '112.70829', 50, '#00ffff', 'm3469.PNG'),
(226, 'Simpang Matram', 30, '10', 64, 'Jl. Mataram RT 01 RW 04', '-8,2152', '112.74538', 50, '#00ffff', 'm3470.PNG'),
(227, '3G_SUMBERSUKO MALANG', 30, '19', 199, 'Jl. Setia Budi RT 15 RW 04', '-8.04268 ', '112.66423', 50, '#00ffff', 'm3471.PNG'),
(228, '3G_SAMBIGEDE MALANG', 30, '17', 155, 'Dusun Krajan Jl. Ir Soekarno Hatta RT 10 RW 02', '-8.161604', '112.491428', 50, '#00ffff', 'm3472.PNG'),
(229, 'DUSUN DORO-DAU', 30, '2', 281, 'Dusun  Doro RT 26 RW 03', '-7.95386 ', '112.58648', 50, '#00ffff', 'm3473.PNG'),
(230, '3G GADING KULON', 30, '2', 285, 'Jl.Rambaan RT 02 RW 03', '-7.92806', '112.59583', 50, '#00ffff', 'm3474.PNG'),
(231, '#G-KENDAL PAYAK MALANG', 30, '23', 256, 'Dusun Segaran Gg.Mahoni RT 03 RW 08', '-8.03581 ', '112.62828', 50, '#00ffff', 'm3475.PNG'),
(232, '3G TUREN MALANG', 30, '14', 125, 'Jl.Ahmad Yani NO.78 RT 05 RW 08 ', '-8.168757', '112.6954076', 50, '#00ffff', 'm3476.PNG'),
(233, '3G TAMANHARJO MALANG ', 30, '3', 310, 'Jl.Kebonagung RT 05 RW 01 ', '-7.89615 ', '112.67578', 50, '#00ffff', 'm3477.PNG'),
(234, 'Singosari Losari', 30, '3', 313, 'Jl.Ronggolawe 26 RT 04 RW 02', '-7.89132', '112.66493', 50, '#00ffff', 'm3478.PNG'),
(235, 'MENDALAN WANGI_GF', 30, '25', 268, 'Dusun tenggulunan RT 04 RW 02', '-8.03165', '112.60274', 50, '#00ffff', 'm2121.PNG'),
(236, 'Tegal tejosari - Singosari', 30, '3', 312, 'Jl Tegal Tejosari RT 07 RW 09', '-7.8672287', '112.6626544', 50, '#00ffff', '5.PNG'),
(237, 'Pakis Aji', 30, '23', 252, 'Jln Simpang RT 10 RW 02', '-8.06406', '112.60108', 50, '#00ffff', '2.PNG'),
(238, '70', 30, '24', 263, 'Jl. Kesamben RT 03 RW 04', '-8.06344', '112.571748', 100, '#00ffff', '9.PNG'),
(239, 'Nampes - Singosari', 30, '3', 300, 'Jl Raya Nampes RT 04 RW 02', '-7.90023', '112.69538', 50, '#00ffff', '72.PNG'),
(240, '83', 30, '20', 211, 'Jl. Tunggul Ametung No.550 RT 11 RW 10', '-8.00447', '112.76325', 100, '#00ffff', '6.PNG'),
(241, '76', 30, '12', 89, 'Dusun Wates RT 01 RW 01', '-8.03994', '112.76942', 50, '#00ffff', '91.PNG'),
(242, '73', 30, '29', 348, 'Dusun Sumbergondo RT 23 RW 07', '-7.83209', '112.37344', 100, '#00ffff', '4.PNG'),
(243, '75', 30, '35', 403, 'Jl Tengku Umar RT 12 RW 02', '-8.19621', '112,62097', 50, '#00ffff', '8.PNG'),
(244, '85', 30, '9', 47, 'Jl Harjokuncaran RT 35 RW 04', '-8.29808', '112.69432', 50, '#00ffff', '71.PNG'),
(245, '81', 30, '32', 370, 'Dusun Sukosari RT 07 RW 02', '-8.2260348', '112.8362545', 100, '#00ffff', '81.PNG'),
(246, '74', 30, '7', 20, 'Krajan RT 11 RW 03', '-8.22566', '112.52586', 100, '#00ffff', '3.PNG'),
(247, '86', 30, '6', 11, 'Jl. Hasanudin RT 01 RW 01', '-8.28719', '112.42736', 100, '#00ffff', '31.PNG'),
(248, '82', 30, '33', 377, 'Jl Raya Slorok RT 05 RW 02', '-8.1438829', '112.5240976', 50, '#00ffff', '41.PNG'),
(249, '87', 30, '3', 309, 'Dusun Gembolo RT 05 RW 04', '-7.87027', '112.68013', 50, '#00ffff', '42.PNG'),
(250, '80', 30, '24', 258, 'Jl S. Parman RT 06 RW 03', '-8.09108', '112.54036', 50, '#00ffff', 'Capture.PNG'),
(251, '84', 30, '25', 270, 'Jl Raya RT 08 RW 03', '-8.01293', '112.59561', 100, '#00ffff', 'Capture1.PNG'),
(252, '78', 30, '10', 60, 'Krajan RT 06 Rw 01', '-8.19127', '112.7163', 50, '#00ffff', 'Capture2.PNG'),
(253, '77', 30, '30', 352, 'Dusun Bara\'an RT 22 RW 05', '-7.80577', '112.37382', 100, '#00ffff', '92.PNG'),
(254, '79', 30, '15', 128, 'Jl.Ahmad Yani Rt. 08 Rw. 01 Ds.Gondanglegi Kulon', '-8.17347', '112.63477', 50, '#00ffff', '32.PNG'),
(255, '-', 30, '19', 194, 'Dusun Mulyojati RT 06 RW 02', '-8.068', '112.6688', 50, '#00ffff', '51.PNG'),
(256, '-', 30, '1', 165, 'Jl Raya Gunung Kawi No. 79 RT 07 RW 02', '-8.12645', '112.5549389', 50, '#00ffff', 'Capture3.PNG'),
(257, 'JAW-EJV-0262-x-13', 30, '19', 194, 'Dusun Mulyojati Rt. 06 Rw. 02', '-8.067892', '112.668778', 50, '#00ffff', '61.PNG'),
(258, 'Talangagung Kepanjen', 30, '1', 165, 'Jl. Raya g. Kawi No.79 Rt. 07 Rw.02', '-8.126604', '112.555039', 50, '#00ffff', '721.PNG'),
(259, 'JAW-EJV-0382-X-B', 30, '26', 292, 'Dusun Ngijo(Samping TPS) ', '-7.91275', '112.606389', 50, '#00ffff', '62.PNG'),
(260, 'Ampeldento-Pakis', 30, '22', 238, 'Dusun Dami RT 08 RW 03', '-7.96345', '112.69066', 50, '#00ffff', '93.PNG'),
(261, 'ampelgading_Protelindo', 30, '11', 71, 'Jl sirorenggo RT 01 RW 01', '-8.230583', '112.910333', 50, '#00ffff', 'Capture4.PNG'),
(262, 'Kepanjen_Protelindo', 30, '1', 174, 'Jl Panji Materaman RT 06 RW 04', '-8.134575', '112.575189', 50, '#00ffff', '33.PNG'),
(263, 'Wagir_Protelindo', 30, '25', 275, 'Jl sidorahayu 96B RT 14 RW 03', '-7.999117', '112.598544', 50, '#00ffff', 'Capture5.PNG'),
(264, 'Pakis_pakis jajar / JAW-EJV-0555-X-B', 30, '22', 245, 'Jl Jamparing Trajeng RT 01 RW 06', '-7.953264', '112.729408', 50, '#00ffff', 'Capture6.PNG'),
(265, 'Ngantang_Pagersari / JAW-EJW-0563-X-B', 30, '29', 337, 'Dusun Pagersari Krajan RT 07 RW 01', '-7.941547', '112.384483', 50, '#00ffff', 'Capture7.PNG'),
(266, 'Karangploso_ampeldento/JAW-EJV-0554-X-B', 30, '26', 293, 'Dusun Jumput RT 04 RW 01', '-7.906378', '112.598422', 50, '#00ffff', 'Capture8.PNG'),
(267, 'Dau_Mulyoagung / JAW-EJV-0546-X-B', 30, '2', 286, 'Jl sidomakmur No 104 RT 02 RW 02', '-7.922719', '112.580647', 50, '#00ffff', 'Capture9.PNG'),
(268, 'Sumbermanjingwetan_sumberagung', 30, '9', 45, 'Dusun Krajan RT 08 RW 01', '-8.335006', '112.679444', 50, '#00ffff', 'Capture10.PNG'),
(269, 'Pujon_madiredo', 30, '28', 335, 'Dusun Delik RT 32 RW 10', '-7.818861', '112.4565', 50, '#00ffff', 'Capture11.PNG'),
(270, 'Pujon_Wiyurejo', 30, '28', 336, 'Dusun Wiyu RT 12 RW 04', '-7.825917', '112.475778', 50, '#00ffff', 'Capture12.PNG'),
(271, 'Wagir_Sitirejo', 30, '25', 269, 'Dusun Lemah Duwur RT 08 RW 01', '-8.013225', '112.360697', 50, '#00ffff', 'Capture13.PNG'),
(272, 'BULULAWANG_KREBET', 30, '18', 179, 'Jl. Kyai H.Wahid Hasim RT 09 RW 03', '-8.105111', '112.634639', 50, '#00ffff', 'Capture14.PNG'),
(273, 'Wagir Sidorahayu', 30, '25', 275, 'Jl Kresna RT 13 RW 03', '-8.00069', '112.353675', 50, '#00ffff', 'Capture15.PNG'),
(274, 'Turen_Kedok', 30, '14', 122, 'Dusun Kedok RT 24 RW 03', '-8.148855', '112.69211', 50, '#00ffff', 'Capture16.PNG'),
(275, 'STO Tumpang', 20, '20', 211, 'Jl Raya Tumpang RT 08 RW 09', '-8.00189', '112.76326', 50, '#ff00ff', 'Capture17.PNG'),
(276, 'STO DAMPIT', 20, '10', 64, 'Jl Semeru 14 RT 02 RW 06 Belakang Telkom', '-8.21345', '112.75395', 50, '#ff00ff', '722.PNG'),
(277, 'STO PAGAK', 20, '7', 19, 'Jl Abdul Razak RT 11 RW 03', '-8.22664', '112.52499', 100, '#ff00ff', '723.PNG'),
(278, 'STO KARANGPLOSO', 20, '26', 294, 'Jl Panglima Sudirman', '-7.89606', '112.59147', 50, '#ff00ff', 'Capture18.PNG'),
(279, 'STO KEPANJEN', 20, '1', 174, 'Jl Sultan Agung', '-8.13273', '112.57146', 100, '#ff00ff', '724.PNG'),
(280, 'talok2', 20, '10', 63, 'Jl. Semeru RT 32 RW 06', '-8.1632599', '112.743955', 100, '#ff00ff', '725.PNG'),
(283, 'WONOKERTO', 20, '8', 36, 'Dusun Sukosari RT 39 RW 05', '-8.22405', '112.57452', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba1.jpg'),
(284, 'PURABALEKAMBANG', 20, '8', 28, 'Pantai Wisata Balaikambang, Dusun Sumber Jambe', '-8.4031', '112.53812', 100, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba2.jpg'),
(285, 'HARJOKUNCARAN2', 20, '9', 47, 'Desa Harjokuncaran RT 18 RW 06', '-8.26702', '112.7047', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba3.jpg'),
(286, 'TANGGUNGTUREN', 20, '14', 117, 'Jl. Wr Supratman RT 01 RW 04', '-8.1692274', '112.6784207', 100, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba4.jpg'),
(287, 'KETAWANG', 20, '15', 138, 'Jl. Banyulegi II RT 29 RW 04', '-8.1399537', '112.6439753', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba5.jpg'),
(288, 'GONDANGLEGI', 20, '15', 141, 'Dusun Sono Kembang RT 02 RW 04', '-8.19133', '112.6607', 100, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba6.jpg'),
(289, 'GONDANGLEGI2', 20, '15', 141, 'Dusun Kasin RT 10 RW 03', '-8.1865465', '112.6489065', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba7.jpg'),
(290, 'JATIKUWIPTI', 20, '17', 155, 'Dusun Krajan RT 10 RW 02', '-8.1597718', '112.49898554', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba8.jpg'),
(291, 'TUMPANG2', 20, '20', 209, 'JL. Raya Jeru RT 09 RW 06', '-7.99003', '112.76171', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba9.jpg'),
(292, 'BOKOR', 20, '20', 207, 'Dusun Karangjambe RT 15 RW 04', '-8.00097422', '112.7313858', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba10.jpg'),
(293, 'WIJAYAKUSUMA', 20, '22', 240, 'Jl. Lowok Soro RT 03 RW 10', '-7.9570798', '112.6699377', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba11.jpg'),
(294, 'KEBONAGUNG', 20, '22', 243, 'Jl. Asrikaton Gang Anggrek I RT10 RW 03', '-7.9533642', '112.6900436', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba12.jpg'),
(295, 'BABADANMALANG', 20, '24', 264, 'Dusun Maduharjo RT 05 RW 02', '-8.00208', '112.503069', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba13.jpg'),
(296, 'SUMBERSEKAR3PTI', 20, '2', 288, 'Dusun Banjar Tengah RT 01 RW 04', '-7.9142587', '112.5717203', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba14.jpg'),
(297, 'WAHIDIN', 20, '3', 309, 'Dusun Karang Jati Barat RT 03 RW 08', '-7.861411', '112.6631075', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba15.jpg'),
(298, 'WATUGEDE2', 20, '3', 301, 'Jl. Flamboyan RT 04 RW 04', '-7.9040686', '112.667002', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba16.jpg'),
(299, 'SEGARAN', 20, '3', 302, 'Dusun Tanjung RT 02 RW 07', '-7.91566', '112.6664', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba17.jpg'),
(300, 'SMP ISLAM MAARIF', 20, '3', 310, 'Dusun Gondorejo RT 01 RW 04', '-7.8980205', '112.6840083', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba18.jpg'),
(301, 'LOWOKJATI', 20, '3', 300, 'Dusun Lowok Jati RT 01 RW 04', '-7.8858122', '112.70554', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba19.jpg'),
(302, 'MANGLIAWAN', 20, '3', 305, 'Dusun Kembang RT 01 RW 08', '-7.8963769', '112.6551673', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba20.jpg'),
(303, 'COWEK', 20, '27', 321, 'Perum Anggun Sejahtera', '-7.822979', '112.7159262', 50, '#ff00ff', '44c8a850-f813-499b-b036-ee696c8665ba21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(255) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `kecamatan_id`, `desa`) VALUES
(404, 10, 'Amadanom'),
(405, 26, 'Ampeldento'),
(406, 22, 'Ampeldento'),
(407, 32, 'Ampelgading'),
(408, 3, 'Ardimulyo'),
(409, 1, 'Ardirejo'),
(410, 21, 'Argosari'),
(411, 12, 'Argosuko'),
(412, 9, 'Argotirto'),
(413, 11, 'Argoyuwono'),
(414, 16, 'Arjosari'),
(415, 16, 'Arjowilangun'),
(416, 22, 'Asrikaton'),
(417, 24, 'Babadan'),
(418, 18, 'Bakalan'),
(419, 35, 'Balearjo'),
(420, 24, 'Balesari'),
(421, 13, 'Bambang'),
(422, 8, 'Bandungrejo'),
(423, 34, 'Bangelan'),
(424, 3, 'Banjararum'),
(425, 6, 'Banjarejo'),
(426, 29, 'Banjarejo'),
(427, 35, 'Banjarejo'),
(428, 22, 'Banjarejo'),
(429, 24, 'Banjarsari'),
(430, 8, 'Bantur'),
(431, 29, 'Banturejo'),
(432, 10, 'Baturetno'),
(433, 3, 'Baturetno'),
(434, 30, 'Bayem'),
(435, 27, 'Bedali'),
(436, 12, 'Belung'),
(437, 28, 'Bendosari'),
(438, 20, 'Benjor'),
(439, 13, 'Blayu'),
(440, 26, 'Bocek'),
(441, 20, 'Bokor'),
(442, 13, 'Bringin'),
(443, 35, 'Brongkal'),
(444, 18, 'Bululawang'),
(445, 15, 'Bulupitu'),
(446, 10, 'Bumirejo'),
(447, 22, 'Bunutwetan'),
(448, 3, 'Candirenggo'),
(449, 1, 'Cempokomulyo'),
(450, 35, 'Clumprit'),
(451, 13, 'Codo'),
(452, 1, 'Curungrejo'),
(453, 13, 'Dadapan'),
(454, 25, 'Dalisodo'),
(455, 10, 'Dampit'),
(456, 12, 'Dawuhan'),
(457, 3, 'Dengkol'),
(458, 1, 'Dilem'),
(459, 6, 'Donomulyo'),
(460, 26, 'Donowarih'),
(461, 9, 'Druju'),
(462, 20, 'Duwet'),
(463, 20, 'Duwet  Krajan'),
(464, 18, 'Gading'),
(465, 21, 'Gadingkembar'),
(466, 2, 'Gadingkulon'),
(467, 32, 'Gadungsari'),
(468, 31, 'Gajahrejo'),
(469, 7, 'Gampingan'),
(470, 15, 'Ganjaran'),
(471, 31, 'Gedangan'),
(472, 14, 'Gedog Kulon'),
(473, 14, 'Gedog Wetan'),
(474, 23, 'Genengan'),
(475, 26, 'Girimoyo'),
(476, 31, 'Girimulyo'),
(477, 23, 'Glanggang'),
(478, 15, 'Gondanglegi Kulon'),
(479, 15, 'Gondanglegi Wetan'),
(480, 25, 'Gondowangi'),
(481, 12, 'Gubugklakah'),
(482, 21, 'Gunungjati'),
(483, 3, 'Gunungrejo'),
(484, 19, 'Gunungronggo'),
(485, 19, 'Gunungsari'),
(486, 9, 'Harjokuncaran'),
(487, 21, 'Jabung'),
(488, 10, 'Jambangan'),
(489, 19, 'Jambearjo'),
(490, 12, 'Jambesari'),
(491, 33, 'Jambuwer'),
(492, 17, 'Jatiguwi'),
(493, 14, 'Jatikerto'),
(494, 1, 'Jatirejoyoso'),
(495, 23, 'Jatisari'),
(496, 19, 'Jatisari'),
(497, 25, 'Jedong'),
(498, 1, 'Jenggolo'),
(499, 20, 'Jeru'),
(500, 14, 'Jeru'),
(501, 32, 'Jogomulyo'),
(502, 29, 'Jombok'),
(503, 35, 'Kademangan'),
(504, 16, 'Kaliasri'),
(505, 16, 'Kalipare'),
(506, 16, 'Kalirejo'),
(507, 27, 'Kalirejo'),
(508, 2, 'Kalisongo'),
(509, 20, 'Kambingan'),
(510, 35, 'Kanigoro'),
(511, 12, 'Karanganyar'),
(512, 23, 'Karangduren'),
(513, 17, 'Karangkates'),
(514, 12, 'Karangnongko'),
(515, 23, 'Karangpandan'),
(516, 33, 'Karangrejo'),
(517, 8, 'Karangsari'),
(518, 35, 'Karangsuko'),
(519, 2, 'Karangwidoro'),
(520, 18, 'Kasembon'),
(521, 30, 'Kasembon'),
(522, 18, 'Kasri'),
(523, 29, 'Kaumrejo'),
(524, 34, 'Kebobang'),
(525, 23, 'Kebonagung'),
(526, 14, 'Kedok'),
(527, 9, 'Kedungbanteng'),
(528, 1, 'Kedungpedaringan'),
(529, 22, 'Kedungrejo'),
(530, 6, 'Kedungsalam'),
(531, 21, 'Kemantren'),
(532, 21, 'Kemiri'),
(533, 1, 'Kemiri'),
(534, 14, 'Kemulan'),
(535, 23, 'Kendalpayak'),
(536, 21, 'Kenongo'),
(537, 1, 'Kepanjen'),
(538, 32, 'Kepatihan'),
(539, 26, 'Kepuharjo'),
(540, 24, 'Kesamben'),
(541, 15, 'Ketawang'),
(542, 27, 'Ketindan'),
(543, 20, 'Kidal'),
(544, 13, 'Kidangbang'),
(545, 3, 'Klampok'),
(546, 9, 'Klepu'),
(547, 34, 'Kluwut'),
(548, 24, 'Kranggan'),
(549, 18, 'Krebet'),
(550, 18, 'Krebetsenggrong'),
(551, 33, 'Kromengan'),
(552, 2, 'Kucur'),
(553, 18, 'Kuwolu'),
(554, 2, 'Landungsari'),
(555, 3, 'Langlang'),
(556, 27, 'Lawang'),
(557, 11, 'Lebakharjo'),
(558, 3, 'Lohsari'),
(559, 18, 'Lumbangsari'),
(560, 28, 'Madiredo'),
(561, 24, 'Maguan'),
(562, 10, 'Majangtengah'),
(563, 20, 'Malangsuko'),
(564, 22, 'Mangliawan'),
(565, 1, 'Mangunrejo'),
(566, 25, 'Mendalanwangi'),
(567, 6, 'Mentaraman'),
(568, 1, 'Mojosari'),
(569, 2, 'Mulyoagung'),
(570, 27, 'Mulyoarjo'),
(571, 11, 'Mulyoasri'),
(572, 29, 'Mulyorejo'),
(573, 28, 'Ngabab'),
(574, 12, 'Ngadas'),
(575, 1, 'Ngadilangkung'),
(576, 21, 'Ngadirejo'),
(577, 33, 'Ngadirejo'),
(578, 12, 'Ngadireso'),
(579, 24, 'Ngajum'),
(580, 29, 'Ngantru'),
(581, 24, 'Ngasem'),
(582, 19, 'Ngawonggo'),
(583, 12, 'Ngebruk'),
(584, 17, 'Ngebruk'),
(585, 13, 'Ngembal'),
(586, 26, 'Ngenep'),
(587, 26, 'Ngijo'),
(588, 20, 'Ngingit'),
(589, 28, 'Ngroto'),
(590, 7, 'Pagak'),
(591, 14, 'Pagedangan'),
(592, 35, 'Pagelaran'),
(593, 3, 'Pagentan'),
(594, 29, 'Pagersari'),
(595, 30, 'Pait'),
(596, 12, 'Pajaran'),
(597, 23, 'Pakisaji'),
(598, 22, 'Pakisjajar'),
(599, 22, 'Pakiskembar'),
(600, 24, 'Palaan'),
(601, 10, 'Pamotan'),
(602, 20, 'Pandanajeng'),
(603, 25, 'Pandanlandung'),
(604, 19, 'Pandanmulyo'),
(605, 7, 'Pandanrejo'),
(608, 25, 'Pandanrejo'),
(609, 29, 'Pandansari'),
(610, 12, 'Pandansari'),
(611, 21, 'Pandansari Lor'),
(612, 28, 'Pandesari'),
(613, 15, 'Panggungrejo'),
(614, 1, 'Panggungrejo'),
(615, 25, 'Parangargo'),
(616, 13, 'Patokpicis'),
(617, 33, 'Peniwen'),
(618, 23, 'Permanu'),
(619, 2, 'Petungsewu'),
(620, 25, 'Petungsewu'),
(621, 34, 'Plandi'),
(622, 34, 'Plaosan'),
(623, 10, 'Pojok'),
(624, 12, 'Poncokusumo'),
(625, 30, 'Pondokagung'),
(626, 8, 'Pringgondani'),
(627, 18, 'Pringu'),
(628, 22, 'Pucangsongo'),
(629, 32, 'Pujiharjo'),
(630, 28, 'Pujon Kidul'),
(631, 28, 'Pujon Lor'),
(632, 20, 'Pulungdowo'),
(633, 3, 'Purwoasri'),
(634, 6, 'Purwodadi'),
(635, 32, 'Purwodadi'),
(636, 11, 'Purwoharjo'),
(637, 6, 'Purworejo'),
(638, 29, 'Purworejo'),
(639, 19, 'Purwosekar'),
(640, 15, 'Putat Kidul'),
(641, 15, 'Putat Lor'),
(642, 15, 'Putukrejo'),
(643, 16, 'Putukrejo'),
(644, 3, 'Randuagung'),
(645, 19, 'Randugading'),
(646, 8, 'Rejosari'),
(647, 8, 'Rejoyoso'),
(648, 10, 'Rembun'),
(649, 9, 'Ringinkembar'),
(650, 9, 'Ringinsari'),
(651, 17, 'Sambigede'),
(652, 14, 'Sanankerto'),
(653, 14, 'Sananrejo'),
(654, 22, 'Saptorenggo'),
(655, 14, 'Sawahan'),
(656, 14, 'Sedayu'),
(657, 31, 'Segaran'),
(658, 9, 'Sekarbanyu'),
(659, 22, 'Sekarpuro'),
(660, 2, 'Selorejo'),
(661, 18, 'Sempalwadak'),
(662, 7, 'Sempol'),
(663, 17, 'Senggreng'),
(664, 1, 'Sengguruh'),
(665, 15, 'Sepanjang'),
(666, 9, 'Sidoasri'),
(667, 31, 'Sidodadi'),
(668, 27, 'Sidodadi'),
(669, 29, 'Sidodadi'),
(670, 27, 'Sidoluhur'),
(671, 21, 'Sidomulyo'),
(672, 25, 'Sidorahayu'),
(673, 21, 'Sidorejo'),
(674, 35, 'Sidorejo'),
(675, 11, 'Sidorenggo'),
(676, 11, 'Simojayan'),
(677, 31, 'Sindurejo'),
(678, 9, 'Sitiarjo'),
(679, 25, 'Sitirejo'),
(680, 20, 'Slamet'),
(681, 21, 'Slamparejo'),
(682, 33, 'Slorok'),
(683, 11, 'Sonowangi'),
(684, 27, 'Srigading'),
(685, 8, 'Srigonco'),
(686, 10, 'Srimulyo'),
(687, 18, 'Sudimoro'),
(688, 22, 'Sukoanyar'),
(689, 13, 'Sukoanyar'),
(690, 25, 'Sukodadi'),
(691, 10, 'Sukodono'),
(692, 21, 'Sukolilo'),
(693, 13, 'Sukolilo'),
(694, 28, 'Sukomulyo'),
(695, 18, 'Sukonolo'),
(696, 21, 'Sukopuro'),
(697, 1, 'Sukoraharjo'),
(698, 15, 'Sukorejo'),
(699, 32, 'Sukorejo'),
(700, 15, 'Sukosari'),
(701, 30, 'Sukosari'),
(702, 16, 'Sukowilangun'),
(703, 29, 'Sumberagung'),
(704, 9, 'Sumberagung'),
(705, 8, 'Sumberbening'),
(706, 34, 'Sumberdem'),
(707, 31, 'Sumberejo'),
(708, 7, 'Sumberejo'),
(709, 12, 'Sumberejo'),
(710, 15, 'Sumberjaya'),
(711, 7, 'Sumberkerto'),
(712, 22, 'Sumberkradenan'),
(713, 7, 'Sumbermanjing Kulon'),
(714, 9, 'Sumbermanjing Wetan'),
(715, 27, 'Sumberngepoh'),
(716, 6, 'Sumberoto'),
(717, 22, 'Sumberpasir'),
(718, 16, 'Sumberpetung'),
(719, 27, 'Sumberporong'),
(720, 17, 'Sumberpucung'),
(721, 13, 'Sumberputih'),
(722, 2, 'Sumbersekar'),
(723, 10, 'Sumbersuko'),
(724, 19, 'Sumbersuko'),
(725, 25, 'Sumbersuko'),
(726, 32, 'Sumbertangkil'),
(727, 34, 'Sumbertempur'),
(728, 23, 'Sutojayan'),
(729, 35, 'Suwaru'),
(730, 21, 'Taji'),
(731, 19, 'Tajinan'),
(732, 1, 'Talangagung'),
(733, 14, 'Talangsuko'),
(734, 14, 'Talok'),
(735, 11, 'Tamanasri'),
(736, 3, 'Tamanharjo'),
(737, 32, 'Tamankuncaran'),
(738, 11, 'Tamansari'),
(739, 32, 'Tamansatriyan'),
(740, 9, 'Tambakasri'),
(741, 19, 'Tambakasri'),
(742, 9, 'Tambakrejo'),
(743, 14, 'Tanggung'),
(744, 19, 'Tangkilsari'),
(745, 11, 'Tawangagung'),
(746, 26, 'Tawangargo'),
(747, 14, 'Tawangrejeni'),
(748, 28, 'Tawangsari'),
(749, 26, 'Tegalgondo'),
(750, 9, 'Tegalrejo'),
(751, 1, 'Tegalsari'),
(752, 2, 'Tegalweru'),
(753, 6, 'Tempursari'),
(754, 17, 'Ternyang'),
(755, 11, 'Tirtomarto'),
(756, 11, 'Tirtomoyo'),
(757, 22, 'Tirtomoyo'),
(758, 32, 'Tirtoyudo'),
(759, 7, 'Tlogorejo'),
(760, 6, 'Tlogosari'),
(761, 32, 'Tlogosari'),
(762, 3, 'Toyomarto'),
(763, 6, 'Tulungrejo'),
(764, 29, 'Tulungrejo'),
(765, 20, 'Tulusbesar'),
(766, 31, 'Tumpakrejo'),
(767, 16, 'Tumpakrejo'),
(768, 20, 'Tumpang'),
(769, 14, 'Tumpukrenteng'),
(770, 3, 'Tunjungtirto'),
(771, 14, 'Turen'),
(772, 27, 'Turirejo'),
(773, 14, 'Undaan'),
(774, 15, 'Urek - Urek'),
(775, 23, 'Wadung'),
(776, 13, 'Wajak'),
(777, 18, 'Wandanpuro'),
(778, 3, 'Watugede'),
(779, 29, 'Waturejo'),
(780, 11, 'Wirotaman'),
(781, 28, 'Wiyurejo'),
(782, 30, 'Wonoagung'),
(783, 32, 'Wonoagung'),
(784, 13, 'Wonoayu'),
(785, 23, 'Wonokerso'),
(786, 8, 'Wonokerto'),
(787, 12, 'Wonomulyo'),
(788, 8, 'Wonorejo'),
(789, 27, 'Wonorejo'),
(790, 12, 'Wonorejo'),
(791, 3, 'Wonorejo'),
(792, 34, 'Wonosari'),
(793, 12, 'Wringinanom'),
(794, 20, 'Wringinsongo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `idsite`
--

CREATE TABLE `idsite` (
  `id` int(255) NOT NULL,
  `id_site` varchar(255) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `radius` int(11) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `idsite`
--

INSERT INTO `idsite` (`id`, `id_site`, `provider_id`, `kecamatan_id`, `desa_id`, `lokasi`, `latitude`, `longitude`, `radius`, `warna`, `gambar`) VALUES
(1, 'Agna', 1, 2, 3, 'Jalan Gadingkulon', '-7.957373238724236', '112.67097473144533', 200, '#8ed2d0', '12.jpg'),
(2, 'ARJO WILANGUN(ARJO WILANGUN)', 36, 16, 149, 'Dusun Barisan RT 04 RW 01', '-8.1836', '112.42331', 50, '#ff0000', '23.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`) VALUES
(1, 'kepanjen\r\n'),
(2, 'dau'),
(3, 'singosari'),
(6, 'Donomulyo'),
(7, 'Pagak'),
(8, 'Bantur'),
(9, 'Sumbermanjing Wetan'),
(10, 'Dampit'),
(11, 'Ampelgading'),
(12, 'Poncokusumo'),
(13, 'Wajak'),
(14, 'Turen'),
(15, 'Gondanglegi'),
(16, 'Kalipare'),
(17, 'Sumberpucung'),
(18, 'Bululawang'),
(19, 'Tajinan'),
(20, 'Tumpang'),
(21, 'Jabung'),
(22, 'Pakis'),
(23, 'Pakisaji'),
(24, 'Ngajum'),
(25, 'Wagir'),
(26, 'Karangploso'),
(27, 'Lawang'),
(28, 'Pujon'),
(29, 'Ngantang'),
(30, 'Kasembon'),
(31, 'Gedangan'),
(32, 'Tirtoyudo'),
(33, 'Kromengan'),
(34, 'Wonosari'),
(35, 'Pagelaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_perusahaan`
--

CREATE TABLE `nama_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `marker_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nama_perusahaan`
--

INSERT INTO `nama_perusahaan` (`id`, `nama_perusahaan`, `alamat`, `marker_color`) VALUES
(1, 'PT. Akses Prima Indonesia', 'Menara BCA-41th Floor Jl. MH Thamrin No.1 Jakarta 10310', '#8ed2d0'),
(2, 'PT. Bumen Dutacipta Sarana', 'Menara Bidakara 1 Lantai 20 Jl. Jend. Gatot Subroto Kav. 71-73 Pancoran Jakarta 12871', '#ba3689'),
(17, 'PT. Centratama Menara Indonesia', '', '#006666'),
(19, 'PT. Data Link Manunggal', 'Jl. Pemuda No. 103 Jati, Pulao Gadung, Jakarta Timur, 13220', '#c0c0c0'),
(20, 'PT. Dayamitra Telekomunikasi', 'STO INJOKO Jl. Gayungan PTT No.17.19 Surabaya', '#ff00ff'),
(21, 'PT. Era Bangun Jaya', 'Jl. Matraman Raya 148 Perkantoran Mitra Matraman Blok D1 Jakarta Timur 13150', '#ff80c0'),
(22, 'PT. Hutchison 3 Indonesia', 'Jl Raya Margorejo Indah A-136 No.56 Surabaya 60238', '#ff8000'),
(23, 'PT. Iforte Solusi Infotek', 'Jl Ketintang No 156 Surabaya', '#804040'),
(24, 'PT. Indosat, Tbk', 'Jl. Medan Merdeka Barat No.21 Jakarta Pusat 10110', '#ffff00'),
(25, 'PT. Inti Bangun Sejahtera, Tbk', 'Jl. Klampis Aji Tengah 1 No. 5 (Belakang Alfamidi) Surabaya', '#0080ff'),
(26, 'PT. Komet Infra Nusantara', 'PT. Profesional Telekomunikasi Indonesia JL.MH.THAMRIN NO.1 Menara BCAlantai 55 jakarta pusat', '#add3d2'),
(27, 'PT. Menara Seluler Nusantara', 'Jl Antara No.47 Lt 2 Pasar Baru Jakarta Timur, 13220', '#210639'),
(28, 'PT. Permata Karya Perdana', '', '#006f00'),
(29, 'PT. Persada Sokka Tama', 'Graha Persada Lt.II Jl.KH. Noer Ali No. 32 Kayu Ringin Bekasi Selatan', '#8080ff'),
(30, 'PT. Profesional Telekomunikasi Indonesia', 'JL.MH.THAMRIN NO.1 Menara BCAlantai 55 jakarta pusat', '#00ffff'),
(31, 'PT. Radio Puspita Hutama Nusantara', 'Jl Karanglo 72 RT 02 RW 04 Singosari', '#ff0080'),
(32, 'PT. Sarana Utama Karya', 'TCC Batavia Tower LT 16 & 19 Unit 02-03 Jl KH. Mas Mansyur Kav. 126 Kelurahan Karet Tengsin Kecamatan Tanah Jakarta Pusat', '#00006f'),
(33, 'PT. Solusi Tunas Pratama', 'Perkantoran Permata Senayan Blok C1 Jl Tentara Pelajar Senayan Jakarta 12210', '#bf4340'),
(34, 'PT. Technindo Global Fortace', 'Menara Batavia 10th Floor Jl. KH. Mansyur 126 Jakarta - 10222', '#d70909'),
(35, 'PT. Telkom', 'Gandaria 8 Office Suite 21E Lantai 21 Gandaria City Jl. Sultan Iskandarmuda Kebayoran Lama Jakarta Selatan - 12240', '#0000ff'),
(36, 'PT. Telkomsel, Tbk.', 'Plaza BRI Tower Lt. 15 JL. Basuki Rahmad 122 Surabaya 60271', '#ff0000'),
(37, 'PT. Tower Bersama Group', 'Gedung Internasional Financial Center Lt 6 Jl Sudirman Kav 22-23 Jakarta Selatan', '#00ff00'),
(38, 'PT. XL AXIATA, Tbk', 'Menara AXIS Kawansan Mega Kuningan Jl.Mega Kuningan Barat Kav.E4.3 no.2 Jakarta', '#800080'),
(39, 'PT.Citra Gaia', '', '#804000'),
(40, 'Telkom', 'Mblimbing', '#000000'),
(41, 'TEMUAN', '', '#03b00e'),
(46, 'pt zilhanim hilma', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `marker_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Agna Rizky Putra', 'agna@gmail.com', 'IMG_20200708_224048_837.jpg', '$2y$10$gn2uZ3bCUsOy5IqNsk5Ite7sr4S2DuKGdqaAu3bS5ib/L5KvUVvfK', 1, 1, 1633765034),
(5, 'Hilma', 'mohammadzilhan@gmail.com', 'default.jpg', '$2y$10$XHarpIrnrb9e9Xtn1hNg7.LnWB1K849bhPJbR.qdrkiq8l.I3Q1nK', 3, 1, 1633927620),
(15, 'Bagus Gun', 'putraodin20@gmail.com', 'default.jpg', '$2y$10$yeiv7pnMZnn79Qlh7sH.AuHB8IYGIZmogBAu3Gcpt54gCHhsq3RNq', 2, 1, 1637077790),
(22, 'Dyan Abdul Ghofur', 'Dyangiba127@gmail.com', 'default.jpg', '$2y$10$LBKN2XDUOUzhZE9soGfktuvqkfiCR0H7eSRV6y6JOR6PPU1obXKtG', 3, 1, 1639411270);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(5, 1, 4),
(6, 1, 5),
(10, 1, 6),
(12, 3, 2),
(13, 2, 4),
(14, 2, 5),
(15, 1, 7),
(16, 3, 8),
(22, 1, 9),
(26, 1, 3),
(27, 1, 8),
(28, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Super Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Data'),
(5, 'Admin'),
(8, 'Input Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-users', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(10, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 5, 'Provider', 'provider', 'fas fa-fw fa-broadcast-tower', 0),
(12, 4, 'ID Site', 'idsite', 'fas fa-fw fa-warehouse', 1),
(13, 4, 'Cell Plan', 'cellplan', 'fas fa-fw fa-map-signs', 1),
(14, 5, 'Input Tower', 'cellplan2', 'fas fa-fw fa-map-marked', 1),
(15, 5, 'Input Provider', 'daftarnama', 'fas fa-fw fa-city', 1),
(17, 1, 'All User', 'user/alluser', 'far fa-fw fa-address-book', 1),
(21, 8, 'Input Tower', 'member/input_tower', 'fas fa-fw fa-map-marker-alt', 1),
(22, 8, 'Input Provider', 'member', 'fas fa-fw fa-tachometer-alt', 1),
(23, 5, 'Kecamatan', 'jalan_kecamatan', 'fas fa-fw fa-road', 0),
(24, 5, 'Desa', 'jalan_desa', 'fas fa-fw fa-archway', 1),
(26, 4, 'Cluster Cellplan', 'cellplan/cluster', 'fas fa-fw fa-podcast', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'ivalativa82@gmail.com', '+SKYyPyCOeFTV0GXG4ul6gMttzP4m/CO2ehHha4cYUk=', 1634135364),
(12, 'ivalativa82@gmail.com', 'JPClxLTP3s96AGxBazpI+qRXjO4QfPcANINSDAGeNdg=', 1637078297),
(13, 'fitrohkominfo@gmail.com', 'oxN1tIvzNDzJKEqMz2+zij3u6Zo09vELsph+XwUOkAs=', 1637903239),
(14, 'fitrohkominfo@gmail.com', 'CSt23Y34MHPTZfY7qxNkHp/pA9eySg73ewleYNJJfcA=', 1637903294),
(15, 'putraodin2@gmail.com', 'f7ynLIxyrnx8Cd8F9fsJ37PC0LNKz0TvAfEPckjp7vs=', 1637903380),
(16, 'fitrohkominfo@gmail.com', 'VR+XpquvoMZK4y15Nbaw2XmOX3n+f9deU1qgcuAuLX8=', 1637903428),
(17, 'fitrohkominfo@gmail.com', 'yAVwG+QVpbrcobFbzglTrEHuXsnwURl8+IjnANJBxS4=', 1637903472),
(24, 'Dyangiba127@gmail.com', '2LUPtCiSaxa0hz4fpKPZAgv5NmsSDR8Q1ply5IMyYMA=', 1639411327);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cellplan`
--
ALTER TABLE `cellplan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `idsite`
--
ALTER TABLE `idsite`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_perusahaan`
--
ALTER TABLE `nama_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cellplan`
--
ALTER TABLE `cellplan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=795;

--
-- AUTO_INCREMENT untuk tabel `idsite`
--
ALTER TABLE `idsite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `nama_perusahaan`
--
ALTER TABLE `nama_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
