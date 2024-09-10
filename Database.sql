-- Criação do Banco de Dados | Database Criation --
CREATE DATABASE `sistema_usuario`;

-- Usando o Banco de Dados | Use Database --
USE `sistema_usuario`;

-- Criação da Tabela | Table Criation  --
CREATE TABLE `usuarios` (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    perfil ENUM('admin', 'gestor', 'colaborador') NOT NULL,
    creat_at TIMESTAMP DEFAULT current_timestamp
);