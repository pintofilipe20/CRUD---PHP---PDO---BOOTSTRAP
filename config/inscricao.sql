-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Maio-2021 às 20:10
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud-pdo`
--
SET NAMES utf8mb4;
DROP DATABASE IF EXISTS `crud-pdo`;
CREATE DATABASE IF NOT EXISTS `crud-pdo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `crud-pdo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id` int(15) NOT NULL,
  `primeiro_nome` varchar(100) NOT NULL,
  `ultimo_nome` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `periodo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `primeiro_nome`, `ultimo_nome`, `genero`, `curso`, `periodo`) VALUES
(74, 'Pedro', 'Mabango', 'Masculino', 'Direito', 'ManhÃ£'),
(75, 'Borges ', 'Bongoloca', 'Feminino', 'Engermagem Geral', 'Tarde'),
(76, 'Ana', 'Luisa', 'Feminino', 'Engermagem Geral', 'Tarde'),
(77, 'AdÃ©rito', 'Ferreira', 'Feminino', 'Contabilidade', 'Noite'),
(84, 'Miro', 'SÃ©rgio', 'Masculino', 'Direito', 'Tarde');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
