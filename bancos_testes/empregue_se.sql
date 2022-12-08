-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2022 às 02:38
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
(1, 'Aceguá', 'RS', ''),
(2, 'Água Santa', 'RS', ''),
(3, 'Agudo', 'RS', ''),
(4, 'Ajuricaba', 'RS', ''),
(5, 'Alecrim', 'RS', ''),
(6, 'Alegrete', 'RS', ''),
(7, 'Alegria', 'RS', ''),
(8, 'Almirante Tamandaré do Sul', 'RS', ''),
(9, 'Alpestre', 'RS', ''),
(10, 'Alto Alegre', 'RS', ''),
(11, 'Alto Feliz', 'RS', ''),
(12, 'Alvorada', 'RS', ''),
(13, 'Amaral Ferrador', 'RS', ''),
(14, 'Ametista do Sul', 'RS', ''),
(15, 'André da Rocha', 'RS', ''),
(16, 'Anta Gorda', 'RS', ''),
(17, 'Antônio Prado', 'RS', ''),
(18, 'Arambaré', 'RS', ''),
(19, 'Araricá', 'RS', ''),
(20, 'Aratiba', 'RS', ''),
(21, 'Arroio do Meio', 'RS', ''),
(22, 'Arroio do Padre', 'RS', ''),
(23, 'Arroio do Sal', 'RS', ''),
(24, 'Arroio do Tigre', 'RS', ''),
(25, 'Arroio dos Ratos', 'RS', ''),
(26, 'Arroio Grande', 'RS', ''),
(27, 'Arvorezinha', 'RS', ''),
(28, 'Augusto Pestana', 'RS', ''),
(29, 'Áurea', 'RS', ''),
(30, 'Bag?', 'RS', ''),
(31, 'Balne?rio Pinhal', 'RS', ''),
(32, 'Bar?o', 'RS', ''),
(33, 'Bar?o de Cotegipe', 'RS', ''),
(34, 'Bar?o do Triunfo', 'RS', ''),
(35, 'Barra do Guarita', 'RS', ''),
(36, 'Barra do Quara?', 'RS', ''),
(37, 'Barra do Ribeiro', 'RS', ''),
(38, 'Barra do Rio Azul', 'RS', ''),
(39, 'Barra Funda', 'RS', ''),
(40, 'Barrac?o', 'RS', ''),
(41, 'Barros Cassal', 'RS', ''),
(42, 'Benjamin Constant do Sul', 'RS', ''),
(43, 'Bento Gon?alves', 'RS', ''),
(44, 'Boa Vista das Miss?es', 'RS', ''),
(45, 'Boa Vista do Buric?', 'RS', ''),
(46, 'Boa Vista do Cadeado', 'RS', ''),
(47, 'Boa Vista do Incra', 'RS', ''),
(48, 'Boa Vista do Sul', 'RS', ''),
(49, 'Bom Jesus', 'RS', ''),
(50, 'Bom Princ?pio', 'RS', ''),
(51, 'Bom Progresso', 'RS', ''),
(52, 'Bom Retiro do Sul', 'RS', ''),
(53, 'Boqueir?o do Le?o', 'RS', ''),
(54, 'Bossoroca', 'RS', ''),
(55, 'Bozano', 'RS', ''),
(56, 'Braga', 'RS', ''),
(57, 'Brochier', 'RS', ''),
(58, 'Buti?', 'RS', ''),
(59, 'Ca?apava do Sul', 'RS', ''),
(60, 'Cacequi', 'RS', ''),
(61, 'Cachoeira do Sul', 'RS', ''),
(62, 'Cachoeirinha', 'RS', ''),
(63, 'Cacique Doble', 'RS', ''),
(64, 'Caibat?', 'RS', ''),
(65, 'Cai?ara', 'RS', ''),
(66, 'Camaqu?', 'RS', ''),
(67, 'Camargo', 'RS', ''),
(68, 'Cambar? do Sul', 'RS', ''),
(69, 'Campestre da Serra', 'RS', ''),
(70, 'Campina das Miss?es', 'RS', ''),
(71, 'Campinas do Sul', 'RS', ''),
(72, 'Campo Bom', 'RS', ''),
(73, 'Campo Novo', 'RS', ''),
(74, 'Campos Borges', 'RS', ''),
(75, 'Candel?ria', 'RS', ''),
(76, 'C?ndido God?i', 'RS', ''),
(77, 'Candiota', 'RS', ''),
(78, 'Canela', 'RS', ''),
(79, 'Cangu?u', 'RS', ''),
(80, 'Canoas', 'RS', ''),
(81, 'Canudos do Vale', 'RS', ''),
(82, 'Cap?o Bonito do Sul', 'RS', ''),
(83, 'Cap?o da Canoa', 'RS', ''),
(84, 'Cap?o do Cip?', 'RS', ''),
(85, 'Cap?o do Le?o', 'RS', ''),
(86, 'Capela de Santana', 'RS', ''),
(87, 'Capit?o', 'RS', ''),
(88, 'Capivari do Sul', 'RS', ''),
(89, 'Cara?', 'RS', ''),
(90, 'Carazinho', 'RS', ''),
(91, 'Carlos Barbosa', 'RS', ''),
(92, 'Carlos Gomes', 'RS', ''),
(93, 'Casca', 'RS', ''),
(94, 'Caseiros', 'RS', ''),
(95, 'Catu?pe', 'RS', ''),
(96, 'Caxias do Sul', 'RS', ''),
(97, 'Centen?rio', 'RS', ''),
(98, 'Cerrito', 'RS', ''),
(99, 'Cerro Branco', 'RS', ''),
(100, 'Cerro Grande', 'RS', ''),
(101, 'Cerro Grande do Sul', 'RS', ''),
(102, 'Cerro Largo', 'RS', ''),
(103, 'Chapada', 'RS', ''),
(104, 'Charqueadas', 'RS', ''),
(105, 'Charrua', 'RS', ''),
(106, 'Chiapetta', 'RS', ''),
(107, 'Chu?', 'RS', ''),
(108, 'Chuvisca', 'RS', ''),
(109, 'Cidreira', 'RS', ''),
(110, 'Cir?aco', 'RS', ''),
(111, 'Colinas', 'RS', ''),
(112, 'Colorado', 'RS', ''),
(113, 'Condor', 'RS', ''),
(114, 'Constantina', 'RS', ''),
(115, 'Coqueiro Baixo', 'RS', ''),
(116, 'Coqueiros do Sul', 'RS', ''),
(117, 'Coronel Barros', 'RS', ''),
(118, 'Coronel Bicaco', 'RS', ''),
(119, 'Coronel Pilar', 'RS', ''),
(120, 'Cotipor?', 'RS', ''),
(121, 'Coxilha', 'RS', ''),
(122, 'Crissiumal', 'RS', ''),
(123, 'Cristal', 'RS', ''),
(124, 'Cristal do Sul', 'RS', ''),
(125, 'Cruz Alta', 'RS', ''),
(126, 'Cruzaltense', 'RS', ''),
(127, 'Cruzeiro do Sul', 'RS', ''),
(128, 'David Canabarro', 'RS', ''),
(129, 'Derrubadas', 'RS', ''),
(130, 'Dezesseis de Novembro', 'RS', ''),
(131, 'Dilermando de Aguiar', 'RS', ''),
(132, 'Dois Irm?os', 'RS', ''),
(133, 'Dois Irm?os das Miss?es', 'RS', ''),
(134, 'Dois Lajeados', 'RS', ''),
(135, 'Dom Feliciano', 'RS', ''),
(136, 'Dom Pedrito', 'RS', ''),
(137, 'Dom Pedro de Alc?ntara', 'RS', ''),
(138, 'Dona Francisca', 'RS', ''),
(139, 'Doutor Maur?cio Cardoso', 'RS', ''),
(140, 'Doutor Ricardo', 'RS', ''),
(141, 'Eldorado do Sul', 'RS', ''),
(142, 'Encantado', 'RS', ''),
(143, 'Encruzilhada do Sul', 'RS', ''),
(144, 'Engenho Velho', 'RS', ''),
(145, 'Entre Rios do Sul', 'RS', ''),
(146, 'Entre-Iju?s', 'RS', ''),
(147, 'Erebango', 'RS', ''),
(148, 'Erechim', 'RS', ''),
(149, 'Ernestina', 'RS', ''),
(150, 'Erval Grande', 'RS', ''),
(151, 'Erval Seco', 'RS', ''),
(152, 'Esmeralda', 'RS', ''),
(153, 'Esperan?a do Sul', 'RS', ''),
(154, 'Espumoso', 'RS', ''),
(155, 'Esta??o', 'RS', ''),
(156, 'Est?ncia Velha', 'RS', ''),
(157, 'Esteio', 'RS', ''),
(158, 'Estrela', 'RS', ''),
(159, 'Estrela Velha', 'RS', ''),
(160, 'Eug?nio de Castro', 'RS', ''),
(161, 'Fagundes Varela', 'RS', ''),
(162, 'Farroupilha', 'RS', ''),
(163, 'Faxinal do Soturno', 'RS', ''),
(164, 'Faxinalzinho', 'RS', ''),
(165, 'Fazenda Vilanova', 'RS', ''),
(166, 'Feliz', 'RS', ''),
(167, 'Flores da Cunha', 'RS', ''),
(168, 'Floriano Peixoto', 'RS', ''),
(169, 'Fontoura Xavier', 'RS', ''),
(170, 'Formigueiro', 'RS', ''),
(171, 'Forquetinha', 'RS', ''),
(172, 'Fortaleza dos Valos', 'RS', ''),
(173, 'Frederico Westphalen', 'RS', ''),
(174, 'Garibaldi', 'RS', ''),
(175, 'Garruchos', 'RS', ''),
(176, 'Gaurama', 'RS', ''),
(177, 'General C?mara', 'RS', ''),
(178, 'Gentil', 'RS', ''),
(179, 'Get?lio Vargas', 'RS', ''),
(180, 'Giru?', 'RS', ''),
(181, 'Glorinha', 'RS', ''),
(182, 'Gramado', 'RS', ''),
(183, 'Gramado dos Loureiros', 'RS', ''),
(184, 'Gramado Xavier', 'RS', ''),
(185, 'Gravata?', 'RS', ''),
(186, 'Guabiju', 'RS', ''),
(187, 'Gua?ba', 'RS', ''),
(188, 'Guapor?', 'RS', ''),
(189, 'Guarani das Miss?es', 'RS', ''),
(190, 'Harmonia', 'RS', ''),
(191, 'Herval', 'RS', ''),
(192, 'Herveiras', 'RS', ''),
(193, 'Horizontina', 'RS', ''),
(194, 'Hulha Negra', 'RS', ''),
(195, 'Humait?', 'RS', ''),
(196, 'Ibarama', 'RS', ''),
(197, 'Ibia??', 'RS', ''),
(198, 'Ibiraiaras', 'RS', ''),
(199, 'Ibirapuit?', 'RS', ''),
(200, 'Ibirub?', 'RS', ''),
(201, 'Igrejinha', 'RS', ''),
(202, 'Iju?', 'RS', ''),
(203, 'Il?polis', 'RS', ''),
(204, 'Imb?', 'RS', ''),
(205, 'Imigrante', 'RS', ''),
(206, 'Independ?ncia', 'RS', ''),
(207, 'Inhacor?', 'RS', ''),
(208, 'Ip?', 'RS', ''),
(209, 'Ipiranga do Sul', 'RS', ''),
(210, 'Ira?', 'RS', ''),
(211, 'Itaara', 'RS', ''),
(212, 'Itacurubi', 'RS', ''),
(213, 'Itapuca', 'RS', ''),
(214, 'Itaqui', 'RS', ''),
(215, 'Itati', 'RS', ''),
(216, 'Itatiba do Sul', 'RS', ''),
(217, 'Ivor?', 'RS', ''),
(218, 'Ivoti', 'RS', ''),
(219, 'Jaboticaba', 'RS', ''),
(220, 'Jacuizinho', 'RS', ''),
(221, 'Jacutinga', 'RS', ''),
(222, 'Jaguar?o', 'RS', ''),
(223, 'Jaguari', 'RS', ''),
(224, 'Jaquirana', 'RS', ''),
(225, 'Jari', 'RS', ''),
(226, 'J?ia', 'RS', ''),
(227, 'J?lio de Castilhos', 'RS', ''),
(228, 'Lagoa Bonita do Sul', 'RS', ''),
(229, 'Lagoa dos Tr?s Cantos', 'RS', ''),
(230, 'Lagoa Vermelha', 'RS', ''),
(231, 'Lago?o', 'RS', ''),
(232, 'Lajeado', 'RS', ''),
(233, 'Lajeado do Bugre', 'RS', ''),
(234, 'Lavras do Sul', 'RS', ''),
(235, 'Liberato Salzano', 'RS', ''),
(236, 'Lindolfo Collor', 'RS', ''),
(237, 'Linha Nova', 'RS', ''),
(238, 'Ma?ambara', 'RS', ''),
(239, 'Machadinho', 'RS', ''),
(240, 'Mampituba', 'RS', ''),
(241, 'Manoel Viana', 'RS', ''),
(242, 'Maquin?', 'RS', ''),
(243, 'Marat?', 'RS', ''),
(244, 'Marau', 'RS', ''),
(245, 'Marcelino Ramos', 'RS', ''),
(246, 'Mariana Pimentel', 'RS', ''),
(247, 'Mariano Moro', 'RS', ''),
(248, 'Marques de Souza', 'RS', ''),
(249, 'Mata', 'RS', ''),
(250, 'Mato Castelhano', 'RS', ''),
(251, 'Mato Leit?o', 'RS', ''),
(252, 'Mato Queimado', 'RS', ''),
(253, 'Maximiliano de Almeida', 'RS', ''),
(254, 'Minas do Le?o', 'RS', ''),
(255, 'Miragua?', 'RS', ''),
(256, 'Montauri', 'RS', ''),
(257, 'Monte Alegre dos Campos', 'RS', ''),
(258, 'Monte Belo do Sul', 'RS', ''),
(259, 'Montenegro', 'RS', ''),
(260, 'Morma?o', 'RS', ''),
(261, 'Morrinhos do Sul', 'RS', ''),
(262, 'Morro Redondo', 'RS', ''),
(263, 'Morro Reuter', 'RS', ''),
(264, 'Mostardas', 'RS', ''),
(265, 'Mu?um', 'RS', ''),
(266, 'Muitos Cap?es', 'RS', ''),
(267, 'Muliterno', 'RS', ''),
(268, 'N?o-Me-Toque', 'RS', ''),
(269, 'Nicolau Vergueiro', 'RS', ''),
(270, 'Nonoai', 'RS', ''),
(271, 'Nova Alvorada', 'RS', ''),
(272, 'Nova Ara??', 'RS', ''),
(273, 'Nova Bassano', 'RS', ''),
(274, 'Nova Boa Vista', 'RS', ''),
(275, 'Nova Br?scia', 'RS', ''),
(276, 'Nova Candel?ria', 'RS', ''),
(277, 'Nova Esperan?a do Sul', 'RS', ''),
(278, 'Nova Hartz', 'RS', ''),
(279, 'Nova P?dua', 'RS', ''),
(280, 'Nova Palma', 'RS', ''),
(281, 'Nova Petr?polis', 'RS', ''),
(282, 'Nova Prata', 'RS', ''),
(283, 'Nova Ramada', 'RS', ''),
(284, 'Nova Roma do Sul', 'RS', ''),
(285, 'Nova Santa Rita', 'RS', ''),
(286, 'Novo Barreiro', 'RS', ''),
(287, 'Novo Cabrais', 'RS', ''),
(288, 'Novo Hamburgo', 'RS', ''),
(289, 'Novo Machado', 'RS', ''),
(290, 'Novo Tiradentes', 'RS', ''),
(291, 'Novo Xingu', 'RS', ''),
(292, 'Os?rio', 'RS', ''),
(293, 'Paim Filho', 'RS', ''),
(294, 'Palmares do Sul', 'RS', ''),
(295, 'Palmeira das Miss?es', 'RS', ''),
(296, 'Palmitinho', 'RS', ''),
(297, 'Panambi', 'RS', ''),
(298, 'Pantano Grande', 'RS', ''),
(299, 'Para?', 'RS', ''),
(300, 'Para?so do Sul', 'RS', ''),
(301, 'Pareci Novo', 'RS', ''),
(302, 'Parob?', 'RS', ''),
(303, 'Passa Sete', 'RS', ''),
(304, 'Passo do Sobrado', 'RS', ''),
(305, 'Passo Fundo', 'RS', ''),
(306, 'Paulo Bento', 'RS', ''),
(307, 'Paverama', 'RS', ''),
(308, 'Pedras Altas', 'RS', ''),
(309, 'Pedro Os?rio', 'RS', ''),
(310, 'Peju?ara', 'RS', ''),
(311, 'Pelotas', 'RS', ''),
(312, 'Picada Caf?', 'RS', ''),
(313, 'Pinhal', 'RS', ''),
(314, 'Pinhal da Serra', 'RS', ''),
(315, 'Pinhal Grande', 'RS', ''),
(316, 'Pinheirinho do Vale', 'RS', ''),
(317, 'Pinheiro Machado', 'RS', ''),
(318, 'Pirap?', 'RS', ''),
(319, 'Piratini', 'RS', ''),
(320, 'Planalto', 'RS', ''),
(321, 'Po?o das Antas', 'RS', ''),
(322, 'Pont?o', 'RS', ''),
(323, 'Ponte Preta', 'RS', ''),
(324, 'Port?o', 'RS', ''),
(325, 'Porto Alegre', 'RS', ''),
(326, 'Porto Lucena', 'RS', ''),
(327, 'Porto Mau?', 'RS', ''),
(328, 'Porto Vera Cruz', 'RS', ''),
(329, 'Porto Xavier', 'RS', ''),
(330, 'Pouso Novo', 'RS', ''),
(331, 'Presidente Lucena', 'RS', ''),
(332, 'Progresso', 'RS', ''),
(333, 'Prot?sio Alves', 'RS', ''),
(334, 'Putinga', 'RS', ''),
(335, 'Quara?', 'RS', ''),
(336, 'Quatro Irm?os', 'RS', ''),
(337, 'Quevedos', 'RS', ''),
(338, 'Quinze de Novembro', 'RS', ''),
(339, 'Redentora', 'RS', ''),
(340, 'Relvado', 'RS', ''),
(341, 'Restinga Seca', 'RS', ''),
(342, 'Rio dos ?ndios', 'RS', ''),
(343, 'Rio Grande', 'RS', ''),
(344, 'Rio Pardo', 'RS', ''),
(345, 'Riozinho', 'RS', ''),
(346, 'Roca Sales', 'RS', ''),
(347, 'Rodeio Bonito', 'RS', ''),
(348, 'Rolador', 'RS', ''),
(349, 'Rolante', 'RS', ''),
(350, 'Ronda Alta', 'RS', ''),
(351, 'Rondinha', 'RS', ''),
(352, 'Roque Gonzales', 'RS', ''),
(353, 'Ros?rio do Sul', 'RS', ''),
(354, 'Sagrada Fam?lia', 'RS', ''),
(355, 'Saldanha Marinho', 'RS', ''),
(356, 'Salto do Jacu?', 'RS', ''),
(357, 'Salvador das Miss?es', 'RS', ''),
(358, 'Salvador do Sul', 'RS', ''),
(359, 'Sananduva', 'RS', ''),
(360, 'Santa B?rbara do Sul', 'RS', ''),
(361, 'Santa Cec?lia do Sul', 'RS', ''),
(362, 'Santa Clara do Sul', 'RS', ''),
(363, 'Santa Cruz do Sul', 'RS', ''),
(364, 'Santa Margarida do Sul', 'RS', ''),
(365, 'Santa Maria', 'RS', ''),
(366, 'Santa Maria do Herval', 'RS', ''),
(367, 'Santa Rosa', 'RS', ''),
(368, 'Santa Tereza', 'RS', ''),
(369, 'Santa Vit?ria do Palmar', 'RS', ''),
(370, 'Santana da Boa Vista', 'RS', ''),
(371, 'Santana do Livramento', 'RS', ''),
(372, 'Santiago', 'RS', ''),
(373, 'Santo ?ngelo', 'RS', ''),
(374, 'Santo Ant?nio da Patrulha', 'RS', ''),
(375, 'Santo Ant?nio das Miss?es', 'RS', ''),
(376, 'Santo Ant?nio do Palma', 'RS', ''),
(377, 'Santo Ant?nio do Planalto', 'RS', ''),
(378, 'Santo Augusto', 'RS', ''),
(379, 'Santo Cristo', 'RS', ''),
(380, 'Santo Expedito do Sul', 'RS', ''),
(381, 'S?o Borja', 'RS', ''),
(382, 'S?o Domingos do Sul', 'RS', ''),
(383, 'S?o Francisco de Assis', 'RS', ''),
(384, 'S?o Francisco de Paula', 'RS', ''),
(385, 'S?o Gabriel', 'RS', ''),
(386, 'S?o Jer?nimo', 'RS', ''),
(387, 'S?o Jo?o da Urtiga', 'RS', ''),
(388, 'S?o Jo?o do Pol?sine', 'RS', ''),
(389, 'S?o Jorge', 'RS', ''),
(390, 'S?o Jos? das Miss?es', 'RS', ''),
(391, 'S?o Jos? do Herval', 'RS', ''),
(392, 'S?o Jos? do Hort?ncio', 'RS', ''),
(393, 'S?o Jos? do Inhacor?', 'RS', ''),
(394, 'S?o Jos? do Norte', 'RS', ''),
(395, 'S?o Jos? do Ouro', 'RS', ''),
(396, 'S?o Jos? do Sul', 'RS', ''),
(397, 'S?o Jos? dos Ausentes', 'RS', ''),
(398, 'S?o Leopoldo', 'RS', ''),
(399, 'S?o Louren?o do Sul', 'RS', ''),
(400, 'S?o Luiz Gonzaga', 'RS', ''),
(401, 'S?o Marcos', 'RS', ''),
(402, 'S?o Martinho', 'RS', ''),
(403, 'S?o Martinho da Serra', 'RS', ''),
(404, 'S?o Miguel das Miss?es', 'RS', ''),
(405, 'S?o Nicolau', 'RS', ''),
(406, 'S?o Paulo das Miss?es', 'RS', ''),
(407, 'S?o Pedro da Serra', 'RS', ''),
(408, 'S?o Pedro das Miss?es', 'RS', ''),
(409, 'S?o Pedro do Buti?', 'RS', ''),
(410, 'S?o Pedro do Sul', 'RS', ''),
(411, 'S?o Sebasti?o do Ca?', 'RS', ''),
(412, 'S?o Sep?', 'RS', ''),
(413, 'S?o Valentim', 'RS', ''),
(414, 'S?o Valentim do Sul', 'RS', ''),
(415, 'S?o Val?rio do Sul', 'RS', ''),
(416, 'S?o Vendelino', 'RS', ''),
(417, 'S?o Vicente do Sul', 'RS', ''),
(418, 'Sapiranga', 'RS', ''),
(419, 'Sapucaia do Sul', 'RS', ''),
(420, 'Sarandi', 'RS', ''),
(421, 'Seberi', 'RS', ''),
(422, 'Sede Nova', 'RS', ''),
(423, 'Segredo', 'RS', ''),
(424, 'Selbach', 'RS', ''),
(425, 'Senador Salgado Filho', 'RS', ''),
(426, 'Sentinela do Sul', 'RS', ''),
(427, 'Serafina Corr?a', 'RS', ''),
(428, 'S?rio', 'RS', ''),
(429, 'Sert?o', 'RS', ''),
(430, 'Sert?o Santana', 'RS', ''),
(431, 'Sete de Setembro', 'RS', ''),
(432, 'Severiano de Almeida', 'RS', ''),
(433, 'Silveira Martins', 'RS', ''),
(434, 'Sinimbu', 'RS', ''),
(435, 'Sobradinho', 'RS', ''),
(436, 'Soledade', 'RS', ''),
(437, 'Taba?', 'RS', ''),
(438, 'Tapejara', 'RS', ''),
(439, 'Tapera', 'RS', ''),
(440, 'Tapes', 'RS', ''),
(441, 'Taquara', 'RS', ''),
(442, 'Taquari', 'RS', ''),
(443, 'Taquaru?u do Sul', 'RS', ''),
(444, 'Tavares', 'RS', ''),
(445, 'Tenente Portela', 'RS', ''),
(446, 'Terra de Areia', 'RS', ''),
(447, 'Teut?nia', 'RS', ''),
(448, 'Tio Hugo', 'RS', ''),
(449, 'Tiradentes do Sul', 'RS', ''),
(450, 'Toropi', 'RS', ''),
(451, 'Torres', 'RS', ''),
(452, 'Tramanda?', 'RS', ''),
(453, 'Travesseiro', 'RS', ''),
(454, 'Tr?s Arroios', 'RS', ''),
(455, 'Tr?s Cachoeiras', 'RS', ''),
(456, 'Tr?s Coroas', 'RS', ''),
(457, 'Tr?s de Maio', 'RS', ''),
(458, 'Tr?s Forquilhas', 'RS', ''),
(459, 'Tr?s Palmeiras', 'RS', ''),
(460, 'Tr?s Passos', 'RS', ''),
(461, 'Trindade do Sul', 'RS', ''),
(462, 'Triunfo', 'RS', ''),
(463, 'Tucunduva', 'RS', ''),
(464, 'Tunas', 'RS', ''),
(465, 'Tupanci do Sul', 'RS', ''),
(466, 'Tupanciret?', 'RS', ''),
(467, 'Tupandi', 'RS', ''),
(468, 'Tuparendi', 'RS', ''),
(469, 'Turu?u', 'RS', ''),
(470, 'Ubiretama', 'RS', ''),
(471, 'Uni?o da Serra', 'RS', ''),
(472, 'Unistalda', 'RS', ''),
(473, 'Uruguaiana', 'RS', ''),
(474, 'Vacaria', 'RS', ''),
(475, 'Vale do Sol', 'RS', ''),
(476, 'Vale Real', 'RS', ''),
(477, 'Vale Verde', 'RS', ''),
(478, 'Vanini', 'RS', ''),
(479, 'Ven?ncio Aires', 'RS', ''),
(480, 'Vera Cruz', 'RS', ''),
(481, 'Veran?polis', 'RS', ''),
(482, 'Vespasiano Correa', 'RS', ''),
(483, 'Viadutos', 'RS', ''),
(484, 'Viam?o', 'RS', ''),
(485, 'Vicente Dutra', 'RS', ''),
(486, 'Victor Graeff', 'RS', ''),
(487, 'Vila Flores', 'RS', ''),
(488, 'Vila L?ngaro', 'RS', ''),
(489, 'Vila Maria', 'RS', ''),
(490, 'Vila Nova do Sul', 'RS', ''),
(491, 'Vista Alegre', 'RS', ''),
(492, 'Vista Alegre do Prata', 'RS', ''),
(493, 'Vista Ga?cha', 'RS', ''),
(494, 'Vit?ria das Miss?es', 'RS', ''),
(495, 'Westf?lia', 'RS', ''),
(496, 'Xangri-l?', 'RS', ''),
(497, 'Pinto Bandeira', 'RS', '');

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
  `senha` varchar(300) NOT NULL,
  `areaDeAtuacao` varchar(100) NOT NULL,
  `experiencia` varchar(1000) NOT NULL,
  `id_formacaoAcademica` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `email`, `senha`, `areaDeAtuacao`, `experiencia`, `id_formacaoAcademica`, `sexo`) VALUES
