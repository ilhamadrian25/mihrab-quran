-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 10.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id_article`, `user_id`, `title`, `slug`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(31, 1, 'Sejarah Kurban', 'sejarah-kurban', '64a2813727a0a.jpg', '<p><strong>Sejarah Kurban: Mempersembahkan Hewan untuk Ketaatan dan Pengorbanan</strong></p><p><br></p><p>Sejarah kurban memiliki akar yang dalam dalam agama Islam. Praktik kurban telah ada sejak zaman Nabi Ibrahim AS dan Nabi Ismail AS. Kisah ini diceritakan dalam Al-Quran, di mana Nabi Ibrahim AS diuji oleh Allah SWT untuk mengorbankan putranya, Nabi Ismail AS. Namun, sebagai pengganti, Allah menggantikan Ismail dengan seekor domba yang akan dikurbankan. Sejak saat itu, kurban telah menjadi bagian integral dari ibadah dalam agama Islam.</p><p><br></p><p>Dalil dari Al-Quran yang mendasari praktik kurban adalah surat Al-Hajj ayat 37: \"Bukanlah daging dan darah itu yang sampai kepada Allah, tetapi yang sampai kepada-Nya ialah taqwa dari kamu.\" Ayat ini menegaskan bahwa niat dan ketakwaan kita dalam beribadah adalah yang utama, bukan daging dan darah hewan kurban itu sendiri.</p>', 'publish', '2023-07-03 10:35:33', NULL),
(32, 1, 'Manfaat Bersabar', 'manfaat-bersabar', '64a2428b2272f.jpg', '<p><strong>Manfaat Bersabar: Keutamaan dan Pahala yang Dijanjikan</strong></p><p><br></p><p>Bersabar adalah salah satu sifat yang sangat dianjurkan dalam agama Islam. Menurut Al-Quran, Allah SWT sangat menghargai orang-orang yang bersabar dalam menghadapi cobaan dan kesulitan hidup. Dalam surat Al-Baqarah ayat 153, Allah berfirman: \"Hai orang-orang yang beriman, mintalah pertolongan (kepada Allah) dengan sabar dan salat. Sungguh, Allah beserta orang-orang yang sabar.\"</p><p><br></p><p>Bersabar dalam menjalani ujian hidup tidak hanya menguatkan ikatan kita dengan Allah, tetapi juga membawa manfaat jangka panjang. Dalam surat Az-Zumar ayat 10, Allah berjanji memberikan pahala yang besar kepada orang-orang yang bersabar: \"Sesungguhnya orang-orang yang bertakwa akan ditempatkan dalam surga-surga dan mata air-mata air.\"</p>', 'publish', '2023-07-03 10:37:47', NULL),
(33, 1, 'Ikhtiar di Jalan Allah', 'ikhtiar-di-jalan-allah', '64a242e97f366.jpg', '<p><strong>Ikhtiar di Jalan Allah: Berusaha dengan Tulus dan Berserah Diri</strong></p><p>Dalam agama Islam, ikhtiar di jalan Allah adalah kewajiban bagi setiap muslim. Ini mengacu pada usaha dan kerja keras yang kita lakukan dalam menjalankan perintah Allah dan mencari keridhaan-Nya. Namun, penting untuk diingat bahwa hasil akhir dari ikhtiar kita sepenuhnya dalam kekuasaan Allah, dan kita harus berserah diri kepada-Nya.</p><p><br></p><p>Dalam surat Al-Anfal ayat 46, Allah berfirman: \"Dan taatlah kamu kepada Allah dan Rasul-Nya dan janganlah kamu berbantah-bantahan, karena kamu menjadi lemah dan hilang kekuatanmu. Dan bersabarlah, sesungguhnya Allah beserta orang-orang yang sabar.\" Ayat ini mengajarkan kepada kita pentingnya ikhtiar dengan penuh ketulusan hati dan kesabaran, sambil tetap mengandalkan Allah dalam segala hal.</p><p><br></p><p>Dalam kesimpulan, sejarah, hikmah, dan manfaat dari praktik-praktik ibadah dan keutamaan dalam agama Islam memberikan fondasi yang kuat bagi umat Muslim dalam menjalani hidup yang penuh dengan ketakwaan, ikhtiar, dan keyakinan kepada Allah SWT. Dengan memahami dalil-dalil yang mendasari ajaran-ajaran ini, kita dapat menguatkan iman kita dan mengaplikasikannya dalam kehidupan sehari-hari.</p>', 'publish', '2023-07-03 10:39:21', NULL),
(34, 1, 'Amal Perbuatan', 'amal-perbuatan', '64a2433b97b24.jpg', '<p><strong>Amal Baik yang Diterima oleh Allah SWT: Niat dan Ketulusan Hati</strong></p><p>Dalam agama Islam, amal baik yang diterima oleh Allah SWT adalah amal yang dilakukan dengan niat yang ikhlas dan ketulusan hati. Allah melihat hati kita dan tidak hanya memperhatikan tindakan lahiriah kita. Niat yang baik dan tulus adalah faktor penting yang menentukan nilai sebuah amal di sisi Allah.</p><p><br></p><p>Rasulullah Muhammad SAW bersabda, \"Amal perbuatan itu hanya bergantung pada niatnya, dan tiap-tiap orang akan mendapatkan apa yang diniatkannya.\" Hadis ini menggarisbawahi pentingnya niat yang tulus dalam melakukan amal baik. Oleh karena itu, penting bagi kita untuk selalu memeriksa niat kita dan memastikan bahwa semua amal yang kita lakukan didasarkan pada keikhlasan kepada Allah.</p>', 'publish', '2023-07-03 10:40:43', NULL),
(35, 1, 'Hikmah Berqurban', 'hikmah-berqurban', '64a2438985dd0.jpg', '<p><strong>Hikmah Berkurban: Menumbuhkan Rasa Ketaqwaan dan Pengorbanan</strong></p><p>Praktik berkurban memiliki hikmah yang mendalam bagi umat Islam. Salah satu hikmahnya adalah menumbuhkan rasa ketaqwaan dan pengorbanan dalam diri kita. Ketika kita memilih dan menyembelih hewan kurban dengan niat yang tulus, kita mengikuti jejak Nabi Ibrahim AS yang siap mengorbankan apa pun yang Allah perintahkan. Ini mengajarkan kita untuk mendedikasikan diri kita sepenuhnya kepada Allah dan memprioritaskan ketaatan-Nya.</p><p><br></p><p>Salah satu dalil yang relevan dalam konteks ini adalah surat Al-Hajj ayat 28: \"Supaya mereka merasakan manfaat (nikmat) yang ada bagi mereka, dan supaya mereka menyebut nama Allah pada hari-hari yang telah ditentukan atas rezeki yang dikurniakan-Nya kepada mereka.\" Berkurban memperkokoh ikatan kita dengan Allah dan mengingatkan kita akan nikmat-Nya yang melimpah.</p>', 'publish', '2023-07-03 10:42:01', NULL),
(36, 1, 'Belajar Husnudzhan kepada Allah', 'belajar-husnudzhan-kepada-allah', '64a246ac114fa.jpg', '<p><strong>Belajar Husnudzhan kepada Allah: Kepercayaan pada Rencana-Nya</strong></p><p>Husnudzhan kepada Allah berarti memiliki keyakinan yang baik dan positif terhadap Allah SWT. Ini adalah sikap optimis bahwa Allah senantiasa merencanakan yang terbaik untuk hamba-hamba-Nya. Ketika kita menghadapi tantangan dan kesulitan dalam hidup, belajar husnudzhan kepada Allah membantu kita untuk tetap tenang dan percaya bahwa Allah memiliki rencana yang lebih baik untuk kita.</p><p><br></p><p>Al-Quran menyatakan dalam surat An-Nisa ayat 40, \"Sesungguhnya Allah tidak menganiaya seberat zarrah pun; dan jika ada kebaikan seberat zarrah, niscaya Dia akan melipatgandhakannya dan memberikan pahala yang besar dari sisi-Nya.\" Ayat ini mengajarkan bahwa Allah adalah Yang Maha Adil dan Dia akan membalas setiap amal baik dengan pahala yang berlimpah.</p>', 'publish', '2023-07-03 10:55:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `address` text NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `maps` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `address`, `no_telp`, `email`, `maps`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Puri Asih Jl. Cilengkrang 1 No.3/5, Pasanggrahan, Kec. Ujung Berung, Kota Bandung, Jawa Barat ', '+62 811-2366-779', 'mihrabquran@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.805255007929!2d107.7117436!3d-6.9138731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ddf260d8fee3%3A0x7f3e7042ab07c503!2sMihrab%20Quran%20Alfatih!5e0!3m2!1sid!2sid!4v1686888647792!5m2!1sid!2sid', '2023-06-24 18:07:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `image`, `created_at`, `updated_at`) VALUES
(32, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(33, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(34, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(35, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(36, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(37, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(38, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL),
(39, '1688371288_3b7de2e6d24f1dd8d4e4.jpg', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2023-06-09-022621', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1686278917, 1),
(3, '2023-06-09-025351', 'App\\Database\\Migrations\\MqaTv', 'default', 'App', 1686284103, 2),
(4, '2023-06-09-025402', 'App\\Database\\Migrations\\Program', 'default', 'App', 1686284103, 2),
(5, '2023-06-09-025407', 'App\\Database\\Migrations\\Article', 'default', 'App', 1686284391, 3),
(6, '2023-06-09-025417', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1686284391, 3),
(7, '2023-06-09-025437', 'App\\Database\\Migrations\\Gallery', 'default', 'App', 1686284391, 3),
(8, '2023-06-09-025441', 'App\\Database\\Migrations\\Banner', 'default', 'App', 1686284391, 3),
(9, '2023-06-09-025444', 'App\\Database\\Migrations\\Meta', 'default', 'App', 1686284391, 3),
(10, '2023-06-09-025447', 'App\\Database\\Migrations\\Contact', 'default', 'App', 1686284391, 3),
(11, '2023-06-10-032032', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1686367241, 4),
(12, '2023-06-10-043030', 'App\\Database\\Migrations\\User', 'default', 'App', 1686371470, 5),
(13, '2023-06-10-043648', 'App\\Database\\Migrations\\Users', 'default', 'App', 1686371817, 6),
(14, '2023-06-10-043927', 'App\\Database\\Migrations\\Users', 'default', 'App', 1686371975, 7),
(15, '2023-06-12-140145', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1687407671, 8),
(16, '2023-06-22-021428', 'App\\Database\\Migrations\\Santri', 'default', 'App', 1687407671, 8),
(17, '2023-06-22-021604', 'App\\Database\\Migrations\\SocialMedia', 'default', 'App', 1687407671, 8),
(18, '2023-06-22-040624', 'App\\Database\\Migrations\\Pengurus', 'default', 'App', 1687407685, 9),
(19, '2023-06-23-235946', 'App\\Database\\Migrations\\Santri', 'default', 'App', 1687564792, 10),
(20, '2023-06-24-160550', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1687622765, 11),
(21, '2023-06-26-164830', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1687798223, 12),
(22, '2023-06-26-182019', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1687803646, 13),
(23, '2023-06-26-184928', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1687805444, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mqa_tv`
--

