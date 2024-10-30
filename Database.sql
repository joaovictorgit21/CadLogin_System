-- Criação do Banco de Dados | Database Criation --
CREATE DATABASE `sistema_usuario`;

-- Usando o Banco de Dados | Use Database --
USE `sistema_usuario`;

-- Criação da Tabela | Table Criation  --
CREATE TABLE `usuarios` (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    profile ENUM('admin', 'gestor', 'colaborador') NOT NULL,
    creat_at TIMESTAMP DEFAULT current_timestamp
);