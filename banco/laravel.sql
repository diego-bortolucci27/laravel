-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2020 às 13:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `endereco`, `created_at`, `updated_at`) VALUES
(1, 'Lionel Messi', 'lionel.messi@outlook.com', 'Rua Barcelona, 10', '2020-06-11 18:37:23', '2020-06-15 15:33:27'),
(2, 'Charlie Cassin', 'rubie98@example.com', '68849 Nels Glen', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(3, 'Niko Gleason DVM', 'dwaters@example.com', '9094 Thurman Dale', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(4, 'Dr. Lilyan Stracke Sr.', 'dessie84@example.com', '1366 Shields Dam Suite 715', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(5, 'Aglae Greenfelder', 'ullrich.eric@example.com', '5805 Wava Orchard Suite 467', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(6, 'Carlo Gerhold', 'whitney.keeling@example.org', '3845 Schamberger Ports Apt. 715', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(7, 'Beryl Haley', 'white.melody@example.net', '274 Narciso Parks', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(8, 'Leda Cruickshank', 'claudia.hettinger@example.com', '85931 Curt Gardens Suite 927', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(9, 'Marlee Lehner IV', 'ernser.cary@example.net', '363 O\'Conner Roads Apt. 928', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(10, 'Geo Deckow', 'kailyn.jaskolski@example.org', '4070 Cassin Ramp Apt. 904', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(11, 'Diego Bortolucci', 'bortolucci.diego@gmail.com', 'Rua Antônio Elias 145', '2020-06-11 18:37:23', '2020-06-15 15:28:00'),
(12, 'Leandro Moreira', 'leandro.moreira07@gmail.com', 'Rua Primavera 1280', '2020-06-15 07:21:25', '2020-06-15 07:21:25');

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
(3, '2020_06_11_151546_create__produto_table', 1),
(4, '2020_06_11_152028_create_clientes_table', 2),
(5, '2020_06_11_152342_create_telefones_table', 2);

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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `cliente_id`, `titulo`, `telefone`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lolita Littel', '328-612-9402 x49020', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(2, 2, 'Gloria Zemlak', '(695) 995-1706 x22627', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(3, 3, 'Jerrold Ondricka', '1-796-379-1217', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(4, 4, 'Prof. Cecilia Pollich Sr.', '979-719-5765 x193', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(5, 5, 'Viviane Cassin', '1-794-505-6091', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(6, 6, 'Miss Asia Blick', '(745) 934-9970 x229', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(7, 7, 'Dr. Johnpaul Ullrich', '698-519-1284 x2833', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(8, 8, 'Nils Turcotte', '(717) 475-3413 x31137', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(9, 9, 'Tania Schaefer', '+1-454-621-5453', '2020-06-11 18:37:23', '2020-06-11 18:37:23'),
(10, 10, 'Clemens Hickle', '295.319.4933', '2020-06-11 18:37:23', '2020-06-11 18:37:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leandro', 'leandro.moreira07@gmail.com', '$2y$10$n1EpXXDa1A7eG4g7jKNF9.pYm5zbWlx5ud2aGm9ajP92f2XEd7r8G', 'QuJujsoPjhMxkeEzREEbrWPHYi7l9nE52c6NjF22vxmTkbVfbZrOu5bR7y2D', '2020-06-15 05:12:58', '2020-06-15 05:12:58'),
(2, 'Diego Bortolucci', 'bortolucci.diego@outlook.com.br', '$2y$10$nqFjffm20/N65SpXo4FGGe/MTK8nUb2xgFwK3.pZ/vGdc7OR99zMm', 'buDlI0mM1iRm2JTsdHP33HsOc6yaJNuBoA90WOTaVuGscCZk7hTfkTXLepfp', '2020-06-15 05:16:13', '2020-06-15 05:16:13');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `telefones_cliente_id_foreign` (`cliente_id`);

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
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `telefones_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
