-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2020 às 19:25
-- Versão do servidor: 8.0.22
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unipet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultation`
--

CREATE TABLE `consultation` (
  `ID` int NOT NULL,
  `servico` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `data` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `horario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mensagem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ID_users` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `consultation`
--

INSERT INTO `consultation` (`ID`, `servico`, `tel`, `data`, `horario`, `mensagem`, `ID_users`, `created_at`, `updated_at`) VALUES
(1, 'qwe', '123123', '2020-12-01', '123', 'dashduajskdbasd', 2, '2020-12-01 18:14:36', '2020-12-01 18:14:36'),
(2, 'qwe', '123123', '2020-12-01', '123', 'dashduajskdbasd', 2, '2020-12-01 18:20:47', '2020-12-01 18:20:47'),
(3, 'qwe', '123123', '2020-12-01', '123', 'dashduajskdbasd', 2, '2020-12-01 18:25:14', '2020-12-01 18:25:14'),
(4, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:27:01', '2020-12-01 18:27:01'),
(5, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:27:56', '2020-12-01 18:27:56'),
(6, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:28:48', '2020-12-01 18:28:48'),
(7, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:28:57', '2020-12-01 18:28:57'),
(8, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:29:54', '2020-12-01 18:29:54'),
(9, 'Serviço  de banho', '1231231241321', '12/1/2020', '12:30am', '213123123qsdasdasd123esdawe', 9, '2020-12-01 18:29:54', '2020-12-01 18:29:54'),
(10, 'Serviço veterinário', '', '', '12:00am', '', 9, '2020-12-01 18:30:53', '2020-12-01 18:30:53'),
(11, 'Adestração', '3123123243234', '11/30/2020', '12:30am', '321312321323123', 9, '2020-12-01 18:36:30', '2020-12-01 18:36:30'),
(12, 'Serviço de tosa', '2312312312', '12/1/2020', '1:00am', '1231231', 9, '2020-12-01 18:43:03', '2020-12-01 18:43:03'),
(13, 'Serviço de tosa', '412321312312312312312312323123123123', '12/21/2020', '12:00am', 'asdasdasd', 9, '2020-12-01 18:54:15', '2020-12-01 18:54:15'),
(14, 'qwe', '123123', '2020-12-01', '123', 'dashduajskdbasd', 2, '2020-12-01 19:35:08', '2020-12-01 19:35:08'),
(15, 'Serviço veterinário', '12412434452343324', '12/9/2020', '12:30am', 'dsadsadgfdoiouio wefdsfsd sdsc', 9, '2020-12-02 11:36:19', '2020-12-02 11:36:19'),
(16, 'Vacinação', '3243242345234', '12/2/2020', '', 'adsfsddfhdhfgdfg', 9, '2020-12-02 11:39:14', '2020-12-02 11:39:14'),
(17, 'Serviço veterinário', '123132', '12/1/2020', '12:30am', 'asdasdasd', 10, '2020-12-02 13:09:09', '2020-12-02 13:09:09'),
(18, 'Serviço  de banho', 'dasasdasd', '12/2/2020', '12:30am', 'dsadasdasdassadasdasdd', 10, '2020-12-02 13:10:02', '2020-12-02 13:10:02'),
(19, 'Serviço  de banho', 'dasasdasd', '12/2/2020', '', 'dsadasdasdassadasdasddasdasdasdasdassdasdasdasd', 10, '2020-12-02 13:10:17', '2020-12-02 13:10:17'),
(20, 'Serviço de tosa', '34123123123', '12/1/2020', '12:30am', 'axdsbyuiasyucdhbasdyvuasdasdasd', 10, '2020-12-02 13:19:30', '2020-12-02 13:19:30'),
(21, 'Serviço veterinário', '3123123213123', '12/1/2020', '1:00am', 'dsadasdasdasdasd', 9, '2020-12-02 15:06:35', '2020-12-02 15:06:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `nome` varchar(55) DEFAULT NULL,
  `nomepet` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `nome`, `nomepet`, `email`, `senha`, `created_at`) VALUES
(1, 'ewqe', 'wqeeqwe', 'wqeqwe@adasd.com', '123', '2020-11-30 17:42:15'),
(2, NULL, NULL, NULL, NULL, '2020-11-30 17:43:57'),
(3, 'asdasdasdasda', 'asdasdasdasda', 'asdasdasdasda', 'asdasdasdasda', '2020-11-30 20:48:07'),
(4, 'dasdasd', 'dasdasdasdasd', 'das', 'dasdasdasdadfsads', '2020-11-30 20:49:16'),
(5, 'bruno nazareno oliveira silva', 'ewq', 'wqewqeqweeqwe@adasd.com', '$2y$10$0epeUy0InEB.ONzvqgohUeDQJijDjWIy6VV3nIqHFXbZbmgk.clt2', '2020-11-30 20:55:35'),
(6, 'bruno nazareno oliveira silva', 'ewq', 'wdasdasdqewqeqweeqwe@adasd.com', '$2y$10$cyR8aty2qICy88T38oKADOjFiOP8hm8z2ZPT1AHkMvm4IEE7puNvG', '2020-11-30 21:08:29'),
(7, 'bruno nazareno oliveira silva', 'ewq', 'wdasdasdqasdasdasdewqeqweeqwe@adasd.com', '$2y$10$JluYrzaWlcjGapin9zsfveOyy6nV9edU1fjbCF2u3UynK3gQvRV1G', '2020-11-30 21:09:41'),
(8, 'bruno', 'milharal', 'bruno@milharal.com', '$2y$10$VCBPwr/iEc94fva1F3ejpe0y43iMxJ3jiqnPjNYJAvGrybcloyz92', '2020-12-01 11:45:14'),
(9, 'bruno', 'cachorro laravel', 'brulekehhh@gmail.com', '$2y$10$f7MROl91m3Jm4jG4NZvw3.2q5TYxb1wDjy7BQAaezpOFdjzky6sRe', '2020-12-01 11:58:31'),
(10, 'Bruno', 'onurb', 'bruno@bruno.com', '$2y$10$jHk9KDciaKGWTocJ9FBgJeffqLknYW8U/As39v6/RSzZqZutX7PRK', '2020-12-02 13:05:23');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_users` (`ID_users`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consultation`
--
ALTER TABLE `consultation`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`ID_users`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
