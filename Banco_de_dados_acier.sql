-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2016 às 14:08
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acier`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apelido` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `razao_social` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `apelido`, `razao_social`, `cnpj`, `telefone`, `contato`, `endereco`) VALUES
(1, 'Teste de cliente', 'Teste de cliente LTDA', '192.168.010/0001-10', '11 0909-0909', 'Fulano', 'Rua das Amoras, 567'),
(2, 'Construtora XYZ', 'Construtora XYZ', '192.358.010/0001-45', '11 0909-0908', 'João', 'Rua das Demostenes, 537'),
(3, 'Exemplo', 'Exemplo', '45645645645654', '2423432', 'Exemplo', 'Exemplo'),
(8, 'NovoCliente Chorrumesblas', 'NonoClienten LTDA', '293847923874', '29847983', 'Amigo', 'Rua das Amoras, 567'),
(11, 'Teste de cliente', 'Teste de cliente LTDA', '293847923874', '2423432', 'Gomes', 'Rua das Demostenes, 537');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apelido` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `razao_social` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `apelido`, `razao_social`, `cnpj`, `telefone`, `contato`, `endereco`) VALUES
(1, 'Exemplo', 'Exemplo', 'Exemplo', 'Exemplo', 'Exemplo', 'Exemplo'),
(2, 'Churros', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nome`, `telefone`, `email`, `role`) VALUES
(4, 'facquesta', '$2y$10$Z3dhk3l0F9.oGAxjJsh.Y...cs0HvCucWWtCmd5pHGytc/v3PkAmO', 'Fernando Queiroz Acquesta', '11 991140332', 'facquesta5@gmail.com', 'admin'),
(5, 'joca', '$2y$10$UWUDMk/MLFeDaGpX2IKPWOb8bbWB8CbvXD7CyzvuyABHyHoSAla5W', 'Fernando Queiroz Acquesta', '11 0909-0908', 'facquestasdf5@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
