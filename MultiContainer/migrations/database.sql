CREATE DATABASE IF NOT EXISTS `db_test`;

USE db_test;

CREATE TABLE IF NOT EXISTS `users`(
    `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL
);

INSERT INTO users(id, `name`) VALUES(1, "name 1");
INSERT INTO users(id, `name`) VALUES(2, "name 2");