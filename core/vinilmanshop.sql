-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2020 às 15:10
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
(3, 'Rock'),
(4, 'Pop'),
(5, 'Clássica'),
(6, 'Dança'),
(7, 'Infantil'),
(8, 'Jazz'),
(9, 'Eletronica'),
(10, 'Samba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `id_category`, `image`) VALUES
(1, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(2, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(3, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(4, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(5, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(6, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(7, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(8, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(9, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(10, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(11, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(12, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(13, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(14, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(15, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(16, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(17, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(18, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(19, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(20, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(21, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(22, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(23, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(24, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(25, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(26, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(27, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(28, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(29, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(30, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(31, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(32, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(33, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(34, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(35, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(36, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(37, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(38, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(39, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(40, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(41, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(42, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(43, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(44, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(45, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(46, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(47, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(48, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(49, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(50, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(51, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(52, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(53, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(54, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(55, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(56, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(57, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(58, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(59, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(60, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(61, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(62, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(63, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(64, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(65, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(66, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(67, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(68, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(69, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(70, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(71, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(72, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(73, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(74, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(75, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(76, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(77, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(78, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(79, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(80, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(81, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(82, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(83, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(84, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(85, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(86, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(87, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(88, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(89, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(90, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(91, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(92, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(93, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(94, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(95, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(96, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(97, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(98, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(99, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(100, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(101, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(102, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(103, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(104, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(105, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(106, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(107, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(108, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(109, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(110, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(111, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(112, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(113, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(114, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(115, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(116, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(117, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(118, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(119, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(120, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(121, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(122, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(123, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(124, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(125, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(126, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(127, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(128, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(129, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(130, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(131, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(132, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(133, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(134, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(135, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(136, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(137, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(138, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(139, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(140, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(141, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(142, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(143, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(144, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(145, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(146, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(147, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(148, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(149, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(150, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(151, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(152, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(153, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(154, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(155, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(156, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(157, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(158, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(159, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(160, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 8, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(161, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg'),
(162, 'Lp Jorge Ben A Tabua De Esmeralda Vinil 180g', 'Lp Jorge Ben A Tábua de Esmeralda 180g LacradoEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.GÊNERO: MPB/ORIGEM: Brasil', 139.99, 8, 5, '/public/img/product/16065198975fc18c5983ee2.jpg'),
(163, 'Lp Los Hermanos Ventura 180g Duplo', 'Lp Los Hermanos Ventura 180g Lacrado DUPLO\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica/Duplo\r\nGÊNERO: MPB/Rock/ORIGEM: Brasil', 245, 10, 3, '/public/img/product/16065200575fc18cf9723bc.jpg'),
(164, 'Lp Chico Science E Nação Zumbi Da Lama Ao Caos', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 138, 45, 7, '/public/img/product/16065201085fc18d2c1f862.jpg'),
(165, 'Lp Belchior Alucinação Novo Lacrado Vinil 180g', 'Lp Belchior Alucinação 180gEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-FidelidadeSerie: Clássicos em Vinil 180 gramasVinil Novo/Lacrado de Fábrica.Contém Encarte 60x30.ORIGEM: Brasil/Polysom', 145, 48, 4, '/public/img/product/16065201695fc18d69491f0.jpg'),
(166, 'Lp Vinil Tom Zé Todos Os Olhos 180g', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 136, 105, 9, '/public/img/product/16065202205fc18d9c5cf45.jpg'),
(167, 'Lp João Mineiro Marciano Os Grandes Sucessos Disco De Vinil', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 35, 6, 9, '/public/img/product/16065203185fc18dfeebdac.jpg'),
(168, 'Lp Daniela Mercury O Canto Da Cidade Disco De Vinil Encarte', 'Lp Tom Zé Todos os Olhos 180g Lacrado\r\nEdição Limitada/Remasterizado para Vinil/Prensagem Premium de Alta-Fidelidade\r\nSerie: Clássicos em Vinil 180 gramas\r\nVinil Novo/Lacrado de Fábrica.\r\nGÊNERO: MPB - ORIGEM: Brasil', 34, 2, 10, '/public/img/product/16065203785fc18e3a2f8f2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
