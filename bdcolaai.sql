-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Abr-2024 às 19:52
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
-- Banco de dados: `bdcolaai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(60) DEFAULT NULL,
  `sobrenomeAdmin` varchar(60) DEFAULT NULL,
  `cpfAdmin` char(14) DEFAULT NULL,
  `dataNascAdmin` date DEFAULT NULL,
  `emailAdmin` varchar(60) DEFAULT NULL,
  `senhaAdmin` varchar(30) DEFAULT NULL,
  `fotoPerfilAdmin` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `nomeAdmin`, `sobrenomeAdmin`, `cpfAdmin`, `dataNascAdmin`, `emailAdmin`, `senhaAdmin`, `fotoPerfilAdmin`) VALUES
(1, 'Brun', 'Geanini', '574.489.768-33', '2024-03-29', 'Bruno@gmail', '1234', '396cf04b94a9d1f729a1f04435dc6a35.jpg'),
(2, 'Bruno', 'Geanini', '574.489.768-22', '2004-05-25', 'Bruno@gmail.com', '1234', '2ae6b30e3edbeb47c6af0c4d97103cad.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanaliseorganizacaoevento`
--

CREATE TABLE `tbanaliseorganizacaoevento` (
  `idAnaliseOrganizacaoEvento` int(11) NOT NULL,
  `situacaoOrganizacaoEvento` tinyint(1) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `idOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoriacontatoorganizacaoevento`
--

CREATE TABLE `tbcategoriacontatoorganizacaoevento` (
  `idCategoriaOrganizacaoEvento` int(11) NOT NULL,
  `categoriaOrganizacaoEvento` varchar(50) DEFAULT NULL,
  `idContatoOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoriacontatousuario`
--

CREATE TABLE `tbcategoriacontatousuario` (
  `idCategoriaContato` int(11) NOT NULL,
  `categoriaContato` varchar(50) DEFAULT NULL,
  `idContatoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatoorganizacaoevento`
--

CREATE TABLE `tbcontatoorganizacaoevento` (
  `idContatoOrganizacaoEvento` int(11) NOT NULL,
  `tituloContatoOrganizacaoEvento` varchar(50) DEFAULT NULL,
  `descContatoOrganizacaoEvento` varchar(300) DEFAULT NULL,
  `idOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontatousuario`
--

CREATE TABLE `tbcontatousuario` (
  `idContatoUsuario` int(11) NOT NULL,
  `tituloContatoUsuario` varchar(50) DEFAULT NULL,
  `descContatoUsuario` varchar(300) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbevento`
--

CREATE TABLE `tbevento` (
  `idEvento` int(11) NOT NULL,
  `nomeEvento` varchar(100) DEFAULT NULL,
  `cepEvento` char(8) DEFAULT NULL,
  `enderecoEvento` varchar(40) DEFAULT NULL,
  `numeroEvento` varchar(5) DEFAULT NULL,
  `complementoEvento` varchar(6) DEFAULT NULL,
  `bairroEvento` varchar(20) DEFAULT NULL,
  `cidadeEvento` varchar(30) DEFAULT NULL,
  `ufEvento` char(2) DEFAULT NULL,
  `dataEvento` date DEFAULT NULL,
  `idOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbeventoarquivado`
--

CREATE TABLE `tbeventoarquivado` (
  `idEventoArquivado` int(11) NOT NULL,
  `estadoEventoArquivado` tinyint(1) DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfaixaetaria`
--

CREATE TABLE `tbfaixaetaria` (
  `idFaixaEtaria` int(11) NOT NULL,
  `idadeFaixaEtaria` varchar(20) DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfeedbackapp`
--

CREATE TABLE `tbfeedbackapp` (
  `idFeedBackApp` int(11) NOT NULL,
  `tituloFeedBackApp` varchar(50) DEFAULT NULL,
  `descFeedbackApp` varchar(300) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagemcontatoorganizacaoevento`
--

CREATE TABLE `tbimagemcontatoorganizacaoevento` (
  `idImagemContatoOrganizacaoEvento` int(11) NOT NULL,
  `nomeImagemContatoOrganizacaoEvento` varchar(40) DEFAULT NULL,
  `idContatoOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagemcontatousuario`
--

CREATE TABLE `tbimagemcontatousuario` (
  `idImagemContatoUsuario` int(11) NOT NULL,
  `nomeImagemContatoUsuario` varchar(40) DEFAULT NULL,
  `idContatoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagempublicacao`
--

CREATE TABLE `tbimagempublicacao` (
  `idImagemPublicacao` int(11) NOT NULL,
  `nomeImagemPublicacao` varchar(40) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinteresseevento`
--

CREATE TABLE `tbinteresseevento` (
  `idInteresseEvento` int(11) NOT NULL,
  `periodointeresseEvento` tinyint(1) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tborganizacaoevento`
--

CREATE TABLE `tborganizacaoevento` (
  `idOrganizacaoEvento` int(11) NOT NULL,
  `nomeOrganizacaoEvento` varchar(60) DEFAULT NULL,
  `cnpjOrganizacaoEvento` char(18) DEFAULT NULL,
  `cepOrganizacaoEvento` char(8) DEFAULT NULL,
  `enderecoOrganizacaoEvento` varchar(40) DEFAULT NULL,
  `numeroOrganizacaoEvento` varchar(5) DEFAULT NULL,
  `complementoOrganizacaoEvento` varchar(6) DEFAULT NULL,
  `bairroOrganizacaoEvento` varchar(20) DEFAULT NULL,
  `cidadeOrganizacaoEvento` varchar(30) DEFAULT NULL,
  `ufOrganizacaoEvento` char(2) DEFAULT NULL,
  `telOrganizacaoEvento` char(15) NOT NULL,
  `emailOrganizacaoEvento` varchar(60) DEFAULT NULL,
  `senhaOrganizacaoEvento` varchar(30) DEFAULT NULL,
  `linkSiteOrganizacaoEvento` varchar(2000) DEFAULT NULL,
  `imagemOrganizacaoEvento` varchar(40) DEFAULT NULL,
  `descOrganizacaoEvento` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tborganizacaoevento`
--

INSERT INTO `tborganizacaoevento` (`idOrganizacaoEvento`, `nomeOrganizacaoEvento`, `cnpjOrganizacaoEvento`, `cepOrganizacaoEvento`, `enderecoOrganizacaoEvento`, `numeroOrganizacaoEvento`, `complementoOrganizacaoEvento`, `bairroOrganizacaoEvento`, `cidadeOrganizacaoEvento`, `ufOrganizacaoEvento`, `telOrganizacaoEvento`, `emailOrganizacaoEvento`, `senhaOrganizacaoEvento`, `linkSiteOrganizacaoEvento`, `imagemOrganizacaoEvento`, `descOrganizacaoEvento`) VALUES
(1, 'Empresa A', '12.345.678/901', '12345-67', 'rua rio', '100', 'Sala 1', 'Bairro A', 'São Paulo', 'SP', '11-99999-9999', 'empresaA@email.com', 'senhaA', NULL, '39fdba4cba7633ab6c1010d6f6a287f9.jpg', 'fwaaaaaaaa'),
(2, 'Empresa B', '98.765.432/109', '87654-32', NULL, '200', 'Sala 2', 'Bairro B', NULL, 'UF', '', 'empresaB@email.com', 'senhaB', NULL, '1d65c4b073fbcbfdf61914516f6eb661.jpg', ''),
(3, 'Empresa C', '13579246802468', '98765432', 'Rua C', '300', 'Sala 3', 'Bairro C', 'Cidade C', 'UF', '', 'empresaC@email.com', 'senhaC', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `idPublicacao` int(11) NOT NULL,
  `tituloPublicacao` varchar(50) DEFAULT NULL,
  `descPublicacao` varchar(300) DEFAULT NULL,
  `linkOrganizacaoEvento` varchar(2000) DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacaoarquivada`
--

CREATE TABLE `tbpublicacaoarquivada` (
  `idPublicacaoArquivada` int(11) NOT NULL,
  `estadoPublicacao` tinyint(1) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelusuario`
--

CREATE TABLE `tbtelusuario` (
  `idTelUsuario` int(11) NOT NULL,
  `numTelUsuario` varchar(15) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtokenadmin`
--

CREATE TABLE `tbtokenadmin` (
  `idTokenAdmin` int(11) NOT NULL,
  `valorTokenAdmin` char(5) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtokenorganizacaoevento`
--

CREATE TABLE `tbtokenorganizacaoevento` (
  `idTokenOrganizacaoEvento` int(11) NOT NULL,
  `valorTokenOrganizacaoEvento` char(5) DEFAULT NULL,
  `idOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtokenusuario`
--

CREATE TABLE `tbtokenusuario` (
  `idTokenUsuario` int(11) NOT NULL,
  `valorTokenUsuario` char(5) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbturnoevento`
--

CREATE TABLE `tbturnoevento` (
  `idTurnoEvento` int(11) NOT NULL,
  `periodoTurnoEvento` varchar(10) DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(60) DEFAULT NULL,
  `sobrenomeUsuario` varchar(60) DEFAULT NULL,
  `emailUsuario` varchar(60) DEFAULT NULL,
  `senhaUsuario` varchar(30) DEFAULT NULL,
  `imagemPerfilUsuario` varchar(40) DEFAULT NULL,
  `imagemBannerUsuario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `sobrenomeUsuario`, `emailUsuario`, `senhaUsuario`, `imagemPerfilUsuario`, `imagemBannerUsuario`) VALUES
(1, 'Bruno', 'Geanini', 'Bruno@gmail.com', '1234', 'akdwhlawihd', 'ihwdahwladhiilhdwa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarioseguindo`
--

CREATE TABLE `tbusuarioseguindo` (
  `idSeguindo` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvalorevento`
--

CREATE TABLE `tbvalorevento` (
  `idValorEvento` int(11) NOT NULL,
  `valorEvento` float DEFAULT NULL,
  `idEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbverificacaotokenadmin`
--

CREATE TABLE `tbverificacaotokenadmin` (
  `idVerificacaoTokenAdminv` int(11) NOT NULL,
  `estadoTokenAdmin` tinyint(1) DEFAULT NULL,
  `idTokenAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbverificacaotokenorganizacaoevento`
--

CREATE TABLE `tbverificacaotokenorganizacaoevento` (
  `idVerificacaoTokenUsuario` int(11) NOT NULL,
  `estadoTokenOrganizacaoEvento` tinyint(1) DEFAULT NULL,
  `idTokenOrganizacaoEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbverificacaotokenusuario`
--

CREATE TABLE `tbverificacaotokenusuario` (
  `idVerificacaoTokenUsuario` int(11) NOT NULL,
  `estadoTokenUsuario` tinyint(1) DEFAULT NULL,
  `idTokenUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tbanaliseorganizacaoevento`
--
ALTER TABLE `tbanaliseorganizacaoevento`
  ADD PRIMARY KEY (`idAnaliseOrganizacaoEvento`),
  ADD KEY `idAdmin` (`idAdmin`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbcategoriacontatoorganizacaoevento`
--
ALTER TABLE `tbcategoriacontatoorganizacaoevento`
  ADD PRIMARY KEY (`idCategoriaOrganizacaoEvento`),
  ADD KEY `idContatoOrganizacaoEvento` (`idContatoOrganizacaoEvento`);

--
-- Índices para tabela `tbcategoriacontatousuario`
--
ALTER TABLE `tbcategoriacontatousuario`
  ADD PRIMARY KEY (`idCategoriaContato`),
  ADD KEY `idContatoUsuario` (`idContatoUsuario`);

--
-- Índices para tabela `tbcontatoorganizacaoevento`
--
ALTER TABLE `tbcontatoorganizacaoevento`
  ADD PRIMARY KEY (`idContatoOrganizacaoEvento`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbcontatousuario`
--
ALTER TABLE `tbcontatousuario`
  ADD PRIMARY KEY (`idContatoUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbeventoarquivado`
--
ALTER TABLE `tbeventoarquivado`
  ADD PRIMARY KEY (`idEventoArquivado`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tbfaixaetaria`
--
ALTER TABLE `tbfaixaetaria`
  ADD PRIMARY KEY (`idFaixaEtaria`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tbfeedbackapp`
--
ALTER TABLE `tbfeedbackapp`
  ADD PRIMARY KEY (`idFeedBackApp`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbimagemcontatoorganizacaoevento`
--
ALTER TABLE `tbimagemcontatoorganizacaoevento`
  ADD PRIMARY KEY (`idImagemContatoOrganizacaoEvento`),
  ADD KEY `idContatoOrganizacaoEvento` (`idContatoOrganizacaoEvento`);

--
-- Índices para tabela `tbimagemcontatousuario`
--
ALTER TABLE `tbimagemcontatousuario`
  ADD PRIMARY KEY (`idImagemContatoUsuario`),
  ADD KEY `idContatoUsuario` (`idContatoUsuario`);

--
-- Índices para tabela `tbimagempublicacao`
--
ALTER TABLE `tbimagempublicacao`
  ADD PRIMARY KEY (`idImagemPublicacao`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Índices para tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD PRIMARY KEY (`idInteresseEvento`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  ADD PRIMARY KEY (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tbpublicacaoarquivada`
--
ALTER TABLE `tbpublicacaoarquivada`
  ADD PRIMARY KEY (`idPublicacaoArquivada`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Índices para tabela `tbtelusuario`
--
ALTER TABLE `tbtelusuario`
  ADD PRIMARY KEY (`idTelUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbtokenadmin`
--
ALTER TABLE `tbtokenadmin`
  ADD PRIMARY KEY (`idTokenAdmin`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Índices para tabela `tbtokenorganizacaoevento`
--
ALTER TABLE `tbtokenorganizacaoevento`
  ADD PRIMARY KEY (`idTokenOrganizacaoEvento`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbtokenusuario`
--
ALTER TABLE `tbtokenusuario`
  ADD PRIMARY KEY (`idTokenUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbturnoevento`
--
ALTER TABLE `tbturnoevento`
  ADD PRIMARY KEY (`idTurnoEvento`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices para tabela `tbusuarioseguindo`
--
ALTER TABLE `tbusuarioseguindo`
  ADD PRIMARY KEY (`idSeguindo`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices para tabela `tbvalorevento`
--
ALTER TABLE `tbvalorevento`
  ADD PRIMARY KEY (`idValorEvento`),
  ADD KEY `idEvento` (`idEvento`);

--
-- Índices para tabela `tbverificacaotokenadmin`
--
ALTER TABLE `tbverificacaotokenadmin`
  ADD PRIMARY KEY (`idVerificacaoTokenAdminv`),
  ADD KEY `idTokenAdmin` (`idTokenAdmin`);

--
-- Índices para tabela `tbverificacaotokenorganizacaoevento`
--
ALTER TABLE `tbverificacaotokenorganizacaoevento`
  ADD PRIMARY KEY (`idVerificacaoTokenUsuario`),
  ADD KEY `idTokenOrganizacaoEvento` (`idTokenOrganizacaoEvento`);

--
-- Índices para tabela `tbverificacaotokenusuario`
--
ALTER TABLE `tbverificacaotokenusuario`
  ADD PRIMARY KEY (`idVerificacaoTokenUsuario`),
  ADD KEY `idTokenUsuario` (`idTokenUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbanaliseorganizacaoevento`
--
ALTER TABLE `tbanaliseorganizacaoevento`
  MODIFY `idAnaliseOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcategoriacontatoorganizacaoevento`
--
ALTER TABLE `tbcategoriacontatoorganizacaoevento`
  MODIFY `idCategoriaOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcategoriacontatousuario`
--
ALTER TABLE `tbcategoriacontatousuario`
  MODIFY `idCategoriaContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontatoorganizacaoevento`
--
ALTER TABLE `tbcontatoorganizacaoevento`
  MODIFY `idContatoOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontatousuario`
--
ALTER TABLE `tbcontatousuario`
  MODIFY `idContatoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbevento`
--
ALTER TABLE `tbevento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbeventoarquivado`
--
ALTER TABLE `tbeventoarquivado`
  MODIFY `idEventoArquivado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfaixaetaria`
--
ALTER TABLE `tbfaixaetaria`
  MODIFY `idFaixaEtaria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfeedbackapp`
--
ALTER TABLE `tbfeedbackapp`
  MODIFY `idFeedBackApp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbimagemcontatoorganizacaoevento`
--
ALTER TABLE `tbimagemcontatoorganizacaoevento`
  MODIFY `idImagemContatoOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbimagemcontatousuario`
--
ALTER TABLE `tbimagemcontatousuario`
  MODIFY `idImagemContatoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbimagempublicacao`
--
ALTER TABLE `tbimagempublicacao`
  MODIFY `idImagemPublicacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  MODIFY `idInteresseEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  MODIFY `idOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpublicacaoarquivada`
--
ALTER TABLE `tbpublicacaoarquivada`
  MODIFY `idPublicacaoArquivada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelusuario`
--
ALTER TABLE `tbtelusuario`
  MODIFY `idTelUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtokenadmin`
--
ALTER TABLE `tbtokenadmin`
  MODIFY `idTokenAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtokenorganizacaoevento`
--
ALTER TABLE `tbtokenorganizacaoevento`
  MODIFY `idTokenOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtokenusuario`
--
ALTER TABLE `tbtokenusuario`
  MODIFY `idTokenUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbturnoevento`
--
ALTER TABLE `tbturnoevento`
  MODIFY `idTurnoEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbusuarioseguindo`
--
ALTER TABLE `tbusuarioseguindo`
  MODIFY `idSeguindo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvalorevento`
--
ALTER TABLE `tbvalorevento`
  MODIFY `idValorEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbverificacaotokenadmin`
--
ALTER TABLE `tbverificacaotokenadmin`
  MODIFY `idVerificacaoTokenAdminv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbverificacaotokenorganizacaoevento`
--
ALTER TABLE `tbverificacaotokenorganizacaoevento`
  MODIFY `idVerificacaoTokenUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbverificacaotokenusuario`
--
ALTER TABLE `tbverificacaotokenusuario`
  MODIFY `idVerificacaoTokenUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbanaliseorganizacaoevento`
--
ALTER TABLE `tbanaliseorganizacaoevento`
  ADD CONSTRAINT `tbanaliseorganizacaoevento_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `tbadmin` (`idAdmin`),
  ADD CONSTRAINT `tbanaliseorganizacaoevento_ibfk_2` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbcategoriacontatoorganizacaoevento`
--
ALTER TABLE `tbcategoriacontatoorganizacaoevento`
  ADD CONSTRAINT `tbcategoriacontatoorganizacaoevento_ibfk_1` FOREIGN KEY (`idContatoOrganizacaoEvento`) REFERENCES `tbcontatoorganizacaoevento` (`idContatoOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbcategoriacontatousuario`
--
ALTER TABLE `tbcategoriacontatousuario`
  ADD CONSTRAINT `tbcategoriacontatousuario_ibfk_1` FOREIGN KEY (`idContatoUsuario`) REFERENCES `tbcontatousuario` (`idContatoUsuario`);

--
-- Limitadores para a tabela `tbcontatoorganizacaoevento`
--
ALTER TABLE `tbcontatoorganizacaoevento`
  ADD CONSTRAINT `tbcontatoorganizacaoevento_ibfk_1` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbcontatousuario`
--
ALTER TABLE `tbcontatousuario`
  ADD CONSTRAINT `tbcontatousuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbeventoarquivado`
--
ALTER TABLE `tbeventoarquivado`
  ADD CONSTRAINT `tbeventoarquivado_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbfaixaetaria`
--
ALTER TABLE `tbfaixaetaria`
  ADD CONSTRAINT `tbfaixaetaria_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbfeedbackapp`
--
ALTER TABLE `tbfeedbackapp`
  ADD CONSTRAINT `tbfeedbackapp_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbimagemcontatoorganizacaoevento`
--
ALTER TABLE `tbimagemcontatoorganizacaoevento`
  ADD CONSTRAINT `tbimagemcontatoorganizacaoevento_ibfk_1` FOREIGN KEY (`idContatoOrganizacaoEvento`) REFERENCES `tbcontatoorganizacaoevento` (`idContatoOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbimagemcontatousuario`
--
ALTER TABLE `tbimagemcontatousuario`
  ADD CONSTRAINT `tbimagemcontatousuario_ibfk_1` FOREIGN KEY (`idContatoUsuario`) REFERENCES `tbcontatousuario` (`idContatoUsuario`);

--
-- Limitadores para a tabela `tbimagempublicacao`
--
ALTER TABLE `tbimagempublicacao`
  ADD CONSTRAINT `tbimagempublicacao_ibfk_1` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Limitadores para a tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD CONSTRAINT `tbinteresseevento_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbinteresseevento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD CONSTRAINT `tbpublicacao_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbpublicacaoarquivada`
--
ALTER TABLE `tbpublicacaoarquivada`
  ADD CONSTRAINT `tbpublicacaoarquivada_ibfk_1` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Limitadores para a tabela `tbtelusuario`
--
ALTER TABLE `tbtelusuario`
  ADD CONSTRAINT `tbtelusuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbtokenadmin`
--
ALTER TABLE `tbtokenadmin`
  ADD CONSTRAINT `tbtokenadmin_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `tbadmin` (`idAdmin`);

--
-- Limitadores para a tabela `tbtokenorganizacaoevento`
--
ALTER TABLE `tbtokenorganizacaoevento`
  ADD CONSTRAINT `tbtokenorganizacaoevento_ibfk_1` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbtokenusuario`
--
ALTER TABLE `tbtokenusuario`
  ADD CONSTRAINT `tbtokenusuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbturnoevento`
--
ALTER TABLE `tbturnoevento`
  ADD CONSTRAINT `tbturnoevento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbusuarioseguindo`
--
ALTER TABLE `tbusuarioseguindo`
  ADD CONSTRAINT `tbusuarioseguindo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbusuarioseguindo_ibfk_2` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbvalorevento`
--
ALTER TABLE `tbvalorevento`
  ADD CONSTRAINT `tbvalorevento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`);

--
-- Limitadores para a tabela `tbverificacaotokenadmin`
--
ALTER TABLE `tbverificacaotokenadmin`
  ADD CONSTRAINT `tbverificacaotokenadmin_ibfk_1` FOREIGN KEY (`idTokenAdmin`) REFERENCES `tbtokenadmin` (`idTokenAdmin`);

--
-- Limitadores para a tabela `tbverificacaotokenorganizacaoevento`
--
ALTER TABLE `tbverificacaotokenorganizacaoevento`
  ADD CONSTRAINT `tbverificacaotokenorganizacaoevento_ibfk_1` FOREIGN KEY (`idTokenOrganizacaoEvento`) REFERENCES `tbtokenorganizacaoevento` (`idTokenOrganizacaoEvento`);

--
-- Limitadores para a tabela `tbverificacaotokenusuario`
--
ALTER TABLE `tbverificacaotokenusuario`
  ADD CONSTRAINT `tbverificacaotokenusuario_ibfk_1` FOREIGN KEY (`idTokenUsuario`) REFERENCES `tbtokenusuario` (`idTokenUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
