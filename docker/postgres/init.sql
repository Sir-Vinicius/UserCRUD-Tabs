-- Criação da tabela (caso ainda não exista)
CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

-- Inserção de dados de exemplo
INSERT INTO users (name, email, password) VALUES
('Vinicius', 'vinicius@email.com', '123456'),
('Maria', 'maria@email.com', 'senha123'),
('João', 'joao@email.com', 'abc123'),
('Ana', 'ana@email.com', 'pass123'),
('Carlos', 'carlos@email.com', 'secure456'),
('Fernanda', 'fernanda@email.com', 'mypassword'),
('Lucas', 'lucas@email.com', 'qwerty789'),
('Julia', 'julia@email.com', 'password321'),
('Pedro', 'pedro@email.com', 'pedro123'),
('Clara', 'clara@email.com', 'clara456'),
('Rafael', 'rafael@email.com', 'rafael789'),
('Sofia', 'sofia@email.com', 'sofia321'),
('Gabriel', 'gabriel@email.com', 'gabriel654'),
('Laura', 'laura@email.com', 'laura987'),
('Thiago', 'thiago@email.com', 'thiago111'),
('Beatriz', 'beatriz@email.com', 'beatriz222');