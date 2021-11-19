CREATE DATABASE web_serv;
USE web_serv;
CREATE TABLE usuarios(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email varchar(250) NOT NULL,
    hash_senha varchar(250) NOT NULL
);
CREATE USER 'userweb123'@'localhost' IDENTIFIED BY 'senhaweb123';
GRANT ALL PRIVILEGES ON web_serv . * TO 'userweb123'@'localhost';
FLUSH PRIVILEGES;

INSERT INTO usuarios (email, hash_senha) VALUES ('teste@teste', 'teste');
