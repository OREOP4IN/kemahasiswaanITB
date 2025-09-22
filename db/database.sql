-- MySQL dump 10.13  Distrib 8.0.40, for macos14 (x86_64)
--
-- Host: localhost    Database: cms_only
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_login` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role_id` int NOT NULL,
  `is_sirajin` enum('1','2','3') DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `kode_fakultas` int NOT NULL DEFAULT '0',
  `id_prodi` varchar(11) NOT NULL DEFAULT '0',
  `is_hadir` int NOT NULL DEFAULT '1',
  `nim` varchar(20) DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=684 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
INSERT INTO `admin_login` VALUES (1,'admin','',1,NULL,NULL,'Super Admin','admin@gmail.com',0,'0',1,NULL,'2025-03-13 03:50:44','1');
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cms` (
  `id_cms` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `judul_eng` varchar(200) DEFAULT NULL,
  `headline` text NOT NULL,
  `headline_eng` text NOT NULL,
  `on_headline` tinyint(1) NOT NULL,
  `isi` text NOT NULL,
  `isi_eng` text,
  `img` varchar(255) DEFAULT NULL,
  `tgl_kirim` datetime NOT NULL,
  `tgl_translate` datetime DEFAULT NULL,
  `pengirim` varchar(100) NOT NULL,
  `translator` varchar(200) NOT NULL,
  `id_admin_pic` int NOT NULL COMMENT 'upload berita bahasa inggris',
  `status` varchar(100) NOT NULL,
  `id_kategori_cms` int NOT NULL,
  `caption` varchar(200) NOT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `tags` text,
  `hint` int NOT NULL DEFAULT '0',
  `is_simkatmawa` int DEFAULT '0',
  `is_utama` int DEFAULT '1',
  `is_bk` int DEFAULT '0',
  `is_karir` int DEFAULT '0',
  `is_tracer` int DEFAULT '0',
  `is_kewirausahaan` int DEFAULT '0',
  `is_prestasi` int DEFAULT '0',
  `is_publish_done` int DEFAULT '0',
  `tgl_publish` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  `nama_penulis` varchar(100) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_reporter` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cms`),
  KEY `id_bidang` (`is_utama`),
  KEY `is_bk` (`is_bk`),
  KEY `is_karir` (`is_karir`),
  KEY `is_tracer` (`is_tracer`),
  KEY `is_publish_done` (`is_publish_done`)
) ENGINE=InnoDB AUTO_INCREMENT=2461 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (2451,'Beasiswa Alumni TK ITB’99 Semester II 2024/2025',NULL,'','',1,'<p>Alumni TK ITB&rsquo;99 membuka kesempatan beasiswa subsidi UKT semester genap 2024/2025 kepada mahasiswa dengan kriteria sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li><strong>Mahasiswa S1 ITB semester 3 atau lebih semua jurusan</strong></li>\r\n	<li><strong>IPK minimal 2.80</strong></li>\r\n	<li><strong>Memiliki tunggakan UKT</strong></li>\r\n</ul>\r\n\r\n<p><strong>Pendaftaran dan upload dokumen beasiswa melalui website&nbsp;<a href=\"https://finaid.itb.ac.id/\" rel=\"noopener\" target=\"_blank\">https://finaid.itb.ac.id/</a>&nbsp;, mulai tanggal 12 Februari s.d 9 Maret 2025</strong></p>\r\n\r\n<p><strong>Persyaratan berkas:</strong></p>\r\n\r\n<ol>\r\n	<li>Formulir Pemohon Beasiswa (<a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/Formulir%20Beasiswa%20Baru%20update_2.xlsx\">download</a>)</li>\r\n	<li>Scan KTM</li>\r\n	<li>Scan Surat Rekomendasi Wakil Dekan Akademik atau Kaprodi atau Dosen Wali</li>\r\n	<li>Transkrip nilai yang sudah ditandatangan Kaprodi</li>\r\n	<li>Scan KTP</li>\r\n	<li>Scan Kartu Keluarga</li>\r\n	<li>Scan slip gaji orang tua atau Surat keterangan penghasilan orang tua dari kelurahan setempat yang terbaru</li>\r\n	<li>Menulis esai dengan tema &ldquo;Impianku sebagai Sarjana ITB&rdquo; sepanjang 1-2 halaman. Esai berisi latar belakang keluarga, alasan mendaftar beasiswa, prestasi selama kuliah (jika ada) dan impian setelah lulus.</li>\r\n</ol>\r\n',NULL,'98a1ec4e7b3f1c3679388e2d78cbc153.png','2025-02-10 01:18:41',NULL,'571','',0,'Published',1,'','2025-02-10','2025-03-09','',749,0,1,0,0,0,0,0,1,'2025-02-10 01:18:41','2025-02-09 18:18:41','2025-02-28 06:18:59','',NULL,'2025-02-05 08:02:38',NULL),(2452,'Beasiswa 10 Einstein',NULL,'','',1,'<p>BEASISWA 10 EINSTEIN yang sebelumnya bernama BF-MMX adalah beasiswa &nbsp;yang diinisiasi bersama oleh para Alumni Fisika ITB 2010&nbsp;dengan tujuan untuk membantu mahasiswa-mahasiswi aktif jurusan &nbsp;Fisika ITB.&nbsp;BEASISWA 10 EINSTEIN sendiri dimulai sejak tahun 2020, dan hingga akhir tahun 2024&nbsp;sudah menyalurkan beasiswa kepada 20 mahasiswa/mahasiswi Fisika ITB yang dibagi menjadi 4 Batch.</p>\r\n\r\n<p>Beasiswa 10 Einstein akan melanjutkan kontribusi beasiswanya untuk tahun 2025 periode January - Juni &nbsp;(Batch 5), dengan bantuan beasiswa sebesar Rp. 500.000,- setiap bulannya yang dikhususkan kepada mahasiswa/mahasiswi aktif &nbsp;Fisika ITB tanpa&nbsp;syarat&nbsp;IPK.</p>\r\n\r\n<p><strong>Pendaftaran dan upload dokumen beasiswa melalui website&nbsp;<a href=\"https://finaid.itb.ac.id/\">https://finaid.itb.ac.id/</a>&nbsp;, mulai tanggal 12&nbsp;Februari sampai dengan 18&nbsp;Februari 2025.</strong></p>\r\n\r\n<p>Berkas yang harus dilengkapi</p>\r\n\r\n<ol>\r\n	<li>Formulir Pendaftaran yang sudah ditandatangani lengkap&nbsp;<a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/Formulir%20Beasiswa%20Baru%20update_3.xlsx\"><strong>disini</strong></a></li>\r\n	<li>Surat penghasilan orang tua terbaru</li>\r\n	<li>Scan KTM</li>\r\n	<li>Transkrip Akademik s.d. semester terakhir&nbsp;yang ditanda tangan kaprodi</li>\r\n	<li>Surat sedang tidak menerima beasiswa lain (pengajuan melalui website&nbsp;<strong><a href=\"https://finaid.itb.ac.id/\" rel=\"noopener\" target=\"_blank\">https://finaid.itb.ac.id/</a></strong>&nbsp;)</li>\r\n</ol>\r\n',NULL,'4f573dd226e508978f0d5977bbc4706b.png','2025-02-12 07:44:17',NULL,'571','',0,'Published',1,'','2025-02-12','2025-02-18','',1793,0,1,0,0,0,0,0,1,'2025-02-12 07:44:17',NULL,'2025-02-28 05:52:04','',NULL,'2025-02-12 07:44:50',NULL),(2453,'Pengmas Mahasiswa ITB : Tingkatkan Literasi Masyarakat Desa, Mahasiswa ITB Kembangkan Pojok Baca di Desa Cupunagara, Sumedang',NULL,'','',1,'<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>BANDUNG, kemahasiswaan.itb.ac.id</strong> &ndash; Salah satu Unit Kegiatan Mahasiswa ITB, Gebrak Indonesia menggelar kegiatan Pengabdian Masyarakar berupa program peningkatan literasi warga desa. Unit ini merancang program kegiatan pengadaan pojok baca dan peningkatan literasi selama bulan November 2024 di SDN Ciwangun yang berlokasi di Desa Cupunagara, Kecamatan Cisalak, Kabupaten Sumedang, Jawa Barat. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Program tersebut merupakan inisiasi yang muncul dari permasalahan rendahnya tingkat literasi siswa di Desa Cupunagara yang dapat secara signifikan berpengaruh negatif terhadap tingkat pendidikan. Padahal, pendidikan menjadi salah satu aspek yang menjadi pondasi masyarakat desa tersebut untuk meningkatkan kesejahteraan hidupnya. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Ketua Pelaksana program, Muhammad Addin Ihsan mengatakan program kegiatan tersebut memiliki tiga tujuan, yaitu mengadakan fasilitas pojok baca, termasuk menyediakan buku bacaan yang menjadi akses informasi yang layak dan berkualitas bagi siswa SDN Ciwangun, meningkatkan minat baca dan literasi siswa SDN Ciwangun guna membangun wawasan yang luas dan mengembangkan keterampilan yang baik, dan meningkatkan rasa empati dan kepekaan anggota Gebrak Indonesia dengan membersamai masyarakat dalam mengatasi permasalahan masyarakat. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&ldquo;Fasilitas pojok baca diberikan di setiap ruang kelas, hal tersebut disebabkan keterbatasan ruang sekolah sehingga pilihan untuk membuat pojok baca di setiap kelas menjadi yang paling memungkinkan, terlebih lagi siswa akan memiliki akses yang lebih bebas ketika memiliki pojok baca di masing-masing kelasnya,&rdquo; ungkap Addin. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Selain itu, menurutnya Pojok Baca juga menyediakan buku bacaan dari hasil donasi. Buku-buku tersebut disesuaikan untuk siswa kelas 1-6. Selain itu, diadakan kegiatan Tulis Kisah yang merupakan peningkatan literasi dengan mengajak siswa kelas 3 hingga 5 untuk menuliskan cerita pendek yang kemudian akan dibukukan tiap kelasnya dan diletakkan di pojok baca kelasnya masing-masing. Sementara itu, untuk siswa kelas 1 dan 2 diajak untuk menggambar dan juga dibukukan dengan prosedur yang sama dengan buku cerpen. Sebagai upaya meningkatkan minat baca siswa, diadakan juga kegiatan bercerita tentang buku yang ada di pojok baca mereka. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/ezgif-8390d9dbb742f9.gif\" style=\"height:540px; width:720px\" /></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Program-program kegiatan tersebut dirancang dengan menarik agar siswa lebih bersemangat dan memberikan engagement yang lebih tinggi dengan harapan minat literasi siswa dapat mulai tertanam dan tumbuh sejak pendidikan dasar. Sebagai keberlanjutan program kegiatannya, pihak SDN Ciwangun telah memiliki program literasi yang dilakukan selama 15 menit setiap hari agar literasi siswa dapat terus dipupuk.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&ldquo;Melalui program kegiatan tersebut, kami berharap dapat membersamai masyarakat menjadi masyarakat yang mandiri dalam mengelola potensi dan mengatasi permasalahannya sehingga dapat terwujudlah masyarakat yang Sejahtera,&rdquo; pungkasnya. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Adapun mahasiswa ITB yang melaksanakan program tersebut merupakan anggota UKM Gebrak Indonesia ITB diantaranya, &nbsp;Muhammad Addin Ihsan , Qoniaturohmah , Laila Raudhatul Jannah , Salma Janesia Permata Putri , Syahreza Qubha Ramadhan , Asa Mutiara Bestari, Ira Nazwa Fazzira , Nabiel Putra Santosa , Andrea Bintang B.K, Muhammad Fa&#39;iz Fadhlur Rohman, Andi Siti Nurhaliza Syahrul , Nada Cinta Kaylifa , Nanda Nuzula, Rizka Nur Maulani , Dhafina Fadhilah Fathin , dan Gea Ekartama. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n',NULL,'71d1738432d16c84af59701bbab0fb55.jpg','2025-02-03 02:45:35',NULL,'503','',0,'Published',0,'',NULL,NULL,'',1781,0,1,0,0,0,0,0,1,'2025-02-03 02:45:35',NULL,'2025-03-13 03:47:49','',NULL,'2025-02-13 02:46:08',NULL),(2454,'Edukasi Maggot dan Revitalisasi TPS: Langkah Mahasiswa ITB Ubah Stigma Sampah di Cikancung',NULL,'','',0,'<p dir=\"ltr\"><strong>BANDUNG.kemahasiwaan.itb.ac.id &ndash;</strong> Mahasiswa Rekayasa Infrastruktur Lingkungan angkatan 2023 dari ITB melaksanakan program pengabdian masyarakat dengan sebutan Gorila 2025: Geonara, di Desa Cikasungka dan Desa Cikancung, Kabupaten Bandung. Program yang berlangsung selama delapan hari ini, mulai 20 hingga 27 Januari 2025 berfokus pada solusi permasalahan sampah dan sanitasi di Kecamatan Cikancung.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Kegiatan ini tidak hanya memberikan dampak positif bagi masyarakat, tetapi juga menjadi wadah bagi para mahasiswa untuk menerapkan ilmu perkuliahan dalam kehidupan nyata. Salah satu tujuan utama kegiatan ini adalah mengubah stigma masyarakat mengenai sampah serta meningkatkan kesadaran warga tentang pentingnya menjaga kebersihan lingkungan.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Pengabdian ini melibatkan dua tim utama, yakni tim ganjil dan tim genap. Tim ganjil bertugas di Desa Cikasungka dengan fokus program pada pembangunan rumah maggot, revitalisasi taman, serta edukasi kepada siswa SD/MI mengenai maggot, pemilahan sampah, pembuatan biopori, dan pemanfaatan minyak jelantah menjadi sabun. Tim genap, yang bertugas di Desa Cikancung, mengadakan program revitalisasi TPS dan pembangunan rumah maggot. Mereka juga melakukan sosialisasi terkait pemanfaatan sampah organik menjadi pupuk.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Aisyah, Ketua Geonara, mengungkapkan bahwa program ini sengaja menyasar anak-anak SD/MI di sekitar desa untuk membiasakan mereka mengolah sampah organik dengan memasukkannya ke dalam rumah maggot. &ldquo;Diharapkan kegiatan ini dapat menjadi kebiasaan yang berkelanjutan bagi anak-anak di desa,&rdquo; ujar Aisyah.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Selama pelaksanaan kegiatan, lebih dari 80 orang, termasuk mahasiswa dan warga setempat, terlibat aktif dalam pembangunan dua rumah maggot. Untuk mempercepat pengerjaan, mereka juga menyewa tukang, namun mahasiswa dan warga turut serta membantu dalam proses pembangunannya.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Selain itu, mahasiswa berhasil membersihkan tumpukan sampah yang telah menumpuk selama delapan bulan di TPS Desa Cikasungka, sehingga area tersebut kini terlihat lebih bersih dan rapi. Mereka juga memperbaiki serta menambah biopori di sekitar desa. Meski hujan yang turun setiap sore sempat menghambat kegiatan, mahasiswa tetap berupaya menyelesaikan target harian dengan memanfaatkan waktu sebaik mungkin.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Aisyah menegaskan bahwa program ini tidak berhenti sampai di sini. Mereka berencana melakukan monitoring berkala dan mengagendakan kunjungan anak-anak SD ke rumah maggot untuk mengenalkan lebih jauh tentang manfaat maggot dalam mengolah sampah organik.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Kegiatan pengabdian ini menjadi langkah awal yang diharapkan dapat menginspirasi desa lain untuk mengelola sampah secara mandiri dan berkelanjutan.</p>\r\n',NULL,NULL,'2025-02-14 07:06:29',NULL,'675','',0,'Draft',0,'',NULL,NULL,'',0,0,1,0,0,0,0,0,0,NULL,NULL,'2025-02-14 07:07:02','','Nur Asyiah','2025-02-14 07:07:02','675'),(2455,'Penerima Beasiswa M10 Foundation',NULL,'','',1,'<p dir=\"ltr\"><strong>Selamat&nbsp;</strong></p>\r\n\r\n<p><strong>Kepada mahasiswa/i yang terpilih sebagai Penerima Beasiswa M10 Foundation, yaitu:</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Mayang Chantika Program Studi Teknik Mesin</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Adam Savigo Program Studi Teknik Mesin</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Terima kasih</p>\r\n',NULL,'77b1cde147c96685c2f6d20ade4559df.png','2025-02-17 03:31:52',NULL,'571','',0,'Published',1,'','2025-02-17','2025-02-28','',1479,0,1,0,0,0,0,0,1,'2025-02-17 03:31:53',NULL,'2025-02-28 06:24:46','',NULL,'2025-02-17 03:32:27',NULL),(2456,'ITB Sapu Bersih Tiga Juara di Kompetisi Bangunan Air Indonesia 2025',NULL,'','',0,'<p dir=\"ltr\"><strong>JATINANGOR, kemahasiswaan.itb.ac.id &ndash;</strong> Institut Teknologi Bandung (ITB) kembali menunjukkan dominasinya di dunia akademik dengan menyabet tiga gelar juara dalam Kompetisi Bangunan Air Indonesia (KBAI) 2025. Tiga tim dari Program Studi Teknik dan Pengelolaan Sumber Daya Air (TPSDA) ITB berhasil meraih Juara 1, Juara 3, dan Juara Harapan 1 dalam ajang bergengsi yang diselenggarakan oleh Himpunan Mahasiswa Pengairan Fakultas Teknik Universitas Brawijaya.</p>\r\n\r\n<p dir=\"ltr\">Tim Amreta Varuna, yang terdiri dari Daniel Darwaman, Alif Naufal Ramadhan, dan Ardy Nur Ahmadito, sukses meraih Juara 1 dengan inovasi Smart Mangrove Village. Tim ini menawarkan solusi berbasis mangrove dan thin permeable dam untuk mengatasi dampak kenaikan permukaan laut dan mendukung kehidupan nelayan pesisir. Sementara itu, Amreta Vandhya yang diperkuat oleh Rivel Fanani, Rehan Al Baasiq, dan Jason Wilchan Samuel, menempati Juara 3 dengan konsep Smart Integrated Groundwater Management with Desalination (SIGMA) yang berfokus pada pengelolaan air tanah dan desalinasi. Adapun Amreta Anahita yang beranggotakan Shifara Shalaysa Sutari, Dhaifina Nazhifah Azhar, dan Naila Alfarafisha Zakiyarahman berhasil meraih Juara Harapan 1 dengan inovasi Smart Coastal Operation Reservoir (SCOR Application), sebuah sistem berbasis Internet of Things (IoT) untuk desalinasi dan pemulihan akuifer di pesisir Cirebon.</p>\r\n\r\n<p dir=\"ltr\">Kompetisi yang berlangsung dari Desember 2024 hingga Februari 2025 ini bertepatan dengan peringatan World Water Day dan mengangkat isu pencairan gletser yang memicu kenaikan muka air laut. Setiap tahunnya, mahasiswa TPSDA ITB aktif berpartisipasi dan kerap membawa pulang gelar juara.</p>\r\n\r\n<p dir=\"ltr\">Rehan Al Baasiq mengungkapkan bahwa motivasi utama mereka mengikuti KBAI 2025 adalah untuk memperdalam wawasan, menambah pengalaman, serta meraih prestasi. Ia juga membagikan tips sukses dalam kompetisi ini, seperti kesesuaian inovasi dengan tema, pemilihan judul yang menarik, serta presentasi yang komunikatif dan persuasif.</p>\r\n\r\n<p dir=\"ltr\">Meski menghadapi tantangan, seperti membawa maket berukuran besar dan mengatur waktu di tengah kesibukan tugas akhir, ketiga tim ITB tetap berhasil menampilkan performa terbaik mereka. &ldquo;Kami berharap prestasi ini bisa menjadi inspirasi bagi mahasiswa TPSDA ke depan agar terus berkiprah di KBAI. Diskusi intensif dengan dosen pembimbing sejak awal sangat membantu dalam proses perlombaan,&rdquo; pungkas Baasiq.</p>\r\n',NULL,NULL,'2025-02-26 13:42:51',NULL,'675','',0,'Draft',0,'',NULL,NULL,'',0,0,1,0,0,0,0,0,0,NULL,NULL,'2025-02-26 13:43:29','','Nur Asyiah','2025-02-26 13:43:29','675'),(2457,'Turnamen Asrama : Meriahkan Kebersamaan Penghuni Asrama ITB Jatinangor',NULL,'','',1,'<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>JATINANGOR, kemasiswaan.itb.ac.id - </strong>Kegiatan Turnamen Asrama (Turma) kembali dilaksanakan di Kampus ITB Jatinangor, menghadirkan semangat kompetisi dan kebersamaan antar penghuni asrama. Acara yang menjadi salah satu agenda tahunan ini berlangsung pada tiga hari berbeda, yakni 30 November 2024 dengan lomba tarik tambang dan estafet air, 7 Desember 2024 dengan lomba Mobile Legends, serta puncak acara pada 8 Desember 2024 yang sekaligus menjadi momen penutupan kegiatan.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Turnamen Asrama merupakan salah satu bentuk upaya untuk mempererat hubungan antar penghuni asrama melalui berbagai kegiatan yang kompetitif namun tetap penuh kebersamaan. Rangkaian acara ini diawali dengan sambutan dari Alfian Al Faridzi selaku ketua Turnamen Asrama. Dalam sambutannya, beliau menyampaikan bahwa kegiatan ini bertujuan untuk membangun solidaritas, mempererat silaturahmi, serta memberikan ruang bagi mahasiswa untuk melepas penat dari rutinitas akademik yang padat.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&ldquo;Kami berharap melalui Turnamen Asrama ini, para penghuni asrama dapat saling mengenal lebih dekat, sekaligus menikmati waktu luang dengan cara yang menyenangkan dan produktif,&rdquo; ujar Alfian. Ia juga menambahkan bahwa semangat sportivitas dan kerja sama tim adalah nilai utama yang ingin ditanamkan melalui kegiatan ini.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Pelaksanaan lomba tarik tambang dan estafet air pada 30 November 2024 menjadi pembuka yang penuh semangat. Kegiatan ini diikuti oleh berbagai tim yang terdiri dari mahasiswa lintas jurusan, menciptakan suasana kompetisi yang seru namun tetap menjunjung tinggi rasa kebersamaan. Lomba ini berhasil menyedot perhatian penonton dengan sorakan dan dukungan penuh semangat untuk tim favorit mereka.</span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img src=\"https://lh7-rt.googleusercontent.com/docsz/AD_4nXd6pPlNz9sV-asiElpRKZBSE_gBIa8k9KrQ8N-boPpv1Cs2SvEhOh_U-K2uhvCfxOhQ_UEIYd2bPskdndwOBkXMQqmmmiFqAKdM1BlFd4KbjRS6NzyZ421uUgUYkpVFftRJL2cNlw?key=CuQ4pDfXJ7qU1gPlEFssOqDy\" style=\"height:339px; width:602px\" /></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Selanjutnya, pada 7 Desember 2024, giliran para pecinta gim yang unjuk kemampuan dalam lomba Mobile Legends. Kompetisi ini menghadirkan tim-tim terbaik dari penghuni asrama, yang tidak hanya bertanding untuk menang, tetapi juga menunjukkan strategi dan koordinasi yang luar biasa. Babak demi babak berlangsung dengan ketat, menghasilkan pertandingan yang mendebarkan hingga final.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Hari terakhir, 8 Desember 2024, menjadi puncak dari seluruh rangkaian Turnamen Asrama. Selain pertandingan eksibisi yang menghibur, momen ini juga diwarnai dengan berbagai hiburan seperti penampilan musik akustik dari mahasiswa asrama, bazar makanan, dan berbagai mini games yang dapat diikuti oleh seluruh peserta maupun penonton. Acara ditutup dengan pembagian hadiah kepada para pemenang lomba tarik tambang dan Mobile Legends. Hadiah diberikan langsung oleh Alfian Al Faridzi dan perwakilan pengurus asrama, disambut dengan tepuk tangan meriah dari seluruh yang hadir.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&ldquo;Acara ini seru banget karena bisa me-refresh otak dan menambah kenalan baru,&rdquo; ujar Sonya Putri Fadilah, salah satu tutor asrama yang turut hadir dan menyaksikan kemeriahan acara.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Turnamen Asrama bukan hanya sekadar ajang kompetisi, tetapi juga menjadi wadah untuk menciptakan kenangan manis dan kebersamaan yang akan terus dikenang oleh para penghuni asrama ITB Jatinangor. Dengan berbagai kegiatan yang memadukan kompetisi dan hiburan, acara ini sukses memberikan pengalaman yang tak terlupakan bagi semua pihak yang terlibat.</span></p>\r\n',NULL,'367c26a4d3508d6ff13122086c802855.jpg','2025-02-01 03:54:26',NULL,'503','',0,'Published',0,'',NULL,NULL,'',141,0,1,0,0,0,0,0,1,'2025-02-01 03:54:26','2025-02-26 20:54:26','2025-02-28 05:39:14','','Nur Asyiah','2025-02-27 03:28:16','675'),(2458,'Terus Berkembang Bersama Character Development Training (CDT) ITB Tahap II 2024',NULL,'','',1,'<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>BANDUNG, kemahasiswaan.itb.ac.id &ndash; </strong><em>Character Development Training </em>(CDT) ITB merupakan <em>re-branding </em>dari kegiatan SMPE SSDK (Strategi Menjadi Pribadi Efektif dan Strategi Sukses di Kampus). Kegiatan ini dinaungi oleh Direktorat Kemahasiswaan (DITMAWA) ITB dan dilaksanakan oleh Tim Pendamping Kegiatan Kemahasiswaan (TPKK) DITMAWA ITB. Program ini dilaksanakan pada akhir pekan pertama semester 1 dan 2 yang&nbsp; menyasar mahasiswa Tahap Persiapan Bersama (TPB) sebagai pesertanya.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Pada kesempatan kali ini kegiatan CDT ITB Batch II 2024 &nbsp;dilaksanakan selama 1 (satu) hari secara offline pada 15 Februari 2025 lalu, di ITB Kampus Jatinangor dimana Training dilaksanakan selama 2 shift. Ribuan peserta TPB hadir mengikuti kegiatan tersebut. Ada beragam materi yang akan membuka wawasan serta penggetahuan mereka terhadap dunia perkuliahan.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Ketua Pelaksana CDT ITB 2024 , Givo Muska Setiawan menuturkan kegiatan ini berfokus ke dalam pengembangan dan pelatihan pendidikan karakter di kalangan mahasiswa baru ITB. &nbsp;Pemilihan mahasiswa baru sebagai subjek utama kegiatan CDT dilatarbelakangi oleh berbagai permasalahan yang kerap timbul akibat masa transisi yang dialami mereka ketika mulai menjalani status sebagai mahasiswa. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&ldquo;Dunia perkuliahan yang memiliki atmosfer berbeda dan cenderung lebih kompleks dibandingkan SMA/SMK seringkali membuat mahasiswa baru rendah diri sehingga mampu menghilangkan identitas dan ciri khasnya mereka sendiri,&rdquo; kata Givo. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Menurutnya, kegiatan CDT hadir sebagai salah satu solusi yang bisa menjawab permasalahan tersebut dengan harapan kegiatan ini dapat dijadikan ajang pengenalan awal mahasiswa baru dalam dunia perkuliahan yang ada di kampus dan dalam hal ini di ITB. Selain untuk ajang pengenalan, CDT ITB juga memiliki komitmen untuk menanamkan karakter yang menjadi identitas mahasiswa ITB, yaitu Adaptif, Integritas, dan Rendah Hati kepada seluruh mahasiswa baru.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/ezgif-8bfd5bf7b69589%20(1).gif\" style=\"height:480px; width:720px\" /></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Kegiatan ini ditujukan agar mahasiswa mampu memahami prinsip integritas sebagai keselarasan antara pikiran, perkataan, dan tindakan, serta menerapkannya dalam kehidupan akademik dan sosial. Selain itu, mahasiswa juga didorong mampu memahami prinsip rendah hati dan terbiasa menerima kritik, menghargai perbedaan pendapat, dan berkontribusi dengan tulus tanpa mencari pengakuan pribadi.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&ldquo;Harapannya, dengan ketiga karakter tersebut, mahasiswa baru mampu menjalani kehidupan perkuliahan di kampus dengan baik dan bisa mendapatkan hasil yang cemerlang serta tetap sesuai dengan tujuan hidup yang telah mereka tentukan di awal masa perkuliahan,&rdquo; ucapnya. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Pada pelaksanaan kegiatan, &nbsp;adapun peserta yang menjadi sasaran yakni sekitar 4800 mahasiswa TPB Angkatan 2024 dan 400 mahasiswa Angkatan 2023 yang mengulang.</span></span></p>\r\n',NULL,'619a6c9000193f9aacbb2652ab2977c9.jpg','2025-02-16 03:43:08',NULL,'503','',0,'Published',0,'',NULL,NULL,'',300,0,1,0,0,0,0,0,1,'2025-02-16 03:43:08',NULL,'2025-03-11 01:08:58','',NULL,'2025-02-27 03:43:45',NULL),(2459,'BEASISWA VAN DEVENTER-MAAS INDONESIA 2025/2026',NULL,'','',1,'<p><strong>Van Deventer-Maas Indonesia</strong>&nbsp;telah membuka kembali beasiswa Tahun&nbsp;2025/2026&nbsp;untuk mahasiswa S1 yang berasal dari keluarga dengan keterbatasan finansial. Beasiswa yang diberikan memberikan manfaat :&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Uang saku sebesar Rp. 800.000,- per bulan hingga semester 8</li>\r\n	<li>Kesempatan mendapatkan dana exam bonus dan TOEFL bonus</li>\r\n	<li>Mendapatkan program&nbsp;<em>capacity building</em>&nbsp;gratis</li>\r\n</ol>\r\n\r\n<p>Pendaftaran dibuka pada tanggal&nbsp;<strong>10 Februari - 10 Maret 2025,&nbsp;</strong>melalui website&nbsp;<em><strong>Online Registration System</strong></em>&nbsp;yaitu&nbsp;<a href=\"http://ers.vdms-scholarship.org/\">ers.vdms-scholarship.org</a>,</p>\r\n\r\n<p><strong>Persyaratan :</strong></p>\r\n\r\n<ol>\r\n	<li>Mahasiswa S1/D4</li>\r\n	<li>Usia maksimum 27 tahun</li>\r\n	<li>Berasal dari keluarga dengan keterbatasan finansial (dinyatakan dengan SKTM)</li>\r\n	<li>Minimal IPK 3.00</li>\r\n	<li>Tidak sedang menerima beasiswa lain&nbsp;<strong>(</strong>pengajuan melalui website&nbsp;<strong><a href=\"https://finaid.itb.ac.id/\" rel=\"noopener\" target=\"_blank\">https://finaid.itb.ac.id/</a></strong>&nbsp;)</li>\r\n</ol>\r\n\r\n<p><strong>Dokumen yang harus dilengkapi:</strong></p>\r\n\r\n<ol>\r\n	<li>Formulir Beasiswa pada&nbsp;<a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/Formulir%20VDMI%202025-2026.pdf\">terlampir</a></li>\r\n	<li>Surat Keterangan Tidak Mampu (SKTM) yang dikeluarkan oleh Kelurahan terbaru &nbsp;(Jika ada)</li>\r\n	<li>Slip gaji resmi orangtua atau wali&nbsp;<strong>maksimal 2 bulan terakhir</strong>&nbsp;baik yang bekerja di institusi pemerintah atau swasta. Bagi orangtua mahasiswa yang bekerja sebagai wirausaha bisa melampirkan surat dari kelurahan setempat.</li>\r\n	<li>Transkrip akademik atau IPK terbaru (minimal dengan nilai 3,00) yang sudah di tanda tangan oleh Kaprodi</li>\r\n	<li>Fotokopi KTP, Kartu Tanda Mahasiswa (KTM), Kartu Keluarga (KK)</li>\r\n	<li>Fotokopi halaman depan buku tabungan atas nama sendiri (Disiapkan apabila lolos dan diterima sebagai penerima beasiswa VDMS)</li>\r\n	<li>Fotokopi Tagihan listrik / Telepon rumah Domisili&nbsp;<strong>(maksimal 2 bulan terakhir)</strong></li>\r\n	<li>Membuat Essay dalam bahasa Inggris yang menerangkan:&nbsp; mengenai diri Anda (keluarga, studi, kegiatan keorganisasi dan prestasi (jika ada));&nbsp;mengapa VDMI&nbsp;harus memilih Anda menjadi penerima beasiswa; apa yang Anda harapkan jika terpilih sebagai penerima beasiswa VDMI; dan apa yang dapat&nbsp;Anda berikan kepada lingkungan dan&nbsp;masyarakat setelah anda selesai menerima beasiswa.&nbsp;<strong>(Minimal 1,5 halaman A4, Hurup:Palantino Linotype, ukuran 11, dan spasi 1).</strong></li>\r\n</ol>\r\n\r\n<p><strong>Informasi selengkapnya download&nbsp;<a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/2025-Manual-Book-ORS-VDMI.pdf\">YVDMI Manual Book</a></strong><a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/2025-Manual-Book-ORS-VDMI.pdf\">&nbsp;</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/2025%20-%20Flyer%20ORS%20VDMI%20(ITB)_001.png\" style=\"height:1131px; width:800px\" /></p>\r\n',NULL,'5a78d009a432b1e250474dfe6a60ced9.png','2025-02-27 08:38:30',NULL,'571','',0,'Published',1,'','2025-02-27','2025-03-10','',195,0,1,0,0,0,0,0,1,'2025-02-27 08:38:30','2025-02-27 01:38:30','2025-02-28 06:02:57','',NULL,'2025-02-27 08:37:43',NULL),(2460,'Penerima Bantuan Ikatan Orangtua Mahasiswa ITB 2025',NULL,'','',1,'<p><strong>SELAMAT !!!</strong></p>\r\n\r\n<p>Kepada Mahasiswa/i yang lolos sebagai Penerima&nbsp;<strong>Bantuan Ikatan Orangtua Mahasiswa (IOM) ITB tahun 2025</strong>, dengan&nbsp;<strong>kriteria Bantuan Biaya Hidup / Biaya UKT / Biaya Tugas Akhir periode Semester II 2024/2025&nbsp;</strong>:&nbsp;<a href=\"https://kemahasiswaan.itb.ac.id/assets/AdminLTE-2.3.0/plugins/ckeditor/plugins/responsive_filemanager//source/PENERIMA%20IOM%20UKT%20%2C%20BIAYA%20HIDUP%20DAN%20TA%202025.pdf\">terlampir</a></p>\r\n\r\n<p>Informasi selengkapnya silahkang menghubungi Sekretariat IOM 0815-7359-8031<br />\r\n<br />\r\nTerima kasih</p>\r\n',NULL,'badf94ae19acd701ea8910526ff535c7.png','2025-02-28 02:51:55',NULL,'571','',0,'Published',1,'','2025-02-28','2025-03-09','',174,0,1,0,0,0,0,0,1,'2025-02-28 02:51:55',NULL,'2025-02-28 06:24:21','',NULL,'2025-02-28 02:52:33',NULL);
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `default_profiles`
--

DROP TABLE IF EXISTS `default_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `default_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `ordering_count` int DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `nim_tpb` int DEFAULT NULL,
  `nim` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `id_prodi` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `updated_on` int unsigned DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `quotes` longtext,
  `show_quotes` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(200) DEFAULT NULL,
  `email_non_itb` varchar(60) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `twitter` varchar(20) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL,
  `line` varchar(15) DEFAULT NULL,
  `no_hp_six` varchar(20) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `jenis_telp` enum('Pra Bayar','Pasca Bayar','') DEFAULT NULL,
  `provider` enum('Telkomsel','Indosat Ooredoo','Axis','XL Axiata','Smartfren','3 Indonesia','') DEFAULT NULL,
  `telp_penanggungjawab` varchar(100) NOT NULL,
  `telp_kuliah` varchar(100) NOT NULL,
  `telp_darurat` varchar(100) NOT NULL,
  `telp_paket_data` varchar(1000) DEFAULT NULL,
  `jenis_telp_paket_data` enum('Pra Bayar','Pasca Bayar','') DEFAULT NULL,
  `whatsapp` varchar(1000) DEFAULT NULL,
  `is_temporary` int NOT NULL DEFAULT '0',
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  `no_reg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95726725 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `default_profiles`
--

