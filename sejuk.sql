-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 01:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sejuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_returns`
--

CREATE TABLE `apply_for_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_method_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kurir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_type`) VALUES
('CLT', 'Clothes'),
('CST', 'Costume');

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
-- Table structure for table `form_accept_payments`
--

CREATE TABLE `form_accept_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `sejuk_bank_account_outcome_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_accept_payments`
--

INSERT INTO `form_accept_payments` (`id`, `order_id`, `sejuk_bank_account_outcome_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-06-15 19:32:32', '2023-06-15 19:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `form_return_payments`
--

CREATE TABLE `form_return_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `sejuk_bank_account_outcome_id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_04_060434_create_rentals_table', 1),
(6, '2023_06_05_133530_create_password_resets_rentals_table', 1),
(7, '2023_06_10_042752_create_category_table', 1),
(8, '2023_06_11_162635_create_vendorcatalogs_table', 1),
(9, '2023_06_12_064610_create_carts_table', 2),
(10, '2023_06_12_080427_create_shipping_methods_table', 2),
(11, '2023_06_12_084852_create_payment_methods_table', 2),
(12, '2023_06_12_084906_create_orders_table', 2),
(13, '2023_06_12_084913_create_order_items_table', 2),
(14, '2023_06_12_084930_create_shippings_table', 2),
(15, '2023_06_12_084943_create_transactions_table', 2),
(16, '2023_06_12_115420_create_apply_for_returns_table', 2),
(17, '2023_06_12_115429_create_return_packages_table', 2),
(18, '2023_06_13_105928_create_sejuk_bank_account_outcomes_table', 2),
(19, '2023_06_14_105850_create_form_return_payments_table', 2),
(20, '2023_06_14_105906_create_form_accept_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_status`, `user_id`, `vendor_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'COMPLETED_RETURN', 1, 1, 27138, '2023-06-15 19:29:47', '2023-06-15 19:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `catalog_id`, `order_id`, `amount`, `price`) VALUES
(1, 1, 1, 6, 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hello@gmail.com', '$2y$10$Xpayg.Ui3sF2sqevIPKag.3I.Oj9VNoFGtkI8Jd4bKm4P6t1LH5AW', '2023-06-15 23:32:26'),
('jaya@gmail.com', '$2y$10$j2DX.KQ6hgSkwZkq7NmPi.mkMt003lqELtxeM.pLpC4JKhYKW19ca', '2023-06-17 08:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets_rentals`
--

CREATE TABLE `password_resets_rentals` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `category`, `type`) VALUES
(1, 'Kartu Kredit', 'Kartu Kredit/ Debit'),
(2, 'Transfer Virtual Account/ Bank', 'Bank Mandiri'),
(3, 'Transfer Virtual Account/ Bank', 'Bank BCA'),
(4, 'Transfer Virtual Account/ Bank', 'Bank BNI'),
(5, 'Transfer Virtual Account/ Bank', 'Bank BRI'),
(6, 'Transfer Virtual Account/ Bank', 'Bank Syariah Indonesia (BSI)');

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
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_store` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `oprhours_open` time DEFAULT NULL,
  `oprhours_close` time DEFAULT NULL,
  `vendor_Creditcardtype1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_Creditcardtype2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_homephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `name`, `vendor_store`, `vendor_type`, `email`, `city`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `oprhours_open`, `oprhours_close`, `vendor_Creditcardtype1`, `vendor_Creditcardtype2`, `vendor_homephone`, `vendor_address`) VALUES
(1, 'Indira Maharani', 'ise', 'Retail', 'bagus@gmail.com', 'Surabaya', '08562123872', NULL, '$2y$10$owcYU9ToR.DDPHp.3hjT6e8gDS2raC90aSQX9ypw/e80zONlSSlDO', NULL, '2023-06-13 06:46:49', '2023-06-13 22:37:38', '09:00:00', '10:00:00', '2132141', '14124124', '414124214', 'Bangah Jaya Indah'),
(2, 'Indira Maharani', 'JAYA', 'Retail', 'google@gmail.com', 'Surabaya', '32740231', NULL, '$2y$10$f/CL2aXpjcRRtoz9PLZtMOt5adRik7TvdTMfzCWVCyd/JcUAAIksa', 'X1Co40lHaNerEVaJ4GJ5rShT4ZwMruT0GEV5gTXTy51KqrXjEqDnBhTNFiXo', '2023-06-13 06:52:35', '2023-06-13 06:55:17', '10:00:00', '20:00:00', NULL, NULL, NULL, 'Bangah Jaya Indah'),
(3, 'halo', 'barokah', 'Rental', 'jaya@gmail.com', 'Medan', '08562123872', NULL, '$2y$10$Lm/U6S0prcDMC6Isfe6S5.sr5VbLOsMz3xRokiLxFswYAPnD2O.T2', NULL, '2023-06-13 21:45:29', '2023-06-13 21:48:04', '09:00:00', '20:00:00', NULL, NULL, NULL, 'Bangah Jaya Indah'),
(4, 'Indira Maharani', 'Colorbox', 'Rental', 'indiramaharani0407@gmail.com', 'Jakarta', '24323115123', NULL, '$2y$10$XDVsRyHdFug3QoScGS.ARecHuqg0eN10OlgfGqRQe3rWkVhYh2poi', NULL, '2023-06-17 06:59:11', '2023-06-17 06:59:41', '09:00:00', '10:00:00', NULL, NULL, NULL, 'Bangah Jaya Indah');

