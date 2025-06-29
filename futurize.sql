-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2025 at 11:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futurize`
--

-- --------------------------------------------------------

--
-- Table structure for table `parceiro`
--

CREATE TABLE `parceiro` (
  `pco_Id` int(11) NOT NULL,
  `pco_Nome` varchar(60) NOT NULL,
  `pco_Foto` varchar(500) DEFAULT NULL,
  `pco_Resumo` varchar(250) NOT NULL,
  `pco_Area` varchar(60) NOT NULL,
  `pco_Site` varchar(120) NOT NULL,
  `pco_Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabela Para parceiros';

--
-- Dumping data for table `parceiro`
--

INSERT INTO `parceiro` (`pco_Id`, `pco_Nome`, `pco_Foto`, `pco_Resumo`, `pco_Area`, `pco_Site`, `pco_Status`) VALUES
(1, 'Parceiro 1', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FAmbev.jpg?alt=media&token=981237ef-2db1-4780-8763-827a73bf1fae', 'Resumo\r\n', 'Tecnologia', 'https://parceiro1.com', 1),
(2, 'Parceiro 2', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FB2W%20Digital.jpg?alt=media&token=965db6c0-05f7-40e1-8ff9-efded2a68a7d', 'Resumo do Parceiro 2', 'Saúde', 'https://parceiro2.com', 1),
(3, 'Parceiro 3', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FBeyond%20meat.jpg?alt=media&token=38bdf3fe-a9f9-4b3e-81ae-608ad4a84d5d', 'Resumo do Parceiro 3', 'Educação', 'https://parceiro3.com', 1),
(4, 'Cosan', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FCosan.png?alt=media&token=b551aca7-a8e3-4a23-a7a9-6a2fc8acce41', 'Resumo do Parceiro 4', 'Finanças', 'https://parceiro4.com', 1),
(5, 'Deloitte', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FDeloitte.png?alt=media&token=d4510eb2-2dcd-408b-bda1-4fa2073e6d17', 'Resumo do Parceiro 5', 'Marketing', 'https://parceiro5.com', 1),
(6, 'Embraer', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FEmbraer.png?alt=media&token=86f69706-ad01-41c9-a814-de949db53859', 'Resumo do Parceiro 6', 'Entretenimento', 'https://parceiro6.com', 1),
(7, 'Ernst & Young', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FErnst%20%26%20Young%20(EY).png?alt=media&token=431d58a5-fdfe-4b6d-aca4-1641bf3df8f8', 'Resumo do Parceiro 7', 'Turismo', 'https://parceiro7.com', 1),
(8, 'KPMG', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FKPMG.png?alt=media&token=c91fb2b4-865f-4542-ab6d-872daac4c46d', 'Resumo do Parceiro 8', 'Consultoria', 'https://parceiro8.com', 1),
(9, 'Mercado Livre', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FMercado%20Livre.png?alt=media&token=be8f2443-d4e3-428d-9e66-79c60c13dfd4', 'Resumo do Parceiro 9', 'Agronegócio', 'https://parceiro9.com', 1),
(10, 'Nubank', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2FNubank.png?alt=media&token=fd397c57-fd30-4a86-8bfb-ccd79b3c0ce4', 'Resumo do Parceiro 10', 'Logística', 'https://parceiro10.com', 1),
(11, 'dynamo', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/empresa_foto%2Fdynamo.png?alt=media&token=1960b6ec-6c98-453a-b230-7f9a109f5791', 'sasas', 'asa', 'http://localhost/Futurize/form_cadas_parceiro.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projeto`
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
-- Dumping data for table `projeto`
--

INSERT INTO `projeto` (`pjt_Id`, `pjt_Nome`, `pjt_Foto`, `pjt_Resumo`, `pjt_DataInicio`, `pjt_DataTermino`, `pjt_Preco`, `pjt_site`, `pjt_Status`) VALUES
(1, 'Projeto 1', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FAmbev%202.jpg?alt=media&token=f2326b66-6b96-4226-b7ed-24688d465a35', 'Resumo do resumo', '2025-01-01', '0000-00-00', '', 'C:xampphtdocsFuturizeprojetos.php', 1),
(2, 'Projeto 2', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FB2W%20Digital%201.jpg?alt=media&token=0c76c833-2f60-4c81-abc2-7263c866dc7d', 'Resumo do Projeto 2', '2025-02-01', '2025-11-30', 'R$ 150,000', 'C:\\xampp\\htdocs\\Futurize/projetos.php', 1),
(3, 'Projeto 3', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FBeyond%20meat%201.jpg?alt=media&token=40550a61-33c1-4e78-b7ea-2be9e9edb93d', 'Resumo do Projeto 3', '2025-03-01', '2025-10-31', 'R$ 200,000', 'https://projeto3.com', 1),
(4, 'Projeto 4', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FBeyond%20meat%202.jpg?alt=media&token=8e9ff5b4-abdb-44c7-b137-d24e51a048a0', 'Resumo do Projeto 4', '2025-04-01', '2025-09-30', 'R$ 250,000', 'https://projeto4.com', 1),
(5, 'Projeto 5', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FCosan%202.jpg?alt=media&token=7cb12f0f-1ce1-4978-a759-7aec3dbe2bd8', 'Resumo do Projeto 5', '2025-05-01', '2025-08-31', 'R$ 300,000', 'https://projeto5.com', 1),
(6, 'Projeto 6', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FDeloitte%202.jpg?alt=media&token=5d462ac8-587b-450c-a81b-650baa5f5e7a', 'Resumo do Projeto 6', '2025-06-01', '2025-07-31', 'R$ 350,000', 'https://projeto6.com', 1),
(7, 'Projeto 7', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FEmbraer%202.jpg?alt=media&token=cacb6d04-6b50-4b62-a18a-a4a128e6fbe3', 'Resumo do Projeto 7', '2025-07-01', '2025-12-31', 'R$ 400,000', 'https://projeto7.com', 1),
(8, 'Projeto 8', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FErnst%20%26%20Young%20(EY)%202.jpg?alt=media&token=a7a2fda8-7fa5-45b4-9073-c05dac450ce3', 'Resumo do Projeto 8', '2025-08-01', '2025-06-30', 'R$ 450,000', 'https://projeto8.com', 1),
(9, 'Projeto 9', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FNubank%201.jpg?alt=media&token=42487e93-8e1b-4424-90c6-84ec0dd7c05d', 'Resumo do Projeto 9', '2025-09-01', '2025-05-31', 'R$ 500,000', 'https://projeto9.com', 1),
(10, 'Projeto 10', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2FRa%C3%ADzen%202.png?alt=media&token=530f9677-0bbe-4902-a249-c341991d2507', 'Resumo do Projeto 10', '2025-10-01', '2025-04-30', 'R$ 550,000', 'https://projeto10.com', 1),
(11, 'edu', 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/publicacao%2Fenel%201.jpg?alt=media&token=4dd55764-7b5d-48d8-9bc4-66024d829784', 'resumo', '2025-06-12', '2025-06-05', '12121', 'http://localhost/Futurize/form_cadas_projetos.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usr_Id`, `usr_Foto`, `usr_Nome`, `usr_Git`, `usr_Link`, `usr_Area`, `usr_Inst`, `usr_Senha`, `usr_Email`, `usr_Cpf`, `usr_Sexo`, `usr_logradouro`, `usr_NumeroLogr`, `usr_Cidade`, `usr_Status`, `usr_Nivel`) VALUES
(1, 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/profile_images%2Fa.jpeg?alt=media&token=958203a7-b005-4b19-ad4a-9d64626cb116', 'Eduardo', 'https://github.com/joao', 'https://linkedin.com/in/joao', 'Desenvolvedor', 'Instituição X', '123', 'joao@gmail.com', '12345678900', 'Masculino', 'Rua A', '', 'São Paulo', 1, 2),
(2, 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/profile_images%2Fmuh.png?alt=media&token=29cd5248-e7c8-4c3f-8450-e66f419c00b9', 'Murilo', 'https://github.com/maria', 'https://linkedin.com/in/maria', 'Designer', 'Instituição Y', 'senha456', 'maria@gmail.com', '23456789012', 'Feminino', 'Rua B', '456', 'Rio de Janeiro', 1, 2),
(3, 'https://firebasestorage.googleapis.com/v0/b/workup-464af.appspot.com/o/profile_images%2Ffeh.png?alt=media&token=fd774eac-1e8f-40c8-acd4-1b5c961d3a81', 'Fernanda', 'https://github.com/carlos', 'https://linkedin.com/in/carlos', 'Analista', 'Instituição Z', '123', 'carlos@gmail.com', '34567890123', 'Masculino', 'Rua C', '', 'Belo Horizonte', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parceiro`
--
ALTER TABLE `parceiro`
  ADD PRIMARY KEY (`pco_Id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`pjt_Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usr_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parceiro`
--
ALTER TABLE `parceiro`
  MODIFY `pco_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `pjt_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usr_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
