-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2021 às 04:11
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

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

CREATE TABLE `gato` (
  `NOME` varchar(255) NOT NULL,
  `COR` varchar(255) NOT NULL,
  `DESCRICAO` varchar(255) NOT NULL,
  `ANO_NASC` date NOT NULL,
  `ANO_FAL` date NOT NULL,
  `NOME_USUARIO` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gato`
--

INSERT INTO `gato` (`NOME`, `COR`, `DESCRICAO`, `ANO_NASC`, `ANO_FAL`, `NOME_USUARIO`) VALUES
('Milk', 'Branco', 'Foi um gato que resgatei da rua, era muito fofo, mas as vezes do nada dava umas mordidas, acho que era trauma do tempo que ficou na rua. Saudades de você Milk!', '2011-10-11', '2013-10-16', 'Pablo Ferreira'),
('Boris', 'Preto e Branco', 'Foi o meu primeiro gato, tive ele quando era criança e ele era muito fofinho e gostava de deitar de barriga para cima. Lembrarei de você para sempre Boris.', '2010-10-20', '2011-12-28', 'Pablo Ferreira'),
('Mulambo', 'Branco do Olho Azul', 'Mulambo foi um gato que achei na beirada do asfalto, ele me atacou, dei um bicudo nele, e ele xingou minha mãe, então não tive outra escolha a não ser resgatar ele.', '2016-10-05', '2018-10-24', 'Samuel Pedro Campos Sena');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usuario` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usuario`, `email`, `senha`) VALUES
('usuarioteste', 'usuarioteste@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
