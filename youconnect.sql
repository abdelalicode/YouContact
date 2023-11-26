CREATE DATABASE youconnect;
USE youconnect;

CREATE TABLE User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    date_inscription DATE
);

CREATE TABLE Contact (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    iduser INT,
    FOREIGN KEY (iduser) REFERENCES user (id)
);

ALTER TABLE User
ADD CONSTRAINT unique_username UNIQUE (username);

ALTER TABLE User
MODIFY COLUMN date_inscription TIMESTAMP;