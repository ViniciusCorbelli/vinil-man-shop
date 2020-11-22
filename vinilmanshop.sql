-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2020 às 23:24
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
(2, 'POP');

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
  `id_category` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `id_category`, `image`) VALUES
(42, 'Vinil anos 50', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 200, 90, 1, '/public/img/product/16060835595fbae3e7485c8.jpg'),
(43, 'Vinil anos 50', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 200, 5, 1, '/public/img/product/16060836165fbae4204349f.jpg'),
(44, 'Vinil anos 40', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 80, 6, 1, '/public/img/product/16060836305fbae42e06044.jpg'),
(45, 'Vinil anos 2000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 60, 500, 1, '/public/img/product/16060836475fbae43f710f6.jpg'),
(46, 'Vinil anos 85', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 40.5, 6, 1, '/public/img/product/16060836645fbae4509cdd8.jpg'),
(47, 'Vinil anos 40', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 52, 90, 2, '/public/img/product/16060836935fbae46de7aa0.jpg'),
(48, 'Vinil anos 89', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 199.99, 85, 2, '/public/img/product/16060837165fbae484135b2.jpg'),
(49, 'Vinil anos 2000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 200, 5, 1, '/public/img/product/16060837345fbae496774c9.jpg'),
(50, 'Vinil anos 10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 149.99, 15, 1, '/public/img/product/16060837515fbae4a7ed3d0.jpg'),
(51, 'Vinil anos 85', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 58.99, 45, 2, '/public/img/product/16060837675fbae4b74afd5.jpg'),
(52, 'Vinil anos 85', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 110, 752, 2, '/public/img/product/16060837825fbae4c6e728c.jpg'),
(53, 'Vinil anos 45', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', 10, 9, 1, '/public/img/product/16060837985fbae4d6b52c7.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Vinícius', 'v.corbelli71@gmail.com', '$2y$10$c6Dmwt1JE.zIQsG1WXB7.OuI9rVEssCGwrU98S.6O9UZ9471/Di2m'),
(2, 'Renan', 'renan@gmail.com', '$2y$10$ZetGLr5BM63TjhLDhJiUDexf.7clrNAcxkmft89iFxw3vueKmYFlu');

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
-- Índices para tabela `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
