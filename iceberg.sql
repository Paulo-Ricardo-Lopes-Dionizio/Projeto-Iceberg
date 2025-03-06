-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2023 às 02:59
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iceberg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `icebergs`
--

CREATE TABLE `icebergs` (
  `iceberg_id` int(255) NOT NULL,
  `iceberg_nome` varchar(255) NOT NULL,
  `iceberg_tema` int(5) NOT NULL,
  `iceberg_cmd1` longtext NOT NULL,
  `iceberg_cmd2` longtext NOT NULL,
  `iceberg_cmd3` longtext NOT NULL,
  `iceberg_cmd4` longtext NOT NULL,
  `fk_usuariosID_iceberg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `icebergs`
--

INSERT INTO `icebergs` (`iceberg_id`, `iceberg_nome`, `iceberg_tema`, `iceberg_cmd1`, `iceberg_cmd2`, `iceberg_cmd3`, `iceberg_cmd4`, `fk_usuariosID_iceberg`) VALUES
(10, 'Team Fortess 2', 1, 'a:18:{i:0;s:5:\"2Fort\";i:1;s:13:\"I Fear No Man\";i:2;s:9:\"Announcer\";i:3;s:7:\"Spycrab\";i:4;s:18:\"Capture a bandeira\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:11:\"Stu Pidface\";i:1;s:18:\"slender fortress 2\";i:2;s:12:\"Eltorro64Rus\";i:3;s:14:\"Painis Cupcake\";i:4;s:21:\"Source Code Leaks tf2\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:17:\"Spy is Scouts Dad\";i:1;s:16:\"O cão de guarda\";i:2;s:10:\"Mario_kart\";i:3;s:9:\"Scout.exe\";i:4;s:10:\"Gas Passer\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:19:\"2Fort Real Location\";i:1;s:15:\"Sawmill Cryptid\";i:2;s:19:\"Espião alienígena\";i:3;s:10:\"Frying Pan\";i:4;s:22:\"Heavy in Western Press\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 8),
(12, 'Titanic', 2, 'a:18:{i:0;s:19:\"Botes Insuficientes\";i:1;s:21:\"Capitao afundou junto\";i:2;s:11:\"Inafundavel\";i:3;s:26:\"Hipotermia não afogamento\";i:4;s:16:\"Celine dion song\";i:5;s:25:\"Cale a boca estou ocupado\";i:6;s:30:\"Todos os engenheiros pereceram\";i:7;s:8:\"JJ Astor\";i:8;s:10:\"Ruth beker\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:10:\"337 Corpos\";i:1;s:13:\"Bote numero 2\";i:2;s:23:\"Saved From Titanic 1912\";i:3;s:15:\"Ultima Refeicao\";i:4;s:12:\"SS Frankfurt\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:13:\"Collapsible 2\";i:1;s:19:\"Harold Godfrey Lowe\";i:2;s:23:\"Vigias do RMS inocentes\";i:3;s:14:\"Thomas Andrews\";i:4;s:20:\"Dois barcos voltaram\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:20:\"William John Mellors\";i:1;s:27:\"Henry molson nadou para luz\";i:2;s:29:\"Sobreviventes fora dos barcos\";i:3;s:11:\"John H Ross\";i:4;s:16:\"Greve da Olympic\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 8),
(13, 'Clube Penguin', 1, 'a:18:{i:0;s:4:\"CPPS\";i:1;s:3:\"EPF\";i:2;s:17:\"Virando o iceberg\";i:3;s:17:\"Modelo de Herbert\";i:4;s:9:\"Área 501\";i:5;s:13:\"Puffles raros\";i:6;s:7:\"Sanity1\";i:7;s:12:\"Mullet cinza\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:18:\"Denuncias inúteis\";i:1;s:26:\"Sony tentou comprar o jogo\";i:2;s:14:\"Sensei laranja\";i:3;s:23:\"Cachorros nos pet shops\";i:4;s:17:\"Clã de kunoichis\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:9:\"Snow Cars\";i:1;s:16:\"IA em servidores\";i:2;s:30:\"Doações de Natal eram falsas\";i:3;s:14:\"Glitch do mapa\";i:4;s:12:\"Club Herbert\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 'a:18:{i:0;s:11:\"Club Wedles\";i:1;s:7:\"Teste01\";i:2;s:6:\"Cultos\";i:3;s:40:\"Chapéu de Natal no Experimental Penguin\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:0:\"\";i:16;s:0:\"\";i:17;s:0:\"\";}', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_id` int(100) NOT NULL,
  `usuarios_nome` varchar(60) NOT NULL,
  `usuarios_senha` varchar(255) NOT NULL,
  `usuarios_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarios_id`, `usuarios_nome`, `usuarios_senha`, `usuarios_email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin'),
(8, 'guilherme', '21232f297a57a5a743894a0e4a801fc3', 'guilherme@teste'),
(9, 'paulo', '21232f297a57a5a743894a0e4a801fc3', 'paulo@teste'),
(10, 'fernando', '21232f297a57a5a743894a0e4a801fc3', 'luiz.fernando@teste'),
(11, 'gabriel', '21232f297a57a5a743894a0e4a801fc3', 'gabriel@teste'),
(12, 'murilo', '21232f297a57a5a743894a0e4a801fc3', 'murilo@teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `icebergs`
--
ALTER TABLE `icebergs`
  ADD PRIMARY KEY (`iceberg_id`),
  ADD KEY `fk_icebergs_usuarios` (`fk_usuariosID_iceberg`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `icebergs`
--
ALTER TABLE `icebergs`
  MODIFY `iceberg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `icebergs`
--
ALTER TABLE `icebergs`
  ADD CONSTRAINT `fk_icebergs_usuarios` FOREIGN KEY (`fk_usuariosID_iceberg`) REFERENCES `usuarios` (`usuarios_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
