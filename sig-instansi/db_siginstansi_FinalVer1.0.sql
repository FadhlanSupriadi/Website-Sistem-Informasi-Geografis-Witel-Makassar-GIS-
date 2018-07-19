-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 03:24 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siginstansi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Admin Witel Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `dibaca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `gambar`, `tanggal`, `penulis`, `dibaca`) VALUES
(1, 'Telkom Witel Makassar Gelar Pasar Murah Ramadhan', '<p>Sebagai bentuk kepedulian pada masyarakat yang kurang mampu, Witel Makassar menyelenggarakan kegiatan Pasar Murah Ramadhan di halaman parkir Witel Makassar Jalan Balaikota No. 4 Kota Makassar, Selasa (5/6).</p>\r\n\r\n<p>Sejumlah 300 paket sembako yang terdiri dari beras, gula, minyak goreng, dan terigu senilai Rp150 ribu yang dijual murah seharga Rp25 ribu per paket. Ratusan masyarakat sekitar yang kurang mampu mengantre sejak siang untuk mendapatkan sembako tersebut.</p>\r\n\r\n<p>Ketua Panitia Amalia Ramadan Witel Makassar Soetedjo yang juga sebagai Manager HR &amp; CDC mengatakan, kegiatan Pasar Murah hanya berlangsung sehari. &quot;Ini merupakan agenda dan bagian dari Telkom Berbagi yang diperuntukkan bagi masyarakat kurang mampu,&rdquo; ujar Soetedjo.</p>\r\n\r\n<p>Soetedjo berharap agar tahun depan dalam agenda yang sam, Telkom khususnya Witel Makassar dapat menyediakan lebih banyak paket untuk dibagikan kepada masyarakat kurang mampu. (mukhtar/yasir/Red01)<br />\r\n<br />\r\nSource :&nbsp;<a href=\"http://www.bumn.go.id/telkom/berita/1-Telkom-Witel-Makassar-Gelar-Pasar-Murah-Ramadan-\">http://www.bumn.go.id/telkom/berita/1-Telkom-Witel-Makassar-Gelar-Pasar-Murah-Ramadan-</a></p>\r\n', 'Telkom_Witel_Makassar_Gelar_Pasar_Murah_Ramadan.jpg', '2018-07-15', 'Admin', '11'),
(2, 'PT Telkom dan PT Indomaret Mou Kesepakatan Layanan Interkoneksi', '<p>IndiHome (PT Telkom) gelar kegiatan bertemakan&quot;Selebrasi Arward&quot; yang laksanakan dalam halaman parkiran lobby Balaikota, Makassar (17/02) kemarin sebagai syukron reward yang telah di raih.</p>\r\n\r\n<p>Pelaksanaan kegiatan tersebut dihadiri langsung oleh GM PT Telkom Sulsel, Marnoto, Agus Yudha (Deputi GM Sulawesi Selatan) beserta staf PT Telkom, dan PT Indomarco, serta PT Indomaret.</p>\r\n\r\n<p>Pada kegiatan tersebut juga telah dilakukan penandatanganan MoU nota kesepakatan Layanan Interkoneksi antara Telkom dan PT. Indomaret.</p>\r\n\r\n<p>Dalam sambutannya General Manager PT Telkom Sulsel, Marnoto menyampaikan syukron atas kinerja PT Telkom yang telah secara profesional bekerja pada bidang masing-masing.</p>\r\n\r\n<p>Penyerahan penghargaan dari GM Witel Makassar &quot;The Best Access Employee&quot; juga diberikan kepada Rizki Risachdi selaku Spv So, in witel Makassar triwulan 4 - 2016.</p>\r\n\r\n<p>Meski kami tidak berhasil meraih juara di masa lalu namun kami selalu berfikir bahwa itu bukan kegagalan melainkan dapat jadi motivasi kami saat ini untuk menjadi lebih baik dalam menonjolkan potensi saat ini, Ungkap Marnoto. Sabtu (18/02/2017) saat di konfirmasi via pesan selulernya.</p>\r\n\r\n<p>&quot;Meski rasa kekhawatiran itu sempat terlintas namun semua akan dapat di lewati bersama dan terus mengalihkannya ke hal-hal yang positif saja, dan inilah hasil apa yang selama ini kita kerjakan bersama, karena sekarang kita bisa meraihnya bahwa PT Telkom telah berhasil menjadi juara&quot;.</p>\r\n\r\n<p>Bukan cuma itu ada Reward yang telah kami raih sebagai Juara 1 Highest Revenue Achievement SLI 2016, Juara 1 The Best C3MR 2016, juara 1 lomba CCAN, juara 2 kampung Ukm digital, Juara 2 Brevet Nasional, Juara 3 The Best CYC 2016, Reward Paperless PSB IH, IndiHome pada Oktober 2016, IndiHome Reward November 2016,</p>\r\n\r\n<p>Juga ada Best Witel Indihome DTH Transvision 2016, Reward NAL M - 4 Des 2016, Reward Apresiasi OA Node-B Telkomsel Triwulan-4 Tahun 2016, dan Best WICO Nasional 2016.(*)<br />\r\n<br />\r\nSource :&nbsp;<a href=\"http://terkininews.com/2017/02/18/PT-Telkom-dan-PT-Indomaret-Mou-Kesepakatan-Layanan-Interkoneksi.html\">http://terkininews.com/2017/02/18/PT-Telkom-dan-PT-Indomaret-Mou-Kesepakatan-Layanan-Interkoneksi.html</a></p>\r\n', 'PT_Telkom_dan_PT_Indomaret_Mou_Kesepakatan_Layanan_Interkoneksi.jpg', '2018-07-15', 'Admin', '10'),
(3, 'Fajar TV dan Witel Makassar Tingkatkan Kerja Sama', '<p>PT Fajar Makassar Televisi (FAJAR TV) memperbarui kerja sama dengan PT Telkom Indonesia. Kedua pihak menandatangani perpanjangan kerja sama di kantor Telkom Witel Makassar, Jalan Balai Kota, Makassar, Rabu (14/6/2017).</p>\r\n\r\n<p>Perjanjian kerja sama ini ditandatangani Direktur Fajar TV, Muhammad Yusuf AR dan GM Witel Makassar, Agus Yudha Basuki.</p>\r\n\r\n<p>GM Witel Makassar, Agus Yudha Basuki, dalam sambutannya mengucapkan terima kasih atas kerja sama Witel Makassar dengan pengelola media. Ia berharap kerja sama ini memberikan benefit bagi Telkom dan Fajar TV.</p>\r\n\r\n<p>&quot;Ke depannya bisa ada sinergi selain saat ini, yaitu produk media. Ke depannya bisa ditingkatkan dalam bentuk lain. Telkom bukan hanya mengejar keuntungan semata tapi ada misi lain, menjadikan Indonesia digital nation yang tujuannya mempererat persaudaraan,&quot; ungkap Agus.</p>\r\n\r\n<p>Direktur Fajar TV, Muhammad Yusuf AR mengatakan kerja sama dengan Witel telah terbangun selama tiga tahun.</p>\r\n\r\n<p>&quot;Saya berharap harapan Pak Agus yang menginginkan kerja sama dalam bentuk lain bisa direalisasikan dalam waktu dekat terkait dengan program bisnis kedua belah pihak,&quot; harap Yusuf AR.</p>\r\n\r\n<p>Selain dengan Fajar TV, Witel juga menjalin kerja sama dengan Radar Makassar, Radio SCFM, LKBN Antara, Radio Torano, dan Celebes TV.</p>\r\n\r\n<p>Penandatanganan ini disaksikan langsung oleh seluruh karyawan Telkom Witel Makassar.&nbsp;<strong>(fo)</strong><br />\r\n<br />\r\nSource :&nbsp;<a href=\"http://fajaronline.co.id/2017/06/14/fajar-tv-dan-witel-makassar-tingkatkan-kerja-sama\">http://fajaronline.co.id/2017/06/14/fajar-tv-dan-witel-makassar-tingkatkan-kerja-sama</a></p>\r\n', 'Fajar_TV_dan_Witel_Makassar_Tingkatkan_Kerja_Sama.jpg', '2018-07-15', 'Admin', '1'),
(4, 'Disdik Makassar Teken MoU PPDB Online Bersama Telkom', '<p>Penandatanganan Memorandum of Understanding (MoU) Penerimaan Peserta Didik Baru (PPDB) secara online antara Dinas Pendidikan (Disdik) Kota Makassar, Sekolah, dan PT. Telkom, di Kantor Telkom, Jalan Balaikota, Senin (25/6/2018).</p>\r\n\r\n<p>&ldquo;Untuk menjamin pelaksanaan PPDB secara online yang transparan, jujur, obyektif, dan real time. Maka kami dari Disdik, pihak Sekolah SD dan SMP, serta PT. Telkom melakukan penandatanganan MoU,&rdquo; kata Plt. Kepala Disdik Kota Makassar, Hasbi.</p>\r\n\r\n<p>Dijelaskan Hasbi, pendaftaran PPDB online jenjang SD dan SMP mulai dibuka secara serentak pada 2-4 Juli untuk jalur non zonasi. Kemudian, pengumuman sekaligus pendaftaran ulang dibuka pada 5-7 Juli. Untuk jalur zonasi dibuka pada 4-10 Juli dan pengumanan serta pendaftaran ulang dibuka 11-14 Juli.</p>\r\n\r\n<p>Jalur zonasi utama, kata dia, merupakan jalur yang diperuntukkan bagi calon peserta didik yang berdomisili disekitar sekolah dengan zona yang diatur sesuai dengan kewenangan Dinas Pendidikan.</p>\r\n\r\n<p>&ldquo;Kalau Jalur Inklusif yaitu, jalur yang diperuntukkan bagi calon peserta didik baru yang memiliki, kebutuhan khusus ringan dan mendaftar pada sekolah yang memberikan layanan khusus dan merupakan bagian dari jalur zonasi,&rdquo; terangnya.</p>\r\n\r\n<p>Diketahui, penandatanganan MoU yang dihadiri oleh Plt Kadis Pendidikan, Deputi Telkom dan GM Witel Makassar, Ketua panitia PPDB dan para Kepala Sekolah SD dan SMP se-Kota Makassar. (**)<br />\r\n<br />\r\nSource :&nbsp;<a href=\"http://www.inikata.com/disdik-makassar-teken-mou-ppdb-online-bersama-telkom/\">http://www.inikata.com/disdik-makassar-teken-mou-ppdb-online-bersama-telkom/</a></p>\r\n', 'Disdik_Makassar_Teken_MoU_PPDB_Online_Bersama_Telkom.jpg', '2018-07-15', 'Admin', '14'),
(5, 'Telkom Makassar Jalin Kerja Sama dengan HOOQ Indonesia', '<p>HOOQ Indonesia yang diwakili Panji Suwarna mengadakan sosialisasi kepada jajaran Telkom Makassar yang diikuti masing-masing perwakilan dari&nbsp;<em>Special Purpose Vehicle</em>&nbsp;<em>Agency</em>&nbsp;dan&nbsp;<em>Sales Force</em>&nbsp;dari seluruh teritori wilayah Makassar yang didampingi&nbsp;<em>Manager Customer Care</em>Suhono dan&nbsp;<em>Manager Home Service</em>&nbsp;1 A.Idham Chalid. Panji Suwarna memberikan edukasi bagaimana pelanggan dapat menikmati layanan HOOQ. Kegiatan tersebut berlangsung di ruang rapat&nbsp;<em>General Manager</em>&nbsp;Telkom Makassar Jalan Balaikota No.4 Makassar, Kamis (5/7).</p>\r\n\r\n<p>Hal ini dilatarbelakangi dengan mengoptimalkan kepuasan pelanggan, IndiHome kembali memberikan layanan nonton ribuan film melalui kerja sama dengan pihak HOOQ Indonesia. Hal tersebut merupakan aplikasi streaming dengan menghadirkan pilihan serial film hollywood dan ribuan film Indonesia di mana semuanya bisa diakses langsung dari IndiHome.</p>\r\n\r\n<p>Suhono mengatakan bahwa untuk menarik pelanggan IndiHome, Telkom, dan HOOQ memberikan promo khusus berupa gratis nonton jika pelanggan berlangganan Paket Penuh Berkah. Layanan HOOQ untuk IndiHome bisa langsung diaktifkan melalui aplikasi MyIndiHome sekaligus untuk mendapatkan paket IndiHomenya. Ia pun berharap dengan hadirnya HOOQ akan menjadi salah satu hiburan utama bagi pengguna IndiHome dan terus memberikan layanan yang positif.#(mukhtar/winny/Red01)<br />\r\n<br />\r\nSource :&nbsp;<a href=\"http://www.bumn.go.id/telkom/berita/1-Telkom-Makassar-Jalin-Kerja-Sama-dengan-HOOQ-Indonesia\">http://www.bumn.go.id/telkom/berita/1-Telkom-Makassar-Jalin-Kerja-Sama-dengan-HOOQ-Indonesia</a></p>\r\n', 'Telkom_Makassar_Jalin_Kerja_Sama_dengan_HOOQ_Indonesia.jpg', '2018-07-15', 'Admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `ikon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `ikon`) VALUES
(1, 'Perkantoran', 'Perkantoran', 'industries1.png'),
(2, 'Rumah Sakit', 'Rumah Sakit', 'medical.png'),
(3, 'Bandara', 'Bandara', 'tours1.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `komentar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `website`, `komentar`) VALUES
(1, 'Muhammad Fadhlan Supriadi', 'fadhlansupriadi@gmail.com', 'https://www.linkedin.com/in/fadhlansupriadi/', 'First Comment');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_ccan_assurance`
--

CREATE TABLE `lokasi_ccan_assurance` (
  `id` int(11) NOT NULL,
  `sid` varchar(99) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama_node` varchar(99) NOT NULL,
  `port` int(11) NOT NULL,
  `alamat` text,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `keterangan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_ccan_assurance`
--

INSERT INTO `lokasi_ccan_assurance` (`id`, `sid`, `kategori`, `nama_node`, `port`, `alamat`, `latittude`, `longitude`, `keterangan`) VALUES
(1, '33777534_04118611810_VOICE', 1, 'IN33994944', 2, 'Jalan Hos. Cokroaminoto, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92912, Indonesia', '-2.5523685', '120.3205464', 'Ok'),
(2, '33888534_04119141610_VOICE', 2, 'IN44224299', 3, 'Baliase, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.553288', '120.3440917', 'Loss'),
(3, '33999534_04112112310_VOICE', 3, 'IN66334200', 4, 'Kappuna, Masamba, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5542349', '120.3244691', 'Error'),
(4, '33999534_04112116270_VOICE', 1, 'IN77334566', 7, 'Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5530542', '120.3156402 ', 'Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_ccan_fulfillment`
--

CREATE TABLE `lokasi_ccan_fulfillment` (
  `id` int(11) NOT NULL,
  `sid` varchar(99) NOT NULL,
  `kategori` int(11) NOT NULL,
  `no_order` varchar(99) NOT NULL,
  `nama_odp` varchar(99) NOT NULL,
  `port` int(11) NOT NULL,
  `sn_ont` varchar(99) NOT NULL,
  `alamat` text,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `keterangan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_ccan_fulfillment`
--

INSERT INTO `lokasi_ccan_fulfillment` (`id`, `sid`, `kategori`, `no_order`, `nama_odp`, `port`, `sn_ont`, `alamat`, `latittude`, `longitude`, `keterangan`) VALUES
(1, '33777534_04118611810_VOICE', 1, 'IN33994944', 'BLK FL/040', 2, '321', 'Jalan Hos. Cokroaminoto, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92912, Indonesia', '-2.5523685', '120.3205464', 'Ok'),
(2, '33888534_04119141610_VOICE', 2, 'IN44224299', 'BLK FL/041', 3, '654', 'Baliase, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.553288', '120.3440917', 'Loss'),
(3, '33999534_04112112310_VOICE', 3, 'IN66334200', 'BLK FL/042', 4, '987', 'Kappuna, Masamba, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5542349', '120.3244691', 'Error'),
(4, '33999534_04112116270_VOICE', 1, 'IN77334566', 'BLK FL/043', 7, '465', 'Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5530542', '120.3156402', 'Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_eos`
--

CREATE TABLE `lokasi_eos` (
  `id` int(11) NOT NULL,
  `sid` varchar(99) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama_cc` varchar(99) NOT NULL,
  `datek_pe` varchar(99) NOT NULL,
  `datek_metro` varchar(99) NOT NULL,
  `datek_access` varchar(99) NOT NULL,
  `vlan` varchar(99) NOT NULL,
  `bandwidth` varchar(99) NOT NULL,
  `pic_customer` varchar(99) NOT NULL,
  `tanggal_input` varchar(99) NOT NULL,
  `tanggal_perbaikan` varchar(99) NOT NULL,
  `alamat` text,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `keterangan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_eos`
--

INSERT INTO `lokasi_eos` (`id`, `sid`, `kategori`, `nama_cc`, `datek_pe`, `datek_metro`, `datek_access`, `vlan`, `bandwidth`, `pic_customer`, `tanggal_input`, `tanggal_perbaikan`, `alamat`, `latittude`, `longitude`, `keterangan`) VALUES
(1, '33777534_04118611810_VOICE', 1, 'nama_cc', 'datek_pe', 'datek_metro', 'datek_access', 'vlan', 'bandwidth', 'pic_customer', 'tanggal_input', 'tanggal_perbaikan', 'Jalan Hos. Cokroaminoto, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92912, Indonesia', '-2.5523685', '120.3205464', 'Ok'),
(2, '33888534_04119141610_VOICE', 2, 'nama_cc', 'datek_pe', 'datek_metro', 'datek_access', 'vlan', 'bandwidth', 'pic_customer', 'tanggal_input', 'tanggal_perbaikan', 'Baliase, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.553288', '120.3440917', 'Loss'),
(3, '33999534_04112112310_VOICE', 3, 'nama_cc', 'datek_pe', 'datek_metro', 'datek_access', 'vlan', 'bandwidth', 'pic_customer', 'tanggal_input', 'tanggal_perbaikan', 'Kappuna, Masamba, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5542349', '120.3244691', 'Error');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `isi_profil`) VALUES
(1, 'Profil Witel Makassar', '<p>PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode &ldquo;TLKM&rdquo; dan New York Stock Exchange (NYSE) dengan kode &ldquo;TLK&rdquo;.</p>\r\n\r\n<p>Dalam upaya bertransformasi menjadi&nbsp;<em>digital telecommunication company</em>, TelkomGroup mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (<em>customer-oriented</em>). Transformasi tersebut akan membuat organisasi TelkomGroup menjadi lebih&nbsp;<em>lean&nbsp;</em>(ramping) dan&nbsp;<em>agile</em>&nbsp;(lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat. Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan&nbsp;<em>customer experience</em>&nbsp;yang berkualitas.</p>\r\n\r\n<p>Selengkapnya : <a href=\"http://www.kompasiana.com/febrianto.syam/pesona-pantai-labombo-kota-palopo_5517ed86813311ae689de722\">www.telkom.co.id</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `validasi_ccan_fulfillment`
--

CREATE TABLE `validasi_ccan_fulfillment` (
  `id` int(11) NOT NULL,
  `sid` varchar(99) NOT NULL,
  `kategori` int(11) NOT NULL,
  `no_order` varchar(99) NOT NULL,
  `nama_odp` varchar(99) NOT NULL,
  `port` int(11) NOT NULL,
  `sn_ont` varchar(99) NOT NULL,
  `alamat` text,
  `latittude` text NOT NULL,
  `longitude` text NOT NULL,
  `keterangan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validasi_ccan_fulfillment`
--

INSERT INTO `validasi_ccan_fulfillment` (`id`, `sid`, `kategori`, `no_order`, `nama_odp`, `port`, `sn_ont`, `alamat`, `latittude`, `longitude`, `keterangan`) VALUES
(1, '33777534_04118611810_VOICE', 1, 'IN33994944', 'BLK FL/040', 2, '321', 'Jalan Hos. Cokroaminoto, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92912, Indonesia', '-2.5523685', '120.3205464', 'Ok'),
(2, '33888534_04119141610_VOICE', 2, 'IN44224299', 'BLK FL/041', 3, '654', 'Baliase, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.553288', '120.3440917', 'Loss'),
(3, '33999534_04112112310_VOICE', 3, 'IN66334200', 'BLK FL/042', 4, '987', 'Kappuna, Masamba, Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5542349', '120.3244691', 'Error'),
(4, '33999534_04112116270_VOICE', 1, 'IN77334566', 'BLK FL/043', 10, '465', 'Kappuna, Masamba, Kabupaten Luwu Utara, Sulawesi Selatan 92961, Indonesia', '-2.5530542', '120.3156402', 'Maintenance'),
(21, '123', 1, '21', '123', 23, '231', 'ks', '31', '231', '213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lokasi_ccan_assurance`
--
ALTER TABLE `lokasi_ccan_assurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_ccan_fulfillment`
--
ALTER TABLE `lokasi_ccan_fulfillment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_eos`
--
ALTER TABLE `lokasi_eos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `validasi_ccan_fulfillment`
--
ALTER TABLE `validasi_ccan_fulfillment`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi_ccan_assurance`
--
ALTER TABLE `lokasi_ccan_assurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lokasi_ccan_fulfillment`
--
ALTER TABLE `lokasi_ccan_fulfillment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lokasi_eos`
--
ALTER TABLE `lokasi_eos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `validasi_ccan_fulfillment`
--
ALTER TABLE `validasi_ccan_fulfillment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
