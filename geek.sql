-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Jul-2021 às 12:36
-- Versão do servidor: 8.0.17
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
-- Banco de dados: `geek`
--
CREATE DATABASE IF NOT EXISTS `geek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `geek`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `cod_comp` int(11) NOT NULL,
  `hora_comp` time NOT NULL,
  `data_comp` date NOT NULL,
  `total_comp` float NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`cod_comp`, `hora_comp`, `data_comp`, `total_comp`, `email`, `quantidade`) VALUES
(12, '20:38:18', '2021-05-27', 277, 'adm@adm.com', 6),
(13, '16:33:36', '2021-05-31', 60, 'adm@adm.com', 5),
(14, '18:32:16', '2021-06-11', 70, 'adm@adm.com', 2),
(15, '21:18:58', '2021-07-03', 100, 'gabriel@gmail.com', 5),
(16, '21:48:50', '2021-07-03', 20, 'gabriel@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `console`
--

CREATE TABLE `console` (
  `codConsole` int(11) NOT NULL,
  `nome_console` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `console`
--

INSERT INTO `console` (`codConsole`, `nome_console`) VALUES
(1, 'PS4'),
(3, 'XBOXONE'),
(4, 'Nintendo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `codGenero` int(11) NOT NULL,
  `nome_genero` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`codGenero`, `nome_genero`) VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'Estratégia'),
(4, 'RPG'),
(5, 'Corrida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `cod_jg` int(11) NOT NULL,
  `nome_jg` varchar(20) DEFAULT NULL,
  `empresa_jg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `faixa_etaria` int(11) DEFAULT NULL,
  `ano_lancamento` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `descricao` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`cod_jg`, `nome_jg`, `empresa_jg`, `faixa_etaria`, `ano_lancamento`, `preco`, `imagem`, `descricao`) VALUES
(26, 'God of War', 'Santa Monica Studio', 18, 2018, 20, 'GodofWar2018.jpg', 'God of War é um jogo eletrônico \r\nde ação-aventura apresentado \r\na partir de uma perspectiva \r\nem  terceira pessoa. \r\nO jogo conta com uma \r\njogabilidade muito diferente \r\ndos jogos anteriores e \r\nfoi reconstruído a partir do zero.'),
(159, 'Fallout 4', 'Bethesda Game Studios', 18, 2015, 20, 'Fallout_4.jpg', 'A história principal se passa no ano de 2287, dez anos após os eventos de Fallout 3 e 210 anos após a \"Grande Guerra\", que causou uma devastação nuclear catastrófica nos Estados Unidos .');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogosconsole`
--

CREATE TABLE `jogosconsole` (
  `cod_jg` int(11) NOT NULL,
  `codConsole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogosconsole`
--

INSERT INTO `jogosconsole` (`cod_jg`, `codConsole`) VALUES
(26, 1),
(159, 1),
(159, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogosgenero`
--

CREATE TABLE `jogosgenero` (
  `cod_jg` int(11) NOT NULL,
  `codGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `jogosgenero`
--

INSERT INTO `jogosgenero` (`cod_jg`, `codGenero`) VALUES
(26, 1),
(159, 1),
(26, 2),
(159, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `email` varchar(20) NOT NULL,
  `nome_user` varchar(20) DEFAULT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `senha_user` varchar(50) DEFAULT NULL,
  `sexo_user` varchar(10) DEFAULT NULL,
  `tipo_user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`email`, `nome_user`, `data_de_nascimento`, `senha_user`, `sexo_user`, `tipo_user`) VALUES
('adm@adm.com', 'ADM1', '2003-01-27', '123', 'Masculino', 'adm'),
('aramos@aecaparica.pt', 'Agueda Ramos', '2014-01-15', '123', 'Feminino', 'cliente'),
('gabriel@gmail.com', 'Gabriel', '2001-03-23', '12345678', 'Masculino', 'cliente'),
('gg@gg.com', 'GG', '2001-03-23', '12345678', 'Masculino', 'cliente'),
('hoje@hoje.com', 'hoje', '2003-05-31', '123456', 'Masculino', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`cod_comp`),
  ADD KEY `email` (`email`);

--
-- Índices para tabela `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`codConsole`);

--
-- Índices para tabela `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`codGenero`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`cod_jg`);

--
-- Índices para tabela `jogosconsole`
--
ALTER TABLE `jogosconsole`
  ADD PRIMARY KEY (`cod_jg`,`codConsole`),
  ADD KEY `codConsole` (`codConsole`);

--
-- Índices para tabela `jogosgenero`
--
ALTER TABLE `jogosgenero`
  ADD PRIMARY KEY (`cod_jg`,`codGenero`),
  ADD KEY `codGenero` (`codGenero`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `cod_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `console`
--
ALTER TABLE `console`
  MODIFY `codConsole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `generos`
--
ALTER TABLE `generos`
  MODIFY `codGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `cod_jg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`email`) REFERENCES `utilizadores` (`email`);

--
-- Limitadores para a tabela `jogosconsole`
--
ALTER TABLE `jogosconsole`
  ADD CONSTRAINT `jogosconsole_ibfk_1` FOREIGN KEY (`cod_jg`) REFERENCES `jogos` (`cod_jg`),
  ADD CONSTRAINT `jogosconsole_ibfk_2` FOREIGN KEY (`codConsole`) REFERENCES `console` (`codConsole`);

--
-- Limitadores para a tabela `jogosgenero`
--
ALTER TABLE `jogosgenero`
  ADD CONSTRAINT `jogosgenero_ibfk_1` FOREIGN KEY (`cod_jg`) REFERENCES `jogos` (`cod_jg`),
  ADD CONSTRAINT `jogosgenero_ibfk_2` FOREIGN KEY (`codGenero`) REFERENCES `generos` (`codGenero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
