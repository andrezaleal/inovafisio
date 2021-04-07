-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2021 às 22:08
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_mysql_inovafisio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad_usuario`
--

CREATE TABLE `tb_cad_usuario` (
  `cpf` char(14) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `confirm_senha` varchar(220) NOT NULL,
  `ocupacao` varchar(200) NOT NULL,
  `local_trabalho` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cad_usuario`
--

INSERT INTO `tb_cad_usuario` (`cpf`, `nome`, `data_nascimento`, `email`, `senha`, `confirm_senha`, `ocupacao`, `local_trabalho`) VALUES
('1223', 'abreu', '2021-04-16', 'andrezaleal@alu.ufc.br', 'aaa', 'aaa', 'Estudante', 'aaa'),
('12345678798', 'Andreza Deyse Leal de Sousa', '2021-04-07', 'andrezaleal12@gmail.com', 'aaa', 'aaa', 'Estudante', 'aaaa'),
('1234567879810', 'Andreza Deyse Leal de Sousa', '2021-04-08', 'mkt.codijr@gmail.com', 'aaa', 'aaa', 'Estudante', 'aaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id_usuario` int(4) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id_usuario`, `email`, `senha`) VALUES
(3, 'andrezaleal12@gmail.com', 'aaa'),
(8, 'andrezaleal@alu.ufc.br', 'aaa'),
(17, 'mkt.codijr@gmail.com', 'aaa'),
(18, 'mkt.codijr@gmail.com', 'aaa'),
(19, 'mkt.codijr@gmail.com', 'aaa'),
(21, 'mkt.codijr@gmail.com', 'aaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `id_paciente` int(4) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `data_nascimento` date NOT NULL,
  `profissao` varchar(220) NOT NULL,
  `etnia` varchar(220) NOT NULL,
  `naturalidade` varchar(220) NOT NULL,
  `sexo` varchar(14) NOT NULL,
  `estado_civil` varchar(200) NOT NULL,
  `grau_instrucao` varchar(200) NOT NULL,
  `motivo_atendimento` varchar(1000) NOT NULL,
  `data_ocorrido` date NOT NULL,
  `tempo_de_doenca` varchar(100) NOT NULL,
  `regioes_mais_acometidas` varchar(200) NOT NULL,
  `procedimento_cirurgico` varchar(220) NOT NULL,
  `remedios_frequentes` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_paciente`
--

INSERT INTO `tb_paciente` (`id_paciente`, `nome`, `data_nascimento`, `profissao`, `etnia`, `naturalidade`, `sexo`, `estado_civil`, `grau_instrucao`, `motivo_atendimento`, `data_ocorrido`, `tempo_de_doenca`, `regioes_mais_acometidas`, `procedimento_cirurgico`, `remedios_frequentes`) VALUES
(1, 'clessio', '2021-04-07', 'aaa', 'negre', 'brasileire', 'neutre', 'solteire', 'a', 'aaa', '2021-04-07', ' 10 anos', 'braço', 'não', ''),
(2, 'jv', '2021-04-23', 'programer', 'indio', 'brasileire', 'masculine', 'solteire', 'aaaaaa', 'dor de cabeça', '2021-04-02', '2 semanas', 'braço', 'n', ''),
(3, 'bia', '2021-04-01', 'design', 'branque', 'brasileire', 'neutre', 'solteire', 'a', 'aaaa', '2021-04-09', 'aaa', 'aaa', 'aaaa', ''),
(4, 'eduarda', '2021-04-14', 'design', 'negre', 'brasileire', 'neutre', 'solteire', 'a', 'aa', '2021-04-15', ' 10 anos', 'braço', 'não', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questionario_espondilete`
--

CREATE TABLE `tb_questionario_espondilete` (
  `id_questionario` int(4) NOT NULL,
  `questao1` int(2) NOT NULL,
  `questao2` int(2) NOT NULL,
  `questao3` int(2) NOT NULL,
  `questao4` int(11) NOT NULL,
  `questao5` int(2) NOT NULL,
  `questao6` int(2) NOT NULL,
  `questao7` int(2) NOT NULL,
  `questao8` int(2) NOT NULL,
  `questao9` int(2) NOT NULL,
  `questao10` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_questionario_espondilete`
--

INSERT INTO `tb_questionario_espondilete` (`id_questionario`, `questao1`, `questao2`, `questao3`, `questao4`, `questao5`, `questao6`, `questao7`, `questao8`, `questao9`, `questao10`) VALUES
(2, 4, 6, 3, 6, 4, 6, 3, 6, 4, 10),
(3, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questionario_pelvico`
--

CREATE TABLE `tb_questionario_pelvico` (
  `id_questionario` int(4) NOT NULL,
  `condicoes_bexiga` varchar(1000) NOT NULL,
  `condicoes_intestino` varchar(1000) NOT NULL,
  `condicoes_vagina` varchar(1000) NOT NULL,
  `1_bexiga` varchar(60) NOT NULL,
  `1_intestino` varchar(60) NOT NULL,
  `1_vagina` varchar(60) NOT NULL,
  `2_bexiga` varchar(60) NOT NULL,
  `2_intestino` varchar(60) NOT NULL,
  `2_vagina` varchar(60) NOT NULL,
  `3_bexiga` varchar(60) NOT NULL,
  `3_intestino` varchar(60) NOT NULL,
  `3_vagina` varchar(60) NOT NULL,
  `4_bexiga` varchar(60) NOT NULL,
  `4_intestino` varchar(60) NOT NULL,
  `4_vagina` varchar(60) NOT NULL,
  `5_bexiga` varchar(60) NOT NULL,
  `5_intestino` varchar(60) NOT NULL,
  `5_vagina` varchar(60) NOT NULL,
  `6_bexiga` varchar(60) NOT NULL,
  `6_intestino` varchar(60) NOT NULL,
  `6_vagina` varchar(60) NOT NULL,
  `7_bexiga` varchar(60) NOT NULL,
  `7_intestino` varchar(60) NOT NULL,
  `7_vagina` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_questionario_pelvico`
--

INSERT INTO `tb_questionario_pelvico` (`id_questionario`, `condicoes_bexiga`, `condicoes_intestino`, `condicoes_vagina`, `1_bexiga`, `1_intestino`, `1_vagina`, `2_bexiga`, `2_intestino`, `2_vagina`, `3_bexiga`, `3_intestino`, `3_vagina`, `4_bexiga`, `4_intestino`, `4_vagina`, `5_bexiga`, `5_intestino`, `5_vagina`, `6_bexiga`, `6_intestino`, `6_vagina`, `7_bexiga`, `7_intestino`, `7_vagina`) VALUES
(5, 'aaaaa', 'aaaaaaa', 'aaaaaa', 'nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco'),
(11, 'aaaaaa', 'aaaaaaa', 'aaaaaaa', 'nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco', 'Nem um pouco');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cad_usuario`
--
ALTER TABLE `tb_cad_usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `email_fk` (`email`);

--
-- Índices para tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices para tabela `tb_questionario_espondilete`
--
ALTER TABLE `tb_questionario_espondilete`
  ADD PRIMARY KEY (`id_questionario`);

--
-- Índices para tabela `tb_questionario_pelvico`
--
ALTER TABLE `tb_questionario_pelvico`
  ADD PRIMARY KEY (`id_questionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `id_paciente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_questionario_espondilete`
--
ALTER TABLE `tb_questionario_espondilete`
  MODIFY `id_questionario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_questionario_pelvico`
--
ALTER TABLE `tb_questionario_pelvico`
  MODIFY `id_questionario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
