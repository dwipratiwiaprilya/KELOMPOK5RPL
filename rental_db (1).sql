-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Jun 2024 pada 03.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updationdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `updationdate`) VALUES
(1, 'admin', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_categories`
--

CREATE TABLE `tb_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_categories`
--

INSERT INTO `tb_categories` (`category_id`, `category_name`) VALUES
(1, 'Elektronik'),
(2, 'Otomotif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_items`
--

CREATE TABLE `tb_items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `rental_price` decimal(10,2) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 0.0,
  `details` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `package_includes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_items`
--

INSERT INTO `tb_items` (`item_id`, `name`, `gambar`, `description`, `subcategory_id`, `rental_price`, `rating`, `details`, `features`, `package_includes`, `created_at`, `updated_at`) VALUES
(1, 'Canon 70D', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/Canon 70D.png', 'Kamera Canon 70D adalah solusi fotografi dan videografi serbaguna yang menggabungkan kualitas gambar yang luar biasa dengan fitur-fitur canggih untuk memenuhi kebutuhan para pengguna yang serius tentang fotografi.', 1, 175.00, 4.5, 'Kamera ini dilengkapi dengan sensor CMOS APS-C 20.2 megapiksel dan prosesor gambar DIGIC 5+, menawarkan kualitas gambar yang superior dengan detail yang tajam dan warna yang hidup.\r\n\r\n', 'Fokus otomatis Dual Pixel CMOS memungkinkan fokus yang cepat dan akurat, baik saat mengambil gambar maupun merekam video. Layar sentuh LCD Clear View II 3.0 inci memberikan kemudahan dalam mengatur pengaturan dan mengonfirmasi komposisi gambar.', 'Paket ini mencakup kamera Canon 70D, lensa (jika dibeli dalam paket lensa), baterai dan charger, tali leher kamera, kabel USB, serta panduan pengguna dan dokumentasi lainnya.', '2024-05-31 08:14:49', '2024-05-31 08:14:49'),
(2, 'Canon EOS RP', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/Canon EOS RP.png', 'Canon EOS RP adalah kamera mirrorless full-frame yang ringkas dan ringan yang menghadirkan kualitas gambar yang luar biasa dalam format yang lebih portabel. Didesain untuk fotografer yang menginginkan kualitas gambar full-frame tanpa beban fisik yang berat, EOS RP menawarkan kombinasi yang mengesankan antara kinerja tinggi dan kemudahan penggunaan.', 1, 450.00, 4.5, 'EOS RP dilengkapi dengan sensor full-frame CMOS 26.2 megapiksel, yang memberikan kualitas gambar yang luar biasa dengan detail yang tajam dan rentang dinamis yang luas. Prosesor gambar DIGIC 8 mengoptimalkan kinerja kamera, memberikan hasil yang cepat dan responsif.', 'Fitur utama EOS RP termasuk sistem fokus otomatis Dual Pixel CMOS yang cepat dan akurat, memungkinkan fokus yang tepat bahkan pada objek yang bergerak cepat atau saat merekam video.', 'Dalam paket pembelian EOS RP, pengguna akan mendapatkan kamera Canon EOS RP, baterai dan charger, tali leher kamera, serta panduan pengguna dan dokumentasi lainnya.', '2024-05-31 08:45:18', '2024-05-31 08:45:18'),
(3, 'Fujifilm X-E4', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/Fujifilm X-E4.png', 'Fujifilm X-E4 adalah kamera mirrorless yang kompak dan ringan yang menawarkan kombinasi yang luar biasa antara desain yang elegan, kualitas gambar yang superior, dan kemampuan penggunaan yang intuitif.\r\n\r\n', 1, 250.00, 4.0, 'X-E4 dilengkapi dengan sensor APS-C X-Trans CMOS 4 berkekuatan 26.1 megapiksel, yang menghasilkan gambar dengan detail yang tajam dan warna yang hidup.', 'Kamera ini menampilkan sistem fokus otomatis hybrid yang cepat dan akurat, dengan 425 titik fokus fasa deteksi dan deteksi kontras yang memungkinkan pengguna untuk mengunci fokus dengan cepat bahkan pada subjek yang bergerak cepat.', 'Dalam paket pembelian X-E4, pengguna akan mendapatkan kamera Fujifilm X-E4, baterai dan charger, tali leher kamera, dan panduan pengguna. ', '2024-05-31 08:49:35', '2024-05-31 08:49:35'),
(4, 'Nikon D5600', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/Nikon D5600.png', 'Nikon D5600 adalah kamera DSLR yang tangguh dan serbaguna yang cocok untuk fotografi sehari-hari, pengambilan gambar travel, dan pemula yang ingin meningkatkan kemampuan fotografi mereka.\r\n\r\n', 1, 125.00, 3.5, 'D5600 memiliki sensor CMOS DX-format 24.2 megapiksel yang memberikan kualitas gambar yang luar biasa dengan detail yang tajam dan warna yang hidup. Prosesor gambar EXPEED 4 mengoptimalkan kinerja kamera, memberikan hasil yang cepat dan responsif.', 'Kamera ini dilengkapi dengan sistem fokus otomatis Multi-CAM 4800DX yang cepat dan akurat, dengan 39 titik fokus, sehingga memungkinkan pengguna untuk mengunci fokus dengan cepat bahkan pada subjek yang bergerak cepat. ', 'Dalam paket pembelian D5600, pengguna akan mendapatkan kamera Nikon D5600, lensa (jika dibeli dalam paket lensa), baterai dan charger, tali leher kamera, kabel USB, serta panduan pengguna dan dokumentasi lainnya.', '2024-05-31 08:49:35', '2024-05-31 08:49:35'),
(5, 'Iphone 14 Pro Max', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/ip 14 promax.png', 'iPhone 14 Pro Max. Memotret detail menakjubkan dengan kamera Utama 48 MP. Nikmati iPhone dalam cara yang sepenuhnya baru dengan layar yang Selalu Aktif dan Dynamic Island. Deteksi Tabrakan, sebuah fitur keselamatan baru, memanggil bantuan saat Anda tak bisa.', 2, 300.00, 4.5, 'Bagian depan Ceramic Shield, Bagian belakang kaca matte bertekstur dan desain baja tahan karat', 'Layar iPhone 14 Pro Max memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 6,69 inci secara diagonal (area bidang layar berukuran lebih kecil).', 'iPhone dengan iOS 16.\r\nKabel USB-C ke Lightning.\r\nBuku Manual dan dokumentasi lain.', '2024-05-31 08:55:04', '2024-05-31 08:55:04'),
(6, 'Playstation 5', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/playstation 5.jpeg', 'PlayStation 5 (PS5) adalah konsol permainan video generasi terbaru yang diproduksi oleh Sony Interactive Entertainment. Dirilis pada bulan November 2020, PS5 telah menjadi salah satu konsol paling dicari dan diminati di pasar game.', 4, 175.00, 4.5, 'PS5 menampilkan arsitektur yang kuat dengan prosesor kustom AMD Zen 2 berbasis 8-core, yang memberikan kinerja grafis dan pemrosesan yang luar biasa. Dengan SSD bawaan, PS5 memungkinkan loading game yang cepat dan pengalaman bermain yang mulus tanpa jeda.', 'Fitur terobosan pada PS5 termasuk kemampuan untuk bermain game hingga resolusi 4K dengan frame rate tinggi, serta dukungan untuk ray tracing yang menghadirkan efek pencahayaan dan bayangan yang realistis.', 'Paket PlayStation 5 biasanya mencakup beberapa item penting yang diperlukan untuk memulai pengalaman bermain game. Ini termasuk konsol PlayStation 5, yang merupakan inti dari paket, memberikan platform yang kuat untuk menjalankan permainan', '2024-05-31 09:00:08', '2024-05-31 09:00:08'),
(7, 'Drone DJI MINI 2', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/DRONE DJI MINI 2.jpeg', 'DJI Mini 2 adalah drone yang sangat portabel dan ringan yang dirancang untuk pengguna pemula dan hobiis yang ingin merasakan pengalaman terbang drone dengan kualitas kamera yang baik.\r\n\r\n', 3, 700.00, 4.0, 'DJI Mini 2 dilengkapi dengan kamera 1/2.3-inch CMOS sensor dengan kemampuan merekam video hingga resolusi 4K/30fps dan mengambil foto 12 megapiksel. Ini memberikan kualitas gambar yang jernih dan detail yang tajam untuk hasil yang memuaskan.', 'Drone ini menawarkan kemampuan terbang yang stabil dan responsif, dengan kecepatan maksimum hingga 35.8 km/jam dan jangkauan kontrol hingga 10 km (dengan kontroler). DJI Mini 2 juga dilengkapi dengan fitur OcuSync 2.0 yang memungkinkan transmisi video jarak jauh dengan kualitas tinggi dan stabil.', 'Dalam paket pembelian DJI Mini 2, Anda biasanya akan mendapatkan drone DJI Mini 2, remote controller, satu baterai penerbangan, satu baterai pengisi daya, satu kabel pengisi daya USB, satu set elis, dan satu set kabel remote controller.', '2024-05-31 09:07:20', '2024-05-31 09:07:20'),
(8, 'Jeep Rubicon', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/JEEP ROBICON.png', 'Jeep Wrangler Rubicon adalah kendaraan off-road yang terkenal karena kemampuannya menjelajahi medan berat dan fiturnya yang tangguh. Dirancang untuk petualangan ekstrim, Rubicon menawarkan kombinasi kekuatan, daya tahan, dan teknologi modern untuk memastikan pengalaman berkendara yang luar biasa di berbagai medan.', 5, 225.00, 4.0, 'Jeep Wrangler Rubicon dilengkapi dengan mesin 3.6L Pentastar V6 yang menghasilkan 285 tenaga kuda dan torsi 260 lb-ft. Pilihan mesin lain termasuk 2.0L Turbocharged I4 yang memberikan torsi lebih besar dengan efisiensi bahan bakar yang lebih baik. Rubicon memiliki transmisi otomatis 8-percepatan atau manual 6-percepatan, tergantung pada preferensi pengemudi.', 'Rubicon dilengkapi dengan sistem 4x4 Rock-Trac yang memungkinkan pengendalian dan traksi optimal di medan off-road. Differential depan dan belakang Dana 44 heavy-duty, sway bar yang dapat dilepas, dan ban off-road 33 inci menambah kemampuan off-road Rubicon. Interiornya dirancang untuk kenyamanan dan ketahanan, dengan bahan berkualitas tinggi dan teknologi infotainment Uconnect yang dilengkapi dengan layar sentuh 8.4 inci, navigasi GPS, dan konektivitas smartphone.', 'Jeep Wrangler Rubicon biasanya dilengkapi dengan berbagai fitur standar dan opsional tergantung pada paket yang dipilih. Paket standar biasanya mencakup sistem Rock-Trac 4x4, differential kunci depan dan belakang, ban off-road 33 inci, sway bar yang dapat dilepas, sistem infotainment Uconnect, dan kamera belakang.', '2024-06-02 07:13:26', '2024-06-02 07:13:26'),
(9, 'Toyota Alphard', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/TOYOTA ALPHRAD.png', 'Toyota Alphard adalah minivan premium yang dirancang untuk memberikan kenyamanan dan kemewahan bagi penumpang. Cocok untuk keluarga atau bisnis, Alphard menawarkan ruang kabin yang luas, fitur canggih, dan performa yang handal.', 5, 1500000.00, 4.5, 'Toyota Alphard dilengkapi dengan mesin V6 3.5L yang menghasilkan tenaga sekitar 296 hp dan torsi 361 Nm, memberikan performa yang kuat dan responsif. Alternatif lain adalah mesin 2.5L hybrid yang lebih efisien dalam konsumsi bahan bakar. Alphard juga dilengkapi dengan transmisi otomatis 8-percepatan untuk varian V6 dan CVT untuk varian hybrid.', 'Interior Alphard dirancang dengan material berkualitas tinggi, menawarkan kursi kapten di baris kedua dengan fitur recline dan ottoman untuk kenyamanan maksimal. Sistem hiburan canggih dengan layar sentuh besar, sistem audio premium, dan konektivitas smartphone memberikan pengalaman berkendara yang menyenangkan. Fitur keselamatan termasuk Toyota Safety Sense, yang mencakup sistem pra-tabrakan, pengingat jalur, kontrol jelajah adaptif, dan lampu depan otomatis.', 'Toyota Alphard biasanya dilengkapi dengan berbagai fitur standar dan opsional, tergantung pada varian dan paket yang dipilih. Paket standar biasanya mencakup kursi kulit, sistem hiburan dengan layar sentuh, kamera belakang, dan berbagai fitur keselamatan seperti ABS, EBD, dan kontrol stabilitas. Paket opsional bisa mencakup fitur tambahan seperti panoramic sunroof, layar hiburan di baris belakang, sistem audio JBL premium, dan kursi dengan fungsi pemanas dan pendingin.', '2024-06-02 07:19:11', '2024-06-02 07:19:11'),
(10, 'KLX 230R', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/motor klx 230r.png', 'Kawasaki KLX 230R adalah sepeda motor trail yang dirancang untuk penggemar off-road, menawarkan kombinasi kekuatan, ketahanan, dan kemudahan penanganan untuk petualangan di medan yang berat.\r\n\r\n', 6, 175.00, 4.5, 'KLX 230R dilengkapi dengan mesin 233cc, satu silinder, berpendingin udara, SOHC, 4-stroke, yang menghasilkan torsi yang kuat dan tenaga yang cukup untuk mendaki bukit dan melewati rintangan off-road. Mesin ini dikawinkan dengan transmisi 6-percepatan, memberikan fleksibilitas dan kontrol yang baik di berbagai kondisi medan.', 'KLX 230R menampilkan rangka baja perimeter yang kuat, dirancang untuk menahan beban berat dan memberikan stabilitas yang baik saat berkendara di medan kasar. Suspensi depan teleskopik 37mm dan suspensi belakang Uni-Trak dengan preload yang dapat disesuaikan memberikan kenyamanan dan kontrol yang optimal. Rem cakram depan dan belakang memberikan daya henti yang kuat dan responsif, memastikan keamanan pengendara.', 'Paket pembelian Kawasaki KLX 230R biasanya mencakup sepeda motor KLX 230R itu sendiri, bersama dengan manual pengguna, toolkit dasar, dan perangkat standar seperti kaca spion, lampu depan, dan lampu belakang (tergantung pada peraturan setempat). Beberapa pengecer juga mungkin menawarkan aksesoris tambahan seperti pelindung tangan, skid plate, dan aksesoris off-road lainnya.', '2024-06-02 07:21:07', '2024-06-02 07:21:07'),
(11, 'Yamaha Nmax', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/Yamaha Nmax ng.png', 'Yamaha NMAX adalah skuter premium yang dirancang untuk kenyamanan, efisiensi, dan performa. Skuter ini sangat populer di kalangan pengendara perkotaan yang mencari kendaraan praktis dengan gaya modern dan fitur canggih.\r\n\r\n', 6, 125.00, 4.0, 'Yamaha NMAX dilengkapi dengan mesin 155cc, 4-stroke, SOHC, berpendingin cairan dengan teknologi Variable Valve Actuation (VVA) yang memberikan tenaga optimal di berbagai rentang putaran mesin. Mesin ini menghasilkan tenaga sekitar 15,4 hp dan torsi 13,9 Nm, memberikan akselerasi yang responsif dan efisiensi bahan bakar yang baik.\r\n\r\n', 'NMAX memiliki desain bodi yang aerodinamis dan modern, dengan lampu depan LED yang tajam dan lampu belakang LED yang stylish. Skuter ini dilengkapi dengan panel instrumen digital yang informatif, memberikan informasi lengkap seperti kecepatan, odometer, dan indikator bahan bakar.\r\n\r\nFitur-fitur canggih pada Yamaha NMAX termasuk sistem pengereman ABS (Anti-lock Braking System) untuk keamanan tambahan, suspensi belakang ganda untuk kenyamanan berkendara yang lebih baik, dan ruang bagasi yang luas di bawah jok untuk menyimpan helm dan barang-barang lainnya. Selain itu, NMAX juga memiliki soket pengisian daya USB untuk perangkat elektronik Anda.\r\n\r\n', 'Paket pembelian Yamaha NMAX biasanya mencakup skuter Yamaha NMAX itu sendiri, satu set kunci, manual pengguna, dan toolkit dasar. Beberapa paket mungkin juga menawarkan aksesoris tambahan seperti pelindung kaki, windshield, atau aksesoris kustom lainnya tergantung pada pengecer dan promosi yang sedang berlangsung.\r\n\r\n', '2024-06-02 07:22:26', '2024-06-02 07:22:26'),
(12, 'Monanza 4.00', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/monanza 4.00.png', 'Monanza 4.00 adalah sepeda lipat yang dirancang untuk memberikan kenyamanan dan portabilitas bagi pengendara perkotaan. Dengan desain yang kompak dan fitur yang praktis, sepeda ini sangat cocok untuk perjalanan sehari-hari, baik untuk ke kantor, sekolah, atau rekreasi.', 7, 175.00, 4.5, 'Monanza 4.00 dilengkapi dengan rangka yang ringan namun kuat, biasanya terbuat dari bahan aluminium atau baja berkualitas tinggi, yang memungkinkan sepeda ini tahan lama dan mudah dibawa. Sepeda ini memiliki roda berukuran 20 inci, yang memberikan keseimbangan antara kenyamanan berkendara dan portabilitas.', 'Salah satu fitur utama Monanza 4.00 adalah mekanisme lipatannya yang mudah digunakan, memungkinkan sepeda untuk dilipat dengan cepat dan disimpan di ruang yang sempit seperti di bawah meja atau di bagasi mobil. Sepeda ini juga dilengkapi dengan sistem transmisi gigi yang efisien, biasanya dengan 6-7 kecepatan, yang memudahkan pengendara menyesuaikan tenaga kayuh sesuai dengan kondisi jalan.\r\n\r\nUntuk kenyamanan, Monanza 4.00 memiliki sadel yang ergonomis dan pegangan tangan yang nyaman, serta sistem suspensi yang membantu meredam guncangan saat melewati jalan yang tidak rata. Rem V-brake atau cakram pada kedua roda memastikan keamanan dengan daya pengereman yang kuat dan responsif.', 'Paket pembelian Monanza 4.00 biasanya mencakup sepeda Monanza 4.00 yang sudah dirakit sebagian, satu set kunci pas dan alat dasar untuk perakitan akhir, manual pengguna, dan pedoman perawatan. Beberapa paket mungkin juga menawarkan aksesori tambahan seperti rak bagasi belakang, lampu depan dan belakang, bel sepeda, dan pelindung lumpur tergantung pada pengecer dan promosi yang sedang berlangsung.\r\n\r\n', '2024-06-02 07:25:41', '2024-06-02 07:25:41'),
(13, 'Suzuky Carry Pickup', '/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/suzuky carry pickup.png', 'Suzuki Carry Pickup adalah kendaraan niaga ringan yang dikenal karena keandalannya, efisiensi bahan bakarnya, dan kapasitas angkut yang besar. Kendaraan ini sangat cocok untuk usaha kecil dan menengah yang membutuhkan solusi transportasi untuk mengangkut barang dalam berbagai kondisi jalan.', 8, 650.00, 4.0, 'Suzuki Carry Pickup dilengkapi dengan mesin 1.5L DOHC, 4 silinder, yang menghasilkan tenaga sekitar 96 hp dan torsi 135 Nm. Mesin ini dirancang untuk memberikan kinerja yang efisien dan tahan lama, serta hemat bahan bakar. Transmisi manual 5-percepatan memberikan kontrol yang baik dan responsif dalam berbagai kondisi berkendara.\r\n\r\n', 'Suzuki Carry Pickup memiliki dimensi yang kompak namun ruang kargo yang luas, dengan ukuran bak yang besar yang dapat mengangkut berbagai jenis barang. Desain suspensi depan MacPherson Strut dan suspensi belakang Leaf Rigid Axle memberikan kenyamanan berkendara dan kestabilan, bahkan saat membawa muatan penuh.\r\n\r\nKabin dirancang ergonomis dengan fitur-fitur dasar yang fungsional, seperti AC (opsional), power steering, dan sistem audio dasar untuk kenyamanan pengemudi. Fitur keselamatan termasuk rem cakram di depan, sabuk pengaman, dan struktur rangka yang kokoh untuk melindungi penumpang.', 'Paket pembelian Suzuki Carry Pickup biasanya mencakup kendaraan Suzuki Carry Pickup itu sendiri, dengan berbagai konfigurasi bak yang dapat dipilih sesuai kebutuhan (bak terbuka, bak tertutup, atau box). Selain itu, paket standar biasanya mencakup toolkit dasar, ban cadangan, dan manual pengguna. Beberapa pengecer mungkin juga menawarkan aksesori tambahan seperti pelindung bak, penutup bak, atau rak tambahan untuk meningkatkan fungsionalitas kendaraan.\r\n\r\nSuzuki Carry Pickup adalah solusi transportasi yang ideal bagi pelaku usaha yang membutuhkan kendaraan niaga yang handal, ekonomis, dan serbaguna, mampu menangani berbagai tugas pengangkutan dengan mudah dan efisien.', '2024-06-02 07:27:52', '2024-06-02 07:27:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_payments`
--

CREATE TABLE `tb_payments` (
  `payment_id` int(11) NOT NULL,
  `rental_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_method` enum('credit_card','bank_transfer','COD') DEFAULT NULL,
  `payment_status` enum('pending','completed','failed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rentals`
--

CREATE TABLE `tb_rentals` (
  `rental_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `renter_id` int(11) DEFAULT NULL,
  `rental_start_date` date DEFAULT NULL,
  `rental_end_date` date DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `status` enum('pending','confirmed','completed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subcategories`
--

CREATE TABLE `tb_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_subcategories`
--

INSERT INTO `tb_subcategories` (`subcategory_id`, `category_id`, `subcategory_name`) VALUES
(1, 1, 'kamera'),
(2, 1, 'Handphone'),
(3, 1, 'Drone'),
(4, 1, 'Playstation'),
(5, 2, 'Mobil'),
(6, 2, 'Motor'),
(7, 2, 'Sepeda'),
(8, 2, 'Pickup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indeks untuk tabel `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `rental_id` (`rental_id`);

--
-- Indeks untuk tabel `tb_rentals`
--
ALTER TABLE `tb_rentals`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `renter_id` (`renter_id`);

--
-- Indeks untuk tabel `tb_subcategories`
--
ALTER TABLE `tb_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_payments`
--
ALTER TABLE `tb_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rentals`
--
ALTER TABLE `tb_rentals`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_subcategories`
--
ALTER TABLE `tb_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tb_items` (`item_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_items`
--
ALTER TABLE `tb_items`
  ADD CONSTRAINT `tb_items_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tb_subcategories` (`subcategory_id`);

--
-- Ketidakleluasaan untuk tabel `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD CONSTRAINT `tb_payments_ibfk_1` FOREIGN KEY (`rental_id`) REFERENCES `tb_rentals` (`rental_id`);

--
-- Ketidakleluasaan untuk tabel `tb_rentals`
--
ALTER TABLE `tb_rentals`
  ADD CONSTRAINT `tb_rentals_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tb_items` (`item_id`),
  ADD CONSTRAINT `tb_rentals_ibfk_2` FOREIGN KEY (`renter_id`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_subcategories`
--
ALTER TABLE `tb_subcategories`
  ADD CONSTRAINT `tb_subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tb_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
