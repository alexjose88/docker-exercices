<?php

// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;

$connectionParams = array(
    'dbname' => 'db_test',
    'user' => getenv("MYSQL_USER"),
    'password' => getenv("MYSQL_PASS"),
    'host' => getenv('MYSQL_HOST'),
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

$statement = $conn->prepare('SELECT id, name FROM users');
$statement->execute();

$users = $statement->fetchAll();

var_dump($users);