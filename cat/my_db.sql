-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Out-2021 às 21:53
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `my_db`
--
CREATE DATABASE IF NOT EXISTS `my_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gato`
--

DROP TABLE IF EXISTS `gato`;
CREATE TABLE IF NOT EXISTS `gato` (
  `NOME` varchar(255) NOT NULL,
  `IDADE` varchar(255) NOT NULL,
  `COR` varchar(255) NOT NULL,
  `DESCRICAO` varchar(255) NOT NULL,
  `ANO_NASC` date NOT NULL,
  `ANO_FAL` date NOT NULL,
  `NOME_USUARIO` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `usuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
