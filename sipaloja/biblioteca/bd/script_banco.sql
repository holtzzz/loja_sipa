/*
DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');
*/

/*sipa loja*/

/* SCRIPT CLIENTE */

	CREATE DATABASE sipaloja;

	USE sipaloja;
	
CREATE TABLE cliente(
	idcliente int NOT NULL AUTO_INCREMENT,
	nome VARCHAR(60) NOT NULL,
	senha VARCHAR(60) NOT NULL,
	email VARCHAR(60) NOT NULL,
        tipoCliente VARCHAR(50) NOT NULL DEFAULT 'user',
	cpf VARCHAR(11) NOT NULL,
	sexo VARCHAR(1) NOT NULL,
	nascimento VARCHAR(10) NOT NULL,
	PRIMARY KEY (idcliente)
);


CREATE TABLE produto(
	idProduto INT(11) NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(30) NOT NULL,
        Preco VARCHAR(20) NOT NULL,
	Descricao VARCHAR(60) NOT NULL,
	Tamanho VARCHAR(60) NOT NULL,
	img VARCHAR(60),
	Categoria VARCHAR(20) NOT NULL,
	Estoquemin INT(5) NOT NULL,
	Estoquemax INT(5) NOT NULL,
	PRIMARY KEY(idProduto)
);


CREATE TABLE cupom(
	idCupom INT(8) NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(20) NOT NULL,
	PRIMARY KEY(idCupom)
);


CREATE TABLE log_produto(
	ID_Log INT(11) NOT NULL AUTO_INCREMENT,
	Tabela VARCHAR(45) NOT NULL,
	Cliente VARCHAR(45) NOT NULL,
	Data_Hora DATETIME NOT NULL,
	Acao VARCHAR(45) NOT NULL,
	Dados VARCHAR(1000) NOT NULL,
	PRIMARY KEY(ID_Log)
);


CREATE TABLE endereco(
	idEndereco INT(11) NOT NULL AUTO_INCREMENT,
	idcliente INT (11) NOT NULL,
	Logra VARCHAR(20) NOT NULL,
	Comp VARCHAR(20),
	Bairro VARCHAR(30) NOT NULL,
	Cidade VARCHAR(30) NOT NULL,
	CEP VARCHAR(8) NOT NULL,
	PRIMARY KEY(idEndereco),
	FOREIGN KEY(idcliente) REFERENCES cliente(idcliente) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE pedido (
	idPedido INT(11) NOT NULL AUTO_INCREMENT,
	idcliente INT(11) NOT NULL,
	idEndereco INT(11) NOT NULL,
	dataCompra DATE NOT NULL,
	PRIMARY KEY(idPedido),
	FOREIGN KEY(idcliente) REFERENCES cliente(idcliente) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(idEndereco) REFERENCES endereco(idEndereco) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE pedido_produto(
	idProduto INT(11) NOT NULL AUTO_INCREMENT,
	idPedido INT(11) NOT NULL,
	Quantidade INT(11) NOT NULL,
	PRIMARY KEY(idProduto, idPedido),
	FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(idPedido) REFERENCES pedido(idPedido) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE estoque(
	idEstoque INT(11) NOT NULL AUTO_INCREMENT,
	idProduto INT(11) NOT NULL,
	Quantidade INT(11) NOT NULL,
	PRIMARY KEY(idEstoque),
	FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE categoria(
idCategoria INT(15) NOT NULL AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
descricao VARCHAR(60) NOT NULL,
primary key(idCategoria)
);

CREATE TABLE FormaPagamento(
    idFormaPagamento INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(45),
    primary key(idFormaPagamento)
);
	
 