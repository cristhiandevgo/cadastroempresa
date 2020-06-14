-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/06/2020 às 03:39
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.6

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
-- Estrutura para tabela `Empresa`
--

CREATE TABLE `Empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nomeEmpresarial` varchar(255) NOT NULL,
  `nomeFantasia` varchar(255) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `cnae` varchar(255) NOT NULL,
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
-- Despejando dados para a tabela `Empresa`
--

INSERT INTO `Empresa` (`idEmpresa`, `nomeEmpresarial`, `nomeFantasia`, `telefone`, `cnae`, `cnpj`, `logradouro`, `numero`, `bairro`, `cep`, `estado`, `cidade`, `obs`) VALUES
(45, 'GLOBO COMUNICACAO E PARTICIPACOES S/A', 'TV/REDE/CANAIS/G2C+GLOBO SOMLIVRE GLOBO.COM GLOBOPLAY', '(21) 2155-4551/ (21) 2155-4552', 'undefined', '27865757000102', 'R LOPES QUINTAS', '303', 'JARDIM BOTANICO', '22.460-901', 'RJ', 'RIO DE JANEIRO', ''),
(49, 'MARIA APARECIDA DE SOUZA CABRAL 39559807153', 'CIDA CABELEIREIRA', '(66) 9207-5863', '96.02-5-01 - Cabeleireiros, manicure e pedicure', '17965395000160', 'AV GABRIEL FERREIRA', '797', 'VILA SANTO ANTONIO', '78.600-000', 'MT', 'BARRA DO GARCAS', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