LOCK TABLES `default_profiles` WRITE;
/*!40000 ALTER TABLE `default_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `default_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id_faq` int NOT NULL AUTO_INCREMENT,
  `id_faq_kategori` int NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban_bidang` text,
  `jawaban` text,
  `lampiran` text,
  `status` int NOT NULL DEFAULT '0',
  `status_bidang` int NOT NULL DEFAULT '0',
  `created_pertanyaan_by` varchar(30) NOT NULL,
  `created_jawaban_by` varchar(30) NOT NULL,
  `created_jawaban_bidang_by` varchar(30) DEFAULT NULL,
  `id_jabatan_responsible` int NOT NULL,
  `id_jabatan_responsible_lead` int NOT NULL,
  `created_date_pertanyaan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date_jawaban` timestamp NULL DEFAULT NULL,
  `created_date_jawaban_bidang` timestamp NULL DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_kategori`
--

DROP TABLE IF EXISTS `faq_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_kategori` (
  `id_faq_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_faq_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_kategori`
--

LOCK TABLES `faq_kategori` WRITE;
/*!40000 ALTER TABLE `faq_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_berita`
--

DROP TABLE IF EXISTS `log_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_berita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `id_konten` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_berita`
--

LOCK TABLES `log_berita` WRITE;
/*!40000 ALTER TABLE `log_berita` DISABLE KEYS */;
INSERT INTO `log_berita` VALUES (1,'10.32.101.233',2458),(2,'10.32.101.233',2453),(3,'10.32.101.126',2453);
/*!40000 ALTER TABLE `log_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisasi_kemahasiswaan`
--

DROP TABLE IF EXISTS `organisasi_kemahasiswaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organisasi_kemahasiswaan` (
  `id_org_kemahasiswaan` int NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(200) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `singkatan` varchar(255) DEFAULT NULL,
  `visi` longtext,
  `misi_unit` longtext,
  `tahun_berdiri` date DEFAULT NULL,
  `jumlah_anggota` int DEFAULT NULL,
  `fmipa` int DEFAULT NULL,
  `sith` int DEFAULT NULL,
  `sf` int DEFAULT NULL,
  `fttm` int DEFAULT NULL,
  `fitb` int DEFAULT NULL,
  `stei` int DEFAULT NULL,
  `fti` int DEFAULT NULL,
  `ftsl` int DEFAULT NULL,
  `sappk` int DEFAULT NULL,
  `fsrd` int DEFAULT NULL,
  `ftmd` int DEFAULT NULL,
  `sbm` int DEFAULT NULL,
  `anggota_aktif` int DEFAULT NULL,
  `alamat_sekretariat` longtext,
  `telp` varchar(100) DEFAULT NULL,
  `alamat_surat` longtext,
  `bentuk_sekretariat` varchar(100) DEFAULT NULL,
  `fasilitas` longtext,
  `jadwal_kegiatan` varchar(100) DEFAULT NULL,
  `tempat_kegiatan` varchar(100) DEFAULT NULL,
  `prestasi` longtext,
  `kegiatan_sebelum` varchar(100) DEFAULT NULL,
  `rencana_kegiatan` longtext,
  `rutin` varchar(100) DEFAULT NULL,
  `non_rutin` varchar(100) DEFAULT NULL,
  `id_tipe_org` int DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `id_admin` int DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `email_ormawa` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `line` varchar(100) DEFAULT NULL,
  `status_aktif` varchar(1) NOT NULL DEFAULT '0',
  `daftar_ulang` date DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `approval_user_id` int DEFAULT NULL COMMENT 'id_admin',
  `blokir` int NOT NULL DEFAULT '0',
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_org_kemahasiswaan`),
  KEY `daftar_ulang` (`daftar_ulang`),
  KEY `approval_date` (`approval_date`),
  KEY `approval_user_id` (`approval_user_id`),
  KEY `kode_kategori` (`kode_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisasi_kemahasiswaan`
--

LOCK TABLES `organisasi_kemahasiswaan` WRITE;
/*!40000 ALTER TABLE `organisasi_kemahasiswaan` DISABLE KEYS */;
INSERT INTO `organisasi_kemahasiswaan` VALUES (185,'PDK','Gajah Ngomik','Gamik','Gajah Ngomik sebagai wadah pengembangan kemampuan untuk berkarya dan mencetak generasi komikus muda di ITB.','Mengembangkan semangat dan menunjang anggota Gajah Ngomik dalam berkarya melalui akses informasi, pengetahuan, dan pengalaman seputar komik.\r\n','2019-08-23',108,0,0,0,0,0,0,0,0,0,0,0,0,50,'-','085956251900','Jalan Cisitu Lama gang I no. 17\r\nCoblong\r\nKota Bandung ','-','10 eksemplar kompilasi komik Salam Ganesha','Jumat','CC Timur, CADL','Juara 2 Mangafest X UGM 2020','Kompilasi komik Salam Ganesha','Comic Workshop and Webinar, Kompilasi Komik Salam Ganesha, Komik Strip Ganesha, Gamik di Reels, Gamik keliling','Kelas Komik, Workshop Menggambar Komik','Kompilasi Komik Salam Ganesha 4, Komik Strip Ganesha, GamBar',1,'185_lampiran_sg.zip',593,'185_logo.jpg','gajahngomik@gmail.com','-','-','gajahngomik','gajahngomik','-','1',NULL,NULL,NULL,0,'2024-11-26 06:30:34','1'),(187,'PDK','Society of Renewable Energy ITB','SRE','SRE ITB sebagai wadah untuk mencetuskan peran dan kesadaran mahasiswa di bidang energi baru dan terbarukan untuk kemaslahatan masyarakat yang lebih besar.?\r\n\r\n','1. Meningkatkan keilmuan energi baru dan terbarukan (EBT) mengenai program pembelajaran.\r\n2. Menyediakan portofolio eksklusif melalui pembelajaran hands-on sesuai dengan minat setiap anggotanya.\r\n3. Memaksimalkan keterampilan setiap anggota melalui berbagai program kerja dan program pengembangan diri.\r\n4. Membangun dan menjaga hubungan internal yang suportif untuk menghasilkan luaran yang signifikan.\r\n5. Memperluas jaringan dengan pihak eksternal sebagai bentuk implementasi pemberian dampak sosial ke lingkungan.\r\n','2019-07-27',132,0,0,0,0,0,0,0,0,0,0,0,0,132,'-','082115504381','sre@km.itb.ac.id','0','Solar panel equipment','REview, Skill Training','Online ','NYSRE (Rekor MURI webinar dengan peserta milenial terbanyak)','Integrated Youth Renewable Energy (IYREF)','REview, Skill Training, Energizen 101, Product Advance Learning and Implementation Project, Research Advance Learning, Integrated Youth Renewable Energy Festival (IYREF)','REview, Skill Training','Energizen 101, Product Advance Learning and Implementation Project, Research Advance Learning, Integ',1,'187_lampiran_Foto_Kegiatan_SRE_ITB_2023.zip',591,'187_logo.png','sre@km.itb.ac.id','https://www.sre.co.id/id/teams/sre-itb','-','https://www.instagram.com/sreitb/','-','-','1',NULL,NULL,NULL,0,'2024-11-26 06:30:34','1'),(193,'PDK','Cerberus Racing Team ITB','CRT','Menjadikan mahasiswa/i ITB yang mampu berkontribusi dalam pengembangan teknologi dan industri otomotif Indonesia dan Dunia','1. Mewadahi dan memfasilitasi minat dan bakat mahasiswa/i ITB di bidang otomotif terutama motorsport\r\n2. Mengembangkan teknologi dan menciptakan kendaraan untuk berpartisipasi dalam kompetisi mahasiswa internasional','2022-09-01',70,0,0,0,0,0,0,0,0,0,0,0,0,70,'-','081932705070','Alamanda Dago Permai No. B1, Sekeloa, Coblong, Kota Bandung 40134','-','Gokart, Toolkit, Chassis','1 kali seminggu','ITB, Sentul Circuit','1. Peringkat ke-3 Kelas Shifter University Round 1 2022\r\n2. Peringkat ke-4 Kelas Shifter 150 Round 1 2022\r\n3. Peringkat ke-3 Kelas Shifter University Round 2 2022\r\n4. Peringkat ke-5 Kelas Shifter 150 Round 2 2022\r\n5. Peringkat ke-2 Kelas Shifter University Round 3 2022\r\n6. Peringkat ke-4 Kelas Shifter 150 Round 3 2022\r\n7. Peringkat ke-4 Kelas Shifter University Round 4 2022\r\n8. Peringkat ke-4 Overall ESHARK ROK CUP 2022 Kelas Shifter University\r\n9. Peringkat ke-2 Kelas Universitas PUPR Electric Gokart Race\r\n10. Peringkat ke-5 Kelas Shifter University Round 2 2024\r\n11. Peringkat ke-5 Kelas Shifter University Round 3 2024\r\n12. Peringkat ke-3 Kelas Shifter University Round 4 2024\r\n','Eshark ROK Cup University','1. Formula SAE JAPAN\r\n2. Edukasi untuk masyarakat umum\r\n3. Karting\r\n4. Penyelenggaraan lomba\r\n5. Penerimaan anggota baru','Formula SAE Japan, Pengembangan kendaraan formula student electric dan combustion, edukasi masyaraka','penyelenggaraan lomba, penerimaan anggota baru',1,'',619,'193_logo.jpg','cerberusracingitb@gmail.com','-','-','cerberusracingitb','-','@farrelkentk123456789','1',NULL,NULL,NULL,0,'2025-01-03 03:52:05',''),(198,'','Keresidenan Cirebon Kabinet KM ITB','Keresidenan Cirebon','\"Multikampus ITB Cirebon Menjadi Perintis yang Tangguh dan Adaptif Melalui Sinergis berbagai Elemen Kemahasiswaan demi Kebermanfaatan yang Berkelanjutan\"','1. Memperkuat Sistem Organisasi Kemahasiswaan Multikampus ITB Cirebon yang Sinergis, Efektif, Efisien, dan Informatif.\r\n2. Mengoptimalkan Pemenuhan Kebutuhan Dasar dan Pemanfaatan Sumber Daya dalam Menunjang Kegiatan Kemahasiswaan.\r\n3. Meningkatkan Kemampuan Massa Kampus terhadap Pemahaman, Peran, serta Implementasi Keilmuan dan Fungsi Lembaga.\r\n4. Menjalin dan Memelihara Hubungan Baik Antara Elemen Kemahasiswaan ITB\r\nKampus Cirebon serta Pihak-Pihak Eksternal di Luar Kampus ITB.\r\n5. Meningkatkan Peran dan Keterlibatan Massa Kampus di Berbagai Kegiatan\r\nKemahasiswaan di Dalam dan di Luar Kampus ITB.','2022-09-26',137,0,0,0,0,0,0,0,0,0,0,0,0,137,'Lantai 2 Gedung Multifungsi A ITB Kampus Cirebon, Jalan Raya Pantura Blok 04, RT 003, RW 004, Desa Kebonturi, Kecamatan Arjawinangun, Kabupaten Cirebon, Provinsi Jawa Barat, Indonesia','082261275787','Lantai 2 Gedung Multifungsi A ITB Kampus Cirebon, Jalan Raya Pantura Blok 04, RT 003, RW 004, Desa Kebonturi, Kecamatan Arjawinangun, Kabupaten Cirebon, Provinsi Jawa Barat, Indonesia, 45162','Bentuk ruang sekretariat terdiri dari ruang diskusi dan ruang santai.','Buku, Kursi, Meja, Lemari, AC, TV, Dispenser, dan Tempat sampah','Setiap Hari','ITB Kampus Cirebon','-','Malam Keakraban, K-Olympus, Cirebon Last Party, Festival Keilmuan, Kaderisasi Awal Multikampus, Kopi','K-Olympus, Cirebon Last Party, Festival Keilmuan, Kaderisasi Awal Multikampus, CireImpact, ACMATION (Action to Collect and Manage Aspiration), CireCare, CPnS (Cerita Pendamping Sebaya), KOPSOR: Kopi Sore, A Night of Appreciate: Farewell Party, Malam Keakraban, SeCaPin, Patih Gajah, dan Kopi Santuy SosPol','ACMATION (Action to Collect and Manage Aspiration), CireCare, CPnS (Cerita Pendamping Sebaya), KOPSO','K-Olympus, Cirebon Last Party, Festival Keilmuan, Kaderisasi Awal Multikampus, dan CireImpact',2,'',664,'198_logo.png','keresidenan.cirebon@km.itb.ac.id','https://cirebon.itb.ac.id','-','kmitb.cirebon','https://x.com/kmitb_cirebon','https://liff.line.me/1645278921-kWRPP32q/?accountId=753argbl','1',NULL,NULL,NULL,0,'2024-10-29 06:29:58',''),(199,'OLG','Cirebon Boardgame Community ITB','CBC ITB','To create a community of board game enthusiast students that is enjoyable, inclusive, creative, and dedicated to developing strategic skills, cooperation, and positive values through the experience of playing board games.','1. To establish an exciting and comfortable environment that connects students from various professional backgrounds for learning, idea exchange, and interaction through board games.\r\n2. To provide a platform for honing collaborative and competitive abilities through a variety of board game genres.\r\n3. To offer a profound, engaging, and meaningful board gaming experience to every community member.\r\n4. To utilize board games as a tool for contributing to society, such as engaging in charitable activities, education, and entertainment across diverse settings.','2023-11-11',103,5,4,0,14,14,3,5,2,52,3,1,0,103,'Gedung B Lantai 2 Jl, Kebonturi, Kec. Arjawinangun, Kabupaten Cirebon, Jawa Barat 45162','081224340430','','','','','','','','','','',1,'',669,'Screenshot_2023-11-26_035825.png','','','','','','','1',NULL,NULL,NULL,0,'2024-04-01 03:31:35',''),(200,'PDK','Gebrak Indonesia','Gebrak','Gebrak Indonesia sebagai akar inisiasi pergerakan terintegrasi tingkat mahasiswa bidang sosial kemasyarakatan demi membentuk insan mahasiswa KM ITB yang berdampak\r\n','Menunjang relevansi dan eksistensi Gebrak Indonesia periodisasi saat ini\r\nMengoptimalkan kolaborasi Gebrak Indonesia dengan elemen KM ITB dan luar ITB dalam ranah sosial kemasyarakatan khususnya dalam community development\r\nMeningkatkan kecakapan anggota Gebrak Indonesia dalam ranah sosial kemasyarakatan\r\nMenciptakan iklim kekeluargaan dan apresiatif dalam Gebrak Indonesia\r\nMenunjang gerakan sosial kemasyarakatan Gebrak Indonesia bersama masyarakat\r\nMengoptimalkan exposure  Gebrak Indonesia terhadap pihak luar Gebrak Indonesia\r\n\r\n','2013-04-13',104,8,9,8,6,9,6,13,25,6,2,11,2,77,'','','gebrakindonesia2023@gmail.com','','','Hari sabtu/minggu','Desa binaan Gebrak Indonesia dan Kampus ITB','1. Meraih Penghargaan Organisasi Kepemudaan dari Pemerintah Provinsi Jawa Barat Tahun 2014\r\n\r\n2. Mendapat Pendanaan Project oleh Kompetisi Innovillage 2023','Survei penentuan desa binaan sehingga ditentukan desa binaan Gebrak Indonesia','','Kajian, survei, dan kunjungan desa binaan Gebrak Indonesia','Internalisasi dan sekolah pengabdian masyarakat untuk anggota Gebrak Indonesia ',1,'',665,'Picture1.jpg','gebrakindonesia2023@gmail.com','','','gebrakid','','','1',NULL,NULL,NULL,0,'2024-04-01 03:31:35',''),(201,'OLG','Cirebon Sport Community ITB','CISCO','Menghidupkan kemahasiswaan di ITB Cirebon melalui olahraga.','1. Mengakomodasi pengembangan anggota dalam berolahraga secara progresif.\r\n2. Menyediakan manfaat-manfaat untuk setiap anggotanya.\r\n3. Menciptakan atmoster yang nyaman untuk berolahraga.','0000-00-00',309,0,0,0,0,0,0,0,0,0,0,0,0,309,'Belum memiliki sekretariat','085220585543','-','Belum memiliki sekretariat','Bola basket\r\nBola voli\r\nBola sepak bola\r\nBendera voli untuk wasit\r\nNet voli','Dalam sabtu minggu latihan rutin dapat dilakukan dalam 1 minggu penuh dikarenakan CISCO ITB mencakup','Lapangan basket ITB, lapangan voli ITB, lapangan Futsal gor rajawali, lapangan badminton gor rajawal','Belum ada prestasi yang pernah diraih','Welcoming Party dan Kerja sama dengan keresidenan untuk menjalankan Kolympus','- Bekerja sama kembali dengan Keresidenan dalam melaksanakan Kolympus\r\n- Menjalankan kegiatan rutin sama seperti sebelumnya untuk tiap cabang olahraga\r\n- Welcoming party untuk mahasiswa baru yang datang ke Kampus Cirebon\r\n- Mengikuti pertandingan olah raga yang ada di Kota/Kabupaten Cirebon\r\n- Bekerja sama dengan pihak eksternal untuk sparing olah raga','Latihan rutin untuk tiap cabang olah raga','Welcoming party, Kolympus, sparing, mengikuti perlombaan',1,'',668,'201_logo.png','ciscosportitb@gmail.com','-','-','cisco_itb','-','gabrielchris1','1','2024-12-18',NULL,NULL,0,'2024-12-18 13:32:32',''),(205,'PDK','Advance Association of Petroleum Geologists Institut Teknologi Bandung','AAPG ITB','Meningkatkan AAPG ITB menjadi komunitas yang beragam, dan mampu mengkatalisis anggotanya untuk secara sinergis memberikan ide-ide inovatif demi kemajuan industri energi.','1. Membangun pemberdayaan bagi semua anggota untuk mengakses kesempatan belajar dan pertumbuhan yang sama.\r\n2. Mengembangkan pendekatan pemasaran inovatif dan memperluas keragaman di antara anggota untuk mewakili keberadaannya secara lebih komprehensif.\r\n3. Meningkatkan lingkungan kerja yang nyaman yang dapat bersinergi untuk meningkatkan keterlibatan anggota dan kinerja profesional selama pelaksanaan.\r\n4. Mendorong anggota untuk berkolaborasi dengan perusahaan dan profesional untuk membudayakan fleksibilitas dalam pendekatan dan solusi untuk perbaikan energi dan masyarakat.','2000-10-08',104,1,0,0,4,97,0,0,0,0,2,0,0,104,'tidak ada sekretariat','','aapg.km.itb@gmail.com','tidak ada sekretariat','tidak ada','AAPG ITB Practical Work; A For Advancing AAPG; AAPG ITB Goes to Office; AAPG ITB Goes to Field; AAPG','ITB, Jawa Barat, dan sekitarnya','1) 2022 1 st Asia Pacific at Imperial Barrel Award\r\n2) 2021 1 st Asia Pacific at Imperial Barrel Award\r\n3) 2020 1st Asia Pacific and Honorable Mention at  Imperial Barrel Award\r\n4) 2016 - 2019 1st Asia Pacific at Imperial Barrel Award\r\n5) 2012 - 2014 1st Asia Pacific at Imperial Barrel Award','1. Fieldtrip ke Cipamingkis, Jonggol; 2. Company Visit ke PT.Geoservices; 3.Company Visit ke Harbour','1. Winning The Comp\r\nPersiapan kompetisi bagi anggota AAPG ITB  yang memiliki minat untuk mengikuti perlombaan di dalam maupun luar ITB.\r\n2. AAPG Catalyst\r\nPembentukan dinamika kelompok untuk melakukan pengembangan dan pemberdayaan ilmu yang merata keseluruh anggota AAPG ITB.\r\n3. AAPG Trivia\r\nPembentukan Publikasi konten edukasi yang berisi pengetahuan umum, berita terkini, dan diskusi kajian dalam dunia geologi minyak dan gas bumi.\r\n4. AAPG ITB Practical Work\r\nkegiatan yang dilakukan untuk pemberian pelatihan kepada anggota AAPG ITB terkait deskripsi, analisis, dan interpretasi data core log.\r\n5. A For Advancing AAPG\r\nKegiatan yang dilakukan untuk memberikan wawasan kepada anggota AAPG secara umum mengenai geologi minyak bumi dan industri energi.\r\n6. AAPG ITB Goes to Company\r\nkegiatan yang dilakukan untuk memperkenalkan anggota-anggota AAPG ITB dengan dunia profesional secara langsung dengan mendatangi kantor atau pabrik dari salah satu perusahaan ternama yang bergerak di bidang hulu industri minyak dan gas bumi.\r\n7.  AAPG ITB Goes to Field\r\n kegiatan yang dilakukan untuk memperkenalkan anggota AAPG ITB dengan analog ideal dari teori eksplorasi minyak, gas, atau geothermal dengan mendatangi objek geologi langsung dan langsung dibimbing oleh profesional atau akademisi di bidang terkait.\r\n8. AAPG ITB Workshop Training\r\nkegiatan yang dilakukan untuk meningkatkan kemampuan anggota AAPG ITB dalam mengimplementasikan\r\npemahaman geologi petroleumnya pada penyelesaian rekayasa ilmu kebumian dengan perangkat lunak simulasi.\r\n9. WILDCAT by AAPG ITB\r\nacara kompetisi, konvensi, dan eksibisi tahunan sebagai  wadah aktualisasi minat dan bakat mahasiswa.\r\n10. DISCOVERY AAPG ITB\r\nKegiatan pengabdian Masyarakat yang dikolaborasikan dengan Perusahaan indsustri minyak dan gas.','AAPG Trivia; Winning The Comp; AAPG ITB Practical Work; A For Advancing AAPG; AAPG ITB Goes to Offic','1. WILDCAT by AAPG ITB, 2. DISCOVERY AAPG ITB',1,'kegiatan_besar_tahun_lalu.zip',667,'LOGO_AAPG_ITB.png','aapgitbsc@km.itb.ac.id','https://scaapg.gc.itb.ac.id/','','aapgitb/','','','1',NULL,NULL,NULL,0,'2024-04-01 03:54:37',''),(209,'PDK','Ganesha Pintar','Ganesha Pintar','Mewujudkan Forum Mahasiswa KIP-K (FMK) ITB yang mengedepankan Satyagraha - Kekeluargaan, Kesadaran, Eksistensi, Partisipasi, dan Apresiasi. melalui peningkatan kualitas interaksi internal dan eksternal serta pemenuhan kebutuhan yang holistik dan apresiatif.','Mempererat hubungan dan komunikasi antar pengurus serta anggota melalui kegiatan internalisasi informal seperti olahraga dan permainan, serta membangun platform komunikasi yang efektif untuk memastikan hubungan internal yang harmonis dan solid.\r\nMelakukan sosialisasi aktif tentang peran dan manfaat Forum Mahasiswa KIP-K untuk meningkatkan kesadaran dan partisipasi mahasiswa, serta menyediakan program-program menarik yang mendorong minat mahasiswa KIPK untuk terlibat dan melanjutkan kepengurusan.\r\nMengoptimalkan eksistensi FMK ITB dengan mengadakan kampanye branding dan kolaborasi dengan lembaga lain di dalam dan luar kampus, serta membangun kolaborasi strategis untuk memperkenalkan fungsi dan peran FMK ITB kepada mahasiswa dan masyarakat luas\r\nMengembangkan strategi untuk memastikan partisipasi dari semua angkatan dalam kegiatan FMK ITB, serta mengadakan program-program yang mempertegas eksistensi FMK ITB di kampus dan di komunitas yang lebih luas.\r\nMenyediakan program konsultasi KIP-K yang terstruktur dan intensif untuk membantu mahasiswa dalam pengembangan potensi diri dan karir, serta menyusun sistem apresiasi yang tepat dan efektif untuk meningkatkan semangat dan motivasi pengurus dan anggota FMK ITB.\r\n','2012-10-12',100,0,0,0,0,0,0,0,0,0,0,0,0,50,'Gedung Campus Center Timur\r\nInstitut Teknologi Bandung Kampus Ganesha\r\nJalan Ganesha No. 10 Bandung 40132\r\n','-','ganeshapintar@km.itb.ac.id','3x3 meter','-','-','CC Timur','-','FMK FEST','SBP First X FBM Night\r\nWorkshop Tutorial Editing (Wulang)\r\nBest Staff\r\nBincang Ditmawa\r\nDrive Akademik\r\nFBM Fest\r\nRecord Your Presence\r\nOHU\r\nKontak (Kunjungan Antar Kampus) #1\r\nAmandemen AD/ART\r\nProker Internship\r\nProker KONTAK #2 (sisa masuk ke #!)\r\nProker Company Visit.\r\nTutor Akademik\r\nFBM Share & Care\r\nPemira FMK Periode Tugas 2024/2026\r\nTOEFL Preparation FMK ITB Kabinet Abhirama\r\nKenal Adik FMK ITB Kabinet Abhirama\r\nSekolah Badan Pengurus (SBP) Session II FMK\r\nGathering Day FMK ITB Kabinet Abhirama\r\nTutor Akademik Semester Genap FMK ITB','Sinergi Kepengurusan','FMK FEST, Bincang Ditmawa, Kegiatan pengembangan',1,'logoitb_png.zip',666,'209_logo.png','fmkitb@gmail.com','-','-','fmk_itb','fmk_itb','vvx8834u','1',NULL,NULL,NULL,0,'2025-02-05 13:39:10',''),(213,'OLG','Ormawa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,466,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,0,'2025-01-07 03:19:25','1');
/*!40000 ALTER TABLE `organisasi_kemahasiswaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes_pilihan`
--

DROP TABLE IF EXISTS `quotes_pilihan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quotes_pilihan` (
  `quotes_pilihan_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `quotes` text NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  PRIMARY KEY (`quotes_pilihan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes_pilihan`
--

LOCK TABLES `quotes_pilihan` WRITE;
/*!40000 ALTER TABLE `quotes_pilihan` DISABLE KEYS */;
INSERT INTO `quotes_pilihan` VALUES (35,1,'share and inspire','2025-03-13 03:50:03',''),(115,2,'\"Terus berusaha jadi versi terbaik.\"','2025-03-13 03:50:03',''),(116,3,'I\'m not perfect, but I\'m limited edition','2025-03-13 03:50:03',''),(118,4,'Jangan pernah takut untuk mencoba','2025-03-13 03:50:03',''),(119,5,'yakinlah, ada sesuatu yang menantimu selepas banyak kesabaran yang kau jalani, hingga kau lupa, pedihnya rasa sakit','2025-03-13 03:50:03',''),(122,6,'Berbuatlah kepada orang lain sebagaimana dirimu ingin diperlakukan.','2025-03-13 03:50:03',''),(124,7,'Life Long learning..','2025-03-13 03:50:03',''),(125,8,'\"Masa depan menjafi kanvas, kreativitas menjadi kuas. Dengan fokus yang tajam, saya melukis jalan menuju imapan yang tak terbatas.\"','2025-03-13 03:50:03',''),(126,9,'Keluar dari zona nyaman adalah validasi dari perkembangan diri','2025-03-13 03:50:03',''),(127,10,'Please, cherish every moment in yor life! Because you\'ll only find the value of that moment until it becomes a memory','2025-03-13 03:50:03',''),(128,11,'kaizouku ou ni ore wa naru!','2025-03-13 03:50:03',''),(129,12,'\"The future depends on what we do in the present.\" - \"Masa depan bergantung pada apa yang kita lakukan pada saat ini.\" - from Mahatma Gandhi.','2025-03-13 03:50:03',''),(130,13,'Dari terbentur, terbentur, terbentur, kemudian terbentuk. - Tan Malaka','2025-03-13 03:50:03',''),(131,14,'Motivasi tanpa pergerakan apa gunanya?','2025-03-13 03:50:03',''),(132,15,'Jangan berhenti ketika lelah, berhentilah ketika selesai','2025-03-13 03:50:04',''),(133,16,'“Intelligence plus character is the goal of true education.” –Martin Luther King Jr.','2025-03-13 03:50:04',''),(134,17,'Kepada diriku yang dulu, berbanggalah atas kehidupanmu selanjutnya.\r\nKepada diriku yang sekarang, janganlah cepat puas dan bersyukurlah.\r\nKepada diriku yang nanti, bagaimana kabarmu? semoga baik dan berpetualanglah lebih lanjut,','2025-03-13 03:50:04','');
/*!40000 ALTER TABLE `quotes_pilihan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `salt` varchar(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
  `group_id` int DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `active` int DEFAULT NULL,
  `activation_code` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_on` int NOT NULL,
  `last_login` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `new_username` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `forgotten_password_code` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `remember_code` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_front`
--

DROP TABLE IF EXISTS `video_front`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video_front` (
  `id` int NOT NULL AUTO_INCREMENT,
  `video_name` varchar(80) NOT NULL,
  `kode_video` varchar(45) DEFAULT NULL,
  `video_url` text NOT NULL,
  `is_utama` int NOT NULL DEFAULT '0',
  `auto_play` int NOT NULL DEFAULT '0',
  `tanggal Awal` datetime DEFAULT NULL,
  `Tanggal Akhir` datetime DEFAULT NULL,
  `is_default` varchar(1) DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cek` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_front`
--

LOCK TABLES `video_front` WRITE;
/*!40000 ALTER TABLE `video_front` DISABLE KEYS */;
INSERT INTO `video_front` VALUES (1,'Video 1','_r8es9IiSyc','https://www.youtube.com/embed/_r8es9IiSyc',0,0,NULL,NULL,NULL,'2023-06-18 11:33:31','1'),(2,'Video 2','','https://www.youtube.com/embed/z7K-0CW0Ehg?si=GQNtYTPHw6174Wpk',0,0,NULL,NULL,NULL,'2024-03-05 01:03:56','1'),(3,'Video 3','C8yc-4VEkJo','https://www.youtube.com/embed/C8yc-4VEkJo',0,0,NULL,NULL,NULL,'2023-04-03 11:15:26','1'),(4,'Video 4','','https://www.youtube.com/embed/1G0PL5YDYLc?si=hK3E67PbxvXxZe75',0,1,NULL,NULL,NULL,'2024-12-18 09:36:24','1');
/*!40000 ALTER TABLE `video_front` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-13 10:52:20
