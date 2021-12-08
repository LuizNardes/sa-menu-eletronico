-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2021 às 01:56
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
-- Banco de dados: `projeto`
--
CREATE DATABASE projeto;
-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID da categoria',
  `nome_categoria` varchar(30) DEFAULT NULL COMMENT 'Nome da categoria'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`) VALUES
(1, 'bebidas_alcoolicas'),
(2, 'lanches'),
(3, 'sobremesa'),
(4, 'bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comandas`
--

CREATE TABLE `comandas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Número da comanda',
  `id_produto` int(10) UNSIGNED NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `quantidade` int(10) UNSIGNED DEFAULT NULL,
  `data_incio` datetime NOT NULL COMMENT 'Data e hora de lançamento do pedido ',
  `data_fim` datetime NOT NULL COMMENT 'Data e hora de entrega do pedido na mesa '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comandas`
--

INSERT INTO `comandas` (`id`, `id_produto`, `id_usuario`, `quantidade`, `data_incio`, `data_fim`) VALUES
(2, 3, 2, 1, '2021-12-07 20:21:00', '2021-12-07 20:48:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_mesa` int(10) UNSIGNED NOT NULL,
  `id_comanda` int(10) UNSIGNED NOT NULL,
  `situacao` char(1) NOT NULL COMMENT '"A" para conta aberta e "F" para conta fechada',
  `data_inicio` datetime DEFAULT NULL COMMENT 'Data/hora de abertura da conta',
  `data_fim` datetime NOT NULL COMMENT 'Data/hora de fechamento da conta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `id_mesa`, `id_comanda`, `situacao`, `data_inicio`, `data_fim`) VALUES
(1, 1, 2, 'A', '2021-12-07 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID e Número da mesa',
  `descricao` text NOT NULL COMMENT 'Descrição da mesa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `descricao`) VALUES
(1, 'Mesa 01'),
(2, 'Mesa 02');

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
  `id_categoria` int(10) UNSIGNED NOT NULL COMMENT 'ID da categoria do produto',
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `qtd`, `descricao`, `preco`, `id_categoria`, `imagem`) VALUES
(1, 'Coca Cola', 's', 'Refrigerante Coca-Cola lata 355ml', 6, 4, ''),
(2, 'Ipa Element', 's', 'Chopp Ipa, com amargor moderado.', 20, 1, ''),
(3, 'Tech Burger', 's', 'Delicioso Hamburguer caseiro de picanha de 180g, pão e queijo cheddar, maionese da casa.', 29, 2, ''),
(4, 'Petit gateau', 's', 'Bolo crocante, com recheio de chocolate, acompanha sorvete de baunilha.', 27, 3, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'ID do tipo de usuário',
  `tipo` varchar(20) NOT NULL COMMENT 'Tipo/Nível de usuário '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'administrador'),
(2, 'garçom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID do usuário ',
  `nome` varchar(30) NOT NULL COMMENT 'Nome do usuário',
  `tipo_usuario` int(10) UNSIGNED NOT NULL COMMENT 'ID do tipo e nível de acesso do de usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `tipo_usuario`) VALUES
(1, 'luiz.nardes', 1),
(2, 'suelen.lima', 2);

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
  ADD KEY `id-produto` (`id_produto`),
  ADD KEY `id-usuario` (`id_usuario`);

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mesa` (`id_mesa`),
  ADD KEY `id_comanda` (`id_comanda`);

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
  ADD KEY `id-categoria` (`id_categoria`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo-usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID da categoria', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comandas`
--
ALTER TABLE `comandas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Número da comanda', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID e Número da mesa', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do produto ', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do tipo de usuário', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário ', AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comandas`
--
ALTER TABLE `comandas`
  ADD CONSTRAINT `comandas_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `comandas_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_ibfk_1` FOREIGN KEY (`id_comanda`) REFERENCES `comandas` (`id`),
  ADD CONSTRAINT `conta_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
