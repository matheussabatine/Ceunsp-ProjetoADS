-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Tempo de geração: 18-Out-2021 às 17:14
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Nome` varchar(60) NOT NULL,
  `Sexo` varchar(20) DEFAULT NULL,
  `Estado` varchar(35) DEFAULT NULL,
  `Cidade` varchar(30) DEFAULT NULL,
  `Endereço` varchar(60) DEFAULT NULL,
  `Celular` varchar(15) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Nome`, `Sexo`, `Estado`, `Cidade`, `Endereço`, `Celular`, `Email`, `Senha`) VALUES
('hata hatão', 'Masculino', 'SP', 'grande salto', 'um endereço', '11234567890', 'hata@animal.com', 11),
('Lara Fernandes Chapéu', 'Feminino', 'AL', 'cidadelândia', 'casa qualquer', '11234567890', 'lara@email.com', 111),
('Matheus Sabatine Lima', 'Masculino', 'SP', 'salto', 'casa maravilhosa', '11234567890', 'matheussabatine1717@gmail.com', 111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `produtonome` varchar(20) NOT NULL,
  `produtotamanho` varchar(3) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `produtonome`, `produtotamanho`, `imagem`, `preco`) VALUES
(1, 'camisa preta', 'P', 'camisa preta.png', 10),
(2, 'camisa azul', 'M', 'camisa azul.jpg', 20),
(3, 'camisa laranja', 'GGG', 'camisa laranja.jpg', 30);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Email`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
