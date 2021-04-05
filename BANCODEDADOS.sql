-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Abr-2021 às 18:39
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `point_register`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `collaborators`
--

CREATE TABLE `collaborators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocupattion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_birth` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `collaborators`
--

INSERT INTO `collaborators` (`id`, `user_id`, `manager_id`, `created_by`, `name`, `age`, `cpf`, `cep`, `ocupattion`, `dt_birth`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'TICTO', 19, '460.113.725-03', '37141-603', 'voluptates', '2001-05-14', '54552-818, Travessa Valência, 2416. Apto 90\nSales do Norte - BA', NULL, '2021-04-05 15:16:23', '2021-04-05 15:16:23'),
(2, 2, 1, 1, 'HEDLEY Lima', 32, '113.526.907-64', '35865-642', 'dolorem', '1988-12-27', '08581-789, Av. Ivan, 14350. Apto 2265\nAlessandro do Sul - TO', NULL, '2021-04-05 15:16:24', '2021-04-05 16:39:13'),
(3, 3, 1, 2, 'ELAINE ISADORA GALVãO', 34, '352.466.575-66', '92612-579', 'distinctio', '1986-11-22', '43226-390, Largo Benício, 49. Bloco C\nAssunção d\'Oeste - AP', NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(4, 4, 1, 1, 'PALOMA SANCHES DELGADO', 26, '386.678.878-97', '73278-466', 'sapiente', '1995-01-03', '37134-406, Travessa Regiane, 60\nVila Nicole - AL', NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(5, 5, 2, 1, 'MAíSA DE ARRUDA NETO', 31, '118.413.629-72', '61385-884', 'quo', '1989-07-22', '91632-500, Travessa Madeira, 5655. 2º Andar\nRobson do Leste - AL', NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(6, 6, 2, 2, 'DR. DIEGO RICARDO ASSUNçãO', 21, '222.327.343-23', '31892-210', 'quia', '1999-08-13', '83173-936, Largo Luana Vila, 68\nRangel do Norte - AC', NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(7, 7, 1, 1, 'ADRIEL ALLAN FRANCO FILHO', 42, '474.924.853-36', '87902-799', 'quia', '1979-01-26', '33747-698, R. Isabella Rezende, 574\nSanta Sérgio d\'Oeste - ES', NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(8, 10, 1, 2, 'DR. CHRISTOPHER FERREIRA JR.', 44, '400.917.303-33', '54623-013', 'eos', '1976-07-17', '92031-636, Av. Lutero, 9819\nAlcantara do Leste - GO', NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(9, 11, 2, 2, 'SANDRO JOSé PAES', 37, '471.668.837-23', '20924-141', 'eum', '1983-04-18', '06056-620, Travessa da Silva, 8\nVila William do Norte - PB', NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(10, 12, 2, 2, 'SRA. LUNA LIDIANE BATISTA', 25, '570.826.377-64', '42649-053', 'quis', '1996-02-21', '60703-700, Rua Lutero, 96160\nGalindo do Leste - MT', NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(11, 13, 2, 1, 'SRTA. JOYCE LEAL DAS DORES', 19, '644.434.002-06', '24325-266', 'explicabo', '2001-12-28', '77677-961, Av. Rosana Guerra, 52. F\nAlexa do Norte - MS', NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(12, 14, 2, 1, 'INáCIO FIDALGO SOBRINHO', 47, '978.286.986-40', '88619-011', 'rerum', '1973-06-05', '20064-904, Travessa Inácio Furtado, 934. Fundos\nChaves do Norte - PR', NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(13, 17, 2, 1, 'ROSANA CARRARA NETO', 33, '933.826.498-02', '29609-412', 'occaecati', '1987-11-19', '22429-784, Av. Lavínia, 4\nSão Sônia do Norte - SE', NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(14, 18, 1, 2, 'CíNTIA CORDEIRO JR.', 29, '879.574.764-81', '83652-434', 'iure', '1992-02-22', '85954-071, Largo Antonieta Lutero, 9462. Apto 7\nPorto Maraisa - MT', NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(15, 19, 2, 1, 'SR. ANTôNIO GIAN REZENDE', 46, '104.055.708-21', '15626-617', 'et', '1974-05-18', '12890-649, Largo Willian Soares, 9388. Bloco B\nPorto Alessandra do Norte - PE', NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(17, 21, 1, 2, 'TEOBALDO JáCOMO ABREU SOBRINHO', 39, '019.792.758-07', '39602-236', 'magnam', '1981-12-18', '06194-022, Av. Vila, 8983. Apto 814\nSanta Breno - AL', NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(18, 26, 2, NULL, 'Hedley Lima Cunha', 30, '950.640.540-92', '65912-340', 'empregado', '1990-11-26', 'Avenida Itaipu, Parque Santa Lúcia, Imperatriz - MA', NULL, '2021-04-05 15:36:13', '2021-04-05 15:36:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_04_154840_create_sessions_table', 1),
(7, '2021_04_04_163910_create_collaborators_table', 1),
(8, '2021_04_05_015503_create_registers_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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
-- Estrutura da tabela `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `registers`
--

INSERT INTO `registers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-04-05 16:16:52', '2021-04-05 16:16:52'),
(2, 2, '2021-04-05 16:17:12', '2021-04-05 16:17:12'),
(3, 5, '2021-04-05 16:22:36', '2021-04-05 16:22:36'),
(4, 5, '2021-04-05 16:22:38', '2021-04-05 16:22:38'),
(5, 5, '2021-04-05 16:22:39', '2021-04-05 16:22:39'),
(6, 5, '2021-04-05 16:22:40', '2021-04-05 16:22:40'),
(7, 2, '2021-04-05 16:38:59', '2021-04-05 16:38:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
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
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1mg8EIv1AtR0mr9Ywemipov2HWjzwGmbkpTtK1Gx', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.63', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWU1DT0NaT1dFN2NJRUliSldSeVIyOWhJcjlTUG52U1lLa3dubUZ5QSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6NzoibWVzc2FnZSI7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ5MklYVU5wa2pPMHJPUTVieU1pLlllNG9Lb0VhM1JvOWxsQy8ub2cvYXQyLnVoZVdHL2lnaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO319', 1617639760),
('blcaWfPmlaQh5NlFlQdwSeKRG1DFiwka1xEYWPLd', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.63', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVTZCTW1URDBVSDBJTVNBVE8xQkFrNjRnblBMT21vY1UyY2toakdBcCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ5MklYVU5wa2pPMHJPUTVieU1pLlllNG9Lb0VhM1JvOWxsQy8ub2cvYXQyLnVoZVdHL2lnaSI7fQ==', 1617640764);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `profile_photo_path`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ticto', 'ticto@ticto.com', '2021-04-05 15:16:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'bAAeakOktd', NULL, 1, NULL, '2021-04-05 15:16:23', '2021-04-05 15:16:23'),
(2, 'HEDLEY Lima', 'hedley.ti@gmail.com', '2021-04-05 15:16:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'RlV9fl5pLB', NULL, 1, NULL, '2021-04-05 15:16:23', '2021-04-05 16:39:13'),
(3, 'Elaine Isadora Galvão', 'iferraz@example.org', '2021-04-05 15:16:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'X34QCqv62y', NULL, NULL, NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(4, 'Paloma Sanches Delgado', 'carol.oliveira@example.com', '2021-04-05 15:16:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'V8YWuVQ6LJ', NULL, NULL, NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(5, 'Maísa de Arruda Neto', 'curias@example.net', '2021-04-05 15:16:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'MoUk5FRnap', NULL, NULL, NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(6, 'Dr. Diego Ricardo Assunção', 'sales.daniela@example.com', '2021-04-05 15:16:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'TNMmQEs5xV', NULL, NULL, NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(7, 'Adriel Allan Franco Filho', 'paulo.faro@example.org', '2021-04-05 15:16:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '8Zx4bAzx9o', NULL, NULL, NULL, '2021-04-05 15:16:24', '2021-04-05 15:16:24'),
(10, 'Dr. Christopher Ferreira Jr.', 'tatiane69@example.net', '2021-04-05 15:20:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'lVEz3I2fdx', NULL, NULL, NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(11, 'Sandro José Paes', 'deivid32@example.com', '2021-04-05 15:20:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'xqivNi8Y7b', NULL, NULL, NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(12, 'Sra. Luna Lidiane Batista', 'torres.eduardo@example.com', '2021-04-05 15:20:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'MuJvYQacyy', NULL, NULL, NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(13, 'Srta. Joyce Leal das Dores', 'lia81@example.com', '2021-04-05 15:20:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '4YalNYwt4W', NULL, NULL, NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(14, 'Inácio Fidalgo Sobrinho', 'ingrid.faria@example.net', '2021-04-05 15:20:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'rIzShbqZ2M', NULL, NULL, NULL, '2021-04-05 15:20:54', '2021-04-05 15:20:54'),
(17, 'Rosana Carrara Neto', 'cristina.madeira@example.net', '2021-04-05 15:20:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'dLtTTkgRYo', NULL, NULL, NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(18, 'Cíntia Cordeiro Jr.', 'fabio.lozano@example.org', '2021-04-05 15:20:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'PQYa5S78Mj', NULL, NULL, NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(19, 'Sr. Antônio Gian Rezende', 'medina.amanda@example.com', '2021-04-05 15:20:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'O4vUc8mJlS', NULL, NULL, NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(21, 'Teobaldo Jácomo Abreu Sobrinho', 'fatima.teles@example.net', '2021-04-05 15:20:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'QnIvKecuDq', NULL, NULL, NULL, '2021-04-05 15:20:59', '2021-04-05 15:20:59'),
(26, 'Hedley Lima Cunha', 'hedley.ti2@gmail.com', NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-05 15:36:13', '2021-04-05 15:36:13');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `collaborators_cpf_unique` (`cpf`),
  ADD KEY `collaborators_user_id_foreign` (`user_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registers_user_id_foreign` (`user_id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `collaborators`
--
ALTER TABLE `collaborators`
  ADD CONSTRAINT `collaborators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `registers`
--
ALTER TABLE `registers`
  ADD CONSTRAINT `registers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
