-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Dez-2020 às 16:22
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifbooks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(35) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `prontuario` char(7) COLLATE utf8_swedish_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_swedish_ci NOT NULL,
  `ano` int(1) NOT NULL,
  `codigo` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `turma` set('Informática','Mecânica') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabela dos alunos';

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `prontuario`, `nome`, `ano`, `codigo`, `turma`) VALUES
(1, '12312', 'adq', 1, 'qqq', 'Informática'),
(2, '123124', 'João Pedro Romão Romão', 1, '123124001', 'Informática'),
(3, '1231242', 'João Pedro Romão Romão', 1, '12312421412001', 'Informática'),
(4, '1232', 'João Pedro Romão Romão', 1, '1232001', 'Informática'),
(5, '123123', 'João Pedro Romão Romão', 1, '123123001', 'Informática'),
(6, '123', 'aposkdaskop apsodapsojd', 1, '123001', 'Informática'),
(8, '12321', 'João Pedro Romão Romão', 1, '12321001', 'Informática'),
(10, '123142', 'João Pedro Romão Romão', 1, '123142001', 'Informática'),
(15, '231', 'João Pedro Romão Romão', 1, '231001', 'Informática'),
(17, '1233', 'João Pedro Romão Romão', 1, '1233001', 'Informática'),
(19, '1234567', 'João Pedro Romão Romão', 1, '1234567001', 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `materia` set('Português','Matemática','Química','Biologia','Física','Inglês','Geografia','Sociologia','História','Artes','Filosofia','Espanhol') COLLATE utf8_swedish_ci NOT NULL,
  `ano` enum('1','2','3','4') COLLATE utf8_swedish_ci NOT NULL,
  `despachado` int(11) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prontuario` (`prontuario`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
