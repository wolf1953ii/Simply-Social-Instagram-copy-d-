-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lut 2020, 14:53
-- Wersja serwera: 10.4.10-MariaDB
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `laravel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` tinyint(1) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`id`, `name`, `extension`, `title`, `privacy`, `user_id`, `created_at`, `updated_at`) VALUES
(11, '20200107231030Czy-sen-o-gorach-oznacza-cos-pozytywnego-Oto-popularne-interpretacje_article.jpg', 'jpg', 'Góry ścieżka', 0, 1, '2020-01-07 22:10:30', '2020-01-07 22:10:30'),
(12, '20200107231143morze-fascynujacych-faktow-na-temat-baltyku--poznaj-te-najciekawsze.jpg', 'jpg', 'Morze fala', 1, 1, '2020-01-07 22:11:43', '2020-01-07 22:11:43'),
(13, '20200107231200kopalnia-soli-wieliczka-kopalnia-wiedzy-gdzie-w-gory-na-weekend-700x465.jpg', 'jpg', 'Góry las', 1, 1, '2020-01-07 22:12:00', '2020-01-07 22:12:00'),
(14, '20200107231244beach-1329131_960_720.jpg', 'jpg', 'Morze patyk', 0, 1, '2020-01-07 22:12:44', '2020-01-07 22:12:44'),
(15, '20200107231337baltyk-temperatura.jpg', 'jpg', 'Plaża', 1, 4, '2020-01-07 22:13:37', '2020-01-07 22:13:37'),
(16, '20200107231351Fotolia_107701278_Subscription_XXL-Copy-1024x683.jpg', 'jpg', 'Góra', 0, 4, '2020-01-07 22:13:51', '2020-01-07 22:13:51'),
(17, '20200107231459t88v2-1.jpg', 'jpg', 'Góra szara', 0, 4, '2020-01-07 22:14:59', '2020-01-07 22:14:59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_05_104928_create_images_table', 2),
(5, '2020_01_05_142633_create_images_table', 3),
(6, '2020_01_07_112704_create_images_table', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
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
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Konrad', 'konrad.kret63@gmail.com', NULL, '$2y$10$xpkGu1XhdC5BeTKUDhi6lumkOVNW63/OZmA4y1xO51PZkD2/q8uQq', NULL, '2020-01-02 11:12:00', '2020-01-02 11:12:00'),
(2, 'Adam', 'adam1@wp.pl', NULL, '$2y$10$FVacHc1nSrWUlG.W7.TQYeNZ8aNls0Wvxlj0oDeQDIZhTi9yU8J1W', NULL, '2020-01-04 11:23:17', '2020-01-04 11:23:17'),
(3, 'kowal', 'kowal1@onet.com', NULL, '$2y$10$vUvR3RL6/4mSbMsuxkCWeexZ466KT0g.SgDnMii2/3hbuPY94KrlK', NULL, '2020-01-04 11:25:26', '2020-01-04 11:25:26'),
(4, 'mikołaj', 'miki1@wp.pl', NULL, '$2y$10$AzqqSF0WPB3nUdh00CN/M..P/wlDq4j9M3qgO0Em5buWOEEQftdOi', NULL, '2020-01-04 11:29:15', '2020-01-04 11:29:15'),
(5, 'konrad.', 'konrad.kret64@gmail.com', NULL, '$2y$10$OKBVCPfGjNI9YQHgMksV0.Qw.vgtQvsV8uMacSjU03QRG7dif5rPa', NULL, '2020-01-05 11:30:32', '2020-01-05 11:30:32'),
(6, 'Major', 'byleaki@xd.loc', NULL, '$2y$10$lL5PuV0vDUS1lG.x1CasAORPz3PMxgx6X4qUuGn5zAQIQxe8OvtTO', NULL, '2020-01-07 17:00:53', '2020-01-07 17:00:53'),
(7, 'aaaa', 'a@1.com.pl', NULL, '$2y$10$vPF1qqlzun/rJ8CteBRwb..oERN5XfPh2dmt5ymI/IIlRg.yRg.3C', NULL, '2020-01-07 17:45:58', '2020-01-07 17:45:58'),
(8, 'qqqq', 'q@q.com.pl', NULL, '$2y$10$gfmOAimN0j80rZrllXzvlO9G2vqAhMg/SlLccZvSO7EFVuMtMdv.q', NULL, '2020-01-07 17:48:31', '2020-01-07 17:48:31'),
(9, 'Kuba', 'kub1@wp.pl', NULL, '$2y$10$DTUSw.8WxEIx85PpvYSar.dHjuvOlUysJbZsRGNN5vfPOXs8UIpzK', NULL, '2020-01-07 22:17:24', '2020-01-07 22:17:24'),
(10, 'Marcinek', 'mario1@wp.pl', NULL, '$2y$10$io70Lik/S6VUUsuTyMtzT.IbvT6Y2kI.TK8FMB8ukMNWb581fLu7u', NULL, '2020-01-13 20:34:04', '2020-01-13 20:34:04'),
(11, 'Marcinek', 'mario2@wp.pl', NULL, '$2y$10$kgjUSO42rXM.LEsP9P5oLuHxkdsLQC/NlY8uTJMxGmBe7/Tp251hC', NULL, '2020-01-13 20:34:40', '2020-01-13 20:34:40'),
(12, 'adam', 'ad1@wp.pl', NULL, '$2y$10$SlRwZI2WcfHq6aEvbH0RL.yAIxsvY6i.lN11qMkI.7AoI5Ib0KFdC', NULL, '2020-01-13 20:37:03', '2020-01-13 20:37:03'),
(13, 'Kate', 'kt1@wp.pl', NULL, '$2y$10$zkymPh4Tp5LFJRKIFAnYS.kDoR6/ydQz3MUVaPa7hODMwua//D3zi', NULL, '2020-01-13 20:39:17', '2020-01-13 20:39:17'),
(14, 'test', 't1@wp.pl', NULL, '$2y$10$WdkCeeR7T13liHQp6p4rueBzo4JHZ7jbJb55YgIXFlETIy2fYwCKi', NULL, '2020-01-15 06:49:07', '2020-01-15 06:49:07');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
