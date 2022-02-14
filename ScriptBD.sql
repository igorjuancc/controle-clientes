CREATE DATABASE IF NOT EXISTS bd_cliente;
USE bd_cliente;

CREATE TABLE tb_cliente(
	id_cliente INT AUTO_INCREMENT PRIMARY KEY,	
	cpf_cliente CHAR(11) NOT NULL,
	nome_cliente VARCHAR(100) NOT NULL,	
	email_cliente VARCHAR(30) NOT NULL,
	data_cliente DATE NOT NULL,
	fone_cliente VARCHAR(11),
	id_endereco INT NOT NULL
);

CREATE TABLE tb_endereco(
	id_endereco INT AUTO_INCREMENT PRIMARY KEY,
	cep_endereco CHAR(8) NOT NULL,
	cidade_endereco VARCHAR(50) NOT NULL,
	bairro_endereco VARCHAR(30) NOT NULL,
	rua_endereco VARCHAR(100) NOT NULL,
	nr_endereco INT NOT NULL,
	estado_endereco CHAR(2) NOT NULL,
	comp_endereco VARCHAR(30)
);

ALTER TABLE tb_cliente ADD CONSTRAINT fk_endereco FOREIGN KEY (id_endereco) REFERENCES tb_endereco (id_endereco);