-- --------------------------------------------------------

--
-- Table structure for table `return_packages`
--

CREATE TABLE `return_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_method_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kurir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_packages`
--

INSERT INTO `return_packages` (`id`, `shipping_method_id`, `nama_kurir`, `vendor_address`, `customer_address`, `no_resi`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'anang', 'Bangah Jaya Indah', 'Delta Sari Indah', '2534238', 1, '2023-06-15 19:31:41', '2023-06-15 19:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `sejuk_bank_account_outcomes`
--

CREATE TABLE `sejuk_bank_account_outcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejuk_bank_account_outcomes`
--

INSERT INTO `sejuk_bank_account_outcomes` (`id`, `bank_name`, `bank_account_number`, `bank_account_name`, `transfer_amount`, `created_at`, `updated_at`) VALUES
(1, 'Other Bank', '2354652', 'Jaya', 138, '2023-06-15 19:32:32', '2023-06-15 19:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_method_id` bigint(20) UNSIGNED NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kurir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `shipping_method_id`, `customer_address`, `vendor_address`, `no_resi`, `nama_kurir`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Delta Sari Indah Surabaya 2321313131', 'Bangah Jaya Indah Surabaya 414124214', '523183851', NULL, 27000, '2023-06-15 19:29:47', '2023-06-15 19:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimate_delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`id`, `price`, `name`, `type`, `estimate_delivery`) VALUES
(1, 25000, 'JNE', 'Regular', '2-3 hari'),
(2, 27000, 'JNT', 'Regular', '2-3 hari'),
(3, 20000, 'Sicepat', 'Regular', '1-2 hari'),
(4, 15000, 'Go-Send', 'Instant', 'Same day');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `card_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `payment_method_id`, `card_number`, `total_price`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 27138, 1, '2023-06-15 19:29:47', '2023-06-15 19:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cust_Creditcardtype1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_Creditcardtype2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_homephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `city`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `cust_Creditcardtype1`, `cust_Creditcardtype2`, `cust_homephone`, `cust_address`) VALUES
(1, 'Indira Maharani', 'jaya@gmail.com', 'Surabaya', '0723971289', NULL, '$2y$10$sOQvcDAkMZDEE/ihmqs.M.YUn2cFjVXeVm2oDriz8oU8HJPREfoEO', 'UNNMwml20aYdGuN60p3qoWoci60ef226KFI5YSv2HJKyVBgU6neePsn2AImm', '2023-06-12 21:12:01', '2023-06-15 19:29:23', NULL, NULL, '2321313131', 'Delta Sari Indah'),
(2, 'Indira Maharani', 'hello@gmail.com', 'Surabaya', '08562123872', NULL, '$2y$10$RhGVLn/8sQ3pvMhuknlqUu8U4dJzV03IrfintewEcMHQXt2KAF3Iy', 'E4YLVHIUYHNnc4jv4pQ3IdpFEe4xnwHCe7t3vVtm5vzMeSbhL8RgPe08NCK0', '2023-06-13 06:45:11', '2023-06-15 21:52:25', NULL, NULL, NULL, NULL),
(3, 'indira', 'mama@gmail.com', 'Surabaya', '32740231', NULL, '$2y$10$iuXAnrqYXux5Vq9Q8FimMO3gh2G8Z7pwHtq1fGQ9gYhCCXoSs2sIy', 'n7P7GFRb2adrWzPzt5xXWkwnp894cszf5TbapDy1WHRTUHX3phHgC7rpQDSk', '2023-06-13 21:33:18', '2023-06-13 22:22:41', '734190123', '2312313123', '2321313131', 'Delta Sari Indah'),
(4, 'Indira Maharani', 'baba@gmail.com', 'Surabaya', '3421512521512', NULL, '$2y$10$7Vh8MAiDslBhAqFitVoe9eLY9nSrlis3HXgPvMXsDqlENOVMtEFQS', NULL, '2023-06-17 06:32:41', '2023-06-17 06:32:41', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendorcatalogs`
--

CREATE TABLE `vendorcatalogs` (
  `catalog_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendorcatalogs`
--

INSERT INTO `vendorcatalogs` (`catalog_id`, `item_name`, `item_price`, `size`, `stock`, `category_id`, `catalog_image`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 'sejuk', 23, 'XXS', 23, 'CLT', 'catalog/jjv7B4t1MIK5ayGuQy5diZGNMGju2O26ODflKC23.jpg', 1, '2023-06-15 19:28:16', '2023-06-15 19:32:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_returns`
--
ALTER TABLE `apply_for_returns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_for_returns_shipping_method_id_foreign` (`shipping_method_id`),
  ADD KEY `apply_for_returns_order_id_foreign` (`order_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_catalog_id_foreign` (`catalog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_accept_payments`
--
ALTER TABLE `form_accept_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_accept_payments_order_id_foreign` (`order_id`),
  ADD KEY `form_accept_payments_sejuk_bank_account_outcome_id_foreign` (`sejuk_bank_account_outcome_id`);

--
-- Indexes for table `form_return_payments`
--
ALTER TABLE `form_return_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_return_payments_order_id_foreign` (`order_id`),
  ADD KEY `form_return_payments_sejuk_bank_account_outcome_id_foreign` (`sejuk_bank_account_outcome_id`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_vendor_id_foreign` (`vendor_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_catalog_id_foreign` (`catalog_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_resets_rentals`
--
ALTER TABLE `password_resets_rentals`
  ADD KEY `password_resets_rentals_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rentals_vendor_store_unique` (`vendor_store`),
  ADD UNIQUE KEY `rentals_email_unique` (`email`);

--
-- Indexes for table `return_packages`
--
ALTER TABLE `return_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `return_packages_shipping_method_id_foreign` (`shipping_method_id`),
  ADD KEY `return_packages_order_id_foreign` (`order_id`);

--
-- Indexes for table `sejuk_bank_account_outcomes`
--
ALTER TABLE `sejuk_bank_account_outcomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`),
  ADD KEY `shippings_shipping_method_id_foreign` (`shipping_method_id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_payment_method_id_foreign` (`payment_method_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendorcatalogs`
--
ALTER TABLE `vendorcatalogs`
  ADD PRIMARY KEY (`catalog_id`),
  ADD KEY `vendorcatalogs_vendor_id_foreign` (`vendor_id`),
  ADD KEY `vendorcatalogs_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_for_returns`
--
ALTER TABLE `apply_for_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_accept_payments`
--
ALTER TABLE `form_accept_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_return_payments`
--
ALTER TABLE `form_return_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_packages`
--
ALTER TABLE `return_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejuk_bank_account_outcomes`
--
ALTER TABLE `sejuk_bank_account_outcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendorcatalogs`
--
ALTER TABLE `vendorcatalogs`
  MODIFY `catalog_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_for_returns`
--
ALTER TABLE `apply_for_returns`
  ADD CONSTRAINT `apply_for_returns_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `apply_for_returns_shipping_method_id_foreign` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `vendorcatalogs` (`catalog_id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `form_accept_payments`
--
ALTER TABLE `form_accept_payments`
  ADD CONSTRAINT `form_accept_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `form_accept_payments_sejuk_bank_account_outcome_id_foreign` FOREIGN KEY (`sejuk_bank_account_outcome_id`) REFERENCES `sejuk_bank_account_outcomes` (`id`);

--
-- Constraints for table `form_return_payments`
--
ALTER TABLE `form_return_payments`
  ADD CONSTRAINT `form_return_payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `form_return_payments_sejuk_bank_account_outcome_id_foreign` FOREIGN KEY (`sejuk_bank_account_outcome_id`) REFERENCES `sejuk_bank_account_outcomes` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `vendorcatalogs` (`catalog_id`),
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `return_packages`
--
ALTER TABLE `return_packages`
  ADD CONSTRAINT `return_packages_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `return_packages_shipping_method_id_foreign` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`);

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `shippings_shipping_method_id_foreign` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `transactions_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`);

--
-- Constraints for table `vendorcatalogs`
--
ALTER TABLE `vendorcatalogs`
  ADD CONSTRAINT `vendorcatalogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `vendorcatalogs_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `rentals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
