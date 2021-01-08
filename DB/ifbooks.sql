-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jan-2021 às 18:10
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
  `login` varchar(50) NOT NULL,
  `senha` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `prontuario` char(7) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `ano` int(1) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `turma` set('Informática','Mecânica') NOT NULL,
  `livros_faltando` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela dos alunos';

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `prontuario`, `nome`, `ano`, `codigo`, `turma`, `livros_faltando`) VALUES
(12, '1232132', 'João Pedro Romão Romão', 1, '1232132001', 'Informática', 'Nenhum'),
(13, '1233213', 'adas cac', 2, '1233213002', 'Informática', 'Nenhum'),
(14, '1234566', 'cxa vcv', 1, '1234566001', 'Informática', 'Artes,'),
(15, '1790221', 'cvx zxc', 1, '1790221001', 'Informática', 'Artes,');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `materia` set('Português','Matemática','Química','Biologia','Física','Inglês','Geografia','Sociologia','História','Artes','Filosofia','Espanhol') NOT NULL,
  `ano` enum('1','2','3','4') NOT NULL,
  `despachado` int(11) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `materia`, `ano`, `despachado`, `estoque`) VALUES
(49, 'Artes', '1', 9, 0),
(50, 'Física', '1', 12, 18),
(51, 'Química', '1', 0, 30),
(52, 'Matemática', '1', 12, 18),
(53, 'Português', '1', 12, 18),
(54, 'Inglês', '1', 12, 18),
(55, 'Espanhol', '1', 0, 30),
(56, 'Sociologia', '1', 12, 18),
(57, 'Artes', '2', 0, 30),
(58, 'Artes', '3', 0, 33);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
