-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/02/2024 às 13:24
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(60) NOT NULL,
  `cpfAdmin` varchar(16) NOT NULL,
  `dataNascAdmin` date NOT NULL,
  `emailAdmin` varchar(60) NOT NULL,
  `senhaAdmin` varchar(12) NOT NULL,
  `tokenAdmin` varchar(50) NOT NULL,
  `imagemAdmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `nomeAdmin`, `cpfAdmin`, `dataNascAdmin`, `emailAdmin`, `senhaAdmin`, `tokenAdmin`, `imagemAdmin`) VALUES
(1, 'Stephanie Medeiros', '123.456.789-10', '1999-01-29', 'admin@teste.com', 'senha123', 'cafe6ed5b16a6ee99f2146240a4ab10c', 'userPadrao.jpg'),
(3, 'bruno', '444.444.444-44', '2024-02-07', 'admin@teste2.com', 'senha1234', '0cf9f5515282bf589dc512b0388604a3', 'd59b3ee5447b05e76b682b9772e6f979.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbavaliacao`
--

CREATE TABLE `tbavaliacao` (
  `idAvaliacao` int(11) NOT NULL,
  `tituloAvaliacao` varchar(25) NOT NULL,
  `descAvaliacao` varchar(60) NOT NULL,
  `idOrganizacaoEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(30) NOT NULL,
  `descCategoria` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoriadenuncia`
--

CREATE TABLE `tbcategoriadenuncia` (
  `idCategoriaDenuncia` int(11) NOT NULL,
  `nomeCategoriaDenuncia` varchar(40) NOT NULL,
  `descCategoriaDenuncia` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenunciaorganizacaoevento`
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
-- Estrutura para tabela `tbevento`
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
-- Estrutura para tabela `tbfavoritos`
--

CREATE TABLE `tbfavoritos` (
  `idFavoritos` int(11) NOT NULL,
  `idOrganizacaoEventos` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbhorarioevento`
--

CREATE TABLE `tbhorarioevento` (
  `idHorarioEvento` int(11) NOT NULL,
  `horarioEvento` time NOT NULL,
  `dataEvento` date NOT NULL,
  `turnoEvento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbinteresseevento`
--

CREATE TABLE `tbinteresseevento` (
  `idInteresseEvento` int(11) NOT NULL,
  `idEvento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tborganizacaoevento`
--

CREATE TABLE `tborganizacaoevento` (
  `idOrganizacaoEvento` int(11) NOT NULL,
  `nomeOrganizacaoEvento` varchar(40) NOT NULL,
  `cnpjOrganizacaoEvento` varchar(20) NOT NULL,
  `cepOrganizacaoEvento` varchar(20) NOT NULL,
  `logradouroOrganizacaoEvento` varchar(30) NOT NULL,
  `bairroOrganizacaoEvento` varchar(40) NOT NULL,
  `numeroOrganizacaoEvento` char(4) NOT NULL,
  `cidadeOrganizacaoEvento` varchar(30) NOT NULL,
  `ufOrganizacaoEvento` char(2) NOT NULL,
  `emailOrganizacaoEvento` varchar(60) NOT NULL,
  `senhaOrganizacaoEvento` varchar(30) NOT NULL,
  `linkSiteOrganizacaoEvento` varchar(1000) NOT NULL,
  `telOrganizacaoEvento` varchar(20) NOT NULL,
  `imagemOrganizacaoEvento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tborganizacaoevento`
--

INSERT INTO `tborganizacaoevento` (`idOrganizacaoEvento`, `nomeOrganizacaoEvento`, `cnpjOrganizacaoEvento`, `cepOrganizacaoEvento`, `logradouroOrganizacaoEvento`, `bairroOrganizacaoEvento`, `numeroOrganizacaoEvento`, `cidadeOrganizacaoEvento`, `ufOrganizacaoEvento`, `emailOrganizacaoEvento`, `senhaOrganizacaoEvento`, `linkSiteOrganizacaoEvento`, `telOrganizacaoEvento`, `imagemOrganizacaoEvento`) VALUES
(2, 'dsadasdsda', '44.444.444/4444-44', '55.555-555', 'xcfczxczxczxc', 'vxvfsd', '45', 'SÃO PAULO', 'sp', 'testenovo@gmail.com', '123', 'http://localhost/ColaAiAdm/Admin/Organizacao/register.php', '11-25026-748', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(30) NOT NULL,
  `sobrenomeUsuario` varchar(35) NOT NULL,
  `emailUsuario` varchar(45) NOT NULL,
  `senhaUsuario` varchar(12) NOT NULL,
  `imagemUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='sujeito a Atualização, apenas o esqueleto presente';

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `sobrenomeUsuario`, `emailUsuario`, `senhaUsuario`, `imagemUsuario`) VALUES
(2, 'João', 'Silva ola', 'joao@example.com', 'senha123', 'avatar.jpg'),
(3, 'thierry', 'Silva ola', 'admin@teste.com.br', 'senha1234', '6ff527db52ae73c5bd1df83ca3aa7114.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD PRIMARY KEY (`idAvaliacao`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbcategoriadenuncia`
--
ALTER TABLE `tbcategoriadenuncia`
  ADD PRIMARY KEY (`idCategoriaDenuncia`);

--
-- Índices de tabela `tbdenunciaorganizacaoevento`
--
ALTER TABLE `tbdenunciaorganizacaoevento`
  ADD PRIMARY KEY (`idDenunciaOrganizacaoEvento`),
  ADD KEY `idCategoriaDenuncia` (`idCategoriaDenuncia`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idHorarioEvento` (`idHorarioEvento`),
  ADD KEY `idOrganizacaoEvento` (`idOrganizacaoEvento`);

--
-- Índices de tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD PRIMARY KEY (`idFavoritos`),
  ADD KEY `idOrganizacaoEventos` (`idOrganizacaoEventos`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbhorarioevento`
--
ALTER TABLE `tbhorarioevento`
  ADD PRIMARY KEY (`idHorarioEvento`);

--
-- Índices de tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD PRIMARY KEY (`idInteresseEvento`),
  ADD KEY `idEvento` (`idEvento`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  ADD PRIMARY KEY (`idOrganizacaoEvento`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT de tabela `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  MODIFY `idInteresseEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tborganizacaoevento`
--
ALTER TABLE `tborganizacaoevento`
  MODIFY `idOrganizacaoEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbavaliacao`
--
ALTER TABLE `tbavaliacao`
  ADD CONSTRAINT `tbavaliacao_ibfk_1` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Restrições para tabelas `tbdenunciaorganizacaoevento`
--
ALTER TABLE `tbdenunciaorganizacaoevento`
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_1` FOREIGN KEY (`idCategoriaDenuncia`) REFERENCES `tbcategoriadenuncia` (`idCategoriaDenuncia`),
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_2` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`),
  ADD CONSTRAINT `tbdenunciaorganizacaoevento_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`),
  ADD CONSTRAINT `tbevento_ibfk_2` FOREIGN KEY (`idHorarioEvento`) REFERENCES `tbhorarioevento` (`idHorarioEvento`),
  ADD CONSTRAINT `tbevento_ibfk_3` FOREIGN KEY (`idOrganizacaoEvento`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`);

--
-- Restrições para tabelas `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD CONSTRAINT `tbfavoritos_ibfk_1` FOREIGN KEY (`idOrganizacaoEventos`) REFERENCES `tborganizacaoevento` (`idOrganizacaoEvento`),
  ADD CONSTRAINT `tbfavoritos_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbinteresseevento`
--
ALTER TABLE `tbinteresseevento`
  ADD CONSTRAINT `tbinteresseevento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`),
  ADD CONSTRAINT `tbinteresseevento_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
