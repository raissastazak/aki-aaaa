-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2018 às 13:45
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(150) NOT NULL,
  `sobrenome_aluno` varchar(150) NOT NULL,
  `email_aluno` varchar(50) NOT NULL,
  `cpf_aluno` int(50) NOT NULL,
  `data_aluno` date NOT NULL,
  `senha_aluno` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`id_aluno`, `nome_aluno`, `sobrenome_aluno`, `email_aluno`, `cpf_aluno`, `data_aluno`, `senha_aluno`) VALUES
(4, 'Ruan', 'Stazak', 'ruanstazak98@gmail.com', 9487487, '0000-00-00', '92fda2f94ee3716ab19645f7122dfbe1'),
(5, '', '', '', 0, '0000-00-00', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '', '', '', 0, '0000-00-00', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'Ruan', 'reagser', 'ruanstazak98@gmail.com', 0, '0000-00-00', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_material`
--

CREATE TABLE `tb_material` (
  `id_material` int(11) NOT NULL,
  `nome_material` varchar(150) NOT NULL,
  `qtd_material` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_material`
--

INSERT INTO `tb_material` (`id_material`, `nome_material`, `qtd_material`) VALUES
(1, 'taco de baseballl', 3),
(3, 'sla ', 2),
(4, 'rtshrt', 51),
(5, 'taco de baseballl', 2),
(6, 'taco de baseballl', 2),
(7, 'wfw', 74257);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `tb_material`
--
ALTER TABLE `tb_material`
  ADD PRIMARY KEY (`id_material`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_material`
--
ALTER TABLE `tb_material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
