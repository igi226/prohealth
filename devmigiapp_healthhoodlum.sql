-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2023 at 11:19 AM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devmigiapp_healthhoodlum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_favicon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_about` text COLLATE utf8mb4_unicode_ci,
  `site_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `slug`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `site_name`, `site_address`, `site_logo`, `site_favicon`, `site_phone`, `site_about`, `site_email`, `instagram`, `youtube`, `twitter`, `facebook`) VALUES
(1, 'Admin Healthhoodlum', 'admin-healthhoodlum', 'admin@mail.com', NULL, '$2y$10$IDsomHcanCF4JBnsyV/xJOaUESaBLo7hkh9jDzRrSkcIsyG.vD27C', 1, NULL, '2022-12-16 02:04:53', '2022-12-19 23:36:36', 'Healthhoodlum', 'demo address #8901 Marmora Road Chi Minh City, Vietnam', '16806110376224.jpg', '16715200516244.png', '0800123456', 'Health Hoodlum Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus. cons ectetur elit. Vestibulum nec odios Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `user_id`, `created_at`, `updated_at`, `slug`) VALUES
(2, 'first blog', '16806113063748.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non quam nec diam auctor blandit eget ut orci. Pellentesque scelerisque odio lobortis sem dictum ultricies. Nam felis nibh, sagittis ac blandit non, pellentesque et turpis. Aliquam blandit eros nec libero imperdiet iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend convallis pretium. Nam eu porta nisi, et congue orci.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);\">Duis at risus quis mauris luctus dictum at vel neque. Maecenas condimentum fermentum mollis. Cras felis odio, commodo id tellus sagittis, euismod vestibulum velit. Quisque id tempor tortor. Vivamus non egestas ex. Donec placerat nisi aliquam, tincidunt augue at, convallis velit. Suspendisse potenti. Nullam dapibus consequat nibh. Phasellus aliquam facilisis erat quis pharetra. In euismod ante nisi, vel ultrices nunc convallis nec. Suspendisse mi metus, vulputate et massa ac, elementum sagittis risus. Aenean elementum, nulla vel fringilla lacinia, velit tellus venenatis elit, quis porta arcu massa at ligula. Phasellus sed risus quis leo pharetra maximus. Donec volutpat mattis rutrum. Vivamus ex odio, luctus a rutrum at, pellentesque ut sem.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);\">Integer in libero scelerisque, placerat orci nec, ultricies ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nisi nisi, molestie ornare condimentum nec, maximus sed purus. Donec maximus eros vitae consectetur imperdiet. Donec lacinia, quam et vulputate euismod, urna turpis dapibus dolor, at luctus sapien tellus in diam. Cras mollis pulvinar neque, non luctus enim efficitur vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam sagittis nunc sit amet metus gravida eleifend. Sed auctor purus arcu, eu pharetra nunc rhoncus in. Nulla facilisi.<iframe frameborder=\"0\" src=\"//www.youtube.com/embed/ExwEEYZiM64\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);\">Phasellus sollicitudin sapien in mi elementum varius at eu leo. Nulla facilisi. Ut semper ut sem a iaculis. Fusce ac sodales turpis, eu hendrerit leo. Maecenas imperdiet odio est, vel dictum tortor scelerisque a. Nullam eget luctus nunc. Phasellus sit amet malesuada enim. Maecenas viverra dictum arcu ac dictum. Sed in porta lacus, et accumsan sem. Nunc molestie orci vitae felis ultricies, non facilisis tortor ultricies.<br></p>', NULL, NULL, '2023-04-04 06:58:26', 'first-blog'),
(3, 'Restore Your Health Restore Your Quality of Life', '16806113161392.jpg', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">We are a leading functional medicine health clinic that restores health and quality of life for people around the world. We use the latest advancements in diagnostic testing to uncover underlying dysfunctions.​​​​We are able to uncover often overlooked factors that have a dramatic impact on your health.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">We are a leading functional medicine health clinic that restores health and quality of life for people around the world. We use the latest advancements in diagnostic testing to uncover underlying dysfunctions.​​​​We are able to uncover often overlooked factors that have a dramatic impact on your health.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><br></p>', NULL, NULL, '2023-04-04 06:58:36', 'restore-your-health-restore-your-quality-of-life'),
(4, 'Restore Your Health Restore Your Quality of Life', '16716892361491.jpg', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span></p><p><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: rgb(255, 255, 255);\"><br></span><br></p>', NULL, NULL, NULL, '1671689236543422-restore-your-health-restore-your-quality-of-life');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `slug`, `title`, `short_desc`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'healing-starts-from-you', 'Healing Starts From You.', 'It’s exhausting finding your own way between different drugs and doctors who don’t always listen, asking yourself, “Why am I always sick?” At Parsley, we locate the root cause of your unexplained illnesses and help you finally feel better.', NULL, NULL, NULL, NULL),
(3, 'best-treatment-at-our-health-hoodlum-studio', 'Best Treatment at Our Health Hoodlum Studio', 'We are happy to see newcomers at any of our yoga and meditation classes. Join the community to participate in the center`s life and the discussion club. to participate in the center`s life and the discussion club.', NULL, NULL, NULL, NULL),
(4, 'symptoms-for-consultation', 'Symptoms for Consultation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, NULL, NULL, NULL),
(5, 'welcome-to-health-hoodlum', 'Welcome to Health Hoodlum', 'Your Spiritual Guide', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus.</span><br></p>', '16727441891620.png', NULL, NULL),
(7, 'meditation-yoga-retreats', 'Meditation, Yoga, Retreats,', 'Free Programs & More...', '<div class=\"section-head-2 text-center\" style=\"margin-bottom: 40px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(229, 216, 216);\"><p style=\"margin-right: auto; margin-bottom: 0px; margin-left: auto; font-size: 18px; line-height: 30px; color: rgb(0, 0, 0); padding-top: 5px; text-align: unset; max-width: 800px;\"><span style=\"font-family: Poppins, sans-serif;\">We are happy to see newcomers at any of our yoga and meditation classes. Join the community to participate in the center`s life and the discussion club. to participate in the center`s life and the discussion club.</span><br></p></div>', NULL, NULL, NULL),
(8, 'the-happiness-program', 'The Happiness Program', 'The practical knowledge of breathing techniques gives you balance and wisdom that will transform your life by unlocking the true potential of your mind and soul by bringing them fullness.', NULL, '16728089394899.jpg', NULL, NULL),
(9, '1672808974213993-the-happiness-program', 'The Happiness Program', 'The practical knowledge of breathing techniques gives you balance and wisdom that will transform your life by unlocking the true potential of your mind and soul by bringing them fullness.', NULL, '16728089747057.jpg', NULL, NULL),
(10, '1672809000505517-the-happiness-program', 'The Happiness Program', 'The practical knowledge of breathing techniques gives you balance and wisdom that will transform your life by unlocking the true potential of your mind and soul by bringing them fullness.', NULL, '16728090003716.jpg', NULL, NULL),
(11, 'taking-yoga-beyond-the-mat-training', 'Taking Yoga Beyond ', 'The Mat Training ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', '16728093842823.jpg', NULL, NULL),
(12, 'choose-your-package', 'Choose Your Package', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, NULL, NULL, NULL),
(13, 'testimonials', 'Testimonials', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, NULL, NULL, NULL),
(14, 'latest-news', 'Latest News', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, NULL, NULL, NULL),
(15, 'subscribe-to-our-newsletter', 'Subscribe To Our Newsletter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, NULL, NULL, NULL),
(16, 'what-we-do-at-health-hoodlum', 'What We Do at Health Hoodlum', 'Health Hoodlum is an educational body. We teach lay people how to better care for themselves, their family and how to institute advanced health measures that prevent conditions before they manifest. We also provide knowledge that enables participants to interpret data, scrutinize research and make excellent health decisions, rather than mindlessly following instructions given by providers that are many years or decades behind the research.  Health Hoodlum represents a no BS approach to functional care that makes the issues easy to understand and the supportive measures simple to implement.', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px;\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><br></span><br></p>', '16728991813195.jpg', NULL, '2023-01-05 00:51:26'),
(17, 'who-is-the-health-hoodlum', 'Who is the Health Hoodlum?', 'Health Hoodlum is the alter ego of Dr. Andrino, an entirely different species of doctor. He’s a gifted practitioner and one of the most sought-after drugless providers in the DC metro area. He really is an anomaly. Born and raised in the rough, violent streets of Alphabet City, Dr. A knows how to overcome adversity. He is an extraordinarily fluent communicator and is a master of humor and hilarity. There is no arrogance. He speaks kindly and is very much an empath. We refer to him as a brilliant Bad Ass! His vast knowledge, critical reasoning and outside-of-the-box thinking makes him unique among his peers. A polymath might be a good way to describe him. The comprehensive and highly nuanced care he delivers is what drives his predictably excellent results.  Dr. Andrino sees a multitude of conditions, presentations and patient demographics, especially those that have become discouraged from countless, unfruitful medical encounters. His calming nature facilitates relaxed communication, allowing for a higher quality, patient-centered interaction. Dr. A will address all of your concerns and answer any questions you might have. He is someone that you instantly feel comfortable interacting with.', '<p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(255, 255, 255);\">Andrino was born sickly, had liver problems as a youth, was later exposed to very heavy chemicals on 9/11 and was then infected by an aggressive coxsackie B virus that provoked a host of autoimmune conditions.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(255, 255, 255);\">His own health journey includes the complete remission of: Crohn’s disease, IBS, Hypogonadism, Heavy Metal Toxicity, Mold Toxicity, Mixed Connective Tissue Disorder and Systemic Sclerosis. This was all done by natural means and without pharmacology, aside from a few isolated short-term blasts of steroids. He does continue to follow an AIP diet in order to manage Hashimoto’s and to repair autoimmune provoked glucose dysregulation.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(255, 255, 255);\">He’s like you. He understands what it is to look fine while feeling like there is no life in you. He understands your frustration with conventional care and the gross lack of root-cause understanding. He has suffered. He has had health problems. However, because of his knowledge he was able to correct them without dangerous immunosuppressives or other cancer inducing biologics. It is for all of these reasons that he is as good as he is. Compassion drives knowledge. If a provider cares enough than they will do whatever is necessary to figure things out. Without compassion there is less of a drive to learn, study and investigate. A lack of compassion will make a provider contentment with mediocre results. This is not how Dr. A rolls.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(255, 255, 255);\">Dr. Andrino has a degree in Human Biology and a Doctorate in Chiropractic Medicine. His post-doctoral studies include: a master’s degree and post-graduate education in Functional Medicine and Clinical Nutrition. He has also been educated at the Institute of Functional Medicine. He is a Certified Functional Nutrition Practitioner and Board-Certified Drugless Practitioner. He applies his critical thinking in a way that supports, in a drugless manner, those with: hormonal problems, toxicity, fatigue, food sensitivities, metabolic dysregulation, glucose handling issues, gastrointestinal dysfunction, Autoimmune conditions, post-viral syndromes, unexplained weight gain, chronic fatigue, conditions unique to pediatric or other special populations and much more.</p>', '16729020694882.jpg', NULL, NULL),
(18, 'cardiometabolic', 'Cardiometabolic', 'High Cholesterol,Pre-diabetes ,Type 2 diabetes, Metabolic Syndrome, Hypertension, Atherosclerosis ,Heart failure, Heart disease, Unexplained obesity/weight gain', NULL, NULL, NULL, NULL),
(19, 'digestive', 'Digestive', 'Nausea + Vomiting, IBS, Crohn’s disease, Ulcerative colitis, Acid reflux/GERD, Diverticulitis ,Food intolerances ,Parasitic infection', NULL, NULL, NULL, NULL),
(20, 'autoimmune-disease', 'Autoimmune Disease', 'Rheumatoid arthritis, Psoriatic arthritis, Celiac diseas,e Grave’s disease, Hashimoto’s thyroiditis, Lupus, Sjogren’s symptoms, Type 1 diabetes, Multiple sclerosis, Connective tissue diseases, Scleroderma, Non-specific joint inflammation', NULL, NULL, NULL, NULL),
(21, 'hormonal', 'Hormonal', 'Hormonal imbalance, Low libido, Hypogonadism ,Adrenal dysfunction, Polycystic ovarian symptoms, Premenstrual symptoms, Amenorrhea Menopause, Perimenopause, High cortisol ,Adrenal ,Fatigue/Insufficiency', NULL, NULL, NULL, NULL),
(22, 'miscellaneous', 'Miscellaneous', 'Fatigue, Low, Threshold to Stressors, Non-restorative sleep, Regular waking between 2-5am, Inexplicable bloating or gas, Hives, Breathing problems', NULL, NULL, NULL, NULL),
(23, 'functional-care', 'Functional Care:', NULL, '<p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">The extensive and thorough discovery of the root cause behind your problem, whatever it may be. It can simply be described as: “Removing that which is preventing you from healing/living optimally and adding that which is missing and/or essential to your highest state of wellness.”.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Dr. A will gather your information, speak with you extensively, conduct his own deep-dive investigation on his own time and create a specific protocol and program to get you well. Common reasons for people pursuing functional care with Dr. A are: GI complaints, Hormonal Dysfunction, Energy Depletion, Food Sensitivities, Fatigue, viral, bacterial or fungal infections, and many more complaints.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">He essentially deals with problems that are at least somewhat chronic that have not been successfully treated conventionally.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Assessment and subsequent protocol may include: Functional tests, Microbiome studies, Dried Urine Metabolite tests, genetic/SNP investigations, specific conventional labs and reliable food sensitivity tests. Dr. A then spends a good deal of time evaluating your results and mapping out the best road to wellness for you.</p>', '16812092868072.jpg', NULL, '2023-04-11 05:04:46'),
(24, 'clinical-nutrition', 'Clinical Nutrition:', NULL, '<p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Clinical nutrition involves anything and everything from meal planning and reliable food sensitivity detection to healing the gut and determining specific needs for vitamins, minerals and cofactors.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Dr. A utilizes microbiome studies, IgG and IgE food sensitivity tests, metabolic analyses and other related procedures, in order to create your customized protocol.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Clinical nutrition is frequently used in functional care, but the reverse is not typically so. If you are feeling pretty well and just want to know if you’re on the right track, if you intuit that something is off with your diet, food choices, GI function or your ability to transform food into energy, then this is for you.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">If you are an athlete that requires a customized dietary approach that can be modified for different times of the training year/season and or events, this is the best option for you. Additionally, this service helps parents implement dietary strategies that are specific to their child(ren) that will instill good habits and will keep them healthy all of their lives. If you have dietary concerns AND other health related circumstance than Functional Care is a better choice.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Dr. A does not do Nutritional Coaching, He will work with you as a team to design an easily integrated program and he will follow up and modify your program as needed, but it is your job to follow it. He refers out to nutrition coaches that can help with integrating change if you have a particularly hard time with this.</p>', '16812107676681.jpg', NULL, '2023-04-11 05:29:27'),
(25, 'dr-andrino-is-a-fantastic-diagnostician-across-disciplines', 'Dr. Andrino is a fantastic diagnostician across disciplines.', NULL, '<p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">This service is advisory in nature.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">In cases where a person desires to pursue a conventional route, but needs assistance in understanding what type of specialist, which diagnostic procedures might be useful, what should be expected, which laboratory studies or tests could be helpful or what other less known options should be investigated.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Additionally, Dr. Andrino can help you better understand a condition, disease process or laboratory result.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Lastly, he can make suggestions for actions that will bolster your healing process even if you are opting for pharmacology.</p>', '16729069269893.jpg', NULL, NULL),
(26, 'drugless-family-wellness', 'Drugless family wellness:', NULL, '<p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">This is a fantastic service where multiple members of the family are under care in a way that creates habits and practices specific to that family’s needs.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">It is important to understand why Dr. Andrino put this together.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">In clinical studies, it has been revealed that randomly chosen infants are born with an average of 287 commercial chemicals, pesticides and pollutants.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">This is a fact that can easily researched. If the babies are born toxic, then the moms are toxic and in all likelihood the fathers are as well.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">The mother’s gut microbiome is passed to the child.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Toxins and poor gut ecology alone can induce or “turn on” genes for disease, cause cancer, effect fertility, hormonal dysregulation, cognition, propensity for autoimmune disease, diabetes, cognitive issues, depression, anxiety, obesity and much more.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">These risks can be proactively dealt with before signs and symptoms of a problem or disease process presents.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">In this country we are programmed to wait until the problem shows up before we do anything. The functional approach aims to create homeostasis while the person is still relatively symptom free.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Yes, chronic conditions can also be supported, but with the technology available today we should be protecting children and teens so that they have a better chance of adding years to their lives and life to their years.</p><p style=\"margin-bottom: 24px; font-size: 15px; line-height: 24px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">This service includes regular check-ins, a customized protocol for each participating member, quick access to the doctor and assistance with unexpected issues.</p>', '1672906972662.jpg', NULL, NULL),
(27, 'fees', 'Fees:', 'Fees are 199 for 30-minute visits and 399 for 60-minute appointments., There is no charge for the Initial visits are generally 60 minutes, but may be 30 minutes in some cases.,  We do not participate in any insurance programs.,  Superbills will be provided, but reimbursement varies across carriers.', NULL, NULL, NULL, NULL),
(28, 'functional-care-demo-01', 'Functional care Demo 01', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br></p>', '16812085232429.jpg', NULL, '2023-04-11 04:52:03'),
(29, 'functional-care-demo-02', 'Functional care Demo 02', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br></p>', NULL, NULL, NULL),
(30, 'functional-care-demo-03', 'Functional care Demo 03', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br></p>', NULL, NULL, NULL),
(31, '1673241946439039-functional-care-demo-01', 'Functional care Demo 01', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br></p>', NULL, NULL, NULL),
(32, '1673242608797809-best-treatment-at-our-health-hoodlum-studio', 'Best Treatment at Our Health Hoodlum Studio', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is an educational body. We teach lay people how to better care for themselves, their family and how to institute advanced health measures that prevent conditions before they manifest. We also provide knowledge that enables participants to interpret data, scrutinize research and make excellent health decisions, rather than mindlessly following instructions given by providers that are many years or decades behind the research.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum represents a no BS approach to functional care that makes the issues easy to understand and the supportive measures simple to implement.</span><br></p>', NULL, NULL, NULL),
(33, 'your-spiritual-guide', 'Your Spiritual Guide', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br></p>', '16732427532685.jpg', NULL, NULL),
(34, 'your-spiritual-guide-02', 'Your Spiritual Guide 02', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We also have a special interest in preventing future dysfunction and disease by getting families with young children set up with practices, measures and protocols that address the predispositions before they occur.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">We help entire families become well, stay awesome and enjoy optimal living. We help people that need guidance, are confused by their providers, need interpretation of circumstances or desire our opinion on what steps they should consider, that they may not have thought of or been informed on.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Health Hoodlum is also where you can schedule appointments with our nutritional coaches or with The Health Hoodlum himself.</span><br></p>', '1673242811801.jpg', NULL, NULL),
(35, 'get-in-touch-with-us', 'Get in touch with us', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d501652.5894038953!2d106.42074895832687!3d10.798989412825884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdemo%20address%20%238901%20Marmora%20Road%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2sin!4v1672830799945!5m2!1sen!2sin11', '<p>Join the Happiness Program. Experience a calm mind, reduced anxiety, increased energy levels and sustainable happiness everyday!<br></p>', NULL, NULL, '2023-01-09 01:08:08'),
(36, 'the-health-hoodlum', 'The Health Hoodlum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', NULL, NULL, NULL, NULL),
(37, 'section-1', 'Section 1', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(38, 'section-2', 'Section 2', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(39, 'section-3', 'Section 3', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(40, 'section-4', 'Section 4', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(41, 'section-5', 'Section 5', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(42, 'section-6', 'Section 6', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL),
(43, 'section-7', 'Section 7', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br></p>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `short_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pediatric Surgery', 'Pediatric ophthalmology and pediatric optometry', '16806116447353.jpg', '2022-12-28 00:34:14', '2023-04-04 07:04:04'),
(3, 'General consultation', 'Pediatric ophthalmology and pediatric optometry', '16722187628331.jpg', '2022-12-28 03:42:42', '2022-12-28 03:42:42'),
(4, 'Laser Eye Surgery', 'Laser eye surgery and lens surgery', '16722187915197.jpg', '2022-12-28 03:43:11', '2022-12-28 03:43:11'),
(5, 'Cataract Treatment', 'Cataract diagnosis and treatment', '16722188188560.jpg', '2022-12-28 03:43:38', '2022-12-28 03:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `consult_appointments`
--

CREATE TABLE `consult_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = aproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consult_appointments`
--

INSERT INTO `consult_appointments` (`id`, `user_id`, `consultation_id`, `status`, `created_at`, `updated_at`, `message`, `appointment_date`) VALUES
(4, 79, 5, '1', '2022-12-30 02:00:42', '2023-01-03 03:16:40', NULL, NULL),
(5, 83, 4, '0', '2023-04-04 07:07:43', '2023-04-04 07:07:43', NULL, NULL),
(6, 83, 4, '0', '2023-04-04 07:07:43', '2023-04-04 07:07:43', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_12_16_053027_create_admins_table', 1),
(10, '2022_12_21_111903_create_cms_table', 2),
(11, '2022_12_22_053328_create_blogs_table', 3),
(12, '2022_12_23_115833_create_packages_table', 4),
(14, '2022_12_26_101821_create_testimonials_table', 5),
(15, '2022_12_26_100555_create_order_histories_table', 6),
(16, '2022_12_28_052526_create_consultations_table', 7),
(17, '2022_12_28_114206_create_consult_appointments_table', 8),
(18, '2023_01_04_063345_create_queries_table', 9),
(19, '2023_01_05_051144_create_newsletters_table', 10),
(20, '2023_01_10_050109_create_video_cms_table', 11),
(21, '2023_01_10_070920_create_quizzes_table', 12),
(22, '2023_01_13_050017_create_results_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email_n`, `created_at`, `updated_at`) VALUES
(1, 'john@mail.com', NULL, NULL),
(2, 'fggfgfg@mai.com', '2023-04-11 09:50:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_histories`
--

INSERT INTO `order_histories` (`id`, `user_id`, `package_id`, `amount`, `end_date`, `created_at`, `updated_at`) VALUES
(5, 79, 1, '1999', '2023-01-29 00:00:00', '2022-12-30 02:01:51', '2022-12-30 02:01:51'),
(6, 83, 1, '1999', '2023-05-04 00:00:00', '2023-04-04 07:07:25', '2023-04-04 07:07:25'),
(7, 83, 1, '1999', '2023-05-04 00:00:00', '2023-04-04 07:07:25', '2023-04-04 07:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_consultation` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `package_price`, `package_type`, `package_features`, `created_at`, `updated_at`, `slug`, `available_consultation`) VALUES
(1, 'Delux pro', '1999', 'Monthly', 'unlimited consultant, 24/7 call support, free Ebook', '2022-12-23 06:53:53', '2022-12-29 00:42:37', 'delux', 3),
(2, 'Premium', '10000', 'Yearly', 'Unlimeted consultant, 24/7 call support, free ebook, free 50 video consultant', '2022-12-23 06:59:24', '2022-12-29 00:42:27', 'premium', 5),
(4, 'Silver', '11999', 'Yearly', 'Unlimeted consultant, 24/7 call support, free ebook, free 5 video consultant', '2022-12-29 00:42:15', '2022-12-29 00:42:15', 'silver', 10);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'John', 'John@mail.com', '9182722991', 'This is my first query', 'This is my first query', NULL, NULL),
(3, 'ss', 'igi123@goigi.in', '1234567890', 'qsq', 'sqsqsqsqs', NULL, NULL),
(4, 'sc', 'admin@mail.com', '1234567890', 'vs', 'svsv vbsdv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `question`, `ans1`, `ans2`, `ans3`, `correct_ans`, `created_at`, `updated_at`) VALUES
(2, 'How much luxury taxi rates per minute?11', 'jo', 'heloo', 'ojojj', 'ans2', '2023-01-11 01:09:06', '2023-01-11 02:04:08'),
(3, 'How much luxury taxi rates per minute?', 'jo', 'ojoj', 'ojojj', 'ans3', '2023-01-11 01:18:14', '2023-01-11 02:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `given_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `question_id`, `user_id`, `given_ans`, `created_at`, `updated_at`) VALUES
(12, 2, 1, 'ans2', '2023-01-13 02:13:58', '2023-01-13 02:13:58'),
(13, 3, 1, 'ans1', '2023-01-13 02:13:58', '2023-01-13 02:13:58'),
(14, 2, 82, 'ans1', '2023-02-21 00:01:40', '2023-02-21 00:01:40'),
(15, 3, 82, 'ans2', '2023-02-21 00:01:40', '2023-02-21 00:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `image`, `occupation`, `created_at`, `updated_at`) VALUES
(1, 'Pradipta S Bhuin', '<p>I am a student I am a student I am a student I am a student</p>', '16806112304120.png', 'student', '2022-12-27 00:22:49', '2023-04-04 06:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `phone`, `bio`, `image`) VALUES
(1, 'Pradipta S Bhuin', 'pradipta-s-bhuin', 'pradipta@gmai.com', NULL, '$2y$10$CYvqq910O3LWr945RlAUoeplkHpJE0EuRO7EMqbwUUYSE2gEsfttO', 1, NULL, '2022-12-17 03:35:13', '2022-12-17 03:35:13', NULL, NULL, NULL),
(2, 'Prof. Cole Beahan III', 'nobis-magni-occaecati-quod-reprehenderit', 'hildegard14@funk.info', NULL, '$2y$10$3tLbesa78zjxcX4Y.f499.YkFaKvXLaSEoMpOOqxjnJIAhZ0HHCza', 1, NULL, '2022-12-21 03:10:22', '2022-12-21 03:10:22', '1956144', NULL, NULL),
(3, 'Mustafa Roob', 'qui-iste-quasi-harum', 'willie10@hoppe.com', NULL, '$2y$10$4HujjfRaR9/TAiJY0VFueuSBLlIu.EpQ91g55vzr1YeiXpBaP1sO.', 0, NULL, '2022-12-21 03:10:22', '2022-12-21 03:10:22', '51331333', NULL, NULL),
(4, 'Hobart Frami', 'dolorem-eos-laborum-architecto', 'von.roman@hotmail.com', NULL, '$2y$10$k2FqruEF53DPOv5sxLoYc.AC2p1x4bhmVXtaUe7pf824KfD2IAKx6', 0, NULL, '2022-12-21 03:10:22', '2022-12-21 03:10:22', '89872676', NULL, NULL),
(5, 'Erling Spencer', 'quibusdam-molestiae-inventore', 'maria74@yahoo.com', NULL, '$2y$10$aKrRFUkgHkvDlQw8WDNfMuQor6kZEQo/VKSVnelmIZF0NzR885VSi', 0, NULL, '2022-12-21 03:10:22', '2022-12-21 03:10:22', '84433159', NULL, NULL),
(6, 'Broderick Carter', 'quibusdam-omnis-sed-nulla-dignissimos', 'larry25@heller.com', NULL, '$2y$10$YEQ3Mx3Z7BCYNAgK/vrXMeMGR/cntVP4tpHfazmL8N5BY4wQBnhYe', 1, NULL, '2022-12-21 03:10:22', '2022-12-21 06:16:41', '66088379', NULL, NULL),
(7, 'Precious Mills', 'ea-velit-non', 'aidan.raynor@yahoo.com', NULL, '$2y$10$EwkKX4RjDz2ss5jkOAgFwOgoGmt.ZvlVExgYx.Gb6bXcbTiP6Sr4G', 0, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '50264481', NULL, NULL),
(8, 'Vida Wilderman I', 'aut-veritatis-dolores', 'rasheed02@gusikowski.com', NULL, '$2y$10$Y8/cbnjVA9KrJrYNeB0TSOg4wLVjY0eWkVdeUGBfpcZURzNYfurj6', 0, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '82682426', NULL, NULL),
(9, 'Hope Bogisich', 'eum-natus-quis', 'hal44@gmail.com', NULL, '$2y$10$OWwRl0wTLYryYI8WkByPgO3gBRN53KxAvqqMrogNr5cCv5AyHwHHW', 0, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '68691604', NULL, NULL),
(10, 'Tyler Romaguera', 'consequatur-non-autem', 'dpfeffer@yahoo.com', NULL, '$2y$10$o6DLmNRAGsWyBP5.f.eGvuACgilHqwSPVxmifupWU6uyKV/QYO4K2', 0, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '689740', NULL, NULL),
(11, 'Ms. Sandrine Bechtelar', 'dolores-molestiae-saepe', 'jaqueline58@gmail.com', NULL, '$2y$10$pYW9ly.mq/wlqlk4grOxnOdNU3olrpvxn9V9IPgWsCfUspQ0jW14K', 1, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '9993657', NULL, NULL),
(12, 'Simeon Wunsch', 'quidem-explicabo-ipsum', 'ethan12@konopelski.com', NULL, '$2y$10$cH9BIuE6sEBrv9aSsoKSzOPcPDod7v462CqFse69FVLN3cRKRecqW', 0, NULL, '2022-12-21 03:10:23', '2022-12-21 03:10:23', '79629965', NULL, NULL),
(13, 'Zackery Orn', 'dicta-alias-cupiditate', 'kiarra.murazik@bradtke.info', NULL, '$2y$10$9ELoEQ/R0bGsty4oCxRdDer.wlDzLLJILr6nLAF3YVfwB6LWbKXLC', 1, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '41453226', NULL, NULL),
(14, 'Mr. Laron Emard', 'aut-impedit-autem', 'fmacejkovic@yahoo.com', NULL, '$2y$10$.3pQr3Ix0ryydyx9MZLGhue.W8GPy3Ci1ibsn1blJV/YiiWAp4Fom', 1, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '69599227', NULL, NULL),
(16, 'Lucy Carter', 'eligendi-voluptas-aut-minima', 'kreiger.magnus@connelly.com', NULL, '$2y$10$HvmtFj37JzZ8wjUI6PFbw.uyDyQNhvUhmWf2jtEtzSugVy0.H5p/e', 0, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '57979217', NULL, NULL),
(17, 'Karianne Schmeler', 'qui-aliquam-possimus', 'iwilkinson@hotmail.com', NULL, '$2y$10$cS1EKX7HWKBFtTn9DkNH9eveYKsjCit/466DFOhUdB03EVppsf/S2', 0, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '25696486', NULL, NULL),
(18, 'Mr. Danny Casper', 'quibusdam-est-aut', 'guadalupe71@gulgowski.biz', NULL, '$2y$10$jv8j5YQVTnUxWX/k.Q5Bw.GHp4zz8m/Meki5m7u015ldLromNpzae', 0, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '63865076', NULL, NULL),
(19, 'Gabrielle Gusikowski', 'aliquid-deserunt-maxime-neque', 'oryan@gmail.com', NULL, '$2y$10$GVhjCkqAysL1XW4nQrSQF./UYae8cwufx1JJL4OD0U6vhCQpP0eKW', 0, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '8425403', NULL, NULL),
(20, 'Miss Blanche Stiedemann MD', 'praesentium-officia-enim', 'mills.hailey@hotmail.com', NULL, '$2y$10$3gnGfPkyU5E73x4CQyhdsuxAd1/5h038A1tF03vrlF5pLNhGW2lim', 1, NULL, '2022-12-21 03:10:24', '2022-12-21 03:10:24', '12358456', NULL, NULL),
(21, 'Stella Ferry', 'non-dolorum-suscipit', 'laverna44@jacobi.com', NULL, '$2y$10$ZQATi3KRo/OxuR.JZc5x9eIbKX6QmtZGX16ZM8llJ3FhPyVxoJ0qG', 0, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '47786689', NULL, NULL),
(22, 'Dr. Arnaldo Langosh PhD', 'illo-id-ut', 'arnoldo.smitham@yahoo.com', NULL, '$2y$10$ctqUePyaalSG59iVCuu.2Oss7Utsb97DA5v2bvdN.WJoAqCIRNAai', 1, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '53585427', NULL, NULL),
(23, 'Mr. Dwight Weissnat III', 'id-sapiente-qui-dolor', 'wkunze@steuber.biz', NULL, '$2y$10$Am0uhhPyOOk6rFCY7rvlfezm7M9SNIo572DNLXd5eepSPguT9mVAO', 0, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '34650267', NULL, NULL),
(24, 'Candida Ruecker', 'libero-illum', 'kwolff@yahoo.com', NULL, '$2y$10$8GkAUtBc45OfrOhZdZ/sUejT9c18hdKcYF./PgGDmCC39XLMRvdsO', 1, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '60104924', NULL, NULL),
(25, 'Tyson Langosh', 'error-omnis-esse', 'dlindgren@watsica.com', NULL, '$2y$10$ngI6C88UNZnG39WTauLJRulV8pZPsEcYmLKnEMGQbD2n75ajZ3Nri', 0, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '53836158', NULL, NULL),
(27, 'Dr. Raphaelle Ebert', 'odit-quasi-aspernatur-aut', 'dgibson@hotmail.com', NULL, '$2y$10$qqgZPNRZuXXhTQ2FTdaNMu.JA5citGaMN67F.Gi1fOJ87AE.7CCpm', 1, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '94607721', NULL, NULL),
(28, 'Stephon D\'Amore', 'dolorum-esse-doloribus-aut', 'anibal.doyle@harvey.biz', NULL, '$2y$10$nIDO/e/JGbV.eFwEwlGreOs8NDMx9G.ScyASDl3rYHrbW1JrvfOia', 1, NULL, '2022-12-21 03:10:25', '2022-12-21 03:10:25', '53824326', NULL, NULL),
(29, 'Julio Franecki II', 'eos-doloremque-cum-unde', 'witting.marcelino@mohr.com', NULL, '$2y$10$MAZk92Q3qSBmXBO5xKplnehmT5ieuvEXWqdbgcMPR74wj8rIt3vwq', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '74111879', NULL, NULL),
(30, 'Lavon Kirlin Sr.', 'voluptatem-rem-eum-harum', 'hane.marian@hotmail.com', NULL, '$2y$10$a1yDqgMZ/wWhf5QU57iMNuMKjmNeI7GSmp6ij0zB8bIbt0rcPQ2HW', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '704471', NULL, NULL),
(31, 'Millie Abshire', 'ut-vero-non-sint', 'abshire.elody@wehner.info', NULL, '$2y$10$CyhY1gTpK8L1Dt9Y.J6A/OmofaCJ8hq28529OH1eBWdbMNU4YwVwG', 1, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '54133626', NULL, NULL),
(32, 'Dr. Eugene Stoltenberg Jr.', 'voluptatem-accusantium-quibusdam-libero', 'hyatt.esteban@runolfsdottir.com', NULL, '$2y$10$yhc6.mdon0Ek9lsnD9rP0OMpAnVQOVCVkVbJvEGWGg9344WhQchee', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '19335936', NULL, NULL),
(33, 'Prof. Abelardo Lehner', 'numquam-molestiae-iure', 'jcrooks@gmail.com', NULL, '$2y$10$P2kygnk/4jKV73wovfcJ3eL1iihJelgws1dsZFzJs0LQLNlLLRUEK', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '84168691', NULL, NULL),
(34, 'Freeda Pagac', 'facilis-voluptas-iste-ut', 'oswaldo.kuphal@hegmann.com', NULL, '$2y$10$GMuMHk/jo.0ywHw0X0klqOi6H9zyH/qRR4nDSWsXGOXElaI6.Qyt.', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '42115392', NULL, NULL),
(35, 'Dr. Madisen Breitenberg', 'velit-illo', 'evangeline30@barton.info', NULL, '$2y$10$ZdrJtan77yaB9JGYUTKW2e9Oh.VihtuzNzLE8h6mtRcDcqzqiMSWK', 0, NULL, '2022-12-21 03:10:26', '2022-12-21 03:10:26', '85284195', NULL, NULL),
(36, 'Raegan Jacobs PhD', 'dolore-velit-minima', 'ole04@kling.com', NULL, '$2y$10$trVuNAzQGd9drAwxcFHAI.GPGin5QYxruxb2FxIaMNdKeGpQj4TUG', 1, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '76043238', NULL, NULL),
(37, 'Mr. Kyleigh Beahan Jr.', 'illo-earum-nobis', 'giovani.fay@zboncak.com', NULL, '$2y$10$7AMpoCAShZSHub4.zZghs.dBOaNosNvsmUf45.lNnct7Bu7ZvxW86', 0, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '82237300', NULL, NULL),
(38, 'Pierce Barton', 'libero-sed-minima', 'bemard@wolff.org', NULL, '$2y$10$IIbdPfB59tBcRTWxYsuDiOfrwcRf9iWZDxCSa5v42IHJb3lQ.qwCO', 1, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '72727401', NULL, NULL),
(39, 'Tyrel Altenwerth', 'sapiente-et-reprehenderit', 'fatima.trantow@skiles.com', NULL, '$2y$10$kVt14RJg0QM4kfcAjgQQ9uGnthZJgYzBmItmz11HfdHUMQetZ01JO', 0, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '23982882', NULL, NULL),
(40, 'Jordi Kertzmann IV', 'optio-ea-enim-doloribus-sunt', 'dulce.gibson@gmail.com', NULL, '$2y$10$LaTjVv1GSgvdCgN5X3yGa.1WHSrhurBHJYossLzT/J324btkDxtD.', 0, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '17716720', NULL, NULL),
(41, 'Tess Blanda', 'voluptatum-distinctio-nihil-aut', 'elenor88@hotmail.com', NULL, '$2y$10$Fqw.VVnTCPUaXN1Xf9fhseFeCEZnfMmYVPct6CPjn2nb3ij78xacC', 1, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '25473706', NULL, NULL),
(42, 'Dr. Lamont Crist', 'temporibus-eum-praesentium', 'tromp.shaun@gmail.com', NULL, '$2y$10$CAULZTKc6tCWi6jhH1VTke16lEWBLzdMDbXo91bClM.rqN/MUfENG', 0, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '30946225', NULL, NULL),
(43, 'Mrs. Marilou Bartoletti', 'consequatur-quis-rem', 'hwisozk@beer.com', NULL, '$2y$10$dIa99aX9PAgrtvRZSeNP1OJjrcEvqtIU2pKR0gI2GoSEboYvYZ2oi', 1, NULL, '2022-12-21 03:10:27', '2022-12-21 03:10:27', '68846732', NULL, NULL),
(45, 'Jazmyne Yundt', 'pariatur-vel', 'americo.oconnell@gmail.com', NULL, '$2y$10$SPaCmOWJ76t3qhsFUH7nyOK4REvryUrsa5i8adZ4ZM7tw1ggZEn9W', 0, NULL, '2022-12-21 03:10:28', '2022-12-21 03:10:28', '7315688', NULL, NULL),
(46, 'Ollie Sanford', 'qui-dicta-facilis', 'ilabadie@larkin.com', NULL, '$2y$10$fztXovvOyaEw4LfK3aWLbubwQ.HouOXEUNaXZrlxHR170TdRu.EXO', 1, NULL, '2022-12-21 03:10:28', '2022-12-21 03:10:28', '93938239', NULL, NULL),
(47, 'Mr. Rahul Mosciski', 'eveniet-omnis-sunt-ullam', 'bhodkiewicz@gmail.com', NULL, '$2y$10$W7LE9Q0/XbriIl1Eratr0elYEkafqIQD9RiIdCxMqyo86cVk.cZdq', 1, NULL, '2022-12-21 03:10:28', '2022-12-21 03:10:28', '57362032', NULL, NULL),
(48, 'Lia Emard', 'dolorem-at-nemo-est', 'mcollier@hettinger.biz', NULL, '$2y$10$6kKr9AMbA5J8oZlOcW1sxelvmfjewQFbJotjZ3uzywjd2EN/oQ/qy', 1, NULL, '2022-12-21 03:10:28', '2022-12-21 03:10:28', '64334352', NULL, NULL),
(49, 'Jennie Daniel', 'iure-sint-eum-consequatur', 'kara.fadel@conn.com', NULL, '$2y$10$uaxyau5sHDMQvf/2BMuqCuOHW5tqydGb821WR4SAatigZATUGCJTC', 1, NULL, '2022-12-21 03:10:28', '2022-12-21 03:10:28', '29556855', NULL, NULL),
(51, 'Sienna Gutmann', 'quam-dolores-esse-voluptas-quo', 'columbus.okuneva@hotmail.com', NULL, '$2y$10$vUnR.FKA3XZ0XUAOYpz9gernpQlI3HMxzGd.M81kh9aOIt1DRDF22', 1, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '92525200', NULL, NULL),
(52, 'Woodrow Nolan', 'est-harum-cumque', 'fahey.chet@waters.com', NULL, '$2y$10$ieS0.OtRklAatERkhnRTvOr6L9PONTeC7V4qJ0Wp2JA2IaVunGnQi', 1, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '16887397', NULL, NULL),
(53, 'Monserrat Gerhold', 'tempore-voluptatem-quia-et', 'nsteuber@yahoo.com', NULL, '$2y$10$upVoqYkOUfH4Ckc/Yg81Qe/4Fak8UBpoEWtX.HDF/h1tS5QlYFjqW', 1, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '60723217', NULL, NULL),
(54, 'Prof. Weldon Moen', 'dolor-deserunt-consequuntur', 'rkoch@schimmel.com', NULL, '$2y$10$LFtDyu68kmas8UgqJygLsuiVKntKh0K.cDPUj/INgPMoQjqr.cQYS', 1, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '12297958', NULL, NULL),
(55, 'Miss Delores Gottlieb II', 'consequatur-ut-nobis-suscipit', 'ryann.bechtelar@lynch.com', NULL, '$2y$10$rBrV5Bhi6m2dgDgh/FAsqeKvz5lTFRlVqtgcI7rlhBy5ugPk2IsWK', 1, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '91380347', NULL, NULL),
(56, 'Theron Walker', 'temporibus-debitis-qui-repellat-animi', 'cwintheiser@hotmail.com', NULL, '$2y$10$m1n556RF8TEYuVBxGb/3OeWaeWF5hLAyFwc7zBvwnbEylHzqNFkRG', 0, NULL, '2022-12-21 03:10:29', '2022-12-21 03:10:29', '73852477', NULL, NULL),
(57, 'Buford Roberts', 'itaque-ullam-a-pariatur', 'tyrique01@kuvalis.com', NULL, '$2y$10$XVo.4eW4sTWnaNv8yFImveCI47HfYLMuxH2ZSmOMDUhaZKgF2O11C', 1, NULL, '2022-12-21 03:10:29', '2023-01-12 23:32:44', '14012684', NULL, NULL),
(58, 'Ms. Rosamond Mante', 'et-qui-blanditiis', 'greenfelder.everardo@hotmail.com', NULL, '$2y$10$aqYMxJ0DmUsLjK4wOG2f8ODNzKeoxc52Q4aZhSU5hf4/rXvmGVoKm', 0, NULL, '2022-12-21 03:10:30', '2022-12-21 03:10:30', '85222811', NULL, NULL),
(59, 'Clementina Koch', 'vel-dolor-nam-voluptatum', 'triston18@gmail.com', NULL, '$2y$10$fybo3q0/zkEPrAc.UJVR5uvcEMi2u2FETLS1suZrjucHntX5FKJn6', 0, NULL, '2022-12-21 03:10:30', '2022-12-21 03:10:30', '27593920', NULL, NULL),
(60, 'Cielo Wisozk', 'a-est', 'triston.sporer@hotmail.com', NULL, '$2y$10$A0vznrgh49NkLnLKFYqMpOB3muWlvgSoqgF7PdHNwuLvwLnEZmsZm', 0, NULL, '2022-12-21 03:10:30', '2022-12-21 03:10:30', '85627792', NULL, NULL),
(61, 'Mrs. Marlene Klocko', 'enim-similique-ad-a', 'filiberto96@kreiger.com', NULL, '$2y$10$lT0q2.cMKnT97gvQDz8A9uyb9Jxe7lm98hi60KRxu.FsV2di6O2Xy', 1, NULL, '2022-12-21 03:10:30', '2022-12-21 03:10:30', '72798645', NULL, NULL),
(62, 'Elena Dicki', 'et-at-perferendis-harum', 'sawayn.vena@koch.com', NULL, '$2y$10$hY/TtsgYXAV7V4oAW7QeV.HnInm/1r3J1xQbKoNOrpivGiTIW4S7W', 0, NULL, '2022-12-21 03:10:30', '2022-12-21 05:21:13', '96392900', NULL, NULL),
(63, 'Rafael Romaguera', 'aut-sequi-sed-est-molestiae', 'heidi.stokes@yahoo.com', NULL, '$2y$10$xjPrdWecPO9YVZCXi8m.kuOVS.3gnkDiE5QR.ARCNf8olP1ch4SZS', 1, NULL, '2022-12-21 03:10:30', '2022-12-21 03:10:30', '6806888', NULL, NULL),
(64, 'Caitlyn Murphy', 'molestias-et-ipsum-dolor', 'gregory21@yahoo.com', NULL, '$2y$10$NA4nNGe6dQT8PpqGbMVzUONLgrI7WsD6I0piG/XZBwTdb3XSFtA4S', 1, NULL, '2022-12-21 03:10:31', '2022-12-21 03:10:31', '34554182', NULL, NULL),
(65, 'Kristoffer Klocko', 'vel-itaque-et', 'elwyn40@weber.org', NULL, '$2y$10$PTgUmv0n3l7.Ds2zAo46zOuMuUVlnMVnkNHqK9IHPiolJfaxsiD2W', 0, NULL, '2022-12-21 03:10:31', '2022-12-21 03:10:31', '2953828', NULL, NULL),
(66, 'Miss Maya Watsica', 'ullam-nobis-et-non', 'dax.barrows@kulas.biz', NULL, '$2y$10$YwYuGB5LlFiFKi9wmmM9NefOhy6ACkIoISh496sNXtg7m/0nzJjte', 1, NULL, '2022-12-21 03:10:31', '2022-12-21 03:10:31', '30132620', NULL, NULL),
(67, 'Carrie Schmidt', 'fuga-quae-tenetur', 'carlo71@yahoo.com', NULL, '$2y$10$D321f4BruSgEcD/hL/eefeEAJA8eF8MWjzN.nNOlCDdLP7tdct0yu', 1, NULL, '2022-12-21 03:10:31', '2022-12-21 03:10:31', '41250180', NULL, NULL),
(68, 'Ryann Berge', 'vero-autem-et', 'bergstrom.hilbert@gmail.com', NULL, '$2y$10$abT4DqvvJr3zW5d/1FrqOeoaiU4.jXsiWvMG4ZEV45XSxkt3R8CDu', 1, NULL, '2022-12-21 03:10:32', '2022-12-21 03:10:32', '30376356', NULL, NULL),
(69, 'Percival Doyle', 'pariatur-doloremque-est-odit', 'annetta08@gmail.com', NULL, '$2y$10$tmkRLD5xXl78yshd0fwcYOEWIa7NKql38yqCRKxlperMH8W721152', 1, NULL, '2022-12-21 03:10:32', '2022-12-21 03:10:32', '97817578', NULL, NULL),
(70, 'Evan Runolfsdottir', 'officia-dignissimos-quis', 'kohler.bria@yahoo.com', NULL, '$2y$10$4OwEhfBG9ynn7Bd8qKf7ROKDcLP7ujUpVogQvoTh/OxU9WDC4RdL6', 1, NULL, '2022-12-21 03:10:32', '2022-12-21 03:10:32', '23487949', NULL, NULL),
(71, 'Mae Hirthe', 'maxime-totam-sit-nihil', 'pfannerstill.abelardo@crona.info', NULL, '$2y$10$85RW4EDjBFyLLr2jnYfASekgUvEbxksDlyv312kwAcBkYFAP3zd/G', 1, NULL, '2022-12-21 03:10:32', '2022-12-21 03:10:32', '12007692', NULL, NULL),
(74, 'Pradipta S Bhuin', '1671615540139592-pradipta-s-bhuin', 'pradipta1@gmai.com', NULL, 'pradipta@gmai.com', 1, NULL, NULL, NULL, '143879', NULL, NULL),
(75, 'Pradipta S Bhuin', '1671615592496356-pradipta-s-bhuin', 'pradipta2@gmai.com', NULL, 'pradipta@gmai.com', 1, NULL, NULL, NULL, '893395', NULL, NULL),
(76, 'Pradipta S Bhuin', '1671623906202025-pradipta-s-bhuin', 'pradipta556@gmai.com', NULL, '$2y$10$YnuT1QLm12C1jZ1riO6NR.jyg1vWIuMiRC1XH4zAe9yz9k9WZ2Bsi', 1, NULL, '2022-12-21 06:28:26', '2022-12-21 06:28:26', NULL, NULL, NULL),
(77, 'Pradipta S Bhuin', '1671793805485769-pradipta-s-bhuin', 'pradipta5567@gmai.com', NULL, '$2y$10$O/BN06Jf1Fq3zxYI8/KZ.uE6Rwh.tWdg./n7OLsePUf7/A7M3Sss6', 1, NULL, '2022-12-23 05:40:05', '2022-12-23 05:40:05', NULL, NULL, NULL),
(79, 'Pradipta S Bhuin', '1672385399229656-pradipta-s-bhuin', 'john@mail.com', NULL, '$2y$10$Tb9CmJwh0ztbRF2KvcmlAec2RSK3oh8FJv.1A/4fY8KpO601QCl3O', 1, NULL, '2022-12-30 01:59:59', '2022-12-30 01:59:59', NULL, NULL, NULL),
(80, 'Mujtaba habib', 'mujtaba-habib', 'habib@mail.com', NULL, '$2y$10$wkYTkQ9cvouy3kXm4Ga8uuDVT09TlPKejw43uFB9rtfd51gvx7M/S', 1, NULL, '2023-01-03 04:57:11', '2023-01-03 04:57:11', NULL, NULL, NULL),
(81, 'test', 'test', 'test1@mail.com', NULL, '$2y$10$5IN8tuadItO78BGFwxrP9uvuxVST1.4dE115NKdoNTA9vcFf6aati', 1, NULL, '2023-01-12 01:41:35', '2023-01-12 23:32:40', NULL, NULL, NULL),
(82, 'igi226', 'igi226', 'igi226@goigi.in', NULL, '$2y$10$tCoHrgs1np8Sj11A6S9xwuCACMubb8IWmEm43vLWUVThQ1Qrv2PrS', 1, NULL, '2023-02-20 23:59:49', '2023-02-20 23:59:49', NULL, NULL, NULL),
(83, 'r', 'r', 'r@gmail.com', NULL, '$2y$10$JVqeEFONiOTxL2/cZgpZ9enmlk4OUCgstudzW84M7dU7qxZbVLUFC', 1, NULL, '2023-04-04 07:07:11', '2023-04-04 07:07:11', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_cms`
--

CREATE TABLE `video_cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_cms`
--

INSERT INTO `video_cms` (`id`, `title`, `description`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text1', 'of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NV4g4ZWj6nA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '2023-01-10 00:29:26', '2023-01-10 01:04:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_slug_unique` (`slug`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consult_appointments`
--
ALTER TABLE `consult_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_cms`
--
ALTER TABLE `video_cms`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consult_appointments`
--
ALTER TABLE `consult_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `video_cms`
--
ALTER TABLE `video_cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
