-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/05/2025 às 17:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `futurize`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiro`
--

CREATE TABLE `parceiro` (
  `pco_Id` int(11) NOT NULL,
  `pco_Nome` varchar(60) NOT NULL,
  `pco_Foto` varchar(500) DEFAULT NULL,
  `pco_Reusmo` varchar(250) NOT NULL,
  `pco_Area` varchar(60) NOT NULL,
  `pco_Site` varchar(120) NOT NULL,
  `pco_Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabela Para parceiros';

-- --------------------------------------------------------

--
-- Estrutura para tabela `projeto`
--

CREATE TABLE `projeto` (
  `pjt_Id` int(11) NOT NULL,
  `pjt_Nome` varchar(60) NOT NULL,
  `pjt_Foto` varchar(250) DEFAULT NULL,
  `pjt_Resumo` varchar(250) NOT NULL,
  `pjt_DataInicio` date DEFAULT NULL,
  `pjt_DataTermino` date DEFAULT NULL,
  `pjt_Preco` varchar(200) DEFAULT NULL,
  `pjt_site` varchar(300) DEFAULT NULL,
  `pjt_Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usr_Id` int(11) NOT NULL,
  `usr_Foto` varchar(250) DEFAULT NULL,
  `usr_Nome` varchar(60) NOT NULL,
  `usr_Git` varchar(250) DEFAULT NULL,
  `usr_Link` varchar(250) DEFAULT NULL,
  `usr_Area` varchar(60) NOT NULL,
  `usr_Inst` varchar(250) DEFAULT NULL,
  `usr_Senha` varchar(500) NOT NULL,
  `usr_Email` varchar(120) NOT NULL,
  `usr_Cpf` varchar(15) NOT NULL,
  `usr_Sexo` varchar(11) DEFAULT NULL,
  `usr_logradouro` varchar(250) DEFAULT NULL,
  `usr_NumeroLogr` varchar(60) DEFAULT NULL,
  `usr_Cidade` varchar(60) DEFAULT NULL,
  `usr_Status` int(11) NOT NULL,
  `usr_Nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `parceiro`
--
ALTER TABLE `parceiro`
  ADD PRIMARY KEY (`pco_Id`);

--
-- Índices de tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`pjt_Id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usr_Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `parceiro`
--
ALTER TABLE `parceiro`
  MODIFY `pco_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `pjt_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usr_Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
