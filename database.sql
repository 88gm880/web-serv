CREATE DATABASE web_serv;
USE web_serv;
CREATE TABLE cliente(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email varchar(250) NOT NULL,
    hash_senha varchar(250) NOT NULL
);
CREATE USER 'userweb123'@'localhost' IDENTIFIED BY 'senhaweb123';
GRANT ALL PRIVILEGES ON 'web_serv' . * TO '3961934_web'@'localhost';
FLUSH PRIVILEGES;
