-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Jun-2020 às 05:16
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastroempresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Empresa`
--

CREATE TABLE `Empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresarial` varchar(255) NOT NULL,
  `nomeFantasia` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cnae` varchar(9) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `obs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Empresa`
--

INSERT INTO `Empresa` (`idEmpresa`, `nomeEmpresarial`, `nomeFantasia`, `telefone`, `cnae`, `cnpj`, `logradouro`, `numero`, `bairro`, `cep`, `estado`, `cidade`, `obs`) VALUES
(35, 'MARIA APARECIDA DE SOUZA CABRAL 39559807153', 'CIDA CABELEIREIRA', '(66) 9207-5863', 'undefined', '17965395000160', 'AV GABRIEL FERREIRA', '797', 'VILA SANTO ANTONIO', '78.600-000', 'MT', 'BARRA DO GARCAS', 'Obs');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
