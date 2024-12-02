-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2024 às 21:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Criar o banco de dados e usá-lo
CREATE DATABASE IF NOT EXISTS `ccz`;
USE `ccz`;

-- Banco de dados: `ccz`

-- --------------------------------------------------------
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `dataAdmissao_funcionario` date NOT NULL,
  `nome_funcionario` varchar(20) NOT NULL,
  `sobrenome_funcionario` varchar(100) NOT NULL,
  `cpf_funcionario` varchar(14) NOT NULL,
  `email_funcionario` varchar(100) NOT NULL,
  `senha_funcionario` varchar(100) NOT NULL,
  `telefone_funcionario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Estrutura para tabela `petadocao`
--

CREATE TABLE `petadocao` (
  `id_petAdocao` int(11) NOT NULL,
  `nome_petAdocao` varchar(20) NOT NULL,
  `descricao_petAdocao` varchar(500) NOT NULL,
  `status_petAdocao` tinyint(1) NOT NULL,
  `especie_petAdocao` varchar(15) NOT NULL,
  `idade_petAdocao` varchar(2) NOT NULL,
  `porte_petAdocao` varchar(8) NOT NULL,
  `sexo_petAdocao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Estrutura para tabela `petusuario`
--

CREATE TABLE `petusuario` (
  `id_petUsuario` int(11) NOT NULL,
  `nome_petUsuario` varchar(20) NOT NULL,
  `fk_id_usuarios` int(11) NOT NULL,
  `especie_petUsuario` varchar(15) NOT NULL,
  `idade_petUsuario` varchar(2) NOT NULL,
  `porte_petUsuario` varchar(8) NOT NULL,
  `sexo_petUsuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Estrutura para tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id_publicacao` int(11) NOT NULL,
  `data_publicacao` date NOT NULL,
  `titulo_publicacao` varchar(20) NOT NULL,
  `fk_id_funcionario` int(11) NOT NULL,
  `conteudo_publicacao` text NOT NULL,
  `imagem_publicacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(20) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `cpf_usuario` varchar(14) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  `telefone_usuario` varchar(100) NOT NULL,
  `fk_id_petusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Índices para tabelas despejadas

-- Índices de tabela `funcionarios`
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`),
  ADD UNIQUE KEY `email_unique` (`email_funcionario`);

-- Índices de tabela `petadocao`
ALTER TABLE `petadocao`
  ADD PRIMARY KEY (`id_petAdocao`);

-- Índices de tabela `petusuario`
ALTER TABLE `petusuario`
  ADD PRIMARY KEY (`id_petUsuario`),
  ADD KEY `fk_id_usuarios` (`fk_id_usuarios`);

-- Índices de tabela `publicacoes`
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id_publicacao`),
  ADD KEY `fk_id_funcionario` (`fk_id_funcionario`);

-- Índices de tabela `usuarios`
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_unico` (`email_usuario`),
  ADD UNIQUE KEY `cpf_usuario` (`cpf_usuario`),
  ADD KEY `fk_id_petusuario` (`fk_id_petusuario`);

-- AUTO_INCREMENT para tabelas despejadas

-- AUTO_INCREMENT de tabela `funcionarios`
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT de tabela `petadocao`
ALTER TABLE `petadocao`
  MODIFY `id_petAdocao` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT de tabela `petusuario`
ALTER TABLE `petusuario`
  MODIFY `id_petUsuario` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT de tabela `publicacoes`
ALTER TABLE `publicacoes`
  MODIFY `id_publicacao` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT de tabela `usuarios`
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

-- Restrições para tabelas despejadas

-- Restrições para tabelas `petusuario`
ALTER TABLE `petusuario`
  ADD CONSTRAINT `petusuario_ibfk_1` FOREIGN KEY (`fk_id_usuarios`) REFERENCES `usuarios` (`id_usuario`);

-- Restrições para tabelas `publicacoes`
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`fk_id_funcionario`) REFERENCES `funcionarios` (`id_funcionario`);

-- Restrições para tabelas `usuarios`
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_id_petusuario`) REFERENCES `petusuario` (`id_petUsuario`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;