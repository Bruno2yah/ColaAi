-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2024 às 20:44
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
-- Banco de dados: `colaai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(60) NOT NULL,
  `emailAdmin` varchar(60) NOT NULL,
  `senhaAdmin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbavaliacao`
--

CREATE TABLE `tbavaliacao` (
  `idAvaliacao` int(11) NOT NULL,
  `tituloAvaliacao` varchar(25) NOT NULL,
  `descAvaliacao` varchar(60) NOT NULL,
  `idOrganizacaoEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(30) NOT NULL,
  `descCategoria` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoriadenuncia`
--

CREATE TABLE `tbcategoriadenuncia` (
  `idCategoriaDenuncia` int(11) NOT NULL,
  `nomeCategoriaDenuncia` varchar(40) NOT NULL,
  `descCategoriaDenuncia` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdenunciaorganizacaoevento`
--

CREATE TABLE `tbdenunciaorganizacaoevento` (
  `idDenunciaOrganizacaoEvento` int(11) NOT NULL,
  `tituloDenunciaOrganizacaoEvento` varchar(30) NOT NULL,
  `descDenunciaOrganizacaoEvento` varchar(60) NOT NULL,
  `idOrganizacaoEvento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCategoriaDenuncia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbevento`
--

CREATE TABLE `tbevento` (
  `idEvento` int(11) NOT NULL,
  `nomeEvento` varchar(40) NOT NULL,
  `descEvento` varchar(60) NOT NULL,
  `valorEvento` double NOT NULL,
  `geolocalizacaoEvento` int(11) NOT NULL,
  `faixaEtariaEvento` char(2) NOT NULL,
  `idOrganizacaoEvento` int(11) NOT NULL,
  `idHorarioEvento` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfavoritos`
--

CREATE TABLE `tbfavoritos` (
  `idFavoritos` int(11) NOT NULL,
  `idOrganizacaoEventos` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhorarioevento`
--

CREATE TABLE `tbhorarioevento` (
  `idHorarioEvento` int(11) NOT NULL,
  `horarioEvento` time NOT NULL,
  `dataEvento` date NOT NULL,
  `turnoEvento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagemorganizacaoevento`
--

CREATE TABLE `tbimagemorganizacaoevento` (
  `idImagemOrganizacaoEvento` int(11) NOT NULL,
  `nomeImagemOrganizacaoEvento` varchar(40) NOT NULL,
  `arquivoImagemOrganizacaoEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinteresseevento`
--

CREATE TABLE `tbinteresseevento` (
  `idInteresseEvento` int(11) NOT NULL,
  `idEvento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tborganizacaoevento`
--

CREATE TABLE `tborganizacaoevento` (
  `idOrganizacaoEvento` int(11) NOT NULL,
  `nomeOrganizacaoEvento` varchar(40) NOT NULL,
  `cnpjOrganizacaoEvento` int(14) NOT NULL,
  `logradouroOrganizacaoEvento` varchar(30) NOT NULL,
  `bairroOrganizacaoEvento` varchar(40) NOT NULL,
  `numeroOrganizacaoEvento` char(4) NOT NULL,
  `cidadeOrganizcaoEvento` varchar(30) NOT NULL,
  `ufOrganizacaoEvento` char(2) NOT NULL,
  `emailOrganizacaoEvento` varchar(60) NOT NULL,
  `linkSiteOrganizacaoEvento` varchar(75) NOT NULL,
  `telOrganizacaoEvento` int(10) NOT NULL,
  `idImagemOrganizacaoEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(30) NOT NULL,
  `sobrenomeUsuario` varchar(35) NOT NULL,
  `emailUsuario` varchar(45) NOT NULL,
  `senhaUsuario` varchar(12) NOT NULL,
  `geolocalizacaoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD PRIMARY KEY (`idAvaliacao`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbcategoriadenuncia`
--
ALTER TABLE `tbcategoriadenuncia`
  ADD PRIMARY KEY (`idCategoriaDenuncia`);

--
-- Índices para tabela `tbdenunciaorganizacaoevento`
--
ALTER TABLE `tbdenunciaorganizacaoevento`
  ADD PRIMARY KEY (`idDenunciaOrganizacaoEvento`),
  ADD KEY `idCategoriaDenuncia` (`idCategoriaDenuncia`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idHorarioEvento` (`idHorarioEvento`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD PRIMARY KEY (`idFavoritos`),
  ADD KEY `idOrganizacaoEventos` (`idOrganizacaoEventos`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbhorarioevento`
--
ALTER TABLE `tbhorarioevento`
  ADD PRIMARY KEY (`idHorarioEvento`);

--
-- Índices para tabela `tbimagemorganizacaoevento`
--
ALTER TABLE `tbimagemorganizacaoevento`
  ADD PRIMARY KEY (`idImagemOrganizacaoEvento`);

--
-- Índices para tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD PRIMARY KEY (`idInteresseEvento`),
  ADD KEY `idEvento` (`idEvento`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  ADD PRIMARY KEY (`idOrganizacaoEvento`),
  ADD KEY `idImagemOrganizacaoEvento` (`idImagemOrganizacaoEvento`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  MODIFY `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcategoriadenuncia`
--
ALTER TABLE `tbcategoriadenuncia`
  MODIFY `idCategoriaDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdenunciaorganizacaoevento`
--
ALTER TABLE `tbdenunciaorganizacaoevento`
  MODIFY `idDenunciaOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbevento`
--
ALTER TABLE `tbevento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  MODIFY `idFavoritos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbhorarioevento`
--
ALTER TABLE `tbhorarioevento`
  MODIFY `idHorarioEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbimagemorganizacaoevento`
--
ALTER TABLE `tbimagemorganizacaoevento`
  MODIFY `idImagemOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  MODIFY `idInteresseEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD CONSTRAINT `tbavaliacao_ibfk_1` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbdenunciaorganizacaoevento`
--
ALTER TABLE `tbdenunciaorganizacaoevento`
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_1` FOREIGN KEY (`idCategoriaDenuncia`) REFERENCES `tbcategoriadenuncia` (`idCategoriaDenuncia`),
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_2` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`),
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`),
  ADD CONSTRAINT `tbevento_ibfk_2` FOREIGN KEY (`idHorarioEvento`) REFERENCES `tbhorarioevento` (`idHorarioEvento`),
  ADD CONSTRAINT `tbevento_ibfk_3` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD CONSTRAINT `tbfavoritos_ibfk_1` FOREIGN KEY (`idOrganizacaoEventos`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`),
  ADD CONSTRAINT `tbfavoritos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD CONSTRAINT `tbinteresseevento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`),
  ADD CONSTRAINT `tbinteresseevento_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  ADD CONSTRAINT `tborganizacaoevento_ibfk_1` FOREIGN KEY (`idImagemOrganizacaoEvento`) REFERENCES `tbimagemorganizacaoevento` (`idImagemOrganizacaoEvento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
