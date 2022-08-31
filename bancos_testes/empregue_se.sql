-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31-Ago-2022 às 16:22
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empregue_se`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato_vaga`
--

CREATE TABLE `candidato_vaga` (
  `id_vaga` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `uf` char(2) NOT NULL,
  `cep` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `nascimento` date NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL DEFAULT '',
  `sexo` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `areaDeAtuacao` varchar(100) DEFAULT NULL,
  `experiencia` varchar(1000) DEFAULT NULL,
  `id_formacaoAcademica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `sexo`, `email`, `senha`, `areaDeAtuacao`, `experiencia`, `id_formacaoAcademica`) VALUES
(3, 'cliente', '940.746.560-86', '2012-08-01', '(51) 999999999', 'AAAAAAAAAABBBB', '', 'cliente@teste.com', 'teste123', 'AAAAAAAAAAA', 'AAAAAAAAVVVVV', 1),
(4, 'lucas', '(51) 999999999', '2022-08-02', 'telefone', '', 'm', 'email', '123456', NULL, NULL, 1),
(5, 'lucas', '999.999.999-99', '2022-08-11', '(00) 00000-0000', '', 'm', 'lucas@gmail.com', '123456', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `endereco`, `cnpj`, `email`, `senha`) VALUES
(1, 'Admin', 'Rolante', '97.049.381/0001-35', 'admin_test001@adm.com', 'senha123'),
(2, 'AdminDois', 'Rolante', '97.049.381/0001-35', 'admin_test2@adm.com', '12345'),
(4, 'aspumi', '', '0000000000', 'aspumi@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacaoacademica`
--

CREATE TABLE `formacaoacademica` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formacaoacademica`
--

INSERT INTO `formacaoacademica` (`id`, `descricao`) VALUES
(1, 'Fundamental');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato_vaga`
--
ALTER TABLE `candidato_vaga`
  ADD PRIMARY KEY (`id_vaga`,`id_cliente`),
  ADD KEY `fk_vaga_has_cliente_cliente1_idx` (`id_cliente`),
  ADD KEY `fk_vaga_has_cliente_vaga1_idx` (`id_vaga`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`,`id_formacaoAcademica`),
  ADD KEY `fk_cliente_formacaoAcademica1_idx` (`id_formacaoAcademica`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vagaDeEmprego_empresa1_idx` (`id_empresa`),
  ADD KEY `fk_vaga_cidade1_idx` (`id_cidade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `candidato_vaga`
--
ALTER TABLE `candidato_vaga`
  ADD CONSTRAINT `fk_vaga_has_cliente_cliente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vaga_has_cliente_vaga1` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_formacaoAcademica1` FOREIGN KEY (`id_formacaoAcademica`) REFERENCES `formacaoacademica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `fk_vagaDeEmprego_empresa1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vaga_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
