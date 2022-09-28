-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 02:03
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

--
-- Extraindo dados da tabela `candidato_vaga`
--

INSERT INTO `candidato_vaga` (`id_vaga`, `id_cliente`) VALUES
(1, 3),
(1, 4);

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

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `uf`, `cep`) VALUES
(1, 'Rolante', 'RS', '95690-000');

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
  `endereco` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `areaDeAtuacao` varchar(100) NOT NULL,
  `experiencia` varchar(1000) NOT NULL,
  `id_formacaoAcademica` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `email`, `senha`, `areaDeAtuacao`, `experiencia`, `id_formacaoAcademica`, `sexo`) VALUES
(3, 'cliente', '940.746.560-86', '2012-08-01', '(51) 999999999', 'Rolante', 'cliente@teste.com', 'teste123', 'a', 'a', 1, ''),
(4, 'Sla da Silva', '151.518.181-81', '2022-09-01', '(51) 99999-9999', '', 'sla@gmail.com', '123', '', '', 1, 'm');

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
(4, 'Ambev', '', '99.999.999/9999-99', 'ambev@gmail.com', '123');

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
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `nome`, `descricao`, `quantidade`, `status`, `id_empresa`, `id_cidade`) VALUES
(1, 'escravo', 'trabalho bom', 100, 14, 1, 1),
(2, 'servente', 'muito dinheiro', 20, 18, 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
