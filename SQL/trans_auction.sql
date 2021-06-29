-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2021 às 00:11
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trans_auction`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `Id_Categoria` int(255) NOT NULL,
  `TipoCarga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_camionista`
--

CREATE TABLE `dados_camionista` (
  `Id` int(255) NOT NULL,
  `Id_Camionista` int(255) NOT NULL,
  `NIF` varchar(50) NOT NULL,
  `morada` varchar(75) NOT NULL,
  `codigoPostal` varchar(50) NOT NULL,
  `ntelefone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `Id` int(255) NOT NULL,
  `Id_produto` int(255) NOT NULL,
  `id_camionista` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_produtos_utilizador`
--

CREATE TABLE `img_produtos_utilizador` (
  `Id_Produto_Utilizador` int(255) NOT NULL,
  `Id_produto` int(255) NOT NULL,
  `Id_Utilizador` int(255) NOT NULL,
  `Imagens` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leilao`
--

CREATE TABLE `leilao` (
  `Id_Produto` int(255) NOT NULL,
  `Id_Camionista` int(255) NOT NULL,
  `Lance` int(20) NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `estado` int(20) NOT NULL,
  `aceite` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leilao_lance`
--

CREATE TABLE `leilao_lance` (
  `Id_Comprador` int(255) NOT NULL,
  `Id_lance` int(255) NOT NULL,
  `Lance` int(50) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leilao_ref`
--

CREATE TABLE `leilao_ref` (
  `Id_leilao` int(255) NOT NULL,
  `Id_produto` int(255) NOT NULL,
  `Id_Vendedor` int(255) NOT NULL,
  `Id_Camionista` int(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `ValorIni` int(50) NOT NULL,
  `ValorFim` int(50) NOT NULL,
  `estado` int(20) NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `Id_Utilizador` int(255) NOT NULL,
  `Pnome` varchar(25) NOT NULL,
  `Unome` varchar(25) NOT NULL,
  `Utilinome` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Id_Produto` int(255) NOT NULL,
  `Id_Categoria` int(255) NOT NULL,
  `Id_Utilizador` int(255) NOT NULL,
  `Produto` varchar(50) NOT NULL,
  `Altura` int(20) NOT NULL,
  `Comprimento` int(20) NOT NULL,
  `Largura` int(20) NOT NULL,
  `peso` int(20) NOT NULL,
  `Entrega` int(100) NOT NULL,
  `Recolha` int(100) NOT NULL,
  `Imagem` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registo_veiculo`
--

CREATE TABLE `registo_veiculo` (
  `Id_Veiculo` int(255) NOT NULL,
  `Id_Camionista` int(255) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `TipoCarga` varchar(50) NOT NULL,
  `Peso` int(20) NOT NULL,
  `Largura` int(20) NOT NULL,
  `Superficie` int(20) NOT NULL,
  `Altura` int(20) NOT NULL,
  `Comprimento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Índices para tabela `dados_camionista`
--
ALTER TABLE `dados_camionista`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `img_produtos_utilizador`
--
ALTER TABLE `img_produtos_utilizador`
  ADD PRIMARY KEY (`Id_Produto_Utilizador`);

--
-- Índices para tabela `leilao`
--
ALTER TABLE `leilao`
  ADD PRIMARY KEY (`Id_Produto`);

--
-- Índices para tabela `leilao_lance`
--
ALTER TABLE `leilao_lance`
  ADD PRIMARY KEY (`Id_Comprador`);

--
-- Índices para tabela `leilao_ref`
--
ALTER TABLE `leilao_ref`
  ADD PRIMARY KEY (`Id_leilao`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id_Utilizador`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Id_Produto`);

--
-- Índices para tabela `registo_veiculo`
--
ALTER TABLE `registo_veiculo`
  ADD PRIMARY KEY (`Id_Veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Categoria` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dados_camionista`
--
ALTER TABLE `dados_camionista`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `img_produtos_utilizador`
--
ALTER TABLE `img_produtos_utilizador`
  MODIFY `Id_Produto_Utilizador` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `leilao`
--
ALTER TABLE `leilao`
  MODIFY `Id_Produto` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `leilao_lance`
--
ALTER TABLE `leilao_lance`
  MODIFY `Id_Comprador` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `leilao_ref`
--
ALTER TABLE `leilao_ref`
  MODIFY `Id_leilao` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `Id_Utilizador` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Id_Produto` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `registo_veiculo`
--
ALTER TABLE `registo_veiculo`
  MODIFY `Id_Veiculo` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
