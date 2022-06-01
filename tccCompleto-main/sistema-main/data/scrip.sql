CREATE DATABASE sistema;
USE sistema;

CREATE TABLE tb_produtos(
    id_produto INT AUTO_INCREMENT,
    nome_produto VARCHAR(30),
    descricao_produto VARCHAR(100),
    preco_produto TEXT,
    qtd_produto TEXT,
    PRIMARY KEY(id_produto)
);

CREATE TABLE tb_usuarios(
    id_usuario INT AUTO_INCREMENT,
    nome_usuario VARCHAR(30),
    senha_usuario VARCHAR(32),
    PRIMARY KEY(id_usuario)
);

CREATE TABLE tb_clientes(
    id_cliente INT AUTO_INCREMENT,
    nome_cliente VARCHAR(30),
    endereco_usuario VARCHAR(32),
    dataNasc_cliente DATE,
    rg_cliente TEXT,
    PRIMARY KEY(id_cliente)
);

CREATE TABLE tb_encomendas(
     id_encomenda INT AUTO_INCREMENT,
     id_cliente INT,
     forma_pagamento TEXT,
     data_entrega DATE,
     local_entrega VARCHAR(50),
     preco_total TEXT,
     qtd_produto TEXT,
    PRIMARY KEY(id_encomenda)
);


ALTER TABLE tb_encomendas ADD FOREIGN KEY (id_cliente) REFERENCES  tb_clientes(id_cliente);

INSERT INTO `tb_produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `qtd_produto`) 
VALUES ('1', 'Camiseta', 'Camisa de varias cores', '30.00', '5');

INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `senha_usuario`) 
VALUES ('1', 'bea', '202cb962ac59075b964b07152d234b70');

INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `senha_usuario`) 
VALUES ('2', 'larissa', '202cb962ac59075b964b07152d234b70');

INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `senha_usuario`) 
VALUES ('3', 'nicolas', '202cb962ac59075b964b07152d234b70');

INSERT INTO `tb_clientes` (`id_cliente`, `nome_cliente`, `endereco_usuario`, `dataNasc_cliente`, `rg_cliente`) 
VALUES ('', 'Isadora Moraes', 'Rua Lima, 45', '2004-04-04', '87.382.736-48');


-- INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `senha_usuario`) 
-- VALUES ('1', 'bea', '202cb962ac59075b964b07152d234b70');

-- INSERT INTO `tb_produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `qtd_produto`)
-- VALUES (NULL, ?, ?, ?, ?);