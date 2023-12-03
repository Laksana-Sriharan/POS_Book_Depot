-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 06:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_salaries`
--

CREATE TABLE `advance_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `advance_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance_salaries`
--

INSERT INTO `advance_salaries` (`id`, `employee_id`, `month`, `year`, `advance_salary`, `created_at`, `updated_at`) VALUES
(1, 1, 'August', '2023', '6500', '2023-08-10 06:43:30', '2023-08-10 06:43:30'),
(2, 17, 'October', '2023', '3000', '2023-10-28 09:00:34', NULL),
(4, 12, 'October', '2023', '7000', '2023-10-28 09:09:44', '2023-10-28 09:09:44'),
(5, 10, 'October', '2023', '3000', '2023-11-02 11:56:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attend_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `date`, `attend_status`, `created_at`, `updated_at`) VALUES
(16, 1, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(17, 4, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(18, 5, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(19, 6, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(20, 7, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(21, 8, '2023-10-26', 'Absent', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(22, 9, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(23, 10, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(24, 11, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(25, 12, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(26, 13, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(27, 14, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(28, 15, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(29, 16, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(30, 17, '2023-10-26', 'present', '2023-10-26 09:09:03', '2023-10-26 09:09:03'),
(31, 1, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(32, 4, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(33, 5, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(34, 6, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(35, 7, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(36, 8, '2023-10-25', 'Absent', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(37, 9, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(38, 10, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(39, 11, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(40, 12, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(41, 13, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(42, 14, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(43, 15, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(44, 16, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(45, 17, '2023-10-25', 'present', '2023-10-26 09:09:38', '2023-10-26 09:09:38'),
(46, 1, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(47, 4, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(48, 5, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(49, 6, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(50, 7, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(51, 8, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(52, 9, '2023-10-28', 'Leave', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(53, 10, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(54, 11, '2023-10-28', 'Leave', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(55, 12, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(56, 13, '2023-10-28', 'Absent', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(57, 14, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(58, 15, '2023-10-28', 'Absent', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(59, 16, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41'),
(60, 17, '2023-10-28', 'present', '2023-10-28 10:20:41', '2023-10-28 10:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Language Books', '2023-07-27 23:14:41', NULL),
(2, 'Literature Books', '2023-07-27 23:15:01', NULL),
(3, 'Religious / Spiritual Books', '2023-07-29 22:51:35', '2023-07-29 22:51:35'),
(4, 'Psychology', '2023-07-27 23:15:31', NULL),
(5, 'Mathematics', '2023-07-27 23:15:55', NULL),
(6, 'Myths', '2023-07-27 23:16:07', NULL),
(7, 'Law & Order', '2023-07-27 23:16:21', NULL),
(8, 'Home Science & Cookery', '2023-07-27 23:16:41', NULL),
(9, 'Technology', '2023-07-27 23:16:54', NULL),
(10, 'Scientific fictions', '2023-07-27 23:17:19', NULL),
(12, 'Management & Finance', '2023-07-27 23:26:02', '2023-07-27 23:26:02'),
(13, 'Novel - Tamil', '2023-07-28 04:35:20', NULL),
(14, 'Novel - English', '2023-07-28 04:35:36', NULL),
(15, 'Movie -  Screenplay (Tamil)', '2023-07-28 08:43:11', '2023-07-28 08:43:11'),
(16, 'School Textbooks', '2023-07-29 09:04:55', NULL),
(17, 'GCE A/L Examination Pastpapers', '2023-07-29 09:05:35', NULL),
(18, 'GCE O/L Examination Pastpapers', '2023-07-29 09:05:51', NULL),
(19, 'Poetry', '2023-07-29 09:34:55', NULL),
(20, 'Novel-Sinhala', '2023-07-31 00:39:50', NULL),
(21, 'Children Books', '2023-10-27 01:12:18', NULL),
(22, 'Stationaries', '2023-11-02 09:21:33', NULL),
(23, 'CR Book', '2023-11-05 01:33:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `image`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `created_at`, `updated_at`) VALUES
(1, 'Jegan', 'jegan304@gmail.com', '0776542345', 'Colombo -06', 'upload/customer/1772210059233813.png', 'T.Jegan', '8600001234543477', 'BOC', 'Wellawatte', '2023-07-23 06:20:01', '2023-07-23 06:20:01'),
(3, 'Kamaal', 'kamaalM32@gmail.com', '0775000126', '34 , Navalar Road , Jaffna', 'upload/default.png', NULL, NULL, NULL, NULL, '2023-10-29 10:58:16', '2023-10-29 10:58:16'),
(4, 'Ganesh.S', 'ganesh311@gmail.com', '0773232789', '4, Brown Road , Jaffna', 'upload/default.png', NULL, NULL, NULL, NULL, '2023-11-05 08:12:23', NULL),
(5, 'A to Z Book Shop', 'a2znawras@gmail.com', '077-5122433', 'No.230, Mannar Road, Puttalam', 'upload/customer/1781746851422905.png', NULL, NULL, NULL, NULL, '2023-11-05 12:13:30', '2023-11-05 12:13:30'),
(6, 'Annai Book Shop', 'annaibookshop@gmail.com', '077-2487662', 'Hospital Road, Jaffna', 'upload/customer/1781746998537176.jpeg', NULL, NULL, NULL, NULL, '2023-11-05 12:15:50', NULL),
(7, 'Eswaran Book Depot', 'eswaran@gmail.com', '081-2220820', 'No.126, Colombo Street, Kandy', 'upload/default.png', NULL, NULL, NULL, NULL, '2023-11-05 12:17:04', NULL),
(8, 'Southern Book Shop', 'southernbook@gmail.com', '076-7333460', 'No.173, Hettiweediya Road, Weligama', 'upload/customer/1781747167699935.jpg', NULL, NULL, NULL, NULL, '2023-11-05 12:18:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `vacation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `image`, `salary`, `dept`, `experience`, `vacation`, `created_at`, `updated_at`) VALUES
(1, 'Hasan', 'hasan34@gmail.com', '0762342345', 'Colombo-05', 'upload/employee/1781730025062344.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:46:03', '2023-11-05 07:46:03'),
(4, 'Vinusha', 'vinusha@gmail.com', '0775432722', '34 , Ramanathan road , Jaffna', 'upload/employee/1781730151986246.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:48:04', '2023-11-05 07:48:04'),
(5, 'Danushi', 'danushi@gmail.com', '0775432711', '2 , Iyappa Road , Jaffna', 'upload/employee/1781730136839426.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:47:50', '2023-11-05 07:47:50'),
(6, 'Bhagya', 'bhagya@gmail.com', '0775466711', 'No-3 , Hampden Lane , Colombo-06', 'upload/employee/1781730124358070.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:47:38', '2023-11-05 07:47:38'),
(7, 'Pawan Raju', 'pawan32@gmail.com', '0774432722', 'No-7 , Perera Lane , Colombo-06', 'upload/employee/1781729896847256.jpeg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:44:01', '2023-11-05 07:44:01'),
(8, 'Fathima Naseer', 'fathima98@gmail.com', '0775445901', 'No-17 , Arethusa Lane , Colombo-06', 'upload/employee/1781729792945792.jpeg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:42:22', '2023-11-05 07:42:22'),
(9, 'Shakthitharan . V', 'shakthi21@gmail.com', '0775432289', 'No-13 , Arethusa Lane , Colombo-06', 'upload/employee/1781729660870145.jpg', '40000', 'Sales', '3 Year', '4', '2023-11-05 07:40:16', '2023-11-05 07:40:16'),
(10, 'Kanishka Tharmalingam', 'kanishka@gmail.com', '077542328', 'No-3 , Moor Road , Colombo-06', 'upload/employee/1781729778182903.jpeg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:42:08', '2023-11-05 07:42:08'),
(11, 'Thangavel Pathaman', 'thanga126@gmail.com', '0775270421', '12 , Havelock Road , Colombo-06', 'upload/employee/1781729718748951.jpg', '50000', 'Accounting', '3 Year', '4', '2023-11-05 07:41:11', '2023-11-05 07:41:11'),
(12, 'Venkat Pradeep', 'venkat1996@gmail.com', '0770094722', '11 , Peterson Lane , Colombo-06', 'upload/employee/1781729678277230.jpg', '40000', 'Accounting', '1 Year', '4', '2023-11-05 07:40:33', '2023-11-05 07:40:33'),
(13, 'Vedha Moorthy', 'vedha1999@gmail.com', '0770391289', '2 , Dharmarama Road , Colombo-06', 'upload/employee/1781727602487295.jpeg', '23000', 'Sales', '1 Year', '4', '2023-11-05 07:07:33', '2023-11-05 07:07:33'),
(14, 'M.N.M. Azaana', 'azaana98@gmail.com', '0775470901', 'No-6 , Arethusa Lane , Colombo-06', 'upload/employee/1781729647052324.jpeg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:40:03', '2023-11-05 07:40:03'),
(15, 'Gajavarun .T', 'gaja87@gmail.com', '0775409078', 'No-8 , Hampden Lane , Colombo-06', 'upload/employee/1781727681639111.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:08:49', '2023-11-05 07:08:49'),
(16, 'Regina Vincent', 'regina98@gmail.com', '0775402867', 'No-42 , Arethusa Lane , Colombo-06', 'upload/employee/1781727559416169.jpeg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:06:52', '2023-11-05 07:06:52'),
(17, 'Maya Ruban', 'maya02@gmail.com', '0775445097', 'No - 4 , Clock Tower Road , Jaffna', 'upload/employee/1781727529107166.jpg', '30000', 'Sales', '2 Year', '4', '2023-11-05 07:06:27', '2023-11-05 07:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `amount` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `month`, `year`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Depot Lease', '67500.00', 'July', '2023', '28-07-2023', '2023-07-28 10:29:12', '2023-07-28 10:29:12'),
(2, 'Office maintenance - A/C', '4000.00', 'July', '2023', '28-07-2023', '2023-07-28 10:10:28', NULL),
(3, 'Depot Lease - October', '67500.00', 'October', '2023', '27-10-2023', '2023-10-27 07:11:17', NULL),
(4, 'Store Maintenance - November', '6000.00', 'November', '2023', '03-11-2023', '2023-11-02 23:50:42', '2023-11-02 23:50:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_11_050809_create_employees_table', 2),
(6, '2023_07_19_174420_create_customers_table', 3),
(7, '2023_07_24_135533_create_suppliers_table', 4),
(8, '2023_07_28_041905_create_categories_table', 5),
(9, '2023_07_28_051905_create_products_table', 6),
(10, '2023_07_28_142840_create_expenses_table', 7),
(11, '2023_08_01_034334_create_orders_table', 8),
(12, '2023_08_01_034810_create_orderdetails_table', 8),
(13, '2023_08_01_151346_create_permission_tables', 9),
(14, '2023_08_04_142153_create_attendances_table', 10),
(15, '2023_08_10_095148_create_advance_salaries_table', 11),
(16, '2023_08_10_112936_create_pay_salaries_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `unitcost` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2350', '2350', NULL, NULL),
(2, 1, 14, '1', '7260', '7260', NULL, NULL),
(3, 2, 8, '1', '860', '860', NULL, NULL),
(4, 3, 2, '1', '2871', '2871', NULL, NULL),
(5, 4, 1, '1', '2350', '2350', NULL, NULL),
(6, 4, 12, '1', '750', '750', NULL, NULL),
(7, 5, 11, '1', '780', '780', NULL, NULL),
(8, 5, 15, '1', '1980', '1980', NULL, NULL),
(9, 6, 11, '1', '780', '780', NULL, NULL),
(10, 6, 12, '1', '750', '750', NULL, NULL),
(11, 7, 2, '1', '2871', '2871', NULL, NULL),
(12, 8, 3, '1', '2310', '2310', NULL, NULL),
(13, 9, 24, '1', '25', '25', NULL, NULL),
(14, 9, 16, '1', '2197.8', '2197.8', NULL, NULL),
(15, 10, 1, '2', '2350', '4700', NULL, NULL),
(16, 11, 1, '2', '2350', '4700', NULL, NULL),
(17, 11, 24, '1', '25', '25', NULL, NULL),
(18, 12, 24, '1', '25', '25', NULL, NULL),
(19, 13, 1, '1', '2350', '2350', NULL, NULL),
(20, 14, 54, '3', '145', '435', NULL, NULL),
(21, 15, 24, '1', '25', '25', NULL, NULL),
(22, 15, 54, '1', '145', '145', NULL, NULL),
(23, 15, 14, '1', '7260', '7260', NULL, NULL),
(24, 16, 2, '1', '2871', '2871', NULL, NULL),
(25, 17, 16, '1', '2197.8', '2197.8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `sub_total` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `due` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_status`, `total_products`, `sub_total`, `tax`, `invoice_no`, `total`, `payment_status`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(1, 1, '01-August-2023', 'complete', '2', '9,610.00', '0.00', 'EPOS41333809', '9,610.00', 'Cash', '9610', '0', '2023-07-31 23:07:04', '2023-11-02 23:43:02'),
(2, 1, '01-August-2023', 'complete', '1', '860.00', '0.00', 'EPOS75479625', '860.00', 'Cash', '860', '0', '2023-08-01 00:22:31', '2023-10-16 07:53:44'),
(3, 1, '01-August-2023', 'complete', '1', '2,871.00', '0.00', 'EPOS93264654', '2,871.00', 'Cash', '2871', '0', '2023-08-01 01:31:11', '2023-10-16 07:53:16'),
(4, 1, '05-August-2023', 'complete', '2', '3,100.00', '0.00', 'EPOS53261145', '3,100.00', 'Cash', '3100', '0', '2023-08-05 10:23:56', '2023-08-05 10:24:23'),
(5, 3, '31-October-2023', 'complete', '2', '2760.00', '0.00', 'EPOS46687410', '2760.00', 'Cash\r\n', '2760.00', '0', '2023-10-31 08:25:22', '2023-10-31 08:25:56'),
(6, 3, '31-October-2023', 'pending', '2', '1530.00', '0.00', 'EPOS91062988', '1530.00', 'Cash\r\n', '1530.00', '0', '2023-10-31 08:45:05', NULL),
(7, 1, '31-October-2023', 'complete', '1', '2871.00', '0.00', 'EPOS78129180', '2871.00', 'Cash', '2871', '0', '2023-10-31 08:48:24', '2023-11-03 00:27:24'),
(8, 3, '31-October-2023', 'complete', '1', '2310.00', '0.00', 'EPOS84144631', '2310.00', 'Cash', '2310.00', '0', '2023-10-31 10:02:58', '2023-10-31 10:03:14'),
(9, 3, '03-November-2023', 'complete', '2', '2222.80', '0.00', 'EPOS81707313', '2222.80', 'Cash', '2222.80', '0', '2023-11-02 23:41:44', '2023-11-02 23:42:00'),
(10, 3, '03-November-2023', 'complete', '2', '4700.00', '0.00', 'EPOS27042649', '4700.00', 'Cash\r\n', '4700.00', '0', '2023-11-02 23:53:47', '2023-11-02 23:53:54'),
(11, 3, '03-November-2023', 'complete', '3', '4725.00', '0.00', 'EPOS65609133', '4725.00', 'Cash', '4725.00', '0', '2023-11-03 00:26:47', '2023-11-03 00:27:03'),
(12, 3, '03-November-2023', 'pending', '1', '25.00', '0.00', 'EPOS52182764', '25.00', 'Cash', '25.00', '0', '2023-11-03 05:56:58', NULL),
(13, 3, '03-November-2023', 'pending', '1', '2350.00', '0.00', 'EPOS18236731', '2350.00', 'Cash', '2350.00', '0', '2023-11-03 06:10:35', NULL),
(14, 3, '05-November-2023', 'complete', '3', '435.00', '0.00', 'EPOS61129019', '435.00', 'Cash', '435.00', '0', '2023-11-05 08:10:08', '2023-11-05 08:10:51'),
(15, 4, '05-November-2023', 'complete', '3', '7430.00', '0.00', 'EPOS44752261', '7430.00', 'Cash', '7430.00', '0', '2023-11-05 08:12:55', '2023-11-05 08:13:01'),
(16, 4, '05-November-2023', 'pending', '1', '2871.00', '0.00', 'EPOS38150093', '2871.00', 'Cash', '2871.00', '0', '2023-11-05 08:16:37', NULL),
(17, 4, '05-November-2023', 'complete', '1', '2197.80', '0.00', 'EPOS10920513', '2197.80', 'Cash', '2000', '197.8', '2023-11-05 08:21:32', '2023-11-05 08:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_salaries`
--

CREATE TABLE `pay_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary_month` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(255) DEFAULT NULL,
  `advance_salary` varchar(255) DEFAULT NULL,
  `due_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_salaries`
--

INSERT INTO `pay_salaries` (`id`, `employee_id`, `salary_month`, `paid_amount`, `advance_salary`, `due_salary`, `created_at`, `updated_at`) VALUES
(4, 14, 'October', '30000', '0', '30000', '2023-11-03 00:12:25', NULL),
(5, 17, 'October', '30000', '3000', '27000', '2023-11-03 00:36:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'pos.menu', 'web', 'pos', '2023-08-03 04:54:27', '2023-08-03 04:54:27'),
(2, 'employee.menu', 'web', 'employee', '2023-08-03 04:55:30', '2023-08-03 04:55:30'),
(3, 'employee.all', 'web', 'employee', '2023-08-03 04:56:05', '2023-08-03 04:56:05'),
(4, 'employee.add', 'web', 'employee', '2023-08-03 04:56:15', '2023-08-03 04:56:15'),
(5, 'employee.edit', 'web', 'employee', '2023-08-03 04:56:37', '2023-08-03 04:56:37'),
(6, 'employee.delete', 'web', 'employee', '2023-08-03 04:56:47', '2023-08-03 04:56:47'),
(7, 'customer.menu', 'web', 'customer', '2023-08-03 04:58:46', '2023-08-03 04:58:46'),
(8, 'customer.all', 'web', 'customer', '2023-08-03 04:58:56', '2023-08-03 04:58:56'),
(9, 'customer.add', 'web', 'customer', '2023-08-03 04:59:07', '2023-08-03 04:59:07'),
(10, 'customer.edit', 'web', 'customer', '2023-08-03 04:59:22', '2023-08-03 04:59:22'),
(11, 'customer.delete', 'web', 'customer', '2023-08-03 04:59:33', '2023-08-03 04:59:33'),
(12, 'supplier.menu', 'web', 'supplier', '2023-08-03 05:00:01', '2023-08-03 05:00:01'),
(13, 'supplier.all', 'web', 'supplier', '2023-08-03 05:00:10', '2023-08-03 05:00:10'),
(14, 'supplier.add', 'web', 'supplier', '2023-08-03 05:00:22', '2023-08-03 05:00:22'),
(15, 'supplier.edit', 'web', 'supplier', '2023-08-03 05:00:32', '2023-08-03 05:00:32'),
(16, 'supplier.delete', 'web', 'supplier', '2023-08-03 05:01:26', '2023-08-03 05:01:26'),
(17, 'salary.menu', 'web', 'salary', '2023-08-03 05:02:06', '2023-08-03 05:02:06'),
(18, 'salary.add', 'web', 'salary', '2023-08-03 05:02:30', '2023-08-03 05:02:30'),
(19, 'salary.all', 'web', 'salary', '2023-08-03 05:02:42', '2023-08-03 05:02:42'),
(20, 'salary.pay', 'web', 'salary', '2023-08-03 05:02:56', '2023-08-03 05:02:56'),
(21, 'salary.paid', 'web', 'salary', '2023-08-03 05:03:07', '2023-08-03 05:03:07'),
(22, 'attendance.menu', 'web', 'attendence', '2023-08-03 05:04:28', '2023-08-03 05:04:28'),
(23, 'category.menu', 'web', 'category', '2023-08-03 05:04:47', '2023-08-03 05:04:47'),
(24, 'product.menu', 'web', 'product', '2023-08-03 05:05:05', '2023-08-03 05:05:05'),
(25, 'expense.menu', 'web', 'expense', '2023-08-03 05:05:38', '2023-08-03 05:05:38'),
(26, 'orders.menu', 'web', 'orders', '2023-08-03 05:05:51', '2023-08-03 05:05:51'),
(27, 'stock.menu', 'web', 'stock', '2023-08-03 05:06:05', '2023-08-03 05:06:05'),
(28, 'roles.menu', 'web', 'roles', '2023-08-03 05:06:21', '2023-08-03 05:06:21');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_store` varchar(255) DEFAULT NULL,
  `buying_date` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `buying_price` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `supplier_id`, `product_code`, `quantity`, `product_image`, `product_store`, `buying_date`, `author`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(1, 'Ponniyin Selvan Part 05 Hard Cover', 13, 12, '930709829', '10', 'upload/product/1772753978342595.jpg', NULL, '2023-05-08', NULL, NULL, '2350.00', '2023-10-27 07:07:11', '2023-11-03 00:27:03'),
(2, 'Raja Perigai', 13, 6, 'PC08', '8', 'upload/product/1772754030217973.jpg', 'Vanathi Padhippagam', '2023-05-09', NULL, NULL, '2871.00', '2023-07-29 06:00:39', '2023-10-31 10:11:50'),
(3, 'Master- Thiraikadhai', 15, 12, 'PC09', '1', 'upload/product/1772753934472589.jpg', 'Pesamozhi Publications', '2023-07-11', NULL, NULL, '2310.00', '2023-07-29 06:00:50', '2023-10-31 10:03:14'),
(4, 'Saivanery Grade - 01', 16, 17, 'PC10', '25', 'upload/product/1772766159512002.png', 'Lanka Book Depot', '2023-02-14', NULL, NULL, '530.00', '2023-07-29 09:09:15', '2023-07-29 09:09:15'),
(5, 'Science Grade - 06', 16, 17, 'PC11', '20', 'upload/product/1772766378014900.png', 'Lanka Book Depot', '2023-02-13', NULL, NULL, '550.00', '2023-07-29 09:12:43', '2023-07-29 09:12:43'),
(6, 'Mathematics Grade - 06', 16, 18, 'PC12', '18', 'upload/product/1772766507434652.png', 'Loyal Publications', '2023-02-13', 'M.Kajeeban', NULL, '500.00', '2023-07-29 09:14:47', NULL),
(7, 'New English Today Grade - 08', 16, 18, 'PC13', '17', 'upload/product/1772766652708903.jpg', 'Loyal Publications', '2023-02-13', 'A.Yogarajah', NULL, '450.00', '2023-07-29 09:17:05', NULL),
(8, 'Thermal Physics A/L', 16, 14, 'PC14', '26', 'upload/product/1772766845853371.jpg', 'K.J. Enterprises', '2023-03-14', 'Jeyakumar', NULL, '860.00', '2023-07-29 09:20:10', '2023-08-01 00:24:20'),
(9, 'Sadathin Poriyiyal Iyalpugal A/L', 16, 14, 'PC15', '15', 'upload/product/1772767020281079.jpg', 'K.J. Enterprises', '2023-03-13', 'Jeyakumar', NULL, '675.00', '2023-07-29 09:22:56', NULL),
(10, 'Vetrikku Valikatti Grade - 04', 16, 25, 'PC16', '10', 'upload/product/1772767115569615.jpg', 'Student Publication', NULL, 'S.Pakeetharan', NULL, '600.00', '2023-07-29 09:24:27', NULL),
(11, 'Tamil Valikatti Grade - 03', 16, 25, 'PC17', '99', 'upload/product/1772767217024673.png', 'Student Publication', '2023-02-13', 'A.S.Jawfar', NULL, '780.00', '2023-07-29 09:26:04', '2023-10-31 08:25:56'),
(12, 'Sinhala - Second Language (Grade - 03)', 16, 14, 'PC18', '14', 'upload/product/1772767422768874.jpg', 'Darul Iman Trust', '2023-03-16', 'A.J.A.Hakam', NULL, '750.00', '2023-07-29 09:29:20', '2023-08-05 10:24:23'),
(13, 'Mathematics Fast Guide  (Grade - 02)', 16, 14, 'PC19', '5', 'upload/product/1772767521751894.jpg', 'Darul Iman Trust', NULL, 'I.L.M.Zafan', NULL, '750.00', '2023-07-29 09:30:54', NULL),
(14, 'Kadalpura', 13, 6, 'PC20', '15', 'upload/product/1772767651593318.jpg', 'Vanathi Padhippagam', '2023-06-06', 'Sandilyan', NULL, '7260.00', '2023-07-29 09:32:58', '2023-11-05 08:13:01'),
(15, 'Kallikattu Ithigasam', 19, 6, 'PC21', '7', 'upload/product/1772767759322748.jpg', 'Soorya Publishers', NULL, NULL, NULL, '1980.00', '2023-07-29 09:35:17', '2023-10-31 08:25:56'),
(16, 'Nalladha Naalu Vishiyam', 13, 6, 'PC22', '12', 'upload/product/1772767911029774.jpg', 'Sixth Sense Publication', '2023-01-15', 'Gopinath', '1270.00', '2197.80', '2023-07-29 23:36:42', '2023-11-05 08:22:09'),
(17, 'Siva Kolliyum Vellai Kolliyum', 21, 25, 'PC23', '25', 'upload/product/1780890114530707.jpg', 'Samudra Book Shop', NULL, 'Samudrika de Silva', NULL, '125.00', '2023-10-27 01:16:02', NULL),
(18, 'Sivappu Mukattu Sirumi', 21, 25, 'PC24', '10', 'upload/product/1780890225802818.jpg', 'Samudra Book Shop', NULL, 'Samudrika de Silva', NULL, '125.00', '2023-10-27 01:17:48', NULL),
(24, 'Arrow Pen - Blue', 22, 11, 'PC25', '22', 'upload/product/1781473551830506.jpg', NULL, NULL, NULL, NULL, '25.00', '2023-11-02 23:44:45', '2023-11-05 08:13:01'),
(54, 'Atlas CR Book - 160 Pages', 23, 26, 'PC26', '296', 'upload/product/65473ea68c6a7.png', 'Atlas Brand', '2023-11-02', NULL, NULL, '145.00', '2023-11-05 01:35:10', '2023-11-05 08:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-08-04 07:44:13', '2023-08-04 07:44:13'),
(2, 'Staff', 'web', '2023-11-05 08:24:44', '2023-11-05 08:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `type` text NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `type`, `account_number`, `bank_name`, `bank_branch`, `created_at`, `updated_at`) VALUES
(1, 'Astan Publications', 'astanpublications@gmail.com', '0112 362 590', 'No.09, Alexandra Road , Colombo-06', 'Local Suppliers', NULL, NULL, NULL, '2023-07-25 03:52:25', '2023-07-25 03:52:25'),
(2, 'A to Z Book Shop', 'a2znawras@gmail.com', '077-5122433', 'No.230, Mannar Road, Puttalam', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:27:27', NULL),
(3, 'Akura Printers,Publishers & Traders', NULL, '011-2328299', 'No.263, St.Joseph\'s Street, Negombo', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:29:29', NULL),
(4, 'Astraluxme Book Depot', NULL, '011-2334004', 'No.322, Sea Street, Colombo-11', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:31:55', NULL),
(5, 'Aysha Book Centre', 'ayshabookcentre@gmail.com', '011-2438725', 'No.52-54, 1st Floor, New Market, Maligawatta, Colombo-10', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:32:46', NULL),
(6, 'Chemamadu Book Centre', 'chemamadu@yahoo.com', '011-2331475', 'No.50, Peoples Park Complex, Gasworks Street, Colombo-11', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:34:10', NULL),
(7, 'D.S.L Enterprises', 'info@dsltrading.com', '011-4887737', 'No.61/3, Angulana Station Road, Moratuwa', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:36:52', NULL),
(8, 'Expographic Books Pvt Ltd', NULL, '011-2332698', 'No.53-3/2, 2nd Floor Munsoor Building, Main Street, Colombo-11', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:38:27', NULL),
(9, 'Gihan Book Shop', 'wot@gihanbookshop.com', '011-2730152', 'No.144 C, Sir D.B. Jayathilaka Mawatha (Hill Street), Dehiwala', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:39:27', NULL),
(10, 'Godage Book Emporium', 'mail.godage@gmail.com', '011-2685369', 'No.661,665,675, P.de.S.Kularathna Mawatha, Colombo-10', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:40:20', NULL),
(11, 'Imashi Prakashana', 'info@imashipublications.lk', '071-2772570', 'No.96A, Wanatha Road, Gangodawila, Nugegoda', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:41:22', NULL),
(12, 'International Book House', NULL, '037-2225257', 'No.120A, Colombo Road, Kurunegala', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:42:32', NULL),
(13, 'Islamic Book House', 'info@ibh.lk', '011-2684851', 'No.77, Dematagoda Road, Colombo-09', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:43:28', NULL),
(14, 'K.V. Printers', 'kvprintersbdcmktg@yahoo.com', '011-2330723', 'No.58, Green Lane, Colombo-13', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:44:18', NULL),
(15, 'Kumaran Book House', 'kumbhlk@gmail.com', '011-2364550', 'No. 39, 36th Lane, Colombo-06', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:45:01', NULL),
(16, 'Kurinchi Publishers', NULL, '077-6346263', 'No.280A, D.S. Senanayake Veediya, Kandy', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:45:47', NULL),
(17, 'Lanka Book Depot', 'lankabookdepot@gmail.com', '011-2341942', 'No.529/7, K Cyril Perera Mawatha, Colombo-13', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:47:00', NULL),
(18, 'Loyal Publications', NULL, '011-2433874', 'No.125A, New Moor Street, Colombo-12', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:47:55', NULL),
(19, 'M.D Gunasena', 'info@mdgunasena.com', '011-3510569', 'No.217, Olcott Mawatha, Colombo-11', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:48:37', NULL),
(20, 'Mahesha Trading Company', 'maheshatrading@gmail.com', '076-8633348', 'No.310/1, Madampitiya Road, Colombo-14', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:49:12', NULL),
(21, 'Padanama Publication', NULL, '071-8008533', 'No.912/A, Bo-gaha Jct Road, Gothatuwa New Town', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:49:59', NULL),
(22, 'Pitraban', 'pitraban@sltnet.lk', '011-2445340', 'No.23, 2nd Floor CCSMC, Reclamation road, Colombo-11', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:50:54', NULL),
(23, 'Quency Distributors', 'quencybook@gmail.com', '011-2366107', 'No.19, Pinto Place, Colombo-06', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:51:45', NULL),
(24, 'Ranila Products', NULL, '077-2571093', 'No.196, Wenamulla, Ambalangoda', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:52:22', NULL),
(25, 'Student Publication', NULL, '011-5921892', 'No.59, Vipulasena Mawatha, Maradana, Colombo-10', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:54:01', NULL),
(26, 'S.D. Wijethunga Publications', 'sdwijethungakadawatha@gmail.com', '011-2901419', 'No.539/1A, Ihalakaragahamuna, Eksath Mawatha, Kadawatha', 'Local Suppliers', NULL, NULL, NULL, '2023-07-27 08:55:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '0716286655', '202310261358admin.jpg', NULL, '$2y$10$aHklAQLrIIgX5gv.4BUWE.RGlDngsWH4U/LgrZ9GYXuuaalJxZq0q', NULL, '2023-06-27 12:13:55', '2023-11-05 10:38:20'),
(6, 'Vinusha', 'vinusha@gmail.com', '0775432722', '1781738240342756.jpg', NULL, '$2y$10$x5wJ5gDXl05cLA8e7Q8QKuopBXKnvfAW1AWC7j18dUQlhelpY6oJW', NULL, '2023-11-05 09:56:38', '2023-11-05 09:56:38'),
(7, 'Danushi', 'danushi@gmail.com', '0775432711', '1781738626514918.jpg', NULL, '$2y$10$Pr7at.j6OyTvsHsy8Y/1eOoxnhE/Xv0Shnf8FhJW4Zkbq5r6erdNy', NULL, '2023-11-05 10:02:46', '2023-11-05 10:02:46'),
(8, 'Bhagya', 'bhagya@gmail.com', '0775432722', '1781738723979396.jpg', NULL, '$2y$10$v7uWNYiG7.nj8WjJStJWkuI62180wm5q99ivCK4SOGMnxW4LSYBf.', NULL, '2023-11-05 10:04:19', '2023-11-05 10:04:19'),
(9, 'Hasan', 'hasan@gmail.com', '0762342345', '1781740720297586.jpeg', NULL, '$2y$10$b9zWJRAzTmL95dMK22jUIekJouB/ZWm2FHJo7chT.b62q7KixNjt.', NULL, '2023-11-05 10:36:03', '2023-11-05 10:36:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `advance_salaries`
--
ALTER TABLE `advance_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pay_salaries`
--
ALTER TABLE `pay_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
