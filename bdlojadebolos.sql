-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2023 às 18:52
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojadebolos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadm`
--

CREATE TABLE `tbadm` (
  `idAdm` int(11) NOT NULL,
  `nomeAdm` varchar(60) DEFAULT NULL,
  `sobrenomeAdm` varchar(80) DEFAULT NULL,
  `dataNascAdm` date DEFAULT NULL,
  `emailAdm` varchar(100) DEFAULT NULL,
  `senhaAdm` varchar(30) DEFAULT NULL,
  `fotoAdm` varchar(50) DEFAULT NULL,
  `cpfAdm` char(16) DEFAULT NULL,
  `tokenAdm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbavaliacabbolo`
--

CREATE TABLE `tbavaliacabbolo` (
  `idDepoimento` int(11) NOT NULL,
  `tituloDepoimento` varchar(30) DEFAULT NULL,
  `textoDepoimento` varchar(300) DEFAULT NULL,
  `statusDepoimento` char(1) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbolo`
--

CREATE TABLE `tbbolo` (
  `idBolo` int(11) NOT NULL,
  `nomeBolo` varchar(50) DEFAULT NULL,
  `saborBolo` varchar(30) DEFAULT NULL,
  `coberturaBolo` varchar(30) DEFAULT NULL,
  `decoracaoBolo` varchar(30) DEFAULT NULL,
  `descBolo` varchar(100) DEFAULT NULL,
  `pesoBolo` float DEFAULT NULL,
  `especificacaoBolo` varchar(100) DEFAULT NULL,
  `valorBolo` float DEFAULT NULL,
  `fotoBolo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbolopreferido`
--

CREATE TABLE `tbbolopreferido` (
  `idBoloPreferido` int(11) NOT NULL,
  `idBolo` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(60) DEFAULT NULL,
  `sobrenomeCliente` varchar(80) DEFAULT NULL,
  `emailCliente` varchar(100) DEFAULT NULL,
  `senhaCliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(60) DEFAULT NULL,
  `sobrenomeContato` varchar(80) DEFAULT NULL,
  `emailContato` varchar(100) DEFAULT NULL,
  `conteudoContato` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadm`
--
ALTER TABLE `tbadm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices para tabela `tbavaliacabbolo`
--
ALTER TABLE `tbavaliacabbolo`
  ADD PRIMARY KEY (`idDepoimento`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices para tabela `tbbolo`
--
ALTER TABLE `tbbolo`
  ADD PRIMARY KEY (`idBolo`);

--
-- Índices para tabela `tbbolopreferido`
--
ALTER TABLE `tbbolopreferido`
  ADD PRIMARY KEY (`idBoloPreferido`),
  ADD KEY `idBolo` (`idBolo`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadm`
--
ALTER TABLE `tbadm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbavaliacabbolo`
--
ALTER TABLE `tbavaliacabbolo`
  MODIFY `idDepoimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbbolo`
--
ALTER TABLE `tbbolo`
  MODIFY `idBolo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbbolopreferido`
--
ALTER TABLE `tbbolopreferido`
  MODIFY `idBoloPreferido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbavaliacabbolo`
--
ALTER TABLE `tbavaliacabbolo`
  ADD CONSTRAINT `tbavaliacabbolo_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Limitadores para a tabela `tbbolopreferido`
--
ALTER TABLE `tbbolopreferido`
  ADD CONSTRAINT `tbbolopreferido_ibfk_1` FOREIGN KEY (`idBolo`) REFERENCES `tbbolo` (`idBolo`),
  ADD CONSTRAINT `tbbolopreferido_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
