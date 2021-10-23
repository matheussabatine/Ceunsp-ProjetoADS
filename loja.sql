-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Tempo de geração: 23-Out-2021 às 20:59
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
('Démerson Cruz', 'Masculino', 'AL', 'delta', 'casa', '11945237392', 'alguem@email.com', 111),
('Eddy Pilantra', 'Masculino', 'RJ', 'interior', 'mistério', '11234567890', 'eddy@pilantra.com', 555),
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itemvenda`
--

CREATE TABLE `tb_itemvenda` (
  `vd_codigo` int(11) DEFAULT NULL,
  `itm_codigo` int(11) NOT NULL,
  `pd_codigo` int(11) DEFAULT NULL,
  `itm_qtde` int(11) DEFAULT NULL,
  `itm_unitario` decimal(14,2) DEFAULT NULL,
  `itm_desconto` decimal(14,2) DEFAULT NULL,
  `itm_total` decimal(14,2) GENERATED ALWAYS AS (`itm_unitario` * `itm_qtde` - `itm_desconto`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_itemvenda`
--

INSERT INTO `tb_itemvenda` (`vd_codigo`, `itm_codigo`, `pd_codigo`, `itm_qtde`, `itm_unitario`, `itm_desconto`) VALUES
(30, 78, 2, 3, '20.00', '0.00'),
(30, 79, 3, 3, '30.00', '0.00'),
(31, 80, 1, 2, '10.00', '0.00'),
(31, 81, 3, 1, '30.00', '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

CREATE TABLE `tb_venda` (
  `vd_codigo` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `vd_data` date DEFAULT NULL,
  `vd_valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_venda`
--

INSERT INTO `tb_venda` (`vd_codigo`, `Email`, `vd_data`, `vd_valor`) VALUES
(30, 'matheussabatine1717@gmail.com', '2021-10-23', '150.00'),
(31, 'lara@email.com', '2021-10-23', '50.00');

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
-- Índices para tabela `tb_itemvenda`
--
ALTER TABLE `tb_itemvenda`
  ADD PRIMARY KEY (`itm_codigo`);

--
-- Índices para tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`vd_codigo`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_itemvenda`
--
ALTER TABLE `tb_itemvenda`
  MODIFY `itm_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `vd_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
