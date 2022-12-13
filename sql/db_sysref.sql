-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sysref`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cardapios`
--

CREATE TABLE `tb_cardapios` (
  `id_cardapio` int(11) NOT NULL,
  `data_cardapio` date DEFAULT NULL,
  `salada` varchar(70) NOT NULL,
  `proteina` varchar(70) NOT NULL,
  `guarnicao` varchar(70) NOT NULL,
  `sobremesa` varchar(70) NOT NULL,
  `bebida` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cardapios`
--

INSERT INTO `tb_cardapios` (`id_cardapio`, `data_cardapio`, `salada`, `proteina`, `guarnicao`, `sobremesa`, `bebida`) VALUES
(1, '0000-00-00', 'Repolho Festivo', 'Lasanha de ricota com espinafre', 'Baião-de-dois com queijo coalho', 'Cheesecake', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_preparacoes`
--

CREATE TABLE `tb_preparacoes` (
  `id_preparacao` int(11) NOT NULL,
  `tipo_preparacao` varchar(50) DEFAULT NULL,
  `nome_preparacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_preparacoes`
--

INSERT INTO `tb_preparacoes` (`id_preparacao`, `tipo_preparacao`, `nome_preparacao`) VALUES
(1, 'salada', 'Salada de Alface, Tomate e Cenoura'),
(2, 'salada', 'Couve à mineira'),
(3, 'proteina', 'Lasanha de ricota com espinafre'),
(4, 'sobremesa', 'Munguzá'),
(7, 'guarnicao', 'Baião-de-dois com queijo coalho'),
(10, 'bebida', 'Suco de manga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cardapios`
--
ALTER TABLE `tb_cardapios`
  ADD PRIMARY KEY (`id_cardapio`);

--
-- Indexes for table `tb_preparacoes`
--
ALTER TABLE `tb_preparacoes`
  ADD PRIMARY KEY (`id_preparacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cardapios`
--
ALTER TABLE `tb_cardapios`
  MODIFY `id_cardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_preparacoes`
--
ALTER TABLE `tb_preparacoes`
  MODIFY `id_preparacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
