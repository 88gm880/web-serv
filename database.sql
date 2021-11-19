CREATE DATABASE web_serv;
USE web_serv;

CREATE USER 'userweb123'@'localhost' IDENTIFIED BY 'senhaweb123';
GRANT ALL PRIVILEGES ON web_serv . * TO 'userweb123'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE usuarios(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (250) NOT NULL,
    email varchar(250) NOT NULL,
    hash_senha varchar(250) NOT NULL
);

INSERT INTO usuarios (email, hash_senha, nome) VALUES ('teste@teste', 'teste', 'Joaozinho');

CREATE TABLE receitas(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (250) NOT NULL,
    autor VARCHAR (250),
    preparo TEXT NOT NULL
);

CREATE TABLE ingredientes(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (250) NOT NULL,
    quantidade FLOAT NOT NULL,
    medida VARCHAR(250) NOT NULL
);

CREATE TABLE receita_ingrediente(
    id_receita INTEGER NOT NULL,
    id_ingrediente INTEGER NOT NULL,

    CONSTRAINT pk_receita_ingrediente PRIMARY KEY (id_receita, id_ingrediente),
    CONSTRAINT fk_receita FOREIGN KEY (id_receita) REFERENCES receitas(id),
    CONSTRAINT fk_ingrediente FOREIGN KEY (id_ingrediente) REFERENCES ingredientes(id)
);

INSERT INTO receitas (nome, autor, preparo)
VALUES ("Miojo", "Gustavo",
"Coloque o miojo dentro da panela com a agua fervendo.
Aguarde 5 minutos e veja se o miojo não está duro.
Coloque o tempero e misture."),
       ("Brigadeiro de panela", "Tamara",
"Colocar todos os ingredientes na panela.
Mexer até desgrudar da panela.");

INSERT INTO ingredientes(nome, quantidade, medida)
VALUES ("miojo", 1, "pacote"),
       ("agua", 400, "ml"),
       ("tempero de miojo", 1, "pacote");

INSERT INTO ingredientes(nome, quantidade, medida)
VALUES ("leite condensado", 1, "lata"),
       ("margarina", 2, "colheres"),
       ("achocolatado", 4, "colheres");

INSERT INTO receita_ingrediente (id_receita, id_ingrediente)
VALUES (1,1),
       (1,2),
       (1,3),
       (2, 4),
       (2, 5),
       (2, 6);