-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 06:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aldar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisments`
--

CREATE TABLE `advertisments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisments`
--

INSERT INTO `advertisments` (`id`, `title`, `description`, `image`, `lang`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'العنوان', 'system.description', '1652857195001969600.png', 'ar', 1, '2022-05-18 03:59:55', '2022-05-18 03:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_count` int(11) NOT NULL DEFAULT 0,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `image`, `auther`, `publisher`, `file`, `download_count`, `lang`, `date`, `is_active`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'العنوان', '<p style=\"text-align: center;\"><em><strong>دار النشر دار النشر دار النشر دار النشر دار النشر</strong></em></p>', '1652858069065599600.jpg', 'الكاتب', 'دار النشر', 'العنوان.pdf', 0, 'en', '2022-05-18', 1, 1, '2022-05-18 04:14:29', '2022-05-27 10:31:46'),
(2, 'قانون العمل المصري', 'يتحدث هذا الكاتاب عن قانو', '1652874590041343600.png', 'رياض الغزالي', 'دار شعاع', 'قانون العمل المصري.pdf', 0, 'ar', '0000-00-00', 1, 4, '2022-05-18 08:49:50', '2022-05-18 08:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_parent` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `lang`, `is_parent`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'الشريعة والقانون', 'ar', 1, 1, '2022-05-18 03:54:24', '2022-05-18 03:54:24'),
(2, 'الدين الاسلامي', 'ar', 1, 1, '2022-05-18 03:54:34', '2022-05-18 03:54:34'),
(3, 'إصدارتنا', 'ar', 1, 1, '2022-05-18 08:37:40', '2022-05-18 08:37:40'),
(4, 'القانون المصري', 'ar', 1, 1, '2022-05-18 08:47:54', '2022-05-18 08:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `configure_systems`
--

CREATE TABLE `configure_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configure_systems`
--

INSERT INTO `configure_systems` (`id`, `title`, `description`, `lang`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AboutUs', '<p style=\"text-align: center;\">مؤسسة الدار العربية للأعمال القانونية والحماية هي مؤسسة خدمية فردية مسجلة رسمياً في صنعاء، تحت رقم 2/37256 بتاريخ 2011\\10\\20 وكمنظمة مجتمع مدني بموجب التصريح رقم (594)، بتاريخ 18/11/2011م، وكمركز تدريبي متخصص بالقانون بموجب التصريح ، وتهدف الدار العربية تقديم خدمات قانونية متميزة ومتكاملة معنية الى نشر الوعي المجتمعي بـ أهمية المعرفة ونشر ثقافة الحقوق بين اوساط المجتمع، كما تهدف الى توفير الحماية القانونية للفئات المستضعفة سواءً كانوا رجالاً، أو نساءً أو أطفالاً، أو لاجئين ،أو مهمشين لا تستثني الدار العربية أحد من أفراد المجتمع فللكل الحق في ان تتوفر لديهم الحماية قانونية و تحرص مؤسسة الدار العربية للتنمية على تغطية كافة أجزاء الجمهورية اليمنية بخدماتها و تهتم بتقديم الحماية و المناصرة لقضايا الاشخاص الذين ينتمون الى الفئات الأكثر ضعفا في المجتمع و تقديم العون القانوني لهم و هي جزء من الدار العربية للمحاماة و الاعمال القانونية التي تحتوي على عدد من المحامين في الجمهورية اليمنية الذين لا يشك احد بمدى تمرسهم و خبرتهم في مجال القانون.</p>\r\n<p style=\"text-align: center;\">تقدم مؤسسة الدار العربية للأعمال القانونية و الحماية العون القانوني لمن لا تتوفر لديهم إمكانية الدفاع عن انفسهم قانونياً .</p>\r\n<p style=\"text-align: center;\">أن الحقوق الأساسية و الحريات الرئيسية للفرد في المجتمع تعد طبيعة راسخة لكل الناس بغض النظر عن انتمائهم فهناك الكثير من المعاهدات و المواثيق الدولية جاءت لحفظ كرامة الانسان و حمايته كما تلتزم الدار العربية للأعمال القانونية والحماية بالمعايير الدولية بناءً على الاعلان العالمي لحقوق الانسان في 10 ديسمبر 1948. ومن اعمال الدار العربية للتنمية و المناصرة المساهمة في التنمية المجتمعية بمختلف مجالاتها الاجتماعية والاقتصادية والحقوقية والثقافية والبيئية و المساهمة برفع الوعي المجتمعي في مختلف المجالات التنموية التي يتطلبها الواقع والجهات المعنية بالتعاون مع الجهات الداعمة المحلية والدولية ، والمساهمة في مناصرة قضايا العمال والحقوق العمالية النقابية، والتأمينات وغيرها و تطوير الضمان الاجتماعي والتأمينات الاجتماعية ،والاهتمام بنشر الثقافة العمالية وخدمة العمال وتحسين ظروف العمل والعمال في مختلف المجالات بما يخدم المصلحة العامةً، والاهتمام برعاية ومناصرة وتنمية الطفولة والشباب المرأة والأشخاص ذوي الإعاقة واللاجئين والسجناء اجتماعيا وثقافياً واقتصاديا وحقوقيا بما يساهم في تنمية المجتمع وتعزيز حقوق الإنسان . تعمل الدار العربية على مساعدة المرأة وتمكينها من خلال تثقيفها بحقوقها القانونية التي تساعدها على معرفة مسؤوليتها وحقوقها التي تجعلها فرد فعال في المجتمع.</p>', 'en', 1, '2022-06-05 12:19:45', '2022-06-05 12:19:45', NULL),
(2, 'AboutUs', '<p style=\"text-align: center;\">مؤسسة الدار العربية للأعمال القانونية والحماية هي مؤسسة خدمية فردية مسجلة رسمياً في صنعاء، تحت رقم 2/37256 بتاريخ 2011\\10\\20 وكمنظمة مجتمع مدني بموجب التصريح رقم (594)، بتاريخ 18/11/2011م، وكمركز تدريبي متخصص بالقانون بموجب التصريح ، وتهدف الدار العربية تقديم خدمات قانونية متميزة ومتكاملة معنية الى نشر الوعي المجتمعي بـ أهمية المعرفة ونشر ثقافة الحقوق بين اوساط المجتمع، كما تهدف الى توفير الحماية القانونية للفئات المستضعفة سواءً كانوا رجالاً، أو نساءً أو أطفالاً، أو لاجئين ،أو مهمشين لا تستثني الدار العربية أحد من أفراد المجتمع فللكل الحق في ان تتوفر لديهم الحماية قانونية و تحرص مؤسسة الدار العربية للتنمية على تغطية كافة أجزاء الجمهورية اليمنية بخدماتها و تهتم بتقديم الحماية و المناصرة لقضايا الاشخاص الذين ينتمون الى الفئات الأكثر ضعفا في المجتمع و تقديم العون القانوني لهم و هي جزء من الدار العربية للمحاماة و الاعمال القانونية التي تحتوي على عدد من المحامين في الجمهورية اليمنية الذين لا يشك احد بمدى تمرسهم و خبرتهم في مجال القانون.</p>\r\n<p style=\"text-align: center;\">تقدم مؤسسة الدار العربية للأعمال القانونية و الحماية العون القانوني لمن لا تتوفر لديهم إمكانية الدفاع عن انفسهم قانونياً .</p>\r\n<p style=\"text-align: center;\">أن الحقوق الأساسية و الحريات الرئيسية للفرد في المجتمع تعد طبيعة راسخة لكل الناس بغض النظر عن انتمائهم فهناك الكثير من المعاهدات و المواثيق الدولية جاءت لحفظ كرامة الانسان و حمايته كما تلتزم الدار العربية للأعمال القانونية والحماية بالمعايير الدولية بناءً على الاعلان العالمي لحقوق الانسان في 10 ديسمبر 1948. ومن اعمال الدار العربية للتنمية و المناصرة المساهمة في التنمية المجتمعية بمختلف مجالاتها الاجتماعية والاقتصادية والحقوقية والثقافية والبيئية و المساهمة برفع الوعي المجتمعي في مختلف المجالات التنموية التي يتطلبها الواقع والجهات المعنية بالتعاون مع الجهات الداعمة المحلية والدولية ، والمساهمة في مناصرة قضايا العمال والحقوق العمالية النقابية، والتأمينات وغيرها و تطوير الضمان الاجتماعي والتأمينات الاجتماعية ،والاهتمام بنشر الثقافة العمالية وخدمة العمال وتحسين ظروف العمل والعمال في مختلف المجالات بما يخدم المصلحة العامةً، والاهتمام برعاية ومناصرة وتنمية الطفولة والشباب المرأة والأشخاص ذوي الإعاقة واللاجئين والسجناء اجتماعيا وثقافياً واقتصاديا وحقوقيا بما يساهم في تنمية المجتمع وتعزيز حقوق الإنسان . تعمل الدار العربية على مساعدة المرأة وتمكينها من خلال تثقيفها بحقوقها القانونية التي تساعدها على معرفة مسؤوليتها وحقوقها التي تجعلها فرد فعال في المجتمع.</p>', 'ar', 1, '2022-06-05 12:20:03', '2022-06-05 12:20:03', NULL),
(3, 'Vision', '<p style=\"text-align: center;\">الدار مؤسسة قانونية دولية رائدة تعمل في مجالات الأعمال القانونية والحماية، كما تساهم في التنمية والمناصرة ليسود القانون.</p>', 'ar', 1, '2022-06-05 12:20:42', '2022-06-05 12:20:42', NULL),
(4, 'Mission', '<p style=\"text-align: center;\">العمل على تلبية احتياجات المؤسسات والأفراد في مختلف المجالات القانونية وادارة منازعاتهم وحماية مصالحهم المشروعة من خلال شبكة محامين متواجدين في نطاق الجمهورية اليمنية ومستشارين عرب يعملون على تسهيل العقبات وتقديم العون القانوني ومناصرة قضايا حقوق الانسان، والمساهمة في التنمية.</p>', 'ar', 1, '2022-06-05 12:21:02', '2022-06-05 12:21:02', NULL),
(5, 'Brife', '<p style=\"text-align: center;\">بكل فخر يطيب لنا أن نقدم لكم نبذة عن&nbsp;<strong>الدار العربية للأعمال القانونية والحماية</strong>&nbsp;، تتعرفون من خلالها على عمل و مشاريع الدار خلال السنوات السابقة ، حيث اننا نهدف عبر القيام بمشاريعنا الى تقديم العون القانوني و الحماية لفئات المجتمع الأكثر ضعفاً و المساهمة في رفع الوعي القانوني لكل أفراد المجتمع.</p>', 'ar', 1, '2022-06-05 12:21:25', '2022-06-05 12:21:25', NULL),
(6, 'Scope', '<div class=\"col-md-12 text-center\">\r\n<p style=\"text-align: center;\">تعمل الدار العربية في مختلف محافظات الجمهورية اليمنية الشمالية والجنوبية عبر مجموعة من المحامين المتواجدين في جميع أجزاء اليمن ومن اصحاب الخبرات والكفاءات المستعدين لتقديم خدماتهم القانونية للمحتاجين بسرعة وكل مهنية. للدار العربية مقر رئيسي في محافظة صنعاء يتم من خلاله العمل على إدارة و تقديم الخدمات القانونية، كذلك خارج اليمن من خلال شبكة من المحاميين الموقعين مع الدار مذكرة تعاون في هذا المجال.</p>\r\n</div>\r\n<div class=\"col-md-12 text-center\" style=\"text-align: center;\">&nbsp;</div>', 'ar', 1, '2022-06-05 12:21:53', '2022-06-05 12:21:53', NULL),
(7, 'Strategy', '<p style=\"text-align: right;\">كانت استراتيجية الدار للفترة من 2011 الى 2015 العمل على تعزيز حقوق العمال و مناصرة القضايا العمالية، و هذا الهدف العام للاستراتيجية من خلال القيام بالأنشطة التالية:</p>\r\n<p style=\"text-align: right;\">إعداد المشاريع التي تخدم الاستراتيجية .</p>\r\n<p style=\"text-align: right;\">اعداد البرامج التثقيفية و الأنشطة التي تخدم الاستراتيجية</p>\r\n<p style=\"text-align: right;\">تقديم الخدمات الاستشارية و العون القانوني في مجال العمل و العمال</p>\r\n<p style=\"text-align: right;\">توجيه كل المتدربين و المتطوعين في الدار نحو خدمة هذه الاستراتيجية</p>\r\n<p style=\"text-align: right;\">و بالإضافة الى هذا تتمثل استراتيجية الدار العربية للأعمال القانونية و الحماية في الوقت الراهن على تقديم العون القانوني للأشخاص الأكثر ضعفاً المتضررين من الحرب، حيث اتجهت الدار العربية يبدا بيد مع المنظمات الدولية و المحلية لتقديم المساعدات القانونية لكل الأشخاص المحتاجين و التوعية المجتمعية بأهمية الثقافة القانونية في المجتمع.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>', 'ar', 1, '2022-06-05 12:24:34', '2022-06-05 12:24:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `image`, `lang`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'brand1', '1654361511057610100.png', 'ar', 1, '2022-06-04 13:51:51', '2022-06-04 13:51:51'),
(3, 'brand2', 'default.png', 'ar', 1, '2022-06-04 13:52:06', '2022-06-05 12:38:16'),
(4, 'brand3', '1654361541023784800.png', 'ar', 1, '2022-06-04 13:52:21', '2022-06-04 13:52:21'),
(5, 'brand3', '1654361552035918200.png', 'ar', 1, '2022-06-04 13:52:32', '2022-06-04 13:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `lang`, `is_active`, `created_at`, `updated_at`) VALUES
(14, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(15, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(16, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(17, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(18, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(19, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(20, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35'),
(21, 'Leverage agile frameworks to provide', '<p class=\"news-details__text-1\">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>\r\n<p class=\"news-details__text-2\">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>', '1654443275026130500.jpg', 'ar', 1, '2022-06-05 12:34:35', '2022-06-05 12:34:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `title`, `text`, `lang`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'الارتقاء بمهنة المحاماة', '<p style=\"text-align: center;\"><strong>في الوطن العربي وتطويرها، و تعزيز الروابط العربية، والعمل على توحيد التشريعات و الإجراءات العربية القانونية وإعداد دليل بذلك.</strong></p>', 'ar', 1, '2022-05-18 03:22:41', '2022-05-27 10:20:26', NULL),
(2, 'مناصرة القضايا الوطنية والعربية، والاسلامية', 'وخاصة المتعلقة بحقوق الأنسان، و تقديم العون القضائي للمحتاجين، و مناصرة قضايا العمال و الطفولة و المرأة و الأشخاص ذوي الاعاقة و غيرهم، و المساهمة في التنمية و نشر الثقافة القانونية و الحقوقية بين أوساط المجتمع اليمني والعربي.', 'ar', 1, '2022-05-18 03:22:57', '2022-05-18 03:22:57', NULL),
(3, 'تقديم العون القانوني المجاني للمحتاجين', '<p style=\"text-align: right;\">ممن ليس لديهم القدرة على دفع أتعاب المحاماة، و ذلك يرجع الى تقدير الدار و مناصرة قضايا حقوق الإنسان المحلية و العربية و الإسلامية و العالمية و إعداد تقرير الظل الخاصة بها و نشر الثقافة القانونية و الحقوقية المتعلقة بحقوق الأنسان.</p>', 'ar', 1, '2022-05-18 03:23:19', '2022-06-05 12:47:45', NULL),
(4, 'Upgrading and Developing', 'the legal profession in the Arab world and strengthening Arab ties and working to unify the legislation and the Arab legal procedures and prepare a manual.', 'en', 1, '2022-05-18 03:23:51', '2022-05-18 03:23:51', NULL),
(5, 'Advocacy of Arab and Islamic issues', 'especially on human rights, providing legal aid to those in need, advocacy of workers, children, women, persons with disabilities and others, and contributing to development and dissemination of culture and human rights among the Arab community.', 'en', 1, '2022-05-18 03:24:04', '2022-05-18 03:24:04', NULL),
(21, 'حماية و تمثيل الفئات الأضعف في المجتمع', '<p style=\"text-align: right;\">الأطفال و المرأة و العمال والأشخاص ذوي الإعاقة و اللاجئين و المهمشين و الأقليات و السجناء و غيرهم بهدف المشاركة في العملية التنموية وفق برامج و منهجية عمل منظمات المجتمع&nbsp;</p>', 'ar', 1, '2022-06-05 12:25:34', '2022-06-05 12:50:37', NULL),
(22, 'التشبيك مع مؤسسات الدولة ، و منظمات المجتمع المدني', '<p style=\"text-align: right;\">و المنظمات الدولية ، و كل الأطراف و الجهات ذات العلاقة بالحقوق و الحريات ، و التعاون معها</p>', 'ar', 1, '2022-06-05 12:25:57', '2022-06-05 12:49:05', NULL),
(23, 'نشر الوعي الحقوقي', '<p style=\"text-align: right;\">من خلال عقد ورش عمل و ندوات و محاضرات و طباعة بروشورات توعوية، و نشر دراسات خاصة بالمشاريع التي تم تنفيذها للوصول الى أقصى درجات الاستفادة في المشاريع التي تقوم بها الدار العربية.</p>', 'ar', 1, '2022-06-05 12:26:18', '2022-06-05 12:49:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `value`, `lang`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 1, NULL, NULL),
(2, 'العربية', 'ar', 1, '2022-05-18 02:40:12', '2022-05-18 02:40:12'),
(3, 'Spanish', 'es', 1, '2022-06-04 14:19:17', '2022-06-04 14:19:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_07_213511_create_services_table', 1),
(7, '2022_04_07_213556_create_goals_table', 1),
(8, '2022_04_07_213710_create_slaiders_table', 1),
(9, '2022_04_07_213736_create_websites_table', 1),
(10, '2022_04_07_213825_create_configure_systems_table', 1),
(11, '2022_04_07_214509_create_sessions_table', 1),
(12, '2022_04_16_170756_create_categories_table', 1),
(13, '2022_04_16_170842_create_books_table', 1),
(14, '2022_04_16_170905_create_reports_table', 1),
(15, '2022_04_16_170938_create_events_table', 1),
(16, '2022_04_16_171037_create_advertisments_table', 1),
(17, '2022_04_16_171037_create_langs_table', 1),
(18, '2022_04_22_173506_laratrust_setup_tables', 1),
(19, '2022_05_06_134001_create_pages_table', 2),
(20, '2022_05_06_134002_create_static_pages_table', 2),
(21, '2022_05_18_063336_create_donors_table', 3),
(22, '2022_05_18_063337_create_donors_table', 4),
(23, '2022_05_18_074821_create_jobs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-05-05 15:45:25', '2022-05-05 15:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `lawyer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ادمن', 'Admin', '2022-05-05 15:45:25', '2022-05-05 15:45:25'),
(2, 'lawyer', 'محامي', 'Lawyer', '2022-05-05 15:45:26', '2022-05-05 15:45:26'),
(3, 'user', 'مستخدم', 'User', '2022-05-05 15:45:26', '2022-05-05 15:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 9, 'User'),
(2, 10, 'User'),
(1, 12, 'User'),
(3, 13, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `text`, `lang`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'التمثيل القانوني', 'تقوم الدار بواسطة محاميها بتمثيل عملائها قانونياً، وإدارة منازعاتهم، وإتمام عملية تحصيل أموالهم، وتقوم بمهمة التوفيق والوساطة والتحكيم المحلي والعربي والدولي في مختلف النزاعات المدنية والتجارية والعمالية، وغيرها.', 'ar', 1, '2022-05-18 03:25:03', '2022-05-18 03:25:03', NULL),
(2, 'الدراسات والبحوث القانونية', '<p style=\"text-align: right;\">إعداد البحوث والدراسات القانونية المتخصصة، ونشرها للتصدي لكافة المواضيع التي تستجد على الساحة القانونية، أو التي يطلبها العميل والمشاركة في المؤتمرات المحلية والعربية والدولية وتقديم الاستشارات و دراسات الجدوى القانونية والضريبية فيما يتعلق باختيار أفضل الكيانات القانونية للمنشآت والقيام بالترتيبات التحضيرية ومفاوضات الإنشاء، والترخيص وتسجيل جميع أنواع الشركات، و إعداد، ومراجعة كافة النماذج والسندات القانونية المتعلقة بعمل المنشاة في علاقاتها مع الغير ومع مجلس إدارتها وعمالها.</p>', 'ar', 1, '2022-05-18 03:25:20', '2022-06-05 12:47:14', NULL),
(3, 'Legal Consultation', '<p style=\"text-align: center;\"><em>Provide legal consultation, with the possibility of providing legal members who are ready to move to the companies headquarters or clients offices for providing legal services continuously or for a specific period and the possibility of making the administrative investigations with the staff of clients in case of violations in accordance with the laws and regulations of the facility.</em></p>', 'en', 1, '2022-05-18 03:25:39', '2022-05-27 10:22:23', NULL),
(13, 'الدراسات والبحوث القانونية', '<p style=\"text-align: right;\">إعداد البحوث والدراسات القانونية المتخصصة، ونشرها للتصدي لكافة المواضيع التي تستجد على الساحة القانونية، أو التي يطلبها العميل والمشاركة في المؤتمرات المحلية والعربية والدولية وتقديم الاستشارات و دراسات الجدوى القانونية والضريبية فيما يتعلق باختيار أفضل الكيانات القانونية للمنشآت والقيام بالترتيبات التحضيرية ومفاوضات الإنشاء، والترخيص وتسجيل جميع أنواع الشركات، و إعداد، ومراجعة كافة النماذج والسندات القانونية المتعلقة بعمل المنشاة في علاقاتها مع الغير ومع مجلس إدارتها وعمالها.</p>', 'ar', 1, '2022-06-05 12:29:32', '2022-06-05 12:52:37', NULL),
(14, 'صياغة اللوائح والقوانين', '\r\n<p style=\"text-align: right;\">متابعة تنفيذ التزامات صاحب العمل والمقاول واتخاذ كافة الإجراءات القانونية الواجبة في حينه وإدارة عقارات المغتربين والمقيمين وتحصيل الإيجارات وإخلاء المأجور و تقسيم العقارات والأموال وإزالة حالة الشيوع فيها، وتنفيذ الوصايا والوقفيات، أو الإشراف عليها.</p>\r\n', 'ar', 1, '2022-06-05 12:29:55', '2022-06-05 12:53:39', NULL),
(15, 'المتابعة للمؤسسات والعقارات', '\r\n<p style=\"text-align: right;\">تقديم العون القضائي والقانوني المجاني للمحتاجين ممن ليس لديهم القدرة على دفع أتعاب المحاماة وذلك يرجع إلى تقدير الدار ومناصرة قضايا حقوق الإنسان المحلية والعربي والإسلامي والعالمية وإعداد تقرير الظل الخاصة بها ونشر الثقافة القانونية والحقوقية المتعلقة بحقوق الإنسان وحماية وتمثيل الفئات الأضعف في المجتمع مثل الأطفال والمرأة والعمال والأشخاص ذوي الإعاقة واللاجئين والمهمشين والأقليات والسجناء وغيرهم بهدف المساهمة في التنمية وفق برامج ومنهجية عمل منظمات المجتمع المدن</p>', 'ar', 1, '2022-06-05 12:30:13', '2022-06-05 12:54:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DJTrtWlI8hlJcjznGVWhEtV1ashGDviKaqUzpLfb', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidlZSY1lBZzY4U251VjRVNHhqNHI0cDhzUUpheHhOWENzVGxCamhPYiI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1654445615);

-- --------------------------------------------------------

--
-- Table structure for table `slaiders`
--

CREATE TABLE `slaiders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slaiders`
--

INSERT INTO `slaiders` (`id`, `main_title`, `sub_title`, `image`, `link`, `lang`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'للأعمال القانونية والحماية', '\"معاً ليسود القانون\"', '1652855273032878200.png', NULL, 'ar', 1, '2022-05-18 03:27:53', '2022-05-18 03:27:53', NULL),
(2, 'FOR LEGALITIES & PROTECTION', '\"Together To Prevail Law\"', '1654443588088181200.jpg', NULL, 'ar', 1, '2022-05-18 03:28:22', '2022-06-05 12:39:48', NULL),
(3, 'العنوان الرئيسي', 'العنوان الفرعي', '1654443635064567900.jpg', NULL, 'ar', 1, '2022-05-18 03:55:26', '2022-06-05 12:40:35', NULL),
(4, 'العنوان الرئيسي', 'للأعمال القانونية والحماية', '1654443680025680900.jpg', 'http://127.0.0.1:8000/ar/admin/addSlider/4', 'ar', 1, '2022-05-18 03:56:48', '2022-06-05 12:41:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `parrent` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `is_active`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(12, 'emp name', 'eradahalfakeh@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rKufc0ku', NULL, NULL, 'eB28ACEV8HiKDyiUg2Ata9VpAfNBm74P8GNZ6Wlz', NULL, 1, 'man.png', '2022-05-05 19:27:38', '2022-05-05 19:27:38'),
(13, 'user', 'eradahalfakedh@gmail.com', NULL, '$2y$10$2zFcxhRpsgdua8ROlIDxs.sBDu4pnkb0eDTn961lpTxKMXSTmi/42', 'rKufc0ku', NULL, NULL, 'eB28ACEV8HiKDyiUg2Ata9VpAfNBm74P8GNZ6Wlz', NULL, 1, 'man.png', '2022-05-05 19:27:38', '2022-05-05 19:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisments`
--
ALTER TABLE `advertisments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configure_systems`
--
ALTER TABLE `configure_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `reports_lawyer_id_foreign` (`lawyer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slaiders`
--
ALTER TABLE `slaiders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisments`
--
ALTER TABLE `advertisments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `configure_systems`
--
ALTER TABLE `configure_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slaiders`
--
ALTER TABLE `slaiders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_lawyer_id_foreign` FOREIGN KEY (`lawyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
