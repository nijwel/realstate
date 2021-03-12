-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 11:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `designation`, `image`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'admin@gmail.com', 'Super Admin', 'public/backend/images/admin_profile/6022b34155f5b.jpg', '01911970156', NULL, '$2y$10$DEOOhpkJOfIzUbxfzfWQMOxexQ9i6ensVHTGtvewYpdHvM3O4D5X6', NULL, '2021-01-24 09:21:31', '2021-02-09 10:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `title_slug`, `image`, `details`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', 'FIND YOUR DREAM HOME', 'FIND-YOUR-DREAM-HOME', 'public/backend/images/blog/600c26d66853b.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur lorem eget nunc vestibulum consequat. Phasellus semper lacus tortor, eu sagittis tortor blandit in. Fusce urna erat, pretium nec nulla ac, viverra ultricies tellus. Morbi leo mi, sagittis in sapien ac, auctor posuere ante. Nunc lacinia rhoncus elit, ac consequat magna consectetur sed. Nam euismod sapien augue, at malesuada risus fermentum a. Ut nec scelerisque nulla, quis euismod nisl. Suspendisse potenti. Vestibulum mollis vitae velit sit amet posuere. Nulla non felis eu urna molestie mattis.<br><br>Nam ut sodales enim. Sed augue massa, sagittis et ullamcorper ut, eleifend sit amet lorem. Ut a ante porta, auctor eros maximus, pulvinar sem.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi velit, vestibulum eu auctor eget, dictum at lacus. Praesent quis volutpat mauris. Nam suscipit vestibulum sem quis varius. Curabitur vulputate, ante a convallis congue, nisi tortor malesuada ex, sit amet semper nisi nunc porttitor augue. Nam eu mattis ligula. Integer congue sodales odio, tempor laoreet eros accumsan ac. Integer sagittis lacinia nibh, sed pulvinar est. Vivamus augue nunc, ultrices quis orci ac, vestibulum pellentesque ligula. Nam imperdiet est justo, eget sollicitudin augue elementum eget. Aenean nec diam eu sapien semper egestas. Suspendisse eu vehicula neque, eget vestibulum enim. Proin accumsan mi eget purus dictum, a aliquet felis pulvinar.<br><br>Ut viverra elit mauris, sit amet congue nisi lacinia nec. Curabitur semper, mauris a pellentesque scelerisque, nulla sapien condimentum leo, nec imperdiet ipsum lorem eu nibh. Nulla accumsan, ipsum ut consequat auctor, lacus ipsum rhoncus sem, non maximus nunc purus ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus facilisis molestie tortor sit amet consectetur. Ut auctor massa venenatis, vestibulum ex eu, ornare tortor. Fusce vitae nunc accumsan, sodales nibh ac, feugiat ligula. In bibendum in urna eu porta. Aliquam consectetur, leo sed tempor gravida, felis urna elementum dolor, et dictum urna nibh eu orci. Donec risus purus, tincidunt porta dui at, dignissim porta ex. Curabitur sed ipsum quam. Nam sollicitudin sapien eros, vitae accumsan odio elementum sed. Vivamus iaculis urna non massa sollicitudin pharetra. Integer nec porta massa, placerat semper est. Nunc urna lectus, porta vitae sagittis consectetur, fringilla ut urna. Praesent dictum arcu sem, et bibendum nunc maximus ac.<br><br></p><p></p><p></p><blockquote><p></p><p></p><p></p><ul><li>Fusce pretium ipsum quis enim suscipit</li><li>Morbi euismod at nisl quis tincidunt</li><li>Donec at dolor nec enim varius elementum</li><li>Praesent augue ipsum rutrum at massa</li><li>Suspendisse feugiat metus eget leo tincidunt</li><li>Nunc tincidunt faucibus porttitor</li><li>Nullam molestie tempor quam quis tincidunt</li></ul><p></p><p></p><p></p></blockquote><p></p><p></p><ul><li><u></u></li></ul><p></p>', 'Jan 30 2021', '2021-01-23 07:38:30', '2021-01-30 03:30:25'),
(2, '2', 'FIND YOUR DREAM HOME', 'FIND-YOUR-DREAM-HOME', 'public/backend/images/blog/600c2c0db5038.jpg', '<p>\r\n\r\n<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\n<br></p>', 'Jan 23 2021', '2021-01-23 08:00:45', '2021-01-23 08:00:45'),
(3, '1', 'Home', 'Home', 'public/backend/images/blog/600c60dedc156.jpg', '<p>eyeyeyeyeyyeye</p>', 'Jan 23 2021', '2021-01-23 11:46:06', '2021-01-23 11:46:06'),
(4, '3', 'Family House', 'Family-House', 'public/backend/images/blog/601bde19971c6.jpg', '<p>zzvzvzvzvzvzvvzvzvzvv</p>', 'Feb 04 2021', '2021-02-04 05:44:25', '2021-02-04 05:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Apartement', 'Apartement', '2021-01-23 07:36:03', '2021-01-23 07:36:03'),
(2, 'Villa', 'Villa', '2021-01-23 07:36:15', '2021-01-23 07:36:15'),
(3, 'Family House', 'Family-House', '2021-01-23 07:36:26', '2021-01-23 07:36:26'),
(4, 'Modern Villa', 'Modern-Villa', '2021-01-23 07:36:39', '2021-01-23 07:36:39'),
(5, 'Town House', 'Town-House', '2021-01-23 07:36:51', '2021-01-23 07:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Commercial', '2021-01-23 05:52:54', '2021-01-23 05:52:54'),
(2, 'Residential', '2021-01-23 05:53:13', '2021-01-23 05:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `clints`
--

CREATE TABLE `clints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clints`
--

INSERT INTO `clints` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'San Francisco', 'public/backend/images/clint/600c2021447a9.jpg', 'http://', '2021-01-23 07:09:53', '2021-01-23 07:09:53'),
(2, 'San Francisco', 'public/backend/images/clint/600c20356c455.jpg', 'http://', '2021-01-23 07:10:13', '2021-01-23 07:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(9999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `address`, `email`, `mobile`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka, Bangladesh', 'contact@realestate.com', '+970123456789', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"330\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&amp;height=330&amp;hl=en&amp;q=Bangladesh%20bank%20Head%20Office%20motijheel+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe></div>', NULL, '2021-01-30 12:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`id`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '2021 Real Estate Ltd.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `name_slug`, `designation`, `phone`, `email`, `address`, `image`, `details`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'Nazrul-Islam', 'Director', '01001100100', 'director1@realestate.com', 'Dhaka, Bangladesh', 'public/backend/images/director/600c1e42cc51d.jpg', '<p>\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n<br></p>\"', NULL, NULL, NULL, '2021-01-23 07:01:54', '2021-01-23 07:03:28'),
(2, 'Nazrul Islam', 'Nazrul-Islam', 'Director', '01001100101', 'director2@realestate.com', 'Dhaka, Bangladesh', 'public/backend/images/director/600c1e8d785ea.jpg', '<p>\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n<br></p>', NULL, NULL, NULL, '2021-01-23 07:03:09', '2021-01-23 07:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `dropzones`
--

CREATE TABLE `dropzones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropzones`
--

INSERT INTO `dropzones` (`id`, `images`, `created_at`, `updated_at`) VALUES
(1, 'public/images/1612982492598client2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fb_pages`
--

CREATE TABLE `fb_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fb_pages`
--

INSERT INTO `fb_pages` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Kaktarua44', 'http://www.facebook.com/kaktarua44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(62, 'admin@gmail.com', 'Nazrul', 'fafasfasasfasf', '2021-02-13 08:37:55', '2021-02-13 08:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `top_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `top_logo`, `footer_logo`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/images/logo/600c1458a5615.png', 'public/backend/images/logo/600c14623979f.png', NULL, '2021-01-23 06:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2020_12_07_072503_create_profiles_table', 3),
(6, '2020_12_07_113109_create_experiences_table', 4),
(7, '2020_12_07_163236_create_educations_table', 5),
(8, '2020_12_07_190153_create_skills_table', 6),
(10, '2020_12_08_061700_create_products_table', 8),
(11, '2020_12_09_142735_create_recommends_table', 9),
(12, '2020_12_09_143453_create_messeges_table', 9),
(29, '2021_01_10_081350_create_service_types_table', 24),
(30, '2021_01_10_084020_create_servicetypes_table', 25),
(33, '2021_01_11_090649_create_tests_table', 28),
(36, '2021_01_17_081737_create_files_table', 30),
(62, '2014_10_12_000000_create_users_table', 31),
(63, '2014_10_12_100000_create_password_resets_table', 31),
(64, '2019_08_19_000000_create_failed_jobs_table', 31),
(65, '2020_11_21_200034_create_admins_table', 31),
(66, '2020_12_08_053902_create_categories_table', 31),
(67, '2020_12_09_193241_create_seos_table', 31),
(68, '2021_01_03_194100_create_subcategories_table', 31),
(69, '2021_01_03_210301_create_sliders_table', 31),
(70, '2021_01_03_223400_create_socials_table', 31),
(71, '2021_01_04_082730_create_popular_places_table', 31),
(72, '2021_01_04_114627_create_contact_infos_table', 31),
(73, '2021_01_04_114656_create_logos_table', 31),
(74, '2021_01_04_180603_create_blog_categories_table', 31),
(75, '2021_01_04_180805_create_blogs_table', 31),
(76, '2021_01_06_171322_create_testimonials_table', 31),
(77, '2021_01_06_212807_create_messeges_table', 31),
(78, '2021_01_07_125908_create_teams_table', 31),
(79, '2021_01_09_073512_create_stories_table', 31),
(80, '2021_01_09_113344_create_mission_vissions_table', 31),
(81, '2021_01_09_162353_create_directors_table', 31),
(82, '2021_01_09_173505_create_clints_table', 31),
(83, '2021_01_10_092213_create_service_categories_table', 31),
(84, '2021_01_10_093708_create_service_table', 31),
(85, '2021_01_15_210031_create_fb_pages_table', 31),
(86, '2021_01_16_132710_create_properties_table', 31),
(87, '2021_01_23_175252_create_twak_tos_table', 32),
(88, '2021_01_26_170019_create_copyrights_table', 33),
(89, '2021_02_04_093428_create_places_table', 34),
(90, '2021_02_06_225501_create_proposals_table', 35),
(91, '2021_02_07_195857_create_inboxes_table', 36),
(92, '2021_02_10_143855_create_dropzones_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vissions`
--

CREATE TABLE `mission_vissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_vissions`
--

INSERT INTO `mission_vissions` (`id`, `title_1`, `image_1`, `details_1`, `title_2`, `image_2`, `details_2`, `created_at`, `updated_at`) VALUES
(1, 'Mission', 'public/backend/images/mission_vission/600c1c4d70bb2.jpg', 'For Our Clients: To offer a global touch, maintaining Bangladeshi culture in living and work places, with utmost uncompromising service to our clients and value for money.\r\nFor Our Investors: To ensure a smooth upward-reasonable trend of return on investment.\r\nFor Our Employees: To give employees a feeling of satisfaction by maximizing their potentials and providing means for their personal well-being and career development.', 'Vission', 'public/backend/images/mission_vission/600c1c4d70bbf.jpg', 'For Our Clients: To offer a global touch, maintaining Bangladeshi culture in living and work places, with utmost uncompromising service to our clients and value for money.\r\nFor Our Investors: To ensure a smooth upward-reasonable trend of return on investment.\r\nFor Our Employees: To give employees a feeling of satisfaction by maximizing their potentials and providing means for their personal well-being and career development.', NULL, '2021-01-23 06:53:33');

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
-- Table structure for table `popular_places`
--

CREATE TABLE `popular_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `popular_place` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_places`
--

INSERT INTO `popular_places` (`id`, `image`, `name`, `slug`, `status`, `popular_place`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/images/popular_place/600c0f7ab7938.jpg', 'San Francisco', 'San-Francisco', 1, 1, '2021-01-23 05:58:50', '2021-02-09 10:59:06'),
(2, 'public/backend/images/popular_place/600c0f8fe544a.jpg', 'Australia', 'Australia', 1, 1, '2021-01-23 05:59:12', '2021-02-09 10:59:12'),
(3, 'public/backend/images/popular_place/600c0faeed7bc.jpg', 'California', 'California', 1, 1, '2021-01-23 05:59:43', '2021-02-09 11:04:40'),
(4, 'public/backend/images/popular_place/600c0fcd52af3.jpg', 'Dubai', 'Dubai', 1, 1, '2021-01-23 06:00:13', '2021-02-09 11:09:35'),
(5, 'public/backend/images/popular_place/600c0fe918516.jpg', 'Miami', 'Miami', 1, 1, '2021-01-23 06:00:41', '2021-02-09 11:04:46'),
(6, 'public/backend/images/popular_place/600c10107cdbd.jpg', 'New York', 'New-York', 1, 1, '2021-01-23 06:01:20', '2021-02-09 11:04:37'),
(7, 'public/backend/images/popular_place/601bbcd16bd15.jpg', 'Dhaka', 'Dhaka', 1, 1, '2021-02-04 03:22:25', '2021-02-09 10:59:19'),
(8, 'public/backend/images/popular_place/6030258ab0403.jpg', 'Canada', 'Canada', 1, 1, '2021-02-19 14:54:35', '2021-02-19 14:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_id` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `business_type` int(11) NOT NULL,
  `front_page` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featurs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(9999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_plan` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `title_slug`, `location_id`, `size_id`, `category_id`, `type_id`, `business_type`, `front_page`, `image`, `description`, `details`, `featurs`, `images`, `floor_plan`, `video_link`, `map`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FIND YOUR DREAM HOME j', 'FIND-YOUR-DREAM-HOME-j', '6', '2', 2, 1, 0, 1, 'public/backend/images/property/6011375404a1c.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><div><ul><li>Property ID :B182</li><li>Price :$99,000</li><li>Property Size :981 Sq Ft</li><li>Bathrooms :2</li><li>Bedrooms :5</li></ul></div><div><ul><li>Year Built :30-06-2020</li><li>Garage :1</li><li>Garage Size :150 SqFt</li><li>Property Type :Apartment</li><li>Property Status :For Sale</li></ul></div>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>air conditioning</li><li>Laundry Room</li><li>swiming pool</li><li>air conditioning</li><li>Central Heating</li><li>gym</li><li>alarm</li><li>Central Heating</li><li>spa &amp; massage</li><li>pets allow</li><li>window Covering</li><li>Internet</li><li>car parking</li></ul>\r\n\r\n<br><p></p>', '[\"public\\/backend\\/images\\/album\\/1690149890810605.jpg\",\"public\\/backend\\/images\\/album\\/1690149890811472.jpg\",\"public\\/backend\\/images\\/album\\/1690149890811737.jpg\",\"public\\/backend\\/images\\/album\\/1690149890811988.jpg\",\"public\\/backend\\/images\\/album\\/1690149890812232.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1690149825748752.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690149825756878.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690149825757169.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690149825757777.jpg\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-23 08:32:58', '2021-02-07 16:17:42'),
(3, 'Home', 'Home', '7', '1', 1, 1, 1, 1, 'public/backend/images/property/600c873d22266.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<p></p>', '<p></p><ul><li><b></b>Property ID : B182</li><li>Price : $99,000</li><li>Property Size : 981 Sq Ft</li><li>Bathrooms : 2</li><li>Bedrooms : 5</li><li>Year Built : 30-06-2020</li><li>Garage : 1</li><li>Garage Size : 150 SqFt</li><li>Property Type : Apartment</li><li>Property Status : For Sale<b></b></li></ul><p></p>', '<p></p><p></p><p></p><blockquote><p>air conditioning</p><p>&nbsp;Laundry Room\r\n\r\n  <br></p><p>Central Heating</p><p>spa &amp; massag</p><p>\r\n\r\nswiming pool</p><p>air conditioning</p><p>\r\n\r\nCentral Heating</p><p>gym</p><p>\r\n\r\nalarm</p></blockquote><p>\r\n\r\n</p><p></p><div>\r\n\r\n<p><b></b></p><p></p><p></p><p></p>\r\n    		                  </div>', '[\"public\\/backend\\/images\\/album\\/1690033384355956.jpg\",\"public\\/backend\\/images\\/album\\/1690033384356673.jpg\",\"public\\/backend\\/images\\/album\\/1690033384357021.jpg\",\"public\\/backend\\/images\\/album\\/1690033384357333.jpg\",\"public\\/backend\\/images\\/album\\/1690033384357650.jpg\",\"public\\/backend\\/images\\/album\\/1690033384357961.jpg\"]', NULL, 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-23 10:53:10', '2021-02-06 13:47:36'),
(4, 'My House', 'My-House', '7', '1', 1, 3, 0, 1, 'public/backend/images/property/600c8748061fe.jpg', '<p>gkggkgkg</p>', '<p>gkgkgkk</p>', '<p>gkgkgkkgk</p>', '[\"public\\/backend\\/images\\/album\\/1690033412943883.jpg\",\"public\\/backend\\/images\\/album\\/1690033412944997.jpg\",\"public\\/backend\\/images\\/album\\/1690033412945327.jpg\",\"public\\/backend\\/images\\/album\\/1690033412946433.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691580196465717.jpg\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-23 14:03:29', '2021-02-13 05:43:07'),
(7, 'FindYour Dream Home', 'FindYour-Dream-Home', '5', '1', 1, 2, 1, 1, 'public/backend/images/property/6011394392720.jpg', '<p>ssgsg</p>', '<p>sgsg</p>', '<p>sdgsg</p>', '[\"public\\/backend\\/images\\/album\\/1690033463219462.jpg\",\"public\\/backend\\/images\\/album\\/1690033463220901.jpg\",\"public\\/backend\\/images\\/album\\/1690033463221455.jpg\",\"public\\/backend\\/images\\/album\\/1690033463221825.jpg\"]', NULL, 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-24 04:18:10', '2021-02-06 13:48:22'),
(9, 'FIND YOUR DREAM HOMEw', 'FIND-YOUR-DREAM-HOMEw', '6', '1', 1, 1, 1, 1, 'public/backend/images/property/600ec3967dddc.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<p></p>', '<p>Property ID :B182      <small></small>Price :$99,000<br>Property Size :981 Sq Ft   Bathrooms :2<br>Bedrooms :5       &nbsp; Year Built :30-06-2020<br>Garage :1        &nbsp; &nbsp;Garage Size :150 SqFt<br>Property Type :Apartment  Property Status :For Sale</p>', '<p>\r\n\r\n</p><div>\r\n\r\n<ul><li>air conditioning</li></ul>\r\n\r\n\r\n\r\n<ul><li>Laundry Room</li></ul>\r\n\r\n\r\n\r\n<ul><li>swiming pool</li></ul>\r\n\r\n\r\n\r\n<ul><li>Central Heating</li></ul>\r\n\r\n\r\n\r\n<ul><li>gym</li></ul>\r\n\r\n\r\n\r\n<ul><li>alarm</li></ul>\r\n\r\n\r\n\r\n<ul><li>pets allow</li></ul>\r\n\r\n\r\n\r\n<ul><li>window Covering</li></ul>\r\n\r\n\r\n\r\n<ul><li>Internet</li><li>car parking</li></ul>\r\n\r\n<br></div>\r\n\r\n<p></p>', '[\"public\\/backend\\/images\\/album\\/1690034550890832.jpg\",\"public\\/backend\\/images\\/album\\/1690034550891606.jpg\",\"public\\/backend\\/images\\/album\\/1690034550892260.jpg\",\"public\\/backend\\/images\\/album\\/1690034550892798.jpg\",\"public\\/backend\\/images\\/album\\/1690034550893131.jpg\"]', NULL, 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-25 07:11:50', '2021-02-06 16:40:02'),
(10, 'Luxury Family Home', 'Luxury-Family-Home', '7', '1', 2, 3, 1, 1, 'public/backend/images/property/600fb7993f38b.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><div><ul><li>Property ID :B182</li><li>Price :$99,000</li><li>Property Size :981 Sq Ft</li><li>Bathrooms :2</li><li>Bedrooms :5</li></ul></div><div><ul><li>Year Built :30-06-2020</li><li>Garage :1</li><li>Garage Size :150 SqFt</li><li>Property Type :Apartment</li><li>Property Status :For Sale</li></ul></div>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>air conditioning</li><li>Laundry Room</li><li>swiming pool</li><li>air conditioning</li><li>Central Heating</li><li>gym</li><li>alarm</li><li>Central Heating</li><li>spa &amp; massage</li><li>pets allow</li><li>window Covering</li><li>Internet</li><li>car parking</li></ul>\r\n\r\n<br><p></p>', '[\"public\\/backend\\/images\\/album\\/1690034596093199.jpg\",\"public\\/backend\\/images\\/album\\/1690034596093919.jpg\",\"public\\/backend\\/images\\/album\\/1690034596094550.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691580114504065.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691580114505964.jpg\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-26 00:32:57', '2021-02-13 05:41:49'),
(11, 'Luxury Family Home', 'Luxury-Family-Home', '2', '1', 1, 3, 1, 1, 'public/backend/images/property/600fbcac9435c.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><div><ul><li>Property ID :B182</li><li>Price :$99,000</li><li>Property Size :981 Sq Ft</li><li>Bathrooms :2</li><li>Bedrooms :5</li></ul></div><div><ul><li>Year Built :30-06-2020</li><li>Garage :1</li><li>Garage Size :150 SqFt</li><li>Property Type :Apartment</li><li>Property Status :For Sale</li></ul></div>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>air conditioning</li><li>Laundry Room</li><li>swiming pool</li><li>air conditioning</li><li>Central Heating</li><li>gym</li><li>alarm</li><li>Central Heating</li><li>spa &amp; massage</li><li>pets allow</li><li>window Covering</li><li>Internet</li><li>car parking</li></ul>\r\n\r\n<br><p></p>', '[\"public\\/backend\\/images\\/album\\/1690034641464122.jpg\",\"public\\/backend\\/images\\/album\\/1690034641464861.jpg\",\"public\\/backend\\/images\\/album\\/1690034641465149.jpg\"]', NULL, 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-26 00:54:36', '2021-02-06 13:51:55'),
(13, 'Luxury Family Home', 'Luxury-Family-Home', '5', '1', 2, 2, 1, 1, 'public/backend/images/property/60111ee253b25.jpg', '<p>\r\n\r\n</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. Praesent condimentum turpis at neque faucibus feugiat. Aenean in dapibus diam. Fusce sit amet neque ornare, maximus sapien eget, feugiat turpis. Praesent quis urna a metus maximus condimentum quis in purus. Nullam molestie aliquet urna. Nunc a elit congue, gravida turpis sed, laoreet orci.</p><p>Ut pretium, nunc in bibendum iaculis, neque tellus efficitur lectus, sit amet tincidunt justo nisi at risus. Vestibulum ante est, fermentum in laoreet nec, viverra eu mauris. In condimentum ac mauris a efficitur. Ut fringilla sed mauris eget convallis. Phasellus volutpat mattis tincidunt. Pellentesque non lacus felis. Donec ac sem eu libero consequat congue in vehicula justo. Nulla blandit id tortor non luctus. Donec in odio condimentum, condimentum nisi non, porta nisl. Donec sed consectetur erat, eu imperdiet urna. Praesent eu sapien orci.</p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><ul><li>Property ID :B182</li><li>Price :$99,000</li><li>Property Size :981 Sq Ft</li><li>Bathrooms :2</li><li>Bedrooms :5</li></ul><p></p>', '<p>\r\n\r\n</p><ul><ul><ul><li>air conditioning</li><li>Laundry Room</li><li>swiming pool</li><li>air conditioning</li><li>Central Heating</li><li>gym</li><li>alarm</li><li>Central Heating</li><li>spa &amp; massage</li><li>pets allow</li><li>window Covering</li><li>Internet</li><li>car parking</li></ul></ul><br></ul>\r\n\r\n<br><p></p>', '[\"public\\/backend\\/images\\/album\\/1690026381928060.jpg\",\"public\\/backend\\/images\\/album\\/1690026381928817.jpg\",\"public\\/backend\\/images\\/album\\/1690026381929176.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1690976625169063.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690976625170008.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690976625170546.png\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-27 02:05:54', '2021-02-06 13:49:37'),
(14, 'xnxxnxnxnn', 'xnxxnxnxnn', '3', '1', 1, 2, 1, 1, 'public/backend/images/property/60111f78d8aa1.jpg', '<p>xnxnnxn</p>', '<p>xnxnxnxn</p>', '<p>nxvnvn</p>', '[\"public\\/backend\\/images\\/album\\/1690026539808673.jpg\",\"public\\/backend\\/images\\/album\\/1690026539809274.jpg\",\"public\\/backend\\/images\\/album\\/1690026539809567.jpg\",\"public\\/backend\\/images\\/album\\/1690026539809849.jpg\",\"public\\/backend\\/images\\/album\\/1690026539810129.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691247033094215.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691247033095539.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691247033096500.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691247033097264.png\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-27 02:08:25', '2021-02-09 13:27:38'),
(15, 'Jwel Villa', 'Jwel-Villa', '1', '1', 1, 2, 0, 1, 'public/backend/images/property/6011203bae54f.jpg', '<p>dddhdhdhdh</p>', '<p>dhdhdhdh</p>', '<p>dhdhh</p>', '[\"public\\/backend\\/images\\/album\\/1690026744062321.jpg\",\"public\\/backend\\/images\\/album\\/1690026744063453.jpg\",\"public\\/backend\\/images\\/album\\/1690026744063771.jpg\"]', NULL, NULL, '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-27 02:11:39', '2021-02-07 16:08:19'),
(17, 'TEst HOME', 'TEst-HOME', '2', '4', 2, 1, 1, 1, 'public/backend/images/property/6012d2084425c.jpg', '<p>ncncncn</p>', '<p>cncncncn</p>', '<p>cncnncnn</p>', '[\"public\\/backend\\/images\\/album\\/1690143191153393.jpg\",\"public\\/backend\\/images\\/album\\/1690143191153844.jpg\",\"public\\/backend\\/images\\/album\\/1690143191154104.jpg\",\"public\\/backend\\/images\\/album\\/1690143191154382.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1690143191134297.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690143191151818.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1690143191152955.jpg\"]', 'https://www.youtube.com/embed/KG7KwnNXT64', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"330\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Lotus%20Kamal%20Tower%20Gulshan%20Dhaka+(My%20Business%20Name)&t=h&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe></div>', '1', '2021-01-28 09:02:32', '2021-02-06 14:51:35'),
(18, 'Amar Bari', 'Amar-Bari', '4', '4', 2, 2, 0, 1, 'public/backend/images/property/6022c18d0d446.jpg', '<p>sdgsdgsg</p>', '<p>sdgsdgs</p>', '<p>sdgsdgsgd</p>', '[\"public\\/backend\\/images\\/album\\/1691238278685445.jpg\",\"public\\/backend\\/images\\/album\\/1691238278686136.jpg\",\"public\\/backend\\/images\\/album\\/1691238278686641.jpg\",\"public\\/backend\\/images\\/album\\/1691238278687945.jpg\",\"public\\/backend\\/images\\/album\\/1691238278688311.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691238278682773.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691238278683836.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691238278684232.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691238278684621.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691238278685013.png\"]', NULL, '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"330\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&amp;height=330&amp;hl=en&amp;q=gulshan%202+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe></div>', '1', '2021-02-09 11:08:29', '2021-02-09 11:08:29'),
(19, 'Asian Tower', 'Asian-Tower', '7', '12', 1, 2, 1, 1, 'public/backend/images/property/60237fd1c161e.jpg', '<p>sgsdggsgsd</p>', '<p>dgsdgsdgg</p>', '<p>sdgsgsggdsg</p>', '[\"public\\/backend\\/images\\/album\\/1691289353541215.jpg\",\"public\\/backend\\/images\\/album\\/1691289353541725.jpg\",\"public\\/backend\\/images\\/album\\/1691289353542031.jpg\",\"public\\/backend\\/images\\/album\\/1691289353542324.jpg\",\"public\\/backend\\/images\\/album\\/1691289353542596.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691289353537919.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691289353539318.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691289353540219.jpg\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691289353540824.jpg\"]', NULL, NULL, '1', '2021-02-10 00:40:18', '2021-02-10 00:40:18'),
(20, 'Santi Holdings', 'Santi-Holdings', '7', '3', 2, 3, 0, 1, 'public/backend/images/property/60238562db54b.jpg', '<p>dfdfhdhdhd</p>', '<p>hdfhdhdhdhdh</p>', '<p>dhdfhdfhdhd</p>', '[\"public\\/backend\\/images\\/album\\/1691290847833918.jpg\",\"public\\/backend\\/images\\/album\\/1691290847834410.jpg\",\"public\\/backend\\/images\\/album\\/1691290847834838.jpg\",\"public\\/backend\\/images\\/album\\/1691290847835287.jpg\",\"public\\/backend\\/images\\/album\\/1691290847835727.jpg\"]', '[\"public\\/backend\\/images\\/floor_plan\\/album\\/1691291737404641.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691291737405354.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691291737405621.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691291737405887.png\",\"public\\/backend\\/images\\/floor_plan\\/album\\/1691291737406891.png\"]', NULL, NULL, '1', '2021-02-10 01:04:03', '2021-02-10 01:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `title`, `business_type`, `category`, `size`, `location`, `room`, `image`, `p_address`, `state`, `city`, `zip`, `name`, `phone`, `email`, `address`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, 'FIND YOUR DREAM HOME', 'For Sale', '2', '4', 'Wari', '5', 'public/backend/images/proposal/602067c5b9dc5.jpg', '13/14', 'Rangking', 'Dhaka', '1205', 'Nazrul Islam', '01911970156', 'admin@gmail.com', 'N/A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 2, '2021-02-07 16:20:54', '2021-02-09 04:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `being_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_description`, `meta_keyword`, `google_verification`, `being_verification`, `google_analytic`, `alexa_analytic`, `meta_icon`, `created_at`, `updated_at`) VALUES
(1, 'Real Estate', 'Learn Hunter', NULL, NULL, NULL, NULL, NULL, NULL, 'public/backend/images/icon/60152496c05f6.png', NULL, '2021-01-30 03:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(9999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `title_slug`, `service_id`, `short`, `image`, `details`, `images`, `created_at`, `updated_at`) VALUES
(74, 'Furniture Transfer', 'Furniture-Transfer', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.&nbsp;<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.\r\n	                  </div>', 'public/backend/images/service/60125c73c3910.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.<br></p><div>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.</div>\r\n\r\n<br></div><div>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum. <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.</div>\r\n\r\n<br></div>\r\n\r\n<p></p>', '[\"public\\/backend\\/images\\/service_album\\/1690111575957693.jpg\",\"public\\/backend\\/images\\/service_album\\/1690111575958703.jpg\",\"public\\/backend\\/images\\/service_album\\/1690111575960016.jpg\",\"public\\/backend\\/images\\/service_album\\/1690111575960365.jpg\",\"public\\/backend\\/images\\/service_album\\/1690111575960693.jpg\"]', '2021-01-28 00:40:01', '2021-01-28 04:39:44'),
(75, 'Home', 'Home', '1', 'asgaggagagaag', 'public/backend/images/service/60126143cc462.jpg', '<p>jdddj</p>', '[\"public\\/backend\\/images\\/service_album\\/1690112920451041.jpg\",\"public\\/backend\\/images\\/service_album\\/1690112920452085.jpg\",\"public\\/backend\\/images\\/service_album\\/1690112920452554.jpg\",\"public\\/backend\\/images\\/service_album\\/1690112920452908.jpg\",\"public\\/backend\\/images\\/service_album\\/1690112920453190.jpg\"]', '2021-01-28 01:01:24', '2021-01-28 01:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `service_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2021-01-27 12:31:33', '2021-01-27 12:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'BELOW 1000', '2021-02-04 03:52:14', '2021-02-06 12:23:11'),
(2, '1000 - 1500', '2021-02-04 03:52:24', '2021-02-06 12:23:28'),
(3, '2000 - 2500', '2021-02-04 03:52:34', '2021-02-06 12:25:26'),
(4, '2500 - 3000', '2021-02-04 04:00:00', '2021-02-06 12:25:38'),
(12, 'ABOVE 3000', '2021-02-06 12:53:07', '2021-02-06 12:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/images/slider/600c0f043e897.jpg', 'FIND YOUR DREAM HOME', 'Contrary to popular belief, Lorem Ipsum is not simply random text', '2021-01-23 05:56:52', '2021-01-23 05:56:52'),
(2, 'public/backend/images/slider/600c0f15c84ca.jpg', 'FIND YOUR DREAM HOME', 'Contrary to popular belief, Lorem Ipsum is not simply random text', '2021-01-23 05:57:10', '2021-01-23 05:57:10'),
(3, 'public/backend/images/slider/600c0f21058c5.jpg', 'FIND YOUR DREAM HOME', 'Contrary to popular belief, Lorem Ipsum is not simply random text', '2021-01-23 05:57:21', '2021-01-23 05:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', NULL, '2021-01-30 03:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title_1`, `image_1`, `details_1`, `title_2`, `image_2`, `details_2`, `title_3`, `image_3`, `details_3`, `title_4`, `image_4`, `details_4`, `created_at`, `updated_at`) VALUES
(1, 'BACKGROUND', 'public/backend/images/story/600c15b36d57d.jpg', '<p>Shanta started its journey in 1988 in the ready-made garment (RMG) sector and became one of the forerunners in RMG export by establishing leading industries such as Shanta Garments Ltd, Shanta Industries Ltd, Shanta Washworks Ltd, GDS Chemicals Ltd and Shanta Denims Ltd. Earning a solid reputation as an important vendor for some of the most renowned apparel brands of USA and Europe.<br><br>Shanta is also a key founding member and majority stakeholder of the STS Group - the promoter of the world class Apollo Hospitals Dhaka, International School Dhaka (ISD) and the Delhi Public Schools, Dhaka. Moreover, Shanta Securities Ltd - a brokerage house, was established in 2015 with the aim of setting higher standards in equities trading. <br><br>Shanta has a long track record of construction since 1991, having been involved in various projects of its own and of the STS Group. It has built the iconic Safura Tower- the 16 storied commercial landmark at Banani, the 200,000 sft multi-facility centrally air conditioned International School Dhaka (ISD) at Bashundhara, the 125,000 sft Delhi Public School at Uttara, state-of-the-art RMG factories such as its 150,000 sft Shanta Industries Ltd, the 150,000 sft Shanta Denims Ltd and the 35,000 sft Shanta Washworks Ltd at Dhaka EPZ. Furthermore, the team was also involved in the construction of Apollo Hospitals Dhaka - the 550,000 sft first multi-disciplinary super-specialty hospital of the country.<br><br>Eventually exiting the RMG sector and dissolving it\'s interests to pursue the passion for construction, Shanta Holdings Limited (SHL) was established in 2005 with a mission to change the lifestyle of city dwellers by providing modern, functional and aesthetic living and working spaces that can only be compared to the most successful developers of the globe.<br><br>With the belief that construction is not just about building structures - but an Art, SHL goes beyond the traditional scopes of property development and integrates the best the world has to offer. Since then, SHL has emerged as the most reputed and fastest growing real estate developer of the country. <br></p>', 'WHO WE ARE?', 'public/backend/images/story/60153fb744f92.jpg', '<p>\r\n\r\nA powerful portfolio of the country’s most distinctive and selective developments, with an excellent reputation in the Real Estate market, and enviable relationships that give our clients exclusive access to the ultimate in luxury apartments and exquisite commercial spaces, all in prime locations of Dhaka city.<br>&nbsp;<br>Our promise remains to develop a portfolio of luxury spaces and offer investors as well as buyers an unparalleled quality of service, inimitable by competitors. &nbsp;It is the commitment to both impeccably high standards and attention to detail that drive us to our success.<br><br>Besides building beyond expectation, SHL moreover sets standards for itself, for you and for others, which is why we proudly declare our driving philosophy to be \"Setting Standards\".\r\n\r\n<br></p>', 'OUR APPROACH', 'public/backend/images/story/600c15b36d589.jpg', '<p>\r\n\r\nAcquiring an apartment, a home or even an office space is a person\'s life-long dream. This dream drives him or her to accumulate the required finance slowly and gradually, which is the start of shaping this dream into reality. This relentless pursuit of realizing such a dream can flow from generation to generation. But finally when a space is purchased, has anyone thought to what extent this “dream” is actually fulfilled?<br><br>We know that moment is an important stepping-stone for you, and hence we at Shanta Holdings have been preparing for just that. Our apartments, condominiums and commercial complexes compete with the best that the modern world has to offer. From temperature-controlled swimming pools to lush rooftop gardens and terraces, from state-of-the-art gymnasiums to spacious walkways and children’s play facilities, you’ll find the solution to your need for stylish urban living with us at Shanta.<br></p>', 'OUR LOGO', 'public/backend/images/story/600c15b36d58c.png', '<p>\r\n\r\nThe concept for our logo is derived from the shape of human hands, the shape they make when held with the palms facing each other.<br><br>Usually, when we hold an object in our palms, it is something we care about, something valuable to us. Like when a blow of air attempts to put off a candle that gives us light, we protect it with our palms. When a tiny bird falls from its nest, we hold it up and protect it in our palms. When a sculptor sculpts a masterpiece, he shapes it using his fingers and palms. Hence, our logo depicts the amount of care and emotion we put into each and every creation.<br><br>Moreover, it is a symbol that inspires us on a daily basis to be caring towards our clients and protect their interests by providing an uncompromising level of service and superior products.\r\n\r\n<br></p>', NULL, '2021-01-30 05:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_slug` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategory_name`, `type_slug`, `created_at`, `updated_at`) VALUES
(1, 'Ongoing', 'Ongoing', '2021-01-23 05:54:17', '2021-01-25 14:27:05'),
(2, 'Upcoming', 'Upcoming', '2021-01-23 05:54:10', '2021-01-25 14:27:20'),
(3, 'Complete', 'Complete', '2021-01-23 05:54:27', '2021-01-25 14:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Nazrul Islam', 'Marketing Manager', 'public/backend/images/team/60300256245e0.png', NULL, NULL, NULL, '2021-01-23 07:04:30', '2021-02-19 12:24:22'),
(2, 'San Francisco', 'Super Admin', 'public/backend/images/team/60300275163d0.png', NULL, NULL, NULL, '2021-01-23 07:05:22', '2021-02-19 12:24:53'),
(3, 'St. Angle', 'HR', 'public/backend/images/team/603025f6e8f1c.png', NULL, NULL, NULL, '2021-02-19 14:56:23', '2021-02-19 14:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `details`, `created_at`, `updated_at`) VALUES
(2, 'public/backend/images/testimonial/600c115dcad3c.jpg', 'BOB EVANCHAK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed tellus luctus, hendrerit arcu et, pulvinar ante. Morbi urna metus, pretium id magna in, efficitur vestibulum mauris.', '2021-01-23 06:06:53', '2021-01-23 06:06:53'),
(5, 'public/backend/images/testimonial/600c23e6f0a37.jpg', 'Californius', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2021-01-23 07:25:59', '2021-02-19 14:57:27'),
(6, 'public/backend/images/testimonial/600c254692a75.jpg', 'Cat Witless', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-23 07:31:50', '2021-02-19 14:58:08'),
(7, 'public/backend/images/testimonial/600c257c340ea.jpg', 'Mr. Jacson', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-01-23 07:32:44', '2021-01-23 07:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `twak_tos`
--

CREATE TABLE `twak_tos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `twak_to` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `twak_tos`
--

INSERT INTO `twak_tos` (`id`, `twak_to`, `created_at`, `updated_at`) VALUES
(1, '<!--Start of Tawk.to Script--> <script type=\"text/javascript\"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0]; s1.async=true; s1.src=\'https://embed.tawk.to/6002ee31c31c9117cb6f423b/1es5n4sh7\'; s1.charset=\'UTF-8\'; s1.setAttribute(\'crossorigin\',\'*\'); s0.parentNode.insertBefore(s1,s0); })(); </script> <!--End of Tawk.to Script-->', NULL, '2021-01-23 12:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clints`
--
ALTER TABLE `clints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropzones`
--
ALTER TABLE `dropzones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_pages`
--
ALTER TABLE `fb_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vissions`
--
ALTER TABLE `mission_vissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `popular_places`
--
ALTER TABLE `popular_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twak_tos`
--
ALTER TABLE `twak_tos`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clints`
--
ALTER TABLE `clints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dropzones`
--
ALTER TABLE `dropzones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fb_pages`
--
ALTER TABLE `fb_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `mission_vissions`
--
ALTER TABLE `mission_vissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popular_places`
--
ALTER TABLE `popular_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `twak_tos`
--
ALTER TABLE `twak_tos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
