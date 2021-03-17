-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 08:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(20) UNSIGNED NOT NULL,
  `city_id` int(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `company`, `address1`, `postalCode`, `province_id`, `city_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'yas smart', 'سقز،خیابان حافظ ،کوچه ی پردیس', '12343252', 20, 292, 9, '2021-02-09 15:48:46', '2021-02-09 15:48:46'),
(2, 'yas smart', 'خیابان جمهوری،کوچه ی آزادی', '2698165', 24, 332, 10, '2021-02-10 06:20:19', '2021-02-10 06:20:19'),
(3, 'yas smart', 'سقز،خیابان حافظ ،کوچه ی پردیس', '2698165', 20, 292, 11, '2021-02-14 09:02:17', '2021-02-14 09:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(11, 4, 23, 4, '2021-02-24 04:03:33', '2021-03-02 16:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `photo_path`, `created_at`, `updated_at`) VALUES
(2, 'asuz', 'ایسوس نام خود را از پگاسوس گرفته است, اسب بالداری در اساطیر یونان که نماد اندیشه و خرد است. ایسوس تجسم قدرت, پاکی و روح ماجراجوی این موجود فوق العاده است و پرواز در اوج را با هر محصول خود ایجاد می کند.\r\n\r\nصنعت فناوری اطلاعات تایوان طی چند دهه اخیر رشد خارق العاده ای داشته و اکنون این کشور نیروی محرک بازارهای جهانی است. ایسوس مدت ها است که در خط مقدم این شکوفایی قرار دارد و حیات خود را در یک شرکت کوچک با تعداد اندکی کارمند برای تولید مادربورد آغاز کرد اما اکنون یک کمپانی پیشرو در تایوان با 12.500 کارمند در سراسر جهان است. ایسوس در اغلب حوزه های فناوری مانند اجزای رایانه, لوازم جانبی, نوت بوک, تبلت, سرور و گوشی های هوشمند کالا تولید می کند.\r\n\r\nخلاقیت کلید موفقیت ایسوس است. در سال 2011 برای مخاطبان پرشور خود در نمایشگاه کامپیوتکس از PadFone رونمایی کرد و امسال مدیر ایسوس, Jonney Shih, یکبار دیگر این پرچم را با معرفی اولترابوک های با کاربرد دوگانه TAICHI و Transformer Book به احتزاز درآورد.\r\n\r\nASUS TAICHI یک اولترابوک با نمایشگر منحصر به فرد لمسی در دو طرف است که به کاربران امکان می دهد تنها با بازکردن آن به سرعت بین نوت بوک و تبلت جابجا شوند. Transformer Book یک اولترابوک قابل تبدیل است که غیر از پایه کیبورد با نور زمینه کلیدها, یک نوت بوک با هارد دیسک و فضای ذخیره سازی و همچنین یک تبلت با تشخیص چندین لمس همزمان و درایو SSD است.\r\n\r\nهمراه با سری جدید تبلت های هیجان انگیز ویندوز RT و ویندوز 8, ایسوس دارای رده وسیعی از محصولات خلاقانه است که تصور کاربران برای ورود به عصر جدید رایانش ابری را آماده خواهد کرد.\r\n\r\nاین نگاه راهبردی دلیلی است که ایسوس می تواند طراحی و نوآوری با کیفیت بالا را برای همگان فراهم کند و مورد تحسین گسترده قرار گیرد. محصولات ایسوس در سال 2013 موفق بع دریافت 4256 جایزه و تقدیر بین المللی شده اند یعنی 11 جایزه در هر روز و برای تمام روزهای سال. حجم سالانه تولیدات ایسوس در بخش نوت بوک بطور پیوسته با رشد همراه بوده و درآمد در سال 2011 درآمد آن به 11.9 میلیارد دلار رسید.', '1612618171indewx.png', '2020-10-17 05:17:45', '2021-02-06 09:59:31'),
(11, 'lenevo', 'لنوو بزرگترین تولید کننده لپ تاپ در سطح جهان است', '1612618186lenovo-lenovo.png', '2020-10-18 05:49:59', '2021-02-06 09:59:46'),
(12, 'jack & jones', 'برند جک اند جونز jack & jones کمپانی Bestseller یک شرکت دانمارکی هست که به صورت خصوصی و خانوادگی اداره می شود  و بالغ بر ۱۵ هزار کارمند دارد و در زمینه تولید پوشاک مردانه و زنانه فعالیت است. این شرکت در سال ۱۹۷۵ تاسیس شده و دارای ۱۱ برند لباس مردانه و زنانه می باشد.\r\n\r\nدر سال ۱۹۷۵ ، این شرکت توسط Troels Holch Povlsen در دانمارک تاسیس شد. ابتدا شرکت    Bestseller  تمرکز بر روی مد زنان داشت. در سال ۱۹۸۶ وارد بازار پوشاک بچگانه شد و در سال ۱۹۸۸ در بازار پوشاک مردانه حضور پیدا کرد.\r\nبرند جک اند جونز jack & jones توسط کمپانی بست سلر در سال ۱۹۸۹  راه اندازی شد و دو سال بعد یعنی در سال ۱۹۹۰ کمپانی بست سلر نماینده ای جوان را به نمایشگاه مد اسلو فرستاد که توانست با مجموعه مردان ساده و شیک خود در این نمایشگاه به خوبی مطرح شود و در همان سال بود که اولین فروشگاه jackjones در نروژ شروع به فعالیت کرد و سه سال بعد برند jack & jones توانست اولین مجموعه رسمی خود را به بازار عرضه کند.\r\nرند پوشاک مردان برند Jack & Jones بیشتر مشتریان جوان را هدف گرفته است. پوشاک دانمارکی برند jack & jones ساده، مدرن و همه پسند هستند و می توانند تمامی سلیقه ها را به خصوص در مورد جوانان پوشش دهد.\r\n\r\nبرند jack & jones فعالیت خود را با شلوارک پسرانه و شلوارهای جین مردانه آغاز کرد و در حال حاضر پنج استایل متفاوت را برای مخاطبان خود به خصوص مشتریان جوان عرضه می کند .\r\n\r\nتا بتوانند از محصولات با کیفیت این کمپانی اعم از لباس های زمستانی،مهمانی های رسمی،خودمانی، روزانه ، برای سفر به مناطق گرمسیر،کوهستانی ، ورزشی،لباس زیر، و… بهره مند شوند. مشتریان خوش سلیقه می توانند تمام پوشاک مورد نیاز خود را به راحتی در برند jack & jones بیابید.', '1611948861unnamed.jpg', '2021-01-29 16:04:21', '2021-01-29 16:04:21'),
(13, 'nike', 'Beaverton, city, Washington county, northwestern Oregon, U.S., in the Tualatin Valley, immediately west of Portland. The area was originally home to the Atfalati (mispronounced Tualatin) band of Kalapuya (Calapooya) Indians, most of whom had died from settler-borne diseases by the time their land was taken by treaty. The Beaverton area was settled in 1847 and laid out in 1869. It became a station on the Oregon Central (now Southern Pacific) Railroad. An agricultural-trade centre named for nearby beaver marshes, it has developed as a residential community in the heart of Oregon’s “Silicon Forest,” with electronics and research industries. Inc. 1893. Pop. (2000) 76,129; (2010) 89,803.\r\nFrom the late 1980s Nike steadily expanded its business and diversified its product line through numerous acquisitions, including the shoe companies Cole Haan (1988; sold in 2012) and Converse, Inc. (2003), the sports-equipment producer Canstar Sports, Inc. (1994; later called Bauer and sold in 2008), and the athletic apparel and equipment company Umbro (2008; sold in 2012). In 1996 the company created Nike ACG (“all-conditions gear”), which markets products for extreme sports such as snowboarding and mountain biking. In the early 21st century Nike began selling sports-technology accessories, including portable heart-rate monitors and high-altitude wrist compasses.\r\n\r\nPart of Nike’s success is owed to endorsements by such athletes as Michael Jordan, Mia Hamm, Roger Federer, and Tiger Woods. The NikeTown chain stores, the first of which opened in 1990, pay tribute to these and other company spokespersons while offering consumers a full range of Nike products. In the 1990s the company’s image briefly suffered from revelations about poor working conditions in its overseas factories.', '16124694891 -VodsLpQ_eYMvwMOOiUSFw.jpeg', '2021-02-04 16:41:29', '2021-02-04 16:41:29'),
(14, 'آدیداس', 'شخیبشخبثخهبتصثخهبتصثبخثصتهشخیبشخبثخهبتصثخهبتصثبخثصتهشخیبشخبثخهبتصثخهبتصثبخثصتهشخیبشخبثخهبتصثخهبتصثبخثصته', '16126174692.jpg', '2021-02-06 09:47:49', '2021-02-06 09:47:49'),
(15, 'LG', 'dvdsvsd', '1612617535index.png', '2021-02-06 09:48:55', '2021-02-06 09:48:55'),
(16, 'samsung', 'dcscdsc', '1612617714index.jpg', '2021-02-06 09:51:54', '2021-02-06 09:51:54'),
(17, 'apple', 'sdcdscds', '1612617728og-default.jpg', '2021-02-06 09:52:08', '2021-02-06 09:52:08'),
(18, 'honor', 'dvsdvsd', '1612617954index.png', '2021-02-06 09:55:54', '2021-02-06 09:55:54'),
(19, 'Iran Hany', 'sdvsdvdsvsdv', '1612701044102051.jpg', '2021-02-07 09:00:44', '2021-02-07 09:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `cat_property`
--

CREATE TABLE `cat_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_property`
--

INSERT INTO `cat_property` (`id`, `category_id`, `property_id`, `created_at`, `updated_at`) VALUES
(7, 8, 15, NULL, NULL),
(8, 8, 16, NULL, NULL),
(9, 8, 20, NULL, NULL),
(12, 6, 21, NULL, NULL),
(13, 51, 15, NULL, NULL),
(14, 51, 16, NULL, NULL),
(15, 51, 20, NULL, NULL),
(16, 51, 21, NULL, NULL),
(17, 46, 22, NULL, NULL),
(18, 47, 16, NULL, NULL),
(19, 47, 22, NULL, NULL),
(20, 9, 16, NULL, NULL),
(21, 9, 21, NULL, NULL),
(22, 4, 16, NULL, NULL),
(23, 4, 20, NULL, NULL),
(24, 4, 21, NULL, NULL),
(25, 4, 22, NULL, NULL),
(29, 2, 15, NULL, NULL),
(31, 2, 20, NULL, NULL),
(32, 2, 23, NULL, NULL),
(36, 1, 15, NULL, NULL),
(41, 1, 16, NULL, NULL),
(42, 1, 20, NULL, NULL),
(46, 2, 22, NULL, NULL),
(47, 2, 16, NULL, NULL),
(48, 2, 21, NULL, NULL),
(49, 56, 15, NULL, NULL),
(50, 56, 16, NULL, NULL),
(51, 56, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `name`) VALUES
(1, 1, 'تبريز'),
(2, 1, 'كندوان'),
(3, 1, 'بندر شرفخانه'),
(4, 1, 'مراغه'),
(5, 1, 'ميانه'),
(6, 1, 'شبستر'),
(7, 1, 'مرند'),
(8, 1, 'جلفا'),
(9, 1, 'سراب'),
(10, 1, 'هاديشهر'),
(11, 1, 'بناب'),
(12, 1, 'كليبر'),
(13, 1, 'تسوج'),
(14, 1, 'اهر'),
(15, 1, 'هريس'),
(16, 1, 'عجبشير'),
(17, 1, 'هشترود'),
(18, 1, 'ملكان'),
(19, 1, 'بستان آباد'),
(20, 1, 'ورزقان'),
(21, 1, 'اسكو'),
(22, 1, 'آذر شهر'),
(23, 1, 'قره آغاج'),
(24, 1, 'ممقان'),
(25, 1, 'صوفیان'),
(26, 1, 'ایلخچی'),
(27, 1, 'خسروشهر'),
(28, 1, 'باسمنج'),
(29, 1, 'سهند'),
(30, 2, 'اروميه'),
(31, 2, 'نقده'),
(32, 2, 'ماكو'),
(33, 2, 'تكاب'),
(34, 2, 'خوي'),
(35, 2, 'مهاباد'),
(36, 2, 'سر دشت'),
(37, 2, 'چالدران'),
(38, 2, 'بوكان'),
(39, 2, 'مياندوآب'),
(40, 2, 'سلماس'),
(41, 2, 'شاهين دژ'),
(42, 2, 'پيرانشهر'),
(43, 2, 'سيه چشمه'),
(44, 2, 'اشنويه'),
(45, 2, 'چایپاره'),
(46, 2, 'پلدشت'),
(47, 2, 'شوط'),
(48, 3, 'اردبيل'),
(49, 3, 'سرعين'),
(50, 3, 'بيله سوار'),
(51, 3, 'پارس آباد'),
(52, 3, 'خلخال'),
(53, 3, 'مشگين شهر'),
(54, 3, 'مغان'),
(55, 3, 'نمين'),
(56, 3, 'نير'),
(57, 3, 'كوثر'),
(58, 3, 'كيوي'),
(59, 3, 'گرمي'),
(60, 4, 'اصفهان'),
(61, 4, 'فريدن'),
(62, 4, 'فريدون شهر'),
(63, 4, 'فلاورجان'),
(64, 4, 'گلپايگان'),
(65, 4, 'دهاقان'),
(66, 4, 'نطنز'),
(67, 4, 'نايين'),
(68, 4, 'تيران'),
(69, 4, 'كاشان'),
(70, 4, 'فولاد شهر'),
(71, 4, 'اردستان'),
(72, 4, 'سميرم'),
(73, 4, 'درچه'),
(74, 4, 'کوهپایه'),
(75, 4, 'مباركه'),
(76, 4, 'شهرضا'),
(77, 4, 'خميني شهر'),
(78, 4, 'شاهين شهر'),
(79, 4, 'نجف آباد'),
(80, 4, 'دولت آباد'),
(81, 4, 'زرين شهر'),
(82, 4, 'آران و بيدگل'),
(83, 4, 'باغ بهادران'),
(84, 4, 'خوانسار'),
(85, 4, 'مهردشت'),
(86, 4, 'علويجه'),
(87, 4, 'عسگران'),
(88, 4, 'نهضت آباد'),
(89, 4, 'حاجي آباد'),
(90, 4, 'تودشک'),
(91, 4, 'ورزنه'),
(92, 6, 'ايلام'),
(93, 6, 'مهران'),
(94, 6, 'دهلران'),
(95, 6, 'آبدانان'),
(96, 6, 'شيروان چرداول'),
(97, 6, 'دره شهر'),
(98, 6, 'ايوان'),
(99, 6, 'سرابله'),
(100, 7, 'بوشهر'),
(101, 7, 'تنگستان'),
(102, 7, 'دشتستان'),
(103, 7, 'دير'),
(104, 7, 'ديلم'),
(105, 7, 'كنگان'),
(106, 7, 'گناوه'),
(107, 7, 'ريشهر'),
(108, 7, 'دشتي'),
(109, 7, 'خورموج'),
(110, 7, 'اهرم'),
(111, 7, 'برازجان'),
(112, 7, 'خارك'),
(113, 7, 'جم'),
(114, 7, 'کاکی'),
(115, 7, 'عسلویه'),
(116, 7, 'بردخون'),
(117, 8, 'تهران'),
(118, 8, 'ورامين'),
(119, 8, 'فيروزكوه'),
(120, 8, 'ري'),
(121, 8, 'دماوند'),
(122, 8, 'اسلامشهر'),
(123, 8, 'رودهن'),
(124, 8, 'لواسان'),
(125, 8, 'بومهن'),
(126, 8, 'تجريش'),
(127, 8, 'فشم'),
(128, 8, 'كهريزك'),
(129, 8, 'پاكدشت'),
(130, 8, 'چهاردانگه'),
(131, 8, 'شريف آباد'),
(132, 8, 'قرچك'),
(133, 8, 'باقرشهر'),
(134, 8, 'شهريار'),
(135, 8, 'رباط كريم'),
(136, 8, 'قدس'),
(137, 8, 'ملارد'),
(138, 9, 'شهركرد'),
(139, 9, 'فارسان'),
(140, 9, 'بروجن'),
(141, 9, 'چلگرد'),
(142, 9, 'اردل'),
(143, 9, 'لردگان'),
(144, 9, 'سامان'),
(145, 10, 'قائن'),
(146, 10, 'فردوس'),
(147, 10, 'بيرجند'),
(148, 10, 'نهبندان'),
(149, 10, 'سربيشه'),
(150, 10, 'طبس مسینا'),
(151, 10, 'قهستان'),
(152, 10, 'درمیان'),
(153, 11, 'مشهد'),
(154, 11, 'نيشابور'),
(155, 11, 'سبزوار'),
(156, 11, 'كاشمر'),
(157, 11, 'گناباد'),
(158, 11, 'طبس'),
(159, 11, 'تربت حيدريه'),
(160, 11, 'خواف'),
(161, 11, 'تربت جام'),
(162, 11, 'تايباد'),
(163, 11, 'قوچان'),
(164, 11, 'سرخس'),
(165, 11, 'بردسكن'),
(166, 11, 'فريمان'),
(167, 11, 'چناران'),
(168, 11, 'درگز'),
(169, 11, 'كلات'),
(170, 11, 'طرقبه'),
(171, 11, 'سر ولایت'),
(172, 12, 'بجنورد'),
(173, 12, 'اسفراين'),
(174, 12, 'جاجرم'),
(175, 12, 'شيروان'),
(176, 12, 'آشخانه'),
(177, 12, 'گرمه'),
(178, 12, 'ساروج'),
(179, 13, 'اهواز'),
(180, 13, 'ايرانشهر'),
(181, 13, 'شوش'),
(182, 13, 'آبادان'),
(183, 13, 'خرمشهر'),
(184, 13, 'مسجد سليمان'),
(185, 13, 'ايذه'),
(186, 13, 'شوشتر'),
(187, 13, 'انديمشك'),
(188, 13, 'سوسنگرد'),
(189, 13, 'هويزه'),
(190, 13, 'دزفول'),
(191, 13, 'شادگان'),
(192, 13, 'بندر ماهشهر'),
(193, 13, 'بندر امام خميني'),
(194, 13, 'اميديه'),
(195, 13, 'بهبهان'),
(196, 13, 'رامهرمز'),
(197, 13, 'باغ ملك'),
(198, 13, 'هنديجان'),
(199, 13, 'لالي'),
(200, 13, 'رامشیر'),
(201, 13, 'حمیدیه'),
(202, 13, 'دغاغله'),
(203, 13, 'ملاثانی'),
(204, 13, 'شادگان'),
(205, 13, 'ویسی'),
(206, 14, 'زنجان'),
(207, 14, 'ابهر'),
(208, 14, 'خدابنده'),
(209, 14, 'كارم'),
(210, 14, 'ماهنشان'),
(211, 14, 'خرمدره'),
(212, 14, 'ايجرود'),
(213, 14, 'زرين آباد'),
(214, 14, 'آب بر'),
(215, 14, 'قيدار'),
(216, 15, 'سمنان'),
(217, 15, 'شاهرود'),
(218, 15, 'گرمسار'),
(219, 15, 'ايوانكي'),
(220, 15, 'دامغان'),
(221, 15, 'بسطام'),
(222, 16, 'زاهدان'),
(223, 16, 'چابهار'),
(224, 16, 'خاش'),
(225, 16, 'سراوان'),
(226, 16, 'زابل'),
(227, 16, 'سرباز'),
(228, 16, 'نيكشهر'),
(229, 16, 'ايرانشهر'),
(230, 16, 'راسك'),
(231, 16, 'ميرجاوه'),
(232, 17, 'شيراز'),
(233, 17, 'اقليد'),
(234, 17, 'داراب'),
(235, 17, 'فسا'),
(236, 17, 'مرودشت'),
(237, 17, 'خرم بيد'),
(238, 17, 'آباده'),
(239, 17, 'كازرون'),
(240, 17, 'ممسني'),
(241, 17, 'سپيدان'),
(242, 17, 'لار'),
(243, 17, 'فيروز آباد'),
(244, 17, 'جهرم'),
(245, 17, 'ني ريز'),
(246, 17, 'استهبان'),
(247, 17, 'لامرد'),
(248, 17, 'مهر'),
(249, 17, 'حاجي آباد'),
(250, 17, 'نورآباد'),
(251, 17, 'اردكان'),
(252, 17, 'صفاشهر'),
(253, 17, 'ارسنجان'),
(254, 17, 'قيروكارزين'),
(255, 17, 'سوريان'),
(256, 17, 'فراشبند'),
(257, 17, 'سروستان'),
(258, 17, 'ارژن'),
(259, 17, 'گويم'),
(260, 17, 'داريون'),
(261, 17, 'زرقان'),
(262, 17, 'خان زنیان'),
(263, 17, 'کوار'),
(264, 17, 'ده بید'),
(265, 17, 'باب انار/خفر'),
(266, 17, 'بوانات'),
(267, 17, 'خرامه'),
(268, 17, 'خنج'),
(269, 17, 'سیاخ دارنگون'),
(270, 18, 'قزوين'),
(271, 18, 'تاكستان'),
(272, 18, 'آبيك'),
(273, 18, 'بوئين زهرا'),
(274, 19, 'قم'),
(275, 5, 'طالقان'),
(276, 5, 'نظرآباد'),
(277, 5, 'اشتهارد'),
(278, 5, 'هشتگرد'),
(279, 5, 'كن'),
(280, 5, 'آسارا'),
(281, 5, 'شهرک گلستان'),
(282, 5, 'اندیشه'),
(283, 5, 'كرج'),
(284, 5, 'نظر آباد'),
(285, 5, 'گوهردشت'),
(286, 5, 'ماهدشت'),
(287, 5, 'مشکین دشت'),
(288, 20, 'سنندج'),
(289, 20, 'ديواندره'),
(290, 20, 'بانه'),
(291, 20, 'بيجار'),
(292, 20, 'سقز'),
(293, 20, 'كامياران'),
(294, 20, 'قروه'),
(295, 20, 'مريوان'),
(296, 20, 'صلوات آباد'),
(297, 20, 'حسن آباد'),
(298, 21, 'كرمان'),
(299, 21, 'راور'),
(300, 21, 'بابك'),
(301, 21, 'انار'),
(302, 21, 'کوهبنان'),
(303, 21, 'رفسنجان'),
(304, 21, 'بافت'),
(305, 21, 'سيرجان'),
(306, 21, 'كهنوج'),
(307, 21, 'زرند'),
(308, 21, 'بم'),
(309, 21, 'جيرفت'),
(310, 21, 'بردسير'),
(311, 22, 'كرمانشاه'),
(312, 22, 'اسلام آباد غرب'),
(313, 22, 'سر پل ذهاب'),
(314, 22, 'كنگاور'),
(315, 22, 'سنقر'),
(316, 22, 'قصر شيرين'),
(317, 22, 'گيلان غرب'),
(318, 22, 'هرسين'),
(319, 22, 'صحنه'),
(320, 22, 'پاوه'),
(321, 22, 'جوانرود'),
(322, 22, 'شاهو'),
(323, 23, 'ياسوج'),
(324, 23, 'گچساران'),
(325, 23, 'دنا'),
(326, 23, 'دوگنبدان'),
(327, 23, 'سي سخت'),
(328, 23, 'دهدشت'),
(329, 23, 'ليكك'),
(330, 24, 'گرگان'),
(331, 24, 'آق قلا'),
(332, 24, 'گنبد كاووس'),
(333, 24, 'علي آباد كتول'),
(334, 24, 'مينو دشت'),
(335, 24, 'تركمن'),
(336, 24, 'كردكوي'),
(337, 24, 'بندر گز'),
(338, 24, 'كلاله'),
(339, 24, 'آزاد شهر'),
(340, 24, 'راميان'),
(341, 25, 'رشت'),
(342, 25, 'منجيل'),
(343, 25, 'لنگرود'),
(344, 25, 'رود سر'),
(345, 25, 'تالش'),
(346, 25, 'آستارا'),
(347, 25, 'ماسوله'),
(348, 25, 'آستانه اشرفيه'),
(349, 25, 'رودبار'),
(350, 25, 'فومن'),
(351, 25, 'صومعه سرا'),
(352, 25, 'بندرانزلي'),
(353, 25, 'كلاچاي'),
(354, 25, 'هشتپر'),
(355, 25, 'رضوان شهر'),
(356, 25, 'ماسال'),
(357, 25, 'شفت'),
(358, 25, 'سياهكل'),
(359, 25, 'املش'),
(360, 25, 'لاهیجان'),
(361, 25, 'خشک بيجار'),
(362, 25, 'خمام'),
(363, 25, 'لشت نشا'),
(364, 25, 'بندر کياشهر'),
(365, 26, 'خرم آباد'),
(366, 26, 'ماهشهر'),
(367, 26, 'دزفول'),
(368, 26, 'بروجرد'),
(369, 26, 'دورود'),
(370, 26, 'اليگودرز'),
(371, 26, 'ازنا'),
(372, 26, 'نور آباد'),
(373, 26, 'كوهدشت'),
(374, 26, 'الشتر'),
(375, 26, 'پلدختر'),
(376, 27, 'ساري'),
(377, 27, 'آمل'),
(378, 27, 'بابل'),
(379, 27, 'بابلسر'),
(380, 27, 'بهشهر'),
(381, 27, 'تنكابن'),
(382, 27, 'جويبار'),
(383, 27, 'چالوس'),
(384, 27, 'رامسر'),
(385, 27, 'سواد كوه'),
(386, 27, 'قائم شهر'),
(387, 27, 'نكا'),
(388, 27, 'نور'),
(389, 27, 'بلده'),
(390, 27, 'نوشهر'),
(391, 27, 'پل سفيد'),
(392, 27, 'محمود آباد'),
(393, 27, 'فريدون كنار'),
(394, 28, 'اراك'),
(395, 28, 'آشتيان'),
(396, 28, 'تفرش'),
(397, 28, 'خمين'),
(398, 28, 'دليجان'),
(399, 28, 'ساوه'),
(400, 28, 'سربند'),
(401, 28, 'محلات'),
(402, 28, 'شازند'),
(403, 29, 'بندرعباس'),
(404, 29, 'قشم'),
(405, 29, 'كيش'),
(406, 29, 'بندر لنگه'),
(407, 29, 'بستك'),
(408, 29, 'حاجي آباد'),
(409, 29, 'دهبارز'),
(410, 29, 'انگهران'),
(411, 29, 'ميناب'),
(412, 29, 'ابوموسي'),
(413, 29, 'بندر جاسك'),
(414, 29, 'تنب بزرگ'),
(415, 29, 'بندر خمیر'),
(416, 29, 'پارسیان'),
(417, 29, 'قشم'),
(418, 30, 'همدان'),
(419, 30, 'ملاير'),
(420, 30, 'تويسركان'),
(421, 30, 'نهاوند'),
(422, 30, 'كبودر اهنگ'),
(423, 30, 'رزن'),
(424, 30, 'اسدآباد'),
(425, 30, 'بهار'),
(426, 31, 'يزد'),
(427, 31, 'تفت'),
(428, 31, 'اردكان'),
(429, 31, 'ابركوه'),
(430, 31, 'ميبد'),
(431, 31, 'طبس'),
(432, 31, 'بافق'),
(433, 31, 'مهريز'),
(434, 31, 'اشكذر'),
(435, 31, 'هرات'),
(436, 31, 'خضرآباد'),
(437, 31, 'شاهديه'),
(438, 31, 'حمیدیه شهر'),
(439, 31, 'سید میرزا'),
(440, 31, 'زارچ');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `code`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'کوپن تخفیف ویژه نوروز', 'NOROZ1400', 50000, '0', '2021-02-16 15:33:26', '2021-02-17 03:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `coupon__users`
--

CREATE TABLE `coupon__users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon__users`
--

INSERT INTO `coupon__users` (`id`, `user_id`, `coupon_id`, `created_at`, `updated_at`) VALUES
(1, 9, 1, NULL, NULL),
(2, 10, 1, '2021-02-17 11:37:10', '2021-02-17 11:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `replyTo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `text`, `subject`, `replyTo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, '<p>این ایمیل باید بعد از دو دقیقه بیاد</p>', 'sdfsdfsd', 'giapee@mailpoof.com', '1', NULL, '2021-03-17 13:43:28', '2021-03-17 13:43:32'),
(6, '<p style=\"text-align: right;\">این ایمیل بایستی بعداز دو دیقه بیاد</p><p style=\"text-align: right;\">&nbsp;</p>', 'این ایمیل بایستی بعداز دو دیقه بیاد', 'fabiv83321@grokleft.com', '1', NULL, '2021-03-17 13:45:40', '2021-03-17 13:45:44'),
(7, '<h2 style=\"text-align: right;\"><em><strong>sdfgdsgdsg</strong></em></h2><p style=\"text-align: right;\"><em><strong>sdfdsfsdfdsfsdfsdfdsfgnbfgns</strong></em></p>', 'sdfsdf', 'giapee@mailpoof.com', '0', NULL, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(8, '<p>sdsdsfsdfdsfdsf</p>', 'ایجاد ماژول ارسال ایمیل', 'fabiv83321@grokleft.com', '0', NULL, '2021-03-17 13:54:48', '2021-03-17 13:54:48'),
(9, '<p>sdsdsfsdfdsfdsf</p>', 'ایجاد ماژول ارسال ایمیل', 'fabiv83321@grokleft.com', '1', NULL, '2021-03-17 13:55:26', '2021-03-17 13:55:30'),
(10, '<h1 style=\"text-align: right;\">این ایمیل بایستی بعداز 3دیقه بیاد</h1><h1 style=\"text-align: right;\">این ایمیل بایستی بعداز 3دیقه بیاد</h1><h1 style=\"text-align: right;\">این ایمیل بایستی بعداز 3دیقه بیاد</h1><h1 style=\"text-align: right;\">این ایمیل بایستی بعداز 3دیقه بیاد</h1>', 'این ایمیل بایستی بعداز 3دیقه بیاد', 'fabiv83321@grokleft.com', '1', NULL, '2021-03-17 13:58:06', '2021-03-17 13:58:10'),
(11, '<h1 style=\"text-align: right;\">این ایمیل بایستی بعداز 4دیقه بیاد</h1>', 'این ایمیل بایستی بعداز 4دیقه بیاد', 'fabiv83321@grokleft.com', '1', NULL, '2021-03-17 14:02:54', '2021-03-17 15:01:47'),
(12, '<p style=\"text-align: right;\"><strong><em>sdf <span style=\"color: #e67e23;\">sdfdf </span>sdfsdfds</em></strong></p>', 'gheli beli', 'giapee@mailpoof.com', '1', NULL, '2021-03-17 15:06:24', '2021-03-17 15:14:31'),
(13, '<p>22222</p>', '222gheli beli', 'giapee@mailpoof.com', '1', NULL, '2021-03-17 15:14:37', '2021-03-17 15:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `email__users`
--

CREATE TABLE `email__users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email__users`
--

INSERT INTO `email__users` (`id`, `user_id`, `email_id`, `created_at`, `updated_at`) VALUES
(19, 1, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(20, 2, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(21, 4, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(22, 9, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(23, 10, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(24, 11, 5, '2021-03-17 13:43:28', '2021-03-17 13:43:28'),
(25, 1, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(26, 2, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(27, 4, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(28, 9, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(29, 10, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(30, 11, 6, '2021-03-17 13:45:40', '2021-03-17 13:45:40'),
(31, 1, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(32, 2, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(33, 4, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(34, 9, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(35, 10, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(36, 11, 7, '2021-03-17 13:54:01', '2021-03-17 13:54:01'),
(37, 1, 8, '2021-03-17 13:54:48', '2021-03-17 13:54:48'),
(38, 2, 8, '2021-03-17 13:54:48', '2021-03-17 13:54:48'),
(39, 9, 8, '2021-03-17 13:54:48', '2021-03-17 13:54:48'),
(40, 1, 9, '2021-03-17 13:55:26', '2021-03-17 13:55:26'),
(41, 2, 9, '2021-03-17 13:55:26', '2021-03-17 13:55:26'),
(42, 9, 9, '2021-03-17 13:55:26', '2021-03-17 13:55:26'),
(43, 1, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(44, 2, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(45, 4, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(46, 9, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(47, 10, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(48, 11, 10, '2021-03-17 13:58:06', '2021-03-17 13:58:06'),
(49, 1, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(50, 2, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(51, 4, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(52, 9, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(53, 10, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(54, 11, 11, '2021-03-17 14:02:54', '2021-03-17 14:02:54'),
(55, 1, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(56, 2, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(57, 4, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(58, 9, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(59, 10, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(60, 11, 12, '2021-03-17 15:06:24', '2021-03-17 15:06:24'),
(61, 1, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37'),
(62, 2, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37'),
(63, 4, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37'),
(64, 9, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37'),
(65, 10, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37'),
(66, 11, 13, '2021-03-17 15:14:37', '2021-03-17 15:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'e6f5c763-f69f-4bc5-9a47-8d72168d5049', 'database', 'default', '{\"uuid\":\"e6f5c763-f69f-4bc5-9a47-8d72168d5049\",\"displayName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\SendEmailToUsersJob\\\":11:{s:34:\\\"\\u0000App\\\\Jobs\\\\SendEmailToUsersJob\\u0000data\\\";a:6:{s:7:\\\"subject\\\";s:10:\\\"gheli beli\\\";s:4:\\\"text\\\";s:115:\\\"<p style=\\\"text-align: right;\\\"><strong><em>sdf <span style=\\\"color: #e67e23;\\\">sdfdf <\\/span>sdfsdfds<\\/em><\\/strong><\\/p>\\\";s:7:\\\"replyTo\\\";s:19:\\\"giapee@mailpoof.com\\\";s:4:\\\"user\\\";O:15:\\\"App\\\\Models\\\\User\\\":28:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:3:{i:0;s:4:\\\"name\\\";i:1;s:5:\\\"email\\\";i:2;s:8:\\\"password\\\";}s:9:\\\"\\u0000*\\u0000hidden\\\";a:2:{i:0;s:8:\\\"password\\\";i:1;s:14:\\\"remember_token\\\";}s:8:\\\"\\u0000*\\u0000casts\\\";a:1:{s:17:\\\"email_verified_at\\\";s:8:\\\"datetime\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"users\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:19:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:5:\\\"mahan\\\";s:8:\\\"lastname\\\";N;s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";N;s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";N;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:18:\\\"rfukashi@gmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$MO1dUvucJrf5ZW6Mz8fwzOfLbe4nC3gvbdXNkujsZ6AbDj4j2xSWW\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"a3x5GDMTuwOP4W3MOeO80uurMdNPADX8iRgWSNv8kcLhr2XnCt7Gjr7OVxxY\\\";s:10:\\\"created_at\\\";s:19:\\\"2020-09-21 09:03:27\\\";s:10:\\\"updated_at\\\";s:19:\\\"2020-09-21 09:03:27\\\";s:7:\\\"isAdmin\\\";s:1:\\\"0\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:19:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:5:\\\"mahan\\\";s:8:\\\"lastname\\\";N;s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";N;s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";N;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:18:\\\"rfukashi@gmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$MO1dUvucJrf5ZW6Mz8fwzOfLbe4nC3gvbdXNkujsZ6AbDj4j2xSWW\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"a3x5GDMTuwOP4W3MOeO80uurMdNPADX8iRgWSNv8kcLhr2XnCt7Gjr7OVxxY\\\";s:10:\\\"created_at\\\";s:19:\\\"2020-09-21 09:03:27\\\";s:10:\\\"updated_at\\\";s:19:\\\"2020-09-21 09:03:27\\\";s:7:\\\"isAdmin\\\";s:1:\\\"0\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}s:20:\\\"\\u0000*\\u0000rememberTokenName\\\";s:14:\\\"remember_token\\\";}s:5:\\\"email\\\";s:18:\\\"rfukashi@gmail.com\\\";s:8:\\\"email_id\\\";i:12;}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2021-03-17 18:40:24.222475\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_TransportException: Connection could not be established with host smtp.gmail.com :stream_socket_client(): php_network_getaddresses: getaddrinfo failed: No such host is known.  in C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php:261\nStack trace:\n#0 [internal function]: Swift_Transport_StreamBuffer->{closure}(2, \'stream_socket_c...\', \'C:\\\\xampp\\\\htdocs...\', 264)\n#1 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php(264): stream_socket_client(\'tcp://smtp.gmai...\', 0, \'\', 30, 4, Resource id #745)\n#2 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php(58): Swift_Transport_StreamBuffer->establishSocketConnection()\n#3 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php(143): Swift_Transport_StreamBuffer->initialize(Array)\n#4 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php(65): Swift_Transport_AbstractSmtpTransport->start()\n#5 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(521): Swift_Mailer->send(Object(Swift_Message), Array)\n#6 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(288): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))\n#7 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(186): Illuminate\\Mail\\Mailer->send(\'email.usersEmai...\', Array, Object(Closure))\n#8 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#9 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(187): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#10 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#11 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\SendMailToUser))\n#12 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(121): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\SendMailToUser))\n#13 C:\\xampp\\htdocs\\Laravel-cources\\shop\\app\\Jobs\\SendEmailToUsersJob.php(40): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\SendMailToUser))\n#14 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendEmailToUsersJob->handle()\n#15 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#16 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#17 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#18 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#19 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#20 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#21 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#22 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#23 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(118): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendEmailToUsersJob), false)\n#24 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#25 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#26 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendEmailToUsersJob))\n#28 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#29 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#30 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#31 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#34 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#35 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#36 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#37 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#38 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#39 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#40 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#41 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(971): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(290): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(166): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\Laravel-cources\\shop\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2021-03-17 15:10:36'),
(2, '8a4e30bb-6371-4387-8a59-0878f785dda6', 'database', 'default', '{\"uuid\":\"8a4e30bb-6371-4387-8a59-0878f785dda6\",\"displayName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\SendEmailToUsersJob\\\":11:{s:34:\\\"\\u0000App\\\\Jobs\\\\SendEmailToUsersJob\\u0000data\\\";a:6:{s:7:\\\"subject\\\";s:10:\\\"gheli beli\\\";s:4:\\\"text\\\";s:115:\\\"<p style=\\\"text-align: right;\\\"><strong><em>sdf <span style=\\\"color: #e67e23;\\\">sdfdf <\\/span>sdfsdfds<\\/em><\\/strong><\\/p>\\\";s:7:\\\"replyTo\\\";s:19:\\\"giapee@mailpoof.com\\\";s:4:\\\"user\\\";O:15:\\\"App\\\\Models\\\\User\\\":28:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:3:{i:0;s:4:\\\"name\\\";i:1;s:5:\\\"email\\\";i:2;s:8:\\\"password\\\";}s:9:\\\"\\u0000*\\u0000hidden\\\";a:2:{i:0;s:8:\\\"password\\\";i:1;s:14:\\\"remember_token\\\";}s:8:\\\"\\u0000*\\u0000casts\\\";a:1:{s:17:\\\"email_verified_at\\\";s:8:\\\"datetime\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"users\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:19:{s:2:\\\"id\\\";i:10;s:4:\\\"name\\\";s:8:\\\"\\u0645\\u062d\\u0645\\u062f\\\";s:8:\\\"lastname\\\";s:8:\\\"\\u0622\\u0630\\u0631\\u06cc\\\";s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";s:8:\\\"03264984\\\";s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";i:24;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:22:\\\"fovoba9636@onzmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$.PG9.125lBlqobyP29KgmOYQeVEx4CsmbwDPrkRcxAfX7QZU\\/8gfu\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"8RaHAZ9MfJO5jpUWX32kSvaPcpkQfKEXwI3zZwGmhPPuGy9H38SyucAQVihL\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-02-10 09:50:19\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-02-10 09:50:19\\\";s:7:\\\"isAdmin\\\";s:1:\\\"1\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:19:{s:2:\\\"id\\\";i:10;s:4:\\\"name\\\";s:8:\\\"\\u0645\\u062d\\u0645\\u062f\\\";s:8:\\\"lastname\\\";s:8:\\\"\\u0622\\u0630\\u0631\\u06cc\\\";s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";s:8:\\\"03264984\\\";s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";i:24;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:22:\\\"fovoba9636@onzmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$.PG9.125lBlqobyP29KgmOYQeVEx4CsmbwDPrkRcxAfX7QZU\\/8gfu\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"8RaHAZ9MfJO5jpUWX32kSvaPcpkQfKEXwI3zZwGmhPPuGy9H38SyucAQVihL\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-02-10 09:50:19\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-02-10 09:50:19\\\";s:7:\\\"isAdmin\\\";s:1:\\\"1\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}s:20:\\\"\\u0000*\\u0000rememberTokenName\\\";s:14:\\\"remember_token\\\";}s:5:\\\"email\\\";s:22:\\\"fovoba9636@onzmail.com\\\";s:8:\\\"email_id\\\";i:12;}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2021-03-17 18:56:24.222475\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_TransportException: Expected response code 250 but got an empty response in C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php:448\nStack trace:\n#0 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php(345): Swift_Transport_AbstractSmtpTransport->assertResponseCode(\'\', Array)\n#1 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\EsmtpTransport.php(305): Swift_Transport_AbstractSmtpTransport->executeCommand(\'HELO [127.0.0.1...\', Array, Array, false, NULL)\n#2 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php(368): Swift_Transport_EsmtpTransport->executeCommand(\'HELO [127.0.0.1...\', Array)\n#3 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\EsmtpTransport.php(341): Swift_Transport_AbstractSmtpTransport->doHeloCommand()\n#4 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php(148): Swift_Transport_EsmtpTransport->doHeloCommand()\n#5 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php(65): Swift_Transport_AbstractSmtpTransport->start()\n#6 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(521): Swift_Mailer->send(Object(Swift_Message), Array)\n#7 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(288): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))\n#8 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(186): Illuminate\\Mail\\Mailer->send(\'email.usersEmai...\', Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(187): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\SendMailToUser))\n#13 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(121): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\SendMailToUser))\n#14 C:\\xampp\\htdocs\\Laravel-cources\\shop\\app\\Jobs\\SendEmailToUsersJob.php(40): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\SendMailToUser))\n#15 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendEmailToUsersJob->handle()\n#16 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#22 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#23 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(118): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendEmailToUsersJob), false)\n#25 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#26 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#27 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendEmailToUsersJob))\n#29 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#41 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(971): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(290): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(166): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\Laravel-cources\\shop\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 {main}', '2021-03-17 15:27:28'),
(3, '933ff860-f8e8-4001-8edb-7efadfc1fd14', 'database', 'default', '{\"uuid\":\"933ff860-f8e8-4001-8edb-7efadfc1fd14\",\"displayName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailToUsersJob\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\SendEmailToUsersJob\\\":11:{s:34:\\\"\\u0000App\\\\Jobs\\\\SendEmailToUsersJob\\u0000data\\\";a:6:{s:7:\\\"subject\\\";s:10:\\\"gheli beli\\\";s:4:\\\"text\\\";s:115:\\\"<p style=\\\"text-align: right;\\\"><strong><em>sdf <span style=\\\"color: #e67e23;\\\">sdfdf <\\/span>sdfsdfds<\\/em><\\/strong><\\/p>\\\";s:7:\\\"replyTo\\\";s:19:\\\"giapee@mailpoof.com\\\";s:4:\\\"user\\\";O:15:\\\"App\\\\Models\\\\User\\\":28:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:3:{i:0;s:4:\\\"name\\\";i:1;s:5:\\\"email\\\";i:2;s:8:\\\"password\\\";}s:9:\\\"\\u0000*\\u0000hidden\\\";a:2:{i:0;s:8:\\\"password\\\";i:1;s:14:\\\"remember_token\\\";}s:8:\\\"\\u0000*\\u0000casts\\\";a:1:{s:17:\\\"email_verified_at\\\";s:8:\\\"datetime\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"users\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:19:{s:2:\\\"id\\\";i:11;s:4:\\\"name\\\";s:12:\\\"\\u0645\\u0627\\u0632\\u06cc\\u0627\\u0631\\\";s:8:\\\"lastname\\\";s:14:\\\"\\u0642\\u0647\\u0631\\u0645\\u0627\\u0646\\u06cc\\\";s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";s:11:\\\"09914807848\\\";s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";i:20;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:22:\\\"mazyarmg7731@gmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$gkLYZK5qe8Y6T.QehNrhteWab1Lss7wnUOGNN2aeRK3tGYZdybQ62\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"nodttGCrnUCfOxKIStfHYvIp3o6yumpoc1mLRJX7YvaMkMZMmDDv6mQjK3LW\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-02-14 12:32:17\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-02-14 12:32:17\\\";s:7:\\\"isAdmin\\\";s:1:\\\"0\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:19:{s:2:\\\"id\\\";i:11;s:4:\\\"name\\\";s:12:\\\"\\u0645\\u0627\\u0632\\u06cc\\u0627\\u0631\\\";s:8:\\\"lastname\\\";s:14:\\\"\\u0642\\u0647\\u0631\\u0645\\u0627\\u0646\\u06cc\\\";s:13:\\\"national_code\\\";N;s:5:\\\"phone\\\";s:11:\\\"09914807848\\\";s:8:\\\"birthday\\\";N;s:11:\\\"bank_number\\\";N;s:11:\\\"province_id\\\";i:20;s:6:\\\"gender\\\";N;s:6:\\\"nation\\\";N;s:5:\\\"email\\\";s:22:\\\"mazyarmg7731@gmail.com\\\";s:17:\\\"email_verified_at\\\";N;s:8:\\\"password\\\";s:60:\\\"$2y$10$gkLYZK5qe8Y6T.QehNrhteWab1Lss7wnUOGNN2aeRK3tGYZdybQ62\\\";s:17:\\\"two_factor_secret\\\";N;s:25:\\\"two_factor_recovery_codes\\\";N;s:14:\\\"remember_token\\\";s:60:\\\"nodttGCrnUCfOxKIStfHYvIp3o6yumpoc1mLRJX7YvaMkMZMmDDv6mQjK3LW\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-02-14 12:32:17\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-02-14 12:32:17\\\";s:7:\\\"isAdmin\\\";s:1:\\\"0\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}s:20:\\\"\\u0000*\\u0000rememberTokenName\\\";s:14:\\\"remember_token\\\";}s:5:\\\"email\\\";s:22:\\\"mazyarmg7731@gmail.com\\\";s:8:\\\"email_id\\\";i:12;}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";O:13:\\\"Carbon\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2021-03-17 19:00:24.222475\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Swift_TransportException: Connection could not be established with host smtp.gmail.com :stream_socket_client(): php_network_getaddresses: getaddrinfo failed: No such host is known.  in C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php:261\nStack trace:\n#0 [internal function]: Swift_Transport_StreamBuffer->{closure}(2, \'stream_socket_c...\', \'C:\\\\xampp\\\\htdocs...\', 264)\n#1 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php(264): stream_socket_client(\'tcp://smtp.gmai...\', 0, \'\', 30, 4, Resource id #832)\n#2 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php(58): Swift_Transport_StreamBuffer->establishSocketConnection()\n#3 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php(143): Swift_Transport_StreamBuffer->initialize(Array)\n#4 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php(65): Swift_Transport_AbstractSmtpTransport->start()\n#5 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(521): Swift_Mailer->send(Object(Swift_Message), Array)\n#6 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(288): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))\n#7 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(186): Illuminate\\Mail\\Mailer->send(\'email.usersEmai...\', Array, Object(Closure))\n#8 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#9 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(187): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#10 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#11 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\SendMailToUser))\n#12 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(121): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\SendMailToUser))\n#13 C:\\xampp\\htdocs\\Laravel-cources\\shop\\app\\Jobs\\SendEmailToUsersJob.php(40): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\SendMailToUser))\n#14 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendEmailToUsersJob->handle()\n#15 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#16 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#17 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#18 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#19 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#20 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#21 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#22 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#23 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(118): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendEmailToUsersJob), false)\n#24 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#25 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailToUsersJob))\n#26 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendEmailToUsersJob))\n#28 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#29 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(406): Illuminate\\Queue\\Jobs\\Job->fire()\n#30 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(356): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#31 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(116): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(100): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#34 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#35 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#36 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#37 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#38 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#39 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#40 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Command\\Command.php(255): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#41 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(971): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(290): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\symfony\\console\\Application.php(166): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\Laravel-cources\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\Laravel-cources\\shop\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2021-03-17 15:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2020_10_02_194235_create_product_properties_table', 2),
(36, '2021_01_29_125539_create_product_property_relation_tbl', 3),
(37, '2021_01_29_190711_add_photo_path_to_product_tbl', 3),
(38, '2021_02_09_190030_change_address_tablee', 4),
(39, '2021_02_11_185428_create_baskets_table', 5),
(40, '2021_02_12_203607_add_is_admin_col_to_users_tbl', 6),
(42, '2021_02_16_182916_create_coupons_table', 7),
(43, '2021_02_17_075837_create_coupon__users_table', 8),
(44, '2021_02_24_074227_create_orders_table', 9),
(45, '2021_02_26_184238_create_payment_tbl', 10),
(46, '2021_03_01_201630_create_product__likes_table', 11),
(51, '2021_03_10_100851_create_emails_table', 12),
(52, '2021_03_10_124751_create_jobs_table', 12),
(53, '2021_03_10_125019_create_failed_jobs_table', 13),
(54, '2021_03_17_160520_create_email__users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(8, 718000, 10, '1', '2021-02-26 15:43:13', '2021-02-26 15:43:17'),
(9, 566000, 10, '0', '2021-02-26 15:44:31', '2021-02-26 15:44:31'),
(10, 566000, 10, '1', '2021-02-26 15:46:26', '2021-02-26 15:46:31'),
(11, 214000, 10, '1', '2021-02-26 15:51:13', '2021-02-26 15:51:17'),
(12, 325000, 10, '0', '2021-02-27 06:43:40', '2021-02-27 06:43:40'),
(13, 325000, 10, '0', '2021-02-27 06:44:38', '2021-02-27 06:44:38'),
(14, 175000, 10, '0', '2021-02-27 06:58:49', '2021-02-27 06:58:49'),
(15, 175000, 10, '1', '2021-02-27 06:59:18', '2021-02-27 06:59:23'),
(16, 743000, 9, '0', '2021-02-27 07:03:24', '2021-02-27 07:03:24'),
(17, 743000, 9, '1', '2021-02-27 07:03:33', '2021-02-27 07:03:36'),
(18, 265000, 10, '0', '2021-02-27 08:36:31', '2021-02-27 08:36:31'),
(19, 265000, 10, '0', '2021-02-27 08:36:45', '2021-02-27 08:36:45'),
(20, 265000, 10, '1', '2021-02-27 08:36:59', '2021-02-27 08:37:04'),
(21, 200000, 4, '0', '2021-03-02 16:05:21', '2021-03-02 16:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `order__products`
--

CREATE TABLE `order__products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order__products`
--

INSERT INTO `order__products` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(11, 8, 23, 2, '2021-02-26 15:43:13', '2021-02-26 15:43:13'),
(12, 8, 26, 1, '2021-02-26 15:43:13', '2021-02-26 15:43:13'),
(13, 9, 25, 7, '2021-02-26 15:44:31', '2021-02-26 15:44:31'),
(14, 10, 25, 7, '2021-02-26 15:46:26', '2021-02-26 15:46:26'),
(15, 11, 25, 3, '2021-02-26 15:51:13', '2021-02-26 15:51:13'),
(16, 12, 24, 5, '2021-02-27 06:43:40', '2021-02-27 06:43:40'),
(17, 13, 24, 5, '2021-02-27 06:44:38', '2021-02-27 06:44:38'),
(18, 14, 24, 3, '2021-02-27 06:58:49', '2021-02-27 06:58:49'),
(19, 15, 24, 3, '2021-02-27 06:59:18', '2021-02-27 06:59:18'),
(20, 16, 24, 1, '2021-02-27 07:03:24', '2021-02-27 07:03:24'),
(21, 16, 21, 2, '2021-02-27 07:03:24', '2021-02-27 07:03:24'),
(22, 16, 25, 1, '2021-02-27 07:03:24', '2021-02-27 07:03:24'),
(23, 17, 24, 1, '2021-02-27 07:03:33', '2021-02-27 07:03:33'),
(24, 17, 21, 2, '2021-02-27 07:03:33', '2021-02-27 07:03:33'),
(25, 17, 25, 1, '2021-02-27 07:03:33', '2021-02-27 07:03:33'),
(26, 18, 21, 1, '2021-02-27 08:36:31', '2021-02-27 08:36:31'),
(27, 19, 21, 1, '2021-02-27 08:36:45', '2021-02-27 08:36:45'),
(28, 20, 21, 1, '2021-02-27 08:36:59', '2021-02-27 08:36:59'),
(29, 21, 23, 4, '2021-03-02 16:05:21', '2021-03-02 16:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authority` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RefId` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `authority`, `status`, `RefId`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '000000000000000000000000000000385595', 'OK', 12345678, 8, '2021-02-26 15:43:17', '2021-02-26 15:43:17'),
(2, '000000000000000000000000000000385604', 'OK', 12345678, 10, '2021-02-26 15:46:31', '2021-02-26 15:46:31'),
(3, '000000000000000000000000000000385609', 'OK', 12345678, 11, '2021-02-26 15:51:17', '2021-02-26 15:51:17'),
(4, '000000000000000000000000000000386690', 'OK', 12345678, 15, '2021-02-27 06:59:23', '2021-02-27 06:59:23'),
(5, '000000000000000000000000000000386730', 'OK', 12345678, 17, '2021-02-27 07:03:36', '2021-02-27 07:03:36'),
(6, '000000000000000000000000000000387240', 'OK', 12345678, 20, '2021-02-27 08:37:04', '2021-02-27 08:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount_price` double(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `sku`, `slug`, `status`, `price`, `discount_price`, `description`, `brand_id`, `cat_id`, `created_at`, `updated_at`, `photo_path`) VALUES
(21, 'پولیور', 'sdc', 'sdc', '0', 350000.00, 35000.00, 'بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا بسیار زیبا', 19, 1, '2021-02-11 15:34:10', '2021-02-12 07:11:42', '16130702501612989731index.jpg'),
(23, 'مانتو زنانه', 'uniq123', 'qwer', '1', 58000.00, 8000.00, 'مسینئزسیکرنئثقمرنثق', 19, 2, '2021-02-11 15:36:07', '2021-02-12 06:20:31', '16130703671612041937images.jpg'),
(24, 'تی شرت', 'سیزیسز', '12we', '1', 80000.00, 5000.00, 'یرسیرزسیر', 19, 1, '2021-02-11 15:36:57', '2021-02-12 06:21:19', '16130704171612207119تیشرت-مردانه-Engineered-Life-T-2.0-–-مشکی-pic-1-600x600.jpg'),
(25, 'شلوار زنانه', 's2hense', 'qw3r', '0', 113000.00, 25000.00, 'قبلقلقثلثقل', 14, 2, '2021-02-11 15:38:17', '2021-02-11 15:38:17', '16130704971612700994قرمز2-2.jpg'),
(26, 'کفش مردانه چرم', 'sdc213', 'wefcwe', '0', 900000.00, 232000.00, 'توضیحات مربوط به کفش چرم', 14, 1, '2021-02-19 12:10:43', '2021-02-19 12:10:43', '1613749243مدل-کفش-مردانه-نیمه-.jpg'),
(27, 'vsdv', 'sdvsdv', 'sdvsdv', '0', 23.00, 12.00, 'sdvdsvdsv', 2, 1, '2021-02-19 14:54:44', '2021-02-19 14:54:44', '1613759084Capture.PNG'),
(28, 'gvsrv', 'svs', 'wevwe', '0', 123.00, 12.00, 'dfcsdvewvwe', 14, 1, '2021-02-19 14:55:03', '2021-02-19 14:55:03', '1613759103Capture.PNG'),
(30, 'vsdvsd', 'rtyuhbv', 'sdvsdvdsv', '0', 212.00, 12.00, 'wefwefewfwef', 17, 1, '2021-02-19 14:55:39', '2021-02-19 14:55:39', '1613759139Capture.PNG'),
(31, 'dfvfv', 'yt44', 'tbgs', '1', 3456.00, 12.00, 'erververv', 19, 1, '2021-02-19 15:16:44', '2021-02-22 07:56:51', '1613760403مدل-کفش-مردانه-نیمه-.jpg'),
(32, 'zanane', 'dcdc', 'wcewc', '0', 2123.00, 12.00, 'wecwecewcewcewcewc', 2, 2, '2021-02-19 15:25:26', '2021-02-19 15:25:26', '1613760926مدل-کفش-مردانه-نیمه-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_prop`
--

CREATE TABLE `product_prop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_prop`
--

INSERT INTO `product_prop` (`id`, `title`, `property_id`, `product_id`, `created_at`, `updated_at`) VALUES
(7, 'نخ', 15, 21, '2021-02-11 15:34:11', '2021-02-11 15:34:11'),
(8, 'سبز', 16, 21, '2021-02-11 15:34:11', '2021-02-11 15:34:11'),
(9, 'ایران', 20, 21, '2021-02-11 15:34:11', '2021-02-11 15:34:11'),
(10, 'خز', 15, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(11, 'صورتی', 16, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(12, 'ترکیه', 20, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(13, 'عالی', 21, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(14, 'تمام نخ', 22, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(15, 'چهارخانه ای', 23, 23, '2021-02-11 15:36:07', '2021-02-11 15:36:07'),
(16, 'نخ', 15, 24, '2021-02-11 15:36:57', '2021-02-11 15:36:57'),
(17, 'سیاه', 16, 24, '2021-02-11 15:36:57', '2021-02-11 15:36:57'),
(18, 'ایران', 20, 24, '2021-02-11 15:36:57', '2021-02-11 15:36:57'),
(19, 'نخ-پلاستیک', 15, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(20, 'قرمز', 16, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(21, 'ترکیه', 20, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(22, 'عالی', 21, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(23, 'نخ', 22, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(24, 'چهارخانه ای', 23, 25, '2021-02-11 15:38:17', '2021-02-11 15:38:17'),
(25, 'چرم', 15, 26, '2021-02-19 12:10:43', '2021-02-19 12:10:43'),
(26, 'چرم', 16, 26, '2021-02-19 12:10:43', '2021-02-19 12:10:43'),
(27, 'ایران', 20, 26, '2021-02-19 12:10:43', '2021-02-19 12:10:43'),
(28, 'sdv', 15, 27, '2021-02-19 14:54:44', '2021-02-19 14:54:44'),
(29, 'sdv', 16, 27, '2021-02-19 14:54:44', '2021-02-19 14:54:44'),
(30, 'sdv', 20, 27, '2021-02-19 14:54:44', '2021-02-19 14:54:44'),
(31, 'we', 15, 28, '2021-02-19 14:55:03', '2021-02-19 14:55:03'),
(32, 'wef', 16, 28, '2021-02-19 14:55:03', '2021-02-19 14:55:03'),
(33, 'wef', 20, 28, '2021-02-19 14:55:03', '2021-02-19 14:55:03'),
(34, 'efw', 15, 30, '2021-02-19 14:55:39', '2021-02-19 14:55:39'),
(35, 'sef', 16, 30, '2021-02-19 14:55:39', '2021-02-19 14:55:39'),
(36, 'wef', 20, 30, '2021-02-19 14:55:39', '2021-02-19 14:55:39'),
(37, 'نخ', 15, 31, '2021-02-19 15:16:44', '2021-02-22 07:56:51'),
(38, 'r', 16, 31, '2021-02-19 15:16:44', '2021-02-19 15:16:44'),
(39, 'e', 20, 31, '2021-02-19 15:16:44', '2021-02-19 15:16:44'),
(40, 'wd', 15, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26'),
(41, 'wdc', 20, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26'),
(42, 'wc', 23, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26'),
(43, 'wc', 22, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26'),
(44, 'wec', 16, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26'),
(45, 'wc', 21, 32, '2021-02-19 15:25:26', '2021-02-19 15:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_properties`
--

CREATE TABLE `product_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_properties`
--

INSERT INTO `product_properties` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(15, 'جنس', 'تنها', '2020-10-03 09:29:49', '2020-10-03 09:29:49'),
(16, 'رنگ', 'تنها', '2020-10-03 09:29:53', '2020-10-03 09:29:53'),
(20, 'کشور سازنده', 'چندتایی', '2021-01-26 12:44:35', '2021-01-26 12:44:35'),
(21, 'کیفیت', 'تنها', '2021-01-26 14:01:08', '2021-01-26 14:01:08'),
(22, 'جنس پارچه', 'تنها', '2021-01-29 08:37:14', '2021-01-29 08:37:14'),
(23, 'طرح پارچه', 'تنها', '2021-02-02 09:05:09', '2021-02-02 09:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `product__likes`
--

CREATE TABLE `product__likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `like` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product__likes`
--

INSERT INTO `product__likes` (`id`, `user_id`, `product_id`, `like`, `created_at`, `updated_at`) VALUES
(1, 1, 24, '1', NULL, NULL),
(2, 4, 24, '0', NULL, '2021-03-01 18:02:20'),
(3, 10, 24, '0', NULL, '2021-03-01 18:01:34'),
(4, 9, 24, '0', '2021-03-01 17:36:30', '2021-03-01 17:59:54'),
(5, 9, 25, '1', '2021-03-01 18:00:11', '2021-03-01 18:00:19'),
(6, 10, 25, '1', '2021-03-01 18:00:53', '2021-03-01 18:01:06'),
(7, 4, 25, '1', '2021-03-01 18:02:08', '2021-03-01 18:02:08'),
(8, 4, 23, '0', '2021-03-01 18:02:53', '2021-03-01 18:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `property_values`
--

CREATE TABLE `property_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_values`
--

INSERT INTO `property_values` (`id`, `name`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'نخ', 15, '2020-08-26 09:06:26', '2020-08-25 09:06:26'),
(2, 'پلاستیک', 15, '2020-10-06 14:20:01', '2020-08-25 09:06:26'),
(3, 'قرمز', 16, '2020-10-21 14:20:39', '2020-08-25 09:06:26'),
(4, 'پلاستیک سخت', 15, '2020-10-05 05:19:36', '2020-10-05 05:19:36'),
(6, 'نخ', 15, '2020-10-05 05:41:34', '2020-10-05 05:41:34'),
(8, 'فرانسه', 20, '2021-01-26 12:45:48', '2021-01-26 12:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'آذربايجان شرقي'),
(2, 'آذربايجان غربي'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال بختياري'),
(10, 'خراسان جنوبي'),
(11, 'خراسان رضوي'),
(12, 'خراسان شمالي'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سيستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'كردستان'),
(21, 'كرمان'),
(22, 'كرمانشاه'),
(23, 'كهكيلويه و بويراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مركزي'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد');

-- --------------------------------------------------------

--
-- Table structure for table `pro_cats`
--

CREATE TABLE `pro_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_cats`
--

INSERT INTO `pro_cats` (`id`, `name`, `meta_description`, `meta_title`, `meta_keywords`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'لباس مردانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:00', '2020-10-04 10:43:00'),
(2, 'لباس زنانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:04', '2020-10-04 10:43:04'),
(3, 'لباس بچگانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-04 10:43:08', '2020-10-04 10:43:08'),
(4, 'لباس زمستانی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 1, '2020-10-04 10:43:20', '2020-10-04 10:43:20'),
(5, 'دستکش', '$request->meta_description', '$request->meta_description', '$request->meta_description', 4, '2020-10-04 10:43:36', '2020-10-04 10:43:36'),
(6, 'دستکش نخی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 5, '2020-10-04 10:43:52', '2020-10-04 10:43:52'),
(7, 'کاپشن', '$request->meta_description', '$request->meta_description', '$request->meta_description', 4, '2020-10-04 10:44:10', '2020-10-04 10:44:10'),
(8, 'الکترونیکی', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-10-21 09:20:18', '2020-10-21 09:20:18'),
(9, 'لب تاپ', '$request->meta_description', '$request->meta_description', '$request->meta_description', 8, '2020-10-21 09:20:48', '2020-10-21 09:20:48'),
(46, 'لباس زنونه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-09-28 05:28:23', '2020-09-30 16:07:43'),
(47, 'لباس بچگانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-09-28 05:28:26', '2020-09-28 05:28:26'),
(49, 'لباس مردانه', '$request->meta_description', '$request->meta_description', '$request->meta_description', 53, '2020-09-29 14:57:18', '2020-09-30 08:40:06'),
(50, 'شلوار ها', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-09-29 16:56:12', '2020-09-30 16:08:34'),
(51, 'شلوار ترکیه ای', '$request->meta_description', '$request->meta_description', '$request->meta_description', 50, '2020-09-29 16:58:42', '2020-09-30 08:38:58'),
(53, 'لباس ورزشی', '$request->meta_description', '$request->meta_description', '$request->meta_description', NULL, '2020-09-30 08:39:51', '2020-09-30 08:39:51'),
(54, 'شلوار های ایرانی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 50, '2020-09-30 13:15:08', '2020-09-30 13:15:08'),
(55, 'دستکش', '$request->meta_description', '$request->meta_description', '$request->meta_description', 47, '2021-01-26 12:25:04', '2021-01-26 12:25:04'),
(56, 'کفش', '$request->meta_description', '$request->meta_description', '$request->meta_description', 1, '2021-02-04 16:42:56', '2021-02-04 16:42:56'),
(57, 'دستکش اصل', '$request->meta_description', '$request->meta_description', '$request->meta_description', 5, '2021-02-20 11:33:18', '2021-02-20 11:33:18'),
(58, 'number 1', '$request->meta_description', '$request->meta_description', '$request->meta_description', 6, '2021-02-20 11:44:01', '2021-02-20 11:44:01'),
(59, 'شلوار', '$request->meta_description', '$request->meta_description', '$request->meta_description', 1, '2021-02-20 12:29:27', '2021-02-20 12:29:27'),
(60, 'کاپشن آمریکایی', '$request->meta_description', '$request->meta_description', '$request->meta_description', 7, '2021-02-20 12:52:31', '2021-02-20 12:52:31'),
(61, 'شلوار جین', '$request->meta_description', '$request->meta_description', '$request->meta_description', 49, '2021-02-20 12:53:50', '2021-02-20 12:53:50'),
(62, 'number 1', '$request->meta_description', '$request->meta_description', '$request->meta_description', 56, '2021-02-20 12:54:36', '2021-02-20 12:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` bigint(20) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL,
  `gender` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `national_code`, `phone`, `birthday`, `bank_number`, `province_id`, `gender`, `nation`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'mahan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rfukashi@gmail.com', NULL, '$2y$10$MO1dUvucJrf5ZW6Mz8fwzOfLbe4nC3gvbdXNkujsZ6AbDj4j2xSWW', NULL, NULL, 'a3x5GDMTuwOP4W3MOeO80uurMdNPADX8iRgWSNv8kcLhr2XnCt7Gjr7OVxxY', '2020-09-21 05:33:27', '2020-09-21 05:33:27', '0'),
(2, 'tina', 'fatemi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fixegaw400@566dh.com', NULL, '$2y$10$AXqmavvol/htFTmTXgzhcOZxq3aB2ZbBrTXS68nLThbGCHboXGGVS', NULL, NULL, NULL, '2020-09-23 08:24:31', '2020-09-23 08:24:31', '0'),
(4, 'admirinkazi', 'fukashi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fabiv83321@grokleft.com', NULL, '$2y$10$.QoiZAnZLHZ4vo0KMSeqzeqzwDdSTZbtm6bDU2UGc0QqtJoCEec1S', NULL, NULL, 'PBcPcdsXiCVfYcfIRivcBTCH3SUDKC7EttumlzF0OsRL9zIApRva4iCMLgXs', '2021-01-26 08:23:30', '2021-01-26 08:23:30', '0'),
(9, 'مازیار', 'قهرمانی', NULL, '09914807848', NULL, NULL, NULL, NULL, NULL, 'mazyarghahremani@gmail.com', NULL, '$2y$10$hR2CHdgA6qlXKGfAYXbrKeTrMQPPMZdbXOCJ3BHLG2f8TG5OR1jiq', NULL, NULL, '8QswtAhsQwdGAFxlO7P0YeUz5nwr9ZibG2kTvOII0rMwBMX20AfY3uYCSd3x', '2021-02-09 15:48:46', '2021-02-09 15:48:46', '0'),
(10, 'محمد', 'آذری', NULL, '03264984', NULL, NULL, 24, NULL, NULL, 'fovoba9636@onzmail.com', NULL, '$2y$10$.PG9.125lBlqobyP29KgmOYQeVEx4CsmbwDPrkRcxAfX7QZU/8gfu', NULL, NULL, '8RaHAZ9MfJO5jpUWX32kSvaPcpkQfKEXwI3zZwGmhPPuGy9H38SyucAQVihL', '2021-02-10 06:20:19', '2021-02-10 06:20:19', '1'),
(11, 'مازیار', 'قهرمانی', NULL, '09914807848', NULL, NULL, 20, NULL, NULL, 'mazyarmg7731@gmail.com', NULL, '$2y$10$gkLYZK5qe8Y6T.QehNrhteWab1Lss7wnUOGNN2aeRK3tGYZdybQ62', NULL, NULL, 'nodttGCrnUCfOxKIStfHYvIp3o6yumpoc1mLRJX7YvaMkMZMmDDv6mQjK3LW', '2021-02-14 09:02:17', '2021-02-14 09:02:17', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`) USING BTREE,
  ADD KEY `addresses_city_id_foreign` (`city_id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baskets_user_id_foreign` (`user_id`),
  ADD KEY `baskets_product_id_foreign` (`product_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `cat_property`
--
ALTER TABLE `cat_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_property_category_id_foreign` (`category_id`),
  ADD KEY `cat_property_property_id_foreign` (`property_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_province_id_foreign` (`province_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `coupon__users`
--
ALTER TABLE `coupon__users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupon__users_user_id_foreign` (`user_id`),
  ADD KEY `coupon__users_coupon_id_foreign` (`coupon_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email__users`
--
ALTER TABLE `email__users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email__users_email_id_foreign` (`email_id`),
  ADD KEY `email__users_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order__products`
--
ALTER TABLE `order__products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order__products_order_id_foreign` (`order_id`),
  ADD KEY `order__products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_order_id_foreign` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `product_prop`
--
ALTER TABLE `product_prop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_prop_property_id_foreign` (`property_id`),
  ADD KEY `product_prop_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_properties`
--
ALTER TABLE `product_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product__likes`
--
ALTER TABLE `product__likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product__likes_user_id_foreign` (`user_id`),
  ADD KEY `product__likes_product_id_foreign` (`product_id`);

--
-- Indexes for table `property_values`
--
ALTER TABLE `property_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_values_property_id_foreign` (`property_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_cats`
--
ALTER TABLE `pro_cats`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cat_property`
--
ALTER TABLE `cat_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupon__users`
--
ALTER TABLE `coupon__users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `email__users`
--
ALTER TABLE `email__users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order__products`
--
ALTER TABLE `order__products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_prop`
--
ALTER TABLE `product_prop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_properties`
--
ALTER TABLE `product_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product__likes`
--
ALTER TABLE `product__likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_values`
--
ALTER TABLE `property_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pro_cats`
--
ALTER TABLE `pro_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `baskets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon__users`
--
ALTER TABLE `coupon__users`
  ADD CONSTRAINT `coupon__users_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon__users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `email__users`
--
ALTER TABLE `email__users`
  ADD CONSTRAINT `email__users_email_id_foreign` FOREIGN KEY (`email_id`) REFERENCES `emails` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `email__users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order__products`
--
ALTER TABLE `order__products`
  ADD CONSTRAINT `order__products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order__products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `pro_cats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_prop`
--
ALTER TABLE `product_prop`
  ADD CONSTRAINT `product_prop_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_prop_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `product_properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product__likes`
--
ALTER TABLE `product__likes`
  ADD CONSTRAINT `product__likes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product__likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
