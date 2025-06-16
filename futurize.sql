-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/06/2025 às 15:06
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

--
-- Despejando dados para a tabela `parceiro`
--

INSERT INTO `parceiro` (`pco_Id`, `pco_Nome`, `pco_Foto`, `pco_Reusmo`, `pco_Area`, `pco_Site`, `pco_Status`) VALUES
(1, 'Parceiro 1', 'foto1.jpg', 'Resumo do Parceiro 1', 'Tecnologia', 'https://parceiro1.com', 1),
(2, 'Parceiro 2', 'foto2.jpg', 'Resumo do Parceiro 2', 'Saúde', 'https://parceiro2.com', 1),
(3, 'Parceiro 3', 'foto3.jpg', 'Resumo do Parceiro 3', 'Educação', 'https://parceiro3.com', 1),
(4, 'Parceiro 4', 'foto4.jpg', 'Resumo do Parceiro 4', 'Finanças', 'https://parceiro4.com', 1),
(5, 'Parceiro 5', 'foto5.jpg', 'Resumo do Parceiro 5', 'Marketing', 'https://parceiro5.com', 1),
(6, 'Parceiro 6', 'foto6.jpg', 'Resumo do Parceiro 6', 'Entretenimento', 'https://parceiro6.com', 1),
(7, 'Parceiro 7', 'foto7.jpg', 'Resumo do Parceiro 7', 'Turismo', 'https://parceiro7.com', 1),
(8, 'Parceiro 8', 'foto8.jpg', 'Resumo do Parceiro 8', 'Consultoria', 'https://parceiro8.com', 1),
(9, 'Parceiro 9', 'foto9.jpg', 'Resumo do Parceiro 9', 'Agronegócio', 'https://parceiro9.com', 1),
(10, 'Parceiro 10', 'foto10.jpg', 'Resumo do Parceiro 10', 'Logística', 'https://parceiro10.com', 1);

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

--
-- Despejando dados para a tabela `projeto`
--

