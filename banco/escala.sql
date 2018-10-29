-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2018 às 21:55
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escala_igreja`
--

CREATE TABLE `escala_igreja` (
  `segunda_manha1` varchar(20) NOT NULL,
  `segunda_manha2` varchar(20) NOT NULL,
  `segunda_noite1` varchar(20) NOT NULL,
  `segunda_noite2` varchar(20) NOT NULL,
  `terca_manha1` varchar(20) NOT NULL,
  `terca_manha2` varchar(20) NOT NULL,
  `terca_noite1` varchar(20) NOT NULL,
  `terca_noite2` varchar(20) NOT NULL,
  `quarta_manha1` varchar(20) NOT NULL,
  `quarta_manha2` varchar(20) NOT NULL,
  `quarta_noite1` varchar(20) NOT NULL,
  `quarta_noite2` varchar(20) NOT NULL,
  `quinta_manha1` varchar(20) NOT NULL,
  `quinta_manha2` varchar(20) NOT NULL,
  `quinta_noite1` varchar(20) NOT NULL,
  `quinta_noite2` varchar(20) NOT NULL,
  `sexta_manha1` varchar(20) NOT NULL,
  `sexta_manha2` varchar(20) NOT NULL,
  `sexta_noite1` varchar(20) NOT NULL,
  `sexta_noite2` varchar(20) NOT NULL,
  `sabado_manha1` varchar(20) NOT NULL,
  `sabado_manha2` varchar(20) NOT NULL,
  `sabado_noite1` varchar(20) NOT NULL,
  `sabado_noite2` varchar(20) NOT NULL,
  `sabado_noite3` varchar(20) NOT NULL,
  `sabado_noite4` varchar(20) NOT NULL,
  `domingo_manhaA1` varchar(20) NOT NULL,
  `domingo_manhaA2` varchar(20) NOT NULL,
  `domingo_manhaA3` varchar(20) NOT NULL,
  `domingo_manhaA4` varchar(20) NOT NULL,
  `domingo_manhaB1` varchar(20) NOT NULL,
  `domingo_manhaB2` varchar(20) NOT NULL,
  `domingo_manhaB3` varchar(20) NOT NULL,
  `domingo_manhaB4` varchar(30) NOT NULL,
  `domingo_tarde1` varchar(20) NOT NULL,
  `domingo_tarde2` varchar(20) NOT NULL,
  `domingo_tarde3` varchar(20) NOT NULL,
  `domingo_tarde4` varchar(30) NOT NULL,
  `domingo_noite1` varchar(20) NOT NULL,
  `domingo_noite2` varchar(20) NOT NULL,
  `domingo_noite3` varchar(30) NOT NULL,
  `domingo_noite4` varchar(30) NOT NULL,
  `domingo_capela1` varchar(30) NOT NULL,
  `domingo_capela2` varchar(30) NOT NULL,
  `domingo_capela3` varchar(30) NOT NULL,
  `domingo_capela4` varchar(30) NOT NULL,
  `semana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escala_igreja`
--

INSERT INTO `escala_igreja` (`segunda_manha1`, `segunda_manha2`, `segunda_noite1`, `segunda_noite2`, `terca_manha1`, `terca_manha2`, `terca_noite1`, `terca_noite2`, `quarta_manha1`, `quarta_manha2`, `quarta_noite1`, `quarta_noite2`, `quinta_manha1`, `quinta_manha2`, `quinta_noite1`, `quinta_noite2`, `sexta_manha1`, `sexta_manha2`, `sexta_noite1`, `sexta_noite2`, `sabado_manha1`, `sabado_manha2`, `sabado_noite1`, `sabado_noite2`, `sabado_noite3`, `sabado_noite4`, `domingo_manhaA1`, `domingo_manhaA2`, `domingo_manhaA3`, `domingo_manhaA4`, `domingo_manhaB1`, `domingo_manhaB2`, `domingo_manhaB3`, `domingo_manhaB4`, `domingo_tarde1`, `domingo_tarde2`, `domingo_tarde3`, `domingo_tarde4`, `domingo_noite1`, `domingo_noite2`, `domingo_noite3`, `domingo_noite4`, `domingo_capela1`, `domingo_capela2`, `domingo_capela3`, `domingo_capela4`, `semana`) VALUES
('joao vitor', 'fulano', '', '', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', '', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'fulano', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', 'joao vitor', '', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscrever`
--

CREATE TABLE `inscrever` (
  `id` int(200) NOT NULL,
  `usuario` varchar(240) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `presenca` int(12) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `valor` int(100) NOT NULL,
  `voluntario` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inscrever`
--

INSERT INTO `inscrever` (`id`, `usuario`, `cpf`, `presenca`, `senha`, `email`, `valor`, `voluntario`) VALUES
(3, 'joao vitor', '053.146.681-73', 0, 'e10adc3949ba59abbe56e057f20f883e', 'jvbrito12@hotmail.com', 0, 0),
(4, 'fulano', '365.545.569-97', 0, 'e10adc3949ba59abbe56e057f20f883e', 'fulano@hotmail.com', 0, 0),
(5, 'admin', '053.146.681-73', 0, '0192023a7bbd73250516f069df18b500', 'admin@email.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `escala_igreja`
--
ALTER TABLE `escala_igreja`
  ADD PRIMARY KEY (`semana`);

--
-- Indexes for table `inscrever`
--
ALTER TABLE `inscrever`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presenca` (`presenca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inscrever`
--
ALTER TABLE `inscrever`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
