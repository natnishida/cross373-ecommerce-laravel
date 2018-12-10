-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2018 às 04:14
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cross373`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `nomeClientes` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sobrenomeClientes` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cpf_cnpjClientes` int(11) NOT NULL,
  `rgClientes` int(11) DEFAULT NULL,
  `dataNascClientes` date DEFAULT NULL,
  `idEnderecos` int(11) DEFAULT NULL,
  `telefoneClientes` int(11) NOT NULL,
  `sexoClientes` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `emailClientes` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(200) CHARACTER SET latin1 NOT NULL,
  `statusClientes` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `dataCadastroClientes` datetime DEFAULT NULL,
  `dataUltimaAtualClientes` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratacoesplanos`
--

CREATE TABLE `contratacoesplanos` (
  `idContratacoesPlanos` int(11) NOT NULL,
  `idClientes` int(11) NOT NULL,
  `idPlanos` int(11) NOT NULL,
  `valorDescontoPlanos` int(11) DEFAULT NULL,
  `dataContratacaoPlanos` datetime NOT NULL,
  `statusContratacaoPlanos` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `dataUltAtualContratacaoPlanos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idEnderecos` int(11) UNSIGNED NOT NULL,
  `ruaEnderecos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numeroEnderecos` varchar(15) CHARACTER SET latin1 NOT NULL,
  `complementoEnderecos` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `bairroEnderecos` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cidadeEnderecos` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `estadoEnderecos` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `cepEnderecos` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventario`
--

CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtdInventario` int(11) NOT NULL,
  `fornecedorInventario` int(11) NOT NULL,
  `dataUltAtualInventario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `idPagamentos` int(11) NOT NULL,
  `idClientes` int(11) NOT NULL,
  `idContratacoes` int(11) DEFAULT NULL,
  `idPedidos` int(11) DEFAULT NULL,
  `valorPago` int(11) NOT NULL,
  `parcelasPagamentos` int(11) DEFAULT NULL,
  `tipoPagamento` varchar(45) CHARACTER SET latin1 NOT NULL,
  `bandeiraPagamentos` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `dataPagamentos` datetime NOT NULL,
  `dataUltAtualPagamentos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `idClientes` int(11) NOT NULL,
  `valorPedidos` int(11) NOT NULL,
  `dataPedidos` datetime NOT NULL,
  `statusPedidos` varchar(45) COLLATE utf8_bin NOT NULL,
  `dataUltimaAtualPedidos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `idPlanos` int(11) NOT NULL,
  `nomePlanos` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricaoPlanos` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `validadePlanos` int(11) DEFAULT NULL,
  `valorPlanos` int(11) NOT NULL,
  `valorAdesaoPlanos` int(11) DEFAULT NULL,
  `dataUltimaAtualPlanos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL,
  `nomeProdutos` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricaoProdutos` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `categoriaProdutos` varchar(100) COLLATE utf8_bin NOT NULL,
  `valorProdutos` int(11) NOT NULL,
  `dataUltimaAtualProdutos` datetime DEFAULT NULL,
  `caminhoImagemProdutos` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProdutos`, `nomeProdutos`, `descricaoProdutos`, `categoriaProdutos`, `valorProdutos`, `dataUltimaAtualProdutos`, `caminhoImagemProdutos`) VALUES
