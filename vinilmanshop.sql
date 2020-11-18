-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2020 às 16:30
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vinilmanshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Rock');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `id_category`) VALUES
(20, 'Vinil anos 50', 'Descrição', 200, 5, 'Rock'),
(21, 'Vinil anos 40', 'Descrição', 20, 5, 'Rock'),
(22, 'Vinil anos 80', 'Descrição', 60, 90, 'Rock'),
(23, 'Vinil anos 70', 'Descrição', 10, 90, 'Rock'),
(24, 'Vinil anos 20', 'Descrição', 110, 8, 'Rock'),
(25, 'Vinil anos 90', 'Descrição', 60, 90, 'Rock'),
(26, 'Vinil anos 10', 'Descrição', 110, 2, 'Rock'),
(27, 'Vinil anos 30', 'Descrição', 60, 8, 'Rock'),
(28, 'Vinil anos 60', 'Descrição', 546, 8, 'Rock'),
(29, 'Vinil anos 2000', 'Descrição', 99999, 2, 'Rock'),
(30, 'Vinil ano 2010', 'Descrição', 200, 4, 'Rock'),
(31, 'Vinil ano 2020', 'Descrição', 60, 80, 'Rock');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(0, 'Vinicius', 'v.corbelli71@gmail.com', '$2y$10$lnGb6Cl6b2doScxg1PTwtOs1jwxxTISAmSjuT2XDEz0EC.nvqzrzu'),
(0, 'Renan', 'renannunes@ice.ufjf.br', '$2y$10$DKMz9TlYAOulOa2l3Viy8ux0L9pCkkqTi1bHD0fNGEK.7r0iBHVV6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
