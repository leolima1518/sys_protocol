-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Fev-2022 às 02:05
-- Versão do servidor: 8.0.20
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colab`
--

CREATE TABLE `colab` (
  `id_colab` int NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint NOT NULL,
  `celular` bigint NOT NULL,
  `sexo` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `complemento` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_inicial` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `situacao` enum('Ativo','Nao_Ativo') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `colab`
--

INSERT INTO `colab` (`id_colab`, `nome`, `nascimento`, `email`, `senha`, `cpf`, `celular`, `sexo`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `data_inicial`, `situacao`) VALUES
(1, 'LEONARDO DE LIMA', '1998-05-01', 'leonardo@lima.com', '123456', 12345678900, 51999999999, 'Masculino', 'PORTÃO', 'CENTRO', 'Maranhão', 496, 'sala 1', '2022-02-08 21:17:46', 'Nao_Ativo'),
(2, 'LEONARDO DE LIMA', '1998-05-01', 'leonardo@lima.com', '25d55ad283aa400af464c76d713c07ad', 12345678911, 51999999999, 'Masculino', 'PORTÃO', 'CENTRO', 'Maranhão', 647, 'sala 1', '2022-02-08 21:19:45', 'Ativo'),
(3, 'claudia', '1996-01-01', 'claudia@prefa.com', 'e10adc3949ba59abbe56e057f20f883e', 12345678921, 51999999999, 'Feminino', 'PORTÃO', 'CENTRO', 'fddgsdfhdf', 432, 'sala 1', '2022-02-08 22:21:37', 'Ativo'),
(4, 'LEONARDO DE LIMA', '1987-08-07', 'leonardo@lima.com', '25d55ad283aa400af464c76d713c07ad', 12345678345, 123456789, 'Masculino', 'Portão', 'CENTRO', 'maranhao', 432, 'sala 1', '2022-02-08 23:15:40', 'Nao_Ativo'),
(5, 'LEONARDO DE LIMA', '1987-08-07', 'leonardo@lima.com', '25d55ad283aa400af464c76d713c07ad', 12345678345, 123456789, 'Masculino', 'Portão', 'CENTRO', 'maranhao', 432, 'sala 1', '2022-02-09 00:28:33', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nascimento` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint NOT NULL,
  `celular` bigint NOT NULL,
  `sexo` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `complemento` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `nascimento`, `cpf`, `celular`, `sexo`, `cidade`, `bairro`, `rua`, `numero`, `complemento`) VALUES
(1, 'Leonardo de Lima', '1998-05-01', 123123123, 519999999, '\"m\"', 'Portão', 'Centro', 'Maranhão', 496, '-'),
(2, 'Claudia de Lima Costa', '2022-02-09', 2548371000, 51999999999, 'Feminino', 'Portao', 'Centro', 'maranhao', 647, 'sala 1'),
(3, 'LEONARDO DE LIMA', '2018', 12312312215, 51999999999, 'Masculino', 'Portao', 'Centro', 'fddgsdfhdf', 496, '-'),
(4, 'LEONARDO DE LIMA', '2018', 12312312243, 51999999999, 'Masculino', 'Portao', 'Centro', 'fddgsdfhdf', 496, '-'),
(5, 'LEONARDO DE LIMA', '1992', 12312312266, 51999999999, 'Nao_Informado', 'Portao', 'Centro', 'fddgsdfhdf', 432, '-'),
(6, 'LEONARDO DE LIMA', '2019', 12312312312, 51999999999, 'Feminino', 'Portão', 'Centro', 'fddgsdfhdf', 496, '-'),
(7, 'LEONARDO DE LIMA', '1998-05-01', 12312312327, 51999999999, 'Nao_Informado', 'Portao', 'Centro', 'maranhao', 496, 'sala 1'),
(8, 'LEONARDO DE LIMA', '2019', 12312312330, 51999999999, 'Feminino', 'PORTAO', 'Centro', 'fddgsdfhdf', 647, '-'),
(9, 'LEONARDO DE LIMA', '1998-05-01', 12345678910, 51999999999, 'Masculino', 'PORTÃO', 'CENTRO', 'Maranhão', 496, 'sala 1'),
(10, 'LEONARDO DE LIMA', '1988', 1346457586, 12345678889, 'Nao_Informado', 'Portão', 'Centro', 'Maranhão', 496, 'sala 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `id_protocolo` int NOT NULL,
  `codigo_usuario` int NOT NULL,
  `cpf_pessoa` int NOT NULL,
  `data_inicio` timestamp NOT NULL,
  `prazo` date NOT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nome` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `situacao` enum('"Habilitado"','"Desabilitado"') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`, `data`, `situacao`) VALUES
(1, 'Leonardo de Lima', 'leonardo@lima.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-02-07 01:48:33', '\"Habilitado\"'),
(2, 'joao', 'joao@lima.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-02-07 01:54:28', '\"Habilitado\"'),
(4, 'John', 'john@example.com', '12343543', '2022-02-08 17:51:47', '\"Habilitado\"');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `colab`
--
ALTER TABLE `colab`
  ADD PRIMARY KEY (`id_colab`),
  ADD KEY `cpf` (`cpf`) USING BTREE;

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `cpf` (`cpf`) USING BTREE;

--
-- Índices para tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`id_protocolo`),
  ADD KEY `codigo_usuario` (`codigo_usuario`),
  ADD KEY `cpf_pessoa` (`cpf_pessoa`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `colab`
--
ALTER TABLE `colab`
  MODIFY `id_colab` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `id_protocolo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD CONSTRAINT `protocolo_ibfk_1` FOREIGN KEY (`codigo_usuario`) REFERENCES `colab` (`id_colab`),
  ADD CONSTRAINT `protocolo_ibfk_2` FOREIGN KEY (`codigo_usuario`) REFERENCES `colab` (`id_colab`),
  ADD CONSTRAINT `protocolo_ibfk_3` FOREIGN KEY (`cpf_pessoa`) REFERENCES `pessoa` (`id_pessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
