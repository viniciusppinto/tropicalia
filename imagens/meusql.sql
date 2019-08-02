create database trabalho;
use trabalho;
CREATE TABLE Contato(
idContato INT NOT NULL auto_increment,
nome VARCHAR(50),
senha VARCHAR(12),
email VARCHAR(35),
sexo CHAR(1),
dtNasc CHAR(12),
endereco VARCHAR(100),
numero INTEGER(5),
estado CHAR(2),
cidade VARCHAR(50),
urgencia INTEGER(2),
mensagem TEXT,
checkbox BOOLEAN,
arquivo_extensao VARCHAR(5),
PRIMARY KEY (idContato));