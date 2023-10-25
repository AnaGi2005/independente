-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2023 às 23:38
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojasgeoana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrar`
--

CREATE TABLE `cadastrar` (
  `cadid` int(11) NOT NULL,
  `cadnom` varchar(100) DEFAULT NULL,
  `cadcpf` varchar(100) DEFAULT NULL,
  `cademail` varchar(50) DEFAULT NULL,
  `cadsenha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastrar`
--

INSERT INTO `cadastrar` (`cadid`, `cadnom`, `cadcpf`, `cademail`, `cadsenha`) VALUES
(1266, 'GEOVANAAA1223', '233334', 'geo1@gmail.com', '1234'),
(1267, 'GI', '233334', 'feliperiquelme3@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `conid` int(11) NOT NULL,
  `connome` varchar(100) DEFAULT NULL,
  `conemail` varchar(100) DEFAULT NULL,
  `conassunto` varchar(50) DEFAULT NULL,
  `conmensagem` varchar(1024) DEFAULT NULL,
  `condata` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`conid`, `connome`, `conemail`, `conassunto`, `conmensagem`, `condata`) VALUES
(23, 'FELIPE RIQUELME', 'feliperiquelme3@gmail.com', 'PEDIDO ERRADOOOOOOOOO', 'GG', '2023-08-31 20:51:30'),
(24, 'FELIPE RIQUELME', 'feliperiquelme3@gmail.com', 'GEOVANNA FEDE', 'GEOVANNA FEDE', '2023-09-01 22:02:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrar`
--

CREATE TABLE `entrar` (
  `entid` int(11) NOT NULL,
  `entemail` varchar(100) DEFAULT NULL,
  `entsenha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `entend` varchar(100) NOT NULL,
  `entnumero` varchar(10) DEFAULT NULL,
  `entcomp` varchar(100) DEFAULT NULL,
  `entcidade` varchar(100) DEFAULT NULL,
  `enttel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotosprodutos`
--

CREATE TABLE `fotosprodutos` (
  `fotid` int(11) NOT NULL,
  `fotcaminho` varchar(100) DEFAULT NULL,
  `fotproid` int(11) DEFAULT NULL,
  `fotativo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fotosprodutos`
--

INSERT INTO `fotosprodutos` (`fotid`, `fotcaminho`, `fotproid`, `fotativo`) VALUES
(1, 'upload/bermuda.png', 1, 1),
(2, 'upload/regata.png', 4, 1),
(3, 'upload/vestido.png', 3, 1),
(4, 'upload/bone.png', 2, 1),
(5, 'upload/moletom.png', 5, 1),
(7, 'upload/agasalho.png', 7, 1),
(8, 'upload/cortavento.png', 8, 1),
(9, 'upload/chinelo.png', 9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `pesid` int(11) NOT NULL,
  `pesnome` varchar(100) DEFAULT NULL,
  `pesemail` varchar(100) DEFAULT NULL,
  `pessenha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `proid` int(11) NOT NULL,
  `pronome` varchar(50) DEFAULT NULL,
  `prodescricao` varchar(1024) DEFAULT NULL,
  `provalor` decimal(18,2) DEFAULT NULL,
  `proparcelamento` decimal(4,0) DEFAULT NULL,
  `profoto` varchar(100) DEFAULT NULL,
  `proativo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`proid`, `pronome`, `prodescricao`, `provalor`, `proparcelamento`, `profoto`, `proativo`) VALUES
(1, 'Bermuda São Paulo Independente Modelo 1', '', '109.90', '10', 'upload/bermuda.png', 1),
(2, 'Boné Cruzado Não Teme A Luta Sombra', '', '69.90', '10', 'upload/bone.png', 1),
(3, 'Vestido Torcida Independente', '', '160.00', '10', 'upload/vestido.png', 1),
(4, 'Regata Verás Que Um Filho Seu Nao Foge a Luta', '', '119.90', '10', 'upload/regata.png', 1),
(5, 'Moletom Torcida Independente Futebol e Samba', '', '199.90', '10', 'upload\\moletom.png', 1),
(6, 'Conjunto Tradicional Agasalho e Calça', '', '349.90', '10', 'upload\\conjunto.png', 1),
(7, 'Agasalho Tradicional Bordado', '', '239.90', '10', 'upload\\agasalho.png', 1),
(8, 'Corta Vento Torcida Independente', '', '229.90', '10', 'upload\\cortavento.png', 1),
(9, 'Chinelo Branco Torcida Independente', '', '39.90', '10', 'upload\\chinelo.png', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  ADD PRIMARY KEY (`cadid`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`conid`);

--
-- Índices para tabela `entrar`
--
ALTER TABLE `entrar`
  ADD PRIMARY KEY (`entid`);

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`entend`);

--
-- Índices para tabela `fotosprodutos`
--
ALTER TABLE `fotosprodutos`
  ADD PRIMARY KEY (`fotid`),
  ADD KEY `fkfotproid` (`fotproid`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`pesid`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`proid`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  MODIFY `cadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1268;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `entrar`
--
ALTER TABLE `entrar`
  MODIFY `entid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotosprodutos`
--
ALTER TABLE `fotosprodutos`
  MODIFY `fotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `pesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `entrar`
--
ALTER TABLE `entrar`
  ADD CONSTRAINT `entrar_ibfk_1` FOREIGN KEY (`entid`) REFERENCES `cadastrar` (`cadid`);

--
-- Limitadores para a tabela `fotosprodutos`
--
ALTER TABLE `fotosprodutos`
  ADD CONSTRAINT `fkfotproid` FOREIGN KEY (`fotproid`) REFERENCES `produtos` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