(1, 'Produto teste', 'teste para atualização de produto 2', 'Teste', 150, '2018-12-03 02:56:55', 'img/cross1.jpg'),
(2, 'Produto teste 2', 'teste para atualização de produto 3', 'Teste', 100, '2018-12-03 03:09:06', 'img/cross3.jpg'),
(3, 'Produto teste 3', 'teste para atualização de produto 3', 'Teste', 150, '2018-12-03 03:10:02', 'img/cross2.jpg'),
(4, 'Produto teste 4', 'teste para produto em nova linha', 'teste', 111, '2018-12-03 03:10:45', 'img/cross1.jpg'),
(5, 'Produto teste 4', 'teste para produto em nova linha', 'teste', 111, '2018-12-03 03:11:02', 'img/cross1.jpg'),
(6, 'Produto teste 4', 'teste para produto em nova linha', 'teste', 111, '2018-12-03 03:11:04', 'img/cross1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_pedidos`
--

CREATE TABLE `produtos_pedidos` (
  `idprodutos_pedidos` int(11) NOT NULL,
  `idPedidos` int(11) NOT NULL,
  `idProdutos` int(11) NOT NULL,
  `valorProdutos` int(11) NOT NULL,
  `qtdadeProdutos` int(11) NOT NULL,
  `dataUltAtualProdutosPedidos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_pedidos`
--

CREATE TABLE `status_pedidos` (
  `idStatusPedidos` int(11) NOT NULL,
  `nomeStatusPedidos` varchar(100) CHARACTER SET latin1 NOT NULL,
  `idPedidos` int(11) NOT NULL,
  `idPagamentos` int(11) DEFAULT NULL,
  `dataUltAtualStatusPedidos` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `cpf` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `birthday`, `cpf`, `phoneNumber`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teste', 'Teste', 'teste@teste.com', NULL, '$2y$10$PAHTtIgQUBpa.JcYvPHJXeief6mTLsTljMBQAcYfZAoh4aO8E0OTG', '1986-01-21', '356155858584', '11997965633', NULL, '2018-12-03 01:55:42', '2018-12-03 01:55:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`),
  ADD KEY `idx_clientes_enderecos` (`idEnderecos`);

--
-- Indexes for table `contratacoesplanos`
--
ALTER TABLE `contratacoesplanos`
  ADD PRIMARY KEY (`idContratacoesPlanos`),
  ADD KEY `idx_planos_contratacoes` (`idPlanos`),
  ADD KEY `idx_clientes_contratacoes` (`idClientes`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idEnderecos`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idInventario`),
  ADD KEY `idx_produtos_inventario` (`idProduto`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`idPagamentos`),
  ADD KEY `idx_clientes_pagamentos` (`idClientes`),
  ADD KEY `idx_pedidos_pagamentos` (`idPedidos`),
  ADD KEY `idx_contratacoes_pagamentos` (`idContratacoes`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`),
  ADD KEY `idx_clientes_pedidos` (`idClientes`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`idPlanos`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`);

--
-- Indexes for table `produtos_pedidos`
--
ALTER TABLE `produtos_pedidos`
  ADD PRIMARY KEY (`idprodutos_pedidos`),
  ADD KEY `idx_prodped_pedidos` (`idPedidos`),
  ADD KEY `idx_prodped_produtos` (`idProdutos`);

--
-- Indexes for table `status_pedidos`
--
ALTER TABLE `status_pedidos`
  ADD PRIMARY KEY (`idStatusPedidos`),
  ADD KEY `idx_statusped_pedidos` (`idPedidos`),
  ADD KEY `idx_statusped_pagamentos` (`idPagamentos`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contratacoesplanos`
--
ALTER TABLE `contratacoesplanos`
  MODIFY `idContratacoesPlanos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idEnderecos` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idInventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `idPagamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `idPlanos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos_pedidos`
--
ALTER TABLE `produtos_pedidos`
  MODIFY `idprodutos_pedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_pedidos`
--
ALTER TABLE `status_pedidos`
  MODIFY `idStatusPedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contratacoesplanos`
--
ALTER TABLE `contratacoesplanos`
  ADD CONSTRAINT `fk_clientes_contratacoes` FOREIGN KEY (`idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_planos_contratacoes` FOREIGN KEY (`idPlanos`) REFERENCES `planos` (`idPlanos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_produto_inventario` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `fk_clientes_pagamentos` FOREIGN KEY (`idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratacoes_pagamentos` FOREIGN KEY (`idContratacoes`) REFERENCES `contratacoesplanos` (`idContratacoesPlanos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedidos_pagamentos` FOREIGN KEY (`idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_clientes_pedidos` FOREIGN KEY (`idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos_pedidos`
--
ALTER TABLE `produtos_pedidos`
  ADD CONSTRAINT `fk_prodped_Pedidos` FOREIGN KEY (`idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prodped_Produtos` FOREIGN KEY (`idProdutos`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `status_pedidos`
--
ALTER TABLE `status_pedidos`
  ADD CONSTRAINT `fk_statusped_pagamentos` FOREIGN KEY (`idPagamentos`) REFERENCES `pagamentos` (`idPagamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_statusped_pedidos` FOREIGN KEY (`idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