CREATE TABLE `mqa_tv` (
  `id_mqa_tv` int(110) NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `mqa_tv`
--

INSERT INTO `mqa_tv` (`id_mqa_tv`, `url_video`, `created_at`, `updated_at`) VALUES
(6, 'https://youtu.be/_JLKE8hxk3E', '0000-00-00 00:00:00', NULL),
(7, 'https://youtu.be/sy-HbOc1RkA', '0000-00-00 00:00:00', NULL),
(8, 'https://youtu.be/PSIychdfFVs', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `page_content`
--

CREATE TABLE `page_content` (
  `id_page_content` int(11) NOT NULL,
  `page_name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `background` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `page_content`
--

INSERT INTO `page_content` (`id_page_content`, `page_name`, `title`, `heading`, `description`, `background`, `created_at`, `updated_at`) VALUES
(1, 'home-banner-1', 'MIHRAB QURAN AL-FATIH', 'Halo!!', 'Mihrab Quran Al-Fatih merupakan salah satu yayasan bagi penghafal al-quran sekaligus menjadi pondok pesantren, yayasan ini didirikan pada tahun 2019 dan berada di kota bandung jawa barat', '64a233abcfaed.png', '2023-06-27 10:45:56', NULL),
(2, 'home-banner-2', 'MIHRAB QURAN AL-FATIH', 'Seberapa besar dampak dari donatur untuk santri ', 'Terimakasih kepada donatur yang telah membantu para santri dan selalu berkontribusi atas apa yang kami upayakan bagi santri kamu.\r\n\r\nSemoga para Donatur selalu diberikan nikmat oleh Allah SWT, serta dilimpahkan keberkahan dalam setiap langkah hidupnya, Aamiin Ya Rabbal A\'lamin', NULL, '2023-06-27 10:54:30', NULL),
(3, 'home-banner-3', 'MIHRAB QURAN AL-FATIH', 'Apa itu Mihrab Quran Al-Fatih', 'Mihrab Quran Al-Fatih Merupakan pesantren ramah difabel yang didirikan ada dtangal 7 April tahun 2019 “Mihrab Quran” hadir untuk merealisasikan mimpi dan angan-angan mereka, menyelamatkanmereka, mengangkat harkat dan martabat mereka dengan menjadi para penghafal Alquran. ', '649e7740111f5.jpeg', '2023-06-27 10:57:40', NULL),
(4, 'home-banner-4', 'MIHRAB QURAN AL-FATIH', 'Ayo berdonasi!', NULL, '64a2341c25b01.png', '2023-06-27 11:02:30', NULL),
(5, 'home-banner-5', 'Donasi', NULL, 'Ayo bantu adik adik yang sedang membutuhkan', NULL, '2023-06-27 11:03:12', NULL),
(6, 'profile-banner-1', 'Profile', NULL, NULL, 'profile-banner.jpg\r\n', '2023-06-27 11:31:53', NULL),
(7, 'santri-banner-1', 'Data santri', NULL, NULL, 'santri-abnner-1.jpg', '2023-06-27 11:31:53', NULL),
(8, 'program-banner-1', 'Program', NULL, NULL, 'program-banner-1.jpg', '2023-06-27 11:34:31', NULL),
(9, 'mqa-tv-banner-1', 'Mqa TV', NULL, NULL, 'mqa-tv-banner.jpg', '2023-06-27 11:34:31', NULL),
(10, 'album-banner-1', 'Album', NULL, NULL, 'album-banner.jpg', '2023-06-27 11:35:36', NULL),
(11, 'article-banner-1', 'Article', NULL, NULL, 'article-banner-1.jpg\r\n', '2023-06-27 11:35:36', NULL),
(12, 'profile-page', 'Profile', 'Mihrab Quran Al-Fatih', '<p><strong>Pesantren merupakan Lembaga Pendidikan agama yang memainkan peran penting dalam menyukseskan berbagai program Pendidikan. Pesantren dalam sejarah telah banyak melahirkan generasi-generasi unggul dan menyumbang pelopor-pelopor perubahan dan kemajuan bangsa. Satu hal yang dilupakan oleh banyak pihak termasuk pemerintah adalah keberadaan para difabel, anak yatim dan para pejuang kehidupan. Telah kita saksikan bahwa tidak sedikit dari mereka yang mengalami ketidak beruntungan.Berangkat dari keadaan demikian, maka pada tanggal 7 April 2019 Pesantren Tahfizh Ramah Difabel “Mihrab Quran” hadir untuk merealisasikan mimpi dan angan-angan mereka, menyelamatkan mereka,</strong></p><p><strong>﻿</strong></p><p>mengangkat harkat dan martabat mereka dengan menjadi para penghafal Alquran. Mihrab Quran sendiri mempunyai PROGRAM yang berfokus pada pendidikan dan sosial diantaranya: -WIBAWA KEREN (Wakaf Bangun Wilayah dan Kawasan Pesantren) Berlokasi di sekitar kaki gunung Manglayang, Cilengkrang, Kab. Bandung Tetapi karena segala keterbatasan, kami baru bisa mengakuisisi 1 Ha lahan saja, Dana yang kami butuhkan untuk mengakuisisi dan mengolahlahan fase pertama ini sekitar 3 milyar rupiah -Tahfizh dan Tahsin Sebelum</p><p><br></p><p>Pesantren Tahfizh Ramah Difabel benar-benar terealisasikan,kami akan tetap menjalankan program tahfizh dan tahsin untuk anak yatim, dhuafa dan para pejuang kehidupan. Program ini sudah berjalan kurang lebih selama 2 tahun, dengan keterbatasan pengajar dan tempat. -SERIBUAN (Sedekah Rutin Bulanan dan Pekanan) Ada banyak sekali manfaat yang bisa dihasilkan dari sedekah. Sedekah menjadi amal yang mampu menambah dari kekurangan yang dimiliki seseorang.Kekurangan itu bisa terisi dan menjadi tercukupi. Dengan sedekah, kita bisa meringankan beban yang dimiliki seseorang hingga membuatnya tersenyum.</p>', '64a234dfbc514.png', '2023-06-28 13:20:39', NULL),
(13, 'santri-page', 'Data santri', NULL, NULL, '64a23695bf2ad.png', '2023-06-28 14:01:41', NULL),
(14, 'campaign-page', 'Ayo donasi', NULL, NULL, '64a236c4b9bad.png', '2023-06-28 14:17:40', NULL),
(15, 'mqa-tv-page', 'Mqa TV', NULL, NULL, '64a23797ae1eb.png', '2023-06-28 14:31:16', NULL),
(16, 'gallery-page', 'Album ', NULL, NULL, '64a237362fe9b.png', '2023-06-30 14:03:17', NULL),
(17, 'article-page', 'Details Artikel', NULL, NULL, '649e843f280d2.jpeg', '2023-06-30 14:26:56', NULL),
(18, 'details-article-page', 'Details Artikel', NULL, NULL, '649e9ea6cb835.jpeg', '2023-06-30 14:26:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `profile_image` text NOT NULL,
  `position` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '2023-06-22 04:21:25',
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pesantren merupakan Lembaga Pendidikan agama yang memainkan peran penting dalam menyukseskan berbagai program Pendidikan. Pesantren dalam sejarah telah banyak melahirkan generasi-generasi unggul dan menyumbang pelopor-pelopor perubahan dan kemajuan bangsa. Satu hal yang dilupakan oleh banyak pihak termasuk pemerintah adalah keberadaan para difabel, anak yatim dan para pejuang kehidupan.\nTelah kita saksikan bahwa tidak sedikit dari mereka yang mengalami ketidak beruntungan.Berangkat dari keadaan demikian, maka pada tanggal 7 April 2019 Pesantren Tahfizh Ramah Difabel “Mihrab Quran” hadir untuk merealisasikan mimpi dan angan-angan mereka, menyelamatkan mereka, mengangkat harkat dan martabat mereka dengan menjadi para penghafal Alquran.\nMihrab Quran sendiri mempunyai PROGRAM yang berfokus pada pendidikan dan sosial diantaranya: </br>\n</br>\n-WIBAWA KEREN (Wakaf Bangun Wilayah dan Kawasan Pesantren)\nBerlokasi di sekitar kaki gunung Manglayang, Cilengkrang, Kab. Bandung Tetapi karena segala keterbatasan, kami baru bisa mengakuisisi 1 Ha lahan saja,\nDana yang kami butuhkan untuk mengakuisisi dan mengolahlahan fase pertama ini sekitar 3 milyar rupiah\n-Tahfizh dan Tahsin\nSebelum Pesantren Tahfizh Ramah Difabel benar-benar terealisasikan,kami akan tetap menjalankan program tahfizh dan tahsin untuk anak yatim, dhuafa dan para pejuang kehidupan. Program ini sudah berjalan kurang lebih selama 2 tahun, dengan keterbatasan pengajar dan tempat.\n-SERIBUAN (Sedekah Rutin Bulanan dan Pekanan)\nAda banyak sekali manfaat yang bisa dihasilkan dari sedekah. Sedekah menjadi amal yang mampu menambah dari kekurangan yang dimiliki seseorang.Kekurangan itu bisa terisi dan menjadi tercukupi. Dengan sedekah, kita bisa meringankan beban yang dimiliki seseorang hingga membuatnya tersenyum.', '2023-06-27 11:12:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(110) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `target_donation` int(255) NOT NULL,
  `total_donation` int(255) NOT NULL DEFAULT 0,
  `status_donation` enum('ongoing','finished') NOT NULL DEFAULT 'ongoing',
  `status_program` enum('draft','publish') DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `title`, `slug`, `image`, `description`, `target_donation`, `total_donation`, `status_donation`, `status_program`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(46, 'Donasi Kepada Hafidz Quran', 'donasi-kepada-hafidz-quran', '64a23a57771d4.png', '<p>Assalamu\'alaikum Warahmatullahi Wabarakatuh,</p><p>Dalam rangka mendukung program Hafidz Quran di Yayasan Mihrab Quran Al-Fatih, kami mengajak Anda untuk berpartisipasi dalam upaya mulia ini dengan memberikan donasi Anda. Donasi Anda akan membantu para Hafidz Quran dalam perjalanan mereka untuk menghafal dan memahami Al-Quran dengan baik.</p><p><br></p><p>Allah Subhanahu wa Ta\'ala berfirman dalam Al-Quran Surat Al-Hadid (57:11), yang artinya:</p><p><br></p><p>\"Siapa yang menginfakkan hartanya di jalan Allah, maka di antara mereka ada yang menahan diri (dari pengeluaran) dan menafkahkan sebahagian darinya. Dan orang-orang yang menahan diri itu, mereka adalah orang-orang yang beruntung.\"</p><p><br></p><p>Hadis yang terkait dengan donasi adalah hadis dari Rasulullah Muhammad shallallahu \'alaihi wa sallam yang diriwayatkan oleh Imam Muslim dalam kitab Shahih Muslim. Beliau bersabda:</p><p>\"Sebaik-baik amal perbuatan adalah memperteguh ukhuwah (persaudaraan) antar sesama Muslim. Sedangkan amal perbuatan yang paling tinggi derajatnya adalah menyebarkan salam.\"</p><p><br></p><p>Dalam konteks donasi untuk Hafidz Quran, dengan memberikan sumbangan Anda, Anda berpartisipasi dalam memperkuat ukhuwah sesama Muslim yang sedang berjuang untuk menghafal Al-Quran. Donasi Anda juga merupakan bentuk amal perbuatan yang tinggi derajatnya karena Anda turut serta dalam menyebarkan kebaikan dan membantu pemeliharaan kitab suci kita, Al-Quran.</p><p><br></p><p>Mari bersama-sama memuliakan agama Islam melalui upaya kita untuk mendukung para Hafidz Quran. Dengan donasi Anda, mereka akan memiliki akses ke fasilitas, materi belajar, dan pendampingan yang diperlukan dalam perjalanan mereka untuk menghafal Al-Quran.</p><p>Untuk memberikan kontribusi Anda, Setiap sumbangan yang Anda berikan akan memberikan dampak besar bagi generasi Muslim yang akan membawa hikmah dan keberkahan Al-Quran dalam kehidupan mereka.</p><p><br></p><p>Terima kasih atas perhatian dan sumbangan Anda yang berharga. Semoga Allah Subhanahu wa Ta\'ala membalas kebaikan dan memberikan berkah yang berlipat ganda kepada Anda dan keluarga Anda.</p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>', 100000000, 0, 'ongoing', NULL, '2024-01-03', '2024-01-03', '2023-07-03 10:02:47', NULL),
(50, 'Donasi untuk penghafal Quran', 'donasi-untuk-penghafal-quran', '64a24997a202f.png', '<p>Assalamu\'alaikum Warahmatullahi Wabarakatuh,</p><p>Dalam rangka mendukung program Hafidz Quran di Yayasan Mihrab Quran Al-Fatih, kami mengajak Anda untuk berpartisipasi dalam upaya mulia ini dengan memberikan donasi Anda. Donasi Anda akan membantu para Hafidz Quran dalam perjalanan mereka untuk menghafal dan memahami Al-Quran dengan baik.</p><p><br></p><p>Allah Subhanahu wa Ta\'ala berfirman dalam Al-Quran Surat Al-Hadid (57:11), yang artinya:</p><p><br></p><p>\"Siapa yang menginfakkan hartanya di jalan Allah, maka di antara mereka ada yang menahan diri (dari pengeluaran) dan menafkahkan sebahagian darinya. Dan orang-orang yang menahan diri itu, mereka adalah orang-orang yang beruntung.\"</p><p><br></p><p>Hadis yang terkait dengan donasi adalah hadis dari Rasulullah Muhammad shallallahu \'alaihi wa sallam yang diriwayatkan oleh Imam Muslim dalam kitab Shahih Muslim. Beliau bersabda:</p><p>\"Sebaik-baik amal perbuatan adalah memperteguh ukhuwah (persaudaraan) antar sesama Muslim. Sedangkan amal perbuatan yang paling tinggi derajatnya adalah menyebarkan salam.\"</p><p><br></p><p>Dalam konteks donasi untuk Hafidz Quran, dengan memberikan sumbangan Anda, Anda berpartisipasi dalam memperkuat ukhuwah sesama Muslim yang sedang berjuang untuk menghafal Al-Quran. Donasi Anda juga merupakan bentuk amal perbuatan yang tinggi derajatnya karena Anda turut serta dalam menyebarkan kebaikan dan membantu pemeliharaan kitab suci kita, Al-Quran.</p><p><br></p><p>Mari bersama-sama memuliakan agama Islam melalui upaya kita untuk mendukung para Hafidz Quran. Dengan donasi Anda, mereka akan memiliki akses ke fasilitas, materi belajar, dan pendampingan yang diperlukan dalam perjalanan mereka untuk menghafal Al-Quran.</p><p>Untuk memberikan kontribusi Anda, Setiap sumbangan yang Anda berikan akan memberikan dampak besar bagi generasi Muslim yang akan membawa hikmah dan keberkahan Al-Quran dalam kehidupan mereka.</p><p><br></p><p>Terima kasih atas perhatian dan sumbangan Anda yang berharga. Semoga Allah Subhanahu wa Ta\'ala membalas kebaikan dan memberikan berkah yang berlipat ganda kepada Anda dan keluarga Anda.</p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>', 1230000, 0, 'ongoing', NULL, '2023-07-03', '2023-07-27', '2023-07-03 11:07:51', NULL),
(51, 'Donasi Hafidzul quran', 'donasi-hafidzul-quran', '64a24a19908a4.png', '<p>Assalamu\'alaikum Warahmatullahi Wabarakatuh,</p><p>Dalam rangka mendukung program Hafidz Quran di Yayasan Mihrab Quran Al-Fatih, kami mengajak Anda untuk berpartisipasi dalam upaya mulia ini dengan memberikan donasi Anda. Donasi Anda akan membantu para Hafidz Quran dalam perjalanan mereka untuk menghafal dan memahami Al-Quran dengan baik.</p><p><br></p><p>Allah Subhanahu wa Ta\'ala berfirman dalam Al-Quran Surat Al-Hadid (57:11), yang artinya:</p><p><br></p><p>\"Siapa yang menginfakkan hartanya di jalan Allah, maka di antara mereka ada yang menahan diri (dari pengeluaran) dan menafkahkan sebahagian darinya. Dan orang-orang yang menahan diri itu, mereka adalah orang-orang yang beruntung.\"</p><p><br></p><p>Hadis yang terkait dengan donasi adalah hadis dari Rasulullah Muhammad shallallahu \'alaihi wa sallam yang diriwayatkan oleh Imam Muslim dalam kitab Shahih Muslim. Beliau bersabda:</p><p>\"Sebaik-baik amal perbuatan adalah memperteguh ukhuwah (persaudaraan) antar sesama Muslim. Sedangkan amal perbuatan yang paling tinggi derajatnya adalah menyebarkan salam.\"</p><p><br></p><p>Dalam konteks donasi untuk Hafidz Quran, dengan memberikan sumbangan Anda, Anda berpartisipasi dalam memperkuat ukhuwah sesama Muslim yang sedang berjuang untuk menghafal Al-Quran. Donasi Anda juga merupakan bentuk amal perbuatan yang tinggi derajatnya karena Anda turut serta dalam menyebarkan kebaikan dan membantu pemeliharaan kitab suci kita, Al-Quran.</p><p><br></p><p>Mari bersama-sama memuliakan agama Islam melalui upaya kita untuk mendukung para Hafidz Quran. Dengan donasi Anda, mereka akan memiliki akses ke fasilitas, materi belajar, dan pendampingan yang diperlukan dalam perjalanan mereka untuk menghafal Al-Quran.</p><p>Untuk memberikan kontribusi Anda, Setiap sumbangan yang Anda berikan akan memberikan dampak besar bagi generasi Muslim yang akan membawa hikmah dan keberkahan Al-Quran dalam kehidupan mereka.</p><p><br></p><p>Terima kasih atas perhatian dan sumbangan Anda yang berharga. Semoga Allah Subhanahu wa Ta\'ala membalas kebaikan dan memberikan berkah yang berlipat ganda kepada Anda dan keluarga Anda.</p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>', 23000000, 0, 'ongoing', NULL, '2023-07-03', '2023-08-05', '2023-07-03 11:10:01', NULL),
(52, 'Donasi anak yatim piatu', 'donasi-anak-yatim-piatu', '64a24aeddf007.png', '<p>Assalamu\'alaikum Warahmatullahi Wabarakatuh,</p><p><br></p><p>Sungguh menyentuh hati melihat betapa berlimpahnya rahmat dan kasih sayang Allah SWT yang tercermin dalam kehidupan anak-anak yatim piatu. Mereka adalah harta yang berharga di mata-Nya, dan saat ini, kami mengajak Anda untuk berpartisipasi dalam upaya meringankan beban mereka dan memberikan harapan baru melalui donasi Anda.</p><p><br></p><p>Di Yayasan Mihrab Quran Al-Fatih, kami telah berkomitmen untuk memberikan perlindungan, pendidikan, dan perawatan yang sebaik mungkin bagi anak-anak yatim piatu yang berada di bawah naungan kami. Namun, kami membutuhkan dukungan dari Anda untuk terus melanjutkan misi mulia ini.</p><p><br></p><p>Allah Subhanahu wa Ta\'ala berfirman dalam Al-Quran Surat Adz-Dzariyat (51:19), yang artinya:</p><p><br></p><p>\"Dan mereka memberi makan (orang-orang yang minta) makanan yang hampir terlampau cinta kepada-Nya, yaitu kepada anak yatim, orang-orang miskin dan orang-orang yang ditawan.\"</p><p><br></p><p>Hadis Rasulullah Muhammad shallallahu \'alaihi wa sallam yang diriwayatkan oleh Imam Ahmad dalam Musnad Ahmad juga menyatakan:</p><p><br></p><p>\"Siapa yang merawat seorang anak yatim, aku dan dia akan berada di surga seperti dua jari ini.\"</p><p><br></p><p>Dalam konteks donasi untuk anak yatim piatu, dengan memberikan sumbangan Anda, Anda turut serta dalam menjalankan perintah Allah SWT dan mengikuti teladan Rasulullah shallallahu \'alaihi wa sallam. Donasi Anda akan digunakan untuk menyediakan kebutuhan sehari-hari, pendidikan, perawatan medis, dan dukungan emosional yang diperlukan oleh anak-anak yatim piatu yang membutuhkan kasih sayang dan perhatian.</p><p><br></p><p>Bersama-sama, kita dapat memberikan mereka kesempatan yang lebih baik untuk tumbuh dan berkembang dengan cinta, perhatian, dan harapan yang pantas mereka terima. Setiap sumbangan Anda akan memiliki dampak yang besar dalam kehidupan mereka.</p><p><br></p><p>Kami mengundang Anda untuk berbagi kebaikan dengan memberikan donasi Anda melalui [masukkan tautan donasi]. Dengan setiap kontribusi Anda, Anda membantu mewujudkan kehidupan yang lebih baik bagi anak-anak yatim piatu yang membutuhkan cinta dan perhatian kita semua.</p><p><br></p><p>Terima kasih atas kebaikan hati dan ketulusan Anda. Semoga Allah Subhanahu wa Ta\'ala membalas setiap langkah Anda dengan keberkahan dan memberikan Anda kebahagiaan yang melimpah.</p><p><br></p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>', 110000000, 0, 'ongoing', NULL, '2023-07-03', '2023-07-31', '2023-07-03 11:13:33', NULL),
(53, 'Donasi Hafidz', 'donasi-hafidz', '64a24bceef358.png', '<p>Sungguh menyentuh hati melihat betapa berlimpahnya rahmat dan kasih sayang Allah SWT yang tercermin dalam kehidupan anak-anak yatim piatu. Mereka adalah harta yang berharga di mata-Nya, dan saat ini, kami mengajak Anda untuk berpartisipasi dalam upaya meringankan beban mereka dan memberikan harapan baru melalui donasi Anda.</p><p><br></p><p>Di Yayasan Mihrab Quran Al-Fatih, kami telah berkomitmen untuk memberikan perlindungan, pendidikan, dan perawatan yang sebaik mungkin bagi anak-anak yatim piatu yang berada di bawah naungan kami. Namun, kami membutuhkan dukungan dari Anda untuk terus melanjutkan misi mulia ini.</p><p><br></p><p>Allah Subhanahu wa Ta\'ala berfirman dalam Al-Quran Surat Adz-Dzariyat (51:19), yang artinya:</p><p><br></p><p>\"Dan mereka memberi makan (orang-orang yang minta) makanan yang hampir terlampau cinta kepada-Nya, yaitu kepada anak yatim, orang-orang miskin dan orang-orang yang ditawan.\"</p><p><br></p><p>Hadis Rasulullah Muhammad shallallahu \'alaihi wa sallam yang diriwayatkan oleh Imam Ahmad dalam Musnad Ahmad juga menyatakan:</p><p><br></p><p>\"Siapa yang merawat seorang anak yatim, aku dan dia akan berada di surga seperti dua jari ini.\"</p><p><br></p><p>Dalam konteks donasi untuk anak yatim piatu, dengan memberikan sumbangan Anda, Anda turut serta dalam menjalankan perintah Allah SWT dan mengikuti teladan Rasulullah shallallahu \'alaihi wa sallam. Donasi Anda akan digunakan untuk menyediakan kebutuhan sehari-hari, pendidikan, perawatan medis, dan dukungan emosional yang diperlukan oleh anak-anak yatim piatu yang membutuhkan kasih sayang dan perhatian.</p><p><br></p><p>Bersama-sama, kita dapat memberikan mereka kesempatan yang lebih baik untuk tumbuh dan berkembang dengan cinta, perhatian, dan harapan yang pantas mereka terima. Setiap sumbangan Anda akan memiliki dampak yang besar dalam kehidupan mereka.</p><p><br></p><p>Kami mengundang Anda untuk berbagi kebaikan dengan memberikan donasi Anda melalui [masukkan tautan donasi]. Dengan setiap kontribusi Anda, Anda membantu mewujudkan kehidupan yang lebih baik bagi anak-anak yatim piatu yang membutuhkan cinta dan perhatian kita semua.</p><p><br></p><p>Terima kasih atas kebaikan hati dan ketulusan Anda. Semoga Allah Subhanahu wa Ta\'ala membalas setiap langkah Anda dengan keberkahan dan memberikan Anda kebahagiaan yang melimpah.</p><p><br></p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>', 100000, 0, 'ongoing', NULL, '2023-07-03', '2023-07-06', '2023-07-03 11:17:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `dob` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id`, `name`, `address`, `dob`, `created_at`, `updated_at`) VALUES
(22, 'Habib Azmi Al ', 'bengkulu', '2005-06-22 00:00:00', '2023-06-25 08:54:56', NULL),
(23, 'Hikmal Safani', 'bengkulu', '2023-06-01 00:00:00', '2023-06-26 13:01:50', NULL),
(24, 'Mufti', 'Bojongsoang', '2007-07-04 00:00:00', '2023-06-30 09:58:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id_settings` int(11) NOT NULL,
  `title` text NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id_settings`, `title`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'Mihrab qur`an', 'favicon.ico', '2023-06-24 18:06:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id_social_media` int(11) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `social_media`
--

INSERT INTO `social_media` (`id_social_media`, `facebook_url`, `youtube_url`, `instagram_url`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com', 'https://youtube.com', 'https://instagram.com', '2023-06-27 02:59:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `order_id` varchar(225) NOT NULL,
  `status_transaction` enum('success','pending','expire') NOT NULL,
  `transaction_id` text NOT NULL,
  `donation_amount` int(225) NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `support_message` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_program`, `order_id`, `status_transaction`, `transaction_id`, `donation_amount`, `full_name`, `phone_number`, `support_message`, `created_at`, `updated_at`) VALUES
(58, 46, '100.00064a23bfa1aa93', 'pending', '', 100000, 'hamba allah', '03918392382984894', 'amin', '2023-07-03 10:09:46', NULL),
(59, 46, '100.00064a23e8e5ea3e', 'pending', '', 100000, 'hamba allah', '03918392382984894', '', '2023-07-03 10:20:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `profile_image`, `username`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, '35304697.jpg', 'ilham', 'Muhamad Ilham', 'ilham@gmail.com', '$2y$10$JxaFc.yUAHW6.mK5Bs2nce3tI19BYuJWi6wpzWN2BFeJEAo7WBY0C', 'admin', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mqa_tv`
--
ALTER TABLE `mqa_tv`
  ADD PRIMARY KEY (`id_mqa_tv`);

--
-- Indeks untuk tabel `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id_page_content`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_social_media`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `mqa_tv`
--
ALTER TABLE `mqa_tv`
  MODIFY `id_mqa_tv` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `page_content`
--
ALTER TABLE `page_content`
  MODIFY `id_page_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id_settings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_social_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
