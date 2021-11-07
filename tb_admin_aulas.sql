-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2021 às 23:05
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

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
-- Estrutura da tabela `tb_admin.aulas`
--

CREATE TABLE `tb_admin.aulas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `link_aula` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.aulas`
--

INSERT INTO `tb_admin.aulas` (`id`, `nome`, `modulo_id`, `link_aula`) VALUES
(2, 'Introdução', 2, 'https://www.youtube.com/embed/oKYW5gKeOWc'),
(3, 'Instalando e Desenvolvendo Softwares', 2, 'https://www.youtube.com/embed/19bn17jNjbs'),
(4, 'Hello Word nos projetos', 2, 'https://www.youtube.com/embed/lun_lTE30E8'),
(5, 'Criando Website Simples', 2, 'https://www.youtube.com/embed/0k23DVv_xsA'),
(6, 'Adicionando código javascript na web', 3, 'https://www.youtube.com/embed/n9v-2xF54HM');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.aulas`
--
ALTER TABLE `tb_admin.aulas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.aulas`
--
ALTER TABLE `tb_admin.aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
