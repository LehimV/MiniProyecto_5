-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2023 a las 03:15:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miniproyecto_5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(11) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Alumno2', 'alumno@alumno2', NULL, '$2y$10$TaTaeOl.nyHeriSCr8eQcuY/Uz4t4hEoC0oeRamj0K2KK.ZGQ8AA6', NULL, '2023-07-07 03:56:51', '2023-07-07 05:28:33', '3'),
(2, 'LehimAdmin', 'lehim@admin', NULL, '$2y$10$Q1r13oQ/lTsBR1aChQ4UqO6MnqwDnpBCS/xW90nkgG7oDJgDdpGqi', NULL, '2023-07-07 03:57:49', '2023-07-07 06:01:46', '1'),
(3, 'Admin2', 'admin@2', NULL, '$2y$10$75.8nT7EaUkVfvSYdgQf5.2EfwFh0pV7x9AfIyD5r1Apx61/tBKwi', NULL, '2023-07-07 05:30:48', '2023-07-07 05:31:00', '1'),
(4, 'LehimMaestro', 'lehim@maestro', NULL, '$2y$10$8XD/lowmvanroF6PxOehcuvrbyPHGSpsC/QnhS70P42YPxv0ejrIC', NULL, '2023-07-07 05:35:28', '2023-07-07 05:35:44', '2'),
(6, 'Maestro2', 'maestro@2', NULL, '$2y$10$avTAy7dzYHeZ7ajIVKDId.ZIGx.NNMHq9jUUF4uFg3iGOfg6MHv9i', NULL, '2023-07-07 05:54:36', '2023-07-07 05:54:36', '3'),
(7, 'LehimAdmin17', 'admin@admin', NULL, '$2y$10$BpYNi6zNcLtqVT5ayUFrmelBKojWwD6i7dmQCgDhd48PXPqX9NmIi', NULL, '2023-07-07 05:56:52', '2023-07-07 05:57:24', '1'),
(8, 'Alumno3', 'alumno@3', NULL, '$2y$10$YYfs5p0KcdW2Jkz803gI6.GVP7keHqL0/3rXVA4ZAhkAvlqXEJkYi', NULL, '2023-07-07 06:00:56', '2023-07-07 06:00:56', '3'),
(9, 'Maestro3', 'maestro@3', NULL, '$2y$10$5Kb5cFbtazcxWl/8wVG5yeOizzbeKzAzeP2bQFRZpOw3FO00bsioW', NULL, '2023-07-07 06:17:02', '2023-07-07 06:17:02', '3'),
(10, 'Maestro4', 'maestro@4', NULL, '$2y$10$VFMVNDFSCUPSLGXfmsMHi.ECkP4bQOgtdu5LucG91.bNtRRrYHpp2', NULL, '2023-07-07 06:31:00', '2023-07-07 06:31:00', '3'),
(12, 'Maestro5', 'maestro@5', NULL, '$2y$10$VojObLsNpDGvNyU5RP89x.VsAE9aBC6k17paJZqrb4LBLpa8cANUa', NULL, '2023-07-07 06:33:48', '2023-07-07 06:33:48', '3'),
(13, 'Maestro6', 'maestro@6', NULL, '$2y$10$WDSI0qZT3qV3etlatCLEtOy3oWqpu1G3LvdSEw2QgV3yFR0aE55uG', NULL, '2023-07-07 06:35:27', '2023-07-07 06:35:27', '3'),
(14, 'Maestro7', 'maestrp@7', NULL, '$2y$10$WozQilNPhxFjWAywK1SsO.lMxYUEvHTB8kt7lzZhJ7O6JwENK7mXG', NULL, '2023-07-07 06:38:33', '2023-07-07 06:38:41', '2'),
(15, 'Admin3', 'admin@3', NULL, '$2y$10$o8xjrBIPXTNmPvv4nUgBWONSTuKix/CQZPPV5I5mmiaI/so1RY1wS', NULL, '2023-07-07 06:39:13', '2023-07-07 06:47:49', '1'),
(16, 'admin4', 'admin@4', NULL, '$2y$10$yPWDK5bGtN0XcdeCqxPiAOJYnGjZW34GSMZ38e0fht/aS1BSCj.NO', NULL, '2023-07-07 06:49:12', '2023-07-07 06:49:19', '1'),
(17, 'admin5', 'admin@5', NULL, '$2y$10$UCBll0Y20gSwPLJ53TSbS.T02Y/2ujxfiYyCWnpTUdLNlKFuiR4d.', NULL, '2023-07-07 06:53:22', '2023-07-07 06:53:22', '1'),
(18, 'adminTest', 'admin@test', NULL, '$2y$10$NcsNQRJNliaTmCVM5Izefu1fJCscOyAcAAKoAQOpNOfXjYF/Cvgym', NULL, '2023-07-07 06:54:05', '2023-07-07 07:13:57', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_models`
--

CREATE TABLE `users_models` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_models`
--

INSERT INTO `users_models` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'LehimAdmin', 'lehim@admin', '12345678', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `users_models`
--
ALTER TABLE `users_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users_models`
--
ALTER TABLE `users_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
