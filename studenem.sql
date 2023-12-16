-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/11/2023 às 19:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `studenem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `anotacaos`
--

CREATE TABLE `anotacaos` (
  `id` int(225) NOT NULL,
  `titulo` text NOT NULL,
  `anotacao` longtext NOT NULL,
  `id_submateria` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `anotacaos`
--

INSERT INTO `anotacaos` (`id`, `titulo`, `anotacao`, `id_submateria`, `id_user`) VALUES
(14, 'sasa', 'Como colocar limite de caracteres no textarea?\r\nEsta função é equivalente a propriedade Maxlength da tag Input. No exemplo a Textarea está limitada a 125 caracteres, porém é muito fácil de personalizar, basta alterar a chamada da função textCounter utilizando no parâmetro maxlimit a quantidade máxima de caracteres permitidos.1 de abr. de 20Como colocar limite de caracteres no textarea?\r\nEsta função é equivalente a propriedade Maxlength da tag Input. No exemplo a Textarea está limitada a 125 caracteres, porém é muito fácil de personalizar, basta alterar a chamada da função textCounter utilizando no parâmetro maxlimit a quantidade máxima de caracteres permitidos.1 de abr. de 20', 3, 0),
(16, 'asdas', 'dasdad', 3, 0),
(17, 'asdasd', 'asdas', 3, 0),
(18, 'OKKK', 'OKKKK', 3, 0),
(19, 'OKKK@', 'OKK@', 3, 0),
(20, 'AAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAA', 4, 0),
(21, 'Verbos', 'asdadada', 9, 0),
(24, 'aa', 'Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto. Outra forma de conceituação é pensar que tudo aquilo que produz um sentido completo, que seja uma mensagem compreensível, é um texto.', 5, 0),
(25, 'Verbos', 'adsafdaf', 3, 7),
(26, 'Verbos 11', '111111111111qq', 17, 7),
(27, 'aaaaaa', 'aaaaaaaaaaaaa', 17, 7),
(28, 'asd', 'adsasd', 17, 7),
(30, 'asd', 'classe::-webkit-scrollbar-track{\r\n	/*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/\r\n	border-radius:0;\r\n	background-color: #D0D4CE;\r\n}\r\n\r\n.classe::-webkit-scrollbar{\r\n	width: 6px;\r\n	background-color: #D0D4CE;\r\n}\r\n\r\n.classe::-webkit-scrollbar-thumb{\r\n	border-radius:0;\r\n	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);\r\n	background-color: #71806B;\r\n}classe::-webkit-scrollbar-track{\r\n	/*-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);*/\r\n	border-radius:0;\r\n	background-color: #D0D4CE;\r\n}\r\n\r\n.classe::-webkit-scrollbar{\r\n	width: 6px;\r\n	background-color: #D0D4CE;\r\n}\r\n\r\n.classe::-webkit-scrollbar-thumb{\r\n	border-radius:0;\r\n	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);\r\n	background-color: #71806B;\r\n}', 17, 7),
(31, 'asdasdsdaad', 'dasdasdasd', 20, 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(255) NOT NULL,
  `nome_materia` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `materias`
--

INSERT INTO `materias` (`id`, `nome_materia`, `id_user`) VALUES
(10, 'Ingles', 7),
(11, 'Matemática', 8),
(14, 'Historia', 7),
(15, 'Física', 7),
(16, 'Redação', 7),
(17, 'Geografia', 7),
(18, 'Português', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sub_materia`
--

CREATE TABLE `sub_materia` (
  `id` int(255) NOT NULL,
  `id_materia` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sub_materia`
--

INSERT INTO `sub_materia` (`id`, `id_materia`, `titulo`, `id_user`) VALUES
(3, 3, 'Ingles', 0),
(5, 4, 'Redação', 0),
(8, 5, 'Funções', 0),
(9, 6, 'Verbos', 0),
(15, 3, 'aa', 0),
(16, 4, 'Verbos', 7),
(17, 10, 'Verbos', 7),
(18, 14, 'Brasil Colonia', 7),
(19, 16, 'Introdução', 7),
(20, 18, 'Redação', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome_user` text NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `senha_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome_user`, `email_user`, `senha_user`) VALUES
(7, 'GG', 'gg@gmail.com', '$2y$10$TAchTTUi5jMZW4o9HBzhJ.wuGjMzLjh7q0Xg/RaHGaSZbSGpCUuK2'),
(8, 'Pedro', 'pedro@gmail.com', '$2y$10$NL1oPVf3loKLlyKFVKc77OCiZgXUBbb1AK91HDoTO91n2xvVqCtVi'),
(9, 'Gabriel', 'aa@gmail.com', '$2y$10$FzWL6RoOQwsLeK1L7YeuFumYr..It3ozihhqV2sWnvXErTIEG6.ri');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `anotacaos`
--
ALTER TABLE `anotacaos`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `anotacaos` ADD FULLTEXT KEY `titulo` (`titulo`);

--
-- Índices de tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sub_materia`
--
ALTER TABLE `sub_materia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anotacaos`
--
ALTER TABLE `anotacaos`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `sub_materia`
--
ALTER TABLE `sub_materia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
