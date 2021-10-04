-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2021 at 04:12 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `documentportaltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutdepartments`
--

CREATE TABLE `aboutdepartments` (
  `id` bigint UNSIGNED NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` tinyint(1) NOT NULL,
  `iconclass` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enauthor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malauthor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `activitytypes_id` bigint UNSIGNED NOT NULL,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int NOT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int NOT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int NOT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activitytypes`
--

CREATE TABLE `activitytypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activitytypes`
--

INSERT INTO `activitytypes` (`id`, `entitle`, `maltitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'dssddf', 'ലോഗോ', 1, 2, '2021-05-19 13:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `activityuploads`
--

CREATE TABLE `activityuploads` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities_id` bigint UNSIGNED NOT NULL,
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appdepartments`
--

CREATE TABLE `appdepartments` (
  `id` bigint UNSIGNED NOT NULL,
  `deptcategories_id` bigint NOT NULL,
  `departments_id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabout` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malabout` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enstructure` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malstructure` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrelatedlinks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malrelatedlinks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enservices` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malservices` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appsections`
--

CREATE TABLE `appsections` (
  `id` bigint UNSIGNED NOT NULL,
  `ensectionname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsectionname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensectiondetails` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsectiondetails` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `appdepartments_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archivepolicies`
--

CREATE TABLE `archivepolicies` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articlecategories`
--

CREATE TABLE `articlecategories` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articlecategories`
--

INSERT INTO `articlecategories` (`id`, `entitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'Informations', 1, 1, '2021-05-19 15:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enauthor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malauthor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` tinyint(1) NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `extras` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `articlecategories_id` bigint UNSIGNED NOT NULL,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int NOT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int DEFAULT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int DEFAULT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `poster`, `alt`, `entooltip`, `maltooltip`, `entitle`, `maltitle`, `ensubtitle`, `malsubtitle`, `enauthor`, `malauthor`, `enbrief`, `malbrief`, `encontent`, `malcontent`, `components_id`, `homepagestatus`, `extras`, `articlecategories_id`, `contributor_status`, `contributor_userid`, `contributor_timestamp`, `moderator_remarks`, `moderator_status`, `moderator_userid`, `moderator_timestamp`, `approve_remarks`, `approve_status`, `approve_userid`, `approve_timestamp`, `lock_status`, `status`, `users_id`, `created_at`) VALUES
(1, 'article1905202121:11:47.jpg', 'test', 'test', 'ലോഗോലോഗോ', 'Historic 5 years', 'ചരിത്രപരമായ', 'Pinarayi Vijayan', 'പിണറായി വിജയൻ', 'Chief Minister of Kerala', 'കേരള മുഖ്യമന്ത്രി', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 1, 1, 'dsdfsd', 1, 1, 2, '2021-05-19 15:41:47', NULL, 0, NULL, NULL, NULL, 2, 1, '2021-05-19 16:43:18', 0, 1, 2, '2021-05-19 15:41:47'),
(2, 'article1905202121:11:47.jpg', 'test', 'test', 'ലോഗോലോഗോ', 'Historic 5 years', 'ചരിത്രപരമായ', 'Pinarayi Vijayan', 'പിണറായി വിജയൻ', 'Chief Minister of Kerala', 'കേരള മുഖ്യമന്ത്രി', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 1, 1, 'dsdfsd', 1, 1, 2, '2021-05-19 15:41:47', NULL, 0, NULL, NULL, NULL, 2, 1, '2021-05-19 16:43:18', 0, 1, 2, '2021-05-19 15:41:47'),
(3, 'article1905202121:11:47.jpg', 'test', 'test', 'ലോഗോലോഗോ', 'Historic 5 years', 'ചരിത്രപരമായ', 'Pinarayi Vijayan', 'പിണറായി വിജയൻ', 'Chief Minister of Kerala', 'കേരള മുഖ്യമന്ത്രി', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 1, 1, 'dsdfsd', 1, 1, 2, '2021-05-19 15:41:47', NULL, 0, NULL, NULL, NULL, 2, 1, '2021-05-19 16:43:18', 0, 1, 2, '2021-05-19 15:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `articleuploads`
--

CREATE TABLE `articleuploads` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `articles_id` bigint UNSIGNED NOT NULL,
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colorclass` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` bigint NOT NULL,
  `articles_id` bigint NOT NULL,
  `menulinktypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communicationattachments`
--

CREATE TABLE `communicationattachments` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `communications_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `committees_id` bigint NOT NULL,
  `communicationtypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communicationtypes`
--

CREATE TABLE `communicationtypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `componentarticles`
--

CREATE TABLE `componentarticles` (
  `id` bigint UNSIGNED NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` tinyint(1) NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `maplinks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int DEFAULT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int DEFAULT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int DEFAULT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `componentarticles`
--

INSERT INTO `componentarticles` (`id`, `iconclass`, `entooltip`, `maltooltip`, `entitle`, `maltitle`, `ensubtitle`, `malsubtitle`, `encontent`, `malcontent`, `components_id`, `homepagestatus`, `maplinks`, `contributor_status`, `contributor_userid`, `contributor_timestamp`, `moderator_remarks`, `moderator_status`, `moderator_userid`, `moderator_timestamp`, `approve_remarks`, `approve_status`, `approve_userid`, `approve_timestamp`, `lock_status`, `status`, `users_id`, `created_at`) VALUES
(1, 'fas fa-globe-americas fa-4x accessibledarktext', 'State Portal', 'State Portal', 'State Portal', 'സ്റ്റേറ്റ് പോർട്ടൽ', 'State Portal', 'സ്റ്റേറ്റ് പോർട്ടൽ', '<p>State Portal</p>', '<p>State Portal<br></p>', 20, 0, 'https://kerala.gov.in', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, '2021-05-20 10:32:57', 0, 1, 2, '2021-05-20 10:25:57'),
(2, 'fas fa-hands-helping fa-4x accessibledarktext', 'Citizen Service Portal', 'സിറ്റിസൺ സർവീസ് പോർട്ടൽ', 'Citizen Service Portal', 'സിറ്റിസൺ സർവീസ് പോർട്ടൽ', 'Citizen Service Portal', 'സിറ്റിസൺ സർവീസ് പോർട്ടൽ', '<p>Citizen Service Portal</p>', '<p>Citizen Service Portal<br></p>', 20, 0, 'https://kerala.gov.in', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, '2021-05-20 10:32:57', 0, 1, 2, '2021-05-20 10:25:57'),
(3, 'fas fa-receipt fa-4x accessibledarktext', 'Noticeboard Portal', 'നോട്ടീസ്ബോർഡ് പോർട്ടൽ', 'Noticeboard Portal', 'നോട്ടീസ്ബോർഡ് പോർട്ടൽ', 'Noticeboard Portal', 'നോട്ടീസ്ബോർഡ് പോർട്ടൽ', '<p>Noticeboard Portal</p>', '<p>Noticeboard Portal<br></p>', 20, 0, 'https://kerala.gov.in', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, '2021-05-20 10:32:57', 0, 1, 2, '2021-05-20 10:25:57'),
(4, 'fas fa-chart-line  fa-4x accessibledarktext', 'Dashboard Portal', 'ഡാഷ്‌ബോർഡ് പോർട്ടൽ', 'Dashboard Portal', 'ഡാഷ്‌ബോർഡ് പോർട്ടൽ', 'Dashboard Portal', 'ഡാഷ്‌ബോർഡ് പോർട്ടൽ', '<p>Dashboard Portal</p>', '<p>Dashboard Portal</p>', 20, 0, 'https://kerala.gov.in', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 2, '2021-05-20 10:32:57', 0, 1, 2, '2021-05-20 10:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `componentpermissions`
--

CREATE TABLE `componentpermissions` (
  `id` bigint UNSIGNED NOT NULL,
  `components_id` bigint UNSIGNED NOT NULL,
  `usertypes_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` tinyint NOT NULL,
  `sitestatus` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `entitle`, `order`, `sitestatus`, `status`, `users_id`, `created_at`) VALUES
(1, 'Article', 1, 0, 1, 1, '2021-05-19 15:28:33'),
(2, 'Component Master', 1, 0, 1, 1, '2021-04-07 19:02:23'),
(3, 'Header Button', 2, 0, 1, 1, '2021-04-07 23:38:51'),
(4, 'Whats new', 3, 0, 1, 1, '2021-04-07 23:38:51'),
(5, 'About department', 4, 0, 1, 1, '2021-04-07 23:38:51'),
(6, 'About Portal', 5, 0, 1, 1, '2021-04-07 23:38:51'),
(7, 'Contact us', 6, 0, 1, 1, '2021-04-07 23:38:51'),
(8, 'Archive policy', 7, 0, 1, 1, '2021-04-07 23:38:51'),
(9, 'Support centers', 8, 0, 1, 1, '2021-04-07 23:38:51'),
(10, 'Help', 9, 0, 1, 1, '2021-04-07 23:38:51'),
(11, 'Guidelines', 10, 0, 1, 1, '2021-04-07 23:38:51'),
(12, 'Service info', 11, 0, 1, 1, '2021-04-07 23:38:51'),
(13, 'Address with map', 12, 0, 1, 1, '2021-04-07 23:38:51'),
(14, 'Site compatibility info', 13, 0, 1, 1, '2021-04-07 23:38:51'),
(15, 'Digital info', 14, 0, 1, 1, '2021-04-07 23:38:51'),
(16, 'Copyright Policy', 15, 0, 1, 1, '2021-04-07 23:38:51'),
(17, 'Hyperlink Policy', 16, 0, 1, 1, '2021-04-07 23:38:51'),
(18, 'Privacy Policy', 17, 0, 1, 1, '2021-04-07 23:38:51'),
(19, 'Terms and Condition', 18, 0, 1, 1, '2021-04-07 23:38:51'),
(20, 'Service Link', 19, 0, 1, 1, '2021-04-07 23:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `contenttypes`
--

CREATE TABLE `contenttypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contenttypes`
--

INSERT INTO `contenttypes` (`id`, `entitle`, `maltitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'shabeeba', 'ദ്വ്സ്ഫ്ഖ്', 1, 1, '2021-05-17 15:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `deptcategories_id` bigint NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `deptcategories_id`, `entitle`, `maltitle`, `status`, `users_id`, `created_at`) VALUES
(1, 1, 'Agriculture Dept', 'Agriculture Dept', 1, 1, '2021-05-13 05:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `deptcategories`
--

CREATE TABLE `deptcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deptcategories`
--

INSERT INTO `deptcategories` (`id`, `entitle`, `maltitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'Secretariat Dept', 'Secretariat Dept', 1, 1, '2021-05-13 05:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `deptintroductions`
--

CREATE TABLE `deptintroductions` (
  `id` bigint UNSIGNED NOT NULL,
  `file1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enuser1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maluser1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endesg1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maldesg1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enuser2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maluser2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endesg2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maldesg2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documentactions`
--

CREATE TABLE `documentactions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentactions`
--

INSERT INTO `documentactions` (`id`, `name`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Entered', 1, 1, NULL, NULL),
(2, 'Viewed', 1, 1, NULL, NULL),
(3, 'Forwarded', 1, 1, NULL, NULL),
(4, 'Approved', 1, 1, NULL, NULL),
(5, 'Reverted', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documentcategories`
--

CREATE TABLE `documentcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endeptlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maldeptlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_fielddeptlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mal_fielddeptlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_fromdtlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mal_fromdtlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_todtlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mal_todtlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_gonumberlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mal_gonumberlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enkeywordlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malkeywordlbl` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentcategories`
--

INSERT INTO `documentcategories` (`id`, `name`, `remarks`, `endeptlbl`, `maldeptlbl`, `en_fielddeptlbl`, `mal_fielddeptlbl`, `en_fromdtlbl`, `mal_fromdtlbl`, `en_todtlbl`, `mal_todtlbl`, `en_gonumberlbl`, `mal_gonumberlbl`, `enkeywordlbl`, `malkeywordlbl`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'DeptDocFull\r\n\r\n', 'Sec.Dept, Field Dept, Date, title, pdf\r\n\r\n', 'Secretariat Department', 'സെക്രട്ടേറിയറ്റ് വകുപ്പ്', 'Field Department', 'ലൈൻ വകുപ്പ്', 'From Date ', 'മുതൽ ', ' To Date ', 'വരെ', 'Number ', 'നമ്പർ ', 'Keyword', 'സൂചകപദം', 1, 1, NULL, NULL),
(2, 'DeptDoc\r\n\r\n', 'Dept, Date, title, pdf\r\n\r\n', 'Secretariat Department', 'സെക്രട്ടേറിയറ്റ് വകുപ്പ്', NULL, NULL, 'From Date ', 'മുതൽ ', ' To Date ', 'വരെ', 'Number ', 'നമ്പർ ', 'Keyword', 'സൂചകപദം', 1, 1, NULL, NULL),
(3, 'GenDoc\r\n\r\n', 'title, pdf\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(4, 'Publication\r\n\r\n', 'poster, Date, title, pdf\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(5, 'External Content\r\n\r\n', 'Title, external link\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(6, 'SP Content\r\n\r\n', 'Title,content\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documentorigins`
--

CREATE TABLE `documentorigins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentorigins`
--

INSERT INTO `documentorigins` (`id`, `name`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'API', 1, 1, NULL, NULL),
(2, 'Porting', 1, 1, NULL, NULL),
(3, 'DataEntry', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documentprocessings`
--

CREATE TABLE `documentprocessings` (
  `id` bigint UNSIGNED NOT NULL,
  `documents_id` bigint UNSIGNED NOT NULL,
  `currentowner` bigint UNSIGNED NOT NULL,
  `contributor_status` tinyint NOT NULL DEFAULT '0',
  `contributor_id` bigint UNSIGNED NOT NULL,
  `contributor_timestamp` timestamp NOT NULL,
  `contributor_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `moderator_status` tinyint NOT NULL DEFAULT '0',
  `moderator_id` bigint UNSIGNED DEFAULT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `approver_status` tinyint NOT NULL DEFAULT '0',
  `approver_id` bigint UNSIGNED DEFAULT NULL,
  `approver_timestamp` timestamp NULL DEFAULT NULL,
  `approver_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentprocessings`
--

INSERT INTO `documentprocessings` (`id`, `documents_id`, `currentowner`, `contributor_status`, `contributor_id`, `contributor_timestamp`, `contributor_remarks`, `moderator_status`, `moderator_id`, `moderator_timestamp`, `moderator_remarks`, `approver_status`, `approver_id`, `approver_timestamp`, `approver_remarks`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 3, '2021-06-16 07:58:37', NULL, 2, 4, '2021-06-16 08:50:03', 'qwertyu', 2, 5, '2021-06-16 09:46:59', 'wertyu', 1, '2021-06-16 07:58:37', '2021-06-16 09:46:59'),
(2, 2, 3, 1, 3, '2021-06-16 09:05:07', NULL, 2, 4, '2021-06-17 09:54:02', 'ok accpeted', 0, NULL, NULL, NULL, 1, '2021-06-16 09:05:07', '2021-06-17 09:54:02'),
(3, 3, 3, 2, 3, '2021-06-16 09:06:46', NULL, 0, 4, '2021-06-16 09:08:09', 'reject', 0, NULL, NULL, NULL, 1, '2021-06-16 09:06:46', '2021-06-16 09:08:09'),
(4, 4, 3, 1, 3, '2021-06-16 09:07:44', NULL, 2, 4, '2021-06-16 09:33:31', 'wertyui', 0, NULL, NULL, NULL, 1, '2021-06-16 09:07:44', '2021-06-16 09:33:31'),
(5, 5, 3, 1, 3, '2021-06-16 09:09:01', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 09:09:01', '2021-06-16 09:09:01'),
(6, 6, 3, 1, 3, '2021-06-16 09:12:35', NULL, 2, 4, '2021-06-17 04:57:07', 'okhjg', 2, 5, '2021-06-17 04:58:53', 'sdfsfsdfsdf', 1, '2021-06-16 09:12:35', '2021-06-17 04:58:53'),
(7, 7, 3, 1, 3, '2021-06-16 09:18:43', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 09:18:43', '2021-06-16 09:18:43'),
(8, 8, 3, 1, 3, '2021-06-16 09:20:20', NULL, 2, 4, '2021-06-16 09:20:48', NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 09:20:20', '2021-06-16 09:20:48'),
(9, 9, 3, 1, 3, '2021-06-16 09:25:32', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 09:25:32', '2021-06-16 09:25:32'),
(10, 10, 3, 1, 3, '2021-06-16 09:34:50', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 09:34:50', '2021-06-16 09:34:50'),
(11, 11, 3, 1, 3, '2021-06-16 13:45:15', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-16 13:45:15', '2021-06-16 13:45:15'),
(12, 12, 3, 1, 3, '2021-06-17 05:09:29', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:09:29', '2021-06-17 05:09:29'),
(13, 13, 3, 1, 3, '2021-06-17 05:40:01', NULL, 2, 4, '2021-06-16 07:05:10', 'ok verified', 2, 5, '2021-06-17 09:28:36', 'ok aapproved', 1, '2021-06-17 05:40:01', '2021-06-17 09:28:36'),
(14, 14, 3, 1, 3, '2021-06-17 05:40:43', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:40:43', '2021-06-17 05:40:43'),
(15, 15, 3, 2, 3, '2021-06-17 05:41:18', NULL, 2, 4, '2021-06-19 07:09:11', 'acts and rules', 0, NULL, NULL, NULL, 1, '2021-06-17 05:41:18', '2021-06-19 07:09:11'),
(16, 16, 3, 1, 3, '2021-06-17 05:41:50', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:41:50', '2021-06-17 05:41:50'),
(17, 17, 3, 1, 3, '2021-06-17 05:42:32', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:42:32', '2021-06-17 05:42:32'),
(18, 18, 3, 1, 3, '2021-06-17 05:43:04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:43:04', '2021-06-17 05:43:04'),
(19, 19, 3, 1, 3, '2021-06-17 05:43:41', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:43:41', '2021-06-17 05:43:41'),
(20, 20, 3, 1, 3, '2021-06-17 05:44:13', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 05:44:13', '2021-06-17 05:44:13'),
(21, 21, 3, 1, 3, '2021-06-17 06:03:34', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:03:34', '2021-06-17 06:03:34'),
(22, 22, 3, 1, 3, '2021-06-17 06:03:39', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:03:39', '2021-06-17 06:03:39'),
(23, 23, 3, 1, 3, '2021-06-17 06:04:06', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:04:06', '2021-06-17 06:04:06'),
(24, 24, 3, 1, 3, '2021-06-17 06:05:48', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:05:48', '2021-06-17 06:05:48'),
(25, 25, 3, 1, 3, '2021-06-17 06:08:25', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:08:25', '2021-06-17 06:08:25'),
(26, 26, 3, 1, 3, '2021-06-17 06:11:30', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-17 06:11:30', '2021-06-17 06:11:30'),
(27, 27, 3, 1, 3, '2021-06-19 06:38:21', NULL, 2, 4, '2021-06-19 06:44:33', 'qwewrewr', 0, NULL, NULL, NULL, 1, '2021-06-19 06:38:21', '2021-06-19 06:44:33'),
(28, 28, 3, 1, 3, '2021-06-19 08:32:30', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-19 08:32:30', '2021-06-19 08:32:30'),
(29, 29, 3, 1, 3, '2021-06-19 08:38:31', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-19 08:38:31', '2021-06-19 08:38:31'),
(30, 30, 3, 1, 3, '2021-06-19 12:33:37', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-19 12:33:37', '2021-06-19 12:33:37'),
(31, 31, 3, 1, 3, '2021-06-28 06:46:59', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 06:46:59', '2021-06-28 06:46:59'),
(32, 32, 3, 1, 3, '2021-06-28 07:22:53', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 07:22:53', '2021-06-28 07:22:53'),
(33, 33, 3, 1, 3, '2021-06-28 07:25:11', NULL, 2, 4, '2021-06-28 07:26:07', 'ok verified', 0, NULL, NULL, NULL, 1, '2021-06-28 07:25:11', '2021-06-28 07:26:07'),
(34, 34, 3, 1, 3, '2021-06-28 08:12:43', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:12:43', '2021-06-28 08:12:43'),
(35, 35, 3, 1, 3, '2021-06-28 08:14:01', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:14:01', '2021-06-28 08:14:01'),
(36, 36, 3, 1, 3, '2021-06-28 08:14:31', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:14:31', '2021-06-28 08:14:31'),
(37, 37, 3, 1, 3, '2021-06-28 08:15:27', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:15:27', '2021-06-28 08:15:27'),
(38, 38, 3, 1, 3, '2021-06-28 08:16:13', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:16:13', '2021-06-28 08:16:13'),
(39, 39, 3, 1, 3, '2021-06-28 08:17:32', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:17:32', '2021-06-28 08:17:32'),
(40, 40, 3, 1, 3, '2021-06-28 08:19:04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:19:04', '2021-06-28 08:19:04'),
(41, 41, 3, 1, 3, '2021-06-28 08:20:38', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:20:38', '2021-06-28 08:20:38'),
(42, 42, 3, 1, 3, '2021-06-28 08:21:38', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 08:21:38', '2021-06-28 08:21:38'),
(43, 43, 3, 1, 3, '2021-06-28 08:59:54', NULL, 2, 4, '2021-06-28 09:04:24', 'ok approved', 0, NULL, NULL, NULL, 1, '2021-06-28 08:59:54', '2021-06-28 09:04:24'),
(44, 44, 3, 1, 3, '2021-07-06 15:04:04', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-07-06 15:04:04', '2021-07-06 15:04:04'),
(45, 45, 3, 1, 3, '2021-07-06 15:16:36', NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-07-06 15:16:36', '2021-07-06 15:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `documenttypes_id` bigint UNSIGNED NOT NULL,
  `documentnumber` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `originaldocnumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documentdate` date DEFAULT NULL,
  `filepath` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `departments_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `fielddepartments_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `referencedoc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencefile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `published` tinyint NOT NULL DEFAULT '0',
  `publishedtimestamp` timestamp NULL DEFAULT NULL,
  `incomingtimestamp` timestamp NULL DEFAULT NULL,
  `documentorigins_id` bigint UNSIGNED NOT NULL,
  `stories` int NOT NULL DEFAULT '0',
  `entitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `enabstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `malabstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `enkeywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `malkeywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `documentcategories_id` bigint NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `size` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `documenttypes_id`, `documentnumber`, `originaldocnumber`, `documentdate`, `filepath`, `departments_id`, `fielddepartments_id`, `referencedoc`, `referencefile`, `published`, `publishedtimestamp`, `incomingtimestamp`, `documentorigins_id`, `stories`, `entitle`, `maltitle`, `enabstract`, `malabstract`, `encontent`, `malcontent`, `enkeywords`, `malkeywords`, `documentcategories_id`, `poster`, `size`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '1231', '1323213', '2021-06-16', 'cabinet1606202113:28:37.pdf', '1', '3', NULL, NULL, 1, '2021-06-16 07:58:37', NULL, 3, 0, 'qwasdaeqwe', 'സന്ദേശത്തിന്റെ', NULL, NULL, NULL, NULL, 'agri', NULL, 1, NULL, '177779', 'Cabinet Decision', 1, '2021-06-16 07:58:37', '2021-06-16 07:58:37'),
(2, 2, '456', '45678', '2021-06-10', 'cabinet1606202114:35:07.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:05:07', NULL, 3, 0, 'dfgh', 'റ്റ്യു', NULL, NULL, NULL, NULL, 'djnxcdc hcbwhc hc bhw', 'വെസെ', 1, NULL, '177779', 'Cabinet Decision', 1, '2021-06-16 09:05:07', '2021-06-16 09:05:07'),
(3, 3, '123', 'റ്റ്യു', '2021-06-10', 'circular1606202114:36:46.pdf', '1', '3', NULL, NULL, 1, '2021-06-16 09:06:46', NULL, 3, 0, 'dkdiwc', 'റ്റ്യു', NULL, NULL, NULL, NULL, 'cwxwe', 'മൊര്റ്റ്യു', 1, NULL, '177779', 'Circulars', 1, '2021-06-16 09:06:46', '2021-06-16 09:06:46'),
(4, 9, NULL, NULL, '2021-06-09', 'citizen1606202114:37:44.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:07:44', NULL, 3, 0, 'fwfwfw', 'എവ്ദെ', NULL, NULL, NULL, NULL, 'dfweffre', 'എവ്ദ്വ്ഫെ', 1, NULL, '177779', 'Guidelines', 1, '2021-06-16 09:07:44', '2021-06-16 09:07:44'),
(5, 9, NULL, NULL, '2021-06-16', 'citizen1606202114:39:01.pdf', '1', '3', NULL, NULL, 1, '2021-06-16 09:09:01', NULL, 3, 0, 'swwwwwwwwwd', 'ദ്ജ്വ്ദ്വിഎനെവിജെവിഹ്,', NULL, NULL, NULL, NULL, 'udjwecjweic', 'ഉച്വുമ്ജിനിനി', 1, NULL, '177779', 'Guidelines', 1, '2021-06-16 09:09:01', '2021-06-16 09:09:01'),
(6, 2, '5678', '345678', '2021-06-08', 'cabinet1606202114:42:35.pdf', '1', '3', NULL, NULL, 1, '2021-06-16 09:12:35', NULL, 3, 0, 'drfthuji', 'മ്ക്ദ്ജെവൊ', NULL, NULL, NULL, NULL, 'kdcwokc', 'ഉധ്ജെവ്ന്ര്വു', 1, NULL, '177779', 'Cabinet Decision', 1, '2021-06-16 09:12:35', '2021-06-16 09:12:35'),
(7, 3, '21312', 'ഫെവ്ര്ഫ്രെ', '2021-06-08', 'circular1606202114:48:43.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:18:43', NULL, 3, 0, 'dswfefdww', 'ദ്വ്വെഫ്ദെവ്ഫെ', NULL, NULL, NULL, NULL, 'cdscsd', 'സ്ദ്വ്ഫ്ദെ', 1, NULL, '177779', 'Circulars', 1, '2021-06-16 09:18:43', '2021-06-16 09:18:43'),
(8, 5, NULL, NULL, '2021-06-07', 'actrules1606202114:50:20.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:20:20', NULL, 3, 0, 'ertyui', 'വെര്റ്റ്യു', NULL, NULL, NULL, NULL, 'qwertyui', 'വെര്റ്റ്യുഇഒജ്നുഹു', 1, NULL, '177779', 'RTI document', 1, '2021-06-16 09:20:20', '2021-06-16 09:20:20'),
(9, 6, NULL, NULL, '2021-06-08', 'ordinance1606202114:55:32.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:25:32', NULL, 3, 0, 'dwqdwqd', 'ദ്വെഫ്ദെവ്ഫെ', NULL, NULL, NULL, NULL, 'dsqdqwedew', 'എവ്ഫ്വ്ഫ്വെ', 1, NULL, '177779', 'Ordinance', 1, '2021-06-16 09:25:32', '2021-06-16 09:25:32'),
(10, 7, NULL, NULL, '2021-06-15', 'notification1606202115:04:50.pdf', '1', '1', NULL, NULL, 1, '2021-06-16 09:34:50', NULL, 3, 0, 'wertyui', 'എഎര്', NULL, NULL, NULL, NULL, 'ertyuio', 'എര്റ്റ്യു', 1, NULL, '177779', 'Notification', 1, '2021-06-16 09:34:50', '2021-06-16 09:34:50'),
(11, 1, '5555', '5555', '2021-06-10', 'govtorder1906202117:58:35.pdf', '1', '1', NULL, NULL, 1, '2021-06-19 12:28:35', NULL, 3, 0, 'test new go', NULL, '<p><br></p>', '<p><br></p>', NULL, NULL, 'test', NULL, 1, NULL, '177779', 'Government Order', 1, '2021-06-16 13:45:15', '2021-06-19 12:28:35'),
(12, 1, 'test', 'സഹായിക്കുക', '2021-06-17', 'govtorder1706202110:39:29.pdf', '1', '1', 'tests', 'refgovtorder1706202110:39:29.pdf', 1, '2021-06-17 05:09:29', NULL, 3, 0, 'test', 'സഹായിക്കുക', '<p>asasA</p>', '<p>asAS</p>', NULL, NULL, 'SAD', 'സഹായിക്കുക', 1, NULL, '962742', 'Government Order', 1, '2021-06-17 05:09:29', '2021-06-17 05:09:29'),
(13, 2, 'test', 'സഹായിക്കുക', '2021-06-12', 'cabinet1706202111:10:01.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:40:01', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'DFGDF', 'സഹായിക്കുക', 1, NULL, '962742', 'Cabinet Decision', 1, '2021-06-17 05:40:01', '2021-06-17 05:40:01'),
(14, 3, 'test', 'സഹായിക്കുക', '2021-06-11', 'circular1706202111:10:43.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:40:43', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'SDG', 'സഹായിക്കുക', 1, NULL, '962742', 'Circulars', 1, '2021-06-17 05:40:43', '2021-06-17 05:40:43'),
(15, 5, NULL, NULL, '2021-06-11', 'actrules1706202111:11:18.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:41:18', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'XFS', 'സഹായിക്കുക', 1, NULL, '962742', 'RTI document', 1, '2021-06-17 05:41:18', '2021-06-17 05:41:18'),
(16, 6, NULL, NULL, '2021-06-11', 'ordinance1706202111:11:50.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:41:50', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'RTRT', 'സഹായിക്കുക', 1, NULL, '962742', 'Ordinance', 1, '2021-06-17 05:41:50', '2021-06-17 05:41:50'),
(17, 7, NULL, NULL, '2021-06-10', 'notification1706202111:12:32.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:42:32', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'RGDFGDF', 'സഹായിക്കുക', 1, NULL, '962742', 'Notification', 1, '2021-06-17 05:42:32', '2021-06-17 05:42:32'),
(18, 9, NULL, NULL, '2021-06-11', 'citizen1706202111:13:04.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:43:04', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'DFSDF', 'സഹായിക്കുക', 1, NULL, '962742', 'Guidelines', 1, '2021-06-17 05:43:04', '2021-06-17 05:43:04'),
(19, 12, NULL, NULL, '2021-06-10', 'workstudy1706202111:13:41.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:43:41', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'DFDG', 'സഹായിക്കുക', 1, NULL, '962742', 'Work Study Report', 1, '2021-06-17 05:43:41', '2021-06-17 05:43:41'),
(20, 13, NULL, NULL, '2021-06-11', 'general1706202111:14:13.pdf', '1', '1', NULL, NULL, 1, '2021-06-17 05:44:13', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'DFGFDG', 'സഹായിക്കുക', 3, NULL, '962742', 'General Report', 1, '2021-06-17 05:44:13', '2021-06-17 05:44:13'),
(21, 15, NULL, NULL, NULL, 'budget1706202111:33:34.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-17 06:03:34', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'sds', 'സഹായിക്കുക', 5, NULL, '962742', 'State Budget', 1, '2021-06-17 06:03:34', '2021-06-17 06:03:34'),
(22, 15, NULL, NULL, NULL, 'budget1706202111:33:39.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-17 06:03:39', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'sdsdfdf', 'സഹായിക്കുക', 5, NULL, '962742', 'State Budget', 1, '2021-06-17 06:03:39', '2021-06-17 06:03:39'),
(23, 15, NULL, NULL, NULL, 'budget1706202111:34:06.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-17 06:04:06', NULL, 3, 0, 'test2', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'zdd', 'സഹായിക്കുക', 5, NULL, '962742', 'State Budget', 1, '2021-06-17 06:04:06', '2021-06-17 06:04:06'),
(24, 16, NULL, NULL, NULL, 'economic1706202111:35:48.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-17 06:05:48', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'fgfsdf', 'സഹായിക്കുക', 5, NULL, '962742', 'Economic Review', 1, '2021-06-17 06:05:48', '2021-06-17 06:05:48'),
(25, 17, NULL, NULL, NULL, 'yearplan1706202111:38:25.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-17 06:08:25', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'dfsd', 'സഹായിക്കുക', 5, NULL, '962742', 'Five Year Plan', 1, '2021-06-17 06:08:25', '2021-06-17 06:08:25'),
(26, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-06-17 06:11:30', NULL, 3, 0, 'test', 'സഹായിക്കുക', NULL, NULL, '<p>zxZ</p>', '<p>ZXZ</p>', 'zxZX', 'സഹായിക്കുക', 6, NULL, NULL, NULL, 1, '2021-06-17 06:11:30', '2021-06-17 06:11:30'),
(27, 2, '1003', '1003', '2021-06-11', 'cabinet1906202112:08:20.pdf', '1', '1', NULL, NULL, 1, '2021-06-19 06:38:20', NULL, 3, 0, 'qwasdaeqwe', 'സന്ദേശത്തിന്റെ', NULL, NULL, NULL, NULL, '2324dfsdfdg', NULL, 1, NULL, '177779', 'Cabinet Decision', 1, '2021-06-19 06:38:20', '2021-06-19 06:38:20'),
(28, 14, NULL, NULL, '2021-06-09', 'file1906202114:02:30.pdf', '1', '1', NULL, NULL, 1, '2021-06-19 08:32:30', NULL, 3, 0, 'qwasdaeqwe', 'സന്ദേശത്തിന്റെ', NULL, NULL, NULL, NULL, 'fsdfsd', 'സന്ദേശത്തിന്റെ', 4, 'poster1906202114:02:30.jpg', '32524', 'altttxcxz', 1, '2021-06-19 08:32:30', '2021-06-19 08:32:30'),
(29, 15, NULL, NULL, NULL, 'budget1906202114:08:31.pdf', NULL, NULL, NULL, NULL, 1, '2021-06-19 08:38:31', NULL, 3, 0, 'test', 'സന്ദേശത്തിന്റെ', NULL, NULL, NULL, NULL, 'weqe', NULL, 5, NULL, '177779', 'State Budget', 1, '2021-06-19 08:38:31', '2021-06-19 08:38:31'),
(30, 3, '123', '1323', '2021-06-03', 'cabinet1906202118:03:36.pdf', '1', '1', NULL, NULL, 1, '2021-06-19 12:36:15', NULL, 3, 0, 'test1', 'സന്ദേശത്തിന്റെ', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '177779', 'Cabinet Decision', 1, '2021-06-19 12:33:36', '2021-06-19 12:36:15'),
(31, 1, 'dfgdfgdf', NULL, '2021-06-23', 'govtorder2806202112:16:58.pdf', '1', '1', 'asdasdasds', 'refgovtorder2806202112:16:58.pdf', 1, '2021-06-28 06:46:59', NULL, 3, 0, 'dsfsdfs', 'സഹായിക്കുക', '<p>sadas</p>', '<p>asd</p>', NULL, NULL, 'asdasd', 'സഹായിക്കുക', 1, NULL, '962742', 'Government Order', 1, '2021-06-28 06:46:59', '2021-06-28 06:46:59'),
(32, 1, 'fddg', 'സഹായിക്കുക', '2021-06-11', 'govtorder2806202112:52:53.pdf', '1', '1', '3234234432', NULL, 1, '2021-06-28 09:09:52', NULL, 3, 0, 'sdfsdf', 'സഹായിക്കുക', '<p>fdgdfgdf</p>', '<p>ewrweRWERWser342342342342#$@#$23</p>', NULL, NULL, 'xczczxczx', 'സഹായിക്കുക', 1, NULL, '962742', 'Government Order', 1, '2021-06-28 07:22:53', '2021-06-28 09:09:52'),
(33, 2, 'test', 'സഹായിക്കുക', '2021-06-17', 'cabinet2806202112:55:11.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 07:25:11', NULL, 3, 0, 'test123', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'sdasd', 'സഹായിക്കുക', 1, NULL, '962742', 'Cabinet Decision', 1, '2021-06-28 07:25:11', '2021-06-28 07:25:11'),
(34, 3, 'test', 'സഹായിക്കുക', '2021-06-17', 'circular2806202113:42:43.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:12:43', NULL, 3, 0, 'test12223', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'dasd', 'സഹായിക്കുക', 1, NULL, '962742', 'Circulars', 1, '2021-06-28 08:12:43', '2021-06-28 08:12:43'),
(35, 6, NULL, NULL, '2021-06-23', 'ordinance2806202113:44:00.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:14:01', NULL, 3, 0, 'test123', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'hhgj', 'സഹായിക്കുക', 1, NULL, '962742', 'Ordinance', 1, '2021-06-28 08:14:01', '2021-06-28 08:14:01'),
(36, 6, NULL, NULL, '2021-06-17', 'ordinance2806202113:44:31.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:14:31', NULL, 3, 0, 'test2121', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'kjgjb', 'സഹായിക്കുക', 1, NULL, '962742', 'Ordinance', 1, '2021-06-28 08:14:31', '2021-06-28 08:14:31'),
(37, 7, NULL, NULL, '2021-06-17', 'notification2806202113:45:27.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:15:27', NULL, 3, 0, 'test113', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'hghg', 'സഹായിക്കുക', 1, NULL, '962742', 'Notification', 1, '2021-06-28 08:15:27', '2021-06-28 08:15:27'),
(38, 7, NULL, NULL, '2021-06-09', 'notification2806202113:46:13.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:16:13', NULL, 3, 0, 'test121', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'fjfj', 'സഹായിക്കുക', 1, NULL, '962742', 'Notification', 1, '2021-06-28 08:16:13', '2021-06-28 08:16:13'),
(39, 9, NULL, NULL, '2021-06-09', 'citizen2806202113:47:32.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:17:32', NULL, 3, 0, 'test121', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'ghghg', 'സഹായിക്കുക', 1, NULL, '962742', 'Guidelines', 1, '2021-06-28 08:17:32', '2021-06-28 08:17:32'),
(40, 12, NULL, NULL, '2021-06-17', 'workstudy2806202113:49:04.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:19:04', NULL, 3, 0, 'test1212', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'jghgj', 'സഹായിക്കുക', 1, NULL, '962742', 'Work Study Report', 1, '2021-06-28 08:19:04', '2021-06-28 08:19:04'),
(41, 13, NULL, NULL, '2021-06-10', 'general2806202113:50:38.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:20:38', NULL, 3, 0, 'test12212', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'jfjf', 'സഹായിക്കുക', 3, NULL, '962742', 'General Report', 1, '2021-06-28 08:20:38', '2021-06-28 08:20:38'),
(42, 14, NULL, NULL, '2021-06-18', 'file2806202113:51:38.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:21:38', NULL, 3, 0, 'test1212', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'fjg', 'സഹായിക്കുക', 4, 'poster2806202113:51:38.jpg', '32222222222222222222222222222222222222222222222222', 'test', 1, '2021-06-28 08:21:38', '2021-06-28 08:21:38'),
(43, 5, NULL, NULL, '2021-06-10', 'actrules2806202114:29:54.pdf', '1', '1', NULL, NULL, 1, '2021-06-28 08:59:54', NULL, 3, 0, 'test1234', 'സഹായിക്കുക', NULL, NULL, NULL, NULL, 'sdasdsdfsdfsd', 'സഹായിക്കുക', 1, NULL, '962742', 'RTI document', 1, '2021-06-28 08:59:54', '2021-06-28 08:59:54'),
(44, 1, 'asdasdas', '12345', '2021-02-01', 'govtorder0607202120:34:04.pdf', '1', '1', NULL, NULL, 1, '2021-07-06 15:04:04', NULL, 3, 0, 'asdasdasd', NULL, '<p>sASASDSFSDFDF</p>', '<p><br></p>', NULL, NULL, 'ASDASDASDASD', NULL, 1, NULL, '177779', 'Government Order', 1, '2021-07-06 15:04:04', '2021-07-06 15:04:04'),
(45, 4, NULL, NULL, '2020-01-02', 'policy0607202120:46:36.pdf', '1', '1', NULL, NULL, 1, '2021-07-06 15:16:36', NULL, 3, 0, 'assssdd', NULL, NULL, NULL, NULL, NULL, 'asdasdad', NULL, 1, NULL, '177779', 'Policy', 1, '2021-07-06 15:16:36', '2021-07-06 15:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `documenttypes`
--

CREATE TABLE `documenttypes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewdays` int NOT NULL,
  `archivedays` int NOT NULL,
  `cmap` int NOT NULL,
  `documentcategories_id` bigint UNSIGNED NOT NULL,
  `iconclass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documenttypes`
--

INSERT INTO `documenttypes` (`id`, `name`, `malname`, `reviewdays`, `archivedays`, `cmap`, `documentcategories_id`, `iconclass`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Government Order', 'സർക്കാർ ഉത്തരവുകൾ', 5, 5, 7, 1, 'fas fa-folder-open primarydarktext fa-4x', 1, 1, NULL, NULL),
(2, 'Cabinet Decision', 'കാബിനറ്റ് തീരുമാനം', 5, 5, 7, 1, 'fas fa-quote-right primarydarktext fa-4x', 1, 1, NULL, NULL),
(3, 'Circulars', 'സർക്കുലറുകൾ', 5, 5, 7, 1, 'fas fa-clipboard primarydarktext fa-4x', 1, 1, NULL, NULL),
(4, 'Policies', 'Policies', 5, 5, 7, 2, NULL, 2, 1, NULL, NULL),
(5, 'Acts and Rules', 'Acts and Rules', 5, 5, 7, 2, NULL, 1, 1, NULL, NULL),
(6, 'Ordinance', 'ഓർഡിനൻസ്', 5, 5, 7, 1, 'fas fa-book-reader primarydarktext fa-4x', 1, 1, NULL, NULL),
(7, 'Notification', 'Notification', 5, 5, 7, 2, NULL, 2, 1, NULL, NULL),
(8, 'Guidelines', 'Guidelines', 5, 5, 7, 2, NULL, 2, 1, NULL, NULL),
(9, 'Citizen Charter', 'Citizen Charter', 5, 5, 7, 2, NULL, 1, 1, NULL, NULL),
(10, 'Disciplinary Action', 'Disciplinary Action', 5, 5, 7, 2, NULL, 2, 1, NULL, NULL),
(11, 'FAQ', 'FAQ', 5, 5, 7, 2, NULL, 2, 1, NULL, NULL),
(12, 'Work Study Report', 'Work Study Report', 5, 5, 7, 2, NULL, 1, 1, NULL, NULL),
(13, 'General Report', 'General Report', 5, 5, 7, 2, NULL, 1, 1, NULL, NULL),
(14, 'Publication', 'Publication', 5, 5, 7, 4, NULL, 2, 1, NULL, NULL),
(15, 'State Budget', 'State Budget', 5, 5, 7, 5, NULL, 1, 1, NULL, NULL),
(16, 'Economic Review', 'Economic Review', 5, 5, 7, 5, NULL, 1, 1, NULL, NULL),
(17, 'Five Year Plan', 'Five Year Plan', 5, 5, 7, 5, NULL, 1, 1, NULL, NULL),
(18, 'Right to Service', 'Right to Service', 5, 5, 7, 6, NULL, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadtypes_id` bigint UNSIGNED NOT NULL,
  `archivepolicies_id` bigint UNSIGNED NOT NULL,
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloadtypes`
--

CREATE TABLE `downloadtypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `enquestion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malquestion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enanswer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malanswer` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fielddepartments`
--

CREATE TABLE `fielddepartments` (
  `id` bigint UNSIGNED NOT NULL,
  `departments_id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fielddepartments`
--

INSERT INTO `fielddepartments` (`id`, `departments_id`, `name`, `malname`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Agriculture Dept', '', 1, 1, NULL, NULL),
(3, 1, 'shabeeba', 'ജ്വ്ല്ക്ഫ്ദ്സ്', 1, 1, '2021-05-18 12:38:56', '2021-05-18 12:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `filetypes`
--

CREATE TABLE `filetypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footerlinks`
--

CREATE TABLE `footerlinks` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footermenus`
--

CREATE TABLE `footermenus` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footermenus`
--

INSERT INTO `footermenus` (`id`, `file`, `alt`, `entitle`, `maltitle`, `encontent`, `malcontent`, `components_id`, `status`, `users_id`, `created_at`) VALUES
(1, '', '', 'About the portal', 'About the portal', 'This is the Official State Service Portal of Kerala. The portal is owned by Kerala State Information Technology Mission and the content managed by Information Public Relations Department. Designed and developed by Tata Consultancy Services (TCS) the portal has been developed following the State Service Delivery Gateway (SSDG) project, formulated under the National e-Governance Plan (NeGP) for providing easy and convenient services to the citizens through remote access. ', 'This is the Official State Service Portal of Kerala. The portal is owned by Kerala State Information Technology Mission and the content managed by Information Public Relations Department. Designed and developed by Tata Consultancy Services (TCS) the portal has been developed following the State Service Delivery Gateway (SSDG) project, formulated under the National e-Governance Plan (NeGP) for providing easy and convenient services to the citizens through remote access. ', 0, 1, 2, '2021-05-27 08:14:29'),
(2, '', 'ASDASDASD', 'Hyperlink policy', 'Hyperlink policy', 'The hyperlinking policy enumerates the detailed criteria and guidelines with respect to hyperlinks with other sites. The basic hyperlinking practices and rules should ideally be common across the websites of a any Government entity e.g., State/Ministry.', 'The hyperlinking policy enumerates the detailed criteria and guidelines with respect to hyperlinks with other sites. The basic hyperlinking practices and rules should ideally be common across the websites of a any Government entity e.g., State/Ministry.', 17, 1, 2, '2021-05-27 08:14:29'),
(3, '', 'Privacy', 'Privacy policy', 'Privacy policy', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 18, 1, 2, '2021-05-27 08:20:19'),
(4, '', 'Disclaimer', 'Disclaimer', 'Disclaimer', '\r\n\r\nAlthough information and contents of various departmental websites of this portal have been put with care and diligence, Government of Kerala does not take responsibility on how this information is used or the consequences of its use. In case of any inconsistency/confusion, the user should contact the concerned Department/Officer of Kerala Government for further clarifications.\r\n\r\nThis is the State Portal of Government of Kerala developed with an objective to provide single source of information for all government matters and all transactional government services for citizens, businesses and overseas people. The content in this portal is the result of the collaborative effort of all Departments, Public Sector Undertakings (PSUs), Commissions, Universities, Boards, and other Institutions under Government of Kerala. Information Public Relations Department manages the content of this State Portal of Government of Kerala. This Portal is the Mission Mode Project under the E-Governance Plan, developed by CDIT and owned by Kerala State IT Mission (KSITM).\r\n', 'This is the State Portal of Government of Kerala developed with an objective to provide single source of information for all government matters and all transactional government services for citizens, businesses and overseas people. The content in this portal is the result of the collaborative effort of all Departments, Public Sector Undertakings (PSUs), Commissions, Universities, Boards, and other Institutions under Government of Kerala. Information Public Relations Department manages the content of this State Portal of Government of Kerala. This Portal is the Mission Mode Project under the E-Governance Plan, developed by CDIT and owned by Kerala State IT Mission (KSITM).', 0, 1, 2, '2021-05-27 08:20:19'),
(5, '', 'Copyright', 'Copyright Policy', 'Copyright Policy', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 16, 1, 2, '2021-05-27 08:20:19'),
(6, '', 'Terms', 'Terms and Conditions', 'Terms and Conditions', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 19, 1, 2, '2021-05-27 08:20:19'),
(7, '', 'ggggg', 'Guidelines', 'Guidelines', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 'A Privacy Policy is a statement or a legal document that states how a company or website collects, handles and processes data of its customers and visitors. It explicitly describes whether that information is kept confidential, or is shared with or sold to third parties.', 11, 1, 2, '2021-05-27 08:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `file`, `alt`, `entitle`, `maltitle`, `ensubtitle`, `malsubtitle`, `iconclass`, `status`, `users_id`, `created_at`) VALUES
(1, '', '', 'This portal is part of the Government of Kerala state portal. <br>Portal is owned by KSITM and contents are owned by I &amp; PRD. <br>Portal is designed and developed by C-DIT. <br>', 'This portal is part of the Government of Kerala state portal. <br>Portal is owned by KSITM and contents are owned by I &amp; PRD. <br>Portal is designed and developed by C-DIT. <br>', 'Government of Kerala ', 'Government of Kerala ', 'far fa-copyright', 1, 1, '2021-05-27 07:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities_id` int NOT NULL,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int NOT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int NOT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int NOT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleryitems`
--

CREATE TABLE `galleryitems` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hierarchies`
--

CREATE TABLE `hierarchies` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infolinks`
--

CREATE TABLE `infolinks` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livestreamings`
--

CREATE TABLE `livestreamings` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `logotype` int NOT NULL DEFAULT '0' COMMENT '0-default,1-header logo,2-footerlogo',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `file`, `alt`, `url`, `entooltip`, `maltooltip`, `status`, `logotype`, `users_id`, `created_at`) VALUES
(1, 'logo1504202115:21:43.png', 'sdfsdfsd', 'sdsd', 'logo', 'ലോഗോ', 1, 1, 2, '2021-05-19 11:51:37'),
(2, 'logo2805202113:34:36.png', 'Government of Kerala', 'http://kerala.gov.in', 'Government of Kerala', 'കേരള സർക്കാർ', 1, 2, 2, '2021-05-28 08:04:36'),
(3, 'logo2805202114:12:28.png', 'Dashboard Portal', 'https://kerala.gov.in', 'Dashboard Portal', 'സംസ്ഥാനം', 1, 2, 2, '2021-05-28 08:42:28'),
(4, 'logo2805202114:14:49.png', 'Citizen portal', 'https://kerala.gov.in', 'Citizen Service portal', 'സിറ്റിസൺ സർവീസ് പോർട്ടൽ', 1, 2, 2, '2021-05-28 08:44:49'),
(5, 'logo2805202114:16:29.png', 'Noticeboard', 'https://kerala.gov.in', 'Noticeboard portal', 'നോട്ടീസ്ബോർഡ് പോർട്ടൽ', 1, 2, 2, '2021-05-28 08:46:29'),
(6, 'logo2805202114:18:26.png', 'India Gov', 'https://india.gov.in', 'India Gov', 'ഇന്ത്യ സർക്കാർ', 1, 2, 2, '2021-05-28 08:48:26'),
(7, 'logo2805202114:20:31.png', 'Data Gov', 'https://data.gov.in', 'Data gov', 'ഇന്ത്യ', 1, 2, 2, '2021-05-28 08:50:31'),
(8, 'logo2805202114:22:50.png', 'Digital Ind', 'https://india.gov.in', 'Digital India', 'ഡിജിറ്റൽ ഇന്ത്യ', 1, 2, 2, '2021-05-28 08:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `longalerts`
--

CREATE TABLE `longalerts` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '1',
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainmenus`
--

CREATE TABLE `mainmenus` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menulinktypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mediaalerts`
--

CREATE TABLE `mediaalerts` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malbrief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '1',
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int NOT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int NOT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int NOT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membershiprequests`
--

CREATE TABLE `membershiprequests` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `offices_id` bigint UNSIGNED NOT NULL,
  `departments_id` bigint UNSIGNED NOT NULL,
  `designations_id` bigint UNSIGNED NOT NULL,
  `mobile` bigint NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menulinktypes`
--

CREATE TABLE `menulinktypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_044210_create_usertypes_table', 1),
(5, '2021_04_07_045041_create_components_table', 1),
(6, '2021_04_07_045330_create_menulinktypes_table', 1),
(7, '2021_04_07_045603_create_articlecategories_table', 1),
(8, '2021_04_07_045756_create_activitytypes_table', 1),
(9, '2021_04_07_045958_create_designations_table', 1),
(10, '2021_04_07_050146_create_departments_table', 1),
(11, '2021_04_07_050327_create_hierarchies_table', 1),
(12, '2021_04_07_050540_create_staffcategories_table', 1),
(13, '2021_04_07_050701_create_contenttypes_table', 1),
(14, '2021_04_07_050923_create_filetypes_table', 1),
(15, '2021_04_07_051103_create_downloadtypes_table', 1),
(16, '2021_04_07_051205_create_archivepolicies_table', 1),
(17, '2021_04_07_051306_create_sitesettings_table', 1),
(18, '2021_04_07_051408_create_sitecontrollabels_table', 1),
(19, '2021_04_07_051527_create_communicationtypes_table', 1),
(20, '2021_04_07_052043_create_languages_table', 1),
(21, '2021_04_07_052155_create_componentpermissions_table', 1),
(22, '2021_04_07_052305_create_logos_table', 1),
(23, '2021_04_07_052353_create_titles_table', 1),
(24, '2021_04_07_052500_create_banners_table', 1),
(25, '2021_04_07_052603_create_promocampaigns_table', 1),
(26, '2021_04_07_052657_create_footers_table', 1),
(27, '2021_04_07_052752_create_footermenus_table', 1),
(28, '2021_04_07_052913_create_footerlinks_table', 1),
(29, '2021_04_07_053018_create_socialmedia_table', 1),
(30, '2021_04_07_053227_create_galleries_table', 1),
(31, '2021_04_07_053347_create_galleryitems_table', 1),
(32, '2021_04_07_053507_create_newsletters_table', 1),
(33, '2021_04_07_053604_create_newslettervolumes_table', 1),
(34, '2021_04_07_053731_create_mainmenus_table', 1),
(35, '2021_04_07_053928_create_submenus_table', 1),
(36, '2021_04_07_054050_create_articles_table', 1),
(37, '2021_04_07_054219_create_articleuploads_table', 1),
(38, '2021_04_07_054419_create_activities_table', 1),
(39, '2021_04_07_054556_create_activityuploads_table', 1),
(40, '2021_04_07_054917_create_buttons_table', 1),
(41, '2021_04_07_055015_create_downloads_table', 1),
(42, '2021_04_07_055109_create_deptintroductions_table', 1),
(43, '2021_04_07_055205_create_shortalerts_table', 1),
(44, '2021_04_07_055244_create_longalerts_table', 1),
(45, '2021_04_07_055357_create_communications_table', 1),
(46, '2021_04_07_055451_create_communicationattachments_table', 1),
(47, '2021_04_07_055544_create_offices_table', 1),
(48, '2021_04_07_055715_create_membershiprequests_table', 1),
(49, '2021_04_07_055852_create_staff_table', 1),
(50, '2021_04_07_060008_create_committees_table', 1),
(51, '2021_04_07_060051_create_staffcommittees_table', 1),
(52, '2021_04_08_083121_create_faqs_table', 1),
(54, '2021_04_08_083401_create_servicelinks_table', 1),
(55, '2021_04_08_083453_create_infolinks_table', 1),
(56, '2021_04_08_083543_create_widgetlinks_table', 1),
(57, '2021_04_08_083717_create_appdepartments_table', 1),
(58, '2021_04_08_083816_create_appsections_table', 1),
(59, '2021_04_20_085209_create_whatsnews_table', 1),
(60, '2021_04_20_114605_create_livestreamings_table', 1),
(61, '2021_04_21_110542_create_aboutdepartments_table', 1),
(62, '2021_04_23_052209_create_deptcategories_table', 1),
(63, '2021_04_27_160155_create_mediaalerts_table', 1),
(64, '2021_05_10_202710_create_documentactions_table', 2),
(65, '2021_05_12_112345_create_documentcategories_table', 3),
(66, '2021_05_10_202538_create_documenttypes_table', 4),
(67, '2021_05_12_204423_create_documentcategories_table', 5),
(68, '2021_05_10_202648_create_documentorigins_table', 6),
(69, '2021_05_12_205559_create_documentactions_table', 7),
(70, '2021_05_12_211144_create_fielddepartments_table', 8),
(71, '2021_04_08_083244_create_componentarticles_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contributor_status` int NOT NULL DEFAULT '0',
  `contributor_userid` int NOT NULL,
  `contributor_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_status` int NOT NULL DEFAULT '0',
  `moderator_userid` int NOT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `approve_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve_status` int NOT NULL DEFAULT '0',
  `approve_userid` int NOT NULL,
  `approve_timestamp` timestamp NULL DEFAULT NULL,
  `lock_status` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newslettervolumes`
--

CREATE TABLE `newslettervolumes` (
  `id` bigint UNSIGNED NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `releasedate` date NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enaddress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maladdress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumbers` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promocampaigns`
--

CREATE TABLE `promocampaigns` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endesc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maldesc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filetypes_id` bigint UNSIGNED NOT NULL,
  `contenttypes_id` bigint UNSIGNED NOT NULL,
  `displaystatus` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicelinks`
--

CREATE TABLE `servicelinks` (
  `id` bigint UNSIGNED NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shortalerts`
--

CREATE TABLE `shortalerts` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortalerts`
--

INSERT INTO `shortalerts` (`id`, `entitle`, `maltitle`, `ensubtitle`, `malsubtitle`, `encontent`, `malcontent`, `homepagestatus`, `status`, `users_id`, `created_at`) VALUES
(1, 'frontpage', 'test', 'sub test', 'sub test', '<i class=\"fas fa-check-double hvr-icon\"></i>&nbsp; All alerts will be listed here. Alerts are important information that is to be conveyed to the users, either regarding this portal or any other matter of immediate attention.', '<i class=\"fas fa-check-double hvr-icon\"></i>&nbsp; All alerts will be listed here. Alerts are important information that is to be conveyed to the users, either regarding this portal or any other matter of immediate attention.', 1, 1, 2, '2021-05-19 15:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `sitecontrollabels`
--

CREATE TABLE `sitecontrollabels` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitecontrollabels`
--

INSERT INTO `sitecontrollabels` (`id`, `entitle`, `maltitle`, `status`, `users_id`, `created_at`) VALUES
(1, '<p class=\"h5 pt-2\"> This is the document repository portal. </p> <br> <p class=\"\"> This portal is the official repository of all kinds of documents pertaining to the Government of Kerala. You can download and use the documents as needed. Reproduction of the material shall strictly adhere to the terms and conditions stipulated in the portal. </p>', '<p class=\"h5 pt-2\"> This is the document repository portal. </p> <br> <p class=\"\"> This portal is the official repository of all kinds of documents pertaining to the Government of Kerala. You can download and use the documents as needed. Reproduction of the material shall strictly adhere to the terms and conditions stipulated in the portal. </p>', 1, 2, '2021-05-19 14:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `url`, `iconclass`, `entitle`, `maltitle`, `entooltip`, `maltooltip`, `status`, `users_id`, `created_at`) VALUES
(1, 'https://www.facebook.com/keralainformation/', 'fab fa-facebook-f', 'facebook', 'ഫേസ് ബുക്ക്', 'facebook', 'ഫേസ് ബുക്ക്', 1, 2, '2021-05-28 09:02:06'),
(2, 'https://twitter.com/keralainfoiprd', 'fab fa-twitter', 'twitter', 'ട്വിറ്റർ', 'twitter', 'ട്വിറ്റർ', 1, 2, '2021-05-28 09:04:08'),
(3, 'https://www.youtube.com/iprdkerala', 'fab fa-youtube', 'youtube', 'യൂട്യൂബ്', 'youtube', 'യൂട്യൂബ്', 1, 2, '2021-05-28 09:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `offices_id` bigint UNSIGNED NOT NULL,
  `departments_id` bigint UNSIGNED NOT NULL,
  `designations_id` bigint UNSIGNED NOT NULL,
  `staffcategories_id` bigint UNSIGNED NOT NULL,
  `hierarchies_id` bigint UNSIGNED NOT NULL,
  `mobile` bigint NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `joindate` date NOT NULL,
  `poster` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffcategories`
--

CREATE TABLE `staffcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffcommittees`
--

CREATE TABLE `staffcommittees` (
  `id` bigint UNSIGNED NOT NULL,
  `staffs_id` bigint UNSIGNED NOT NULL,
  `committees_id` bigint UNSIGNED NOT NULL,
  `hierarchies_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `documents_id` bigint UNSIGNED NOT NULL,
  `storycategories_id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `published` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `documents_id`, `storycategories_id`, `entitle`, `maltitle`, `encontent`, `malcontent`, `published`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Historic 5 years', 'ചരിത്രപരമായ', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 0, 1, 7, '2021-05-17 17:26:47', '2021-05-18 14:10:53'),
(2, 2, 1, 'Historic 5 years', 'ചരിത്രപരമായ', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 0, 1, 7, '2021-05-17 17:26:47', '2021-05-18 14:10:53'),
(3, 2, 1, 'Historic 5 years', 'ചരിത്രപരമായ', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', '<h5 class=\"card-title\">Historic 5 years of Governance </h5>\r\n\r\nPinarayi Vijayan <br>\r\nChief Minister of Kerala\r\n<br><br>\r\n\r\n<p class=\"eng_xxxs\">We had ensured that no one would have to go hungry \r\nduring the pandemic. We have fought two consecutive floods and the \r\nongoing pandemic effectively. We considered each challenge and crisis as\r\n a new opportunity.</p>\r\n          <p class=\"eng_xxxs\"> The resounding victory of the LDF \r\nemphasizes the people\'s support for the Government. The basis of the \r\npeople\'s faith in this Government is that it works tirelessly to ensure \r\nthe welfare of the people, and that it is capable of formulating \r\ncomprehensive plans for the all-round development of the State. The \r\nrecently introduced Budget for 2021-22 re-affirms the Government\'s \r\ncommitment to protect that trust more firmly.  </p>', 0, 1, 7, '2021-05-17 17:26:47', '2021-05-18 14:10:53'),
(10, 2, 1, 'qwasdaeqwe', NULL, '<p><br></p>', '<p>ഗ്ഫുട്ട്ഗ്സ്ധുഹ്ജ്</p>', 0, 1, 7, '2021-06-04 14:07:34', '2021-06-07 11:49:26'),
(11, 2, 1, 'test gopika', NULL, '<p>appu <br></p>', '<p>appu </p>', 0, 1, 7, '2021-06-05 15:51:02', '2021-06-05 15:51:02'),
(12, 2, 1, 'sdfsdfsdfs', NULL, '<p>Historic 5 years of Governance </p>\n\n<p>\nPinarayi Vijayan <br>\nChief Minister of Kerala\n<br><br>\n</p>\n\n<p>We had ensured that no one would have to go hungry \nduring the pandemic. We have fought two consecutive floods and the \nongoing pandemic effectively. We considered each challenge and crisis as\n a new opportunity.</p>\n          <p> The resounding victory of the LDF \nemphasizes the people\'s support for the Government. The basis of the \npeople\'s faith in this Government is that it works tirelessly to ensure \nthe welfare of the people, and that it is capable of formulating \ncomprehensive plans for the all-round development of the State. The \nrecently introduced Budget for 2021-22 re-affirms the Government\'s \ncommitment to protect that trust more firmly.  </p>', '<p>Historic 5 years of Governance </p>\n\n<p>\nPinarayi Vijayan <br>\nChief Minister of Kerala\n<br><br>\n</p>\n\n<p>We had ensured that no one would have to go hungry \nduring the pandemic. We have fought two consecutive floods and the \nongoing pandemic effectively. We considered each challenge and crisis as\n a new opportunity.</p>\n          <p> The resounding victory of the LDF \nemphasizes the people\'s support for the Government. The basis of the \npeople\'s faith in this Government is that it works tirelessly to ensure \nthe welfare of the people, and that it is capable of formulating \ncomprehensive plans for the all-round development of the State. The \nrecently introduced Budget for 2021-22 re-affirms the Government\'s \ncommitment to protect that trust more firmly.  </p>', 0, 1, 7, '2021-06-05 16:32:34', '2021-06-05 16:32:34'),
(13, 2, 1, 'abcdefgh', 'എഴുത്ത്', '<p><br></p>', '<p><br></p>', 0, 1, 7, '2021-06-05 17:25:36', '2021-06-05 17:26:03'),
(14, 2, 1, 'ssafsdf', 'എഴുത്ത്', '<p><br></p>', '<p><br></p>', 0, 1, 7, '2021-06-05 17:43:39', '2021-06-05 18:40:45'),
(15, 2, 1, 'dasdasda', 'എഴുത്ത്', '<p>ssfsdfsdfsdfs<br></p>', '<p>എഴുത്ത്</p>\n\n<p><br></p>', 0, 1, 7, '2021-06-05 18:47:16', '2021-06-05 18:47:16'),
(16, 11, 1, 'test story', NULL, '<p>test story</p>', '<p>test story</p>', 0, 1, 7, '2021-06-16 13:49:00', '2021-06-16 13:49:00'),
(17, 12, 1, 'test', 'സഹായിക്കുക', '<p>asa</p>', '<p>Asas</p>', 0, 1, 7, '2021-06-17 10:07:10', '2021-06-17 10:07:10'),
(18, 12, 1, 'test123111', 'സഹായിക്കുക', '<p>fggfg</p>', '<p>jhj</p>', 0, 1, 7, '2021-06-28 09:06:58', '2021-06-28 09:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `storyattachments`
--

CREATE TABLE `storyattachments` (
  `id` bigint UNSIGNED NOT NULL,
  `stories_id` bigint UNSIGNED NOT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filetype` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storyattachments`
--

INSERT INTO `storyattachments` (`id`, `stories_id`, `file`, `filetype`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(5, 1, 'story31705202122:52:40.jpg', 'jpg', 1, 7, '2021-05-18 14:10:53', '2021-05-18 14:10:53'),
(6, 2, 'story31705202122:47:07.jpg', 'jpg', 1, 7, '2021-05-18 14:10:53', '2021-05-18 14:10:53'),
(7, 3, 'story21705202122:47:07.jpg', 'jpg', 1, 7, '2021-05-18 14:10:53', '2021-05-18 14:10:53'),
(9, 13, 'story10506202122:55:36.pdf', 'pdf', 1, 7, '2021-06-05 17:25:36', '2021-06-05 17:25:36'),
(10, 14, 'story10506202123:13:39.pdf', 'pdf', 1, 7, '2021-06-05 17:43:39', '2021-06-05 17:43:39'),
(11, 15, 'story10606202100:17:16.pdf', 'pdf', 1, 7, '2021-06-05 18:47:16', '2021-06-05 18:47:16'),
(12, 10, 'story10706202117:03:41.jpg', 'jpeg', 1, 7, '2021-06-07 11:33:41', '2021-06-07 11:33:41'),
(13, 16, 'story11606202119:19:00.png', 'png', 1, 7, '2021-06-16 13:49:00', '2021-06-16 13:49:00'),
(14, 17, 'story11706202115:37:10.jpg', 'jpg', 1, 7, '2021-06-17 10:07:10', '2021-06-17 10:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `storycategories`
--

CREATE TABLE `storycategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `users_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storycategories`
--

INSERT INTO `storycategories` (`id`, `name`, `malname`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Primary', 'Primary', 1, 1, NULL, NULL),
(2, 'Secondary', 'Secondary', 1, 1, NULL, NULL),
(3, 'Tertiary', 'Tertiary', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storyprocessings`
--

CREATE TABLE `storyprocessings` (
  `id` bigint UNSIGNED NOT NULL,
  `stories_id` bigint UNSIGNED NOT NULL,
  `currentowner` bigint UNSIGNED NOT NULL,
  `contributor_status` tinyint NOT NULL DEFAULT '0',
  `contributor_id` bigint UNSIGNED NOT NULL,
  `contributor_timestamp` timestamp NOT NULL,
  `contributor_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_status` tinyint NOT NULL DEFAULT '0',
  `moderator_id` bigint UNSIGNED DEFAULT NULL,
  `moderator_timestamp` timestamp NULL DEFAULT NULL,
  `moderator_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `approver_status` tinyint NOT NULL DEFAULT '0',
  `approver_id` bigint UNSIGNED DEFAULT NULL,
  `approver_timestamp` timestamp NULL DEFAULT NULL,
  `approver_remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storyprocessings`
--

INSERT INTO `storyprocessings` (`id`, `stories_id`, `currentowner`, `contributor_status`, `contributor_id`, `contributor_timestamp`, `contributor_remarks`, `moderator_status`, `moderator_id`, `moderator_timestamp`, `moderator_remarks`, `approver_status`, `approver_id`, `approver_timestamp`, `approver_remarks`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 1, 7, '2021-05-17 17:26:47', 'werwerwer', 2, 8, '2021-05-18 17:27:23', 'test', 2, 9, '2021-05-18 18:09:38', 'aapproveremarks', 1, '2021-05-17 17:26:47', '2021-05-18 18:09:38'),
(2, 2, 7, 1, 7, '2021-05-17 17:26:47', 'werwerwer', 2, 8, '2021-05-18 17:27:23', 'test', 2, 9, '2021-05-18 18:09:38', 'aapproveremarks', 1, '2021-05-17 17:26:47', '2021-05-18 18:09:38'),
(3, 3, 7, 1, 7, '2021-05-17 17:26:47', 'werwerwer', 2, 8, '2021-05-18 17:27:23', 'test', 2, 9, '2021-05-18 18:09:38', 'aapproveremarks', 1, '2021-05-17 17:26:47', '2021-05-18 18:09:38'),
(10, 10, 7, 1, 7, '2021-06-04 14:07:34', 'sdasdadas', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-04 14:07:34', '2021-06-04 14:07:34'),
(11, 11, 7, 1, 7, '2021-06-05 15:51:02', 'test', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-05 15:51:02', '2021-06-05 15:51:02'),
(12, 12, 7, 1, 7, '2021-06-05 16:32:35', 'DEEEP', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-05 16:32:35', '2021-06-05 16:32:35'),
(13, 13, 7, 1, 7, '2021-06-05 17:25:36', 'okk', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-05 17:25:36', '2021-06-05 17:25:36'),
(14, 14, 7, 1, 7, '2021-06-05 17:43:39', 'SCSZCC', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-05 17:43:39', '2021-06-05 17:43:39'),
(15, 15, 7, 1, 7, '2021-06-05 18:47:16', 'sdfsdfsdf', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-05 18:47:16', '2021-06-05 18:47:16'),
(16, 16, 7, 1, 7, '2021-06-16 13:49:00', 'test story', 2, 8, '2021-06-16 13:50:18', 'test gopika', 2, 9, '2021-06-16 13:52:37', 'approved', 1, '2021-06-16 13:49:00', '2021-06-16 13:52:37'),
(17, 17, 7, 1, 7, '2021-06-17 10:07:10', 'sdasczxczxc', 2, 8, '2021-06-18 04:56:02', 'ok workinf', 2, 9, '2021-06-18 05:42:05', 'approved', 1, '2021-06-17 10:07:10', '2021-06-18 05:42:05'),
(18, 18, 7, 1, 7, '2021-06-28 09:06:58', 'hggjh<>>***', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, '2021-06-28 09:06:58', '2021-06-28 09:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentmenu` bigint NOT NULL,
  `menulinktypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `entitle`, `maltitle`, `ensubtitle`, `malsubtitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'Document Repository Portal', 'Document Repository Portal', 'Government of Kerala', 'Government of Kerala', 1, 2, '2021-05-19 14:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `usermodules`
--

CREATE TABLE `usermodules` (
  `id` bigint UNSIGNED NOT NULL,
  `documenttypes_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `enteredusers_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usermodules`
--

INSERT INTO `usermodules` (`id`, `documenttypes_id`, `usertypes_id`, `status`, `enteredusers_id`, `created_at`, `updated_at`) VALUES
(2, '2', 3, 1, 1, '2021-05-18 12:35:27', '2021-05-18 12:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint NOT NULL,
  `staffcategories_id` bigint NOT NULL,
  `designations_id` bigint NOT NULL,
  `departments_id` bigint NOT NULL,
  `fielddepartments_id` bigint NOT NULL DEFAULT '0',
  `offices_id` bigint NOT NULL,
  `2fa` tinyint(1) NOT NULL DEFAULT '0',
  `otp` tinyint NOT NULL DEFAULT '0',
  `otpsentts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otpverifiedts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usertypes_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `malname`, `mobile`, `staffcategories_id`, `designations_id`, `departments_id`, `fielddepartments_id`, `offices_id`, `2fa`, `otp`, `otpsentts`, `otpverifiedts`, `usertypes_id`, `status`, `users_id`, `created_at`) VALUES
(1, 'Admin', 'admin@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 1, 2, 1, '2021-04-07 03:54:19'),
(2, 'Site Admin', 'siteadmin@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 2, 2, 1, '2021-04-07 03:54:19'),
(3, 'Contributor', 'contributor@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 3, 2, 1, '2021-04-07 03:54:19'),
(4, 'Moderator', 'moderator@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 4, 2, 1, '2021-04-07 03:54:19'),
(5, 'Approver', 'approver@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 5, 2, 1, '2021-04-07 03:54:19'),
(6, 'Backlogger', 'backlogger@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 6, 2, 1, '2021-04-07 03:54:19'),
(7, 'Story Contributor', 'stycontributor@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 7, 2, 1, '2021-04-07 03:54:19'),
(8, 'Story Moderator', 'stymoderator@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 8, 2, 1, '2021-04-07 03:54:19'),
(9, 'Story Approver', 'styapprover@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 9, 2, 1, '2021-04-07 03:54:19'),
(10, 'Service User', 'serviceuser@cdit.org', NULL, '$2y$10$fPy7brcJz0pCk45blfl7N.WAi/9AMQbo40CcysVWCPjGorss3PKUm', NULL, 'malaname', 0, 1, 1, 1, 0, 1, 0, 0, '2021-04-07 03:54:19', '2021-04-07 03:54:19', 10, 2, 1, '2021-04-07 03:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` bigint UNSIGNED NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `entitle`, `status`, `users_id`, `created_at`) VALUES
(1, 'Admin', 1, 1, '2021-05-11 09:52:01'),
(2, 'Siteadmin', 1, 1, '2021-05-11 09:52:01'),
(3, 'Contributor', 1, 1, '2021-05-11 09:52:28'),
(4, 'Moderator', 1, 1, '2021-05-11 09:52:28'),
(5, 'Approver', 1, 1, '2021-05-11 09:52:42'),
(6, 'Backlogger', 1, 1, '2021-05-11 09:52:42'),
(7, 'Story Contributor', 1, 1, '2021-05-11 09:52:28'),
(8, 'Story Moderator', 1, 1, '2021-05-11 09:52:28'),
(9, 'Story Approver', 1, 1, '2021-05-11 09:52:42'),
(10, 'Serviceportal', 1, 1, '2021-07-13 05:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `whatsnews`
--

CREATE TABLE `whatsnews` (
  `id` bigint UNSIGNED NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `components_id` tinyint(1) NOT NULL,
  `iconclass` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widgetlinks`
--

CREATE TABLE `widgetlinks` (
  `id` bigint UNSIGNED NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltooltip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maltitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ensubtitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malsubtitle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `malcontent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homepagestatus` tinyint NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutdepartments`
--
ALTER TABLE `aboutdepartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aboutdepartments_users_id_foreign` (`users_id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_activitytypes_id_foreign` (`activitytypes_id`),
  ADD KEY `activities_users_id_foreign` (`users_id`);

--
-- Indexes for table `activitytypes`
--
ALTER TABLE `activitytypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activitytypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `activityuploads`
--
ALTER TABLE `activityuploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activityuploads_activities_id_foreign` (`activities_id`),
  ADD KEY `activityuploads_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `activityuploads_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `activityuploads_users_id_foreign` (`users_id`);

--
-- Indexes for table `appdepartments`
--
ALTER TABLE `appdepartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appdepartments_departments_id_foreign` (`departments_id`),
  ADD KEY `appdepartments_users_id_foreign` (`users_id`),
  ADD KEY `deptcategories_id` (`deptcategories_id`);

--
-- Indexes for table `appsections`
--
ALTER TABLE `appsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appsections_appdepartments_id_foreign` (`appdepartments_id`),
  ADD KEY `appsections_users_id_foreign` (`users_id`);

--
-- Indexes for table `archivepolicies`
--
ALTER TABLE `archivepolicies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `archivepolicies_users_id_foreign` (`users_id`);

--
-- Indexes for table `articlecategories`
--
ALTER TABLE `articlecategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articlecategories_users_id_foreign` (`users_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_articlecategories_id_foreign` (`articlecategories_id`),
  ADD KEY `articles_users_id_foreign` (`users_id`);

--
-- Indexes for table `articleuploads`
--
ALTER TABLE `articleuploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articleuploads_articles_id_foreign` (`articles_id`),
  ADD KEY `articleuploads_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `articleuploads_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `articleuploads_users_id_foreign` (`users_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_users_id_foreign` (`users_id`);

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buttons_menulinktypes_id_foreign` (`menulinktypes_id`),
  ADD KEY `buttons_users_id_foreign` (`users_id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `committees_users_id_foreign` (`users_id`);

--
-- Indexes for table `communicationattachments`
--
ALTER TABLE `communicationattachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communicationattachments_communications_id_foreign` (`communications_id`),
  ADD KEY `communicationattachments_users_id_foreign` (`users_id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communications_communicationtypes_id_foreign` (`communicationtypes_id`),
  ADD KEY `communications_users_id_foreign` (`users_id`),
  ADD KEY `committees_id` (`committees_id`);

--
-- Indexes for table `communicationtypes`
--
ALTER TABLE `communicationtypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communicationtypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `componentarticles`
--
ALTER TABLE `componentarticles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `componentarticles_users_id_foreign` (`users_id`);

--
-- Indexes for table `componentpermissions`
--
ALTER TABLE `componentpermissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `componentpermissions_components_id_foreign` (`components_id`),
  ADD KEY `componentpermissions_users_id_foreign` (`users_id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `components_users_id_foreign` (`users_id`);

--
-- Indexes for table `contenttypes`
--
ALTER TABLE `contenttypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contenttypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_users_id_foreign` (`users_id`),
  ADD KEY `deptcategories_id` (`deptcategories_id`);

--
-- Indexes for table `deptcategories`
--
ALTER TABLE `deptcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deptcategories_users_id_foreign` (`users_id`);

--
-- Indexes for table `deptintroductions`
--
ALTER TABLE `deptintroductions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deptintroductions_users_id_foreign` (`users_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_users_id_foreign` (`users_id`);

--
-- Indexes for table `documentactions`
--
ALTER TABLE `documentactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentactions_users_id_foreign` (`users_id`);

--
-- Indexes for table `documentcategories`
--
ALTER TABLE `documentcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentcategories_users_id_foreign` (`users_id`);

--
-- Indexes for table `documentorigins`
--
ALTER TABLE `documentorigins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentorigins_users_id_foreign` (`users_id`);

--
-- Indexes for table `documentprocessings`
--
ALTER TABLE `documentprocessings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentprocessings_documents_id_foreign` (`documents_id`),
  ADD KEY `documentprocessings_currentowner_foreign` (`currentowner`),
  ADD KEY `documentprocessings_contributor_id_foreign` (`contributor_id`),
  ADD KEY `documentprocessings_moderator_id_foreign` (`moderator_id`),
  ADD KEY `documentprocessings_approver_id_foreign` (`approver_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_documenttypes_id_foreign` (`documenttypes_id`),
  ADD KEY `documents_documentorigins_id_foreign` (`documentorigins_id`),
  ADD KEY `documentcategories_id` (`documentcategories_id`);

--
-- Indexes for table `documenttypes`
--
ALTER TABLE `documenttypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documenttypes_documentcategories_id_foreign` (`documentcategories_id`),
  ADD KEY `documenttypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloads_downloadtypes_id_foreign` (`downloadtypes_id`),
  ADD KEY `downloads_archivepolicies_id_foreign` (`archivepolicies_id`),
  ADD KEY `downloads_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `downloads_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `downloads_users_id_foreign` (`users_id`);

--
-- Indexes for table `downloadtypes`
--
ALTER TABLE `downloadtypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloadtypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_users_id_foreign` (`users_id`);

--
-- Indexes for table `fielddepartments`
--
ALTER TABLE `fielddepartments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fielddepartments_departments_id_foreign` (`departments_id`),
  ADD KEY `fielddepartments_users_id_foreign` (`users_id`);

--
-- Indexes for table `filetypes`
--
ALTER TABLE `filetypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filetypes_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `filetypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `footerlinks`
--
ALTER TABLE `footerlinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footerlinks_users_id_foreign` (`users_id`);

--
-- Indexes for table `footermenus`
--
ALTER TABLE `footermenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footermenus_users_id_foreign` (`users_id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footers_users_id_foreign` (`users_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_users_id_foreign` (`users_id`);

--
-- Indexes for table `galleryitems`
--
ALTER TABLE `galleryitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleryitems_users_id_foreign` (`users_id`);

--
-- Indexes for table `hierarchies`
--
ALTER TABLE `hierarchies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hierarchies_users_id_foreign` (`users_id`);

--
-- Indexes for table `infolinks`
--
ALTER TABLE `infolinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infolinks_users_id_foreign` (`users_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_users_id_foreign` (`users_id`);

--
-- Indexes for table `livestreamings`
--
ALTER TABLE `livestreamings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livestreamings_users_id_foreign` (`users_id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logos_users_id_foreign` (`users_id`);

--
-- Indexes for table `longalerts`
--
ALTER TABLE `longalerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `longalerts_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `longalerts_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `longalerts_users_id_foreign` (`users_id`);

--
-- Indexes for table `mainmenus`
--
ALTER TABLE `mainmenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mainmenus_menulinktypes_id_foreign` (`menulinktypes_id`),
  ADD KEY `mainmenus_users_id_foreign` (`users_id`);

--
-- Indexes for table `mediaalerts`
--
ALTER TABLE `mediaalerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mediaalerts_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `mediaalerts_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `mediaalerts_users_id_foreign` (`users_id`);

--
-- Indexes for table `membershiprequests`
--
ALTER TABLE `membershiprequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membershiprequests_offices_id_foreign` (`offices_id`),
  ADD KEY `membershiprequests_departments_id_foreign` (`departments_id`),
  ADD KEY `membershiprequests_designations_id_foreign` (`designations_id`),
  ADD KEY `membershiprequests_users_id_foreign` (`users_id`);

--
-- Indexes for table `menulinktypes`
--
ALTER TABLE `menulinktypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menulinktypes_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsletters_users_id_foreign` (`users_id`);

--
-- Indexes for table `newslettervolumes`
--
ALTER TABLE `newslettervolumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newslettervolumes_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `newslettervolumes_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `newslettervolumes_users_id_foreign` (`users_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_users_id_foreign` (`users_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `promocampaigns`
--
ALTER TABLE `promocampaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocampaigns_filetypes_id_foreign` (`filetypes_id`),
  ADD KEY `promocampaigns_contenttypes_id_foreign` (`contenttypes_id`),
  ADD KEY `promocampaigns_users_id_foreign` (`users_id`);

--
-- Indexes for table `servicelinks`
--
ALTER TABLE `servicelinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicelinks_users_id_foreign` (`users_id`);

--
-- Indexes for table `shortalerts`
--
ALTER TABLE `shortalerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shortalerts_users_id_foreign` (`users_id`);

--
-- Indexes for table `sitecontrollabels`
--
ALTER TABLE `sitecontrollabels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sitecontrollabels_users_id_foreign` (`users_id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sitesettings_users_id_foreign` (`users_id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socialmedia_users_id_foreign` (`users_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_offices_id_foreign` (`offices_id`),
  ADD KEY `staff_departments_id_foreign` (`departments_id`),
  ADD KEY `staff_designations_id_foreign` (`designations_id`),
  ADD KEY `staff_staffcategories_id_foreign` (`staffcategories_id`),
  ADD KEY `staff_hierarchies_id_foreign` (`hierarchies_id`),
  ADD KEY `staff_users_id_foreign` (`users_id`);

--
-- Indexes for table `staffcategories`
--
ALTER TABLE `staffcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffcategories_users_id_foreign` (`users_id`);

--
-- Indexes for table `staffcommittees`
--
ALTER TABLE `staffcommittees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffcommittees_staffs_id_foreign` (`staffs_id`),
  ADD KEY `staffcommittees_committees_id_foreign` (`committees_id`),
  ADD KEY `staffcommittees_hierarchies_id_foreign` (`hierarchies_id`),
  ADD KEY `staffcommittees_users_id_foreign` (`users_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stories_documents_id_foreign` (`documents_id`),
  ADD KEY `stories_storycategories_id_foreign` (`storycategories_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `storyattachments`
--
ALTER TABLE `storyattachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storyattachments_stories_id_foreign` (`stories_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `storycategories`
--
ALTER TABLE `storycategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `storyprocessings`
--
ALTER TABLE `storyprocessings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `storyprocessings_currentowner_foreign` (`currentowner`),
  ADD KEY `storyprocessings_contributor_id_foreign` (`contributor_id`),
  ADD KEY `storyprocessings_moderator_id_foreign` (`moderator_id`),
  ADD KEY `storyprocessings_approver_id_foreign` (`approver_id`),
  ADD KEY `storyprocessings_stories_id_foreign` (`stories_id`) USING BTREE;

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menulinktypes_id_foreign` (`menulinktypes_id`),
  ADD KEY `submenus_users_id_foreign` (`users_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titles_users_id_foreign` (`users_id`);

--
-- Indexes for table `usermodules`
--
ALTER TABLE `usermodules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enteredusers_id` (`enteredusers_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_users_id_foreign` (`users_id`),
  ADD KEY `staffcategories_id` (`staffcategories_id`),
  ADD KEY `departments_id` (`departments_id`),
  ADD KEY `designations_id` (`designations_id`),
  ADD KEY `offices_id` (`offices_id`),
  ADD KEY `usertypes_id` (`usertypes_id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatsnews`
--
ALTER TABLE `whatsnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whatsnews_users_id_foreign` (`users_id`);

--
-- Indexes for table `widgetlinks`
--
ALTER TABLE `widgetlinks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `widgetlinks_users_id_foreign` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutdepartments`
--
ALTER TABLE `aboutdepartments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activitytypes`
--
ALTER TABLE `activitytypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activityuploads`
--
ALTER TABLE `activityuploads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appdepartments`
--
ALTER TABLE `appdepartments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appsections`
--
ALTER TABLE `appsections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archivepolicies`
--
ALTER TABLE `archivepolicies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articlecategories`
--
ALTER TABLE `articlecategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articleuploads`
--
ALTER TABLE `articleuploads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communicationattachments`
--
ALTER TABLE `communicationattachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communicationtypes`
--
ALTER TABLE `communicationtypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `componentarticles`
--
ALTER TABLE `componentarticles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `componentpermissions`
--
ALTER TABLE `componentpermissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contenttypes`
--
ALTER TABLE `contenttypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deptcategories`
--
ALTER TABLE `deptcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deptintroductions`
--
ALTER TABLE `deptintroductions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentactions`
--
ALTER TABLE `documentactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documentcategories`
--
ALTER TABLE `documentcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documentorigins`
--
ALTER TABLE `documentorigins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documentprocessings`
--
ALTER TABLE `documentprocessings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `documenttypes`
--
ALTER TABLE `documenttypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloadtypes`
--
ALTER TABLE `downloadtypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fielddepartments`
--
ALTER TABLE `fielddepartments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filetypes`
--
ALTER TABLE `filetypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footerlinks`
--
ALTER TABLE `footerlinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footermenus`
--
ALTER TABLE `footermenus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleryitems`
--
ALTER TABLE `galleryitems`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hierarchies`
--
ALTER TABLE `hierarchies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infolinks`
--
ALTER TABLE `infolinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livestreamings`
--
ALTER TABLE `livestreamings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `longalerts`
--
ALTER TABLE `longalerts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediaalerts`
--
ALTER TABLE `mediaalerts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membershiprequests`
--
ALTER TABLE `membershiprequests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menulinktypes`
--
ALTER TABLE `menulinktypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newslettervolumes`
--
ALTER TABLE `newslettervolumes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promocampaigns`
--
ALTER TABLE `promocampaigns`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicelinks`
--
ALTER TABLE `servicelinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shortalerts`
--
ALTER TABLE `shortalerts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitecontrollabels`
--
ALTER TABLE `sitecontrollabels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffcategories`
--
ALTER TABLE `staffcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffcommittees`
--
ALTER TABLE `staffcommittees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `storyattachments`
--
ALTER TABLE `storyattachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `storycategories`
--
ALTER TABLE `storycategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `storyprocessings`
--
ALTER TABLE `storyprocessings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usermodules`
--
ALTER TABLE `usermodules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `whatsnews`
--
ALTER TABLE `whatsnews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widgetlinks`
--
ALTER TABLE `widgetlinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aboutdepartments`
--
ALTER TABLE `aboutdepartments`
  ADD CONSTRAINT `aboutdepartments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_activitytypes_id_foreign` FOREIGN KEY (`activitytypes_id`) REFERENCES `activitytypes` (`id`),
  ADD CONSTRAINT `activities_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `activitytypes`
--
ALTER TABLE `activitytypes`
  ADD CONSTRAINT `activitytypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `activityuploads`
--
ALTER TABLE `activityuploads`
  ADD CONSTRAINT `activityuploads_activities_id_foreign` FOREIGN KEY (`activities_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activityuploads_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `activityuploads_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `activityuploads_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appdepartments`
--
ALTER TABLE `appdepartments`
  ADD CONSTRAINT `appdepartments_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `appdepartments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appsections`
--
ALTER TABLE `appsections`
  ADD CONSTRAINT `appsections_appdepartments_id_foreign` FOREIGN KEY (`appdepartments_id`) REFERENCES `appdepartments` (`id`),
  ADD CONSTRAINT `appsections_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `archivepolicies`
--
ALTER TABLE `archivepolicies`
  ADD CONSTRAINT `archivepolicies_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `articlecategories`
--
ALTER TABLE `articlecategories`
  ADD CONSTRAINT `articlecategories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_articlecategories_id_foreign` FOREIGN KEY (`articlecategories_id`) REFERENCES `articlecategories` (`id`),
  ADD CONSTRAINT `articles_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `articleuploads`
--
ALTER TABLE `articleuploads`
  ADD CONSTRAINT `articleuploads_articles_id_foreign` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `articleuploads_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `articleuploads_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `articleuploads_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `buttons`
--
ALTER TABLE `buttons`
  ADD CONSTRAINT `buttons_menulinktypes_id_foreign` FOREIGN KEY (`menulinktypes_id`) REFERENCES `menulinktypes` (`id`),
  ADD CONSTRAINT `buttons_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `committees`
--
ALTER TABLE `committees`
  ADD CONSTRAINT `committees_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `communicationattachments`
--
ALTER TABLE `communicationattachments`
  ADD CONSTRAINT `communicationattachments_communications_id_foreign` FOREIGN KEY (`communications_id`) REFERENCES `communications` (`id`),
  ADD CONSTRAINT `communicationattachments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `communications`
--
ALTER TABLE `communications`
  ADD CONSTRAINT `communications_communicationtypes_id_foreign` FOREIGN KEY (`communicationtypes_id`) REFERENCES `communicationtypes` (`id`),
  ADD CONSTRAINT `communications_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `communicationtypes`
--
ALTER TABLE `communicationtypes`
  ADD CONSTRAINT `communicationtypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `componentarticles`
--
ALTER TABLE `componentarticles`
  ADD CONSTRAINT `componentarticles_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `componentpermissions`
--
ALTER TABLE `componentpermissions`
  ADD CONSTRAINT `componentpermissions_components_id_foreign` FOREIGN KEY (`components_id`) REFERENCES `components` (`id`),
  ADD CONSTRAINT `componentpermissions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contenttypes`
--
ALTER TABLE `contenttypes`
  ADD CONSTRAINT `contenttypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `deptcategories`
--
ALTER TABLE `deptcategories`
  ADD CONSTRAINT `deptcategories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `deptintroductions`
--
ALTER TABLE `deptintroductions`
  ADD CONSTRAINT `deptintroductions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documentactions`
--
ALTER TABLE `documentactions`
  ADD CONSTRAINT `documentactions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documentcategories`
--
ALTER TABLE `documentcategories`
  ADD CONSTRAINT `documentcategories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documentorigins`
--
ALTER TABLE `documentorigins`
  ADD CONSTRAINT `documentorigins_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documentprocessings`
--
ALTER TABLE `documentprocessings`
  ADD CONSTRAINT `documentprocessings_approver_id_foreign` FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `documentprocessings_contributor_id_foreign` FOREIGN KEY (`contributor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `documentprocessings_currentowner_foreign` FOREIGN KEY (`currentowner`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `documentprocessings_documents_id_foreign` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `documentprocessings_moderator_id_foreign` FOREIGN KEY (`moderator_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_documentorigins_id_foreign` FOREIGN KEY (`documentorigins_id`) REFERENCES `documentorigins` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `documents_documenttypes_id_foreign` FOREIGN KEY (`documenttypes_id`) REFERENCES `documenttypes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `documenttypes`
--
ALTER TABLE `documenttypes`
  ADD CONSTRAINT `documenttypes_documentcategories_id_foreign` FOREIGN KEY (`documentcategories_id`) REFERENCES `documentcategories` (`id`),
  ADD CONSTRAINT `documenttypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_archivepolicies_id_foreign` FOREIGN KEY (`archivepolicies_id`) REFERENCES `archivepolicies` (`id`),
  ADD CONSTRAINT `downloads_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `downloads_downloadtypes_id_foreign` FOREIGN KEY (`downloadtypes_id`) REFERENCES `downloadtypes` (`id`),
  ADD CONSTRAINT `downloads_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `downloads_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `downloadtypes`
--
ALTER TABLE `downloadtypes`
  ADD CONSTRAINT `downloadtypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fielddepartments`
--
ALTER TABLE `fielddepartments`
  ADD CONSTRAINT `fielddepartments_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `fielddepartments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `filetypes`
--
ALTER TABLE `filetypes`
  ADD CONSTRAINT `filetypes_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `filetypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `footerlinks`
--
ALTER TABLE `footerlinks`
  ADD CONSTRAINT `footerlinks_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `footermenus`
--
ALTER TABLE `footermenus`
  ADD CONSTRAINT `footermenus_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `footers`
--
ALTER TABLE `footers`
  ADD CONSTRAINT `footers_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleryitems`
--
ALTER TABLE `galleryitems`
  ADD CONSTRAINT `galleryitems_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hierarchies`
--
ALTER TABLE `hierarchies`
  ADD CONSTRAINT `hierarchies_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `infolinks`
--
ALTER TABLE `infolinks`
  ADD CONSTRAINT `infolinks_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `livestreamings`
--
ALTER TABLE `livestreamings`
  ADD CONSTRAINT `livestreamings_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `logos`
--
ALTER TABLE `logos`
  ADD CONSTRAINT `logos_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `longalerts`
--
ALTER TABLE `longalerts`
  ADD CONSTRAINT `longalerts_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `longalerts_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `longalerts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mainmenus`
--
ALTER TABLE `mainmenus`
  ADD CONSTRAINT `mainmenus_menulinktypes_id_foreign` FOREIGN KEY (`menulinktypes_id`) REFERENCES `menulinktypes` (`id`),
  ADD CONSTRAINT `mainmenus_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mediaalerts`
--
ALTER TABLE `mediaalerts`
  ADD CONSTRAINT `mediaalerts_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `mediaalerts_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `mediaalerts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `membershiprequests`
--
ALTER TABLE `membershiprequests`
  ADD CONSTRAINT `membershiprequests_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `membershiprequests_designations_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `membershiprequests_offices_id_foreign` FOREIGN KEY (`offices_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `membershiprequests_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `menulinktypes`
--
ALTER TABLE `menulinktypes`
  ADD CONSTRAINT `menulinktypes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD CONSTRAINT `newsletters_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `newslettervolumes`
--
ALTER TABLE `newslettervolumes`
  ADD CONSTRAINT `newslettervolumes_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `newslettervolumes_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `newslettervolumes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `promocampaigns`
--
ALTER TABLE `promocampaigns`
  ADD CONSTRAINT `promocampaigns_contenttypes_id_foreign` FOREIGN KEY (`contenttypes_id`) REFERENCES `contenttypes` (`id`),
  ADD CONSTRAINT `promocampaigns_filetypes_id_foreign` FOREIGN KEY (`filetypes_id`) REFERENCES `filetypes` (`id`),
  ADD CONSTRAINT `promocampaigns_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `servicelinks`
--
ALTER TABLE `servicelinks`
  ADD CONSTRAINT `servicelinks_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `shortalerts`
--
ALTER TABLE `shortalerts`
  ADD CONSTRAINT `shortalerts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sitecontrollabels`
--
ALTER TABLE `sitecontrollabels`
  ADD CONSTRAINT `sitecontrollabels_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD CONSTRAINT `sitesettings_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `socialmedia_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `staff_designations_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `staff_hierarchies_id_foreign` FOREIGN KEY (`hierarchies_id`) REFERENCES `hierarchies` (`id`),
  ADD CONSTRAINT `staff_offices_id_foreign` FOREIGN KEY (`offices_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `staff_staffcategories_id_foreign` FOREIGN KEY (`staffcategories_id`) REFERENCES `staffcategories` (`id`),
  ADD CONSTRAINT `staff_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staffcategories`
--
ALTER TABLE `staffcategories`
  ADD CONSTRAINT `staffcategories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staffcommittees`
--
ALTER TABLE `staffcommittees`
  ADD CONSTRAINT `staffcommittees_committees_id_foreign` FOREIGN KEY (`committees_id`) REFERENCES `committees` (`id`),
  ADD CONSTRAINT `staffcommittees_hierarchies_id_foreign` FOREIGN KEY (`hierarchies_id`) REFERENCES `hierarchies` (`id`),
  ADD CONSTRAINT `staffcommittees_staffs_id_foreign` FOREIGN KEY (`staffs_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `staffcommittees_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_documents_id_foreign` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `stories_storycategories_id_foreign` FOREIGN KEY (`storycategories_id`) REFERENCES `storycategories` (`id`);

--
-- Constraints for table `storyattachments`
--
ALTER TABLE `storyattachments`
  ADD CONSTRAINT `storyattachments_stories_id_foreign` FOREIGN KEY (`stories_id`) REFERENCES `stories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `storyprocessings`
--
ALTER TABLE `storyprocessings`
  ADD CONSTRAINT `storyprocessings_approver_id_foreign` FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `storyprocessings_contributor_id_foreign` FOREIGN KEY (`contributor_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `storyprocessings_currentowner_foreign` FOREIGN KEY (`currentowner`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `storyprocessings_documents_id_foreign` FOREIGN KEY (`stories_id`) REFERENCES `stories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `storyprocessings_moderator_id_foreign` FOREIGN KEY (`moderator_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menulinktypes_id_foreign` FOREIGN KEY (`menulinktypes_id`) REFERENCES `menulinktypes` (`id`),
  ADD CONSTRAINT `submenus_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `whatsnews`
--
ALTER TABLE `whatsnews`
  ADD CONSTRAINT `whatsnews_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `widgetlinks`
--
ALTER TABLE `widgetlinks`
  ADD CONSTRAINT `widgetlinks_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