INSERT INTO `projeto` (`pjt_Id`, `pjt_Nome`, `pjt_Foto`, `pjt_Resumo`, `pjt_DataInicio`, `pjt_DataTermino`, `pjt_Preco`, `pjt_site`, `pjt_Status`) VALUES
(1, 'Projeto 1', 'foto1_projeto.jpg', 'Resumo do Projeto 1', '2025-01-01', '2025-12-31', 'R$ 100,000', 'https://projeto1.com', 1),
(2, 'Projeto 2', 'foto2_projeto.jpg', 'Resumo do Projeto 2', '2025-02-01', '2025-11-30', 'R$ 150,000', 'https://projeto2.com', 1),
(3, 'Projeto 3', 'foto3_projeto.jpg', 'Resumo do Projeto 3', '2025-03-01', '2025-10-31', 'R$ 200,000', 'https://projeto3.com', 1),
(4, 'Projeto 4', 'foto4_projeto.jpg', 'Resumo do Projeto 4', '2025-04-01', '2025-09-30', 'R$ 250,000', 'https://projeto4.com', 1),
(5, 'Projeto 5', 'foto5_projeto.jpg', 'Resumo do Projeto 5', '2025-05-01', '2025-08-31', 'R$ 300,000', 'https://projeto5.com', 1),
(6, 'Projeto 6', 'foto6_projeto.jpg', 'Resumo do Projeto 6', '2025-06-01', '2025-07-31', 'R$ 350,000', 'https://projeto6.com', 1),
(7, 'Projeto 7', 'foto7_projeto.jpg', 'Resumo do Projeto 7', '2025-07-01', '2025-12-31', 'R$ 400,000', 'https://projeto7.com', 1),
(8, 'Projeto 8', 'foto8_projeto.jpg', 'Resumo do Projeto 8', '2025-08-01', '2025-06-30', 'R$ 450,000', 'https://projeto8.com', 1),
(9, 'Projeto 9', 'foto9_projeto.jpg', 'Resumo do Projeto 9', '2025-09-01', '2025-05-31', 'R$ 500,000', 'https://projeto9.com', 1),
(10, 'Projeto 10', 'foto10_projeto.jpg', 'Resumo do Projeto 10', '2025-10-01', '2025-04-30', 'R$ 550,000', 'https://projeto10.com', 1);

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
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usr_Id`, `usr_Foto`, `usr_Nome`, `usr_Git`, `usr_Link`, `usr_Area`, `usr_Inst`, `usr_Senha`, `usr_Email`, `usr_Cpf`, `usr_Sexo`, `usr_logradouro`, `usr_NumeroLogr`, `usr_Cidade`, `usr_Status`, `usr_Nivel`) VALUES
(1, 'usuario1.jpg', 'João Silva', 'https://github.com/joao', 'https://linkedin.com/in/joao', 'Desenvolvedor', 'Instituição X', 'senha123', 'joao@gmail.com', '12345678900', 'Masculino', 'Rua A', '123', 'São Paulo', 1, 1),
(2, 'usuario2.jpg', 'Maria Oliveira', 'https://github.com/maria', 'https://linkedin.com/in/maria', 'Designer', 'Instituição Y', 'senha456', 'maria@gmail.com', '23456789012', 'Feminino', 'Rua B', '456', 'Rio de Janeiro', 1, 2),
(3, 'usuario3.jpg', 'Carlos Souza', 'https://github.com/carlos', 'https://linkedin.com/in/carlos', 'Analista', 'Instituição Z', 'senha789', 'carlos@gmail.com', '34567890123', 'Masculino', 'Rua C', '789', 'Belo Horizonte', 1, 2),
(4, 'usuario4.jpg', 'Ana Costa', 'https://github.com/ana', 'https://linkedin.com/in/ana', 'Gerente', 'Instituição W', 'senha101112', 'ana@gmail.com', '45678901234', 'Feminino', 'Rua D', '101', 'Salvador', 1, 3),
(5, 'usuario5.jpg', 'Lucas Pereira', 'https://github.com/lucas', 'https://linkedin.com/in/lucas', 'Consultor', 'Instituição V', 'senha131415', 'lucas@gmail.com', '56789012345', 'Masculino', 'Rua E', '202', 'Porto Alegre', 1, 2),
(6, 'usuario6.jpg', 'Fernanda Lima', 'https://github.com/fernanda', 'https://linkedin.com/in/fernanda', 'Marketing', 'Instituição U', 'senha161718', 'fernanda@gmail.com', '67890123456', 'Feminino', 'Rua F', '303', 'Curitiba', 1, 2),
(7, 'usuario7.jpg', 'Paulo Santos', 'https://github.com/paulo', 'https://linkedin.com/in/paulo', 'Financeiro', 'Instituição T', 'senha192021', 'paulo@gmail.com', '78901234567', 'Masculino', 'Rua G', '404', 'Fortaleza', 1, 3),
(8, 'usuario8.jpg', 'Juliana Rocha', 'https://github.com/juliana', 'https://linkedin.com/in/juliana', 'RH', 'Instituição S', 'senha222324', 'juliana@gmail.com', '89012345678', 'Feminino', 'Rua H', '505', 'Recife', 1, 1),
(9, 'usuario9.jpg', 'Ricardo Gomes', 'https://github.com/ricardo', 'https://linkedin.com/in/ricardo', 'TI', 'Instituição R', 'senha252627', 'ricardo@gmail.com', '90123456789', 'Masculino', 'Rua I', '606', 'Brasília', 1, 1),
(10, 'usuario10.jpg', 'Tatiane Silva', 'https://github.com/tatiane', 'https://linkedin.com/in/tatiane', 'Desenvolvedor', 'Instituição Q', 'senha282930', 'tatiane@gmail.com', '01234567890', 'Feminino', 'Rua J', '707', 'São Luís', 1, 2);

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
  MODIFY `pco_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `pjt_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usr_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
