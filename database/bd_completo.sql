CREATE DATABASE hospital_autoatendimento,

USE hospital_autoatendimento;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    data_nascimento DATE,
    genero varchar(255),
    telefone VARCHAR(20),
    email VARCHAR(100),
    endereco VARCHAR(150),
    tipo_sanguineo VARCHAR(5),
    peculiaridade BOOLEAN DEFAULT 0,
    descricao_peculiaridade VARCHAR(255)
);

CREATE TABLE atendimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    data_hora_inicio DATETIME NOT NULL,
    prioridade INT DEFAULT 0,
    status VARCHAR(20) DEFAULT 'aberto',

    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE profissionais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especialidade VARCHAR(100),
    registro_profissional VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_atendimento INT NOT NULL,
    id_profissional INT NOT NULL,
    data_hora DATETIME NOT NULL,

    FOREIGN KEY (id_atendimento) REFERENCES atendimentos(id),
    FOREIGN KEY (id_profissional) REFERENCES profissionais(id)
);
