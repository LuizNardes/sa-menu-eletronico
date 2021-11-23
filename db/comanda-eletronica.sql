-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2021 às 01:51
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

CREATE DATABASE projeto;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID da categoria',
  `nome-categoria` varchar(30) DEFAULT NULL COMMENT 'Nome da categoria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comandas`
--

CREATE TABLE `comandas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Número da comanda',
  `id-conta` int(10) UNSIGNED NOT NULL,
  `id-produto` int(10) UNSIGNED NOT NULL,
  `id-usuario` int(10) UNSIGNED NOT NULL,
  `quantidade` int(10) UNSIGNED DEFAULT NULL,
  `data-incio` datetime NOT NULL COMMENT 'Data e hora de lançamento do pedido ',
  `data-fim` int(11) NOT NULL COMMENT 'Data e hora de entrega do pedido na mesa '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(10) UNSIGNED NOT NULL,
  `mesa` int(10) UNSIGNED NOT NULL,
  `id-comanda` int(10) UNSIGNED NOT NULL,
  `situacao` char(1) NOT NULL,
  `data-inicio` datetime DEFAULT NULL COMMENT 'Data/hora de abertura da conta',
  `data-fim` int(11) NOT NULL COMMENT 'Data/hora de fechamento da conta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID e Número da mesa',
  `descricao` text NOT NULL COMMENT 'Descrição da mesa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'ID do produto ',
  `nome` varchar(30) DEFAULT NULL COMMENT 'Nome do produto',
  `qtd` char(1) DEFAULT NULL COMMENT 'Disponibilidade do produto sendo "S" para disponível "N" para indisponível',
  `descricao` text DEFAULT NULL COMMENT 'Breve descrição do produto',
  `preco` int(10) UNSIGNED NOT NULL COMMENT 'Preço do produto',
  `id-categoria` int(10) UNSIGNED NOT NULL COMMENT 'ID da categoria do produto',
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo-usuario`
--

CREATE TABLE `tipo-usuario` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'ID do tipo de usuário',
  `tipo` varchar(20) NOT NULL COMMENT 'Tipo/Nível de usuário '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID do usuário ',
  `nome` varchar(30) NOT NULL COMMENT 'Nome do usuário',
  `tipo-usuario` int(10) UNSIGNED NOT NULL COMMENT 'ID do tipo e nível de acesso do de usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comandas`
--
ALTER TABLE `comandas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-conta` (`id-conta`),
  ADD KEY `id-produto` (`id-produto`),
  ADD KEY `id-usuario` (`id-usuario`);

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesa` (`mesa`);

--
-- Índices para tabela `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-categoria` (`id-categoria`);

--
-- Índices para tabela `tipo-usuario`
--
ALTER TABLE `tipo-usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo-usuario` (`tipo-usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comandas`
--
ALTER TABLE `comandas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Número da comanda';

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do produto ';

--
-- AUTO_INCREMENT de tabela `tipo-usuario`
--
ALTER TABLE `tipo-usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do tipo de usuário';

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário ';

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comandas`
--
ALTER TABLE `comandas`
  ADD CONSTRAINT `comandas_ibfk_1` FOREIGN KEY (`id-conta`) REFERENCES `conta` (`id`),
  ADD CONSTRAINT `comandas_ibfk_2` FOREIGN KEY (`id-produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `comandas_ibfk_3` FOREIGN KEY (`id-usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`mesa`) REFERENCES `mesas` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id-categoria`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo-usuario`) REFERENCES `tipo-usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
