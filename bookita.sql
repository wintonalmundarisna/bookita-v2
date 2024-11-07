-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookita`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `isi` text NOT NULL,
  `diunduh` int(11) DEFAULT NULL,
  `noTelp` varchar(20) NOT NULL,
  `harga` bigint(20) UNSIGNED DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `user_id`, `judul`, `nama`, `kategori`, `sinopsis`, `isi`, `diunduh`, `noTelp`, `harga`, `gambar`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Beauty Fishing Moment', 'Winton Almundarisna', 'novel', 'Kenangan manis saat memancing', '&nbsp;Di sebuah desa pesisir yang indah, tinggallah seorang nenek tua bernama Nenek Sutera. Nenek Sutera dikenal sebagai penjaga laut. Ia sering terlihat duduk di tepi pantai, berbicara dengan ombak, dan menenangkan badai. Konon, Nenek Sutera memiliki hubungan istimewa dengan laut. Ia bisa memahami bahasa ombak dan mengetahui kapan badai akan datang. Para penduduk desa sangat menghormati Nenek Sutera dan selalu meminta bantuannya saat terjadi masalah di laut. Suatu hari, badai besar melanda desa. Angin kencang dan gelombang tinggi menerjang pantai. Para penduduk desa panik dan ketakutan. Mereka berbondong-bondong mengungsi ke tempat yang lebih aman. Nenek Sutera tak mau meninggalkan desanya. Ia tetap duduk di tepi pantai, berdoa kepada laut untuk menenangkan badai. Para penduduk desa berusaha membujuk Nenek Sutera untuk mengungsi, namun Nenek Sutera tetap teguh pada pendiriannya. Tiba-tiba, terjadi keajaiban. Badai yang dahsyat itu mulai mereda. Angin kencang berhenti bertiup dan gelombang tinggi surut. Laut kembali tenang seperti semula. Para penduduk desa bersorak gembira dan bersyukur atas keselamatan mereka. Nenek Sutera tersenyum dan berkata, \"Laut adalah sahabat kita. Kita harus menjaganya dengan baik. Jika kita menjaganya, laut juga akan menjaga kita.\" Sejak saat itu, Nenek Sutera semakin dihormati oleh para penduduk desa. Mereka semakin percaya bahwa Nenek Sutera memiliki kekuatan magis untuk menjaga laut dan melindungi desa mereka.', 9, '087820625514', 20000, 'mancing-1726983291.jpg', NULL, '2024-09-21 21:22:17', '2024-10-01 17:25:56'),
(2, 1, 'Steel and Flesh', 'Winton Almundarisna', 'novel', 'Kisah keberanian King Richard IV selama masa perang mawar', '&nbsp;Beno, seorang anak laki-laki berusia 12 tahun, baru saja kehilangan kakeknya. Kakek Beno terkenal sebagai seorang penjelajah dan selalu menceritakan kisah-kisah petualangannya kepada Beno. Beno sangat merindukan kakeknya dan ingin mengetahui rahasia harta karun yang sering diceritakan kakeknya. Suatu hari, Beno menemukan peta harta karun tersembunyi di loteng rumah kakeknya. Peta itu menunjukkan sebuah pulau misterius di tengah laut. Beno sangat bersemangat dan ingin segera menemukan harta karun itu. Beno mengajak teman-temannya, Rara dan Tino, untuk berpetualang ke pulau misterius itu. Mereka menyewa perahu kecil dan berlayar selama beberapa hari. Akhirnya, mereka tiba di pulau misterius itu. Beno mengikuti petunjuk di peta dan menemukan sebuah gua tersembunyi di dalam hutan. Beno, Rara, dan Tino masuk ke dalam gua dan menemukan sebuah peti kayu tua. Beno membuka peti itu dengan penuh harap. Namun, Beno kecewa saat melihat isi peti itu. Di dalam peti itu tak ada emas, permata, atau benda berharga lainnya. Yang ada di dalam peti itu hanya sebuah buku diary tua dan sebuah kompas tua. Beno merasa sedih dan bingung. Ia tak percaya bahwa harta karun kakeknya hanya buku diary dan kompas tua. Rara dan Tino pun mencoba menghibur Beno. Mereka mengatakan bahwa mungkin buku diary dan kompas itu adalah kunci untuk menemukan harta karun yang sebenarnya. Beno pun membuka buku diary itu dan mulai membacanya. Buku diary itu berisi catatan perjalanan kakek Beno saat ia masih muda. Kakek Beno menceritakan tentang petualangannya di seluruh dunia dan tentang harta karun yang pernah ia temukan. Beno membaca buku diary itu dengan penuh perhatian. Ia terkesan dengan kisah-kisah petualangan kakeknya dan mulai mengerti bahwa harta karun yang sebenarnya bukanlah benda-benda material, tapi adalah pengalaman dan kenangan. Beno kemudian melihat kompas tua di dalam peti itu. Kompas itu memiliki ukiran aneh di atasnya. Beno mencoba memutar kompas itu dan tiba-tiba kompas itu menunjukkan arah ke sebuah pohon besar di tengah desa. Beno, Rara, dan Tino kembali ke desa dan pergi ke pohon besar itu. Di bawah pohon itu, mereka menemukan sebuah batu besar dengan ukiran aneh. Beno mencoba membaca ukiran itu dan menemukan sebuah kata: \"keluarga\". Beno teringat bahwa kakeknya memiliki seorang adik perempuan yang tak pernah ia temui. Beno pun mencari informasi tentang adik perempuan kakeknya. Setelah beberapa hari, Beno akhirnya menemukan alamat adik perempuan kakeknya. Beno, Rara, dan Tino pergi ke alamat itu dan bertemu dengan adik perempuan kakeknya. Adik perempuan kakeknya terkejut melihat Beno dan menceritakan kisah hidupnya. Ternyata, harta karun yang dimaksud kakek Beno bukan emas atau permata, tapi adalah keluarga. Adik perempuan kakeknya adalah satu-satunya keluarga yang dimiliki Beno. Beno sangat senang bertemu dengan bibinya dan mereka pun saling menyayangi. Beno sadar bahwa harta karun yang sebenarnya bukanlah benda-benda material, tapi adalah cinta dan kasih sayang keluarga. Beno bersyukur atas petunjuk kakeknya dan berjanji untuk selalu menjaga hubungan baik dengan bibinya. Sejak saat itu, Beno dan bibinya sering menghabiskan waktu bersama. Mereka bercerita tentang kakek Beno dan tentang petualangannya. Beno merasa bahagia dan bersyukur memiliki keluarga yang menyayanginya. Kisah Beno dan harta karun kakeknya mengajarkan kita bahwa harta karun yang sebenarnya bukanlah benda-benda material, tapi adalah cinta, kasih sayang, dan pengalaman. Harta karun itu dapat ditemukan di mana saja, bahkan di tempat yang paling tak terduga.&nbsp;', 20, '087820625514', 50000, 'king-1726980290.jpg', NULL, '2024-09-21 21:44:50', '2024-10-01 17:27:37'),
(3, 1, 'Lone Robot', 'Winton Almundarisna', 'ensiklopedia', 'Robot yang bekerja sendirian', 'Di sebuah biara tua di atas bukit, tinggallah seorang biksu tua bernama Biksu Tao. Biksu Tao terkenal dengan kue-kuenya yang lezat. Kue buatannya selalu menjadi favorit para penduduk desa. Konon, Biksu Tao memiliki rahasia dalam membuat kuenya. Rahasia itu adalah sebuah robot tua berkarat yang tersimpan di dapur biara. Robot itu tak henti mengaduk adonan kue, dan konon dirasuki jiwa mendiang istri Biksu Tao. Suatu hari, Biksu Tao jatuh sakit. Ia tak lagi bisa membuat kue untuk para penduduk desa. Para penduduk desa merasa sedih dan kehilangan. Mereka pun datang ke biara untuk menjenguk Biksu Tao dan menanyakan tentang robot pembuat kue. Biksu Tao yang lemah menjelaskan bahwa robot itu hanya alat bantu. Yang terpenting adalah cinta dan kasih sayang yang Biksu Tao tuangkan ke dalam setiap kue yang dibuatnya. Biksu Tao kemudian memberikan resep rahasia kue buatannya kepada para penduduk desa. Para penduduk desa belajar membuat kue dengan resep Biksu Tao. Meskipun tak selezat kue buatan Biksu Tao, namun kue buatan para penduduk desa tetap digemari. Biksu Tao merasa lega dan bersyukur bahwa resep rahasianya telah diwariskan kepada para penduduk desa. Beberapa hari kemudian, Biksu Tao meninggal dunia. Para penduduk desa berduka atas kepergiannya. Namun, mereka tak akan pernah melupakan Biksu Tao dan kue-kuenya yang lezat. Mereka terus membuat kue dengan resep Biksu Tao dan membagikannya kepada semua orang.&nbsp;', 2, '087820625514', 5000, 'lone-1726982729.jpg', NULL, '2024-09-21 22:25:29', '2024-10-01 17:26:35'),
(4, 1, 'Astronaut', 'Winton Almundarisna', 'ensiklopedia', 'Bagaimana sudut pandang para astronaut terhadap bumi ?', '&nbsp;Andra adalah seorang remaja yang jujur dan baik hati. Ia selalu berusaha untuk membantu orang lain, meskipun terkadang kebaikannya itu dimanfaatkan oleh orang lain. Andra sering merasa kesal dan kecewa. Ia bermimpi memiliki kekuatan untuk mengubah sifat orang-orang di sekitarnya. Suatu hari, saat membersihkan loteng rumah neneknya, Andra menemukan sebuah bola lampu tua yang berdebu. Ia pun memasangkan bola lampu itu ke dalam lampu tidur di kamarnya. Saat menyalakan lampu itu, tiba-tiba muncul asap berwarna ungu dan di dalamnya berdiri seorang jin kecil berjubah ungu. Jin itu memperkenalkan dirinya sebagai Jin Lampu dan menawarkan Andra tiga permintaan. Andra bingung memikirkan permintaannya. Ia tak mau boros dengan meminta hal-hal yang tak terlalu penting. Ia tak mau menjadi orang kaya atau memiliki kekuatan super. Akhirnya, Andra memutuskan untuk menggunakan satu permintaannya. Ia meminta agar Jin Lampu selalu membimbingnya menjadi orang jujur. Jin Lampu mengabulkan permintaan Andra dan menghilang bersama asap berwarna ungu. Awalnya, Andra tak merasakan perubahan apa pun. Namun, lama-kelamaan Andra menyadari bahwa Jin Lampu memang membimbingnya. Setiap kali Andra tergoda untuk berbohong atau berlaku curang, ia akan mendengar suara bisikan di telinganya yang mengingatkannya untuk tetap jujur. Meskipun tak memiliki kekuatan untuk mengubah sifat orang lain, Andra merasa hidupnya lebih tenang dan bahagia. Ia percaya bahwa kejujuran adalah kekuatan terbesar.&nbsp;', 6, '087820625514', 13500, 'astronot-1726982934.jpg', NULL, '2024-09-21 22:28:54', '2024-10-01 17:36:31'),
(5, 1, 'Witch Cat', 'Winton Almundarisna', 'cerpen', 'Mengisahkan kucing penyihir yang menyamar sebagai kucing biasa', 'Sudah sejak lama penduduk desa sini terkutuk menjadi kucing. Maka tak heran orang- orang yang datang menjuluki \"Village of Cat\". &nbsp;Kata seorang kakek, yang duduk di kursi sambil menatap salah satu kucing.<br><br>Tahun 1875 aku mengenalmu melalui sebuah pesta di Kafr Nabl, Suriah. Aku megenakan jaket hitam yang molek yang mungkin menggodamu, sedangkan engkau dengan baju hitam, mata yang sayu, bibir yang merah menyapaku dalam sebuah acara.&nbsp;<br><br>Kau sedikit terdiam merenung sepi, sedangkan aku memperhatikanmu terus- menerus. Pesta ini adalah pesta musim panas, namaku Erick seorang pedagang, yang sedang mencari rumah penginapan.<br><br>Dan aku memilih daerah Suriah untuk melewati jalanku berdagang. Tetapi kau malah membuatku nyaman di negara ini. Kau megajarkanku banyak arti kasih sayang, terutama pada diri sendiri.&nbsp;<br><br>Namamu Alice seorang gadis pengacara hukum. Dengan kelihaianmu berbicara di depan banyak orang terkadang aku mengagumimu dalam diam.<br><br>Dan aku memilih daerah Suriah untuk melewati jalanku berdagang. Tetapi kau malah membuatku nyaman di negara ini. Kau megajarkanku banyak arti kasih sayang, terutama pada diri sendiri.&nbsp;<br><br>Namamu Alice seorang gadis pengacara hukum. Dengan kelihaianmu berbicara di depan banyak orang terkadang aku mengagumimu dalam diam.<br><br>Aku lupa untuk menyadari pantangan, bahwasanya di suatu tempat di pinggiran kota ada sebuah kebun kuno yang sudah lama tidak dijamah oleh keberadaan manusia.<br><br>Malam itu juga, aku bercerita degan Alice tentang cerita kuno legenda dewa yunani kasih sayang. Armor atau Kupido, dewa yang digambarkan membawa panah, yang biasanya memanahkan kasih sayang ke arah hati setiap manusia.<br><br>Konon Dewa Kupido pernah datang ke sini, memberikan rahmat rejeki selalu, menembakan kasih sayang ke penduduk sekitar, karena keajegan penduduk untuk memelihara kucing, tapi ada satu penduduk yang malah membunuhi kucing- kucing penduduk lainya. Yang konon akhirnya, ia kini menjadi penyihir dan pengutuk, entah mengapa penyihir itu membenci para kucing.<br><br>Selesai berbicara sangat lama dan bercerita hingga tengah malam, kita memutuskan untuk pulang kembali ke rumah masing- masing. Selasa kita bertemu lagi, di kafe, tapi tidak lama, kita masih penasaran dan ingin mengunjungi kebun tersebut, dalam perjalanan dekat kebun tersebut.<br><br>Ketika sedang asyiknya berdua di kebun terlarang itu, tiba- tiba kita berdua melihat seekor kucing, dan kau menyentuhnya dan mengelus bulunya yang tebal. Aku lupa memperingatkanmu bahwasanya tempat itu sakral dan mistik jangan sampai menyentuh hal yang semestinya dilarang.<br><br>Kemudian langit berubah bergemuruh, pohon- pohon bergoyang terkena angin, suara tertawa muncul dari langit dengan sebongkah sapu terbang dan sesosok pria berjubah. Ternyata itu adalah penyihir.&nbsp;<br><br>\"Sangat bodoh sekali !!, Hahahaha.. kau telah mengutuk penduduk desa disini, maka tidak akan lama, semuanya akan menjadi kucing, sebab dulu akulah pemilik kucing- kucing itu yang akhirnya disembah penduduk desa disini, karena kucing disini sangat disakralkan karena memiliki mukjizat, misca cadabra !!!\".<br><br>Erick melihat dunia menjadi kabur, warna- warna menjadi gelap, kemudian tubuhnya mendadak lemas, dan ia pun pingsan. Ketika dalam pingsan itu, Erick melihat Alice menjadi gadis yang cantiknya tiada tara, ia berjalan dan berdansa di kebun itu.&nbsp;<br><br>Seharian pingsan, Erick bangun, melihat semuanya telah berubah. Kafr Nabl, penduduknya berubah menjadi kucing- kucing yang berkeliaran. Hanya dia yang menjadi manusia.<br><br>Erick sadar, bahwa dirinya telah kehilangan Alice, ia mencari didekatnya tidak ada, padahal kejadian itu, ia masih bersamanya. &nbsp;Ia menangis, mencari keberadaan Alice, semuanya menjadi kucing, yang hanya mengeong meminta belas kasihan Erick. Kemudian Erick berjalan- jalan berharap ada seseorang manusia, tapi tidak ada sama sekali, ia kini putus asa hanya menuruti jalan dan desa Kafr Nabl. Ia sendirian, murung, badanya tidak terurus, berhari- hari hatinya terlantung mencari keberadaan Alice.<br><br>Besoknya sampai di tengah kota, ia murung menatap menara kota. Dan ketika dalam kegalauan dan kerisauanya, tiba- tiba ia mendegar suara Alice dari kejauhan. Tapi setelah sadar hanya ada kucing- kucing yang mengeong meminta makan, ia memelihara dan memberi makan kucing- kucing di dekatnya.<br><br>Sudah sebulan seminggu, ia selalu berkhayal Alice kembali, ia kerap mendegar suaranya tapi tetap suara itu hanya suara kucing yang mengeong meminta belas kasihan. Sebenarnya Erick lah yang harus dibelas kasihani, mengapa harus menanggung kutukan ini dalam kalbunya.<br><br>Desa ini penuh misteri, mengapa Dewa Kupido sampai kesini, dan ada apa hubunganya dengan Penyihir. Erick berjalan kesana- kemari berharap Alice ketemu di desa yang kecil, penuh gersang ini. Kala dalam kesedihan yang panjang ia berdoa di dekat kebun agar Alice kembali. Dewa mengabulkanya, tapi yang datang dirinya adalah seekor kucing persia berwarna putih dengan mata biru, perlahan menghampirinya dan mendekatinya mengeluskan kepala dikakinya.<br><br>\"Alice!?.. ini pasti Alice..\"<br><br>\"Miaw.. miaw..\" (dengan wajah lugu, dan imut kucing itu menatap Erick)<br><br>\" Alice.. kemana kau pergi, aku menyayangimu, aku merindukanmu, ayo kembali ke rumah\"<br><br>Entah gila apa, erick tiba- tiba ingin membawa kucing persia putih itu ke rumahnya, padahal ia hampir sama dengan penduduk yang dikutuk menjadi kucing. Setiap hari ia beri makan, ia elus kepalanya, ia ajak bicara, ia ajak jalan.<br><br>Sampai pada tengah kota, ia berbicara dengan kucing itu, ia mengatakan mencitai Alice apapun bentuknya, ia memeluk erat dan menangis. Tak terasa, tetes air mata jatuh mengenai wajah kucing lucu dan cantik itu. Kabut datang tiba- tiba, Erick berkhayal Alice sedang memeluk dirinya dan mencium pipinya.<br><br>\"Aku mencintaimu Alice kembalilah..\"<br><br>Ia hanya merasakan kehadiran Alice sekejap, kemudian Alice menjadi kucing kembali. Ia menangis, tetapi ia harus merawat kucing itu, menemaninya sampai kutukan ini selesai.', 6, '087820625514', 50000, 'kucing-peramal-1714625050-1726983397.jpg', NULL, '2024-09-21 22:36:37', '2024-10-01 17:16:29'),
(9, 2, 'Fakta Bunga Matahari', 'Sandi Winanto', 'ensiklopedia', 'Apa saja fakta yang ada di dalam bunga matahari ?', 'Di Hutan Pelangi, hiduplah berbagai macam hewan dan tumbuhan dengan rukun. Hutan ini dinamakan Hutan Pelangi karena sering muncul pelangi yang indah setelah hujan. Namun, suatu hari kemarau panjang melanda. Hutan kekurangan air, daun-daun mulai menguning, dan para hewan kesulitan mencari makan. Para penghuni hutan pun berkumpul untuk mencari solusi. Burung Elang, yang dikenal sebagai pemimpin, angkat bicara. \"Kita harus mencari sumber air baru,\" kata Burung Elang dengan tegas. Singa, yang terkenal dengan kekuatannya, mengajukan diri untuk mencari sumber air. Dia menjelajah seluruh hutan, namun tidak menemukan sungai atau danau. Hari demi hari berlalu, keadaan di Hutan Pelangi semakin memprihatinkan. Tiba-tiba, seekor Kupu-Kupu mungil terbang dengan tergesa-gesa. \"Aku melihat awan hitam di sebelah barat!\" seru Kupu-Kupu. Berita itu bagaikan harapan bagi para penghuni hutan. Mereka semua berdoa agar turun hujan lebat. Namun, awan hitam tersebut hanya menurunkan sedikit gerimis yang tak cukup untuk menyelamatkan Hutan Pelangi. Saat semua penghuni hutan mulai putus asa, tiba-tiba muncul Pelangi yang biasanya muncul setelah hujan. Kali ini, Pelangi tersebut tampak berbeda. Cahaya Pelangi itu semakin terang dan berkilauan. Tiba-tiba, dari dalam cahaya Pelangi keluar sosok peri cantik dengan sayap berwarna-warni. \"Jangan khawatir, para penghuni Hutan Pelangi,\" kata peri itu dengan suara lembut. \"Kemarau panjang ini disebabkan oleh ulah manusia yang merusak alam.\" Peri tersebut menjelaskan bahwa manusia telah membuang sampah sembarangan dan menebang pohon terlalu banyak. Dia kemudian meniupkan serulingnya yang mengeluarkan melodi indah. Seketika itu, awan hitam dipenuhi bulir-bulir air hujan yang berlimpah. Hujan pun turun dengan derasnya, membasahi Hutan Pelangi dan mengembalikan kesejukannya. Para penghuni hutan bersorak sorai kegirangan. \"Terima kasih, peri cantik,\" kata Burung Elang mewakili para penghuni hutan. Peri itu tersenyum dan berkata, \"Agar hujan tetap turun dan Hutan Pelangi tetap lestari, kalian harus menjaga hutan ini dengan baik.\" Setelah mengucapkan pesan tersebut, peri cantik pun menghilang bersama cahaya Pelangi. Para penghuni Hutan Pelangi berjanji akan menjaga hutan mereka dengan sepenuh hati. Mereka sadar bahwa kelestarian alam menjadi tanggung jawab bersama.&nbsp;', 43, '087775647826', 12000, 'bunga-matahari-1727322090.jpg', NULL, '2024-09-25 20:41:30', '2024-10-13 03:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kritiks`
--

