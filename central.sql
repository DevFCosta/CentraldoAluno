-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2018 às 05:10
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliação`
--

CREATE TABLE `avaliação` (
  `id_avaliacao` int(11) NOT NULL,
  `bimestre_avaliacao` int(11) DEFAULT NULL,
  `tipo_calculo` float DEFAULT NULL,
  `id_boletim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletim`
--

CREATE TABLE `boletim` (
  `id_boletim` int(11) NOT NULL,
  `nota_mv1` float DEFAULT NULL,
  `nota_mv2` float DEFAULT NULL,
  `nota_rp1` float DEFAULT NULL,
  `nota_rp2` float DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `semestre` char(2) DEFAULT NULL,
  `id_disciplina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(30) DEFAULT NULL,
  `descricao_curso` varchar(30) DEFAULT NULL,
  `numero_periodo` int(11) DEFAULT NULL,
  `carga_horaria` time DEFAULT NULL,
  `hora_aula` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `descrição_ementa` varchar(50) DEFAULT NULL,
  `tipo_atividade` varchar(50) DEFAULT NULL,
  `tempos_semanais` time DEFAULT NULL,
  `nome_disciplina` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_periodo`
--

CREATE TABLE `disciplina_periodo` (
  `id_curso` int(11) DEFAULT NULL,
  `id_disciplina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`, `email`) VALUES
(0000000001, 'Admin', 'admin1234', 'admin@gmail.com'),
(0000000002, 'Filipe', 'fill', 'filipe@gmail.com'),
(0000000003, 'Jessica', 'jessica', 'jessica@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliação`
--
ALTER TABLE `avaliação`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_boletim` (`id_boletim`);

--
-- Indexes for table `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`id_boletim`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `disciplina_periodo`
--
ALTER TABLE `disciplina_periodo`
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliação`
--
ALTER TABLE `avaliação`
  ADD CONSTRAINT `avaliação_ibfk_1` FOREIGN KEY (`id_boletim`) REFERENCES `boletim` (`id_boletim`);

--
-- Limitadores para a tabela `boletim`
--
ALTER TABLE `boletim`
  ADD CONSTRAINT `boletim_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`);

--
-- Limitadores para a tabela `disciplina_periodo`
--
ALTER TABLE `disciplina_periodo`
  ADD CONSTRAINT `disciplina_periodo_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `disciplina_periodo_ibfk_2` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id_disciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