(3, 'cliente', '940.746.560-86', '2012-08-01', '(51) 999999999', 'Rolante', 'cliente@teste.com', '52e9cdc634b8d3a4db60151b5e068a7f08c0442e865a7662faff9a9d42a069f470cae6d52df46f5e009d3c7968105ad47d8c0895d1b572c399d10a4f4845125b', 'a', 'a', 1, ''),
(4, 'Sla da Silva', '151.518.181-81', '2022-09-01', '(51) 99999-9999', '', 'sla@gmail.com', '26d73d12db3069d2ce13c0605a0ea1578befa1ae861e96780dc78a98f6a0b02235b62555bbeee1fc261d8125ed2bd5854793ac4220c7c87824693a35f04080d8', '', '', 1, 'm'),
(6, 'CJ', '651.681.681-68', '2002-02-02', '(12) 81614-8161', '', 'cj@gmail.com', '26d73d12db3069d2ce13c0605a0ea1578befa1ae861e96780dc78a98f6a0b02235b62555bbeee1fc261d8125ed2bd5854793ac4220c7c87824693a35f04080d8', '', '', 1, 'm');

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
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `endereco`, `cnpj`, `email`, `senha`) VALUES
(1, 'Admin', 'Rolante', '97.049.381/0001-35', 'admin_test001@adm.com', '23841b5c04437ab1164eeb79485845ef145db45fcf8ca4723aea1430f643d0387afbf5e7cc718f54f534fd4190c20335ea45a58214f759e05118cfd43523bea4'),
(2, 'AdminDois', 'Rolante', '97.049.381/0001-35', 'admin_test2@adm.com', '92f5a11ec45ea0a8a1bd615bd8d56cb8811426a8db64bc58738d00f473571225046a2360f00a52e97521ce381b1e382398b6537bc2d9a59a5a5bb83c92312c28'),
(4, 'Ambev', '', '99.999.999/9999-99', 'ambev@gmail.com', '26d73d12db3069d2ce13c0605a0ea1578befa1ae861e96780dc78a98f6a0b02235b62555bbeee1fc261d8125ed2bd5854793ac4220c7c87824693a35f04080d8'),
(5, 'Empresaa', '', '00.000.000/0000-00', 'empresa@gmail.com', '26d73d12db3069d2ce13c0605a0ea1578befa1ae861e96780dc78a98f6a0b02235b62555bbeee1fc261d8125ed2bd5854793ac4220c7c87824693a35f04080d8');

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
(0, 'Sem escolaridade'),
(1, 'Ensino fundamental'),
(2, 'Ensino Médio'),
(3, 'Ensino Superior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `escola_min` varchar(45) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `nome`, `area`, `escola_min`, `descricao`, `quantidade`, `status`, `id_empresa`, `id_cidade`) VALUES
(1, 'Auxiliar', 'Calçados', 'Sem escolaridade', 'trabalho bom', 100, 14, 1, 1),
(2, 'servente', 'serviços', 'Ensino fundamental', 'muito dinheiro', 20, 18, 1, 1),
(5, 'Programador', 'TI', 'Ensino Médio', 'café', 50, 0, 1, 349),
(8, 'Analista', 'TI', 'Ensino Superior', 'aaaa', 33, 0, 1, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `formacaoacademica`
--
ALTER TABLE `formacaoacademica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