CREATE TABLE `kritiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kritik` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritiks`
--

INSERT INTO `kritiks` (`id`, `user_id`, `kritik`, `saran`, `created_at`, `updated_at`) VALUES
(1, 1, 'kritiksnya', 'saransnya', '2024-09-30 07:33:50', '2024-09-30 07:33:50'),
(2, 1, 'kedua', 'kedua juga', '2024-09-30 07:51:44', '2024-09-30 07:51:44'),
(3, 1, 'ketiga', 'saran ketiga', '2024-09-30 07:54:12', '2024-09-30 07:54:12'),
(4, 1, 'keempat', 'keempat saran', '2024-09-30 07:54:33', '2024-09-30 07:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_13_023258_create_bukus_table', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2024_09_30_131337_create_kritiks_table', 3),
(8, '2024_10_01_064336_create_pivots_table', 4),
(9, '2024_10_01_065412_create_pivots_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pivots`
--

CREATE TABLE `pivots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `terbeli` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `saldo` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `noTelp`, `email`, `gambar`, `email_verified_at`, `password`, `saldo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Winton Almundarisna', '087820625514', 'almundarisna@gmail.com', 'winton.png', NULL, '$2y$12$fss/d9rNiEkeUQTmIyoPSe5mztqICUw.tLKJO5fsDNEjka9A0jEES', 100000, NULL, '2024-09-23 02:07:50', '2024-10-13 03:31:45'),
(2, 'Sandi Winanto', '087775647826', 'user@gmail.com', 'sandi.jpg', NULL, '$2y$12$6Cnk1xaF8wHQDYY6Xx3eGOsI66klJmByWbBYS9F0Lbp1MKexKKTbe', 50000, NULL, '2024-09-25 18:58:19', '2024-10-13 03:31:45'),
(4, 'Gaia', '087820524416', 'gaia@gmail.com', 'brewok2-1727751368.jpg', NULL, '$2y$12$EQfHt.wZTW5Ht2PNJAplRe70Zx5XKwUR5pr43rsmAm8Q/pkjPUKla', NULL, NULL, '2024-09-30 19:56:08', '2024-09-30 19:56:08'),
(5, 'Pengguna', '087890256615', 'pengguna@gmail.com', 'brewok2-1727751864.jpg', NULL, '$2y$12$Wrd4n5sc4YrjljOlD.2qnuXNyyhvBCAN3/G030wVN1PHuoqX89ERO', NULL, NULL, '2024-09-30 20:04:24', '2024-09-30 20:04:24'),
(6, 'Richardo Charlos', '08765241667', 'richardo@gmail.com', 'user-1727752322.jpg', NULL, '$2y$12$Hu.dKu03TbMEV1z3YQl0lORJF0SD/PITrXoCu0b04Jo0x1LhL0TwW', NULL, NULL, '2024-09-30 20:12:02', '2024-09-30 20:12:02'),
(7, 'Leo', '08999775643', 'leo@gmail.com', 'brewok-1727851690.png', NULL, '$2y$12$WbaSlQJeQVZR0HVRVGX80OKb73cmcPqUolBrRRtR5O7f/BITtDokS', NULL, NULL, '2024-10-01 23:48:10', '2024-10-01 23:48:10'),
(8, 'leonard ronald h', '081292617229', 'leonard@gmail.com', 'brewok2-1727852670.jpg', NULL, '$2y$12$P86f7wNsT4Q2h/M3DDFyzuubSuzBqrf49HWM98.w902Kop5xpTGai', NULL, NULL, '2024-10-02 00:04:30', '2024-10-02 00:04:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bukus_judul_unique` (`judul`),
  ADD UNIQUE KEY `bukus_gambar_unique` (`gambar`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kritiks`
--
ALTER TABLE `kritiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pivots`
--
ALTER TABLE `pivots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kritiks`
--
ALTER TABLE `kritiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pivots`
--
ALTER TABLE `pivots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
